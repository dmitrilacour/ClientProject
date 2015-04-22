<?php 

// Redirect to Pre Audit Form after 

	header('location: PreAuditForm.php');

// Include Header

	include 'includes/DatabaseConnection.php';

// Get user input from submission

	// Get Contact Info 
	
		$strFirstName = $_POST["txtFirstName"];
		$strLastName = $_POST["txtLastName"];
		$strStreet = $_POST["txtStreet"];
		$strCity = $_POST["txtCity"];
		$strState = $_POST["txtState"];
		$strZip = $_POST["txtZip"];
		$strPhonePrimary = $_POST["txtPhonePrimary"];
		$strPhoneAlternative = $_POST["txtPhoneAlternative"];
		$strEmailPrimary = $_POST["txtEmailPrimary"];
		$strEmailAlternative = $_POST["txtEmailAlternative"];

	// Utilities Info
	
		$boolAustinEnergy = $_POST["ddlAustinEnergy"];
		$boolTexasGas = $_POST["ddlTexasGas"];
		$boolCityLimits = $_POST["ddlCityLimits"];

	// Audit Info
	
		$strAuditDate = $_POST["txtAuditDate"];
		$strAuditor = $_POST["txtAuditor"];



/////////////////////
///////////////////// MAKE SURE YOU INCLUDE VALIDATIONS
/////////////////////





// Add to database

	// Write query using stored procedure
	
		$sql = "CALL spSubmitNewClient('".$strFirstName."', '".$strLastName."', '".$strStreet."', '".$strCity."', '".$strState."', '".$strZip."', '".$strPhonePrimary."', '".$strPhoneAlternative."', '".$strEmailPrimary."', '".$strEmailAlternative."', '".$boolAustinEnergy."', '".$boolTexasGas."', '".$boolCityLimits."', '".$strAuditDate."', '".$strAuditor."'); ";
		
	// Execute query
	
		$result = $conn->query($sql);
		
	// Convert result to readable array
	
		for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);

	// Set Client cookie
	
		$CookieName = 'Client';
		$CookieValue = $set[0]['Client'];

		setcookie($CookieName, $CookieValue, time() + 1800);

// Google Calendar


?>