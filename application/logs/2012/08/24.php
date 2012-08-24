<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-24 06:33:39 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-08-24 06:33:39 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\donbambino.koh\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\donbambino.koh\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('categories')
#3 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 Z:\home\donbambino.koh\www\modules\orm-mptt\classes\kohana\orm\mptt.php(61): Kohana_ORM->__construct(NULL)
#7 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM_MPTT->__construct(NULL)
#8 Z:\home\donbambino.koh\www\application\classes\controller\widgets\menu.php(15): Kohana_ORM::factory('category')
#9 [internal function]: Controller_Widgets_Menu->action_index()
#10 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#11 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\donbambino.koh\www\application\classes\widget.php(83): Kohana_Request->execute()
#14 Z:\home\donbambino.koh\www\application\classes\widget.php(37): Widget->render()
#15 Z:\home\donbambino.koh\www\application\classes\controller\index.php(13): Widget::load('menu')
#16 [internal function]: Controller_Index->before()
#17 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#18 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#21 {main}
2012-08-24 06:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 06:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 06:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 06:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 06:34:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 06:34:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 06:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function.date-default-timezone-set ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 06:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function.date-default-timezone-set ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 06:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 06:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 06:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 06:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 06:38:11 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-08-24 06:38:11 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\donbambino.koh\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\donbambino.koh\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('categories')
#3 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 Z:\home\donbambino.koh\www\modules\orm-mptt\classes\kohana\orm\mptt.php(61): Kohana_ORM->__construct(NULL)
#7 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM_MPTT->__construct(NULL)
#8 Z:\home\donbambino.koh\www\application\classes\controller\widgets\menu.php(15): Kohana_ORM::factory('category')
#9 [internal function]: Controller_Widgets_Menu->action_index()
#10 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#11 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\donbambino.koh\www\application\classes\widget.php(83): Kohana_Request->execute()
#14 Z:\home\donbambino.koh\www\application\classes\widget.php(37): Widget->render()
#15 Z:\home\donbambino.koh\www\application\classes\controller\index.php(13): Widget::load('menu')
#16 [internal function]: Controller_Index->before()
#17 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#18 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#21 {main}
2012-08-24 06:38:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 06:38:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 06:38:45 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-08-24 06:38:45 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\donbambino.koh\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\donbambino.koh\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('categories')
#3 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 Z:\home\donbambino.koh\www\modules\orm-mptt\classes\kohana\orm\mptt.php(61): Kohana_ORM->__construct(NULL)
#7 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM_MPTT->__construct(NULL)
#8 Z:\home\donbambino.koh\www\application\classes\controller\widgets\menu.php(15): Kohana_ORM::factory('category')
#9 [internal function]: Controller_Widgets_Menu->action_index()
#10 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#11 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\donbambino.koh\www\application\classes\widget.php(83): Kohana_Request->execute()
#14 Z:\home\donbambino.koh\www\application\classes\widget.php(37): Widget->render()
#15 Z:\home\donbambino.koh\www\application\classes\controller\index.php(13): Widget::load('menu')
#16 [internal function]: Controller_Index->before()
#17 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#18 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#21 {main}
2012-08-24 06:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 06:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 06:38:56 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.hay_categories' doesn't exist [ SHOW FULL COLUMNS FROM `hay_categories` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-24 06:38:56 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.hay_categories' doesn't exist [ SHOW FULL COLUMNS FROM `hay_categories` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\donbambino.koh\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('categories')
#2 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 Z:\home\donbambino.koh\www\modules\orm-mptt\classes\kohana\orm\mptt.php(61): Kohana_ORM->__construct(NULL)
#6 Z:\home\donbambino.koh\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM_MPTT->__construct(NULL)
#7 Z:\home\donbambino.koh\www\application\classes\controller\widgets\menu.php(15): Kohana_ORM::factory('category')
#8 [internal function]: Controller_Widgets_Menu->action_index()
#9 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#10 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\donbambino.koh\www\application\classes\widget.php(83): Kohana_Request->execute()
#13 Z:\home\donbambino.koh\www\application\classes\widget.php(37): Widget->render()
#14 Z:\home\donbambino.koh\www\application\classes\controller\index.php(13): Widget::load('menu')
#15 [internal function]: Controller_Index->before()
#16 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#17 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#18 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#19 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#20 {main}
2012-08-24 06:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 06:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 06:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 06:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 06:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 06:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 06:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 06:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 06:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 06:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 06:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 06:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 06:46:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 06:46:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 06:46:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 06:46:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 06:46:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 06:46:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 06:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 06:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:07:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:07:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:07:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:07:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:07:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:07:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:07:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:07:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:52:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:52:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:54:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:54:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:55:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:55:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 07:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 07:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:00:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$categories ~ APPPATH\classes\controller\widgets\topproducts.php [ 13 ]
2012-08-24 08:00:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$categories ~ APPPATH\classes\controller\widgets\topproducts.php [ 13 ]
--
#0 Z:\home\donbambino.koh\www\application\classes\controller\widgets\topproducts.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\donbamb...', 13, Array)
#1 [internal function]: Controller_Widgets_Topproducts->action_index()
#2 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widgets_Topproducts))
#3 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\donbambino.koh\www\application\classes\widget.php(83): Kohana_Request->execute()
#6 Z:\home\donbambino.koh\www\application\classes\widget.php(37): Widget->render()
#7 Z:\home\donbambino.koh\www\application\classes\controller\index\main.php(14): Widget::load('topproducts')
#8 [internal function]: Controller_Index_Main->action_index()
#9 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#10 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-24 08:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:01:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$categories ~ APPPATH\classes\controller\widgets\topproducts.php [ 13 ]
2012-08-24 08:01:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$categories ~ APPPATH\classes\controller\widgets\topproducts.php [ 13 ]
--
#0 Z:\home\donbambino.koh\www\application\classes\controller\widgets\topproducts.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\donbamb...', 13, Array)
#1 [internal function]: Controller_Widgets_Topproducts->action_index()
#2 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widgets_Topproducts))
#3 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\donbambino.koh\www\application\classes\widget.php(83): Kohana_Request->execute()
#6 Z:\home\donbambino.koh\www\application\classes\widget.php(37): Widget->render()
#7 Z:\home\donbambino.koh\www\application\classes\controller\index\main.php(14): Widget::load('topproducts')
#8 [internal function]: Controller_Index_Main->action_index()
#9 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#10 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-24 08:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:01:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$categories ~ APPPATH\classes\controller\widgets\topproducts.php [ 16 ]
2012-08-24 08:01:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$categories ~ APPPATH\classes\controller\widgets\topproducts.php [ 16 ]
--
#0 Z:\home\donbambino.koh\www\application\classes\controller\widgets\topproducts.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\donbamb...', 16, Array)
#1 [internal function]: Controller_Widgets_Topproducts->action_index()
#2 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widgets_Topproducts))
#3 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\donbambino.koh\www\application\classes\widget.php(83): Kohana_Request->execute()
#6 Z:\home\donbambino.koh\www\application\classes\widget.php(37): Widget->render()
#7 Z:\home\donbambino.koh\www\application\classes\controller\index\main.php(14): Widget::load('topproducts')
#8 [internal function]: Controller_Index_Main->action_index()
#9 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#10 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-24 08:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:01:46 --- ERROR: ErrorException [ 8 ]: Use of undefined constant categories - assumed 'categories' ~ APPPATH\classes\controller\widgets\topproducts.php [ 19 ]
2012-08-24 08:01:46 --- STRACE: ErrorException [ 8 ]: Use of undefined constant categories - assumed 'categories' ~ APPPATH\classes\controller\widgets\topproducts.php [ 19 ]
--
#0 Z:\home\donbambino.koh\www\application\classes\controller\widgets\topproducts.php(19): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\donbamb...', 19, Array)
#1 [internal function]: Controller_Widgets_Topproducts->action_index()
#2 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widgets_Topproducts))
#3 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\donbambino.koh\www\application\classes\widget.php(83): Kohana_Request->execute()
#6 Z:\home\donbambino.koh\www\application\classes\widget.php(37): Widget->render()
#7 Z:\home\donbambino.koh\www\application\classes\controller\index\main.php(14): Widget::load('topproducts')
#8 [internal function]: Controller_Index_Main->action_index()
#9 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#10 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-24 08:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:03:22 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\widgets\w_topproducts.php [ 7 ]
2012-08-24 08:03:22 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\widgets\w_topproducts.php [ 7 ]
--
#0 Z:\home\donbambino.koh\www\application\views\widgets\w_topproducts.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\donbamb...', 7, Array)
#1 Z:\home\donbambino.koh\www\system\classes\kohana\view.php(61): include('Z:\home\donbamb...')
#2 Z:\home\donbambino.koh\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\donbamb...', Array)
#3 Z:\home\donbambino.koh\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Widgets_Topproducts))
#6 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\donbambino.koh\www\application\classes\widget.php(83): Kohana_Request->execute()
#9 Z:\home\donbambino.koh\www\application\classes\widget.php(37): Widget->render()
#10 Z:\home\donbambino.koh\www\application\classes\controller\index\main.php(14): Widget::load('topproducts')
#11 [internal function]: Controller_Index_Main->action_index()
#12 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#13 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#16 {main}
2012-08-24 08:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:04:22 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\widgets\w_topproducts.php [ 7 ]
2012-08-24 08:04:22 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\widgets\w_topproducts.php [ 7 ]
--
#0 Z:\home\donbambino.koh\www\application\views\widgets\w_topproducts.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\donbamb...', 7, Array)
#1 Z:\home\donbambino.koh\www\system\classes\kohana\view.php(61): include('Z:\home\donbamb...')
#2 Z:\home\donbambino.koh\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\donbamb...', Array)
#3 Z:\home\donbambino.koh\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Widgets_Topproducts))
#6 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\donbambino.koh\www\application\classes\widget.php(83): Kohana_Request->execute()
#9 Z:\home\donbambino.koh\www\application\classes\widget.php(37): Widget->render()
#10 Z:\home\donbambino.koh\www\application\classes\controller\index\main.php(14): Widget::load('topproducts')
#11 [internal function]: Controller_Index_Main->action_index()
#12 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#13 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#16 {main}
2012-08-24 08:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:04:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:04:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:05:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:05:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:05:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:05:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:06:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:06:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:07:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:07:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:09:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:09:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:09:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:09:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:09:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:09:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:10:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:10:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:10:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:10:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 08:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 08:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-24 09:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-24 09:15:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:15:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:15:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-24 09:15:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-24 09:15:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:15:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:16:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:16:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:17:09 --- ERROR: View_Exception [ 0 ]: The requested view test.tpl could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-08-24 09:17:09 --- STRACE: View_Exception [ 0 ]: The requested view test.tpl could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\donbambino.koh\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('test.tpl')
#1 Z:\home\donbambino.koh\www\system\classes\kohana\view.php(30): Kohana_View->__construct('test.tpl', NULL)
#2 Z:\home\donbambino.koh\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('test.tpl')
#3 [internal function]: Kohana_Controller_Template->before()
#4 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Test))
#5 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-24 09:17:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:17:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:17:23 --- ERROR: View_Exception [ 0 ]: The requested view test.tpl could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-08-24 09:17:23 --- STRACE: View_Exception [ 0 ]: The requested view test.tpl could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\donbambino.koh\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('test.tpl')
#1 Z:\home\donbambino.koh\www\system\classes\kohana\view.php(30): Kohana_View->__construct('test.tpl', NULL)
#2 Z:\home\donbambino.koh\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('test.tpl')
#3 [internal function]: Kohana_Controller_Template->before()
#4 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Test))
#5 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-24 09:17:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:17:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:18:37 --- ERROR: Kohana_View_Exception [ 0 ]: The requested view views/test2.tpl could not be found ~ MODPATH\smarty\classes\smarty\view.php [ 340 ]
2012-08-24 09:18:37 --- STRACE: Kohana_View_Exception [ 0 ]: The requested view views/test2.tpl could not be found ~ MODPATH\smarty\classes\smarty\view.php [ 340 ]
--
#0 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(79): Smarty_View->set_filename('views/test2.tpl')
#1 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(211): Smarty_View->__construct('views/test2.tpl', NULL)
#2 Z:\home\donbambino.koh\www\modules\smarty\classes\view.php(75): Smarty_View::factory('views/test2.tpl', NULL)
#3 Z:\home\donbambino.koh\www\application\classes\controller\test.php(13): View::factory('views/test2.tpl')
#4 [internal function]: Controller_Test->action_index()
#5 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#6 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-24 09:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:21:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:21:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:22:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:22:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:22:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:22:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:23:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:23:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:24:38 --- ERROR: SmartyCompilerException [ 0 ]: Syntax Error in template "Z:\home\donbambino.koh\www\application\views\test2.tpl"  on line 3 "{assign var=foo value=html::anchor('/test', 'test', array('style' =&gt; 'color:red; font-size:30px;'))}"  - Unexpected " => ", expected one of: "","" , ")" ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 617 ]
2012-08-24 09:24:38 --- STRACE: SmartyCompilerException [ 0 ]: Syntax Error in template "Z:\home\donbambino.koh\www\application\views\test2.tpl"  on line 3 "{assign var=foo value=html::anchor('/test', 'test', array('style' =&gt; 'color:red; font-size:30px;'))}"  - Unexpected " => ", expected one of: "","" , ")" ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 617 ]
--
#0 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3107): Smarty_Internal_TemplateCompilerBase->trigger_template_error()
#1 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3172): Smarty_Internal_Templateparser->yy_syntax_error(30, ' => ')
#2 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_smartytemplatecompiler.php(105): Smarty_Internal_Templateparser->doParse(30, ' => ')
#3 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(171): Smarty_Internal_SmartyTemplateCompiler->doCompile('{$test}????{ass...')
#4 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_template.php(187): Smarty_Internal_TemplateCompilerBase->compileTemplate(Object(Smarty_Internal_Template))
#5 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(164): Smarty_Internal_Template->compileTemplateSource()
#6 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(375): Smarty_Internal_TemplateBase->fetch('Z:\home\donbamb...')
#7 Z:\home\donbambino.koh\www\system\classes\kohana\view.php(228): Smarty_View->render()
#8 Z:\home\donbambino.koh\www\application\cache\smarty_compiled\0027d9ea2516fc6a35afc7ad92ed9e4d0c23cb64.file.test.tpl.php(26): Kohana_View->__toString()
#9 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(176): content_50370efa6107e(Object(Smarty_Internal_Template))
#10 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(375): Smarty_Internal_TemplateBase->fetch('Z:\home\donbamb...')
#11 Z:\home\donbambino.koh\www\system\classes\kohana\controller\template.php(44): Smarty_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Test))
#14 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#17 {main}
2012-08-24 09:24:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:24:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:25:51 --- ERROR: SmartyCompilerException [ 0 ]: Syntax Error in template "Z:\home\donbambino.koh\www\application\views\test2.tpl"  on line 3 "{assign var=foo value=html::anchor('/test', 'test', $par['style'] = 'color:red; font-size:30px;'))}"  - Unexpected " = ", expected one of: "","" , ")" ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 617 ]
2012-08-24 09:25:51 --- STRACE: SmartyCompilerException [ 0 ]: Syntax Error in template "Z:\home\donbambino.koh\www\application\views\test2.tpl"  on line 3 "{assign var=foo value=html::anchor('/test', 'test', $par['style'] = 'color:red; font-size:30px;'))}"  - Unexpected " = ", expected one of: "","" , ")" ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 617 ]
--
#0 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3107): Smarty_Internal_TemplateCompilerBase->trigger_template_error()
#1 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3172): Smarty_Internal_Templateparser->yy_syntax_error(19, ' = ')
#2 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_smartytemplatecompiler.php(105): Smarty_Internal_Templateparser->doParse(19, ' = ')
#3 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(171): Smarty_Internal_SmartyTemplateCompiler->doCompile('{$test}????{ass...')
#4 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_template.php(187): Smarty_Internal_TemplateCompilerBase->compileTemplate(Object(Smarty_Internal_Template))
#5 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(164): Smarty_Internal_Template->compileTemplateSource()
#6 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(375): Smarty_Internal_TemplateBase->fetch('Z:\home\donbamb...')
#7 Z:\home\donbambino.koh\www\system\classes\kohana\view.php(228): Smarty_View->render()
#8 Z:\home\donbambino.koh\www\application\cache\smarty_compiled\0027d9ea2516fc6a35afc7ad92ed9e4d0c23cb64.file.test.tpl.php(26): Kohana_View->__toString()
#9 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(176): content_50370efa6107e(Object(Smarty_Internal_Template))
#10 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(375): Smarty_Internal_TemplateBase->fetch('Z:\home\donbamb...')
#11 Z:\home\donbambino.koh\www\system\classes\kohana\controller\template.php(44): Smarty_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Test))
#14 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#17 {main}
2012-08-24 09:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:26:28 --- ERROR: SmartyCompilerException [ 0 ]: Syntax Error in template "Z:\home\donbambino.koh\www\application\views\test2.tpl"  on line 3 "{assign var=foo value=html::anchor('/test', 'test', {literal}array('style' =&gt; 'color:red; font-size:30px;'){/literal})}" unknown tag "literal" ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 617 ]
2012-08-24 09:26:28 --- STRACE: SmartyCompilerException [ 0 ]: Syntax Error in template "Z:\home\donbambino.koh\www\application\views\test2.tpl"  on line 3 "{assign var=foo value=html::anchor('/test', 'test', {literal}array('style' =&gt; 'color:red; font-size:30px;'){/literal})}" unknown tag "literal" ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 617 ]
--
#0 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(402): Smarty_Internal_TemplateCompilerBase->trigger_template_error('unknown tag "li...', 3)
#1 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(2371): Smarty_Internal_TemplateCompilerBase->compileTag('literal', Array)
#2 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3064): Smarty_Internal_Templateparser->yy_r36()
#3 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3164): Smarty_Internal_Templateparser->yy_reduce(36)
#4 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_smartytemplatecompiler.php(105): Smarty_Internal_Templateparser->doParse(18, 'array')
#5 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(171): Smarty_Internal_SmartyTemplateCompiler->doCompile('{$test}????{ass...')
#6 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_template.php(187): Smarty_Internal_TemplateCompilerBase->compileTemplate(Object(Smarty_Internal_Template))
#7 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(164): Smarty_Internal_Template->compileTemplateSource()
#8 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(375): Smarty_Internal_TemplateBase->fetch('Z:\home\donbamb...')
#9 Z:\home\donbambino.koh\www\system\classes\kohana\view.php(228): Smarty_View->render()
#10 Z:\home\donbambino.koh\www\application\cache\smarty_compiled\0027d9ea2516fc6a35afc7ad92ed9e4d0c23cb64.file.test.tpl.php(26): Kohana_View->__toString()
#11 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(176): content_50370efa6107e(Object(Smarty_Internal_Template))
#12 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(375): Smarty_Internal_TemplateBase->fetch('Z:\home\donbamb...')
#13 Z:\home\donbambino.koh\www\system\classes\kohana\controller\template.php(44): Smarty_View->render()
#14 [internal function]: Kohana_Controller_Template->after()
#15 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Test))
#16 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#19 {main}
2012-08-24 09:26:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:26:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:27:30 --- ERROR: SmartyCompilerException [ 0 ]: Syntax Error in template "Z:\home\donbambino.koh\www\application\views\test2.tpl"  on line 3 "{assign var=foo value=html::anchor('/test', 'test', )}"  - Unexpected ")" ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 617 ]
2012-08-24 09:27:30 --- STRACE: SmartyCompilerException [ 0 ]: Syntax Error in template "Z:\home\donbambino.koh\www\application\views\test2.tpl"  on line 3 "{assign var=foo value=html::anchor('/test', 'test', )}"  - Unexpected ")" ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 617 ]
--
#0 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3107): Smarty_Internal_TemplateCompilerBase->trigger_template_error()
#1 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3172): Smarty_Internal_Templateparser->yy_syntax_error(37, ')')
#2 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_smartytemplatecompiler.php(105): Smarty_Internal_Templateparser->doParse(37, ')')
#3 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(171): Smarty_Internal_SmartyTemplateCompiler->doCompile('{$test}????{ass...')
#4 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_template.php(187): Smarty_Internal_TemplateCompilerBase->compileTemplate(Object(Smarty_Internal_Template))
#5 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(164): Smarty_Internal_Template->compileTemplateSource()
#6 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(375): Smarty_Internal_TemplateBase->fetch('Z:\home\donbamb...')
#7 Z:\home\donbambino.koh\www\system\classes\kohana\view.php(228): Smarty_View->render()
#8 Z:\home\donbambino.koh\www\application\cache\smarty_compiled\0027d9ea2516fc6a35afc7ad92ed9e4d0c23cb64.file.test.tpl.php(26): Kohana_View->__toString()
#9 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(176): content_50370efa6107e(Object(Smarty_Internal_Template))
#10 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(375): Smarty_Internal_TemplateBase->fetch('Z:\home\donbamb...')
#11 Z:\home\donbambino.koh\www\system\classes\kohana\controller\template.php(44): Smarty_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Test))
#14 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#17 {main}
2012-08-24 09:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:28:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:28:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-24 09:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-24 09:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:35:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:35:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:35:24 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 61 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-24 09:35:24 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 61 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\donbamb...', 392, Array)
#1 Z:\home\donbambino.koh\www\system\classes\kohana\route.php(392): preg_match('#^test(?:/(?P<a...', '', NULL)
#2 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(567): Kohana_Route->matches('')
#3 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(785): Kohana_Request::process_uri('', Array)
#4 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(198): Kohana_Request->__construct('', NULL)
#5 Z:\home\donbambino.koh\www\index.php(108): Kohana_Request::factory()
#6 {main}
2012-08-24 09:35:24 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 61 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-24 09:35:24 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 61 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\donbamb...', 392, Array)
#1 Z:\home\donbambino.koh\www\system\classes\kohana\route.php(392): preg_match('#^test(?:/(?P<a...', 'favicon.ico', NULL)
#2 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(567): Kohana_Route->matches('favicon.ico')
#3 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(785): Kohana_Request::process_uri('favicon.ico', Array)
#4 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(198): Kohana_Request->__construct('/favicon.ico', NULL)
#5 Z:\home\donbambino.koh\www\index.php(108): Kohana_Request::factory()
#6 {main}
2012-08-24 09:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:42:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:42:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:42:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:42:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:43:02 --- ERROR: SmartyCompilerException [ 0 ]: Syntax Error in template "Z:\home\donbambino.koh\www\application\views\test2.tpl"  on line 6 "{html::anchor('/test', 'test', array('' =&gt; ''))}"  - Unexpected " => ", expected one of: "","" , ")" ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 617 ]
2012-08-24 09:43:02 --- STRACE: SmartyCompilerException [ 0 ]: Syntax Error in template "Z:\home\donbambino.koh\www\application\views\test2.tpl"  on line 6 "{html::anchor('/test', 'test', array('' =&gt; ''))}"  - Unexpected " => ", expected one of: "","" , ")" ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 617 ]
--
#0 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3107): Smarty_Internal_TemplateCompilerBase->trigger_template_error()
#1 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3172): Smarty_Internal_Templateparser->yy_syntax_error(30, ' => ')
#2 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_smartytemplatecompiler.php(105): Smarty_Internal_Templateparser->doParse(30, ' => ')
#3 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(171): Smarty_Internal_SmartyTemplateCompiler->doCompile('{$test}????{*as...')
#4 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_template.php(187): Smarty_Internal_TemplateCompilerBase->compileTemplate(Object(Smarty_Internal_Template))
#5 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(164): Smarty_Internal_Template->compileTemplateSource()
#6 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(375): Smarty_Internal_TemplateBase->fetch('Z:\home\donbamb...')
#7 Z:\home\donbambino.koh\www\system\classes\kohana\view.php(228): Smarty_View->render()
#8 Z:\home\donbambino.koh\www\application\cache\smarty_compiled\0027d9ea2516fc6a35afc7ad92ed9e4d0c23cb64.file.test.tpl.php(26): Kohana_View->__toString()
#9 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(176): content_50370efa6107e(Object(Smarty_Internal_Template))
#10 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(375): Smarty_Internal_TemplateBase->fetch('Z:\home\donbamb...')
#11 Z:\home\donbambino.koh\www\system\classes\kohana\controller\template.php(44): Smarty_View->render()
#12 [internal function]: Kohana_Controller_Template->after()
#13 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Test))
#14 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#17 {main}
2012-08-24 09:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:43:33 --- ERROR: SmartyCompilerException [ 0 ]: Syntax Error in template "Z:\home\donbambino.koh\www\application\views\test2.tpl"  on line 6 "{php}" unknown tag "php" ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 617 ]
2012-08-24 09:43:33 --- STRACE: SmartyCompilerException [ 0 ]: Syntax Error in template "Z:\home\donbambino.koh\www\application\views\test2.tpl"  on line 6 "{php}" unknown tag "php" ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 617 ]
--
#0 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(402): Smarty_Internal_TemplateCompilerBase->trigger_template_error('unknown tag "ph...', 6)
#1 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(2371): Smarty_Internal_TemplateCompilerBase->compileTag('php', Array)
#2 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3064): Smarty_Internal_Templateparser->yy_r36()
#3 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3164): Smarty_Internal_Templateparser->yy_reduce(36)
#4 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_smartytemplatecompiler.php(105): Smarty_Internal_Templateparser->doParse(11, '??')
#5 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(171): Smarty_Internal_SmartyTemplateCompiler->doCompile('{$test}????{*as...')
#6 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_template.php(187): Smarty_Internal_TemplateCompilerBase->compileTemplate(Object(Smarty_Internal_Template))
#7 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(164): Smarty_Internal_Template->compileTemplateSource()
#8 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(375): Smarty_Internal_TemplateBase->fetch('Z:\home\donbamb...')
#9 Z:\home\donbambino.koh\www\system\classes\kohana\view.php(228): Smarty_View->render()
#10 Z:\home\donbambino.koh\www\application\cache\smarty_compiled\0027d9ea2516fc6a35afc7ad92ed9e4d0c23cb64.file.test.tpl.php(26): Kohana_View->__toString()
#11 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(176): content_50370efa6107e(Object(Smarty_Internal_Template))
#12 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(375): Smarty_Internal_TemplateBase->fetch('Z:\home\donbamb...')
#13 Z:\home\donbambino.koh\www\system\classes\kohana\controller\template.php(44): Smarty_View->render()
#14 [internal function]: Kohana_Controller_Template->after()
#15 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Test))
#16 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#19 {main}
2012-08-24 09:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:43:42 --- ERROR: SmartyCompilerException [ 0 ]: Syntax Error in template "Z:\home\donbambino.koh\www\application\views\test2.tpl"  on line 6 "{PHP}" unknown tag "PHP" ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 617 ]
2012-08-24 09:43:42 --- STRACE: SmartyCompilerException [ 0 ]: Syntax Error in template "Z:\home\donbambino.koh\www\application\views\test2.tpl"  on line 6 "{PHP}" unknown tag "PHP" ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 617 ]
--
#0 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(402): Smarty_Internal_TemplateCompilerBase->trigger_template_error('unknown tag "PH...', 6)
#1 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(2371): Smarty_Internal_TemplateCompilerBase->compileTag('PHP', Array)
#2 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3064): Smarty_Internal_Templateparser->yy_r36()
#3 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3164): Smarty_Internal_Templateparser->yy_reduce(36)
#4 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_smartytemplatecompiler.php(105): Smarty_Internal_Templateparser->doParse(11, '??')
#5 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(171): Smarty_Internal_SmartyTemplateCompiler->doCompile('{$test}????{*as...')
#6 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_template.php(187): Smarty_Internal_TemplateCompilerBase->compileTemplate(Object(Smarty_Internal_Template))
#7 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(164): Smarty_Internal_Template->compileTemplateSource()
#8 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(375): Smarty_Internal_TemplateBase->fetch('Z:\home\donbamb...')
#9 Z:\home\donbambino.koh\www\system\classes\kohana\view.php(228): Smarty_View->render()
#10 Z:\home\donbambino.koh\www\application\cache\smarty_compiled\0027d9ea2516fc6a35afc7ad92ed9e4d0c23cb64.file.test.tpl.php(26): Kohana_View->__toString()
#11 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(176): content_50370efa6107e(Object(Smarty_Internal_Template))
#12 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(375): Smarty_Internal_TemplateBase->fetch('Z:\home\donbamb...')
#13 Z:\home\donbambino.koh\www\system\classes\kohana\controller\template.php(44): Smarty_View->render()
#14 [internal function]: Kohana_Controller_Template->after()
#15 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Test))
#16 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#19 {main}
2012-08-24 09:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:43:55 --- ERROR: SmartyCompilerException [ 0 ]: Syntax Error in template "Z:\home\donbambino.koh\www\application\views\test2.tpl"  on line 6 "{php}" unknown tag "php" ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 617 ]
2012-08-24 09:43:55 --- STRACE: SmartyCompilerException [ 0 ]: Syntax Error in template "Z:\home\donbambino.koh\www\application\views\test2.tpl"  on line 6 "{php}" unknown tag "php" ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 617 ]
--
#0 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(402): Smarty_Internal_TemplateCompilerBase->trigger_template_error('unknown tag "ph...', 6)
#1 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(2371): Smarty_Internal_TemplateCompilerBase->compileTag('php', Array)
#2 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3064): Smarty_Internal_Templateparser->yy_r36()
#3 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3164): Smarty_Internal_Templateparser->yy_reduce(36)
#4 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_smartytemplatecompiler.php(105): Smarty_Internal_Templateparser->doParse(11, '??')
#5 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(171): Smarty_Internal_SmartyTemplateCompiler->doCompile('{$test}????{*as...')
#6 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_template.php(187): Smarty_Internal_TemplateCompilerBase->compileTemplate(Object(Smarty_Internal_Template))
#7 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(164): Smarty_Internal_Template->compileTemplateSource()
#8 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(375): Smarty_Internal_TemplateBase->fetch('Z:\home\donbamb...')
#9 Z:\home\donbambino.koh\www\system\classes\kohana\view.php(228): Smarty_View->render()
#10 Z:\home\donbambino.koh\www\application\cache\smarty_compiled\0027d9ea2516fc6a35afc7ad92ed9e4d0c23cb64.file.test.tpl.php(26): Kohana_View->__toString()
#11 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(176): content_50370efa6107e(Object(Smarty_Internal_Template))
#12 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(375): Smarty_Internal_TemplateBase->fetch('Z:\home\donbamb...')
#13 Z:\home\donbambino.koh\www\system\classes\kohana\controller\template.php(44): Smarty_View->render()
#14 [internal function]: Kohana_Controller_Template->after()
#15 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Test))
#16 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#19 {main}
2012-08-24 09:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:45:18 --- ERROR: SmartyCompilerException [ 0 ]: Syntax Error in template "Z:\home\donbambino.koh\www\application\views\test2.tpl"  on line 6 "{php}" unknown tag "php" ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 617 ]
2012-08-24 09:45:18 --- STRACE: SmartyCompilerException [ 0 ]: Syntax Error in template "Z:\home\donbambino.koh\www\application\views\test2.tpl"  on line 6 "{php}" unknown tag "php" ~ MODPATH\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 617 ]
--
#0 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(402): Smarty_Internal_TemplateCompilerBase->trigger_template_error('unknown tag "ph...', 6)
#1 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(2371): Smarty_Internal_TemplateCompilerBase->compileTag('php', Array)
#2 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3064): Smarty_Internal_Templateparser->yy_r36()
#3 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3164): Smarty_Internal_Templateparser->yy_reduce(36)
#4 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_smartytemplatecompiler.php(105): Smarty_Internal_Templateparser->doParse(11, '??')
#5 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(171): Smarty_Internal_SmartyTemplateCompiler->doCompile('{$test}????{*as...')
#6 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_template.php(187): Smarty_Internal_TemplateCompilerBase->compileTemplate(Object(Smarty_Internal_Template))
#7 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(164): Smarty_Internal_Template->compileTemplateSource()
#8 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(375): Smarty_Internal_TemplateBase->fetch('Z:\home\donbamb...')
#9 Z:\home\donbambino.koh\www\system\classes\kohana\view.php(228): Smarty_View->render()
#10 Z:\home\donbambino.koh\www\application\cache\smarty_compiled\0027d9ea2516fc6a35afc7ad92ed9e4d0c23cb64.file.test.tpl.php(26): Kohana_View->__toString()
#11 Z:\home\donbambino.koh\www\modules\smarty\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(176): content_50370efa6107e(Object(Smarty_Internal_Template))
#12 Z:\home\donbambino.koh\www\modules\smarty\classes\smarty\view.php(375): Smarty_Internal_TemplateBase->fetch('Z:\home\donbamb...')
#13 Z:\home\donbambino.koh\www\system\classes\kohana\controller\template.php(44): Smarty_View->render()
#14 [internal function]: Kohana_Controller_Template->after()
#15 Z:\home\donbambino.koh\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Test))
#16 Z:\home\donbambino.koh\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 Z:\home\donbambino.koh\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#19 {main}
2012-08-24 09:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:53:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:53:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 09:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 09:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 10:55:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 10:55:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 10:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 10:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 11:01:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 11:01:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 11:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 11:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 11:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 11:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 11:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 11:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 11:48:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 11:48:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 11:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 11:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 11:54:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 11:54:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 12:08:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 12:08:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 12:08:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 12:08:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-24 12:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 12:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\donbambino.koh\www\index.php(109): Kohana_Request->execute()
#1 {main}