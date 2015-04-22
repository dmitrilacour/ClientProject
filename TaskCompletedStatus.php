<?PHP

// Redirect to Task List after 

	header('location: TaskList.php');

// Include Header

	include 'includes/DatabaseConnection.php';
	
// Get TaskID(s)

foreach($_POST['arrTask'] as $intTaskID) {
// Use spCreateTaskList

	//Make SQL statement
	
		$sql = "CALL spUpdateTaskStatus('".$intTaskID."', 'Completed');";

	// Run query
	
		$conn->query($sql);
}

?>