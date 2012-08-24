<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Меню сайта"
 */
class Controller_Widgets_Menu extends Controller_Widgets {

    public $template = 'widgets/w_menu';    // Шаблон виждета
    
    public function action_index()
    {

        $select = Request::initial()->param('cat');

        // Получаем список категорий
        $categories = ORM::factory('category')->find_all();
        $this->template->categories = $categories;
        $this->template->select = $select;
    }

}