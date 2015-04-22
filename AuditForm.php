<?php


	
	// Set Client Cookie using form submission
	
		$CookieName = 'ClientID';
		$CookieValue = $_POST["txtClientID"];

		setcookie($CookieName, $CookieValue, time() + 3600);

// Check if Client cookie is set now

	if (isset($_COOKIE['ClientID']) == false) {
	
	// Redirect to Scheduled Audits if client not selected
	
		header( 'Location: ScheduledAudits.php' );
	
	}

// Include Header

	include 'includes/Header.php';

// Database Code

	// Get ClientID submitted from ScheduledAudits.php

		$intClientID = $_COOKIE["ClientID"];

	// SQL to get Client Profile Information

		$sql = "CALL spGetAuditDetails('".$intClientID."'); ";

	// Execute Query

		$result = $conn->query($sql);

	// Convert result to callable array	

		for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);

// Set variables as necessary
	
	// Audit Details

		$intAuditID = $set[0][AuditID];
		$strAuditor = $set[0][Auditor];
		$strAuditDate = $set[0][AuditDate];
	
	// Client Details

		$strClientName = $set[0][Client];
		$strAddress = $set[0][Address];
		$strPhonePrimary = $set[0][PhonePrimary];
		$strPhoneAlternative = $set[0][PhoneAlternative];
		$strEmailPrimary = $set[0][EmailPrimary];
		$strEmailAlternative = $set[0][EmailAlternative];

	// Measurements
	
		$intFirstFloorSF = $set[0][FirstFloorSF];
		$intSecondFloorSF = $set[0][SecondFloorSF];
		$intAtticSF = $set[0][AtticSF];
		$intTotalSF = $set[0][TotalSF];
		$intYearBuilt = $set[0][YearBuilt];
		$intCeilingHeight = $set[0][CeilingHeight];

	// Customer Goals
		$strHearGGS = $set[0][HearGGS];
		$booComfort = $set[0][Comfort];
		$booInsulationInterest = $set[0][InsulationInterest];
		$booSolarScreens = $set[0][SolarScreens];
		$booAirQuality = $set[0][AirQuality];
		$booDuctSealing = $set[0][DuctSealing];
		$booRadBarrier = $set[0][RadBarrier];
		$booSaveMoney = $set[0][SaveMoney];
		$booHVAC = $set[0][HVAC];
		$booEnvironment = $set[0][Environment];
		$booOther = $set[0][Other];
		$strGoals = $set[0][Goals];
		$strConcerns = $set[0][strConcerns];
		$strChange1 = $set[0][Change1];
		$strChange2 = $set[0][Change2];
		$intSummer = $set[0][Summer];
		$intWinter = $set[0][Winter];
		$intOccupy = $set[0][Occupy];
		$booRooms = $set[0][Rooms];
		$booSchedule = $set[0][Schedule];
		$strBudget = $set[0][Budget];
		$booFinancing = $set[0][Financing];
		$strOtherComments = $set[0][OtherComments];
		
	// Building Envelope
	
		$booBuildingEnvelope = $set[0][BuildingEnvelope];
		$strFoundationType = $set[0][FoundationType];
		$strLivingDifficulty = $set[0][LivingDifficulty];
		$strLeakiness = $set[0][Leakiness];
		$strAtticDifficulty = $set[0][AtticDifficulty];
		$intNumberDoors = $set[0][NumberDoors];
		$intNumberJambsSweeps = $set[0][NumberJambsSweeps];
		$intBaths = $set[0][NumberBaths];
		$booSmoke = $set[0][SmokeDetectors];
		$booCO = $set[0][CoDetectors];
		$booCombo = $set[0][SmokeCoCombo];
		$booBalloons = $set[0][FireplaceBalloons];
		$booShowerhead = $set[0][MoveUnderSink];
		$booKitchenAerator = $set[0][MoveAtticItems];
		$booBathAerator = $set[0][CFLs];
		$booMoveSinkBuilding = $set[0][PowerStrip];
		$booMoveAtticBuilding = $set[0][LowFlowShower];
		$booCFL = $set[0][KitenAerator];
		$booPowerStrips = $set[0][BathAerator];
		$strNotesBuilding = $set[0][BuildingNotes];

	// Ductwork
	
		$booSealDuctwork = $set[0][SealDuct];
		$booReplaceDuctwork = $set[0][ReplaceDuct];
		$strDuctType = $set[0][DuctType];
		$strDuctLocation = $set[0][DuctLocation];
		$strDuctCondition = $set[0][DuctCondition];
		$strDuctRVal = $set[0][DuctRVall];
		$intSuppliesDuctwork = $set[0][DuctSupplies];
		$booCombustionAir = $set[0][CombustionAir];
		$booRegisters = $set[0][DuctRegisters];
		$booFilters = $set[0][DuctFilters];
		$booCleanSealReturn = $set[0][CleanSealReturn];
		$booCleanSealRegister = $set[0][CleanSealRegister];
		$booMoveAtticDuctwork = $set[0][DuctMoveAttic];
		$strNotesDuctwork = $set[0][DuctworkNotes];

	// Insulation
	
		$booInsulation = $set[0][Insulation];
		$strInsulationType = $set[0][InsulationType];
		$intAtticSF = $set[0][InsulationAtticSF];
		$intExistingDepth = $set[0][InsulationExistingDepth];
		$strExistingRVal = $set[0][InsulationExistingRVall];
		$booCathedral = $set[0][Cathedral];
		$booKneeWall = $set[0][Kneewalls];
		$booVault = $set[0][Vault];
		$strNotesInsulation = $set[0][InsulationNotes];

	// Radiant Barrier

		$booRadiantBarrier = $set[0][RadiantBarrier];
		$intPitch = $set[0][Pitch];
		$strNotesRadiantBarrier = $set[0][RadiantBarrierNotes];

	// HVAC 1
	
		$decTonsHVAC1 = $set[0][HVAC1Tons];
		$strReplaceRepairHVAC1 = $set[0][HVAC1ReplaceRepair];
		$intAgeHVAC1 = $set[0][HVAC1Age];
		$intSuppliesHVAC1 = $set[0][HVAC1NumberSupplies];
		$strCondenserSerialHVAC1 = $set[0][HVAC1CondenserSN];
		$strCondenserModelHVAC1 = $set[0][HVAC1CondenserModel];
		$strFurnAirSerialHVAC1 = $set[0][HVAC1FurnSN];
		$strFurnAirModelHVAC1 = $set[0][HVAC1FurnModel];
		$strCoolingTypeHVAC1 = $set[0][HVAC1CoolingType];
		$strHeatingTypeHVAC1 = $set[0][HVAC1HeatingType];
		$strHandlerLocationHVAC1 = $set[0][HVAC1HandlerLocation];
		$strThermostatTypeHVAC1 = $set[0][HVAC1ThermostatType];
		$intZonesHVAC1 = $set[0][HVAC1Zones];
		$strNotesHVAC1 = $set[0][HVAC1Notes];

	// HVAC 2

		$decTonsHVAC2 = $set[0][HVAC2Tons];
		$strReplaceRepairHVAC2 = $set[0][HVAC2ReplaceRepair];
		$intAgeHVAC2 = $set[0][HVAC2Age];
		$intSuppliesHVAC2 = $set[0][HVAC2NumberSupplies];
		$strCondenserSerialHVAC2 = $set[0][HVAC2CondenserSN];
		$strCondenserModelHVAC2 = $set[0][HVAC2CondenserModel];
		$strFurnAirSerialHVAC2 = $set[0][HVAC2FurnSN];
		$strFurnAirModelHVAC2 = $set[0][HVAC2FurnModel];
		$strCoolingTypeHVAC2 = $set[0][HVAC2CoolingType];
		$strHeatingTypeHVAC2 = $set[0][HVAC2HeatingType];
		$strHandlerLocationHVAC2 = $set[0][HVAC2HandlerLocation];
		$strThermostatTypeHVAC2 = $set[0][HVAC2ThermostatType];
		$intZonesHVAC2 = $set[0][HVAC2Zones];
		$strNotesHVAC2 = $set[0][HVAC2Notes];

