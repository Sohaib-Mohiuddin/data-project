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
-- Table structure for table `enrolled_in`
--

DROP TABLE IF EXISTS `enrolled_in`;
CREATE TABLE IF NOT EXISTS `enrolled_in` (
  `SN` int(8) NOT NULL,
  `CRN` int(5) NOT NULL,
  `Cname` varchar(100) NOT NULL,
  KEY `SN_idx` (`SN`),
  KEY `CRN_idx` (`CRN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolled_in`
--

INSERT INTO `enrolled_in` (`SN`, `CRN`, `Cname`) VALUES
(40000000, 76589, 'Diabetes'),
(40000001, 89076, 'Advertising'),
(40000002, 90909, 'Advanced Algorithms'),
(40000003, 90909, 'Advanced Algorithms'),
(40000004, 76341, 'Halal Potions'),
(40000005, 76543, 'Levitation'),
(40000000, 90909, 'Advanced Algorithms');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrolled_in`
--
ALTER TABLE `enrolled_in`
  ADD CONSTRAINT `Coursenum` FOREIGN KEY (`CRN`) REFERENCES `courses` (`CRN`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Studentnum` FOREIGN KEY (`SN`) REFERENCES `student` (`SN`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
