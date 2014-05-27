<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-05 00:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:06:32 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 85 ]
2013-03-05 00:06:32 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 85 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(85): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 85, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:06:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:06:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:06:58 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 85 ]
2013-03-05 00:06:58 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 85 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(85): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 85, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:06:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:06:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:07:52 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 86 ]
2013-03-05 00:07:52 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 86 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(86): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 86, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:08:14 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 86 ]
2013-03-05 00:08:14 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 86 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(86): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 86, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:10:13 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 85 ]
2013-03-05 00:10:13 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 85 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(85): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 85, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:10:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:10:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:22:03 --- ERROR: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\views\createteacher.php [ 85 ]
2013-03-05 00:22:03 --- STRACE: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\views\createteacher.php [ 85 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(85): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 85, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:22:23 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 85 ]
2013-03-05 00:22:23 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 85 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(85): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 85, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:26:21 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\createteacher.php [ 85 ]
2013-03-05 00:26:21 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\createteacher.php [ 85 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(85): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 85, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:26:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:26:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:28:30 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\createteacher.php [ 85 ]
2013-03-05 00:28:30 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\createteacher.php [ 85 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(85): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 85, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:30:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\createteacher.php [ 86 ]
2013-03-05 00:30:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\createteacher.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-05 00:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:31:03 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 85 ]
2013-03-05 00:31:03 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 85 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(85): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 85, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:31:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'as' (T_AS), expecting ';' ~ APPPATH\views\createteacher.php [ 84 ]
2013-03-05 00:31:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'as' (T_AS), expecting ';' ~ APPPATH\views\createteacher.php [ 84 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-05 00:31:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:31:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:31:30 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\createteacher.php [ 85 ]
2013-03-05 00:31:30 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\createteacher.php [ 85 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(85): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 85, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:31:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:31:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:34:01 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\createteacher.php [ 85 ]
2013-03-05 00:34:01 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\createteacher.php [ 85 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(85): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 85, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:34:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:34:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:35:19 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 86 ]
2013-03-05 00:35:19 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 86 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(86): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 86, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:35:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:35:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:37:25 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 85 ]
2013-03-05 00:37:25 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 85 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(85): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 85, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:37:54 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 86 ]
2013-03-05 00:37:54 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 86 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(86): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 86, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:38:05 --- ERROR: ErrorException [ 8 ]: Use of undefined constant aaa - assumed 'aaa' ~ APPPATH\views\createteacher.php [ 85 ]
2013-03-05 00:38:05 --- STRACE: ErrorException [ 8 ]: Use of undefined constant aaa - assumed 'aaa' ~ APPPATH\views\createteacher.php [ 85 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(85): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 85, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:38:19 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 86 ]
2013-03-05 00:38:19 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 86 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(86): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 86, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:39:15 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 85 ]
2013-03-05 00:39:15 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 85 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(85): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 85, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:51:07 --- ERROR: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH\classes\controller\teacherprof.php [ 25 ]
2013-03-05 00:51:07 --- STRACE: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH\classes\controller\teacherprof.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-05 00:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:51:33 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::_toString() ~ APPPATH\classes\controller\teacherprof.php [ 25 ]
2013-03-05 00:51:33 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::_toString() ~ APPPATH\classes\controller\teacherprof.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-05 00:51:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:51:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:51:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::__toString() ~ APPPATH\classes\controller\teacherprof.php [ 25 ]
2013-03-05 00:51:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::__toString() ~ APPPATH\classes\controller\teacherprof.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-05 00:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:52:16 --- ERROR: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH\classes\controller\teacherprof.php [ 25 ]
2013-03-05 00:52:16 --- STRACE: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH\classes\controller\teacherprof.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-05 00:52:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:52:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 00:53:41 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 85 ]
2013-03-05 00:53:41 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\createteacher.php [ 85 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createteacher.php(85): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 85, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teacherprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 00:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 00:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 11:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 11:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 12:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 12:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 12:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 12:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 12:46:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'array' (T_ARRAY), expecting function (T_FUNCTION) ~ APPPATH\classes\classes.php [ 16 ]
2013-03-05 12:46:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'array' (T_ARRAY), expecting function (T_FUNCTION) ~ APPPATH\classes\classes.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-05 12:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 12:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 12:47:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'array' (T_ARRAY), expecting variable (T_VARIABLE) ~ APPPATH\classes\classes.php [ 16 ]
2013-03-05 12:47:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'array' (T_ARRAY), expecting variable (T_VARIABLE) ~ APPPATH\classes\classes.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-05 12:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 12:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 12:47:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'array' (T_ARRAY), expecting variable (T_VARIABLE) ~ APPPATH\classes\classes.php [ 16 ]
2013-03-05 12:47:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'array' (T_ARRAY), expecting variable (T_VARIABLE) ~ APPPATH\classes\classes.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-05 12:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 12:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 12:47:40 --- ERROR: ErrorException [ 8 ]: Use of undefined constant i - assumed 'i' ~ APPPATH\classes\classes.php [ 27 ]
2013-03-05 12:47:40 --- STRACE: ErrorException [ 8 ]: Use of undefined constant i - assumed 'i' ~ APPPATH\classes\classes.php [ 27 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\classes.php(27): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 27, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\studentprof.php(29): Classes->getAll()
#2 [internal function]: Controller_Studentprof->action_create_user()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Studentprof))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-05 12:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 12:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 12:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 12:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 13:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 13:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 13:17:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\classes\controller\studentprof.php [ 33 ]
2013-03-05 13:17:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\classes\controller\studentprof.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-05 13:17:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 13:17:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 13:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 13:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 13:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 13:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 13:18:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 13:18:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 13:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 13:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 13:20:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 13:20:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 13:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 13:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 13:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 13:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 13:34:09 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\classes.php [ 28 ]
2013-03-05 13:34:09 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\classes.php [ 28 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\classes.php(28): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\studentprof.php(45): Classes->getClassNumber('')
#2 [internal function]: Controller_Studentprof->action_create_user()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Studentprof))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-05 13:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 13:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 13:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 13:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 13:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 13:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 13:37:01 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\classes.php [ 28 ]
2013-03-05 13:37:01 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\classes.php [ 28 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\classes.php(28): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\studentprof.php(45): Classes->getClassNumber('')
#2 [internal function]: Controller_Studentprof->action_create_user()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Studentprof))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-05 13:37:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 13:37:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 13:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 13:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 13:43:34 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\classes.php [ 28 ]
2013-03-05 13:43:34 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\classes.php [ 28 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\classes.php(28): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\intranet\www\application\classes\controller\studentprof.php(45): Classes->getClassNumber('')
#2 [internal function]: Controller_Studentprof->action_create_user()
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Studentprof))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-05 13:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 13:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 13:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 13:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 13:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 13:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:05:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:05:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:05:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:05:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:05:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:05:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:05:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH\views\usertemplate.php [ 15 ]
2013-03-05 14:05:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH\views\usertemplate.php [ 15 ]
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
2013-03-05 14:05:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:05:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:06:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:06:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:09:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH\views\usertemplate.php [ 15 ]
2013-03-05 14:09:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH\views\usertemplate.php [ 15 ]
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
2013-03-05 14:09:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:09:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:09:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:09:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:12:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:12:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:12:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH\views\usertemplate.php [ 15 ]
2013-03-05 14:12:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH\views\usertemplate.php [ 15 ]
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
2013-03-05 14:12:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:12:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:13:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:13:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:13:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:13:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:14:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:14:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:15:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:15:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:31:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: job ~ APPPATH\views\createparent.php [ 58 ]
2013-03-05 14:31:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: job ~ APPPATH\views\createparent.php [ 58 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createparent.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 58, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Parentprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 14:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:35:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\createparent.php [ 43 ]
2013-03-05 14:35:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\createparent.php [ 43 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createparent.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Parentprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 14:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:37:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: mot_full_name ~ APPPATH\views\createparent.php [ 43 ]
2013-03-05 14:37:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: mot_full_name ~ APPPATH\views\createparent.php [ 43 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createparent.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Parentprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 14:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:38:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: fat_date_of_birth ~ APPPATH\views\createparent.php [ 73 ]
2013-03-05 14:38:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: fat_date_of_birth ~ APPPATH\views\createparent.php [ 73 ]
--
#0 C:\xampp\htdocs\intranet\www\application\views\createparent.php(73): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 73, Array)
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\intranet\www\application\views\usertemplate.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\intranet\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\intranet\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Parentprof))
#10 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-05 14:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 14:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 14:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 20:07:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 20:07:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 20:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 20:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 20:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 20:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 20:19:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 20:19:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}