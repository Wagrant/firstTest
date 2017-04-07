<?php
Class regModel
{
	public $login;
	public $password;
	public $passwordAgain;
	public $email;
	public $phone;
	public $errors = array();
	public $success = array();

	public function __construct($login, $password, $passwordAgain, $email, $phone, $errors)
	{

		$this->login 		 = $login;
		$this->password 	 = $password;
		$this->passwordAgain = $passwordAgain;
		$this->email 		 = $email;
		$this->phone 		 = $phone;
		$this->errors 		 = array();
		$this->success 		 = array();

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
				$this->errors[] = '<ul> <li> Some fields are empty! </li> </ul>';
			 }

			 if ($password !== $passwordAgain)
			 {
				$this->errors[] = '<ul> <li> Passwords do not match! </li> </ul>';
			 }

			include_once "DB.php";
			$select = $dbh->prepare("SELECT user_id FROM users WHERE login='$login'OR email='$email'");
			$select->execute();
			$result = $select->fetch(PDO::FETCH_ASSOC);

			if(!empty($result))
			{
				$this->errors[] = '<ul> <li>This login or Em@il is currectly use </li> </ul>';
			}

			if (empty($this->errors)) 
			{
					$insert = $dbh->prepare("INSERT INTO users (login, password, email, phone, city) Values (:login, :password, :email, :phone, :country)");
					$insert->bindParam (":login", $login, PDO::PARAM_STR);
					$insert->bindParam (":password", $password, PDO::PARAM_STR);
					$insert->bindParam (":email", $email, PDO::PARAM_STR);
					$insert->bindParam (":phone", $phone, PDO::PARAM_INT);
					$insert->bindParam (":country", $country, PDO::PARAM_STR);
					$insert->execute();

					$this->success[] = 'Your registration is sucsess <a href="http://local.loc/loginView.php"> Login</a>';
			}
		}
	}
}