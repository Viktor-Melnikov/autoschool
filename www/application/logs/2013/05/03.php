<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-03 00:01:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: navbar ~ APPPATH\views\layout.php [ 49 ] in C:\OpenServer\domains\localhost\www\application\views\layout.php:49
2013-05-03 00:01:02 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\views\layout.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 49, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleLogin))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\www\application\views\layout.php:49
2013-05-03 01:03:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\layout.php [ 48 ] in C:\OpenServer\domains\localhost\www\application\views\layout.php:48
2013-05-03 01:03:57 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\views\layout.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 48, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\www\application\views\layout.php:48
2013-05-03 01:14:15 --- CRITICAL: GOAuthException [ 0 ]: Ошибка авторизации: invalid_grant ~ MODPATH\goauth\classes\GOAuth.php [ 75 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php:14
2013-05-03 01:14:15 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php(14): GOAuth::getUserData('4/HVUjkZd5Q0rea...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_GoogleLogin->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleLogin))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php:14
2013-05-03 01:26:12 --- CRITICAL: View_Exception [ 0 ]: The requested view  login  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php:137
2013-05-03 01:26:12 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('<a href='/login...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('<a href='/login...', NULL)
#2 C:\OpenServer\domains\localhost\www\application\classes\Controller\Index.php(11): Kohana_View::factory('<a href='/login...')
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php:137
2013-05-03 01:26:29 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Index.php [ 11 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Index.php:11
2013-05-03 01:26:29 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Index.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\OpenServer\d...', 11, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Index.php:11
2013-05-03 01:36:11 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Index.php [ 11 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Index.php:11
2013-05-03 01:36:11 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Index.php(11): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\OpenServer\d...', 11, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Index.php:11
2013-05-03 10:29:00 --- CRITICAL: GOAuthException [ 0 ]: Ошибка авторизации: invalid_grant ~ MODPATH\goauth\classes\GOAuth.php [ 75 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php:14
2013-05-03 10:29:00 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php(14): GOAuth::getUserData('4/D_diJd-vBbIgl...')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_GoogleLogin->action_goauth()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleLogin))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php:14
2013-05-03 10:31:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lol ~ APPPATH\views\access_denied.php [ 9 ] in C:\OpenServer\domains\localhost\www\application\views\access_denied.php:9
2013-05-03 10:31:24 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\views\access_denied.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 9, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php(40): Kohana_Response->body(Object(View))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_GoogleLogin->action_accessDenied()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleLogin))
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\localhost\www\application\views\access_denied.php:9
2013-05-03 10:31:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lol ~ APPPATH\views\access_denied.php [ 9 ] in C:\OpenServer\domains\localhost\www\application\views\access_denied.php:9
2013-05-03 10:31:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\views\access_denied.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 9, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php(40): Kohana_Response->body(Object(View))
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_GoogleLogin->action_accessDenied()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleLogin))
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\localhost\www\application\views\access_denied.php:9
2013-05-03 11:54:45 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\classes\Controller\GoogleLogin.php [ 41 ] in file:line
2013-05-03 11:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-03 15:35:47 --- CRITICAL: View_Exception [ 0 ]: The requested view mail/mini_send could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php:137
2013-05-03 15:35:47 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('mail/mini_send')
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('mail/mini_send', NULL)
#2 C:\OpenServer\domains\localhost\www\application\views\mail\send.php(58): Kohana_View::factory('mail/mini_send')
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\OpenServer\domains\localhost\www\application\views\layout.php(48): Kohana_View->__toString()
#7 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#9 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mail))
#13 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\localhost\www\system\classes\Kohana\View.php:137
2013-05-03 17:28:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\views\preview\navbar.php [ 69 ] in file:line
2013-05-03 17:28:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-05-03 21:08:50 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Settings.php [ 11 ] in C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php:11
2013-05-03 21:08:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php(11): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\OpenServer\d...', 11, Array)
#1 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_Settings->action_settings()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#4 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\www\application\classes\Controller\Settings.php:11
2013-05-03 21:46:31 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'melnik5g_mpt'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-03 21:46:31 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#3 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php(20): Kohana_Model::factory('user')
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_GoogleLogin->action_goauth()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleLogin))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-03 22:32:32 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'melnik5g_mpt'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-03 22:32:32 --- DEBUG: #0 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('Users')
#3 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Model.php(26): Kohana_ORM->__construct()
#7 C:\OpenServer\domains\localhost\www\application\classes\Controller\GoogleLogin.php(20): Kohana_Model::factory('user')
#8 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Controller.php(84): Controller_GoogleLogin->action_goauth()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleLogin))
#11 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\www\modules\database\classes\Kohana\Database\MySQL.php:171