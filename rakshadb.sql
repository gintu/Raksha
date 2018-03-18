-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 06:58 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rakshadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin@123'),
(2, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` int(11) NOT NULL,
  `taskid` int(11) NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `name` text NOT NULL,
  `response` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`id`, `taskid`, `mobile`, `name`, `response`, `date`) VALUES
(30, 36, 8281860141, 'Azin Makaranth', 'This is a fire incident. We have it under control', '2018-03-18'),
(31, 36, 8281860141, 'Azin Makaranth', 'issue', '2018-03-18'),
(32, 36, 8281860141, 'Azin Makaranth', 'We have it under control', '2018-03-18'),
(33, 36, 8281860141, 'Azin Makaranth', 'asdads', '2018-03-18'),
(34, 37, 8281860141, 'Azin Makaranth', 'Its a fire', '2018-03-18'),
(35, 37, 8281596630, 'Abhishek', 'Yes :)', '2018-03-18'),
(36, 37, 0, 'Admin', 'Brace for impact', '2018-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `strength` int(11) NOT NULL,
  `lat` double NOT NULL,
  `lng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `date`, `strength`, `lat`, `lng`) VALUES
(36, '2018-03-17', 0, 9.961599, 76.4042),
(37, '2018-03-18', 2, 9.951998999999999, 76.2673),
(38, '2018-03-18', 0, 9.9318345, 76.4042),
(39, '2018-03-18', 0, 9.961998999999999, 76.4142),
(40, '2018-03-18', 0, 76.2673255, 76.4042),
(41, '2018-03-18', 0, 9.861998999999999, 76.4242),
(42, '2018-03-18', 0, 9.961998999999999, 76.4112),
(43, '2018-03-18', 0, 9.961998999999999, 76.4042),
(44, '2018-03-18', 0, 9.961998999999999, 76.4042);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `mobile` bigint(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `abt` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `task` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`mobile`, `email`, `name`, `password`, `abt`, `location`, `lat`, `lng`, `task`) VALUES
(8281596630, 'abhishek.mvr@outlook.com', 'Abhishek', 'abhishek', 'Not me but you !', 'asas', 9.961998999999999, 76.4042, 37),
(8281860141, 'azin@g.com', 'Azin Makaranth', '12345', 'hhfajhjafhajh', 'Court Complex, Aroor - Thoppumpady Road, Thoppumpady, Kochi, Kerala, India', 9.961998999999999, 76.4042, 37),
(9633194711, 'ar@g.com', 'AR', '12345', 'kjkjkjk', 'Court Complex, Aroor - Thoppumpady Road, Thoppumpady, Kochi, Kerala, India', 9.9318345, 76.4042, NULL),
(9846347501, 'azin.maaakkaaraanttthhhh@gmail.com', 'azzinnMakaranth', '****makaranth', 'am awsomee...', 'Kottayam', 9.961998999999999, 76.4112, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
