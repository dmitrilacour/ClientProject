-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 20, 2015 at 02:11 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dbGreenSquads`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblTask`
--

CREATE TABLE `tblTask` (
`TaskID` int(11) NOT NULL,
  `JobID` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Description` text,
  `Duration` tinyint(4) DEFAULT NULL,
  `People` text,
  `Supplies` text
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblTask`
--

INSERT INTO `tblTask` (`TaskID`, `JobID`, `Title`, `Description`, `Duration`, `People`, `Supplies`) VALUES
(1, 1, 'Title', 'Desc', 3, 'People', 'Supplies'),
(2, 1, 'Do something', 'Detailed description of what I want you to do', 3, 'Chris, Bob, Joe', 'Stuff'),
(3, 1, 'Do this too', 'Details', 2, 'Me and You', '3 Windows, 2 Flask, a bunch of Champe'),
(4, 1, '', '', 0, '', ''),
(5, 1, 'Do something', 'Detailed description of what I want you to do', 3, 'Chris, Bob, Joe', 'Stuff'),
(6, 1, 'Do this too', 'Details', 2, 'Me and You', '3 Windows, 2 Flask, a bunch of Champe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblTask`
--
ALTER TABLE `tblTask`
 ADD PRIMARY KEY (`TaskID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblTask`
--
ALTER TABLE `tblTask`
MODIFY `TaskID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;