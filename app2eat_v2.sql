-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2016 at 09:07 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app2eat_v2`
--
CREATE DATABASE IF NOT EXISTS `app2eat_v2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `app2eat_v2`;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Street` varchar(50) NOT NULL,
  `HouseNum` int(10) NOT NULL,
  `MinPrice` int(10) NOT NULL,
  `LInk` varchar(250) NOT NULL,
  `Kosher` int(10) NOT NULL,
  `Category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`ID`, `Name`, `City`, `Street`, `HouseNum`, `MinPrice`, `LInk`, `Kosher`, `Category`) VALUES
(1, '????', '??? ?? ', '?????????', 17, 32, 'http://river-bar.co.il/', 1, '??????'),
(1, '???? ', '', '', 0, 0, '', 0, ''),
(1, 'River Nudels Bar', 'Ramat Gan', 'Zabotinski', 18, 32, 'http://river-bar.co.il/', 1, 'Asian '),
(1, 'River Nudels Bar', 'Ramat Gan', 'Zabotinski', 18, 32, 'http://river-bar.co.il/', 1, 'Asian '),
(1, 'River Nudels Bar', 'Ramat Gan', 'Zabotinski', 17, 32, 'http://river-bar.co.il/', 1, 'Asian '),
(2, 'Dominos Pizza', 'Ramat Gan ', 'Zabotinski', 45, 60, 'http://www.dominos.co.il/#', 0, 'Pizza'),
(3, 'King George', 'Ramat Gan ', 'Aba Hillel', 7, 35, 'https://www.mishlohim.co.il/WhiteMenu.aspx?BusinessID=6439', 1, 'Israeli Food '),
(4, 'Burgerim', 'Ramat Gan', 'Aba Hillel', 2, 35, 'http://iburgerim.co.il/he/', 1, 'Hamburgers'),
(5, 'Falafel Gina', 'Tel Aviv', 'Menahm Begin', 126, 19, 'https://falafelgina.m-secured.co.il/he_IL/branches/2330/order-online#menu/now/cat/15040', 1, 'Falafel ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
