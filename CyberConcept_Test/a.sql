-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2016 at 11:46 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `CompanyID` varchar(20) NOT NULL,
  `C_Name` varchar(100) NOT NULL,
  `C_Address` varchar(100) NOT NULL,
  `C_Tel` varchar(11) NOT NULL,
  `C_Fax` varchar(15) NOT NULL,
  `C_Email` varchar(100) NOT NULL,
  `C_Web` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_contact`
--

CREATE TABLE `customer_contact` (
  `C_ID` int(11) NOT NULL,
  `CompanyID` varchar(20) NOT NULL,
  `P_Title` varchar(100) NOT NULL,
  `P_Contact` varchar(100) NOT NULL,
  `P_Designation` varchar(50) NOT NULL,
  `P_Tel` varchar(11) NOT NULL,
  `P_Mobile` varchar(11) NOT NULL,
  `P_Fax` varchar(20) NOT NULL,
  `P_Email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_contact`
--

INSERT INTO `customer_contact` (`C_ID`, `CompanyID`, `P_Title`, `P_Contact`, `P_Designation`, `P_Tel`, `P_Mobile`, `P_Fax`, `P_Email`) VALUES
(12, '2', 'Intern', 'Cyber Concepts', 'Developper', '0112345678', '0789654132', '0789654132', 'sa@gmial.com'),
(11, '1', 'Cyber', 'Cyber Concepts', 'Trainer', '0112345678', '0716817679', '0716817679', 'aaa@sa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer_contact`
--
ALTER TABLE `customer_contact`
  ADD PRIMARY KEY (`C_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer_contact`
--
ALTER TABLE `customer_contact`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
