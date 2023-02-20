-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 19, 2023 at 08:43 AM
-- Server version: 8.0.32
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cappteam18`
--

-- --------------------------------------------------------

--
-- Table structure for table `activitieslist`
--

CREATE TABLE `activitieslist` (
  `activityid` int NOT NULL,
  `aname` varchar(70) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(70) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `capacity` int NOT NULL,
  `kidsid` int NOT NULL COMMENT 'fk',
  `teid` int NOT NULL COMMENT 'fk'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kidsinfo`
--

CREATE TABLE `kidsinfo` (
  `kidsid` int NOT NULL,
  `fname` varchar(70) NOT NULL,
  `lname` varchar(70) NOT NULL,
  `parentsname` varchar(70) NOT NULL,
  `dob` date NOT NULL,
  `phone` int NOT NULL,
  `address` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitieslist`
--
ALTER TABLE `activitieslist`
  ADD PRIMARY KEY (`activityid`);

--
-- Indexes for table `kidsinfo`
--
ALTER TABLE `kidsinfo`
  ADD PRIMARY KEY (`kidsid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitieslist`
--
ALTER TABLE `activitieslist`
  MODIFY `activityid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kidsinfo`
--
ALTER TABLE `kidsinfo`
  MODIFY `kidsid` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
