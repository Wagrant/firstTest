<?php
 include_once "DB.php";

if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['passwordAgain']) && isset($_POST['email']) && isset($_POST['phone']))
	{
		if (empty($_POST['login']) || empty($_POST['password']) || empty($_POST['passwordAgain']) || empty($_POST['email']) || empty($_POST['phone']))
			{
				echo("");
			}
				else
					{
						$login	 	   = $_POST['login'];
						$password 	   = md5($_POST['password']);
						$passwordAgain = md5($_POST['passwordAgain']);
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

	$select = $dbh->prepare("SELECT user_id FROM users WHERE login='$login'OR email='$email'");
	$select->execute();
	$res = $select->fetch(PDO::FETCH_ASSOC);

	if(!empty($res))
	{
		echo("<div class='alert alert-danger'>
  <strong>Error:</strong> This login or Em@il adress is currectly use.
</div>");
	}

						$insert = $dbh->prepare("INSERT INTO users (login, password, email, phone, city) Values (:login, :password, :email, :phone, :country)");
						$insert->bindParam (":login", $login, PDO::PARAM_STR);
						$insert->bindParam (":password", $password, PDO::PARAM_STR);
						$insert->bindParam (":email", $email, PDO::PARAM_STR);
						$insert->bindParam (":phone", $phone, PDO::PARAM_INT);
						$insert->bindParam (":country", $country, PDO::PARAM_STR);
						$insert->execute();
					}
	}