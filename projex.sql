CREATE DATABASE projex CHARACTER SET utf8 COLLATE utf8_general_ci;
USE projex; 
-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2020 at 08:29 AM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projex`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_educational`
--

CREATE TABLE `data_educational` (
  `Std_ID` int(11) NOT NULL,
  `FName_LName` varchar(100) NOT NULL,
  `End_Year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_educational`
--

INSERT INTO `data_educational` (`Std_ID`, `FName_LName`, `End_Year`) VALUES
(614259053, 'วรวุฒิ บุญศรี', '2020-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `data_work`
--

CREATE TABLE `data_work` (
  `id_card` char(13) NOT NULL,
  `Company_Name` varchar(50) NOT NULL,
  `Company_Address` varchar(100) NOT NULL,
  `Profession` varchar(50) NOT NULL,
  `Rank` varchar(50) NOT NULL,
  `Company_Tel` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_work`
--

INSERT INTO `data_work` (`id_card`, `Company_Name`, `Company_Address`, `Profession`, `Rank`, `Company_Tel`) VALUES
('1739900691026', 'บริษัททรูทัช จำกัด', 'Revice_post_Regis.php', 'นักศึกษา', 'ผู้จัดการ', '955896970');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Re_Password` varchar(50) NOT NULL,
  `STD_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`, `Re_Password`, `STD_ID`) VALUES
('weekends053', '0801101892', '0801101892', 614259053);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `C_ID` int(11) NOT NULL,
  `Name_LastName` varchar(100) NOT NULL,
  `ID_Card` char(13) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Sex` varchar(5) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Tel` char(10) NOT NULL,
  `E_mail` varchar(50) NOT NULL,
  `Facebook` varchar(50) NOT NULL,
  `Instagram` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`C_ID`, `Name_LastName`, `ID_Card`, `Date_Of_Birth`, `Sex`, `Address`, `Tel`, `E_mail`, `Facebook`, `Instagram`) VALUES
(16, 'วรวุฒิ บุญศรี', '1739900691026', '2020-05-12', 'ชาย', 'Revice_post_Regis.php', '0955896970', '614259053@webmail.npru.ac.th', 'worawoot Bunsri', 'im.billyz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_educational`
--
ALTER TABLE `data_educational`
  ADD PRIMARY KEY (`Std_ID`);

--
-- Indexes for table `data_work`
--
ALTER TABLE `data_work`
  ADD PRIMARY KEY (`id_card`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`STD_ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`C_ID`,`ID_Card`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
