-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2015 at 11:38 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bijnaweekend`
--

-- --------------------------------------------------------

--
-- Table structure for table `wijnlijst`
--

CREATE TABLE IF NOT EXISTS `wijnlijst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(255) NOT NULL,
  `inhoud` varchar(255) NOT NULL,
  `prijs` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `wijnlijst`
--

INSERT INTO `wijnlijst` (`id`, `naam`, `inhoud`, `prijs`) VALUES
(1, 'Wijn van Tim', '100 Liter', ' 167,80'),
(2, 'Wijn van Jim', ' 123 Liter', ' 199,95'),
(3, 'Wijn van Kelvin', ' 200 Liter', ' 1993,50'),
(4, 'Wijn van Stefano ', ' 27 Liter ', ' 100,99');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
