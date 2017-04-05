<!doctype html>
<html lang="en">
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
	div
	  #center { text-align: center; }
</style>
	<meta charset="UTF-8">
	<title>Registration</title>
</head>
<body>
<div class="container">
			<h2>Registration</h2>
            <form class="form-horizontal" method="POST" action="index.php">
               <div class='alert alert-danger' style="display: none">
                <strong>Error:</strong> Some fields are empty.
                </div>
                <div class="form-group">
                    <label for="login" class="col-sm-4 control-label">Login</label>
                    <div class="col-sm-5">
                        <input type="text" name="login" placeholder="Login" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">Password</label>
                    <div class="col-sm-5">
                        <input type="password" name="password" placeholder="Dog name or something" class="form-control">
                    </div>
                </div>
                    <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">Password again</label>
                    <div class="col-sm-5">
                        <input type="password" name="passwordAgain" placeholder="Password again" class="form-control">
                    </div>
                </div>
                    <div class="form-group">
                    <label for="email" class="col-sm-4 control-label">Email</label>
                    <div class="col-sm-5">
                        <input type="email" name="email" placeholder="E@mail" class="form-control">
                    </div>
                </div>
                    <div class="form-group">
                    <label for="telephone" class="col-sm-4 control-label">telephone</label>
                    <div class="col-sm-5">
                        <input type="" name="phone" placeholder="000-000-00-00" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="country" class="col-sm-4 control-label">Country</label>
                    <div class="col-sm-5">
                        <select name="country" class="form-control">
                            <option>Afghanistan</option>
                            <option>Bahamas</option>
                            <option>Cambodia</option>
                            <option>Denmark</option>
                            <option>Ecuador</option>
                            <option>Ukraine</option>
                            <option>Gabon</option>
                            <option>Haiti</option>
                        </select><br><p>
                        <button type="submit" name="submit" class="btn btn-primary col-sm-12 ">Register</button>
                    </div>
                </div>	
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
	</form>
</body>
</html>