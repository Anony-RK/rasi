-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 05:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

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
-- Table structure for table `usercreation`
--

CREATE TABLE `usercreation` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `administration` varchar(255) NOT NULL,
  `master` varchar(255) NOT NULL,
  `profileallocation` varchar(255) NOT NULL,
  `purchaseorder` varchar(255) NOT NULL,
  `grn` varchar(255) NOT NULL,
  `mhepurchaseorder` varchar(255) NOT NULL,
  `mhegrn` varchar(255) NOT NULL,
  `damageandexpiry` varchar(255) NOT NULL,
  `financeentry` varchar(255) NOT NULL,
  `gstr` varchar(255) NOT NULL,
  `workorder` varchar(255) NOT NULL,
  `billing` varchar(255) NOT NULL,
  `fixedassets` varchar(255) NOT NULL,
  `financialstatement` varchar(255) NOT NULL,
  `hr` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usercreation`
--

INSERT INTO `usercreation` (`id`, `role`, `firstname`, `lastname`, `fullname`, `title`, `password`, `email`, `username`, `companyname`, `administration`, `master`, `profileallocation`, `purchaseorder`, `grn`, `mhepurchaseorder`, `mhegrn`, `damageandexpiry`, `financeentry`, `gstr`, `workorder`, `billing`, `fixedassets`, `financialstatement`, `hr`, `status`) VALUES
(4, 'Employee Login', 'karthi', 'keyan', 'karthi keyan', 'fullstackdev', '0987', 'karthikeyan@gmail.com', 'karthikeyan@gmail.com', 'Rasielectronics', 'Company Creation,Branch Creation', 'Customer Creation,MHE Creation,Finance Creation', 'Profit Allocation for Spares', 'Purchase Order Creation,Purchase Order List', 'GRN Waiting for Approval', 'MHE Purchase Order List,MHE Purchase Order Approval', 'MHE GRN Waiting for Approval,MHE Stock Numbering,Stock Movement', 'Damage Closed List', 'Cash Income,Purchase Entry,Ledger View,Trial Balance View,CostCentre Analysis,BRS,Cash Limit Approval', 'GSTR3', 'Work Order List,Indent Production', 'SpareParts Quotation Order,Billing Sale,Billing Sale Print,Spare Billing Sale Print', 'Asset Request Form,PO Asset Create,Purchase Entry,Damage Sale,FA Register', 'Bills Receivable,Scheduling Group', 'New Joinee Creation,To Approve Laon,PayRoll Sheet', '1'),
(5, 'Administration', 'shanmuga', 'priyan', 'shanmuga priyan', 'feathers', '!@#$%^&*', 'feathers@gmail.com', 'feathers@gmail.com', 'Rasielectronics', '', 'Import Vendor Creation,Customer Creation,Depreciation Schedule,MHE Creation', 'Profit Allocation for Spares,Equipment Landing Cost', 'Purchase Order Creation,Purchase Order List,Purchase Order Approval', 'GRN Creation', 'MHE Purchase Order List', 'MHE GRN Creation,MHE Stock Numbering,MHE Classification,Indent Inventory', 'Damage Open List,Damage Closed List', 'Bank Payment,Joural,Contra,Purchase Entry,Trial Balance View,Multiple Voucher Print,CostCentre Analysis,DayBook,BRS', 'GSTR2,GSTR3', 'Work Order Creation,Work Order List,Return to Inventory', 'Quotation Order,Quotaion Order Print,Billing Sale Print,StockOutward Print,Spare Billing Sale Print', 'Asset Request List,Asset Approval,PO Asset Create,PO Asset Print,Purchase Entry,Dep Report', 'Bills Payable,Bills Receivable,Scheduling Group,Balance Sheet', 'Selection Candidate,Attendance Regularisation,Branch Transfer,To Approve Laon', '0'),
(6, 'Administration', 'ram', 'krish', 'ram krish', 'dev', '09876', 'ramki@g.com', 'ramki@g.com', 'Rasielectronics', 'Company Creation,Branch Creation', 'Import Vendor Creation,Bank Master', 'Profit Allocation for Spares', 'Purchase Order List,Purchase Order Approval', 'GRN Waiting for Approval', 'MHE Purchase Order List', 'MHE GRN Waiting for Approval,Stock Numbering,Indent Inventory', 'Damage Open List,Damage Closed List', 'Cash Payment,Contra,Purchase Entry,Trial Balance View,Multiple Voucher Print,BRS', 'GSTR2', 'Work Order List', 'Quotaion Order Print,Billing Sale Print', 'Asset Request Form,FA Register', 'Bills Receivable,Unmaped Ledger', 'New Joinee Creation,Attendance Regularisation,To Approve Laon', '0'),
(7, 'Employee Login', 'krish', 'ram', 'krish ram', 'feathers', '09876', 'hsgwu@g.com', 'hsgwu@g.com', 'Rasielectronics', 'Branch Creation,Configuaration Setting,Manage Users', 'Local Vendor Creation,Depreciation Schedule,Finance Creation', 'Equipment Landing Cost', 'Purchase Order Creation,Purchase Order List', 'GRN Waiting for Approval', 'MHE Purchase Order List,MHE Purchase Order Approval', 'MHE GRN Waiting for Approval,Stock Numbering,Stock Movement', 'Damage Open List,Sale/PurchaseList', 'Cash Income,Bank Income,Cash Payment,Purchase Entry,Debit or CreditNote,Ledger View,Trial Balance View,Cash Limit Approval', 'GSTR1,GSTR2,GSTR3', 'Work Order List,Indent Production,Return to Inventory', 'SpareParts Quotation Order,Billing Sale,Billing Spare Sale,StockOutward Print', 'Asset Request Form,Asset Approval,Purchase Entry,Physical Verification,FA Register', 'Bills Payable,Scheduling Group,Unmaped Ledger', 'Selection Candidate,Attendance Regularisation,Branch Transfer,PayRoll Sheet', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usercreation`
--
ALTER TABLE `usercreation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usercreation`
--
ALTER TABLE `usercreation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
