<?PHP

// Redirect to Task List after 

	header('location: TaskList.php');

// Include Header

	include 'includes/DatabaseConnection.php';

// Get Task Data

	$intCounter = $_POST["txtCounter"];
	
	for ($i = 1; $i <= $intCounter; $i++) {
		$strTitle = $_POST["txtTitle".$i];
		$strDescription = $_POST["txtDescription".$i];
		$strDuration = $_POST["txtDuration".$i];
		$strPeople = $_POST["txtPeople".$i];
		$strSupplies = $_POST["txtSupplies".$i];
		
		echo $strTitle;
		
	// Use spSubmitTask

		//Make SQL statement
		
		if ($strTitle != "") {
	
			$sql = "CALL spSubmitTask('2', '".$strTitle."', '".$strDescription."', '".$strDuration."', '".$strPeople."', '".$strSupplies."');";

		// Run query
	
			$result = $conn->query($sql);
		}
	}
	
	
	
	
?>