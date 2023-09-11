-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 12:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railwaydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userid` int(50) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userid`, `username`, `password`, `utype`, `phoneno`, `email`, `address`, `city`) VALUES
(11620, 'steve', 'captain', 'admin', '999999999', 'priyabiju332@gmail.com', 'Kottakkupurathu hous', 'Kottaya'),
(11621, 'dora', 'dora123', 'user', '7856435674', 'dora332@gmail.com', 'killadiparambil', 'kattupara'),
(11625, 'krithik', '123', 'user', '5647839', 'fgyuhukhihu@gmail.com', 'vandiperiyar', 'kottayam'),
(11628, 'ansar', '123', 'user', '98765543212', 'kikllk@gmail.com', 'jgguii', 'kottayam'),
(11631, 'jake', '123', 'user', '567888899', 'arqryuu@gmail.com', 'kerala', 'kottyam'),
(11632, 'Arjun', 'arjun123', 'user', '8594034332', 'arjunbiju322@gmail.com', 'kerala', 'kanjirapally');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcements`
--

CREATE TABLE `tbl_announcements` (
  `id` int(50) NOT NULL,
  `announcement` longtext NOT NULL,
  `announcer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_announcements`
--

INSERT INTO `tbl_announcements` (`id`, `announcement`, `announcer`) VALUES
(7, 'RAJADHANI EXPRESS SCHEDULED ON 19:00 IS 30 MINUTE LATE', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `feedback` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `username`, `userid`, `feedback`) VALUES
(4, 'ansar', 0, 'NICE'),
(15, 'dora', 11621, 'EXCELLENT'),
(16, 'dora', 11621, 'BRILLIANT'),
(17, 'dora', 11621, 'SUPERB'),
(18, 'krithik', 11625, 'aewsome\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `uid` int(50) NOT NULL,
  `filename` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`uid`, `filename`) VALUES
(11621, 'IMG_20210910_203528.jpg'),
(11625, 'hd_b34379f187c1c993319928f45fceb885.jpg'),
(11628, 'Dr9WX9GWkAA1CLt.jpg'),
(11632, 'IMG_20220322_191952.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave`
--

