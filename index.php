<?php
require_once 'Autoloader.php';

 define('DIR', realpath(dirname(__FILE__)));
 //require_once DIR . '/apps/apps.php'; путь у приложению
 require_once 'Router.php';
//$routing = new Route;
//$routing->run();

spl_autoload_register('Autoloader::autoload');
spl_autoload_register('Autoloader::recursive_autoload');