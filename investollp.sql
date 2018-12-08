-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2018 at 05:06 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

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
(1, 'jareer', 'rico', '123');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(255) NOT NULL,
  `login_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mobile_number` bigint(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `introduced_by` varchar(255) NOT NULL,
  `nominee` varchar(255) NOT NULL,
  `relation_with_nominee` varchar(255) NOT NULL,
  `r_contact_number` bigint(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `sign` varchar(255) NOT NULL,
  `mode_of_payment` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `amount_in_words` varchar(255) NOT NULL,
  `payment_ref_number` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `status` int(10) NOT NULL,
  `activation_date` varchar(255) NOT NULL,
  `executive` bigint(255) NOT NULL,
  `verifier` bigint(255) NOT NULL,
  `expire_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `login_id`, `password`, `name`, `age`, `gender`, `mobile_number`, `pan`, `email`, `introduced_by`, `nominee`, `relation_with_nominee`, `r_contact_number`, `bank_name`, `account_number`, `ifsc_code`, `branch_name`, `date`, `sign`, `mode_of_payment`, `amount`, `amount_in_words`, `payment_ref_number`, `plan`, `status`, `activation_date`, `executive`, `verifier`, `expire_date`) VALUES
(1, 'rico', '123', 'Yaser basravi', 26, 'male', 8087794159, 'AUXasdf', 'basraviyaserm@gmail.com', 'asdf', 'Yaser basravi', 'asd', 8087794159, 'SBI', '2135123153', 'asdfadf', 'asdf', '2017-12-12', '', 'rtgs', 6500, 'six', '25135', '4', 1, '2017-12-25', 1, 1, ''),
(2, 'waseem', '123', 'textinh', 26, 'male', 8087794159, 'AUXasdf', 'basraviyaserm@gmail.com', 'asdf', 'Yaser basravi', 'asd', 8087794159, 'SBI', '2135123153', 'asdfadf', 'asdf', '2017-12-12', '', 'rtgs', 6500, 'six', '25135', '4', 1, '2017-12-31', 1, 1, ''),
(3, '', '', 'Yaser basravi', 26, 'male', 8087794159, 'AUXPB4536D', 'basraviyaserm@gmail.com', 'yaser', 'Yaser basravi', 'brother', 8087794159, 'SBI', '1244582266', 'SBI000045', 'Aurangapura', '2017-12-12', '', 'neft', 36500, 'thirty six thosand', '3645', '4', 1, '2017-12-17', 1, 0, ''),
(4, '', '', 'Yaser basravi', 26, 'male', 8087794159, 'AUXPB4536D', 'basraviyaserm@gmail.com', 'Yaser', 'Yaser basravi', 'Brother', 8087794159, 'SBI', '121632151', 'BI21121', 'Aurangpura', '2017-12-18', '', 'neft', 65000, 'Sixty Five Thousand', '65825', '5', 1, '2017-12-24', 1, 1, ''),
(5, '', '', 'texting', 27, 'male', 9999999999, 'AUXPB4536D', 'basraviyaserm@gmail.com', 'Ali', 'Junaid Basravi', 'Brother', 8668590057, 'SBI', '5566785214', 'SBI00INSD', 'Aurangpura', '2017-12-19', '', 'neft', 50000, 'Fifty Thousand', 'auxpb', '5', 1, '2017-12-24', 1, 0, ''),
(6, '', '', 'Yaser', 26, 'male', 8087794159, 'AUXPB4536D', 'ba@gmail.com', 'Junaid', 'Mohammad', 'Brother', 8668590057, 'SBI', '48247158556', 'SBI004574', 'Aurangpura', '2017-12-20', '', 'neft', 10000, 'Ten Thousand ', '25135', '5', 2, '2017-12-24', 1, 0, ''),
(7, '', '', 'Yaser basravi', 26, 'male', 8087794159, 'AUXPBD36D', 'basraviyaserm@gmail.com', 'ahmad', 'junaid', 'brother', 8668590057, 'SBI', '51354352135423', 'SBIasdf', 'Auranpura', '2017-12-19', '', 'neft', 60000, 'sixty thousand', '251356', '5', 0, '', 1, 0, '');

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
(3, 'yaser basravi', 8087794159, 'asdjf', '12345697', 'yaser', '123');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `plan_id` bigint(255) NOT NULL,
  `plan_code` varchar(255) NOT NULL,
  `plan_title` varchar(255) NOT NULL,
  `plan_duration` varchar(255) NOT NULL,
  `percentage` double NOT NULL,
  `payment_cycle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`plan_id`, `plan_code`, `plan_title`, `plan_duration`, `percentage`, `payment_cycle`) VALUES
(4, '', 'Learn On', '1', 15, '1'),
(5, 'IB0', 'Biz Plus', '5', 33, '4');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trans_id` bigint(225) NOT NULL,
  `debit` bigint(50) NOT NULL,
  `credit` bigint(50) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `plan_id` bigint(20) NOT NULL,
  `percentage` bigint(50) NOT NULL,
  `tran_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`trans_id`, `debit`, `credit`, `customer_id`, `plan_id`, `percentage`, `tran_date`) VALUES
(1, 0, 5000, 5, 5, 10, '2018-01-20'),
(2, 0, 6500, 4, 5, 10, '2018-01-11'),
(3, 0, 10000, 5, 5, 20, '2018-01-12'),
(4, 0, 13000, 4, 5, 20, '2018-01-13'),
(5, 0, 3650, 3, 4, 10, '2018-01-14'),
(6, 0, 650, 2, 4, 10, '2018-01-15'),
(7, 0, 650, 1, 4, 10, '2018-01-16'),
(8, 0, 2920, 3, 4, 8, '2018-01-17'),
(9, 0, 520, 2, 4, 8, '2018-01-18'),
(10, 0, 520, 1, 4, 8, '2018-01-19');

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
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trans_id`);

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
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `executive`
--
ALTER TABLE `executive`
  MODIFY `exe_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `plan_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `trans_id` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `verifier`
--
ALTER TABLE `verifier`
  MODIFY `ver_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
