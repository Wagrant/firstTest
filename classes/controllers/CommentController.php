<?php
class commentController
{
	public function actionComment()
	{
		if (!empty($_SESSION['login']))
		{
			$comm = new commentModel();
			$result_all = $comm->showAllComments();
			$result_all = $comm->mapTree($result_all);
			$comments = $comm->commentsString($result_all);
			
			$temp = new Template;
			$temp->comments = $comments;
			echo $temp->render("classes/views/commentView.php");
		}
	}

	public function actionSetComment()
	{
		$comm = new commentModel();
		$addComment = $comm->addComment($_POST['comment'], $_SESSION['id'], $parent_id = 0);
		$result = $comm->getComment();

		$temp = new Template;
		$temp->result = $result;
		echo $temp->render("partials/testPartial.php");

	}

	public function actionReplyComment()
	{
		$comm = new commentModel();
		$reply = $comm->addComment($_POST['comment'], $_SESSION['id'], $_POST['id']++);
		$result = $comm->getComment();

		$temp = new Template;
		$temp->result = $result;
		echo $temp->render("partials/replyPartial.php");
	}
}