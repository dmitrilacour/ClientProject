

<?php

/*****************************
PHP for MySQL query
*****************************/	

// Get ClientID submitted from ScheduledAudits.php
$intClientID = 0 + $_POST["txtClientID"];

// DB Credentials
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbGreenSquads";

// Define and make connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to get Client Profile Information
$sql = "SELECT AuditID, AuditDate, CONCAT(FirstName, ' ', LastName) AS Client, CONCAT(Street, ' ', City, ', ', State, ' ', Zip) AS Address, Auditor, Status FROM `tblClientProfile` JOIN `tblScheduledAudits` ON tblClientProfile.ClientID = tblScheduledAudits.ClientID WHERE tblClientProfile.ClientID = '".$intClientID."' ";

// Run Query
$result = $conn->query($sql);

// Convert result to callable array	
for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);

// Set variables as necessary
$strName = $set[0][Client];
$strAddress = $set[0][Address];
$intAuditID = $set[0][AuditID];
$strAuditor = $set[0][Auditor];
$strAuditDate = $set[0][AuditDate];

// SQL to get Partial Audit Profile
$sql = "SELECT FirstFloorSF, SecondFloorSF, AtticSF, TotalSF, CeilingHeight FROM tblAudit WHERE AuditID = '".$intAuditID."' ";

// Run Query
$result = $conn->query($sql);

// Convert result to callable array
for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);

// Set variables as necessary
$intFirstFloorSF = $set[0][FirstFloorSF];
$intSecondFloorSF = $set[0][SecondFloorSF];
$intAtticSF = $set[0][AtticSF];
$intTotalSF = $set[0][TotalSF];
$intCeilingHeight = $set[0][CeilingHeight];

?>

<!DOCTYPE html>

