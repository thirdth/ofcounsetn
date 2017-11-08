<!DOCTYPE html>
<?php

	$link = mysqli_connect("mysql.ofcounseltn.com", "zglaser1", "Glockner605");
	

	if (mysqli_connect_error()) {
		
		die ("There was an error connecting to the database");
		
	} 
	

	
	
?>
<html>

<head>

    <meta charset="utf-8">

    <title>OfCounselTN</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="TristarCSS.css">


</head>

<body>

  	<div id="headerWrapper">

    		<div id="header">
			<div id="Legal">
				Legal
			</div>

			
			<div id="TN">
				TN
			</div>
			<div id="clear">
			</div>
			<div id="slogan">
				Legal Docs for Tennesseans
			</div>			
		</div>
  
	</div>

  	<div id="navWrapper">

    		<div id="nav">
			<div id="navContent">
				<ul>

	        			<li class="dropDown">
					<span class="dropbtn">Property</span>
						<div class="dropDownContent">
							<a href="ResLease">Real Estate</a>
							<a href="#">Personal Property</a>
							<a href="#">Quit Claim Deed</a>
							<a href="#">Link 4</a>
						</div>
					</li>

	        			<li class="dropDown">
					<span class="dropbtn">Personal</span>
						<div class="dropDownContent">
							<a href="#">Family Law</a>
							<a href="#">Elder Care</a>
							<a href="#">Bankruptcy</a>
							<a href="#"></a>
						</div>
					</li>

	        			<li class="dropDown">
					<span class="dropbtn">Business</span>
						<div class="dropDownContent">
							<a href="#">Starting a Business</a>
							<a href="#">Maintaining a Business</a>
							<a href="#">Employees/Independent Contractors</a>
							<a href="#">Link 4</a>
						</div>
					</li>

	        			<li class="dropDown">
					<span class="dropbtn">Wills & Trusts</span>
						<div class="dropDownContent">
							<a href="#">Simple Will</a>
							<a href="#">Quit Claim Deed</a>
							<a href="#">Bill of Sale</a>
							<a href="#">Link 4</a>
						</div>
					</li>
					<li class="dropDown">
					<span class="dropbtn">Get Legal Advice</span>
						<div class="dropDownContent">
							<a href="#">Request Consultation</a>
							<a href="#">Tennessee Bar Association</a>
							<a href="#">Lawyers in our Network</a>
							<a href="#">Link 4</a>
						</div>
					</li>
				</ul>
			
			</div>
	
      
  </div>
		<div id="navBottom">
			<div id="navBottomHead">
			</div>
			<div id="navBottomFoot">
			</div>
		</div>
	</div>
	<div id="contentWrapper">
	
