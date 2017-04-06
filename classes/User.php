<?php
class Users
{
	public function registration ($login, $password, )
	{
			$select = new $dbh->prepare("SELECT login FROM users WHERE login='$login'");
			$select->execute();
			$result = $select->fetch(PDO::FETCH_ASSOC);
			if(!empty($result))
			{
				return FALSE;
				$errors[] = "This login or Em@il is currectly use";
			}
			else 
			{
				
			}

	public function auth ($login, $pass)
	{
			$connect = new DataBase();
			$result = $connect->getQuery("SELECT user_name, user_pass
									FROM users
									WHERE user_name = '$login' and user_pass = '$pass'");
			$rows = $connect->getResult($result);
			if ($rows)
			{
				foreach ($rows as $key)
				{
					foreach ($key as $key1 => $value) 
					{
						$logpass = $value;
					}
				}
			}
			if ($login and $pass == $logpass)
			{
				return true;
			}
			else 
			{
				return false;
			}

	}
}