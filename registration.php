<?php
include_once "DB.php";
$errors = array();

$success = array();

$flag = TRUE;

$test = FALSE;

if (isset($_POST['submit'])) 
{

	$login	 	   = $_POST['login'];
	$password 	   = $_POST['password'];
	$passwordAgain = $_POST['passwordAgain'];
	$email 		   = $_POST['email'];
	$phone 		   = $_POST['phone'];
	$country	   = $_POST['country'];

	$login 		   = htmlspecialchars($login);
	$password 	   = htmlspecialchars($password);
	$passwordAgain = htmlspecialchars($passwordAgain);
	$email 		   = htmlspecialchars($email);
	$phone 		   = htmlspecialchars($phone);

	$login 		   = trim($login);
	$password 	   = trim($password);
	$passwordAgain = trim($passwordAgain);
	$email 		   = trim($email);
	$phone 		   = trim($phone);

	$password 	   = md5($password);
	$passwordAgain = md5($passwordAgain);

 if (empty($_POST['login']) || empty($_POST['password']) || empty($_POST['passwordAgain']) || empty($_POST['email']) || empty($_POST['phone']))
 {
	$flag = FALSE;
	$errors[] = 'Some fields are empty!';
 }

 if ($password != $passwordAgain)
 {
	$flag = FALSE;
	$errors[] = 'Passwords do not match!';
 }

 if ($flag == TRUE)
 {
	$select = $dbh->prepare("SELECT user_id FROM users WHERE login='$login'OR email='$email'");
	$select->execute();
	$result = $select->fetch(PDO::FETCH_ASSOC);

	if(!empty($result))
	{
		$flag = FALSE;
		$errors[] = "This login or Em@il is currectly use";
	}
 }
 if ($flag == TRUE) {
	$insert = $dbh->prepare("INSERT INTO users (login, password, email, phone, city) Values (:login, :password, :email, :phone, :country)");
	$insert->bindParam (":login", $login, PDO::PARAM_STR);
	$insert->bindParam (":password", $password, PDO::PARAM_STR);
	$insert->bindParam (":email", $email, PDO::PARAM_STR);
	$insert->bindParam (":phone", $phone, PDO::PARAM_INT);
	$insert->bindParam (":country", $country, PDO::PARAM_STR);
	$insert->execute();

	$test = TRUE;

	$success[] = 'Your registration is sucsess <a href="http://local.loc/loginView.php"> Login</a>';
 }
}