<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Заказы
 */
class Controller_Admin_Orders extends Controller_Admin {

    public function before() {
        parent::before();

        // Вывод в шаблон
        $this->template->submenu = Widget::load('menuorders');
    }

    public function action_index() {
       
        $content = View::factory('admin/orders/v_orders_index')
                ->bind('orders', $orders)
                ->bind('products', $products)
                ->bind('delivery', $delivery)
                ->bind('users', $users)
                ->bind('orders_products', $orders_products);
        
        $orders = ORM::factory('order')->find_all();
        
        foreach ($orders as $order)
        {
            $users[$order->id] = ORM::factory('user', $order->user_id);            
            $products[$order->id] = $order->products->find_all()->as_array();
            $delivery[$order->id] = $order->delivery->as_array();
            
            //можно было бы через эту модель получить доступ ко всем другим
            $orders_products[$order->id] = ORM::factory('orderproduct')
                    ->where('order_id', '=' , $order->id)
                    ->find()
                    ->as_array();               
        }
        

        // Вывод в шаблон
        $this->template->page_title = 'Заказы';
        $this->template->block_center = array($content);
    }
}