-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 30, 2019 at 02:24 AM
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
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `SN` int(8) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `PN` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Major` varchar(30) NOT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB AUTO_INCREMENT=40000006 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`SN`, `Fname`, `Lname`, `PN`, `Email`, `Major`) VALUES
(40000000, 'Boobly', 'Pop', '6472899905', 'boobly@gmail.com', 'Science'),
(40000001, 'Sohaib', 'Whall', '9025641243', 'sohaibW@gmail.com', 'Arts'),
(40000002, 'Harry', 'Potter', '9054431212', 'boywholived@gmail.com', 'Engineering'),
(40000003, 'Hermione', 'Granger', '9052231289', 'genius@gmail.com', 'Engineering'),
(40000004, 'Dixie', 'johnson', '9056942122', 'dixie.Johnson@gmail.com', 'Potions'),
(40000005, 'Joogly', 'Boogly', '9586537865', 'joogly@gmail.com', 'Charms');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
