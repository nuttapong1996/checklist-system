/*
Navicat MySQL Data Transfer

Source Server         : Dev-Site
Source Server Version : 100421
Source Host           : localhost:3306
Source Database       : it_checklist

Target Server Type    : MYSQL
Target Server Version : 100421
File Encoding         : 65001

Date: 2022-05-27 16:46:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_auto_number
-- ----------------------------
DROP TABLE IF EXISTS `tbl_auto_number`;
CREATE TABLE `tbl_auto_number` (
  `no_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment` varchar(255) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `number` int(4) DEFAULT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_auto_number
-- ----------------------------
INSERT INTO `tbl_auto_number` VALUES ('1', 'wifi', '2022', '2');

-- ----------------------------
-- Table structure for tbl_checklist_wifi
-- ----------------------------
DROP TABLE IF EXISTS `tbl_checklist_wifi`;
CREATE TABLE `tbl_checklist_wifi` (
  `chk_id` int(11) NOT NULL,
  `chk_code` varchar(16) DEFAULT '',
  `wifi_id` int(11) DEFAULT NULL,
  `check_date` varchar(255) DEFAULT '',
  `check_time` varchar(255) DEFAULT '',
  `re_time` varchar(255) DEFAULT '',
  `up_time` varchar(255) DEFAULT '',
  `check_ping` int(11) DEFAULT NULL,
  `led_lan` int(11) DEFAULT NULL,
  `led_24g` int(11) DEFAULT NULL,
  `led_5g` int(11) DEFAULT NULL,
  `led_power` int(11) DEFAULT NULL,
  `lan_wire` int(11) DEFAULT NULL,
  `wifi_dust` int(11) DEFAULT NULL,
  `mc_status` int(11) DEFAULT NULL,
  `rp_status` int(11) DEFAULT NULL,
  `remark` varchar(255) DEFAULT '',
  `user_id` int(11) DEFAULT NULL,
  `approve_status` int(11) DEFAULT 0,
  `approver_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`chk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_checklist_wifi
-- ----------------------------
INSERT INTO `tbl_checklist_wifi` VALUES ('0', 'WIF-2205-0001', '2', '27-05-2022', '15:19:00', '06:00:00', '09 ชั่วโมง : 19 นาที', '0', '0', '1', '1', '1', '0', '1', '1', '2', 'สาย Lan ขาดแต่ตัวเราท์เตอร์ใช้งานได้อยู่', '2', '0', null);

-- ----------------------------
-- Table structure for tbl_equipment_status
-- ----------------------------
DROP TABLE IF EXISTS `tbl_equipment_status`;
CREATE TABLE `tbl_equipment_status` (
  `eqs_id` int(11) NOT NULL AUTO_INCREMENT,
  `eqs_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`eqs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_equipment_status
-- ----------------------------
INSERT INTO `tbl_equipment_status` VALUES ('1', 'ปกติ');
INSERT INTO `tbl_equipment_status` VALUES ('2', 'แจ้งซ่อม');
INSERT INTO `tbl_equipment_status` VALUES ('3', 'รอดำเนินการ');
INSERT INTO `tbl_equipment_status` VALUES ('4', 'เสร็จสิ้น');

-- ----------------------------
-- Table structure for tbl_list_wifi
-- ----------------------------
DROP TABLE IF EXISTS `tbl_list_wifi`;
CREATE TABLE `tbl_list_wifi` (
  `wifi_id` int(11) NOT NULL AUTO_INCREMENT,
  `wifi_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`wifi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_list_wifi
-- ----------------------------
INSERT INTO `tbl_list_wifi` VALUES ('1', 'WIFI 1');
INSERT INTO `tbl_list_wifi` VALUES ('2', 'WIFI 2');
INSERT INTO `tbl_list_wifi` VALUES ('3', 'WIFI 3');
INSERT INTO `tbl_list_wifi` VALUES ('4', 'WIFI 4');

-- ----------------------------
-- Table structure for tbl_repair_wifi
-- ----------------------------
DROP TABLE IF EXISTS `tbl_repair_wifi`;
CREATE TABLE `tbl_repair_wifi` (
  `rp_id` int(11) NOT NULL AUTO_INCREMENT,
  `chk_code` varchar(16) DEFAULT '',
  `rp_status` int(11) DEFAULT NULL,
  `rp_date` varchar(255) DEFAULT NULL,
  `rp_remark` varchar(255) DEFAULT '',
  PRIMARY KEY (`rp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_repair_wifi
-- ----------------------------
INSERT INTO `tbl_repair_wifi` VALUES ('2', 'WIF-2205-0001', '2', '2022-05-27 15:20:26', 'สาย Lan ขาดแต่ตัวเราท์เตอร์ใช้งานได้อยู่');

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_code` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `user_status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('0', 'poramate', 'sonic310', '2520137', 'ปรเมศร์', 'วงเกี๋ยง', '0', '0', 'ap');
INSERT INTO `tbl_user` VALUES ('1', 'singha', 'singha01', '2530151', 'สิงหา', 'ทะนานนท์', '0', '0', 'chk');
INSERT INTO `tbl_user` VALUES ('2', 'nuttapong.th', 'nomad12', '2630065', 'ณัฐพงษ์', 'ธิเชื้อ', '0', '0', 'chk');
SET FOREIGN_KEY_CHECKS=1;
