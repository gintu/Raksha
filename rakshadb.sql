-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 04:41 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `response` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`id`, `taskid`, `mobile`, `response`, `date`) VALUES
(9, 34, 8281860141, 'This is a fire incident. We have it under control', '2018-03-18'),
(10, 34, 8281860141, 'We need more men here', '2018-03-18');

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
(34, '2018-03-17', 1, 9.962998999999998, 76.4042),
(36, '2018-03-17', 0, 9.961998999999999, 76.4042);

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
  `lng` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`mobile`, `email`, `name`, `password`, `abt`, `location`, `lat`, `lng`) VALUES
(8281596630, 'abhishek.mvr@outlook.com', 'abhishek c', 'abhishekc', 'he is abhishek', 'kottayam', 9.9244504, 76.5314705),
(8281768654, 'bineeth@gmail.com', 'bineeth', 'bineethbinu', 'im coool', 'alappuzha', 9.9144504, 76.5214705),
(8281860141, 'azin.makaranth@gmail.com', 'azin makaranth', 'azinmakaranth', 'myself azin', 'kottayam', 9.9344504, 76.5314705),
(8848827530, 'beemamuhammed@gmail.com', 'beema muhammed', 'beemamuhammed', 'beembro', 'thodupuzha', 9.9364504, 76.5334705),
(9496617717, 'adhuuss@gmail.com', 'adharshya p', 'adharshyap', 'adhufreaky', 'malappuram', 9.9384504, 76.5114705),
(9496866691, 'gintutom@gmail.com', 'gintu tom', 'gintutom', 'gintu here', 'kottayam', 9.9324504, 76.5374705),
(9497888065, 'anandu97@gmail.com', 'anandu s', 'anandus', 'kozhikoodaaran', 'kozhikode', 9.9341504, 76.5315705),
(9633194711, 'armp97@gmail.com', 'AHMED REHMAN', 'ahmedrehman', 'im me', 'kottayam', 9.9348504, 76.5318705),
(9744327876, 'ankithtv@hotmail.com', 'ankith t v', 'ankithtv', 'ankithedifferent', 'kannur', 9.9348504, 76.5312705),
(9874567348, 'sidhin@me.in', 'sidhin s thomas', 'sidhinsthomas', 'haha', 'delhi', 9.9342304, 76.5316705),
(9874567765, 'hadeeb@outlook.com', 'hadeeb farhan k', 'hadeebfarhan', 'dude', 'malappuram', 9.9349504, 76.5317705);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
