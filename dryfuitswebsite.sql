-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2019 at 06:06 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dryfuitswebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `addnewcart`
--

CREATE TABLE `addnewcart` (
  `cartID` int(11) NOT NULL,
  `fruit` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `pricef` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addnewcart`
--

INSERT INTO `addnewcart` (`cartID`, `fruit`, `price`, `pricef`) VALUES
(3, 'Cashew', '1000', '840'),
(4, 'Almonds', '500', '370'),
(6, 'Walnuts', '1000', '880');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `number1` varchar(250) NOT NULL,
  `feedback1` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `number1`, `feedback1`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, 'kunal', 'kunal@gmsail', '8789056433', 'good'),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, 'Kunal Keshri', 'kunal@gmail.com', '', ''),
(17, 'Kunal Keshri', 'kunal@gmail.com', '8789056433', 'dgdhdfdddhfghf'),
(18, 'Kunal Keshri', 'kunal@gmail.com', '8789056433', 'Good Websites');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `confirm_email` varchar(50) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` int(10) NOT NULL,
  `secq` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first_name`, `last_name`, `username`, `password`, `confirm_password`, `email`, `confirm_email`, `phone_no`, `address`, `pincode`, `secq`) VALUES
(14, 'KUNAL', 'Keshri', 'kunalkeshri047@gmail.com', '963258741', '963258741', 'kunalkeshri047@gmail.com', 'kunalkeshri047@gmail.com', 2147483647, 'Aliganj Gulabibagh Bhagalpur', 812005, ''),
(21, 'Vivek', 'Raj', 'kunal.keshri2016@vitstudent.ac.in', '9876542145', '9876542145', 'vrajkumar1000@gmail.com', 'vrajkumar1000@gmail.com', 2147483647, 'Aliganj Gulabibagh Bhagalpur', 812005, ''),
(25, 'KUNAL', 'Raj', 'kunal.keshri2016@vitstudent.ac.in', '86453120.586452', '86453120.586452', 'kunal.keshri2016@vitstudent.ac.in', 'kunal.keshri2016@vitstudent.ac.in', 2147483647, 'Aliganj Gulabibagh Bhagalpur', 812005, ''),
(26, 'ARYAN', 'KESHRI', 'kunal.keshri2016@vitstudent.ac.in', 'ljiwqkgjvd', 'ljiwqkgjvd', 'kunalkeshri047@gmail.com', 'kunalkeshri047@gmail.com', 2147483647, 'Aliganj Gulabibagh Bhagalpur', 812005, ''),
(31, 'KUNAL', 'KESHRI', 'kunal.keshri2016@vitstudent.ac.in', 'QWERTYUUOIKJHGVC', 'QWERTYUUOIKJHGVC', 'kunalkeshri047@gmail.com', 'kunalkeshri047@gmail.com', 2147483647, 'Aliganj Gulabibagh Bhagalpur', 812005, ''),
(32, 'KUNAL', 'KESHRI', 'kunal.keshri2016@vitstudent.ac.in', 'QWERTYUUOIKJHGVC', 'QWERTYUUOIKJHGVC', 'kunalkeshri047@gmail.com', 'kunalkeshri047@gmail.com', 2147483647, 'Aliganj Gulabibagh Bhagalpur', 812005, ''),
(33, 'KUNAL', 'Keshri', 'admin@gmail.com', 'Hello$123iquest', 'Hello$123iquest', 'kunalkeshri047@gmail.com', 'kunalkeshri047@gmail.com', 2147483647, 'Aliganj Gulabibagh Bhagalpur', 812005, ''),
(34, 'KUNAL', 'Keshri', 'admin@gmail.com', '987654', '987654', 'kunalkeshri047@gmail.com', 'kunalkeshri047@gmail.com', 2147483647, 'Aliganj Gulabibagh Bhagalpur', 812005, ''),
(35, 'aman', 'goyal', 'ak@gmail.com', '789456123', '789456123', 'ak@gmail.com', 'ak@gmail.com', 2147483647, 'Aliganj Gulabibagh Bhagalpur', 812005, ''),
(36, 'Dosa', 'Goyal', 'kunal.keshri2016@vitstudent.ac.in', '963258741', '963258741', 'kunal.keshri2016@vitstudent.ac.in', 'kunal.keshri2016@vitstudent.ac.in', 2147483647, 'Aliganj Gulabibagh Bhagalpur', 812005, 'Dog'),
(37, 'KUNAL', 'Raj', 'kunalkeshri047@gmail.com', '963258741', '963258741', 'kunalkeshri047@gmail.com', 'kunalkeshri047@gmail.com', 2147483647, 'Aliganj Gulabibagh Bhagalpur', 812005, 'Dog');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addnewcart`
--
ALTER TABLE `addnewcart`
  ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addnewcart`
--
ALTER TABLE `addnewcart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
