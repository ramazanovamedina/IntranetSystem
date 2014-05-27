<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-08 12:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 12:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 13:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 13:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 13:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 13:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 13:04:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 13:04:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 13:05:13 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php on line 41 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 80 ]
2013-03-08 13:05:13 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php on line 41 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 80 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query\builder\insert.php(80): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 80, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php(41): Kohana_Database_Query_Builder_Insert->values('112')
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\parentprof.php(95): Model_Userinfo->create_parent_info(Object(Parentclass))
#3 [internal function]: Controller_Parentprof->action_create_user()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Parentprof))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-08 13:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 13:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 13:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 13:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 13:05:58 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php on line 42 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 80 ]
2013-03-08 13:05:58 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php on line 42 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 80 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query\builder\insert.php(80): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 80, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php(42): Kohana_Database_Query_Builder_Insert->values('113')
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\parentprof.php(95): Model_Userinfo->create_parent_info(Object(Parentclass))
#3 [internal function]: Controller_Parentprof->action_create_user()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Parentprof))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-08 13:05:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 13:05:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 13:07:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 13:07:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 13:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 13:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 13:07:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ APPPATH\classes\model\userinfo.php [ 40 ]
2013-03-08 13:07:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ APPPATH\classes\model\userinfo.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-08 13:08:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ APPPATH\classes\model\userinfo.php [ 40 ]
2013-03-08 13:08:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ APPPATH\classes\model\userinfo.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-08 13:08:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ APPPATH\classes\model\userinfo.php [ 40 ]
2013-03-08 13:08:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ APPPATH\classes\model\userinfo.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-08 13:08:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ APPPATH\classes\model\userinfo.php [ 40 ]
2013-03-08 13:08:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ APPPATH\classes\model\userinfo.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-08 13:08:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 13:08:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 13:08:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ APPPATH\classes\model\userinfo.php [ 40 ]
2013-03-08 13:08:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ APPPATH\classes\model\userinfo.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-08 13:08:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ APPPATH\classes\model\userinfo.php [ 40 ]
2013-03-08 13:08:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ APPPATH\classes\model\userinfo.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-08 13:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 13:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 13:09:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 13:09:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 13:09:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 13:09:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 13:09:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ APPPATH\classes\model\userinfo.php [ 40 ]
2013-03-08 13:09:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST) ~ APPPATH\classes\model\userinfo.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-08 13:09:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 13:09:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:03:30 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php on line 41 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 80 ]
2013-03-08 14:03:30 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php on line 41 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 80 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query\builder\insert.php(80): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 80, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php(41): Kohana_Database_Query_Builder_Insert->values('114')
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\parentprof.php(95): Model_Userinfo->create_parent_info(Object(Parentclass))
#3 [internal function]: Controller_Parentprof->action_create_user()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Parentprof))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-08 14:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:07:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:07:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:07:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$result' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\model\userinfo.php [ 43 ]
2013-03-08 14:07:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$result' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\model\userinfo.php [ 43 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-08 14:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:08:28 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2013-03-08 14:08:28 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(10): Kohana_ORM->find()
#1 C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php(32): Model_Us->getUserId('jgjhg')
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\parentprof.php(95): Model_Userinfo->create_parent_info(Object(Parentclass))
#3 [internal function]: Controller_Parentprof->action_create_user()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Parentprof))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-08 14:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:09:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:09:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:09:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:09:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:10:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:10:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:11:41 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2013-03-08 14:11:41 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(10): Kohana_ORM->find()
#1 C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php(32): Model_Us->getUserId('aa')
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\parentprof.php(95): Model_Userinfo->create_parent_info(Object(Parentclass))
#3 [internal function]: Controller_Parentprof->action_create_user()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Parentprof))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-08 14:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:32:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\model\userinfo.php [ 47 ]
2013-03-08 14:32:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\model\userinfo.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-08 14:33:08 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2013-03-08 14:33:08 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(10): Kohana_ORM->find()
#1 C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php(32): Model_Us->getUserId('zxcvb')
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\parentprof.php(95): Model_Userinfo->create_parent_info(Object(Parentclass))
#3 [internal function]: Controller_Parentprof->action_create_user()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Parentprof))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-08 14:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:47:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\model\userinfo.php [ 30 ]
2013-03-08 14:47:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\model\userinfo.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-08 14:48:23 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2013-03-08 14:48:23 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(10): Kohana_ORM->find()
#1 C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php(30): Model_Us->getUserId('qpp')
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\parentprof.php(95): Model_Userinfo->create_parent_info(Object(Parentclass))
#3 [internal function]: Controller_Parentprof->action_create_user()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Parentprof))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-08 14:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:51:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:51:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:51:37 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2013-03-08 14:51:37 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(10): Kohana_ORM->find()
#1 C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php(30): Model_Us->getUserId('zxcvbn')
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\parentprof.php(95): Model_Userinfo->create_parent_info(Object(Parentclass))
#3 [internal function]: Controller_Parentprof->action_create_user()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Parentprof))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-08 14:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:51:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:52:31 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2013-03-08 14:52:31 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(10): Kohana_ORM->find()
#1 C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php(30): Model_Us->getUserId('sdfghj')
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\parentprof.php(95): Model_Userinfo->create_parent_info(Object(Parentclass))
#3 [internal function]: Controller_Parentprof->action_create_user()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Parentprof))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-08 14:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:55:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$data' (T_VARIABLE) ~ APPPATH\classes\model\userinfo.php [ 31 ]
2013-03-08 14:55:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$data' (T_VARIABLE) ~ APPPATH\classes\model\userinfo.php [ 31 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-08 14:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 14:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 14:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:00:04 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php on line 45 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 80 ]
2013-03-08 15:00:04 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php on line 45 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 80 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query\builder\insert.php(80): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 80, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php(45): Kohana_Database_Query_Builder_Insert->values('124')
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\parentprof.php(95): Model_Userinfo->create_parent_info(Object(Parentclass))
#3 [internal function]: Controller_Parentprof->action_create_user()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Parentprof))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-08 15:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:00:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:00:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:13:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:13:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:14:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\model\roleuser.php [ 31 ]
2013-03-08 15:14:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\model\roleuser.php [ 31 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-08 15:14:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:14:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:14:13 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'lkkhn' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `full_name`, `password`, `date_of_birth`, `address`, `documents`) VALUES ('lkkhn', 'lkkhn@mail.ru', 'mbkbj', 'bf82755b7afc2e00ffb8f82d096e4d3739e3da66533c79ba1e059bd38bfafdbd', '1991.05.04', 'fghj,.', 'dfghj') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-08 15:14:13 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'lkkhn' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `full_name`, `password`, `date_of_birth`, `address`, `documents`) VALUES ('lkkhn', 'lkkhn@mail.ru', 'mbkbj', 'bf82755b7afc2e00ffb8f82d096e4d3739e3da66533c79ba1e059bd38bfafdbd', '1991.05.04', 'fghj,.', 'dfghj') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(32): Kohana_ORM->create()
#3 C:\xampp\htdocs\intranet\www\application\classes\controller\studentprof.php(67): Model_Us->create_user(Object(Studentclass))
#4 [internal function]: Controller_Studentprof->action_create_user()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Studentprof))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#9 {main}
2013-03-08 15:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:14:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:15:03 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '129-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('129', 1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-08 15:15:03 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '129-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('129', 1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(31): Kohana_ORM->create()
#3 C:\xampp\htdocs\intranet\www\application\classes\controller\studentprof.php(69): Model_Roleuser->create_user_role2('lkkhnmmm', 'student')
#4 [internal function]: Controller_Studentprof->action_create_user()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Studentprof))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#9 {main}
2013-03-08 15:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:16:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:16:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:23:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:23:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:23:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\model\roleuser.php [ 30 ]
2013-03-08 15:23:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\model\roleuser.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-08 15:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:23:22 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('131', ('admin', 'student', 'parent', 'teacher', 'or')) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-08 15:23:22 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('131', ('admin', 'student', 'parent', 'teacher', 'or')) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(31): Kohana_ORM->create()
#3 C:\xampp\htdocs\intranet\www\application\classes\controller\studentprof.php(69): Model_Roleuser->create_user_role2('lkkhnmmmnnvv', 'student')
#4 [internal function]: Controller_Studentprof->action_create_user()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Studentprof))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#9 {main}
2013-03-08 15:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:23:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:23:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:23:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:23:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:29:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:29:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:35:06 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `roles_users` (`user_id`) VALUES ('135', 1), ('135', 3) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-08 15:35:06 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `roles_users` (`user_id`) VALUES ('135', 1), ('135', 3) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(26): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\studentprof.php(68): Model_Roleuser->create_user_role('zvnq', 'student')
#3 [internal function]: Controller_Studentprof->action_create_user()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Studentprof))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-03-08 15:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:35:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:35:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-08 15:35:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-08 15:35:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}