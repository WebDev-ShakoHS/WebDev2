-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2021 at 08:19 PM
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
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `name` int NOT NULL,
  `style` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `dates` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`name`, `style`, `dates`) VALUES
(2, 'Platformer', 2020),
(3, 'PlatformerL', 2021),
(4, 'Strategy', 2015),
(5, 'Fantasy', 2018),
(6, 'Shooter', 2019),
(7, 'Platformer', 2020),
(8, 'Sports', 2015),
(9, 'Platformer', 2014),
(10, 'Shooter', 2017),
(11, 'Shooter', 2016),
(12, 'Strategy', 2012),
(13, 'Platformer', 2011),
(14, 'Fantasyssss', 2014),
(15, 'Platformer', 2018),
(16, 'Shooter', 2015),
(17, 'Platformer', 2019),
(18, 'Platformer', 2017),
(19, 'Sports', 2018),
(20, 'Strategy', 2015),
(111, 'hola', 2020),
(222, 'platformer', 2014);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `name` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
