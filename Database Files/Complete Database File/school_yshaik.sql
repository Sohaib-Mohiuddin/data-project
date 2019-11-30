-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 30, 2019 at 02:19 AM
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
-- Table structure for table `alogin`
--

DROP TABLE IF EXISTS `alogin`;
CREATE TABLE IF NOT EXISTS `alogin` (
  `Ano` int(8) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`Ano`, `password`) VALUES
(20000000, 'admin'),
(20000000, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `coordinates`
--

DROP TABLE IF EXISTS `coordinates`;
CREATE TABLE IF NOT EXISTS `coordinates` (
  `location` varchar(20) NOT NULL,
  `latitude` int(5) NOT NULL,
  `longitude` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coordinates`
--

INSERT INTO `coordinates` (`location`, `latitude`, `longitude`) VALUES
('Toronto', 44, -79),
('Ajax', 44, -79),
('Whitby', 44, -79),
('Moscow', 56, 38),
('Cairo', 30, 31),
('Morocco', -7, 39),
('Oshawa', 44, -79),
('Whitby', 44, -79),
('Whitby', 44, -79),
('Moscow', 56, 38);

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

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
CREATE TABLE IF NOT EXISTS `grades` (
  `SN` int(8) NOT NULL,
  `CRN` int(5) NOT NULL,
  `Grade` int(3) NOT NULL,
  KEY `Studentnumber_idx` (`SN`),
  KEY `Coursenumber_idx` (`CRN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`SN`, `CRN`, `Grade`) VALUES
(40000000, 76589, 76),
(40000001, 89076, 23),
(40000002, 90909, 90),
(40000003, 90909, 100),
(40000004, 76341, 87),
(40000005, 76543, 67);

-- --------------------------------------------------------

--
-- Table structure for table `llogin`
--

DROP TABLE IF EXISTS `llogin`;
CREATE TABLE IF NOT EXISTS `llogin` (
  `SN` int(8) NOT NULL,
  `password` varchar(32) NOT NULL,
  KEY `SN` (`SN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `llogin`
--

INSERT INTO `llogin` (`SN`, `password`) VALUES
(40000000, 'ae2b1fca515949e5d54fb22b8ed95575'),
(40000000, '8f3115a500a07f30ac506e5040f0e5e0'),
(40000001, '6b7330782b2feb4924020cc4a57782a9'),
(40000002, 'a119e534072584a0ea88cdea4664aecd'),
(40000003, '5fe43373c2db4deb851f3290080621f5'),
(40000004, 'a5bd8e2b7e55c23e6bff78fc18e00778'),
(40000005, '84273c002a8901bc770518d7c98c1d5b');

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

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `SN` int(8) NOT NULL,
  `Rating` int(3) NOT NULL,
  `Profno` int(8) NOT NULL,
  `CRN` int(5) NOT NULL,
  KEY `SN_idx` (`SN`),
  KEY `Profno_idx` (`Profno`),
  KEY `CRN_idx` (`CRN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`SN`, `Rating`, `Profno`, `CRN`) VALUES
(40000000, 3, 10000006, 76589),
(40000001, 5, 10000005, 89076),
(40000002, 4, 10000001, 90909),
(40000003, 4, 10000001, 90909),
(40000004, 5, 10000004, 76341),
(40000005, 4, 10000003, 76543),
(40000003, 3, 10000003, 76543),
(40000003, 3, 10000003, 76543),
(40000003, 3, 10000003, 76543),
(40000003, 3, 10000003, 76543),
(40000003, 3, 10000003, 76543),
(40000003, 3, 10000003, 76543),
(40000003, 3, 10000003, 76543),
(40000003, 4, 10000004, 76341),
(40000003, 5, 10000004, 76341),
(40000003, 2, 10000004, 76341),
(40000003, 2, 10000004, 76341),
(40000002, 5, 10000003, 76543);

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

-- --------------------------------------------------------

--
-- Table structure for table `weather`
--

DROP TABLE IF EXISTS `weather`;
CREATE TABLE IF NOT EXISTS `weather` (
  `location` varchar(20) NOT NULL,
  `weather` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `weather`
--

INSERT INTO `weather` (`location`, `weather`) VALUES
('oshawa', 20),
('china', 200),
('whitby', 45),
('hihu', 90000),
('Toronto', 5),
('Moscow', -9),
('Beijing', 2),
('Tokyo', 8),
('Ajax', 4),
('Bowmanville', 4),
('Toronto', 5),
('Whitby', 4),
('Toronto', 5),
('Ajax', 4),
('Toronto', 5),
('Ajax', 8),
('Whitby', 8),
('Moscow', -2),
('Cairo', 19),
('Morocco', 27),
('Oshawa', 7),
('Whitby', 0),
('Whitby', 0),
('Moscow', -1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `ProfNumber` FOREIGN KEY (`Profno`) REFERENCES `professor` (`Profno`) ON UPDATE CASCADE;

--
-- Constraints for table `enrolled_in`
--
ALTER TABLE `enrolled_in`
  ADD CONSTRAINT `Coursenum` FOREIGN KEY (`CRN`) REFERENCES `courses` (`CRN`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Studentnum` FOREIGN KEY (`SN`) REFERENCES `student` (`SN`) ON UPDATE CASCADE;

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `Coursenumber` FOREIGN KEY (`CRN`) REFERENCES `courses` (`CRN`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Studentnumber` FOREIGN KEY (`SN`) REFERENCES `student` (`SN`) ON UPDATE CASCADE;

--
-- Constraints for table `llogin`
--
ALTER TABLE `llogin`
  ADD CONSTRAINT `llogin_ibfk_1` FOREIGN KEY (`SN`) REFERENCES `student` (`SN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plogin`
--
ALTER TABLE `plogin`
  ADD CONSTRAINT `plogin_ibfk_1` FOREIGN KEY (`Profno`) REFERENCES `professor` (`Profno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `slogin`
--
ALTER TABLE `slogin`
  ADD CONSTRAINT `slogin_ibfk_1` FOREIGN KEY (`SN`) REFERENCES `student` (`SN`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
