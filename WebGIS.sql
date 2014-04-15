-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2014 at 07:58 AM
-- Server version: 5.5.35-0ubuntu0.13.10.2
-- PHP Version: 5.5.3-1ubuntu2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `WebGIS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Gunung`
--

CREATE TABLE IF NOT EXISTS `Gunung` (
  `ID` int(100) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID Unik gunung',
  `Nama` varchar(50) NOT NULL COMMENT 'Nama Gunung',
  `Ketinggian` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Ketinggian Gunung',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`),
  KEY `ID_2` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Merupakan table yang merepresentasikan Gunung' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Gunung`
--

INSERT INTO `Gunung` (`ID`, `Nama`, `Ketinggian`) VALUES
(1, 'Semeru', 3676),
(2, 'Merapi', 2930);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
