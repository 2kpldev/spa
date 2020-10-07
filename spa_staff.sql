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

 Date: 29/09/2020 07:05:19
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
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of spa_staff
-- ----------------------------
INSERT INTO `spa_staff` VALUES (1, '0001', 'ກວາງ', 'ວັນນະວົງ', 'ຊາຍ', '2020-09-28', '020 56891992', 'ກວາງ', '202cb962ac59075b964b07152d234b70', 'on', 1200000.00, '2020-09-28', '0000-00-00', '02', 'pic-1-17_1601233912.png');
INSERT INTO `spa_staff` VALUES (2, '0002', 'ແພງ', 'ຢວນສຸດາ', 'ຊາຍ', '2020-09-28', '020 56676624', 'ແພງ', '202cb962ac59075b964b07152d234b70', 'on', 2000000.00, '2020-09-28', '0000-00-00', '02', 'pic-1-04_1601234063.png');
INSERT INTO `spa_staff` VALUES (3, '0003', 'ໄຊວິລິຍະtest', 'ວັນນະວົງ', 'ຍິງ', '2020-09-30', '020 56891992test', 'xaitest', '54a2ec5f4421fa24bfa9bf6461e649a2', 'off', 2000000.00, '2020-09-30', '0000-00-00', '02', 'pic-1-28_1601247249.png');
INSERT INTO `spa_staff` VALUES (4, '0004', 'ໄຊວິລິຍະ', 'ວັນນະວົງ', 'ຊາຍ', '2020-09-28', '020 56891992', 'xai', '202cb962ac59075b964b07152d234b70', 'on', 2000000.00, '2020-09-28', '0000-00-00', '02', 'pic-1-11_1601240295.png');
INSERT INTO `spa_staff` VALUES (6, '0006', 'ລັງ', 'dsf', 'ຊາຍ', '2020-09-28', '020 56891992', 'xai', '202cb962ac59075b964b07152d234b70', 'on', 100000.00, '2020-09-28', '0000-00-00', '02', 'pic-1-13_1601240767.png');
INSERT INTO `spa_staff` VALUES (7, '0007', 'ໄຊວິລິຍະ', 'ວັນນະວົງ', 'ຊາຍ', '2020-09-28', '020 56891992', 'kuang', 'e034fb6b66aacc1d48f445ddfb08da98', 'off', 200000.00, '2020-09-28', '0000-00-00', '02', 'pic-1-12_1601241000.png');

SET FOREIGN_KEY_CHECKS = 1;
