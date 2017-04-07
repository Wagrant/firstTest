<?php
class AuthController
{
	public function actionAuth()
	{
		$auth = new authModel($login, $password,$email, $err, $suc);

		include_once "classes/views/loginView.php";
	}
}