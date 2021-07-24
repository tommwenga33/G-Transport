-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 10:45 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `id` int(3) NOT NULL,
  `job_no` int(10) NOT NULL,
  `description` varchar(30) NOT NULL,
  `start` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `driver` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`id`, `job_no`, `description`, `start`, `destination`, `driver`) VALUES
(1, 1234, 'Transport Milk', 'nairobi', 'Mombasa', 17),
(3, 96, 'computers and printers', '1400', 'Shimba hills', 17),
(4, 12, 'magazine', '0830', 'kilifi', 4),
(5, 12, 'computers', '0830', 'Kilifi', 17);

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int(3) NOT NULL,
  `Rq_no` varchar(20) NOT NULL,
  `date` varchar(15) NOT NULL,
  `job_no` int(20) NOT NULL,
  `section` varchar(50) NOT NULL,
  `Amount` int(5) NOT NULL,
  `vehicle_no` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`id`, `Rq_no`, `date`, `job_no`, `section`, `Amount`, `vehicle_no`) VALUES
(1, '', '2019-11-04', 1234567, 'engine maintenance', 10000, 4),
(2, 'Rq-271', '12-12-2019', 35341, 'Engine', 20000, 2434),
(3, 'Rq-68', '2-4-2010', 4656, 'Tire', 10000, 856),
(4, 'Rq-931', '1200', 2344, 'wheel repair', 3000, 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `profile` varchar(260) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile`, `username`, `password`, `gender`, `user_type`) VALUES
(4, 'uploadfolder/Koala.jpg', 'driver', '2222', 'female', 'driver'),
(13, '', 'admin', '', 'male', 'admin'),
(14, 'uploadfolder/Koala.jpg', 'flirt', '0000', 'male', 'flirt'),
(15, 'uploadfolder/Koala.jpg', 'mto', '1111', 'male', 'mto'),
(17, 'uploadfolder/Koala.jpg', 'tom', '1111', 'male', 'driver'),
(18, 'uploadfolder/Koala.jpg', 'tonny', '3333', 'male', 'driver');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`) VALUES
(1, 'mto'),
(2, 'flirt'),
(3, 'driver');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `ticket_no` varchar(20) NOT NULL,
  `driverID` int(3) NOT NULL,
  `date` varchar(20) NOT NULL,
  `start_time` varchar(20) NOT NULL,
  `start` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `finish_time` varchar(20) NOT NULL,
  `speedometer_reading_start` int(10) NOT NULL,
  `speedometer_reading_finish` int(10) NOT NULL,
  `kilometer` int(3) NOT NULL,
  `fuel` int(3) NOT NULL,
  `oil` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`ticket_no`, `driverID`, `date`, `start_time`, `start`, `destination`, `finish_time`, `speedometer_reading_start`, `speedometer_reading_finish`, `kilometer`, `fuel`, `oil`) VALUES
('123', 9, '2020-03-01', '17:00:00.000000', 'htfg', 'rdfb', '38:00:00.000000', 6789, 6789, 67, 678, 67),
('Ticket-209', 0, '2/2/2020', '00;00', 'nairobi', 'Kitale', '02:00', 123, 452, 200, 0, 123),
('Ticket-362', 0, '1563512', '2342432412', '242', '242322', '2342', 232, 12321, 2323, 0, 123),
('Ticket-433', 0, '12.03.2020', '1400', 'GPO', 'Shimba hills', '1850', 1232565, 122255555, 59, 0, 234),
('Ticket-600', 0, '23635473', '1800', '1800', 'maasai', '9000', 34677878, 2356667, 222, 0, 20),
('Ticket-677', 0, '120909', '1200', '1200', 'chuka', '400', 0, 0, 0, 0, 0),
('Ticket-791', 0, '6', '5', 'gfvh', 'etryu', '45', 2435, 45, 42, 0, 436);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`ticket_no`),
  ADD KEY `driverID` (`driverID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
