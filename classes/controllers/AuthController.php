<?php
class AuthController
{
	public function actionAuth()
	{
		if (empty($_SESSION['login']))
		{
			$auth = new authModel($login, $password,$email, $err, $suc);
			//$view = new Template();
			//$view->title = "hello, world";
			//$view->links = array("one", "two", "three");
			//$view->body = "Hi, sup";
			//$view->content = $view->render('classes/views/loginView.php');

			//echo $view->render('classes/views/loginView.php');

			include_once "classes/views/loginView.php";
		}

		else
		{
			header("Location: http://local.loc/main");
		}
	}
}