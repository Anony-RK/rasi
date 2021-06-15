-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql5045.site4now.net
-- Generation Time: Jun 11, 2021 at 11:23 PM
-- Server version: 8.0.22
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_a6c192_rasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankmaster`
--

CREATE TABLE `bankmaster` (
  `bankid` int NOT NULL,
  `bankcode` varchar(255) DEFAULT NULL,
  `bankname` varchar(255) DEFAULT NULL,
  `accountno` varchar(255) DEFAULT NULL,
  `branchname` varchar(255) DEFAULT NULL,
  `shortform` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `mailid` varchar(255) DEFAULT NULL,
  `ifsccode` varchar(255) DEFAULT NULL,
  `contactperson` varchar(255) DEFAULT NULL,
  `contactno` varchar(255) DEFAULT NULL,
  `micrcode` varchar(255) DEFAULT NULL,
  `typeofaccount` varchar(255) DEFAULT NULL,
  `undersubgroup` varchar(255) DEFAULT NULL,
  `fgroup` varchar(255) DEFAULT NULL,
  `ledgername` varchar(255) DEFAULT NULL,
  `costcenter` varchar(255) DEFAULT NULL,
  `status` int DEFAULT '0',
  `createddate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bankmaster`
--

INSERT INTO `bankmaster` (`bankid`, `bankcode`, `bankname`, `accountno`, `branchname`, `shortform`, `purpose`, `mailid`, `ifsccode`, `contactperson`, `contactno`, `micrcode`, `typeofaccount`, `undersubgroup`, `fgroup`, `ledgername`, `costcenter`, `status`, `createddate`) VALUES
(1, 'bankcode1', 'bankname1', '23532535', 'branchname1', 'shortform1', 'puporse1', 'mailid1', 'ifsccode1', 'contactperson1', '', 'micrcode1', 'bankod', 'reservesurplus', '', 'ledgername1', '0', 1, '2021-06-10 20:54:43'),
(2, 'bankcode1', 'bankname1', '12345', 'branchname1', 'short1', 'purpose1', 'mail1@gmail.com', 'ifsccode1', 'contactperson', '1234567890', '12234', 'bankod', 'reservesurplus', '', 'ledgername1', '0', 1, '2021-06-11 02:54:19'),
(3, 'bankcode1', 'bankname1', '12345', 'branchname1', 'short1', 'purpose1', 'mail1@gmail.com', 'ifsccode1', 'contactperson', '1234567890', '12234', 'bankod', 'reservesurplus', 'grouptest', 'ledgername1', '1', 1, '2021-06-11 02:54:24'),
(4, '4214', 'eqrqwer', '4214214', 'qrwqr', '214214', '212424', 'qwr@gmail.com', '214214', '42124', '2421412421', '21421', 'bankod', 'reservesurplus', '234324', '214214', '0', 0, '2021-06-11 03:35:45'),
(5, '111111', 'SBI', '87238725725732', 'Melathaniyam', 'MTM', 'Salary', 'bank@gmail.in', 'SBIOO87576523', 'Manager', '8738835656', 'MICR67237', 'Bank OD', 'Bank Accounts', 'Bank', 'Bank Ledger', '0', 0, '2021-06-11 16:06:45');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branchid` int NOT NULL,
  `branchname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `faxnumber` varchar(255) NOT NULL,
  `tanno` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `pfno` varchar(255) NOT NULL,
  `esicno` varchar(255) NOT NULL,
  `loginshortername` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `createddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchid`, `branchname`, `address`, `address1`, `address2`, `pincode`, `state`, `country`, `phonenumber`, `email`, `faxnumber`, `tanno`, `gst`, `pfno`, `esicno`, `loginshortername`, `status`, `createddate`) VALUES
(2, 'branch21', 'address1', 'address11', 'address21', '123451', 'tamilnadu1', 'india1', '1234567891', 'karthiscores1@gmail.com', '1234561', '1231', '2341', '4561', '6781', 'login ok1', '0', '2021-05-28 02:18:02'),
(3, 'branchtestupdate', 'branchtestaddressupdate', 'add1test', 'add2test', '666666', 'tamilnadu test', 'country test', '6381268718', 'mailtest@gmnail.com', 'i863', '1231', '12313', '12312', '213123', 'shortubranchupdate', '1', '2021-06-11 14:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyid` int NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `cinno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
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
  `pfno` varchar(255) NOT NULL,
  `esicno` varchar(255) NOT NULL,
  `loginshortername` varchar(255) NOT NULL,
  `booksstartfrom` varchar(255) NOT NULL,
  `companyimagepath` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `createddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyid`, `companyname`, `cinno`, `address`, `address1`, `address2`, `pincode`, `district`, `state`, `country`, `phonenumber`, `faxnumber`, `email`, `website`, `panno`, `itwardcircleno`, `tanno`, `gst`, `pfno`, `esicno`, `loginshortername`, `booksstartfrom`, `companyimagepath`, `status`, `createddate`) VALUES
(1, 'comp1', '12341', 'address1', 'address11', 'address21', '123451', 'Ariyalur', 'state1', 'country1', '1234567891', '1234567891', 'email1@gmail.com', 'www.i1.com', '1234566871', '12341231', '12341231', '22342421', '22345561', '22345571', 'shorter1', '13 May, 2021', '', '0', '2021-05-28 16:38:49'),
(2, 'weerewr', 'wetew', 'qwewq', 'qwe', 'qwewq', '234214', 'Dharmapuri', 'Tamil Nadu', 'India', '2323232322', '2323232323', 'karthiprice@gmail.com', 'eqqweqwe', 'cypdk2666r', '2233', '3344', '4455', '123', '456', 'login', '20 May, 2021', '', '0', '2021-05-28 19:39:18'),
(3, 'comp1', '12341', 'address1', 'address11', 'address21', '123456', 'Ariyalur', 'state1', 'country1', '3253253253', '1234567891', 'karthiprice@gmail.com', 'reyreyer.com', 'cypdk2666r', '12341231', '12341231', '22342421', '22345561', '22345571', 'login', '13 May, 2021', 'c404bacf-52c1-4ba3-8a80-2e382b2bb4fe.jpg', '0', '2021-05-28 19:45:44'),
(4, 'CompanytestUpdate', 'companycintestupdate', 'adddresstest', 'adddresstest1', 'adddresstest2', '000000', 'Ariyalur', 'Tamil Nadu', 'India', '0000000000', 'Faxtest', 'mailtest@gmail.com', 'webtest.com', 'PANTE8765S', '0000', '1111', '2222', '3333', '4444', 'shortupdate', '7 June, 2021', '', '1', '2021-06-11 14:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `costcentre`
--

CREATE TABLE `costcentre` (
  `costcentreid` int NOT NULL,
  `costcentrename` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `costcentre`
--

INSERT INTO `costcentre` (`costcentreid`, `costcentrename`, `status`) VALUES
(9, 'test12', '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customid` int NOT NULL,
  `customercode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `customername` varchar(100) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dateofbirth` varchar(30) DEFAULT NULL,
  `customerimage` varchar(100) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `mobilenumber` varchar(30) DEFAULT NULL,
  `whatsappnumber` varchar(30) DEFAULT NULL,
  `anniverserydate` varchar(30) DEFAULT NULL,
  `emailid` varchar(100) DEFAULT NULL,
  `needmembership` varchar(20) DEFAULT NULL,
  `gstno` varchar(100) DEFAULT NULL,
  `contactpersion` varchar(100) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `pincode` varchar(15) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `typeofcustomer` varchar(30) DEFAULT NULL,
  `noofvisit` varchar(20) DEFAULT NULL,
  `frequencyofvisit` varchar(50) DEFAULT NULL,
  `subgroup` varchar(100) DEFAULT NULL,
  `groupsnew` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ledgername` varchar(100) DEFAULT NULL,
  `costcenter` varchar(20) DEFAULT NULL,
  `inventory` varchar(20) DEFAULT NULL,
  `status` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customid`, `customercode`, `customername`, `gender`, `dateofbirth`, `customerimage`, `age`, `mobilenumber`, `whatsappnumber`, `anniverserydate`, `emailid`, `needmembership`, `gstno`, `contactpersion`, `address1`, `address2`, `pincode`, `district`, `state`, `country`, `typeofcustomer`, `noofvisit`, `frequencyofvisit`, `subgroup`, `groupsnew`, `ledgername`, `costcenter`, `inventory`, `status`) VALUES