CREATE TABLE `tbl_leave` (
  `staff_id` int(50) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `no_of_days` int(50) NOT NULL,
  `reason` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_leave`
--

INSERT INTO `tbl_leave` (`staff_id`, `staff_name`, `date`, `no_of_days`, `reason`) VALUES
(5, 'tony stark', '2022-11-11', 26, 'wedding'),
(5, 'tony stark', '2022-11-26', 2, 'fever');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`username`, `password`, `usertype`) VALUES
('ansar', '123', 'user'),
('Arjun', 'arjun123', 'user'),
('dora', 'dora123', 'user'),
('jake', '123', 'user'),
('krithik', '123', 'user'),
('stark23', 'ironman', 'emp'),
('steve', 'captain', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `pid` int(50) NOT NULL,
  `card_no` varchar(50) NOT NULL,
  `expry` text NOT NULL,
  `cvv` varchar(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `id` int(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`pid`, `card_no`, `expry`, `cvv`, `username`, `id`, `email`) VALUES
(16, '6767', '6566', '99', 'dora', 11621, 'dora332@gmail.com'),
(17, '6767', '6566', '99', 'dora', 11621, 'dora332@gmail.com'),
(18, '2347', '25/6', '3435', 'dora', 11621, 'dora332@gmail.com'),
(19, '2347', '25/6', '3435', 'dora', 11621, 'dora332@gmail.com'),
(20, '567', '6/6', '6778', 'dora', 11621, 'dora332@gmail.com'),
(21, '1234 6789 3489', '09/8', '786', 'killadi', 11626, 'killadi332@gmail.com'),
(22, '1234 5678 4567', '08/6', '987', 'killadi', 11626, 'killadi332@gmail.com'),
(23, '4325', '12/5', '566', 'dora', 11621, 'dora332@gmail.com'),
(24, '234656887', '09/9', '456', 'krithik', 11625, 'fgyuhukhihu@gmail.com'),
(25, '1234 1234 6789', '23/5', '564', 'Arjun', 11627, 'killadi123@gmail.com'),
(26, '34567890', '4/9', '67', 'dora', 11621, 'dora332@gmail.com'),
(27, '1784 3453 9090', '08/5', '677', 'ansar', 11628, 'kikllk@gmail.com'),
(28, '1288 4566 6788', '23/9', '566', 'dora', 11621, 'dora332@gmail.com'),
(29, '99999900000', '8/9', '900', 'dora', 11621, 'dora332@gmail.com'),
(30, '9000 9000 9000', '09/9', '899', 'dora', 11621, 'dora332@gmail.com'),
(31, '1236 7890 0965', '27/2050', '456', 'Arjun', 11632, 'arjunbiju322@gmail.com'),
(32, '1236 7890 0965', '27/2050', '456', 'Arjun', 11632, 'arjunbiju322@gmail.com'),
(33, '2356 8906 9876', '02/2050', '909', 'dora', 11621, 'dora332@gmail.com'),
(34, '2356 8906 9876', '02/2050', '909', 'dora', 11621, 'dora332@gmail.com'),
(35, '5678 4563 0987', '29/2045', '345', 'dora', 11621, 'dora332@gmail.com'),
(36, '1234 5677 890', '30/2030', '678', 'dora', 11621, 'dora332@gmail.com'),
(37, '2345678889', '23/2056', '678', 'krithik', 11625, 'fgyuhukhihu@gmail.com'),
(38, '9807 6785 4503', '23/2056', '786', 'krithik', 11625, 'fgyuhukhihu@gmail.com'),
(39, '5674 4677 4563', '23/2030', '767', 'krithik', 11625, 'fgyuhukhihu@gmail.com'),
(40, '9090 9898 6766', '12/2067', '689', 'krithik', 11625, 'fgyuhukhihu@gmail.com'),
(41, '3345 6777 9087', '21/2038', '675', 'dora', 11621, 'dora332@gmail.com'),
(42, '1224 776 8754', '25/2050', '788', 'dora', 11621, 'dora332@gmail.com'),
(43, '6784 4567 2349', '23/2030', '565', 'dora', 11621, 'dora332@gmail.com'),
(44, '4', '4', '4', 'dora', 11621, 'dora332@gmail.com'),
(45, '4', '4', '4', 'dora', 11621, 'dora332@gmail.com'),
(46, '4', '4', '4', 'dora', 11621, 'dora332@gmail.com'),
(47, '4', '4', '4', 'dora', 11621, 'dora332@gmail.com'),
(48, '4', '4', '4', 'dora', 11621, 'dora332@gmail.com'),
(49, '4', '4', '4', 'dora', 11621, 'dora332@gmail.com'),
(50, '4', '4', '4', 'dora', 11621, 'dora332@gmail.com'),
(51, '4', '4', '4', 'dora', 11621, 'dora332@gmail.com'),
(52, '3244 4555 5555', '23/2067', '765', 'dora', 11621, 'dora332@gmail.com'),
(53, '7', '7', '7', 'dora', 11621, 'dora332@gmail.com'),
(54, '1245 6743 6754', '21/2060', '234', 'dora', 11621, 'dora332@gmail.com'),
(55, '1245 6743 6754', '21/2060', '234', 'dora', 11621, 'dora332@gmail.com'),
(56, '1233', '11', '11', 'dora', 11621, 'dora332@gmail.com'),
(57, '12', '11', '111', 'dora', 11621, 'dora332@gmail.com'),
(58, '12', '11', '111', 'dora', 11621, 'dora332@gmail.com'),
(59, '123', '11', '22', 'krithik', 11625, 'fgyuhukhihu@gmail.com'),
(60, '123', '11', '22', 'krithik', 11625, 'fgyuhukhihu@gmail.com'),
(61, '11', '11', '11', 'dora', 11621, 'dora332@gmail.com'),
(62, '3425 6745 3421', '23/2050', '546', 'steve', 11620, 'priyabiju332@gmail.com'),
(63, '1236 8765 9432', '12/2040', '342', 'ansar', 11628, 'kikllk@gmail.com'),
(64, '123', '33', '33', 'ansar', 11628, 'kikllk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservation`
--

CREATE TABLE `tbl_reservation` (
  `ticket_id` int(50) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `checkin` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `no_of_seats` int(50) NOT NULL,
  `train` varchar(50) NOT NULL,
  `class` enum('FIRST','AC','SLEEPER') NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phoneno` varchar(200) NOT NULL,
  `userid` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reservation`
--

INSERT INTO `tbl_reservation` (`ticket_id`, `date`, `time`, `checkin`, `destination`, `no_of_seats`, `train`, `class`, `name`, `email`, `phoneno`, `userid`) VALUES
(23, '2022-10-30', '19:40:00.000000', 'kollam', 'goa', 3, 'parasuram', '', 'killadi', 'killadi332@gmail.com', '978452672', 11626),
(24, '2022-10-30', '19:35:00.000000', 'chennai', 'goa', 5, 'RAJADHANI', '', 'killadi', 'killadi332@gmail.com', '978452672', 11626),
(27, '2022-10-30', '19:35:00.000000', 'chennai', 'goa', 2, 'RAJADHANI', '', 'Arjun', 'killadi123@gmail.com', '859423567', 11627),
(29, '2022-10-30', '19:35:00.000000', 'chennai', 'goa', 2, 'RAJADHANI', '', 'ansar', 'kikllk@gmail.com', '98765543212', 11628),
(60, '2022-10-30', '19:35:00.000000', 'chennai', 'goa', 3, 'RAJADHANI', 'FIRST', 'dora', 'dora332@gmail.com', '7856435674', 11621),
(61, '2022-10-30', '19:35:00.000000', 'chennai', 'goa', 2, 'RAJADHANI', 'AC', 'krithik', 'fgyuhukhihu@gmail.com', '5647839', 11625),
(62, '2022-10-30', '19:35:00.000000', 'chennai', 'goa', 4, 'RAJADHANI', 'SLEEPER', 'krithik', 'fgyuhukhihu@gmail.com', '5647839', 11625),
(63, '2022-10-30', '19:35:00.000000', 'chennai', 'goa', 2, 'RAJADHANI', 'SLEEPER', 'dora', 'dora332@gmail.com', '7856435674', 11621),
(64, '2022-10-30', '19:40:00.000000', 'kollam', 'goa', 5, 'parasuram', 'FIRST', 'steve', 'priyabiju332@gmail.com', '999999999', 11620),
(65, '2022-10-30', '19:35:00.000000', 'chennai', 'goa', 3, 'RAJADHANI', 'AC', 'ansar', 'kikllk@gmail.com', '98765543212', 11628),
(66, '2022-10-30', '19:35:00.000000', 'chennai', 'goa', 1, 'RAJADHANI', 'SLEEPER', 'ansar', 'kikllk@gmail.com', '98765543212', 11628);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `tname` varchar(50) NOT NULL,
  `startingpt` varchar(70) NOT NULL,
  `destination` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `charge` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_schedule`
--

INSERT INTO `tbl_schedule` (`tname`, `startingpt`, `destination`, `date`, `time`, `charge`) VALUES
('CHENNAI EXPRESS', 'MADURA', 'GOA', '2023-01-15', '15:00:00.000000', '300'),
('nethravathi', 'kollam', 'madurai', '2022-10-29', '21:36:00.000000', '100'),
('parasuram', 'kollam', 'goa', '2022-10-30', '19:40:00.000000', '400'),
('RAJADHANI', 'chennai', 'goa', '2022-10-30', '19:35:00.000000', '500');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `id` int(50) UNSIGNED NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `uid_no` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`id`, `s_name`, `username`, `password`, `email`, `phone_no`, `uid_no`, `adress`) VALUES
(5, 'tony stark', 'stark23', 'ironman', 'arjunbiju332@gmail.com', '9656413696', '333333', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ticket_checking`
--

CREATE TABLE `tbl_ticket_checking` (
  `id` int(200) NOT NULL,
  `date` date NOT NULL,
  `seatno` varchar(200) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  `passenger` varchar(200) NOT NULL,
  `ticketno` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ticket_checking`
--

INSERT INTO `tbl_ticket_checking` (`id`, `date`, `seatno`, `status`, `passenger`, `ticketno`) VALUES
(4, '2023-01-10', '01', 'Y', 'alan', '1783');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_train_details`
--

CREATE TABLE `tbl_train_details` (
  `tid` int(50) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `starting_point` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `total_seats` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_train_details`
--

INSERT INTO `tbl_train_details` (`tid`, `tname`, `starting_point`, `destination`, `total_seats`) VALUES
(7123506, 'rajadhani', 'kottayam', 'delhi', 100),
(7123507, 'nethravathi', 'kottayam', 'chennai', 500),
(7123508, 'chennai express', 'chennai', 'goa', 150),
(7123509, 'madras mail', 'kottayam', 'chennai', 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tbl_announcements`
--
ALTER TABLE `tbl_announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`tname`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ticket_checking`
--
ALTER TABLE `tbl_ticket_checking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_train_details`
--
ALTER TABLE `tbl_train_details`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userid` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11633;

--
-- AUTO_INCREMENT for table `tbl_announcements`
--
ALTER TABLE `tbl_announcements`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `pid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  MODIFY `ticket_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_ticket_checking`
--
ALTER TABLE `tbl_ticket_checking`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
