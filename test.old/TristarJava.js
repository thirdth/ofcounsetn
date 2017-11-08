
//Landlord Continue Button

document.getElementById("landlordButton").onclick = function() {
	var LLNumber = document.getElementById("landlordNumber")
	var LLTypeBus = document.getElementById("landlordTypeBus")
	var LLAdy = document.getElementById("landlordContactType")
	if (LLTypeBus.checked) {
				document.getElementById("landlordIndivOne").style.display = "none";
				document.getElementById("landlordIndivTwo").style.display = "none";
				document.getElementById("landlordIndivThree").style.display = "none";
				document.getElementById("landlordIndivFour").style.display = "none";
				document.getElementById("landlordIndivFive").style.display = "none";
		if (LLNumber.value == 1) {
				document.getElementById("landlordBusOne").style.display = "block";
				document.getElementById("landlordBusTwo").style.display = "none";
				document.getElementById("landlordBusThree").style.display = "none";
				document.getElementById("landlordBusFour").style.display = "none";
				document.getElementById("landlordBusFive").style.display = "none";
		}	else if (LLNumber.value == 2) {
				document.getElementById("landlordBusOne").style.display = "block";
				document.getElementById("landlordBusTwo").style.display = "block";
				document.getElementById("landlordBusThree").style.display = "none";
				document.getElementById("landlordBusFour").style.display = "none";
				document.getElementById("landlordBusFive").style.display = "none";
		}	else if (LLNumber.value == 3) {
				document.getElementById("landlordBusOne").style.display = "block";
				document.getElementById("landlordBusTwo").style.display = "block";
				document.getElementById("landlordBusThree").style.display = "block";
				document.getElementById("landlordBusFour").style.display = "none";
				document.getElementById("landlordBusFive").style.display = "none";
		}	else if (LLNumber.value == 4) {
				document.getElementById("landlordBusOne").style.display = "block";
				document.getElementById("landlordBusTwo").style.display = "block";
				document.getElementById("landlordBusThree").style.display = "block";
				document.getElementById("landlordBusFour").style.display = "block";
				document.getElementById("landlordBusFive").style.display = "none";
		}	else {
				document.getElementById("landlordBusOne").style.display = "block";
				document.getElementById("landlordBusTwo").style.display = "block";
				document.getElementById("landlordBusThree").style.display = "block";
				document.getElementById("landlordBusFour").style.display = "block";
				document.getElementById("landlordBusFive").style.display = "block";
		}
	}	else {
				document.getElementById("landlordBusOne").style.display = "none";
				document.getElementById("landlordBusTwo").style.display = "none";
				document.getElementById("landlordBusThree").style.display = "none";
				document.getElementById("landlordBusFour").style.display = "none";
				document.getElementById("landlordBusFive").style.display = "none";
				
			if (LLNumber.value == 1) {
				document.getElementById("landlordIndivOne").style.display = "block";
				document.getElementById("landlordIndivTwo").style.display = "none";
				document.getElementById("landlordIndivThree").style.display = "none";
				document.getElementById("landlordIndivFour").style.display = "none";
				document.getElementById("landlordIndivFive").style.display = "none";
		}	else if (LLNumber.value == 2) {
				document.getElementById("landlordIndivOne").style.display = "block";
				document.getElementById("landlordIndivTwo").style.display = "block";
				document.getElementById("landlordIndivThree").style.display = "none";
				document.getElementById("landlordIndivFour").style.display = "none";
				document.getElementById("landlordIndivFive").style.display = "none";
		}	else if (LLNumber.value == 3) {
				document.getElementById("landlordIndivOne").style.display = "block";
				document.getElementById("landlordIndivTwo").style.display = "block";
				document.getElementById("landlordIndivThree").style.display = "block";
				document.getElementById("landlordIndivFour").style.display = "none";
				document.getElementById("landlordIndivFive").style.display = "none";
		}	else if (LLNumber.value == 4) {
				document.getElementById("landlordIndivOne").style.display = "block";
				document.getElementById("landlordIndivTwo").style.display = "block";
				document.getElementById("landlordIndivThree").style.display = "block";
				document.getElementById("landlordIndivFour").style.display = "block";
				document.getElementById("landlordIndivFive").style.display = "none";
		}	else {
				document.getElementById("landlordIndivOne").style.display = "block";
				document.getElementById("landlordIndivTwo").style.display = "block";
				document.getElementById("landlordIndivThree").style.display = "block";
				document.getElementById("landlordIndivFour").style.display = "block";
				document.getElementById("landlordIndivFive").style.display = "block";
		}
	}
	if (LLAdy.value == 1) {
		document.getElementById("landlordContactEmail").style.display = "block"
		document.getElementById("landlordContactAddy").style.display = "none"
	}	else {
		document.getElementById("landlordContactEmail").style.display = "none"
		document.getElementById("landlordContactAddy").style.display = "block"
	}
}

