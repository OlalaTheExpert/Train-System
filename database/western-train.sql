-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 02:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `western-train`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtrain`
--

CREATE TABLE `addtrain` (
  `id` int(11) NOT NULL,
  `train` varchar(250) NOT NULL,
  `departure` varchar(2500) NOT NULL,
  `destination` varchar(250) NOT NULL,
  `tdate` varchar(250) NOT NULL,
  `fare` int(250) NOT NULL,
  `seat` int(250) NOT NULL,
  `booked` int(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addtrain`
--

INSERT INTO `addtrain` (`id`, `train`, `departure`, `destination`, `tdate`, `fare`, `seat`, `booked`) VALUES
(50, 'Emirate Train', 'Nairobi', 'Kisumu', '30/04/2021', 500, 40, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `rand_id` int(255) DEFAULT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `departure` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `tdate` varchar(120) NOT NULL,
  `com` varchar(100) NOT NULL,
  `stat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `rand_id`, `fname`, `lname`, `email`, `age`, `phone`, `gender`, `departure`, `destination`, `tdate`, `com`, `stat`) VALUES
(245, NULL, 'Linnah ', 'Onyao', 'onyaolinnah@gmail.com', 20, '0716311660', 'Female', 'Nairobi', 'Kisumu', '2021-05-31', 'Email', '1'),
(266, NULL, 'Olala', 'Linnah', 'onyaolinnah@gmail.com', 20, '0716311660', 'Female', 'Nairobi', 'Kisumu', '2021-05-31', 'Email', '1'),
(271, NULL, 'Godwin', 'Osano', 'godwinosano@gmail.com', 21, '0716311660', 'Male', 'Nairobi', 'Kisumu', '2021-05-31', 'Email', '1'),
(272, NULL, 'Osano', 'Godwins', 'godwinosano@gmail.com', 22, '0716311660', 'Male', 'Nairobi', 'Mombasa', '2021-05-15', 'Email', '0'),
(273, NULL, 'Tillern', 'Bryson', 'brysonminodi@gmail.com', 20, '0716311660', 'Male', 'Nairobi', 'Mombasa', '2021-05-15', 'Email', '0'),
(274, NULL, 'Victor', 'Olala', 'olalavictor01@gmail.com', 12, '0716311660', 'Male', 'Nairobi', 'Kisumu', '2021-05-31', 'Email', '1'),
(275, NULL, 'Victor', 'Olala', 'olalavictor01@gmail.com', 45, '0716311660', 'Female', 'Nairobi', 'Mombasa', '2021-05-15', 'Phone', '1'),
(276, 1856549534, 'Victor', 'Olala', 'olalavictor01@gmail.com', 21, '1234567', 'Male', 'Nairobi', 'Mombasa', '2021-05-15', 'Phone', ''),
(277, NULL, 'Victor', 'Olala', 'olalavictor01@gmail.com', 12, '0716311660', 'Male', 'Nairobi', 'Mombasa', '2021-05-15', 'Phone', '1'),
(278, NULL, 'Victor', 'Olala', 'olalavictor01@gmail.com', 35, '0716311660', 'Male', 'Nairobi', 'Mombasa', '2021-05-15', 'Email', '0');

-- --------------------------------------------------------

--
-- Table structure for table `formtest`
--

CREATE TABLE `formtest` (
  `id` int(11) NOT NULL,
  `fname` varchar(120) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `reason` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `pass`) VALUES
(4, 'Olala', 12345),
(7, 'Vic', 1234),
(8, 'Vic', 123),
(9, 'Test', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`) VALUES
(1, 'Victor', 'test@gmail.com', 'Am testing the message section'),
(4, 'Olala', 'olalavictor01@gmail.com', 'The site is cool'),
(5, 'Test2', 'test2@gmail.com', 'This notification is better now. No doubt'),
(7, 'Bryson', 'bryson@gmail.com', 'The site is wow. Nice Job'),
(8, 'Bryson', 'bryson@gmail.com', 'The site is wow. Nice Job'),
(9, 'Godwin', 'godwin@mail.com', 'Last but not least. Last testing'),
(10, 'Godwin', 'godwin@mail.com', 'Last but not least. Last testing'),
(12, 'Victor Olala', 'olalavictor01@gmail.com', 'Optional. A boolean value that indicates whether or not to use XHTML compatible line breaks:');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `rand_id` int(10) NOT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `gender` varchar(100) NOT NULL,
  `departure` varchar(300) DEFAULT NULL,
  `destination` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tdate` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `seatno` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `rand_id`, `title`, `fname`, `lname`, `gender`, `departure`, `destination`, `phone`, `email`, `tdate`, `ttot`, `seatno`) VALUES
(170, 1875180183, NULL, 'Victor', 'Olala', 'Male', 'Nairobi', 'Kisumu', '0716311660', 'olalavictor01@gmail.com', '0000-00-00', 500.00, 5),
(173, 463642353, NULL, 'Victor', 'Olala', 'Male', 'Nairobi', 'Kisumu', '0716311660', 'olalavictor01@gmail.com', '2021-05-31', 500.00, 8),
(174, 0, NULL, 'Osano', 'Godwins', 'Male', 'Nairobi', 'Mombasa', '0716311660', 'godwinosano@gmail.com', '2021-05-15', 500.00, 3),
(175, 0, NULL, 'Osano', 'Godwins', 'Male', 'Nairobi', 'Mombasa', '0716311660', 'godwinosano@gmail.com', '2021-05-15', 850.00, 4),
(176, 0, NULL, 'Tillern', 'Bryson', 'Male', 'Nairobi', 'Mombasa', '0716311660', 'brysonminodi@gmail.com', '2021-05-15', 850.00, 5),
(177, 0, NULL, 'Victor', 'Olala', 'Male', 'Nairobi', 'Mombasa', '0716311660', 'olalavictor01@gmail.com', '2021-05-15', 850.00, 6);

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(11) NOT NULL,
  `train_id` int(11) DEFAULT NULL,
  `train_name` varchar(100) NOT NULL,
  `departure` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `train_id`, `train_name`, `departure`, `destination`, `price`, `date`, `time`) VALUES
(55, 36, '', 'Nairobi', 'Kisumu', 2000, '2021-05-31', '08:00:00'),
(59, 38, '', 'Nairobi', 'Kisumu', 20, '2021-05-07', '14:47:00'),
(60, 39, '', 'Nairobi', 'Mombasa', 850, '2021-05-15', '10:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `rowId` varchar(1) NOT NULL,
  `columnId` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `updatedby` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sent-emails`
