<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-04-07 08:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-07 08:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-07 08:41:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: cur_date2 ~ APPPATH\classes\controller\homework.php [ 46 ]
2014-04-07 08:41:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: cur_date2 ~ APPPATH\classes\controller\homework.php [ 46 ]
--
#0 C:\xampp\htdocs\intranet\www\application\classes\controller\homework.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 46, Array)
#1 [internal function]: Controller_Homework->action_homework()
#2 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Homework))
#3 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#6 {main}
2014-04-07 08:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-07 08:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2014-04-07 08:41:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-04-07 08:41:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}