//Tenant Continue Button

document.getElementById("tenantButton").onclick = function() {
	var tenNumber = document.getElementById("tenantNumber")
	var depNumber = document.getElementById("dependentNumber")
	if (tenNumber.value == 1) {
		document.getElementById("tenantNameOne").style.display = "block";
		document.getElementById("tenantNameTwo").style.display = "none";
		document.getElementById("tenantNameThree").style.display = "none";
		document.getElementById("tenantNameFour").style.display = "none";
		document.getElementById("tenantNameFive").style.display = "none";
	} else if (tenNumber.value == 2) {
		document.getElementById("tenantNameOne").style.display = "block";
		document.getElementById("tenantNameTwo").style.display = "block";
		document.getElementById("tenantNameThree").style.display = "none";
		document.getElementById("tenantNameFour").style.display = "none";
		document.getElementById("tenantNameFive").style.display = "none";
	}	else if (tenNumber.value == 3) {
		document.getElementById("tenantNameOne").style.display = "block";
		document.getElementById("tenantNameTwo").style.display = "block";
		document.getElementById("tenantNameThree").style.display = "block";
		document.getElementById("tenantNameFour").style.display = "none";
		document.getElementById("tenantNameFive").style.display = "none";
	}	else if (tenNumber.value == 4) {
		document.getElementById("tenantNameOne").style.display = "block";
		document.getElementById("tenantNameTwo").style.display = "block";
		document.getElementById("tenantNameThree").style.display = "block";
		document.getElementById("tenantNameFour").style.display = "block";
		document.getElementById("tenantNameFive").style.display = "none";
	}	else {
		document.getElementById("tenantNameOne").style.display = "block";
		document.getElementById("tenantNameTwo").style.display = "block";
		document.getElementById("tenantNameThree").style.display = "block";
		document.getElementById("tenantNameFour").style.display = "block";
		document.getElementById("tenantNameFive").style.display = "block";
	}
	if	(depNumber.value == 1)	{
		document.getElementById("dependentNameOne").style.display = "block";
		document.getElementById("dependentNameTwo").style.display = "none";
		document.getElementById("dependentNameThree").style.display = "none";
		document.getElementById("dependentNameFour").style.display = "none";
		document.getElementById("dependentNameFive").style.display = "none";
		document.getElementById("dependentNameSix").style.display = "none";
		document.getElementById("dependentNameSeven").style.display = "none";
		document.getElementById("dependentNameEight").style.display = "none";
	}	else if (depNumber.value == 2) {
		document.getElementById("dependentNameOne").style.display = "block";
		document.getElementById("dependentNameTwo").style.display = "block";
		document.getElementById("dependentNameThree").style.display = "none";
		document.getElementById("dependentNameFour").style.display = "none";
		document.getElementById("dependentNameFive").style.display = "none";
		document.getElementById("dependentNameSix").style.display = "none";
		document.getElementById("dependentNameSeven").style.display = "none";
		document.getElementById("dependentNameEight").style.display = "none";
	}	else if (depNumber.value == 3) {
		document.getElementById("dependentNameOne").style.display = "block";
		document.getElementById("dependentNameTwo").style.display = "block";
		document.getElementById("dependentNameThree").style.display = "block";
		document.getElementById("dependentNameFour").style.display = "none";
		document.getElementById("dependentNameFive").style.display = "none";
		document.getElementById("dependentNameSix").style.display = "none";
		document.getElementById("dependentNameSeven").style.display = "none";
		document.getElementById("dependentNameEight").style.display = "none";
	}	else if (depNumber.value == 4) {
		document.getElementById("dependentNameOne").style.display = "block";
		document.getElementById("dependentNameTwo").style.display = "block";
		document.getElementById("dependentNameThree").style.display = "block";
		document.getElementById("dependentNameFour").style.display = "block";
		document.getElementById("dependentNameFive").style.display = "none";
		document.getElementById("dependentNameSix").style.display = "none";
		document.getElementById("dependentNameSeven").style.display = "none";
		document.getElementById("dependentNameEight").style.display = "none";
	}	else if (depNumber.value == 5) {
		document.getElementById("dependentNameOne").style.display = "block";
		document.getElementById("dependentNameTwo").style.display = "block";
		document.getElementById("dependentNameThree").style.display = "block";
		document.getElementById("dependentNameFour").style.display = "block";
		document.getElementById("dependentNameFive").style.display = "block";
		document.getElementById("dependentNameSix").style.display = "none";
		document.getElementById("dependentNameSeven").style.display = "none";
		document.getElementById("dependentNameEight").style.display = "none";
	}	else if (depNumber.value == 6) {
		document.getElementById("dependentNameOne").style.display = "block";
		document.getElementById("dependentNameTwo").style.display = "block";
		document.getElementById("dependentNameThree").style.display = "block";
		document.getElementById("dependentNameFour").style.display = "block";
		document.getElementById("dependentNameFive").style.display = "block";
		document.getElementById("dependentNameSix").style.display = "block";
		document.getElementById("dependentNameSeven").style.display = "none";
		document.getElementById("dependentNameEight").style.display = "none";
	}	else if (depNumber.value == 7) {
		document.getElementById("dependentNameOne").style.display = "block";
		document.getElementById("dependentNameTwo").style.display = "block";
		document.getElementById("dependentNameThree").style.display = "block";
		document.getElementById("dependentNameFour").style.display = "block";
		document.getElementById("dependentNameFive").style.display = "block";
		document.getElementById("dependentNameSix").style.display = "block";
		document.getElementById("dependentNameSeven").style.display = "block";
		document.getElementById("dependentNameEight").style.display = "none";
	}	else  {
		document.getElementById("dependentNameOne").style.display = "block";
		document.getElementById("dependentNameTwo").style.display = "block";
		document.getElementById("dependentNameThree").style.display = "block";
		document.getElementById("dependentNameFour").style.display = "block";
		document.getElementById("dependentNameFive").style.display = "block";
		document.getElementById("dependentNameSix").style.display = "block";
		document.getElementById("dependentNameSeven").style.display = "block";
		document.getElementById("dependentNameEight").style.display = "block";
	}
}
//Lease Info Continue Button

