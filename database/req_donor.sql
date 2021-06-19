-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 01:34 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service`
--

-- --------------------------------------------------------

--
-- Table structure for table `req_donor`
--

CREATE TABLE `req_donor` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `gender` enum('Male','Female','Others','') NOT NULL,
  `bgroup` enum('A+','A-','B+','B-','O+','O-','AB+','AB-') NOT NULL,
  `units` varchar(5) NOT NULL,
  `nameandaddress` varchar(300) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `reqname` date NOT NULL,
  `cname` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mailid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req_donor`
--

INSERT INTO `req_donor` (`id`, `pname`, `gender`, `bgroup`, `units`, `nameandaddress`, `dname`, `reqname`, `cname`, `address`, `phone`, `mailid`) VALUES
(1, 'Dev', 'Male', 'A-', '250ml', 'KK hospital\r\n75/3 54 Alandur Road Saidapet Chennai-15.', 'Dr Koushik', '0000-00-00', 'Abhinav', 'No 12 Crisscross street chennai-15', '9841023456', 'abhinav123@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `req_donor`
--
ALTER TABLE `req_donor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `req_donor`
--
ALTER TABLE `req_donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
