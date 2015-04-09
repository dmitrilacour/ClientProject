<?php

// Redirect to Login Form after

	header( 'Location: LoginForm.php' );

// Delete old cookies

	// Remove User Cookie
	
		$CookieName = 'User';
		$CookieValue = '';

		setcookie($CookieName, $CookieValue, time() - 3600);

	// Remove User Type Cookie
	
		$CookieName = 'UserType';
		$CookieValue = '';
	
		setcookie($CookieName, $CookieValue, time() - 3600);

// Handle Login Form submission

	// Pull user input from Login Form submission
	
		$strUsername = $_POST["txtUsername"];
		$strPassword = $_POST["txtPassword"];

	// Validate User Input
		

// Check User Login with database

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
	
	// SQL to call procedure with inputs
	
		$sql = "CALL spLogin('".$strUsername."', '".$strPassword."');";
	
	// Run Query
	
		$result = $conn->query($sql);

	// Close DB connection
	
		mysqli_close( $conn );
		
		if(mysqli_num_rows($result)>0){
		
		// Convert result to callable array	
		
			for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);
		
	// Set new cookies

		// Set User cookie
		
			$CookieName = 'User';
			$CookieValue = $set[0]['Name'];
	
			setcookie($CookieName, $CookieValue, time() + 1800);

		// Set User Type cookie
		
			$CookieName = 'UserType';
			$CookieValue = $set[0]['Type'];

			setcookie($CookieName, $CookieValue, time() + 1800);
			
		} else {

		// Set User cookie
		
			$CookieName = 'User';
			$CookieValue = $strUsername;
	
			setcookie($CookieName, $CookieValue, time() + 1);
		}



?>
