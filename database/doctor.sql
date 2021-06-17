-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 09:48 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` int(50) NOT NULL,
  `Admin_pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Admin_pass`) VALUES
(123, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ap_id` int(50) NOT NULL,
  `ap_date` varchar(50) DEFAULT NULL,
  `Patient_id` varchar(50) DEFAULT NULL,
  `DId` varchar(50) DEFAULT NULL,
  `Approval` varchar(100) DEFAULT NULL,
  `Fees` varchar(50) DEFAULT NULL,
  `ap_Fees` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ap_id`, `ap_date`, `Patient_id`, `DId`, `Approval`, `Fees`, `ap_Fees`) VALUES
(8, '13/1/2019', '8', '2', 'Checked', 'Paid', '500');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `DId` int(60) NOT NULL,
  `DName` varchar(60) NOT NULL,
  `DPassword` varchar(60) NOT NULL,
  `DAddress` varchar(60) DEFAULT NULL,
  `DPhone` varchar(60) DEFAULT NULL,
  `Speciality` varchar(60) NOT NULL,
  `DEmail` varchar(60) NOT NULL,
  `Limits` int(50) DEFAULT NULL,
  `DFees` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`DId`, `DName`, `DPassword`, `DAddress`, `DPhone`, `Speciality`, `DEmail`, `Limits`, `DFees`) VALUES
(1, 'Barbie Changmai', 'doctor', NULL, NULL, 'Others', 'barbie@gmail.com', 3, '500'),
(2, 'Shuvam Sen Gupta', 'doctor', 'Guwahati', '7002097294', 'Dentist', 'shuvamsengupta58824@gmail.com', 3, '500');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Patient_id` int(60) NOT NULL,
  `PName` varchar(60) DEFAULT NULL,
  `PEmail` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `PAddress` varchar(60) DEFAULT NULL,
  `Phone` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patient_id`, `PName`, `PEmail`, `Password`, `PAddress`, `Phone`) VALUES
(8, 'Shuvam Sen Gupta', 'shuvamsengupta58824@gmail.com', '123', 'Bamunimaidan', '9957588243');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Report_id` int(80) NOT NULL,
  `Report_date` varchar(80) DEFAULT NULL,
  `Overview` varchar(200) DEFAULT NULL,
  `DId` int(80) DEFAULT NULL,
  `Patient_id` int(80) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ap_id`),
  ADD KEY `Patient_id` (`Patient_id`),
  ADD KEY `DId` (`DId`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`DId`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Patient_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Report_id`),
  ADD KEY `Patient_id` (`Patient_id`),
  ADD KEY `DId` (`DId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ap_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Patient_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `Report_id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
