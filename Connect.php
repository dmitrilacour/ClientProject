<!--connect to the database-->

<?php

// REALLY YOU NEED THIS ENTIRE PHP SECTION!
// REALLY YOU NEED THIS ENTIRE PHP SECTION!
// REALLY YOU NEED THIS ENTIRE PHP SECTION!


//DB Credentials
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbGreenSquads";

// Define connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT AuditID AS ID, AuditDate AS Date, CONCAT(FirstName, ' ', LastName) AS Client, Auditor, Status, tblClientProfile.ClientID FROM `tblClientProfile` JOIN `tblScheduledAudits` ON tblClientProfile.ClientID = tblScheduledAudits.ClientID";

$result = $conn->query($sql);
	
for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);

?>