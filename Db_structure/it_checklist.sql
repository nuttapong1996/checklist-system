/*
 Navicat Premium Data Transfer

 Source Server         : Dev-Site
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : it_checklist

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 08/06/2022 16:53:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_auto_number
-- ----------------------------
DROP TABLE IF EXISTS `tbl_auto_number`;
CREATE TABLE `tbl_auto_number`  (
  `no_id` int NOT NULL AUTO_INCREMENT,
  `equipment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `year` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `number` int NULL DEFAULT NULL,
  PRIMARY KEY (`no_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_auto_number
-- ----------------------------
INSERT INTO `tbl_auto_number` VALUES (1, 'wifi', '2022', 1);

-- ----------------------------
-- Table structure for tbl_checklist_wifi
-- ----------------------------
DROP TABLE IF EXISTS `tbl_checklist_wifi`;
CREATE TABLE `tbl_checklist_wifi`  (
  `chk_id` int NOT NULL AUTO_INCREMENT,
  `chk_code` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `wifi_id` int NULL DEFAULT NULL,
  `check_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `check_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `re_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `up_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `check_ping` int NULL DEFAULT NULL,
  `led_lan` int NULL DEFAULT NULL,
  `led_24g` int NULL DEFAULT NULL,
  `led_5g` int NULL DEFAULT NULL,
  `led_power` int NULL DEFAULT NULL,
  `lan_wire` int NULL DEFAULT NULL,
  `wifi_dust` int NULL DEFAULT NULL,
  `mc_status` int NULL DEFAULT NULL,
  `rp_status` int NULL DEFAULT NULL,
  `rp_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `user_id` int NULL DEFAULT NULL,
  `approve_status` int NULL DEFAULT 0,
  `approver_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`chk_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_checklist_wifi
-- ----------------------------
INSERT INTO `tbl_checklist_wifi` VALUES (3, 'WIF-2206-0001', 1, '08-06-2022', '08:16:00', '06:00:00', '02 ????????????????????? : 16 ????????????', 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '??????????????????????????????', 2, 0, NULL);

-- ----------------------------
-- Table structure for tbl_equipment_status
-- ----------------------------
DROP TABLE IF EXISTS `tbl_equipment_status`;
CREATE TABLE `tbl_equipment_status`  (
  `eqs_id` int NOT NULL AUTO_INCREMENT,
  `eqs_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`eqs_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_equipment_status
-- ----------------------------
INSERT INTO `tbl_equipment_status` VALUES (1, '????????????');
INSERT INTO `tbl_equipment_status` VALUES (2, '????????????????????????');
INSERT INTO `tbl_equipment_status` VALUES (3, '?????????????????????????????????');
INSERT INTO `tbl_equipment_status` VALUES (4, '???????????????????????????');

-- ----------------------------
-- Table structure for tbl_list_wifi
-- ----------------------------
DROP TABLE IF EXISTS `tbl_list_wifi`;
CREATE TABLE `tbl_list_wifi`  (
  `wifi_id` int NOT NULL AUTO_INCREMENT,
  `wifi_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`wifi_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_list_wifi
-- ----------------------------
INSERT INTO `tbl_list_wifi` VALUES (1, 'WIFI 1');
INSERT INTO `tbl_list_wifi` VALUES (2, 'WIFI 2');
INSERT INTO `tbl_list_wifi` VALUES (3, 'WIFI 3');
INSERT INTO `tbl_list_wifi` VALUES (4, 'WIFI 4');

-- ----------------------------
-- Table structure for tbl_repair_wifi
-- ----------------------------
DROP TABLE IF EXISTS `tbl_repair_wifi`;
CREATE TABLE `tbl_repair_wifi`  (
  `rp_id` int NOT NULL AUTO_INCREMENT,
  `chk_code` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `rp_status` int NULL DEFAULT NULL,
  `rp_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `rp_remark` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  PRIMARY KEY (`rp_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_repair_wifi
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `user_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `dept_id` int NULL DEFAULT NULL,
  `position_id` int NULL DEFAULT NULL,
  `user_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (1, 'singha', 'singha01', '2530151', '???????????????', '????????????????????????', 0, 0, 'chk');
INSERT INTO `tbl_user` VALUES (2, 'nuttapong.th', 'nomad12', '2630065', '?????????????????????', '?????????????????????', 0, 0, 'chk');
INSERT INTO `tbl_user` VALUES (3, 'poramate', 'sonic310', '2520137', '?????????????????????', '????????????????????????', 0, 0, 'ap');

SET FOREIGN_KEY_CHECKS = 1;