<!-- Landlord Information -->

		<div class="title" id="landlord">
			<p>Landlord Information</p>
		</div>
		<div class="floatWrapper">
			<div class="question" id="landlordKindQ">
				<p>Is the landlord an individual or a business?</p>
			</div>
			<div class="answer" id="landlordKindA">
				<input type="radio" name="landlordType" value="Business" id="landlordTypeBus" checked>Business
				<input type="radio" name="landlordType" value="Individual" id="landlordTypeIndiv">Individual
			</div>
		</div>
		<div class="clear">
		</div>
		<div class="floatWrapper">
			<div class="question" id="landlordNumberQ">
				<p>How many landlords do you want on the lease?</p>
			</div>
			<div class="answer">
				<select id="landlordNumber">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
		</div>
		<div class="floatWrapper">
			<div class="question">
				<p>How do you want to receive notices from the tenant?</p>
			</div>
			<div class="answer">
				<select id="landlordContactType">
					<option value="1">Email</option>
					<option value="2">Snail Mail</option>
				</select>
			</div>
		</div>
		<div class="floatWrapper">
			<div class="question">
				<button id="landlordButton">Continue</button>
			</div>
		</div>
		<div class="floatWrapper" id="landlordIndivOne">
			<div class="question">
				<p>Landlord 1:</p>
			</div>
			<div class="answer">
				<input type="text" id="landlordFirstOne" placeholder="First">
				<input type="text" id="landlordLastOne" placeholder="Last">
				<select>
					<option value="null"></option>
					<option value="Sr">Sr.</option>
					<option value="Jr">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
			</div>
		</div>
		<div class="floatWrapper" id="landlordIndivTwo">
			<div class="question">
				<p>Landlord 2:</p>
			</div>
			<div class="answer">
				<input type="text" id="landlordFirstTwo" placeholder="First">
				<input type="text" id="landlordLastTwo" placeholder="Last">
				<select>
					<option value="null"></option>
					<option value="Sr">Sr.</option>
					<option value="Jr">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
			</div>
		</div>
		<div class="floatWrapper" id="landlordIndivThree">
			<div class="question">
				<p>Landlord 3:</p>
			</div>
			<div class="answer">
				<input type="text" id="landlordFirstThree" placeholder="First">
				<input type="text" id="landlordLastThree" placeholder="Last">
				<select>
					<option value="null"></option>
					<option value="Sr">Sr.</option>
					<option value="Jr">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
			</div>
		</div>
		<div class="floatWrapper" id="landlordIndivFour">
			<div class="question">
				<p>Landlord 4:</p>
			</div>
			<div class="answer">
				<input type="text" id="landlordFirstFour" placeholder="First">
				<input type="text" id="landlordLastFour" placeholder="Last">
				<select>
					<option value="null"></option>
					<option value="Sr">Sr.</option>
					<option value="Jr">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
			</div>
		</div>
		<div class="floatWrapper" id="landlordIndivFive">
			<div class="question">
				<p>Landlord 5:</p>
			</div>
			<div class="answer">
				<input type="text" id="landlordFirstFive" placeholder="First">
				<input type="text" id="landlordLastFive" placeholder="Last">
				<select>
					<option value="null"></option>
					<option value="Sr">Sr.</option>
					<option value="Jr">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
			</div>
		</div>
		<div class="floatWrapper" id="landlordBusOne">
			<div class="question">
				<p>Landlord 1:</p>
			</div>
			<div class="answer">
				<input type="text" id="landlordBusNameOne" placeholder="Business Name">
			</div>
		</div>
		<div class="floatWrapper" id="landlordBusTwo">
			<div class="question">
				<p>Landlord 2:</p>
			</div>
			<div class="answer">
				<input type="text" id="landlordBusNameTwo" placeholder="Business Name">
			</div>
		</div>
		<div class="floatWrapper" id="landlordBusThree">
			<div class="question">
				<p>Landlord 3:</p>
			</div>
			<div class="answer">
				<input type="text" id="landlordBusNameThree" placeholder="Business Name">
			</div>
		</div>
		<div class="floatWrapper" id="landlordBusFour">
			<div class="question">
				<p>Landlord 4:</p>
			</div>
			<div class="answer">
				<input type="text" id="landlordBusNameFour" placeholder="Business Name">
			</div>
		</div>
		<div class="floatWrapper" id="landlordBusFive">
			<div class="question">
				<p>Landlord 5:</p>
			</div>
			<div class="answer">
				<input type="text" id="landlordBusNameFive" placeholder="Business Name">
			</div>
		</div>
		<div class="floatWrapper" id="landlordContactEmail">
			<div class="question">
				<p>Please enter Landlord's Email Address</p>
			</div>
			<div class="answer">
				<input type="text" id="landlordContactEmailA" placeholder="Landlord Email Address">
			</div>
		</div>
		<div class="floatWrapper" id="landlordContactAddy">
			<div class="question">
				<p>Please enter Landlord's Address</p>
			</div>
			<div class="answer">
				<input type="text" id="landlordContactAddress" placeholder="Landlord Address">
				<input type="text" id="landlordContactCity" placeholder="Landlord City">
				<input type="text" id="landlordContactState" placeholder="Landlord State">
				<input type="number" id="landlordContactZip" placeholder="Landlord Zip">
			</div>
		</div>
		
