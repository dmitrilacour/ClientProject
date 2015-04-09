<?php

$pass = 'g0gr33nsQuAdz!';

if (isset($_COOKIE['password'])) {
	if ($_COOKIE['password'] != md5($pass)) {
		header('location: login.html');
	} else {
		echo "Success";
	}
} else {
	header('location: login.html');
}
?>