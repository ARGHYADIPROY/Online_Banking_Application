-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 12:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mssg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `email`, `mssg`) VALUES
(9, 'bala78@gmail.com', 'My account balance is wrong'),
(22, 'krisha@outlook.com', 'I am having issue while sending money'),
(23, 'krisha@outlook.com', 'My transaction history is wrong'),
(24, 'arg@gmail.com', 'My phone no is wrong');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` bigint(10) NOT NULL,
  `accountno` bigint(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `amount` bigint(10) NOT NULL,
  `type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `accountno`, `name`, `amount`, `type`) VALUES
(25, 1696540059, 'Krishna Manna', 1000, 'CREDIT'),
(26, 1696527364, 'Rahul Kumar', 1000, 'DEBIT'),
(27, 1696657014, 'Bala Krishna', 100000, 'CREDIT'),
(28, 1696657140, 'Naga Deep', 100000, 'DEBIT'),
(29, 1696540059, 'Bala Krishna', 100000, 'CREDIT'),
(30, 1696657140, 'Rahul Kumar', 100000, 'DEBIT'),
(35, 169654005, 'Bala Krishna', 52525, 'CREDIT'),
(36, 1696657140, 'Rahul Kumar', 52525, 'DEBIT'),
(43, 1696657014, 'Arghyadip Roy', 10000, 'CREDIT'),
(52, 1696696096, 'Arghyadip Roy', 2356, 'DEBIT'),
(53, 1696657140, 'Bala Krishna', 586, 'CREDIT'),
(54, 1696657140, 'Bala Krishna', 586, 'DEBIT'),
(55, 1696657140, 'Bala Krishna', 100, 'CREDIT'),
(56, 1696657014, 'Bala Krishna', 100, 'DEBIT'),
(57, 1696657405, 'Krishna Manna', 400, 'CREDIT'),
(58, 1696657014, 'Krishna Manna', 400, 'DEBIT'),
(59, 1696657140, 'Bala Krishna', 100, 'CREDIT'),
(60, 1696657014, 'Bala Krishna', 100, 'DEBIT'),
(61, 1696696096, 'Arghyadip Roy', 100, 'CREDIT'),
(62, 1696657014, 'Arghyadip Roy', 100, 'DEBIT'),
(63, 1696696096, 'Arghyadip Roy', 1, 'CREDIT'),
(64, 1696657014, 'Arghyadip Roy', 1, 'DEBIT');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`email`, `password`) VALUES
('manager@opera.com', 'op56era');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` bigint(10) NOT NULL,
  `mssg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `mssg`) VALUES
(4, 'Extension of Fixed Deposit “IND Mahila Shakti – 555 Days”'),
(6, 'IB-DIGI- A Digital Ready SB Account'),
(7, 'Indian Bank bags 2nd position in ATAL Pension Yojana Enrollment\n'),
(8, 'CSR Activity under AKAM\n'),
(9, 'Launch of New Fixed Maturity Domestic Term Deposit Product “IND Mahila Shakti – 555 Days”\n'),
(10, 'Award for the Bank\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  `accountno` bigint(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `phnno` bigint(10) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `dob` date NOT NULL,
  `balance` bigint(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `accountno`, `name`, `uid`, `gender`, `phnno`, `address`, `dob`, `balance`) VALUES
('arg@gmail.com', '2356', 1696696096, 'Arghyadip Roy', '5623489562', 'male', 8956123602, 'kolkata', '2002-08-25', 10000101),
('bala78@gmail.com', '41731041', 1696657140, 'Bala Krishna', '5665231236', 'male', 5489123652, 'Andhra Pradesh', '2003-05-16', 9637984),
('krisha@outlook.com', '417213', 1696657405, 'Krishna Manna', '6102356423', 'male', 8954632158, 'West Bengal', '2009-08-11', 56892750),
('satyanaga@gmail.com', '41731038', 1696657014, 'Naga Deep', '8561234789', 'male', 8942315678, 'Andhra Pradesh', '2003-07-04', 10109243),
('skar5623@gmail.com', '562356', 1696540059, 'Rahul Kumar', '9856127563', 'female', 7365218923, 'Haldia, Township', '2023-10-26', 745325021),
('susmir5@gmail.com', '41731016', 1696657281, 'Ankita Manna', '4512896347', 'female', 7647895612, 'Haldia', '2009-09-16', 48536530);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `UNIQUE` (`accountno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
