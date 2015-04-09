<?php

// REALLY YOU NEED THIS ENTIRE PHP SECTION!
// REALLY YOU NEED THIS ENTIRE PHP SECTION!
// REALLY YOU NEED THIS ENTIRE PHP SECTION!


//DB Credentials
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

$sql = "CALL spCreateAuditSchedule";

$result = $conn->query($sql);
	
for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);

?>

<!DOCTYPE html>

<html>

<body>

	<div id='frmSearch'>
		<h1>Search</h1>
		
		<form name="frmClientProfile" method="post" action="ScheduledAudits.php">
			<div class='inputTitle'>First Name:</div>
			<input type="text" name="txtFirstName" placeholder="First Name" >
		
			<div class='inputTitle'>Last Name:</div>
			<input type="text" name="txtLastName" placeholder="Last Name" >
		
			<div class='inputTitle'>Audit Date:</div>
			<input type="text" name="txtAuditDate" placeholder="Audit Date" >
		
			<div class='inputTitle'>Auditor:</div>
			<input type="text" name="txtAuditor" placeholder="Auditor" >
		
			<div class='inputTitle'>Audit Status:</div>
			<input type="text" name="txtAuditStatus" placeholder="Audit Status" >
		
			<input type="Submit" name="btnSearch" value="Search Audit Schedule" style="display: block; clear:both; margin-top: 1%; margin-bottom: 5%; ">
		</form>
	</div>
	
	<h1>Results</h1>
	
	<table>
	
		<tr>
			<th>Audit ID</th>
			<th>Audit Date</th>
			<th>Audit Client</th>
			<th>Auditor</th>
			<th>Audit Status</th>
		</tr>
		
		<?php
		
		$i = 0;
		
		while ($i < count($set)) {
			$intAuditID = $set[$i][ID];
			$strAuditDate = $set[$i][Date];
			$strClient = $set[$i][Client];
			$strAuditor = $set[$i][Auditor];
			$strStatus = $set[$i][Status];
			$strClientID = $set[$i][ClientID];
		
			echo 
				"<tr onclick=\"form(".$strClientID."); \">
					<td>".$intAuditID."</td>
					<td>".$strAuditDate."</td>
					<td>".$strClient."</td>
					<td>".$strAuditor."</td>
					<td>".$strStatus."</td>
					<td style='visibility:hidden' id=".intAuditID.">".$strClientID."</td>
				</tr>";
			
			$i++;
		}
		?>
		
		
	
	</table>
	
	<form name="frmClientID" id="frmClientID" method="post" action="AuditForm.php">
			<input type="text" name="txtClientID" id="txtClientID" style="visibility:hidden">
	</form>

</body>

<script>
	function form(variable) {
		txtClientID = document.getElementById("txtClientID")
		txtClientID.value = variable
		
		document.getElementById("frmClientID").submit();
		}
</script>

</html>