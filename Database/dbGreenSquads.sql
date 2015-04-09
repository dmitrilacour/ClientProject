-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 04, 2015 at 11:33 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbGreenSquads`
--
CREATE DATABASE IF NOT EXISTS `dbGreenSquads` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbGreenSquads`;

-- --------------------------------------------------------

--
-- Table structure for table `tblAudit`
--
-- Creation: Apr 01, 2015 at 03:22 PM
--

DROP TABLE IF EXISTS `tblAudit`;
CREATE TABLE `tblAudit` (
  `AuditID` int(11) NOT NULL,
  `ClientID` int(11) NOT NULL,
  `FirstFloorSF` int(11) DEFAULT NULL,
  `SecondFloorSF` int(11) DEFAULT NULL,
  `AtticSF` int(11) DEFAULT NULL,
  `TotalSF` int(11) DEFAULT NULL,
  `YearBuilt` int(4) DEFAULT NULL,
  `CeilingHeight` int(11) DEFAULT NULL,
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
-- Dumping data for table `tblAudit`
--

INSERT INTO `tblAudit` (`AuditID`, `ClientID`, `FirstFloorSF`, `SecondFloorSF`, `AtticSF`, `TotalSF`, `YearBuilt`, `CeilingHeight`, `BuildingEnvelope`, `FoundationType`, `LivingDifficulty`, `Leakiness`, `AtticDifficulty`, `NumberDoors`, `NumberJambsSweeps`, `NumberBaths`, `SmokeDetectors`, `CoDetectors`, `SmokeCoCombo`, `FireplaceBalloons`, `MoveUnderSink`, `MoveAtticItems`, `CFLs`, `PowerStrip`, `LowFlowShower`, `KitchenAerator`, `BathAerator`, `BuildingNotes`, `SealDuct`, `ReplaceDuct`, `DuctType`, `DuctLocation`, `DuctCondition`, `DuctRVal`, `DuctSupplies`, `CleanSealReturn`, `CleanSealRegister`, `CombustionAir`, `DuctMoveAttic`, `DuctRegisters`, `DuctFilters`, `DuctworkNotes`, `Insulation`, `InsulationType`, `InsulationAtticSF`, `InsulationExistingDepth`, `InsulationExistingRVal`, `Cathedral`, `KneeWalls`, `Vault`, `InsulationNotes`, `RadiantBarrier`, `Pitch`, `RadiantBarrierNotes`, `HVAC1Tons`, `HVAC1ReplaceRepair`, `HVAC1Age`, `HVAC1NumberSupplies`, `HVAC1CondenserSN`, `HVAC1CondenserModel`, `HVAC1FurnSN`, `HVAC1FurnModel`, `HVAC1CoolingType`, `HVAC1HeatingType`, `HVAC1HandlerLocation`, `HVAC1ThermostatType`, `HVAC1Zones`, `HVAC1Notes`, `HVAC2Tons`, `HVAC2ReplaceRepair`, `HVAC2Age`, `HVAC2NumberSupplies`, `HVAC2CondenserSN`, `HVAC2CondenserModel`, `HVAC2FurnSN`, `HVAC2FurnModel`, `HVAC2CoolingType`, `HVAC2HeatingType`, `HVAC2HandlerLocation`, `HVAC2ThermostatType`, `HVAC2Zones`, `HVAC2Notes`) VALUES
(1, 1, 3200, 2995, 0, 6155, 2005, 8, 1, 'Slab', 'Normal', 'Normal', 'Normal', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1, 1, 'Duct Board', 'Crawlspace', 'Fair', 'R-2', 1, 1, 1, 1, 1, 1, 1, NULL, 0, '', 0, 0, 0, 0, 0, 0, NULL, 0, 0, NULL, 0, '', 0, 0, '', '', '', '', '', '', '', '', 0, NULL, 0, '', 0, 0, '', '', '', '', '', '', '', '', 0, NULL),
(2, 2, 435, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 4, 435, 0, 0, 435, 2013, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblClientProfile`
--
-- Creation: Mar 27, 2015 at 04:58 PM
--

DROP TABLE IF EXISTS `tblClientProfile`;
CREATE TABLE `tblClientProfile` (
`ClientID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Street` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(2) NOT NULL,
  `Zip` varchar(5) NOT NULL,
  `PhonePrimary` varchar(12) NOT NULL,
  `PhoneAlternative` varchar(12) DEFAULT NULL,
  `EmailPrimary` varchar(100) NOT NULL,
  `EmailAlternative` varchar(100) DEFAULT NULL,
  `AustinEnergy` tinyint(1) DEFAULT NULL,
  `TexasGas` tinyint(1) DEFAULT NULL,
  `CityLimits` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblClientProfile`
--

INSERT INTO `tblClientProfile` (`ClientID`, `FirstName`, `LastName`, `Street`, `City`, `State`, `Zip`, `PhonePrimary`, `PhoneAlternative`, `EmailPrimary`, `EmailAlternative`, `AustinEnergy`, `TexasGas`, `CityLimits`) VALUES
(1, 'Bernie', 'Brenner', '11403 Musket Rim', 'Austin', 'TX', '78738', '512-696-0410', '', 'bernie@truecar.com', '', 1, 1, 1),
(2, 'Dmitri', 'LaCour', '123 Main', 'Austin', 'TX', '78705', '4093301476', '', 'dmitrilacour@me.com', '', 1, 0, 1),
(3, 'Dmitri', 'LaCour', '123 Main', 'Austin', 'TX', '78705', '4093301476', '', 'dmitrilacour@me.com', '', 1, 0, 1),
(4, 'Valerie', 'LaCour', '911 W 21st', 'Austin', 'TX', '78705', '4093301476', '', 'dmitrilacour@me.com', '', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblEmployees`
--
-- Creation: Apr 01, 2015 at 06:14 AM
--

DROP TABLE IF EXISTS `tblEmployees`;
CREATE TABLE `tblEmployees` (
`EmployeeID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Username` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Password` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `EmployeeType` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblEmployees`
--

INSERT INTO `tblEmployees` (`EmployeeID`, `FirstName`, `LastName`, `Username`, `Password`, `EmployeeType`) VALUES
(1, 'Joe', 'Smith', 'Auditor', 'MIS374ut!', 'Audit'),
(2, 'Susan', 'Meredith', 'Susan', 'MIS374ut!', 'Super'),
(3, 'Jane', 'Doe', 'Admin', 'MIS374ut!', 'Admin'),
(4, 'Dmitri', 'LaCour', 'dmitri', 'dmitri', 'Audit');

-- --------------------------------------------------------

--
-- Table structure for table `tblScheduledAudits`
--
-- Creation: Mar 30, 2015 at 05:18 AM
--

DROP TABLE IF EXISTS `tblScheduledAudits`;
CREATE TABLE `tblScheduledAudits` (
`AuditID` int(11) NOT NULL,
  `AuditDate` date NOT NULL,
  `ClientID` int(11) NOT NULL,
  `Auditor` varchar(100) DEFAULT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Pre Audit'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblScheduledAudits`
--

INSERT INTO `tblScheduledAudits` (`AuditID`, `AuditDate`, `ClientID`, `Auditor`, `Status`) VALUES
(1, '2015-04-01', 1, 'John Adams', 'Completed'),
(2, '2015-05-31', 2, 'Bojangles', 'Audit'),
(3, '2015-05-31', 4, 'Jane Doe', 'Audit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblAudit`
--
ALTER TABLE `tblAudit`
 ADD PRIMARY KEY (`AuditID`);

--
-- Indexes for table `tblClientProfile`
--
ALTER TABLE `tblClientProfile`
 ADD PRIMARY KEY (`ClientID`);

--
-- Indexes for table `tblEmployees`
--
ALTER TABLE `tblEmployees`
 ADD PRIMARY KEY (`EmployeeID`), ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `tblScheduledAudits`
--
ALTER TABLE `tblScheduledAudits`
 ADD PRIMARY KEY (`AuditID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblClientProfile`
--
ALTER TABLE `tblClientProfile`
MODIFY `ClientID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblEmployees`
--
ALTER TABLE `tblEmployees`
MODIFY `EmployeeID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblScheduledAudits`
--
ALTER TABLE `tblScheduledAudits`
MODIFY `AuditID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