document.getElementById("leaseButton").onclick = function() {
	var lPayPeriod = document.getElementById("paymentPeriod")
	var proRate = document.getElementById("prorataAnswer")
	if (lPayPeriod.value == 1) {
		document.getElementById("rentDueMonthly").style.display = "block";
		document.getElementById("rentDueWeekly").style.display = "none";
		document.getElementById("rentDueYearly").style.display = "none";
	} else if (lPayPeriod.value == 2) {
		document.getElementById("rentDueMonthly").style.display = "none";
		document.getElementById("rentDueWeekly").style.display = "Block";
		document.getElementById("rentDueYearly").style.display = "none";
	}	else {
		document.getElementById("rentDueMonthly").style.display = "none";
		document.getElementById("rentDueWeekly").style.display = "none";
		document.getElementById("rentDueYearly").style.display = "block";
	}
	if	(proRate.value == 1)	{
		document.getElementById("prorataAmount").style.display = "block";
	}	else  {
		document.getElementById("prorataAmount").style.display = "none";
	}
}
//Deposit Information

document.getElementById("depositButton").onclick = function() {
	var secDeposit = document.getElementById("secDepositAnswer")
	var petDeposit = document.getElementById("petDepositAnswer")
	var petAmount = document.getElementById("petAmount")
	if	(secDeposit.value == 1)	{
		document.getElementById("secDepositMoney").style.display = "block";
		document.getElementById("secDepositWhere").style.display = "block";
	}	else  {
		document.getElementById("secDepositMoney").style.display = "none";
		document.getElementById("secDepositWhere").style.display = "none";
	}
	if	(petDeposit.value == 1)	{
		document.getElementById("petDepositMoney").style.display = "block";
	}	else  {
		document.getElementById("petDepositMoney").style.display = "none";
	}
	if	(petAmount.value == 1)	{
		document.getElementById("petAddOne").style.display = "block";
		document.getElementById("petAddTwo").style.display = "none";
		document.getElementById("petAddThree").style.display = "none";
		document.getElementById("petAddFour").style.display = "none";
		document.getElementById("petAddFive").style.display = "none";
		document.getElementById("petAddSix").style.display = "none";
		document.getElementById("petAddSeven").style.display = "none";
		document.getElementById("petAddEight").style.display = "none";
	}	else if (petAmount.value == 2) {
		document.getElementById("petAddOne").style.display = "block";
		document.getElementById("petAddTwo").style.display = "block";
		document.getElementById("petAddThree").style.display = "none";
		document.getElementById("petAddFour").style.display = "none";
		document.getElementById("petAddFive").style.display = "none";
		document.getElementById("petAddSix").style.display = "none";
		document.getElementById("petAddSeven").style.display = "none";
		document.getElementById("petAddEight").style.display = "none";
	}	else if (petAmount.value == 3) {
		document.getElementById("petAddOne").style.display = "block";
		document.getElementById("petAddTwo").style.display = "block";
		document.getElementById("petAddThree").style.display = "block";
		document.getElementById("petAddFour").style.display = "none";
		document.getElementById("petAddFive").style.display = "none";
		document.getElementById("petAddSix").style.display = "none";
		document.getElementById("petAddSeven").style.display = "none";
		document.getElementById("petAddEight").style.display = "none";
	}	else if (petAmount.value == 4) {
		document.getElementById("petAddOne").style.display = "block";
		document.getElementById("petAddTwo").style.display = "block";
		document.getElementById("petAddThree").style.display = "block";
		document.getElementById("petAddFour").style.display = "block";
		document.getElementById("petAddFive").style.display = "none";
		document.getElementById("petAddSix").style.display = "none";
		document.getElementById("petAddSeven").style.display = "none";
		document.getElementById("petAddEight").style.display = "none";
	}	else if (petAmount.value == 5) {
		document.getElementById("petAddOne").style.display = "block";
		document.getElementById("petAddTwo").style.display = "block";
		document.getElementById("petAddThree").style.display = "block";
		document.getElementById("petAddFour").style.display = "block";
		document.getElementById("petAddFive").style.display = "block";
		document.getElementById("petAddSix").style.display = "none";
		document.getElementById("petAddSeven").style.display = "none";
		document.getElementById("petAddEight").style.display = "none";
	}	else if (petAmount.value == 6) {
		document.getElementById("petAddOne").style.display = "block";
		document.getElementById("petAddTwo").style.display = "block";
		document.getElementById("petAddThree").style.display = "block";
		document.getElementById("petAddFour").style.display = "block";
		document.getElementById("petAddFive").style.display = "block";
		document.getElementById("petAddSix").style.display = "block";
		document.getElementById("petAddSeven").style.display = "none";
		document.getElementById("petAddEight").style.display = "none";
	}	else if (petAmount.value == 7) {
		document.getElementById("petAddOne").style.display = "block";
		document.getElementById("petAddTwo").style.display = "block";
		document.getElementById("petAddThree").style.display = "block";
		document.getElementById("petAddFour").style.display = "block";
		document.getElementById("petAddFive").style.display = "block";
		document.getElementById("petAddSix").style.display = "block";
		document.getElementById("petAddSeven").style.display = "block";
		document.getElementById("petAddEight").style.display = "none";
	}	else  {
		document.getElementById("petAddOne").style.display = "block";
		document.getElementById("petAddTwo").style.display = "block";
		document.getElementById("petAddThree").style.display = "block";
		document.getElementById("petAddFour").style.display = "block";
		document.getElementById("petAddFive").style.display = "block";
		document.getElementById("petAddSix").style.display = "block";
		document.getElementById("petAddSeven").style.display = "block";
		document.getElementById("petAddEight").style.display = "block";
	}
}
