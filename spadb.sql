-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2020 at 06:46 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `sp_menu`
--

CREATE TABLE `sp_menu` (
  `m_id` int(11) NOT NULL,
  `m_icon` varchar(50) DEFAULT NULL,
  `m_name` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sp_menu`
--

INSERT INTO `sp_menu` (`m_id`, `m_icon`, `m_name`) VALUES
(1000, '<i class=\"fa fa-home\"></i>', 'ໜ້າຫຼັກ'),
(1001, '<i class=\"fa fa-cogs\"></i>', 'ການຕັ້ງຄ່າ'),
(1002, '<i class=\"fa fa-gift\"></i>', 'ຜະລິດຕະພັນ');

-- --------------------------------------------------------

--
-- Table structure for table `sp_subMenu`
--

CREATE TABLE `sp_subMenu` (
  `sub_id` int(11) NOT NULL,
  `m_id` int(11) DEFAULT NULL,
  `sub_name` varchar(50) DEFAULT NULL,
  `sub_icon` varchar(50) DEFAULT NULL,
  `sub_link` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sp_menu`
--
ALTER TABLE `sp_menu`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `sp_subMenu`
--
ALTER TABLE `sp_subMenu`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `m_id` (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sp_menu`
--
ALTER TABLE `sp_menu`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11114;

--
-- AUTO_INCREMENT for table `sp_subMenu`
--
ALTER TABLE `sp_subMenu`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sp_subMenu`
--
ALTER TABLE `sp_subMenu`
  ADD CONSTRAINT `sp_submenu_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `sp_menu` (`m_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
