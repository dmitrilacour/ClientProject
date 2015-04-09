<?php

// Check if Client cookie is set

	if (!isset($_COOKIE['Client'])) {
	
	// Set Client Cookie using form submission
	
		$CookieName = 'Client';
		$CookieValue = $_POST["txtClientID"];

		setcookie($CookieName, $CookieValue, time() + 3600);
		
	}

// Check if Client cookie is set now

	if (!isset($_COOKIE['Client'])) {
	
	// Redirect to Scheduled Audits if client not selected
	
	header( 'Location: ScheduledAudits.php' );
	
	}

// Set client ID using Client cookie

	$intClientID = $_COOKIE['Client'];
	
// Include Header

	include 'includes/Header.php';

?>
	
<form name="frmClientProfile" method="post" action="PreAudit.php">
	
	<!------------------
	Client Information Section of frmClientProfile
	------------------->
		<h1>Home Info</h1>
			<div class='form-group'>First Floor:
				<input class="form-control" type="number" name="txtFirstSF" placeholder="First Floor SF" min="0" step="1"  >
			</div>
			
			<div class='form-group'>Second Floor:
				<input class="form-control" type="number" name="txtSecondSF" placeholder="Second Floor SF" rmin="0" step="1" >
			</div>
			
			<div class='form-group'>Attic:
				<input class="form-control" type="number" name="txtAtticSF" placeholder="Attic SF" min="0" step="1"  >
			</div>
			
			<div class='form-group'>Total:
				<input class="form-control" type="number" name="txtTotalSF" placeholder="Total SF" min="0" step="1"  >
			</div>
			
			<div class='form-group'>Year Built:
				<input class="form-control" type="number" name="txtYearBuilt" placeholder="Year Built" min="1900" step="1"  >
			</div>
			
			<div class='form-group'>Ceiling Height:
				<input class="form-control" type="number" name="txtCeilingHeight" placeholder="Ceiling Height" min="0" step="1"  >
			</div>
		
	<!------------------
	Hidden textbox to submit ClientID
	------------------->
		<input type="text" name="txtClientID" id="txtClientID" style="visibility:hidden" value="<?php echo $intClientID ?>"<>
			
	<!------------------
	Submit Button for frmClientProfile
	------------------->
		<input class="btn btn-default"  type="Submit" name="btnSubmitProfile" value="Submit Client Profile" >
			
			</form>

<?php 

// Include Footer

	include 'includes/footer.php';

?>