-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 19, 2022 at 10:31 AM
-- Server version: 5.7.36
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniactivity`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` varchar(15) COLLATE utf8_bin NOT NULL,
  `firstName` varchar(20) COLLATE utf8_bin NOT NULL,
  `middleName` varchar(20) COLLATE utf8_bin NOT NULL,
  `lastName` varchar(20) COLLATE utf8_bin NOT NULL,
  `profile_pic` longblob NOT NULL,
  `pdf_file` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `studentID`, `firstName`, `middleName`, `lastName`, `profile_pic`, `pdf_file`) VALUES
(1, '2019-30459', 'John Noel', 'Ayson', 'Gita', 0x70726f665f7069632e6a7067, 0x43686170746572203128555232292e706466),
(2, '2019-30458', 'Jullan Nick', 'Directo ', 'Ayson', 0x70726f665f7069632e6a7067, 0x43686170746572203128555232292e706466),
(3, '2019-30647', 'Rigel Kent', 'Saloma', 'Cruz', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
