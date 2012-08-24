<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Payment extends Controller_Index {

    public $robokassa;
    
    public function before()
    {
        parent::before();

        $config = Kohana::$config->load('payments.robokassa');
        $this->robokassa = Robokassa::factory($config['login'], $config['password1'], $config['password2']);
    }

    public function action_index()
    {
        $this->auto_render = FALSE;
        
         if (!$this->auth->logged_in() || $this->session->get('products') == NULL || $this->session->get('sum_delivery') == NULL) {
            $this->request->redirect();
        }

        // Полная стоимость заказа вместе с доставкой
        $order_sum = $this->session->get('sum') + $this->session->get('sum_delivery');

        // Занести заказ в БД
        $orders = ORM::factory('order');
        $orders->user_id = $this->user->id;
        $orders->sum = $order_sum;
        $orders->delivery_id = $this->session->get('delivery_id');
        $orders->date = date('d.m.Y - h:i');
        $orders->status_pay = 0;
        $orders->save();
        $order_id = $orders->pk();
        

        // Добавление продуктов к заказу
        $products_s = $this->session->get('products');
        $products = array_keys($products_s);
        $orders->add('products', $products);

        // Обновление количества купленных товаров
        $order_product = ORM::factory('orderproduct');
                        
        foreach ($products_s as $prod_id => $count)
        {
            $order_product->where('order_id', '=', $order_id)
                    ->and_where('product_id', '=', $prod_id)->find();
            $order_product->count = $count;
            $order_product->update();
            echo $order_product->count;
            $order_product->clear()
            ->save();
        }

        // Удалить товары из корзины
        $this->session->delete('products');
        $this->session->delete('sum');
        $this->session->delete('sum_delivery');
        $this->session->delete('delivery_id');
        
        // Перенаправить на страницу оплаты
        $inv_id = $orders->pk();
        $desc = 'Заказ №' . $inv_id;

        $link = $this->robokassa->get_link($order_sum, $desc, $inv_id);
        $this->request->redirect($link);
    }

    // Получение уведомления об исполнении операции
    public function action_result()
    {
        $this->auto_render = FALSE;

        if ( ! $this->robokassa->is_ordered())
        {
            die("bad sign\n");
        }

        $id_order = $this->robokassa->get_id_order();

        echo "OK$id_order";
    }

    // Проверка параметров в скрипте завершения операции
    public function action_success()
    {
        if ( ! $this->robokassa->is_payed())
        {
            die("bad sign\n");
        }

        // Обновить статус заказа
        $id_order = $this->robokassa->get_id_order();
        $orders = ORM::factory('order', $id_order);
        $orders->status_pay = 1;
        $orders->save();

        $content = View::factory('index/payment/v_payment_success');

        // Вывод в шаблон
        $this->template->title = 'Успешная оплата';
        $this->template->page_title = 'Успешная оплата';
        $this->template->block_center = array($content);
    }

    // Отказ от проведения платежа
    public function action_fail()
    {
        $content = View::factory('index/payment/v_payment_fail');

        // Вывод в шаблон
        $this->template->title = 'Отмена заказа';
        $this->template->page_title = 'Отмена заказа';
        $this->template->block_center = array($content);
    }

}