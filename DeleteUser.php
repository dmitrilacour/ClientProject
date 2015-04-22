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
$sql = "CALL spDeleteUser ('" . $strUsername . "')";

if ($conn->query($sql) === TRUE) {
	//session_start();
	//$_SESSION["Username"] = $_POST["txtUsername"];
    header("Location: UserManagement.php");

} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>