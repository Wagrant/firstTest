<li id="<?php echo $comment['comment_id']?>" class="test1">
  <div class="page-header">
  <div class="commentContent">
      <h6><?php echo $comment['login']?> <span><?php echo $comment['date']?></span> </h6>
      <div class="comment">
          <?php echo $comment['comment']?>
        </div>
      </div>
      <a class="reply" style="cursor: pointer;" data-toggle="modal" data-target="#modal-2">Reply</a>
  </div>
  <?php if(isset($comment['childs'])) { ?>
      <ul id="commentsRoot<?php echo $comment['comment_id']?>">
       <?php  echo self::commentsString($comment['childs']) ?>
      </ul>
  <?php } ?>
</li>