<?php

$pass = 'g0gr33nsQuAdz!';

if (isset($_POST['password'])) {
	
	if ($_POST['password'] == $pass) {
		setcookie('password', md5($pass));
		header('location: prototype.php');
	} else {
	echo 'Invalid Password';
	}
	
} else {
	echo 'You must enter a Password';
}

?>