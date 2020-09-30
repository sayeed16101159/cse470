-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 03:55 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_information`
--

CREATE TABLE `product_information` (
  `PRODUCT_ID` int(11) NOT NULL,
  `PRODUCT_NAME` varchar(15) NOT NULL,
  `BRAND` varchar(15) NOT NULL,
  `MODEL` varchar(10) NOT NULL,
  `USAGE_TIME` varchar(10) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `PRODUCT_DETAILS` varchar(100) NOT NULL,
  `IMAGE_PATH` varchar(100) NOT NULL,
  `DELETE_PRODUCT` int(1) NOT NULL,
  `TIME` varchar(10) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `TYPE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_information`
--

INSERT INTO `product_information` (`PRODUCT_ID`, `PRODUCT_NAME`, `BRAND`, `MODEL`, `USAGE_TIME`, `PRICE`, `PRODUCT_DETAILS`, `IMAGE_PATH`, `DELETE_PRODUCT`, `TIME`, `USER_ID`, `TYPE_ID`) VALUES
(1, 'Mobile', 'Nokia', '3300', '1 year', 10000, 'sdasd', 'asdas', 1, '06:33:06pm', 1, 1),
(2, 'qwedqw', 'sda', 'sada', 'asda', 100, 'afaf', 'sdfsdf', 1, '11:11:40pm', 1, 1),
(3, 'asd', 'sd', 'sa', 'dsa', 5, 'asd', 'sdfsdf', 1, '11:12:41pm', 1, 1),
(4, 'asdv', 'ss', 'dd', 'dd', 11, 'sad', 'sdfsdf', 1, '11:29:02pm', 1, 1),
(5, 'asdv', 'ss', 'dd', 'dd', 11, 'sad', 'sdfsdf', 1, '11:43:25pm', 1, 1),
(6, 'asdv', 'ss', 'dd', 'dd', 5, 'sadsdasdsd', 'productimg/a2.JPG', 1, '11:44:15pm', 1, 1),
(7, 'TV', 'sony', '215', '5 year', 50000, 'sadjnajf', 'productimg/dmc.jpg', 1, '07:01:21pm', 1, 1),
(8, 'TV', 'sony', '215', '5 year', 10000, 'good', 'productimg/dmc.jpg', 1, '07:04:08pm', 1, 1),
(9, 'Car', 'mercedes benz', 'c15', '5 year', 5000000, 'in good condition', 'productimg/26030535_2002189403383071_1113355699_n.jpg', 0, '08:48:00am', 1, 2),
(10, 'Chair', 'otobi', '00', '5 month', 1000, 'in good condition', 'productimg/26034422_2002189406716404_526512203_n.jpg', 0, '08:49:33am', 1, 3),
(11, 'iphone', 'apple', '5s', '2 year', 10000, 'good condition.no scratch .', 'productimg/26030614_2002189610049717_1857325022_n.jpg', 0, '08:51:27am', 2, 5),
(12, 'motor cycle', 'ducati', 'j6', '2 year', 500000, 'in good shape', 'productimg/motor cycle.jpg', 0, '08:53:47am', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `TYPE_ID` int(11) NOT NULL,
  `TYPE_NAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`TYPE_ID`, `TYPE_NAME`) VALUES
(1, 'Electronics'),
(2, 'Car'),
(3, 'Furniture'),
(4, 'Motor cycle'),
(5, 'Mobile & Tablet'),
(6, 'Computer'),
(7, 'Computer Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `USER_ID` int(11) NOT NULL,
  `USER_NAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PHONE` varchar(11) NOT NULL,
  `D_O_B` varchar(10) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `DELETE_USER` int(1) NOT NULL,
  `TIME` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`USER_ID`, `USER_NAME`, `PASSWORD`, `EMAIL`, `PHONE`, `D_O_B`, `GENDER`, `DELETE_USER`, `TIME`) VALUES
(1, 'Faisal Ahmed', '12345678', 'faisal@gmail.com', '01628300434', '9-10-1995', 'male', 0, '12:50'),
(2, 'Shakil', '12345678', 'shakil@gmail.com', '01234567895', '3-4-2001', 'male', 0, '09:20:54pm'),
(3, 'tanvir', '12345678', 'tanvir@gmail.com', '11628300434', '1-1-2001', 'male', 0, '09:34:42pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_information`
--
ALTER TABLE `product_information`
  ADD PRIMARY KEY (`PRODUCT_ID`),
  ADD KEY `USER_ID` (`USER_ID`),
  ADD KEY `TYPE_ID` (`TYPE_ID`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`TYPE_ID`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_information`
--
ALTER TABLE `product_information`
  MODIFY `PRODUCT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `TYPE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_information`
--
ALTER TABLE `product_information`
  ADD CONSTRAINT `product_information_ibfk_1` FOREIGN KEY (`TYPE_ID`) REFERENCES `product_type` (`TYPE_ID`),
  ADD CONSTRAINT `product_information_ibfk_2` FOREIGN KEY (`USER_ID`) REFERENCES `user_information` (`USER_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
