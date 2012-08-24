<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Статистика магазина"
 */
class Controller_Widgets_Adminstat extends Controller_Widgets {

    public $template = 'widgets/w_adminstat';    // Шаблон виждета
    
    public function action_index()
    {
        $count['news'] = ORM::factory('new')->count_all();
        $count['products'] = ORM::factory('product')->count_all();

        // Вывод в шаблон
        $this->template->count = $count;
    }

}