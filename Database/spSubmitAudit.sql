DELIMITER //

CREATE PROCEDURE `spSubmitAudit`(IN `intClientID` INT(11), IN `intFirstFloorSF` INT(11), IN `intSecondFloorSF` INT(11), IN `intAtticSF` INT(11), IN `intTotalSF` INT(11), IN `intCeilingHeight` INT(11), IN `booBuildingEnvelope` TINYINT(1), IN `strFoundationType` VARCHAR(50), IN `strLivingDifficulty` VARCHAR(50), IN `strLeakiness` VARCHAR(50), IN `strAtticDifficulty` VARCHAR(50), IN `intNumberDoors` INT(11), IN `intNumberJambsSweeps` INT(11), IN `intNumberBaths` INT(11), IN `booSmokeDetectors` TINYINT(1), IN `booCoDetectors` TINYINT(1), IN `booSmokeCoCombo` TINYINT(1), IN `booFireplaceBalloons` TINYINT(1), IN `booMoveUnderSink` TINYINT(1), IN `booMoveAtticItems` TINYINT(1), IN `booCFLs` TINYINT(1), IN `booPowerStrip` TINYINT(1), IN `booLowFlowShower` TINYINT(1), IN `booKitchenAerator` TINYINT(1), IN `booBathAerator` TINYINT(1), IN `booSealDuct` TINYINT(1), IN `booReplaceDuct` TINYINT(1), IN `strDuctType` VARCHAR(25), IN `strDuctLocation` VARCHAR(25), IN `strDuctCondition` VARCHAR(25), IN `strDuctRVal` VARCHAR(25), IN `intDuctSupplies` INT(11), IN `booCleanSealReturn` TINYINT(1), IN `booCleanSealRegister` TINYINT(1), IN `booCombustionAir` TINYINT(1), IN `booDuctMoveAttic` TINYINT(1), IN `booDuctRegisters` TINYINT(1), IN `booDuctFilters` TINYINT(1), IN `booInsulation` TINYINT(1), IN `strInsulationType` VARCHAR(25), IN `intInsulationAtticSF` INT(11), IN `intInsulationExistingDepth` INT(11), IN `intInsulationExistingRVal` INT(11), IN `booCathedral` TINYINT(1), IN `booKneeWalls` TINYINT(1), IN `booVault` TINYINT(1), IN `booRadiantBarrier` TINYINT(1), IN `intPitch` INT(11), IN `decHVAC1Tons` DECIMAL(10,0), IN `strHVAC1ReplaceRepair` VARCHAR(25), IN `intHVAC1Age` INT(11), IN `intHVAC1NumberSupplies` INT(11), IN `strHVAC1CondenserSN` VARCHAR(50), IN `strHVAC1CondenserModel` VARCHAR(100), IN `strHVAC1FurnSN` VARCHAR(50), IN `strHVAC1FurnModel` VARCHAR(100), IN `strHVAC1CoolingType` VARCHAR(50), IN `strHVAC1HeatingType` VARCHAR(50), IN `strHVAC1HandlerLocation` VARCHAR(50), IN `strHVAC1ThermostatType` VARCHAR(50), IN `intHVAC1Zones` INT(11), IN `decHVAC2Tons` DECIMAL(10,0), IN `strHVAC2ReplaceRepair` VARCHAR(25), IN `intHVAC2Age` INT(11), IN `intHVAC2NumberSupplies` INT(11), IN `strHVAC2CondenserSN` VARCHAR(50), IN `strHVAC2CondenserModel` VARCHAR(100), IN `strHVAC2FurnSN` VARCHAR(50), IN `strHVAC2FurnModel` VARCHAR(100), IN `strHVAC2CoolingType` VARCHAR(50), IN `strHVAC2HeatingType` VARCHAR(50), IN `strHVAC2HandlerLocation` VARCHAR(50), IN `strHVAC2ThermostatType` VARCHAR(50), IN `intHVAC2Zones` INT(11))
BEGIN
		UPDATE tblScheduledAudits, tblAudit
		SET tblScheduledAudits.Status = 'Completed',
			FirstFloorSF = intFirstFloorSF,
			SecondFloorSF = intSecondFloorSF,
			AtticSF = intAtticSF,
			TotalSF = intTotalSF,
			CeilingHeight = intCeilingHeight,
			BuildingEnvelope = booBuildingEnvelope,
			FoundationType = strFoundationType,
			LivingDifficulty = strLivingDifficulty,
			Leakiness = strLeakiness,
			AtticDifficulty = strAtticDifficulty,
			NumberDoors = intNumberDoors,
			NumberJambsSweeps = intNumberJambsSweeps,
			NumberBaths = intNumberBaths,
			SmokeDetectors = booSmokeDetectors,
			CoDetectors = booCoDetectors,
			SmokeCoCombo = booSmokeCoCombo,
			FireplaceBalloons = booFireplaceBalloons,
			MoveUnderSink = booMoveUnderSink,
			MoveAtticItems = booMoveAtticItems,
			CFLs = booCFLs,
			PowerStrip = booPowerStrip,
			LowFlowShower = booLowFlowShower,
			KitchenAerator = booKitchenAerator,
			BathAerator = booBathAerator,
			SealDuct = booSealDuct,
			ReplaceDuct = booReplaceDuct,
			DuctType = strDuctType,
			DuctLocation = strDuctLocation,
			DuctCondition = strDuctCondition,
			DuctRVal = strDuctRVal,
			DuctSupplies = intDuctSupplies,
			CleanSealReturn = booCleanSealReturn,
			CleanSealRegister = booCleanSealRegister,
			CombustionAir = booCombustionAir,
			DuctMoveAttic = booDuctMoveAttic,
			DuctRegisters = booDuctRegisters,
			DuctFilters = booDuctFilters,
			Insulation = booInsulation,
			InsulationType = strInsulationType,
			InsulationAtticSF = intInsulationAtticSF,
			InsulationExistingDepth = intInsulationExistingDepth,
			InsulationExistingRVal = intInsulationExistingRVal,
			Cathedral = booCathedral,
			KneeWalls = booKneeWalls,
			Vault = booVault,
			RadiantBarrier = booRadiantBarrier,
			Pitch = intPitch,
			HVAC1Tons = decHVAC1Tons,
			HVAC1ReplaceRepair = strHVAC1ReplaceRepair,
			HVAC1Age = intHVAC1Age,
			HVAC1NumberSupplies = intHVAC1NumberSupplies,
			HVAC1CondenserSN = strHVAC1CondenserSN,
			HVAC1CondenserModel = strHVAC1CondenserModel,
			HVAC1FurnSN = strHVAC1FurnSN,
			HVAC1FurnModel = strHVAC1FurnModel,
			HVAC1CoolingType = strHVAC1CoolingType,
			HVAC1HeatingType = strHVAC1HeatingType,
			HVAC1HandlerLocation = strHVAC1HandlerLocation,
			HVAC1ThermostatType = strHVAC1ThermostatType,
			HVAC1Zones = intHVAC1Zones,
			HVAC2Tons = decHVAC2Tons,
			HVAC2ReplaceRepair = strHVAC2ReplaceRepair,
			HVAC2Age = intHVAC2Age,
			HVAC2NumberSupplies = intHVAC2NumberSupplies,
			HVAC2CondenserSN = strHVAC2CondenserSN,
			HVAC2CondenserModel = strHVAC2CondenserModel,
			HVAC2FurnSN = strHVAC2FurnSN,
			HVAC2FurnModel = strHVAC2FurnModel,
			HVAC2CoolingType = strHVAC2CoolingType,
			HVAC2HeatingType = strHVAC2HeatingType,
			HVAC2HandlerLocation = strHVAC2HandlerLocation,
			HVAC2ThermostatType = strHVAC2ThermostatType,
			HVAC2Zones = intHVAC2Zones
		WHERE tblScheduledAudits.ClientID = tblAudit.ClientID and tblAudit.ClientID = intClientID;
	END//

DELIMITER ;
