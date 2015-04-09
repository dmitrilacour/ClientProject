<?php

// Redirect to Audit Schedule after
	
	header('location: ScheduledAudits.php');

// Include Header

	include 'includes/Header.php';

// Get inputs from form

	$intClientID = $_POST["txtClientID"];

	$intFirstSF = $_POST["txtFirstSF"];
	$intSecondSF = $_POST["txtSecondSF"];
	$intAtticSF = $_POST["txtAtticSF"];
	$intTotalSF = $_POST["txtTotalSF"];
	$intYearBuilt = $_POST["txtYearBuilt"];
	$intCeilingHeight = $_POST["txtCeilingHeight"];
	
// Write SQL for spSubmitPreAudit

	$sql = "CALL spSubmitPreAudit('".$intClientID."', '".$intFirstSF."', '".$intSecondSF."', '".$intAtticSF."', '".$intTotalSF."', '".$intYearBuilt."', '".$intCeilingHeight."'); ";

// Execute query

	$conn->query($sql);

// Include Footer

	include 'includes/footer.php';

?>