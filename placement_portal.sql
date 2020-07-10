-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 04:03 PM
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
  `password` varchar(45) DEFAULT NULL,
  `admin` int(10) NOT NULL DEFAULT 0,
  `vkey` varchar(45) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `createdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `admin`, `vkey`, `verified`, `createdate`) VALUES
(4, 'kk@gmail.com', '1234', 0, '', 0, '2020-05-23 08:32:38.884034'),
(5, 'riya@gmail.com', '12345', 0, '', 0, '2020-04-17 04:53:13.255242'),
(6, 'admin@gmail.com', 'admin', 1, '', 0, '2020-04-17 04:53:13.255242'),
(7, 'azeem@gmail.com', 'azeem', 0, '', 0, '2020-04-17 04:53:13.255242'),
(19, 'pk99411@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 'dc77419669c72c9e2ba8d685782d3540', 1, '2020-06-19 13:59:13.975047'),
(22, 'praveenkesarwani0@gmail.com', '45becd6c5dd83e2179cd81df8640cd5a', 0, '6079bf966eb404c79750b45670b06679', 0, '2020-05-28 15:04:05.291491'),
(24, 'pdkadb@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, '', 0, '2020-06-18 22:20:03.101499'),
(25, 'akash@gmail.com', '94754d0abb89e4cf0a7f1c494dbb9d2c', 0, '', 0, '2020-06-19 09:57:00.265766');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `sl_no` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `college` varchar(100) NOT NULL,
  `discipline` varchar(20) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `college_id` int(30) NOT NULL,
  `objective` varchar(40) NOT NULL,
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
  `organization` varchar(40) NOT NULL,
  `project` varchar(40) NOT NULL,
  `duration` int(11) NOT NULL,
  `career` varchar(30) NOT NULL,
  `skill` varchar(40) NOT NULL,
  `hobbies` longtext NOT NULL,
  `comment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`sl_no`, `firstname`, `lastname`, `gender`, `address`, `college`, `discipline`, `branch`, `college_id`, `objective`, `email`, `contact`, `dob`, `x_board`, `x_marks`, `x_year`, `x_division`, `xii_board`, `xii_marks`, `xii_year`, `xii_division`, `cgpa`, `grad_year`, `grad_div`, `organization`, `project`, `duration`, `career`, `skill`, `hobbies`, `comment`) VALUES
(3, 'kartikeya', 'kotnala', 'MALE', '', 'College of Technology', 'B.Tech', 'Information Technology', 50762, '', 'kk@gmail.com', '8547596857', '2020-02-17', 'C.B.S.E.', 90, 2015, 'First', 'C.B.S.E', 90, 2015, 'First', '7', 2020, 'First', '', '', 0, 'Govt.', '', 'na', 'na'),
(9, 'Riya', 'Gandhi', 'FEMALE', '', 'College of Technology', 'B.Tech', 'Information Technology', 50600, '', 'riya@gmail.com', '8574968574', '1999-01-01', 'C.B.S.E.', 85, 2014, 'First', 'C.B.S.E.', 90, 2016, 'First', '7.2', 2020, 'First', '', '', 0, 'M.B.A', '', 'na', 'na'),
(10, 'Muhammad', 'Azeem', 'MALE', '', 'College of Technology', 'B.Tech', 'Information Technology', 50688, '', 'azeem@gmail.com', '8650435214', '1998-08-04', 'Other', 85, 2014, 'First', 'C.B.S.E', 90, 2016, 'First', '7.05', 2020, 'First', '', '', 0, 'Placement', '', 'na', 'na'),
(12, 'Praveen', 'Kesarwani', 'MALE', 'Hiyatnagar, Diha Kunda Pratapgarh Uttar Pradesh-230201', 'College of Technology', 'B.Tech', 'Information Technology', 50672, 'To obtain a position where my knowledge ', 'pk99411@gmail.com', '8077785900', '1996-09-30', 'C.B.S.E.', 88, 2013, 'First', 'C.B.S.E.', 90, 2015, 'First', '7.05', 2020, 'First', 'Bharat Heavy Electricals Limited', 'Hostel Management System', 30, 'Placement', 'Java\r\nC++\r\nHTML\r\nCSS\r\n', 'Hiking and Backpack', 'Treasurer of plexus'),
(13, 'lokesh', 'bisht', 'MALE', '', 'College of Technology', 'B.Tech', 'Information Technology', 50690, '', 'lokesh@gmail.com', '8745965421', '1998-01-01', 'C.B.S.E.', 90, 2014, 'First', 'First', 92, 2016, 'First', '7.2', 2020, 'First', '', '', 0, 'M.B.A', '', 'NA', 'NA'),
(14, 'akash', 'rawat', 'MALE', 'pauri garhwal', 'College of Technology', 'B.Tech', 'Information Technology', 50677, 'become a body builder', 'akash@gmail.com', '8574963214', '1997-04-29', 'C.B.S.E.', 85, 2013, 'First', 'C.B.S.E.', 90, 2015, 'First', '6.5', 2020, 'First', 'bhel', 'hms', 30, 'Placement', 'python\r\njava\r\nc++', 'dancing ', 'na');

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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
