<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-30 10:38:17 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_try ~ SYSPATH\classes\kohana\request\client\internal.php [ 96 ]
2013-01-30 10:38:17 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_try ~ SYSPATH\classes\kohana\request\client\internal.php [ 96 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-30 10:38:21 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_try ~ SYSPATH\classes\kohana\request\client\internal.php [ 96 ]
2013-01-30 10:38:21 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_try ~ SYSPATH\classes\kohana\request\client\internal.php [ 96 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-30 10:38:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH\classes\controller\try.php [ 9 ]
2013-01-30 10:38:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH\classes\controller\try.php [ 9 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 9, Array)
#1 [internal function]: Controller_Try->action_index()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-30 10:38:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH\classes\controller\try.php [ 9 ]
2013-01-30 10:38:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH\classes\controller\try.php [ 9 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 9, Array)
#1 [internal function]: Controller_Try->action_index()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-30 10:39:00 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'roleuser.id' in 'where clause' [ SELECT `roleuser`.* FROM `roles_users` AS `roleuser` WHERE `roleuser`.`id` = 1 LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-01-30 10:39:00 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'roleuser.id' in 'where clause' [ SELECT `roleuser`.* FROM `roles_users` AS `roleuser` WHERE `roleuser`.`id` = 1 LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `roleuse...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(1)
#5 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(9): Kohana_ORM::factory('roleuser', 1)
#6 [internal function]: Controller_Try->action_index()
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#11 {main}
2013-01-30 10:39:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\views\try.php [ 1 ]
2013-01-30 10:39:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\views\try.php [ 1 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\try.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(12): Kohana_Response->body(Object(View), '1')
#6 [internal function]: Controller_Try->action_index()
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#11 {main}
2013-01-30 10:39:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\views\try.php [ 1 ]
2013-01-30 10:39:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\views\try.php [ 1 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\try.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(12): Kohana_Response->body(Object(View), '1')
#6 [internal function]: Controller_Try->action_index()
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#11 {main}
2013-01-30 10:40:39 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, string given, called in C:\xampp\htdocs\intranet\www\application\classes\controller\try.php on line 12 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2013-01-30 10:40:39 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, string given, called in C:\xampp\htdocs\intranet\www\application\classes\controller\try.php on line 12 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(12): Kohana_View::factory('try', '1')
#2 [internal function]: Controller_Try->action_index()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-30 10:43:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\views\try.php [ 1 ]
2013-01-30 10:43:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\views\try.php [ 1 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\try.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(14): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Try->action_index()
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#11 {main}
2013-01-30 10:48:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'a' (T_STRING), expecting function (T_FUNCTION) ~ APPPATH\classes\role.php [ 5 ]
2013-01-30 10:48:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'a' (T_STRING), expecting function (T_FUNCTION) ~ APPPATH\classes\role.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-30 10:48:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$a' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\role.php [ 5 ]
2013-01-30 10:48:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$a' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\role.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-30 10:49:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'a' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\role.php [ 6 ]
2013-01-30 10:49:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'a' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\role.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-30 10:50:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'a' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\role.php [ 6 ]
2013-01-30 10:50:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'a' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\role.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-30 10:56:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$a' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\role.php [ 14 ]
2013-01-30 10:56:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$a' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\role.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-30 11:00:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$a' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\role.php [ 14 ]
2013-01-30 11:00:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$a' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\role.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-30 11:00:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\role.php [ 32 ]
2013-01-30 11:00:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\role.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-30 11:02:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\role.php [ 27 ]
2013-01-30 11:02:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\role.php [ 27 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\role.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 27, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(17): Role->getAll()
#2 [internal function]: Controller_Try->action_index()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-30 11:04:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\role.php [ 27 ]
2013-01-30 11:04:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\role.php [ 27 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\role.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 27, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(18): Role->getAll()
#2 [internal function]: Controller_Try->action_index()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-30 11:04:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\role.php [ 27 ]
2013-01-30 11:04:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\role.php [ 27 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\role.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 27, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(18): Role->getAll()
#2 [internal function]: Controller_Try->action_index()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-30 11:07:12 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 1 ]
2013-01-30 11:07:12 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 1 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\try.php(1): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(20): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Try->action_index()
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#11 {main}
2013-01-30 11:57:12 --- ERROR: ErrorException [ 8 ]: Undefined offset: 4 ~ APPPATH\classes\role.php [ 23 ]
2013-01-30 11:57:12 --- STRACE: ErrorException [ 8 ]: Undefined offset: 4 ~ APPPATH\classes\role.php [ 23 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\role.php(23): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(19): Role->getPermission('4')
#2 [internal function]: Controller_Try->action_index()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-30 11:57:45 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\role.php [ 13 ]
2013-01-30 11:57:45 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\role.php [ 13 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\role.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 13, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(18): Role->getNameById(NULL)
#2 [internal function]: Controller_Try->action_index()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-30 11:59:56 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\try.php [ 19 ]
2013-01-30 11:59:56 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\controller\try.php [ 19 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(19): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\xampp\htdocs...', 19, Array)
#1 [internal function]: Controller_Try->action_index()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-30 12:00:14 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 2 ]
2013-01-30 12:00:14 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 2 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\try.php(2): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(24): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Try->action_index()
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#11 {main}
2013-01-30 12:26:24 --- ERROR: ErrorException [ 2 ]: basename() expects parameter 1 to be string, array given ~ APPPATH\classes\controller\try.php [ 22 ]
2013-01-30 12:26:24 --- STRACE: ErrorException [ 2 ]: basename() expects parameter 1 to be string, array given ~ APPPATH\classes\controller\try.php [ 22 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'basename() expe...', 'C:\xampp\htdocs...', 22, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(22): basename(Array)
#2 [internal function]: Controller_Try->action_index()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-30 14:30:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING) ~ APPPATH\classes\controller\student\main.php [ 10 ]
2013-01-30 14:30:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING) ~ APPPATH\classes\controller\student\main.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-30 14:38:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ';' ~ APPPATH\classes\controller\trycontroller.php [ 38 ]
2013-01-30 14:38:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ';' ~ APPPATH\classes\controller\trycontroller.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-30 14:40:49 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\role.php [ 13 ]
2013-01-30 14:40:49 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\role.php [ 13 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\role.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 13, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\trycontroller.php(35): Role->getNameById(NULL)
#2 [internal function]: Controller_Trycontroller->before()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Student_Main))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-30 14:41:36 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\role.php [ 23 ]
2013-01-30 14:41:36 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\role.php [ 23 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\role.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\trycontroller.php(36): Role->getPermission(NULL)
#2 [internal function]: Controller_Trycontroller->before()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Student_Main))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-30 14:48:40 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\role.php [ 23 ]
2013-01-30 14:48:40 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\role.php [ 23 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\role.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\trycontroller.php(38): Role->getPermission(NULL)
#2 [internal function]: Controller_Trycontroller->before()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Student_Main))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-30 14:49:12 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\role.php [ 23 ]
2013-01-30 14:49:12 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\role.php [ 23 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\role.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\trycontroller.php(40): Role->getPermission(NULL)
#2 [internal function]: Controller_Trycontroller->before()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Student_Main))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-30 14:50:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\classes\controller\trycontroller.php [ 22 ]
2013-01-30 14:50:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\classes\controller\trycontroller.php [ 22 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\trycontroller.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 22, Array)
#1 [internal function]: Controller_Trycontroller->before()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Student_Main))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-30 15:13:02 --- ERROR: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH\classes\controller\auth.php [ 31 ]
2013-01-30 15:13:02 --- STRACE: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH\classes\controller\auth.php [ 31 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A session had a...', 'C:\xampp\htdocs...', 31, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\auth.php(31): session_start()
#2 [internal function]: Controller_Auth->action_index()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-30 15:27:29 --- ERROR: ErrorException [ 1 ]: Call to undefined function sieof() ~ APPPATH\classes\controller\trycontroller.php [ 44 ]
2013-01-30 15:27:29 --- STRACE: ErrorException [ 1 ]: Call to undefined function sieof() ~ APPPATH\classes\controller\trycontroller.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-30 15:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL parent was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-30 15:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL parent was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-30 15:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-30 15:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-30 15:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sadmin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-30 15:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sadmin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}