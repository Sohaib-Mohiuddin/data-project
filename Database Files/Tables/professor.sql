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
-- Table structure for table `professor`
--

DROP TABLE IF EXISTS `professor`;
CREATE TABLE IF NOT EXISTS `professor` (
  `Profno` int(8) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `PN` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Department` varchar(30) NOT NULL,
  PRIMARY KEY (`Profno`)
) ENGINE=InnoDB AUTO_INCREMENT=10000007 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`Profno`, `Fname`, `Lname`, `PN`, `Email`, `Department`) VALUES
(10000000, 'John', 'Liscano', '9052426696', 'John.Liscano@ontariotechu.net', 'Science'),
(10000001, 'Albus', 'Dumbledore', '9054206969', 'albus@ontariotechu.net', 'Engineering'),
(10000002, 'Minerva', 'McGonagall', '9059876756', 'minerva@ontariotechu.net', 'Transfiguration'),
(10000003, 'Filius', 'Flitwick', '9054837865', 'filius@ontariotechu.net', 'Charms'),
(10000004, 'Severus', 'Snape', '4167542783', 'serverus@ontariotechu.net', 'Potions'),
(10000005, 'Horace', 'Slughorn', '9058903764', 'horace@ontariotechu.net', 'Arts'),
(10000006, 'Pomona', 'Sprout', '2897654523', 'pomona@ontariotechu.net', 'Science');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
