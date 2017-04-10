<?php
session_start();
class authModel
{
	public $login;
	public $password;
	public $email;
	public $err = array();
	public $suc = array();

	function __construct($login, $password, $email,  $err, $suc)
	{

		$this->login 	= $login;
		$this->password = $password;
		$this->email 	= $email;
		$this->err 		= array();
		$this->suc 		= array();

		if (isset($_POST['submitLog'])) 
		{
			$login 	       = $_POST['login'];
			$password      = $_POST['password'];

			$login   	   = htmlspecialchars($login);
			$password      = htmlspecialchars($password);

			$login   	   = trim($login);
			$password      = trim($password);

			$password 	   = md5($password);

			include_once "DB.php";
		    $select = $dbh->prepare("SELECT * FROM users WHERE login='$login' AND password='$password'");
			$select->execute();
			$loginRes = $select->fetch(PDO::FETCH_ASSOC);

			if (empty($loginRes)) 
			{
				$this->err[] = '<ul> <li> Incorrect login or password </li> </ul>';
			}
			else
			{
				$this->suc[] = 'Welcome';
				$_SESSION['login'] = $loginRes['login'];
				header("Location: http://local.loc/main");
			}
		}
	}
}