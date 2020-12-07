-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 03:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `companyname` varchar(200) NOT NULL,
  `comapnyaddress` varchar(255) NOT NULL,
  `State` varchar(200) NOT NULL,
  `PostalCode` varchar(255) NOT NULL,
  `GSTINNO` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `comapanyemail` varchar(255) NOT NULL,
  `Gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `Firstname`, `Lastname`, `Email`, `Password`, `companyname`, `comapnyaddress`, `State`, `PostalCode`, `GSTINNO`, `PhoneNumber`, `comapanyemail`, `Gender`) VALUES
(1, 'abi', 'raja', 'abiraja936@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', '', '', ''),
(2, 'raja', 'abi', 'raja936@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', '', '', ''),
(3, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', '', ''),
(4, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', '', ''),
(5, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', '', ''),
(6, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', '', ''),
(7, 'abi', 'raja', 'abiraja936@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', '', '', ''),
(8, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', '', ''),
(9, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', '', ''),
(10, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', '', ''),
(11, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', '', ''),
(12, 'werf', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', '', ''),
(13, 'werf', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', '', ''),
(14, 'd', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', '', ''),
(15, 'w', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', '', ''),
(16, '', '', '', '', 'iitegkjtrbg', 'dkjfb', '', '', '', '', '', ''),
(17, '', '', '', '', 'ppppppppppppppppppp', 'ii', '', '', '', '', '', ''),
(18, '', '', '', '', 'vvv', 'vvv', '', '', '', '', '', ''),
(19, 'l', 'i', 'l@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'loveu', 'loveuuu', '', '', '', '', '', ''),
(25, 'newthing', 'newthing', 'www@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'NEWTECHonolgu', 'Peeldamedu', 'None', 'None', 'None', 'None', '', ''),
(26, 'sa', 'sa', 'sa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'ssaarytj76', 'saaaw46hu746', 'qqq yujyeytj76rk876ol99709 ', '1234567890', 'lki78944k35yj76875i7', 'ggg    ', 'cccrrj875o9', ''),
(27, 'iu', 'qr', 'abiraja936@gmail.com', '2af54305f183778d87de0c70c591fae4', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'male'),
(28, 'kk', 'kk', 'k@gmail.com', '202cb962ac59075b964b07152d234b70', '1111111111111111', 'abigcsvvbd@gmail.com', 'df  ', 'f', 'lki78944k35i7kolo9l9pl99oll', '3214567899   ', 'abigcsvvbd@gmail.com', 'male'),
(29, 'to', 'to', 'to@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'toy', 'tpy', '1234  ', '1234', '45678888', '89  ', 'abi@gmail.com', 'male'),
(30, 'h', 'h', 'hh@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'dfv', 'yh5', 'rsy ', 'ery', 'erh', 'wryh ', '43tre', 'male'),
(31, 'admin', 'admin', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
