-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 06:16 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turnos`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `bid` int(8) NOT NULL,
  `branch` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(8) NOT NULL,
  `name` varchar(25) NOT NULL,
  `empid` int(8) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mob` bigint(12) NOT NULL,
  `branch` varchar(25) NOT NULL,
  `designation` varchar(25) NOT NULL,
  `type` int(8) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `empid`, `password`, `email`, `mob`, `branch`, `designation`, `type`) VALUES
(1, 'admin', 10000, '$2y$10$TtE6xJiZhYnKG8YTuh0XB.ZnE5sZeFQmXd.MdSt1UV3yy03j6runW', 'admin@tur.com', 6263568589, 'One', 'Manager', 1),
(2, 'jerin', 101, '$2y$10$1RVDtsI7FNNdvVA72s5aEO/ngg1d4zcaPaZFsr/PxrVpENoXCwMMC', 'jeri@gg.com', 8596748596, 'main', 'super', 0);

-- --------------------------------------------------------

--
-- Table structure for table `leave_approve`
--

CREATE TABLE `leave_approve` (
  `la_id` int(8) NOT NULL,
  `empid` int(8) NOT NULL,
  `l_type` varchar(10) NOT NULL,
  `l_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leave_tb`
--

CREATE TABLE `leave_tb` (
  `lid` int(8) NOT NULL,
  `empid` int(8) NOT NULL,
  `tot_cl` int(8) NOT NULL,
  `tot_sl` int(8) NOT NULL,
  `tot_al` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(8) NOT NULL,
  `empid` int(8) NOT NULL,
  `date` date NOT NULL,
  `shift_no` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `empid` (`empid`);

--
-- Indexes for table `leave_approve`
--
ALTER TABLE `leave_approve`
  ADD PRIMARY KEY (`la_id`);

--
-- Indexes for table `leave_tb`
--
ALTER TABLE `leave_tb`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `bid` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `leave_approve`
--
ALTER TABLE `leave_approve`
  MODIFY `la_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `leave_tb`
--
ALTER TABLE `leave_tb`
  MODIFY `lid` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
