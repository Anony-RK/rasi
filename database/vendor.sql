-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 12:41 AM
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
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendorid` int(10) NOT NULL,
  `vendorcode` varchar(100) DEFAULT NULL,
  `vendorname` varchar(100) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `contactperson` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `mailid` varchar(100) DEFAULT NULL,
  `stocktype` varchar(100) DEFAULT NULL,
  `deliverytime` varchar(100) DEFAULT NULL,
  `reorderlevel` varchar(100) DEFAULT NULL,
  `minimumstock` varchar(100) DEFAULT NULL,
  `maximumstock` varchar(100) DEFAULT NULL,
  `isgst` varchar(100) DEFAULT NULL,
  `gststate` varchar(100) DEFAULT NULL,
  `statetype` varchar(100) DEFAULT NULL,
  `gstnumber` varchar(100) DEFAULT NULL,
  `bankname` varchar(100) DEFAULT NULL,
  `branchname` varchar(100) DEFAULT NULL,
  `accountnumber` varchar(100) DEFAULT NULL,
  `ifsccode` varchar(100) DEFAULT NULL,
  `subgroup` varchar(100) DEFAULT NULL,
  `groupname` varchar(100) DEFAULT NULL,
  `ledgername` varchar(100) DEFAULT NULL,
  `creditlimit` varchar(100) DEFAULT NULL,
  `costcentre` varchar(100) DEFAULT NULL,
  `inventory` varchar(100) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendorid`, `vendorcode`, `vendorname`, `address1`, `address2`, `district`, `pincode`, `state`, `country`, `contactperson`, `contact`, `mailid`, `stocktype`, `deliverytime`, `reorderlevel`, `minimumstock`, `maximumstock`, `isgst`, `gststate`, `statetype`, `gstnumber`, `bankname`, `branchname`, `accountnumber`, `ifsccode`, `subgroup`, `groupname`, `ledgername`, `creditlimit`, `costcentre`, `inventory`, `status`) VALUES
(1, 'LOC-1001', 'prithiviraj', '126 kamarajaburam street', 'Melathaniyam', 'Pudukkottai', '622002', 'Tamilnadu', 'India', 'Karuppaiah', '6381268718', 'prithivirajk2503@gmail.com', 'Nylon', '10', '30', '10', '100', 'Yes', 'Tamil Nadu', 'withinstate', '01AEFDE2345F6Z7', 'IOB', 'Melathaniyam Branch', 'IOBA8736538756', 'IOB00006', 'Sundry Creditors', 'Current Liabilities', 'Sundry Pvt. Ltd', '12000', 'Yes', 'Yes', 0),
(2, 'LOC-1002', 'Rajesh Kumar Update', '130', 'palladam', 'Dindigul', '622010', 'Tamilnadu', 'India', 'Prithiviraj K', '6381268718', 'rajesh@gmail.com', 'Bold', '20', '40', '5', '50', 'Yes', '', 'interstate', '51ABCDE2345F6Z9', 'SBI', 'SBI Tol', 'SBI7283723835', 'SBI7683745', 'Loans(Liability)', 'Current Liabilities', 'Loan Ledger1', '15000', 'Yes', 'Yes', 0),
(5, 'LOC-1003', 'Bulk', 'Upload', 'Test', 'Chengalpattu', '763537', 'Tamilnadu', '', 'prithiv', '357635365', 'bulk@gmail.com', 'cotton', '12', '12', '12', '12', 'Yes', '', 'withinstate', 'Bulk GST', 'Balk bank', 'Bulk branch', 'Bulk Ac', 'Blk IFSC', 'Bulk subgrp', 'Blk grp', 'Bulk ledger', '12000', 'Yes', 'Yes', 0),
(7, 'LOC-1004', 'prithiviraj', '', '', '', '', '', '', '', '', '', 'Nylon', '', '', '', '', '', '', '', '', '', '', '', '', 'Staff Salary', 'Indirect Income', 'Select Ledger', '', 'Yes', 'Yes', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendorid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendorid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
