<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-29 11:18:14 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Mycontrollerteacher' not found ~ APPPATH\classes\controller\teacher\main.php [ 3 ]
2013-01-29 11:18:14 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Mycontrollerteacher' not found ~ APPPATH\classes\controller\teacher\main.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 11:23:57 --- ERROR: View_Exception [ 0 ]: The requested view teacherview could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-01-29 11:23:57 --- STRACE: View_Exception [ 0 ]: The requested view teacherview could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('teacherview')
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(30): Kohana_View->__construct('teacherview', NULL)
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\teacher\main.php(11): Kohana_View::factory('teacherview')
#3 [internal function]: Controller_Teacher_Main->action_index()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Teacher_Main))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-29 11:24:57 --- ERROR: View_Exception [ 0 ]: The requested view teacherview could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-01-29 11:24:57 --- STRACE: View_Exception [ 0 ]: The requested view teacherview could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('teacherview')
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(30): Kohana_View->__construct('teacherview', NULL)
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\teacher\main.php(11): Kohana_View::factory('teacherview')
#3 [internal function]: Controller_Teacher_Main->action_index()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Teacher_Main))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-29 11:25:04 --- ERROR: View_Exception [ 0 ]: The requested view teacherview could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-01-29 11:25:04 --- STRACE: View_Exception [ 0 ]: The requested view teacherview could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('teacherview')
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(30): Kohana_View->__construct('teacherview', NULL)
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\teacher\main.php(11): Kohana_View::factory('teacherview')
#3 [internal function]: Controller_Teacher_Main->action_index()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Teacher_Main))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-29 11:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL intranet was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL intranet was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:53:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\newsview.php [ 23 ]
2013-01-29 11:53:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\newsview.php [ 23 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\newsview.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\newsview.php(23): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_News))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 11:57:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\newsview.php [ 23 ]
2013-01-29 11:57:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\newsview.php [ 23 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\newsview.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_News))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-29 11:58:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\newsview.php [ 23 ]
2013-01-29 11:58:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\newsview.php [ 23 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\newsview.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_News))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-29 12:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL news was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 12:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL news was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 12:14:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH\classes\controller\news.php [ 14 ]
2013-01-29 12:14:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH\classes\controller\news.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 12:14:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH\classes\controller\news.php [ 14 ]
2013-01-29 12:14:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH\classes\controller\news.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 12:14:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: articles ~ APPPATH\views\show.php [ 4 ]
2013-01-29 12:14:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: articles ~ APPPATH\views\show.php [ 4 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\show.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\mainview.php(25): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_News))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 12:16:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\controller\news.php [ 12 ]
2013-01-29 12:16:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\controller\news.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 12:16:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\controller\news.php [ 12 ]
2013-01-29 12:16:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\controller\news.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 12:24:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\controller\news.php [ 12 ]
2013-01-29 12:24:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\controller\news.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 12:24:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH\classes\controller\news.php [ 14 ]
2013-01-29 12:24:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH\classes\controller\news.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 12:24:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/1-Поступление was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 12:24:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/1-Поступление was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 12:25:28 --- ERROR: ErrorException [ 4096 ]: Object of class Model_New could not be converted to string ~ APPPATH\classes\model\new.php [ 14 ]
2013-01-29 12:25:28 --- STRACE: ErrorException [ 4096 ]: Object of class Model_New could not be converted to string ~ APPPATH\classes\model\new.php [ 14 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\new.php(14): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\news.php(15): Model_New->get_all()
#2 [internal function]: Controller_News->action_index()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_News))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 14:16:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'id' in 'where clause' [ SELECT * FROM news WHERE id =1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-01-29 14:16:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'id' in 'where clause' [ SELECT * FROM news WHERE id =1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM n...', false, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\model\article.php(23): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\intranet\www\application\classes\controller\articles.php(12): Model_Article->get_article('1')
#3 [internal function]: Controller_Articles->action_article()
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Articles))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-29 14:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 14:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 14:17:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 14:17:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 14:17:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 14:17:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 14:18:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 14:18:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 14:22:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\controller\news.php [ 14 ]
2013-01-29 14:22:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\controller\news.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 14:23:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 14:23:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 14:24:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 14:24:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 14:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 14:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 14:26:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 14:26:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 14:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 14:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 14:42:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 14:42:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 14:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 14:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/news.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 14:45:26 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\maincontroller.php [ 9 ]
2013-01-29 14:45:26 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\maincontroller.php [ 9 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\maincontroller.php(9): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\xampp\htdocs...', 9, Array)
#1 [internal function]: Controller_Maincontroller->before()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 14:47:00 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\maincontroller.php [ 9 ]
2013-01-29 14:47:00 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\maincontroller.php [ 9 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\maincontroller.php(9): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\xampp\htdocs...', 9, Array)
#1 [internal function]: Controller_Maincontroller->before()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 15:08:48 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_New as array ~ APPPATH\views\news.php [ 4 ]
2013-01-29 15:08:48 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_New as array ~ APPPATH\views\news.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 15:09:57 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_New as array ~ APPPATH\views\news.php [ 9 ]
2013-01-29 15:09:57 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_New as array ~ APPPATH\views\news.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 16:13:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\controller\articles.php [ 11 ]
2013-01-29 16:13:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\controller\articles.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 16:14:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: author_id ~ APPPATH\views\article.php [ 4 ]
2013-01-29 16:14:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: author_id ~ APPPATH\views\article.php [ 4 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\article.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\mainview.php(28): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Articles))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 16:14:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\controller\articles.php [ 12 ]
2013-01-29 16:14:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\controller\articles.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 16:14:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\controller\articles.php [ 12 ]
2013-01-29 16:14:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\controller\articles.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 16:21:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author_id ~ APPPATH\classes\controller\news.php [ 16 ]
2013-01-29 16:21:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author_id ~ APPPATH\classes\controller\news.php [ 16 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\news.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 16, Array)
#1 [internal function]: Controller_News->action_index()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_News))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 16:24:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author_id ~ APPPATH\classes\controller\news.php [ 16 ]
2013-01-29 16:24:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author_id ~ APPPATH\classes\controller\news.php [ 16 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\news.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 16, Array)
#1 [internal function]: Controller_News->action_index()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_News))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 16:25:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author_id ~ APPPATH\classes\controller\news.php [ 16 ]
2013-01-29 16:25:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author_id ~ APPPATH\classes\controller\news.php [ 16 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\news.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 16, Array)
#1 [internal function]: Controller_News->action_index()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_News))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 16:25:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author_id ~ APPPATH\classes\controller\news.php [ 16 ]
2013-01-29 16:25:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author_id ~ APPPATH\classes\controller\news.php [ 16 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\news.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 16, Array)
#1 [internal function]: Controller_News->action_index()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_News))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 16:26:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author_id ~ APPPATH\classes\controller\news.php [ 16 ]
2013-01-29 16:26:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author_id ~ APPPATH\classes\controller\news.php [ 16 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\news.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 16, Array)
#1 [internal function]: Controller_News->action_index()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_News))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 16:26:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author_id ~ APPPATH\classes\controller\news.php [ 16 ]
2013-01-29 16:26:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author_id ~ APPPATH\classes\controller\news.php [ 16 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\news.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 16, Array)
#1 [internal function]: Controller_News->action_index()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_News))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 16:27:42 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author_id ~ APPPATH\classes\controller\news.php [ 16 ]
2013-01-29 16:27:42 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author_id ~ APPPATH\classes\controller\news.php [ 16 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\news.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 16, Array)
#1 [internal function]: Controller_News->action_index()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_News))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 16:52:47 --- ERROR: ErrorException [ 8 ]: Undefined index: user_id ~ MODPATH\orm\classes\kohana\orm.php [ 564 ]
2013-01-29 16:52:47 --- STRACE: ErrorException [ 8 ]: Undefined index: user_id ~ MODPATH\orm\classes\kohana\orm.php [ 564 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(564): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 564, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\news.php(20): Kohana_ORM->__get('user')
#2 [internal function]: Controller_News->action_index()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_News))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 16:53:14 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH\orm\classes\kohana\orm.php [ 564 ]
2013-01-29 16:53:14 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH\orm\classes\kohana\orm.php [ 564 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(564): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 564, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\news.php(20): Kohana_ORM->__get('user')
#2 [internal function]: Controller_News->action_index()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_News))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 16:57:47 --- ERROR: Kohana_Exception [ 0 ]: The username property does not exist in the Model_New class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-01-29 16:57:47 --- STRACE: Kohana_Exception [ 0 ]: The username property does not exist in the Model_New class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\news.php(20): Kohana_ORM->__get('username')
#1 [internal function]: Controller_News->action_index()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_News))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 22:01:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '++' (T_INC), expecting ')' ~ APPPATH\classes\controller\news.php [ 25 ]
2013-01-29 22:01:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '++' (T_INC), expecting ')' ~ APPPATH\classes\controller\news.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 22:01:38 --- ERROR: ErrorException [ 2 ]: count() expects at least 1 parameter, 0 given ~ APPPATH\classes\controller\news.php [ 25 ]
2013-01-29 22:01:38 --- STRACE: ErrorException [ 2 ]: count() expects at least 1 parameter, 0 given ~ APPPATH\classes\controller\news.php [ 25 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'count() expects...', 'C:\xampp\htdocs...', 25, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\news.php(25): count()
#2 [internal function]: Controller_News->action_index()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_News))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 22:02:50 --- ERROR: ErrorException [ 8 ]: Use of undefined constant i - assumed 'i' ~ APPPATH\classes\controller\news.php [ 27 ]
2013-01-29 22:02:50 --- STRACE: ErrorException [ 8 ]: Use of undefined constant i - assumed 'i' ~ APPPATH\classes\controller\news.php [ 27 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\news.php(27): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 27, Array)
#1 [internal function]: Controller_News->action_index()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_News))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 22:07:30 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\kohana\auth\orm.php [ 76 ]
2013-01-29 22:07:30 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\kohana\auth\orm.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 22:07:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\kohana\auth\orm.php [ 76 ]
2013-01-29 22:07:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\kohana\auth\orm.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 22:07:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\kohana\auth\orm.php [ 76 ]
2013-01-29 22:07:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\kohana\auth\orm.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 22:08:14 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\kohana\auth\orm.php [ 76 ]
2013-01-29 22:08:14 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\kohana\auth\orm.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}