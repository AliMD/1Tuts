-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2012 at 01:36 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ciw_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `author` varchar(32) NOT NULL,
  `desc` text NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `author`, `desc`, `price`, `img`) VALUES
(1, 'JavaScript: The Good Parts', 'Douglas Crockford', 'Describes the reliable features of JavaScript, covering such topics as syntax, objects, functions, arrays, regular expressions, inheritance, and methods.', 25, 'bk1.jpg'),
(2, 'JavaScript: The Definitive Guide', 'David Flanagan', 'The 6th edition covers HTML5 and ECMAScript 5. Many chapters have been completely rewritten to bring them in line with today''s best web development practices. New chapters in this edition document jQuery and server side JavaScript.', 30, 'bk2.jpg'),
(3, 'JavaScript: A Beginner''s Guide', 'John Pollock', 'Designed for Easy Learning: Modules--Each concept is divided into logically organized modules (chapters), ideal for self-paced learning Critical Skills--Each module opens with the specific skills covered in the module Mastery Checks--End-of ...', 14, 'bk3.jpg'),
(4, 'Beginning PHP5', 'Dave Mercer', 'What is this book about? Beginning PHP5 is a complete tutorial in PHP5''s language features and functionality, beginning with the basics and building up to the design and construction of complex data-driven Web sites.', 60, 'wrox1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
