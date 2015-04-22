<?php

session_start();




// Get all inputs from form
$dateInitialVisit = $_POST["txtInitialVisit"];
$dateProposalSent = $_POST["txtProposalSent"];
 $dateFollowedUp  = $_POST["txtFollowedUp"];
	 $dateCalledAgain  = $_POST["txtCalledAgain"];
	 $dateProposalAccepted  = $_POST["txtProposalAccpeted"];
	 $datePermitPulled  = $_POST["txtPermitPulled"];
	 $dateEnteredinPS  = $_POST["txtEnteredinPS"];
	 $dateAEVerification  = $_POST["txtAEVerification"];
	 $dateJobScheduled  = $_POST["txtJobScheduled"];
	 $dateJobCompleted  = $_POST["txtJobCompleted"];
	 $dateQCCheckUp  = $_POST["txtQCCheckUp"];
	 $dateAEFinalInspection  = $_POST["txtAEFinalInspection"];




// Send to database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbGreenSquads";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CALL spSubmitDates(
	'".$dateInitialVisit."',
	'".$dateProposalSent."',
	 '".$dateFollowedUp."',  
	 '".$dateCalledAgain."',  
	 '".$dateProposalAccepted."', 
	 '".$datePermitPulled."',
	 '".$dateEnteredinPS."', 
	 '".$dateAEVerification."',  
	 '".$dateJobScheduled."', 
	 '".$dateJobCompleted."',  
	 '".$dateQCCheckUp."',
	 '".$dateAEFinalInspection."',  

)";

if ($conn->query($sql) === TRUE) {
    header('location: CustomerProfile.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();




?>