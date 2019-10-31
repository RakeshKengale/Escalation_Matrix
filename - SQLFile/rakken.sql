-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 01:29 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rakken`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `Username`, `Password`, `Update_date`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblhub`
--

CREATE TABLE `tblhub` (
  `id` int(11) NOT NULL,
  `Hubname` varchar(255) NOT NULL,
  `Locationid` int(11) NOT NULL,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhub`
--

INSERT INTO `tblhub` (`id`, `Hubname`, `Locationid`, `Status`) VALUES
(1, 'Hub 1', 1, 1),
(2, 'Hub 2', 1, 1),
(3, 'Hub 3', 2, 1),
(4, 'Hub 4', 2, 1),
(5, 'Hub 5', 3, 1),
(6, 'Hub 6', 3, 1),
(7, 'Hub 7', 4, 1),
(8, 'Hub 8', 4, 1),
(9, 'Hub 9', 5, 1),
(10, 'Hub 10', 5, 1),
(11, 'Hub 11', 6, 1),
(12, 'Hub 12', 6, 1),
(13, 'Hub 13', 7, 1),
(14, 'Hub 14', 7, 1),
(15, 'Hub 15', 8, 1),
(16, 'Hub 16', 8, 1),
(17, 'Hub 17', 9, 1),
(18, 'Hub 18', 9, 1),
(19, 'Hub 19', 10, 1),
(20, 'Hub 20', 10, 1),
(21, 'Hub 21', 11, 1),
(22, 'Hub 22', 11, 1),
(23, 'Hub 23', 12, 1),
(24, 'Hub 24', 9, 1),
(25, 'HUB 25', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblinfo`
--

CREATE TABLE `tblinfo` (
  `id` int(11) NOT NULL,
  `Uid` varchar(11) NOT NULL,
  `Zone` varchar(255) NOT NULL,
  `Region` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Hub` varchar(255) NOT NULL,
  `MName` varchar(255) NOT NULL,
  `MContact` char(13) NOT NULL,
  `MEmailid` varchar(255) NOT NULL,
  `MMName` varchar(255) NOT NULL,
  `MMContact` char(13) NOT NULL,
  `MMEmailid` varchar(255) NOT NULL,
  `OName` varchar(255) NOT NULL,
  `OContact` char(13) NOT NULL,
  `OEmailid` varchar(255) NOT NULL,
  `OOName` varchar(255) NOT NULL,
  `OOContact` char(13) NOT NULL,
  `OOEmailid` varchar(255) NOT NULL,
  `BMName` varchar(255) NOT NULL,
  `BMContact` char(13) NOT NULL,
  `BMEmailid` varchar(255) NOT NULL,
  `SDMName` varchar(255) NOT NULL,
  `SDMContact` char(13) NOT NULL,
  `SDMEmailid` varchar(255) NOT NULL,
  `AMName` varchar(255) NOT NULL,
  `AMContact` char(13) NOT NULL,
  `AMEmailid` varchar(255) NOT NULL,
  `ADName` varchar(255) NOT NULL,
  `ADContact` char(13) NOT NULL,
  `ADEmailid` varchar(255) NOT NULL,
  `DName` varchar(255) NOT NULL,
  `DContact` char(13) NOT NULL,
  `DEmailid` varchar(255) NOT NULL,
  `Create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinfo`
--

INSERT INTO `tblinfo` (`id`, `Uid`, `Zone`, `Region`, `Location`, `Hub`, `MName`, `MContact`, `MEmailid`, `MMName`, `MMContact`, `MMEmailid`, `OName`, `OContact`, `OEmailid`, `OOName`, `OOContact`, `OOEmailid`, `BMName`, `BMContact`, `BMEmailid`, `SDMName`, `SDMContact`, `SDMEmailid`, `AMName`, `AMContact`, `AMEmailid`, `ADName`, `ADContact`, `ADEmailid`, `DName`, `DContact`, `DEmailid`, `Create_date`, `Update_date`, `Status`) VALUES
(1, '27734389', 'Central 1', 'Meerut + UK', 'AGRA', 'AGRA', 'Mis 1', '1234567890', 'mis1@gmail.com', 'Mis 2', '888888', 'mis2@gmail.com', 'Operation 1', '88888888', 'opeartion1@gmail.com', 'Operation 2', '88888888', 'operation2@gmail.com', 'Branch Manager', '88888888', 'branchmanager@gmail.com', 'Service Deliver Manager', '88888888', 'servicedelivermanager@gmail.com', 'Area Manager', '88888888', 'areamanager@gmail.com', 'Associate director', '88888888', 'associatedirector@gmail.com', 'Director', '88888888', 'director@gmail.com', '2019-02-26 00:00:00', '2019-03-24 15:42:50', 1),
(2, '27734389', 'Zone 1', 'Region 1', 'Location 1', 'AGRA', 'MIS 1', '', '', 'MIS 2', '', '', 'Operation 1', '', '', 'Operation 2', '', '', 'Branch Manager', '', '', 'Service Deliver Manager', '', '', 'Area Manager', '', '', 'Associate director', '', '', 'Director', '', '', '2019-02-28 12:18:45', '2019-03-24 11:51:27', 1),
(3, '84269751', 'India', 'Maharashtra', 'Mumbai', 'Mumbai', 'MIS 1', '1234567890', 'mis1@gmail.com', 'MIS 2', '1234567890', 'mis2@gmail.com', 'Operation 1', '1234567890', 'operation1@gmail.com', 'Operation 2', '1234567890', 'opertion2@gmail.com', 'branch manager', '1234567890', 'bm@gmail.com', 'sdm', '1234567890', 'sdm@gmail.com', 'am', '1234567890', 'areamanager@gmail.com', 'ad', '1234567890', 'ad@gmail.com', 'd', '1234567890', 'd@gmail.com', '2019-02-28 16:57:59', '2019-03-24 12:09:08', 1),
(4, '27734389', 'ZONE 1', 'REGION 2', 'LOCATION 4', 'Hub 8', 'MIS 1', 'MIS1@gmail.co', '1234567890', 'MIS2', '1234567890', 'MIS2@gmail.com', 'O1', '1234567890', 'O1@gmail.com', 'O2', '1234567890', 'O2@gmail.com', 'BM', '1234567890', 'BM@gmail.com', 'SDM', '1234567890', 'SDM@gmail.com', 'AM', '1234567890', 'AM@gmail.com', 'AD', '1234567890', 'AD@gmail.com', 'D', '1234567890', 'D@gmail.com', '2019-03-10 22:44:08', '2019-03-23 17:03:22', 1),
(5, '71608329', 'ZONE 1', 'REGION 2', 'LOCATION 4', 'Hub 5', 'MIS 1', '1234567890', 'mis1@gmail.com', 'MIS 2', '1234567890', 'mis2@gmail.com', 'Operation 1', '1234567890', 'operation1@gmail.com', 'Operation 2', '1234567890', 'opertion2@gmail.com', 'branch manager', '1234567890', 'bm@gmail.com', 'sdm', '1234567890', 'sdm@gmail.com', 'am', '1234567890', 'AM@gmail.com', 'ad', '1234567890', 'ad@gmail.com', 'd', '1234567890', 'd@gmail.com', '2019-03-24 11:47:30', '2019-03-24 13:34:21', 1),
(6, '71608329', 'ZONE 1', 'REGION 3', 'LOCATION 4', 'Hub 5', 'MIS 1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-03-24 12:13:15', '2019-03-24 12:22:11', 1),
(7, '71608329', 'ZONE 2', 'REGION 4', 'LOCATION 4', 'Hub 8', 'Test', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-03-24 12:23:27', '2019-03-24 12:23:33', 1),
(8, '71608329', 'ZONE 3', 'REGION 6', 'LOCATION 6', 'Hub 12', 'Test', '1234567890', 'mis1@gmail.com', 'MIS 2', '1234567890', 'mis2@gmail.com', 'Operation 1', '', 'operation1@gmail.com', 'Operation 2', '', '', 'branch manager', '', '', 'sdm', '', '', 'am', '', '', 'ad', '', '', 'd', '', '', '2019-03-24 13:37:05', '2019-03-24 13:42:07', 1),
(9, '71608329', 'ZONE 2', 'REGION 4', 'LOCATION 4', 'Hub 8', 'MIS 1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-03-24 13:38:27', '2019-03-24 13:38:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbllocation`
--

CREATE TABLE `tbllocation` (
  `Locationid` int(11) NOT NULL,
  `Locationname` varchar(50) NOT NULL,
  `Regionid` int(11) NOT NULL,
  `Status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllocation`
--

INSERT INTO `tbllocation` (`Locationid`, `Locationname`, `Regionid`, `Status`) VALUES
(1, 'LOCATION 1', 1, '1'),
(2, 'LOCATION 2', 2, '1'),
(3, 'LOCATION 3', 3, '1'),
(4, 'LOCATION 4', 4, '1'),
(5, 'LOCATION 5', 5, '1'),
(6, 'LOCATION 6', 6, '1'),
(7, 'LOCATION 7', 7, '1'),
(8, 'LOCATION 8', 8, '1'),
(9, 'LOCATION 9', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tblregion`
--

CREATE TABLE `tblregion` (
  `Regionid` int(11) NOT NULL,
  `Regionname` varchar(50) NOT NULL,
  `Zoneid` int(11) NOT NULL,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblregion`
--

INSERT INTO `tblregion` (`Regionid`, `Regionname`, `Zoneid`, `Status`) VALUES
(1, 'REGION 1', 1, 1),
(2, 'REGION 2', 1, 1),
(3, 'REGION 3', 2, 1),
(4, 'REGION 4', 2, 1),
(5, 'REGION 5', 3, 1),
(6, 'REGION 6', 3, 1),
(7, 'REGION 7', 4, 1),
(8, 'REGION 8', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `Userid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Emailid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `Status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `Userid`, `Fullname`, `Emailid`, `Password`, `Create_date`, `Update_date`, `Status`) VALUES
(1, '27734389', 'Rakesh Kengale', 'user@gmail.com', '123456', '2019-02-07 12:37:27', '2019-03-24 17:49:37', '1'),
(8, '71608329', 'user', 'User@gmail.com', '123456', '2019-03-24 11:27:14', '2019-03-24 17:44:13', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tblzone`
--

CREATE TABLE `tblzone` (
  `Zoneid` int(11) NOT NULL,
  `Zonename` varchar(50) NOT NULL,
  `Status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblzone`
--

INSERT INTO `tblzone` (`Zoneid`, `Zonename`, `Status`) VALUES
(1, 'ZONE 1', '1'),
(2, 'ZONE 2', '1'),
(3, 'ZONE 3', '1'),
(4, 'ZONE 4', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblhub`
--
ALTER TABLE `tblhub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblinfo`
--
ALTER TABLE `tblinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllocation`
--
ALTER TABLE `tbllocation`
  ADD PRIMARY KEY (`Locationid`);

--
-- Indexes for table `tblregion`
--
ALTER TABLE `tblregion`
  ADD PRIMARY KEY (`Regionid`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblzone`
--
ALTER TABLE `tblzone`
  ADD PRIMARY KEY (`Zoneid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblhub`
--
ALTER TABLE `tblhub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tblinfo`
--
ALTER TABLE `tblinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbllocation`
--
ALTER TABLE `tbllocation`
  MODIFY `Locationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tblregion`
--
ALTER TABLE `tblregion`
  MODIFY `Regionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblzone`
--
ALTER TABLE `tblzone`
  MODIFY `Zoneid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
