<pre>
<?php

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

$sql = "SELECT FirstName, LastName, Phone, Street, City, State, Zip, ReasonForCall, DateForAudit, BuildingEnvelope, LivingDifficulty, AtticDifficulty, NeedSmoke, DuctSeal, DuctReplace, DuctType, Insulation, AtticSF, InsulationDepth, InsulationType FROM Client";
$result = $conn->query($sql);

for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);



print_r ($set);
?>
</pre>


