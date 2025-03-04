-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2024 at 06:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `global`
--

-- --------------------------------------------------------

--
-- Table structure for table `approvetable`
--

CREATE TABLE `approvetable` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` bigint(200) NOT NULL,
  `password1` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `ip` varchar(200) NOT NULL,
  `ballance` varchar(200) NOT NULL,
  `profit` varchar(200) NOT NULL,
  `bonus` varchar(200) NOT NULL,
  `plan` varchar(200) NOT NULL,
  `withdraw` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `verification_code` text NOT NULL,
  `verification_date` datetime DEFAULT NULL,
  `valuei` text NOT NULL,
  `valued` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approvetable`
--

INSERT INTO `approvetable` (`id`, `fname`, `lname`, `email`, `number`, `password1`, `date`, `ip`, `ballance`, `profit`, `bonus`, `plan`, `withdraw`, `country`, `verification_code`, `verification_date`, `valuei`, `valued`) VALUES
(6, 'Bybit', 'Benjamin', 'servermail225@gmail.com', 34565, 'qqqqq', '2014-06-24', '127.0.0.1', '0', '$0', '$0', 'NONE', 'NOT selected', 'Bahamas', '224092', NULL, '0', 'NULL'),
(7, 'tosin', 'mukialah', 'vasigaj777@chaladas.com', 99999, '111', '2021-08-24', '127.0.0.1', '0', '$0', '$0', 'NONE', 'NOT selected', 'Antarctica', '301373', '2024-08-21 13:06:11', '0', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `globaltable`
--

CREATE TABLE `globaltable` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` bigint(200) NOT NULL,
  `password1` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `ip` varchar(200) NOT NULL,
  `ballance` varchar(200) NOT NULL,
  `profit` varchar(200) NOT NULL,
  `bonus` varchar(200) NOT NULL,
  `plan` varchar(200) NOT NULL,
  `withdraw` varchar(200) NOT NULL,
  `rbonus` varchar(50) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `country` varchar(200) NOT NULL,
  `verification_code` text NOT NULL,
  `verification_date` datetime DEFAULT NULL,
  `valuei` text NOT NULL,
  `valued` text NOT NULL,
  `verify` varchar(200) NOT NULL,
  `ccview` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `globaltable`
--

INSERT INTO `globaltable` (`id`, `image`, `fname`, `lname`, `email`, `number`, `password1`, `date`, `ip`, `ballance`, `profit`, `bonus`, `plan`, `withdraw`, `rbonus`, `currency`, `country`, `verification_code`, `verification_date`, `valuei`, `valued`, `verify`, `ccview`) VALUES
(2, 'download (1).jpeg', 'expansion', 'mathins', 'forge3359@gmail.com', 100, 'wwwww', '2006-04-24', '127.0.0.1', '0', '200', '2', 'NONE', '30', '40', 'KWD', 'Canada', '132344', '2024-04-06 13:16:49', '5', '7/4/2024', '', ''),
(5, '76f1dd1b2c2aeefae16a9a5d11db6986.jpg', 'power', 'tosin', 'vewama1328@acuxi.com', 1122455, 'aaaaa', '2031-05-24', '127.0.0.1', '0', '$0', '$0', 'NONE', 'NOT selected', '', '', 'Angola', '285799', '2024-05-31 15:30:38', '0', 'NULL', '', ''),
(44, '', 'domain ', 'expansion', 'kavaxe3244@centerf.com', 87654323, 'aaaaa', '2003-04-24', '127.0.0.1', '0', '$0', '$0', 'NONE', 'NOT selected', '', '', 'United States', '303960', '2024-04-03 06:54:13', '5', '3/4/2024', '', ''),
(46, '', 'tunde', 'mafason', 'mecitek567@ekposta.com', 563890298355, 'aaaaa', '2004-04-24', '127.0.0.1', '5', '0', '$0', 'NONE', 'NOT selected', '', '', 'Armenia', '776392', '2024-04-04 03:32:56', '10', '2/4/2024', '', ''),
(48, 'download.jpeg', 'wicked', 'person', 'yagayer351@dacgu.com', 1345785234, 'aaaaa', '2007-04-24', '127.0.0.1', '0', '$0', '$0', 'NONE', 'NOT selected', '', '', 'Albania', '753244', '2024-04-07 11:32:07', '2', '05/04/2024', '', ''),
(50, '', 'tosin', 'mukialah', 'vasigaj777@chaladas.com', 99999, '111', '2022-08-24', '127.0.0.1', '0', '$0', '$0', 'NONE', 'NOT selected', '', '', 'Angola', '292664', NULL, '0', 'NULL', '', ''),
(51, '', 'walexboi', 'indiaona', 'soheno9200@albarulo.com', 902233744, '11111', '2022-08-24', '127.0.0.1', '10', '$7', '$0', 'NONE', 'NOT selected', '', '', 'Canada', '215204', '2024-08-21 17:06:34', '0', 'NULL', '', ''),
(52, '13.jpeg', 'Wale', 'Tosin', 'livemailCL@gmail.com', 0, 'aaaaa', '2022-10-24', '127.0.0.1', '10', '2', '6', 'NONE', '2000', '500', '£', 'Antarctica', '341013', '2024-10-21 01:46:29', '5', '19/10/2024', 'verified', 'YES'),
(54, '', 'water', 'meleon', 'conas95662@chysir.com', 890645516, 'aaaaa', '2022-10-24', '127.0.0.1', '0', '0', '0', 'NONE', '0', '0', '$', 'Antarctica', '126769', '2024-10-21 20:02:45', '1', '22/10/24', 'not verified', 'NO'),
(55, '', 'Bybit', 'Benjamin', 'conas95662@chysir.com', 17873406642, 'aaaaa', '2022-10-24', '127.0.0.1', '1', '0', '0', 'NONE', '0', '0', '$', 'Anguilla', '101202', '2024-10-21 20:13:08', '0.5', '22/10/24', 'not verified', 'NO'),
(56, '', 'mafason', 'wale', 'bosomid143@avzong.com', 4567890, 'aaaaa', '2022-10-24', '127.0.0.1', '0', '0', '0', 'NONE', '0', '0', '$', 'Anguilla', '234775', '2024-10-21 20:21:21', '0.5', '22/10/2024', 'not verified', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw3`
--

CREATE TABLE `withdraw3` (
  `user_id` varchar(20) NOT NULL,
  `method` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `withdraw3`
--

INSERT INTO `withdraw3` (`user_id`, `method`, `amount`, `status`) VALUES
('2', 'BITCOIN', '50', 'pendings'),
('52', 'BITCOIN', '10', 'pending'),
('6', 'BITCOIN', '56550', 'successful');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approvetable`
--
ALTER TABLE `approvetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `globaltable`
--
ALTER TABLE `globaltable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw3`
--
ALTER TABLE `withdraw3`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approvetable`
--
ALTER TABLE `approvetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `globaltable`
--
ALTER TABLE `globaltable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
