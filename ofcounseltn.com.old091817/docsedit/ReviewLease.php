<?php

    session_start();

    if (array_key_exists("id", $_COOKIE)) {

        $_SESSION['id'] = $_COOKIE['id'];

    }

   	$link = mysqli_connect("mysql.ofcounseltn.com", "zglaser1", "Glockner605", "octn");


	if (mysqli_connect_error()) {

		die ("There was an error connecting to the database");

	}

						$query ="SELECT * FROM rlease";





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
  <a class="navbar-brand" href="#"><img src="images\TristarLogo.png" width="35" height="35" class="d-inlineiblock align-top" alt=""><span style="color: #830300;">OfCounselTN</span></a>
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
    <a href='Login.php?logout=1'<button class="btn btn-outline-primary" type="submit">Log-Out</button></a>
  </form>
</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-9">
				<h3 style="text-align: center">Review</h3>
			</div>
			<div class="col-sm-3">
			<!--No info goes here-->
			</div>
		</div>
		<div class="row">
			<div class="col-sm-9">
				<div class="card card-block">
				  <h4 class="card-title">Landlord Information:</h4>
				  <p class="card-text">
					<?php



						if ($result = mysqli_query($link, $query)) {

						$row = mysqli_fetch_array($result);

							echo "Landlord Name: "." ".$row[LLName]."	<br>";
							echo "Street Address: "." ".$row[LLContactAddy]."	<br>";
							echo "City: "." ".$row[LLContactCity]."	<br>";
							echo "State: "." ".$row[LLContactState]."	<br>";
							echo "Zip Code: "." ".$row[LLContactZip]."	<br>";

						}


					?>
				  </p>
				  <a href="#" class="card-link">Edit Information</a>
				</div>
				<div class="card card-block">
				  <h4 class="card-title">Tenant Information:</h4>
				  <p class="card-text">
					<?php



						if ($result = mysqli_query($link, $query)) {

						$row = mysqli_fetch_array($result);

							echo "Tenant Name: "." ".$row[TName]."	<br>";
							echo "Tenant Age: "." ".$row[TAge]."	<br>";
							echo "Tenant SSN: "." ".$row[TSSN]."	<br>";
							echo "Dependent/Child: "." ".$row[depNameOne]."	<br>";
							echo "Age: "." ".$row[depAgeOne]."	<br>";
							echo "SSN: "." ".$row[depSSNOne]."	<br>";
							echo "Relationship to Tenant: "." ".$row[depRelOne]."  <br>";

						}


					?>
				  </p>
				  <a href="#" class="card-link">Edit Information</a>
				</div>
				<div class="card card-block">
				  <h4 class="card-title">Lease Information:</h4>
				  <p class="card-text">
				  <?php



						if ($result = mysqli_query($link, $query)) {

						$row = mysqli_fetch_array($result);

							echo "Premises Street Address: "." ".$row[leaseAddy]."	<br>";
							echo "City: "." ".$row[leaseCity]."	<br>";
							echo "State: "." ".$row[leaseState]."	<br>";
							echo "Zip Code: "." ".$row[leaseZip]."	<br>";
							echo "Lease Start Date: "." ".$row[leaseStartDate]."	<br>";
							echo "Lease Term "." ".$row[leaseTerm]."	<br>";
							echo "Rental Period: "." ".$row[rentPeriod]."  <br>";
							echo "Rental Amount: "." ".$row[rentAmount]."  <br>";
							echo "Rent Due Date: "." ".$row[rentDay]."  <br>";
							echo "Days Prorated "." ".$row[prorataDays]."  <br>";

						}


					?>
				  </p>
				  <a href="#" class="card-link">Edit Information</a>
				</div>
				<div class="card card-block">
				  <h4 class="card-title">Deposit Information:</h4>
				  <p class="card-text">
				  <?php



						if ($result = mysqli_query($link, $query)) {

						$row = mysqli_fetch_array($result);

							echo "Security Deposit Amount: "." ".$row[secDepAmount]."	<br>";
							echo "Security Deposit Location: "." ".$row[secDepLocation]."	<br>";
							echo "Pet Deposit Amount:"." "."	<br>";
							echo "Type of Pet: "." ".$row[petType1]."	<br>";
							echo "Pet Description: "." ".$row[petIsONe]."	<br>";

						}


					?>
				  </p>
				  <a href="#" class="card-link">Edit Information</a>
				</div>
				<button type="button" class="btn btn-light btn-lg btn-block" name="checkoutButton">Proceed to Checkout</button>
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
