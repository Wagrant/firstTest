<?php
class commentModel extends dbModel
{
	public $author;
	public $comment;
	public $parent_id;
	public $author_id;

	public function __construct($author)
	{
		$this->author  = $author;
	}

	public function showAllComments()
	{
		parent::connect();
		$showAllComments = $this->dbh->prepare("SELECT author, comment, date FROM comments WHERE parent_id=0");
		$showAllComments->execute();
		$resultAll = $showAllComments->fetchAll(PDO::FETCH_ASSOC);
		$resultAll = array_reverse($resultAll);

		return $resultAll;
	}

	public function getComment()
	{
		parent::connect();
		$showComments = $this->dbh->prepare("SELECT author, comment, date FROM comments WHERE parent_id=0");
		$showComments->execute();
		$result = $showComments->fetchAll(PDO::FETCH_ASSOC);
		$result = array_reverse($result);
		$result = current($result);
		return $result;
	}

	public function addComment($comment)
	{
		$this->parent_id = 0;
		$this->author_id = 0;
		$this->comment = $comment;
		parent::connect();
		$addComment = $this->dbh->prepare("INSERT INTO comments (author, comment, parent_id, author_id, date) Values (:author, :comment, :parent_id, :author_id, NOW())");
		$addComment->bindParam (":author", $this->author, PDO::PARAM_STR);
		$addComment->bindParam (":comment", $this->comment, PDO::PARAM_STR);
		$addComment->bindParam (":parent_id", $this->parent_id, PDO::PARAM_INT);
		$addComment->bindParam (":author_id", $this->author_id, PDO::PARAM_INT);
		$addComment->execute();
		$lastId = $this->dbh->lastInsertId();
	}

	public function deleteComment()
	{
		parent::connect();
		$delComment = $this->dbh->prepare("DELETE FROM comments WHERE ...");
		$delComment->execute();
	}

	public function updateComment()
	{
		parent::connect();
		$update = $this->dbh->prepare("UPDATE comments SET ... WHERE ...");
		$update->bindParam("", $var, PDO::PARAM_STR );
	}

	function getComments($id, $parent_id = 0)
	{
		$id = (int)$id;
		parent::connect();
		$tree = $this->dbh->prepare("
		SELECT `comments_list`.*,
		`users`.`login` as `login`,
		(SELECT COUNT(`counts`.`id`) FROM `comments` `counts`
		WHERE `counts`.`parent` = `comments_list`.`id`) AS `count`,
		DATE_FORMAT(`comments_list`.`date`, '%d.%m.%Y %H:%i') as `date`
		FROM `comments` `comments_list`
		LEFT JOIN `users` ON `comments_list`.`user` = `users`.`id`
		WHERE `comments_list`.`news` = '".$id."' AND `comments_list`.`parent` = '".$parent."'");
		$i=0;
		$comments = false;
		while ($comment = mysql_fetch_object($query))
		{
			$comments[$i] = $comment;
			if ($comment->count)
			{
				$comments[$i]->comments = getComments($id, $comment->id);
			}
			$i++;
		}
		return $comments;
	}

}