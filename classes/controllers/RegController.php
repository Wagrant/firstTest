<?php
class RegController
{
	public function actionReg()
	{
		$errors = null;
		$success = null;

		if (empty($_SESSION['login'])) 
		{
			if (isset($_POST['submit']))
			{
				$reg = new regModel($_POST['login'], $_POST['password'], $_POST['passwordAgain'], $_POST['email'], $_POST['phone'], $_POST['country']);

				$errors = $reg->checkPost();
				if (empty($errors)) 
				{
					$success = $reg->checkUser();
				}
			}


			$temp = new Template;
			$temp->errors = $errors;
			$temp->success = $success;
			$temp->render("classes/views/registrationView.php");
			echo $temp->render("classes/views/registrationView.php");
		}
		else
		{
			header("Location: http://local.loc/main");
		}
	}
}