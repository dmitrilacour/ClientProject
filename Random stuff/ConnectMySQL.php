<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT CustomerID, FirstName, LastName FROM Client";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Customer ID: " . $row["CustomerID"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
?>