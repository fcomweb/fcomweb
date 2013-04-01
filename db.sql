-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2013 at 03:02 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `fcom`
--

-- --------------------------------------------------------

--
-- Table structure for table `Satellieten`
--

CREATE TABLE `Satellieten` (
  `satellietenId` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(45) DEFAULT NULL,
  `beschrijving` varchar(500) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`satellietenId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Satellieten`
--

INSERT INTO `Satellieten` (`satellietenId`, `titel`, `beschrijving`, `foto`) VALUES
(1, 'Satelliet 1', 'Dit is Satelliet 1', 'link naar foto'),
(2, 'Satelliet 2', 'Dit is Satelliet 1', 'link naar foto'),
(3, 'Satelliet 3', 'Dit is Satelliet 3', 'link naar foto'),
(4, 'Satelliet 4', 'Dit is Satelliet 4', 'link naar foto');
