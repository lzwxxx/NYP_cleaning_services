-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 30, 2018 at 06:35 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m3_172274p_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `bookingID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `serviceName` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`bookingID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `username`, `categoryName`, `serviceName`, `date`, `time`, `status`) VALUES
(1, 'Zhiwei', 'springcleaning', '4 rooms (900sqft - 1009sqft) - 3 cleaners', '2018-08-02', '12:00:00', 'B-Booked'),
(12, 'Zhiwei', 'officecleaning', 'Once Weekly (20 staffs and below) - 3 cleaners', '2018-08-04', '08:00:00', 'C-Cancelled'),
(3, 'David', 'residentialcleaning', 'Mansionette/ Executive (>1300sqft) - 3 cleaners', '2018-08-22', '08:00:00', 'B-Booked'),
(6, 'David', 'residentialcleaning', '3 Rooms (650sqft - 899sqft) - 1 cleaner', '2018-08-03', '09:00:00', 'C-Cancelled'),
(9, 'Zhiwei', 'residentialcleaning', '2 Rooms (<650sqft) - 1 cleaner', '2018-07-31', '14:00:00', 'C-Cancelled'),
(13, 'David', 'residentialcleaning', '4 Rooms (900sqft - 1009sqft) - 2 cleaners', '2018-07-31', '13:00:00', 'B-Booked');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `categoryID` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `name`) VALUES
(1, 'residentialcleaning'),
(2, 'springcleaning'),
(3, 'officecleaning'),
(4, 'movein/outcleaning');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `serviceID` int(11) NOT NULL AUTO_INCREMENT,
  `serviceName` varchar(255) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `duration` varchar(10) NOT NULL,
  PRIMARY KEY (`serviceID`,`categoryID`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceID`, `serviceName`, `categoryID`, `price`, `duration`) VALUES
(1, '2 Rooms (<650sqft) - 1 cleaner', 1, 200, '2hours'),
(2, '3 Rooms (650sqft - 899sqft) - 1 cleaner', 1, 250, '3hours'),
(3, '4 Rooms (900sqft - 1009sqft) - 2 cleaners', 1, 350, '3hours'),
(4, '5 Rooms (1100sqft - 1299sqft) - 2 cleaners', 1, 400, '4hours'),
(5, 'Mansionette/ Executive (>1300sqft) - 3 cleaners', 1, 500, '5hours'),
(6, '2 rooms (<650sqft) - 1 cleaner', 2, 250, '2hours'),
(7, '3 rooms (650sqft - 899sqft) - 2 cleaners', 2, 300, '2hours'),
(8, '4 rooms (900sqft - 1009sqft) - 3 cleaners', 2, 400, '3hours'),
(9, '5 rooms (1100sqft - 1299sqft) - 3 cleaners', 2, 450, '4hours'),
(10, 'Mansionette/ Executive (>1300sqft) - 4 cleaners', 2, 550, '5hours'),
(11, 'Once Weekly (10 staffs and below) - 2 cleaners', 3, 300, '3hours'),
(12, 'Once Weekly (20 staffs and below) - 3 cleaners', 3, 600, '4hours'),
(13, 'Once Weekly (30 staffs and below) - 4 cleaners', 3, 900, '5hours'),
(14, '2 rooms (<650sqft) - 2 cleaners', 4, 250, '2hours'),
(15, '3 rooms (650sqft - 899sqft) - 2 cleaners', 4, 300, '2hours'),
(16, '4 rooms (900sqft - 1009sqft) - 3 cleaners', 4, 400, '3hours'),
(17, '5 rooms (1100sqft - 1299sqft) - 3 cleaners', 4, 450, '4hours'),
(18, 'Mansionette/ Executive (>1300sqft) - 4 cleaners', 4, 550, '4hours');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pword` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactNo` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `username`, `pword`, `email`, `address`, `contactNo`) VALUES
(1, '', 'lim', 'lim', 'j@gmail.com', 'yishun', 81486188),
(2, '', 'limzw', 'limzhiwei@gmail.com', '1234', '123', 0),
(3, '', 'zy', '123', 'lzy@gmail.com', '123', 96385271),
(4, 'David', 'David', 'david', 'david@gmail.com', '12345', 96385274),
(5, 'Janet', 'janet', 'qwerty', 'janet@gmail.comg', '123456', 91234567),
(6, '', 'sam', '12345', 'sam@gmail.com', 'Yishun', 92345677),
(7, 'limzhiwei', 'Zhiwei', '12345', 'limzhiwei@gmail.com', 'Yishun Ave 6', 91234567);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
