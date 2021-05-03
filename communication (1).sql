-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 12, 2020 at 08:48 AM
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
-- Database: `communication`
--

-- --------------------------------------------------------

--
-- Table structure for table `accident location`
--

DROP TABLE IF EXISTS `accident location`;
CREATE TABLE IF NOT EXISTS `accident location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lon` float(29,13) NOT NULL,
  `lat` float(29,13) NOT NULL,
  `status` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accident location`
--

INSERT INTO `accident location` (`id`, `lon`, `lat`, `status`) VALUES
(3, 73.1019592285156, 19.2121772766113, 'n'),
(4, 73.1019592285156, 19.2121772766113, 'n');

-- --------------------------------------------------------

--
-- Table structure for table `accident_detail`
--

DROP TABLE IF EXISTS `accident_detail`;
CREATE TABLE IF NOT EXISTS `accident_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hosiptal_id` int(150) NOT NULL,
  `longitude` float(29,13) NOT NULL,
  `latit` float(29,13) NOT NULL,
  `distance` float(150,13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accident_detail`
--

INSERT INTO `accident_detail` (`id`, `hosiptal_id`, `longitude`, `latit`, `distance`) VALUES
(1, 1, 73.1019592285156, 19.2121772766113, 0.0000000000000),
(45, 1, 73.1019592285156, 19.2121772766113, 0.0000000000000),
(44, 1, 73.1019592285156, 19.2121772766113, 0.0000000000000);

-- --------------------------------------------------------

--
-- Table structure for table `accident_record`
--

DROP TABLE IF EXISTS `accident_record`;
CREATE TABLE IF NOT EXISTS `accident_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hid` int(150) NOT NULL,
  `vehicle_no` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `image` varchar(200) NOT NULL,
  `image1` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accident_record`
--

INSERT INTO `accident_record` (`id`, `hid`, `vehicle_no`, `date`, `time`, `image`, `image1`) VALUES
(1, 1, 'mh05887', '2020-11-09', '00:53:40', 'upload/Screenshot (87).png', 'upload/Screenshot (83).png'),
(2, 1, 'mh05eh8878', '2020-11-09', '00:55:39', 'upload/Screenshot (93).png', 'upload/Screenshot (91).png'),
(4, 1, 'mh06eh88596', '2020-11-09', '14:22:51', 'upload/Screenshot (91).png', 'upload/Screenshot (93).png'),
(5, 1, 'mh058879', '2020-11-09', '14:26:40', 'upload/Screenshot (125).png', 'upload/Screenshot (89).png');

-- --------------------------------------------------------

--
-- Table structure for table `ambulance_det`
--

DROP TABLE IF EXISTS `ambulance_det`;
CREATE TABLE IF NOT EXISTS `ambulance_det` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `hosid` int(150) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` int(150) NOT NULL,
  `address` text NOT NULL,
  `Hosiname` text NOT NULL,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambulance_det`
--

INSERT INTO `ambulance_det` (`id`, `hosid`, `name`, `email`, `password`, `address`, `Hosiname`, `status`) VALUES
(2, 1, 'Sagar Padhi', 'sagarpadhi005@gmail.com', 8520, 'dombivli', 'Aims', NULL),
(3, 1, 'avcd', 'sagarpadhi005@gmail.com', 852369, 'ertg', 'aims', NULL),
(4, 5, 'Shubham More', 'shubham09@gmail.com', 123456, 'kurla', 'shivam Hosiptal', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hosiptal_det`
--

DROP TABLE IF EXISTS `hosiptal_det`;
CREATE TABLE IF NOT EXISTS `hosiptal_det` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hosiptal_name` text NOT NULL,
  `hosi_email` text NOT NULL,
  `password` int(150) NOT NULL,
  `hosiptal_add` text NOT NULL,
  `contact` int(150) NOT NULL,
  `latitude` float(29,13) NOT NULL,
  `longi` float(29,13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosiptal_det`
--

INSERT INTO `hosiptal_det` (`id`, `hosiptal_name`, `hosi_email`, `password`, `hosiptal_add`, `contact`, `latitude`, `longi`) VALUES
(1, 'AIMS Hosiptal', 'Aims09@gmail.com', 852147, 'Dombivli', 8520015, 19.2121772766113, 73.1019592285156),
(2, 'City Hosiptal', 'city09@gmail.com', 8520, 'Thane', 963258740, 19.2121772766113, 73.1019592285156),
(3, 'city hosiptal', 'cityground@09gmail.com', 5051999, 'Vidyavihar', 889654122, 19.1229991912842, 18.1250000000000),
(4, 'sion ', 'sion@09gmail.com', 123456, 'Dombivli', 899658744, 19.2118930816650, 73.1018905639648),
(5, 'Shivam Hosiptal', 'shivam05@gmail.com', 85201, 'Dombivli', 85214796, 19.2120723724365, 73.1022720336914);

-- --------------------------------------------------------

--
-- Table structure for table `nearest_hosi`
--

DROP TABLE IF EXISTS `nearest_hosi`;
CREATE TABLE IF NOT EXISTS `nearest_hosi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hid` int(150) NOT NULL,
  `distance` float(150,13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=204 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `contact` int(150) NOT NULL,
  `vehicle` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `address`, `contact`, `vehicle`) VALUES
(7, 'Rohan Ghaywat', 'Rohan05@gmail.com', '123456', 'Vidyavihar', 123456, 'MH05EH8878'),
(4, 'sagar', 'sagarpadhi005@gmail.com', 'sagar34', 'domb', 887991577, 'mh205'),
(5, 'aimm', 'aimms09@gmail.com', '952pook', 'piiahhhshshsh', 225599899, ''),
(6, 'Rohan', 'rohan05@gmail.com', '123456', 'vidyavihar', 85236974, 'mh058890');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
