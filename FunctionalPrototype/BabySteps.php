<?php

$firstname = $_POST["firstname"];

echo $firstname;

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

$sql = "INSERT INTO Test (Name) VALUES ('".$firstname."')";

$result = $conn->query($sql);


$conn->close();

?>