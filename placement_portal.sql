-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 02:56 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` longtext DEFAULT NULL,
  `Admin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `Admin`) VALUES
(1, 'pk99411@gmail.com', '123', 0),
(4, 'kk@gmail.com', '1234', 0),
(5, 'riya@gmail.com', '12345', 0),
(6, 'admin@gmail.com', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `sl_no` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `college` varchar(100) NOT NULL,
  `discipline` varchar(20) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `college_id` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `x_board` varchar(30) NOT NULL,
  `x_marks` int(30) NOT NULL,
  `x_year` int(30) NOT NULL,
  `x_division` varchar(30) NOT NULL,
  `xii_board` varchar(30) NOT NULL,
  `xii_marks` int(30) NOT NULL,
  `xii_year` int(30) NOT NULL,
  `xii_division` varchar(30) NOT NULL,
  `cgpa` varchar(10) NOT NULL,
  `grad_year` int(11) NOT NULL,
  `grad_div` varchar(30) NOT NULL,
  `career` varchar(30) NOT NULL,
  `training` longtext NOT NULL,
  `hobbies` longtext NOT NULL,
  `comment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`sl_no`, `firstname`, `lastname`, `gender`, `college`, `discipline`, `branch`, `college_id`, `email`, `contact`, `dob`, `x_board`, `x_marks`, `x_year`, `x_division`, `xii_board`, `xii_marks`, `xii_year`, `xii_division`, `cgpa`, `grad_year`, `grad_div`, `career`, `training`, `hobbies`, `comment`) VALUES
(2, 'Praveen ', 'Kesarwani', 'MALE', 'College of Technology', 'B.Tech', 'Information Technology', 50672, 'pk99411@gmail.com', '8077785900', '1996-09-30', 'Other', 88, 2013, 'First', 'First', 90, 2015, 'First', '7.058', 2020, 'First', 'Placement', 'Bhel haridwar', 'hiking and backpack', 'treasurer of plexus'),
(3, 'kartikeya', 'kotnala', 'MALE', 'College of Technology', 'B.Tech', 'Information Technology', 50762, 'kk@gmail.com', '8547596857', '2020-02-17', 'C.B.S.E.', 90, 2015, 'First', 'First', 90, 2015, 'First', '7', 2020, 'First', 'Govt.', 'na', 'na', 'na'),
(9, 'Riya', 'Gandhi', 'FEMALE', 'College of Technology', 'B.Tech', 'Information Technology', 50600, 'riya@gmail.com', '8574968574', '1999-01-01', 'C.B.S.E.', 85, 2014, 'First', 'C.B.S.E.', 90, 2016, 'First', '7.2', 2020, 'First', 'M.B.A', 'na', 'na', 'na');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`sl_no`),
  ADD UNIQUE KEY `college_id` (`college_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
