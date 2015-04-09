<?php
header("location: localhost:8888/startbootstrap-scrolling-nav-1.0.2/index.php");

//Get Form inputs from server
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$phone = $_POST["phone"];
$street = $_POST["street"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$reasonforcall = $_POST["reasonforcall"];
$dateforaudit = $_POST["auditdate"];
$buildingenvelope = $_POST["buildingenvelope"];
$livingdif = $_POST["livingdifficulty"];
$atticdif = $_POST["atticdifficulty"];
$smoke = $_POST["smokedetectors"];
$seal = $_POST["seal"];
$replace = $_POST["replace"];
$ducttype = $_POST["ducttype"];
$insulation = $_POST["insulation"];
$atticsf = $_POST["atticsf"];
$insulationdepth = $_POST["depth"];
$insulationtype = $_POST["insulationtype"];

echo $insulationtype;

$servername = "localhost";
$username = "root";
$password = "852456ut!";
$dbname = "Client";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Client (FirstName, LastName, Phone, Street, City, State, Zip, ReasonForCall, DateForAudit, BuildingEnvelope, LivingDifficulty, AtticDifficulty, NeedSmoke, DuctSeal, DuctReplace, DuctType, Insulation, AtticSF, InsulationDepth, InsulationType) 
VALUES ('".$firstname."', '".$lastname."', '5551231476', '".$street."', '".$city."', '".$state."', '".$zip."', '".$reasonforcall."', '".$dateforaudit."', '".$buildingenvelope."', '".$livingdif."', '".$atticdif."', '".$smoke."', '".$seal."', '".$replace."', '".$ducttype."', '".$insulation."', '".$atticsf."', '".$insulationdepth."', '".$insulationtype."')";

if ($conn->query($sql) === TRUE) {
	echo "Change";
    
    echo "New record created successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();


?>