<!-- Tenant Information -->

		<div class="title" id="landlord">
			<p>Tenant Information</p>
		</div>
		<div class="floatWrapper">
			<div class="question">
				<p>How many tenants will sign the lease?</p>
			</div>
			<div class="answer">
				<select  id="tenantNumber">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
		</div>
		<div class="floatWrapper">
			<div class="question" id="tenantNumberQ">
				<p>How many dependents/children do the tenants have?</p>
			</div>
			<div class="answer">
				<select id="dependentNumber">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
				</select>
			</div>
		</div>
		<div class="floatWrapper">
			<div class="question">
				<button id="tenantButton">Continue</button>
			</div>
		</div>
		<div class="floatWrapper" id="tenantNameOne">
			<div class="question">
				<p>Tenant 1:</p>
			</div>
			<div class="answer">
				<input type="text" id="tenantFirstOne" placeholder="First">
				<input type="text" id="tenantLastOne" placeholder="Last">
				<select>
					<option value="null"></option>
					<option value="Sr">Sr.</option>
					<option value="Jr">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
				<input type="number" id="tenantAgeOne" placeholder="Age">
				<input type="text" id="tenantSSNOne" placeholder="SSN">
			</div>
		</div>
		<div class="floatWrapper" id="tenantNameTwo">
			<div class="question">
				<p>Tenant 2:</p>
			</div>
			<div class="answer">
				<input type="text" id="tenantFirstTwo" placeholder="First">
				<input type="text" id="tenantLastTwo" placeholder="Last">
				<select>
					<option value="null"></option>
					<option value="Sr">Sr.</option>
					<option value="Jr">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
				<input type="number" id="tenantAgeTwo" placeholder="Age">
				<input type="text" id="tenantSSNTwo" placeholder="SSN">
			</div>
		</div>
		<div class="floatWrapper" id="tenantNameThree">
			<div class="question">
				<p>Tenant 3:</p>
			</div>
			<div class="answer">
				<input type="text" id="tenantFirstThree" placeholder="First">
				<input type="text" id="tenantLastThree" placeholder="Last">
				<select>
					<option value="null"></option>
					<option value="Sr">Sr.</option>
					<option value="Jr">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
				<input type="number" id="tenantAgeThree" placeholder="Age">
				<input type="text" id="tenantSSNThree" placeholder="SSN">
			</div>
		</div>
		<div class="floatWrapper" id="tenantNameFour">
			<div class="question">
				<p>Tenant 4:</p>
			</div>
			<div class="answer">
				<input type="text" id="tenantFirstFour" placeholder="First">
				<input type="text" id="tenantLastFour" placeholder="Last">
				<select>
					<option value="null"></option>
					<option value="Sr">Sr.</option>
					<option value="Jr">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
				<input type="number" id="tenantAgeFour" placeholder="Age">
				<input type="text" id="tenantSSNFour" placeholder="SSN">
			</div>
		</div>
		<div class="floatWrapper" id="tenantNameFive">
			<div class="question">
				<p>Tenant 5:</p>
			</div>
			<div class="answer">
				<input type="text" id="tenantFirstFive" placeholder="First">
				<input type="text" id="tenantLastFive" placeholder="Last">
				<select>
					<option value="null"></option>
					<option value="Sr">Sr.</option>
					<option value="Jr">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
				<input type="number" id="tenantAgeFive" placeholder="Age">
				<input type="text" id="tenantSSNFive" placeholder="SSN">
			</div>
		</div>
		<div class="floatWrapper" id="dependentNameOne">
			<div class="question">
				<p>Dependent 1:</p>
			</div>
			<div class="answer">
				<input type="text" id="dependentFirstOne" placeholder="First">
				<input type="text" id="dependentLastOne" placeholder="Last">
				<select>
					<option value="null"></option>
					<option value="Sr">Sr.</option>
					<option value="Jr">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
				<input type="number" id="dependentAgeOne" placeholder="Age">
				<input type="text" id="dependentSSNOne" placeholder="SSN">
			</div>
		</div>
		<div class="floatWrapper" id="dependentNameTwo">
			<div class="question">
				<p>Dependent 2:</p>
			</div>
			<div class="answer">
				<input type="text" id="dependentFirstTwo" placeholder="First">
				<input type="text" id="dependentLastTwo" placeholder="Last">
				<select>
					<option value="null"></option>
					<option value="Sr">Sr.</option>
					<option value="Jr">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
				<input type="number" id="dependentAgeTwo" placeholder="Age">
				<input type="text" id="dependentSSNTwo" placeholder="SSN">
			</div>
		</div>
		<div class="floatWrapper" id="dependentNameThree">
			<div class="question">
				<p>Dependent 3:</p>
			</div>
			<div class="answer">
				<input type="text" id="dependentFirstThree" placeholder="First">
				<input type="text" id="dependentLastThree" placeholder="Last">
				<select>
					<option value="null"></option>
					<option value="Sr">Sr.</option>
					<option value="Jr">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
				<input type="number" id="dependentAgeThree" placeholder="Age">
				<input type="text" id="dependentSSNThree" placeholder="SSN">
			</div>
		</div>
		<div class="floatWrapper" id="dependentNameFour">
			<div class="question">
				<p>Dependent 4:</p>
			</div>
			<div class="answer">
				<input type="text" id="dependentFirstFour" placeholder="First">
				<input type="text" id="dependentLastFour" placeholder="Last">
				<select>
					<option value="null"></option>
					<option value="Sr">Sr.</option>
					<option value="Jr">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
				<input type="number" id="dependentAgeFour" placeholder="Age">
				<input type="text" id="dependentSSNFour" placeholder="SSN">
			</div>
		</div>
		<div class="floatWrapper" id="dependentNameFive">
			<div class="question">
				<p>Dependent 5:</p>
			</div>
			<div class="answer">
				<input type="text" id="dependentFirstFive" placeholder="First">
				<input type="text" id="dependentLastFive" placeholder="Last">
				<select>
					<option value="null"></option>
					<option value="Sr">Sr.</option>
					<option value="Jr">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
				<input type="number" id="dependentAgeFive" placeholder="Age">
				<input type="text" id="dependentSSNFive" placeholder="SSN">
			</div>
		</div>
		<div class="floatWrapper" id="dependentNameSix">
			<div class="question">
				<p>Dependent 6:</p>
			</div>
			<div class="answer">
				<input type="text" id="dependentFirstSix" placeholder="First">
				<input type="text" id="dependentLastSix" placeholder="Last">
				<select>
					<option value="null"></option>
					<option value="Sr">Sr.</option>
					<option value="Jr">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
				<input type="number" id="dependentAgeSix" placeholder="Age">
				<input type="text" id="dependentSSNSix" placeholder="SSN">
			</div>
		</div>
		<div class="floatWrapper" id="dependentNameSeven">
			<div class="question">
				<p>Dependent 7:</p>
			</div>
			<div class="answer">
				<input type="text" id="dependentFirstSeven" placeholder="First">
				<input type="text" id="dependentLastSeven" placeholder="Last">
				<select>
					<option value="null"></option>
					<option value="Sr">Sr.</option>
					<option value="Jr">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
				<input type="number" id="dependentAgeSeven" placeholder="Age">
				<input type="text" id="dependentSSNSeven" placeholder="SSN">
			</div>
		</div>
		<div class="floatWrapper" id="dependentNameEight">
			<div class="question">
				<p>Dependent 8:</p>
			</div>
			<div class="answer">
				<input type="text" id="dependentFirstEight" placeholder="First">
				<input type="text" id="dependentLastEight" placeholder="Last">
				<select>
					<option value="null"></option>
					<option value="Sr">Sr.</option>
					<option value="Jr">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
				<input type="number" id="dependentAgeEight" placeholder="Age">
				<input type="text" id="dependentSSNEight" placeholder="SSN">
			</div>
		</div>
	
