<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-25 14:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:03:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 14:03:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(3)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 14:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:08:54 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 14:08:54 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(3)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 14:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:09:04 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 14:09:04 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(4)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 14:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:10:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:10:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:13:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:13:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:14:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:14:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:16:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:16:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:25:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:25:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:26:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:26:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:26:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:26:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:26:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\controller\ajax.php [ 15 ]
2013-02-25 14:26:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\controller\ajax.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-25 14:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:27:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:27:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 14:28:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 14:28:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:14:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:14:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:14:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:14:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:14:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:14:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:22:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 19:22:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(false)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 19:22:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 19:22:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(false)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 19:22:18 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 19:22:18 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(false)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 19:23:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:23:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:24:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:24:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:32:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:32:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:33:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:33:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:33:24 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 19:33:24 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(3)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 19:33:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 19:33:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(2)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 19:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:34:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:34:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:35:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 19:35:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(2)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 19:35:10 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 19:35:10 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(3)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 19:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:53:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:53:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:53:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 19:53:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(4)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 19:53:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 19:53:59 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(3)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 19:54:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 19:54:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(5)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 19:59:31 --- ERROR: ErrorException [ 1 ]: Class Controller_Studentprof contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (Userinterface::action_create_user, Userinterface::action_delete_user, Userinterface::action_update_user) ~ APPPATH\classes\controller\try.php [ 20 ]
2013-02-25 19:59:31 --- STRACE: ErrorException [ 1 ]: Class Controller_Studentprof contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (Userinterface::action_create_user, Userinterface::action_delete_user, Userinterface::action_update_user) ~ APPPATH\classes\controller\try.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-25 19:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 19:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL try was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-02-25 19:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL try was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-25 19:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 19:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL try/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-02-25 20:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL try/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-25 20:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:00:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 20:00:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(12): Model_Roleuser->getAllUsersByRoleId(3)
#2 [internal function]: Controller_Try->action_index()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 20:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:04:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:04:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:08:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:08:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:17:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:17:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:19:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:19:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:19:15 --- ERROR: ErrorException [ 2 ]: json_encode(): type is unsupported, encoded as null ~ APPPATH\classes\controller\ajax.php [ 16 ]
2013-02-25 20:19:15 --- STRACE: ErrorException [ 2 ]: json_encode(): type is unsupported, encoded as null ~ APPPATH\classes\controller\ajax.php [ 16 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_encode(): ...', 'C:\xampp\htdocs...', 16, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(16): json_encode(Array)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 20:19:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:19:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:24:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:24:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:24:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:24:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:27:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:27:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:28:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:28:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:30:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:30:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:45:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\ajax.php [ 17 ]
2013-02-25 20:45:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\ajax.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-25 20:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 20:46:37 --- ERROR: ErrorException [ 2 ]: create_function() expects exactly 2 parameters, 3 given ~ APPPATH\classes\controller\ajax.php [ 17 ]
2013-02-25 20:46:37 --- STRACE: ErrorException [ 2 ]: create_function() expects exactly 2 parameters, 3 given ~ APPPATH\classes\controller\ajax.php [ 17 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'create_function...', 'C:\xampp\htdocs...', 17, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(17): create_function('$obj', 'return $obj->as...', Array)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 20:48:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 20:48:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:17:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:17:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:18:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:18:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:18:34 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\ajax.php [ 20 ]
2013-02-25 23:18:34 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\ajax.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-25 23:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:21:50 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 23:21:50 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-25 23:22:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:22:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:23:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:23:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:23:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 23:23:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(3)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 23:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:23:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 23:23:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(3)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 23:26:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:26:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:26:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 23:26:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(4)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 23:28:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:28:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:29:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 40 ]
2013-02-25 23:29:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 40 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(40): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 40, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(2)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 23:30:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:30:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:31:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_arrary() ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 23:31:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_arrary() ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-25 23:32:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:32:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:32:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_arrary() ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 23:32:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_arrary() ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-25 23:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:38:42 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 23:38:42 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_id ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(4)
#2 [internal function]: Controller_Ajax->action_r()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-25 23:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:39:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\model\roleuser.php [ 39 ]
2013-02-25 23:39:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\model\roleuser.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-25 23:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:47:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:47:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:49:23 --- ERROR: ErrorException [ 8 ]: Use of undefined constant console - assumed 'console' ~ APPPATH\classes\controller\try.php [ 13 ]
2013-02-25 23:49:23 --- STRACE: ErrorException [ 8 ]: Use of undefined constant console - assumed 'console' ~ APPPATH\classes\controller\try.php [ 13 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(13): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 13, Array)
#1 [internal function]: Controller_Try->action_index()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-25 23:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-25 23:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-25 23:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}