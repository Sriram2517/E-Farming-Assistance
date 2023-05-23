-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2020 at 05:28 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `infromation`
--
CREATE DATABASE IF NOT EXISTS `infromation` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `infromation`;

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE IF NOT EXISTS `achievement` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `number` varchar(25) NOT NULL,
  `achievement` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`id`, `number`, `achievement`, `date`) VALUES
(1, '112', '121', '2020-02-15'),
(2, '112', '121', '2020-02-15'),
(3, '123456', 'im', '2020-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

CREATE TABLE IF NOT EXISTS `approved` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `address` varchar(500) NOT NULL,
  `domain` varchar(25) NOT NULL,
  `rdate` date NOT NULL,
  `number` bigint(15) NOT NULL,
  `salary` bigint(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `sslc` varchar(15) NOT NULL,
  `hsc` varchar(15) NOT NULL,
  `dc` varchar(15) NOT NULL,
  `ug` varchar(15) NOT NULL,
  `pg` varchar(15) NOT NULL,
  `dd` varchar(15) NOT NULL,
  `ac` varchar(15) NOT NULL,
  `cname` varchar(25) NOT NULL,
  `cid` varchar(50) NOT NULL,
  `eid` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `rsalary` bigint(15) NOT NULL,
  `reldate` date NOT NULL,
  `rdomain` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `approved`
--

INSERT INTO `approved` (`id`, `name`, `address`, `domain`, `rdate`, `number`, `salary`, `mail`, `sslc`, `hsc`, `dc`, `ug`, `pg`, `dd`, `ac`, `cname`, `cid`, `eid`, `status`, `rsalary`, `reldate`, `rdomain`) VALUES
(16, '1', '1', '1', '0001-01-01', 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '123456', '751462', '1', 'Apporved', 1, '0011-11-11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `employeeprofile`
--

CREATE TABLE IF NOT EXISTS `employeeprofile` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `cname` varchar(30) NOT NULL,
  `jdate` date NOT NULL,
  `rdate` date NOT NULL,
  `jdomain` varchar(15) NOT NULL,
  `rdomain` varchar(30) NOT NULL,
  `jsalary` bigint(30) NOT NULL,
  `rsalary` bigint(30) NOT NULL,
  `ssn` bigint(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employeeprofile`
--

INSERT INTO `employeeprofile` (`id`, `cname`, `jdate`, `rdate`, `jdomain`, `rdomain`, `jsalary`, `rsalary`, `ssn`) VALUES
(1, '123456', '0000-00-00', '0000-00-00', '1', '', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `empreg`
--

CREATE TABLE IF NOT EXISTS `empreg` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `address` varchar(500) NOT NULL,
  `domain` varchar(25) NOT NULL,
  `rdate` date NOT NULL,
  `number` bigint(15) NOT NULL,
  `salary` bigint(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `sslc` varchar(15) NOT NULL,
  `hsc` varchar(15) NOT NULL,
  `dc` varchar(15) NOT NULL,
  `ug` varchar(15) NOT NULL,
  `pg` varchar(15) NOT NULL,
  `dd` varchar(15) NOT NULL,
  `ac` varchar(15) NOT NULL,
  `cname` varchar(25) NOT NULL,
  `cid` varchar(50) NOT NULL,
  `eid` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `empreg`
--

INSERT INTO `empreg` (`id`, `name`, `address`, `domain`, `rdate`, `number`, `salary`, `mail`, `sslc`, `hsc`, `dc`, `ug`, `pg`, `dd`, `ac`, `cname`, `cid`, `eid`, `status`) VALUES
(15, '1', '1', 'ASP', '0000-00-00', 1, 7, '1', '1', '1', '1', '1', '1', '1', '1', '123456', '751462', '1', ''),
(16, '1', '1', 'ASP', '2020-02-16', 1, 7, '1', '1', '1', '1', '1', '1', '1', '1', '123456', '751462', '1', ''),
(17, '1', '1', 'ASP', '2020-02-16', 1, 7, '1', '1', '1', '1', '1', '1', '1', '1', '123456', '751462', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `un` varchar(25) NOT NULL,
  `pwd` varchar(25) NOT NULL,
  `type` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `un`, `pwd`, `type`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orgreg`
--

CREATE TABLE IF NOT EXISTS `orgreg` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `cid` varchar(15) NOT NULL,
  `address` varchar(500) NOT NULL,
  `domain` varchar(100) NOT NULL,
  `rdate` date NOT NULL,
  `number` bigint(12) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `orgreg`
--

INSERT INTO `orgreg` (`id`, `name`, `cid`, `address`, `domain`, `rdate`, `number`, `pwd`, `mail`) VALUES
(1, 'sun soft solutions', '123456', 'coimbature', '', '2020-02-13', 9876543210, '123456', 'sun@gamil.com'),
(2, 'sun soft solutions', '123456', '1', '', '0001-01-01', 1, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `reject`
--

CREATE TABLE IF NOT EXISTS `reject` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `address` varchar(500) NOT NULL,
  `domain` varchar(25) NOT NULL,
  `rdate` date NOT NULL,
  `number` bigint(15) NOT NULL,
  `salary` bigint(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `sslc` varchar(15) NOT NULL,
  `hsc` varchar(15) NOT NULL,
  `dc` varchar(15) NOT NULL,
  `ug` varchar(15) NOT NULL,
  `pg` varchar(15) NOT NULL,
  `dd` varchar(15) NOT NULL,
  `ac` varchar(15) NOT NULL,
  `cname` varchar(25) NOT NULL,
  `cid` varchar(50) NOT NULL,
  `eid` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `reject`
--

INSERT INTO `reject` (`id`, `name`, `address`, `domain`, `rdate`, `number`, `salary`, `mail`, `sslc`, `hsc`, `dc`, `ug`, `pg`, `dd`, `ac`, `cname`, `cid`, `eid`, `status`) VALUES
(15, '6', '6', '6', '0006-06-06', 6, 6, '6', '6', '6', '6', '6', '6', '6', '6', '123456', '137463', '6', 'Reject');

-- --------------------------------------------------------

--
-- Table structure for table `suggesion`
--

CREATE TABLE IF NOT EXISTS `suggesion` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `number` bigint(25) NOT NULL,
  `suggesion` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `suggesion`
--

INSERT INTO `suggesion` (`id`, `number`, `suggesion`, `date`) VALUES
(1, 123456, 'asd', '0000-00-00'),
(2, 123456, 'asd', '0000-00-00'),
(3, 123456, 'asd', '2020-02-14');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
