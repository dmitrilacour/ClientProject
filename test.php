<?php

// Connection variables
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

$strUsername = $_POST["txtUsername"];
//$sql = "INSERT INTO `tbltest`(`Username`) VALUES ('$strUsername')";
$sql = "CALL spTestDB ('" . $strUsername . "')";

if ($conn->query($sql) === TRUE) {
	//if sessions interfere with existing sessions or cookies, try passing variables through url string instead.
	session_start();
	$_SESSION["Username"] = $_POST["txtUsername"];
    header("Location: testView.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>