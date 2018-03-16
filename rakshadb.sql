-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2018 at 11:13 PM
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
(8281596630, 'abhishek.mvr@outlook.com', 'abhishek c', 'abhishekc', 'he is abhishek', 'kottayam', 9.9344504, 76.5314705),
(8281768654, 'bineeth@gmail.com', 'bineeth', 'bineethbinu', 'im coool', 'alappuzha', 9.9344504, 76.5314705),
(8281860141, 'azin.makaranth@gmail.com', 'azin makaranth', 'azinmakaranth', 'myself azin', 'kottayam', 9.9344504, 76.5314705),
(8848827530, 'beemamuhammed@gmail.com', 'beema muhammed', 'beemamuhammed', 'beembro', 'thodupuzha', 9.9344504, 76.5314705),
(9496617717, 'adhuuss@gmail.com', 'adharshya p', 'adharshyap', 'adhufreaky', 'malappuram', 9.9344504, 76.5314705),
(9496866691, 'gintutom@gmail.com', 'gintu tom', 'gintutom', 'gintu here', 'kottayam', 9.9344504, 76.5314705),
(9497888065, 'anandu97@gmail.com', 'anandu s', 'anandus', 'kozhikoodaaran', 'kozhikode', 9.9344504, 76.5314705),
(9633194711, 'armp97@gmail.com', 'AHMED REHMAN', 'ahmedrehman', 'im me', 'kottayam', 9.9344504, 76.5314705),
(9744327876, 'ankithtv@hotmail.com', 'ankith t v', 'ankithtv', 'ankithedifferent', 'kannur', 9.9344504, 76.5314705),
(9846347501, 'azin.maaakkaaraanttthhhh@gmail.com', 'azzinnMakaranth', '****makaranth', 'am awsomee...', 'Kottayam', 9.5457888665555, 788.114444477778),
(9874567348, 'sidhin@me.in', 'sidhin s thomas', 'sidhinsthomas', 'haha', 'delhi', 9.9344504, 76.5314705),
(9874567765, 'hadeeb@outlook.com', 'hadeeb farhan k', 'hadeebfarhan', 'dude', 'malappuram', 9.9344504, 76.5314705);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
