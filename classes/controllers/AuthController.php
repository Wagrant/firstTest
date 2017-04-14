<?php
class AuthController
{
	public function actionAuth()
	{
		$err = null;

		if (empty($_SESSION['login']))
		{
			if (isset($_POST['submit'])) 
			{
			
				$auth = new authModel ($_POST['login'], $_POST['password']);
				$err = $auth->auth();

			}

				$temp = new Template;
				$temp->err = $err;
				echo $temp->render("classes/views/loginView.php");
		}

		else
		{
			header("Location: http://local.loc/comments");

		}
	}
}