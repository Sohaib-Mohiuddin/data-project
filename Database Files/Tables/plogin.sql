-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 30, 2019 at 02:21 AM
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
-- Table structure for table `plogin`
--

DROP TABLE IF EXISTS `plogin`;
CREATE TABLE IF NOT EXISTS `plogin` (
  `Profno` int(8) NOT NULL,
  `password` varchar(32) NOT NULL,
  KEY `Profno` (`Profno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plogin`
--

INSERT INTO `plogin` (`Profno`, `password`) VALUES
(10000000, 'prof0'),
(10000000, 'prof0'),
(10000001, 'prof1'),
(10000002, 'prof2'),
(10000003, 'prof3'),
(10000004, 'prof4'),
(10000005, 'prof5'),
(10000006, 'prof6'),
(10000006, 'prof6');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `plogin`
--
ALTER TABLE `plogin`
  ADD CONSTRAINT `plogin_ibfk_1` FOREIGN KEY (`Profno`) REFERENCES `professor` (`Profno`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
