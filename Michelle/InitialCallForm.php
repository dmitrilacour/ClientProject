<?php include '/includes/Header.php';?>
	
		<form name="frmClientProfile" method="post" action="InitialCall.php">
		
			<h1>Client Info</h1>
			
			<div class='inputTitle'>First Name:</div>
			<input type="text" name="txtFirstName" placeholder="First Name" required >
			
			<div class='inputTitle'>Last Name:</div>
			<input type="text" name="txtLastName" placeholder="Last Name" required >
			
			<div class='inputTitle'>Street:</div>
			<input type="text" name="txtStreet" placeholder="Street Address" required >
			
			<div class='inputTitle'>City:</div>
			<input type="text" name="txtCity" placeholder="City" required >
			
			<div class='inputTitle'>State:</div>
			<input type="text" name="txtState" placeholder="State" required >
			
			<div class='inputTitle'>Zip:</div>
			<input type="text" name="txtZip" placeholder="Zip Code" required >
			
			<div class='inputTitle'>Primary Phone:</div>
			<input type="tel" name="txtPhonePrimary" placeholder="Primary Phone" required >
			
			<div class='inputTitle'>Alternative Phone:</div>
			<input type="tel" name="txtPhoneAlternative" placeholder="Alternative Phone" >
			
			<div class='inputTitle'>Primary Email:</div>
			<input type="text" name="txtEmailPrimary" placeholder="Primary Email" required >
			
			<div class='inputTitle'>Alternative Email:</div>
			<input type="text" name="txtEmailAlternative" placeholder="Alternative Email" >
			
			<h1>Utilities Info</h1>
			
			<!--
			Make all <select> gray when default value is selected
			Black otherwise
			-->
			
			<div class='inputTitle'>Austin Energy:</div>
			<select name="ddlAustinEnergy" required>
        		<option value="none" disabled selected>Austin Energy Customer?</option>
				<option value="1">Yes</option>
				<option value="0">No</option>
			</select>
			
			<div class='inputTitle'>Texas Gas:</div>
			<select name="ddlTexasGas" required>
        		<option value="none" disabled selected>Texas Gas Customer?</option>
				<option value="1">Yes</option>
				<option value="0">No</option>
			</select>
			
			<div class='inputTitle'>City Limits:</div>
			<select name="ddlCityLimits" required>
        		<option value="none" disabled selected>Within Austin City Limits?</option>
				<option value="1">Yes</option>
				<option value="0">No</option>
			</select>
			
			<h1>Home Info</h1>
			<div class='inputTitle'>First Floor:</div>
			<input type="number" name="txtFirstSF" placeholder="First Floor SF" min="0" step="1" required >
			
			<div class='inputTitle'>Second Floor:</div>
			<input type="number" name="txtSecondSF" placeholder="Second Floor SF" rmin="0" step="1" >
			
			<div class='inputTitle'>Attic:</div>
			<input type="number" name="txtAtticSF" placeholder="Attic SF" min="0" step="1" required >
			
			<div class='inputTitle'>Total:</div>
			<input type="number" name="txtTotalSF" placeholder="Total SF" min="0" step="1" required >
			
			<div class='inputTitle'>Year Built:</div>
			<input type="number" name="txtYearBuilt" placeholder="Year Built" min="1900" step="1" required >
			
			<div class='inputTitle'>Ceiling Height:</div>
			<input type="number" name="txtCeilingHeight" placeholder="Ceiling Height" min="0" step="1" required >
			
			<h1>Schedule Audit</h1>
			<div class='inputTitle'>Audit Date:</div>
			<input type="date" name="txtAuditDate" placeholder="Audit Date" required>
			
			<div class='inputTitle'>Auditor:</div>
			<input type="text" name="txtAuditor" placeholder="Auditor" required >
			
			<input type="Submit" name="btnSubmitProfile" value="Submit Client Profile" style="display: block; clear:both; margin-top: 3%; ">
			
            <?php include 'includes/footer.php';?>