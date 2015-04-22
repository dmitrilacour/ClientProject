-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2015 at 12:15 AM
-- Server version: 5.5.41-log
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbgreensquads`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaudit`
--

CREATE TABLE IF NOT EXISTS `tblaudit` (
  `AuditID` int(11) NOT NULL,
  `ClientID` int(11) NOT NULL,
  `FirstFloorSF` int(11) DEFAULT NULL,
  `SecondFloorSF` int(11) DEFAULT NULL,
  `AtticSF` int(11) DEFAULT NULL,
  `TotalSF` int(11) DEFAULT NULL,
  `YearBuilt` int(4) DEFAULT NULL,
  `CeilingHeight` int(11) DEFAULT NULL,
  `HearGGS` text,
  `Comfort` tinyint(1) DEFAULT NULL,
  `InsulationInterest` tinyint(1) DEFAULT NULL,
  `SolarScreens` tinyint(1) DEFAULT NULL,
  `AirQuality` tinyint(1) DEFAULT NULL,
  `DuctSealing` tinyint(1) DEFAULT NULL,
  `RadBarrier` tinyint(1) DEFAULT NULL,
  `SaveMoney` tinyint(1) DEFAULT NULL,
  `HVAC` tinyint(1) DEFAULT NULL,
  `Environment` tinyint(1) DEFAULT NULL,
  `Other` tinyint(1) DEFAULT NULL,
  `Goals` text,
  `Concerns` text,
  `Change1` text,
  `Change2` text,
  `Summer` int(4) DEFAULT NULL,
  `Winter` int(4) DEFAULT NULL,
  `Occupy` int(11) DEFAULT NULL,
  `Rooms` tinyint(1) DEFAULT NULL,
  `Schedule` tinyint(1) DEFAULT NULL,
  `Budget` text,
  `Financing` tinyint(1) DEFAULT NULL,
  `OtherComments` text,
  `BuildingEnvelope` tinyint(1) DEFAULT NULL,
  `FoundationType` varchar(50) DEFAULT NULL,
  `LivingDifficulty` varchar(50) DEFAULT NULL,
  `Leakiness` varchar(50) DEFAULT NULL,
  `AtticDifficulty` varchar(50) DEFAULT NULL,
  `NumberDoors` int(11) DEFAULT NULL,
  `NumberJambsSweeps` int(11) DEFAULT NULL,
  `NumberBaths` int(11) DEFAULT NULL,
  `SmokeDetectors` tinyint(1) DEFAULT NULL,
  `CoDetectors` tinyint(1) DEFAULT NULL,
  `SmokeCoCombo` tinyint(1) DEFAULT NULL,
  `FireplaceBalloons` tinyint(1) DEFAULT NULL,
  `MoveUnderSink` tinyint(1) DEFAULT NULL,
  `MoveAtticItems` tinyint(1) DEFAULT NULL,
  `CFLs` tinyint(1) DEFAULT NULL,
  `PowerStrip` tinyint(1) DEFAULT NULL,
  `LowFlowShower` tinyint(1) DEFAULT NULL,
  `KitchenAerator` tinyint(1) DEFAULT NULL,
  `BathAerator` tinyint(1) DEFAULT NULL,
  `BuildingNotes` text,
  `SealDuct` tinyint(1) DEFAULT NULL,
  `ReplaceDuct` tinyint(1) DEFAULT NULL,
  `DuctType` varchar(25) DEFAULT NULL,
  `DuctLocation` varchar(25) DEFAULT NULL,
  `DuctCondition` varchar(25) DEFAULT NULL,
  `DuctRVal` varchar(25) DEFAULT NULL,
  `DuctSupplies` int(11) DEFAULT NULL,
  `CleanSealReturn` tinyint(1) DEFAULT NULL,
  `CleanSealRegister` tinyint(1) DEFAULT NULL,
  `CombustionAir` tinyint(1) DEFAULT NULL,
  `DuctMoveAttic` tinyint(1) DEFAULT NULL,
  `DuctRegisters` tinyint(1) DEFAULT NULL,
  `DuctFilters` tinyint(1) DEFAULT NULL,
  `DuctworkNotes` text,
  `Insulation` tinyint(1) DEFAULT NULL,
  `InsulationType` varchar(25) DEFAULT NULL,
  `InsulationAtticSF` int(11) DEFAULT NULL,
  `InsulationExistingDepth` int(11) DEFAULT NULL,
  `InsulationExistingRVal` int(11) DEFAULT NULL,
  `Cathedral` tinyint(1) DEFAULT NULL,
  `KneeWalls` tinyint(1) DEFAULT NULL,
  `Vault` tinyint(1) DEFAULT NULL,
  `InsulationNotes` text,
  `RadiantBarrier` tinyint(1) DEFAULT NULL,
  `Pitch` int(11) DEFAULT NULL,
  `RadiantBarrierNotes` text,
  `HVAC1Tons` decimal(10,0) DEFAULT NULL,
  `HVAC1ReplaceRepair` varchar(25) DEFAULT NULL,
  `HVAC1Age` int(11) DEFAULT NULL,
  `HVAC1NumberSupplies` int(11) DEFAULT NULL,
  `HVAC1CondenserSN` varchar(50) DEFAULT NULL,
  `HVAC1CondenserModel` varchar(100) DEFAULT NULL,
  `HVAC1FurnSN` varchar(50) DEFAULT NULL,
  `HVAC1FurnModel` varchar(100) DEFAULT NULL,
  `HVAC1CoolingType` varchar(50) DEFAULT NULL,
  `HVAC1HeatingType` varchar(50) DEFAULT NULL,
  `HVAC1HandlerLocation` varchar(50) DEFAULT NULL,
  `HVAC1ThermostatType` varchar(50) DEFAULT NULL,
  `HVAC1Zones` int(11) DEFAULT NULL,
  `HVAC1Notes` text,
  `HVAC2Tons` decimal(10,0) DEFAULT NULL,
  `HVAC2ReplaceRepair` varchar(25) DEFAULT NULL,
  `HVAC2Age` int(11) DEFAULT NULL,
  `HVAC2NumberSupplies` int(11) DEFAULT NULL,
  `HVAC2CondenserSN` varchar(50) DEFAULT NULL,
  `HVAC2CondenserModel` varchar(100) DEFAULT NULL,
  `HVAC2FurnSN` varchar(50) DEFAULT NULL,
  `HVAC2FurnModel` varchar(100) DEFAULT NULL,
  `HVAC2CoolingType` varchar(50) DEFAULT NULL,
  `HVAC2HeatingType` varchar(50) DEFAULT NULL,
  `HVAC2HandlerLocation` varchar(50) DEFAULT NULL,
  `HVAC2ThermostatType` varchar(50) DEFAULT NULL,
  `HVAC2Zones` int(11) DEFAULT NULL,
  `HVAC2Notes` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblaudit`
--

INSERT INTO `tblaudit` (`AuditID`, `ClientID`, `FirstFloorSF`, `SecondFloorSF`, `AtticSF`, `TotalSF`, `YearBuilt`, `CeilingHeight`, `HearGGS`, `Comfort`, `InsulationInterest`, `SolarScreens`, `AirQuality`, `DuctSealing`, `RadBarrier`, `SaveMoney`, `HVAC`, `Environment`, `Other`, `Goals`, `Concerns`, `Change1`, `Change2`, `Summer`, `Winter`, `Occupy`, `Rooms`, `Schedule`, `Budget`, `Financing`, `OtherComments`, `BuildingEnvelope`, `FoundationType`, `LivingDifficulty`, `Leakiness`, `AtticDifficulty`, `NumberDoors`, `NumberJambsSweeps`, `NumberBaths`, `SmokeDetectors`, `CoDetectors`, `SmokeCoCombo`, `FireplaceBalloons`, `MoveUnderSink`, `MoveAtticItems`, `CFLs`, `PowerStrip`, `LowFlowShower`, `KitchenAerator`, `BathAerator`, `BuildingNotes`, `SealDuct`, `ReplaceDuct`, `DuctType`, `DuctLocation`, `DuctCondition`, `DuctRVal`, `DuctSupplies`, `CleanSealReturn`, `CleanSealRegister`, `CombustionAir`, `DuctMoveAttic`, `DuctRegisters`, `DuctFilters`, `DuctworkNotes`, `Insulation`, `InsulationType`, `InsulationAtticSF`, `InsulationExistingDepth`, `InsulationExistingRVal`, `Cathedral`, `KneeWalls`, `Vault`, `InsulationNotes`, `RadiantBarrier`, `Pitch`, `RadiantBarrierNotes`, `HVAC1Tons`, `HVAC1ReplaceRepair`, `HVAC1Age`, `HVAC1NumberSupplies`, `HVAC1CondenserSN`, `HVAC1CondenserModel`, `HVAC1FurnSN`, `HVAC1FurnModel`, `HVAC1CoolingType`, `HVAC1HeatingType`, `HVAC1HandlerLocation`, `HVAC1ThermostatType`, `HVAC1Zones`, `HVAC1Notes`, `HVAC2Tons`, `HVAC2ReplaceRepair`, `HVAC2Age`, `HVAC2NumberSupplies`, `HVAC2CondenserSN`, `HVAC2CondenserModel`, `HVAC2FurnSN`, `HVAC2FurnModel`, `HVAC2CoolingType`, `HVAC2HeatingType`, `HVAC2HandlerLocation`, `HVAC2ThermostatType`, `HVAC2Zones`, `HVAC2Notes`) VALUES
(1, 1, 3200, 2995, 0, 6155, 2005, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'Slab', 'Normal', 'Normal', 'Normal', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1, 1, 'Duct Board', 'Crawlspace', 'Fair', 'R-2', 1, 1, 1, 1, 1, 1, 1, NULL, 0, '', 0, 0, 0, 0, 0, 0, NULL, 0, 0, NULL, 0, '', 0, 0, '', '', '', '', '', '', '', '', 0, NULL, 0, '', 0, 0, '', '', '', '', '', '', '', '', 0, NULL),
(2, 2, 435, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 4, 435, 0, 0, 435, 2013, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaudit`
--
ALTER TABLE `tblaudit`
 ADD PRIMARY KEY (`AuditID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
