<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Index_Main extends Controller_Index {

    public function action_index()
    {
        //берется что-то на главную.
        $block_center = View::factory('index/main/v_main_index');
        //поиск
        $search = Widget::load('search');
        //популярные продукты
        $topproducts = Widget::load('topproducts');

        // Вывод в шаблон
        $this->template->title = 'Главная';
        //$this->template->page_title = 'О магазине';
        $this->template->block_center = array($topproducts, $block_center );
        $this->template->block_left = Arr::merge( $this->template->block_left, array($search));
    }

}