(16, '5747', 'customernametest1', 'Male', '2021-06-10', '', '12', '7636664646', '7636664646', '2021-07-08', 'prithivirajk2503@gmail.com', 'Yes', '12', 'Prithiviraj K', '126 kamarajaburam street', 'Melathaniyam', '622002', 'Nilgiris', 'Tamil Nadu', 'India', 'Regular', '12', '2', 'School Fees', '', 'customernametest1', '0', '0', 0),
(17, '1296', 'BULK', 'Male', '05-12-10', NULL, '12.00', '8781627852', '8781627852', '05-12-20', 'prithivi@gmail.com', 'Yes', '22ABCDE1111EF1Z5', 'Prithiv', '126', 'Kamarajaburam', '622009', 'Pudukkottai', 'Tamilnadu', 'India', 'Irregular', '5', '5', 'Bank OD', 'Bank OD', 'Ledger', '0', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designationid` int NOT NULL,
  `designation` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designationid`, `designation`, `status`) VALUES
(3, 'Doctor Updated1', 1),
(4, 'Engineer', 0),
(6, 'New Demo', 1),
(7, 'Teacher', 0),
(8, 'Teacher Update', 1),
(9, 'New Doctor', 0),
(10, 'Now Working', 1),
(11, 'Supervisor', 0),
(12, 'Teacher Update', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeid` int NOT NULL,
  `employeecode` varchar(100) DEFAULT NULL,
  `employeename` varchar(100) DEFAULT NULL,
  `dateofbirth` varchar(50) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `designation` varchar(40) DEFAULT NULL,
  `mobilenumber` varchar(50) DEFAULT NULL,
  `dateofjoining` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `employeeimage` varchar(50) DEFAULT NULL,
  `expertise` varchar(50) DEFAULT NULL,
  `starrating` varchar(20) DEFAULT NULL,
  `basic` int DEFAULT NULL,
  `hra` int DEFAULT NULL,
  `conveyance` int DEFAULT NULL,
  `allowance` int DEFAULT NULL,
  `incentivepercent` int DEFAULT NULL,
  `grosspay` int DEFAULT NULL,
  `tds` int DEFAULT NULL,
  `pf` int DEFAULT NULL,
  `esi` int DEFAULT NULL,
  `loans` int DEFAULT NULL,
  `salaryadvance` int DEFAULT NULL,
  `totaldeduction` int DEFAULT NULL,
  `anyotherdeduction` int DEFAULT NULL,
  `institutetype1` varchar(100) DEFAULT NULL,
  `name1` varchar(100) DEFAULT NULL,
  `positionheld1` varchar(50) DEFAULT NULL,
  `place1` varchar(50) DEFAULT NULL,
  `fromperiod1` varchar(50) DEFAULT NULL,
  `toperiod1` varchar(50) DEFAULT NULL,
  `date1` varchar(30) DEFAULT NULL,
  `institutetype2` varchar(100) DEFAULT NULL,
  `name2` varchar(50) DEFAULT NULL,
  `positionheld2` varchar(50) DEFAULT NULL,
  `place2` varchar(50) DEFAULT NULL,
  `fromperiod2` varchar(50) DEFAULT NULL,
  `toperiod2` varchar(50) DEFAULT NULL,
  `date2` varchar(50) DEFAULT NULL,
  `institutetype3` varchar(100) DEFAULT NULL,
  `name3` varchar(50) DEFAULT NULL,
  `positionheld3` varchar(50) DEFAULT NULL,
  `place3` varchar(50) DEFAULT NULL,
  `fromperiod3` varchar(50) DEFAULT NULL,
  `toperiod3` varchar(50) DEFAULT NULL,
  `date3` varchar(50) DEFAULT NULL,
  `institutetype4` varchar(100) DEFAULT NULL,
  `name4` varchar(50) DEFAULT NULL,
  `positionheld4` varchar(50) DEFAULT NULL,
  `place4` varchar(50) DEFAULT NULL,
  `fromperiod4` varchar(50) DEFAULT NULL,
  `toperiod4` varchar(50) DEFAULT NULL,
  `date4` varchar(50) DEFAULT NULL,
  `institutetype5` varchar(100) DEFAULT NULL,
  `name5` varchar(50) DEFAULT NULL,
  `positionheld5` varchar(50) DEFAULT NULL,
  `place5` varchar(50) DEFAULT NULL,
  `fromperiod5` varchar(50) DEFAULT NULL,
  `toperiod5` varchar(50) DEFAULT NULL,
  `date5` varchar(50) DEFAULT NULL,
  `title1` text,
  `certificate1` text,
  `title2` text,
  `certificate2` text,
  `title3` text,
  `certificate3` text,
  `title4` text,
  `certificate4` text,
  `title5` text,
  `certificate5` text,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeid`, `employeecode`, `employeename`, `dateofbirth`, `gender`, `email`, `designation`, `mobilenumber`, `dateofjoining`, `contact`, `employeeimage`, `expertise`, `starrating`, `basic`, `hra`, `conveyance`, `allowance`, `incentivepercent`, `grosspay`, `tds`, `pf`, `esi`, `loans`, `salaryadvance`, `totaldeduction`, `anyotherdeduction`, `institutetype1`, `name1`, `positionheld1`, `place1`, `fromperiod1`, `toperiod1`, `date1`, `institutetype2`, `name2`, `positionheld2`, `place2`, `fromperiod2`, `toperiod2`, `date2`, `institutetype3`, `name3`, `positionheld3`, `place3`, `fromperiod3`, `toperiod3`, `date3`, `institutetype4`, `name4`, `positionheld4`, `place4`, `fromperiod4`, `toperiod4`, `date4`, `institutetype5`, `name5`, `positionheld5`, `place5`, `fromperiod5`, `toperiod5`, `date5`, `title1`, `certificate1`, `title2`, `certificate2`, `title3`, `certificate3`, `title4`, `certificate4`, `title5`, `certificate5`, `status`) VALUES