<html>

	
	<body>
		
		<!----------------------------
			Audit Details
		----------------------------!>
		<div id="AuditDetails">
		
			<h1>Audit Details</h1>
			
			<div class='inputTitle'>Audit ID:</div>
			<input type="text" name="txtAuditID" value="<?php echo $intAuditID ?>" readonly>
			
			<div class='inputTitle'>Audit Date:</div>
			<input type="text" name="txtAuditDate" value="<?php echo $strAuditDate ?>" readonly>
			
			<div class='inputTitle'>Auditor:</div>
			<input type="text" name="txtAuditor" value="<?php echo $strAuditor ?>" readonly>
		
		</div>
		
		
		<form name="frmAudit" method="post" action="Audit.php">
		
			<!----------------------------
				Client Profile Info
			----------------------------!>
		
			<div id='ClientProfile'>
			<h1>Client Profile</h1>
			
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
			
		</div>
			
			<!----------------------------
				Utilities Info
			----------------------------!>
			
			<div id='UtilitiesInfo'>
			<h1>Utilities Info</h1>
			
			<!----------------------------
			Can you make all <select> gray when default value is selected
			Black otherwise
			I attempted with JS, but my CSS had no effect
			If you give me the CSS that makes changes then I can apply it with JS
			----------------------------!>
			
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
			
			</div>
			
			<!----------------------------
				Home Measurements
			----------------------------!>
		
			<div id='HomeMeasurements'>
			
			<h1>Home Measurements</h1>
			
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
			
			</div>
			
			<!----------------------------
				Building Envelope
			----------------------------!>
			
			<div id="BuildingEnvelope">
				<h1>Building Envelope</h1>
			
					<div class='inputTitle'>Building Envelope:</div>
					<select required name="ddlBuildingEnvelope">
						<option value="none" disabled selected>Building Envelope?</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
					
					<div class='inputTitle'>Ceiling Height:</div>
					<input type="number" name="txtCeilingHeight" placeholder="Ceiling Height" min="0" step="1" value="<?php echo $intCeilingHeight ?>" required readonly>
				
					<div class='inputTitle'>Foundation Type:</div>
					<select required name="ddlFoundation">
						<option value="none" disabled selected>Foundation Type?</option>
						<option value="slab">Slab</option>
						<option value="pier">Pier</option>
					</select>
				
					<div class='inputTitle'>Living Area Difficulty:</div>
					<select required name="ddlLivingDifficulty">
						<option value="none" disabled selected>Living Area Difficulty?</option>
						<option value="Normal">Normal</option>
						<option value="Some Restriction">Some Restriction</option>
						<option value="Difficult">Small/Difficult to Maneuver</option>
					</select>
					
					<div class='inputTitle'>Leakiness:</div>
					<select required name="ddlLivingLeakiness">
						<option value="none" disabled selected>Leakiness?</option>
						<option value="Normal">Normal</option>
						<option value="Some">Some Leaks</option>
						<option value="Many">Many Leaks</option>
					</select>
					
					<div class='inputTitle'>Attic Difficulty:</div>
					<select required name="ddlAtticDifficulty">
						<option value="none" disabled selected>Attic Difficulty?</option>
						<option value="Normal">Normal</option>
						<option value="Some Restriction">Some Restriction</option>
						<option value="Difficult">Small/Difficult to Maneuver</option>
					</select>
					
					<div class='inputTitle'>Number of Doors:</div>
					<input type="number" name="txtNumDoors" placeholder="Number of Doors" min="0" step="1" required >
					
					<div class='inputTitle'>Number of Jambs/Sweeps:</div>
					<input type="number" name="txtJambsSweeps" placeholder="Number of Jambs/Sweeps" min="0" step="1" required >
					
					<div class='inputTitle'>Number of Baths:</div>
					<input type="number" name="txtNumBaths" placeholder="Number of Baths" min="0" step="1" required >
					
					<div class='inputTitle'>Miscellaneous:</div>
					<input type="checkbox" name="chkSmokeDetectors" value="yes">Smoke Detectors
					
					<input type="checkbox" name="chkCODetectors" value="yes">CO Detectors
					
					<input type="checkbox" name="chkSmokeCOCombo" value="yes">Smoke/CO Combo
					
					<input type="checkbox" name="chkFireplaceBalloons" value="yes">Fireplace Balloons
					
					<input type="checkbox" name="chkMoveUnderSink" value="yes">Move Items Under Sink
					
					<input type="checkbox" name="chkMoveAttic" value="yes">Move Attic Items
					
					<input type="checkbox" name="chkCFL" value="yes">CFL's
					
					<input type="checkbox" name="chkPowerStrips" value="yes">Power Strips
					
					<input type="checkbox" name="chkLowFlowShower" value="yes">Low Flow Showerhead
					
					<input type="checkbox" name="chkKitchenAerator" value="yes">Kitchen Aerator
					
					<input type="checkbox" name="chkBathAerator" value="yes">Bath Aerator
					
			</div>
			
			<!----------------------------
				Ductwork
			----------------------------!>
			
			<div id='Ductwork'>
				<h1>Ductwork</h1>
				
					<div class='inputTitle'>Seal Ductwork:</div>
					<select required name="ddlSealDuctwork">
						<option value="none" disabled selected>Seal Ductwork?</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
					
					<div class='inputTitle'>Replace Ductwork:</div>
					<select required name="ddlReplaceDuctwork">
						<option value="none" disabled selected>Replace Ductwork?</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
					
					<div class='inputTitle'>Duct Type:</div>
					<select required name="ddlDuctType">
						<option value="none" disabled selected>Duct Type?</option>
						<option value="Duct Board">Duct Board</option>
						<option value="Grey Flex">Grey Flex</option>
						<option value="Silver Flex">Silver Flex</option>
						<option value="Metal">Metal</option>
					</select>
					
					<div class='inputTitle'>Duct Location:</div>
					<select required name="ddlDuctLocation">
						<option value="none" disabled selected>Duct Location?</option>
						<option value="Attic">Attic</option>
						<option value="CrawlSpace">Crawlspace</option>
						<option value="Furrdowns">Furrdowns</option>
					</select>
					
					<div class='inputTitle'>Duct Condition:</div>
					<select required name="ddlDuctCondition">
						<option value="none" disabled selected>Duct Condition?</option>
						<option value="Poor">Poor</option>
						<option value="Fair">Fair</option>
						<option value="Good">Good</option>
					</select>
					
					<div class='inputTitle'>Duct R-Val:</div>
					<select required name="ddlDuctRval">
						<option value="none" disabled selected>Duct R-Val?</option>
						<option value="R-2">R-2</option>
						<option value="R-4">R-4</option>
						<option value="R-6">R-6</option>
						<option value="R-8">R-8</option>
					</select>
					
					<div class='inputTitle'>Number of Supplies:</div>
					<input type="number" name="txtDuctworkSupplies" placeholder="#SUPPLIES" min="0" step="1">
					
					<div class='inputTitle'>Miscellaneous:</div>
					<input type="checkbox" name="chkCleanReturn" value="yes">Clean/Seal Return
					
					<input type="checkbox" name="chkCleanRegister" value="yes">Clean/Seal Register
					
					<input type="checkbox" name="chkCombustionAir" value="yes">Combustion Air
					
					<input type="checkbox" name="chkMoveAttic" value="yes">Move Attic Items
					
					<input type="checkbox" name="chkRegisters" value="yes">Registers
					
					<input type="checkbox" name="chkFilters" value="yes">Filters
				
				</div>
				
			<!----------------------------
				Insulation
			----------------------------!>
			
			<div id='Insulation'>
			
				<h1>Insulation</h1>
			
				<div class='inputTitle'>Insulation:</div>
				<select name="ddlInsulation" required>
					<option value="none" disabled selected>Insulation?</option>
					<option value="1">Yes</option>
					<option value="0">No</option>
				</select>
			
				<div class='inputTitle'>Type:</div>
				<select name="ddlInsulationType" required>
					<option value="none" disabled selected>Insulation Type?</option>
					<option value="Fiberglass">Fiberglass</option>
					<option value="Batts">Batts</option>
					<option value="Rockwool">Rockwool</option>
					<option value="Cellulose">Cellulose</option>
				</select>
				
				<div class='inputTitle'>Type:</div>
				<input type="number" name="txtAtticSF" placeholder="Attic SF" rmin="0" step="1" >
				
				<div class='inputTitle'>Existing Depth:</div>
				<input type="number" name="txtInsulationDepth" placeholder="Existing Insulation Depth" rmin="0" step="1" >
				
				<div class='inputTitle'>Existing R:</div>
				<input type="number" name="txtExistingR" placeholder="Existing R-Val" rmin="0" step="1" >
			
				<div class='inputTitle'>Miscellaneous:</div>
					<input type="checkbox" name="chkCathedral" value="yes">Cathedral
					
					<input type="checkbox" name="chkKneeWalls" value="yes">Knee Walls
					
					<input type="checkbox" name="chkVault" value="yes">Vault
			
			</div>
			
			<!----------------------------
				Radiant Barrier
			----------------------------!>
		
			<div id='RadiantBarrier'>
				<h1>Radiant Barrier</h1>
				
					<div class='inputTitle'>Radiant Barrier:</div>
					<select required name="ddlRadiantBarrier">
						<option value="none" disabled selected>Radiant Barrier?</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
					
					<div class='inputTitle'>Pitch:</div>
					<input type="number" name="txtPitch" placeholder="Pitch?" min="0" step="1">
			</div>
			
			<!----------------------------
				HVAC 1
			----------------------------!>
		
			<div id='HVAC1'>
			
				<h1>HVAC 1</h1>
					
					<div class='inputTitle'>Tons:</div>
					<input type="number" name="txtHVAC1Tons" placeholder="Tons" min="0" step=".01" max="5">
					
					<div class='inputTitle'>Replace/Repair:</div>
					<select required name="ddlHVAC1ReplaceRepair">
						<option value="none" disabled selected>Replace/Repair?</option>
						<option value="N/A">N/A</option>
						<option value="Repair">Repair</option>
						<option value="Replace">Replace</option>
					</select>
					
					<div class='inputTitle'>Age:</div>
					<input type="number" name="txtHVAC1Age" placeholder="AGE" min="0" step="1">
					
					<div class='inputTitle'>Number of Supplies:</div>
					<input type="number" name="txtHVAC1Supplies" placeholder="#SUPPLIES" min="0" step="1">
					
					<h3>Condenser</h3>
						
						<div class='inputTitle'>Serial Number:</div>
						<input type="text" name="txtHVAC1CondenserSerial" placeholder="HVAC1 S/N">
						
						<div class='inputTitle'>Model:</div>
						<input type="text" name="txtHVAC1CondenserModel" placeholder="HVAC1 Model">
						
					<h3>Furn/Air H</h3>
						
						<div class='inputTitle'>Serial Number:</div>
						<input type="text" name="txtHVAC2Serial" placeholder="HVAC1 S/N">
						
						<div class='inputTitle'>Model:</div>
						<input type="text" name="txtHVAC2Model" placeholder="HVAC1 Model">
						
					<h3>SEER</h3>
						
						<div class='inputTitle'>Cooling Type:</div>
						<select required name="ddlHVAC1Cooling">
							<option value="none" disabled selected>Cooling Type?</option>
							<option value="Central AC">Central AC</option>
							<option value="Window Unit">Window Unit</option>
						</select>
					
						<div class='inputTitle'>Heating Type:</div>
						<select required name="ddlHVAC1Heating">
							<option value="none" disabled selected>Heating Type?</option>
							<option value="Central Gas">Central Gas</option>
							<option value="Heat Pump">Heat Pump</option>
							<option value="Water Heater">Water Heater</option>
						</select>
					
						<div class='inputTitle'>Air Handler Location</div>
						<select required name="ddlHVAC1AirHandler">
							<option value="none" disabled selected>Air Handler Location?</option>
							<option value="Attic">Attic</option>
							<option value="Cond Closet">Cond Closet</option>
							<option value="Uncond Closet">Uncond Closet</option>
						</select>
					
						<div class='inputTitle'>Thermostat Type:</div>
						<select required name="ddlHVAC1Thermostat">
							<option value="none" disabled selected>Thermostat Type?</option>
							<option value="AE Programmable">AE Programmable</option>
							<option value="Other Programmable">Other Programmable</option>
							<option value="Not Programmable">Not Programmable</option>
						</select>
					
						<div class='inputTitle'>Number of Zones:</div>
						<select required name="ddlHVAC1Zoned">
							<option value="none" disabled selected>Zones?</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
			
			</div>
			
			<!----------------------------
				HVAC 2
			----------------------------!>
				
				
				<div id='HVAC2'>
			
				<h1>HVAC 2</h1
				>
					
					<div class='inputTitle'>Tons:</div>
					<input type="number" name="txtHVAC2Tons" placeholder="Tons" min="0" step=".01" max="5">
					
					<div class='inputTitle'>Replace/Repair:</div>
					<select required name="ddlHVAC2ReplaceRepair">
						<option value="none" disabled selected>Replace/Repair?</option>
						<option value="N/A">N/A</option>
						<option value="Repair">Repair</option>
						<option value="Replace">Replace</option>
					</select>
					
					<div class='inputTitle'>Age:</div>
					<input type="number" name="txtHVAC2Age" placeholder="AGE" min="0" step="1">
					
					<div class='inputTitle'>Number of Supplies:</div>
					<input type="number" name="txtHVAC2Supplies" placeholder="#SUPPLIES" min="0" step="1">
					
					<h3>Condenser</h3>
						
						<div class='inputTitle'>Serial Number:</div>
						<input type="text" name="txtHVAC2CondenserSerial" placeholder="HVAC2 S/N">
						
						<div class='inputTitle'>Model:</div>
						<input type="text" name="txtHVAC2CondenserModel" placeholder="HVAC2 Model">
						
					<h3>Furn/Air H</h3>
						
						<div class='inputTitle'>Serial Number:</div>
						<input type="text" name="txtHVAC2Serial" placeholder="HVAC2 S/N">
						
						<div class='inputTitle'>Model:</div>
						<input type="text" name="txtHVAC2Model" placeholder="HVAC2 Model">
						
					<h3>SEER</h3>
						
						<div class='inputTitle'>Cooling Type:</div>
						<select required name="ddlHVAC2Cooling">
							<option value="none" disabled selected>Cooling Type?</option>
							<option value="Central AC">Central AC</option>
							<option value="Window Unit">Window Unit</option>
						</select>
					
						<div class='inputTitle'>Heating Type:</div>
						<select required name="ddlHVAC2Heating">
							<option value="none" disabled selected>Heating Type?</option>
							<option value="Central Gas">Central Gas</option>
							<option value="Heat Pump">Heat Pump</option>
							<option value="Water Heater">Water Heater</option>
						</select>
					
						<div class='inputTitle'>Air Handler Location</div>
						<select required name="ddlHVAC2AirHandler">
							<option value="none" disabled selected>Air Handler Location?</option>
							<option value="Attic">Attic</option>
							<option value="Cond Closet">Cond Closet</option>
							<option value="Uncond Closet">Uncond Closet</option>
						</select>
					
						<div class='inputTitle'>Thermostat Type:</div>
						<select required name="ddlHVAC2Thermostat">
							<option value="none" disabled selected>Thermostat Type?</option>
							<option value="AE Programmable">AE Programmable</option>
							<option value="Other Programmable">Other Programmable</option>
							<option value="Not Programmable">Not Programmable</option>
						</select>
					
						<div class='inputTitle'>Number of Zones:</div>
						<select required name="ddlHVAC2Zoned">
							<option value="none" disabled selected>Zones?</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
			
			</div>
				
			
			<!----------------------------
				Submit Audit Form
			----------------------------!>
					
			<input type="Submit" name="btnSubmitAudit" value="Submit Client Audit" style="display: block; clear:both; margin-top: 3%; ">
			
		</form>
		
	</body>
	
</html>