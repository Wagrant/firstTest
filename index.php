<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();
require_once 'Autoloader.php';
include_once 'config/define.php';

require_once 'Router.php';
$routing = new Route;
$routing->run();

spl_autoload_register('Autoloader::autoload');
//spl_autoload_register('Autoloader::recursive_autoload');

$main = new MainController;
$main->actionMain();

$com = new CommentController;
$com->actionComment();