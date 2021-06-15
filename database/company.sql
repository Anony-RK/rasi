-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 01:13 AM
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
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyid` int(11) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `cinno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `faxnumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `panno` varchar(255) NOT NULL,
  `itwardcircleno` varchar(255) NOT NULL,
  `tanno` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `isgst` varchar(50) NOT NULL,
  `pfno` varchar(255) NOT NULL,
  `esicno` varchar(255) NOT NULL,
  `loginshortername` varchar(255) NOT NULL,
  `booksstartfrom` varchar(255) NOT NULL,
  `companyimagepath` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `createddate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyid`, `companyname`, `cinno`, `address`, `address1`, `address2`, `district`, `pincode`, `state`, `country`, `phonenumber`, `faxnumber`, `email`, `website`, `panno`, `itwardcircleno`, `tanno`, `gst`, `isgst`, `pfno`, `esicno`, `loginshortername`, `booksstartfrom`, `companyimagepath`, `status`, `createddate`) VALUES
(1, 'comp1', '12341', 'address1', 'address11', 'address21', '', '123451', 'state1', 'country1', '1234567891', '1234567891', 'email1@gmail.com', 'www.i1.com', '1234566871', '12341231', '12341231', '22342421', '', '22345561', '22345571', 'shorter1', '13 May, 2021', '', '0', '2021-05-28 11:08:49'),
(2, 'weerewr', 'wetew', 'qwewq', 'qwe', 'qwewq', '', '234214', 'dsqadqd', 'wqdwqde', '2323232322', '2323232323', 'karthiprice@gmail.com', 'eqqweqwe', 'cypdk2666r', '2233', '3344', '4455', '', '123', '456', 'login', '20 May, 2021', '', '1', '2021-05-28 14:09:18'),
(3, 'comp1', '12341', 'address1', 'address11', 'address21', '', '123456', 'state1', 'country1', '3253253253', '1234567891', 'karthiprice@gmail.com', 'reyreyer.com', 'cypdk2666r', '12341231', '12341231', '22342421', '', '22345561', '22345571', 'login', '13 May, 2021', 'c404bacf-52c1-4ba3-8a80-2e382b2bb4fe.jpg', '0', '2021-05-28 14:15:44'),
(4, 'CompanyTest01Update', 'CINTest01update', '126 kamarajaburam street', 'Melathaniyam', 'ponnamavathiupdate', 'Dindigul', '622002', 'Tamil Nadu', 'India', '6381268718', 'FaxTest01update', 'prithivirajk2503@gmail.com', 'https://prithivblog.wordpress.com/', 'PANTE8765S', '0000', 'ABCD12345B', '01AEFDE2345F6ZZ', '01AEFDE2345F6ZZ', '12312', '213123', 'shortubranch', '16 June, 2021', '', '0', '2021-06-13 23:09:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
