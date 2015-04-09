<?php
session_start();


// Get all inputs from form
$intClientID = $_SESSION["seshClientID"];
$intFirstFloorSF = $_POST["txtFirstSF"];
$intSecondFloorSF = $_POST["txtSecondSF"];
$intAtticSF = $_POST["txtAtticSF"];
$intTotalSF = $_POST["txtTotalSF"];
$intCeilingHeight = $_POST["txtCeilingHeight"];

$booBuildingEnvelope = $_POST["ddlBuildingEnvelope"];
$strFoundationType = $_POST["ddlFoundation"];
$strLivingDifficulty = $_POST["ddlLivingDifficulty"];
$strLeakiness = $_POST["ddlLivingLeakiness"];
$strAtticDifficulty = $_POST["ddlAtticDifficulty"];
$intNumberDoors = $_POST["txtDoors"];
$intNumberJambsSweeps = $_POST["txtJambsSweeps"];
$intNumberBaths = $_POST["txtBaths"];
$booSmokeDetectors = $_POST["chkSmokeDetectors"];
$booCoDetectors = $_POST["chkCODetectors"];
$booSmokeCoCombo = $_POST["chkSmokeCOCombo"];
$booFireplaceBalloons = $_POST["chkFireplaceBalloons"];
$booMoveUnderSink = $_POST["chkMoveUnderSink"];
$booMoveAtticItems = $_POST["chkMoveAttic"];
$booCFLs = $_POST["chkCFL"];
$booPowerStrip = $_POST["chkPowerStrips"];
$booLowFlowShower = $_POST["chkLowFlowShower"];
$booKitchenAerator = $_POST["chkKitchenAerator"];
$booBathAerator = $_POST["chkBathAerator"];

$booSealDuct = $_POST["ddlSealDuctwork"];
$booReplaceDuct = $_POST["ddlReplaceDuctwork"];
$strDuctType = $_POST["ddlDuctType"];
$strDuctLocation = $_POST["ddlDuctLocation"];
$strDuctCondition = $_POST["ddlDuctCondition"];
$strDuctRVal = $_POST["ddlDuctRval"];
$intDuctSupplies = $_POST["txtDuctworkSupplies"];
$booCleanSealReturn = $_POST["chkCleanReturn"];
$booCleanSealRegister = $_POST["chkCleanRegister"];
$booCombustionAir = $_POST["chkCombustionAir"];
$booDuctMoveAttic = $_POST["chkMoveAttic"];
$booDuctRegisters = $_POST["chkRegisters"];
$booDuctFilters = $_POST["chkFilters"];

$booInsulation = $_POST["ddlInsulation"];
$strInsulationType = $_POST["ddlInsulationType"];
$intInsulationAtticSF = $_POST["txtAtticSF"];
$intInsulationExistingDepth = $_POST["txtInsulationDepth"];
$intInsulationExistingRVal = $_POST["txtExistingR"];
$booCathedral = $_POST["chkCathedral"];
$booKneeWalls = $_POST["chkKneeWalls"];
$booVault = $_POST["chkVault"];

$booRadiantBarrier = $_POST["ddlRadiantBarrier"];
$intPitch = $_POST["txtPitch"];

$decHVAC1Tons = $_POST["txtHVAC1Tons"];
$strHVAC1ReplaceRepair = $_POST["ddlHVAC1ReplaceRepair"];
$intHVAC1Age = $_POST["txtHVAC1Age"];
$intHVAC1NumberSupplies = $_POST["txtHVAC1Supplies"];
$strHVAC1CondenserSN = $_POST["txtHVAC1CondenserSerial"];
$strHVAC1CondenserModel = $_POST["txtHVAC1CondenserModel"];
$strHVAC1FurnSN = $_POST["txtHVAC1FurnSerial"];
$strHVAC1FurnModel = $_POST["txtHVAC1FurnModel"];
$strHVAC1CoolingType = $_POST["ddlHVAC1Cooling"];
$strHVAC1HeatingType = $_POST["ddlHVAC1Heating"];
$strHVAC1HandlerLocation = $_POST["ddlHVAC1AirHandler"];
$strHVAC1ThermostatType = $_POST["ddlHVAC1Thermostat"];
$intHVAC1Zones = $_POST["ddlHVAC1Zoned"];

