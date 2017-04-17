<?php
class commentController
{
	public function actionComment()
	{
		if (!empty($_SESSION['login']))
		{
			$comm = new commentModel($_SESSION['login']);
			$result_all = $comm->showAllComments();
			
			$temp = new Template;
			$temp->result_all = $result_all;
			echo $temp->render("classes/views/commentView.php");

		}
	}
	public function actionSetComment()
	{
		$comm = new commentModel($_SESSION['login']);
		$addComment = $comm->addComment($_POST['comment']);
		$result = $comm->getComment();
		$temp = new Template;
		$temp->result = $result;
		echo $temp->render("partials/commentPartial.php");

	}
}