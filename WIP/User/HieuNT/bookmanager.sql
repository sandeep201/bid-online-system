-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2014 at 05:38 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(40) NOT NULL,
  `bookname` varchar(40) NOT NULL,
  `createdate` date NOT NULL,
  `createuser` varchar(40) NOT NULL,
  `author` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `updateday` date NOT NULL,
  `price` float NOT NULL,
  `picturebook` text NOT NULL,
  `description` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `bookname`, `createdate`, `createuser`, `author`, `type`, `updateday`, `price`, `picturebook`, `description`) VALUES
(1, 'doreamon2014', '0000-00-00', 'vu danh hoang', 'abc', 'comic', '2014-05-20', 6000, '1.jpg', 'haha'),
(2, 'naruto', '0000-00-00', 'nghiem trung hieu', 'akadame', 'comic', '2014-05-21', 7000, '4.jpg', '18+');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
