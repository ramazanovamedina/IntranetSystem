<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-05-20 20:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL intranet was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-05-20 20:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL intranet was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-20 20:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-05-20 20:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-20 20:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL intranet was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-05-20 20:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL intranet was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\intranet\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\intranet\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\intranet\www\index.php(109): Kohana_Request->execute()
#3 {main}