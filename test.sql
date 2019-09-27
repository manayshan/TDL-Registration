-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 07:16 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `finaltdl`
--

CREATE TABLE `finaltdl` (
  `rollno` varchar(15) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `course` varchar(15) NOT NULL,
  `school` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `presentaddress` varchar(100) NOT NULL,
  `permanentaddress` varchar(100) NOT NULL,
  `tdlschool` varchar(50) NOT NULL,
  `tdlcourse` varchar(50) NOT NULL,
  `reasontoOpt` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finaltdl`
--

INSERT INTO `finaltdl` (`rollno`, `firstname`, `lastname`, `fathername`, `course`, `school`, `email`, `mobileno`, `presentaddress`, `permanentaddress`, `tdlschool`, `tdlcourse`, `reasontoOpt`) VALUES
('160BTCCSE000', 'Trial First Nam', 'Trial SN', 'Test FN', 'Test', 'SET', 'trialemail@gmail.com', '9876543210', 'Trial Address', 'Trial Address', 'SET', 'thinkDesign&Program', 'Think Design & Program'),
('160BTCCSE098', 'MANAY', 'SHANKAR', 'Kishor Sahu', 'B.tech', 'SET', 'manus0506@gmail.com', '9931509828', 'A-158, Above ShapeUp Gym, Sector 55', 'Near Sector 55-56 Rapid Metro', 'SET', 'ed', 'reason'),
('160BTCCSE011', 'Jyoti', 'Mor', 'RK Mor', 'B.Tech', 'SET', 'jyotimor@ansaluniver', '9560150070', 'Ansal University', 'Ansal University', 'SOL', 'cybercrime', 'interest to know.');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `Name`, `Password`, `Gender`, `Email`) VALUES
(1, 'manay', '123', 'm', 'manu.shankar0506@gmail.com'),
(2, 'nikhil', '123', 'm', 'narora1998@gmail.com'),
(3, 'yoxo', '456', 'f', 'yoxo420@gmail.com'),
(4, 'nsjcsdc', '', 'm', 'narora98@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tdldata`
--

CREATE TABLE `tdldata` (
  `ID` int(3) NOT NULL,
  `Roll_No` varchar(15) NOT NULL,
  `First_Name` varchar(12) NOT NULL,
  `Last_Name` varchar(12) NOT NULL,
  `Father's_Name` varchar(15) NOT NULL,
  `Course` varchar(15) NOT NULL,
  `School` varchar(40) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Mobile_No` int(10) NOT NULL,
  `Present_Address` varchar(250) NOT NULL,
  `Permanent_Address` varchar(250) NOT NULL,
  `TDL_school` varchar(40) NOT NULL,
  `TDL_Course` varchar(60) NOT NULL,
  `Reason_to_opt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tdldata`
--
ALTER TABLE `tdldata`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tdldata`
--
ALTER TABLE `tdldata`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
