-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 06:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `af`
--

-- --------------------------------------------------------

--
-- Table structure for table `blooddonor`
--

CREATE TABLE `blooddonor` (
  `name` varchar(30) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `nid` int(15) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bloodgroup` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blooddonor`
--

INSERT INTO `blooddonor` (`name`, `fathername`, `nid`, `phone`, `address`, `bloodgroup`) VALUES
('hjjghg', 'cvggf', 1555468, 458956, 'cxbbrgfd', 'b+'),
('dfsdf', 'sdfsdf', 561816, 166668498, 'dsfasfac', 'o-');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `name` varchar(30) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `nid` int(15) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`name`, `fathername`, `nid`, `phone`, `address`) VALUES
('dsffa', 'sdfsa', 545, 55, ''),
('Md Alvi Nirob', 'MD. REJAUL KARIM', 2147483647, 1985372087, 'sharifpur'),
('kamruzzaman', '', 12589654, 1996359856, 'sharifpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blooddonor`
--
ALTER TABLE `blooddonor`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
