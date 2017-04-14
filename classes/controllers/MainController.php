<?php
class MainController
{
	public function actionMain()
	{
		if (!empty($_SESSION['login']))
		{
			$test1 = $_SESSION['login'];

			if (isset($_POST['destr']))
			{
				unset($_SESSION['login']);
				header("Location: http://local.loc/");

			}
		}
		else
		{
			echo 'You need account,  <a href="http://local.loc/registr"> Register it </a> or <a href="http://local.loc/auth"> Login </a> if you have it';
		}

	}
}