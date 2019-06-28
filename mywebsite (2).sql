-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 01:48 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mywebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Buyer` varchar(10) NOT NULL,
  `sellerid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Name`, `Email`, `Password`, `Buyer`, `sellerid`) VALUES
('Hello', 'am@vd.com', 'b', 'buyer', 1),
('Aman Agrawal', 'aman.agrawal2016@vitstudent.ac.in', 'a', 'Buyer', 1),
('hjk', 'KXJK@GMAIL.COM', 'a', 'buyer', 1),
('a', 'xx@xx.com', 'a', 'buyer', 2),
('p', 'p@gmail.com', 'p', 'buyer', 2),
('s', 's@gmail.com', 's', 'buyer', 2),
('abhay', 'as@as.com', 'a', 'buyer', 3),
('Anshuman', 'ansh@a.com', 'x', 'Seller', 0),
('ritwik', 'r@r.com', 'r', 'buyer', 3),
('aaa', 'a@a.com', 'a', 'buyer', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Chair', 'images/s1.JPG', 5000.00),
(2, 'Mobile', 'images/s2.JPG', 30000.00),
(3, 'Honda Bike', 'images/s3.JPG', 40000.00),
(4, 'Audi', 'images/p3.JPG', 7000000.00),
(5, 'LED TV', 'images/p4.JPG', 15000.00),
(6, 'Shoe', 'images/b4.JPG', 999.00);

-- --------------------------------------------------------

--
-- Table structure for table `xx`
--

CREATE TABLE `xx` (
  `id` int(20) NOT NULL,
  `buyname` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xx`
--

INSERT INTO `xx` (`id`, `buyname`) VALUES
(1, 'Hello'),
(2, 'Aman'),
(3, 'hjk');

-- --------------------------------------------------------

--
-- Table structure for table `xx1`
--

CREATE TABLE `xx1` (
  `id` int(20) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xx1`
--

INSERT INTO `xx1` (`id`, `name`) VALUES
(2, 'p'),
(1, 'a'),
(3, 's');

-- --------------------------------------------------------

--
-- Table structure for table `xx3`
--

CREATE TABLE `xx3` (
  `id` int(20) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xx3`
--

INSERT INTO `xx3` (`id`, `name`) VALUES
(1, 'abhay'),
(2, 'ritwik'),
(3, 'aaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `xx`
--
ALTER TABLE `xx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xx3`
--
ALTER TABLE `xx3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `xx`
--
ALTER TABLE `xx`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `xx3`
--
ALTER TABLE `xx3`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
