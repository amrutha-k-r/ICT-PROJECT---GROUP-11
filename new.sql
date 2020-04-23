-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2020 at 06:01 PM
-- Server version: 8.0.19
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turnos`
--
CREATE DATABASE IF NOT EXISTS `turnos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `turnos`;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `bid` int NOT NULL,
  `branch` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`bid`, `branch`) VALUES
(1, 'Myer Centre'),
(2, 'Queens Plaza'),
(3, 'Kelvin Grove');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int NOT NULL,
  `name` varchar(25) NOT NULL,
  `empid` int NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mob` bigint NOT NULL,
  `branch` varchar(25) NOT NULL,
  `designation` varchar(25) NOT NULL,
  `type` int NOT NULL DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `empid`, `password`, `email`, `mob`, `branch`, `designation`, `type`) VALUES
(1, 'admin', 10000, '$2y$10$TtE6xJiZhYnKG8YTuh0XB.ZnE5sZeFQmXd.MdSt1UV3yy03j6runW', 'admin@tur.com', 6263568589, 'Myer Centre', 'Manager', 1),
(2, 'Bony', 101, '$2y$10$1RVDtsI7FNNdvVA72s5aEO/ngg1d4zcaPaZFsr/PxrVpENoXCwMMC', 'jeri@gg.com', 8596748596, 'Myer Centre', 'Employee', 0),
(3, 'John', 120, '$2y$10$EYQPnQUYwI96NiLLfVBgVegzgt3CvnbhOhqL0CDsH5cbhkIcKGHQ2', 'john@ggm.com', 7845789655, 'Myer Centre', 'Employee', 0),
(4, 'Janie', 110, '$2y$10$4f2/0oCVQLQzkCW0S79pu.s5Sw/EW/A9u9O1isRZOUFi41H7BBAxa', 'sree@gmail.com', 7894567788, 'Kelvin Grove', 'Employee', 0),
(5, 'tony', 111, '$2y$10$E/nkKd5cDGeYjhu0Selv5eQU/lpd2w6rhou.jgUAwt0fl7ybfjtgS', 'tony@gmail.com', 9879879879, 'Queens Street', 'Manager', 0),
(6, 'super', 55, '$2y$10$YiEzSehUiNHVgXGst65LFeOaq0qdWN9tpw4kdJSFBpVW0CRLldY0K', 'super@gm.om', 8974561230, 'Myer Centre', 'Manager', 10),
(7, 'Louis', 900, '$2y$10$obJ3/jlalmQhqLk6XO7Qc.XK8wo3y41N8Dx209ays72vlv5NYZb.q', 'louis@gmail.com', 401866700, 'Myer Centre', 'Employee', 0),
(8, 'Zain', 800, '$2y$10$Liq55TdUIDxxe4zRO6U0o.yBiMx70PPwYn9yGc8o89.9POf9rofNC', 'zain@gmail.com', 9678686852, 'Kelvin Grove', 'Employee', 0);

-- --------------------------------------------------------

--
-- Table structure for table `leave_approve`
--

CREATE TABLE `leave_approve` (
  `la_id` int NOT NULL,
  `empid` int NOT NULL,
  `l_type` varchar(20) NOT NULL,
  `l_balance` varchar(10) NOT NULL,
  `l_date` date NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `l_branch` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `leave_approve`
--

INSERT INTO `leave_approve` (`la_id`, `empid`, `l_type`, `l_balance`, `l_date`, `status`, `l_branch`) VALUES
(1, 2, 'SL', '20', '2020-03-25', 2, 'Coopers Plains'),
(2, 2, 'AL', '20', '2020-03-23', 2, 'Coopers Plains'),
(3, 2, 'CL', ' 20', '2020-03-23', 2, 'Coopers Plains'),
(4, 2, 'CL', ' 20', '2020-03-25', 5, 'Coopers Plains'),
(5, 2, 'AL', '30', '2020-03-19', 5, 'Coopers Plains'),
(6, 2, 'CL', '20', '2020-03-24', 5, 'Coopers Plains'),
(7, 2, 'SL', '15', '2020-03-26', 5, 'Coopers Plains'),
(8, 2, 'SL', '15', '2020-03-24', 5, 'Coopers Plains');

-- --------------------------------------------------------

--
-- Table structure for table `leave_tb`
--

CREATE TABLE `leave_tb` (
  `lid` int NOT NULL,
  `empid` int NOT NULL,
  `CL` int NOT NULL,
  `SL` int NOT NULL,
  `AL` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_tb`
--

