<html lang="en">
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<style>
	div
	  #center { text-align: center; }
</style>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
<div class="container">
			<h2>Login</h2>
			Dont have account? <a href="http://local.loc/registerView.php"> Register it </a>
            <form class="form-horizontal" method="POST" action="index.php">
                <div class='alert alert-danger' <?if ($logFlag){?> style="display: none"<?}?>>
                <strong>Error:</strong><?foreach ($err as $errKey => $errValue) {
                        echo "{$errValue}";
                }?> 
                </div>
                    <div class='alert alert-success' <?if ($sucFlag == FALSE){?> style="display: none"<?}?>>
                    <strong>Success!</strong> <?foreach ($suc as $sucKey => $sucValue) {
                        echo "{$sucValue} ";
                }?>
                    </div>
                <div class="form-group">
                    <label for="login" class="col-sm-4  control-label">Login</label>
                    <div class="col-sm-5">
                        <input type="text" name="login" placeholder="Login or Em@il" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">Password</label>
                    <div class="col-sm-5">
                        <input type="password" name="password" placeholder="Your password" class="form-control"><br><p>
                        <button type="submit" name="submitLog" class="btn btn-primary col-sm-12">Login</button>
                    </div>
                </div>
	</form>
</body>
</html>