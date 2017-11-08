<?php

    session_start();

    if (array_key_exists("id", $_COOKIE)) {
        
        $_SESSION['id'] = $_COOKIE['id'];
        
    }

	$link = mysqli_connect("mysql.ofcounseltn.com", "zglaser1", "Glockner605");
	

	if (mysqli_connect_error()) {
		
		die ("There was an error connecting to the database");
		
	} 
	
	$query ="INSERT INTO `rlease` (`LLName`, `LLContactAddy`, `LLContactCity`, `LLContactState`, `LLContactZip`, `LLContactEmail`) VALUES(')";
	
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


	<style>
	#allDependents		{
		display: none;
	}	
	
	#firstLandlord 		{
		display: block;
	}	
	#secondLandlord		{
		display: none;
	}
	#thirdLandlord		{
		display: none;
	}
	#fourthLandlord		{
		display: none;
	}
	#fifthLandlord		{
		display: none;
	}
	#addLandlordOne		{
		display: block;
	}
	#addLandlordTwo		{
		display: block;
	}
	#addLandlordThree	{
		display: block;
	}
	#addLandlordFour	{
		display: block;
	}
	#addLandlordFive	{
		display: block;
	}
	#firstTenant		{
		display: block;
	}	
	#secondTenant		{
		display: none;
	}
	#thirdTenant		{
		display: none;
	}
	#fourthTenant		{
		display: none;
	}
	#fifthTenant		{
		display: none;
	}
	#firstDependent		{
		display: block;
	}
	#secondDependent	{
		display: none;
	}
	#thirdDependent		{
		display: none;
	}
	#fourthDependent	{
		display: none;
	}
	#fifthDependent		{
		display: none;
	}
	#sixthDependent		{
		display: none;
	}
	#seventhDependent	{
		display: none;
	}
	#eighthDependent	{
		display: none;
	}
	
	#monthlyRentDay		{
		display: block;
	}
	#annualRentDay		{
		display: none;
	}
	#weeklyRentDay		{
		display: none;
	}
	
	#allowPets			{
		display: none;
	}
	#petInfoOne			{
		display: block;
	}
	#petInfoTwo			{
		display: none;
	}
	#petInfoThree		{
		display: none;
	}
	#petInfoFour		{
		display: none;
	}
	#petInfoFive		{
		display: none;
	}
	#petInfoSix			{
		display: none;
	}
	#petInfoSeven		{
		display: none;
	}
	#petInfoEight		{
		display: none;
	}
	
	</style>
	
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
    <a href='Login.php?logout=1'><button class="btn btn-outline-primary" type="submit">Log-Out</button></a>
  </form>
