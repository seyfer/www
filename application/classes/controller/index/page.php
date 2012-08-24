<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Страницы
 */
class Controller_Index_Page extends Controller_Index {

    // Статические страницы
    public function action_index() {
        $page_alias = $this->request->param('page_alias');

        $page = ORM::factory('page')->where('alias', '=', $page_alias)->find();

        if(!$page->loaded() || $page->status == 0) {
            $this->request->redirect();
        }

        $content = View::factory('index/page/v_page_index', array(
            'page' => $page,
        ));
        
        // Выводим в шаблон
        $this->template->title = $page->title;
        $this->template->page_title = $page->title;
        $this->template->block_center = array($content);
    }

    // Контакты
    public function action_contacts() {

        if (isset($_POST['send'])) {
            $data = Arr::extract($_POST, array('name', 'email','text'));
            $admin_email = Kohana::config('settings.admin_email');
            $site_name= Kohana::config('settings.site_name');

            $data['text'] = View::factory('index/page/v_page_contacts');

            $email = Email::factory('Контакты', $data['text'])
                ->to($data['email'], $data['name'])
                ->from($admin_email, $site_name)
                ->send();
        }

        $content = View::factory('index/page/v_page_contacts');

        // Выводим в шаблон
        $this->template->title = 'Контакты';
        $this->template->page_title = 'Контакты';
        $this->template->block_center = array($content);
    }


}