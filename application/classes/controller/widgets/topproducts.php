<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Лучшие товары"
 */

class Controller_Widgets_Topproducts extends Controller_Widgets {

    public $template = 'widgets/w_topproducts';

    public function action_index()
    {
        // Получаем список категорий
        $products = ORM::factory('product')->limit(3)->find_all();

        foreach ($products as $product)
        {
            $categories[$product->id] = $product->categories->find()->as_array();

            $prod_link[$product->id] = Route::get('catalog')->url('catalog', array(
                'directory'  => 'index',
                'action'     => 'view',
                'controller' => 'catalog',
                'cat'        => $categories[$product->id]['id'],
                'id'         => $product->id,
                    ));
        }

        //echo Debug::vars($categories);

        $this->template->products = $products;
        $this->template->categories = $categories;
        $this->template->prod_link = $prod_link;
    }

}