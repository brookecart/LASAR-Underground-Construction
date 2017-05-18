-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2017 at 09:41 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `addabout`
--

CREATE TABLE `addabout` (
  `ContentID` int(11) NOT NULL,
  `AboutHeader` tinytext NOT NULL,
  `AboutText` longtext NOT NULL,
  `NewImage` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `footeradditions`
--

CREATE TABLE `footeradditions` (
  `ContentID` int(11) NOT NULL,
  `Company` tinytext NOT NULL,
  `Contact` text NOT NULL,
  `Locations` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `ContentID` int(11) NOT NULL,
  `Piece_Order` int(11) NOT NULL,
  `Headers` tinytext NOT NULL,
  `Image` text NOT NULL,
  `text` mediumtext NOT NULL,
  `links` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mission statement`
--

CREATE TABLE `mission statement` (
  `Statement` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ContentID` int(11) NOT NULL,
  `ServiceOrder` int(11) NOT NULL,
  `Service` tinytext NOT NULL,
  `Service_Image` longtext NOT NULL,
  `General_Text` longtext NOT NULL,
  `General_Image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ContentID`, `ServiceOrder`, `Service`, `Service_Image`, `General_Text`, `General_Image`) VALUES
(1, 1, 'Wiring', '../Img/IMG_1564.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Img/IMG_1602.jpeg'),
(2, 2, 'Solar', '../Img/IMG_1503.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Img/IMG_1602.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addabout`
--
ALTER TABLE `addabout`
  ADD PRIMARY KEY (`ContentID`);

--
-- Indexes for table `footeradditions`
--
ALTER TABLE `footeradditions`
  ADD PRIMARY KEY (`ContentID`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`ContentID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ContentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addabout`
--
ALTER TABLE `addabout`
  MODIFY `ContentID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `footeradditions`
--
ALTER TABLE `footeradditions`
  MODIFY `ContentID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `ContentID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ContentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;