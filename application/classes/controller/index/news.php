<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Новости
 */
class Controller_Index_News extends Controller_Index {

    public function before() {
        parent::before();

        // Выводим в шаблон
        $this->template->block_right = NULL;
    }

    public function action_index() {
        $all_news = ORM::factory('new')->find_all();
        $content = View::factory('index/news/v_news_index', array(
            'all_news' => $all_news,
            )
        );
        
        // Выводим в шаблон
        $this->template->title = 'Новости';
        $this->template->page_title = 'Новости';
        $this->template->block_center = array($content);
    }

    public function action_get() {
        $id = (int) $this->request->param('id');
        $news = ORM::factory('new', $id);

        
        if(!$news->loaded()){
            $this->request->redirect('admin/news');
        }

        $content = View::factory('index/news/v_news_get', array(
                'news' => $news,
            ));


        // Выводим в шаблон
        $this->template->title = $news->title;
        $this->template->page_title = HTML::anchor('news', 'Новости') . " &rarr; ".  $news->title;
        $this->template->block_center = array($content);
    }
}