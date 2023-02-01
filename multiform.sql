-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 05:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiform`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(100) NOT NULL,
  `fname` text NOT NULL,
  `lname` varchar(30) NOT NULL,
  `fafname` varchar(30) NOT NULL,
  `falname` varchar(30) NOT NULL,
  `mofname` varchar(30) NOT NULL,
  `molname` varchar(20) NOT NULL,
  `mnumber` text NOT NULL,
  `tnumber` varchar(10) NOT NULL,
  `dob` text NOT NULL,
  `email` text NOT NULL,
  `type` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(30) NOT NULL,
  `hscinstitute` varchar(30) NOT NULL,
  `hscboard` varchar(20) NOT NULL,
  `hscpercentage` int(20) NOT NULL,
  `sscinstitution` varchar(20) NOT NULL,
  `sscboard` varchar(20) NOT NULL,
  `sscpercentage` int(20) NOT NULL,
  `currentpursuing` varchar(30) NOT NULL,
  `currentinstitute` varchar(20) NOT NULL,
  `overallpercentage` int(20) NOT NULL,
  `currentbacklogs` int(10) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `file1` text NOT NULL,
  `file2` varchar(30) NOT NULL,
  `file3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `fname`, `lname`, `fafname`, `falname`, `mofname`, `molname`, `mnumber`, `tnumber`, `dob`, `email`, `type`, `nationality`, `address`, `city`, `country`, `hscinstitute`, `hscboard`, `hscpercentage`, `sscinstitution`, `sscboard`, `sscpercentage`, `currentpursuing`, `currentinstitute`, `overallpercentage`, `currentbacklogs`, `image`, `file1`, `file2`, `file3`) VALUES
(63, 'Arijeet', 'Saha', 'Debasis ', 'Saha', 'Suvra', 'Saha', '8984970568', '789685', '2000-05-18', 'arijeetsaha2000@gmail.com', 'male', 'Indian', 'Sahadevkhunta', 'Balasore', 'India', 'PBSK', 'STATE BOARD', 88, 'FM Junior College', 'STATE BOARD', 77, 'MCA', 'FM University', 86, 0, '43870.jpg', 'Class 2 ENS 534 Unit 3 CBCS.pdf', '7th sem ETC.pdf', '1.+Collections+_+Lis'),
(64, 'Asit', 'Patra', 'Harish', 'Patra', 'Susmita', 'Pani', '7899245565', '782456', '1999-07-07', 'asit@gmail.com', 'male', 'Indian', 'Balia', 'Balasore', 'France', 'DAV Public School', 'CBSE', 99, 'Fm Junior College', 'STATE BOARD', 88, 'MCA', 'FM University', 87, 2, '43884.jpg', 'CMP3501_Analysis_of_Algorithms_Lecture_N.pdf', '7th sem ETC.pdf', 'CMP3501_Analysis_of_');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
