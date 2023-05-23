-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2020 at 01:45 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `organic`
--
CREATE DATABASE IF NOT EXISTS `organic` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `organic`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `name` varchar(50) NOT NULL,
  `number` bigint(12) NOT NULL,
  `qty` int(11) NOT NULL,
  `carid` varchar(25) NOT NULL,
  `amt` int(11) NOT NULL,
  `date` date NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ads` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) NOT NULL,
  `pname` varchar(25) NOT NULL,
  `pimage` varchar(15) NOT NULL,
  `pprice` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `type`, `pname`, `pimage`, `pprice`) VALUES
(11, 'so', 'sp1', 'pimg/sp1.jpg', 50),
(12, 'sa', 'sp2', 'pimg/sp2.jpg', 50),
(13, 'so', 'se2', 'pimg/se2.jpg', 12),
(14, 'so', 'se3', 'pimg/se3.jpg', 14),
(15, 'sa', 'sp4', 'pimg/sp4.jpg', 11),
(16, 'sa', 'sp3', 'pimg/sp3.jpg', 16),
(17, 's', 's1', 'pimg/sy1.jpg', 1),
(18, 's', '2', 'pimg/sy2.jpg', 2),
(19, 's', '3', 'pimg/sy3.jpg', 3),
(20, 'p', '1', 'pimg/p1.jpeg', 1),
(21, 'c', 'c', 'pimg/c3.jpeg', 1),
(22, 'c', '2', 'pimg/c2.jpg', 2),
(23, 'c', 'c', 'pimg/c3.jpeg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `number` bigint(15) NOT NULL,
  `pas1` varchar(15) NOT NULL,
  `pas2` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `ads` varchar(500) NOT NULL,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
