<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Общий базовый класс
 */
class Controller_Base extends Controller_Template {

    protected $user;
    protected $auth;
    protected $cache;
    protected $session;

    public function before() {
        parent::before();

        I18n::lang('ru');
        $settings = Kohana::config('settings');
        Cookie::$salt = 'asd12d2';
        Session::$default = 'cookie';
        
        $this->cache = Cache::instance('file');
        $this->auth = Auth::instance();
        $this->user = $this->auth->get_user();
        $this->session = Session::instance();

        // Вывод в шаблон
        $this->template->site_name = $settings->site_name;
        $this->template->site_description = $settings->site_description;
        $this->template->page_title = null;
        $this->template->title = null;

        // Подключаем стили и скрипты
        $this->template->styles = array();
        $this->template->scripts = array();

        // Подключаем блоки
        $this->template->block_left = null;
        $this->template->block_center = null;
        $this->template->block_right = null;
    }
}