<!-- Lease Information -->

		<div class="title" id="landlord">
			<p>Lease Information</p>
		</div>
		<div class="floatWrapper">
			<div class="question">
				<p>What is the address of the leased premises?</p>
			</div>
			<div class="answer" id="leaseAddress">
				<input type="text" id="landlordContactAddress" placeholder="Street">
				<input type="text" id="landlordContactCity" placeholder="City">
				<input type="text" id="landlordContactState" placeholder="State">
				<input type="number" id="landlordContactZip" placeholder="Zip">
			</div>
		</div>
		<div class="clear">
		</div>
		<div class="floatWrapper">
			<div class="question">
				<p>What is the term of the lease?</p>
			</div>
			<div class="answer">
				<select id="leaseTerm">
					<option value="1">1 Year</option>
					<option value="2">2 Year</option>
					<option value="3">Month-to-month</option>
					<option value="4">Week-to-week</option>
					<option value="5">6 Month</option>
				</select>
			</div>
		</div>
		<div class="floatWrapper">
			<div class="question">
				<p>What day does the lease begin?</p>
			</div>
			<div class="answer">
				<select id="leaseMonth">
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
			</div>
			<div class="answer">
				<select id="leaseDay">
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
			<div class="answer">
				<select id="leaseYear">
					<option value="1">2016</option>
					<option value="2">2017</option>
					<option value="3">2018</option>
				</select>
			</div>
		</div>
		<div class="floatWrapper">
			<div class="question">
				<p>How much is the rent per rental period?</p>
			</div>
			<div class="answer">
				<input type="number" id="rentAmount" placeholder="00.00">
			</div>
		</div>
		<div class="floatWrapper">
			<div class="question">
				<p>What is the payment period?</p>
			</div>
			<div class="answer">
				<select id="paymentPeriod">
					<option value="1">Monthly</option>
					<option value="2">Weekly</option>
					<option value="3">Yearly</option>
				</select>
			</div>
		</div>
		<div class="floatWrapper" id="rentDueMonthly">
			<div class="question">
				<p>What day of the month is the rent due?</p>
			</div>
			<div class="answer">
				<select id="rentDay">
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
		<div class="floatWrapper" id="rentDueWeekly">
			<div class="question">
				<p>What day of the week is the rent due?</p>
			</div>
			<div class="answer">
				<select id="rentDay">
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
		<div class="floatWrapper" id="rentDueYearly">
			<div class="question">
				<p>What day is the yearly rent due?</p>
			</div>
			<div class="answer">
				<select id="rentDueMonth">
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
			</div>
			<div class="answer">
				<select id="rentDueDay">
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
		<div class="floatWrapper">
			<div class="question">
				<p>Is the first period pro-rated?</p>
			</div>
			<div class="answer">
				<select  id="prorataAnswer">
					<option value="1">yes</option>
					<option value="2">no</option>
				</select>
			</div>
		</div>
		<div class="floatWrapper" id="prorataAmount">
			<div class="question">
				<p>What is the amount of pro-rated days?</p>
			</div>
			<div class="answer">
				<select id="prorataDays">
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
		<div class="floatWrapper">
			<div class="question">
				<button id="leaseButton">Continue</button>
			</div>
		</div>
		
