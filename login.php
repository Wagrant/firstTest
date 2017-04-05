<?php
include_once "DB.php";
    $select = $dbh->prepare("SELECT * FROM users WHERE login='$login'AND password='$password'");
	$select->execute();
	$res = $select->fetch(PDO::FETCH_ASSOC);