$decHVAC2Tons = $_POST["txtHVAC2Tons"];
$strHVAC2ReplaceRepair = $_POST["ddlHVAC2ReplaceRepair"];
$intHVAC2Age = $_POST["txtHVAC2Age"];
$intHVAC2NumberSupplies = $_POST["txtHVAC2Supplies"];
$strHVAC2CondenserSN = $_POST["txtHVAC2CondenserSerial"];
$strHVAC2CondenserModel = $_POST["txtHVAC2CondenserModel"];
$strHVAC2FurnSN = $_POST["txtHVAC2FurnSerial"];
$strHVAC2FurnModel = $_POST["txtHVAC2FurnModel"];
$strHVAC2CoolingType = $_POST["ddlHVAC2Cooling"];
$strHVAC2HeatingType = $_POST["ddlHVAC2Heating"];
$strHVAC2HandlerLocation = $_POST["ddlHVAC2AirHandler"];
$strHVAC2ThermostatType = $_POST["ddlHVAC2Thermostat"];
$intHVAC2Zones = $_POST["ddlHVAC2Zoned"];


// Send to database
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbGreenSquads";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CALL spSubmitAudit(
    '".$intClientID."',
'".$intFirstFloorSF."',
'".$intSecondFloorSF."',
'".$intAtticSF."',
'".$intTotalSF."',
'".$intCeilingHeight."',
'".$booBuildingEnvelope."',
'".$strFoundationType."',
'".$strLivingDifficulty."',
'".$strLeakiness."',
'".$strAtticDifficulty."',
'".$intNumberDoors."',
'".$intNumberJambsSweeps."',
'".$intNumberBaths."',
'".$booSmokeDetectors."',
'".$booCoDetectors."',
'".$booSmokeCoCombo."',
'".$booFireplaceBalloons."',
'".$booMoveUnderSink."',
'".$booMoveAtticItems."',
'".$booCFLs."',
'".$booPowerStrip."',
'".$booLowFlowShower."',
'".$booKitchenAerator."',
'".$booBathAerator."',
'".$booSealDuct."',
'".$booReplaceDuct."',
'".$strDuctType."',
'".$strDuctLocation."',
'".$strDuctCondition."',
'".$strDuctRVal."',
'".$intDuctSupplies."',
'".$booCleanSealReturn."',
'".$booCleanSealRegister."',
'".$booCombustionAir."',
'".$booDuctMoveAttic."',
'".$booDuctRegisters."',
'".$booDuctFilters."',
'".$booInsulation."',
'".$strInsulationType."',
'".$intInsulationAtticSF."',
'".$intInsulationExistingDepth."',
'".$intInsulationExistingRVal."',
'".$booCathedral."',
'".$booKneeWalls."',
'".$booVault."',
'".$booRadiantBarrier."',
'".$intPitch."',
'".$decHVAC1Tons."',
'".$strHVAC1ReplaceRepair."',
'".$intHVAC1Age."',
'".$intHVAC1NumberSupplies."',
'".$strHVAC1CondenserSN."',
'".$strHVAC1CondenserModel."',
'".$strHVAC1FurnSN."',
'".$strHVAC1FurnModel."',
'".$strHVAC1CoolingType."',
'".$strHVAC1HeatingType."',
'".$strHVAC1HandlerLocation."',
'".$strHVAC1ThermostatType."',
'".$intHVAC1Zones."',
'".$decHVAC2Tons."',
'".$strHVAC2ReplaceRepair."',
'".$intHVAC2Age."',
'".$intHVAC2NumberSupplies."',
'".$strHVAC2CondenserSN."',
'".$strHVAC2CondenserModel."',
'".$strHVAC2FurnSN."',
'".$strHVAC2FurnModel."',
'".$strHVAC2CoolingType."',
'".$strHVAC2HeatingType."',
'".$strHVAC2HandlerLocation."',
'".$strHVAC2ThermostatType."',
'".$intHVAC2Zones."',
    )";

if ($conn->query($sql) === TRUE) {
    header('location: AuditSuccess.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();




?>