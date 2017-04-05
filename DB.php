<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'testShop');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

$dsn = "mysql:host=" . DB_HOST . "; dbname=" . DB_NAME;
try {
    $dbh = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
} catch (PDOException $e) {
    die('Connect to DB failed');
}