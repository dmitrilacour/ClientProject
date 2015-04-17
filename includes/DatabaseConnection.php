<?php 

// DB Credentials

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
	
// Google APIs

	set_include_path(get_include_path() . PATH_SEPARATOR . '../google-api-php-client/src');

?>