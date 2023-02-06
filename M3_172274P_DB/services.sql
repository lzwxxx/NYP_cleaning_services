-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 30, 2018 at 06:37 AM
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
