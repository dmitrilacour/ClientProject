<?php 
//ONLY FOR IF THEY HAVE NEVER CALLED BEFORE!!!
header('location: ScheduledAudits.php');


// Contact Info
$strFirstName = $_POST["txtFirstName"];
$strLastName = $_POST["txtLastName"];
$strStreet = $_POST["txtStreet"];
$strCity = $_POST["txtCity"];
// DO WE WANT CITY TO BE BUILT IN? HELPS TO FUTURE PROOF FOR EXPANSION
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

// DB Credentials
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbGreenSquads";

// Define Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute SQL to Insert Client Profile
$sql = "CALL spSubmitNewClient('".$strFirstName."', '".$strLastName."', '".$strStreet."', '".$strCity."', '".$strState."', '".$strZip."', '".$strPhonePrimary."', '".$strPhoneAlternative."', '".$strEmailPrimary."', '".$strEmailAlternative."', '".$boolAustinEnergy."', '".$boolTexasGas."', '".$boolCityLimits."', '".$strAuditDate."', '".$strAuditor."'); ";
		
$conn->query($sql);