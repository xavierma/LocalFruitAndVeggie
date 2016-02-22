-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2015 at 06:52 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `local_fv`
--

-- --------------------------------------------------------

--
-- Table structure for table `local_item`
--

CREATE TABLE IF NOT EXISTS `local_item` (
`local_item_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `january` tinyint(1) NOT NULL DEFAULT '0',
  `february` tinyint(1) NOT NULL DEFAULT '0',
  `march` tinyint(1) NOT NULL DEFAULT '0',
  `aprail` tinyint(1) NOT NULL DEFAULT '0',
  `may` tinyint(1) NOT NULL DEFAULT '0',
  `june` tinyint(1) NOT NULL DEFAULT '0',
  `july` tinyint(1) NOT NULL DEFAULT '0',
  `august` tinyint(1) NOT NULL DEFAULT '0',
  `september` tinyint(1) NOT NULL DEFAULT '0',
  `october` tinyint(1) NOT NULL DEFAULT '0',
  `november` tinyint(1) NOT NULL DEFAULT '0',
  `december` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `local_item`
--

INSERT INTO `local_item` (`local_item_id`, `location_id`, `item_id`, `january`, `february`, `march`, `aprail`, `may`, `june`, `july`, `august`, `september`, `october`, `november`, `december`) VALUES
(1, 1, 3, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `local_item`
--
ALTER TABLE `local_item`
 ADD PRIMARY KEY (`local_item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `local_item`
--
ALTER TABLE `local_item`
MODIFY `local_item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
