-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2021 at 11:07 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AppleUsers`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `order_id` text NOT NULL,
  `usermail` text NOT NULL,
  `FullName` text NOT NULL,
  `Email` text NOT NULL,
  `Address` text NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `ZIP` text NOT NULL,
  `Nameoncard` text NOT NULL,
  `cardnumber` text NOT NULL,
  `totalamount` decimal(10,2) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `grandtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`order_id`, `usermail`, `FullName`, `Email`, `Address`, `City`, `State`, `ZIP`, `Nameoncard`, `cardnumber`, `totalamount`, `tax`, `grandtotal`) VALUES
('1286334000', 'bavansharma.k@gmail.com', 'Bavan Sharma', 'bavanssharma@gmail.com', 'No 120/25, Mill Road, Ukkulankulam', 'Vavuniya', 'TN', '43000', 'visa', '1234567890123456', '161900.00', '3238.00', '165138.00'),
('1875457676', 'bavansharma.offi@gmail.com', 'Bavan', 'bavansharma@icloud.com', 'No 120/25, Mill Road, Ukkulankulam', 'Vavuniya', 'TN', '43000', 'VISA', '1234567890123456', '708800.00', '14176.00', '722976.00');

-- --------------------------------------------------------

--
-- Table structure for table `orderproduct`
--

CREATE TABLE `orderproduct` (
  `order_id` text NOT NULL,
  `Email` text NOT NULL,
  `model` text NOT NULL,
  `finish` text NOT NULL,
  `capacity` text NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderproduct`
--

INSERT INTO `orderproduct` (`order_id`, `Email`, `model`, `finish`, `capacity`, `price`) VALUES
('1286334000', 'bavansharma.k@gmail.com', 'MacBook Air', 'SpaceGray', '256gb', '92900.00'),
('1286334000', 'bavansharma.k@gmail.com', 'iPhone12mini', 'White', '64gb', '69000.00'),
('1875457676', 'bavansharma.offi@gmail.com', 'MacBook Pro 16', 'SpaceGray', '512gb', '194900.00'),
('1875457676', 'bavansharma.offi@gmail.com', 'iPhone11', 'Green', '128gb', '64000.00'),
('1875457676', 'bavansharma.offi@gmail.com', 'Pro Display XDR', 'White', '-', '449900.00');

-- --------------------------------------------------------

--
-- Table structure for table `usercart`
--

CREATE TABLE `usercart` (
  `cartid` int(11) NOT NULL,
  `Email` text NOT NULL,
  `model` text NOT NULL,
  `finish` text NOT NULL,
  `capacity` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usercart`
--

INSERT INTO `usercart` (`cartid`, `Email`, `model`, `finish`, `capacity`, `price`, `img`) VALUES
(1, 'bavansharma.k@gmail.com', 'MacBook Pro 13', 'SpaceGray', '256gb', '129900.00', 'gimg/mbp13sgl.png'),
(2, 'bavansharma.k@gmail.com', 'iPhone12', 'Green', '128gb', '89000.00', 'gimg/ip12g.png'),
(1, 'bavansharma.offi@gmail.com', 'AirTag', 'White', '-', '3190.00', 'gimg/airtag.png'),
(2, 'bavansharma.offi@gmail.com', 'Apple Watch Series 3', 'Silver', '44mm', '23900.00', 'gimg/aws3sil.png'),
(3, 'bavansharma.offi@gmail.com', 'iPad Pro', 'Space Gray', '64gb', '71900.00', 'gimg/ippsg.png');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `EMail` text NOT NULL,
  `Contactnumber` bigint(11) NOT NULL,
  `Gender` text NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`FirstName`, `LastName`, `EMail`, `Contactnumber`, `Gender`, `DateOfBirth`, `Password`) VALUES
('Bavan', 'Sharma', 'bavansharma@apple.com', 1234567890, 'Male', '2000-01-01', 'aPPle3#2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`order_id`(20));

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`EMail`(40));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
