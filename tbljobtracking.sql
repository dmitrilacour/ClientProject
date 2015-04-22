-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2015 at 04:37 PM
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
-- Table structure for table `tbljobtracking`
--

CREATE TABLE IF NOT EXISTS `tbljobtracking` (
  `AuditID` int(11) NOT NULL,
  `InitialVisit` date NOT NULL,
  `ProposalSent` date NOT NULL,
  `FollowedUp` date NOT NULL,
  `CalledAgain` date NOT NULL,
  `ProposalAccepted` date NOT NULL,
  `PermitPulled` date NOT NULL,
  `EnteredInPS` date NOT NULL,
  `AEVerification` date NOT NULL,
  `JobScheduled` date NOT NULL,
  `JobCompleted` date NOT NULL,
  `QCCheckUp` date NOT NULL,
  `AEFinalInspection` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbljobtracking`
--

INSERT INTO `tbljobtracking` (`AuditID`, `InitialVisit`, `ProposalSent`, `FollowedUp`, `CalledAgain`, `ProposalAccepted`, `PermitPulled`, `EnteredInPS`, `AEVerification`, `JobScheduled`, `JobCompleted`, `QCCheckUp`, `AEFinalInspection`) VALUES
(0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
