<?php
  
    session_start();

    $error = "";    

    if (array_key_exists("logout", $_GET)) {
        
        unset($_SESSION);
        setcookie("id", "", time() - 60*60);
        $_COOKIE["id"] = "";  
        
    } else if ((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])) {
        
        header("Location: ResLeaseBoot.php");
        
    }
  



    if (array_key_exists("submit", $_POST)) {
        
        $link = mysqli_connect("mysql.ofcounseltn.com", "zglaser1", "Glockner605", "octn");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }
        
        
        
        if (!$_POST['email']) {
            
            $error .= "An email address is required<br>";
            
        } 
        
        if (!$_POST['password']) {
            
            $error .= "A password is required<br>";
            
        } 
        
        if ($error != "") {
            
            $error = "<p>There were error(s) in your form:</p>".$error;
            
        } else {
            
            if ($_POST['signUp'] == '1') {
            
                $query = "SELECT id FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";

                $result = mysqli_query($link, $query);

                if (mysqli_num_rows($result) > 0) {

                    $error = "That email address is taken.";

                } else {

                    $query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";

                    if (!mysqli_query($link, $query)) {

                        $error = "<p>Could not sign you up - please try again later.</p>";

                    } else {

                        $query = "UPDATE `users` SET password = '".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id = ".mysqli_insert_id($link)." LIMIT 1";

                        mysqli_query($link, $query);

                        $_SESSION['id'] = mysqli_insert_id($link);

                        if ($_POST['stayLoggedIn'] == '1') {

                            setcookie("id", mysqli_insert_id($link), time() + 60*60*24*365);

                        } 

                        header("Location: ResLeaseBoot.php");

                    }

                } 
                
            } else {
                    
                    $query = "SELECT * FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
                
                    $result = mysqli_query($link, $query);
                
                    $row = mysqli_fetch_array($result);
                
                    if (isset($row)) {
                        
                        $hashedPassword = md5(md5($row['id']).$_POST['password']);
                        
                        if ($hashedPassword == $row['password']) {
                            
                            $_SESSION['id'] = $row['id'];
                            
                            if ($_POST['stayLoggedIn'] == '1') {

                                setcookie("id", $row['id'], time() + 60*60*24*365);

                            } 

                            header("Location: ResLeaseBoot.php");
                                
                        } else {
                            
                            $error = "That email/password combination could not be found.";
                            
                        }
                        
                    } else {
                        
                        $error = "That email/password combination could not be found.";
                        
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
 
<nav class="navbar navbar-light bg-faded" style="background-color: #e3f2fd">
  <a class="navbar-brand" href="#"><img src="Images\TristarLogo.png" width="35" height="35" class="d-inlineiblock align-top" alt=""><span style="color: #830300;">OfCounselTN</span></a>
  <ul class="nav navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Appearances</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle active" href="http://example.com" id="supportedContentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Documents</a>
      <div class="dropdown-menu" aria-labelledby="supportedContentDropdown">
        <a class="dropdown-item" href="ResLeaseBoot.php">Residential Lease</a>
        <a class="dropdown-item" href="#">Simple Will</a>
        <a class="dropdown-item" href="#">Power of Attorney</a>
      </div>
    </li>
  </ul>
  <form class="form-inline float-xs-right">
    <a href='Login.php?logout=1'><button class="btn btn-outline-primary" type="submit">Log-In</button></a>
  </form>
</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-9">
				<h3 style="text-align: center">Log-In/Register</h3>
			</div>
			<div class="col-sm-3">
			<!--No info goes here-->
			</div>
		</div>
		<div class="row">
			<div class="col-sm-9" style="text-align: center">
			<div id="error"><?php echo $error; ?></div>
				<br>
				<br>
				<form method="post">

					<input type="email" name="email" placeholder="Your Email">
					
					<input type="password" name="password" placeholder="Password">
					
					<input type="checkbox" name="stayLoggedIn" value=1>
					
					<input type="hidden" name="signUp" value="1">
						
					<input type="submit" name="submit" value="Sign Up!">

				</form>

				<form method="post">

					<input type="email" name="email" placeholder="Your Email">
					
					<input type="password" name="password" placeholder="Password">
					
					<input type="checkbox" name="stayLoggedIn" value=1>
					
					<input type="hidden" name="signUp" value="0">
						
					<input type="submit" name="submit" value="Log In!">

				</form>
			</div>
			<div class="col-sm-3">
				<p>The documents that you create through this website are for informational purposes only. They are not intended to take the place of a competent legal advisor, and OfCounselTn does not make any warranties either express or implied regarding the usability of the documents on this website. If you need legal help, please seek the advice of a competent attorney.</p>
			</div>
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