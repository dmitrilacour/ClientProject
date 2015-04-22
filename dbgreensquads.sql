-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2015 at 05:38 PM
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

CREATE DATABASE IF NOT EXISTS `dbGreenSquads` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbGreenSquads`;

--
-- Table structure for table `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblUsers` (
  `UserID` int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Supervisor` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `DateAdded` varchar(20) NOT NULL,
  `PrivilegeLevel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `tblTest` (
  `UserID` int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `Username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

