<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Payment extends Controller_Index {

    public $robokassa;

    public function before()
    {
        parent::before();

        $config = Kohana::config('payments.robokassa');
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
        $orders->date = date('d.m.Y - h:i');
        $orders->status = 0;
        $orders->save();


        // Добавление продуктов к заказу
        $products = array_keys($this->session->get('products'));
        $orders->add('products', $products);

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
        $summa = $this->robokassa->get_summa();
        
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
        $orders->status = 1;
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