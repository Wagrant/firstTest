<li id="<?php echo $result['comment_id']?>">
    <div class="commentContent">
        <h6><?php echo $result['login']?> <span><?php echo $result['date']?></span> </h6>
        <div class="comment">
            <?php echo $result['comment']?>
        </div>
        <a class="reply" style="cursor: pointer;" data-toggle="modal" data-target="#modal-2">Reply</a>
    </div>
</li>