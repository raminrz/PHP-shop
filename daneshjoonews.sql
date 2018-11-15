-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 02, 2014 at 06:42 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `daneshjoonews`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `text` longtext COLLATE utf8_persian_ci NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `text`, `flag`) VALUES
(1, 'erfanakbarimanesh', 'mr.akbarimanesh@yahoo.com', 'salam test', 1),
(2, 'عرفان اکبری منش', 'mr.akbarimanesh@yahoo.com', 'تست', 1),
(3, 'تست', 'frb@yahoo.com', 'تست', 1),
(4, 'تست', 'mr.akbarimanesh@yahoo.com', 'js', 1),
(7, 'fvfv', 'fsb@yahoo.com', 'sdb', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `short_text` text COLLATE utf8_persian_ci NOT NULL,
  `long_text` longtext COLLATE utf8_persian_ci NOT NULL,
  `date` text COLLATE utf8_persian_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `pic` text COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `title`, `short_text`, `long_text`, `date`, `name`, `pic`) VALUES
(1, '1مسابقات شنا', 'شنای قهرمانی جام ملت ها1', 'شنای قهرمانی جام ملت ها1\r\n\r\nشنای قهرمانی جام ملت هاشنای قهرمانی جام ملت ها\r\nشنای قهرمانی جام ملت ها\r\nشنای قهرمانی جام ملت ها\r\nشنای قهرمانی جام ملت ها\r\nشنای قهرمانی جام ملت هاشنای قهرمانی جام ملت ها\r\nشنای قهرمانی جام ملت هار\r\nشنای قهرمانی جام ملت ها\r\nشنای قهرمانی جام ملت هاشنای قهرمانی جام ملت هاشنای قهرمانی جام ملت ها', '13/3/1392', '1عرفان اکبری', ''),
(2, 'تیم طراحی سایت آپتانا', 'تیم طراحی سایت آپتانا همان دانشجویار است          ', '        آدرس وب سایت\r\naptana.ir\r\ndaneshjooyar.com\r\ndaneshjooyar.ir        ', '۱۳۹۲/۱۰/۳۰', 'عرفان اکبری منش', ''),
(5, 'تست', 'تست          ', 'تس\r\n        ', '۱۳۹۲/۱۰/۳۰', 'دانشجو یار', ''),
(6, 'تست جدید', 'جدی          ', 'جدید        ', '۱۳۹۲/۱۱/۲', 'دانشجو یار', ''),
(7, 'تست 2', 'تست          ', '2ت        ', '۱۳۹۲/۱۱/۲', 'دانشجو یار', ''),
(8, 'هثذ', '          ', '        ', '۱۳۹۲/۱۱/۲', 'دانشجو یار', ''),
(9, 'fvfv', 'fv', 'fv', '۱۳۹۲/۱۱/۲', 'دانشجو یار', ''),
(14, 'new11', '10 بهمن تولد دانشجویار22 1                                     1                  sf         ', 'تولد 1221', '۱۳۹۲/۱۱/۶', 'دانشجو یار121', 'c9f1bdaaabee12d25700ebb322486e75m.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `family` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `level` int(1) NOT NULL,
  `code` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `family`, `username`, `password`, `email`, `level`, `code`) VALUES
(1, 'دانشجو', 'یار', 'admin', '21232f297a57a5a743894a0e4a801fc3speiw#sb^&ewiq', 'admin@yahoo.com', 1, ''),
(2, 'عرفان ', 'اکبری', 'user', '2d8d6fdfb2f3563608acbf857be66e68', 'user@yahoo.com', 2, ''),
(3, 'erfan', 'akbari', 'erfan', '1234', 'erfan@yahoo.com', 2, ''),
(4, 'صادق', 'پاسبان', 'sadegh', '1234', 'sb@yahoo.com', 2, ''),
(5, 'روزبه', 'مشایخی', 'roozbeh', '1234', 'roozbeh.mashayekhi@yahoo.com', 2, ''),
(6, 'علی اصغر', 'تقی زاده', 'ali', '1234', 'ali@yahoo.com', 2, ''),
(7, 'user', 'user', 'vvvv', '123', 'user@yahoo.com', 2, ''),
(8, 'جواد ', 'کوشکی', 'javad', '123', 'javad@yahoo.com', 2, ''),
(9, 'new', 'new', 'new', 'new', 'new', 1, ''),
(10, 'حسین', 'رشیدی', 'h', 'fsbjqwrobno2bn0240b', 'h@yahoo.com', 1, ''),
(11, 'امین', 'هاشمی', 'amin', '30ae43ad1aa0a416699051b73a3dfcf6speiw#sb^&ewiq', 'amin@yahoo.com', 1, ''),
(12, 'بببب', 'ببب', 'b', '92eb5ffee6ae2fec3ad71c777531578fspeiw#sb^&ewiq', 'bsb@yahoo.com', 1, 'c818c27d6894a47e8029');
