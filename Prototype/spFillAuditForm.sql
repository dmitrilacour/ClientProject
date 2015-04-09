DELIMITER //

CREATE PROCEDURE spGetAuditDetails(
    IN intClientID int(11)
    )

	BEGIN
		SELECT tblAudit.AuditID, AuditDate, CONCAT(FirstName, ' ', LastName) AS Client, CONCAT(Street, ' ', City, ', ', State, ' ', Zip) AS Address, Auditor, Status, FirstFloorSF, SecondFloorSF, AtticSF, TotalSF, CeilingHeight, BuildingEnvelope, FoundationType, LivingDifficulty, Leakiness, AtticDifficulty, NumberDoors, NumberJambsSweeps, NumberBaths, SmokeDetectors, CoDetectors, SmokeCoCombo, FireplaceBalloons, MoveUnderSink, MoveAtticItems, CFLs, PowerStrip, LowFlowShower, KitchenAerator, BathAerator, SealDuct, ReplaceDuct, DuctType, DuctLocation, DuctCondition, DuctRVal, DuctSupplies, CleanSealReturn, CleanSealRegister, CombustionAir, DuctMoveAttic, DuctRegisters, DuctFilters, Insulation, InsulationType, InsulationAtticSF, InsulationExistingDepth, InsulationExistingRVal, Cathedral, KneeWalls, Vault, RadiantBarrier, Pitch, HVAC1Tons, HVAC1ReplaceRepair, HVAC1Age, HVAC1NumberSupplies, HVAC1CondenserSN, HVAC1CondenserModel, HVAC1FurnSN, HVAC1FurnModel, HVAC1CoolingType, HVAC1HeatingType, HVAC1HandlerLocation, HVAC1ThermostatType, HVAC1Zones, HVAC2Tons, HVAC2ReplaceRepair, HVAC2Age, HVAC2NumberSupplies, HVAC2CondenserSN, HVAC2CondenserModel, HVAC2FurnSN, HVAC2FurnModel, HVAC2CoolingType, HVAC2HeatingType, HVAC2HandlerLocation, HVAC2ThermostatType, HVAC2Zones FROM `tblClientProfile` JOIN `tblScheduledAudits` ON tblClientProfile.ClientID = tblScheduledAudits.ClientID JOIN tblAudit ON tblScheduledAudits.AuditID = tblAudit.AuditID WHERE tblClientProfile.ClientID = intClientID;
	END
//

DELIMITER ;