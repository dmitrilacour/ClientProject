-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 07, 2015 at 03:46 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dbGreenSquads`
--

-- --------------------------------------------------------

--
-- Table structure for table `TestCases`
--

CREATE TABLE `tblTestCases` (
`CaseNumber` int(11) NOT NULL,
  `Test Title` varchar(50) DEFAULT NULL,
  `Description` mediumtext,
  `Result` tinyint(1) DEFAULT NULL,
  `Notes` mediumtext,
  `Tester` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TestCases`
--
ALTER TABLE `TestCases`
 ADD PRIMARY KEY (`CaseNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `TestCases`
--
ALTER TABLE `TestCases`
MODIFY `CaseNumber` int(11) NOT NULL AUTO_INCREMENT;