</nav>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9">
			<h3 style="text-align: center">Tennessee Specific Residential Lease:</h3>
		</div>
		<div class="col-sm-3">
			
		</div>
	</div>
	
														<!--LANDLORD INFORMATION -->
	
	<div class="row">
		<div class="col-sm-9">
			<div id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="card">
				<div class="card-header" role="tab" id="headingOne">
				  <h5 class="mb-0">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  Landlord Information:
					</a>
				  </h5>
				</div>

				<div id="collapseOne" class="collapse in" role="tabpanel" aria-labelledby="headingOne">
				  <div class="card-block">
					<div id="firstLandlord">
						<div class="form-group row">
							<label for="LLName" class="sr-only">Landlord Name:</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" placeholder="Landlord Name" name="LLName">
							</div>
						</div>
						
						<div class="form-group row">
							<label for="LLContactAddy" class="sr-only">Contact Address:</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" placeholder="Street Address" name="LLContactAddy">
							</div>
						</div>
						<form class="form-inline form-group">
							 <div class="form-group">
								<label for="LLContactCity" class="sr-only">City</label>
								<input type="text" class="form-control" name="LLContactCity" placeholder="City">
							</div>
							<div class="form-group">
								<label for="LLContactState" class="sr-only">ST</label>
								<input type="text" class="form-control" id="LLContactState" placeholder="State">
							</div>
							<div class="form-group">
								<label for="LLContactZip" class="sr-only">Zip</label>
								<input type="text" class="form-control" id="LLContactZip" placeholder="Zip Code">
							</div>
						</form>
						<div class="form-group row">
							<label for="LLContactEmail" class="sr-only">Email Address:</label>
							<div class="col-xs-6">
								<input class="form-control" type="text" placeholder="Email Address" id="LLContactEmail">
							</div>
							<div class="form-check col-sm-4">
								<label class="form-check-label" id="emailNotices">
								  <input type="checkbox" class="form-check-input" name="LLContactMethod">
								  Use email for Notices from Tenant
								</label>
							</div>
						</div>
						<div class="form-inline form-group" id="addLandlordOne">
							<div class="form-check col-sm-5">
								<label class="form-check-label">
								  <input type="checkbox" class="form-check-input">
								  Additional Landlords
								</label>
							</div>
							
						</div>
					</div>
					<div id="secondLandlord">
						<div class="form-group row">
							<label for="LLNameTwo" class="sr-only">Landlord Name:</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" placeholder="Landlord Name" id="LLNameTwo">
							</div>
						</div>
						
						<div class="form-inline form-group" id="addLandlordTwo">
							<div class="form-check col-sm-5">
								<label class="form-check-label">
								  <input type="checkbox" class="form-check-input">
								  Additional Landlord
								</label>
							</div>
						</div>
					</div>
					<div id="thirdLandlord">
						<div class="form-group row">
							<label for="LLNameThree" class="sr-only">Landlord Name:</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" placeholder="Landlord Name" id="LLNameThree">
							</div>
						</div>
						
						<div class="form-inline form-group" id="addLandlordThree">
							<div class="form-check col-sm-5">
								<label class="form-check-label">
								  <input type="checkbox" class="form-check-input">
								  Additional Landlord
								</label>
							</div>
						</div>
					</div>
					<div id="fourthLandlord">
						<div class="form-group row">
							<label for="LLNameFour" class="sr-only">Landlord Name:</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" placeholder="Landlord Name" id="LLNameFour">
							</div>
						</div>
						
						<div class="form-inline form-group" id="addLandlordFour">
							<div class="form-check col-sm-5">
								<label class="form-check-label">
								  <input type="checkbox" class="form-check-input">
								  Additional Landlord
								</label>
							</div>
						</div>
					</div>
					<div id="fifthLandlord">
						<div class="form-group row">
							<label for="LLNameFive" class="sr-only">Landlord Name:</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" placeholder="Landlord Name" id="LLNameFive">
							</div>
						</div>
					</div>
				  </div>
				</div>
			  </div>
			  
																	<!-- TENANT INFORMATION -->
			  
			  <div class="card">
				<div class="card-header" role="tab" id="headingTwo">
				  <h5 class="mb-0">
					<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					  Tenant Information:
					</a>
				  </h5>
				</div>
				<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
				  <div class="card-block">
					<div id="firstTenant">
						<div class="form-group row">
							<label for="TName" class="sr-only">Tenant Name:</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" placeholder="Tenant Name" id="TName">
							</div>
						</div>
						
						<form class="form-inline form-group">
							 <div class="form-group">
								<label for="TAge" class="sr-only">Age</label>
								<input type="text" class="form-control" id="TAge" placeholder="Tenant Age">
							</div>
							<div class="form-group">
								<label for="TSSN" class="sr-only">SSN</label>
								<input type="text" class="form-control" id="TSSN" placeholder="Tenant SSN">
							</div>
						</form>
						<div class="form-inline form-group">
							<div class="form-check col-sm-5" id="addTenantTwo"> 
								<label class="form-check-label">
								  <input type="checkbox" class="form-check-input">
								  Additional Tenants
								</label>
							</div>
							<div class="form-check col-sm-5" id="addDependents">
								<label class="form-check-label">
								  <input type="checkbox" class="form-check-input">
								  Add Dependents/Children
								</label>
							</div>
						</div>
					</div>
					<div id="secondTenant">
						<div class="form-group row">
							<label for="TName2" class="sr-only">Tenant Name:</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" placeholder="Tenant Name" id="TName2">
							</div>
						</div>
						
						<form class="form-inline form-group">
							 <div class="form-group">
								<label for="TAge2" class="sr-only">Age</label>
								<input type="text" class="form-control" id="TAge2" placeholder="Tenant Age">
							</div>
							<div class="form-group">
								<label for="TSSN2" class="sr-only">SSN</label>
								<input type="text" class="form-control" id="TSSN2" placeholder="Tenant SSN">
							</div>
						</form>
						<div class="form-inline form-group" id="addTenantThree">
							<div class="form-check col-sm-5">
								<label class="form-check-label">
								  <input type="checkbox" class="form-check-input">
								  Additional Tenants
								</label>
							</div>
						</div>
					</div>
					<div id="thirdTenant">
						<div class="form-group row">
							<label for="TName3" class="sr-only">Tenant Name:</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" placeholder="Tenant Name" id="TName3">
							</div>
						</div>
						
						<form class="form-inline form-group">
							 <div class="form-group">
								<label for="TAge3" class="sr-only">Age</label>
								<input type="text" class="form-control" id="TAge3" placeholder="Tenant Age">
							</div>
							<div class="form-group">
								<label for="TSSN3" class="sr-only">SSN</label>
								<input type="text" class="form-control" id="TSSN3" placeholder="Tenant SSN">
							</div>
						</form>
						<div class="form-inline form-group" id="addTenantFour">
							<div class="form-check col-sm-5">
								<label class="form-check-label">
								  <input type="checkbox" class="form-check-input">
								  Additional Tenants
								</label>
							</div>
						</div>
					</div>
					<div id="fourthTenant">
						<div class="form-group row">
							<label for="TName4" class="sr-only">Tenant Name:</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" placeholder="Tenant Name" id="TName4">
							</div>
						</div>
						
						<form class="form-inline form-group">
							 <div class="form-group">
								<label for="TAge4" class="sr-only">Age</label>
								<input type="text" class="form-control" id="TAge4" placeholder="Tenant Age">
							</div>
							<div class="form-group">
								<label for="TSSN4" class="sr-only">SSN</label>
								<input type="text" class="form-control" id="TSSN4" placeholder="Tenant SSN">
							</div>
						</form>
						<div class="form-inline form-group" id="addTenantFive">
							<div class="form-check col-sm-5">
								<label class="form-check-label">
								  <input type="checkbox" class="form-check-input">
								  Additional Tenants
								</label>
							</div>
						</div>
					</div>
					<div id="fifthTenant">
						<div class="form-group row">
							<label for="TName5" class="sr-only">Tenant Name:</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" placeholder="Tenant Name" id="TName5">
							</div>
						</div>
						
						<form class="form-inline form-group">
							 <div class="form-group">
								<label for="TAge5" class="sr-only">Age</label>
								<input type="text" class="form-control" id="TAge5" placeholder="Tenant Age">
							</div>
							<div class="form-group">
								<label for="TSSN5" class="sr-only">SSN</label>
								<input type="text" class="form-control" id="TSSN5" placeholder="Tenant SSN">
							</div>
						</form>
					</div>
					<div id="allDependents">
						<div id="firstDependent">
							<div class="form-group row">
								<label for="depNameOne" class="sr-only">Dependent Name:</label>
								<div class="col-xs-10">
									<input class="form-control" type="text" placeholder="Dependent Name" name="depNameOne">
								</div>
							</div>
							
							<form class="form-inline form-group">
								 <div class="form-group">
									<label for="depAgeOne" class="sr-only">Age</label>
									<input type="text" class="form-control" name="depAgeOne" placeholder="Dependent Age">
								</div>
								<div class="form-group">
									<label for="depSSNOne" class="sr-only">SSN</label>
									<input type="text" class="form-control" name="depSSNOne" placeholder="Dependent SSN">
								</div>
								<div class="form-group">
									<label for="depRelOne" class="sr-only">Relationship</label>
									<input type="text" class="form-control" name="depRelOne" placeholder="Relationship to Tenant">
								</div>
							</form>
							<div class="form-inline form-group" id="addDependentTwo">
								<div class="form-check col-sm-5">
									<label class="form-check-label">
									  <input type="checkbox" class="form-check-input" id="addDepOne">
									  Additional Dependents/Children
									</label>
								</div>
							</div>
						</div>
						<div id="secondDependent">
							<div class="form-group row">
								<label for="depNameTwo" class="sr-only">Dependent Name:</label>
								<div class="col-xs-10">
									<input class="form-control" type="text" placeholder="Dependent Name" id="depNameTwo">
								</div>
							</div>
							
							<form class="form-inline form-group">
								 <div class="form-group">
									<label for="depAgeTwo" class="sr-only">Age</label>
									<input type="text" class="form-control" id="depAgeTwo" placeholder="Dependent Age">
								</div>
								<div class="form-group">
									<label for="depSSNTwo" class="sr-only">SSN</label>
									<input type="text" class="form-control" id="depSSNTwo" placeholder="Dependent SSN">
								</div>
								<div class="form-group">
									<label for="depRelTwo" class="sr-only">Relationship</label>
									<input type="Text" class="form-control" id="depRelTwo" placeholder="Relationship to Tenant">
								</div>
							</form>
							<div class="form-inline form-group" id="addDependentThree">
								<div class="form-check col-sm-5">
									<label class="form-check-label">
									  <input type="checkbox" class="form-check-input" id="addDepTwo">
									  Additional Dependents/Children
									</label>
								</div>
							</div>
						</div>
						<div id="thirdDependent">
							<div class="form-group row">
								<label for="depNameThree" class="sr-only">Dependent Name:</label>
								<div class="col-xs-10">
									<input class="form-control" type="text" placeholder="Dependent Name" id="depNameThree">
								</div>
							</div>
							
							<form class="form-inline form-group">
								 <div class="form-group">
									<label for="depAgeThree" class="sr-only">Age</label>
									<input type="text" class="form-control" id="depAgeThree" placeholder="Dependent Age">
								</div>
								<div class="form-group">
									<label for="depSSNThree" class="sr-only">SSN</label>
									<input type="text" class="form-control" id="depSSNThree" placeholder="Dependent SSN">
								</div>
								<div class="form-group">
									<label for="depRelThree" class="sr-only">Relationship</label>
									<input type="Text" class="form-control" id="depRelThree" placeholder="Relationship to Tenant">
								</div>
							</form>
							<div class="form-inline form-group" id="addDependentFour">
								<div class="form-check col-sm-5">
									<label class="form-check-label">
									  <input type="checkbox" class="form-check-input" id="addDepThree">
									  Additional Dependents/Children
									</label>
								</div>
							</div>
						</div>
						<div id="fourthDependent">
							<div class="form-group row">
								<label for="depNameFour" class="sr-only">Dependent Name:</label>
								<div class="col-xs-10">
									<input class="form-control" type="text" placeholder="Dependent Name" id="depNameFour">
								</div>
							</div>
							
							<form class="form-inline form-group">
								 <div class="form-group">
									<label for="depAgeFour" class="sr-only">Age</label>
									<input type="text" class="form-control" id="depAgeFour" placeholder="Dependent Age">
								</div>
								<div class="form-group">
									<label for="depSSNFour" class="sr-only">SSN</label>
									<input type="text" class="form-control" id="depSSNFour" placeholder="Dependent SSN">
								</div>
								<div class="form-group">
									<label for="depRelFour" class="sr-only">Relationship</label>
									<input type="Text" class="form-control" id="depRelFour" placeholder="Relationship to Tenant">
								</div>
							</form>
							<div class="form-inline form-group" id="addDependentFive">
								<div class="form-check col-sm-5">
									<label class="form-check-label">
									  <input type="checkbox" class="form-check-input" id="addDepFour">
									  Additional Dependents/Children
									</label>
								</div>
							</div>
						</div>
						<div id="fifthDependent">
							<div class="form-group row">
								<label for="depNameFive" class="sr-only">Dependent Name:</label>
								<div class="col-xs-10">
									<input class="form-control" type="text" placeholder="Dependent Name" id="depNameFive">
								</div>
							</div>
							
							<form class="form-inline form-group">
								 <div class="form-group">
									<label for="depAgeFive" class="sr-only">Age</label>
									<input type="text" class="form-control" id="depAgeFive" placeholder="Dependent Age">
								</div>
								<div class="form-group">
									<label for="depSSNFive" class="sr-only">SSN</label>
									<input type="text" class="form-control" id="depSSNFive" placeholder="Dependent SSN">
								</div>
								<div class="form-group">
									<label for="depRelFive" class="sr-only">Relationship</label>
									<input type="Text" class="form-control" id="depRelFive" placeholder="Relationship to Tenant">
								</div>
							</form>
							<div class="form-inline form-group" id="addDependentSix">
								<div class="form-check col-sm-5">
									<label class="form-check-label">
									  <input type="checkbox" class="form-check-input" id="addDepFive">
									  Additional Dependents/Children
									</label>
								</div>
							</div>
						</div>
						<div id="sixthDependent">
							<div class="form-group row">
								<label for="depNameSix" class="sr-only">Dependent Name:</label>
								<div class="col-xs-10">
									<input class="form-control" type="text" placeholder="Dependent Name" id="depNameSix">
								</div>
							</div>
							
							<form class="form-inline form-group">
								 <div class="form-group">
									<label for="depAgeSix" class="sr-only">Age</label>
									<input type="text" class="form-control" id="depAgeSix" placeholder="Dependent Age">
								</div>
								<div class="form-group">
									<label for="depSSNSix" class="sr-only">SSN</label>
									<input type="text" class="form-control" id="depSSNSix" placeholder="Dependent SSN">
								</div>
								<div class="form-group">
									<label for="depRelSix" class="sr-only">Relationship</label>
									<input type="Text" class="form-control" id="depRelSix" placeholder="Relationship to Tenant">
								</div>
							</form>
							<div class="form-inline form-group" id="addDependentSeven">
								<div class="form-check col-sm-5">
									<label class="form-check-label">
									  <input type="checkbox" class="form-check-input" id="addDepSix">
									  Additional Dependents/Children
									</label>
								</div>
							</div>
						</div>
						<div id="seventhDependent">
							<div class="form-group row">
								<label for="depNameSeven" class="sr-only">Dependent Name:</label>
								<div class="col-xs-10">
									<input class="form-control" type="text" placeholder="Dependent Name" id="depNameThree">
								</div>
							</div>
							
							<form class="form-inline form-group">
								 <div class="form-group">
									<label for="depAgeSeven" class="sr-only">Age</label>
									<input type="text" class="form-control" id="depAgeSeven" placeholder="Dependent Age">
								</div>
								<div class="form-group">
									<label for="depSSNSeven" class="sr-only">SSN</label>
									<input type="text" class="form-control" id="depSSNSeven" placeholder="Dependent SSN">
								</div>
								<div class="form-group">
									<label for="depRelSeven" class="sr-only">Relationship</label>
									<input type="Text" class="form-control" id="depRelSeven" placeholder="Relationship to Tenant">
								</div>
							</form>
							<div class="form-inline form-group" id="addDependentEight">
								<div class="form-check col-sm-5">
									<label class="form-check-label">
									  <input type="checkbox" class="form-check-input" id="addDepSeven">
									  Additional Dependents/Children
									</label>
								</div>
							</div>
						</div>
						<div id="eighthDependent">
							<div class="form-group row">
								<label for="depNameEight" class="sr-only">Dependent Name:</label>
								<div class="col-xs-10">
									<input class="form-control" type="text" placeholder="Dependent Name" id="depNameEight">
								</div>
							</div>
							
							<form class="form-inline form-group">
								 <div class="form-group">
									<label for="depAgeEight" class="sr-only">Age</label>
									<input type="text" class="form-control" id="depAgeEight" placeholder="Dependent Age">
								</div>
								<div class="form-group">
									<label for="depSSNEight" class="sr-only">SSN</label>
									<input type="text" class="form-control" id="depSSNEight" placeholder="Dependent SSN">
								</div>
								<div class="form-group">
									<label for="depRelEight" class="sr-only">Relationship</label>
									<input type="Text" class="form-control" id="depRelEight" placeholder="Relationship to Tenant">
								</div>
							</form>
						</div>
					</div>
				  </div>
				</div>
			  </div>
			  
															<!-- LEASE INFORMATION -->
			  
			  <div class="card">
				<div class="card-header" role="tab" id="headingThree">
				  <h5 class="mb-0">
					<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					  Lease Information:
					</a>
				  </h5>
				</div>
				<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
					<div class="card-block">
						<div class="form-group row">
							<label for="leaseAddy" class="sr-only">Premises Address:</label>
							<div class="col-xs-10">
								<input class="form-control" type="text" placeholder="Leased Premesis Address" name="leaseAddy">
							</div>
						</div>
						<form class="form-inline form-group">
							 <div class="form-group">
								<label for="leaseCity" class="sr-only">City</label>
								<input type="text" class="form-control" name="leaseCity" placeholder="City">
							</div>
							<div class="form-group">
								<label for="leaseState" class="sr-only">ST</label>
								<input type="email" class="form-control" name="leaseState" placeholder="State">
							</div>
							<div class="form-group">
								<label for="leaseZip" class="sr-only">Zip</label>
								<input type="email" class="form-control" name="leaseZip" placeholder="Zip Code">
							</div>
						</form>
						<div class="form-group row">
							<div class="col-xs-5">
								<div class="form-group row">
									<div class="col-xs-12 form-inline">
											<label for="date">
												Start Date:
											</label>
											<input class="form-control" id="date" name="leaseStartDate" placeholder="MM/DD/YYYY" type="text"/>			
									</div>
								</div>
								<div class="form-group row" name="leaseTerm">
									<div class="col-xs-12">
									<label for="leaseTerm">Term:</label>
										<select name="leaseTerm" id="leaseTerm">
											<option value="1">1 Year</option>
											<option value="2">2 Year</option>
											<option value="3">Month-to-month</option>
											<option value="4">Week-to-week</option>
											<option value="5">6 Month</option>
										</select>
									</div>
								</div>
								<div class="form-group row" >
									<div class="col-xs-12">
									<label for="rentPeriod">Period:</label>
										<select name="rentPeriod" id="rentPeriod">
											<option value="1">Monthly</option>
											<option value="2">Annually</option>
											<option value="3">Weekly</option>
										</select>
									</div>													
								</div>
							</div>
							<div class="col-xs-7">
								<div class="form-group row">
									<div class="col-xs-12 form-inline">
											<label for="date">
												Rent Per Period:
											</label>
											<input class="form-control" id="rentAmount" name="rentAmount" placeholder="00.00" type="text"/>			
									</div>
								</div>
								<div class="form-group row" id="monthlyRentDay">
									<div class="col-xs-12">
									<label for="leaseTerm">Rent Due Day:</label>
										<select name="rentDay">
											<option value="1">01</option>
											<option value="2">02</option>
											<option value="3">03</option>
											<option value="4">04</option>
											<option value="5">05</option>
											<option value="6">06</option>
											<option value="7">07</option>
											<option value="8">08</option>
											<option value="9">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="1">13</option>
											<option value="2">14</option>
											<option value="3">15</option>
											<option value="4">16</option>
											<option value="5">17</option>
											<option value="6">18</option>
											<option value="7">19</option>
											<option value="8">20</option>
											<option value="9">21</option>
											<option value="10">22</option>
											<option value="11">23</option>
											<option value="12">24</option>
											<option value="6">25</option>
											<option value="7">26</option>
											<option value="8">27</option>
											<option value="9">28</option>
											<option value="10">29</option>
											<option value="11">30</option>
											<option value="12">31</option>
										</select>
									</div>
								</div>
								<div class="form-group row" id="annualRentDay">
									<div class="form-inline col-xs-12">
									<label for="rentPeriod">Annual Rent Month:</label>
										<select name="rentYRMonth">
											<option value="1">January</option>
											<option value="2">February</option>
											<option value="3">March</option>
											<option value="4">April</option>
											<option value="5">May</option>
											<option value="6">June</option>
											<option value="7">July</option>
											<option value="8">August</option>
											<option value="9">September</option>
											<option value="10">October</option>
											<option value="11">November</option>
											<option value="12">December</option>
										</select>
									<label for="rentPeriod">Day:</label>
										<select name="rentYRDay">
											<option value="1">01</option>
											<option value="2">02</option>
											<option value="3">03</option>
											<option value="4">04</option>
											<option value="5">05</option>
											<option value="6">06</option>
											<option value="7">07</option>
											<option value="8">08</option>
											<option value="9">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
									</div>													
								</div>
								<div class="form-group row" id="weeklyRentDay">
									<div class="col-xs-12">
									<label for="rentPeriod">Rent Due Day:</label>
										<select name="rentWKDay">
											<option value="1">Monday</option>
											<option value="2">Tuesday</option>
											<option value="3">Wednesday</option>
											<option value="4">Thursday</option>
											<option value="5">Friday</option>
											<option value="6">Saturday</option>
											<option value="7">Sunday</option>
										</select>
									</div>													
								</div>
								<div class="form-group row">
									<div class="col-xs-12">
									<label for="leaseTerm">Pro-rata days:</label>
										<select name="prorataDays">
											<option value="0">None</option>
											<option value="1">01</option>
											<option value="2">02</option>
											<option value="3">03</option>
											<option value="4">04</option>
											<option value="5">05</option>
											<option value="6">06</option>
											<option value="7">07</option>
											<option value="8">08</option>
											<option value="9">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			  </div>
			  
													<!-- DEPOSIT INFORMATION -->
			  
			  <div class="card">
				<div class="card-header" role="tab" id="headingFour">
				  <h5 class="mb-0">
					<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					  Deposit Information:
					</a>
				  </h5>
				</div>
				<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
					<div class="card-block">
						<div class="form-group row">
							<div class="col-xs-12 form-inline">
									<label for="date">
										Security Deposit:
									</label>
									<input class="form-control" id="secDepAmount" name="secDepAmount" placeholder="Amount: $00.00" type="text"/>
									<label for="date" class="sr-only">
										Location:
									</label>
									<input class="form-control" id="secDepLocation" name="secDepLocation" placeholder="Location/Bank Name" type="text"/>
									<label class="form-check-label" name="noSecDep">
										<input type="checkbox" class="form-check-input">
										No Security Deposit Retained
									</label>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-xs-12 form-inline" id="petsAllowed">
								<label class="form-check-label" id="emailNotices">
									<input type="checkbox" class="form-check-input" name="petsConfirm">
									Landlord is allowing Pets
								</label>								
							</div>
						</div>
						<div id="allowPets">
							<div class="form-group row">
								<div class="col-xs-12 form-inline">
									<label for="date">
										Pet Deposit:
									</label>
									<input class="form-control" id="petDepAmount" name="petDepAmount" placeholder="Amount: $00.00" type="text"/>
								</div>
							</div>	
							<div class="form-inline form-group" id="petInfoOne">
								 <div class="form-group">
									<label for="petType1" class="sr-only">Pet Type</label>
									<input type="text" class="form-control" name="petType1" placeholder="Pet Type">
								</div>
								<div class="form-group">
									<label for="petIsOne" class="sr-only">Pet Description</label>
									<input type="text" class="form-control" name="petIsOne" placeholder="Pet Description">
								</div>
								<div class="form-group">
									<label class="form-check-label" id="addPetTwo">
										<input type="checkbox" class="form-check-input">
										Add another pet
									</label>
								</div>
							</div>
							<div class="form-inline form-group" id="petInfoTwo">
								 <div class="form-group">
									<label for="petType2" class="sr-only">Pet Type</label>
									<input type="text" class="form-control" name="petType2" placeholder="Pet Type">
								</div>
								<div class="form-group">
									<label for="petIs2" class="sr-only">Pet Description</label>
									<input type="text" class="form-control" name="petIs2" placeholder="Pet Description">
								</div>
								<div class="form-group">
									<label class="form-check-label" id="addPetThree">
										<input type="checkbox" class="form-check-input">
										Add another pet
									</label>
								</div>
							</div>
							<div class="form-inline form-group" id="petInfoThree">
								 <div class="form-group">
									<label for="petType3" class="sr-only">Pet Type</label>
									<input type="text" class="form-control" name="petType3" placeholder="Pet Type">
								</div>
								<div class="form-group">
									<label for="petIs3" class="sr-only">Pet Description</label>
									<input type="email" class="form-control" name="petIs3" placeholder="Pet Description">
								</div>
								<div class="form-group">
									<label class="form-check-label" id="addPetFour">
										<input type="checkbox" class="form-check-input">
										Add another pet
									</label>
								</div>
							</div>
							<div class="form-inline form-group" id="petInfoFour">
								 <div class="form-group">
									<label for="petType4" class="sr-only">Pet Type</label>
									<input type="text" class="form-control" name="petType4" placeholder="Pet Type">
								</div>
								<div class="form-group">
									<label for="petIs4" class="sr-only">Pet Description</label>
									<input type="text" class="form-control" name="petIs4" placeholder="Pet Description">
								</div>
								<div class="form-group">
									<label class="form-check-label" id="addPetFive">
										<input type="checkbox" class="form-check-input">
										Add another pet
									</label>
								</div>
							</div>
							<div class="form-inline form-group" id="petInfoFive">
								 <div class="form-group">
									<label for="petType5" class="sr-only">Pet Type</label>
									<input type="text" class="form-control" name="petType5" placeholder="Pet Type">
								</div>
								<div class="form-group">
									<label for="petIs5" class="sr-only">Pet Description</label>
									<input type="text" class="form-control" name="petIs5" placeholder="Pet Description">
								</div>
								<div class="form-group">
									<label class="form-check-label" id="addPetSix">
										<input type="checkbox" class="form-check-input">
										Add another pet
									</label>
								</div>
							</div>
							<div class="form-inline form-group" id="petInfoSix">
								 <div class="form-group">
									<label for="petType6" class="sr-only">Pet Type</label>
									<input type="text" class="form-control" name="petType6" placeholder="Pet Type">
								</div>
								<div class="form-group">
									<label for="petIs6" class="sr-only">Pet Description</label>
									<input type="text" class="form-control" name="petIs6" placeholder="Pet Description">
								</div>
								<div class="form-group">
									<label class="form-check-label" id="addPetSeven">
										<input type="checkbox" class="form-check-input">
										Add another pet
									</label>
								</div>
							</div>
							<div class="form-inline form-group" id="petInfoSeven">
								 <div class="form-group">
									<label for="petType7" class="sr-only">Pet Type</label>
									<input type="text" class="form-control" name="petType7" placeholder="Pet Type">
								</div>
								<div class="form-group">
									<label for="petIs7" class="sr-only">Pet Description</label>
									<input type="text" class="form-control" name="petIs7" placeholder="Pet Description">
								</div>
								<div class="form-group">
									<label class="form-check-label" id="addPetEight">
										<input type="checkbox" class="form-check-input">
										Add another pet
									</label>
								</div>
							</div>
							<div class="form-inline form-group" id="petInfoEight">
								 <div class="form-group">
									<label for="petType8" class="sr-only">Pet Type</label>
									<input type="text" class="form-control" name="petType8" placeholder="Pet Type">
								</div>
								<div class="form-group">
									<label for="petIs8" class="sr-only">Pet Description</label>
									<input type="text" class="form-control" name="petIs8" placeholder="Pet Description">
								</div>
							</div>
						</div>
					</div>
				</div>
			  </div>
			</div>
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

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="leaseStartDate"]'); //our date input has the name "leaseStartDate"
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