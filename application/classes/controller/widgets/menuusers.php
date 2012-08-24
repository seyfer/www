<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Меню Пользователи"
 */
class Controller_Widgets_Menuusers extends Controller_Widgets {

    public $template = 'widgets/w_menuusers';    // Шаблон виждета
    
    public function action_index()
    {
        $select = Request::initial()->controller();

        $menu = array(
            'Все' => array('users'),
            'Покупатели' => array('buyers'),
            'Рассылка' => array('subscribe'),
        );

        // Вывод в шаблон
        $this->template->menu = $menu;
        $this->template->select = $select;
    }

}