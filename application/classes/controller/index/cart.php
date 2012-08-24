<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Корзина
 */
class Controller_Index_Cart extends Controller_Index {

    public function before()
    {
        parent::before();

        // Выводим в шаблон
        $this->template->block_left = null;
        $this->template->block_right = null;
    }

    //страница корзины с выводом выбранных продуктов
    public function action_index()
    {
        //берем то, что хранится в сессии
        $products_s = $this->session->get('products');

        if ($products_s != NULL)
        {
            //если что-т оесть подключаемся к бд
            $products = ORM::factory('product');

            //строим запрос на выборку выбранных продуктов
            foreach($products_s as $id => $count)
            {
                $products->or_where('id', '=', $id);
            }

            //выбираем из бд
            $products = $products->find_all();

            // Формирование корзины
            $cart = array();
            $sum = 0;
            
            //подготовка к выводу в шаблон
            foreach ($products as $product)
            {
                $cart['products'][] = array(
                    'id' => $product->id,
                    'title' => $product->title,
                    'count' => $products_s[$product->id],
                    'cost' => $product->cost,
                );
                
                //считаем общую сумму
                $sum += $product->cost * $products_s[$product->id];
            }
            
            //записываем в сессию
            $cart['sum'] = $sum;
            $this->session->set('sum', $sum);
        }
        else
        {
            $products = NULL;
        }

        //передача в шаблон
        $content = View::factory('index/cart/v_cart_index')
                ->bind('products', $cart['products'])
                ->bind('sum', $cart['sum']);

        // Выводим в шаблон
        $this->template->title = 'Ваша корзина';
        $this->template->page_title = 'Ваша корзина';
        $this->template->block_center = array($content);

    }

    //добавление в корзину
    public function action_add()
    {
        // Получить существующие товары из куков
        $products_s = $this->session->get('products');
        //ид добавляемого товара
        $id = $this->request->param('id');

        if (isset($products_s[$id]))
        {
            //если такой товар уже есть то инкремент
            $products_s[$id]++;
        }
        else
        {
            //иначе он новый
            $products_s[$id] = 1;
        }

        //обратно в сессию
        $this->session->set('products', $products_s);
        //го в корзину
        $this->request->redirect('cart');
    }


    public function action_order()
    {
        //оформление заказа только для зарегистрированных
        if (!$this->auth->logged_in())
        {
            $this->request->redirect('login');
        }

        //методы доставки
        $delivery = ORM::factory('delivery')->find_all();

        //передаем в шаблон доставку и объект юзера
        $content = View::factory('index/cart/v_cart_order', array(
            'delivery' => $delivery,
            'user' => $this->user,
        ));

        // Выводим в шаблон
        $this->template->title = 'Оформление заказа';
        $this->template->page_title = HTML::anchor('cart', 'Ваша корзина') . ' &rarr; ' . 'Оформление заказа';
        $this->template->block_center = array($content);
    }

    //экшн после заполнения данных пользователем, 
    //выдаем их для подтверждения
    public function action_payment()
    {
        //только для зареганых
        if (!$this->auth->logged_in())
        {
            $this->request->redirect('login');
        }

        //получить ид доставки
        $delivery_id = Arr::get($_POST, 'delivery');
        
        //не выбрал доставку - иди гуляй
        if ($delivery_id == NULL)
        {
            $this->request->redirect('cart/order');
        }

        // Обновить адрес покупателя, вдруг ввел новый
        // тут же будут другие данные
        // тут user это ORM из модуля auth
        $users = ORM::factory('user');
        $users->where('id', '=', $this->user->id)
                            ->find()
                            ->update_user($_POST, array(
                                'address',
                            ));

        //данные доставки по ид
        $delivery = ORM::factory('delivery')->where('id', '=', $delivery_id)->find();
        
        //это чтобы передать в оплату
        $this->session->set('sum_delivery', $delivery->cost);
        $this->session->set('delivery_id', $delivery_id);

        //шаблон на подтверждение введенных данных
        $content = View::factory('index/cart/v_cart_pay', array(
            'user' => $this->user,
            'address' => Arr::get($_POST, 'address'),
            'delivery' => $delivery->name,
            'cost_order' => $this->session->get('sum'),
            'cost_delivery' => $delivery->cost,
        ));
        
        // Выводим в шаблон
        $this->template->title = 'Оформление заказа';
        $this->template->page_title = HTML::anchor('cart', 'Ваша корзина') . ' &rarr; ' . HTML::anchor('cart/order', 'Оформление заказа') . ' &rarr; Оплата';
        $this->template->block_center = array($content);
        
    }


}