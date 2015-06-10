-- phpMyAdmin SQL Dump
-- version 4.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2015 at 10:09 AM
-- Server version: 5.6.24-0ubuntu2
-- PHP Version: 5.6.4-4ubuntu6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` text,
  `message` text
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`) VALUES
(7, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsadf'),
(6, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsadf'),
(8, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsadf'),
(9, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsadf'),
(10, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsadf'),
(11, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsadf'),
(12, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsadf'),
(13, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsadf'),
(14, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsadf'),
(15, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsadf'),
(16, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsadf'),
(17, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsadf'),
(18, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsdaffdas'),
(19, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsdaffdas'),
(20, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsdaffdas'),
(21, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsdaffdas'),
(22, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsdaffdas'),
(23, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsdaffdas'),
(24, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsdaffdas'),
(25, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsdaffdas'),
(26, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsdaffdas'),
(27, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsdaffdas'),
(28, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsdaffdas'),
(29, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsdaffdas'),
(30, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsdaffdas'),
(31, 'Aaron Fruth', 'atfruth@gmail.com', 'efgwertwertwert'),
(32, 'Aaron Fruth', 'atfruth@gmail.com', 'efgwertwertwert'),
(33, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsadf'),
(34, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfasdf'),
(35, 'Aaron Fruth', 'atfruth@gmail.com', 'sadfadssadfsdafsfda'),
(36, 'Aaron Fruth', 'atfruth@gmail.com', 'sadfadssadfsdafsfda'),
(37, 'Aaron Fruth', 'atfruth@gmail.com', 'ertqertewrtewrtq wdfwqe frasdfa sdfasdf'),
(38, 'Aaron Fruth', 'atfruth@gmail.com', 'asdf asdf asdf asdf asdf'),
(39, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsadfasdf'),
(40, 'Aaron Fruth', 'atfruth@gmail.com', 'qerwqwerqwerwqerwqerewrr'),
(41, 'Aaron Fruth', 'atfruth@gmail.com', 'adsafasdfasdf'),
(42, 'Aaron Fruth', 'atfruth@gmail.com', 'dfgsdfgsdfgsdfg'),
(43, 'Aaron Fruth', 'atfruth@gmail.com', 'adfasdfasdf'),
(44, 'Aaron Fruth', 'atfruth@gmail.com', 'asdASDASD'),
(45, 'Aaron Fruth', 'atfruth@gmail.com', 'asdASDASD'),
(46, 'Aaron Fruth', 'atfruth@gmail.com', 'affdsfdfdsdf sdf '),
(47, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfasdf asdfasdf asdfasdf'),
(48, 'Aaron Fruth', 'atfruth@gmail.com', 'afasdasd'),
(49, 'Aaron Fruth', 'atfruth@gmail.com', 'aasdfasdfasfd'),
(50, 'Aaron Fruth', 'atfruth@gmail.com', 'rewwqseqwewqer'),
(51, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfasdf asdfasdfasdf'),
(52, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfasdf'),
(53, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfasdf'),
(54, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfasdf'),
(55, 'Aaron Fruth', 'atfruth@gmail.com', 'asASASAS'),
(56, 'Aaron Fruth', 'atfruth@gmail.com', 'firefox test'),
(57, 'Aaron Fruth', 'atfruth@gmail.com', 'firefox test 2'),
(58, 'Aaron Fruth', 'atfruth@gmail.com', 'firefox 3'),
(59, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfasdf'),
(60, 'Aaron Fruth', 'atfruth@gmail.com', 'firefox 4'),
(61, 'Aaron Fruth', 'atfruth@gmail.com', 'asdfasdfsadfsadf'),
(62, 'Aaron Fruth', 'atfruth@gmail.com', 'new website test'),
(63, 'Aaron Fruth', 'atfruth@gmail.com', 'dfghdfghdfgh'),
(64, 'John Pimpin', 'atfruth@gmail.com', 'Test Agnostic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
