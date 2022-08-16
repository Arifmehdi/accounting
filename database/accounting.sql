-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 09:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounting`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_heads`
--

CREATE TABLE `account_heads` (
  `id` int(11) NOT NULL,
  `type` enum('asset','liability','equity','income','expense') NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_heads`
--

INSERT INTO `account_heads` (`id`, `type`, `name`, `status`) VALUES
(1, 'asset', 'Cash', 'active'),
(3, 'asset', 'Cash equivalents', 'active'),
(4, 'asset', 'Short-term investments', 'active'),
(5, 'asset', 'Accounts receivable', 'active'),
(6, 'liability', 'Accounts payable', 'active'),
(7, 'liability', 'Insurance payable ', 'active'),
(8, 'liability', 'Salaries payable', 'active'),
(9, 'liability', 'Rent payable', 'active'),
(10, 'equity', 'Owner’s Capital ', 'active'),
(11, 'equity', 'Owner’s Withdrawals', 'active'),
(12, 'income', 'Dividends revenue', 'active'),
(13, 'income', 'Sales', 'active'),
(14, 'expense', 'Salaries expense', 'active'),
(15, 'expense', 'Depreciation expense-Furniture', 'active'),
(21, 'equity', 'nnn', 'inactive'),
(23, 'asset', 'Ratn', 'active'),
(26, 'equity', 'nnn', 'active'),
(27, 'equity', 'loan', 'inactive'),
(28, 'liability', 'aaabbbb', 'active'),
(29, 'income', 'Sales', 'inactive'),
(30, 'income', 'Sales on credit', 'active'),
(35, 'expense', 'salaualusalu', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `status`) VALUES
(1, 'Ali', 'ali@gmail.com', '12345', 'active'),
(13, 'Arif', 'arif@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'active'),
(113, 'mehedi', 'mehedi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `type` enum('fixed','current') NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `title`, `note`, `amount`, `date`, `type`, `status`) VALUES
(1, 'Machinery', 'Purchase machine', '50000.00', '2022-02-02', 'fixed', 'inactive'),
(5, 'Cash', 'Cash on credit', '200000.00', '2022-01-30', 'current', 'active'),
(7, 'Bank ', 'Bank cash', '500000.00', '2022-01-30', 'current', 'active'),
(9, 'Land', 'Purchase land', '25000.00', '2022-02-22', 'fixed', 'active'),
(10, 'Patent', 'Fame', '630000.00', '2022-02-22', 'current', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `equity`
--

CREATE TABLE `equity` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equity`
--

INSERT INTO `equity` (`id`, `title`, `note`, `amount`, `date`, `status`) VALUES
(1, 'Capital', 'Capital invested in own business', '100000.00', '2021-11-02', 'active'),
(2, 'Bank Loan', 'Bank loan was granted', '500000.00', '2022-01-03', 'active'),
(4, 'Purchase', 'Purchase on case', '25000.00', '2022-01-31', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `people_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expense_category`
--

CREATE TABLE `expense_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense_category`
--

INSERT INTO `expense_category` (`id`, `category`, `status`) VALUES
(3, 'Purchase', 'active'),
(4, 'Purchase', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `people_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `liability`
--

CREATE TABLE `liability` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `people_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `liability`
--

INSERT INTO `liability` (`id`, `title`, `note`, `people_id`, `amount`, `date`, `status`) VALUES
(1, 'Notes payable', 'Purchase on credit notes', 2, '22222.00', '2022-02-02', 'active'),
(3, 'Current portion of long term debt', 'mehedi', 1, '1400.00', '2022-02-03', 'active'),
(5, 'Current lease payable', 'b', 2, '2000.00', '2022-02-05', 'active'),
(6, 'Accrued income tax', 'b', 1, '2000.00', '2001-12-05', 'active'),
(12, 'Accrued expense', 'b', 2, '2000.00', '2021-12-02', 'active'),
(13, 'Dividend Payable', 'b', 2, '2000.00', '1994-03-01', 'active'),
(14, 'Unearned revenue', 'b', 1, '20000.00', '2021-01-06', 'active'),
(63, 'Bank overdraft', 'Take over draft', 2, '6000.00', '2021-11-25', 'active'),
(64, 'Accounts payable', 'a', 2, '152.00', '2022-02-10', 'active'),
(65, 'Arif', 'onek boro how bab/besi kotha kos', 1, '63.63', '2019-01-01', 'inactive'),
(73, 'amuk hobe na', 'tomuk', 2, '140140.25', '2022-02-04', 'inactive'),
(75, 'Notes payable', 'note payable on credit', 2, '25000.00', '2022-02-08', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `company` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `email`, `phone`, `address`, `company`, `status`) VALUES
(1, 'Maria', 'maria@gmail.com', '017', 'Savar', 'BITL', 'active'),
(2, 'Rakib', 'rakib@gmail.com', '015', 'Rajshahi', 'CF', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) NOT NULL,
  `account_head_id` int(11) NOT NULL,
  `note` text NOT NULL,
  `txn_type` enum('debit','credit') NOT NULL,
  `people_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `account_head_id`, `note`, `txn_type`, `people_id`, `amount`, `date`) VALUES
(1, 1, 'pay sallery', 'credit', 1, '20000.00', '2022-02-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_heads`
--
ALTER TABLE `account_heads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equity`
--
ALTER TABLE `equity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `people_id` (`people_id`);

--
-- Indexes for table `expense_category`
--
ALTER TABLE `expense_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`),
  ADD KEY `party_name` (`people_id`);

--
-- Indexes for table `liability`
--
ALTER TABLE `liability`
  ADD PRIMARY KEY (`id`),
  ADD KEY `party_name` (`people_id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_head_id` (`account_head_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_heads`
--
ALTER TABLE `account_heads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `equity`
--
ALTER TABLE `equity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_category`
--
ALTER TABLE `expense_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `liability`
--
ALTER TABLE `liability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `expense`
--
ALTER TABLE `expense`
  ADD CONSTRAINT `expense_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `expense_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `expense_ibfk_2` FOREIGN KEY (`people_id`) REFERENCES `people` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `income`
--
ALTER TABLE `income`
  ADD CONSTRAINT `income_ibfk_1` FOREIGN KEY (`people_id`) REFERENCES `people` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `liability`
--
ALTER TABLE `liability`
  ADD CONSTRAINT `liability_ibfk_1` FOREIGN KEY (`people_id`) REFERENCES `people` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`account_head_id`) REFERENCES `account_heads` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
