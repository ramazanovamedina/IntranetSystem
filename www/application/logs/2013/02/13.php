<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-13 10:06:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:06:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 10:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 10:22:47 --- ERROR: Kohana_Exception [ 0 ]: The create property does not exist in the Model_Roleuser class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-13 10:22:47 --- STRACE: Kohana_Exception [ 0 ]: The create property does not exist in the Model_Roleuser class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(25): Kohana_ORM->__get('create')
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\createuser.php(24): Model_Roleuser->create_user_role('jknlk.', 'admin')
#2 [internal function]: Controller_Createuser->action_index()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Createuser))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-13 10:22:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:22:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 10:23:07 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'jknlk.' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `full_name`, `password`, `date_of_birth`, `address`, `documents`) VALUES ('jknlk.', 'jknlk.@mail.ru', 'nm,n', 'feba120eef3084bec2304c03c727ee54d2005dc1204bd54adc934e1aa316f2a6', '', 'fghj', 'fg') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-13 10:23:07 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'jknlk.' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `full_name`, `password`, `date_of_birth`, `address`, `documents`) VALUES ('jknlk.', 'jknlk.@mail.ru', 'nm,n', 'feba120eef3084bec2304c03c727ee54d2005dc1204bd54adc934e1aa316f2a6', '', 'fghj', 'fg') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(27): Kohana_ORM->create()
#3 C:\xampp\htdocs\intranet\www\application\classes\controller\createuser.php(23): Model_Us->create_user('nm,n', 'jknlk.', '', 'fghj', 'fg')
#4 [internal function]: Controller_Createuser->action_index()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Createuser))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-13 10:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 10:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 10:23:53 --- ERROR: Kohana_Exception [ 0 ]: Cannot create roleuser model because it is already loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1195 ]
2013-02-13 10:23:53 --- STRACE: Kohana_Exception [ 0 ]: Cannot create roleuser model because it is already loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1195 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(28): Kohana_ORM->create()
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\createuser.php(24): Model_Roleuser->create_user_role('zz', 'admin')
#2 [internal function]: Controller_Createuser->action_index()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Createuser))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-13 10:23:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:23:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 10:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 10:25:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:25:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 10:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 10:29:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:29:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 10:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 10:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-13 10:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-13 10:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 10:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 10:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 10:53:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:53:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 10:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 10:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 10:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 10:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 10:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:26:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:26:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:27:34 --- ERROR: ErrorException [ 4096 ]: Object of class Role could not be converted to string ~ APPPATH\views\createuserview.php [ 23 ]
2013-02-13 11:27:34 --- STRACE: ErrorException [ 4096 ]: Object of class Role could not be converted to string ~ APPPATH\views\createuserview.php [ 23 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createuserview.php(23): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\templateview.php(15): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-13 11:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:28:19 --- ERROR: ErrorException [ 4096 ]: Object of class Role could not be converted to string ~ APPPATH\views\createuserview.php [ 23 ]
2013-02-13 11:28:19 --- STRACE: ErrorException [ 4096 ]: Object of class Role could not be converted to string ~ APPPATH\views\createuserview.php [ 23 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createuserview.php(23): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\templateview.php(15): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-13 11:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:28:23 --- ERROR: ErrorException [ 4096 ]: Object of class Role could not be converted to string ~ APPPATH\views\createuserview.php [ 23 ]
2013-02-13 11:28:23 --- STRACE: ErrorException [ 4096 ]: Object of class Role could not be converted to string ~ APPPATH\views\createuserview.php [ 23 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createuserview.php(23): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\templateview.php(15): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-13 11:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:29:26 --- ERROR: ErrorException [ 4096 ]: Object of class Role could not be converted to string ~ APPPATH\views\createuserview.php [ 24 ]
2013-02-13 11:29:26 --- STRACE: ErrorException [ 4096 ]: Object of class Role could not be converted to string ~ APPPATH\views\createuserview.php [ 24 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createuserview.php(24): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 24, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\templateview.php(15): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-13 11:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:30:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: rol ~ APPPATH\views\createuserview.php [ 24 ]
2013-02-13 11:30:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: rol ~ APPPATH\views\createuserview.php [ 24 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createuserview.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 24, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\templateview.php(15): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-13 11:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:31:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:31:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:32:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:32:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:32:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:32:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-13 11:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-13 11:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}