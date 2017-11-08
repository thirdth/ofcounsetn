<!DOCTYPE html>
<?php


	if (array_key_exists("submit", $_POST)) {

	include ("dbconnect.php");

		$error = "";

		if (!$_POST['email']) {

			$error .= "An email address is required<br>";

		}
		if (!$_POST['password']) {

			$error .= "A password is required<br>";

		}

		if ($error != "") {

			$error = "<p>There were error(s) in your form:</p>".$error;

		}	else {

			$query = "SELECT id FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST[`email`])."' LIMIT 1";

			$result = mysqli_query($link, $query);

			if (mysqli_num_rows($result) > 0)	{

					$error = "That email address is taken";

			} else {

				$query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST[`email`])."', '".mysqli_real_escape_string($link, $_POST[`password`])."')";

				 if (!mysqli_query($link, $query))	{

					 $error = "<p>No signup!</p>";

				 }	else 	{

					 echo "signup successful";

				 }

			}
		}

	}



?>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">



  </head>
  <body>
<?php

	include ("navbar.php");

 ?>
<div class="container">
	<div class="row">
		<div class="col-sm-9">
			<h3 style="text-align: center"><noscript>

			</noscript></h3>
		</div>
		<div class="col-sm-3">

		</div>
	</div>
	<div id="error"><?php echo $error; ?></div>
	<div class="row">
		<div class="col-sm-9">
			<form class="form-signin" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" class="form-control" placeholder="Email address" autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="stayLoggedIn" value=1> Remember me
          </label>
        </div>
        <button class="btn btn-md btn-primary btn-block" type="submit" name="submit">Sign in</button>
      </form>
	  </div>
		<?php
			include ("sidebar.php");
		 ?>

	</div>
</div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>


  </body>
</html>
