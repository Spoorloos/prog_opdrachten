-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Generation Time: Mar 12, 2024 at 01:49 PM
-- Server version: 11.2.2-MariaDB-1:11.2.2+maria~ubu2204
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m3prog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `meterstanden`
--

CREATE TABLE `meterstanden` (
  `id` int(11) NOT NULL,
  `stand` int(11) NOT NULL,
  `soort` varchar(16) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meterstanden`
--

INSERT INTO `meterstanden` (`id`, `stand`, `soort`, `datum`) VALUES
(1, 10000, 'elektischiteit', '2024-03-12'),
(2, 10500, 'elektischiteit', '2024-03-12'),
(3, 11000, 'elektischiteit', '2024-03-13'),
(4, 12000, 'elektischiteit', '2024-03-14'),
(5, 13000, 'elektischiteit', '2024-03-15'),
(6, 16000, 'elektischiteit', '2024-03-16'),
(7, 17000, 'elektischiteit', '2024-03-17'),
(8, 13000, 'elektischiteit', '2024-03-18'),
(9, 14000, 'elektischiteit', '2024-03-19'),
(10, 10700, 'elektischiteit', '2024-03-20'),
(11, 12300, 'elektischiteit', '2024-03-21'),
(12, 10700, 'elektischiteit', '2024-03-22'),
(13, 10800, 'elektischiteit', '2024-03-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meterstanden`
--
ALTER TABLE `meterstanden`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meterstanden`
--
ALTER TABLE `meterstanden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
