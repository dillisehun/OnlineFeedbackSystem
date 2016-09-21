-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 01, 2016 at 10:15 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feedback`
--
CREATE DATABASE IF NOT EXISTS `feedback` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `feedback`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1316110172 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1316110171, 'sateesh', 'sateesh');

-- --------------------------------------------------------

--
-- Table structure for table `data_chanakya`
--

CREATE TABLE IF NOT EXISTS `data_chanakya` (
  `feedback_date` varchar(20) NOT NULL,
  `qno` int(11) NOT NULL,
  `vs` int(11) DEFAULT '0',
  `s` int(11) DEFAULT '0',
  `neutral` int(11) NOT NULL DEFAULT '0',
  `ds` int(11) NOT NULL DEFAULT '0',
  `worst` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_chanakya`
--

INSERT INTO `data_chanakya` (`feedback_date`, `qno`, `vs`, `s`, `neutral`, `ds`, `worst`) VALUES
('01/09/16', 1, 1, 0, 0, 0, 0),
('01/09/16', 2, 0, 1, 0, 0, 0),
('01/09/16', 3, 0, 1, 0, 0, 0),
('01/09/16', 4, 0, 1, 0, 0, 0),
('01/09/16', 5, 0, 1, 0, 0, 0),
('01/09/16', 6, 0, 1, 0, 0, 0),
('01/09/16', 7, 0, 1, 0, 0, 0),
('01/09/16', 8, 0, 1, 0, 0, 0),
('01/09/16', 9, 0, 1, 0, 0, 0),
('01/09/16', 10, 0, 1, 0, 0, 0),
('01/09/16', 11, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_chandragupta`
--

CREATE TABLE IF NOT EXISTS `data_chandragupta` (
  `feedback_date` varchar(20) NOT NULL,
  `qno` int(11) NOT NULL,
  `vs` int(11) DEFAULT '0',
  `s` int(11) DEFAULT '0',
  `neutral` int(11) NOT NULL DEFAULT '0',
  `ds` int(11) NOT NULL DEFAULT '0',
  `worst` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_vrindavan`
--

CREATE TABLE IF NOT EXISTS `data_vrindavan` (
  `feedback_date` varchar(20) NOT NULL,
  `qno` int(11) NOT NULL,
  `vs` int(11) DEFAULT '0',
  `s` int(11) DEFAULT '0',
  `neutral` int(11) NOT NULL DEFAULT '0',
  `ds` int(11) NOT NULL DEFAULT '0',
  `worst` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_vrindavan`
--

INSERT INTO `data_vrindavan` (`feedback_date`, `qno`, `vs`, `s`, `neutral`, `ds`, `worst`) VALUES
('01/09/16', 1, 0, 0, 0, 0, 0),
('01/09/16', 2, 0, 0, 0, 0, 0),
('01/09/16', 3, 0, 0, 0, 0, 0),
('01/09/16', 4, 0, 0, 0, 0, 0),
('01/09/16', 5, 0, 0, 0, 0, 0),
('01/09/16', 6, 0, 0, 0, 0, 0),
('01/09/16', 7, 0, 0, 0, 0, 0),
('01/09/16', 8, 0, 0, 0, 0, 0),
('01/09/16', 9, 0, 0, 0, 0, 0),
('01/09/16', 10, 0, 0, 0, 0, 0),
('01/09/16', 11, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_comm`
--

CREATE TABLE IF NOT EXISTS `feedback_comm` (
  `feedback_date` varchar(20) NOT NULL,
  `comment` varchar(150) NOT NULL,
  `hostel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_comm`
--

INSERT INTO `feedback_comm` (`feedback_date`, `comment`, `hostel`) VALUES
('01/09/16', 'Hello Chanakya', 'chanakya'),
('01/09/16', 'hello new chanakya', 'chanakya');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `stu_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_rollno` int(11) DEFAULT NULL,
  `stu_pass` varchar(20) NOT NULL,
  `stu_name` varchar(50) NOT NULL,
  `hostel` varchar(20) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`stu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`stu_id`, `stu_rollno`, `stu_pass`, `stu_name`, `hostel`, `flag`) VALUES
(1, 1316110171, 'sateesh', 'sateesh', 'chanakya', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
