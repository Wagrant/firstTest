<?php
class commentModel extends dbModel
{
	public $user_id;
	public $comment;
	public $parent_id;

	public function showAllComments()
	{
		parent::connect();
		$showAllComments = $this->dbh->prepare("SELECT login, parent_id, comment, comment_id, user_id, date FROM users INNER JOIN comments ON users.id = comments.user_id");
		$showAllComments->execute();
		$resultAll = $showAllComments->fetchAll(PDO::FETCH_ASSOC);
		$resultAll = array_reverse($resultAll);

		return $resultAll;
	}

	public function getComment()
	{
		parent::connect();
		$showComments = $this->dbh->prepare("SELECT login, parent_id, comment, comment_id, user_id, date FROM users INNER JOIN comments ON users.id = comments.user_id");
		$showComments->execute();
		$result = $showComments->fetchAll(PDO::FETCH_ASSOC);
		$result = array_reverse($result);
		$result = current($result);

		return $result;
	}

	public function addComment($comment, $user_id, $parent_id)
	{
		$this->parent_id = $parent_id;
		$this->user_id = $user_id;
		$this->comment = $comment;
		parent::connect();
		$addComment = $this->dbh->prepare("INSERT INTO comments (comment, user_id, parent_id, date) Values (:comment, :user_id, :parent_id, NOW())");
		$addComment->bindParam (":comment", $this->comment, PDO::PARAM_STR);
		$addComment->bindParam (":user_id", $this->user_id, PDO::PARAM_STR);
		$addComment->bindParam (":parent_id", $this->parent_id, PDO::PARAM_INT);
		$addComment->execute();
		$lastId = $this->dbh->lastInsertId();
	}

	public function mapTree($dataSet)
	{
		$tree = array();
		$data = array();

		foreach ($dataSet as $key => $value) 
		{
			$data[$value['comment_id']] = $value;
		}

   		foreach ($data as $id => &$node)
      	{
        	if (!$node['parent_id'])
        	{
        		$tree[$id] = &$node;
        	}
        	else 
        	{
        		$data[$node['parent_id']]['childs'][$id] = &$node;
        	}
      	}
        return $tree;
	}


	public function commentsToTemplate($comment)
	{
	    ob_start();
	      
	   	include 'partials/commentPartial.php';                     
	    
	    $comments_string = ob_get_contents();
	    ob_end_clean();
	    
	    return $comments_string;
    
	}

	public function commentsString($dataTest)
    {
    	$string = "";
        foreach($dataTest as $w) 
        {
        	$string .= self::commentsToTemplate($w);
		}
        return $string; 
    }
}