<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-19 01:54:31 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-08-19 01:54:31 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/donbambino.koh/application/bootstrap.php(113): Kohana_Core::modules(Array)
#1 /var/www/donbambino.koh/index.php(102): require('/var/www/donbam...')
#2 {main}
2012-08-19 14:56:18 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-08-19 14:56:18 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/donbambino.koh/application/bootstrap.php(113): Kohana_Core::modules(Array)
#1 /var/www/donbambino.koh/index.php(102): require('/var/www/donbam...')
#2 {main}
2012-08-19 14:57:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/base.php [ 16 ]
2012-08-19 14:57:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/base.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-19 14:59:27 --- ERROR: ErrorException [ 1 ]: Class 'Cache' not found ~ APPPATH/classes/controller/base.php [ 20 ]
2012-08-19 14:59:27 --- STRACE: ErrorException [ 1 ]: Class 'Cache' not found ~ APPPATH/classes/controller/base.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-19 14:59:48 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/widget.php [ 64 ]
2012-08-19 14:59:48 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/widget.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-19 15:00:24 --- ERROR: ErrorException [ 1 ]: Class 'ORM_MPTT' not found ~ APPPATH/classes/model/category.php [ 3 ]
2012-08-19 15:00:24 --- STRACE: ErrorException [ 1 ]: Class 'ORM_MPTT' not found ~ APPPATH/classes/model/category.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-19 15:00:44 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'orm-mptt' at 'MODPATH/orm-mptt' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-08-19 15:00:44 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'orm-mptt' at 'MODPATH/orm-mptt' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/donbambino.koh/application/bootstrap.php(113): Kohana_Core::modules(Array)
#1 /var/www/donbambino.koh/index.php(102): require('/var/www/donbam...')
#2 {main}
2012-08-19 15:03:25 --- ERROR: ErrorException [ 1 ]: Class 'ORM_MPTT' not found ~ APPPATH/classes/model/category.php [ 3 ]
2012-08-19 15:03:25 --- STRACE: ErrorException [ 1 ]: Class 'ORM_MPTT' not found ~ APPPATH/classes/model/category.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-19 15:04:40 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-08-19 15:04:40 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /var/www/donbambino.koh/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/donbambino.koh/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('categories')
#3 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /var/www/donbambino.koh/modules/orm-mptt/classes/kohana/orm/mptt.php(61): Kohana_ORM->__construct(NULL)
#7 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(37): Kohana_ORM_MPTT->__construct(NULL)
#8 /var/www/donbambino.koh/application/classes/controller/widgets/menu.php(15): Kohana_ORM::factory('category')
#9 [internal function]: Controller_Widgets_Menu->action_index()
#10 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#11 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/donbambino.koh/application/classes/widget.php(83): Kohana_Request->execute()
#14 /var/www/donbambino.koh/application/classes/widget.php(37): Widget->render()
#15 /var/www/donbambino.koh/application/classes/controller/index.php(13): Widget::load('menu')
#16 [internal function]: Controller_Index->before()
#17 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#18 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#21 {main}
2012-08-19 15:05:11 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'kohana' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2012-08-19 15:05:11 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'kohana' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /var/www/donbambino.koh/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 /var/www/donbambino.koh/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /var/www/donbambino.koh/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('categories')
#4 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#5 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#6 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#7 /var/www/donbambino.koh/modules/orm-mptt/classes/kohana/orm/mptt.php(61): Kohana_ORM->__construct(NULL)
#8 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(37): Kohana_ORM_MPTT->__construct(NULL)
#9 /var/www/donbambino.koh/application/classes/controller/widgets/menu.php(15): Kohana_ORM::factory('category')
#10 [internal function]: Controller_Widgets_Menu->action_index()
#11 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#12 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/donbambino.koh/application/classes/widget.php(83): Kohana_Request->execute()
#15 /var/www/donbambino.koh/application/classes/widget.php(37): Widget->render()
#16 /var/www/donbambino.koh/application/classes/controller/index.php(13): Widget::load('menu')
#17 [internal function]: Controller_Index->before()
#18 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#19 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#20 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#21 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#22 {main}
2012-08-19 15:11:42 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'kohana' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2012-08-19 15:11:42 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'kohana' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /var/www/donbambino.koh/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 /var/www/donbambino.koh/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /var/www/donbambino.koh/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('categories')
#4 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#5 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#6 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#7 /var/www/donbambino.koh/modules/orm-mptt/classes/kohana/orm/mptt.php(61): Kohana_ORM->__construct(NULL)
#8 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(37): Kohana_ORM_MPTT->__construct(NULL)
#9 /var/www/donbambino.koh/application/classes/controller/widgets/menu.php(15): Kohana_ORM::factory('category')
#10 [internal function]: Controller_Widgets_Menu->action_index()
#11 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#12 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/donbambino.koh/application/classes/widget.php(83): Kohana_Request->execute()
#15 /var/www/donbambino.koh/application/classes/widget.php(37): Widget->render()
#16 /var/www/donbambino.koh/application/classes/controller/index.php(13): Widget::load('menu')
#17 [internal function]: Controller_Index->before()
#18 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#19 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#20 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#21 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#22 {main}
2012-08-19 15:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:20:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:20:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:20:28 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH/classes/kohana/validation.php [ 364 ]
2012-08-19 15:20:28 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH/classes/kohana/validation.php [ 364 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/donbam...', 364, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/validation.php(364): call_user_func_array(Array, Array)
#2 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check()
#3 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(Object(Validation))
#4 /var/www/donbambino.koh/modules/orm/classes/model/auth/user.php(167): Kohana_ORM->create(Object(Validation))
#5 /var/www/donbambino.koh/application/classes/controller/index/auth.php(55): Model_Auth_User->create_user(Array, Array)
#6 [internal function]: Controller_Index_Auth->action_register()
#7 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#11 {main}
2012-08-19 15:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:25:14 --- ERROR: ErrorException [ 4096 ]: Object of class Validation could not be converted to string ~ MODPATH/database/classes/kohana/database.php [ 456 ]
2012-08-19 15:25:14 --- STRACE: ErrorException [ 4096 ]: Object of class Validation could not be converted to string ~ MODPATH/database/classes/kohana/database.php [ 456 ]
--
#0 /var/www/donbambino.koh/modules/database/classes/kohana/database.php(456): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/donbam...', 456, Array)
#1 /var/www/donbambino.koh/modules/database/classes/kohana/database/query/builder.php(116): Kohana_Database->quote(Object(Validation))
#2 /var/www/donbambino.koh/modules/database/classes/kohana/database/query/builder/select.php(370): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#3 /var/www/donbambino.koh/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 /var/www/donbambino.koh/modules/orm/classes/model/auth/user.php(117): Kohana_Database_Query->execute(Object(Database_MySQL))
#5 [internal function]: Model_Auth_User->unique_key_exists(Object(Validation), 'username')
#6 /var/www/donbambino.koh/system/classes/kohana/validation.php(364): call_user_func_array(Array, Array)
#7 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check()
#8 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(Object(Validation))
#9 /var/www/donbambino.koh/modules/orm/classes/model/auth/user.php(167): Kohana_ORM->create(Object(Validation))
#10 /var/www/donbambino.koh/application/classes/controller/index/auth.php(55): Model_Auth_User->create_user(Array, Array)
#11 [internal function]: Controller_Index_Auth->action_register()
#12 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#13 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#16 {main}
2012-08-19 15:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:29:06 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `hay_roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-19 15:29:06 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `hay_roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/donbambino.koh/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ha...', false, Array)
#1 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/donbambino.koh/application/classes/controller/index/auth.php(58): Kohana_ORM->add('roles', Object(Model_Role))
#3 [internal function]: Controller_Index_Auth->action_register()
#4 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#5 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-19 15:29:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:29:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:34:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::validate_register() ~ APPPATH/classes/controller/index/auth.php [ 48 ]
2012-08-19 15:34:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::validate_register() ~ APPPATH/classes/controller/index/auth.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-19 15:34:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:34:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:37:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::validate() ~ APPPATH/classes/controller/index/auth.php [ 48 ]
2012-08-19 15:37:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::validate() ~ APPPATH/classes/controller/index/auth.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-19 15:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:37:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:37:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:38:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:38:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:41:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:41:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:41:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/pagination/classes/kohana/pagination.php [ 92 ]
2012-08-19 15:41:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/pagination/classes/kohana/pagination.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-19 15:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/buyers was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-19 15:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/buyers was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-19 15:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/subscribe was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-19 15:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/subscribe was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-19 15:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:44:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:44:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:44:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:44:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:45:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:45:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:45:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:45:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:45:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:45:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:45:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:45:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:45:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:45:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:46:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:46:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:46:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:46:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:46:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:46:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:47:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:47:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:48:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:48:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:48:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:48:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:48:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:48:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/buyers was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-19 15:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/buyers was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-19 15:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:48:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:48:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:48:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:48:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:48:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:48:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:48:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:48:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:51:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:51:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:51:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:51:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:51:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:51:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:51:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:51:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:51:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:51:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:53:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:53:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:53:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/index/payment.php [ 11 ]
2012-08-19 15:53:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/index/payment.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-19 15:53:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:53:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:53:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:53:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:53:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:53:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:53:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:53:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:53:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:53:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:53:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:53:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:55:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:55:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:55:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:55:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 15:59:55 --- ERROR: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 909 ]
2012-08-19 15:59:55 --- STRACE: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 909 ]
--
#0 /var/www/donbambino.koh/application/classes/controller/admin/orders.php(26): Kohana_ORM->find_all()
#1 [internal function]: Controller_Admin_Orders->action_index()
#2 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#3 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-19 15:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 15:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:00:24 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 885 ]
2012-08-19 16:00:24 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 885 ]
--
#0 /var/www/donbambino.koh/application/classes/controller/admin/orders.php(26): Kohana_ORM->find()
#1 [internal function]: Controller_Admin_Orders->action_index()
#2 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#3 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-19 16:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:01:49 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/admin/orders/v_orders_index.php [ 5 ]
2012-08-19 16:01:49 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/admin/orders/v_orders_index.php [ 5 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/donbam...', 5, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:01:58 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Product as array ~ APPPATH/views/admin/orders/v_orders_index.php [ 5 ]
2012-08-19 16:01:58 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Product as array ~ APPPATH/views/admin/orders/v_orders_index.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-19 16:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:02:48 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/orders/v_orders_index.php [ 8 ]
2012-08-19 16:02:48 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/orders/v_orders_index.php [ 8 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/donbam...', 8, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:04:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:04:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:04:53 --- ERROR: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 909 ]
2012-08-19 16:04:53 --- STRACE: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 909 ]
--
#0 /var/www/donbambino.koh/application/classes/controller/admin/orders.php(26): Kohana_ORM->find_all()
#1 [internal function]: Controller_Admin_Orders->action_index()
#2 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#3 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-19 16:04:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:04:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:05:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:05:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:05:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH/views/admin/orders/v_orders_index.php [ 8 ]
2012-08-19 16:05:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH/views/admin/orders/v_orders_index.php [ 8 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/donbam...', 8, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:05:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH/classes/controller/admin/orders.php [ 25 ]
2012-08-19 16:05:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH/classes/controller/admin/orders.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-19 16:05:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:05:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:06:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:06:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:06:23 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/orders/v_orders_index.php [ 8 ]
2012-08-19 16:06:23 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/orders/v_orders_index.php [ 8 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/donbam...', 8, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:06:36 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/admin/orders/v_orders_index.php [ 8 ]
2012-08-19 16:06:36 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/admin/orders/v_orders_index.php [ 8 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/donbam...', 8, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:06:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:06:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:06:40 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/admin/orders/v_orders_index.php [ 8 ]
2012-08-19 16:06:40 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/admin/orders/v_orders_index.php [ 8 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/donbam...', 8, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:06:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:06:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:06:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:06:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:07:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:07:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:07:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:07:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:08:50 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/orders/v_orders_index.php [ 9 ]
2012-08-19 16:08:50 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/orders/v_orders_index.php [ 9 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/donbam...', 9, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:09:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: delivere ~ APPPATH/views/admin/orders/v_orders_index.php [ 9 ]
2012-08-19 16:09:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: delivere ~ APPPATH/views/admin/orders/v_orders_index.php [ 9 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/donbam...', 9, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:09:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:09:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:09:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:09:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:09:18 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/orders/v_orders_index.php [ 9 ]
2012-08-19 16:09:18 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/orders/v_orders_index.php [ 9 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/donbam...', 9, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:10:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:10:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:14:14 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/admin/orders/v_orders_index.php [ 19 ]
2012-08-19 16:14:14 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/admin/orders/v_orders_index.php [ 19 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(19): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/donbam...', 19, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:14:24 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/views/admin/orders/v_orders_index.php [ 20 ]
2012-08-19 16:14:24 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/views/admin/orders/v_orders_index.php [ 20 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(20): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/donbam...', 20, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:14:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:14:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:14:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:14:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:16:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:16:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:17:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:17:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:17:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:17:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:17:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:17:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:20:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/admin/orders/v_orders_index.php [ 10 ]
2012-08-19 16:20:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/admin/orders/v_orders_index.php [ 10 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/donbam...', 10, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:20:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/admin/orders/v_orders_index.php [ 10 ]
2012-08-19 16:20:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/admin/orders/v_orders_index.php [ 10 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/donbam...', 10, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:20:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:20:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:20:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/admin/orders/v_orders_index.php [ 10 ]
2012-08-19 16:20:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/admin/orders/v_orders_index.php [ 10 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/donbam...', 10, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:20:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:20:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:21:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/admin/orders/v_orders_index.php [ 10 ]
2012-08-19 16:21:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/admin/orders/v_orders_index.php [ 10 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/donbam...', 10, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:21:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/admin/orders/v_orders_index.php [ 10 ]
2012-08-19 16:21:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/admin/orders/v_orders_index.php [ 10 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/donbam...', 10, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:22:04 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH/classes/controller/admin/orders.php [ 27 ]
2012-08-19 16:22:04 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH/classes/controller/admin/orders.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-19 16:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:22:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/admin/orders/v_orders_index.php [ 10 ]
2012-08-19 16:22:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/admin/orders/v_orders_index.php [ 10 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/donbam...', 10, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:22:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:22:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:22:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:22:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:22:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:22:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:23:17 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0-0' for key 'PRIMARY' [ INSERT INTO `hay_orders_products` () VALUES () ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-19 16:23:17 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0-0' for key 'PRIMARY' [ INSERT INTO `hay_orders_products` () VALUES () ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/donbambino.koh/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ha...', false, Array)
#1 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/donbambino.koh/application/classes/controller/index/payment.php(53): Kohana_ORM->save()
#4 [internal function]: Controller_Index_Payment->action_index()
#5 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Payment))
#6 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-19 16:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:24:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:24:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:26:00 --- ERROR: Kohana_Exception [ 0 ]: The count property does not exist in the Model_Product class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-19 16:26:00 --- STRACE: Kohana_Exception [ 0 ]: The count property does not exist in the Model_Product class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(14): Kohana_ORM->__get('count')
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:26:53 --- ERROR: Kohana_Exception [ 0 ]: The count property does not exist in the Model_Order class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-19 16:26:53 --- STRACE: Kohana_Exception [ 0 ]: The count property does not exist in the Model_Order class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(7): Kohana_ORM->__get('count')
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:28:06 --- ERROR: Kohana_Exception [ 0 ]: The orders_products property does not exist in the Model_Order class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-19 16:28:06 --- STRACE: Kohana_Exception [ 0 ]: The orders_products property does not exist in the Model_Order class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/donbambino.koh/application/classes/controller/admin/orders.php(29): Kohana_ORM->__get('orders_products')
#1 [internal function]: Controller_Admin_Orders->action_index()
#2 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#3 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-19 16:28:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:28:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:31:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_Orders_products' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-19 16:31:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_Orders_products' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-19 16:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:31:45 --- ERROR: Kohana_Exception [ 0 ]: The orders_products property does not exist in the Model_Order class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-19 16:31:45 --- STRACE: Kohana_Exception [ 0 ]: The orders_products property does not exist in the Model_Order class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/donbambino.koh/application/classes/controller/admin/orders.php(30): Kohana_ORM->__get('orders_products')
#1 [internal function]: Controller_Admin_Orders->action_index()
#2 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#3 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-19 16:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:33:09 --- ERROR: Kohana_Exception [ 0 ]: The count property does not exist in the Model_Order class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-19 16:33:09 --- STRACE: Kohana_Exception [ 0 ]: The count property does not exist in the Model_Order class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(7): Kohana_ORM->__get('count')
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:34:00 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$count ~ APPPATH/views/admin/orders/v_orders_index.php [ 7 ]
2012-08-19 16:34:00 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$count ~ APPPATH/views/admin/orders/v_orders_index.php [ 7 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/donbam...', 7, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:34:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH/classes/controller/admin/orders.php [ 33 ]
2012-08-19 16:34:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH/classes/controller/admin/orders.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-19 16:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:34:49 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/orders/v_orders_index.php [ 7 ]
2012-08-19 16:34:49 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/orders/v_orders_index.php [ 7 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/donbam...', 7, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:35:03 --- ERROR: ErrorException [ 8 ]: Undefined index: count ~ APPPATH/views/admin/orders/v_orders_index.php [ 7 ]
2012-08-19 16:35:03 --- STRACE: ErrorException [ 8 ]: Undefined index: count ~ APPPATH/views/admin/orders/v_orders_index.php [ 7 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/donbam...', 7, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:35:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:35:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:35:21 --- ERROR: ErrorException [ 8 ]: Undefined index: count ~ APPPATH/views/admin/orders/v_orders_index.php [ 7 ]
2012-08-19 16:35:21 --- STRACE: ErrorException [ 8 ]: Undefined index: count ~ APPPATH/views/admin/orders/v_orders_index.php [ 7 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/donbam...', 7, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:35:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:35:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:35:44 --- ERROR: ErrorException [ 8 ]: Undefined index: count ~ APPPATH/views/admin/orders/v_orders_index.php [ 7 ]
2012-08-19 16:35:44 --- STRACE: ErrorException [ 8 ]: Undefined index: count ~ APPPATH/views/admin/orders/v_orders_index.php [ 7 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/donbam...', 7, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:36:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:36:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:36:14 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Orderproduct as array ~ APPPATH/views/admin/orders/v_orders_index.php [ 7 ]
2012-08-19 16:36:14 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Orderproduct as array ~ APPPATH/views/admin/orders/v_orders_index.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-19 16:36:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:36:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:37:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:37:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:44:50 --- ERROR: Kohana_Exception [ 0 ]: The order property does not exist in the Model_Orderproduct class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-19 16:44:50 --- STRACE: Kohana_Exception [ 0 ]: The order property does not exist in the Model_Orderproduct class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/donbambino.koh/application/classes/controller/admin/orders.php(43): Kohana_ORM->__get('order')
#1 [internal function]: Controller_Admin_Orders->action_index()
#2 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#3 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-19 16:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:45:22 --- ERROR: Kohana_Exception [ 0 ]: The orders property does not exist in the Model_Orderproduct class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-19 16:45:22 --- STRACE: Kohana_Exception [ 0 ]: The orders property does not exist in the Model_Orderproduct class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/donbambino.koh/application/classes/controller/admin/orders.php(43): Kohana_ORM->__get('orders')
#1 [internal function]: Controller_Admin_Orders->action_index()
#2 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#3 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-19 16:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:48:57 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 885 ]
2012-08-19 16:48:57 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 885 ]
--
#0 /var/www/donbambino.koh/application/classes/controller/admin/orders.php(45): Kohana_ORM->find()
#1 [internal function]: Controller_Admin_Orders->action_index()
#2 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#3 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-19 16:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:49:15 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/admin/orders/v_orders_index.php [ 5 ]
2012-08-19 16:49:15 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/admin/orders/v_orders_index.php [ 5 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(5): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/donbam...', 5, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:50:19 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/orders/v_orders_index.php [ 14 ]
2012-08-19 16:50:19 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/orders/v_orders_index.php [ 14 ]
--
#0 /var/www/donbambino.koh/application/views/admin/orders/v_orders_index.php(14): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/donbam...', 14, Array)
#1 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#2 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#3 /var/www/donbambino.koh/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/donbambino.koh/application/views/admin/v_base.php(27): Kohana_View->__toString()
#5 /var/www/donbambino.koh/system/classes/kohana/view.php(61): include('/var/www/donbam...')
#6 /var/www/donbambino.koh/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/donbam...', Array)
#7 /var/www/donbambino.koh/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-19 16:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:51:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:51:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:51:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:51:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:51:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:51:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:52:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:52:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 16:52:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 16:52:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 17:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 17:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 17:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 17:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 17:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 17:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 17:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 17:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 17:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 17:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 17:02:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 17:02:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 17:02:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 17:02:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 17:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 17:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 17:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 17:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 17:02:52 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0-0' for key 'PRIMARY' [ INSERT INTO `hay_orders_products` () VALUES () ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-19 17:02:52 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0-0' for key 'PRIMARY' [ INSERT INTO `hay_orders_products` () VALUES () ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/donbambino.koh/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ha...', false, Array)
#1 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/donbambino.koh/application/classes/controller/index/payment.php(53): Kohana_ORM->save()
#4 [internal function]: Controller_Index_Payment->action_index()
#5 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Payment))
#6 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-19 17:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 17:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-19 17:03:23 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0-0' for key 'PRIMARY' [ INSERT INTO `hay_orders_products` () VALUES () ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-19 17:03:23 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0-0' for key 'PRIMARY' [ INSERT INTO `hay_orders_products` () VALUES () ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/donbambino.koh/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ha...', false, Array)
#1 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/donbambino.koh/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/donbambino.koh/application/classes/controller/index/payment.php(53): Kohana_ORM->save()
#4 [internal function]: Controller_Index_Payment->action_index()
#5 /var/www/donbambino.koh/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Payment))
#6 /var/www/donbambino.koh/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/donbambino.koh/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-19 17:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-19 17:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/donbambino.koh/index.php(109): Kohana_Request->execute()
#1 {main}