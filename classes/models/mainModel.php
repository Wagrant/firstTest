<?php
class mainModel
{
	public function test()
	{
		if (!empty($_SESSION['login']))
		{
			$test1 = $_SESSION['login'];

			echo "Welcome $test1, now you have secret link <a href='http://local.loc/'> Click here </a>";
		}
		else
		{
			echo 'You need account,  <a href="http://local.loc/registr"> Register it </a> or <a href="http://local.loc/auth"> Login </a> if you have it';
		}
	}
}