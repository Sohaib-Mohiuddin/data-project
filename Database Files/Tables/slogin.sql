-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 30, 2019 at 02:22 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_yshaik`
--

-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

DROP TABLE IF EXISTS `slogin`;
CREATE TABLE IF NOT EXISTS `slogin` (
  `SN` int(8) NOT NULL,
  `password` varchar(32) NOT NULL,
  KEY `SN` (`SN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slogin`
--

INSERT INTO `slogin` (`SN`, `password`) VALUES
(40000000, 'testing0'),
(40000000, 'testing0'),
(40000001, 'testing0'),
(40000002, 'testing0'),
(40000003, 'testing0'),
(40000004, 'testing0'),
(40000005, 'testing0');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `slogin`
--
ALTER TABLE `slogin`
  ADD CONSTRAINT `slogin_ibfk_1` FOREIGN KEY (`SN`) REFERENCES `student` (`SN`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
