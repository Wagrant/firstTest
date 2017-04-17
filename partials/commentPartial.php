<html lang="en">
   <body>
      <div class="well well-lg">
         <h4 class="media-heading text-uppercase reviews"><?php echo $result['author']?> </h4>
         <ul class="media-date text-uppercase reviews list-inline">
            <?php echo "<div id='right'>".$result['date']?>
         </ul>
         <p class="media-comment">
            <?php echo $result['comment'];?>
         </p>
         <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
         </ul>
      </div>
   </body>
</html>