<!-- Deposit Information -->

		<div class="title" id="landlord">
			<p>Deposit Information</p>
		</div>
		<div class="floatWrapper">
			<div class="question">
				<p>Is the landlord retaining a security deposit?</p>
			</div>
			<div class="answer">
				<select  id="secDepositAnswer">
					<option value="1">yes</option>
					<option value="2">no</option>
				</select>
			</div>
		</div>
		<div class="floatWrapper">
			<div class="question">
				<p>Is the landlord allowing pets?</p>
			</div>
			<div class="answer">
				<select  id="petAllowAnswer">
					<option value="1">yes</option>
					<option value="2">no</option>
				</select>
			</div>
		</div>
		<div class="floatWrapper">
			<div class="question">
				<p>Is the landlord requiring a pet deposit?</p>
			</div>
			<div class="answer">
				<select  id="petDepositAnswer">
					<option value="1">yes</option>
					<option value="2">no</option>
				</select>
			</div>
		</div>
		<div class="floatWrapper">
			<div class="question">
				<p>Will you list the pets on the lease?</p>
			</div>
			<div class="answer">
				<select  id="petDepositAnswer">
					<option value="1">yes</option>
					<option value="2">no</option>
				</select>
			</div>
		</div>
		<div class="floatWrapper" id="petAmount">
			<div class="question">
				<p>How many pets will be listed on the lease?</p>
			</div>
			<div class="answer">
				<select id="petNumber">
					<option value="1">01</option>
					<option value="2">02</option>
					<option value="3">03</option>
					<option value="4">04</option>
					<option value="5">05</option>
					<option value="6">06</option>
					<option value="7">07</option>
					<option value="8">08</option>
				</select>
			</div>
		</div>	
		<div class="floatWrapper">
			<div class="question">
				<button id="depositButton">Continue</button>
			</div>
		</div>
		<div class="floatWrapper" id="secDepositMoney">
			<div class="question">
				<p>How much is the Security Deposit?</p>
			</div>
			<div class="answer">
				<input type="number" id="secDepositAmount" placeholder="$$">
			</div>
		</div>
		<div class="floatWrapper" id="secDepositWhere">
			<div class="question">
				<p>In what banking institution will the Security Deposit be held?</p>
			</div>
			<div class="answer">
				<input type="number" id="secDepositLocation" placeholder="Bank Name">
			</div>
		</div>
		<div class="floatWrapper" id="petDepositMoney">
			<div class="question">
				<p>How much is the Pet Deposit?</p>
			</div>
			<div class="answer">
				<input type="number" id="petDepositAmount" placeholder="$$">
			</div>
		</div>
		<div class="floatWrapper" id="petAddOne">
			<div class="question">
				<p>Pet 1:</p>
			</div>
			<div class="answer">
				<input type="text" id="petTypeOne" placeholder="Type">
				<input type="text" id="petDescriptionOne" placeholder="Description">
			</div>
		</div>
		<div class="floatWrapper" id="petAddTwo">
			<div class="question">
				<p>Pet 2:</p>
			</div>
			<div class="answer">
				<input type="text" id="petTypeTwo" placeholder="Type">
				<input type="text" id="petDescriptionTwo" placeholder="Description">
			</div>
		</div>
		<div class="floatWrapper" id="petAddThree">
			<div class="question">
				<p>Pet 3:</p>
			</div>
			<div class="answer">
				<input type="text" id="petTypeThree" placeholder="Type">
				<input type="text" id="petDescriptionThree" placeholder="Description">
			</div>
		</div>
		<div class="floatWrapper" id="petAddFour">
			<div class="question">
				<p>Pet 4:</p>
			</div>
			<div class="answer">
				<input type="text" id="petTypeFour" placeholder="Type">
				<input type="text" id="petDescriptionFour" placeholder="Description">
			</div>
		</div>
		<div class="floatWrapper" id="petAddFive">
			<div class="question">
				<p>Pet 5:</p>
			</div>
			<div class="answer">
				<input type="text" id="petTypeFive" placeholder="Type">
				<input type="text" id="petDescriptionFive" placeholder="Description">
			</div>
		</div>
		<div class="floatWrapper" id="petAddSix">
			<div class="question">
				<p>Pet 6:</p>
			</div>
			<div class="answer">
				<input type="text" id="petTypeSix" placeholder="Type">
				<input type="text" id="petDescriptionSix" placeholder="Description">
			</div>
		</div>
		<div class="floatWrapper" id="petAddSeven">
			<div class="question">
				<p>Pet 7:</p>
			</div>
			<div class="answer">
				<input type="text" id="petTypeSeven" placeholder="Type">
				<input type="text" id="petDescriptionSeven" placeholder="Description">
			</div>
		</div>
		<div class="floatWrapper" id="petAddEight">
			<div class="question">
				<p>Pet 8:</p>
			</div>
			<div class="answer">
				<input type="text" id="petTypeEight" placeholder="Type">
				<input type="text" id="petDescriptionEight" placeholder="Description">
			</div>
		</div>
		<div class="floatWrapper" id="reviewButton">
			<div class="floatRightButton">
				<p>Review >></p>
			</div>
		</div>
		
		
		
	</div>
	
<script src="TristarJava.js"></script>
</body>
</html>	