INSERT INTO `leave_tb` (`lid`, `empid`, `CL`, `SL`, `AL`) VALUES
(1, 2, 18, 13, 29),
(2, 3, 20, 15, 30);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mid` int NOT NULL,
  `empid` int NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`mid`, `empid`, `message`) VALUES
(1, 2, 'A new roster has been scheduled. View your roster for further details.'),
(2, 2, 'Your registration approved.'),
(3, 2, 'Your leave request rejected. Contact manager for further details.'),
(4, 2, 'Your leave request processed and approved.'),
(5, 7, 'Your registration approved.'),
(6, 2, 'A new roster has been scheduled. View your roster for further details.'),
(7, 2, 'A new roster has been scheduled. View your roster for further details.'),
(8, 3, 'A new roster has been scheduled. View your roster for further details.'),
(9, 7, 'A new roster has been scheduled. View your roster for further details.'),
(10, 7, 'A new roster has been scheduled. View your roster for further details.'),
(11, 3, 'A new roster has been scheduled. View your roster for further details.'),
(12, 3, 'A new roster has been scheduled. View your roster for further details.'),
(13, 7, 'A new roster has been scheduled. View your roster for further details.'),
(14, 2, 'A new roster has been scheduled. View your roster for further details.'),
(15, 5, 'A new roster has been scheduled. View your roster for further details.'),
(16, 2, 'A new roster has been scheduled. View your roster for further details.'),
(17, 2, 'A new roster has been scheduled. View your roster for further details.'),
(18, 8, 'Your registration approved.');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int NOT NULL,
  `empid` int NOT NULL,
  `s_date` date NOT NULL,
  `shift` varchar(50) NOT NULL,
  `branch` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `empid`, `s_date`, `shift`, `branch`) VALUES
(1, 3, '2020-03-20', '8', 'Coopers Plains'),
(2, 3, '2020-03-27', '7', 'Queens Street'),
(3, 2, '2020-03-28', '4:00 PM - 8:00 PM', 'Coopers Plains'),
(4, 4, '2020-03-21', '7', 'Coopers Plains'),
(5, 2, '2020-02-02', '9', 'Coopers Plains'),
(6, 3, '2020-02-01', '7', 'Coopers Plains'),
(7, 3, '2020-01-31', '7', 'Queens Street'),
(8, 4, '2020-02-11', '9', 'Coopers Plains'),
(9, 2, '2020-02-11', '8', 'Coopers Plains'),
(10, 4, '2020-02-11', '8', 'Coopers Plains'),
(11, 2, '2020-02-12', '10:00 AM - 1:00 PM', 'Coopers Plains'),
(12, 4, '2020-03-19', '10:00 AM - 1:00 PM', 'Coopers Plains'),
(13, 4, '2020-03-21', '10:00 AM - 1:00 PM', 'Coopers Plains'),
(14, 4, '2020-03-20', '10:00 AM - 1:00 PM', 'Coopers Plains'),
(15, 2, '2020-03-19', '10:00 AM - 1:00 PM', 'Coopers Plains'),
(16, 2, '2020-03-20', '10:00 AM - 1:00 PM', 'Coopers Plains'),
(17, 2, '2020-03-21', '10:00 AM - 1:00 PM', 'Coopers Plains'),
(18, 5, '2020-03-21', '10:00 AM - 1:00 PM', 'Coopers Plains'),
(19, 4, '2020-03-26', '10:00 AM - 1:00 PM', 'Coopers Plains'),
(20, 3, '2020-03-26', '10:00 AM - 1:00 PM', 'Coopers Plains'),
(21, 2, '2020-03-30', '12:15 PM - 4:15 PM', 'Coopers Plains'),
(22, 2, '2020-03-31', '10:00 AM - 1:00 PM', 'Coopers Plains'),
(25, 5, '2020-03-31', '12:00 PM - 4:00 PM', 'Queens Street'),
(26, 2, '2020-03-29', '8:00 AM - 12:00 PM', 'Coopers Plains'),
(27, 2, '2020-04-20', '12:00 AM - 6:00 AM', 'Myer Centre'),
(28, 2, '2020-04-22', '5:00 AM - 1:00 PM', 'Myer Centre'),
(29, 3, '2020-04-20', '8:00 AM - 4:00 PM', 'Myer Centre'),
(30, 7, '2020-04-21', '4:00 PM - 12:00 AM', 'Myer Centre'),
(31, 7, '2020-04-22', '8:00 AM - 4:00 PM', 'Myer Centre'),
(32, 3, '2020-04-24', '12:00 PM - 6:00 PM', 'Myer Centre'),
(33, 3, '2020-04-20', '5:00 AM - 1:00 PM', 'Myer Centre'),
(34, 7, '2020-04-20', '8:00 AM - 4:00 PM', 'Myer Centre'),
(35, 2, '2020-04-20', '6:00 AM - 12:00 PM', 'Myer Centre'),
(36, 5, '2020-04-22', '12:00 PM - 6:00 PM', 'Queens Street'),
(37, 2, '2020-04-25', '10:00 AM - 4:00 PM', 'Myer Centre'),
(38, 2, '2020-04-23', '8:00 AM - 4:15 PM', 'Myer Centre');

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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mid`);

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
  MODIFY `bid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `leave_approve`
--
ALTER TABLE `leave_approve`
  MODIFY `la_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `leave_tb`
--
ALTER TABLE `leave_tb`
  MODIFY `lid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
