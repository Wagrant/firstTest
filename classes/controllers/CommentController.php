<?php
class commentController
{
	public function actionComment()
	{
		if (!empty($_SESSION['login']))
		{
			$comm = new commentModel($_SESSION['login']);
			$result_all = $comm->showAllComments();
			if (isset($_POST['add'])) 
			{
				$addComment = $comm->addComment($_POST['comment']);
			}
			
			
			$temp = new Template;
			$temp->result_all = $result_all;
			$temp->render("classes/views/commentView.php");
			echo $temp->render("classes/views/commentView.php");

		}
	}
}