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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
