/*
Navicat MySQL Data Transfer

Source Server         : LINK
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : webgl_container

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2016-12-08 16:58:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `boxinfo`
-- ----------------------------
DROP TABLE IF EXISTS `boxinfo`;
CREATE TABLE `boxinfo` (
  `BoxID` varchar(255) NOT NULL,
  `BoxLength` int(11) DEFAULT NULL,
  `BoxWidth` int(11) DEFAULT NULL,
  `BoxHeigth` int(11) DEFAULT NULL,
  PRIMARY KEY (`BoxID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of boxinfo
-- ----------------------------
INSERT INTO `boxinfo` VALUES ('', null, null, null);
INSERT INTO `boxinfo` VALUES ('0200301', '97', '81', '27');
INSERT INTO `boxinfo` VALUES ('0200302', '102', '78', '39');
INSERT INTO `boxinfo` VALUES ('0200303', '113', '46', '36');
INSERT INTO `boxinfo` VALUES ('0200304', '66', '50', '42');
INSERT INTO `boxinfo` VALUES ('0200305', '101', '30', '26');

-- ----------------------------
-- Table structure for `containerinfo`
-- ----------------------------
DROP TABLE IF EXISTS `containerinfo`;
CREATE TABLE `containerinfo` (
  `ContainerID` varchar(255) NOT NULL,
  `ContainerLength` int(11) DEFAULT NULL,
  `ContainerWidth` int(11) DEFAULT NULL,
  `ContainerHeight` int(11) DEFAULT NULL,
  PRIMARY KEY (`ContainerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of containerinfo
-- ----------------------------
INSERT INTO `containerinfo` VALUES ('01', '587', '233', '220');

-- ----------------------------
-- Table structure for `solutioninfo`
-- ----------------------------
DROP TABLE IF EXISTS `solutioninfo`;
CREATE TABLE `solutioninfo` (
  `ObjectNo` int(11) NOT NULL AUTO_INCREMENT,
  `BoxNo` varchar(255) DEFAULT NULL,
  `P_x` int(11) DEFAULT NULL,
  `P_y` int(11) DEFAULT NULL,
  `P_z` int(11) DEFAULT NULL,
  `P_length` int(11) DEFAULT NULL,
  `P_width` int(11) DEFAULT NULL,
  `P_height` int(11) DEFAULT NULL,
  PRIMARY KEY (`ObjectNo`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of solutioninfo
-- ----------------------------
INSERT INTO `solutioninfo` VALUES ('1', '0200301', '276', '0', '117', '27', '97', '81');
INSERT INTO `solutioninfo` VALUES ('2', '0200301', '306', '36', '144', '81', '97', '27');
INSERT INTO `solutioninfo` VALUES ('3', '0200301', '306', '133', '144', '81', '97', '27');
INSERT INTO `solutioninfo` VALUES ('4', '0200301', '306', '36', '171', '81', '97', '27');
INSERT INTO `solutioninfo` VALUES ('5', '0200301', '306', '133', '171', '81', '97', '27');
INSERT INTO `solutioninfo` VALUES ('6', '0200301', '419', '0', '0', '97', '27', '81');
INSERT INTO `solutioninfo` VALUES ('7', '0200301', '419', '27', '0', '97', '27', '81');
INSERT INTO `solutioninfo` VALUES ('8', '0200301', '419', '54', '0', '97', '27', '81');
INSERT INTO `solutioninfo` VALUES ('9', '0200301', '419', '81', '0', '97', '27', '81');
INSERT INTO `solutioninfo` VALUES ('10', '0200301', '419', '108', '0', '97', '27', '81');
INSERT INTO `solutioninfo` VALUES ('11', '0200301', '419', '135', '0', '97', '27', '81');
INSERT INTO `solutioninfo` VALUES ('12', '0200301', '419', '162', '0', '97', '27', '81');
INSERT INTO `solutioninfo` VALUES ('13', '0200301', '419', '189', '0', '97', '27', '81');
INSERT INTO `solutioninfo` VALUES ('14', '0200301', '419', '0', '81', '97', '27', '81');
INSERT INTO `solutioninfo` VALUES ('15', '0200301', '419', '27', '81', '97', '27', '81');
INSERT INTO `solutioninfo` VALUES ('16', '0200301', '419', '54', '81', '97', '27', '81');
INSERT INTO `solutioninfo` VALUES ('17', '0200301', '419', '81', '81', '97', '27', '81');
INSERT INTO `solutioninfo` VALUES ('18', '0200301', '419', '108', '81', '97', '27', '81');
INSERT INTO `solutioninfo` VALUES ('19', '0200301', '419', '135', '81', '97', '27', '81');
INSERT INTO `solutioninfo` VALUES ('20', '0200301', '419', '162', '81', '97', '27', '81');
INSERT INTO `solutioninfo` VALUES ('21', '0200301', '419', '189', '81', '97', '27', '81');
INSERT INTO `solutioninfo` VALUES ('22', '0200301', '419', '0', '162', '81', '97', '27');
INSERT INTO `solutioninfo` VALUES ('23', '0200301', '419', '97', '162', '81', '97', '27');
INSERT INTO `solutioninfo` VALUES ('24', '0200301', '419', '0', '189', '81', '97', '27');
INSERT INTO `solutioninfo` VALUES ('25', '0200301', '419', '97', '189', '81', '97', '27');
INSERT INTO `solutioninfo` VALUES ('26', '0200301', '516', '0', '0', '27', '81', '97');
INSERT INTO `solutioninfo` VALUES ('27', '0200301', '516', '81', '0', '27', '81', '97');
INSERT INTO `solutioninfo` VALUES ('28', '0200302', '0', '0', '0', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('29', '0200302', '0', '39', '0', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('30', '0200302', '0', '78', '0', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('31', '0200302', '0', '117', '0', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('32', '0200302', '0', '156', '0', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('33', '0200302', '0', '0', '78', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('34', '0200302', '0', '39', '78', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('35', '0200302', '0', '78', '78', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('36', '0200302', '0', '117', '78', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('37', '0200302', '0', '156', '78', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('38', '0200302', '0', '0', '156', '102', '78', '39');
INSERT INTO `solutioninfo` VALUES ('39', '0200302', '0', '78', '156', '102', '78', '39');
INSERT INTO `solutioninfo` VALUES ('40', '0200302', '102', '0', '0', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('41', '0200302', '102', '39', '0', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('42', '0200302', '102', '78', '0', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('43', '0200302', '102', '117', '0', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('44', '0200302', '102', '156', '0', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('45', '0200302', '102', '0', '78', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('46', '0200302', '102', '39', '78', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('47', '0200302', '102', '78', '78', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('48', '0200302', '102', '117', '78', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('49', '0200302', '102', '156', '78', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('50', '0200302', '102', '0', '156', '102', '78', '39');
INSERT INTO `solutioninfo` VALUES ('51', '0200302', '102', '78', '156', '102', '78', '39');
INSERT INTO `solutioninfo` VALUES ('52', '0200302', '204', '0', '0', '102', '78', '39');
INSERT INTO `solutioninfo` VALUES ('53', '0200302', '204', '78', '0', '102', '78', '39');
INSERT INTO `solutioninfo` VALUES ('54', '0200302', '204', '0', '39', '102', '78', '39');
INSERT INTO `solutioninfo` VALUES ('55', '0200302', '204', '78', '39', '102', '78', '39');
INSERT INTO `solutioninfo` VALUES ('56', '0200302', '204', '0', '78', '102', '78', '39');
INSERT INTO `solutioninfo` VALUES ('57', '0200302', '204', '78', '78', '102', '78', '39');
INSERT INTO `solutioninfo` VALUES ('58', '0200302', '204', '156', '0', '102', '39', '78');
INSERT INTO `solutioninfo` VALUES ('59', '0200303', '0', '195', '0', '46', '36', '113');
INSERT INTO `solutioninfo` VALUES ('60', '0200303', '46', '195', '0', '46', '36', '113');
INSERT INTO `solutioninfo` VALUES ('61', '0200303', '92', '195', '0', '46', '36', '113');
INSERT INTO `solutioninfo` VALUES ('62', '0200303', '138', '195', '0', '46', '36', '113');
INSERT INTO `solutioninfo` VALUES ('63', '0200303', '184', '195', '0', '113', '36', '46');
INSERT INTO `solutioninfo` VALUES ('64', '0200303', '184', '195', '46', '113', '36', '46');
INSERT INTO `solutioninfo` VALUES ('65', '0200303', '184', '195', '92', '113', '36', '46');
INSERT INTO `solutioninfo` VALUES ('66', '0200303', '184', '195', '138', '113', '36', '46');
INSERT INTO `solutioninfo` VALUES ('67', '0200303', '204', '156', '78', '46', '36', '113');
INSERT INTO `solutioninfo` VALUES ('68', '0200303', '250', '156', '78', '46', '36', '113');
INSERT INTO `solutioninfo` VALUES ('69', '0200303', '204', '0', '117', '36', '113', '46');
INSERT INTO `solutioninfo` VALUES ('70', '0200303', '204', '0', '163', '36', '113', '46');
INSERT INTO `solutioninfo` VALUES ('71', '0200303', '240', '0', '117', '36', '113', '46');
INSERT INTO `solutioninfo` VALUES ('72', '0200303', '240', '0', '163', '36', '113', '46');
INSERT INTO `solutioninfo` VALUES ('73', '0200303', '306', '0', '0', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('74', '0200303', '306', '46', '0', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('75', '0200303', '306', '92', '0', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('76', '0200303', '306', '139', '0', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('77', '0200303', '306', '184', '0', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('78', '0200303', '306', '0', '36', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('79', '0200303', '306', '46', '36', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('80', '0200303', '306', '92', '36', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('81', '0200303', '306', '138', '36', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('82', '0200303', '306', '184', '36', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('83', '0200303', '306', '0', '72', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('84', '0200303', '306', '46', '72', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('85', '0200303', '306', '92', '72', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('86', '0200303', '306', '138', '72', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('87', '0200303', '306', '184', '72', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('88', '0200303', '306', '0', '108', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('89', '0200303', '306', '46', '108', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('90', '0200303', '306', '92', '108', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('91', '0200303', '306', '138', '108', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('92', '0200303', '306', '184', '108', '113', '46', '36');
INSERT INTO `solutioninfo` VALUES ('93', '0200303', '306', '0', '144', '113', '36', '46');
INSERT INTO `solutioninfo` VALUES ('94', '0200304', '543', '0', '0', '42', '66', '50');
INSERT INTO `solutioninfo` VALUES ('95', '0200304', '543', '66', '0', '42', '66', '50');
INSERT INTO `solutioninfo` VALUES ('96', '0200304', '543', '132', '0', '42', '66', '50');
INSERT INTO `solutioninfo` VALUES ('97', '0200304', '543', '0', '50', '42', '66', '50');
INSERT INTO `solutioninfo` VALUES ('98', '0200304', '543', '66', '50', '42', '66', '50');
INSERT INTO `solutioninfo` VALUES ('99', '0200304', '543', '132', '50', '42', '66', '50');
INSERT INTO `solutioninfo` VALUES ('100', '0200304', '543', '0', '100', '42', '66', '50');
INSERT INTO `solutioninfo` VALUES ('101', '0200304', '543', '66', '100', '42', '66', '50');
INSERT INTO `solutioninfo` VALUES ('102', '0200304', '543', '132', '100', '42', '66', '50');
INSERT INTO `solutioninfo` VALUES ('103', '0200304', '543', '0', '150', '42', '66', '50');
INSERT INTO `solutioninfo` VALUES ('104', '0200304', '543', '66', '150', '42', '66', '50');
INSERT INTO `solutioninfo` VALUES ('105', '0200304', '543', '132', '150', '42', '66', '50');
INSERT INTO `solutioninfo` VALUES ('106', '0200305', '0', '195', '113', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('107', '0200305', '26', '195', '113', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('108', '0200305', '52', '195', '113', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('109', '0200305', '0', '156', '156', '101', '26', '30');
INSERT INTO `solutioninfo` VALUES ('110', '0200305', '0', '156', '186', '101', '26', '30');
INSERT INTO `solutioninfo` VALUES ('111', '0200305', '78', '195', '113', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('112', '0200305', '104', '195', '113', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('113', '0200305', '130', '195', '113', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('114', '0200305', '156', '195', '113', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('115', '0200305', '101', '156', '156', '101', '26', '30');
INSERT INTO `solutioninfo` VALUES ('116', '0200305', '101', '156', '186', '101', '26', '30');
INSERT INTO `solutioninfo` VALUES ('117', '0200305', '184', '195', '184', '101', '26', '30');
INSERT INTO `solutioninfo` VALUES ('118', '0200305', '204', '113', '117', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('119', '0200305', '230', '113', '117', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('120', '0200305', '276', '97', '117', '30', '26', '101');
INSERT INTO `solutioninfo` VALUES ('121', '0200305', '276', '123', '117', '30', '26', '101');
INSERT INTO `solutioninfo` VALUES ('122', '0200305', '387', '36', '144', '26', '101', '30');
INSERT INTO `solutioninfo` VALUES ('123', '0200305', '387', '36', '174', '26', '101', '30');
INSERT INTO `solutioninfo` VALUES ('124', '0200305', '306', '0', '190', '101', '26', '30');
INSERT INTO `solutioninfo` VALUES ('125', '0200305', '516', '162', '0', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('126', '0200305', '516', '192', '0', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('127', '0200305', '516', '162', '101', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('128', '0200305', '516', '192', '101', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('129', '0200305', '516', '0', '97', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('130', '0200305', '516', '30', '97', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('131', '0200305', '516', '60', '97', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('132', '0200305', '516', '90', '97', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('133', '0200305', '516', '120', '97', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('134', '0200305', '542', '198', '0', '26', '30', '101');
INSERT INTO `solutioninfo` VALUES ('135', '0200305', '542', '198', '101', '26', '30', '101');
