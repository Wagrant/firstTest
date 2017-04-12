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
            <label for="login" class="col-sm-4  control-label">Dont have account? <a href="http://local.loc/registr"> Register it </a></label>
            <form class="form-horizontal" method="POST" action="auth">
                <div class="form-group">
                    <div class="col-sm-5">
                  <div class='alert alert-danger' <?if (empty($err)){?> style="display: none"<?}?>>
                    <strong>Whoops! Something wrong!</strong><?if (isset($err))
                    {foreach ($err as $errKey => $errValue) {
                        echo "{$errValue}";
                }}?>
                </div>
            </div>
            </div>
                <div class="form-group">
                    <label for="login" class="col-sm-4  control-label">Login</label>
                    <div class="col-sm-5">
                        <input type="text" name="login" placeholder="Login" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">Password</label>
                    <div class="col-sm-5">
                        <input type="password" name="password" placeholder="Your password" class="form-control"><br><p>
                        <button type="submit" name="submit" class="btn btn-primary col-sm-12">Login</button>
                    </div>
                </div>
	</form>
</body>
</html>