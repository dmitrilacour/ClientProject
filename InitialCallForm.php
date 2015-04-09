<?php 

// Include Header
	
	include 'includes/Header.php';
	
?>
	
<form name="frmClientProfile" method="post" action="InitialCall.php">

	<div class="div-left">
	
	
		<!------------------
			Client Information Section of frmClientProfile
		------------------->
			<h1>Client Info</h1>
			
				<div class='form-group'>First Name:
					<input class="form-control" type="text" name="txtFirstName" placeholder="First Name" required />
				</div>
			
				<div class='form-group'>Last Name:
					<input class="form-control" type="text" name="txtLastName" placeholder="Last Name" required />
				</div>
			
				<div class='form-group'>Street:
					<input class="form-control" type="text" name="txtStreet" placeholder="Street Address" required />
				</div>
			
				<div class='form-group'>City:
					<input class="form-control" type="text" name="txtCity" placeholder="City" required />
				</div>
			
				<div class='form-group'>State:
					<input class="form-control" type="text" name="txtState" placeholder="State" required />
				</div>
			
				<div class='form-group'>Zip:
					<input class="form-control" type="text" name="txtZip" placeholder="Zip Code" required />
				</div>
			
				<div class='form-group'>Primary Phone:
					<input class="form-control" type="tel" name="txtPhonePrimary" placeholder="Primary Phone" required />
				</div>
			
				<div class='form-group'>Alternative Phone:
					<input class="form-control" type="tel" name="txtPhoneAlternative" placeholder="Alternative Phone" />
				</div>
			
				<div class='form-group'>Primary Email:
					<input class="form-control" type="text" name="txtEmailPrimary" placeholder="Primary Email" required />
				</div>
			
				<div class='form-group'>Alternative Email:
					<input class="form-control" type="text" name="txtEmailAlternative" placeholder="Alternative Email" />
				</div>
			
			
			
		<!------------------
		Utilities Information Section of frmClientProfile
		------------------->
			<h1>Utilities Info</h1>
			
				<div class='form-group'>Austin Energy:
					<select class="form-control" name="ddlAustinEnergy" required>
						<option value="none" disabled selected>Austin Energy Customer?</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
				</div>
			
				<div class='form-group'>Texas Gas:
					<select class="form-control" name="ddlTexasGas" required>
						<option value="none" disabled selected>Texas Gas Customer?</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
				</div>
			
				<div class='form-group'>City Limits:
					<select class="form-control" name="ddlCityLimits" required>
						<option value="none" disabled selected>Within Austin City Limits?</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
				</div>
			
			
			
		<!------------------
		Audit Information Section of frmClientProfile
		------------------->
			<h1>Schedule Audit</h1>
				<div class='form-group'>Audit Date:
					<input class="form-control" type="date" name="txtAuditDate" placeholder="Audit Date" required>
				</div>
			
				<div class='form-group'>Auditor:
					<input class="form-control" type="text" name="txtAuditor" placeholder="Auditor" required />
				</div>
			
		<!------------------
		Submit Button for frmClientProfile
		------------------->
			<input class="btn btn-default" type="Submit" name="btnSubmitProfile" value="Submit Client Profile" />
		
	</div>
	
</form>
			
<?php 

// Include Footer

	include 'includes/footer.php';

?>