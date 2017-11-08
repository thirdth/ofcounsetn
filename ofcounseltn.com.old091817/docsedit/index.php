<!DOCTYPE html>
<?php

	$link = mysqli_connect("mysql.ofcounseltn.com", "zglaser1", "Glockner605");


	if (mysqli_connect_error()) {

		die ("There was an error connecting to the database");

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
        <a class="dropdown-item" href="#">Residential Lease</a>
        <a class="dropdown-item" href="#">Simple Will</a>
        <a class="dropdown-item" href="#">Power of Attorney</a>
      </div>
    </li>
  </ul>
  <form class="form-inline float-xs-right">
    <input class="form-control" type="text" placeholder="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
</nav>
<div class="container">
	<div class="row">
		<div class="col-sm-9">
			<h3 style="text-align: center"><noscript>

			</noscript></h3>
		</div>
		<div class="col-sm-3">

		</div>
	</div>
	<div class="row">
		<div class="col-sm-9">
			<div class="row">
				<div class="card card-block">
				  <h4 class="card-title">Prepare Yourself:</h4>
				  <p class="card-text">Whether you are renting our your second home, or sepecifying your medical wishes, your legal relationships deserve good preventative care.
					Let LegalLynx make it easy by providing low-cost educational documents and straight-forward legal consultations.</p>
				  <a href="#" class="card-link">Find a Document</a>
				</div>
			</div>
			<div class="row">
					<div class="col-sm-4">
						<div class="card card-inverse card-primary">
						  <img class="card-img-top" src="images\Home.png" alt="Card image cap">
						  <div class="card-block">
						    <p class="card-text">Residential Lease</p>
						  </div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card card-inverse card-primary">
						  <img class="card-img-top" src="images\document.png" alt="Card image cap">
						  <div class="card-block">
						    <p class="card-text">Simple Will</p>
						  </div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card card-inverse card-primary">
						  <img class="card-img-top center-block" src="images\business.png" alt="Card image cap">
						  <div class="card-block">
						    <p class="card-text">Start a Business</p>
						  </div>
						</div>
					</div>

		</div>
	</div>
		<div class="col-sm-3">
			<p>The documents that you create through this website are for informational purposes only. They are not intended to take the place of a competent legal advisor, and OfCounselTn does not make any warranties either express or implied regarding the usability of the documents on this website. If you need legal help, please seek the advice of a competent attorney.</p>
		</div>

</div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="leaseStartDate"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
	document.getElementById("addLandlordOne").onclick = function() {
		var LLOne = document.getElementById("secondLandlord");
		if (LLOne.style.display == "block") {
			LLOne.style.display="none";
		} else	{
			LLOne.style.display="block";
		}
	}
	document.getElementById("addLandlordTwo").onclick = function() {
		var LLOne = document.getElementById("thirdLandlord");
		if (LLOne.style.display == "block") {
			LLOne.style.display="none";
		} else	{
			LLOne.style.display="block";
		}
	}
	document.getElementById("addLandlordThree").onclick = function() {
		var LLOne = document.getElementById("fourthLandlord");
		if (LLOne.style.display == "block") {
			LLOne.style.display="none";
		} else	{
			LLOne.style.display="block";
		}
	}
	document.getElementById("addLandlordFour").onclick = function() {
		var LLOne = document.getElementById("fifthLandlord");
		if (LLOne.style.display == "block") {
			LLOne.style.display="none";
		} else	{
			LLOne.style.display="block";
		}
	}
	// Add Tenants

	document.getElementById("addTenantTwo").onclick = function() {
		var TOne = document.getElementById("secondTenant");
		if (TOne.style.display == "block") {
			TOne.style.display="none";
		} else	{
			TOne.style.display="block";
		}
	}
	document.getElementById("addTenantThree").onclick = function() {
		var TOne = document.getElementById("thirdTenant");
		if (TOne.style.display == "block") {
			TOne.style.display="none";
		} else	{
			TOne.style.display="block";
		}
	}
	document.getElementById("addTenantFour").onclick = function() {
		var TOne = document.getElementById("fourthTenant");
		if (TOne.style.display == "block") {
			TOne.style.display="none";
		} else	{
			TOne.style.display="block";
		}
	}
	document.getElementById("addTenantFive").onclick = function() {
		var TOne = document.getElementById("fifthTenant");
		if (TOne.style.display == "block") {
			TOne.style.display="none";
		} else	{
			TOne.style.display="block";
		}
	}

	//Add Dependents

	document.getElementById("addDependents").onclick = function() {
		var TOne = document.getElementById("allDependents");
		if (TOne.style.display == "block") {
			TOne.style.display="none";
		} else	{
			TOne.style.display="block";
		}
	}
	document.getElementById("addDependentTwo").onclick = function() {
		var Dep = document.getElementById("secondDependent");
		if (Dep.style.display == "block") {
			Dep.style.display="none";
		} else	{
			Dep.style.display="block";
		}
	}
	document.getElementById("addDependentThree").onclick = function() {
		var Dep = document.getElementById("thirdDependent");
		if (Dep.style.display == "block") {
			Dep.style.display="none";
		} else	{
			Dep.style.display="block";
		}
	}
	document.getElementById("addDependentFour").onclick = function() {
		var Dep = document.getElementById("fourthDependent");
		if (Dep.style.display == "block") {
			Dep.style.display="none";
		} else	{
			Dep.style.display="block";
		}
	}
	document.getElementById("addDependentFive").onclick = function() {
		var Dep = document.getElementById("fifthDependent");
		if (Dep.style.display == "block") {
			Dep.style.display="none";
		} else	{
			Dep.style.display="block";
		}
	}
	document.getElementById("addDependentSix").onclick = function() {
		var Dep = document.getElementById("sixthDependent");
		if (Dep.style.display == "block") {
			Dep.style.display="none";
		} else	{
			Dep.style.display="block";
		}
	}
	document.getElementById("addDependentSeven").onclick = function() {
		var Dep = document.getElementById("seventhDependent");
		if (Dep.style.display == "block") {
			Dep.style.display="none";
		} else	{
			Dep.style.display="block";
		}
	}
	document.getElementById("addDependentEight").onclick = function() {
		var Dep = document.getElementById("eighthDependent");
		if (Dep.style.display == "block") {
			Dep.style.display="none";
		} else	{
			Dep.style.display="block";
		}
	}

	//Lease Information

	document.getElementById("rentPeriod").onchange = function() {
		var e = document.getElementById("rentPeriod")
		if (e.value == 1) {
			document.getElementById("monthlyRentDay").style.display = "block";
			document.getElementById("annualRentDay").style.display = "none";
			document.getElementById("weeklyRentDay").style.display = "none";
		} else if (e.value == 2) {
			document.getElementById("monthlyRentDay").style.display = "none";
			document.getElementById("annualRentDay").style.display = "block";
			document.getElementById("weeklyRentDay").style.display = "none";
		}	else {
			document.getElementById("monthlyRentDay").style.display = "none";
			document.getElementById("annualRentDay").style.display = "none";
			document.getElementById("weeklyRentDay").style.display = "block";
		}
	}

	//DEPOSIT Information

	document.getElementById("petsAllowed").onclick = function() {
		var e = document.getElementById("allowPets");
		if (e.style.display == "block") {
			e.style.display="none";
		} else	{
			e.style.display="block";
		}
	}
	document.getElementById("addPetTwo").onclick = function() {
		var e = document.getElementById("petInfoTwo");
		if (e.style.display == "block") {
			e.style.display="none";
		} else	{
			e.style.display="block";
		}
	}
	document.getElementById("addPetThree").onclick = function() {
		var e = document.getElementById("petInfoThree");
		if (e.style.display == "block") {
			e.style.display="none";
		} else	{
			e.style.display="block";
		}
	}
	document.getElementById("addPetFour").onclick = function() {
		var e = document.getElementById("petInfoFour");
		if (e.style.display == "block") {
			e.style.display="none";
		} else	{
			e.style.display="block";
		}
	}
	document.getElementById("addPetFive").onclick = function() {
		var e = document.getElementById("petInfoFive");
		if (e.style.display == "block") {
			e.style.display="none";
		} else	{
			e.style.display="block";
		}
	}
	document.getElementById("addPetSix").onclick = function() {
		var e = document.getElementById("petInfoSix");
		if (e.style.display == "block") {
			e.style.display="none";
		} else	{
			e.style.display="block";
		}
	}
	document.getElementById("addPetSeven").onclick = function() {
		var e = document.getElementById("petInfoSeven");
		if (e.style.display == "block") {
			e.style.display="none";
		} else	{
			e.style.display="block";
		}
	}
	document.getElementById("addPetEight").onclick = function() {
		var e = document.getElementById("petInfoEight");
		if (e.style.display == "block") {
			e.style.display="none";
		} else	{
			e.style.display="block";
		}
	}
</script>
  </body>
</html>
