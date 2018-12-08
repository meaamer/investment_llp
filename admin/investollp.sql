-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 04:47 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `investollp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_login` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_login`, `admin_password`) VALUES
(1, 'jareer', 'investollp', 'investollp@123');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `introduced_by` varchar(255) NOT NULL,
  `nominee` varchar(255) NOT NULL,
  `relation_with_nominee` varchar(255) NOT NULL,
  `moblie_number` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `sign` varchar(255) NOT NULL,
  `mode_of_payment` varchar(255) NOT NULL,
  `payment_number` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `amount_in_words` varchar(255) NOT NULL,
  `payment_ref_number` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `executive`
--

CREATE TABLE `executive` (
  `exe_id` bigint(255) NOT NULL,
  `exe_name` varchar(255) NOT NULL,
  `exe_contact_number` bigint(255) NOT NULL,
  `exe_address` varchar(255) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `exe_login` varchar(255) NOT NULL,
  `exe_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `executive`
--

INSERT INTO `executive` (`exe_id`, `exe_name`, `exe_contact_number`, `exe_address`, `uid`, `exe_login`, `exe_password`) VALUES
(1, 'Yaser', 8087794159, 'roshan gate', '123', 'yaser', 'yaser');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `plan_id` bigint(255) NOT NULL,
  `plan_title` varchar(255) NOT NULL,
  `plan_duration` varchar(255) NOT NULL,
  `percentage` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`plan_id`, `plan_title`, `plan_duration`, `percentage`) VALUES
(3, 'Marraige Plan', '300 days', 14);

-- --------------------------------------------------------

--
-- Table structure for table `verifier`
--

CREATE TABLE `verifier` (
  `ver_id` bigint(255) NOT NULL,
  `ver_name` varchar(255) NOT NULL,
  `ver_contact_number` bigint(255) NOT NULL,
  `ver_address` varchar(255) NOT NULL,
  `ver_uid` varchar(255) NOT NULL,
  `ver_login` varchar(255) NOT NULL,
  `ver_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verifier`
--

INSERT INTO `verifier` (`ver_id`, `ver_name`, `ver_contact_number`, `ver_address`, `ver_uid`, `ver_login`, `ver_password`) VALUES
(1, 'Yaser', 8087794159, 'ssdfg', '1345', 'yaser', 'yaser@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `executive`
--
ALTER TABLE `executive`
  ADD PRIMARY KEY (`exe_id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `verifier`
--
ALTER TABLE `verifier`
  ADD PRIMARY KEY (`ver_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `executive`
--
ALTER TABLE `executive`
  MODIFY `exe_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `plan_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `verifier`
--
ALTER TABLE `verifier`
  MODIFY `ver_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
