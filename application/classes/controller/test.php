<?php

class Controller_Test extends Controller_Template {
    
    //protected $auto_render = FALSE;
    
    public $template = 'test.tpl';


    function action_index ()
    {
    
    $content = View::factory('test2.tpl')
            ->set('test', '1111111')
            ->bind('param', $param);
    
    $param = array('style' => 'color:red; font-size:30px;');
    
    $this->template->content = $content;
    
    }
            
}
?>