(1, '1001', 'Prithiviraj', '2021-06-23', 'Male', 'prithivirajk2503@gmail.com', 'Engineer', '06381268718', '2021-06-22', '06381268718', 'prithiviraj-Photo-Wiley mthree.jpg', '10', '10', 12, 12, 12, 12, 12, 60, 12, 12, 12, 12, 12, 72, 12, 'Technical', 'Prithiviraj', 'Dev', 'K', '2021-06-07', '2021-06-15', 'Y:0 M:0 D:8', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'PRITHIVIRAJ_K.pdf', '', '', '', '', '', '', '', '', '0'),
(2, '1001', 'test', '2021-06-26', 'Female', 'test@gmail.com', 'Engineer', '6381268718', '2021-06-28', '6381268718', '', '', '', 65, 5, 456, 56, 5, 587, 56, 45, 67, 33, 3, 216, 12, '', 'Prithiviraj', 'Java Intern', 'K', '2021-07-05', '2021-07-03', 'Y:-1 M:11 D:29', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `goodsreceivingnote`
--

CREATE TABLE `goodsreceivingnote` (
  `goodsreceivingnoteid` int NOT NULL,
  `pono` varchar(255) NOT NULL,
  `grnno` varchar(255) NOT NULL,
  `grndate` varchar(255) NOT NULL,
  `choosetype` varchar(255) NOT NULL,
  `voucherno` varchar(255) NOT NULL,
  `debitledger` varchar(255) NOT NULL,
  `creditledger` varchar(255) NOT NULL,
  `narration` varchar(255) NOT NULL,
  `invoiceno` varchar(255) NOT NULL,
  `valueofinvoice` varchar(255) NOT NULL,
  `finalvalueofinvoice` varchar(255) NOT NULL,
  `currencytype` varchar(255) NOT NULL,
  `equaltoinr` varchar(255) NOT NULL,
  `advancepaidintotal` varchar(255) NOT NULL,
  `status` int NOT NULL,
  `createddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `goodsreceivingnote`
--

INSERT INTO `goodsreceivingnote` (`goodsreceivingnoteid`, `pono`, `grnno`, `grndate`, `choosetype`, `voucherno`, `debitledger`, `creditledger`, `narration`, `invoiceno`, `valueofinvoice`, `finalvalueofinvoice`, `currencytype`, `equaltoinr`, `advancepaidintotal`, `status`, `createddate`) VALUES
(1, 'pono1', 'grnno1', 'grndate', 'choosetype', 'voucherno', 'debitledger', 'creditledger', 'narration', 'invoiceno1', 'valueofinvoice', 'finalvalueofinvoice', 'currencytype', 'equaltoinr', 'advancepaidintotal', 0, '2021-06-10 21:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemid` int NOT NULL,
  `partnumber` varchar(200) DEFAULT NULL,
  `stocktype` varchar(200) DEFAULT NULL,
  `itemname` varchar(200) DEFAULT NULL,
  `unitofmeasure` varchar(200) DEFAULT NULL,
  `hsncode` varchar(200) DEFAULT NULL,
  `gstrate` varchar(200) DEFAULT NULL,
  `barcode` varchar(200) DEFAULT NULL,
  `vendor` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `noofgmpcs` varchar(200) DEFAULT NULL,
  `reorderlevel` varchar(200) DEFAULT NULL,
  `lowerlevelqty` varchar(200) DEFAULT NULL,
  `isincentive` varchar(200) DEFAULT NULL,
  `isreuse` varchar(200) DEFAULT NULL,
  `tablevendorselect` varchar(200) DEFAULT NULL,
  `tableopeningstock` varchar(200) DEFAULT NULL,
  `tableopeningpcs` varchar(200) DEFAULT NULL,
  `tablecostperunit` varchar(200) DEFAULT NULL,
  `tablecostprice` varchar(200) DEFAULT NULL,
  `tablesellingpriceperpc` varchar(200) DEFAULT NULL,
  `tabletotalsellingprice` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemid`, `partnumber`, `stocktype`, `itemname`, `unitofmeasure`, `hsncode`, `gstrate`, `barcode`, `vendor`, `type`, `noofgmpcs`, `reorderlevel`, `lowerlevelqty`, `isincentive`, `isreuse`, `tablevendorselect`, `tableopeningstock`, `tableopeningpcs`, `tablecostperunit`, `tablecostprice`, `tablesellingpriceperpc`, `tabletotalsellingprice`, `status`) VALUES
(1, '1001', 'Sale', 'Chair', 'Gram', '72723', '12', '23423', 'VEN0001', 'plastic', '3', '13', '12', 'yes', 'no', 'VEN0001,VEN0002,', '1,1,', '2,1,', '2,1,', '2,1,', '1,1,', '1,1,', '0'),
(2, '65', 'Stock', 'qweqwe', 'Count', '765', '766', '776', 'VEN0002', '76567', '7656', '567', '76567', 'yes', 'yes', '', '', '', '', '', '', '', '0'),
(3, '1003', 'Towel', 'Towel', 'Count updated', '8723', '7235', '87235', 'VEN0001', 'cotton', '23', '234', '34', 'yes', 'yes', '', '', '', '', '', '', '', '0'),
(4, '87328', 'Sale', '85238', 'Gram', '76', '632', '875132', 'VEN0007', '7613', '7851283', '87', '632', 'yes', 'yes', 'VEN0007,VEN0002', '761,234', '1623,234', '83,234', '63163,54756', '623,234', '474103,54756', '0'),
(5, '873', 'Stock', 'shoes', 'Gram', '35', '87', 'kahsiu', 'VEN0002', '286387', '8723', '87235', '87235', 'yes', 'yes', '', '', '', '', '', '', '', '0'),
(6, '9008', 'Tools', 'Cutter', 'pieces', '823687', '872', '232', 'VEN0003', 'iron pices', '18', '15', '16', 'yes', 'no', 'VEN0001,VEN0005,VEN0010,VEN0011,VEN0002', '2,234,4,3,12', '56,3,4,4,123', '54,3,4,42,23', '108,702,16,126,276', '324,3,4,123,23', '648,702,16,369,276', '1'),
(7, '10000001', 'Dress1', 'itemcheck', 'Gram', '2332', '2323', '1000', 'VEN0002', 'tets', '1000', '12', '12', 'yes', 'yes', 'VEN0002', '12', '12', '12', '144', '12', '144', '0'),
(8, 'PartNo', 'Product Category', 'Item Name', 'Unit of Measure', 'HSN Code', 'GST Rate', NULL, 'Vendor Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Opening Stock', NULL, 'Rate per unit', 'Cost', NULL, NULL, NULL),
(9, '', 'Stock', '4 LAYER ANTI AGENING FACIAL KIT', 'Pcs', '', '18', NULL, 'Padmaja EnterPrises', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3.00', NULL, '0.00', '', NULL, NULL, NULL),
(10, '', 'Stock', '4 LAYER SKIN WHITINING FACIAL KIT', 'Pcs', '', '18', NULL, 'Padmaja EnterPrises', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3.00', NULL, '0.00', '', NULL, NULL, NULL),
(11, '', 'Stock', '7 O CLOCK BLADE GILLETE', 'Pcs', '', '18', NULL, 'Angels', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10.00', NULL, '0.00', '', NULL, NULL, NULL),
(12, '', 'Stock', 'Advance Skinlighting One Facial Kit', 'Pcs', '', '18', NULL, 'International Exclisves', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11.00', NULL, '0.00', '', NULL, NULL, NULL),
(13, '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', 'dsa', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ledger`
--

CREATE TABLE `ledger` (
  `ledgerid` int NOT NULL,
  `ledgername` varchar(100) DEFAULT NULL,
  `groupname` varchar(100) DEFAULT NULL,
  `subgroupname` varchar(100) DEFAULT NULL,
  `inventory` varchar(100) DEFAULT NULL,
  `costcentre` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `exciseduty` varchar(100) DEFAULT NULL,
  `pan` varchar(20) DEFAULT NULL,
  `tin` varchar(20) DEFAULT NULL,
  `servicetax` varchar(20) DEFAULT NULL,
  `contactperson` varchar(30) DEFAULT NULL,
  `address1` varchar(50) DEFAULT NULL,
  `address2` varchar(50) DEFAULT NULL,
  `address3` varchar(50) DEFAULT NULL,
  `address4` varchar(50) DEFAULT NULL,
  `contactnumber` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ledger`
--

INSERT INTO `ledger` (`ledgerid`, `ledgername`, `groupname`, `subgroupname`, `inventory`, `costcentre`, `status`, `exciseduty`, `pan`, `tin`, `servicetax`, `contactperson`, `address1`, `address2`, `address3`, `address4`, `contactnumber`) VALUES
(3, 'ramki7', 'Capital Account', 'subgroup2', 'Yes', 'No', '0', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `stockid` int NOT NULL,
  `stock` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`stockid`, `stock`, `status`) VALUES
(1, 'Dress1', 0),
(2, 'Nutsupdated', 0),
(3, 'ok', 1),
(4, 'electric cooker', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subgroup`
--

CREATE TABLE `subgroup` (
  `groupid` int NOT NULL,
  `groupname` varchar(50) DEFAULT NULL,
  `subgroupname` varchar(100) DEFAULT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subgroup`
--

INSERT INTO `subgroup` (`groupid`, `groupname`, `subgroupname`, `status`) VALUES
(25, 'Capital Account', 'subgroup2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `taxid` int NOT NULL,
  `financialyear` varchar(30) NOT NULL,
  `classification` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `tax` varchar(30) NOT NULL,
  `cess` varchar(30) NOT NULL,
  `addl` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`taxid`, `financialyear`, `classification`, `description`, `tax`, `cess`, `addl`, `total`, `status`) VALUES
(1, '2018-2019', 'TDS', 'TDS1', '100', '1000', '1000', '2100', 0),
(2, '2018-2019', 'Custom Duty', 'Custom', '10011', '100012', '10001', '120024', 0),
(3, '2018-2019', 'Custom Duty', 'Book', '111', '344', '23', '478', 0),
(4, '2018-2019', 'TDS', '23', '23', '23', '2323', '2369', 0);

-- --------------------------------------------------------

--
-- Table structure for table `taxmaster`
--

CREATE TABLE `taxmaster` (
  `taxid` int NOT NULL,
  `financialyear` varchar(50) NOT NULL,
  `classification` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `tax` varchar(100) NOT NULL,
  `cess` varchar(50) NOT NULL,
  `addl` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `taxmaster`
--

INSERT INTO `taxmaster` (`taxid`, `financialyear`, `classification`, `description`, `tax`, `cess`, `addl`, `total`, `status`) VALUES
(1, '2001-2002', 'jhsdjshbds', 'sjdhfsud', '5', '50', '500', '555', '1'),
(2, '2005-2006', 'Custom Duty', 'judfua', '20000', '1000', '3726', '24726', '0'),
(3, '2009-2010', 'Custom Duty', 'ramakrishnan tax report', '1214', '2134213', '23412', '2158838', '0'),
(4, '2002-2003', 'Custom Duty', '12', '2', '12', '12', '26', '1');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `unitid` int NOT NULL,
  `unit` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`unitid`, `unit`, `status`) VALUES
(3, 'Ton', 1),
(4, 'weight', 0),
(12, 'Update', 1),
(14, 'Count updated *', 0),
(15, 'Gram', 0),
(17, 'Ok Insert', 0),
(18, 'pieces', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `trustactive` varchar(50) NOT NULL,
  `schoolcreationactive` varchar(50) NOT NULL,
  `manageuseractive` varchar(50) NOT NULL,
  `feemasteractive` varchar(50) NOT NULL,
  `subjectmasteractive` varchar(50) NOT NULL,
  `subjectgroupmasteractive` varchar(50) NOT NULL,
  `staffmasteractive` varchar(50) NOT NULL,
  `holidayinfoactive` varchar(50) NOT NULL,
  `createstudentactive` varchar(50) NOT NULL,
  `studentrollback` varchar(50) NOT NULL,
  `bulkimport` varchar(50) NOT NULL,
  `feescollectionactive` varchar(50) NOT NULL,
  `historyactive` varchar(50) NOT NULL,
  `birthdaywishesactive` varchar(50) NOT NULL,
  `generalwishesactive` varchar(50) NOT NULL,
  `paymentreminderactive` varchar(50) NOT NULL,
  `studentreportactive` varchar(50) NOT NULL,
  `castereportactive` varchar(50) NOT NULL,
  `pendingfeereportactive` varchar(50) NOT NULL,
  `collectionreportactive` varchar(50) NOT NULL,
  `status` varchar(255) NOT NULL,
  `Createddate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `user_name`, `user_password`, `role`, `trustactive`, `schoolcreationactive`, `manageuseractive`, `feemasteractive`, `subjectmasteractive`, `subjectgroupmasteractive`, `staffmasteractive`, `holidayinfoactive`, `createstudentactive`, `studentrollback`, `bulkimport`, `feescollectionactive`, `historyactive`, `birthdaywishesactive`, `generalwishesactive`, `paymentreminderactive`, `studentreportactive`, `castereportactive`, `pendingfeereportactive`, `collectionreportactive`, `status`, `Createddate`) VALUES
(1, 'admin', 'support@feathertechnology.in', 'feather123', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '2021-04-17 17:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `loginid` int NOT NULL,
  `ipaddress` varchar(255) NOT NULL,
  `login_date` varchar(255) NOT NULL,
  `fk_user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`loginid`, `ipaddress`, `login_date`, `fk_user_id`) VALUES
(1, '::1', '2021-04-17 05:14:16', '1'),
(2, '::1', '2021-04-17 05:16:15', '1'),
(3, '::1', '2021-04-17 05:17:36', '1'),
(4, '::1', '2021-04-19 09:50:40', '1'),
(5, '::1', '2021-04-23 10:45:10', '1'),
(6, '::1', '2021-04-24 06:52:22', '1'),
(7, '::1', '2021-04-24 10:36:30', '1'),
(8, '::1', '2021-04-24 10:37:55', '1'),
(9, '::1', '2021-04-24 10:39:46', '1'),
(10, '::1', '2021-04-24 11:56:41', '1'),
(11, '::1', '2021-04-25 12:28:33', '1'),
(12, '::1', '2021-04-26 10:23:53', '1'),
(13, '::1', '2021-04-26 10:42:25', '1'),
(14, '::1', '2021-04-27 01:32:36', '1'),
(15, '::1', '2021-04-27 08:12:46', '1'),
(16, '::1', '2021-04-29 10:34:22', '1'),
(17, '::1', '2021-04-29 11:20:33', '1'),
(18, '::1', '2021-04-30 10:33:16', '1'),
(19, '::1', '2021-04-30 10:34:57', '1'),
(20, '::1', '2021-05-01 12:21:25', '1'),
(21, '::1', '2021-05-01 04:54:12', '1'),
(22, '::1', '2021-05-04 10:27:10', '1'),
(23, '::1', '2021-05-05 07:25:33', '1'),
(24, '::1', '2021-05-06 12:03:20', '1'),
(25, '::1', '2021-05-06 11:00:45', '1'),
(26, '::1', '2021-05-07 04:28:21', '1'),
(27, '::1', '2021-05-07 05:24:13', '1'),
(28, '::1', '2021-05-07 11:56:56', '1'),
(29, '::1', '2021-05-09 03:58:57', '1'),
(30, '::1', '2021-05-13 04:22:59', '1'),
(31, '::1', '2021-05-13 11:57:33', '1'),
(32, '::1', '2021-05-14 04:29:22', '1'),
(33, '::1', '2021-05-14 08:09:56', '1'),
(34, '::1', '2021-05-18 06:10:48', '1'),
(35, '::1', '2021-05-19 06:18:37', '1'),
(36, '::1', '2021-05-20 05:55:25', '1'),
(37, '::1', '2021-05-20 06:29:46', '2'),
(38, '::1', '2021-05-20 06:30:46', '2'),
(39, '::1', '2021-05-20 06:31:03', '2'),
(40, '::1', '2021-05-20 06:31:17', '2'),
(41, '::1', '2021-05-29 01:50:15', '1'),
(42, '::1', '2021-05-29 01:50:27', '1'),
(43, '::1', '2021-05-29 05:07:36', '1'),
(44, '::1', '2021-05-29 05:12:11', '1'),
(45, '::1', '2021-05-31 06:30:13', '1'),
(46, '::1', '2021-06-03 01:02:48', '1'),
(47, '::1', '2021-06-03 08:02:54', '1'),
(48, '::1', '2021-06-04 06:45:22', '1'),
(49, '::1', '2021-06-04 10:38:13', '1'),
(50, '::1', '2021-06-05 05:16:02', '1'),
(51, '::1', '2021-06-05 10:56:33', '1'),
(52, '::1', '2021-06-05 11:22:10', '1'),
(53, '::1', '2021-06-06 08:23:25', '1'),
(54, '::1', '2021-06-10 09:48:22', '1'),
(55, '::1', '2021-06-11 02:18:18', '1'),
(56, '::1', '2021-06-11 04:59:20', '1'),
(57, '::1', '2021-06-11 10:17:58', '1'),
(58, '::1', '2021-06-12 12:45:26', '1'),
(59, '::1', '2021-06-12 04:17:32', '1');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendorid` int NOT NULL,
  `vendorcode` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `vendorname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `address1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `address2` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pincode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `contactperson` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `contact` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mailid` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `gstnumber` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pannumber` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `stocktype` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `deliverytime` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `reorderlevel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `minimumstock` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `maximumstock` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendorid`, `vendorcode`, `vendorname`, `address1`, `address2`, `pincode`, `contactperson`, `contact`, `mailid`, `gstnumber`, `pannumber`, `stocktype`, `deliverytime`, `reorderlevel`, `minimumstock`, `maximumstock`, `status`) VALUES
(1, 'VEN0001', 'prithiviraj', '126 kamarajaburam street', 'Melathaniyam', '622002', 'Prithiviraj K', '6381268718', 'prithivirajk2503@gmail.com', '01ABCDE2345F6Z7', 'ABCDE1234F', 'Dress', '10', '25', '10', '100', '1'),
(3, 'VEN0002', 'Rajesh Kumar', '127 kamarajaburam street', 'Melathaniyam', '622002', 'Prithiviraj K', '9876543211', 'rajesh@gmail.com', '01AEFDE2345F6Z7', 'AWRTE8765K', 'Nuts', '10', '15', '10', '20', '0'),
(4, 'VEN0003', 'Ajithsiva', '103, Pallavaram', 'Chenna', '600018', 'Prithiviraj K', '8128763266', 'ajithsiva@gmail.com', '01AEFDE2345F6Z7', 'AWRTE8765K', 'Dress', '15', '12', '10', '20', '0'),
(7, 'VEN0004', 'VVS', 'vellore', '', '632518', 'vvs', '8754111586', 'laxman17@gmal.com', '', '', 'Stock', '02-25-19', '22', '', '', '0'),
(8, 'VEN0003', 'VVS updated', 'vellore updated', '', '632518', 'vvs', '8754111586', 'laxman17@gmal.com', '', '', 'Stock', '02-25-19', '22', '', '', '0'),
(9, 'vendorcodecheck', 'vendpornamecheck', 'vendoraddcheck', 'vendoraddcheck', '622002', 'vendoraddcheck', '0638126871', 'prithivirajk25032@ggmail.com', '01ABCDE2345F6Z7', 'ABCDE1234F', 'Nutsupdated', '10', '83', '100', '15000', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bankmaster`
--
ALTER TABLE `bankmaster`
  ADD PRIMARY KEY (`bankid`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyid`);

--
-- Indexes for table `costcentre`
--
ALTER TABLE `costcentre`
  ADD PRIMARY KEY (`costcentreid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD UNIQUE KEY `customid` (`customid`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designationid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeid`);

--
-- Indexes for table `goodsreceivingnote`
--
ALTER TABLE `goodsreceivingnote`
  ADD PRIMARY KEY (`goodsreceivingnoteid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `ledger`
--
ALTER TABLE `ledger`
  ADD PRIMARY KEY (`ledgerid`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`stockid`);

--
-- Indexes for table `subgroup`
--
ALTER TABLE `subgroup`
  ADD PRIMARY KEY (`groupid`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`taxid`);

--
-- Indexes for table `taxmaster`
--
ALTER TABLE `taxmaster`
  ADD PRIMARY KEY (`taxid`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`unitid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendorid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bankmaster`
--
ALTER TABLE `bankmaster`
  MODIFY `bankid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branchid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `costcentre`
--
ALTER TABLE `costcentre`
  MODIFY `costcentreid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designationid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goodsreceivingnote`
--
ALTER TABLE `goodsreceivingnote`
  MODIFY `goodsreceivingnoteid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ledger`
--
ALTER TABLE `ledger`
  MODIFY `ledgerid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `stockid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subgroup`
--
ALTER TABLE `subgroup`
  MODIFY `groupid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `taxid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `taxmaster`
--
ALTER TABLE `taxmaster`
  MODIFY `taxid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `unitid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `loginid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendorid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
