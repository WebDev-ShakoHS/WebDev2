-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2021 at 01:31 PM
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
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `twitchdata_update_better`
--

CREATE TABLE `twitchdata_update_better` (
  `COL 1` varchar(22) DEFAULT NULL,
  `COL 2` varchar(19) DEFAULT NULL,
  `COL 3` varchar(20) DEFAULT NULL,
  `COL 4` varchar(12) DEFAULT NULL,
  `COL 5` varchar(15) DEFAULT NULL,
  `COL 6` varchar(9) DEFAULT NULL,
  `COL 7` varchar(16) DEFAULT NULL,
  `COL 8` varchar(12) DEFAULT NULL,
  `COL 9` varchar(9) DEFAULT NULL,
  `COL 10` varchar(6) DEFAULT NULL,
  `COL 11` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `twitchdata_update_better`
--

INSERT INTO `twitchdata_update_better` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`, `COL 8`, `COL 9`, `COL 10`, `COL 11`) VALUES
('Channel', 'Watch time(Minutes)', 'Stream time(minutes)', 'Peak viewers', 'Average viewers', 'Followers', 'Followers gained', 'Views gained', 'Partnered', 'Mature', 'Language'),
('xQcOW', '6196161750', '215250', '222720', '27716', '3246298', '1734810', '93036735', 'TRUE', 'FALSE', 'English'),
('summit1g', '6091677300', '211845', '310998', '25610', '5310163', '1370184', '89705964', 'TRUE', 'FALSE', 'English'),
('Gaules', '5644590915', '515280', '387315', '10976', '1767635', '1023779', '102611607', 'TRUE', 'TRUE', 'Portuguese'),
('ESL_CSGO', '3970318140', '517740', '300575', '7714', '3944850', '703986', '106546942', 'TRUE', 'FALSE', 'English'),
('Tfue', '3671000070', '123660', '285644', '29602', '8938903', '2068424', '78998587', 'TRUE', 'FALSE', 'English'),
('Asmongold', '3668799075', '82260', '263720', '42414', '1563438', '554201', '61715781', 'TRUE', 'FALSE', 'English'),
('NICKMERCS', '3360675195', '136275', '115633', '24181', '4074287', '1089824', '46084211', 'TRUE', 'FALSE', 'English'),
('Fextralife', '3301867485', '147885', '68795', '18985', '508816', '425468', '670137548', 'TRUE', 'FALSE', 'English'),
('loltyler1', '2928356940', '122490', '89387', '22381', '3530767', '951730', '51349926', 'TRUE', 'FALSE', 'English'),
('Anomaly', '2865429915', '92880', '125408', '12377', '2607076', '1532689', '36350662', 'TRUE', 'FALSE', 'English'),
('TimTheTatman', '2834436990', '108780', '142067', '25664', '5265659', '1244341', '50119786', 'TRUE', 'TRUE', 'English'),
('LIRIK', '2832930285', '128490', '89170', '21739', '2666382', '199077', '50504526', 'TRUE', 'FALSE', 'English'),
('Riot Games (riotgames)', '2674646715', '80820', '639375', '20960', '4487489', '497678', '56855694', 'TRUE', 'FALSE', 'English'),
('Rubius', '2588632635', '58275', '240096', '42948', '5751354', '3820532', '58599449', 'TRUE', 'FALSE', 'Spanish'),
('auronplay', '2410022550', '40575', '170115', '53986', '3983847', '3966525', '41514854', 'TRUE', 'FALSE', 'Spanish'),
('MontanaBlack88', '2408460990', '67740', '181600', '33514', '2911316', '1101093', '37189666', 'TRUE', 'TRUE', 'German'),
('sodapoppin', '2329440420', '115305', '107833', '19659', '2786162', '236169', '39334821', 'TRUE', 'TRUE', 'English'),
('풍월량 (hanryang1125)', '2186662470', '181230', '26999', '12201', '494445', '92205', '34405975', 'TRUE', 'FALSE', 'Korean'),
('alanzoka', '2055003870', '103770', '89153', '19560', '3445134', '1325075', '46515698', 'TRUE', 'FALSE', 'Portuguese'),
('CohhCarnage', '2029212570', '175230', '43615', '11343', '1264808', '124242', '38718674', 'TRUE', 'FALSE', 'English'),
('Lord_Kebun', '1943299035', '153720', '34830', '12367', '434200', '137215', '19645967', 'TRUE', 'FALSE', 'English'),
('LCK_Korea', '1916365860', '47325', '140557', '39848', '619382', '255088', '76225485', 'TRUE', 'FALSE', 'Korean'),
('Castro_1021', '1845157080', '100215', '125133', '17779', '2411995', '550678', '22672980', 'TRUE', 'FALSE', 'English'),
('DrDisrespect', '1839882465', '73065', '97540', '23794', '4450718', '825004', '43919410', 'TRUE', 'FALSE', 'English');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
