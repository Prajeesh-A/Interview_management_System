-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2024 at 06:07 PM
-- Server version: 11.2.2-MariaDB
-- PHP Version: 8.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interview`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `email`, `password`) VALUES
(1, 'arjun', 'arjun@gmail.com', 'arjun'),
(2, 'janobe', 'janobe@janobe.com', '36d59e2369f00c4d9f336acf4408bae9');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `cand_id` int(11) NOT NULL,
  `cand_name` varchar(150) NOT NULL,
  `cand_email` varchar(150) NOT NULL,
  `cand_phone` varchar(150) NOT NULL,
  `cand_age` int(11) DEFAULT NULL,
  `cand_address` text DEFAULT NULL,
  `cand_qualification` text DEFAULT NULL,
  `sslcmark` varchar(20) DEFAULT NULL,
  `sslcyear` varchar(20) DEFAULT NULL,
  `sslcname` varchar(20) DEFAULT NULL,
  `hscmark` varchar(20) DEFAULT NULL,
  `hsyear` varchar(20) DEFAULT NULL,
  `hsname` varchar(20) DEFAULT NULL,
  `mtechmark` varchar(20) DEFAULT NULL,
  `mtechname` varchar(20) DEFAULT NULL,
  `mtechyear` varchar(20) DEFAULT NULL,
  `skils` varchar(100) DEFAULT NULL,
  `exp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`cand_id`, `cand_name`, `cand_email`, `cand_phone`, `cand_age`, `cand_address`, `cand_qualification`, `sslcmark`, `sslcyear`, `sslcname`, `hscmark`, `hsyear`, `hsname`, `mtechmark`, `mtechname`, `mtechyear`, `skils`, `exp`) VALUES
(3, 'praji', 'praji@gmail.com', '7511102493', 19, '631721', 'btech', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'abhi', 'abhi@gmail.com', '98234789', 18, 'ksd', 'sslc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `interviewer`
--

CREATE TABLE `interviewer` (
  `inter_id` int(40) NOT NULL,
  `inter_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interviewer`
--

INSERT INTO `interviewer` (`inter_id`, `inter_name`, `email`, `password`) VALUES
(1, 'interviewer1', 'interviewer1@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(2, 'interviewer2', 'interviewer2@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(3, 'interviewer3', 'interviewer3@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(4, 'interviewer4', 'interviewer4@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `scoresheet`
--

CREATE TABLE `scoresheet` (
  `score_id` int(11) NOT NULL,
  `btech` int(11) NOT NULL,
  `mtech` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `communication` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `cand_id` int(11) NOT NULL,
  `inter_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `scoresheet`
--

INSERT INTO `scoresheet` (`score_id`, `btech`, `mtech`, `exp`, `communication`, `total`, `cand_id`, `inter_id`) VALUES
(1, 5, 5, 5, 5, 20, 3, 1),
(2, 16, 16, 16, 16, 64, 3, 2),
(3, 15, 1, 1, 1, 18, 6, 2),
(7, 2, 2, 2, 2, 8, 6, 1),
(8, 50, 50, 50, 50, 200, 3, 3),
(9, 4, 4, 4, 4, 16, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`) VALUES
(1, 'Salihan Mridha', 'salihanmridha@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'qwer', 'qwer@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'abc', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'arju', 'arju@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(5, 'bijoy', 'lord@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(6, 'admin', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(7, 'pppp', 'pp@gmail.com', '6e62ca5292efd2c81357');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`cand_id`);

--
-- Indexes for table `interviewer`
--
ALTER TABLE `interviewer`
  ADD PRIMARY KEY (`inter_id`);

--
-- Indexes for table `scoresheet`
--
ALTER TABLE `scoresheet`
  ADD PRIMARY KEY (`score_id`),
  ADD KEY `cand_id` (`cand_id`),
  ADD KEY `inter_id` (`inter_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `cand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `interviewer`
--
ALTER TABLE `interviewer`
  MODIFY `inter_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `scoresheet`
--
ALTER TABLE `scoresheet`
  MODIFY `score_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `scoresheet`
--
ALTER TABLE `scoresheet`
  ADD CONSTRAINT `scoresheet_ibfk_1` FOREIGN KEY (`cand_id`) REFERENCES `candidates` (`cand_id`),
  ADD CONSTRAINT `scoresheet_ibfk_2` FOREIGN KEY (`inter_id`) REFERENCES `interviewer` (`inter_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
