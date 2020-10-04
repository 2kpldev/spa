-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2020 at 03:02 PM
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
-- Table structure for table `spa_appointment`
--

CREATE TABLE `spa_appointment` (
  `appointment_id` int(10) NOT NULL,
  `appointment_code` varchar(20) NOT NULL,
  `customercode` varchar(20) NOT NULL,
  `appointment_date` date NOT NULL,
  `appoinment_time` varchar(20) NOT NULL,
  `appointment_course_still` int(10) NOT NULL,
  `appointment_date_insert` date NOT NULL,
  `appointment_staff` varchar(255) NOT NULL,
  `appointment_remark` text NOT NULL,
  `appointment_insert` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `spa_bill`
--

CREATE TABLE `spa_bill` (
  `bill_id` int(10) NOT NULL,
  `bill_code` varchar(20) NOT NULL,
  `customercode` varchar(20) NOT NULL,
  `listcode` varchar(20) NOT NULL,
  `bill_price` decimal(10,2) NOT NULL,
  `bill_discount` decimal(10,2) NOT NULL,
  `bill_status` varchar(100) NOT NULL,
  `bill_date` date NOT NULL,
  `bill_insert` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `spa_control`
--

CREATE TABLE `spa_control` (
  `control_id` int(5) NOT NULL,
  `control_code` varchar(20) NOT NULL,
  `control_fullname` varchar(255) NOT NULL,
  `control_username` varchar(100) NOT NULL,
  `control_password` varchar(255) NOT NULL,
  `control_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `spa_customer`
--

CREATE TABLE `spa_customer` (
  `customer_id` int(10) NOT NULL,
  `customer_code` varchar(20) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_lname` varchar(100) NOT NULL,
  `customer_gender` varchar(20) NOT NULL,
  `customer_tel1` varchar(20) NOT NULL,
  `customer_tel2` varchar(20) NOT NULL,
  `customer_date` date NOT NULL,
  `customer_insert` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `spa_group_course`
--

CREATE TABLE `spa_group_course` (
  `group_id` int(10) NOT NULL,
  `group_code` varchar(20) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `group_remark` varchar(255) NOT NULL,
  `group_insert` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `spa_list_course`
--

CREATE TABLE `spa_list_course` (
  `list_id` int(10) NOT NULL,
  `list_code` varchar(20) NOT NULL,
  `groupcode` varchar(20) NOT NULL,
  `list_name` varchar(255) NOT NULL,
  `list_price_once` decimal(10,2) NOT NULL,
  `list_price_course` decimal(10,2) NOT NULL,
  `list_qty_course` int(5) NOT NULL,
  `list_discount` decimal(10,2) NOT NULL,
  `list_status` varchar(255) NOT NULL,
  `list_remark` varchar(255) NOT NULL,
  `list_insert` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `spa_order_product`
--

CREATE TABLE `spa_order_product` (
  `order_id` int(10) NOT NULL,
  `productcode` varchar(20) NOT NULL,
  `order_qty` int(5) NOT NULL,
  `order_date` date NOT NULL,
  `staffcode` varchar(20) NOT NULL,
  `order_insert` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `spa_product`
--

CREATE TABLE `spa_product` (
  `product_id` int(5) NOT NULL,
  `product_code` varchar(20) NOT NULL,
  `typecode` varchar(20) NOT NULL,
  `storecode` varchar(20) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_detail` text NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_qty` int(5) NOT NULL,
  `product_unit` varchar(100) NOT NULL,
  `product_insert` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `spa_receive_product`
--

CREATE TABLE `spa_receive_product` (
  `receive_id` int(10) NOT NULL,
  `productcode` varchar(20) NOT NULL,
  `receive_qty` int(5) NOT NULL,
  `receive_price` decimal(10,2) NOT NULL,
  `receive_total` decimal(10,2) NOT NULL,
  `receive_date` date NOT NULL,
  `receive_insert` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `spa_salary`
--

CREATE TABLE `spa_salary` (
  `salary_id` int(10) NOT NULL,
  `staffcode` varchar(20) NOT NULL,
  `salary_ot` decimal(10,2) NOT NULL,
  `salary_time_ot` int(10) NOT NULL,
  `salary_qty_lack` int(10) NOT NULL,
  `salary__hour_lack` int(10) NOT NULL,
  `salary_qty` decimal(10,2) NOT NULL,
  `salary_total` decimal(10,2) NOT NULL,
  `salary_month` varchar(2) NOT NULL,
  `salary_year` year(4) NOT NULL,
  `salary_date` date NOT NULL,
  `salary_insert` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `spa_staff`
--

CREATE TABLE `spa_staff` (
  `staff_id` int(5) NOT NULL,
  `staff_code` varchar(20) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `staff_lname` varchar(100) NOT NULL,
  `staff_gender` varchar(20) NOT NULL,
  `staff_dob` date NOT NULL,
  `staff_tel` varchar(20) NOT NULL,
  `staff_email` varchar(100) NOT NULL,
  `staff_username` varchar(100) NOT NULL,
  `staff_password` varchar(255) NOT NULL,
  `staff_role` varchar(100) NOT NULL,
  `staff_salary` decimal(10,2) NOT NULL,
  `staff_date_in` date NOT NULL,
  `staff_date_out` datetime NOT NULL,
  `staff_rank` varchar(255) NOT NULL,
  `staff_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `spa_store_floor`
--

CREATE TABLE `spa_store_floor` (
  `store_id` int(5) NOT NULL,
  `store_code` varchar(20) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `store_remark` varchar(255) NOT NULL,
  `store_insert` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `spa_type_product`
--

CREATE TABLE `spa_type_product` (
  `type_id` int(5) NOT NULL,
  `type_code` varchar(20) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `type_remark` varchar(255) NOT NULL,
  `type_insert` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `sp_menu`
--

CREATE TABLE `sp_menu` (
  `m_id` int(11) NOT NULL,
  `m_icon` varchar(50) DEFAULT NULL,
  `m_name` varchar(55) DEFAULT NULL,
  `tab_id` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sp_menu`
--

INSERT INTO `sp_menu` (`m_id`, `m_icon`, `m_name`, `tab_id`) VALUES
(1002, '<i class=\"fa fa-gift\"></i>', 'ຜະລິດຕະພັນ', 'products'),
(1003, '<i class=\"fa fa-heart fs-16\"></i>', 'ການບໍລິການ', 'service'),
(1004, '<i class=\"fa fa-users fs-16\"></i>', 'ຈັດການລູກຄ້າ', 'customers'),
(1005, '<i class=\"fa fa-user fs-16\"></i>', 'ຈັດການພະນັກງານ', 'staffs');

-- --------------------------------------------------------

--
-- Table structure for table `sp_submenu`
--

CREATE TABLE `sp_submenu` (
  `sub_id` int(11) NOT NULL,
  `m_id` int(11) DEFAULT NULL,
  `sub_name` varchar(50) DEFAULT NULL,
  `sub_icon` varchar(50) DEFAULT NULL,
  `sub_link` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spa_appointment`
--
ALTER TABLE `spa_appointment`
  ADD PRIMARY KEY (`appointment_id`) USING BTREE;

--
-- Indexes for table `spa_bill`
--
ALTER TABLE `spa_bill`
  ADD PRIMARY KEY (`bill_id`) USING BTREE;

--
-- Indexes for table `spa_control`
--
ALTER TABLE `spa_control`
  ADD PRIMARY KEY (`control_id`) USING BTREE;

--
-- Indexes for table `spa_customer`
--
ALTER TABLE `spa_customer`
  ADD PRIMARY KEY (`customer_id`) USING BTREE;

--
-- Indexes for table `spa_group_course`
--
ALTER TABLE `spa_group_course`
  ADD PRIMARY KEY (`group_id`) USING BTREE;

--
-- Indexes for table `spa_list_course`
--
ALTER TABLE `spa_list_course`
  ADD PRIMARY KEY (`list_id`) USING BTREE;

--
-- Indexes for table `spa_order_product`
--
ALTER TABLE `spa_order_product`
  ADD PRIMARY KEY (`order_id`) USING BTREE;

--
-- Indexes for table `spa_product`
--
ALTER TABLE `spa_product`
  ADD PRIMARY KEY (`product_id`) USING BTREE;

--
-- Indexes for table `spa_receive_product`
--
ALTER TABLE `spa_receive_product`
  ADD PRIMARY KEY (`receive_id`) USING BTREE;

--
-- Indexes for table `spa_salary`
--
ALTER TABLE `spa_salary`
  ADD PRIMARY KEY (`salary_id`) USING BTREE;

--
-- Indexes for table `spa_staff`
--
ALTER TABLE `spa_staff`
  ADD PRIMARY KEY (`staff_id`) USING BTREE;

--
-- Indexes for table `spa_store_floor`
--
ALTER TABLE `spa_store_floor`
  ADD PRIMARY KEY (`store_id`) USING BTREE;

--
-- Indexes for table `spa_type_product`
--
ALTER TABLE `spa_type_product`
  ADD PRIMARY KEY (`type_id`) USING BTREE;

--
-- Indexes for table `sp_menu`
--
ALTER TABLE `sp_menu`
  ADD PRIMARY KEY (`m_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spa_appointment`
--
ALTER TABLE `spa_appointment`
  MODIFY `appointment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spa_bill`
--
ALTER TABLE `spa_bill`
  MODIFY `bill_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spa_control`
--
ALTER TABLE `spa_control`
  MODIFY `control_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spa_group_course`
--
ALTER TABLE `spa_group_course`
  MODIFY `group_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spa_list_course`
--
ALTER TABLE `spa_list_course`
  MODIFY `list_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spa_order_product`
--
ALTER TABLE `spa_order_product`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spa_product`
--
ALTER TABLE `spa_product`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spa_receive_product`
--
ALTER TABLE `spa_receive_product`
  MODIFY `receive_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spa_salary`
--
ALTER TABLE `spa_salary`
  MODIFY `salary_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spa_staff`
--
ALTER TABLE `spa_staff`
  MODIFY `staff_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spa_store_floor`
--
ALTER TABLE `spa_store_floor`
  MODIFY `store_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spa_type_product`
--
ALTER TABLE `spa_type_product`
  MODIFY `type_id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
