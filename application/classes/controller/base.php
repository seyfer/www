<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Общий базовый класс, самый самый базовый для сайта
 * тут свойства и методы общие для всех контроллеров
 */
class Controller_Base extends Controller_Template {

    protected $user;
    protected $auth;
    protected $cache;
    protected $session;

    //этот метод всегда выполняется первый
    public function before() {
        parent::before();

        //язык для перевода. текст надо в __()
        I18n::lang('ru');
        //получаем из конфига в папке конфиг настройки
        $settings = Kohana::$config->load('settings');
        //соль для шифрования куки
        Cookie::$salt = 'don_koh1212';
        //метод хранения сессий по умолчанию в куках
        Session::$default = 'cookie';
        
        //объявление кеша п оумолчанию
        //$this->cache = Cache::instance('file');
        
        //экземпляр класса авторизации
        $this->auth = Auth::instance();
        //получаем текущего юзера сразу. или null
        $this->user = $this->auth->get_user();
        //запускаем сессию
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
