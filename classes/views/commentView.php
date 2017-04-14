<html lang="en">
<head>
    <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script type="text/javascript" src="test.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<title>Document</title>
  <link href="style.css" rel="stylesheet"></link>
  <style>
     div {
   }
   #left { text-align: left; }
   #right { text-align: right; }
   #center { text-align: center; }
   </style>
</head>
<body>
	<form class="form-horizontal" method="POST" action="index.php">
<div class="container">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1" id="logout">
        <div class="page-header">
            <h3 class="reviews">Leave your comment</h3>
            <div class="logout">
                <button class="btn btn-default btn-circle text-uppercase" type="button" onclick="$('#logout').hide(); $('#login').show()">
                    <span class="glyphicon glyphicon-off"></span> Logout                    
                </button>           
            </div>
        </div>
        <div class="comment-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
                      <li><a href="#" role="tab" data-toggle="modal" data-target="#modal-1"><h4 class="reviews text-capitalize">Add comment</h4></a></li>
                    <div class="col-md-6">
       </div>
    <div class="modal" id="modal-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add comment</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group" style="margin: 20px;">
                      <label>Name:</label>
                      <input type="text" class="form-control" placeholder="<?php echo $_SESSION['login'];?>" disabled>
                    </div>
                    <div class="form-group" style="margin: 20px;">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="3" id="comment"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="button" id="send"> Send</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal"> Close</button>
                </div>
            </div>
        </div>
    </div>
            </ul>
            <?php foreach ($result_all as $key => $value) 
            {
                ?> <div class="tab-content">
                <div class="tab-pane active" id="comments-logout">                
                    <ul class="media-list">
                      <li class="media">
                        <div class="media-body">
                          <div class="well well-lg">
                            <h4 class="media-heading text-uppercase reviews"> <?php echo $value['author']?> </h4>
                            <ul class="media-date text-uppercase reviews list-inline">
                                <?php echo "<div id='right'>".$value['date']?>
                            </ul>
                            <p class="media-comment">
                                <?php echo $value['comment'];?>
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                              </ul>
                          </div>
                        </div> 
                        <?php }?>
                    </div>
                 </div>
             </div>
         </div>
    </div>
</div>
    </form>
</body>
</html>