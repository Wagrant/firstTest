<?php
class RegController
{
	public function actionReg()
	{	
		$reg = new regModel($login, $password, $passwordAgain, $email, $phone, $errors, $success);

		require_once "classes/views/registrationView.php";
	}
}