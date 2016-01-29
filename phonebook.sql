-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 29, 2016 at 08:38 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `NickName` varchar(50) NOT NULL,
  `CellPhone` varchar(12) NOT NULL,
  `HomePhone` varchar(12) NOT NULL,
  `WorkPhone` varchar(12) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `City` varchar(25) NOT NULL,
  `State` varchar(25) NOT NULL,
  `ZipCode` varchar(10) NOT NULL,
  `Profile` varchar(255) NOT NULL,
  `Notes` longblob NOT NULL,
  `Status` enum('0','1','','') NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`ID`, `FirstName`, `LastName`, `NickName`, `CellPhone`, `HomePhone`, `WorkPhone`, `Address`, `City`, `State`, `ZipCode`, `Profile`, `Notes`, `Status`) VALUES
(4, 'Turjoy', 'abdullah', 'TJ the boatman', '019', '019', '012', 'Dhaka', 'Dhaka', 'Dhaka', '1208', '', '', '1'),
(30, 'Jane', 'Doe', 'JD', '0194', '', '', '', '', '', '', '', '', '1'),
(44, 'Ansar', '', 'hujur', '', '', '', '', '', '', '', '', '', '1'),
(45, '', '', '', '', '', '', '', '', '', '', '', '', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
