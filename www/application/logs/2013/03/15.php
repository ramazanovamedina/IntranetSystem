<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-15 12:19:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 12:19:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 12:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 12:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 12:24:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 12:24:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 12:31:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 12:31:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 12:31:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 12:31:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 12:32:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\updateor.php [ 12 ]
2013-03-15 12:32:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\updateor.php [ 12 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\updateor.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 12, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Orprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-15 12:32:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 12:32:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 12:53:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\updateor.php [ 12 ]
2013-03-15 12:53:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\updateor.php [ 12 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\updateor.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 12, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Orprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-15 12:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 12:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 12:54:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 12:54:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 13:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 13:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 13:07:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 13:07:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 13:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 13:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 13:07:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 13:07:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 13:13:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 13:13:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 13:31:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 13:31:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 13:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 13:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 13:31:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: or_username ~ APPPATH\classes\controller\orprof.php [ 122 ]
2013-03-15 13:31:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: or_username ~ APPPATH\classes\controller\orprof.php [ 122 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\orprof.php(122): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 122, Array)
#1 [internal function]: Controller_Orprof->action_update()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orprof))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-15 13:32:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 13:32:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 13:33:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: or_username ~ APPPATH\classes\controller\orprof.php [ 122 ]
2013-03-15 13:33:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: or_username ~ APPPATH\classes\controller\orprof.php [ 122 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\orprof.php(122): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 122, Array)
#1 [internal function]: Controller_Orprof->action_update()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orprof))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-15 13:34:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: or_username ~ APPPATH\classes\controller\orprof.php [ 122 ]
2013-03-15 13:34:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: or_username ~ APPPATH\classes\controller\orprof.php [ 122 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\orprof.php(122): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 122, Array)
#1 [internal function]: Controller_Orprof->action_update()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orprof))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-15 13:35:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 13:35:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 13:35:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: or_username ~ APPPATH\classes\controller\orprof.php [ 123 ]
2013-03-15 13:35:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: or_username ~ APPPATH\classes\controller\orprof.php [ 123 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\orprof.php(123): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 123, Array)
#1 [internal function]: Controller_Orprof->action_update()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orprof))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-15 13:36:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: or_username ~ APPPATH\classes\controller\orprof.php [ 123 ]
2013-03-15 13:36:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: or_username ~ APPPATH\classes\controller\orprof.php [ 123 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\orprof.php(123): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 123, Array)
#1 [internal function]: Controller_Orprof->action_update()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orprof))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-15 13:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 13:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 14:08:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 14:08:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 14:09:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 14:09:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 14:09:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method ORM::facory() ~ APPPATH\classes\controller\ajax.php [ 124 ]
2013-03-15 14:09:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method ORM::facory() ~ APPPATH\classes\controller\ajax.php [ 124 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-15 14:09:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 14:09:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 14:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 14:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 14:30:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 14:30:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 14:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 14:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 14:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 14:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 14:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 14:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 14:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 14:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 14:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 14:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 14:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 14:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 14:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 14:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 14:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 14:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 14:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 14:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 15:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 15:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 15:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 15:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 15:04:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 15:04:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 15:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 15:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 15:09:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 15:09:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 15:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 15:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 15:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 15:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 15:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 15:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 15:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 15:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 15:22:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 15:22:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 15:22:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 15:22:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 15:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 15:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 15:24:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 15:24:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 15:24:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 15:24:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 15:24:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 15:24:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 17:17:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 17:17:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 17:28:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 17:28:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 17:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 17:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 17:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 17:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 17:29:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 17:29:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 17:29:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 17:29:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 17:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 17:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 17:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 17:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 17:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 17:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 17:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 17:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 17:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 17:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 17:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 17:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 17:49:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: ors ~ APPPATH\views\updatediv.php [ 57 ]
2013-03-15 17:49:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: ors ~ APPPATH\views\updatediv.php [ 57 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\updatediv.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 57, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(15): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-15 17:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 17:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 17:59:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: ors ~ APPPATH\views\updatediv.php [ 57 ]
2013-03-15 17:59:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: ors ~ APPPATH\views\updatediv.php [ 57 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\updatediv.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 57, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(15): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-15 17:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 17:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 17:59:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: ors ~ APPPATH\views\updatediv.php [ 57 ]
2013-03-15 17:59:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: ors ~ APPPATH\views\updatediv.php [ 57 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\updatediv.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 57, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(15): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-15 17:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 17:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:00:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: ors ~ APPPATH\views\updatediv.php [ 57 ]
2013-03-15 18:00:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: ors ~ APPPATH\views\updatediv.php [ 57 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\updatediv.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 57, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(15): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-15 18:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:02:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\views\usertemplate.php [ 18 ]
2013-03-15 18:02:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\views\usertemplate.php [ 18 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 18, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#9 {main}
2013-03-15 18:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:02:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: ors ~ APPPATH\views\updatediv.php [ 57 ]
2013-03-15 18:02:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: ors ~ APPPATH\views\updatediv.php [ 57 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\updatediv.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 57, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(15): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-15 18:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:03:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:03:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:04:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:04:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:04:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:04:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:04:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:04:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:06:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:06:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:06:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:06:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:06:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:06:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:07:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:07:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:07:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:07:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:14:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:14:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:32:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:32:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:35:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:35:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:37:39 --- ERROR: Kohana_Exception [ 0 ]: Cannot update us model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2013-03-15 18:37:39 --- STRACE: Kohana_Exception [ 0 ]: Cannot update us model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(89): Kohana_ORM->update()
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\orprof.php(154): Model_Us->update_user(Object(Orclass), Object(Model_Roleuser))
#2 [internal function]: Controller_Orprof->action_update_user()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orprof))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-15 18:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:38:33 --- ERROR: Kohana_Exception [ 0 ]: Cannot update us model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2013-03-15 18:38:33 --- STRACE: Kohana_Exception [ 0 ]: Cannot update us model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(90): Kohana_ORM->update()
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\orprof.php(153): Model_Us->update_user(Object(Orclass), Object(Model_Roleuser))
#2 [internal function]: Controller_Orprof->action_update_user()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orprof))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-15 18:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:39:56 --- ERROR: Kohana_Exception [ 0 ]: Cannot update us model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2013-03-15 18:39:56 --- STRACE: Kohana_Exception [ 0 ]: Cannot update us model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(89): Kohana_ORM->update()
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\orprof.php(154): Model_Us->update_user(Object(Orclass), Object(Model_Roleuser))
#2 [internal function]: Controller_Orprof->action_update_user()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orprof))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-15 18:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:40:23 --- ERROR: Kohana_Exception [ 0 ]: Cannot update us model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2013-03-15 18:40:23 --- STRACE: Kohana_Exception [ 0 ]: Cannot update us model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(89): Kohana_ORM->update()
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\orprof.php(155): Model_Us->update_user(Object(Orclass), Object(Model_Roleuser))
#2 [internal function]: Controller_Orprof->action_update_user()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orprof))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-15 18:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 18:45:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 18:45:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:43:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH\views\usertemplate.php [ 15 ]
2013-03-15 19:43:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH\views\usertemplate.php [ 15 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Parentprof))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#9 {main}
2013-03-15 19:43:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:43:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:51:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\views\usertemplate.php [ 18 ]
2013-03-15 19:51:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\views\usertemplate.php [ 18 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 18, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#9 {main}
2013-03-15 19:51:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:51:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:51:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:51:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 19:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 19:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:00:41 --- ERROR: Kohana_Exception [ 0 ]: Cannot update us model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2013-03-15 20:00:41 --- STRACE: Kohana_Exception [ 0 ]: Cannot update us model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(89): Kohana_ORM->update()
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\orprof.php(154): Model_Us->update_user(Object(Orclass), Object(Model_Roleuser))
#2 [internal function]: Controller_Orprof->action_update_user()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orprof))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-15 20:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:07:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:07:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:07:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\views\usertemplate.php [ 18 ]
2013-03-15 20:07:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\views\usertemplate.php [ 18 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 18, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Adminprof))
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#9 {main}
2013-03-15 20:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:10:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:10:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:25:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 1' at line 1 [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = () LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-15 20:25:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 1' at line 1 [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = () LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `us`.* F...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(90): Model_Us->getFullNameById(Array)
#5 [internal function]: Controller_Ajax->action_selectstudent()
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-15 20:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:32:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:32:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:34:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:34:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:35:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH\classes\model\userinfo.php [ 64 ]
2013-03-15 20:35:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH\classes\model\userinfo.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-15 20:35:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:35:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:36:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:36:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:41:34 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\model\userinfo.php [ 56 ]
2013-03-15 20:41:34 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\model\userinfo.php [ 56 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 56, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(86): Model_Userinfo->getStudentIdByClass(8, '??')
#2 [internal function]: Controller_Ajax->action_selectstudent()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-15 20:41:43 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\model\userinfo.php [ 56 ]
2013-03-15 20:41:43 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\model\userinfo.php [ 56 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 56, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(86): Model_Userinfo->getStudentIdByClass(7, '??')
#2 [internal function]: Controller_Ajax->action_selectstudent()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-15 20:41:47 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\model\userinfo.php [ 56 ]
2013-03-15 20:41:47 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\model\userinfo.php [ 56 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 56, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(86): Model_Userinfo->getStudentIdByClass(6, '??')
#2 [internal function]: Controller_Ajax->action_selectstudent()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-15 20:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:44:45 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = (('78'), ('78')) LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-15 20:44:45 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = (('78'), ('78')) LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `us`.* F...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(90): Model_Us->getFullNameById(Array)
#5 [internal function]: Controller_Ajax->action_selectstudent()
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-15 20:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:45:44 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 456 ]
2013-03-15 20:45:44 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 456 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database.php(456): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 456, Array)
#1 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query\builder.php(116): Kohana_Database->quote(Object(Database_MySQL_Result))
#2 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query\builder\select.php(370): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#3 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#5 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#6 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(19): Kohana_ORM->find()
#7 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(90): Model_Us->getFullNameById(Object(Database_MySQL_Result))
#8 [internal function]: Controller_Ajax->action_selectstudent()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-15 20:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 20:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 20:46:48 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = (('78'), ('78')) LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-15 20:46:48 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = (('78'), ('78')) LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `us`.* F...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(90): Model_Us->getFullNameById(Array)
#5 [internal function]: Controller_Ajax->action_selectstudent()
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-15 22:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 22:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 22:55:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: studenets ~ APPPATH\classes\model\userinfo.php [ 49 ]
2013-03-15 22:55:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: studenets ~ APPPATH\classes\model\userinfo.php [ 49 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 49, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(86): Model_Userinfo->getStudentIdByClass(1, '??')
#2 [internal function]: Controller_Ajax->action_selectstudent()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-15 22:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 22:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 22:56:11 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = (('78'), ('78')) LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-15 22:56:11 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = (('78'), ('78')) LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `us`.* F...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(90): Model_Us->getFullNameById(Array)
#5 [internal function]: Controller_Ajax->action_selectstudent()
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-15 23:22:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:22:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:22:12 --- ERROR: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\classes\model\userinfo.php [ 49 ]
2013-03-15 23:22:12 --- STRACE: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\classes\model\userinfo.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-15 23:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:23:04 --- ERROR: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\classes\model\userinfo.php [ 50 ]
2013-03-15 23:23:04 --- STRACE: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\classes\model\userinfo.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-15 23:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:24:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 1' at line 1 [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = () LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-15 23:24:31 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 1' at line 1 [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = () LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `us`.* F...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(90): Model_Us->getFullNameById(Array)
#5 [internal function]: Controller_Ajax->action_selectstudent()
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-15 23:24:54 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 1' at line 1 [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = () LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-15 23:24:54 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 1' at line 1 [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = () LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `us`.* F...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(90): Model_Us->getFullNameById(Array)
#5 [internal function]: Controller_Ajax->action_selectstudent()
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-15 23:25:00 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 1' at line 1 [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = () LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-15 23:25:00 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 1' at line 1 [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = () LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `us`.* F...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(90): Model_Us->getFullNameById(Array)
#5 [internal function]: Controller_Ajax->action_selectstudent()
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-15 23:27:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:27:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:27:08 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = (('3'), ('4')) LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-15 23:27:08 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = (('3'), ('4')) LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `us`.* F...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(90): Model_Us->getFullNameById(Array)
#5 [internal function]: Controller_Ajax->action_selectstudent()
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-15 23:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:28:42 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = (('80'), ('80')) LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-15 23:28:42 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = (('80'), ('80')) LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `us`.* F...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(90): Model_Us->getFullNameById(Array)
#5 [internal function]: Controller_Ajax->action_selectstudent()
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-15 23:29:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:29:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:29:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 1' at line 1 [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = () LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-15 23:29:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 1' at line 1 [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = () LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `us`.* F...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(90): Model_Us->getFullNameById(Array)
#5 [internal function]: Controller_Ajax->action_selectstudent()
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-15 23:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:29:53 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 1' at line 1 [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = () LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-15 23:29:53 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 1' at line 1 [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = () LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `us`.* F...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(90): Model_Us->getFullNameById(Array)
#5 [internal function]: Controller_Ajax->action_selectstudent()
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-15 23:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:34:24 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\model\userinfo.php [ 49 ]
2013-03-15 23:34:24 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\model\userinfo.php [ 49 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php(49): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 49, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(86): Model_Userinfo->getStudentIdByClass(1, '??')
#2 [internal function]: Controller_Ajax->action_selectstudent()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-15 23:34:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:34:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:38:09 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 1' at line 1 [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = () LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-15 23:38:09 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 1' at line 1 [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = () LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `us`.* F...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(90): Model_Us->getFullNameById(Array)
#5 [internal function]: Controller_Ajax->action_selectstudent()
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-15 23:38:13 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 1' at line 1 [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = () LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-15 23:38:13 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 1' at line 1 [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = () LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `us`.* F...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(90): Model_Us->getFullNameById(Array)
#5 [internal function]: Controller_Ajax->action_selectstudent()
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-15 23:43:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:43:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:43:12 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 1' at line 1 [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = () LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-15 23:43:12 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 1' at line 1 [ SELECT `us`.* FROM `users` AS `us` WHERE `id` = () LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\intranet\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `us`.* F...', false, Array)
#1 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\intranet\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\intranet\www\application\classes\model\us.php(19): Kohana_ORM->find()
#4 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(90): Model_Us->getFullNameById(Array)
#5 [internal function]: Controller_Ajax->action_selectstudent()
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-03-15 23:44:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:44:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:44:17 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\controller\ajax.php [ 88 ]
2013-03-15 23:44:17 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\controller\ajax.php [ 88 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(88): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 88, Array)
#1 [internal function]: Controller_Ajax->action_selectstudent()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-15 23:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:46:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\model\userinfo.php [ 52 ]
2013-03-15 23:46:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\model\userinfo.php [ 52 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\model\userinfo.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 52, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\ajax.php(86): Model_Userinfo->getStudentIdByClass(1, '??')
#2 [internal function]: Controller_Ajax->action_selectstudent()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-15 23:46:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:46:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:56:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:56:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-15 23:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-15 23:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}