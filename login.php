<?php
include_once "DB.php";

$logFlag = TRUE;

$sucFlag = FALSE;

$err = array();

$suc = array();

if (isset($_POST['submitLog'])) 
{
	$login 	       = $_POST['login'];
	$password      = $_POST['password'];

	$login   	   = htmlspecialchars($login);
	$password      = htmlspecialchars($password);

	$login   	   = trim($login);
	$password      = trim($password);

	$password 	   = md5($password);

    $select = $dbh->prepare("SELECT * FROM users WHERE login='$login' AND password='$password'");
	$select->execute();
	$loginRes = $select->fetch(PDO::FETCH_ASSOC);

	if (empty($loginRes)) 
	{
		$logFlag = FALSE;
		$err[] = 'Incorrect login or password';
	}
	else
	{
		$sucFlag = TRUE;
		$suc[] = 'Welcome';
	}
}