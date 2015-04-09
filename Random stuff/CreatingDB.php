<?php

DEFINE('DB_USERNAME', 'root');
DEFINE('DB_PASSWORD', 'root');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_DATABASE', 'performance_schema');

// http://www.php.net/manual/en/mysqli.connect.php


$mysqli = new mysqli(DB_HOST, DB_USERNAME,
￼DB_PASSWORD, DB_DATABASE);

￼if (mysqli_connect_error()) {
￼	die('Connect Error (' . mysqli_connect_errno()
￼	. ') ' . mysqli_connect_error());
	}

echo 'Connected successfully.';

$mysqli->close();

?>