--

CREATE TABLE `sent-emails` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `fname`, `lname`, `email`, `date`) VALUES
(16, 'Osano', 'Godwins', 'godwinosano@gmail.com', '06/05/2021'),
(17, 'Victor', 'Olala', 'olalavictor01@gmail.com', '06/05/2021'),
(18, 'Victor', 'Olala', 'olalavictor01@gmail.com', '06/05/2021'),
(19, 'Victor', 'Olala', 'olalavictor01@gmail.com', '06/05/2021'),
(20, 'Tillern', 'Bryson', 'brysonminodi@gmail.com', '06/05/2021'),
(21, 'Tillern', 'Bryson', 'brysonminodi@gmail.com', '06/05/2021'),
(22, 'Victor', 'Olala', 'olalavictor01@gmail.com', '06/05/2021'),
(23, 'Osano', 'Godwins', 'godwinosano@gmail.com', '06/05/2021'),
(24, 'Victor', 'Olala', 'olalavictor01@gmail.com', '06/05/2021'),
(25, 'Tillern', 'Bryson', 'brysonminodi@gmail.com', '06/05/2021'),
(26, 'Victor', 'Olala', 'olalavictor01@gmail.com', '07/05/2021'),
(27, 'Victor', 'Olala', 'olalavictor01@gmail.com', '07/05/2021'),
(28, 'Victor', 'Olala', 'olalavictor01@gmail.com', '07/05/2021');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `id` int(11) NOT NULL,
  `train` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`id`, `train`) VALUES
(1, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, '');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `seats` int(11) NOT NULL,
  `booked_seats` int(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `viti` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`id`, `name`, `seats`, `booked_seats`, `status`, `viti`) VALUES
(36, 'Emirate', 40, 20, 0, 'A1, B1, C1, D1, E5'),
(38, 'Test', 1, 0, 0, ''),
(39, 'Deluxe City Star', 45, 3, 0, ''),
(40, 'Olala', 20, 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtrain`
--
ALTER TABLE `addtrain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formtest`
--
ALTER TABLE `formtest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`rowId`,`columnId`);

--
-- Indexes for table `sent-emails`
--
ALTER TABLE `sent-emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtrain`
--
ALTER TABLE `addtrain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT for table `formtest`
--
ALTER TABLE `formtest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `sent-emails`
--
ALTER TABLE `sent-emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `trains`
--
ALTER TABLE `trains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
