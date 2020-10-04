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

 Date: 28/09/2020 01:20:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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
  `staff_username` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `staff_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `staff_role` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `staff_salary` decimal(10, 2) NOT NULL,
  `staff_date_in` date NOT NULL,
  `staff_date_out` date NOT NULL,
  `rankcode` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `staff_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`staff_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
