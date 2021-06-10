-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2021 at 04:38 PM
-- Server version: 8.0.22
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tradejournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `trades`
--

CREATE TABLE `trades` (
  `model_id` int UNSIGNED NOT NULL,
  `Ticker` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Buyprice` varchar(16) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sellprice` varchar(16) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Profitloss` varchar(16) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trades`
--

INSERT INTO `trades` (`model_id`, `Ticker`, `Buyprice`, `sellprice`, `Profitloss`) VALUES
(1, 'aapl', '100', '150', '$50'),
(2, 'msft', '80', '150', '$70'),
(4, 'FB', '220', '200', '-$20'),
(5, 'NFLX', '500', '450', '-$50'),
(6, 'Amzn', '3000', '3542', '$542'),
(7, 'Googl', '1000', '1200', '$200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trades`
--
ALTER TABLE `trades`
  ADD PRIMARY KEY (`model_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trades`
--
ALTER TABLE `trades`
  MODIFY `model_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

