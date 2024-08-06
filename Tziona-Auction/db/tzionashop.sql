-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220715.346923e20a
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 06:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tzionashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `currentbid`
--

DROP TABLE IF EXISTS `currentbid`;
CREATE TABLE `currentbid` (
  `id` int(50) NOT NULL,
  `bid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loginaccounts`
--

DROP TABLE IF EXISTS `loginaccounts`;
CREATE TABLE `loginaccounts` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user',
  `fullname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginaccounts`
--

INSERT INTO `loginaccounts` (`id`, `email`, `password`, `usertype`, `fullname`) VALUES
(0, 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 'administrator'),
(0, 'escalerahail@gmail.com', 'edb9bf52a4debbea3955a1f1ad82e9ac', 'user', NULL),
(0, 'ralfbaltero18@gmail.com', 'cb0d06c1ad34c5a0ab759e4d6aadef1a', 'user', NULL),
(0, 'ralfbaltero181@gmail.com', 'cb0d06c1ad34c5a0ab759e4d6aadef1a', 'user', NULL),
(0, 'ralfbaltero18112313@gmail.com', 'cb0d06c1ad34c5a0ab759e4d6aadef1a', 'user', NULL),
(0, 'ralfb1altero18@gmail.com', 'cb0d06c1ad34c5a0ab759e4d6aadef1a', 'user', NULL),
(0, 'ralfbaltero18@gmail.com', 'cb0d06c1ad34c5a0ab759e4d6aadef1a', 'user', NULL),
(0, 'ralfb12altero18@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', NULL),
(0, 'krezymome@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'user', NULL),
(0, 'ralfba12ltero18@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', NULL),
(0, 'ralfbalt23ero18@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'user', NULL),
(0, 'ralfb23altero18@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'user', NULL),
(0, 'ralfbalt1213ero18@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'user', NULL),
(0, 'admin@admin.com', '25f9e794323b453885f5181f1b624d0b', 'user', NULL),
(0, 'admin@mail.com', 'edb0e96701c209ab4b50211c856c50c4', 'user', NULL),
(0, 'admin@a1dmin.com', '5afda4f3994541505a87e5ec1034cae5', 'user', NULL),
(0, 'krezymome@gmail.com', '1374f7596171bbfdf533d0839543c589', 'user', NULL),
(0, 'admin@mail.com', 'edb0e96701c209ab4b50211c856c50c4', 'user', NULL),
(0, 'ralfba23ltero18@gmail.com', 'cb0d06c1ad34c5a0ab759e4d6aadef1a', 'user', NULL),
(0, 'ad13min@mail.com', '6a40ccef7f2eaba99f015f43b6a71a71', 'user', NULL),
(0, 'ralfb12altero18@gmail.com', 'c17f5c779676ff3350662e6441d53403', 'user', NULL),
(0, 'ralfbaltero18@gmail.com', '17c365601fe85424b3e9d7e56d544c20', 'user', NULL),
(0, 'ralfbaltero18@gmail.com', '17c365601fe85424b3e9d7e56d544c20', 'user', NULL),
(0, 'krezymome@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'user', NULL),
(0, 'admin11@mail.com', '5da9ba94938971fbc3716156c418e6bb', 'user', NULL),
(0, 'ralfbaltero18@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'user', NULL),
(0, 'ad12min@mail.com', 'e937e94c3e0cf67d4357b660c365529e', 'user', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `username`, `email`, `phone`, `message`) VALUES
(131, 'monichimin', 'haildriel@gmail.com', '3213332332', 'gegeege'),
(132, 'monichimint', 'escalerahail@gmail.com', '09479384579', 'Send message test'),
(133, 'Ralf', 'ralfbaltero18@gmail.com', '0936414355', '        \r\n\r\n          \r\n            \r\n              '),
(134, 'Ralf', 'ralf@gmail.com', '09563278481', '   '),
(135, 'Ralf', 'ralf@gmail.com', '09563278481', '   '),
(136, 'Ralf', 'ralfbaltero18@gmail.com', '0956827031', '\r\n  session_start();\r\n\r\n  $name = $_SESSION[&#39;loginuser&#39;];\r\n\r\n  $readaccount = &#34;SELECT * FROM registeraccount WHERE email = &#39;$name&#39;&#34;;\r\n  $readquery = mysqli_query($dbconnect, $readaccount);\r\n  $results = mysqli_fetch_array($readquery);\r\n  session_start();\r\n\r\n  $name = $_SESSION[&#39;loginuser&#39;];\r\n\r\n  $readaccount = &#34;SELECT * FROM registeraccount WHERE email = &#39;$name&#39;&#34;;\r\n  $readquery = mysqli_query($dbconnect, $readaccount);\r\n  $results = mysqli_fetch_ar'),
(137, 'ralf', 'ralfbaltero18@gmail.com', '09568270291', 'hi hello can anyone assist me thank you');

-- --------------------------------------------------------

--
-- Table structure for table `productlists`
--

DROP TABLE IF EXISTS `productlists`;
CREATE TABLE `productlists` (
  `id` int(11) NOT NULL,
  `unique_id` int(50) NOT NULL,
  `product` varchar(255) NOT NULL,
  `prod_pic` varchar(255) NOT NULL,
  `start_price` int(50) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `start_time` time(6) NOT NULL,
  `end_time` time(6) NOT NULL,
  `currently_bids` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registeraccount`
--

DROP TABLE IF EXISTS `registeraccount`;
CREATE TABLE `registeraccount` (
  `id` int(11) NOT NULL,
  `unique_id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) CHARACTER SET ascii NOT NULL DEFAULT 'user',
  `fullname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeraccount`
--

INSERT INTO `registeraccount` (`id`, `unique_id`, `username`, `email`, `phone_number`, `password`, `usertype`, `fullname`, `address`, `city`, `image`) VALUES
(30, 574704890, 'ralf', 'ralfbaltero18@gmail.com', '09568270291', '25f9e794323b453885f5181f1b624d0b', 'user', 'Ralf Baltero', '44 rajah soliman', 'Marikina city', '1658399270rrr.png'),
(31, 1004223244, 'ralf', 'ad12min@mail.com', '095628314131', 'e937e94c3e0cf67d4357b660c365529e', 'user', 'Ralf Baltero', '44 rajah soliman', 'Marikina city', '1658411782rrr.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currentbid`
--
ALTER TABLE `currentbid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productlists`
--
ALTER TABLE `productlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registeraccount`
--
ALTER TABLE `registeraccount`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currentbid`
--
ALTER TABLE `currentbid`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `productlists`
--
ALTER TABLE `productlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registeraccount`
--
ALTER TABLE `registeraccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
