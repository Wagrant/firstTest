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

	$stmt = $dbh->prepare("SELECT * FROM products");
	$stmt->execute();

	$res = $stmt->fetchAll();
	print_r($res);

$insert = $dbh->prepare("INSERT INTO products (productName, productMaterial, productPrice) Values (?,?,?)");
$insert->execute(array('IRONsword', 'Iron', 250));

$update = $dbh->prepare("UPDATE products SET productName = 'iii' WHERE product_id = 2");
$update->execute();

$delete = $dbh->prepare("DELETE FROM products WHERE product_id = ''");
$delete->execute();