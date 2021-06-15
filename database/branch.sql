-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 12:42 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branchid` int(11) NOT NULL,
  `branchname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `faxnumber` varchar(255) NOT NULL,
  `tanno` varchar(255) NOT NULL,
  `isgst` varchar(20) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `pfno` varchar(255) NOT NULL,
  `esicno` varchar(255) NOT NULL,
  `loginshortername` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `createddate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchid`, `branchname`, `address`, `address1`, `address2`, `district`, `pincode`, `state`, `country`, `phonenumber`, `email`, `faxnumber`, `tanno`, `isgst`, `gst`, `pfno`, `esicno`, `loginshortername`, `status`, `createddate`) VALUES
(2, 'branch21', 'address1', 'address11', 'address21', '', '123451', 'tamilnadu1', 'india1', '1234567891', 'karthiscores1@gmail.com', '1234561', '1231', '', '2341', '4561', '6781', 'login ok1', '0', '2021-05-28 02:18:02'),
(3, 'feather', '126 kamarajaburam street', 'Melathaniyam', 'ponnamavathi', '', '622002', 'Tamil Nadu', 'India', '6381268718', 'prithivirajk2503@gmail.com', '234', '1231', '', '12313', '12312', '213123', '12312', '0', '2021-05-28 03:26:02'),
(4, 'Melathaniyam Branch', '126 kamarajaburam street', 'Melathaniyam', 'ponnamavathi', '', '622002', 'Tamil Nadu', 'India', '0638126871', 'prithivirajk2503@gmail.com', '234', '1231', '', '01AEFDE2345F6ZZ', '3333', '213123', 'shortubranchupdate', '0', '2021-06-13 22:23:10'),
(5, 'Melathaniyam Branch', '126 kamarajaburam street', 'Melathaniyam', 'ponnamavathi', 'Kallakurichi', '622002', 'Tamil Nadu', 'India', '6381268718', 'prithivirajk2503@gmail.com', 'Faxtest', 'ABCD12345B', 'Yes', '01AEFDE2345F6ZZ', '12312', '213123', 'shortubranchupdate', '0', '2021-06-13 22:33:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branchid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
