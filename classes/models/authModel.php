<?php
class authModel extends dbModel
{
	public $login;
	public $password;
	public $err = array();

		function __construct($login, $password)
	{
		$this->login 	= $login;
		$this->password = $password;
	}

	public function auth()
	{
		$this->login   	   = htmlspecialchars($this->login);
		$this->password    = htmlspecialchars($this->password);

		$this->login   	   = trim($this->login);
		$this->password    = trim($this->password);

		$this->password    = md5($this->password);

		parent::connect();
		$select = $this->dbh->prepare("SELECT * FROM users WHERE login='$this->login' AND password='$this->password'");
		$select->execute();
		$loginRes = $select->fetch(PDO::FETCH_ASSOC);

		if (empty($loginRes)) 
		{
			$this->err[] = '<ul> <li> Incorrect login or password </li> </ul>';
			return $this->err;
		}
		else
		{
			$_SESSION['login'] = $loginRes['login'];
		}
	}
}