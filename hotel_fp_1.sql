-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 06:06 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_fp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('lullaby123', 'wkwkw123'),
('123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cust_feedback`
--

CREATE TABLE `cust_feedback` (
  `email` varchar(50) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust_feedback`
--

INSERT INTO `cust_feedback` (`email`, `feedback`) VALUES
('asd@gmail.com', 'asewde');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `no_room` varchar(5) NOT NULL,
  `nights` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `nik`, `name`, `phone`, `email`, `address`, `no_room`, `nights`) VALUES
(19, '1234567891234567', 'Syafira Widiyanti', '081234567890', 'syafira@gmail.com', '', '16', 2),
(20, '9876543219876543', 'Maulana Daffa A', '081169696969', 'maulanada25@gmail.com', '', '1', 5),
(22, '1234123412341234', 'Kamisato Ayaka', '088899997777', 'ayakasan@gmail.com', '', '3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `no` int(5) NOT NULL,
  `guest_name` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`no`, `guest_name`, `status`) VALUES
(1, 'Maulana Daffa A', 'Occupied'),
(2, NULL, 'Available'),
(3, 'Kamisato Ayaka', 'Occupied'),
(4, NULL, 'Under<br>Maintance'),
(5, NULL, 'Available'),
(6, NULL, 'Available'),
(7, NULL, 'Available'),
(8, NULL, 'Available'),
(9, NULL, 'Available'),
(10, NULL, 'Available'),
(11, NULL, 'Available'),
(12, NULL, 'Available'),
(13, NULL, 'Available'),
(14, NULL, 'Available'),
(15, NULL, 'Available'),
(16, 'Syafira Widiyanti', 'Occupied'),
(17, NULL, 'Available'),
(18, NULL, 'Available'),
(19, NULL, 'Available'),
(20, NULL, 'Available'),
(21, NULL, 'Available'),
(22, NULL, 'Available'),
(23, NULL, 'Available'),
(24, NULL, 'Available'),
(25, NULL, 'Available'),
(26, NULL, 'Available'),
(27, NULL, 'Available'),
(28, NULL, 'Available'),
(29, NULL, 'Available'),
(30, NULL, 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
