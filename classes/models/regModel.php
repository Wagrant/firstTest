<?php
Class regModel extends dbModel
{
	public $login;
	public $password;
	public $passwordAgain;
	public $email;
	public $phone;
	public $errors = array();
	public $success = array();

	public function __construct($login, $password, $passwordAgain, $email, $phone, $country)
	{
		$this->login 		 = $login;
		$this->password 	 = $password;
		$this->passwordAgain = $passwordAgain;
		$this->email 		 = $email;
		$this->phone 		 = $phone;
		$this->country 		 = $country;
	}

	public function checkPost()
	{
		if  (empty($this->login) || empty($this->password) || empty($this->passwordAgain) || empty($this->email) || empty($this->phone))
		{
			$this->errors[] = '<ul> <li> Some fields are empty! </li> </ul>';
		}

		if ($this->password !== $this->passwordAgain)
		{
			$this->errors[] = '<ul> <li> Passwords do not match! </li> </ul>';
		}
		parent::connect();
		$select = $this->dbh->prepare("SELECT user_id FROM users WHERE login='$this->login'OR email='$this->email'");
		$select->execute();
		$result = $select->fetch(PDO::FETCH_ASSOC);

		if(!empty($result))
		{
			$this->errors[] = '<ul> <li>This login or Email is currectly use </li> </ul>';
		}

		return $this->errors;
	}

	public function checkUser()
	{

		if (empty($this->errors))
		{

			$this->login 		   = htmlspecialchars($this->login);
			$this->password 	   = htmlspecialchars($this->password);
			$this->passwordAgain   = htmlspecialchars($this->passwordAgain);
			$this->email 		   = htmlspecialchars($this->email);
			$this->phone 		   = htmlspecialchars($this->phone);

			$this->login 		   = trim($this->login);
			$this->password 	   = trim($this->password);
			$this->passwordAgain   = trim($this->passwordAgain);
			$this->email 		   = trim($this->email);
			$this->phone 		   = trim($this->phone);

			$this->password 	   = md5($this->password);
			$this->passwordAgain   = md5($this->passwordAgain);

			parent::connect();
			$insert = $this->dbh->prepare("INSERT INTO users (login, password, email, phone, city) Values (:login, :password, :email, :phone, :country)");
			$insert->bindParam (":login", $this->login, PDO::PARAM_STR);
			$insert->bindParam (":password", $this->password, PDO::PARAM_STR);
			$insert->bindParam (":email", $this->email, PDO::PARAM_STR);
			$insert->bindParam (":phone", $this->phone, PDO::PARAM_INT);
			$insert->bindParam (":country", $this->country, PDO::PARAM_STR);
			$insert->execute();

			$this->success[] = 'Your registration is sucsess <a href="http://local.loc/auth"> Login</a>';
			return $this->success;
		}
	}
}