<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-28 00:05:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\controller\main.php [ 3 ]
2013-01-28 00:05:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\controller\main.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-28 00:05:37 --- ERROR: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-01-28 00:05:37 --- STRACE: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('home')
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(30): Kohana_View->__construct('home', NULL)
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\main.php(10): Kohana_View::factory('home')
#3 [internal function]: Controller_Main->action_index()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 00:06:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-28 00:06:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-28 00:14:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-28 00:14:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-28 00:33:50 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\main.php [ 9 ]
2013-01-28 00:33:50 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\main.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-28 10:44:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\main.php [ 36 ]
2013-01-28 10:44:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\main.php [ 36 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\main.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 36, Array)
#1 [internal function]: Controller_Main->action_index()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-28 11:07:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/hpass was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-28 11:07:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/hpass was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-28 11:09:36 --- ERROR: ErrorException [ 8 ]: Use of undefined constant root - assumed 'root' ~ APPPATH\config\database.php [ 23 ]
2013-01-28 11:09:36 --- STRACE: ErrorException [ 8 ]: Use of undefined constant root - assumed 'root' ~ APPPATH\config\database.php [ 23 ]
--
#0 C:\xampp\htdocs\intranet\www\application\config\database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\core.php(792): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\config\file\reader.php(49): Kohana_Core::load('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\config.php(124): Kohana_Config_File_Reader->load('database')
#4 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database.php(65): Kohana_Config->load('database')
#5 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance(NULL)
#6 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\auth\orm.php(75): Kohana_ORM::factory('user')
#9 C:\xampp\htdocs\intranet\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('r_medina@mail.r...', 'qwerty', false)
#10 C:\xampp\htdocs\intranet\www\application\classes\controller\auth.php(25): Kohana_Auth->login('r_medina@mail.r...', 'qwerty')
#11 [internal function]: Controller_Auth->action_index()
#12 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#13 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#16 {main}
2013-01-28 11:21:19 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2013-01-28 11:21:19 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\xampp\htdocs\intranet\www\modules\auth\classes\kohana\auth.php(57): Kohana_Session::instance('native')
#3 C:\xampp\htdocs\intranet\www\modules\auth\classes\kohana\auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 C:\xampp\htdocs\intranet\www\application\classes\controller\mycontroller.php(9): Kohana_Auth::instance()
#5 [internal function]: Controller_Mycontroller->before()
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-28 11:35:48 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'email' in 'where clause' [ SELECT `user`.* FROM `users` AS `user` WHERE `email` = 'r_medina@mail.ru' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-01-28 11:35:48 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'email' in 'where clause' [ SELECT `user`.* FROM `users` AS `user` WHERE `email` = 'r_medina@mail.ru' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\auth\orm.php(76): Kohana_ORM->find()
#4 C:\xampp\htdocs\intranet\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('r_medina@mail.r...', 'qwerty', false)
#5 C:\xampp\htdocs\intranet\www\application\classes\controller\auth.php(29): Kohana_Auth->login('r_medina@mail.r...', 'qwerty')
#6 [internal function]: Controller_Auth->action_index()
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#11 {main}
2013-01-28 11:46:00 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2013-01-28 11:46:00 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\intranet\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('r_medina@mail.r...', 'qwerty', false)
#5 C:\xampp\htdocs\intranet\www\application\classes\controller\auth.php(29): Kohana_Auth->login('r_medina@mail.r...', 'qwerty')
#6 [internal function]: Controller_Auth->action_index()
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#11 {main}
2013-01-28 12:16:04 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2013-01-28 12:16:04 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\intranet\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('merey', 'qwerty', false)
#5 C:\xampp\htdocs\intranet\www\application\classes\controller\auth.php(29): Kohana_Auth->login('merey', 'qwerty')
#6 [internal function]: Controller_Auth->action_index()
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#11 {main}
2013-01-28 12:16:28 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2013-01-28 12:16:28 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 C:\xampp\htdocs\intranet\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('merey', 'qwerty', false)
#5 C:\xampp\htdocs\intranet\www\application\classes\controller\auth.php(29): Kohana_Auth->login('merey', 'qwerty')
#6 [internal function]: Controller_Auth->action_index()
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#11 {main}
2013-01-28 12:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL amin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-28 12:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL amin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-28 12:30:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-28 12:30:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-28 12:30:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-28 12:30:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-28 12:31:03 --- ERROR: ErrorException [ 1 ]: Class 'Mycontrolleradmin' not found ~ APPPATH\classes\controller\admin\main.php [ 3 ]
2013-01-28 12:31:03 --- STRACE: ErrorException [ 1 ]: Class 'Mycontrolleradmin' not found ~ APPPATH\classes\controller\admin\main.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-28 12:31:06 --- ERROR: ErrorException [ 1 ]: Class 'Mycontrolleradmin' not found ~ APPPATH\classes\controller\admin\main.php [ 3 ]
2013-01-28 12:31:06 --- STRACE: ErrorException [ 1 ]: Class 'Mycontrolleradmin' not found ~ APPPATH\classes\controller\admin\main.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-28 12:31:47 --- ERROR: ErrorException [ 1 ]: Class 'Mycontrolleradmin' not found ~ APPPATH\classes\controller\admin\main.php [ 3 ]
2013-01-28 12:31:47 --- STRACE: ErrorException [ 1 ]: Class 'Mycontrolleradmin' not found ~ APPPATH\classes\controller\admin\main.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-28 12:32:34 --- ERROR: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-01-28 12:32:34 --- STRACE: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('basic')
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(30): Kohana_View->__construct('basic', NULL)
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('basic')
#3 C:\xampp\htdocs\intranet\www\application\classes\controller\mycontrolleradmin.php(14): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Mycontrolleradmin->before()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-28 12:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL netprav was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-28 12:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL netprav was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-28 12:35:46 --- ERROR: ErrorException [ 1 ]: Class 'Mycontroller' not found ~ APPPATH\classes\controller\netprav.php [ 3 ]
2013-01-28 12:35:46 --- STRACE: ErrorException [ 1 ]: Class 'Mycontroller' not found ~ APPPATH\classes\controller\netprav.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-28 12:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL student was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-28 12:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL student was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-28 13:05:11 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2013-01-28 13:05:11 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\mycontroller.php(9): Kohana_Session::instance()
#3 [internal function]: Controller_Mycontroller->before()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-28 13:10:22 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2013-01-28 13:10:22 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\mycontroller.php(9): Kohana_Session::instance()
#3 [internal function]: Controller_Mycontroller->before()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Netprav))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}