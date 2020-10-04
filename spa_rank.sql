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

 Date: 28/09/2020 03:20:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for spa_rank
-- ----------------------------
DROP TABLE IF EXISTS `spa_rank`;
CREATE TABLE `spa_rank`  (
  `rank_id` int(10) NOT NULL AUTO_INCREMENT,
  `rank_code` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `rank_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`rank_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of spa_rank
-- ----------------------------
INSERT INTO `spa_rank` VALUES (1, '01', 'ພະນັກງານທຳຄວາມສະອາດ');
INSERT INTO `spa_rank` VALUES (2, '02', 'ພະນັກງານຕອນຮັບ');
INSERT INTO `spa_rank` VALUES (3, '03', 'ພະນັກງານບັນຊີ');

SET FOREIGN_KEY_CHECKS = 1;
