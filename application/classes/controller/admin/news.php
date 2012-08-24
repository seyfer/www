<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_News extends Controller_Admin {

    public function before() {
        parent::before();

        // Вывод в шаблон
        $this->template->submenu = Widget::load('menupages');
        $this->template->page_title = 'Новости';
    }

    public function action_index() {
        
        $all_news = ORM::factory('new')->find_all();
        $content = View::factory('admin/news/v_news_index', array(
            'all_news' => $all_news,
        ));


        // Вывод в шаблон
        $this->template->block_center = array($content);
    }


    public function action_edit() {

        $id = (int) $this->request->param('id');
        $news = ORM::factory('new', $id);

        if(!$news->loaded()) {
            $this->request->redirect('admin/news');
        }

        $data = $news->as_array();

        // Редактирование
        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('title', 'intro', 'content', 'date'));
            $news->values($data);

            try {
                $news->save();
                $this->request->redirect('admin/news');
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
            }
        }

        $content = View::factory('admin/news/v_news_edit')
                ->bind('id', $id)
                ->bind('errors', $errors)
                ->bind('data', $data);

        // Вывод в шаблон
        $this->template->page_title .= ' :: Редактировать';
        $this->template->block_center = array($content);
    }

    public function action_add() {
        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('title', 'intro', 'content', 'date'));
            $news = ORM::factory('new');
            $news->values($data);

            try {
                $news->save();
                $this->request->redirect('admin/news');
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
            }
        }

        $content = View::factory('admin/news/v_news_add')
                ->bind('errors', $errors)
                ->bind('data', $data);

        // Вывод в шаблон
        $this->template->page_title .= ':: Добавить';
        $this->template->block_center = array($content);
    }

    public function action_delete() {
        $id = (int) $this->request->param('id');
        $pages = ORM::factory('new', $id);

        if(!$page->loaded()) {
            $this->request->redirect('admin/news');
        }

        $pages->delete();
        $this->request->redirect('admin/news');
    }
}