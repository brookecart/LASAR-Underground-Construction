-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 08:50 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
  `AboutOrder` int(11) NOT NULL,
  `AboutHeader` tinytext NOT NULL,
  `AboutText` longtext NOT NULL,
  `NewImage` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addabout`
--

INSERT INTO `addabout` (`ContentID`, `AboutOrder`, `AboutHeader`, `AboutText`, `NewImage`) VALUES
(1, 1, 'Our History', 'In July of 1984, LASAR Construction was started as a sole proprietorship company by Shawm Griswold. The main focus was the installation and repair of water lines, sewer lines, and underground telephone. Work was mostly conducted as a sub contractor for other contruction companies. In April of 1998, LASAR Construction secured an agreement with AT&T to bid to provide goods and services. Sine that time, 90% of the gross receipts are attributable to this agreemeent. This agreement was granted based on an ability to fulfill various requirements of AT&T. In January 1999, the company was incorporated. The name was changed to LASAR Underground Construction Incorporated. Shawn Griwswold was president and Lorrie Griswold was made treasureer and secretary of the corporation. In 2005, Shawn Griswold elected to retire his position. In October 2005 partial interest in LASAR Underground Construction was sold to Dennis Gregory. In June 2006, LASAR Underground Construction Inc. Secured the maintenance contract through AT&T for the Fresno and Madera areas. The company is currently under contract to do the maintenance for the Handford, Visalia, and Sonora Areas. Lorrie Griswold was elected president in February of 2008 and Dennies Gregory was elected Vice President.', 'IMG_1602.jpeg'),
(2, 2, 'What We offer', 'LASAR Underground Construction, Inc. is a general engineering contractor operating in the Central Valley of California since 1984. Over 27 years of experience in underground utility work sets us apart from the rest. The past 16 years we have been working on both small and large scale construction, installation, repair, and restorating projects focusing on residential and commercial contracting. With special emphasis in our core competency areas of trenching, cable, water, sewer, and telephone line installation. We strive to deliver high quality products including underground utility construction, repair, and restoration for clients needing wet or dry underground services. Our goal is to continue our current successes and maintain market share to succeed in this highly competitive market. With our experience and reputation as our guide we are committed to laying the foundation for communications.', '');

-- --------------------------------------------------------

--
-- Table structure for table `footeradditions`
--

CREATE TABLE `footeradditions` (
  `ContentID` int(11) NOT NULL,
  `Company` mediumtext NOT NULL,
  `Contact` text NOT NULL,
  `Locations` mediumtext NOT NULL,
  `Copyright` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footeradditions`
--

INSERT INTO `footeradditions` (`ContentID`, `Company`, `Contact`, `Locations`, `Copyright`) VALUES
(1, 'wefwefa', 'rwerfaewf', 'qerwfaew', 'qwrefqwef');

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

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`ContentID`, `Piece_Order`, `Headers`, `Image`, `text`, `links`) VALUES
(1, 1, 'Underground Wiring', 'IMG_1351.jpeg', 'Underground cable for running electrical power to a remote location can be installed at different depths, depending on the type of conduit and type of wire used. For a 6-in. deep trench, we use galvanized rigid metal electrical conduit with individual conductors inside. For a 12-in. deep trench, we direct-bury GFCI-protected underground feeder cable with a short length of PVC conduit at the house. At 18 inches, we use THWN-2 conductors inside a continuous length of PVC conduit, which protects the wire all the way through the trench to the house. At 24 inches we bury underground feeder cable, using PVC conduit to 18 in. below ground only where the wire comes up.', 'Services'),
(5, 2, 'Solar Installation', 'IMG_1457.jpeg', 'A photovoltaic (PV) module is a packaged, connect assembly of typically 6x10 photovoltaic solar cells. Photovoltaic modules constitute the photovoltaic array of a photovoltaic system that generates and supplies solar electricity in commercial and residential applications. Each module is rated by its DC output power under standard test conditions (STC), and typically ranges from 100 to 365 Watts (W). The efficiency of a module determines the area of a module given the same rated output â€“ an 8% efficient 230 W module will have twice the area of a 16% efficient 230 W module.', 'Services'),
(8, 3, 'Recent Projects', 'IMG_1487.jpeg', '   See some of the projects we have been working on. We do lots of work for the Central Valley and surrounding areas. We take pride in the quality of our work, so feel free to look through the things we have been doing around here.', '');

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `Statement` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`Statement`) VALUES
('                        LASAR Underground Construction, Inc. is committed to deliver high quality service including contracting estimates, site preparation, construction, repair, and restoration for clients. We will strive to implement long term relationships with our clients based on safety, quality, timely service and anticipation of their needs. Our goal is to maintain the highest level of professional associates and customers. Together we are laying the foundation for communications.     ');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ContentID` int(11) NOT NULL,
  `Service` tinytext NOT NULL,
  `Service_Image` longtext NOT NULL,
  `General_Text` longtext NOT NULL,
  `General_Image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ContentID`, `Service`, `Service_Image`, `General_Text`, `General_Image`) VALUES
(1, 'Wiring', 'IMG_1564.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'IMG_1602.jpeg'),
(3, 'Solar', 'IMG_1487.jpeg', 'Lorem Ipsum', 'IMG_1602.jpeg');

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
  MODIFY `ContentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `footeradditions`
--
ALTER TABLE `footeradditions`
  MODIFY `ContentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `ContentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ContentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
