<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-26 00:06:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''role_id' = 4' at line 1 [ SELECT 'user_id' FROMroles_usersWHERE 'role_id' = 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-26 00:06:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''role_id' = 4' at line 1 [ SELECT 'user_id' FROMroles_usersWHERE 'role_id' = 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT 'user_id...', false, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(43): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(12): Model_Roleuser->getAllUsersByRoleId(4)
#3 [internal function]: Controller_Try->action_index()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-02-26 00:06:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:06:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:07:41 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''role_id' = 4' at line 1 [ SELECT 'user_id' FROMroles_usersWHERE 'role_id' = 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-26 00:07:41 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''role_id' = 4' at line 1 [ SELECT 'user_id' FROMroles_usersWHERE 'role_id' = 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT 'user_id...', false, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(43): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(12): Model_Roleuser->getAllUsersByRoleId(4)
#3 [internal function]: Controller_Try->action_index()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-02-26 00:07:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:07:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:09:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'role_id = 4' at line 1 [ SELECT user_id FROMroles_usersWHERE role_id = 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-26 00:09:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'role_id = 4' at line 1 [ SELECT user_id FROMroles_usersWHERE role_id = 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT user_id ...', false, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(43): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(12): Model_Roleuser->getAllUsersByRoleId(4)
#3 [internal function]: Controller_Try->action_index()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-02-26 00:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:11:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'DB' (T_STRING) ~ APPPATH\classes\model\roleuser.php [ 41 ]
2013-02-26 00:11:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'DB' (T_STRING) ~ APPPATH\classes\model\roleuser.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-26 00:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:11:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'DB' (T_STRING) ~ APPPATH\classes\model\roleuser.php [ 41 ]
2013-02-26 00:11:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'DB' (T_STRING) ~ APPPATH\classes\model\roleuser.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-26 00:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:11:17 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'role_id = 4' at line 1 [ SELECT user_id FROMroles_usersWHERE role_id = 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-26 00:11:17 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'role_id = 4' at line 1 [ SELECT user_id FROMroles_usersWHERE role_id = 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT user_id ...', false, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(43): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(12): Model_Roleuser->getAllUsersByRoleId(4)
#3 [internal function]: Controller_Try->action_index()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-02-26 00:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:11:23 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'role_id = 5' at line 1 [ SELECT user_id FROMroles_usersWHERE role_id = 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-26 00:11:23 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'role_id = 5' at line 1 [ SELECT user_id FROMroles_usersWHERE role_id = 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT user_id ...', false, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(43): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(5)
#3 [internal function]: Controller_Ajax->action_r()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-02-26 00:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:11:44 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'role_id = 3' at line 1 [ SELECT user_id FROMroles_usersWHERE role_id = 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-26 00:11:44 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'role_id = 3' at line 1 [ SELECT user_id FROMroles_usersWHERE role_id = 3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT user_id ...', false, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(43): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(3)
#3 [internal function]: Controller_Ajax->action_r()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-02-26 00:11:48 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'role_id = 5' at line 1 [ SELECT user_id FROMroles_usersWHERE role_id = 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-26 00:11:48 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'role_id = 5' at line 1 [ SELECT user_id FROMroles_usersWHERE role_id = 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT user_id ...', false, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(43): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(12): Model_Roleuser->getAllUsersByRoleId(5)
#3 [internal function]: Controller_Ajax->action_r()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-02-26 00:19:01 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''role_id' = 4' at line 1 [ SELECT 'user_id' FROMroles_usersWHERE 'role_id' = 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-26 00:19:01 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''role_id' = 4' at line 1 [ SELECT 'user_id' FROMroles_usersWHERE 'role_id' = 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT 'user_id...', false, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(43): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(12): Model_Roleuser->getAllUsersByRoleId(4)
#3 [internal function]: Controller_Try->action_index()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-02-26 00:19:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:19:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:19:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''role_id' = 4' at line 1 [ SELECT 'user_id' FROMroles_usersWHERE 'role_id' = 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-26 00:19:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''role_id' = 4' at line 1 [ SELECT 'user_id' FROMroles_usersWHERE 'role_id' = 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT 'user_id...', false, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(43): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(12): Model_Roleuser->getAllUsersByRoleId(4)
#3 [internal function]: Controller_Try->action_index()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-02-26 00:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:27:26 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 6 ]
2013-02-26 00:27:26 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 6 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\try.php(6): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Try))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-26 00:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:27:58 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 6 ]
2013-02-26 00:27:58 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 6 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\try.php(6): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Try))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-26 00:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:28:15 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\ajax.php [ 20 ]
2013-02-26 00:28:15 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\ajax.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-26 00:28:18 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\ajax.php [ 20 ]
2013-02-26 00:28:18 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\ajax.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-26 00:29:41 --- ERROR: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\views\try.php [ 6 ]
2013-02-26 00:29:41 --- STRACE: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\views\try.php [ 6 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\try.php(6): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Try))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-26 00:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:29:54 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 6 ]
2013-02-26 00:29:54 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 6 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\try.php(6): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Try))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-26 00:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:33:28 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 6 ]
2013-02-26 00:33:28 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 6 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\try.php(6): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Try))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-26 00:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:38:43 --- ERROR: ErrorException [ 2 ]: implode(): Argument must be an array ~ APPPATH\views\try.php [ 2 ]
2013-02-26 00:38:43 --- STRACE: ErrorException [ 2 ]: implode(): Argument must be an array ~ APPPATH\views\try.php [ 2 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Argu...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\intranet\www\application\views\try.php(2): implode(Object(Database_MySQL_Result))
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(30): Kohana_View->__toString()
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Try))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#14 {main}
2013-02-26 00:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:39:26 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 2 ]
2013-02-26 00:39:26 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 2 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\intranet\www\application\views\try.php(2): implode(Array)
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(30): Kohana_View->__toString()
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Try))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#14 {main}
2013-02-26 00:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:40:41 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 2 ]
2013-02-26 00:40:41 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 2 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\intranet\www\application\views\try.php(2): implode(Array)
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(30): Kohana_View->__toString()
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Try))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#14 {main}
2013-02-26 00:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:40:44 --- ERROR: ErrorException [ 2 ]: mysql_query(): Unable to save result set ~ MODPATH\database\classes\kohana\database\mysql.php [ 186 ]
2013-02-26 00:40:44 --- STRACE: ErrorException [ 2 ]: mysql_query(): Unable to save result set ~ MODPATH\database\classes\kohana\database\mysql.php [ 186 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_query(): ...', 'C:\xampp\htdocs...', 186, Array)
#1 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\mysql.php(186): mysql_query('SHOW FULL COLUM...', Resource id #68)
#2 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('roles_users')
#4 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#5 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\model.php(26): Kohana_ORM->__construct()
#8 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(10): Kohana_Model::factory('roleuser')
#9 [internal function]: Controller_Try->action_index()
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#14 {main}
2013-02-26 00:40:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:40:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:40:51 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 6 ]
2013-02-26 00:40:52 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 6 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\try.php(6): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Try))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-26 00:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:41:21 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 6 ]
2013-02-26 00:41:21 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\try.php [ 6 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\try.php(6): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Try))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-26 00:41:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:41:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:42:29 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\ajax.php [ 20 ]
2013-02-26 00:42:29 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\ajax.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-26 00:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:48:44 --- ERROR: ErrorException [ 1 ]: Class 'Us' not found ~ APPPATH\classes\model\roleuser.php [ 40 ]
2013-02-26 00:48:44 --- STRACE: ErrorException [ 1 ]: Class 'Us' not found ~ APPPATH\classes\model\roleuser.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-26 00:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:49:05 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2013-02-26 00:49:05 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(15): Kohana_ORM->find()
#1 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(44): Model_Us->getUsernameById(Object(Model_Roleuser))
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(12): Model_Roleuser->getAllUsersByRoleId(4)
#3 [internal function]: Controller_Try->action_index()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-02-26 00:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:49:57 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2013-02-26 00:49:57 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(15): Kohana_ORM->find()
#1 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(44): Model_Us->getUsernameById(Object(Model_Roleuser))
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(12): Model_Roleuser->getAllUsersByRoleId(4)
#3 [internal function]: Controller_Try->action_index()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-02-26 00:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:50:40 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2013-02-26 00:50:40 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(15): Kohana_ORM->find()
#1 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(44): Model_Us->getUsernameById(Object(Model_Roleuser))
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(12): Model_Roleuser->getAllUsersByRoleId(4)
#3 [internal function]: Controller_Try->action_index()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-02-26 00:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:51:50 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2013-02-26 00:51:50 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(15): Kohana_ORM->find()
#1 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(60): Model_Us->getUsernameById(Object(Model_Roleuser))
#2 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(40): Model_Roleuser->k(Object(Database_MySQL_Result))
#3 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(12): Model_Roleuser->getAllUsersByRoleId(4)
#4 [internal function]: Controller_Try->action_index()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-26 00:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:52:08 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2013-02-26 00:52:08 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(15): Kohana_ORM->find()
#1 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(54): Model_Us->getUsernameById(Object(Model_Roleuser))
#2 C:\xampp\htdocs\intranet\www\application\classes\model\roleuser.php(40): Model_Roleuser->k(Object(Database_MySQL_Result))
#3 C:\xampp\htdocs\intranet\www\application\classes\controller\try.php(12): Model_Roleuser->getAllUsersByRoleId(4)
#4 [internal function]: Controller_Try->action_index()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Try))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-26 00:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:52:54 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\try.php [ 5 ]
2013-02-26 00:52:54 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\try.php [ 5 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\try.php(5): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Try))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-26 00:52:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:52:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:53:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 00:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 00:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 01:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 01:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 12:16:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 12:16:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 12:16:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 12:16:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:03:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:03:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:10:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:10:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:46:48 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 60 ]
2013-02-26 13:46:48 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 60 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(60): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 60, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-26 13:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:47:36 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 60 ]
2013-02-26 13:47:36 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 60 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(60): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 60, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-26 13:47:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:47:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:51:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:51:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 13:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 13:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:08:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:08:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:08:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:08:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:09:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:09:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:09:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:09:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:09:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:09:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:13:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:13:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:13:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:13:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:13:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:13:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:34:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:34:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:34:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:34:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:34:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:34:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:34:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:34:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:35:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:35:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 14:35:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 14:35:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 15:04:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 15:04:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 15:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 15:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 15:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 15:04:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 15:04:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 15:04:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 15:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 15:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 15:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 15:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 15:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 15:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 15:06:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 15:06:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 15:06:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 15:06:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 15:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 15:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 15:06:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 15:06:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 15:06:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 15:06:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 15:06:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 15:06:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 18:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 18:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 18:38:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 18:38:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 18:39:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 18:39:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 18:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 18:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 18:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 18:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 18:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 18:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 18:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 18:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 18:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 18:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 18:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 18:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 18:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 18:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 18:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 18:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 18:45:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 18:45:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 18:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 18:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 23:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 23:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 23:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 23:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-26 23:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-26 23:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}