?>

<!-- Page Content -->

<div class="col-lg-12">

	<h1 class="page-header">Customer Data</h1>

</div>



<!-- .col-lg-4 -->
<div class="col-lg-4">
		<div class="panel panel-primary">
		<div class="panel-heading">
			Customer Information 
		</div>
				
		<div class="panel-body">

			<b>Client Name:</b><?php echo $strClientName ?> <br/>
			<b>Address:</b><?php echo $strAddress ?> <br/>
			<b>Primary Phone:</b><?php echo $strPhonePrimary ?><br/>
			<b>Alternative Phone:</b><?php echo $strPhoneAlternative ?><br/>
			<b>Primary Email:</b><?php echo $strEmailPrimary ?><br/>
			<b>Alternative Email:</b><?php echo $strEmailAlternative ?><br/>
					
		</div>
		<div class="panel-footer">
			
        </div>
	</div>
</div>
<!-- /.col-lg-4 -->

<!-- .col-lg-6 -->
<div class="col-lg-6">
	<div class="panel panel-default">
	
		<!-- .panel-heading -->
		<div class="panel-heading">
			Data Collection
		</div>
		<!-- /.panel-heading -->
		
		<!-- .panel-body -->
		<div class="panel-body">
			<!-- Nav tabs -->
			<ul class="nav nav-pills">
				<li class="active"><a href="#measurement-pills" data-toggle="tab">Basic Measurements</a>
				</li>
				<li><a href="#goals-pills" data-toggle="tab">Customer Goals</a>
				</li>
				<li><a href="#building-pills" data-toggle="tab">Building Envelope</a>
				</li>
				<li><a href="#ductwork-pills" data-toggle="tab">Ductwork</a>
				</li>
				<li><a href="#insulation-pills" data-toggle="tab">Insulation</a>
				</li>
				 <li><a href="#radiant-pills" data-toggle="tab">Radiant Barrier</a>
				</li>
				<li><a href="#HVAC1-pills" data-toggle="tab">HVAC 1</a>
				</li>
				<li><a href="#HVAC2-pills" data-toggle="tab">HVAC 2</a>
				</li>
			</ul>
                            
			<!-- Tab panes -->
			<div class="tab-content">
				<!----------------------------
					Home Measurements
				---------------------------->
				<div class="tab-pane fade in active" id="measurement-pills">
                                

				<h4>Home Measurements</h4>

				<form name="frmAudit" method="post" action="SubmitAudit.php">

				<div class='form-group'><label>First Floor:</label>
				<input class="form-control" type="number" name="txtFirstSF" value="<?php echo $intFirstFloorSF ?>" placeholder="First Floor SF" min="0" step="1"  >
				</div>

				<div class='form-group'><label>Second Floor:</label>
				<input class="form-control" type="number" name="txtSecondSF" value="<?php echo $intSecondFloorSF ?>" placeholder="Second Floor SF" rmin="0" step="1" >
				</div>

				<div class='form-group'><label>Attic:</label>
				<input class="form-control" type="number" name="txtAtticSF" value="<?php echo $intAtticSF ?>" placeholder="Attic SF" min="0" step="1"  >
				</div>

				<div class='form-group'><label>Total:</label>
				<input class="form-control" type="number" name="txtTotalSF" value="<?php echo $intTotalSF ?>" placeholder="Total SF" min="0" step="1"  >
				</div>

				<div class='form-group'><label>Year Built:</label>
					<input class="form-control" type="number" name="txtYearBuilt" value="<?php echo $intYearBuilt ?>" placeholder="Year Built" min="1900" step="1"  >
				</div>

				<div class='form-group'><label>Ceiling Height:</label>
				<input class="form-control" type="number" name="txtCeilingHeight" value="<?php echo $intCeilingHeight ?>" placeholder="Ceiling Height" min="0" step="1"  >
				</div>

				</div>
				<!----------------------------
					Customer Goals
				---------------------------->								
				<div class="tab-pane fade" id="goals-pills">
												
				<h4>Customer Goals</h4>
                <div class='form-group'>
				<label>How did you hear about GoGreenSquads?</label>
				<textarea class="form-control" rows="3" name="txtHearGGS" placeholder="Enter method here." value="<?php echo $strHearGGS ?>"></textarea>
				</div>
				
				<!--User checks options-->
				<div class='form-group'>
					<label>Goals and Interest in Upgrades (check all that apply):</label><br>
					<label class="checkbox-inline">
						<input type="checkbox" name="chkComfort" value="1" <?php if ($booComfort === 1) echo 'checked="checked"'; ?> >Comfort&nbsp; 
					</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label class="checkbox-inline">
						<input type="checkbox" name="chkInsulationInterest" value="1" <?php if ($booInsulationInterest === 1) echo 'checked="checked"'; ?> >Insulation
					</label><br/>
					<label class="checkbox-inline">
						<input type="checkbox" name="chkSolarScreens" value="1" <?php if ($booSolarScreens === 1) echo 'checked="checked"'; ?> >Solar Screens
					</label>
					<label class="checkbox-inline">
						<input type="checkbox" name="chkAirQuality" value="1" <?php if ($booAirQuality === 1) echo 'checked="checked"'; ?> >Air Quality
					</label><br/>
					<label class="checkbox-inline">
						<input type="checkbox" name="chkDuctSealing" value="1" <?php if ($booDuctSealing === 1) echo 'checked="checked"'; ?> >Duct Sealing
					</label> &nbsp;
					<label class="checkbox-inline">
						<input type="checkbox" name="chkRadBarrier" value="1" <?php if ($booRadBarrier === 1) echo 'checked="checked"'; ?> >Rad Barrier
					</label><br/>
					<label class="checkbox-inline">
						<input type="checkbox" name="chkSaveMoney" value="1" <?php if ($booSaveMoney === 1) echo 'checked="checked"'; ?> >Save Money
					</label>&nbsp;&nbsp;
					<label class="checkbox-inline">
						<input type="checkbox" name="chkHVAC" value="1" <?php if ($booHVAC === 1) echo 'checked="checked"'; ?> >HVAC
					</label><br/>
					<label class="checkbox-inline">
						<input type="checkbox" name="chkEnvironment" value="1" <?php if ($booEnvironment === 1) echo 'checked="checked"'; ?> >Environment
					</label>&nbsp;&nbsp;		
					<label class="checkbox-inline">
						<input type="checkbox" name="chkOther" value="1" <?php if ($booOther === 1) echo 'checked="checked"'; ?>>Other
					</label><br/>
				</div>
			
				<!--User text input to answer questions-->	
				<div class='form-group'>
					<label>Please describe in your own words your goals and expectations:</label>
					<textarea class="form-control" rows="3" name="txtGoals" placeholder="Enter goal here." value="<?php echo $strGoals ?>"></textarea>
				</div>	
				<div class='form-group'>
					<label>Current concerns? (Drafts, ducts, insulation, too sunny, noise, temperature difference)</label>
					<textarea class="form-control" rows="3" name="txtConcerns" placeholder="Enter concerns here." value="<?php echo $strConcerns ?>" ></textarea>
				</div>
				<div class='form-group'>
					<label>Any changes you know you want to make?</label>
					<textarea class="form-control" rows="3" name="txtChange1" placeholder="Enter change here." value="<?php echo $strChange1 ?>"></textarea>
				</div>
				<div class='form-group'>
					<label>Areas you think you should change, but you don't really want to?</label>
					<textarea class="form-control" rows="3" name="txtChange2" placeholder="Enter change here." value="<?php echo $strChange2 ?>" ></textarea>
				</div>
				<div class='form-group'>
					<label>What temperature is the thermostat set to in Summer?</label>
					<input class="form-control" type ="number" name="intSummer" value="<?php echo $intSummer ?>" >
				</div>
				<div class='form-group'>
					<label>Winter?</label>
					<input class="form-control" type ="number" name="intWinter" value="<?php echo $intWinter ?>">
				</div>
				<div class='form-group'>
					<label>How many people occupy the home?</label>
					<input class="form-control" type ="number" name="intOccupy" value="<?php echo $intOccupy ?>">
				</div>
				<div class='form-group'>
					<label>Are all of the rooms used?</label>
					 <select name="ddlRooms" id="ddlRooms" class="form-control">
						<option value="">Select</option>
						<option value="1" <?php if ($booRooms === 1) echo 'selected="selected"'; ?>>Yes</option>
						<option value="0" <?php if ($booRooms === 0) echo 'selected="selected"'; ?>>No</option>
					</select>
				</div>
				<div class='form-group'>
					<label>Do you have a regular schedule that you could program?</label>
					 <select name="ddlSchedule" id="ddlSchedule" class="form-control">
						<option value="">Select</option>
						<option value="1" <?php if ($booSchedule === 1) echo 'selected="selected"'; ?>>Yes</option>
						<option value="0" <?php if ($booSchedule === 0) echo 'selected="selected"'; ?>>No</option>
					</select>
				</div>
				<div class='form-group'>
					<label>Any budget limitations?</label>
					<input class="form-control" type ="text" name="txtBudget" value="<?php echo $strBudget ?>">
				</div>
				<div class='form-group'>
					<label>Interested in Financing?</label>
					<select name="ddlFinancing" id="ddlFinancing" class="form-control">
						<option value="">Select</option>
						<option value="1" <?php if ($booFinancing === 1) echo 'selected="selected"'; ?> >Yes</option>
						<option value="0" <?php if ($booFinancing === 0) echo 'selected="selected"'; ?> >No</option>
					</select>
				</div>
				<div class='form-group'>
					<label>Anything else you would like us to know?</label>
					<textarea class="form-control" rows="3" name="txtOtherComments" placeholder="Enter comments here." value="<?php echo $strOtherComments ?>" ></textarea>
				</div>
				</div>				
				<!----------------------------
					Building Envelope
				---------------------------->
				<div class="tab-pane fade" id="building-pills">
                                	
				<h4>Building Envelope</h4>

				<div class='form-group'><label>Building Envelope:</label>
				<select class="form-control" name="ddlBuildingEnvelope" >
				<option value="none" disabled selected >Building Envelope?</option>
				<option value="1" <?php if ($booBuildingEnvelope === 1) echo 'selected="selected"'; ?> >Yes</option>
				<option value="0" <?php if ($booBuildingEnvelope === 0) echo 'selected="selected"'; ?> >No</option>
				</select>
				</div>

				<div class='form-group'><label>Foundation Type:</label>
				<select class="form-control" name="ddlFoundation">
				<option value="none" disabled selected>Foundation Type?</option>
				<option value="Slab" <?php if ($strFoundationType === "Slab") echo 'selected="selected"'; ?> >Slab</option>
				<option value="Pier" <?php if ($strFoundationType === "pier") echo 'selected="selected"'; ?> >Pier</option>
				</select>
				</div>

				<div class='form-group'><label>Living Area Difficulty:</label>
				<select class="form-control" name="ddlLivingDifficulty">
				<option value="none" disabled selected>Living Area Difficulty?</option>
				<option value="Normal" <?php if ($strLivingDifficulty === "Normal") echo 'selected="selected"'; ?> >Normal</option>
				<option value="Some Restriction" <?php if ($strLivingDifficulty === "Some Restriction") echo 'selected="selected"'; ?> >Some Restriction</option>
				<option value="Difficult" <?php if ($strLivingDifficulty === "Difficult") echo 'selected="selected"'; ?> >Small/Difficult to Maneuver</option>
				</select>
				</div>

				<div class='form-group'><label>Leakiness:</label>
				<select class="form-control" name="ddlLivingLeakiness">
				<option value="none" disabled selected>Leakiness?</option>
				<option value="Normal" <?php if ($strLeakiness === "Normal") echo 'selected="selected"'; ?> >Normal</option>
				<option value="Some" <?php if ($strLeakiness === "Some") echo 'selected="selected"'; ?> >Some Leaks</option>
				<option value="Many" <?php if ($strLeakiness === "Many") echo 'selected="selected"'; ?> >Many Leaks</option>
				</select>
				</div>

				<div class='form-group'><label>Attic Difficulty:</label>
				<select class="form-control" name="ddlAtticDifficulty">
				<option value="none" disabled selected>Attic Difficulty?</option>
				<option value="Normal" <?php if ($strAtticDifficulty === "Normal") echo 'selected="selected"'; ?> >Normal</option>
				<option value="Some Restriction" <?php if ($strAtticDifficulty === "Some Restriction") echo 'selected="selected"'; ?> >Some Restriction</option>
				<option value="Difficult" <?php if ($strAtticDifficulty === "Difficult") echo 'selected="selected"'; ?> >Small/Difficult to Maneuver</option>
				</select>
				</div>

				<div class='form-group'><label>Number of Doors:</label>
				<input class="form-control" type="number" name="txtDoors" placeholder="Number of Doors" min="0" step="1" value="<?php echo $intNumberDoors ?>" >
				</div>

				<div class='form-group'><label>Number of Jambs/Sweeps:</label>
				<input class="form-control" type="number" name="txtJambsSweeps" placeholder="Number of Jambs/Sweeps" min="0" step="1" value="<?php echo $intNumberJambsSweeps ?>" >
				</div>

				<div class='form-group'><label>Number of Baths:</label>
				<input class="form-control" type="number" name="txtBaths" placeholder="Number of Baths" min="0" step="1" value="<?php echo $intNumberBaths ?>" >
				</div>

				<div class='form-group'>
				<label>Add Ons Needed?</label><br/>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkSmokeDetectors" value="1" <?php if ($booBuildingEnvelope === 1) echo 'checked="checked"'; ?> >Smoke Detectors
				</label>


				<label class="checkbox-inline">
				<input type="checkbox" name="chkCODetectors" value="1" <?php if ($booBuildingEnvelope === 1) echo 'checked="checked"'; ?> >CO Detectors
				</label>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkSmokeCOCombo" value="1" <?php if ($booBuildingEnvelope === 1) echo 'checked="checked"'; ?> >Smoke/CO Combo
				</label>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkFireplaceBalloons" value="1" <?php if ($booBuildingEnvelope === 1) echo 'checked="checked"'; ?> >Fireplace Balloons
				</label>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkLowFlowShower" value="1" <?php if ($booBuildingEnvelope === 1) echo 'checked="checked"'; ?> >Low Flow Showerhead
				</label>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkKitchenAerator" value="1" <?php if ($booBuildingEnvelope === 1) echo 'checked="checked"'; ?> >Kitchen Aerator
				</label>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkBathAerator" value="1" <?php if ($booBuildingEnvelope === 1) echo 'checked="checked"'; ?> >Bath Aerator
				</label>
				</div>

				<div class='form-group'>
				<label>Notes</label><br/>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkMoveUnderSink" value="1" <?php if ($booBuildingEnvelope === 1) echo 'checked="checked"'; ?> >Move Items Under Sink
				</label>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkMoveAttic" value="1" <?php if ($booBuildingEnvelope === 1) echo 'checked="checked"'; ?> >Move Attic Items
				</label>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkCFL" value="1" <?php if ($booBuildingEnvelope === 1) echo 'checked="checked"'; ?> >CFL's
				</label>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkPowerStrips" value="1" <?php if ($booBuildingEnvelope === 1) echo 'checked="checked"'; ?> >Power Strips
				</label>
				</div>

				<div class='form-group'><label>Other Notes:</label>
				<input class="form-control" type="textarea" name="txtBuildingNotes" placeholder="Other Notes" maxlength="65000" value="<?php echo $strNotesBuilding ?>" >
				</div>
				
				</div>
                                
				<!----------------------------
					Ductwork
				---------------------------->
				<div class="tab-pane fade" id="ductwork-pills">
								
				<h4>Ductwork</h4>

				<div class='form-group'><label>Seal Ductwork:</label>
				<select class="form-control" name="ddlSealDuctwork" >
				<option value="none" disabled selected >Seal Ductwork?</option>
				<option value="1" <?php if ($booSealDuctwork === 1) echo 'selected="selected"'; ?> >Yes</option>
				<option value="0" <?php if ($booSealDuctwork === 0) echo 'selected="selected"'; ?> >No</option>
				</select>
				</div>

				<div class='form-group'><label>Replace Ductwork:</label>
				<select class="form-control" name="ddlReplaceDuctwork">
				<option value="none" disabled selected>Replace Ductwork?</option>
				<option value="1" <?php if ($booReplaceDuctwork === 1) echo 'selected="selected"'; ?> >Yes</option>
				<option value="0" <?php if ($booReplaceDuctwork === 0) echo 'selected="selected"'; ?> >No</option>
				</select>
				</div>

				<div class='form-group'><label>Duct Type:</label>
				<select class="form-control" name="ddlDuctType">
				<option value="none" disabled selected>Duct Type?</option>
				<option value="Duct Board" <?php if ($strDuctType === "Duct Board") echo 'selected="selected"'; ?> >Duct Board</option>
				<option value="Grey Flex" <?php if ($strDuctType === "Grey Flex") echo 'selected="selected"'; ?> >Grey Flex</option>
				<option value="Silver Flex" <?php if ($strDuctType === "Silver Flex") echo 'selected="selected"'; ?> >Silver Flex</option>
				<option value="Metal" <?php if ($strDuctType === "Metal") echo 'selected="selected"'; ?> >Metal</option>
				</select>
				</div>

				<div class='form-group'><label>Duct Location:</label>
				<select class="form-control" name="ddlDuctLocation">
				<option value="none" disabled selected>Duct Location?</option>
				<option value="Attic" <?php if ($strDuctLocation === "Attic") echo 'selected="selected"'; ?> >Attic</option>
				<option value="Crawlspace" <?php if ($strDuctLocation === "Crawlspace") echo 'selected="selected"'; ?> >Crawlspace</option>
				<option value="Furrdowns" <?php if ($strDuctLocation === "Furrdowns") echo 'selected="selected"'; ?> >Furrdowns</option>
				</select>
				</div>

				<div class='form-group'><label>Duct Condition:</label>
				<select class="form-control" name="ddlDuctCondition">
				<option value="none" disabled selected>Duct Condition?</option>
				<option value="Poor" <?php if ($strDuctCondition === "Poor") echo 'selected="selected"'; ?> >Poor</option>
				<option value="Fair" <?php if ($strDuctCondition === "Fair") echo 'selected="selected"'; ?> >Fair</option>
				<option value="Good" <?php if ($strDuctCondition === "Good") echo 'selected="selected"'; ?> >Good</option>
				</select>
				</div>

				<div class='form-group'><label>Duct R-Val:</label>
				<select class="form-control" name="ddlDuctRval">
				<option value="none" disabled selected>Duct R-Val?</option>
				<option value="R-2" <?php if ($strDuctRVal === "R-2") echo 'selected="selected"'; ?> >R-2</option>
				<option value="R-4" <?php if ($strDuctRVal === "R-4") echo 'selected="selected"'; ?> >R-4</option>
				<option value="R-6" <?php if ($strDuctRVal === "R-6") echo 'selected="selected"'; ?> >R-6</option>
				<option value="R-8" <?php if ($strDuctRVal === "R-8") echo 'selected="selected"'; ?> >R-8</option>
				</select>
				</div>

				<div class='form-group'><label>Number of Supplies:</label>
				<input class="form-control" type="number" name="txtDuctworkSupplies" placeholder="Number of Supplies" min="0" step="1" value="<?php echo $intSuppliesDuctwork ?>" >
				</div>

				<div class='form-group'>
				<label>Add Ons Needed?</label><br/>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkCombustionAir" value="1" <?php if ($booCombustionAir === 1) echo 'checked="checked"'; ?> >Combustion Air
				</label>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkRegisters" value="1" <?php if ($booRegisters === 1) echo 'checked="checked"'; ?> >Registers
				</label>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkFilters" value="1" <?php if ($booFilters === 1) echo 'checked="checked"'; ?> >Filters
				</label>
				</div>

				<div class='form-group'>
				<label>Other Notes</label><br>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkCleanReturn" value="1" <?php if ($booCleanSealReturn === 1) echo 'checked="checked"'; ?> >Clean/Seal Return
				</label>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkCleanRegister" value="1" <?php if ($booCleanSealRegister === 1) echo 'checked="checked"'; ?> >Clean/Seal Register
				</label>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkMoveAttic" value="1" <?php if ($booMoveAtticDuctwork === 1) echo 'checked="checked"'; ?> >Move Attic Items
				</label>
				</div>

				<div class='form-group'><label>Other Notes:</label>
				<input class="form-control" type="textarea" name="txtDuctworkNotes" placeholder="Other Notes" maxlength="65000" value="<?php echo $strNotesDuctwork ?>" >
				</div>

				</div>
								
				<!----------------------------
					Insulation
				---------------------------->
				<div class="tab-pane fade" id="insulation-pills">
                                

				<h4>Insulation</h4>

				<div class='form-group'><label>Insulation:</label>
				<select class="form-control"name="ddlInsulation" >
				<option value="none" disabled selected>Insulation?</option>
				<option value="1" <?php if ($booInsulation === 1) echo 'selected="selected"'; ?> >Yes</option>
				<option value="0" <?php if ($booInsulation === 0) echo 'selected="selected"'; ?> >No</option>
				</select>
				</div>

				<div class='form-group'><label>Type:</label>
				<select class="form-control"name="ddlInsulationType" >
				<option value="none" disabled selected>Insulation Type?</option>
				<option value="Fiberglass" <?php if ($strInsulationType === "Fiberglass") echo 'selected="selected"'; ?> >Fiberglass</option>
				<option value="Batts" <?php if ($strInsulationType === "Batts") echo 'selected="selected"'; ?> >Batts</option>
				<option value="Rockwool" <?php if ($strInsulationType === "Rockwool") echo 'selected="selected"'; ?> >Rockwool</option>
				<option value="Cellulose" <?php if ($strInsulationType === "Cellulose") echo 'selected="selected"'; ?> >Cellulose</option>
				</select>
				</div>

				<div class='form-group'><label>Attic SF:</label>
				<input class="form-control" type="number" name="txtAtticSF" placeholder="Attic SF" rmin="0" step="1" value="<?php echo $intAtticSF ?>" >
				</div>

				<div class='form-group'><label>Existing Depth:</label>
				<input class="form-control" type="number" name="txtInsulationDepth" placeholder="Existing Insulation Depth" rmin="0" step="1" value="<?php echo $intExistingDepth ?>" >
				</div>

				<div class='form-group'><label>Existing R:</label>
				<input class="form-control" type="number" name="txtExistingR" placeholder="Existing R-Val" rmin="0" step="1" value="<?php echo $strExistingRVal ?>" >
				</div>

				<div class='form-group'>
				<label>Add Ons Needed?</label><br/>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkCathedral" value="1" <?php if ($booCathedral === 1) echo 'checked="checked"'; ?> >Cathedral
				</label>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkKneeWalls" value="1" <?php if ($booKneeWall === 1) echo 'checked="checked"'; ?> >Knee Walls
				</label>

				<label class="checkbox-inline">
				<input type="checkbox" name="chkVault" value="1" <?php if ($booVault === 1) echo 'checked="checked"'; ?> >Vault
				</label>
				</div>

				
				<div class='form-group'><label>Other Notes:</label>
				<input class="form-control" type="textarea" name="txtInsulationNotes" placeholder="Other Notes" maxlength="65000" value="<?php echo $strNotesInsulation ?>" >
				</div>
				
				</div>
                                
				<!----------------------------
					Radiant Barrier
				---------------------------->
				<div class="tab-pane fade" id="radiant-pills">
				<h4>Radiant Barrier</h4>

				<div class='form-group'><label>Radiant Barrier:</label>
				<select class="form-control" name="ddlRadiantBarrier">
				<option value="none" disabled selected>Radiant Barrier?</option>
				<option value="1" <?php if ($booRadiantBarrier === 1) echo 'selected="selected"'; ?> >Yes</option>
				<option value="0" <?php if ($booRadiantBarrier === 0) echo 'selected="selected"'; ?> >No</option>
				</select>
				</div>

				<div class='form-group'><label>Pitch:</label>
				<input class="form-control" type="number" name="txtPitch" placeholder="Pitch?" min="0" step="1" value="<?php echo $intPitch ?>" >
				</div>

				<div class='form-group'><label>Other Notes:</label>
				<input class="form-control" type="textarea" name="txtRadiantNotes" placeholder="Other Notes" maxlength="65000" value="<?php echo $strNotesRadiantBarrier ?>" >
				</div>

				</div>
                                
				<!----------------------------
					HVAC 1
				---------------------------->
				<div class="tab-pane fade" id="HVAC1-pills">
                                

				<h4>HVAC 1</h4>

				<div class='form-group'><label>Tons:</label>
				<input class="form-control" type="number" name="txtHVAC1Tons" placeholder="Tons" min="0" step=".01" max="5" value="<?php echo $decTonsHVAC1 ?>" >
				</div>

				<div class='form-group'><label>Replace/Repair:</label>
				<select class="form-control" name="ddlHVAC1ReplaceRepair">
				<option value="none" disabled selected>Replace/Repair?</option>
				<option value="N/A" <?php if ($strReplaceRepairHVAC1 === "N/A") echo 'selected="selected"'; ?> >N/A</option>
				<option value="Repair" <?php if ($strReplaceRepairHVAC1 === "Repair") echo 'selected="selected"'; ?> >Repair</option>
				<option value="Replace" <?php if ($strReplaceRepairHVAC1 === "Replace") echo 'selected="selected"'; ?> >Replace</option>
				</select>
				</div>

				<div class='form-group'><label>Age:</label>
				<input class="form-control" type="number" name="txtHVAC1Age" placeholder="Age?" min="0" step="1" value="<?php echo $intAgeHVAC1 ?>" >
				</div>

				<div class='form-group'><label>Number of Supplies:</label>
				<input class="form-control" type="number" name="txtHVAC1Supplies" placeholder="Number of Supplies?" min="0" step="1" value="<?php echo $intSuppliesHVAC1 ?>" >
				</div>

				<h4>Condenser</h4>

				<div class='form-group'><label>Serial Number:</label>
				<input class="form-control" type="text" name="txtHVAC1CondenserSerial" placeholder="HVAC 1 S/N" value="<?php echo $strCondenserSerialHVAC1 ?>" >
				</div>

				<div class='form-group'><label>Model:</label>
				<input class="form-control" type="text" name="txtHVAC1CondenserModel" placeholder="HVAC 1 Model" value="<?php echo $strCondenserModelHVAC1 ?>" >
				</div>

				<h4>Furn/Air H</h4>

				<div class='form-group'><label>Serial Number:</label>
				<input class="form-control" type="text" name="txtHVAC1FurnSerial" placeholder="HVAC 1 S/N" value="<?php echo $strFurnAirSerialHVAC1 ?>" >
				</div>

				<div class='form-group'><label>Model:</label>
				<input class="form-control" type="text" name="txtHVAC1FurnModel" placeholder="HVAC 1 Model" value="<?php echo $strFurnAirModelHVAC1 ?>" >
				</div>

				<h4>SEER</h4>

				<div class='form-group'><label>Cooling Type:</label>
				<select class="form-control" name="ddlHVAC1Cooling">
				<option value="none" disabled selected >Cooling Type?</option>
				<option value="Central AC" <?php if ($strCoolingTypeHVAC1 === "Central AC") echo 'selected="selected"'; ?> >Central AC</option>
				<option value="Window Unit" <?php if ($strCoolingTypeHVAC1 === "Window Unit") echo 'selected="selected"'; ?> >Window Unit</option>
				</select>
				</div>

				<div class='form-group'><label>Heating Type:</label>
				<select class="form-control" name="ddlHVAC1Heating">
				<option value="none" disabled selected >Heating Type?</option>
				<option value="Central Gas" <?php if ($strHeatingTypeHVAC1 === "Central Gas") echo 'selected="selected"'; ?> >Central Gas</option>
				<option value="Heat Pump" <?php if ($strHeatingTypeHVAC1 === "Heat Pump") echo 'selected="selected"'; ?> >Heat Pump</option>
				<option value="Water Heater" <?php if ($strHeatingTypeHVAC1 === "Water Heater") echo 'selected="selected"'; ?> >Water Heater</option>
				</select>
				</div>

				<div class='form-group'><label>Air Handler Location</label>
				<select class="form-control" name="ddlHVAC1AirHandler">
				<option value="none" disabled selected>Air Handler Location?</option>
				<option value="Attic" <?php if ($strHandlerLocationHVAC1 === "Attic") echo 'selected="selected"'; ?> >Attic</option>
				<option value="Cond Closet" <?php if ($strHandlerLocationHVAC1 === "Cond Closet") echo 'selected="selected"'; ?> >Cond Closet</option>
				<option value="Uncond Closet" <?php if ($strHandlerLocationHVAC1 === "Uncond Closet") echo 'selected="selected"'; ?> >Uncond Closet</option>
				</select>
				</div>

				<div class='form-group'><label>Thermostat Type:</label>
				<select class="form-control" name="ddlHVAC1Thermostat">
				<option value="none" disabled selected>Thermostat Type?</option>
				<option value="AE Programmable" <?php if ($strThermostatTypeHVAC1 === "AE Programmable") echo 'selected="selected"'; ?> >AE Programmable</option>
				<option value="Other Programmable" <?php if ($strThermostatTypeHVAC1 === "Other Porgrammable") echo 'selected="selected"'; ?> >Other Programmable</option>
				<option value="Not Programmable" <?php if ($strThermostatTypeHVAC1 === "Not Programmable") echo 'selected="selected"'; ?> >Not Programmable</option>
				</select>
				</div>

				<div class='form-group'><label>Number of Zones:</label>
				<select class="form-control" name="ddlHVAC1Zoned">
				<option value="none" disabled selected>Zones?</option>
				<option value="1" <?php if ($intZonesHVAC1 === 1) echo 'selected="selected"'; ?> >1</option>
				<option value="2" <?php if ($intZonesHVAC1 === 2) echo 'selected="selected"'; ?> >2</option>
				<option value="3" <?php if ($intZonesHVAC1 === 3) echo 'selected="selected"'; ?> >3</option>
				<option value="4" <?php if ($intZonesHVAC1 === 4) echo 'selected="selected"'; ?> >4</option>
				<option value="5" <?php if ($intZonesHVAC1 === 5) echo 'selected="selected"'; ?> >5</option>
				</select>
				</div>

				
				<div class='form-group'><label>Other Notes:</label>
				<input class="form-control" type="textarea" name="txtHVAC1Notes" placeholder="Other Notes" maxlength="65000" value="<?php echo $strNotesHVAC1 ?>" >
				</div>

				</div>
                                
				<!----------------------------
					HVAC 2
				---------------------------->
				<div class="tab-pane fade" id="HVAC2-pills">
                                

				<h4>HVAC 2</h4>

				<div class='form-group'><label>Tons:</label>
				<input class="form-control" type="number" name="txtHVAC2Tons" placeholder="Tons" min="0" step=".01" max="5" value="<?php echo $decTonsHVAC2 ?>" >
				</div>

				<div class='form-group'><label>Replace/Repair:</label>
				<select class="form-control" name="ddlHVAC2ReplaceRepair">
				<option value="none" disabled selected>Replace/Repair?</option>
				<option value="N/A" <?php if ($strReplaceRepairHVAC2 === "N/A") echo 'selected="selected"'; ?> >N/A</option>
				<option value="Repair" <?php if ($strReplaceRepairHVAC2 === "Repair") echo 'selected="selected"'; ?> >Repair</option>
				<option value="Replace" <?php if ($strReplaceRepairHVAC2 === "Replace") echo 'selected="selected"'; ?> >Replace</option>
				</select>
				</div>

				<div class='form-group'><label>Age:</label>
				<input class="form-control" type="number" name="txtHVAC2Age" placeholder="Age?" min="0" step="1" value="<?php echo $intAgeHVAC2 ?>" >
				</div>

				<div class='form-group'><label>Number of Supplies:</label>
				<input class="form-control" type="number" name="txtHVAC2Supplies" placeholder="Number of Supplies?" min="0" step="1" value="<?php echo $intSuppliesHVAC2 ?>" >
				</div>

				<h4>Condenser</h4>

				<div class='form-group'><label>Serial Number:</label>
				<input class="form-control" type="text" name="txtHVAC2CondenserSerial" placeholder="HVAC 2 S/N" value="<?php echo $strCondenserSerialHVAC2 ?>" >
				</div>

				<div class='form-group'><label>Model:</label>
				<input class="form-control" type="text" name="txtHVAC2CondenserModel" placeholder="HVAC 2 Model" value="<?php echo $strCondenserModelHVAC2 ?>" >
				</div>

				<h4>Furn/Air H</h4>

				<div class='form-group'><label>Serial Number:</label>
				<input class="form-control" type="text" name="txtHVAC2FurnSerial" placeholder="HVAC 2 S/N" value="<?php echo $strFurnAirSerialHVAC2 ?>" >
				</div>

				<div class='form-group'><label>Model:</label>
				<input class="form-control" type="text" name="txtHVAC2FurnModel" placeholder="HVAC 2 Model" value="<?php echo $strFurnAirModelHVAC2 ?>" >
				</div>

				<h4>SEER</h4>

				<div class='form-group'><label>Cooling Type:</label>
				<select class="form-control" name="ddlHVAC2Cooling">
				<option value="none" disabled selected >Cooling Type?</option>
				<option value="Central AC" <?php if ($strCoolingTypeHVAC2 === "Central AC") echo 'selected="selected"'; ?> >Central AC</option>
				<option value="Window Unit" <?php if ($strCoolingTypeHVAC2 === "Window Unit") echo 'selected="selected"'; ?> >Window Unit</option>
				</select>
				</div>

				<div class='form-group'><label>Heating Type:</label>
				<select class="form-control" name="ddlHVAC2Heating">
				<option value="none" disabled selected >Heating Type?</option>
				<option value="Central Gas" <?php if ($strHeatingTypeHVAC2 === "Central Gas") echo 'selected="selected"'; ?> >Central Gas</option>
				<option value="Heat Pump" <?php if ($strHeatingTypeHVAC2 === "Heat Pump") echo 'selected="selected"'; ?> >Heat Pump</option>
				<option value="Water Heater" <?php if ($strHeatingTypeHVAC2 === "Water Heater") echo 'selected="selected"'; ?> >Water Heater</option>
				</select>
				</div>

				<div class='form-group'><label>Air Handler Location</label>
				<select class="form-control" name="ddlHVAC2AirHandler">
				<option value="none" disabled selected>Air Handler Location?</option>
				<option value="Attic" <?php if ($strHandlerLocationHVAC2 === "Attic") echo 'selected="selected"'; ?> >Attic</option>
				<option value="Cond Closet" <?php if ($strHandlerLocationHVAC2 === "Cond Closet") echo 'selected="selected"'; ?> >Cond Closet</option>
				<option value="Uncond Closet" <?php if ($strHandlerLocationHVAC2 === "Uncond Closet") echo 'selected="selected"'; ?> >Uncond Closet</option>
				</select>
				</div>

				<div class='form-group'><label>Thermostat Type:</label>
				<select class="form-control" name="ddlHVAC2Thermostat">
				<option value="none" disabled selected>Thermostat Type?</option>
				<option value="AE Programmable" <?php if ($strThermostatTypeHVAC2 === "AE Programmable") echo 'selected="selected"'; ?> >AE Programmable</option>
				<option value="Other Programmable" <?php if ($strThermostatTypeHVAC2 === "Other Porgrammable") echo 'selected="selected"'; ?> >Other Programmable</option>
				<option value="Not Programmable" <?php if ($strThermostatTypeHVAC2 === "Not Programmable") echo 'selected="selected"'; ?> >Not Programmable</option>
				</select>
				</div>

				<div class='form-group'><label>Number of Zones:</label>
				<select class="form-control" name="ddlHVAC2Zoned">
				<option value="none" disabled selected>Zones?</option>
				<option value="1" <?php if ($intZonesHVAC2 === 1) echo 'selected="selected"'; ?> >1</option>
				<option value="2" <?php if ($intZonesHVAC2 === 2) echo 'selected="selected"'; ?> >2</option>
				<option value="3" <?php if ($intZonesHVAC2 === 3) echo 'selected="selected"'; ?> >3</option>
				<option value="4" <?php if ($intZonesHVAC2 === 4) echo 'selected="selected"'; ?> >4</option>
				<option value="5" <?php if ($intZonesHVAC2 === 5) echo 'selected="selected"'; ?> >5</option>
				</select>
				</div>

				
				<div class='form-group'><label>Other Notes:</label>
				<input class="form-control" type="textarea" name="txtHVAC2Notes" placeholder="Other Notes" maxlength="65000" value="<?php echo $strNotesHVAC2 ?>" >
				</div>

				</div>
            </div>
        </div>
        <!-- /.panel-body -->
                        
        <div class="panel-footer">
            <input class="btn btn-default" type="Submit" name="btnSubmitAudit" value="Submit Client Audit" />
			</form>
        </div>
                    
    </div>
     <!-- /.panel -->
</div>
<!-- /.col-lg-6 -->
            
            <!--include footer-->
<?php include 'includes/footer.php';?>