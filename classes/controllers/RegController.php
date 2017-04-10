<?php
class RegController
{
	public function actionReg()
	{
		if (empty($_SESSION['login'])) 
		{
			$reg = new regModel($login, $password, $passwordAgain, $email, $phone, $errors, $success);

			include_once "classes/views/registrationView.php";
		}
		else
		{
			header("Location: http://local.loc/main");
		}
	}
}