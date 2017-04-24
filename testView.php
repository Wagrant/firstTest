<?php
class Comments extends DataBase
{
 public function getNickname($id)
 {
  $result = $connect->getQuery("SELECT user_name 
         FROM users
         WHERE id = '$id'");
  $user = $connect->getResult($result);
  return $user['user_name'];
 }


 public function setComment($user, $comment, $parent_id)
 {
  $connect = $this->getQuery("INSERT INTO comments(comment, name, parent_id, date_add )
       VALUES ('$comment', '$user', '$parent_id', now()) ");
  $connect = $this->getIdInsert();

  return $connect;
 }

 public function getComment()
 {
  $result = $this->getQuery("SELECT id, parent_id, name, comment,
                DATE_FORMAT(date_add, '%d %M %Y %H:%i') AS date_add
                FROM comments");
  $data = $this->getResults($result);
  return $data;
 }

 public function getOneComment($id)

 {
  $result = $this->getQuery("SELECT id, parent_id, name, comment,
                DATE_FORMAT(date_add, '%d %M %Y %H:%i') AS date_add
                FROM comments WHERE id = '$id' ");
  $data = $this->getResults($result);
  return $data;
 }


 public function mapTree($dataSet)
 {
  $tree = array();
  foreach ($dataSet as $id => &$node)
  {
   if (!$node['parent_id'])
   {
    $tree[$id] = &$node;
   }
   else 
   {
    $dataSet[$node['parent_id']]['childs'][$id] = &$node;
   }
  }
  return $tree;
 }


   $('html').on('click', '.reply', function(){

var comment_id;
  $('html').on('click', '.reply', function(){

     comment_id = $(this).parent().parent().attr("id");

 });