/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 100421
Source Host           : localhost:3306
Source Database       : it_checklist

Target Server Type    : MYSQL
Target Server Version : 100421
File Encoding         : 65001

Date: 2022-04-23 16:55:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_code` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `user_status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('0', 'nuttapong.th', 'nomad12', '2630065', 'ณัฐพงษ์', 'ธิเชื้อ', '0', '0', 'admin');
SET FOREIGN_KEY_CHECKS=1;
