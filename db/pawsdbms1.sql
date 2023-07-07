-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 05:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pawsdbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `counts`
--

CREATE TABLE `counts` (
  `type` varchar(10) NOT NULL,
  `count` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counts`
--

INSERT INTO `counts` (`type`, `count`) VALUES
('ngo', 8),
('pets', 7),
('store', 4),
('users', 5),
('vet', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `nid` varchar(10) NOT NULL,
  `nname` varchar(30) DEFAULT NULL,
  `naddress` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`nid`, `nname`, `naddress`) VALUES
('n001', 'furryfriends', 'Bengaluru'),
('n002', 'pawsitivesupport', 'Patna'),
('n003', 'k9care', 'Bengal'),
('n006', 'PawsProtecc', 'Patna'),
('n008', 'Pawsngo2', 'Patna'),
('n010', 'Ngo1', 'Patna'),
('n011', 'PetStoreK1', 'Bengaluru');

--
-- Triggers `ngo`
--
DELIMITER $$
CREATE TRIGGER `count_ngo` AFTER INSERT ON `ngo` FOR EACH ROW BEGIN
    update counts set count=count+1 where type="ngo";
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `remove_ngo` AFTER DELETE ON `ngo` FOR EACH ROW BEGIN
    update counts set count=count-1 where type="ngo";
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `pid` varchar(10) NOT NULL,
  `species` varchar(10) DEFAULT NULL,
  `breed` varchar(20) DEFAULT NULL,
  `nid` varchar(10) DEFAULT NULL,
  `sid` varchar(20) DEFAULT NULL,
  `vid` varchar(20) DEFAULT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `pname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`pid`, `species`, `breed`, `nid`, `sid`, `vid`, `uname`, `pname`) VALUES
('p001', 'cat', 'siamese', 'n006', 's001', 'v003', 'Aman', 'luna'),
('p002', 'dog', 'tibetian mastiff', 'n001', 's002', 'v003', 'Aman', 'oliver'),
('p003', 'bird', 'koyal', 'n003', 's003', 'v002', 'adi', 'leo'),
('p004', 'rodent', 'hamster', 'n006', 's003', 'v001', 'Aman', 'kira'),
('p005', 'cat', 'manx', 'n001', 's001', 'v001', '', 'Linux'),
('p006', 'bird', 'parrot', 'n006', 's002', 'v002', '', 'Patty'),
('p007', 'Dog', 'Labrador', 'n006', 's002', 'v002', '', 'Jack');

--
-- Triggers `pets`
--
DELIMITER $$
CREATE TRIGGER `count_pet` AFTER INSERT ON `pets` FOR EACH ROW BEGIN
    update counts set count=count+1 where type="pets";
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `remove_pets` AFTER DELETE ON `pets` FOR EACH ROW BEGIN
    update counts set count=count-1 where type="pets";
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `sid` varchar(10) NOT NULL,
  `sname` varchar(20) DEFAULT NULL,
  `saddress` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`sid`, `sname`, `saddress`) VALUES
('s001', 'pawsupport', 'Bengaluru'),
('s002', 'helpk9', 'Mysore'),
('s003', 'furrysupport', 'Patna'),
('s004', 'petsWorld', 'BMSIT');

--
-- Triggers `store`
--
DELIMITER $$
CREATE TRIGGER `count_store` AFTER INSERT ON `store` FOR EACH ROW BEGIN
    update counts set count=count+1 where type="store";
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `remove_store` AFTER DELETE ON `store` FOR EACH ROW BEGIN
    update counts set count=count-1 where type="store";
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uname` varchar(20) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uname`, `email`, `password`, `name`, `type`, `address`) VALUES
('adi', 'aditya7@gmail.com', 'qwerty', 'Aditya', 'cust', NULL),
('Aman', 'aman@gmail.com', 'AMAN', 'Aman', 'cust', NULL),
('n006', 'pawsprocc@gmail.com', 'qwerty', 'PawsProtect', 'ngo', NULL),
('n008', 'Pawsngo@gmail.com', 'qwerty', 'PawsNgo', 'ngo', NULL),
('Pranav', 'Pranav', 'admin', 'Pranav', 'cust', 'Bengaluru');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `count_cust` AFTER INSERT ON `users` FOR EACH ROW BEGIN
    update counts set count=count+1 where type="users";
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `remove_cust` AFTER DELETE ON `users` FOR EACH ROW BEGIN
    update counts set count=count-1 where type="users";
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `vet`
--

CREATE TABLE `vet` (
  `vid` varchar(20) NOT NULL,
  `vaddress` varchar(30) DEFAULT NULL,
  `vname` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vet`
--

INSERT INTO `vet` (`vid`, `vaddress`, `vname`) VALUES
('v001', 'hormavu', 'akhil'),
('v002', 'konoha', 'naruto'),
('v003', 'britain', 'anya');

--
-- Triggers `vet`
--
DELIMITER $$
CREATE TRIGGER `count_vet` AFTER INSERT ON `vet` FOR EACH ROW BEGIN
    update counts set count=count+1 where type="vet";
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `remove_vet` AFTER DELETE ON `vet` FOR EACH ROW BEGIN
    update counts set count=count-1 where type="vet";
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counts`
--
ALTER TABLE `counts`
  ADD PRIMARY KEY (`type`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `vet`
--
ALTER TABLE `vet`
  ADD PRIMARY KEY (`vid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
