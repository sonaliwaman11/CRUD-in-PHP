-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 05:10 PM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserSno` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Active` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserSno`, `UserName`, `Active`) VALUES
(1, 'Sonali', 'Yes'),
(2, 'kirti', 'Yes'),
(3, 'ram', 'Yes'),
(4, 'mayur', 'Yes'),
(5, 'meera', 'Yes'),
(6, 'radha', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `useraddress`
--

CREATE TABLE `useraddress` (
  `UserAddressSno` int(11) NOT NULL,
  `UserSno` int(11) DEFAULT NULL,
  `Address` varchar(255) NOT NULL,
  `DefaultAddress` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useraddress`
--

INSERT INTO `useraddress` (`UserAddressSno`, `UserSno`, `Address`, `DefaultAddress`) VALUES
(5, 3, 'Nashik', 'Yes'),
(7, 6, 'Delhi', 'No'),
(10, 1, 'Pune', 'Yes'),
(12, 4, 'Banglore', 'No'),
(15, 2, 'Mumbai', 'Yes'),
(18, 5, 'Hyderabad', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserSno`);

--
-- Indexes for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD PRIMARY KEY (`UserAddressSno`),
  ADD KEY `UserSno` (`UserSno`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD CONSTRAINT `useraddress_ibfk_1` FOREIGN KEY (`UserSno`) REFERENCES `user` (`UserSno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
