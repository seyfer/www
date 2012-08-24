<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Каталог
 */
class Controller_Index_Catalog extends Controller_Index {

    public function before() {
        parent::before();
        $this->template->scripts[] = 'media/js/jquery-1.6.2.min.js';
        $this->template->scripts[] = 'media/js/view_images.js';
    }


    public function action_index() {

        // Получаем список продукций
        $categories = ORM::factory('category')->find_all();
        $content = View::factory('index/catalog/v_catalog_index', array(
            'categories' => $categories,
        ));

        // Выводим в шаблон
        $this->template->title = 'Каталог';
        $this->template->page_title = 'Каталог';
        $this->template->block_center = array($content);
        $this->template->block_right = null;

    }

    // Просмотр категории
    public function action_cat() {
        $cat = (int) $this->request->param('cat');
        
        // Виджет поиска
        $search_form = Widget::load('search');

        // Получаем список продукций
        $category = ORM::factory('category')->where('id', '=', $cat)->find();

        if(!$category->loaded()){
            $this->request->redirect();
        }
        
        $products = $category->products->where('status', '!=', 0)->find_all();
        $content = View::factory('index/catalog/v_catalog_cat', array(
            'products' => $products,
            'cat' => $cat,
            'category' => $category,
            'search_form' => $search_form,
        ));
        
        // Выводим в шаблон
        $this->template->title = $category->title;
        $this->template->page_title = $category->title;
        $this->template->block_center = array($content);
        $this->template->block_right = null;
    }

    // Просмотр товара
    public function action_view() {
        //получаем категорию и ид из урла
        $cat = (int) $this->request->param('cat');
        $id = (int) $this->request->param('id');

        $product = ORM::factory('product')->where('id', '=', $id)->and_where('status', '!=', 0)->find();
        $category = ORM::factory('category')->where('id', '=', $cat)->find();
        
        if (!$product->loaded()){
            $this->request->redirect();
        }

        $content = View::factory('index/catalog/v_catalog_view', array(
            'product' => $product,
            'comments' => $product->comments->find_all(),
            'images' => $product->images->find_all(),
            'category' => $category,
        ));

        // Выводим в шаблон

        if ($category->loaded()){
            $this->template->page_title = HTML::anchor('catalog/cat/c'. $category->id, $category->title) . ' &rarr; ' . $product->title;
        }
        else {
            $this->template->page_title = $product->title;
        }
        
        $this->template->title = $product->title;
        $this->template->block_center = array($content);
        $this->template->block_right = null;
    }
}