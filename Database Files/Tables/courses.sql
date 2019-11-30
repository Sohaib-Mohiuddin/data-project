-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 30, 2019 at 02:20 AM
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
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `CRN` int(5) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Profno` int(8) NOT NULL,
  `Cname` varchar(100) NOT NULL,
  PRIMARY KEY (`CRN`),
  KEY `ProfNumber_idx` (`Profno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CRN`, `Department`, `Profno`, `Cname`) VALUES
(76341, 'Potions', 10000004, 'Halal Potions'),
(76543, 'Charms', 10000003, 'Levitation'),
(76589, 'Science', 10000006, 'Diabetes'),
(87656, 'Transfiguration', 10000002, 'Intro to Transfiguration'),
(89076, 'Arts', 10000005, 'Advertising'),
(90909, 'Engineering', 10000001, 'Advanced Algorithms'),
(98352, 'Science', 10000000, 'Intro to Health Sciences');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `ProfNumber` FOREIGN KEY (`Profno`) REFERENCES `professor` (`Profno`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
