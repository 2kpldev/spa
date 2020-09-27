/*
 Navicat Premium Data Transfer

 Source Server         : Mysql
 Source Server Type    : MySQL
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : spadb

 Target Server Type    : MySQL
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 27/09/2020 18:08:10
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for spa_appointment
-- ----------------------------
DROP TABLE IF EXISTS `spa_appointment`;
CREATE TABLE `spa_appointment`  (
  `appointment_id` int(10) NOT NULL AUTO_INCREMENT,
  `appointment_code` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `customercode` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `appointment_date` date NOT NULL,
  `appoinment_time` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `appointment_course_still` int(10) NOT NULL,
  `appointment_date_insert` date NOT NULL,
  `appointment_staff` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `appointment_remark` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `appointment_insert` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`appointment_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for spa_bill
-- ----------------------------
DROP TABLE IF EXISTS `spa_bill`;
CREATE TABLE `spa_bill`  (
  `bill_id` int(10) NOT NULL AUTO_INCREMENT,
  `bill_code` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `customercode` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `listcode` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `bill_price` decimal(10, 2) NOT NULL,
  `bill_discount` decimal(10, 2) NOT NULL,
  `bill_status` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `bill_date` date NOT NULL,
  `bill_insert` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`bill_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for spa_control
-- ----------------------------
DROP TABLE IF EXISTS `spa_control`;
CREATE TABLE `spa_control`  (
  `control_id` int(5) NOT NULL AUTO_INCREMENT,
  `control_code` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `control_fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `control_username` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `control_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `control_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`control_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for spa_customer
-- ----------------------------
DROP TABLE IF EXISTS `spa_customer`;
CREATE TABLE `spa_customer`  (
  `customer_id` int(10) NOT NULL,
  `customer_code` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `customer_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `customer_lname` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `customer_gender` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `customer_tel1` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `customer_tel2` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `customer_date` date NOT NULL,
  `customer_insert` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`customer_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for spa_group_course
-- ----------------------------
DROP TABLE IF EXISTS `spa_group_course`;
CREATE TABLE `spa_group_course`  (
  `group_id` int(10) NOT NULL AUTO_INCREMENT,
  `group_code` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `group_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `group_remark` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `group_insert` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`group_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for spa_list_course
-- ----------------------------
DROP TABLE IF EXISTS `spa_list_course`;
CREATE TABLE `spa_list_course`  (
  `list_id` int(10) NOT NULL AUTO_INCREMENT,
  `list_code` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `groupcode` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `list_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `list_price_once` decimal(10, 2) NOT NULL,
  `list_price_course` decimal(10, 2) NOT NULL,
  `list_qty_course` int(5) NOT NULL,
  `list_discount` decimal(10, 2) NOT NULL,
  `list_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `list_remark` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `list_insert` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`list_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for spa_order_product
-- ----------------------------
DROP TABLE IF EXISTS `spa_order_product`;
CREATE TABLE `spa_order_product`  (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `productcode` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `order_qty` int(5) NOT NULL,
  `order_date` date NOT NULL,
  `staffcode` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `order_insert` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`order_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for spa_product
-- ----------------------------
DROP TABLE IF EXISTS `spa_product`;
CREATE TABLE `spa_product`  (
  `product_id` int(5) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `typecode` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `storecode` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_detail` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` decimal(10, 2) NOT NULL,
  `product_qty` int(5) NOT NULL,
  `product_unit` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_insert` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`product_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for spa_receive_product
-- ----------------------------
DROP TABLE IF EXISTS `spa_receive_product`;
CREATE TABLE `spa_receive_product`  (
  `receive_id` int(10) NOT NULL AUTO_INCREMENT,
  `productcode` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `receive_qty` int(5) NOT NULL,
  `receive_price` decimal(10, 2) NOT NULL,
  `receive_total` decimal(10, 2) NOT NULL,
  `receive_date` date NOT NULL,
  `receive_insert` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`receive_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for spa_salary
-- ----------------------------
DROP TABLE IF EXISTS `spa_salary`;
CREATE TABLE `spa_salary`  (
  `salary_id` int(10) NOT NULL AUTO_INCREMENT,
  `staffcode` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `salary_ot` decimal(10, 2) NOT NULL,
  `salary_time_ot` int(10) NOT NULL,
  `salary_qty_lack` int(10) NOT NULL,
  `salary__hour_lack` int(10) NOT NULL,
  `salary_qty` decimal(10, 2) NOT NULL,
  `salary_total` decimal(10, 2) NOT NULL,
  `salary_month` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `salary_year` year NOT NULL,
  `salary_date` date NOT NULL,
  `salary_insert` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`salary_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for spa_staff
-- ----------------------------
DROP TABLE IF EXISTS `spa_staff`;
CREATE TABLE `spa_staff`  (
  `staff_id` int(5) NOT NULL AUTO_INCREMENT,
  `staff_code` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `staff_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `staff_lname` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `staff_gender` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `staff_dob` date NOT NULL,
  `staff_tel` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `staff_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `staff_username` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `staff_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `staff_role` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `staff_salary` decimal(10, 2) NOT NULL,
  `staff_date_in` date NOT NULL,
  `staff_date_out` datetime(0) NOT NULL,
  `staff_rank` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `staff_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`staff_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for spa_store_floor
-- ----------------------------
DROP TABLE IF EXISTS `spa_store_floor`;
CREATE TABLE `spa_store_floor`  (
  `store_id` int(5) NOT NULL AUTO_INCREMENT,
  `store_code` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `store_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `store_remark` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `store_insert` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`store_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for spa_type_product
-- ----------------------------
DROP TABLE IF EXISTS `spa_type_product`;
CREATE TABLE `spa_type_product`  (
  `type_id` int(5) NOT NULL AUTO_INCREMENT,
  `type_code` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `type_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `type_remark` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `type_insert` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`type_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
