/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100121
Source Host           : localhost:3306
Source Database       : cyclezonenew

Target Server Type    : MYSQL
Target Server Version : 100121
File Encoding         : 65001

Date: 2017-08-24 15:42:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for master_color
-- ----------------------------
DROP TABLE IF EXISTS `master_color`;
CREATE TABLE `master_color` (
  `ColorID` int(11) NOT NULL AUTO_INCREMENT,
  `ColorName` varchar(100) DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`ColorID`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_color
-- ----------------------------
INSERT INTO `master_color` VALUES ('1', 'BABIE PINK', '1');
INSERT INTO `master_color` VALUES ('2', 'BLACK', '1');
INSERT INTO `master_color` VALUES ('3', 'BLACK (M.FINISH)', '1');
INSERT INTO `master_color` VALUES ('4', 'BLACK-GREEN', '1');
INSERT INTO `master_color` VALUES ('5', 'BLUE', '1');
INSERT INTO `master_color` VALUES ('6', 'BLUE (M.FINISH)', '1');
INSERT INTO `master_color` VALUES ('7', 'BURGUNDY', '1');
INSERT INTO `master_color` VALUES ('8', 'CHAINA RED', '1');
INSERT INTO `master_color` VALUES ('9', 'COPPER', '1');
INSERT INTO `master_color` VALUES ('10', 'CREAM-BROWN', '1');
INSERT INTO `master_color` VALUES ('11', 'GREEN', '1');
INSERT INTO `master_color` VALUES ('12', 'GREEN-BLACK', '1');
INSERT INTO `master_color` VALUES ('13', 'GREEN-YELLOW', '1');
INSERT INTO `master_color` VALUES ('14', 'GREY', '1');
INSERT INTO `master_color` VALUES ('15', 'HOT RED', '1');
INSERT INTO `master_color` VALUES ('16', 'MET GREY', '1');
INSERT INTO `master_color` VALUES ('17', 'MULTI', '1');
INSERT INTO `master_color` VALUES ('18', 'ORRANGE', '1');
INSERT INTO `master_color` VALUES ('19', 'PINK', '1');
INSERT INTO `master_color` VALUES ('20', 'PINK-BLUE', '1');
INSERT INTO `master_color` VALUES ('21', 'PITCH', '1');
INSERT INTO `master_color` VALUES ('22', 'PURPLE', '1');
INSERT INTO `master_color` VALUES ('23', 'RB', '1');
INSERT INTO `master_color` VALUES ('24', 'red', '1');
INSERT INTO `master_color` VALUES ('25', 'S.BLUE', '1');
INSERT INTO `master_color` VALUES ('26', 'S.BLUE-SILVER', '1');
INSERT INTO `master_color` VALUES ('27', 'SILVER', '1');
INSERT INTO `master_color` VALUES ('28', 'SILVER-BLUE', '1');
INSERT INTO `master_color` VALUES ('29', 'SKY BLUE', '1');
INSERT INTO `master_color` VALUES ('30', 'WHITE', '1');
INSERT INTO `master_color` VALUES ('31', 'WHITE-BLUE', '1');
INSERT INTO `master_color` VALUES ('32', 'WHITE-GREEN', '1');
INSERT INTO `master_color` VALUES ('33', 'WHITE-RED', '1');
INSERT INTO `master_color` VALUES ('34', 'YELLOW', '1');
INSERT INTO `master_color` VALUES ('35', 'YELLOW-BLACK', '1');
INSERT INTO `master_color` VALUES ('36', 'YELLOW-RED', '1');
INSERT INTO `master_color` VALUES ('38', 'SILVER BLACK', '1');

-- ----------------------------
-- Table structure for master_company
-- ----------------------------
DROP TABLE IF EXISTS `master_company`;
CREATE TABLE `master_company` (
  `CompanyID` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(100) DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`CompanyID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_company
-- ----------------------------
INSERT INTO `master_company` VALUES ('8', 'SUNRAJ', '1');
INSERT INTO `master_company` VALUES ('9', 'TI', '1');
INSERT INTO `master_company` VALUES ('10', 'MONTRA', '1');
INSERT INTO `master_company` VALUES ('11', 'SUNCROSS', '1');
INSERT INTO `master_company` VALUES ('12', 'RALEIGH', '1');
INSERT INTO `master_company` VALUES ('13', 'HAIBIKE', '1');
INSERT INTO `master_company` VALUES ('14', 'MONGOOSE', '1');
INSERT INTO `master_company` VALUES ('15', 'HLX NMC COSMIC', '1');
INSERT INTO `master_company` VALUES ('16', 'BIANCHI', '1');
INSERT INTO `master_company` VALUES ('17', 'ATLAS', '1');
INSERT INTO `master_company` VALUES ('18', 'AVON', '1');
INSERT INTO `master_company` VALUES ('19', 'SACHIN', '1');
INSERT INTO `master_company` VALUES ('20', 'SHWIN', '1');
INSERT INTO `master_company` VALUES ('22', 'GHOST', '1');
INSERT INTO `master_company` VALUES ('23', 'UT', '1');
INSERT INTO `master_company` VALUES ('25', 'GT', '1');
INSERT INTO `master_company` VALUES ('26', 'STARKENN  GIANT', '1');

-- ----------------------------
-- Table structure for master_customer
-- ----------------------------
DROP TABLE IF EXISTS `master_customer`;
CREATE TABLE `master_customer` (
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(200) DEFAULT NULL,
  `MiddelName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `BirthDate` date DEFAULT NULL,
  `Comapany` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `HomeNumber` varchar(100) DEFAULT NULL,
  `OfficeNumber` varchar(100) DEFAULT NULL,
  `MobileNumber` varchar(100) DEFAULT NULL,
  `Website` varchar(100) DEFAULT NULL,
  `BillingAddress` text,
  `ShippingAddress` text,
  `BillingCity` varchar(100) DEFAULT NULL,
  `ShippingCity` varchar(100) DEFAULT NULL,
  `BillingPinCode` varchar(100) DEFAULT NULL,
  `ShippingPinCode` varchar(100) DEFAULT NULL,
  `BillingState` varchar(100) DEFAULT NULL,
  `ShippingState` varchar(100) DEFAULT NULL,
  `IDType` varchar(100) DEFAULT NULL,
  `IDNumber` varchar(100) DEFAULT NULL,
  `IDFile` varchar(100) DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`CustomerID`)
) ENGINE=InnoDB AUTO_INCREMENT=301 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_customer
-- ----------------------------
INSERT INTO `master_customer` VALUES ('1', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('4', 'SHAVYA', 'RAMESHBHAI', 'UMBARADIYA', '0000-00-00', '', '', '', '', '9824523143', '', '', '', '', '', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('5', 'PRAVINBHAI', '', 'PAMAR', '0000-00-00', '', 'info@7oceantechnologies.com', '', '', '9428692258', '', 'SARDARPARA , NAKSHTRA APT. JUNAGADH', 'SARDARPARA , NAKSHTRA APT. JUNAGADH', 'RAJKOT', 'RAJKOT', '362002', '362002', '', '', 'PANCARD', 'BFOPK7G', null, '1');
INSERT INTO `master_customer` VALUES ('6', 'UPASANA', '', 'TANK', '0000-00-00', '', '', '', '', '', '', '', 'NILKANTH 2.AMARNATH PLOT. KALAVAD ROAD. ', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('7', 'NILESHBHAI', '', 'SACHDEV', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('8', 'DIVYESHBHAI', '', 'AGHERA', '0000-00-00', '', '', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('9', 'PUNITBHAI ', '', 'KOTAK', '0000-00-00', '', '', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('10', 'PARTH', '', 'RANPARA', '0000-00-00', '', '', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('11', 'DR. KIRIT', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('12', 'HARI', 'RAMESHBHAI', 'CHUDASAMA', '0000-00-00', '', '', '', '', '', '', '', 'KAILASH PARK .STREET NO.4 UNI ROAD', 'RAJKOT', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('13', 'BRIJESHBHAI', '', 'MAHETA', '0000-00-00', '', '', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('14', 'MITESHBHAI', 'CHANDULAL', 'SOLANKI', '1980-10-07', '', '', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('15', 'HARESHBHAI', '', 'MARVIYA', '0000-00-00', '', '', '', '', '9898282891', '', '', '101.CHANDRA PARK NEAR BIG BAJAR.', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('16', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('17', 'PARTH', '', 'RANPARA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('18', 'BHAVBHUTIBHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('19', 'DHRUV', '', 'DAVE', '0000-00-00', '', '', '', '', '', '', '', '105. MAHADEV APARTMENT.KAILASH PARK STREET NO.4', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('20', 'ARVINDBHAI', '', 'RATHOD', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('21', 'DR. DHARMENDRA', '', 'HADIYAL', '0000-00-00', '', '', '', '', '', '', '', '', '', 'MORBI', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('22', 'DR. MAYUR', '', 'THADESHVAR', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('23', 'MAYUR', 'JAYANTBHAI', 'TANK', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('24', 'JULEE', '', 'UMBARADIYA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('25', 'NANDAN', 'KALRIYA', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('26', 'JVALANT', 'ANILBHAI', 'CHAYA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('27', 'AJAYBHAI', 'A', 'MOR', '0000-00-00', '', '', '', '', '', '', '', '3/4 JYOTINAGAR. SURYADEEP.BEHIND CRISTAL MOLL.', 'RAJKOT', '', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('28', 'MARSHAL ', '', 'DONGA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('29', 'HIREN', '', 'PARMAR', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('30', 'NAYANBHAI', '', 'PANDYA', '0000-00-00', '', '', '', '', '9825737557', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('31', 'NILESHBHAI', '', 'BHIMJIYANI', '0000-00-00', '', '', '', '', '9328917370', '', '', 'NEW KEDARNATH SOSAYATI.KOTHARIYA ROAD ', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('32', 'MOHNISHBHAI', '', 'JADAV', '0000-00-00', '', '', '', '', '', '', '', 'HARIDWAR PARK 2.GONDAL ROAD.', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('33', 'HARESHBHAI', '', 'LUNAGARIYA', '0000-00-00', '', '', '', '', '9879627021', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('34', 'RAVIBHAI', '', 'BADIYANI', '0000-00-00', '', '', '', '', '9426870000', '', '', '503.NEW EMMPAYIR APT,UNI ROAD ', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('35', 'MITESHBHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', 'BLOCK NO 2.RADHIKA PARK 150 FT RING ROAD', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('36', 'KIRITBHAI', '', 'KHOLIYA', '0000-00-00', '', '', '', '', '9227777201', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('37', 'KULDEEP', ' ARVINDBHAI', 'SANKHAVRA', '0000-00-00', '', '', '', '', '9824194675', '', '', 'KUVADVA ROAD. SOMNATH REAL HOME ', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('38', 'SMIT', 'JIGNESHBHAI', 'BHALODIYA', '0000-00-00', '', '', '', '', '9601616263', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('39', 'DINESH', 'RAGHAVBHAI ', 'VECRIYA', '0000-00-00', '', '', '', '', '', '', '', 'AADAMJIROAD. BAGRANG NAGAR ', '', 'JASDAN', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('40', 'HET ', 'MAHENDRABHAI', 'PACHANI', '0000-00-00', '', '', '', '', '9824285249', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('41', 'PRASHANTBHAI', '', 'KAMANI', '0000-00-00', '', '', '', '', '', '', '', '12/2   MASTAR SOSA', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('42', 'DHAVNIL ', 'SEJPAL', '', '0000-00-00', '', '', '', '', '', '', '', 'HARIHAR SOSA. KALAVAD ROAD', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('43', 'VISHAL BHAI ', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('44', 'NIKUNJ', '', 'BHATT', '0000-00-00', '', '', '', '', '9426242202', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('45', 'DR. BHAVESH', '', 'THORIYA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('46', 'ALPESHBHAI', '', 'PATEL', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('47', 'VIPULBHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('48', 'DHARMESHBHAI', '', 'KHERDIYA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('49', 'RACHITABEN', '', 'MAHETA', '0000-00-00', '', '', '', '', '', '', '', 'SHRI YOGIDARSHAN  SOSA. STREET NO. 2', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('50', 'ANKITA BEN', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('51', ' SARADBHAI', '', 'SHINGALA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('52', 'GOPAL ', 'DURLABHJIBHAI', 'SIDDHAPURA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('53', 'ASHOKBHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('54', 'ALPESH BHAI', 'J', 'PATEL', '0000-00-00', '', '', '', '', '9099088440', '', '', '501. ANURADHA APART.RAVAPAR ROAD ', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('55', 'USHABEN', '', 'RAJDEV', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('56', 'BHARAT', 'HARIBHAI', 'CHONDIGARA', '0000-00-00', '', '', '', '', '9427564685', '', '', '3/ KARAN PARK.ASTRON SOSA.', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('57', 'KARTIKBHAI', '', 'JOSHI', '0000-00-00', '', '', '', '', '', '', '', 'OM GAYATRI. MANINAGAR', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('58', 'NAIMISHBHAI', '', 'PATEL', '0000-00-00', '', '', '', '', '9898145405', '', '', '', '', 'VAVDI. RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('59', 'CHANDUBHAU ', '', 'BHUVA', '0000-00-00', '', '', '', '', '', '', '', 'VIJAY PLOT 30.', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('60', 'RAJESH', 'BHARATBHAI', 'KANSARA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('61', 'PUNITBHAI', '', 'KOTAK', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('62', 'DR. KANT ', '', 'JOGANI', '0000-00-00', '', '', '', '', '', '', '', '12/ SILVAR STONE SOSA. KASTURI BANGLO.', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('63', 'AMIBEN', '', 'NANDANI', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('64', 'ELIYAS ', '', 'JUNEJA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('65', 'DINESHBHAI', '', 'TRADA', '0000-00-00', '', '', '', '', '', '', '', 'RANPUR. JUNAGADH', '', '', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('66', 'MAHESHBHAI', '', 'MOTVANI', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('67', 'RAMESH BHAI', '', 'DARJI', '0000-00-00', '', '', '', '', '9427766585', '', '', 'JANSATTA PRESS CHOK. ', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('68', 'SMIT', 'KIRITBHAI', 'GAJERA', '0000-00-00', '', '', '', '', '', '', '', 'JALARAM TRANSPORT', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('69', 'C', 'K ', 'DHAMSANIYA', '0000-00-00', '', '', '', '', '', '', '', '36/A PANCHVATI SOSA.', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('70', 'D ', 'S ', 'PATEL', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('71', 'JAGRUTIBEN', 'MAHESHBHAI', 'VYAS', '0000-00-00', '', '', '', '', '', '', '', 'NANDINI PARK. 3 RAMESHVAR VADI ', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('72', 'KUNAL', 'LALITBHAI', 'RAIYANI', '0000-00-00', '', '', '', '', '', '', '', 'JAY SHAKTI PARK. STREET NO.1', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('73', 'HEMAL', '', 'VACHANI', '0000-00-00', '', '', '', '', '', '', '', '802/ RATRANI APARTMENT. AKSHAR MARG.', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('74', 'NILESHBHAI', '', 'CHIKANI', '0000-00-00', '', '', '', '', '', '', '', 'NAND VATIKA 101 BEHIND STARLING HOSPITAL', 'RAJKOT', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('75', 'SURESHBHAI', '', 'BALDANIYA', '0000-00-00', '', '', '', '', '', '', '', 'INDIRA CIRCLE.', 'RAJKOT', '', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('76', 'DHARMESHBHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('77', 'BHAGVAT SINH', '', 'REVAR', '0000-00-00', '', '', '', '', '', '', '', 'SHARVESHAR 3 .  KARAN PARK', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('78', 'PRATIK BHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('79', 'NILESHBHAI', '', 'SACHDEV', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('80', 'NARENDRABHAI', '', 'GONDLIYA', '0000-00-00', '', '', '', '', '', '', '', 'HOMEGARD CAMPAS COLONI. BLOCK NO B/2/7', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('81', 'NIHAL ', '', '', '0000-00-00', '', '', '', '', '', '', 'SADHU VASVANI ROAD,', 'SADHU VASVANI ROAD,', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('82', 'KEYUR BHAI', '', 'TRIVEDI', '0000-00-00', '', '', '', '', '', '', '', 'SAURASTRA KARMCHARI COLONI. STREET NO 4', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('83', 'JINESH ', '', 'MAHETA', '0000-00-00', '', '', '', '', '', '', '', 'STAVAN 8SAUSRASTRA KALA KENDRA SOSA', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('84', 'PERFECT CASTING', '', '', '0000-00-00', '', '', '', '', '', '', '', 'SAMRAT 30. GONDAL ROAD', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('85', 'RAMCHANDRA', 'KHODIDASBHAI', 'SOJITRA', '0000-00-00', '', '', '', '', '', '', '', 'KARAN PARK STREET NO. 3 ', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('86', 'MUKESHBHAI', '', 'SANGANI', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('87', 'NILESH', 'A', 'LALANI', '0000-00-00', '', '', '', '', '', '', '', '2/ SHRI COLONI.PLOT NO.9  HIMNIL', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('88', 'JAY', 'ASHOKBHAI', 'KARVATIYA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('89', 'NAYNESHBHAI', '', 'KORAT', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('90', 'SHAILESHBHAI', '', 'MANVAR', '0000-00-00', '', '', '', '', '9426216355', '', '', 'A/ 401 RANI TOWER', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('91', 'RAKESH', '', 'KESHVANI ', '0000-00-00', '', '', '', '', '', '', '', '', '', 'BHAVNAGAR', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('92', 'RISHIT ', '', 'PARIHAR', '0000-00-00', '', '', '', '', '', '', '', '97/ 579 VIJAY NAGAR NARANPURA', '', 'AMDAVAD', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('93', 'AMI BEN', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('94', 'HITESH', '', 'PARSANA', '0000-00-00', '', '', '', '', '', '', '', 'ARJUN PARK. ASTRON SOSA, AMIN MARG', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('95', 'NANDISH', 'KARIYA', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('96', 'JAY ', 'ASHOKBHAI', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('97', 'SHIVAM AUTO', '', '', '0000-00-00', '', '', '', '', '9924259453', '', '', '', '', '', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('98', 'AAYUSH ', '', 'KARIYA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('99', 'AMITBHAI', '', 'JADEJA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'JUNAGADH', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('100', 'DEVENDRA', '', 'KOLI', '0000-00-00', '', '', '', '', '', '', '', 'AASHIRVAD 2.ALKAPURI RAIYA ROAD ', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('101', 'MIHIR ', 'CHAGANBHAI', 'BHIMANI', '0000-00-00', '', '', '', '', '', '', '', 'NANDI PARK. 4 S.N.K SCHOOL ', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('102', 'YOGESH BHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'JASDAN', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('103', 'HARESH', 'GHANSHYAMBHAI', 'THORIYA', '0000-00-00', '', '', '', '', '9924350580', '', '', '', '', '', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('104', 'ADHIYARUBHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'AMRELI', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('105', 'MANTHAN ', '', 'PATEL', '0000-00-00', '', '', '', '', '', '', '', 'HARINAGAR MAIN ROAD. UNI ROAD', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('106', 'SAHAJ', 'PARESHBHAI', 'TANK', '0000-00-00', '', '', '', '', '', '', '', 'GUNDAVADI. STREET NO 12.', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('107', 'KANAK BHAI', '', 'SODHA', '0000-00-00', '', '', '', '', '', '', '', '', '', '', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('108', 'CHETANYA', '', 'MAHETA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('109', 'HIRENBHAI', '', 'GAUSWAMI', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('110', 'GAURAV ', '', 'PAL', '0000-00-00', '', '', '', '', '', '', '', '', 'RAJKOT', '', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('111', 'KULINBHAI', '', 'BHATT', '0000-00-00', '', '', '', '', '', '', '', 'AVADH RESIDENCY.30 VINAYAK VATIKA.', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('112', 'dipak bhai', '', 'kotecha', '0000-00-00', '', '', '', '', '', '', '', '302/isha avenew new collage vadi kalawad road', '', 'rajkot', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('113', 'sonal ben', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'rajkot', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('114', 'abhishekbhai ', '', 'aadesara', '0000-00-00', '', '', '', '', '', '', '', '2/ vardhaman. palace road', '', 'rajkot', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('115', 'utsav', 'kamleshbhai', 'chauhan', '0000-00-00', '', '', '', '', '', '', '', 'gandhigram', '', 'rajkot', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('116', 'tushar', '', 'sheth', '0000-00-00', '', '', '', '', '', '', '', 'jan kalyan sosa.', '', 'rajkot', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('117', 'ramesh', 'mohan bhai', 'patel', '0000-00-00', '', '', '', '', '', '', '', '3/ somnath apartment.padhmnabh tower.uni road', '', 'rajkot', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('118', 'pratikbhai', '', 'soneji', '0000-00-00', '', '', '', '', '', '', '', '', '', 'rajkot', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('119', 'samirbhai', '', 'patel', '0000-00-00', '', '', '', '', '', '', '', '12/B ANUPAMA SOSA. AMIN MARG', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('120', 'DEVENDRABHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', 'AMBIKA TOWNSHIP. JIVRAJ PARK', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('121', 'GANGADHAR IND.', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('122', 'DR. HARSHIL ', '', 'PARIKH', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('123', 'UDAY', 'HARSHADBHAI', 'DAVE', '0000-00-00', '', '', '', '', '', '', '', 'JIVRAJ PARK BLOCK NO.107 AMBIKA TOWNSHIP.', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('124', 'NAROTAMBHAI', '', 'PARSANA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('125', 'DHANJIBHAI', 'KARMANBHAI', 'AAMBALIYA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('126', 'JIGNESHBHAI', '', 'AGRAVAT', '0000-00-00', '', '', '', '', '', '', '', 'GANDHIGRAM, ', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('127', 'DR. AJAY', '', 'MAHETA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('128', 'KAVAN', 'SUNILBHAI', 'RAK', '0000-00-00', '', '', '', '', '', '', 'KRISHNAPARK.150 FT RING ROAD', '', 'RAJKOT', '', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('129', 'VASU', '', 'PATEL', '0000-00-00', '', '', '', '', '', '', 'KISMAT PLY', 'KISMAT PLY', 'RAJKOT', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('130', 'KUVRABHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('131', 'SATVIBEN', '', 'LIMBASIYA', '0000-00-00', '', '', '', '', '', '', '', 'B/401.KING HIGHTS.AMIN MARG', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('132', 'DIVYESHBHAI', '', 'PACHANI', '0000-00-00', '', '', '', '', '', '', '', 'UNI ROAD', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('133', 'ALPESHBHAI', '', 'PATEL', '0000-00-00', '', '', '', '', '', '', '', '', '', '', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('134', 'BHUMI', 'GAURANG BHAI', 'GADHIYA', '0000-00-00', '', '', '', '', '', '', '', '', 'RAJKOT', '', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('135', 'JEET', 'AMITKUMAR', 'RUPARELIYA', '0000-00-00', '', '', '', '', '9429686120', '', '', '', '', 'AMRELI', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('136', 'GOVIND BHAI', '', 'KATHIRIYA', '0000-00-00', '', '', '', '', '', '', '', 'LALBAHADUR SOSA. DHEBAR ROAD', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('137', 'HITESH BHAI', '', 'DESAI', '0000-00-00', '', '', '', '', '', '', '', 'BABRA', '', 'AMRELI', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('138', 'B', 'R', 'ENTERPRISE', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('139', 'JAGDISH BHAI ', 'S', 'ROKAD', '0000-00-00', '', '', '', '', '', '', '', 'HALENDA', '', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('140', 'ASHISH BHAI', '', '', '0000-00-00', '', '', '', '', '9429700000', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('141', 'VINOD BHAI ', 'POPAT BHAI', '', '0000-00-00', '', '', '', '', '', '', '', 'RAJLAXMI SOSA. STREET NO 3', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('142', 'CHIRAG BHAI', '', 'MAHETA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('143', 'GIRISH BHAI', '', 'RATHOD', '0000-00-00', '', '', '', '', '', '', '', 'LAXMINAGAR 1', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('144', 'J ', 'K ', 'GHODASRA', '0000-00-00', '', '', '', '', '', '', '', 'LAXMINARAYAN SOSA.TANKARA', '', 'MORBI', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('145', 'MAHESHBHAI', '', 'PARSANA', '0000-00-00', '', '', '', '', '', '', '', '3/ VALKESHVAR.HASANVADI', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('146', 'NARENDRABHAI ', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'MORBI', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('147', 'PRAKASHBHAI ', '', 'TANK', '0000-00-00', '', '', '', '', '', '', '', '8/ VALKESHVAR.GHANSHYAMBHUVAN.', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('148', 'KASHYAP', '', 'TILAVAT', '0000-00-00', '', '', '', '', '', '', '', 'ANANDNAGAR.BLOCK NO 11', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('149', 'HASNEL', '', 'AKILBHAI', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('150', 'SAHJEB', 'F ', 'LINGDIYA', '0000-00-00', '', '', '', '', '', '', '', 'SADAR BAJAR HARIHAR CHOK', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('151', 'NARENDRABHAI', '', 'SAPRIYA', '0000-00-00', '', '', '', '', '', '', '', 'HASANVADI 4', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('152', 'LALIT BHAI', '', 'KAMANI', '0000-00-00', '', '', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('153', 'NIMISH', '', 'PARSANA', '0000-00-00', '', '', '', '', '', '', '', '320/ KRISHNA CONARK. TAGORE ROAD', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('154', 'MANHAR BHAI', '', 'PATEL', '0000-00-00', '', '', '', '', '', '', '', '', '', 'DHANGDHRA', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('155', 'MEET ', '', 'DOBARIYA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('156', 'NATU BHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('157', 'ANUP BHAI', '', 'RATHOD', '0000-00-00', '', '', '', '', '', '', '', 'HASAN VADI 3', '', 'RAJKOT', null, null, null, null, '', '', null, '1');
INSERT INTO `master_customer` VALUES ('158', 'CYCLE POINT', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'IDAR', 'IDAR', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('159', 'SHAKTI CYCLE AGENCY', '', '', '0000-00-00', '', '', '', '', '9426819920', '', 'SADHU VASVANI ROAD, OPP. OSCAR TOWER', 'SADHU VASVANI ROAD, OPP. OSCAR TOWER', 'RAJKOT', 'RAJKOT', '360002', '360002', 'GUJRAT', 'GUJRAT', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('160', 'RAJUBHAI', 'CHANDUBHAI', 'PATEL', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('161', 'JATIN  BHAI', '', '', '0000-00-00', '', '', '', '', '9909930616', '', '', '', 'MORBI', 'MORBI', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('162', 'DHAVALBHAI', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('163', 'RAJUBHAI KOTHARI', '', '', '0000-00-00', '', '', '', '', '', '', '16/ VANIYAVADI NILRAJ', '16/ VANIYAVADI NILRAJ', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('164', 'BHIMABHAI RABARI', '', '', '0000-00-00', '', '', '', '', '8238643026', '', 'BALKRISHNA SOSA . STREET NO 17', 'BALKRISHNA SOSA . STREET NO 17', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('165', 'KARISHMA CYCLE ', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'VISAVADAR', 'VISAVADAR', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('166', 'SANDEEPBHAI YADAV', '', '', '0000-00-00', '', '', '', '', '9825497505', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('167', 'MANISH BHAI GAJJAR', '', '', '0000-00-00', '', '', '', '', '', '', 'ANUPAMA SOSA /  PANCHVATI MAIN ROAD', 'ANUPAMA SOSA /  PANCHVATI MAIN ROAD', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('168', 'JAYSUKHBHAI RAJKOTIYA', '', '', '0000-00-00', '', '', '', '', '9825218727', '', 'RUDRAPRAYAG 404 SATYA SAI ROAD', 'RUDRAPRAYAG 404 SATYA SAI ROAD', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('169', 'BHAVINBHAI DADHANIYA', '', '', '0000-00-00', '', '', '', '', '', '', 'B/ 302 SATYA SAI ROAD', 'B/ 302 SATYA SAI ROAD', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('170', 'KACHADIYA LAKSH ', 'DIPAKBHAI', '', '0000-00-00', '', '', '', '', '9979878461', '', ' NEW POPAIYAVADI STREET NO 4 /    NEAR SAGAR HOLL ', ' NEW POPAIYAVADI STREET NO 4 /    NEAR SAGAR HOLL ', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('171', 'SURESHBHAI ', 'SANGANI', '', '0000-00-00', '', '', '', '', '9898015619', '', 'NIVEDITANAGAR 150 ft RING ROAD', 'NIVEDITANAGAR 150 ft RING ROAD', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('172', 'VIJAYBHAI', '', 'TERAIYA', '0000-00-00', '', '', '', '', '', '', 'ORBIT TOWER ROYAL PARK STREET NO 4 ', 'ORBIT TOWER ROYAL PARK STREET NO 4 ', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('173', 'RISHIKESHBHAI DHINGANI', '', '', '0000-00-00', '', '', '', '', '9427255542', '', '52/53 AMRUT PARK', '52/53 AMRUT PARK', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('174', 'DR. SANJAY MAHETA', '', '', '0000-00-00', '', '', '', '', '9724112526', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('175', 'DINNESHBHAI R AMBASANA', '', '', '0000-00-00', '', '', '', '', '9879566067', '', 'SHRIKUNJ 3 RAMESHVAR NAGAR PIPALIYA HOLL ', 'SHRIKUNJ 3 RAMESHVAR NAGAR PIPALIYA HOLL ', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('176', 'JAYDEEPSINH JADEJA ', '', '', '0000-00-00', '', '', '', '', '9924943899', '', 'UNI ROAD', 'UNI ROAD', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('177', 'GAUTAMBHAI CHANGELA', '', '', '0000-00-00', '', '', '', '', '9427277949', '', '302/ SHAKTINAGAR KALAWAD ROAD', '302/ SHAKTINAGAR KALAWAD ROAD', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('178', 'ASHOKBHAI L KATHIRIYA', '', '', '0000-00-00', '', '', '', '', '', '', 'DUDHALA', 'DUDHALA', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('179', 'VIJAYBHAI M ODEDARA', '', '', '0000-00-00', '', '', '', '', '9825096339', '', '', 'A/27 GREEN AVENU PARK . RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('180', 'DEVNI GAJJAR', '', '', '0000-00-00', '', '', '', '', '', '', '1/ MASTAR SOSA / GRUHGANGA', '1/ MASTAR SOSA / GRUHGANGA', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('181', 'DEVANSHI GAJJAR ', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('182', 'JASH  P POKAR', '', '', '0000-00-00', '', '', '', '', '', '', '1/ JAY  PARK. NANA MOVA ROAD', '1/ JAY  PARK. NANA MOVA ROAD', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('183', 'IRFAN BHAI P MAKRANI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('184', 'VIMAL BHAI VACHANI', '', '', '0000-00-00', '', '', '', '', '8154888891', '', 'TIRUPATI. TAGORNAGAR AMIN  MARG. ', 'TIRUPATI. TAGORNAGAR AMIN  MARG. ', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('185', 'DR. SANDEEP MARU', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('186', 'PARTH BHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('187', 'ASHVIN BHAI ', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('188', 'KALABEN DESAI ', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('189', 'APULBHAI DOSHI', '', '', '0000-00-00', '', '', '', '', '9824246475', '', 'EVER MASTER MANDAP SERVICE. AMARAPALI CINEMA', 'EVER MASTER MANDAP SERVICE. AMARAPALI CINEMA', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('190', 'MEHULBHAI CHAVDA', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'JUNAGADH', 'JUNAGADH', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('191', 'JIGNESH BHAI DELVADIYA', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('192', 'NARESHBHAI KANANI', '', '', '0000-00-00', '', '', '', '', '', '', 'C/ 311 MANSATIRTH /2 RAJKOT', 'C/ 311 MANSATIRTH /2 RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('193', 'DEEPAKBHAI VADGAMA', '', '', '0000-00-00', '', '', '', '', '', '', 'KALAWAD ', 'KALAWAD ', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('194', 'SUDHIRBHAI PATEL', '', '', '0000-00-00', '', '', '', '', '', '', 'SORTHIYAVADI CIRCLE RAJKOT', 'SORTHIYAVADI CIRCLE RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('195', 'SAGARBHAI CHOHAN', '', '', '0000-00-00', '', '', '', '', '', '', 'MARKETING YARD RAJKOT', 'MARKETING YARD RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('196', 'DHARITABEN ', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('197', 'DHAVALBHAI SAHA', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('198', 'JAYDEEPBHAI ', '', '', '0000-00-00', '', '', '', '', '9825516275', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('199', 'NIRAJBHAI VYAS', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('200', 'HARESHBHAI TANK', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('201', 'DR. NISHIT SANGHVI', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('202', 'MAIMISHBHAI KORAT', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('203', 'MITULBHAI SUDRA', '', '', '0000-00-00', '', '', '', '', '8140691383', '', 'MADHAPAR . RAJKOT', 'MADHAPAR . RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('204', 'JIGNESHBHAI PATEL', '', '', '0000-00-00', '', '', '', '', '9825238687', '', 'NANAMOVA ROAD AALAP TWIN TOWER RAJKOT', 'NANAMOVA ROAD AALAP TWIN TOWER RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('205', 'NARENDRABHAI PADLIYA', '', '', '0000-00-00', '', '', '', '', '', '', 'MORBI', 'MORBI', 'MORBI', 'MORBI', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('206', 'SANJAYBHAI JOBANPUTRA', '', '', '0000-00-00', '', '', '', '', '9898084849', '', 'RAJKOT ', 'RAJKOT ', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('207', 'HIMANSHUBHAI', '', '', '0000-00-00', '', '', '', '', '', '', 'IMPAL STEEL RAJKOT', 'IMPAL STEEL RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('208', 'BHAVYA JAYBHAI KAMDAR', '', '', '0000-00-00', '', '', '', '', '', '', 'M/41 . GUJRAT HOUSING BORD RAJKOT', 'M/41 . GUJRAT HOUSING BORD RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('209', 'DR. DHARMENDRA HADIYAL', '', '', '0000-00-00', '', '', '', '', '9375193751', '', 'MORBI', 'MORBI', 'MORBI', 'MORBI', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('210', 'AKSHAR PAREKH', '', '', '0000-00-00', '', '', '', '', '', '', '9/A MANHAR PLOT', '9/A MANHAR PLOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('211', 'DR. ASHISH JASANI', '', '', '0000-00-00', '', '', '', '', '', '', 'ANNAYA. 6/B PANCHVATI SOSA . STREET NO. 7 RAJKOT', 'ANNAYA. 6/B PANCHVATI SOSA . STREET NO. 7 RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('212', 'YUG ARAYA', '', '', '0000-00-00', '', '', '', '', '9033318885', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('213', 'ASHVINBHAI M CHOTLIYA', '', '', '0000-00-00', '', '', '', '', '', '', 'GITANAGAR \' UTSAV\'  RAJKOT ', 'GITANAGAR \' UTSAV\'  RAJKOT ', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('214', 'PUSHTI BATRA', '', '', '0000-00-00', '', '', '', '', '9824220223', '', 'NIRMALA ROAD PRAKASH SOSA. RAJKOT', 'NIRMALA ROAD PRAKASH SOSA. RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('215', 'RIYAN KOTHARI', '', '', '0000-00-00', '', '', '', '', '', '', '12/ JAGNATH PLOT . RAJDEEP APARTMENT ', '12/ JAGNATH PLOT . RAJDEEP APARTMENT ', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('216', 'JIGNESH BHAI RAVJIBHAI PARMAR', '', '', '0000-00-00', '', '', '', '', '9824290201', '', 'KOTHARIYAROAD 80ft ROAD MADHAV HOLL', 'KOTHARIYAROAD 80ft ROAD MADHAV HOLL', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('217', 'DIKSHITABEN JAVIYA', '', '', '0000-00-00', '', '', '', '', '9824213112', '', '2/ HASANVADI BALAJI PAN . RAJKOT', '2/ HASANVADI BALAJI PAN . RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('218', 'RAVI KISHORBHAI LUNAGARIYA', '', '', '0000-00-00', '', '', '', '', '9033151221', '', 'SHAKTIVILA MADHURAM PARK VANIYA VADI', 'SHAKTIVILA MADHURAM PARK VANIYA VADI', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('219', 'MANISHBHAI RAMNIKBHAI RAPARKA', '', '', '0000-00-00', '', '', '', '', '9898048505', '', '3/11 GAYATRINAGAR', '3/11 GAYATRINAGAR', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('220', 'SANDEEPBHAI DOBARIYA', '', '', '0000-00-00', '', '', '', '', '972175575', '', '6/ RADHANAGAR RAMDEV KRUPA ', '6/ RADHANAGAR RAMDEV KRUPA ', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('221', ' NARESHBHAI MAGANBHAI PARMAR', '', '', '0000-00-00', '', '', '', '', '9424312896', '', '1/ SUBHASHNAGAR KOTHARIYA MAIN ROAD', '1/ SUBHASHNAGAR KOTHARIYA MAIN ROAD', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('222', 'ANKITABEN ', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('223', 'YOGESHBHAI VAJA', '', '', '0000-00-00', '', '', '', '', '9099024908', '', 'AMIN MARG  RAJKOT', 'AMIN MARG  RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('224', 'VISHALBHAI ', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('225', 'RAHULBHAI', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('226', 'KIRAN TELEVISION', '', '', '0000-00-00', '', '', '', '', '9825507701', '', 'Dr. YAGNIK ROAD', 'Dr. YAGNIK ROAD', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('227', 'SHARADBHAI LAKHABHAI JADEJA', '', '', '0000-00-00', '', '', '', '', '9428058352', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('228', 'BHAUTIK A RAJKOTIYA', '', '', '0000-00-00', '', '', '', '', '9825022292', '', 'INDRALOCK RESI. SATYA SAI ROAD', 'INDRALOCK RESI. SATYA SAI ROAD', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('229', 'JAYUBHAI RAYJADA', '', '', '0000-00-00', '', '', '', '', '9825200900', '', 'JAMNAGAR ROAD RAJKOT', 'JAMNAGAR ROAD RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('230', 'RAJUBHAI PATEL', '', '', '0000-00-00', '', '', '', '', '9825100942', '', 'DARSHAN PARK 1 / RAIYA ROAD ', 'DARSHAN PARK 1 / RAIYA ROAD ', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('231', 'NILUBHAI DHANDHAL', '', '', '0000-00-00', '', '', '', '', '9879455532', '', 'AMRELI', 'AMRELI', 'AMRELI', 'AMRELI', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('232', 'MANJEET SINGH ', '', '', '0000-00-00', '', '', '', '', '9727096885', '', 'BHAKTINAGAR RAILWAY STATION ', 'BHAKTINAGAR RAILWAY STATION ', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('233', 'SAMIRBHAI KAILA', '', '', '0000-00-00', '', '', '', '', '9879191991', '', 'TAGORE ROAD RAJKOT', 'TAGORE ROAD RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('234', 'AMIT BHAI ', '', '', '0000-00-00', '', '', '', '', '9723125590', '', 'PAYAL IND. 50ft ROAD ', 'PAYAL IND. 50ft ROAD ', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('235', 'VIPUL BHAI  MAHETA', '', '', '0000-00-00', '', '', '', '', '7567805775', '', 'A/104 ALAP AVENEW. PUSHKARDHAM MANDIR RAJKOT', 'A/104 ALAP AVENEW. PUSHKARDHAM MANDIR RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('236', 'KAMLESHBHAI KACHADIYA', '', '', '0000-00-00', '', '', '', '', '9824514313', '', 'NEW GANDHI SOSA/ BEHIND BALAJI HALL', 'NEW GANDHI SOSA/ BEHIND BALAJI HALL', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('237', 'NILESHBHAI PATEL', '', '', '0000-00-00', '', '', '', '', '9879292228', '', 'NANDVATIKA B /101 ', 'NANDVATIKA B /101 ', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('238', 'RAKESHBHAI BHALALA', '', '', '0000-00-00', '', '', '', '', '9376590400', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('239', 'SABUBHAI', '', '', '0000-00-00', '', '', '', '', '9427724853', '', 'KEVDAVADI DHOBI CHOK RAJKOT', 'KEVDAVADI DHOBI CHOK RAJKOT', '', '', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('240', 'DIPENBHAI TRATIYA', '', '', '0000-00-00', '', '', '', '', '9824679213', '', 'SADHUVASVANI ROAD .   RAJKOT', 'SADHUVASVANI ROAD .   RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('241', 'JAMNAGAR MASHIN TOOLS', '', '', '0000-00-00', '', '', '', '', '9825030060', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('242', 'R B JADEJA ', '', '', '0000-00-00', '', '', '', '', '', '', 'KALAWAD ROAD  SAIBABA PARK RAJKOT', 'KALAWAD ROAD  SAIBABA PARK RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('243', 'DIPAKBHAI GAUSWAMI', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('244', 'VED AMITBHAI RAMANI', '', '', '0000-00-00', '', '', '', '', '9879594747', '', 'GURUJAN SOSA/ ANANDNAGAR RAJKOT', 'GURUJAN SOSA/ ANANDNAGAR RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('245', 'RONAKBHAI ', '', '', '0000-00-00', '', '', '', '', '', '', 'HARI GHAVA MAIN ROAD. PATEL CHOK RAJKOT', 'HARI GHAVA MAIN ROAD. PATEL CHOK RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('246', 'ALPESHBHAI MANSUKHBHAI PIPLIYA', '', '', '0000-00-00', '', '', '', '', '', '', 'SATNAM PARK MORBI ROAD', 'SATNAM PARK MORBI ROAD', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('247', 'JAYESHBHAI PATEL ', '', '', '0000-00-00', '', '', '', '', '', '', 'MORBI', 'MORBI', 'MORBI', 'MORBI', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('248', 'AASHU ENTERPRISE', '', '', '0000-00-00', '', '', '', '', '9427252611', '', '2/B NAVALNAGAR RAJKOT', '2/B NAVALNAGAR RAJKOT', '', '', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('249', 'DEVESHBHAI VORA ', '', '', '0000-00-00', '', '', '', '', '9429470041', '', '12/ SHIVAM APARTMENT . VAGHAVADIROAD. RAJKOT', '12/ SHIVAM APARTMENT . VAGHAVADIROAD. RAJKOT', 'BHAVNAGAR', 'BHAVNAGAR', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('250', 'VINODBHAI PANDSUBIYA', '', '', '0000-00-00', '', '', '', '', '9099067832', '', '202/ BHAYA PLAZA MEHULNAGAR I O C COLONI JAMNAGAR', '202/ BHAYA PLAZA MEHULNAGAR I O C COLONI JAMNAGAR', 'JAMNAGAR', 'JAMNAGAR', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('251', 'JIYA MODI', '', '', '0000-00-00', '', '', '', '', '9879532321', '', 'SHAKTI COLONI A.G OFFICE UNI ROAD RAJKOT', 'SHAKTI COLONI A.G OFFICE UNI ROAD RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('252', 'BHARATBHAI SAVLIYA', '', '', '0000-00-00', '', '', '', '', '9662698378', '', 'BEHIND BALAJI HALL . BACKBONPARK. RAJKOT', 'BEHIND BALAJI HALL . BACKBONPARK. RAJKOT', '', '', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('253', 'RAJANBHAI ', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('254', 'SAMRAT RATHOD ', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('255', 'HITENDRASINH CHOUHAN', '', '', '0000-00-00', '', '', '', '', '9510910009', '', 'D/227 SHASHTRINAGAR . NANAMOVA ROAD RAJKOT', 'D/227 SHASHTRINAGAR . NANAMOVA ROAD RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('256', 'ROHANBHAI RAMESHBHAI GOTHI', '', '', '0000-00-00', '', '', '', '', '9825061675', '', 'NANAMOVA ROAD', 'NANAMOVA ROAD', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('257', 'HETABEN', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('258', 'PRAVINBHAI GIRISHBHAI LUNAGARIYA', '', '', '0000-00-00', '', '', '', '', '9723463500', '', 'RANCHODNAGAR. K J VEKRIYA ROAD RAJKOT', 'RANCHODNAGAR. K J VEKRIYA ROAD RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('259', 'BHARATSINH CHOUHAN', '', '', '0000-00-00', '', '', '', '', '9978913206', '', '130/ PRASHILPARK NEEL CITY CLUB . RAJKOT', '130/ PRASHILPARK NEEL CITY CLUB . RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('260', 'VAIBHAV SAHA', '', '', '0000-00-00', '', '', '', '', '', '', '2/ JALARAM . UNI ROAD RAJKOT ', '2/ JALARAM . UNI ROAD RAJKOT ', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('261', 'DASHRATH SOJITRA ', '', '', '0000-00-00', '', '', '', '', '9898973500', '', '2/ SAGAR SOSA/ KOTHARIYA ROAD RAJKOT', '2/ SAGAR SOSA/ KOTHARIYA ROAD RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('262', 'KETU M CHANDRALA ', '', '', '0000-00-00', '', '', '', '', '9824248048', '', 'PATIDAR CHOK NANDGAV . 313 RAJKOT ', 'PATIDAR CHOK NANDGAV . 313 RAJKOT ', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('263', 'MITESHBHAI MORBI', '', '', '0000-00-00', '', '', '', '', '', '', 'MORBI', 'MORBI', 'MORBI', 'MORBI', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('264', 'SAKSHAMKUMAR ', '', '', '0000-00-00', '', '', '', '', '8758034808', '', 'UNI ROAD RAJKOT', 'UNI ROAD RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('265', 'YUVRAJSINH JADEJA ', '', '', '0000-00-00', '', '', '', '', '9727690005', '', '8/ LAXMINAGAR ASHAPURANIVAS  RAJKOT', '8/ LAXMINAGAR ASHAPURANIVAS  RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('266', 'JAINIKBHAI ', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('267', 'SANJAYBHAI SARVAIYA', '', '', '0000-00-00', '', '', '', '', '', '', 'UDHYOGNAGAR COLONI. QUATAR NO. 42  RAJKOT', 'UDHYOGNAGAR COLONI. QUATAR NO. 42  RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('268', 'DIVYESHBHAI JASANI ', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('269', 'MAHAMADI F JOINT ', '', '', '0000-00-00', '', '', '', '', '9825362324', '', 'MORBI', 'MORBI', 'MORBI', 'MORBI', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('270', 'BHAVESHBHAI PATEL ', '', '', '0000-00-00', '', '', '', '', '9898241673', '', 'VINAYAK 4, CHITRAKUT DHAM . NR. PANCHVATI SOSA /  RAJKOT ', 'VINAYAK 4, CHITRAKUT DHAM . NR. PANCHVATI SOSA /  RAJKOT ', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('271', 'DR. PRATISH SAVJIYANI', '', '', '0000-00-00', '', '', '', '', '9228219998', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('272', 'MANSI TANTI ', '', '', '0000-00-00', '', '', '', '', '9979886611', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('273', 'ZAHABIYA ZARIWALA ', '', '', '0000-00-00', '', '', '', '', '8980170020', '', 'KRISHNA NAGAR MAIN ROAD MADHAPAR ', 'KRISHNA NAGAR MAIN ROAD MADHAPAR ', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('274', 'SANJAYRAJ HOTEL AND RESORT PVT. LTD.', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('275', 'NITESHBHAI', '', '', '0000-00-00', '', '', '', '', '', '', 'BLOCK NO 16, INDRALOK RESIDENCY, NEAR DR. SATYASAI HEART HOSPITAL.', 'BLOCK NO 16, INDRALOK RESIDENCY, NEAR DR. SATYASAI HEART HOSPITAL.', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('276', 'PANKAJBHAI  SANCHANIYA', '', '', '0000-00-00', '', '', '', '', '9824217406', '', 'RAMNAGAR / 1GONDAL ROAD', 'RAMNAGAR / 1GONDAL ROAD', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('277', 'YOGESHBHAI ', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'JASDAN', 'JASDAN', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('278', 'VISHALBHAI PAREKH', '', '', '0000-00-00', '', '', '', '', '9924104490', '', 'GOKUL 4/14 GUNDAVADI RAJKOT', 'GOKUL 4/14 GUNDAVADI RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('279', 'NITESHBHAI ', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('280', 'TUSHARBHAI ', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('281', 'PRASHANTBHAI TANK', '', '', '0000-00-00', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('282', 'MEHULBHAI JAKASANIYA', '', '', '0000-00-00', '', '', '', '', '', '', 'MORBI', 'MORBI', 'MORBI', 'MORBI', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('283', 'NAINESHBHAI', '', '', '0000-00-00', '', '', '', '', '9925409397', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('284', 'DHARMESHBHAI KACHA', '', '', '0000-00-00', '', '', '', '', '9909281168', '', 'NEW SARVODAY SOSA/  STREET NO.4', 'NEW SARVODAY SOSA/  STREET NO.4', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('285', 'MANISHBHAI SONI', '', '', '0000-00-00', '', '', '', '', '9909117920', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('286', 'DEEPABEN RAJA', '', '', '0000-00-00', '', '', '', '', '9824042929', '', '7th FLOOR PRAHAR APARTMENT. MATRUMANDIR SCHOOL', '7th FLOOR PRAHAR APARTMENT. MATRUMANDIR SCHOOL', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('287', 'YUNUSBHAI', '', '', '0000-00-00', '', '', '', '', '9879838846', '', 'RAJKOT', 'RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('288', 'HEET  P SINGALA', '', '', '0000-00-00', '', '', '', '', '9974950041', '', 'BHARTINAGAR 1 RAJKOT', 'BHARTINAGAR 1 RAJKOT', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('289', 'PRASHANTBHAI TANK', '', '', '0000-00-00', '', '', '', '', '', '', 'MAHESWARI 2, KOTHARIYA ROAD.', 'MAHESWARI 2, KOTHARIYA ROAD.', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('290', 'SANDIPBHAI RATHOD', '', '', '0000-00-00', '', '', '', '', '9328266722', '', '', '', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('291', 'SANJABHAI SIMARIYA', '', '', '0000-00-00', '', '', '', '', '9825210701', '', '51, AADITYA APARTMENT, ROYALPARK, KALAVADROAD.', '51, AADITYA APARTMENT, ROYALPARK, KALAVADROAD.', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('292', 'BHAVESHBHAI ', '', '', '0000-00-00', '', '', '', '', '9879240352', '', '6, HARIDWAR SOCITY, NEAR GOKULDHAM', '6, HARIDWAR SOCITY, NEAR GOKULDHAM', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('293', 'SAVANI JENIL', '', '', '0000-00-00', '', '', '', '', '8758039558', '', 'PARAMHANS SURYADEV SOCITY. STREET NO.1', 'PARAMHANS SURYADEV SOCITY. STREET NO.1', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('294', 'VIMALBHAI VADAGAMA', '', '', '0000-00-00', '', '', '', '', '7567000999', '', 'AMBAJI KADAVA PLOT MAIN ROAD, \"VIMAL\"', 'AMBAJI KADAVA PLOT MAIN ROAD, \"VIMAL\"', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('295', 'HIRENBHAI', '', '', '0000-00-00', '', '', '', '', '9586563563', '', '', '', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('296', 'PRATIKBHAI', '', '', '0000-00-00', '', '', '', '', '9825211001', '', 'SHREE COLONEY', 'SHREE COLONEY', 'RAJKOT', 'RAJKOT', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('297', 'Dr. NARESHBHAI BHALIYA', '', '', '0000-00-00', '', '', '', '', '9825075716', '', '', '', '', 'PORBANDAR', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('298', 'SANDIPBHAI GOSHAI', '', '', '0000-00-00', '', '', '', '', '9426230177', '', 'BAPASITARAM HOSPITAL, UNAROAD,', 'BAPASITARAM HOSPITAL, UNAROAD,', 'TALALA', 'TALALA', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('299', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '1');
INSERT INTO `master_customer` VALUES ('300', 'Mayur', 'ishvarbhai', 'Panchal', '2015-12-21', 'salient', 'mayurpanchal79@gmail.com', '9999', '8888', '77777', 'www.salient.com', '1,abc,sanat recidency\r\nbakeri', '1,abc,sanat recidency\r\nbakeri', 'ahmendabad', 'ahmendabad', '380011', '380011', 'gujarat', 'gujarat', 'passport', '123456789', null, '1');

-- ----------------------------
-- Table structure for master_cyclezone_price
-- ----------------------------
DROP TABLE IF EXISTS `master_cyclezone_price`;
CREATE TABLE `master_cyclezone_price` (
  `CycleZonePriceID` int(11) NOT NULL AUTO_INCREMENT,
  `InventoryChildID` int(11) DEFAULT NULL,
  `BasicPrice` float DEFAULT NULL,
  `TaxPrice` float DEFAULT NULL,
  `TaxApplied` varchar(100) DEFAULT NULL,
  `ProfitPersontage` float DEFAULT NULL,
  `ProfitRs` float DEFAULT NULL,
  `RoundPrice` float DEFAULT NULL,
  `CycleTotalPrice` float DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`CycleZonePriceID`)
) ENGINE=MyISAM AUTO_INCREMENT=320 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_cyclezone_price
-- ----------------------------
INSERT INTO `master_cyclezone_price` VALUES ('1', '1', '5964', '859.2', '5,7', '20', '1192.8', '7160', '8019.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('2', '2', '15130.5', '757.15', '5,7', '1', '151.31', '15143', '15900.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('3', '3', '12437.2', '628.6', '5,7', '1', '124.37', '12572', '13200.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('4', '4', '4651.5', '247.65', '5,7', '2', '93.03', '4953', '5200.65', '1');
INSERT INTO `master_cyclezone_price` VALUES ('5', '5', '3549', '209.55', '5,7', '2', '70.98', '4191', '4400.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('6', '6', '16343.2', '852.4', '5,7', '2', '326.87', '17048', '17900.4', '1');
INSERT INTO `master_cyclezone_price` VALUES ('7', '7', '7465.5', '381', '5,7', '2', '149.31', '7620', '8001', '1');
INSERT INTO `master_cyclezone_price` VALUES ('8', '8', '11896.5', '604.8', '5,7', '2', '237.93', '12096', '12700.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('9', '9', '17304', '885.75', '5,7', '2', '346.08', '17715', '18600.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('10', '11', '15130.5', '757.15', '5,7', '2', '302.61', '15143', '15900.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('11', '12', '24333.8', '1233.35', '5,7', '1', '243.34', '24667', '25900.3', '1');
INSERT INTO `master_cyclezone_price` VALUES ('12', '13', '8463', '428.6', '5,7', '1', '84.63', '8572', '9000.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('13', '14', '15036', '761.95', '5,7', '1', '150.36', '15239', '16001', '1');
INSERT INTO `master_cyclezone_price` VALUES ('14', '15', '10274.2', '547.65', '5,7', '2', '205.49', '10953', '11500.7', '1');
INSERT INTO `master_cyclezone_price` VALUES ('15', '16', '3265.5', '181', '5,7', '5', '163.28', '3620', '3801', '1');
INSERT INTO `master_cyclezone_price` VALUES ('16', '17', '6562.5', '357.15', '5,7', '2', '131.25', '7143', '7500.15', '1');
INSERT INTO `master_cyclezone_price` VALUES ('17', '18', '11550', '604.8', '5,7', '1', '115.5', '12096', '12700.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('18', '19', '9145.5', '523.85', '5,7', '2', '182.91', '10477', '11000.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('19', '20', '5659.5', '261.56', '5', '2', '113.19', '6539', '6800.56', '1');
INSERT INTO `master_cyclezone_price` VALUES ('20', '21', '5407.5', '309.55', '5,7', '2', '108.15', '6191', '6500.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('21', '22', '4326', '252.4', '5,7', '2', '86.52', '5048', '5300.4', '1');
INSERT INTO `master_cyclezone_price` VALUES ('22', '23', '4399.5', '252.4', '5,7', '2', '87.99', '5048', '5300.4', '1');
INSERT INTO `master_cyclezone_price` VALUES ('23', '24', '4357.5', '252.4', '5,7', '2', '87.15', '5048', '5300.4', '1');
INSERT INTO `master_cyclezone_price` VALUES ('24', '25', '3412.5', '195.25', '5,7', '2', '68.25', '3905', '4100.25', '1');
INSERT INTO `master_cyclezone_price` VALUES ('25', '26', '4273.5', '252.4', '5,7', '2', '85.47', '5048', '5300.4', '1');
INSERT INTO `master_cyclezone_price` VALUES ('26', '27', '4053', '233.35', '5,7', '2', '81.06', '4667', '4900.35', '1');
INSERT INTO `master_cyclezone_price` VALUES ('27', '28', '6924.75', '400', '5,7', '2', '138.5', '8000', '8400', '1');
INSERT INTO `master_cyclezone_price` VALUES ('28', '29', '8053.5', '461.95', '5,7', '2', '161.07', '9239', '9700.95', '1');
INSERT INTO `master_cyclezone_price` VALUES ('29', '30', '8484', '490.5', '5,7', '2', '169.68', '9810', '10300.5', '1');
INSERT INTO `master_cyclezone_price` VALUES ('30', '31', '8536.5', '495.25', '5,7', '2', '170.73', '9905', '10400.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('31', '32', '2877', '152.4', '5,7', '2', '57.54', '3048', '3200.4', '1');
INSERT INTO `master_cyclezone_price` VALUES ('32', '33', '5029.5', '290.5', '5,7', '2', '100.59', '5810', '6100.5', '1');
INSERT INTO `master_cyclezone_price` VALUES ('33', '34', '2982', '171.45', '5,7', '2', '59.64', '3429', '3600.45', '1');
INSERT INTO `master_cyclezone_price` VALUES ('34', '37', '29111.2', '1504.8', '5,7', '2', '582.23', '30096', '31600.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('35', '39', '21210', '1100', '5,7', '2', '424.2', '22000', '23100', '1');
INSERT INTO `master_cyclezone_price` VALUES ('36', '40', '11124.8', '576.2', '5,7', '2', '222.5', '11524', '12100.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('37', '41', '5271', '314.3', '5,7', '10', '527.1', '6286', '6600.3', '1');
INSERT INTO `master_cyclezone_price` VALUES ('38', '42', '4987.5', '361.95', '5,7', '10', '498.75', '7239', '7600.95', '1');
INSERT INTO `master_cyclezone_price` VALUES ('39', '43', '6168.75', '290.5', '5,7', '2', '123.38', '5810', '6100.5', '1');
INSERT INTO `master_cyclezone_price` VALUES ('40', '44', '540.75', '42.9', '5,7', '2', '10.81', '858', '900.9', '1');
INSERT INTO `master_cyclezone_price` VALUES ('41', '45', '5042.1', '285.75', '5,7', '2', '100.84', '5715', '6000.75', '1');
INSERT INTO `master_cyclezone_price` VALUES ('42', '46', '1659', '109.55', '5,7', '2', '33.18', '2191', '2300.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('43', '47', '1323', '95.25', '5,7', '2', '26.46', '1905', '2000.25', '1');
INSERT INTO `master_cyclezone_price` VALUES ('44', '48', '1323', '100', '5,7', '2', '26.46', '2000', '2100', '1');
INSERT INTO `master_cyclezone_price` VALUES ('45', '49', '4641', '276.2', '5,7', '2', '92.82', '5524', '5800.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('46', '50', '4803.75', '333.35', '5,7', '2', '96.08', '6667', '7000.35', '1');
INSERT INTO `master_cyclezone_price` VALUES ('47', '51', '7376.25', '428.6', '5,7', '2', '147.53', '8572', '9000.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('48', '52', '446.25', '28.6', '5,7', '2', '8.93', '572', '600.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('49', '53', '5092.5', '281', '5,7', '2', '101.85', '5620', '5901', '1');
INSERT INTO `master_cyclezone_price` VALUES ('50', '54', '304.5', '15.75', '5,7', '2', '6.09', '315', '330.75', '1');
INSERT INTO `master_cyclezone_price` VALUES ('51', '55', '498.75', '28.6', '5,7', '2', '9.97', '572', '600.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('52', '56', '341.25', '18.6', '5,7', '2', '6.83', '372', '390.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('53', '57', '241.5', '26.2', '5,7', '2', '4.83', '524', '550.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('54', '58', '178.5', '11.95', '5,7', '2', '3.57', '239', '250.95', '1');
INSERT INTO `master_cyclezone_price` VALUES ('55', '60', '8688.75', '495.25', '5,7', '2', '173.78', '9905', '10400.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('56', '61', '4326', '257.2', '5,7', '3', '129.78', '5144', '5401.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('57', '62', '5223.75', '309.55', '5,7', '3', '156.71', '6191', '6500.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('58', '63', '519.75', '28.6', '5,7', '2', '10.39', '572', '600.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('59', '64', '750.75', '52.4', '5,7', '5', '37.54', '1048', '1100.4', '1');
INSERT INTO `master_cyclezone_price` VALUES ('60', '65', '178.5', '11.95', '5,7', '2', '3.57', '239', '250.95', '1');
INSERT INTO `master_cyclezone_price` VALUES ('61', '66', '273', '16.7', '5,7', '2', '5.46', '334', '350.7', '1');
INSERT INTO `master_cyclezone_price` VALUES ('62', '67', '236.25', '16.7', '5,7', '2', '4.72', '334', '350.7', '1');
INSERT INTO `master_cyclezone_price` VALUES ('63', '68', '1627.5', '100', '5,7', '5', '81.38', '2000', '2100', '1');
INSERT INTO `master_cyclezone_price` VALUES ('64', '69', '246.75', '16.7', '5,7', '5', '12.34', '334', '350.7', '1');
INSERT INTO `master_cyclezone_price` VALUES ('65', '70', '939.75', '71.45', '5,7', '2', '18.8', '1429', '1500.45', '1');
INSERT INTO `master_cyclezone_price` VALUES ('66', '71', '2205', '119.05', '5,7', '2', '44.1', '2381', '2500.05', '1');
INSERT INTO `master_cyclezone_price` VALUES ('67', '72', '94.5', '5.75', '5,7', '2', '1.89', '115', '120.75', '1');
INSERT INTO `master_cyclezone_price` VALUES ('68', '73', '152.25', '9.3', '5,7', '2', '3.04', '186', '195.3', '1');
INSERT INTO `master_cyclezone_price` VALUES ('69', '74', '120.75', '7.65', '5,7', '2', '2.42', '153', '160.65', '1');
INSERT INTO `master_cyclezone_price` VALUES ('70', '75', '120.75', '7.65', '5,7', '2', '2.42', '153', '160.65', '1');
INSERT INTO `master_cyclezone_price` VALUES ('71', '76', '929.25', '64.3', '5,7', '2', '18.59', '1286', '1350.3', '1');
INSERT INTO `master_cyclezone_price` VALUES ('72', '77', '813.75', '54.8', '5,7', '5', '40.69', '1096', '1150.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('73', '78', '393.75', '25.25', '5,7', '2', '7.88', '505', '530.25', '1');
INSERT INTO `master_cyclezone_price` VALUES ('74', '79', '257.25', '16.7', '5,7', '2', '0', '334', '350.7', '1');
INSERT INTO `master_cyclezone_price` VALUES ('75', '80', '262.5', '17.65', '5,7', '2', '5.25', '353', '370.65', '1');
INSERT INTO `master_cyclezone_price` VALUES ('76', '81', '36.75', '3.85', '5,7', '5', '1.84', '77', '80.85', '1');
INSERT INTO `master_cyclezone_price` VALUES ('77', '83', '18.9', '2.4', '5,7', '5', '0.94', '48', '50.4', '1');
INSERT INTO `master_cyclezone_price` VALUES ('78', '84', '278.25', '16.7', '5,7', '2', '5.57', '334', '350.7', '1');
INSERT INTO `master_cyclezone_price` VALUES ('79', '85', '288.75', '19.05', '5,7', '5', '14.44', '381', '400.05', '1');
INSERT INTO `master_cyclezone_price` VALUES ('80', '86', '273', '16.7', '5,7', '2', '5.46', '334', '350.7', '1');
INSERT INTO `master_cyclezone_price` VALUES ('81', '87', '60.9', '3.85', '5,7', '2', '1.22', '77', '80.85', '1');
INSERT INTO `master_cyclezone_price` VALUES ('82', '88', '33993.8', '1904.8', '5,7', '5', '1699.69', '38096', '40000.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('83', '89', '20238.8', '1104.8', '5,7', '2', '404.77', '22096', '23200.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('84', '92', '157.5', '9.3', '5,7', '5', '7.88', '186', '195.3', '1');
INSERT INTO `master_cyclezone_price` VALUES ('85', '93', '47.25', '3.1', '5,7', '2', '0.94', '62', '65.1', '1');
INSERT INTO `master_cyclezone_price` VALUES ('86', '95', '446.25', '28.6', '5,7', '5', '22.31', '572', '600.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('87', '100', '65.1', '3.85', '5,7', '5', '3.25', '77', '80.85', '1');
INSERT INTO `master_cyclezone_price` VALUES ('88', '97', '525', '28.6', '5,7', '2', '10.5', '572', '600.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('89', '101', '204.75', '14.3', '5,7', '2', '4.09', '286', '300.3', '1');
INSERT INTO `master_cyclezone_price` VALUES ('90', '104', '63', '4.8', '5,7', '5', '3.15', '96', '100.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('91', '105', '120.75', '8.35', '5,7', '5', '6.04', '167', '175.35', '1');
INSERT INTO `master_cyclezone_price` VALUES ('92', '106', '168', '11.95', '5,7', '5', '8.4', '239', '250.95', '1');
INSERT INTO `master_cyclezone_price` VALUES ('93', '107', '115.5', '7.15', '5,7', '5', '5.78', '143', '150.15', '1');
INSERT INTO `master_cyclezone_price` VALUES ('94', '108', '12.6', '2.4', '5,7', '5', '0.63', '48', '50.4', '1');
INSERT INTO `master_cyclezone_price` VALUES ('95', '109', '5.25', '0.75', '5,7', '5', '0.26', '15', '15.75', '1');
INSERT INTO `master_cyclezone_price` VALUES ('96', '110', '57.75', '4.8', '5,7', '5', '2.89', '96', '100.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('97', '111', '120.75', '8.1', '5,7', '5', '6.04', '162', '170.1', '1');
INSERT INTO `master_cyclezone_price` VALUES ('98', '112', '126', '8.35', '5,7', '5', '6.3', '167', '175.35', '1');
INSERT INTO `master_cyclezone_price` VALUES ('99', '113', '52.5', '3.85', '5,7', '5', '2.63', '77', '80.85', '1');
INSERT INTO `master_cyclezone_price` VALUES ('100', '114', '52.5', '3.6', '5,7', '5', '2.63', '72', '75.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('101', '116', '75.6', '4.8', '5,7', '5', '3.78', '96', '100.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('102', '117', '36.75', '2.4', '5,7', '5', '1.84', '48', '50.4', '1');
INSERT INTO `master_cyclezone_price` VALUES ('103', '118', '26.25', '1.95', '5,7', '5', '1.31', '39', '40.95', '1');
INSERT INTO `master_cyclezone_price` VALUES ('104', '119', '173.25', '10', '5,7', '5', '8.66', '200', '210', '1');
INSERT INTO `master_cyclezone_price` VALUES ('105', '120', '7796.25', '442.85', '5,7', '10', '779.63', '8857', '9299.85', '1');
INSERT INTO `master_cyclezone_price` VALUES ('106', '121', '8268.75', '471.45', '5,7', '5', '413.44', '9429', '9900.45', '1');
INSERT INTO `master_cyclezone_price` VALUES ('107', '122', '7901.25', '447.65', '5,7', '5', '395.06', '8953', '9400.65', '1');
INSERT INTO `master_cyclezone_price` VALUES ('108', '123', '14463.8', '823.85', '5,7', '5', '723.19', '16477', '17300.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('109', '125', '11786.2', '666.7', '5,7', '5', '589.31', '13334', '14000.7', '1');
INSERT INTO `master_cyclezone_price` VALUES ('110', '126', '10053.8', '571.45', '5,7', '5', '502.69', '11429', '12000.5', '1');
INSERT INTO `master_cyclezone_price` VALUES ('111', '127', '11838.8', '671.45', '5,7', '5', '591.94', '13429', '14100.5', '1');
INSERT INTO `master_cyclezone_price` VALUES ('112', '128', '13676.2', '776.2', '5,7', '5', '683.81', '15524', '16300.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('113', '129', '9266.25', '528.6', '5,7', '5', '463.31', '10572', '11100.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('114', '130', '7271.25', '447.65', '5,7', '5', '363.56', '8953', '9400.65', '1');
INSERT INTO `master_cyclezone_price` VALUES ('115', '131', '7166.25', '409.55', '5,7', '5', '358.31', '8191', '8600.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('116', '132', '5738.25', '314.3', '5,7', '5', '286.91', '6286', '6600.3', '1');
INSERT INTO `master_cyclezone_price` VALUES ('117', '133', '5381.25', '304.8', '5,7', '5', '269.06', '6096', '6400.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('118', '134', '5076.75', '276.2', '5,7', '5', '253.84', '5524', '5800.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('119', '135', '5617.5', '309.55', '5,7', '5', '280.88', '6191', '6500.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('120', '136', '4284', '233.35', '5,7', '5', '214.2', '4667', '4900.35', '1');
INSERT INTO `master_cyclezone_price` VALUES ('121', '137', '5475.75', '300', '5,7', '5', '273.79', '6000', '6300', '1');
INSERT INTO `master_cyclezone_price` VALUES ('122', '138', '5370.75', '295.25', '5,7', '5', '268.54', '5905', '6200.25', '1');
INSERT INTO `master_cyclezone_price` VALUES ('123', '139', '3596.25', '195.25', '5,7', '5', '179.81', '3905', '4100.25', '1');
INSERT INTO `master_cyclezone_price` VALUES ('124', '140', '12316.5', '666.7', '5,7', '5', '615.83', '13334', '14000.7', '1');
INSERT INTO `master_cyclezone_price` VALUES ('125', '141', '6268.5', '342.9', '5,7', '5', '313.43', '6858', '7200.9', '1');
INSERT INTO `master_cyclezone_price` VALUES ('126', '142', '4987.5', '261.95', '5,7', '5', '249.38', '5239', '5500.95', '1');
INSERT INTO `master_cyclezone_price` VALUES ('127', '143', '4446.75', '266.7', '5,7', '5', '222.34', '5334', '5600.7', '1');
INSERT INTO `master_cyclezone_price` VALUES ('128', '144', '2493.75', '145.25', '5,7', '5', '124.69', '2905', '3050.25', '1');
INSERT INTO `master_cyclezone_price` VALUES ('129', '145', '2861.25', '166.7', '5,7', '5', '143.06', '3334', '3500.7', '1');
INSERT INTO `master_cyclezone_price` VALUES ('130', '146', '2289', '133.35', '5,7', '5', '114.45', '2667', '2800.35', '1');
INSERT INTO `master_cyclezone_price` VALUES ('131', '147', '2415', '140.5', '5,7', '5', '120.75', '2810', '2950.5', '1');
INSERT INTO `master_cyclezone_price` VALUES ('132', '148', '2583', '150', '5,7', '5', '129.15', '3000', '3150', '1');
INSERT INTO `master_cyclezone_price` VALUES ('133', '150', '2651.25', '154.8', '5,7', '5', '132.56', '3096', '3250.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('134', '151', '2756.25', '161.95', '5,7', '5', '137.81', '3239', '3400.95', '1');
INSERT INTO `master_cyclezone_price` VALUES ('135', '152', '3307.5', '192.9', '5,7', '5', '165.38', '3858', '4050.9', '1');
INSERT INTO `master_cyclezone_price` VALUES ('136', '153', '2677.5', '157.15', '5,7', '5', '0', '3143', '3300.15', '1');
INSERT INTO `master_cyclezone_price` VALUES ('137', '154', '3570', '207.15', '5,7', '5', '178.5', '4143', '4350.15', '1');
INSERT INTO `master_cyclezone_price` VALUES ('138', '155', '3097.5', '181', '5,7', '5', '154.88', '3620', '3801', '1');
INSERT INTO `master_cyclezone_price` VALUES ('139', '156', '2992.5', '173.85', '5,7', '5', '149.63', '3477', '3650.85', '1');
INSERT INTO `master_cyclezone_price` VALUES ('140', '157', '2966.25', '173.85', '5,7', '5', '148.31', '3477', '3650.85', '1');
INSERT INTO `master_cyclezone_price` VALUES ('141', '158', '2992.5', '176.2', '5,7', '5', '149.63', '3524', '3700.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('142', '159', '3071.25', '178.6', '5,7', '5', '153.56', '3572', '3750.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('143', '160', '3470.25', '200', '5,7', '5', '173.51', '4000', '4200', '1');
INSERT INTO `master_cyclezone_price` VALUES ('144', '161', '3627.75', '209.55', '5,7', '5', '181.39', '4191', '4400.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('145', '162', '3412.5', '197.65', '5,7', '5', '170.63', '3953', '4150.65', '1');
INSERT INTO `master_cyclezone_price` VALUES ('146', '163', '3360', '195.25', '5,7', '5', '168', '3905', '4100.25', '1');
INSERT INTO `master_cyclezone_price` VALUES ('147', '164', '3444', '200', '5,7', '5', '172.2', '4000', '4200', '1');
INSERT INTO `master_cyclezone_price` VALUES ('148', '165', '3444', '200', '5,7', '2', '68.88', '4000', '4200', '1');
INSERT INTO `master_cyclezone_price` VALUES ('149', '166', '3360', '195.25', '5,7', '5', '168', '3905', '4100.25', '1');
INSERT INTO `master_cyclezone_price` VALUES ('150', '167', '3612', '207.15', '5,7', '5', '180.6', '4143', '4350.15', '1');
INSERT INTO `master_cyclezone_price` VALUES ('151', '168', '3528', '202.4', '5,7', '5', '176.4', '4048', '4250.4', '1');
INSERT INTO `master_cyclezone_price` VALUES ('152', '169', '3638.25', '209.55', '5,7', '10', '363.82', '4191', '4400.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('153', '170', '3580.5', '204.8', '5,7', '5', '179.03', '4096', '4300.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('154', '171', '3612', '207.15', '5,7', '5', '180.6', '4143', '4350.15', '1');
INSERT INTO `master_cyclezone_price` VALUES ('155', '172', '3727.5', '207.15', '5,7', '5', '186.38', '4143', '4350.15', '1');
INSERT INTO `master_cyclezone_price` VALUES ('156', '173', '3554.25', '200', '5,7', '5', '177.71', '4000', '4200', '1');
INSERT INTO `master_cyclezone_price` VALUES ('157', '174', '3496.5', '200', '5,7', '5', '174.82', '4000', '4200', '1');
INSERT INTO `master_cyclezone_price` VALUES ('158', '175', '4221', '245.24', '5,7', '5', '211.05', '4904.76', '5150', '1');
INSERT INTO `master_cyclezone_price` VALUES ('159', '176', '4042.5', '235.75', '5,7', '5', '202.13', '4715', '4950.75', '1');
INSERT INTO `master_cyclezone_price` VALUES ('160', '177', '4105.5', '238.1', '5,7', '5', '205.28', '4762', '5000.1', '1');
INSERT INTO `master_cyclezone_price` VALUES ('161', '178', '4137', '240.5', '5,7', '5', '206.85', '4810', '5050.5', '1');
INSERT INTO `master_cyclezone_price` VALUES ('162', '179', '3554.25', '204.8', '5,7', '5', '177.71', '4096', '4300.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('163', '180', '3664.5', '209.55', '5,7', '5', '183.22', '4191', '4400.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('164', '181', '3685.5', '211.95', '5,7', '5', '184.28', '4239', '4450.95', '1');
INSERT INTO `master_cyclezone_price` VALUES ('165', '182', '2709', '154.8', '5,7', '5', '135.45', '3096', '3250.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('166', '183', '2530.5', '142.9', '5,7', '5', '126.53', '2858', '3000.9', '1');
INSERT INTO `master_cyclezone_price` VALUES ('167', '184', '3612', '207.15', '5,7', '5', '180.6', '4143', '4350.15', '1');
INSERT INTO `master_cyclezone_price` VALUES ('168', '185', '3612', '207.15', '5,7', '5', '180.6', '4143', '4350.15', '1');
INSERT INTO `master_cyclezone_price` VALUES ('169', '186', '3386.25', '190.5', '5,7', '5', '169.31', '3810', '4000.5', '1');
INSERT INTO `master_cyclezone_price` VALUES ('170', '187', '3386.25', '190.5', '5,7', '5', '169.31', '3810', '4000.5', '1');
INSERT INTO `master_cyclezone_price` VALUES ('171', '188', '3554.25', '204.8', '5,7', '5', '177.71', '4096', '4300.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('172', '189', '3496.5', '202.4', '5,7', '5', '174.82', '4048', '4250.4', '1');
INSERT INTO `master_cyclezone_price` VALUES ('173', '190', '3638.25', '209.55', '5,7', '5', '181.91', '4191', '4400.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('174', '191', '3386.25', '190.5', '5,7', '5', '169.31', '3810', '4000.5', '1');
INSERT INTO `master_cyclezone_price` VALUES ('175', '192', '3386.25', '190.5', '5,7', '5', '169.31', '3810', '4000.5', '1');
INSERT INTO `master_cyclezone_price` VALUES ('176', '193', '3664.5', '209.55', '5,7', '5', '183.22', '4191', '4400.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('177', '194', '3554.25', '204.8', '5,7', '5', '177.71', '4096', '4300.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('178', '200', '3627.75', '209.55', '5,7', '5', '181.39', '4191', '4400.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('179', '203', '2756.25', '157.15', '5,7', '5', '137.81', '3143', '3300.15', '1');
INSERT INTO `master_cyclezone_price` VALUES ('180', '206', '3496.5', '202.4', '5,7', '5', '174.82', '4048', '4250.4', '1');
INSERT INTO `master_cyclezone_price` VALUES ('181', '208', '3470.25', '200', '5,7', '5', '173.51', '4000', '4200', '1');
INSERT INTO `master_cyclezone_price` VALUES ('182', '210', '3045', '176.2', '5,7', '5', '152.25', '3524', '3700.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('183', '220', '3638.25', '209.55', '5,7', '5', '181.91', '4191', '4400.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('184', '222', '3097.5', '181', '5,7', '5', '154.88', '3620', '3801', '1');
INSERT INTO `master_cyclezone_price` VALUES ('185', '223', '4200', '242.9', '5,7', '5', '210', '4858', '5100.9', '1');
INSERT INTO `master_cyclezone_price` VALUES ('186', '225', '3612', '207.15', '5,7', '5', '180.6', '4143', '4350.15', '1');
INSERT INTO `master_cyclezone_price` VALUES ('187', '226', '3129', '171.45', '5,7', '5', '156.45', '3429', '3600.45', '1');
INSERT INTO `master_cyclezone_price` VALUES ('188', '227', '3150', '171.45', '5,7', '5', '157.5', '3429', '3600.45', '1');
INSERT INTO `master_cyclezone_price` VALUES ('189', '228', '3097.5', '178.6', '5,7', '5', '154.88', '3572', '3750.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('190', '232', '25265.4', '1571.5', '5,7', '5', '1263.27', '31430', '33001.5', '1');
INSERT INTO `master_cyclezone_price` VALUES ('191', '233', '19125', '1147.65', '5,7', '5', '956.25', '22953', '24100.7', '1');
INSERT INTO `master_cyclezone_price` VALUES ('192', '234', '6969', '428.6', '5,7', '5', '348.45', '8572', '9000.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('193', '240', '7318.5', '428.6', '5,7', '5', '365.93', '8572', '9000.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('194', '241', '5292', '428.6', '5,7', '5', '264.6', '8572', '9000.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('195', '242', '21210', '1190.5', '5,7', '5', '1060.5', '23810', '25000.5', '1');
INSERT INTO `master_cyclezone_price` VALUES ('196', '245', '89.76', '7.15', '5,7', '2', '1.8', '143', '150.15', '1');
INSERT INTO `master_cyclezone_price` VALUES ('197', '247', '107.1', '7.65', '5,7', '5', '5.36', '153', '160.65', '1');
INSERT INTO `master_cyclezone_price` VALUES ('198', '250', '382.5', '27.15', '5,7', '2', '7.65', '543', '570.15', '1');
INSERT INTO `master_cyclezone_price` VALUES ('199', '251', '193.8', '23.85', '5,7', '5', '9.69', '477', '500.85', '1');
INSERT INTO `master_cyclezone_price` VALUES ('200', '252', '168.3', '12.4', '5,7', '5', '8.41', '248', '260.4', '1');
INSERT INTO `master_cyclezone_price` VALUES ('201', '253', '112.2', '9.55', '5,7', '5', '5.61', '191', '200.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('202', '254', '112.2', '9.55', '5,7', '5', '5.61', '191', '200.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('203', '255', '142.8', '9.55', '5,7', '5', '7.14', '191', '200.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('204', '256', '290.7', '19.05', '5,7', '5', '14.54', '381', '400.05', '1');
INSERT INTO `master_cyclezone_price` VALUES ('205', '257', '51', '4.3', '5,7', '5', '2.55', '86', '90.3', '1');
INSERT INTO `master_cyclezone_price` VALUES ('206', '258', '73.44', '4.8', '5,7', '5', '3.67', '96', '100.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('207', '259', '26.52', '1.7', '5,7', '5', '1.33', '34', '35.7', '1');
INSERT INTO `master_cyclezone_price` VALUES ('208', '260', '73.44', '4.8', '5,7', '5', '3.67', '96', '100.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('209', '261', '158.1', '9.55', '5,7', '5', '7.91', '191', '200.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('210', '262', '158.1', '10.25', '5,7', '5', '7.91', '205', '215.25', '1');
INSERT INTO `master_cyclezone_price` VALUES ('211', '263', '4712.4', '309.55', '5,7', '5', '235.62', '6191', '6500.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('212', '266', '15580.5', '1071.45', '5,7', '5', '779.02', '21429', '22500.4', '1');
INSERT INTO `master_cyclezone_price` VALUES ('213', '267', '4998', '323.85', '5,7', '5', '249.9', '6477', '6800.85', '1');
INSERT INTO `master_cyclezone_price` VALUES ('214', '268', '11347.5', '690.5', '5,7', '5', '567.38', '13810', '14500.5', '1');
INSERT INTO `master_cyclezone_price` VALUES ('215', '269', '13030.5', '742.9', '5,7', '5', '651.52', '14858', '15600.9', '1');
INSERT INTO `master_cyclezone_price` VALUES ('216', '286', '4178.94', '261.95', '5,7', '5', '208.95', '5239', '5500.95', '1');
INSERT INTO `master_cyclezone_price` VALUES ('217', '287', '4178.94', '261.95', '5,7', '5', '208.95', '5239', '5500.95', '1');
INSERT INTO `master_cyclezone_price` VALUES ('218', '288', '4502.28', '285.75', '5,7', '5', '225.11', '5715', '6000.75', '1');
INSERT INTO `master_cyclezone_price` VALUES ('219', '289', '4502.28', '285.75', '5,7', '5', '225.11', '5715', '6000.75', '1');
INSERT INTO `master_cyclezone_price` VALUES ('220', '290', '5118.36', '323.85', '5,7', '5', '255.92', '6477', '6800.85', '1');
INSERT INTO `master_cyclezone_price` VALUES ('221', '291', '5118.36', '323.85', '5,7', '5', '255.92', '6477', '6800.85', '1');
INSERT INTO `master_cyclezone_price` VALUES ('222', '292', '7568.4', '461.95', '5,7', '5', '378.42', '9239', '9700.95', '1');
INSERT INTO `master_cyclezone_price` VALUES ('223', '293', '7568.4', '461.95', '5,7', '5', '378.42', '9239', '9700.95', '1');
INSERT INTO `master_cyclezone_price` VALUES ('224', '294', '8271.18', '728.6', '5,7', '5', '413.56', '14572', '15300.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('225', '295', '8271.18', '514.35', '5,7', '5', '413.56', '10287', '10801.3', '1');
INSERT INTO `master_cyclezone_price` VALUES ('226', '296', '8271.18', '514.35', '5,7', '5', '413.56', '10287', '10801.3', '1');
INSERT INTO `master_cyclezone_price` VALUES ('227', '297', '8271.18', '514.35', '5,7', '5', '413.56', '10287', '10801.3', '1');
INSERT INTO `master_cyclezone_price` VALUES ('228', '298', '9655.32', '595.25', '5,7', '5', '482.77', '11905', '12500.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('229', '299', '10482.5', '642.9', '5,7', '5', '524.13', '12858', '13500.9', '1');
INSERT INTO `master_cyclezone_price` VALUES ('230', '300', '10482.5', '642.9', '5,7', '5', '524.13', '12858', '13500.9', '1');
INSERT INTO `master_cyclezone_price` VALUES ('231', '301', '12483.8', '761.95', '5,7', '5', '624.19', '15239', '16001', '1');
INSERT INTO `master_cyclezone_price` VALUES ('232', '302', '8357.88', '509.55', '5,7', '5', '417.89', '10191', '10700.5', '1');
INSERT INTO `master_cyclezone_price` VALUES ('233', '303', '8357.88', '509.55', '5,7', '5', '417.89', '10191', '10700.5', '1');
INSERT INTO `master_cyclezone_price` VALUES ('234', '305', '11814.7', '728.6', '5,7', '5', '590.73', '14572', '15300.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('235', '306', '13099.9', '795.25', '5,7', '5', '654.99', '15905', '16700.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('236', '308', '7330.74', '500', '5,7', '5', '366.54', '10000', '10500', '1');
INSERT INTO `master_cyclezone_price` VALUES ('237', '309', '7330.74', '447.65', '5,7', '5', '366.54', '8953', '9400.65', '1');
INSERT INTO `master_cyclezone_price` VALUES ('238', '310', '12195.8', '628.6', '5,7', '2', '243.91', '12572', '13200.6', '1');
INSERT INTO `master_cyclezone_price` VALUES ('239', '312', '11665.5', '604.8', '5,7', '2', '233.31', '12096', '12700.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('240', '316', '15642.4', '842.9', '5,7', '2', '312.85', '16858', '17700.9', '1');
INSERT INTO `master_cyclezone_price` VALUES ('241', '319', '975', '0', '11', '5', '48.75', '1500', '1500', '1');
INSERT INTO `master_cyclezone_price` VALUES ('242', '320', '950', '0', '11', '5', '47.5', '1450', '1450', '1');
INSERT INTO `master_cyclezone_price` VALUES ('243', '321', '900', '0', '', '5', '45', '1400', '1400', '1');
INSERT INTO `master_cyclezone_price` VALUES ('244', '322', '1627.5', '109.55', '5,7', '5', '81.38', '2191', '2300.55', '1');
INSERT INTO `master_cyclezone_price` VALUES ('245', '335', '7216.5', '476.25', '5,7', '30', '2164.95', '9525', '10001.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('246', '334', '6987', '442.9', '5,7', '5', '349.35', '8858', '9300.9', '1');
INSERT INTO `master_cyclezone_price` VALUES ('247', '332', '7267.5', '476.25', '5,7', '5', '363.38', '9525', '10001.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('248', '333', '7930.5', '500', '5,7', '5', '396.52', '10000', '10500', '1');
INSERT INTO `master_cyclezone_price` VALUES ('249', '336', '3554.25', '211.91', '5,7', '20', '710.85', '4238.1', '4450.01', '1');
INSERT INTO `master_cyclezone_price` VALUES ('250', '337', '3554.25', '211.91', '5,7', '20', '710.85', '4238.1', '4450.01', '1');
INSERT INTO `master_cyclezone_price` VALUES ('251', '340', '4147.5', '242.86', '5,7', '20', '829.5', '4857.14', '5100', '1');
INSERT INTO `master_cyclezone_price` VALUES ('252', '115', '971.25', '57.15', '5,7', '20', '194.25', '1143', '1200.15', '1');
INSERT INTO `master_cyclezone_price` VALUES ('253', '339', '2756.25', '157.15', '5,7', '20', '551.25', '3143', '3300.15', '1');
INSERT INTO `master_cyclezone_price` VALUES ('254', '338', '2640.75', '150', '5,7', '20', '528.15', '3000', '3150', '1');
INSERT INTO `master_cyclezone_price` VALUES ('255', '281', '331.8', '24.8', '5,7', '5', '16.59', '496', '520.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('256', '284', '186.9', '14.3', '5,7', '5', '9.35', '286', '300.3', '1');
INSERT INTO `master_cyclezone_price` VALUES ('257', '282', '198.45', '15.25', '5,7', '5', '9.92', '305', '320.25', '1');
INSERT INTO `master_cyclezone_price` VALUES ('258', '279', '471.45', '35.75', '5,7', '5', '23.57', '715', '750.75', '1');
INSERT INTO `master_cyclezone_price` VALUES ('259', '280', '481.95', '35.75', '5,7', '5', '24.1', '715', '750.75', '1');
INSERT INTO `master_cyclezone_price` VALUES ('260', '276', '509.25', '33.3', '5,7', '5', '25.46', '666', '699.3', '1');
INSERT INTO `master_cyclezone_price` VALUES ('261', '278', '321.3', '20.45', '5,7', '5', '16.07', '409', '429.45', '1');
INSERT INTO `master_cyclezone_price` VALUES ('262', '277', '241.5', '15.7', '5,7', '5', '12.07', '314', '329.7', '1');
INSERT INTO `master_cyclezone_price` VALUES ('263', '275', '556.5', '42.85', '5,7', '5', '27.82', '857', '899.85', '1');
INSERT INTO `master_cyclezone_price` VALUES ('264', '285', '210', '11.95', '5,7', '5', '10.5', '239', '250.95', '1');
INSERT INTO `master_cyclezone_price` VALUES ('265', '381', '11449.5', '723.85', '5,7', '30', '3434.85', '14477', '15200.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('266', '380', '35292', '2076.2', '5,7', '30', '10587.6', '41524', '43600.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('267', '375', '8271.18', '514.35', '5,7', '5', '413.56', '10287', '10801.3', '1');
INSERT INTO `master_cyclezone_price` VALUES ('268', '374', '7090.02', '438.1', '5,7', '5', '354.5', '8762', '9200.1', '1');
INSERT INTO `master_cyclezone_price` VALUES ('269', '373', '7090.02', '438.1', '5,7', '5', '354.5', '8762', '9200.1', '1');
INSERT INTO `master_cyclezone_price` VALUES ('270', '369', '4575.3', '276.2', '5,7', '5', '228.76', '5524', '5800.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('271', '368', '9191', '609.55', '5,7', '5', '459.55', '12191', '12800.5', '1');
INSERT INTO `master_cyclezone_price` VALUES ('272', '367', '7474', '476.2', '5,7', '5', '373.7', '9524', '10000.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('273', '365', '14790', '966.7', '5,7', '5', '739.5', '19334', '20300.7', '1');
INSERT INTO `master_cyclezone_price` VALUES ('274', '364', '14790', '966.7', '5,7', '5', '739.5', '19334', '20300.7', '1');
INSERT INTO `master_cyclezone_price` VALUES ('275', '363', '13566', '885.75', '5,7', '5', '678.3', '17715', '18600.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('276', '362', '10608', '695.25', '5,7', '5', '530.4', '13905', '14600.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('277', '361', '4253.4', '271.45', '5,7', '5', '212.67', '5429', '5700.45', '1');
INSERT INTO `master_cyclezone_price` VALUES ('278', '360', '5610', '352.4', '5,7', '5', '280.5', '7048', '7400.4', '1');
INSERT INTO `master_cyclezone_price` VALUES ('279', '359', '5049', '319.05', '5,7', '5', '252.45', '6381', '6700.05', '1');
INSERT INTO `master_cyclezone_price` VALUES ('280', '358', '4053', '238.15', '5,7', '5', '202.65', '4763', '5001.15', '1');
INSERT INTO `master_cyclezone_price` VALUES ('281', '357', '4168.5', '240.5', '5,7', '5', '208.43', '4810', '5050.5', '1');
INSERT INTO `master_cyclezone_price` VALUES ('282', '356', '8652', '557.15', '5,7', '5', '432.6', '11143', '11700.2', '1');
INSERT INTO `master_cyclezone_price` VALUES ('283', '355', '18385.5', '1104.8', '5,7', '5', '919.27', '22096', '23200.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('284', '353', '132.6', '11.95', '5,7', '5', '6.63', '239', '250.95', '1');
INSERT INTO `master_cyclezone_price` VALUES ('285', '352', '173.4', '11.95', '5,7', '5', '8.67', '239', '250.95', '1');
INSERT INTO `master_cyclezone_price` VALUES ('286', '351', '173.4', '11.95', '5,7', '5', '8.67', '239', '250.95', '1');
INSERT INTO `master_cyclezone_price` VALUES ('287', '350', '265.2', '11.95', '5,7', '5', '13.26', '239', '250.95', '1');
INSERT INTO `master_cyclezone_price` VALUES ('288', '349', '280.5', '19.05', '5,7', '5', '14.03', '381', '400.05', '1');
INSERT INTO `master_cyclezone_price` VALUES ('289', '348', '729.3', '52.4', '5,7', '5', '36.47', '1048', '1100.4', '1');
INSERT INTO `master_cyclezone_price` VALUES ('290', '347', '504.9', '33.35', '5,7', '5', '25.25', '667', '700.35', '1');
INSERT INTO `master_cyclezone_price` VALUES ('291', '346', '504.9', '33.35', '5,7', '5', '25.25', '667', '700.35', '1');
INSERT INTO `master_cyclezone_price` VALUES ('292', '345', '504.9', '33.35', '5,7', '5', '25.25', '667', '700.35', '1');
INSERT INTO `master_cyclezone_price` VALUES ('293', '344', '9766.5', '666.7', '5,7', '5', '488.32', '13334', '14000.7', '1');
INSERT INTO `master_cyclezone_price` VALUES ('294', '341', '14815.5', '1104.8', '5,7', '5', '740.77', '22096', '23200.8', '1');
INSERT INTO `master_cyclezone_price` VALUES ('295', '382', '18385.5', '1104.76', '5,7', '25', '4596.38', '22095.2', '23200', '1');
INSERT INTO `master_cyclezone_price` VALUES ('296', '384', '4178.94', '261.9', '5,7', '35', '1462.63', '5238.1', '5500', '1');
INSERT INTO `master_cyclezone_price` VALUES ('297', '385', '4178.94', '261.9', '5,7', '35', '1462.63', '5238.1', '5500', '1');
INSERT INTO `master_cyclezone_price` VALUES ('298', '386', '4502.28', '285.71', '5,7', '30', '1350.68', '5714.29', '6000', '1');
INSERT INTO `master_cyclezone_price` VALUES ('299', '387', '4502.28', '285.71', '5,7', '0', '0', '5714.29', '6000', '1');
INSERT INTO `master_cyclezone_price` VALUES ('300', '388', '5118.36', '323.81', '5,7', '35', '1791.43', '6476.19', '6800', '1');
INSERT INTO `master_cyclezone_price` VALUES ('301', '389', '5118.36', '323.81', '5,7', '0', '0', '6476.19', '6800', '1');
INSERT INTO `master_cyclezone_price` VALUES ('302', '390', '7568.4', '461.9', '5,7', '30', '2270.52', '9238.1', '9700', '1');
INSERT INTO `master_cyclezone_price` VALUES ('303', '391', '7568.4', '461.9', '5,7', '30', '2270.52', '9238.1', '9700', '1');
INSERT INTO `master_cyclezone_price` VALUES ('304', '392', '8271.18', '514.29', '5,7', '30', '2481.35', '10285.7', '10800', '1');
INSERT INTO `master_cyclezone_price` VALUES ('305', '393', '8271.18', '514.29', '5,7', '30', '2481.35', '10285.7', '10800', '1');
INSERT INTO `master_cyclezone_price` VALUES ('306', '394', '8271.18', '514.29', '5,7', '30', '2481.35', '10285.7', '10800', '1');
INSERT INTO `master_cyclezone_price` VALUES ('307', '395', '8271.18', '514.29', '5,7', '30', '2481.35', '10285.7', '10800', '1');
INSERT INTO `master_cyclezone_price` VALUES ('308', '396', '9655.32', '595.24', '5,7', '30', '2896.6', '11904.8', '12500', '1');
INSERT INTO `master_cyclezone_price` VALUES ('309', '397', '10482.5', '642.86', '5,7', '30', '3144.76', '12857.1', '13500', '1');
INSERT INTO `master_cyclezone_price` VALUES ('310', '398', '10482.5', '642.86', '5,7', '30', '3144.76', '12857.1', '13500', '1');
INSERT INTO `master_cyclezone_price` VALUES ('311', '399', '12483.8', '785.71', '5,7', '30', '3745.13', '15714.3', '16500', '1');
INSERT INTO `master_cyclezone_price` VALUES ('312', '400', '8357.88', '509.52', '5,7', '30', '2507.36', '10190.5', '10700', '1');
INSERT INTO `master_cyclezone_price` VALUES ('313', '401', '8357.88', '509.52', '5,7', '30', '2507.36', '10190.5', '10700', '1');
INSERT INTO `master_cyclezone_price` VALUES ('314', '402', '11814.7', '728.57', '5,7', '30', '3544.4', '14571.4', '15300', '1');
INSERT INTO `master_cyclezone_price` VALUES ('315', '403', '11814.7', '728.57', '5,7', '30', '3544.4', '14571.4', '15300', '1');
INSERT INTO `master_cyclezone_price` VALUES ('316', '404', '13099.9', '795.24', '5,7', '30', '0', '15904.8', '16700', '1');
INSERT INTO `master_cyclezone_price` VALUES ('317', '405', '14878.7', '904.76', '5,7', '30', '4463.62', '18095.2', '19000', '1');
INSERT INTO `master_cyclezone_price` VALUES ('318', '406', '7330.74', '447.62', '5,7', '30', '2199.22', '8952.38', '9400', '1');
INSERT INTO `master_cyclezone_price` VALUES ('319', '407', '7330.74', '523.81', '5,7', '30', '2199.22', '10476.2', '11000', '1');

-- ----------------------------
-- Table structure for master_inventory
-- ----------------------------
DROP TABLE IF EXISTS `master_inventory`;
CREATE TABLE `master_inventory` (
  `InventoryID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `InvoiceNumber` varchar(100) DEFAULT NULL,
  `SupplierID` int(11) DEFAULT NULL,
  `TransportationPrice` float DEFAULT NULL,
  `TotalPrice` float DEFAULT NULL,
  `Note` text,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`InventoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_inventory
-- ----------------------------
INSERT INTO `master_inventory` VALUES ('1', '2015-10-07', 'T/54', '5', '0', '5964', '', '1');
INSERT INTO `master_inventory` VALUES ('2', '2015-11-07', 'T/52', '5', '0', '63918.8', '', '1');
INSERT INTO `master_inventory` VALUES ('3', '2015-11-07', 'T/53', '5', '0', '170389', '', '1');
INSERT INTO `master_inventory` VALUES ('4', '2015-11-07', 'T/51', '5', '0', '19656', '', '1');
INSERT INTO `master_inventory` VALUES ('5', '2015-11-07', 'T/50', '5', '0', '144695', '', '1');
INSERT INTO `master_inventory` VALUES ('6', '2015-10-06', 'T/49', '5', '0', '103876', '', '1');
INSERT INTO `master_inventory` VALUES ('7', '2015-11-06', 'T/48', '5', '0', '50289.8', '', '1');
INSERT INTO `master_inventory` VALUES ('8', '2015-10-06', 'T/47', '5', '0', '42420', '', '1');
INSERT INTO `master_inventory` VALUES ('9', '2015-10-06', 'T/46', '5', '0', '22249.5', '', '1');
INSERT INTO `master_inventory` VALUES ('10', '2015-11-07', 'T/61', '4', '0', '59892', '', '1');
INSERT INTO `master_inventory` VALUES ('11', '2015-10-07', 'T/60', '4', '0', '75631.5', '', '1');
INSERT INTO `master_inventory` VALUES ('12', '2015-10-07', 'T/59', '4', '0', '19866', '', '1');
INSERT INTO `master_inventory` VALUES ('13', '2015-10-07', 'T/58', '4', '0', '104585', '', '1');
INSERT INTO `master_inventory` VALUES ('14', '2015-10-07', 'T/57', '4', '0', '119149', '', '1');
INSERT INTO `master_inventory` VALUES ('15', '2015-10-07', 'T/56', '4', '0', '15062.2', '', '1');
INSERT INTO `master_inventory` VALUES ('16', '2015-10-07', 'T/55', '4', '0', '94710', '', '1');
INSERT INTO `master_inventory` VALUES ('17', '2015-10-06', 'T/54', '4', '0', '40477.5', '', '1');
INSERT INTO `master_inventory` VALUES ('18', '2015-10-06', 'T/53', '4', '0', '22548.8', '', '1');
INSERT INTO `master_inventory` VALUES ('19', '2015-10-06', 'T/52', '4', '0', '28805.8', '', '1');
INSERT INTO `master_inventory` VALUES ('20', '2015-10-06', 'T/51', '4', '0', '156608', '', '1');
INSERT INTO `master_inventory` VALUES ('21', '2015-10-06', 'T/50', '4', '0', '142259', '', '1');
INSERT INTO `master_inventory` VALUES ('22', '2015-10-06', 'T/49', '4', '0', '142564', '', '1');
INSERT INTO `master_inventory` VALUES ('23', '2015-10-08', 'T/369', '6', '2625', '126819', '', '1');
INSERT INTO `master_inventory` VALUES ('24', '2015-10-08', 'T370', '6', '3900.5', '180141', '', '1');
INSERT INTO `master_inventory` VALUES ('25', '2015-10-11', 'T/55', '5', '0', '23100', '', '1');
INSERT INTO `master_inventory` VALUES ('26', '2015-10-12', '5547', '9', '0.1', '83176', '', '1');
INSERT INTO `master_inventory` VALUES ('27', '2015-10-13', 'WH-1102', '8', '0', '69690', '', '1');
INSERT INTO `master_inventory` VALUES ('28', '2015-10-16', 'T/63', '4', '0', '68985', '', '1');
INSERT INTO `master_inventory` VALUES ('29', '2015-10-17', 'T/57', '5', '0', '51240', '', '1');
INSERT INTO `master_inventory` VALUES ('30', '2015-10-19', 'T/58', '5', '0', '65751', '', '1');
INSERT INTO `master_inventory` VALUES ('31', '2015-11-15', '5592', '9', '0', '26979', '', '1');
INSERT INTO `master_inventory` VALUES ('32', '2015-10-15', '5591', '9', '0.3', '190827', '', '1');
INSERT INTO `master_inventory` VALUES ('33', '2015-10-21', 'T/390', '6', '375', '18099', '', '1');
INSERT INTO `master_inventory` VALUES ('34', '2015-10-21', 'T/59', '5', '0', '13736.1', '', '1');
INSERT INTO `master_inventory` VALUES ('36', '2015-10-23', 'T/61', '5', '0', '108489', '', '1');
INSERT INTO `master_inventory` VALUES ('37', '2015-10-23', 'T/62', '5', '0.53', '15133.1', '', '1');
INSERT INTO `master_inventory` VALUES ('38', '2015-10-23', 'TFDR 16', '4', '0', '11300', '', '1');
INSERT INTO `master_inventory` VALUES ('39', '2015-10-25', 'T/66', '4', '0', '18060', '', '1');
INSERT INTO `master_inventory` VALUES ('40', '2015-10-30', 'T411', '6', '225.5', '11723', '', '1');
INSERT INTO `master_inventory` VALUES ('41', '2015-10-06', 'T/48', '4', '0', '2304.75', '', '1');
INSERT INTO `master_inventory` VALUES ('42', '2015-11-23', '5679', '9', '0', '58803', '', '1');
INSERT INTO `master_inventory` VALUES ('45', '2015-11-08', 't445', '6', '200.5', '7309', '', '1');
INSERT INTO `master_inventory` VALUES ('46', '2015-11-19', 'T/462', '6', '450', '19539', '', '1');
INSERT INTO `master_inventory` VALUES ('47', '2015-11-16', '5894', '9', '0', '155703', '', '1');
INSERT INTO `master_inventory` VALUES ('48', '2015-11-07', '5832', '9', '0', '62067', '', '1');
INSERT INTO `master_inventory` VALUES ('49', '2015-11-19', 'T 63', '5', '0', '72460.5', '', '1');
INSERT INTO `master_inventory` VALUES ('50', '2015-11-21', 'T/467', '6', '300', '16743', '', '1');
INSERT INTO `master_inventory` VALUES ('51', '2015-11-21', '5401500941', '11', '0', '68666.4', '', '1');
INSERT INTO `master_inventory` VALUES ('52', '2015-11-30', 'WH-1404', '8', '0', '79194.1', '', '1');
INSERT INTO `master_inventory` VALUES ('53', '2015-11-13', '578', '10', '0.24', '131517', '', '1');
INSERT INTO `master_inventory` VALUES ('54', '2015-11-23', '5401500942', '11', '0', '35292', '', '1');
INSERT INTO `master_inventory` VALUES ('55', '2015-10-16', '0466', '10', '0.48', '201910', '', '1');
INSERT INTO `master_inventory` VALUES ('56', '2015-12-09', '423423', '6', '0', '13095', '', '1');

-- ----------------------------
-- Table structure for master_inventory_child
-- ----------------------------
DROP TABLE IF EXISTS `master_inventory_child`;
CREATE TABLE `master_inventory_child` (
  `InventoryChildID` int(11) NOT NULL AUTO_INCREMENT,
  `InventoryID` int(11) DEFAULT NULL,
  `Parents` int(11) DEFAULT '0',
  `Type` varchar(100) DEFAULT 'cycle',
  `CompanyName` int(11) DEFAULT NULL,
  `ModalName` varchar(100) DEFAULT NULL,
  `Color` varchar(100) DEFAULT NULL,
  `Size` varchar(100) DEFAULT NULL,
  `ItemName` varchar(100) DEFAULT NULL,
  `OrgBasicPrice` float DEFAULT NULL,
  `OrgTaxPrice` float DEFAULT NULL,
  `TransportationPrice` float DEFAULT NULL,
  `OrgDiscountPrice` float DEFAULT NULL,
  `OrgSchemePrice` float DEFAULT NULL,
  `OrgTaxApplied` varchar(100) DEFAULT NULL,
  `OrgQuantity` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`InventoryChildID`)
) ENGINE=InnoDB AUTO_INCREMENT=409 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_inventory_child
-- ----------------------------
INSERT INTO `master_inventory_child` VALUES ('2', '2', '0', 'cycle', '10', 'BLUES 1.1', 'SILVER', 'MEDIUM', 'Select Item Name', '14410', '720.5', '0', '0', '0', '5,7', '1', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('3', '2', '0', 'cycle', '10', 'TRANCE', 'BLUE', 'MEDIUM', 'Select Item Name', '11845', '592.25', '0', '0', '0', '5,7', '1', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('4', '2', '0', 'cycle', '9', 'MACH CITY I BIKE', 'RED', '26\"', 'Select Item Name', '4430', '886', '0', '0', '0', '5,7', '4', '-9', '1');
INSERT INTO `master_inventory_child` VALUES ('5', '2', '0', 'cycle', '9', 'MACH CITY', 'GREEN', '700 C', 'Select Item Name', '3380', '845', '0', '0', '0', '5,7', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('6', '3', '0', 'cycle', '16', 'DUAL', 'BLACK', 'LARGE', 'Select Item Name', '15565', '778.25', '0', '0', '0', '5,7', '1', '-3', '1');
INSERT INTO `master_inventory_child` VALUES ('7', '3', '0', 'cycle', '10', 'DTR 20', 'YELLOW', '20\"', 'Select Item Name', '7110', '355.5', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('8', '3', '0', 'cycle', '10', 'TRANCE PRO', 'BLACK', 'MEDIUM', 'Select Item Name', '11330', '566.5', '0', '0', '0', '5,7', '1', '-3', '1');
INSERT INTO `master_inventory_child` VALUES ('9', '3', '0', 'cycle', '10', 'UNPLUGGED', 'RED', 'LARGE', 'Select Item Name', '16480', '824', '0', '0', '0', '5,7', '1', '-3', '1');
INSERT INTO `master_inventory_child` VALUES ('10', '3', '2', 'cycle', '10', 'BLUES 1.1', 'SILVER', 'MEDIUM', 'Select Item Name', '14410', '720.5', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('11', '3', '0', 'cycle', '10', 'BLUES 1.1', 'SILVER', 'SMALL', 'Select Item Name', '14410', '720.5', '0', '0', '0', '5,7', '1', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('12', '3', '0', 'cycle', '10', 'CELTIC 2.1', 'RED', 'MEDIUM', 'Select Item Name', '23175', '1158.75', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('13', '3', '0', 'cycle', '10', 'DTR 24', 'BLACK', 'MEDIUM', 'Select Item Name', '8060', '806', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('14', '3', '0', 'cycle', '10', 'ROCK 1.1', 'GREY', 'MEDIUM', 'Select Item Name', '14320', '716', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('15', '3', '0', 'cycle', '14', 'MONTANA SPORTS', 'ORRANGE', 'MEDIUM', 'Select Item Name', '9785', '1467.75', '0', '0', '0', '5,7', '3', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('16', '4', '0', 'cycle', '9', 'ROCKY', 'BLUE', '26\"', 'Select Item Name', '3110', '311', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('17', '4', '0', 'cycle', '9', 'RODEO TURNER VX (M.S.)', 'ORRANGE', '26\"', 'Select Item Name', '6250', '625', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('18', '5', '0', 'cycle', '10', 'TRANCE PRO', 'BLUE', 'MEDIUM', 'Select Item Name', '11000', '550', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('19', '5', '0', 'cycle', '9', 'RODEO A 100 VX (M.SPEED)', 'WHITE', '26\"', 'Select Item Name', '8710', '435.5', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('20', '5', '0', 'cycle', '9', 'ATOM ZX 18 SPEED (M.S.)', 'RED', '26\"', 'Select Item Name', '5390', '269.5', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('21', '5', '0', 'cycle', '9', 'ATOM ZX 6 SPEED (M.S.)', 'RED', '26\"', 'Select Item Name', '5150', '257.5', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('22', '5', '0', 'cycle', '9', 'DYNAMITE ZX', 'RED', '26\"', 'Select Item Name', '4120', '824', '0', '0', '0', '5,7', '4', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('23', '5', '0', 'cycle', '9', 'SPARTA ZX', 'BLACK-GREEN', '26\"', 'Select Item Name', '4190', '419', '0', '0', '0', '5,7', '2', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('24', '5', '0', 'cycle', '9', 'SPARTA ZX', 'BLACK-GREEN', '24\"', 'Select Item Name', '4150', '415', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('25', '5', '0', 'cycle', '9', 'CYBOT', 'GREEN-BLACK', '20\"', 'Select Item Name', '3250', '650', '0', '0', '0', '5,7', '4', '-3', '1');
INSERT INTO `master_inventory_child` VALUES ('26', '5', '0', 'cycle', '9', 'DYNAMITE ZX', 'RED', '24\"', 'Select Item Name', '4070', '407', '0', '0', '0', '5,7', '2', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('27', '5', '0', 'cycle', '9', 'ROCKY ZX', 'RED', '24\"', 'Select Item Name', '3860', '386', '0', '0', '0', '5,7', '2', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('28', '5', '0', 'cycle', '9', 'RODEO WAYFINDER (M.S.)', 'BLACK-GREEN', '26\"', 'Select Item Name', '6595', '329.75', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('29', '5', '0', 'cycle', '9', 'RODEO GEOLANDER (M.S./F.D.)', 'WHITE', '24\"', 'Select Item Name', '7670', '383.5', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('30', '5', '0', 'cycle', '9', 'RODEO GEOLANDER (M.S./F.D.)', 'WHITE', '26\"', 'Select Item Name', '8080', '404', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('31', '5', '0', 'cycle', '9', 'RODEO NFS PRO (M.S. / F.D.)', 'RED', '26\"', 'Select Item Name', '8130', '406.5', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('32', '5', '0', 'cycle', '9', 'TOONZ', 'PINK-BLUE', '20\"', 'Select Item Name', '2740', '274', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('33', '5', '0', 'cycle', '9', 'KNIGHT HUNTER', 'BLACK', '26\"', 'Select Item Name', '4790', '479', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('34', '1', '0', 'cycle', '9', 'DYNOX', 'BLUE', '20\"', 'Select Item Name', '2840', '284', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('35', '6', '9', 'cycle', '10', 'UNPLUGGED', 'RED', 'LARGE', 'Select Item Name', '16160', '2424', '0', '0', '0', '5,7', '3', '3', '1');
INSERT INTO `master_inventory_child` VALUES ('36', '6', '12', 'cycle', '10', 'CELTIC 2.1', 'RED', 'MEDIUM', 'Select Item Name', '22725', '1136.25', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('37', '6', '0', 'cycle', '10', 'CELTIC 2.2', 'YELLOW-BLACK', 'MEDIUM', 'Select Item Name', '27725', '1386.25', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('38', '7', '6', 'cycle', '16', 'DUAL', 'BLACK', 'LARGE', 'Select Item Name', '15965', '2394.75', '0', '0', '0', '5,7', '3', '3', '1');
INSERT INTO `master_inventory_child` VALUES ('39', '8', '0', 'cycle', '20', 'SUPER SPORTS WOMAN', 'BLUE', 'MEDIUM', 'Select Item Name', '20200', '2020', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('40', '9', '0', 'cycle', '10', 'ROCK 1.0', 'BLUE', 'MEDIUM', 'Select Item Name', '10595', '1059.5', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('41', '10', '0', 'cycle', '11', 'TRIGGER (S.S. / F.D.)', 'BLACK (M.FINISH)', '24\"', 'Select Item Name', '5020', '502', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('42', '10', '0', 'cycle', '11', 'TRIGGER (M.S. / F.D.)', 'BLACK (M.FINISH)', '24\"', 'Select Item Name', '4750', '475', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('43', '10', '0', 'cycle', '11', 'DIRT MAX (S.S.)', 'GREEN', '24\"', 'Select Item Name', '5875', '587.5', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('44', '10', '0', 'spare', '11', '0', '0', 'Select', 'HELEMT G 30', '515', '1287.5', '0', '0', '0', '5,7', '50', '45', '1');
INSERT INTO `master_inventory_child` VALUES ('45', '11', '0', 'cycle', '15', 'JUST BIKE (S.S.)', 'WHITE', '26\"', 'Select Item Name', '4802', '3601.5', '0', '0', '0', '5,7', '15', '-10', '1');
INSERT INTO `master_inventory_child` VALUES ('46', '12', '0', 'cycle', '19', 'STAR', 'MULTI', '16\"', 'Select Item Name', '1580', '316', '0', '0', '0', '5,7', '4', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('47', '12', '0', 'cycle', '19', 'STAR', 'MULTI', '14\"', 'Select Item Name', '1260', '315', '0', '0', '0', '5,7', '5', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('48', '12', '0', 'cycle', '19', 'BMX', 'MULTI', '14\"', 'Select Item Name', '1260', '315', '0', '0', '0', '5,7', '5', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('49', '13', '0', 'cycle', '11', 'SENSO', 'WHITE', '26\"', 'Select Item Name', '4420', '1768', '0', '0', '0', '5,7', '8', '-2', '1');
INSERT INTO `master_inventory_child` VALUES ('50', '13', '0', 'cycle', '11', 'STYLOUS (S.S.)', 'BLUE (M.FINISH)', '26\"', 'Select Item Name', '4575', '915', '0', '0', '0', '5,7', '4', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('51', '13', '0', 'cycle', '12', 'MISCEO 1.0 (S.S.)', 'BLACK (M.FINISH)', '27.5\"', 'Select Item Name', '7025', '1405', '0', '0', '0', '5,7', '4', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('52', '13', '0', 'spare', '11', '0', '0', 'select', 'TYRE 700 * 32C (MAXXIS) ', '425', '42.5', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('53', '13', '0', 'spare', '11', '0', '0', 'select', 'BICYCLE STAND REPAIR', '4850', '242.5', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('54', '13', '0', 'spare', '11', '0', '0', 'select', 'BICYCLE STAND WALL HANGING SINGLE', '290', '348', '0', '0', '0', '5,7', '24', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('55', '13', '0', 'spare', '11', '0', '0', 'select', 'BICYCLE STAND WALL HANGING DOUBLE - 02', '475', '118.75', '0', '0', '0', '5,7', '5', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('56', '13', '0', 'spare', '11', '0', '0', 'select', 'BICYCLE ACCESSORY GLOVES TOTEM', '325', '32.5', '0', '0', '0', '5,7', '2', '-2', '1');
INSERT INTO `master_inventory_child` VALUES ('57', '13', '0', 'spare', '11', '0', '0', 'select', 'CHAIN WHEEL SET TCWC 28/38/48 T', '230', '23', '0', '0', '0', '5,7', '2', '-2', '1');
INSERT INTO `master_inventory_child` VALUES ('58', '13', '0', 'spare', '11', '0', '0', 'select', 'TUBE 700 * 35-45 C (MAXXIS)', '170', '85', '0', '0', '0', '5,7', '10', '-2', '1');
INSERT INTO `master_inventory_child` VALUES ('59', '14', '49', 'cycle', '11', 'SENSO', 'WHITE', '26\"', 'Select Item Name', '4420', '884', '0', '0', '0', '5,7', '4', '4', '1');
INSERT INTO `master_inventory_child` VALUES ('60', '14', '0', 'cycle', '11', 'EQUINOX (M.S.)', 'RED', '700 C', 'Select Item Name', '8275', '827.5', '0', '0', '0', '5,7', '2', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('61', '14', '0', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', 'Select Item Name', '4120', '2060', '0', '0', '0', '5,7', '10', '-9', '1');
INSERT INTO `master_inventory_child` VALUES ('62', '14', '0', 'cycle', '12', 'MY RIDE (M.S.)', 'WHITE', '26\"', 'Select Item Name', '4975', '995', '0', '0', '0', '5,7', '4', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('63', '14', '0', 'spare', '11', '0', '0', 'select', 'TYRE 700 *35 C MAXXIS', '495', '49.5', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('64', '14', '0', 'spare', '11', '0', '0', 'select', 'TYRE 700 *23 C MAXXIS FOLDABLE', '715', '71.5', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('65', '14', '0', 'spare', '11', '0', '0', 'select', 'TUBE 700 * 18-25 C MAXXIS', '170', '17', '0', '0', '0', '5,7', '2', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('66', '14', '0', 'spare', '11', '0', '0', 'select', 'TYRE 700 * 35 C KENDA', '260', '26', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('67', '14', '0', 'spare', '11', '0', '0', 'select', 'TYRE 700 * 23 C KENDA', '225', '22.5', '0', '0', '0', '5,7', '2', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('68', '14', '0', 'spare', '11', '0', '0', 'select', 'KNEE GUARD PVC ADULT (POLLISPORT)', '1550', '155', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('69', '14', '0', 'spare', '11', '0', '0', 'select', 'BICYCLE LOCK', '235', '117.5', '0', '0', '0', '5,7', '10', '3', '1');
INSERT INTO `master_inventory_child` VALUES ('70', '14', '0', 'spare', '11', '0', '0', 'select', 'KNEE GUARD PVC JUNIOR  (POLLISPORT)', '895', '44.75', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('71', '14', '0', 'spare', '11', '0', '0', 'select', 'CAR RACK STEEL', '2100', '105', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('72', '14', '0', 'spare', '11', '0', '0', 'select', 'LIGHT XC 606 T', '90', '22.5', '0', '0', '0', '5,7', '5', '-3', '1');
INSERT INTO `master_inventory_child` VALUES ('73', '14', '0', 'spare', '11', '0', '0', 'select', 'LIGHT XC 735 A', '145', '72.5', '0', '0', '0', '5,7', '10', '4', '1');
INSERT INTO `master_inventory_child` VALUES ('74', '14', '0', 'spare', '11', '0', '0', 'select', 'LIGHT XC 767 F', '115', '57.5', '0', '0', '0', '5,7', '10', '7', '1');
INSERT INTO `master_inventory_child` VALUES ('75', '14', '0', 'spare', '11', '0', '0', 'select', 'LIGHT XC 998 W', '115', '57.5', '0', '0', '0', '5,7', '10', '4', '1');
INSERT INTO `master_inventory_child` VALUES ('76', '14', '0', 'spare', '11', '0', '0', 'select', 'LIGHT HL 112 W', '885', '88.5', '0', '0', '0', '5,7', '2', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('77', '15', '0', 'spare', '11', '0', '0', 'Select', 'LIGHT HL 105 W', '775', '193.75', '0', '0', '0', '5,7', '5', '3', '1');
INSERT INTO `master_inventory_child` VALUES ('78', '15', '0', 'spare', '11', '0', '0', 'Select', 'TOP TUBE BAG TOTEM', '375', '37.5', '0', '0', '0', '5,7', '2', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('79', '15', '0', 'spare', '11', '0', '0', 'Select', 'MOBILE HOLDER I PHONE 5 ', '245', '61.25', '0', '0', '0', '5,7', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('80', '15', '0', 'spare', '11', '0', '0', 'Select', 'MOBILE HOLDER I PHONE 6', '250', '62.5', '0', '0', '0', '5,7', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('81', '15', '0', 'spare', '11', '0', '0', 'Select', 'CHAIN GUARD 4/5 HOLE ', '35', '35', '0', '0', '0', '5,7', '20', '17', '1');
INSERT INTO `master_inventory_child` VALUES ('82', '15', '81', 'spare', '11', '0', '0', 'Select', 'CHAIN GUARD 4/5 HOLE ', '35', '35', '0', '0', '0', '5,7', '20', '20', '1');
INSERT INTO `master_inventory_child` VALUES ('83', '15', '0', 'spare', '11', '0', '0', 'Select', 'FREE WHEEL GUARD PVC ', '18', '9', '0', '0', '0', '5,7', '10', '9', '1');
INSERT INTO `master_inventory_child` VALUES ('84', '15', '0', 'spare', '11', '0', '0', 'Select', 'KICK STAND 24-28', '265', '66.25', '0', '0', '0', '5,7', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('85', '15', '0', 'spare', '11', '0', '0', 'Select', 'SIDE STAND 24 - 29 ALLOY BLACK SILVER', '275', '137.5', '0', '0', '0', '5,7', '10', '-3', '1');
INSERT INTO `master_inventory_child` VALUES ('86', '15', '0', 'spare', '11', '0', '0', 'Select', 'SIDE STAND 24 - 29 ALLOY BLACK ', '260', '65', '0', '0', '0', '5,7', '5', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('87', '15', '0', 'spare', '11', '0', '0', 'Select', 'SIDE STAND 20', '58', '14.5', '0', '0', '0', '5,7', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('88', '16', '0', 'cycle', '13', 'LAND 8.10 (M.S. / D.D.)', 'MET GREY', '700 C', 'Select Item Name', '32375', '1618.75', '0', '0', '0', '5,7', '1', '-3', '1');
INSERT INTO `master_inventory_child` VALUES ('89', '16', '0', 'cycle', '12', 'MISCEO (M.S.)', 'BLACK (M.FINISH)', '700 C', 'Select Item Name', '19275', '2891.25', '0', '0', '0', '5,7', '3', '-2', '1');
INSERT INTO `master_inventory_child` VALUES ('90', '17', '89', 'cycle', '12', 'MISCEO (M.S.)', 'BLACK (M.FINISH)', '700 C', 'Select Item Name', '19275', '1927.5', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('91', '18', '58', 'spare', '11', '0', '0', 'Select', 'TUBE 700 * 35-45 C (MAXXIS)', '170', '42.5', '0', '0', '0', '5,7', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('92', '18', '0', 'spare', '11', '0', '0', 'Select', 'LIGHT XC-106 R', '150', '37.5', '0', '0', '0', '5,7', '5', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('93', '18', '0', 'spare', '11', '0', '0', 'Select', 'LIGHT XC 700 A', '45', '11.25', '0', '0', '0', '5,7', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('94', '18', '72', 'spare', '11', '0', '0', 'Select', 'LIGHT XC 606 T', '90', '22.5', '0', '0', '0', '5,7', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('95', '18', '0', 'spare', '11', '0', '0', 'Select', 'CARRIER SILVER ALLOY', '425', '106.25', '0', '0', '0', '5,7', '5', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('96', '18', '56', 'spare', '11', '0', '0', 'Select', 'BICYCLE ACCESSORY GLOVES TOTEM', '325', '48.75', '0', '0', '0', '5,7', '3', '3', '1');
INSERT INTO `master_inventory_child` VALUES ('97', '18', '0', 'spare', '11', '0', '0', 'Select', 'BICYCLE PARKING STAND FRONT ', '500', '50', '0', '0', '0', '5,7', '2', '-2', '1');
INSERT INTO `master_inventory_child` VALUES ('98', '18', '54', 'spare', '11', '0', '0', 'Select', 'BICYCLE STAND WALL HANGING SINGLE', '290', '290', '0', '0', '0', '5,7', '20', '20', '1');
INSERT INTO `master_inventory_child` VALUES ('99', '18', '55', 'spare', '11', '0', '0', 'Select', 'BICYCLE STAND WALL HANGING DOUBLE - 02', '775', '465', '0', '0', '0', '5,7', '12', '12', '1');
INSERT INTO `master_inventory_child` VALUES ('100', '19', '0', 'spare', '11', '0', '0', 'Select', 'SIDE STAND 24', '62', '15.5', '0', '0', '0', '5,7', '4', '4', '1');
INSERT INTO `master_inventory_child` VALUES ('101', '19', '0', 'spare', '11', '0', '0', 'Select', 'SIDE KICK STAND  ADJUSTABLE  (616-10)', '195', '97.5', '0', '0', '0', '5,7', '10', '8', '1');
INSERT INTO `master_inventory_child` VALUES ('102', '19', '86', 'spare', '11', '0', '0', 'Select', 'SIDE STAND 24 - 29 ALLOY BLACK ', '260', '130', '0', '0', '0', '5,7', '10', '10', '1');
INSERT INTO `master_inventory_child` VALUES ('103', '19', '85', 'spare', '11', '0', '0', 'Select', 'SIDE STAND 24 - 29 ALLOY BLACK SILVER', '275', '137.5', '0', '0', '0', '5,7', '10', '10', '1');
INSERT INTO `master_inventory_child` VALUES ('104', '19', '0', 'spare', '11', '0', '0', 'Select', 'CHAIN 1/2*3/32*116 LINKS', '60', '15', '0', '0', '0', '5,7', '5', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('105', '19', '0', 'spare', '11', '0', '0', 'Select', 'CHAIN 1/2 * 3/32 * 116 LINKS (P-7002)', '115', '28.75', '0', '0', '0', '5,7', '5', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('106', '19', '0', 'spare', '11', '0', '0', 'Select', 'CHAIN 1/2 * 3/32 * 116 LINKS (P-8002)', '160', '40', '0', '0', '0', '5,7', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('107', '19', '0', 'spare', '11', '0', '0', 'Select', 'FREE WHEEL FRICTION FREE 7 SPEED INDEX', '110', '27.5', '0', '0', '0', '5,7', '5', '4', '1');
INSERT INTO `master_inventory_child` VALUES ('108', '19', '0', 'spare', '11', '0', '0', 'Select', 'V BRAKES FITTING SET', '12', '6', '0', '0', '0', '5,7', '10', '10', '1');
INSERT INTO `master_inventory_child` VALUES ('109', '19', '0', 'spare', '11', '0', '0', 'Select', 'V BRAKE BAND PIPE ONLY', '5', '12.5', '0', '0', '0', '5,7', '50', '50', '1');
INSERT INTO `master_inventory_child` VALUES ('110', '19', '0', 'spare', '11', '0', '0', 'Select', 'FORK FITTING R TYPE SET OF 8', '55', '13.75', '0', '0', '0', '5,7', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('111', '19', '0', 'spare', '11', '0', '0', 'Select', 'FORK FITTING (THREAD LESS FORK)', '115', '28.75', '0', '0', '0', '5,7', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('112', '19', '0', 'spare', '11', '0', '0', 'Select', 'SHOCK ALLOY 165 MM ', '120', '30', '0', '0', '0', '5,7', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('113', '19', '0', 'spare', '11', '0', '0', 'Select', 'FRAME BUSH SET COMPLETE SHOCKER', '50', '25', '0', '0', '0', '5,7', '10', '10', '1');
INSERT INTO `master_inventory_child` VALUES ('114', '19', '0', 'spare', '11', '0', '0', 'Select', 'SEAT QUICK RELEASE CLAMP 31.8 MM', '50', '12.5', '0', '0', '0', '5,7', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('115', '19', '0', 'spare', '11', '0', '0', 'Select', 'HELEMT G 20', '925', '462.5', '0', '0', '0', '5,7', '10', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('116', '19', '0', 'spare', '11', '0', '0', 'Select', 'BOTTLE CAGE SILVER FINISH', '72', '72', '0', '0', '0', '5,7', '19', '-15', '1');
INSERT INTO `master_inventory_child` VALUES ('117', '19', '0', 'spare', '11', '0', '0', 'Select', 'BOTTLE CAGE PVC COLOURED', '35', '17.5', '0', '0', '0', '5,7', '9', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('118', '19', '0', 'spare', '11', '0', '0', 'Select', 'MUDUARD FITTING ONLY PVC', '25', '125', '0', '0', '0', '5,7', '100', '90', '1');
INSERT INTO `master_inventory_child` VALUES ('119', '19', '0', 'spare', '11', '0', '0', 'Select', 'WATTER BOTTLE 500 ML PVC RALEIGH', '165', '82.5', '0', '0', '0', '5,7', '10', '-4', '1');
INSERT INTO `master_inventory_child` VALUES ('120', '20', '0', 'cycle', '11', 'CALDRON - EF (M.S.)', 'WHITE', '24\"', 'Select Item Name', '7425', '742.5', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('121', '20', '0', 'cycle', '11', 'HAZARD-EF (M.S.)', 'GREEN', '26\"', 'Select Item Name', '7875', '787.5', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('122', '20', '0', 'cycle', '11', 'CALDRON - EF (M.S.)', 'BLUE', '26\"', 'Select Item Name', '7525', '752.5', '0', '0', '0', '5,7', '2', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('123', '20', '0', 'cycle', '11', 'LOADED (M.S. / D.D.)', 'WHITE', '26\"', 'Select Item Name', '13775', '1377.5', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('124', '20', '60', 'cycle', '11', 'EQUINOX (M.S.)', 'RED', '700 C', 'Select Item Name', '8275', '413.75', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('125', '20', '0', 'cycle', '11', 'INNOVATE (M.S.)', 'WHITE', '700 C', 'Select Item Name', '11225', '561.25', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('126', '20', '0', 'cycle', '11', 'DIRT MAX (M.S. / D.D.)', 'BLACK (M.FINISH)', '26\"', 'Select Item Name', '9575', '478.75', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('127', '20', '0', 'cycle', '12', 'TERRAIN 30 (M.S. / D.D.)', 'BLACK', '26\"', 'Select Item Name', '11275', '563.75', '0', '0', '0', '5,7', '1', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('128', '20', '0', 'cycle', '12', 'SHOCKBLAZE (M.S. / F.D.)', 'BLACK (M.FINISH)', '26\"', 'Select Item Name', '13025', '651.25', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('129', '20', '0', 'cycle', '12', 'MONSTER X MS SPEED EF D.D.', 'WHITE', '24\"', 'Select Item Name', '8825', '441.25', '0', '0', '0', '5,7', '1', '-4', '1');
INSERT INTO `master_inventory_child` VALUES ('130', '20', '0', 'cycle', '11', 'CALDRON (M.S. / D.D.)', 'BLACK (M.FINISH)', '26\"', 'Select Item Name', '6925', '346.25', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('131', '20', '0', 'cycle', '11', 'SOCCER (M.S. / D.D.)', 'WHITE-BLUE', '26\"', 'Select Item Name', '6825', '341.25', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('132', '21', '0', 'cycle', '11', 'SOCCER (S.S. / F.D.)', 'YELLOW-RED', '26\"', 'Select Item Name', '5465', '546.5', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('133', '21', '0', 'cycle', '11', 'SOCCER (S.S.)', 'GREEN-YELLOW', '26\"', 'Select Item Name', '5125', '512.5', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('134', '21', '0', 'cycle', '11', 'RS 26 (S.S. / F.D.)', 'WHITE', '26\"', 'Select Item Name', '4835', '967', '0', '0', '0', '5,7', '4', '3', '1');
INSERT INTO `master_inventory_child` VALUES ('135', '21', '0', 'cycle', '11', 'X TRACK (S.S. / F.D.)', 'YELLOW', '26\"', 'Select Item Name', '5350', '535', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('136', '21', '0', 'cycle', '11', 'TEENZ', 'GREEN', '20\"', 'Select Item Name', '4080', '408', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('137', '21', '0', 'cycle', '11', 'U TECH (S.S )', 'WHITE-BLUE', '26\"', 'Select Item Name', '5215', '521.5', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('138', '21', '0', 'cycle', '11', 'STRATUS (S.S.)', 'WHITE', '26\"', 'Select Item Name', '5115', '511.5', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('139', '21', '0', 'cycle', '11', 'SX 006', 'RED', '16\"', 'Select Item Name', '3425', '513.75', '0', '0', '0', '5,7', '3', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('140', '21', '0', 'cycle', '12', 'CLUBMAN', 'S.BLUE', 'LARGE', 'Select Item Name', '11730', '586.5', '0', '0', '0', '5,7', '1', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('141', '21', '0', 'cycle', '12', 'MONSTER X (S.S.)', 'WHITE-RED', '24\"', 'Select Item Name', '5970', '298.5', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('142', '21', '0', 'cycle', '17', 'ANTOP / ADDER (F.D.)', 'SILVER', '26\"', 'Select Item Name', '4750', '950', '0', '0', '0', '5,7', '4', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('143', '21', '0', 'cycle', '18', 'CRUISER IBC (F.D.)', 'RB', '26\"', 'Select Item Name', '4235', '423.5', '0', '0', '0', '5,7', '2', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('144', '22', '0', 'cycle', '15', 'BOW-TIE', 'MULTI', '12\"', 'Select Item Name', '2375', '118.75', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('145', '22', '0', 'cycle', '15', 'HAPPY', 'MULTI', '16\"', 'Select Item Name', '2725', '272.5', '0', '0', '0', '5,7', '2', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('146', '22', '0', 'cycle', '15', 'CUB', 'MULTI', '12\"', 'Select Item Name', '2180', '327', '0', '0', '0', '5,7', '3', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('147', '22', '0', 'cycle', '15', 'PC', 'MULTI', '12\"', 'Select Item Name', '2300', '345', '0', '0', '0', '5,7', '3', '3', '1');
INSERT INTO `master_inventory_child` VALUES ('148', '22', '0', 'cycle', '15', 'BOW-TIE', 'MULTI', '14\"', 'Select Item Name', '2460', '369', '0', '0', '0', '5,7', '3', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('149', '22', '146', 'cycle', '15', 'CUB', 'MULTI', '12\"', 'Select Item Name', '2260', '339', '0', '0', '0', '5,7', '3', '3', '1');
INSERT INTO `master_inventory_child` VALUES ('150', '22', '0', 'cycle', '15', 'HAPPY', 'MULTI', '14\"', 'Select Item Name', '2525', '378.75', '0', '0', '0', '5,7', '3', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('151', '22', '0', 'cycle', '15', 'BOW-TIE', 'MULTI', '16\"', 'Select Item Name', '2625', '393.75', '0', '0', '0', '5,7', '3', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('152', '22', '0', 'cycle', '15', 'CROWN', 'MULTI', '16\"', 'Select Item Name', '3150', '472.5', '0', '0', '0', '5,7', '3', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('153', '22', '0', 'cycle', '15', 'PC', 'MULTI', '16\"', 'Select Item Name', '2550', '382.5', '0', '0', '0', '5,7', '3', '3', '1');
INSERT INTO `master_inventory_child` VALUES ('154', '22', '0', 'cycle', '15', 'CROWN', 'MULTI', '20\"', 'Select Item Name', '3400', '510', '0', '0', '0', '5,7', '3', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('155', '22', '0', 'cycle', '15', 'CROWN', 'MULTI', '14\"', 'Select Item Name', '2950', '590', '0', '0', '0', '5,7', '4', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('156', '22', '0', 'cycle', '15', 'RAPID', 'MULTI', '14\"', 'Select Item Name', '2850', '570', '0', '0', '0', '5,7', '4', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('157', '22', '0', 'cycle', '15', 'PACE', 'MULTI', '16\"', 'Select Item Name', '2825', '565', '0', '0', '0', '5,7', '4', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('158', '22', '0', 'cycle', '15', 'CX', 'MULTI', '20\"', 'Select Item Name', '2850', '570', '0', '0', '0', '5,7', '4', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('159', '22', '0', 'cycle', '15', 'FORCE 10', 'MULTI', '20\"', 'Select Item Name', '2925', '585', '0', '0', '0', '5,7', '4', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('160', '23', '0', 'cycle', '8', 'AURA', 'SILVER-BLUE', '24\"', 'Select Item Name', '3305', '165.25', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('161', '23', '0', 'cycle', '8', 'ELITE', 'HOT RED', '24\"', 'Select Item Name', '3455', '172.75', '0', '0', '0', '5,7', '1', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('162', '23', '0', 'cycle', '8', 'MILE STONE', 'GREEN-BLACK', '24\"', 'Select Item Name', '3250', '162.5', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('163', '23', '0', 'cycle', '8', 'JET LINER', 'COPPER', '24\"', 'Select Item Name', '3200', '160', '0', '0', '0', '5,7', '1', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('164', '23', '0', 'cycle', '8', 'CRUZE', 'HOT RED', '24\"', 'Select Item Name', '3280', '164', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('165', '23', '0', 'cycle', '8', 'CRUZE', 'SILVER-BLUE', '24\"', 'Select Item Name', '3280', '164', '0', '0', '0', '5,7', '1', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('166', '23', '0', 'cycle', '8', 'JET LINER', 'SILVER-BLUE', '24\"', 'Select Item Name', '3200', '160', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('167', '23', '0', 'cycle', '8', 'EXTRUSION', 'BLUE', '24\"', 'Select Item Name', '3440', '172', '0', '0', '0', '5,7', '1', '-2', '1');
INSERT INTO `master_inventory_child` VALUES ('168', '23', '0', 'cycle', '8', 'CHARM', 'BURGUNDY', '26\"', 'Select Item Name', '3360', '168', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('169', '23', '0', 'cycle', '8', 'LUST', 'S.BLUE', '26\"', 'Select Item Name', '3465', '173.25', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('170', '23', '0', 'cycle', '8', 'CHARLIE', 'PURPLE', '26\"', 'Select Item Name', '3410', '170.5', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('171', '23', '0', 'cycle', '8', 'BEETLE', 'SKY BLUE', '26\"', 'Select Item Name', '3440', '172', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('172', '23', '0', 'cycle', '8', 'BUTTERFLY', 'PINK', '26\"', 'Select Item Name', '3550', '177.5', '0', '0', '0', '5,7', '1', '-2', '1');
INSERT INTO `master_inventory_child` VALUES ('173', '23', '0', 'cycle', '8', 'BUTTERFLY', 'BABIE PINK', '24\"', 'Select Item Name', '3385', '169.25', '0', '0', '0', '5,7', '1', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('174', '23', '0', 'cycle', '8', 'BEETLE', 'SKY BLUE', '24\"', 'Select Item Name', '3330', '166.5', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('175', '23', '0', 'cycle', '8', 'REDOX', 'WHITE-BLUE', '26\"', 'Select Item Name', '4020', '201', '0', '0', '0', '5,7', '1', '-3', '1');
INSERT INTO `master_inventory_child` VALUES ('176', '23', '0', 'cycle', '8', 'BOUNTY SPORTS', 'HOT RED', '26\"', 'Select Item Name', '3850', '192.5', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('177', '23', '0', 'cycle', '8', 'BOUNTY (IBC)', 'HOT RED', '26\"', 'Select Item Name', '3910', '195.5', '0', '0', '0', '5,7', '1', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('178', '23', '0', 'cycle', '8', 'CUBA SPORTS', 'S.BLUE-SILVER', '26\"', 'Select Item Name', '3940', '197', '0', '0', '0', '5,7', '1', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('179', '23', '0', 'cycle', '8', 'SKYTOP', 'PITCH', '26\"', 'Select Item Name', '3385', '169.25', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('180', '23', '0', 'cycle', '8', 'EXTRUSION', 'HOT RED', '26\"', 'Select Item Name', '3490', '174.5', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('181', '23', '0', 'cycle', '8', 'ELITE', 'HOT RED', '26\"', 'Select Item Name', '3510', '175.5', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('182', '23', '0', 'cycle', '8', 'JALPARI', 'S.BLUE', '20\"', 'Select Item Name', '2580', '129', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('183', '23', '0', 'cycle', '8', 'JAX', 'BLUE', '20\"', 'Select Item Name', '2410', '120.5', '0', '0', '0', '5,7', '1', '-2', '1');
INSERT INTO `master_inventory_child` VALUES ('184', '23', '0', 'cycle', '8', 'X ONE', 'GREEN-BLACK', '26\"', 'Select Item Name', '3440', '172', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('185', '23', '0', 'cycle', '8', 'X ONE', 'COPPER', '26\"', 'Select Item Name', '3440', '172', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('186', '23', '0', 'cycle', '8', 'UNIQUE', 'SILVER-BLUE', '26\"', 'Select Item Name', '3225', '161.25', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('187', '23', '0', 'cycle', '8', 'UNIQUE', 'YELLOW-BLACK', '26\"', 'Select Item Name', '3225', '161.25', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('188', '23', '0', 'cycle', '8', 'SKYTOP', 'CHAINA RED', '26\"', 'Select Item Name', '3385', '169.25', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('189', '23', '0', 'cycle', '8', 'CRUZE', 'WHITE-GREEN', '26\"', 'Select Item Name', '3330', '166.5', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('190', '23', '0', 'cycle', '8', 'INFERNO', 'BLUE', '26\"', 'Select Item Name', '3465', '173.25', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('191', '23', '0', 'cycle', '8', 'UNIQUE', 'HOT RED', '26\"', 'Select Item Name', '3225', '161.25', '0', '0', '0', '5,7', '1', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('192', '23', '0', 'cycle', '8', 'UNIQUE', 'PITCH', '26\"', 'Select Item Name', '3225', '161.25', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('193', '23', '0', 'cycle', '8', 'EXTRUSION', 'BLACK', '26\"', 'Select Item Name', '3490', '174.5', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('194', '23', '0', 'cycle', '8', 'X FORCE', 'CREAM-BROWN', '26\"', 'Select Item Name', '3385', '169.25', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('195', '24', '171', 'cycle', '8', 'BEETLE', 'SKY BLUE', '26\"', 'Select Item Name', '3440', '172', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('196', '24', '187', 'cycle', '8', 'UNIQUE', 'YELLOW-BLACK', '26\"', 'Select Item Name', '3225', '161.25', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('197', '24', '167', 'cycle', '8', 'EXTRUSION', 'BLUE', '24\"', 'Select Item Name', '3440', '172', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('198', '24', '167', 'cycle', '8', 'EXTRUSION', 'BLUE', '24\"', 'Select Item Name', '3440', '172', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('199', '24', '161', 'cycle', '8', 'ELITE', 'HOT RED', '24\"', 'Select Item Name', '3455', '172.75', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('200', '24', '0', 'cycle', '8', 'ELITE', 'SILVER-BLUE', '24\"', 'Select Item Name', '3455', '172.75', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('201', '24', '175', 'cycle', '8', 'REDOX', 'WHITE-BLUE', '26\"', 'Select Item Name', '4020', '201', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('202', '24', '173', 'cycle', '8', 'BUTTERFLY', 'BABIE PINK', '24\"', 'Select Item Name', '3385', '169.25', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('203', '24', '0', 'cycle', '8', 'STARLEY', 'PINK', '20\"', 'Select Item Name', '2625', '262.5', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('204', '24', '172', 'cycle', '8', 'BUTTERFLY', 'PINK', '26\"', 'Select Item Name', '3550', '355', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('205', '24', '175', 'cycle', '8', 'REDOX', 'WHITE-BLUE', '26\"', 'Select Item Name', '4020', '402', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('206', '24', '0', 'cycle', '8', 'CRUZE NEW', 'HOT RED', '26\"', 'Select Item Name', '3330', '333', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('207', '24', '175', 'cycle', '8', 'REDOX', 'WHITE-BLUE', '26\"', 'Select Item Name', '4020', '402', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('208', '24', '0', 'cycle', '8', 'AURA', 'CHAINA RED', '24\"', 'Select Item Name', '3305', '330.5', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('209', '24', '164', 'cycle', '8', 'CRUZE', 'HOT RED', '24\"', 'Select Item Name', '3280', '328', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('210', '24', '0', 'cycle', '8', 'QUICK', 'BLUE', '24\"', 'Select Item Name', '2900', '290', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('211', '24', '173', 'cycle', '8', 'BUTTERFLY', 'BABIE PINK', '24\"', 'Select Item Name', '3385', '338.5', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('212', '24', '172', 'cycle', '8', 'BUTTERFLY', 'PINK', '26\"', 'Select Item Name', '3550', '355', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('213', '24', '170', 'cycle', '8', 'CHARLIE', 'PURPLE', '26\"', 'Select Item Name', '3410', '341', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('214', '24', '183', 'cycle', '8', 'JAX', 'BLUE', '20\"', 'Select Item Name', '2410', '241', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('215', '24', '206', 'cycle', '8', 'CRUZE NEW', 'HOT RED', '26\"', 'Select Item Name', '3330', '333', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('216', '24', '183', 'cycle', '8', 'JAX', 'BLUE', '20\"', 'Select Item Name', '2410', '241', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('217', '24', '175', 'cycle', '8', 'REDOX', 'WHITE-BLUE', '26\"', 'Select Item Name', '4020', '201', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('218', '24', '161', 'cycle', '8', 'ELITE', 'HOT RED', '24\"', 'Select Item Name', '3455', '172.75', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('219', '24', '174', 'cycle', '8', 'BEETLE', 'SKY BLUE', '24\"', 'Select Item Name', '3330', '166.5', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('220', '24', '0', 'cycle', '8', 'INFERNO', 'SILVER BLACK', '26\"', 'Select Item Name', '3465', '346.5', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('221', '24', '0', 'cycle', '8', 'CRONIC', 'BLACK', '24\"', 'Select Item Name', '2900', '145', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('222', '24', '0', 'cycle', '8', 'DRIFT', 'HOT RED', '24\"', 'Select Item Name', '2950', '147.5', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('223', '24', '0', 'cycle', '8', 'CUBA IBC', 'S.BLUE-SILVER', '26\"', 'Select Item Name', '4000', '400', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('224', '24', '177', 'cycle', '8', 'BOUNTY (IBC)', 'HOT RED', '26\"', 'Select Item Name', '3910', '391', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('225', '24', '0', 'cycle', '8', 'X ONE', 'CHAINA RED', '26\"', 'Select Item Name', '3440', '172', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('226', '24', '0', 'cycle', '8', 'CRONIC', 'BLACK', '26\"', 'Select Item Name', '2980', '149', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('227', '24', '0', 'cycle', '8', 'DRIFT', 'HOT RED', '26\"', 'Select Item Name', '3000', '150', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('228', '24', '0', 'cycle', '8', 'QUICK', 'BLUE', '24\"', 'Select Item Name', '2950', '147.5', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('229', '24', '191', 'cycle', '8', 'UNIQUE', 'HOT RED', '26\"', 'Select Item Name', '3225', '161.25', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('230', '25', '18', 'cycle', '10', 'TRANCE PRO', 'BLUE', 'MEDIUM', 'Select Item Name', '11000', '1100', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('231', '26', '89', 'cycle', '12', 'MISCEO (M.S.)', 'BLACK (M.FINISH)', '700 C', 'Select Item Name', '19275', '385.5', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('232', '26', '0', 'cycle', '22', 'PANAMAO X2', 'MET GREY', '700 C', 'Select Item Name', '24770', '495.4', '0', '0', '0', '8', '1', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('233', '26', '0', 'cycle', '12', 'TALUS 1.5', 'MET GREY', '27.5\"', 'Select Item Name', '18750', '750', '0', '0', '0', '8', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('234', '27', '0', 'cycle', '15', 'JUS BIKE M.SPEED', 'WHITE', '26\"', 'Select Item Name', '6900', '690', '0', '0', '0', '10', '10', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('235', '28', '88', 'cycle', '13', 'LAND 8.10 (M.S. / D.D.)', 'MET GREY', '700 C', 'Select Item Name', '32375', '3237.5', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('236', '28', '65', 'spare', '11', '0', '0', 'select', 'TUBE 700 * 18-25 C MAXXIS', '190', '47.5', '0', '0', '0', '5,7', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('237', '29', '25', 'cycle', '9', 'CYBOT', 'GREEN-BLACK', '20\"', 'Select Item Name', '3225', '645', '0', '0', '0', '5,7', '4', '4', '1');
INSERT INTO `master_inventory_child` VALUES ('238', '29', '4', 'cycle', '9', 'MACH CITY I BIKE', 'RED', '26\"', 'Select Item Name', '5665', '566.5', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('239', '29', '29', 'cycle', '9', 'RODEO GEOLANDER (M.S./F.D.)', 'WHITE', '24\"', 'Select Item Name', '7520', '376', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('240', '29', '0', 'cycle', '9', 'RODEO HARDLINER M.SPEED', 'MET GREY', '26\"', 'Select Item Name', '6970', '348.5', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('241', '29', '0', 'cycle', '9', 'RODEO ZXR M.SPEED', 'MULTI', '20\"', 'Select Item Name', '5040', '504', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('242', '30', '0', 'cycle', '25', 'AGGRESSOR SPORT ', 'MET GREY', '27.5\"', 'Select Item Name', '20200', '2020', '0', '0', '0', '5,7', '2', '-1', '1');
INSERT INTO `master_inventory_child` VALUES ('243', '30', '8', 'cycle', '10', 'TRANCE PRO ', 'BLACK', 'MEDIUM', 'Select Item Name', '11110', '1111', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('244', '31', '58', 'spare', '11', '0', '0', 'Select', 'TUBE 700 * 35-45 C (MAXXIS)', '495', '39.6', '0', '0', '0', '8', '4', '4', '1');
INSERT INTO `master_inventory_child` VALUES ('245', '31', '0', 'spare', '11', '0', '0', 'Select', 'V BRAKES SET STEEL', '88', '8.8', '0', '0', '0', '8', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('246', '31', '119', 'spare', '11', '0', '0', 'Select', 'WATTER BOTTLE 500 ML PVC RALEIGH', '165', '66', '0', '0', '0', '8', '20', '20', '1');
INSERT INTO `master_inventory_child` VALUES ('247', '31', '0', 'spare', '11', '0', '0', 'Select', 'WATER BOTTLE 700 ML POLISPORT', '105', '42', '0', '0', '0', '8', '20', '14', '1');
INSERT INTO `master_inventory_child` VALUES ('248', '31', '55', 'spare', '11', '0', '0', 'Select', 'BICYCLE STAND WALL HANGING DOUBLE - 02', '475', '95', '0', '0', '0', '8', '10', '10', '1');
INSERT INTO `master_inventory_child` VALUES ('249', '31', '76', 'spare', '11', '0', '0', 'Select', 'LIGHT HL 112 W', '885', '88.5', '0', '0', '0', '8', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('250', '31', '0', 'spare', '11', '0', '0', 'Select', 'TOP TUBE BAG TOTEM', '375', '15', '0', '0', '0', '8', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('251', '31', '0', 'spare', '11', '0', '0', 'Select', 'CHAIN WHEEL SET TCWC 28/38/48 T', '190', '3.8', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('252', '31', '0', 'spare', '11', '0', '0', 'Select', 'CHAIN WHEEL 44 T DOUBLE GUARD 1/8', '165', '6.6', '0', '0', '0', '8', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('253', '31', '0', 'spare', '11', '0', '0', 'Select', 'FREE WHEEL FRICTION FREE 7 SPEED INDEX', '110', '11', '0', '0', '0', '8', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('254', '31', '0', 'spare', '11', '0', '0', 'Select', 'DERAILER REAR 7 SPEED SC INDEX', '110', '11', '0', '0', '0', '8', '5', '4', '1');
INSERT INTO `master_inventory_child` VALUES ('255', '31', '0', 'spare', '11', '0', '0', 'Select', 'V BRAKES SET ALLOY ', '140', '14', '0', '0', '0', '8', '5', '3', '1');
INSERT INTO `master_inventory_child` VALUES ('256', '31', '0', 'spare', '11', '0', '0', 'Select', 'HANDLE STEEM ALLOY 31.8 MM', '285', '11.4', '0', '0', '0', '8', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('257', '31', '0', 'spare', '11', '0', '0', 'Select', 'SEAT QUICK RELEASE CLAMP 31.8 MM', '50', '5', '0', '0', '0', '8', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('258', '31', '0', 'spare', '11', '0', '0', 'Select', 'BOTTLE CAGE SILVER FINISH', '72', '57.6', '0', '0', '0', '8', '40', '40', '1');
INSERT INTO `master_inventory_child` VALUES ('259', '31', '0', 'spare', '11', '0', '0', 'Select', 'BRAKE SHOE ROAD BIKE', '26', '5.2', '0', '0', '0', '8', '10', '10', '1');
INSERT INTO `master_inventory_child` VALUES ('260', '31', '0', 'spare', '11', '0', '0', 'Select', 'HANDLE GRIP BLACK G 327', '72', '14.4', '0', '0', '0', '8', '10', '8', '1');
INSERT INTO `master_inventory_child` VALUES ('261', '31', '0', 'spare', '11', '0', '0', 'Select', 'HANDLE GRIP BLACK-N COLOURED', '155', '15.5', '0', '0', '0', '8', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('262', '31', '0', 'spare', '11', '0', '0', 'Select', 'TUBE 27.5 * 190 / 2.125 KENDA', '155', '18.6', '0', '0', '0', '8', '6', '6', '1');
INSERT INTO `master_inventory_child` VALUES ('263', '32', '0', 'cycle', '11', 'TRIGGER (M.S. / F.D.)', 'MULTI', '20\"', 'Select Item Name', '4620', '277.2', '0', '0', '0', '8', '3', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('264', '32', '129', 'cycle', '12', 'MONSTER X MS SPEED EF D.D.', 'WHITE', '24\"', 'Select Item Name', '8725', '698', '0', '0', '0', '8', '4', '4', '1');
INSERT INTO `master_inventory_child` VALUES ('265', '32', '127', 'cycle', '12', 'TERRAIN 30 (M.S. / D.D.)', 'BLACK', '26\"', 'Select Item Name', '11275', '451', '0', '0', '0', '8', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('266', '32', '0', 'cycle', '12', 'ROXIO 1.0', 'BLACK (M.FINISH)', '26\"', 'Select Item Name', '15275', '305.5', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('267', '32', '0', 'cycle', '12', 'FREELIFE', 'MULTI', '20\"', 'Select Item Name', '4900', '98', '0', '0', '0', '8', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('268', '32', '0', 'cycle', '11', 'DIRT JUMPER D.D.', 'BLACK', '26\"', 'Select Item Name', '11125', '890', '0', '0', '0', '8', '4', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('269', '32', '0', 'cycle', '12', 'TERRAIN 30 (M.S. / D.D.)', 'BLACK', '27.5\"', 'Select Item Name', '12775', '1022', '0', '0', '0', '8', '4', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('270', '33', '227', 'cycle', '8', 'DRIFT', 'HOT RED', '26\"', 'Select Item Name', '3000', '150', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('271', '33', '177', 'cycle', '8', 'BOUNTY (IBC)', 'HOT RED', '26\"', 'Select Item Name', '3910', '195.5', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('272', '33', '193', 'cycle', '8', 'EXTRUSION', 'BLACK', '26\"', 'Select Item Name', '3490', '174.5', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('273', '33', '163', 'cycle', '8', 'JET LINER', 'COPPER', '24\"', 'Select Item Name', '3200', '160', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('274', '33', '165', 'cycle', '8', 'CRUZE', 'SILVER-BLUE', '24\"', 'Select Item Name', '3280', '164', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('275', '34', '0', 'spare', '10', '0', '0', 'Select', 'JERSEY XMR RIDE 9 SMALL/MEDIUM/LARGE/EXTRA LARGE', '530', '106', '0', '0', '0', '5,7', '4', '4', '1');
INSERT INTO `master_inventory_child` VALUES ('276', '34', '0', 'spare', '10', '0', '0', 'Select', 'BAG HANDLE BAR MONTRA XMR - W', '485', '48.5', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('277', '34', '0', 'spare', '10', '0', '0', 'Select', 'BAG SADDLE XMR SB 101 BLACK', '230', '23', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('278', '34', '0', 'spare', '10', '0', '0', 'Select', 'BAG TOP TUBE MONTRA XMR TB 101', '306', '30.6', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('279', '34', '0', 'spare', '10', '0', '0', 'Select', 'LIGHT FRONT XMR JY 246 - 3W STROBE 1.3', '449', '112.25', '0', '0', '0', '5,7', '5', '3', '1');
INSERT INTO `master_inventory_child` VALUES ('280', '34', '0', 'spare', '10', '0', '0', 'Select', 'LIGHT REAR XMR JY 2LA STREAK 3.0', '459', '114.75', '0', '0', '0', '5,7', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('281', '34', '0', 'spare', '10', '0', '0', 'Select', 'LIGHT REAR XMR JY 528 1 STREAK 2.0', '316', '79', '0', '0', '0', '5,7', '5', '4', '1');
INSERT INTO `master_inventory_child` VALUES ('282', '34', '0', 'spare', '10', '0', '0', 'Select', 'LIGHT FRONT AND REAR XMR JY 3005 STARP', '189', '47.25', '0', '0', '0', '5,7', '5', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('283', '34', '282', 'spare', '10', '0', '0', 'Select', 'LIGHT FRONT AND REAR XMR JY 3005 STARP', '153', '38.25', '0', '0', '0', '5,7', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('284', '34', '0', 'spare', '10', '0', '0', 'Select', 'LIGHT FRONT XMR JY 286 STROBE 5.0', '178', '44.5', '0', '0', '0', '5,7', '5', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('285', '34', '0', 'spare', '10', '0', '0', 'Select', 'LIGHT FRONT XMR JY 808 11 STRIKE 5.0', '200', '10', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('310', '36', '0', 'cycle', '10', 'TRANCE', 'BLUE', 'SMALL', 'Select Item Name', '11615', '580.75', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('311', '36', '3', 'cycle', '10', 'TRANCE', 'BLUE', 'MEDIUM', 'Select Item Name', '11615', '580.75', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('312', '36', '0', 'cycle', '10', 'TRANCE PRO', 'BLACK', 'SMALL', 'Select Item Name', '11110', '555.5', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('313', '36', '8', 'cycle', '10', 'TRANCE PRO', 'BLACK', 'MEDIUM', 'Select Item Name', '11110', '555.5', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('314', '36', '14', 'cycle', '10', 'ROCK 1.1', 'GREY', 'MEDIUM', 'Select Item Name', '14039', '701.95', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('315', '36', '14', 'cycle', '10', 'ROCK 1.1', 'GREY', 'MEDIUM', 'Select Item Name', '14039', '701.95', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('316', '36', '0', 'cycle', '10', 'ROCK 1.1 D', 'GREEN', 'SMALL', 'Select Item Name', '14897.5', '744.875', '0', '0', '0', '5,7', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('317', '36', '316', 'cycle', '10', 'ROCK 1.1 D', 'GREEN', 'SMALL', 'Select Item Name', '14897.5', '744.875', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('318', '37', '11', 'cycle', '10', 'BLUES 1.1', 'SILVER', 'SMALL', 'Select Item Name', '14412', '720.6', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('319', '38', '0', 'cycle', '15', 'TRC MAGIC CAR HLX 3355', 'MULTI', 'TOY', 'Select Item Name', '975', '0', '0', '0', '0', '11', '4', '3', '1');
INSERT INTO `master_inventory_child` VALUES ('320', '38', '0', 'cycle', '15', 'TRC MAGIC CAR HLX 9010', 'MULTI', 'TOY', 'Select Item Name', '950', '0', '0', '0', '0', '11', '4', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('321', '38', '0', 'cycle', '15', 'TRC MAGIC CAR HLX 1568', 'MULTI', 'TOY', 'Select Item Name', '900', '0', '0', '0', '0', '11', '4', '4', '1');
INSERT INTO `master_inventory_child` VALUES ('322', '39', '0', 'cycle', '15', 'TRC HLX', 'MULTI', 'TOY', 'Select Item Name', '1550', '310', '0', '0', '0', '5,7', '4', '3', '1');
INSERT INTO `master_inventory_child` VALUES ('323', '39', '322', 'cycle', '15', 'TRC HLX', 'MULTI', 'TOY', 'Select Item Name', '1550', '310', '0', '0', '0', '5,7', '4', '4', '1');
INSERT INTO `master_inventory_child` VALUES ('324', '39', '322', 'cycle', '15', 'TRC HLX', 'MULTI', 'TOY', 'Select Item Name', '800', '240', '0', '0', '0', '5,7', '6', '6', '1');
INSERT INTO `master_inventory_child` VALUES ('325', '40', '222', 'cycle', '8', 'DRIFT', 'HOT RED', '24\"', 'Select Item Name', '2950', '147.5', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('326', '40', '223', 'cycle', '8', 'CUBA IBC', 'S.BLUE-SILVER', '26\"', 'Select Item Name', '4000', '400', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('327', '41', '97', 'spare', '11', '0', '0', 'Select', 'BICYCLE PARKING STAND FRONT ', '300', '15', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('328', '41', '54', 'spare', '11', '0', '0', 'Select', 'BICYCLE STAND WALL HANGING SINGLE', '250', '12.5', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('329', '41', '97', 'spare', '11', '0', '0', 'Select', 'BICYCLE PARKING STAND FRONT ', '500', '25', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('330', '41', '55', 'spare', '11', '0', '0', 'Select', 'BICYCLE STAND WALL HANGING DOUBLE - 02', '335', '33.5', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('331', '41', '97', 'spare', '11', '0', '0', 'Select', 'BICYCLE PARKING STAND FRONT ', '475', '23.75', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('332', '42', '0', 'cycle', '11', 'HURRICANE  D/DISK', 'HOT RED', '24\"', 'Select Item Name', '7125', '285', '0', '0', '0', '8', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('333', '42', '0', 'cycle', '11', 'HAZARD-EF (M.S.)', 'BLACK', '24\"', 'Select Item Name', '7775', '311', '0', '0', '0', '8', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('334', '42', '0', 'cycle', '11', 'XC 101 D/ DISK', 'BLACK', '26\"', 'Select Item Name', '6850', '274', '0', '0', '0', '8', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('335', '42', '0', 'cycle', '11', 'EXPLORE  M SPEED   F/ DISK', 'HOT RED', '26\"', 'Select Item Name', '7075', '283', '0', '0', '0', '8', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('337', '45', '0', 'cycle', '8', 'BUTTERFLY', 'PINK', '26\"', 'Select Item Name', '3385', '338.5', '0', '0', '0', '5,7', '2', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('338', '46', '0', 'cycle', '8', 'SKID', 'RED', '20\"', 'Select Item Name', '2515', '251.5', '0', '0', '0', '5,7', '2', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('339', '46', '0', 'cycle', '8', 'STARLEY', 'PINK', '20\"', 'Select Item Name', '2625', '262.5', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('340', '46', '0', 'cycle', '8', 'CUBA IBC', 'S.BLUE-SILVER', '24\"', 'Select Item Name', '3950', '395', '0', '0', '0', '5,7', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('341', '47', '0', 'cycle', '12', 'BIG SAM', 'BLACK (M.FINISH)', '26\"', 'Select Item Name', '14525', '581', '0', '0', '0', '8', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('342', '47', '61', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', 'Select Item Name', '4120', '2472', '0', '0', '0', '8', '30', '30', '1');
INSERT INTO `master_inventory_child` VALUES ('344', '48', '0', 'cycle', '11', 'RACERSTAR M/S', 'BLACK (M.FINISH)', 'LARGE', 'Select Item Name', '9575', '383', '0', '0', '0', '8', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('345', '48', '63', 'spare', '11', '0', '0', 'Select', 'TYRE 700 *35 C MAXXIS', '495', '49.5', '0', '0', '0', '8', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('346', '48', '63', 'spare', '11', '0', '0', 'Select', 'TYRE 700 *35 C MAXXIS', '495', '49.5', '0', '0', '0', '8', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('347', '48', '0', 'spare', '11', '0', '0', 'Select', 'TYRE 700 * 32 C MAXXIS', '495', '49.5', '0', '0', '0', '8', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('348', '48', '0', 'spare', '11', '0', '0', 'Select', 'TYRE 700 *23 C MAXXIS FOLDABLE', '715', '71.5', '0', '0', '0', '8', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('349', '48', '0', 'spare', '11', '0', '0', 'Select', 'TYRE 700 * 38C KENDA', '275', '11', '0', '0', '0', '8', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('350', '48', '0', 'spare', '11', 'INNOVATE (M.S.)', 'WHITE', 'select', 'TYRE 700 * 35 C KENDA', '260', '26', '0', '0', '0', '8', '5', '5', '1');
INSERT INTO `master_inventory_child` VALUES ('351', '48', '0', 'spare', '11', '0', '0', 'Select', 'TUBE 700 * 18-25 C MAXXIS', '170', '34', '0', '0', '0', '8', '10', '10', '1');
INSERT INTO `master_inventory_child` VALUES ('352', '48', '0', 'spare', '11', '0', '0', 'Select', 'TUBE 700 * 35-45 C (MAXXIS)', '170', '68', '0', '0', '0', '8', '20', '20', '1');
INSERT INTO `master_inventory_child` VALUES ('353', '48', '0', 'spare', '11', '0', '0', 'Select', 'GRIP SHIFTER 7 SPEED (RIGHT YD-K36)', '130', '26', '0', '0', '0', '8', '10', '10', '1');
INSERT INTO `master_inventory_child` VALUES ('355', '49', '0', 'cycle', '10', 'MONTRA BLUES 1.2', 'BLACK (M.FINISH)', 'SMALL', 'Select Item Name', '17510', '875.5', '0', '0', '0', '5,7', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('356', '49', '0', 'cycle', '10', 'MONTRA ROCK 1.0 V2 18 SPEED', 'ORRANGE', 'LARGE', 'Select Item Name', '8240', '824', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('357', '50', '0', 'cycle', '8', 'REDOX', 'WHITE', '24\"', 'Select Item Name', '3970', '397', '0', '0', '0', '5,7', '2', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('358', '50', '0', 'cycle', '8', 'BOUNTY (IBC)', 'HOT RED', '24\"', 'Select Item Name', '3860', '386', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('359', '51', '0', 'cycle', '26', 'ACE-FX  16', 'PINK', '16\"', 'Select Item Name', '4950', '99', '0', '0', '0', '8', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('360', '51', '0', 'cycle', '26', 'ACE-ZX 20', 'red', '20\"', 'Select Item Name', '5500', '110', '0', '0', '0', '8', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('361', '51', '0', 'cycle', '26', 'ACE- SX 14', 'BLACK (M.FINISH)', '14\"', 'Select Item Name', '4170', '83.4', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('362', '51', '0', 'cycle', '26', 'NEO-24*15 WHITE', 'WHITE', '24\"', 'Select Item Name', '10400', '208', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('363', '51', '0', 'cycle', '26', 'NEO-24*15 RED', 'red', '24\"', 'Select Item Name', '13300', '266', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('364', '51', '0', 'cycle', '26', 'NEO-26*20 RED', 'red', '26\"', 'Select Item Name', '14500', '290', '0', '0', '0', '8', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('365', '51', '0', 'cycle', '26', 'NEO-26*18 WHITE', 'WHITE', '26\"', 'Select Item Name', '14500', '290', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('366', '52', '154', 'cycle', '15', 'CROWN', 'MULTI', '20\"', 'Select Item Name', '3475', '69.5', '0', '0', '0', '10', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('367', '52', '0', 'cycle', '15', 'ELDORADO ', 'BLACK', '24\"', 'Select Item Name', '7400', '148', '0', '0', '0', '10', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('368', '52', '0', 'cycle', '15', 'TRIUM', 'BLACK', '26\"', 'Select Item Name', '9100', '182', '0', '0', '0', '10', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('369', '52', '0', 'cycle', '15', 'SENORITA', 'PINK', '24\"', 'Select Item Name', '4530', '90.6', '0', '0', '0', '10', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('370', '52', '45', 'cycle', '15', 'JUST BIKE (S.S.)', 'WHITE', '26\"', 'Select Item Name', '4900', '294', '0', '0', '0', '10', '6', '6', '1');
INSERT INTO `master_inventory_child` VALUES ('371', '53', '292', 'cycle', '23', 'HT J1 ', 'WHITE', '24\"', 'Select Item Name', '7420', '148.4', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('372', '53', '293', 'cycle', '23', 'HT J1 ', 'BLACK-GREEN', '24\"', 'Select Item Name', '7420', '148.4', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('373', '53', '0', 'cycle', '23', 'DS J1 ', 'ORRANGE', '24\"', 'Select Item Name', '6951', '139.02', '0', '0', '0', '8', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('374', '53', '0', 'cycle', '23', 'DS J1 ', 'BLUE', '24\"', 'Select Item Name', '6951', '139.02', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('375', '53', '0', 'cycle', '23', 'HT 1 ', 'WHITE', '26\"', 'Select Item Name', '8109', '324.36', '0', '0', '0', '8', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('376', '53', '296', 'cycle', '23', 'HT 1 ', 'BLUE', '26\"', 'Select Item Name', '8109', '162.18', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('377', '53', '297', 'cycle', '23', 'HT 1 ', 'red', '26\"', 'Select Item Name', '8109', '162.18', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('378', '53', '302', 'cycle', '23', 'DS 1', 'WHITE-GREEN', '26\"', 'Select Item Name', '8194', '327.76', '0', '0', '0', '8', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('379', '53', '306', 'cycle', '23', 'H2 CROSS', 'BLACK', 'LARGE', 'Select Item Name', '12843', '1027.44', '0', '0', '0', '8', '4', '4', '1');
INSERT INTO `master_inventory_child` VALUES ('380', '54', '0', 'cycle', '26', 'ROAM 2D', 'GREY', 'LARGE', 'Select Item Name', '34600', '692', '0', '0', '0', '8', '1', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('381', '48', '125', 'cycle', '11', 'INNOVATE (M.S.)', 'WHITE', '700 C', 'Select Item Name', '11225', '449', '0', '0', '0', '8', '2', '0', '1');
INSERT INTO `master_inventory_child` VALUES ('382', '49', '0', 'cycle', '10', 'MONTRA BLUES 1.2', 'BLACK (M.FINISH)', 'MEDIUM', 'Select Item Name', '17510', '1751', '0', '0', '0', '5,7', '2', '2', '1');
INSERT INTO `master_inventory_child` VALUES ('384', '55', '0', 'cycle', '23', 'K1 S.S.', 'red', '20\"', 'Select Item Name', '4097', '81.94', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('385', '55', '0', 'cycle', '23', 'K1 S.S.', 'YELLOW', '20\"', 'Select Item Name', '4097', '81.94', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('386', '55', '0', 'cycle', '23', 'K3 S.S.', 'PINK', '20\"', 'Select Item Name', '4414', '88.28', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('387', '55', '0', 'cycle', '23', 'K3 S.S.', 'BLUE', '20\"', 'Select Item Name', '4414', '88.28', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('388', '55', '0', 'cycle', '23', 'K6 S.S.', 'WHITE-RED', '20\"', 'Select Item Name', '5018', '100.36', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('389', '55', '0', 'cycle', '23', 'K6 S.S.', 'red', '20\"', 'Select Item Name', '5018', '100.36', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('390', '55', '0', 'cycle', '23', 'HT J1 ', 'WHITE', '24\"', 'Select Item Name', '7420', '148.4', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('391', '55', '0', 'cycle', '23', 'HT J1 ', 'BLACK-GREEN', '24\"', 'Select Item Name', '7420', '148.4', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('392', '55', '0', 'cycle', '23', 'HT1 SWIFT', 'BLACK', '26\"', 'Select Item Name', '8109', '162.18', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('393', '55', '0', 'cycle', '23', 'HT 1 ', 'BLUE', '26\"', 'Select Item Name', '8109', '162.18', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('394', '55', '0', 'cycle', '23', 'HT 1 ', 'red', '26\"', 'Select Item Name', '8109', '162.18', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('395', '55', '0', 'cycle', '23', 'HT 1 ', 'WHITE', '26\"', 'Select Item Name', '8109', '162.18', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('396', '55', '0', 'cycle', '23', 'HT 2 HARD TAIL', 'BLACK-GREEN', '26\"', 'Select Item Name', '9466', '189.32', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('397', '55', '0', 'cycle', '23', 'HT 3 HARD TRAIL', 'WHITE-RED', '26\"', 'Select Item Name', '10277', '205.54', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('398', '55', '0', 'cycle', '23', 'HT 3 HARD TRAIL', 'WHITE', '26\"', 'Select Item Name', '10277', '205.54', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('399', '55', '0', 'cycle', '23', 'HT 4 ', 'PURPLE', '26\"', 'Select Item Name', '12239', '244.78', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('400', '55', '0', 'cycle', '23', 'DS 1', 'ORRANGE', '26\"', 'Select Item Name', '8194', '163.88', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('401', '55', '0', 'cycle', '23', 'DS 1', 'WHITE-GREEN', '26\"', 'Select Item Name', '8194', '163.88', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('402', '55', '0', 'cycle', '23', 'H1 LITE', 'BLACK (M.FINISH)', 'MEDIUM', 'Select Item Name', '11583', '231.66', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('403', '55', '0', 'cycle', '23', 'H1 LITE', 'BLACK (M.FINISH)', 'LARGE', 'Select Item Name', '11583', '231.66', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('404', '55', '0', 'cycle', '23', 'H2 CROSS', 'BLACK', 'LARGE', 'Select Item Name', '12843', '256.86', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('405', '55', '0', 'cycle', '23', 'H2D', 'BLACK (M.FINISH)', '700 C', 'Select Item Name', '14587', '291.74', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('406', '55', '0', 'cycle', '23', 'Q1', 'WHITE-BLUE', '26\"', 'Select Item Name', '7187', '143.74', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('407', '55', '0', 'cycle', '23', 'Q1', 'PINK', '26\"', 'Select Item Name', '7187', '143.74', '0', '0', '0', '8', '1', '1', '1');
INSERT INTO `master_inventory_child` VALUES ('408', '56', '141', 'cycle', '12', 'MONSTER X (S.S.)', 'WHITE-RED', '24\"', 'Select Item Name', '1000', '130', '0', '20', '15', '7,11', '13', '13', '1');

-- ----------------------------
-- Table structure for master_invoice
-- ----------------------------
DROP TABLE IF EXISTS `master_invoice`;
CREATE TABLE `master_invoice` (
  `InvoiceID` int(11) NOT NULL AUTO_INCREMENT,
  `InvoiceNo` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Type` varchar(100) NOT NULL DEFAULT 'customer',
  `IsTinNumber` int(11) NOT NULL DEFAULT '0',
  `CustomerID` int(11) DEFAULT NULL,
  `PaymentStatus` varchar(100) DEFAULT NULL,
  `PaymentMethod` varchar(100) DEFAULT NULL,
  `Shipping` float DEFAULT NULL,
  `Discount` float DEFAULT NULL,
  `TotalPrice` float DEFAULT NULL,
  `Note` text,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`InvoiceID`)
) ENGINE=InnoDB AUTO_INCREMENT=345 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_invoice
-- ----------------------------
INSERT INTO `master_invoice` VALUES ('1', '1', '2015-10-06', 'customer', '0', '4', 'Paid', 'Cash', '0', '0', '3150', '', '1');
INSERT INTO `master_invoice` VALUES ('2', '2', '2015-10-06', 'customer', '0', '5', 'Paid', 'Cash', '0', '150.35', '2650', '', '1');
INSERT INTO `master_invoice` VALUES ('3', '3', '2015-10-06', 'customer', '0', '6', 'Paid', 'Cash', '0', '100.15', '4250', '', '1');
INSERT INTO `master_invoice` VALUES ('4', '4', '2015-12-09', 'customer', '0', '0', '', 'Cash', '0', '0', '68', 'hf gfghfgh', '1');
INSERT INTO `master_invoice` VALUES ('5', '5', '2015-10-06', 'customer', '0', '8', 'Paid', 'Cash', '49.8', '0', '600', '', '1');
INSERT INTO `master_invoice` VALUES ('6', '6', '2015-10-06', 'customer', '0', '9', 'Paid', 'Cash', '0', '0.8', '23200', '', '1');
INSERT INTO `master_invoice` VALUES ('7', '7', '2015-10-06', 'customer', '0', '10', 'Paid', 'Cash', '0', '0.3', '25900', '', '1');
INSERT INTO `master_invoice` VALUES ('8', '8', '2015-10-06', 'customer', '0', '11', 'Paid', 'Cash', '0', '161.49', '500.01', '', '1');
INSERT INTO `master_invoice` VALUES ('9', '9', '2015-10-06', 'customer', '0', '12', 'Paid', 'Cash', '99.51', '0', '4100.01', '', '1');
INSERT INTO `master_invoice` VALUES ('10', '10', '2015-10-06', 'customer', '0', '13', 'Paid', 'Cash', '0', '0.6', '390', '', '1');
INSERT INTO `master_invoice` VALUES ('11', '11', '2015-10-06', 'customer', '0', '14', 'Paid', 'Cash', '1622.9', '0', '2223.5', '', '1');
INSERT INTO `master_invoice` VALUES ('12', '12', '2015-10-06', 'customer', '0', '15', 'Paid', 'Cash', '0', '50.15', '4300', '', '1');
INSERT INTO `master_invoice` VALUES ('13', '13', '2015-10-06', 'customer', '0', '160', 'Paid', 'Cash', '0', '200.4', '5100', '', '1');
INSERT INTO `master_invoice` VALUES ('14', '14', '2015-10-06', 'customer', '0', '17', 'Paid', 'Cash', '0', '0.75', '120', '', '1');
INSERT INTO `master_invoice` VALUES ('15', '15', '2015-10-06', 'customer', '0', '18', 'Paid', 'Cash', '0', '100', '4100', '', '1');
INSERT INTO `master_invoice` VALUES ('16', '16', '2015-10-06', 'customer', '0', '19', 'Paid', 'Cash', '0', '0.35', '4900', '', '1');
INSERT INTO `master_invoice` VALUES ('17', '17', '2015-10-06', 'customer', '0', '20', 'Paid', 'Cash', '0', '0.4', '50', '', '1');
INSERT INTO `master_invoice` VALUES ('18', '18', '2015-10-06', 'customer', '0', '21', 'Paid', 'Cash', '449.2', '0', '23650', '', '1');
INSERT INTO `master_invoice` VALUES ('19', '19', '2015-10-06', 'customer', '0', '22', 'Paid', 'Cash', '0', '0.8', '12700', '', '1');
INSERT INTO `master_invoice` VALUES ('20', '20', '2015-10-06', 'customer', '0', '23', 'Pending', 'Cheque', '0', '1050', '12950.7', '', '1');
INSERT INTO `master_invoice` VALUES ('21', '21', '2015-10-06', 'customer', '0', '24', 'Paid', 'Cash', '0', '250', '4200.01', '', '1');
INSERT INTO `master_invoice` VALUES ('22', '22', '2015-10-06', 'customer', '0', '25', 'Paid', 'Cash', '0', '0', '9081.45', '', '1');
INSERT INTO `master_invoice` VALUES ('23', '23', '2015-10-06', 'customer', '0', '26', 'Paid', 'Cash', '649.85', '0', '5000', '', '1');
INSERT INTO `master_invoice` VALUES ('24', '24', '2015-10-06', 'customer', '0', '27', 'Paid', 'Cash', '0', '300.4', '5000', '', '1');
INSERT INTO `master_invoice` VALUES ('25', '25', '2015-10-06', 'customer', '0', '28', 'Paid', 'Cash', '0', '222.4', '19000', '', '1');
INSERT INTO `master_invoice` VALUES ('26', '26', '2015-10-06', 'customer', '0', '29', 'Paid', 'Cash', '0', '0', '1200.15', '', '1');
INSERT INTO `master_invoice` VALUES ('27', '27', '2015-10-06', 'customer', '0', '30', 'Paid', 'Cash', '0', '150', '9149.85', '', '1');
INSERT INTO `master_invoice` VALUES ('28', '28', '2015-10-06', 'customer', '0', '31', 'Paid', 'Cash', '0', '0', '5200.65', '', '1');
INSERT INTO `master_invoice` VALUES ('29', '29', '2015-10-06', 'customer', '0', '32', 'Paid', 'Cash', '0', '50', '4050.25', '', '1');
INSERT INTO `master_invoice` VALUES ('30', '30', '2015-10-06', 'customer', '0', '33', 'Paid', 'Cash', '0', '0', '5200.65', '', '1');
INSERT INTO `master_invoice` VALUES ('31', '31', '2015-10-07', 'customer', '0', '34', 'Paid', 'Cash', '51', '101', '5100', '', '1');
INSERT INTO `master_invoice` VALUES ('32', '32', '2015-10-07', 'customer', '0', '35', 'Paid', 'Cash', '0', '400', '4000.55', '', '1');
INSERT INTO `master_invoice` VALUES ('33', '33', '2015-10-07', 'customer', '0', '36', 'Paid', 'Cash', '0', '100', '5050', '', '1');
INSERT INTO `master_invoice` VALUES ('34', '34', '2015-10-07', 'customer', '0', '37', 'Paid', 'Cash', '0', '400', '13700.5', '', '1');
INSERT INTO `master_invoice` VALUES ('35', '35', '2015-10-07', 'customer', '0', '39', 'Paid', 'Cash', '0', '350', '11751.3', '', '1');
INSERT INTO `master_invoice` VALUES ('36', '36', '2015-10-07', 'customer', '0', '38', 'Paid', 'Cash', '0', '50', '5050.9', '', '1');
INSERT INTO `master_invoice` VALUES ('37', '37', '2015-10-07', 'customer', '0', '40', 'Paid', 'Cash', '0', '400', '4600.1', '', '1');
INSERT INTO `master_invoice` VALUES ('38', '38', '2015-10-07', 'customer', '0', '41', 'Paid', 'Cash', '0', '0', '3750.6', '', '1');
INSERT INTO `master_invoice` VALUES ('39', '39', '2015-10-07', 'customer', '0', '42', 'Paid', 'Cash', '0', '100', '4100', '', '1');
INSERT INTO `master_invoice` VALUES ('40', '40', '2015-10-07', 'customer', '0', '43', 'Paid', 'Cash', '0', '400', '3000.95', '', '1');
INSERT INTO `master_invoice` VALUES ('41', '41', '2015-10-07', 'customer', '0', '44', 'Paid', 'Cash', '100', '0', '4100.5', '', '1');
INSERT INTO `master_invoice` VALUES ('42', '42', '2015-10-07', 'customer', '0', '45', 'Paid', 'Cash', '0', '1', '23510.6', '', '1');
INSERT INTO `master_invoice` VALUES ('43', '43', '2015-10-07', 'customer', '0', '46', 'Paid', 'Cash', '0', '0.8', '23200', '', '1');
INSERT INTO `master_invoice` VALUES ('44', '44', '2015-10-07', 'customer', '0', '47', 'Paid', 'Cash', '0', '50', '2950.9', '', '1');
INSERT INTO `master_invoice` VALUES ('45', '45', '2015-10-07', 'customer', '0', '48', 'Paid', 'Cash', '0', '0', '195.3', '', '1');
INSERT INTO `master_invoice` VALUES ('46', '46', '2015-10-07', 'customer', '0', '49', 'Paid', 'Cash', '0', '321.55', '23000', '', '1');
INSERT INTO `master_invoice` VALUES ('47', '47', '2015-10-07', 'customer', '0', '50', 'Paid', 'Cash', '0', '0.7', '350.7', '', '1');
INSERT INTO `master_invoice` VALUES ('48', '48', '2015-10-07', 'customer', '0', '51', 'Paid', 'Cash', '0', '150', '3000', '', '1');
INSERT INTO `master_invoice` VALUES ('49', '49', '2015-10-07', 'customer', '0', '21', 'Paid', 'Cash', '0', '0.25', '16300', '', '1');
INSERT INTO `master_invoice` VALUES ('50', '50', '2015-10-07', 'customer', '0', '21', 'Paid', 'Cash', '0', '0.25', '16300.2', '', '1');
INSERT INTO `master_invoice` VALUES ('51', '51', '2015-10-08', 'customer', '0', '21', 'Paid', 'Cash', '0', '0.15', '1200.15', '', '1');
INSERT INTO `master_invoice` VALUES ('52', '52', '2015-11-08', 'customer', '0', '52', 'Paid', 'Cash', '0', '0.3', '6600', '', '1');
INSERT INTO `master_invoice` VALUES ('53', '53', '2015-10-08', 'customer', '0', '53', 'Paid', 'Cash', '0', '101.9', '400', '', '1');
INSERT INTO `master_invoice` VALUES ('54', '54', '2015-10-08', 'customer', '0', '55', 'Paid', 'Cash', '0', '96.85', '23420', '', '1');
INSERT INTO `master_invoice` VALUES ('55', '55', '2015-10-08', 'customer', '0', '56', 'Paid', 'Cash', '100', '0', '6500.55', '', '1');
INSERT INTO `master_invoice` VALUES ('56', '56', '2015-10-08', 'customer', '0', '57', 'Paid', 'Cash', '0', '0.4', '5300', '', '1');
INSERT INTO `master_invoice` VALUES ('57', '57', '2015-10-08', 'customer', '0', '58', 'Paid', 'Cash', '0', '100.8', '4200', '', '1');
INSERT INTO `master_invoice` VALUES ('58', '58', '2015-10-08', 'customer', '0', '59', 'Paid', 'Cash', '100', '0.55', '6600', '', '1');
INSERT INTO `master_invoice` VALUES ('59', '59', '2015-10-08', 'customer', '0', '46', 'Paid', 'Cash', '0', '41.9', '460', '', '1');
INSERT INTO `master_invoice` VALUES ('60', '60', '2015-10-08', 'customer', '0', '60', 'Paid', 'Cash', '0', '0.85', '3650', '', '1');
INSERT INTO `master_invoice` VALUES ('61', '61', '2015-10-08', 'customer', '0', '9', 'Paid', 'Cash', '0', '0.15', '1200', '', '1');
INSERT INTO `master_invoice` VALUES ('62', '62', '2015-10-08', 'customer', '0', '62', 'Paid', 'Cash', '0', '1', '12200', '', '1');
INSERT INTO `master_invoice` VALUES ('63', '63', '2015-10-08', 'customer', '0', '64', 'Paid', 'Cash', '0', '0.8', '100', '', '1');
INSERT INTO `master_invoice` VALUES ('64', '64', '2015-10-08', 'customer', '0', '65', 'Paid', 'Cash', '0', '0.9', '3000', '', '1');
INSERT INTO `master_invoice` VALUES ('65', '65', '2015-10-08', 'customer', '0', '66', 'Paid', 'Cash', '0', '60.8', '5400', '', '1');
INSERT INTO `master_invoice` VALUES ('66', '66', '2015-10-08', 'customer', '0', '67', 'Paid', 'Cash', '0', '0.55', '4400', '', '1');
INSERT INTO `master_invoice` VALUES ('67', '67', '2015-10-08', 'customer', '0', '22', 'Paid', 'Cash', '0', '132.6', '720', '', '1');
INSERT INTO `master_invoice` VALUES ('68', '68', '2015-10-08', 'customer', '0', '68', 'Paid', 'Cash', '0', '100.2', '5700', '', '1');
INSERT INTO `master_invoice` VALUES ('69', '69', '2015-10-08', 'customer', '0', '69', 'Paid', 'Cash', '0', '0.8', '17300', '', '1');
INSERT INTO `master_invoice` VALUES ('70', '70', '2015-10-08', 'customer', '0', '70', 'Paid', 'Cash', '0', '301.2', '5100', '', '1');
INSERT INTO `master_invoice` VALUES ('71', '71', '2015-10-08', 'customer', '0', '71', 'Paid', 'Cash', '0', '100.55', '4300', '', '1');
INSERT INTO `master_invoice` VALUES ('72', '72', '2015-10-08', 'customer', '0', '72', 'Paid', 'Cash', '0', '2', '5710', '', '1');
INSERT INTO `master_invoice` VALUES ('73', '73', '2015-10-08', 'customer', '0', '73', 'Paid', 'Cash', '0', '12', '5700', '', '1');
INSERT INTO `master_invoice` VALUES ('74', '74', '2015-10-08', 'customer', '0', '18', 'Paid', 'Cash', '0', '0', '1350.3', '', '1');
INSERT INTO `master_invoice` VALUES ('75', '75', '2015-10-08', 'customer', '0', '74', 'Paid', 'Cash', '0', '0', '6600.3', '', '1');
INSERT INTO `master_invoice` VALUES ('76', '76', '2015-10-08', 'customer', '0', '75', 'Paid', 'Cash', '0', '300', '3400.2', '', '1');
INSERT INTO `master_invoice` VALUES ('77', '77', '2015-10-08', 'customer', '0', '76', 'Paid', 'Cash', '0', '0', '1150.8', '', '1');
INSERT INTO `master_invoice` VALUES ('78', '78', '2015-10-08', 'customer', '0', '77', 'Paid', 'Cash', '0', '0', '4900.35', '', '1');
INSERT INTO `master_invoice` VALUES ('79', '79', '2015-10-08', 'customer', '0', '118', 'Paid', 'Cash', '0', '0', '900.9', '', '1');
INSERT INTO `master_invoice` VALUES ('80', '80', '2015-10-08', 'customer', '0', '7', 'Paid', 'Cash', '40', '0', '570.25', '', '1');
INSERT INTO `master_invoice` VALUES ('81', '81', '2015-10-08', 'customer', '0', '80', 'Paid', 'Cash', '0', '111.25', '10100', '', '1');
INSERT INTO `master_invoice` VALUES ('82', '82', '2015-10-08', 'customer', '0', '81', 'Paid', 'Cash', '0', '200', '5900.5', '', '1');
INSERT INTO `master_invoice` VALUES ('83', '83', '2015-10-08', 'customer', '0', '82', 'Paid', 'Cash', '0', '200', '6300.55', '', '1');
INSERT INTO `master_invoice` VALUES ('84', '84', '2015-09-08', 'customer', '0', '83', 'Paid', 'Cash', '0', '0', '10711', '', '1');
INSERT INTO `master_invoice` VALUES ('85', '85', '2015-10-08', 'customer', '0', '84', 'Paid', 'Cash', '249.8', '0', '5651', '', '1');
INSERT INTO `master_invoice` VALUES ('86', '86', '2015-10-08', 'customer', '0', '85', 'Paid', 'Cash', '0', '0', '5500.95', '', '1');
INSERT INTO `master_invoice` VALUES ('87', '87', '2015-10-08', 'customer', '0', '86', 'Paid', 'Cash', '19.15', '0', '100', '', '1');
INSERT INTO `master_invoice` VALUES ('88', '88', '2015-10-08', 'customer', '0', '87', 'Paid', 'Cash', '0', '611', '17000.6', '', '1');
INSERT INTO `master_invoice` VALUES ('89', '89', '2015-10-08', 'customer', '0', '96', 'Paid', 'Cash', '0', '0', '4100.25', '', '1');
INSERT INTO `master_invoice` VALUES ('90', '90', '2015-10-08', 'customer', '0', '89', 'Paid', 'Cash', '0', '0', '1590.75', '', '1');
INSERT INTO `master_invoice` VALUES ('91', '91', '2015-10-08', 'customer', '0', '90', 'Paid', 'Cash', '99', '0', '5500.2', '', '1');
INSERT INTO `master_invoice` VALUES ('92', '92', '2015-10-08', 'customer', '0', '92', 'Paid', 'Cash', '33', '0', '19300.6', '', '1');
INSERT INTO `master_invoice` VALUES ('93', '93', '2015-10-08', 'customer', '0', '63', 'Paid', 'Cash', '43.95', '0', '360', '', '1');
INSERT INTO `master_invoice` VALUES ('94', '94', '2015-10-08', 'customer', '0', '49', 'Paid', 'Cash', '0', '1.25', '1600', '', '1');
INSERT INTO `master_invoice` VALUES ('95', '95', '2015-10-08', 'customer', '0', '94', 'Paid', 'Cash', '0', '0', '3650.85', '', '1');
INSERT INTO `master_invoice` VALUES ('96', '96', '2015-10-08', 'customer', '0', '95', 'Paid', 'Cash', '0', '41', '18470.5', '', '1');
INSERT INTO `master_invoice` VALUES ('97', '97', '2015-10-08', 'customer', '0', '22', 'Paid', 'Cash', '0', '0', '100.8', '', '1');
INSERT INTO `master_invoice` VALUES ('98', '98', '2015-10-08', 'customer', '0', '118', 'Paid', 'Cash', '0', '0', '350.7', '', '1');
INSERT INTO `master_invoice` VALUES ('99', '99', '2015-10-08', 'customer', '0', '98', 'Paid', 'Cash', '0', '41.5', '18470', '', '1');
INSERT INTO `master_invoice` VALUES ('100', '100', '2015-10-08', 'customer', '0', '97', 'Paid', 'Cash', '0', '0', '4000.5', '', '1');
INSERT INTO `master_invoice` VALUES ('101', '101', '2015-10-08', 'customer', '0', '158', 'Paid', 'Cash', '0', '507', '6465', '', '1');
INSERT INTO `master_invoice` VALUES ('102', '102', '2015-10-08', 'customer', '0', '99', 'Paid', 'Cash', '0', '0', '3801', '', '1');
INSERT INTO `master_invoice` VALUES ('103', '103', '2015-10-08', 'customer', '0', '100', 'Paid', 'Cash', '0', '0', '18951.5', '', '1');
INSERT INTO `master_invoice` VALUES ('104', '104', '2015-10-08', 'customer', '0', '101', 'Paid', 'Cash', '0', '201.2', '5200', '', '1');
INSERT INTO `master_invoice` VALUES ('105', '105', '2015-10-08', 'customer', '0', '102', 'Paid', 'Cash', '0', '59.5', '350', '', '1');
INSERT INTO `master_invoice` VALUES ('106', '106', '2015-10-08', 'customer', '0', '103', 'Paid', 'Cash', '0', '100', '4300.55', '', '1');
INSERT INTO `master_invoice` VALUES ('107', '107', '2015-10-08', 'customer', '0', '104', 'Paid', 'Cash', '0', '400', '5001.2', '', '1');
INSERT INTO `master_invoice` VALUES ('108', '108', '2015-10-08', 'customer', '0', '105', 'Paid', 'Cash', '300', '0', '7500.9', '', '1');
INSERT INTO `master_invoice` VALUES ('109', '109', '2015-10-08', 'customer', '0', '106', 'Paid', 'Cash', '0', '100.4', '5200', '', '1');
INSERT INTO `master_invoice` VALUES ('110', '110', '2015-10-08', 'customer', '0', '107', 'Paid', 'Cash', '100', '0', '6600.55', '', '1');
INSERT INTO `master_invoice` VALUES ('111', '111', '2015-10-08', 'customer', '0', '108', 'Paid', 'Cash', '100', '0', '7100.35', '', '1');
INSERT INTO `master_invoice` VALUES ('112', '112', '2015-10-08', 'customer', '0', '109', 'Paid', 'Cash', '0', '100', '6400.55', '', '1');
INSERT INTO `master_invoice` VALUES ('113', '113', '2015-10-08', 'customer', '0', '110', 'Paid', 'Cash', '100', '0', '6500.55', '', '1');
INSERT INTO `master_invoice` VALUES ('114', '114', '2015-10-08', 'customer', '0', '49', 'Paid', 'Cash', '0', '0', '250.95', '', '1');
INSERT INTO `master_invoice` VALUES ('115', '115', '2015-10-08', 'customer', '0', '7', 'Paid', 'Cash', '50', '0', '600.2', '', '1');
INSERT INTO `master_invoice` VALUES ('116', '116', '2015-10-08', 'customer', '0', '111', 'Paid', 'Cash', '0', '0', '7000.35', '', '1');
INSERT INTO `master_invoice` VALUES ('117', '117', '2015-10-08', 'customer', '0', '112', 'Paid', 'Cash', '200', '0', '9200.6', '', '1');
INSERT INTO `master_invoice` VALUES ('118', '118', '2015-10-08', 'customer', '0', '8', 'Paid', 'Cash', '19.25', '0', '140', '', '1');
INSERT INTO `master_invoice` VALUES ('119', '119', '2015-10-08', 'customer', '0', '113', 'Paid', 'Cash', '18.35', '0', '16600', '', '1');
INSERT INTO `master_invoice` VALUES ('120', '120', '2015-10-08', 'customer', '0', '114', 'Paid', 'Cash', '0', '0', '3801', '', '1');
INSERT INTO `master_invoice` VALUES ('121', '121', '2015-10-08', 'customer', '0', '28', 'Paid', 'Cash', '0', '0', '120.75', '', '1');
INSERT INTO `master_invoice` VALUES ('122', '122', '2015-10-08', 'customer', '0', '115', 'Paid', 'Cash', '0', '50.9', '4000', '', '1');
INSERT INTO `master_invoice` VALUES ('123', '123', '2015-10-08', 'customer', '0', '116', 'Paid', 'Cash', '0', '0', '5500.95', '', '1');
INSERT INTO `master_invoice` VALUES ('124', '124', '2015-10-08', 'customer', '0', '117', 'Paid', 'Cash', '0', '51.5', '23500', '', '1');
INSERT INTO `master_invoice` VALUES ('125', '125', '2015-10-08', 'customer', '0', '118', 'Paid', 'Cash', '0', '0', '31600.8', '', '1');
INSERT INTO `master_invoice` VALUES ('126', '126', '2015-10-08', 'customer', '0', '119', 'Paid', 'Cash', '0', '0', '16401.1', '', '1');
INSERT INTO `master_invoice` VALUES ('127', '127', '2015-10-08', 'customer', '0', '120', 'Paid', 'Cash', '0', '300', '3900', '', '1');
INSERT INTO `master_invoice` VALUES ('128', '128', '2015-10-08', 'customer', '0', '121', 'Pending', 'Cheque', '0', '0', '40000.8', '', '1');
INSERT INTO `master_invoice` VALUES ('129', '129', '2015-10-08', 'customer', '0', '122', 'Paid', 'Cash', '0', '0', '400.05', '', '1');
INSERT INTO `master_invoice` VALUES ('130', '130', '2015-10-08', 'customer', '0', '123', 'Paid', 'Cash', '0', '100', '4000.25', '', '1');
INSERT INTO `master_invoice` VALUES ('131', '131', '2015-10-08', 'customer', '0', '124', 'Paid', 'Cash', '0', '0', '195.3', '', '1');
INSERT INTO `master_invoice` VALUES ('132', '132', '2015-10-08', 'customer', '0', '125', 'Paid', 'Cash', '0', '0', '4000.5', '', '1');
INSERT INTO `master_invoice` VALUES ('133', '133', '2015-10-08', 'customer', '0', '126', 'Paid', 'Cash', '0', '711.65', '8500', '', '1');
INSERT INTO `master_invoice` VALUES ('134', '134', '2015-10-08', 'customer', '0', '22', 'Paid', 'Cash', '0', '0', '400.05', '', '1');
INSERT INTO `master_invoice` VALUES ('135', '135', '2015-10-08', 'customer', '0', '127', 'Paid', 'Cash', '0', '0', '1200.15', '', '1');
INSERT INTO `master_invoice` VALUES ('136', '136', '2015-10-08', 'customer', '0', '128', 'Paid', 'Cash', '0', '0', '5100.9', '', '1');
INSERT INTO `master_invoice` VALUES ('137', '137', '2015-10-08', 'customer', '0', '159', 'Pending', 'Cash', '0', '2266.1', '6535', '', '1');
INSERT INTO `master_invoice` VALUES ('138', '138', '2015-10-09', 'customer', '0', '49', 'Paid', 'Cash', '0', '2', '460', '', '1');
INSERT INTO `master_invoice` VALUES ('139', '139', '2015-10-09', 'customer', '0', '10', 'Paid', 'Cash', '0', '0', '160.65', '', '1');
INSERT INTO `master_invoice` VALUES ('140', '140', '2015-10-09', 'customer', '0', '129', 'Paid', 'Cash', '0', '0', '25401.6', '', '1');
INSERT INTO `master_invoice` VALUES ('141', '141', '2015-10-09', 'customer', '0', '53', 'Paid', 'Cash', '0', '2701.75', '18000', '', '1');
INSERT INTO `master_invoice` VALUES ('142', '142', '2015-10-09', 'customer', '0', '130', 'Paid', 'Cash', '199.75', '0', '4300', '', '1');
INSERT INTO `master_invoice` VALUES ('143', '143', '2015-10-10', 'customer', '0', '131', 'Paid', 'Cash', '0', '0.2', '5800', '', '1');
INSERT INTO `master_invoice` VALUES ('144', '144', '2015-10-10', 'customer', '0', '132', 'Paid', 'Cash', '0', '200.95', '3200', '', '1');
INSERT INTO `master_invoice` VALUES ('145', '145', '2015-10-10', 'customer', '0', '46', 'Paid', 'Cash', '0', '21.9', '480', '', '1');
INSERT INTO `master_invoice` VALUES ('146', '146', '2015-10-10', 'customer', '0', '134', 'Paid', 'Cash', '0', '50', '3100', '', '1');
INSERT INTO `master_invoice` VALUES ('147', '147', '2015-10-12', 'customer', '0', '135', 'Paid', 'Cash', '0', '0.2', '5800', '', '1');
INSERT INTO `master_invoice` VALUES ('148', '148', '2015-10-12', 'customer', '0', '136', 'Paid', 'Cash', '0', '1.2', '5400', '', '1');
INSERT INTO `master_invoice` VALUES ('149', '149', '2015-10-12', 'customer', '0', '137', 'Paid', 'Cash', '0', '0', '4350.15', '', '1');
INSERT INTO `master_invoice` VALUES ('150', '150', '2015-10-12', 'customer', '0', '138', 'Paid', 'Cheque', '850', '0', '13550.8', '', '1');
INSERT INTO `master_invoice` VALUES ('151', '151', '2015-10-13', 'customer', '0', '139', 'Paid', 'Cash', '0', '650.15', '3700', '', '1');
INSERT INTO `master_invoice` VALUES ('152', '152', '2015-10-13', 'customer', '0', '140', 'Paid', 'Cash', '0', '100.95', '7500', '', '1');
INSERT INTO `master_invoice` VALUES ('153', '153', '2015-10-13', 'customer', '0', '141', 'Paid', 'Cash', '0', '0.8', '6400', '', '1');
INSERT INTO `master_invoice` VALUES ('154', '154', '2015-10-13', 'customer', '0', '142', 'Paid', 'Cash', '0', '0.9', '5100', '', '1');
INSERT INTO `master_invoice` VALUES ('155', '155', '2015-10-13', 'customer', '0', '143', 'Paid', 'Cash', '49.5', '0', '4050', '', '1');
INSERT INTO `master_invoice` VALUES ('156', '156', '2015-10-14', 'customer', '0', '144', 'Paid', 'Cash', '0', '0', '6100.5', '', '1');
INSERT INTO `master_invoice` VALUES ('157', '157', '2015-10-14', 'customer', '0', '157', 'Paid', 'Cash', '0', '0', '50.4', '', '1');
INSERT INTO `master_invoice` VALUES ('158', '158', '2015-10-14', 'customer', '0', '145', 'Paid', 'Cash', '0', '100', '6300.8', '', '1');
INSERT INTO `master_invoice` VALUES ('159', '159', '2015-10-14', 'customer', '0', '146', 'Paid', 'Cash', '0', '0', '400.05', '', '1');
INSERT INTO `master_invoice` VALUES ('160', '160', '2015-10-14', 'customer', '0', '147', 'Paid', 'Cash', '0', '200', '6000.25', '', '1');
INSERT INTO `master_invoice` VALUES ('161', '161', '2015-10-14', 'customer', '0', '148', 'Paid', 'Cash', '200', '0', '9200.6', '', '1');
INSERT INTO `master_invoice` VALUES ('162', '162', '2015-10-14', 'customer', '0', '149', 'Paid', 'Cash', '0', '50', '3000.25', '', '1');
INSERT INTO `master_invoice` VALUES ('163', '163', '2015-10-14', 'customer', '0', '150', 'Paid', 'Cash', '0', '100', '6200', '', '1');
INSERT INTO `master_invoice` VALUES ('164', '164', '2015-10-15', 'customer', '0', '151', 'Paid', 'Cash', '0', '0', '5800.2', '', '1');
INSERT INTO `master_invoice` VALUES ('165', '165', '2015-10-15', 'customer', '0', '152', 'Paid', 'Cash', '0', '50', '3700.6', '', '1');
INSERT INTO `master_invoice` VALUES ('166', '166', '2015-10-15', 'customer', '0', '153', 'Paid', 'Cash', '0', '0', '40000.8', '', '1');
INSERT INTO `master_invoice` VALUES ('167', '167', '2015-10-15', 'customer', '0', '154', 'Paid', 'Cash', '0', '0', '5500.95', '', '1');
INSERT INTO `master_invoice` VALUES ('168', '168', '2015-10-15', 'customer', '0', '153', 'Paid', 'Cash', '0', '50', '1500.85', '', '1');
INSERT INTO `master_invoice` VALUES ('169', '169', '2015-10-15', 'customer', '0', '155', 'Paid', 'Cash', '0', '0', '23200.8', '', '1');
INSERT INTO `master_invoice` VALUES ('170', '170', '2015-10-16', 'customer', '0', '126', 'Paid', 'Cash', '10', '0', '170.65', '', '1');
INSERT INTO `master_invoice` VALUES ('171', '171', '2015-10-16', 'customer', '0', '156', 'Paid', 'Cash', '0', '0', '350.7', '', '1');
INSERT INTO `master_invoice` VALUES ('172', '172', '2015-10-16', 'customer', '0', '121', 'Pending', 'Cheque', '0', '0', '46901.4', '', '1');
INSERT INTO `master_invoice` VALUES ('173', '173', '2015-10-16', 'customer', '0', '157', 'Paid', 'Cash', '1700', '0', '6900.65', '', '1');
INSERT INTO `master_invoice` VALUES ('174', '174', '2015-10-17', 'customer', '0', '161', 'Paid', 'Cash', '200', '0', '6400.25', '', '1');
INSERT INTO `master_invoice` VALUES ('175', '175', '2015-10-17', 'customer', '0', '162', 'Paid', 'Cash', '0', '0', '350.7', '', '1');
INSERT INTO `master_invoice` VALUES ('176', '176', '2015-10-17', 'customer', '0', '163', 'Paid', 'Cash', '700', '0', '10101.7', '', '1');
INSERT INTO `master_invoice` VALUES ('177', '177', '2015-10-17', 'customer', '0', '164', 'Paid', 'Cash', '0', '300', '3300.45', '', '1');
INSERT INTO `master_invoice` VALUES ('178', '178', '2015-12-17', 'customer', '0', '8', 'Paid', 'Cash', '0', '6.25', '440', '', '1');
INSERT INTO `master_invoice` VALUES ('179', '179', '2015-10-19', 'customer', '0', '165', 'Paid', 'Cash', '0', '4026', '29730.4', '', '1');
INSERT INTO `master_invoice` VALUES ('180', '180', '2015-10-19', 'customer', '0', '166', 'Paid', 'Cash', '0', '250.6', '3500', '', '1');
INSERT INTO `master_invoice` VALUES ('181', '181', '2015-10-20', 'customer', '0', '167', 'Paid', 'Cash', '0', '0', '12700.8', '', '1');
INSERT INTO `master_invoice` VALUES ('182', '182', '2015-10-20', 'customer', '0', '168', 'Paid', 'Cash', '0', '0', '5800.2', '', '1');
INSERT INTO `master_invoice` VALUES ('183', '183', '2015-10-20', 'customer', '0', '122', 'Paid', 'Cash', '0', '0', '501.9', '', '1');
INSERT INTO `master_invoice` VALUES ('184', '184', '2015-10-20', 'customer', '0', '196', 'Paid', 'Cash', '0', '0', '1651.65', '', '1');
INSERT INTO `master_invoice` VALUES ('185', '185', '2015-10-22', 'customer', '0', '169', 'Paid', 'Cash', '0', '0', '12700.8', '', '1');
INSERT INTO `master_invoice` VALUES ('186', '186', '2015-10-22', 'customer', '0', '170', 'Paid', 'Cash', '0', '0', '11500.7', '', '1');
INSERT INTO `master_invoice` VALUES ('187', '187', '2015-10-22', 'customer', '0', '171', 'Paid', 'Cash', '0', '0', '10400.2', '', '1');
INSERT INTO `master_invoice` VALUES ('188', '188', '2015-10-22', 'customer', '0', '172', 'Paid', 'Cash', '0', '200', '6800.35', '', '1');
INSERT INTO `master_invoice` VALUES ('189', '189', '2015-10-22', 'customer', '0', '173', 'Paid', 'Cash', '0', '0', '9000.6', '', '1');
INSERT INTO `master_invoice` VALUES ('190', '190', '2015-10-22', 'customer', '0', '174', 'Paid', 'Cash', '0', '0', '13551.3', '', '1');
INSERT INTO `master_invoice` VALUES ('191', '191', '2015-10-22', 'customer', '0', '175', 'Paid', 'Cash', '0', '0', '4900.35', '', '1');
INSERT INTO `master_invoice` VALUES ('192', '192', '2015-10-22', 'customer', '0', '176', 'Paid', 'Cash', '0', '0', '3400.95', '', '1');
INSERT INTO `master_invoice` VALUES ('193', '193', '2015-10-22', 'customer', '0', '177', 'Paid', 'Cash', '0', '100', '8900.6', '', '1');
INSERT INTO `master_invoice` VALUES ('194', '194', '2015-10-23', 'customer', '0', '178', 'Paid', 'Cash', '200', '0', '16500.2', '', '1');
INSERT INTO `master_invoice` VALUES ('195', '195', '2015-10-24', 'customer', '0', '179', 'Paid', 'Cash', '0', '0', '3650.85', '', '1');
INSERT INTO `master_invoice` VALUES ('196', '196', '2015-10-24', 'customer', '0', '179', 'Paid', 'Cash', '0', '250', '5550.2', '', '1');
INSERT INTO `master_invoice` VALUES ('197', '197', '2015-10-24', 'customer', '0', '180', 'Paid', 'Cash', '0', '0', '11600.4', '', '1');
INSERT INTO `master_invoice` VALUES ('198', '198', '2015-10-24', 'customer', '0', '182', 'Paid', 'Cash', '0', '2800', '6200.6', '', '1');
INSERT INTO `master_invoice` VALUES ('199', '199', '2015-10-26', 'customer', '0', '22', 'Paid', 'Cash', '0', '0', '250.95', '', '1');
INSERT INTO `master_invoice` VALUES ('200', '200', '2015-10-26', 'customer', '0', '183', 'Paid', 'Cash', '0', '500', '8500.6', '', '1');
INSERT INTO `master_invoice` VALUES ('201', '201', '2015-10-26', 'customer', '0', '169', 'Paid', 'Cash', '0', '0', '100.8', '', '1');
INSERT INTO `master_invoice` VALUES ('202', '202', '2015-10-28', 'customer', '0', '113', 'Paid', 'Cash', '0', '0', '261.45', '', '1');
INSERT INTO `master_invoice` VALUES ('203', '203', '2015-11-28', 'customer', '0', '184', 'Paid', 'Cash', '0', '0', '3300.15', '', '1');
INSERT INTO `master_invoice` VALUES ('204', '204', '2015-10-28', 'customer', '0', '185', 'Paid', 'Cash', '0', '0', '100.8', '', '1');
INSERT INTO `master_invoice` VALUES ('205', '205', '2015-10-28', 'customer', '0', '186', 'Paid', 'Cash', '0', '0', '100.8', '', '1');
INSERT INTO `master_invoice` VALUES ('206', '206', '2015-10-28', 'customer', '0', '187', 'Paid', 'Cash', '0', '0', '320.25', '', '1');
INSERT INTO `master_invoice` VALUES ('207', '207', '2015-10-28', 'customer', '0', '188', 'Paid', 'Cash', '0', '49', '5952.8', '', '1');
INSERT INTO `master_invoice` VALUES ('208', '208', '2015-10-28', 'customer', '0', '189', 'Paid', 'Cash', '0', '300', '6801.15', '', '1');
INSERT INTO `master_invoice` VALUES ('209', '209', '2015-10-30', 'customer', '0', '190', 'Paid', 'Cash', '0', '350', '1100', '', '1');
INSERT INTO `master_invoice` VALUES ('210', '210', '2015-10-31', 'customer', '0', '191', 'Paid', 'Cash', '0', '2', '1100.5', '', '1');
INSERT INTO `master_invoice` VALUES ('211', '211', '2015-10-31', 'customer', '0', '192', 'Paid', 'Cash', '0', '300', '10501.3', '', '1');
INSERT INTO `master_invoice` VALUES ('212', '212', '2015-10-31', 'customer', '0', '193', 'Paid', 'Cash', '0', '1332', '10000.6', '', '1');
INSERT INTO `master_invoice` VALUES ('213', '213', '2015-10-31', 'customer', '0', '194', 'Paid', 'Cash', '0', '200', '3300.7', '', '1');
INSERT INTO `master_invoice` VALUES ('214', '214', '2015-10-31', 'customer', '0', '195', 'Paid', 'Cash', '0', '100', '14000.5', '', '1');
INSERT INTO `master_invoice` VALUES ('215', '215', '2015-10-31', 'customer', '0', '196', 'Paid', 'Cash', '25', '0', '415.6', '', '1');
INSERT INTO `master_invoice` VALUES ('216', '216', '2015-11-02', 'customer', '0', '162', 'Paid', 'Cash', '0', '0', '350.7', '', '1');
INSERT INTO `master_invoice` VALUES ('217', '217', '2015-11-02', 'customer', '0', '198', 'Paid', 'Cash', '0', '500', '9200.95', '', '1');
INSERT INTO `master_invoice` VALUES ('218', '218', '2015-11-03', 'customer', '0', '199', 'Paid', 'Cash', '0', '100', '3600.2', '', '1');
INSERT INTO `master_invoice` VALUES ('219', '219', '2015-11-03', 'customer', '0', '200', 'Paid', 'Cash', '0', '500', '1000', '', '1');
INSERT INTO `master_invoice` VALUES ('220', '220', '2015-11-03', 'customer', '0', '22', 'Paid', 'Cash', '0', '0', '600.6', '', '1');
INSERT INTO `master_invoice` VALUES ('221', '221', '2015-11-03', 'customer', '0', '89', 'Paid', 'Cash', '9', '0', '460.5', '', '1');
INSERT INTO `master_invoice` VALUES ('222', '222', '2015-11-04', 'customer', '0', '203', 'Paid', 'Cash', '0', '0', '5500.95', '', '1');
INSERT INTO `master_invoice` VALUES ('223', '223', '2015-11-05', 'customer', '0', '204', 'Paid', 'Cash', '0', '500', '14000.5', '', '1');
INSERT INTO `master_invoice` VALUES ('224', '224', '2015-11-05', 'customer', '0', '205', 'Paid', 'Cash', '0', '600', '10500.6', '', '1');
INSERT INTO `master_invoice` VALUES ('225', '225', '2015-11-06', 'customer', '0', '206', 'Paid', 'Cash', '0', '300', '4050.15', '', '1');
INSERT INTO `master_invoice` VALUES ('226', '226', '2015-11-06', 'customer', '0', '274', 'Paid', 'Cheque', '0', '3001.2', '15000', '', '1');
INSERT INTO `master_invoice` VALUES ('227', '227', '2015-11-06', 'customer', '0', '22', 'Paid', 'Cash', '0', '0', '100.8', '', '1');
INSERT INTO `master_invoice` VALUES ('228', '228', '2015-11-06', 'customer', '0', '208', 'Paid', 'Cash', '0', '200', '5100.4', '', '1');
INSERT INTO `master_invoice` VALUES ('229', '229', '2015-11-07', 'customer', '0', '209', 'Paid', 'Cash', '0', '201.5', '26500', '', '1');
INSERT INTO `master_invoice` VALUES ('230', '230', '2015-11-07', 'customer', '0', '21', 'Paid', 'Cash', '195', '0', '1890.75', '', '1');
INSERT INTO `master_invoice` VALUES ('231', '231', '2015-11-07', 'customer', '0', '210', 'Paid', 'Cash', '0', '100', '6000.5', '', '1');
INSERT INTO `master_invoice` VALUES ('232', '232', '2015-11-08', 'customer', '0', '211', 'Paid', 'Cash', '0', '20.45', '17000', '', '1');
INSERT INTO `master_invoice` VALUES ('233', '233', '2015-11-09', 'customer', '0', '212', 'Paid', 'Cash', '0', '0', '12411', '', '1');
INSERT INTO `master_invoice` VALUES ('234', '234', '2015-11-09', 'customer', '0', '213', 'Paid', 'Cash', '0', '450', '3300.6', '', '1');
INSERT INTO `master_invoice` VALUES ('235', '235', '2015-11-09', 'customer', '0', '214', 'Paid', 'Cash', '50', '0', '3300.8', '', '1');
INSERT INTO `master_invoice` VALUES ('236', '236', '2015-11-10', 'customer', '0', '215', 'Paid', 'Cash', '0', '0', '4100.25', '', '1');
INSERT INTO `master_invoice` VALUES ('237', '237', '2015-11-11', 'customer', '0', '216', 'Paid', 'Cash', '0', '0', '4100.25', '', '1');
INSERT INTO `master_invoice` VALUES ('238', '238', '2015-11-11', 'customer', '0', '217', 'Paid', 'Cash', '50', '0', '4400.15', '', '1');
INSERT INTO `master_invoice` VALUES ('239', '239', '2015-11-11', 'customer', '0', '218', 'Paid', 'Cash', '200', '0', '6200.75', '', '1');
INSERT INTO `master_invoice` VALUES ('240', '240', '2015-11-11', 'customer', '0', '28', 'Paid', 'Cash', '0', '1.6', '12800', '', '1');
INSERT INTO `master_invoice` VALUES ('241', '241', '2015-11-11', 'customer', '0', '219', 'Paid', 'Cash', '0', '250', '5050.4', '', '1');
INSERT INTO `master_invoice` VALUES ('242', '242', '2015-11-11', 'customer', '0', '220', 'Paid', 'Cash', '0', '1.15', '5000', '', '1');
INSERT INTO `master_invoice` VALUES ('243', '243', '2015-11-16', 'customer', '0', '221', 'Paid', 'Cash', '1399.8', '0', '5100', '', '1');
INSERT INTO `master_invoice` VALUES ('244', '244', '2015-11-16', 'customer', '0', '222', 'Paid', 'Cash', '10', '0', '700.9', '', '1');
INSERT INTO `master_invoice` VALUES ('245', '245', '2015-11-16', 'customer', '0', '223', 'Paid', 'Cash', '0', '311', '10400', '', '1');
INSERT INTO `master_invoice` VALUES ('246', '246', '2015-11-16', 'customer', '0', '43', 'Paid', 'Cash', '0', '50', '1400', '', '1');
INSERT INTO `master_invoice` VALUES ('247', '247', '2015-11-17', 'customer', '0', '234', 'Paid', 'Cash', '0', '450', '1000', '', '1');
INSERT INTO `master_invoice` VALUES ('248', '248', '2015-11-17', 'customer', '0', '225', 'Paid', 'Cash', '0', '0', '100.8', '', '1');
INSERT INTO `master_invoice` VALUES ('249', '249', '2015-11-16', 'customer', '0', '226', 'Paid', 'Cash', '0', '0', '3650.85', '', '1');
INSERT INTO `master_invoice` VALUES ('250', '250', '2015-11-18', 'customer', '0', '113', 'Paid', 'Cash', '0', '0', '530.25', '', '1');
INSERT INTO `master_invoice` VALUES ('251', '251', '2015-11-18', 'customer', '0', '227', 'Paid', 'Cash', '0', '100', '18000.9', '', '1');
INSERT INTO `master_invoice` VALUES ('252', '252', '2015-11-18', 'customer', '0', '228', 'Paid', 'Cash', '199', '0', '15900.7', '', '1');
INSERT INTO `master_invoice` VALUES ('253', '253', '2015-11-18', 'customer', '0', '229', 'Paid', 'Cash', '0', '0', '4100.25', '', '1');
INSERT INTO `master_invoice` VALUES ('254', '254', '2015-11-18', 'customer', '0', '230', 'Paid', 'Cash', '0', '60', '10500.8', '', '1');
INSERT INTO `master_invoice` VALUES ('255', '255', '2015-11-18', 'customer', '0', '49', 'Paid', 'Cash', '115', '0', '575.95', '', '1');
INSERT INTO `master_invoice` VALUES ('256', '256', '2015-11-19', 'customer', '0', '231', 'Paid', 'Cash', '300', '0.65', '9700', '', '1');
INSERT INTO `master_invoice` VALUES ('257', '257', '2015-11-19', 'customer', '0', '232', 'Paid', 'Cash', '0', '150', '5000', '', '1');
INSERT INTO `master_invoice` VALUES ('258', '258', '2015-11-19', 'customer', '0', '233', 'Paid', 'Cash', '1500', '0.65', '6700', '', '1');
INSERT INTO `master_invoice` VALUES ('259', '259', '2015-11-20', 'customer', '0', '112', 'Paid', 'Cash', '0', '0.8', '100', '', '1');
INSERT INTO `master_invoice` VALUES ('260', '260', '2015-11-20', 'customer', '0', '234', 'Paid', 'Cash', '0', '150', '3000', '', '1');
INSERT INTO `master_invoice` VALUES ('261', '261', '2015-11-21', 'customer', '0', '235', 'Paid', 'Cash', '0', '0.15', '4350', '', '1');
INSERT INTO `master_invoice` VALUES ('262', '262', '2015-11-22', 'customer', '0', '236', 'Paid', 'Cash', '0', '0.15', '3300', '', '1');
INSERT INTO `master_invoice` VALUES ('263', '263', '2015-11-23', 'customer', '0', '237', 'Paid', 'Cash', '0', '100.55', '8500', '', '1');
INSERT INTO `master_invoice` VALUES ('264', '264', '2015-11-23', 'customer', '0', '238', 'Paid', 'Cash', '0', '0.85', '6800', '', '1');
INSERT INTO `master_invoice` VALUES ('265', '265', '2015-11-23', 'customer', '0', '239', 'Paid', 'Cash', '0', '150.8', '4150', '', '1');
INSERT INTO `master_invoice` VALUES ('266', '266', '2015-11-23', 'customer', '0', '240', 'Paid', 'Cash', '0', '1', '3800', '', '1');
INSERT INTO `master_invoice` VALUES ('267', '267', '2015-11-24', 'customer', '0', '241', 'Paid', 'Cash', '8.15', '0', '5570', '', '1');
INSERT INTO `master_invoice` VALUES ('268', '268', '2015-11-24', 'customer', '0', '242', 'Paid', 'Cash', '298.8', '0', '5700', '', '1');
INSERT INTO `master_invoice` VALUES ('269', '269', '2015-11-24', 'customer', '0', '243', 'Paid', 'Cash', '0', '200.25', '1800', '', '1');
INSERT INTO `master_invoice` VALUES ('270', '270', '2015-11-24', 'customer', '0', '244', 'Paid', 'Cash', '0', '200', '4000', '', '1');
INSERT INTO `master_invoice` VALUES ('271', '271', '2015-11-24', 'customer', '0', '245', 'Paid', 'Cash', '198.8', '0', '5600', '', '1');
INSERT INTO `master_invoice` VALUES ('272', '272', '2015-11-25', 'customer', '0', '275', 'Paid', 'Cash', '0', '52.3', '15200', '', '1');
INSERT INTO `master_invoice` VALUES ('273', '273', '2015-11-25', 'customer', '0', '246', 'Paid', 'Cash', '0', '300', '9701.2', '', '1');
INSERT INTO `master_invoice` VALUES ('274', '274', '2015-11-25', 'customer', '0', '247', 'Paid', 'Cash', '0', '50.85', '3600', '', '1');
INSERT INTO `master_invoice` VALUES ('275', '275', '2015-11-25', 'customer', '0', '248', 'Paid', 'Cash', '0', '300', '9600.45', '', '1');
INSERT INTO `master_invoice` VALUES ('276', '276', '2015-11-27', 'customer', '0', '249', 'Paid', 'Cash', '0', '0', '44000.2', '', '1');
INSERT INTO `master_invoice` VALUES ('277', '277', '2015-11-25', 'customer', '0', '250', 'Paid', 'Cash', '0', '100.6', '11000', '', '1');
INSERT INTO `master_invoice` VALUES ('278', '278', '2015-11-26', 'customer', '0', '251', 'Paid', 'Cash', '0', '100', '3550.85', '', '1');
INSERT INTO `master_invoice` VALUES ('279', '279', '2015-11-26', 'customer', '0', '236', 'Paid', 'Cash', '0', '0', '4400.55', '', '1');
INSERT INTO `master_invoice` VALUES ('280', '280', '2015-11-26', 'customer', '0', '252', 'Paid', 'Cash', '0', '0', '10300.5', '', '1');
INSERT INTO `master_invoice` VALUES ('281', '281', '2015-11-27', 'customer', '0', '253', 'Paid', 'Cash', '10', '0', '170.65', '', '1');
INSERT INTO `master_invoice` VALUES ('282', '282', '2015-11-27', 'customer', '0', '254', 'Paid', 'Cash', '10', '0', '170.65', '', '1');
INSERT INTO `master_invoice` VALUES ('283', '283', '2015-11-28', 'customer', '0', '255', 'Paid', 'Cash', '0', '0', '5100', '', '1');
INSERT INTO `master_invoice` VALUES ('284', '284', '2015-11-28', 'customer', '0', '256', 'Paid', 'Cash', '300', '0', '5701.2', '', '1');
INSERT INTO `master_invoice` VALUES ('285', '285', '2015-11-28', 'customer', '0', '257', 'Paid', 'Cash', '0', '0', '100.8', '', '1');
INSERT INTO `master_invoice` VALUES ('286', '286', '2015-11-28', 'customer', '0', '46', 'Paid', 'Cash', '0', '0', '1200.15', '', '1');
INSERT INTO `master_invoice` VALUES ('287', '287', '2015-11-28', 'customer', '0', '258', 'Paid', 'Cash', '0', '300.7', '13700', '', '1');
INSERT INTO `master_invoice` VALUES ('288', '288', '2015-11-28', 'customer', '0', '259', 'Paid', 'Cash', '0', '0', '13500.9', '', '1');
INSERT INTO `master_invoice` VALUES ('289', '289', '2015-11-29', 'customer', '0', '260', 'Paid', 'Cash', '0', '0', '5500.95', '', '1');
INSERT INTO `master_invoice` VALUES ('290', '290', '2015-11-29', 'customer', '0', '261', 'Paid', 'Cash', '299', '0', '5700.2', '', '1');
INSERT INTO `master_invoice` VALUES ('291', '291', '2015-11-30', 'customer', '0', '262', 'Paid', 'Cash', '0', '50', '5100', '', '1');
INSERT INTO `master_invoice` VALUES ('292', '292', '2015-11-30', 'customer', '0', '18', 'Paid', 'Cash', '0', '100', '100.55', '', '1');
INSERT INTO `master_invoice` VALUES ('293', '293', '2015-11-30', 'customer', '0', '276', 'Paid', 'Cash', '0', '50', '5000.5', '', '1');
INSERT INTO `master_invoice` VALUES ('294', '294', '2015-11-30', 'customer', '0', '21', 'Paid', 'Cash', '0', '0', '310.8', '', '1');
INSERT INTO `master_invoice` VALUES ('295', '295', '2015-11-30', 'customer', '0', '263', 'Paid', 'Cash', '433', '0', '16700.7', '', '1');
INSERT INTO `master_invoice` VALUES ('296', '296', '2015-11-30', 'customer', '0', '264', 'Paid', 'Cash', '0', '0', '4100.25', '', '1');
INSERT INTO `master_invoice` VALUES ('297', '297', '2015-11-30', 'customer', '0', '265', 'Paid', 'Cash', '300', '0', '5701.2', '', '1');
INSERT INTO `master_invoice` VALUES ('298', '298', '2015-11-30', 'customer', '0', '266', 'Paid', 'Cash', '0', '0', '250.95', '', '1');
INSERT INTO `master_invoice` VALUES ('299', '299', '2015-12-01', 'customer', '0', '267', 'Paid', 'Cash', '0', '100', '4200.8', '', '1');
INSERT INTO `master_invoice` VALUES ('300', '300', '2015-12-01', 'customer', '0', '268', 'Paid', 'Cash', '0', '0', '1590.75', '', '1');
INSERT INTO `master_invoice` VALUES ('301', '301', '2015-12-03', 'customer', '0', '277', 'Paid', 'Cash', '10', '0', '160.15', '', '1');
INSERT INTO `master_invoice` VALUES ('302', '302', '2015-12-04', 'customer', '0', '278', 'Paid', 'Cash', '0', '0', '3300.15', '', '1');
INSERT INTO `master_invoice` VALUES ('303', '303', '2015-12-04', 'customer', '0', '275', 'Paid', 'Cash', '0', '0', '501.9', '', '1');
INSERT INTO `master_invoice` VALUES ('304', '304', '2015-12-04', 'customer', '0', '280', 'Paid', 'Cash', '0', '100', '100.55', '', '1');
INSERT INTO `master_invoice` VALUES ('305', '305', '2015-12-04', 'customer', '0', '273', 'Paid', 'Cash', '0', '100', '4100', '', '1');
INSERT INTO `master_invoice` VALUES ('306', '306', '2015-12-04', 'customer', '0', '272', 'Paid', 'Cash', '0', '200', '5600.2', '', '1');
INSERT INTO `master_invoice` VALUES ('307', '307', '2015-12-04', 'customer', '0', '271', 'Paid', 'Cash', '298', '0', '6010', '', '1');
INSERT INTO `master_invoice` VALUES ('308', '308', '2015-12-04', 'customer', '0', '270', 'Paid', 'Cash', '0', '2500', '6500.6', '', '1');
INSERT INTO `master_invoice` VALUES ('309', '309', '2015-12-04', 'customer', '0', '269', 'Paid', 'Cash', '0', '500', '13000.9', '', '1');
INSERT INTO `master_invoice` VALUES ('310', '310', '2015-12-04', 'customer', '0', '282', 'Paid', 'Cash', '0', '600', '10500.6', '', '1');
INSERT INTO `master_invoice` VALUES ('311', '311', '2015-12-04', 'customer', '0', '283', 'Paid', 'Cash', '0', '0', '1871.1', '', '1');
INSERT INTO `master_invoice` VALUES ('312', '312', '2015-12-04', 'customer', '0', '28', 'Paid', 'Cash', '0', '150', '18851.9', '', '1');
INSERT INTO `master_invoice` VALUES ('313', '313', '2015-12-04', 'customer', '0', '284', 'Paid', 'Cash', '0', '0', '0', '', '1');
INSERT INTO `master_invoice` VALUES ('314', '314', '2015-12-04', 'customer', '0', '283', 'Paid', 'Cash', '0', '0', '4100.25', '', '1');
INSERT INTO `master_invoice` VALUES ('315', '315', '2015-12-04', 'customer', '0', '284', 'Paid', 'Cash', '0', '0', '3000.9', '', '1');
INSERT INTO `master_invoice` VALUES ('316', '316', '2015-12-04', 'customer', '0', '284', 'Paid', 'Cash', '0', '100', '4100', '', '1');
INSERT INTO `master_invoice` VALUES ('317', '317', '2015-12-04', 'customer', '0', '285', 'Paid', 'Cash', '0', '100', '3200.15', '', '1');
INSERT INTO `master_invoice` VALUES ('318', '318', '2015-12-04', 'customer', '0', '286', 'Paid', 'Cash', '0', '312', '16500.6', '', '1');
INSERT INTO `master_invoice` VALUES ('319', '319', '2015-12-05', 'customer', '0', '287', 'Paid', 'Cash', '0', '200', '1800.25', '', '1');
INSERT INTO `master_invoice` VALUES ('320', '320', '2015-12-07', 'customer', '0', '288', 'Paid', 'Cash', '399', '0', '16100.7', '', '1');
INSERT INTO `master_invoice` VALUES ('324', '1', '2015-10-08', 'tinmerchant', '1', '2', 'Paid', 'Dabit Memo', '0', '0', '38060', '', '1');
INSERT INTO `master_invoice` VALUES ('325', '2', '2015-10-08', 'tinmerchant', '1', '1', 'Pending', 'Dabit Memo', '0', '0', '47020', '', '1');
INSERT INTO `master_invoice` VALUES ('326', '3', '2015-11-06', 'tinmerchant', '1', '1', 'Pending', 'Dabit Memo', '0', '0', '94182', '', '1');
INSERT INTO `master_invoice` VALUES ('327', '4', '2015-12-04', 'tinmerchant', '1', '2', 'Pending', 'Dabit Memo', '0', '0', '47460', '', '1');
INSERT INTO `master_invoice` VALUES ('328', '321', '2015-12-11', 'customer', '0', '5', 'Pending', 'Cash', '0', '0', '28653.4', ' hgkjhkjhkj kj k', '1');
INSERT INTO `master_invoice` VALUES ('329', '1', '2015-12-02', 'merchant', '0', '2', 'Pending', 'Debit Memo', '0', '0', '25000.5', 'fg g dg dfg', '1');
INSERT INTO `master_invoice` VALUES ('330', '5', '2015-12-09', 'tinmerchant', '0', '1', 'Pending', 'Dabit Memo', '10', '10', '14063.7', '', '1');
INSERT INTO `master_invoice` VALUES ('331', '2', '2015-12-23', 'merchant', '0', '1', 'Paid', 'Dabit Memo', '0', '0', '9202.2', '', '1');
INSERT INTO `master_invoice` VALUES ('332', '6', '2015-12-11', 'tinmerchant', '1', '1', 'Paid', 'Dabit Memo', '0', '0', '14675.8', '', '1');
INSERT INTO `master_invoice` VALUES ('333', '322', '2015-12-01', 'customer', '0', '300', 'Paid', 'Cash', '0', '0', '9200.1', 'this is test', '1');
INSERT INTO `master_invoice` VALUES ('334', '3', '2015-12-10', 'merchant', '0', '2', 'Paid', 'Debit Memo', '0', '0', '22250.6', '', '1');
INSERT INTO `master_invoice` VALUES ('335', '4', '2015-12-22', 'merchant', '0', '3', 'Paid', 'Debit Memo', '0', '0', '8400', '', '1');
INSERT INTO `master_invoice` VALUES ('336', '7', '2015-12-22', 'tinmerchant', '1', '4', 'Paid', 'Debit Memo', '0', '0', '17900.4', '', '1');
INSERT INTO `master_invoice` VALUES ('337', '323', '2015-12-16', 'customer', '0', '8', 'Pending', 'Cash', '0', '0', '7750', ' gd gdfgdfg', '1');
INSERT INTO `master_invoice` VALUES ('338', '324', '2015-12-25', 'customer', '0', '6', 'Pending', 'Cash', '0', '0', '175', ' vbvbn', '1');
INSERT INTO `master_invoice` VALUES ('339', '325', '2015-12-03', 'customer', '0', '6', 'Pending', 'Cash', '0', '0', '20', 'asd asdasd', '1');
INSERT INTO `master_invoice` VALUES ('340', '5', '2015-12-09', 'merchant', '0', '2', 'Paid', 'Debit Memo', '0', '0', '25', 'dad asd', '1');
INSERT INTO `master_invoice` VALUES ('341', '326', '2015-12-08', 'customer', '0', '7', 'Pending', 'Cash', '0', '0', '332', 'fgf gdfg fdgdg', '1');
INSERT INTO `master_invoice` VALUES ('342', '327', '2015-12-09', 'customer', '0', '5', 'Pending', 'Cash', '0', '0', '81', 'This is test', '1');
INSERT INTO `master_invoice` VALUES ('343', '6', '2015-12-09', 'merchant', '0', '2', 'Paid', 'Debit Memo', '0', '0', '164', 'asd asdas', '1');
INSERT INTO `master_invoice` VALUES ('344', '8', '2015-12-09', 'tinmerchant', '1', '3', 'Pending', 'Debit Memo', '0', '0', '230', 'sdf sdfsdf', '1');

-- ----------------------------
-- Table structure for master_invoice_child
-- ----------------------------
DROP TABLE IF EXISTS `master_invoice_child`;
CREATE TABLE `master_invoice_child` (
  `InvoiceChildID` int(11) NOT NULL AUTO_INCREMENT,
  `InvoiceID` int(11) DEFAULT NULL,
  `Type` varchar(100) DEFAULT NULL,
  `CompanyID` int(11) DEFAULT NULL,
  `ModelNumber` varchar(100) DEFAULT NULL,
  `Color` varchar(100) DEFAULT NULL,
  `Size` varchar(100) DEFAULT NULL,
  `ItemName` varchar(100) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `TotalPrice` float DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`InvoiceChildID`)
) ENGINE=MyISAM AUTO_INCREMENT=515 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_invoice_child
-- ----------------------------
INSERT INTO `master_invoice_child` VALUES ('1', '1', 'cycle', '11', '', '', '', null, '48', '0', '0', '1');
INSERT INTO `master_invoice_child` VALUES ('2', '2', 'cycle', '15', 'CUB', 'MULTI', '12\"', null, '1', '2800.35', '2800.35', '1');
INSERT INTO `master_invoice_child` VALUES ('3', '3', 'cycle', '8', 'BUTTERFLY', 'PINK', '26\"', null, '1', '4350.15', '4350.15', '1');
INSERT INTO `master_invoice_child` VALUES ('4', '4', 'spare', '11', null, null, null, 'CARRIER SILVER ALLOY', '1', '600.6', '600.6', '1');
INSERT INTO `master_invoice_child` VALUES ('5', '5', 'spare', '11', null, null, null, 'CHAIN WHEEL SET TCWC 28/38/48 T', '1', '550.2', '550.2', '1');
INSERT INTO `master_invoice_child` VALUES ('6', '6', 'cycle', '12', 'MISCEO (M.S.)', 'BLACK (M.FINISH)', '700 C', null, '1', '23200.8', '23200.8', '1');
INSERT INTO `master_invoice_child` VALUES ('7', '7', 'cycle', '10', 'CELTIC 2.1', 'RED', 'MEDIUM', null, '1', '25900.3', '25900.3', '1');
INSERT INTO `master_invoice_child` VALUES ('8', '8', 'spare', '11', null, null, null, 'BICYCLE STAND WALL HANGING SINGLE', '2', '330.75', '661.5', '1');
INSERT INTO `master_invoice_child` VALUES ('9', '9', 'cycle', '8', 'UNIQUE', 'YELLOW-BLACK', '26\"', null, '1', '4000.5', '4000.5', '1');
INSERT INTO `master_invoice_child` VALUES ('10', '10', 'spare', '11', null, null, null, 'BICYCLE ACCESSORY GLOVES TOTEM', '1', '390.6', '390.6', '1');
INSERT INTO `master_invoice_child` VALUES ('11', '11', 'spare', '11', null, null, null, 'BICYCLE STAND WALL HANGING DOUBLE - 02', '1', '600.6', '600.6', '1');
INSERT INTO `master_invoice_child` VALUES ('12', '12', 'cycle', '8', 'EXTRUSION', 'BLUE', '24\"', null, '1', '4350.15', '4350.15', '1');
INSERT INTO `master_invoice_child` VALUES ('486', '331', 'cycle', '10', 'DTR 20', 'YELLOW', '20\"', null, '1', '8001', '8001', '1');
INSERT INTO `master_invoice_child` VALUES ('14', '14', 'spare', '11', null, null, null, 'LIGHT XC 606 T', '1', '120.75', '120.75', '1');
INSERT INTO `master_invoice_child` VALUES ('15', '15', 'cycle', '8', 'BUTTERFLY', 'BABIE PINK', '24\"', null, '1', '4200', '4200', '1');
INSERT INTO `master_invoice_child` VALUES ('16', '16', 'cycle', '11', 'TEENZ', 'GREEN', '20\"', null, '1', '4900.35', '4900.35', '1');
INSERT INTO `master_invoice_child` VALUES ('17', '17', 'spare', '11', null, null, null, 'BOTTLE CAGE PVC COLOURED', '1', '50.4', '50.4', '1');
INSERT INTO `master_invoice_child` VALUES ('18', '18', 'cycle', '12', 'MISCEO (M.S.)', 'BLACK (M.FINISH)', '700 C', null, '1', '23200.8', '23200.8', '1');
INSERT INTO `master_invoice_child` VALUES ('19', '19', 'cycle', '10', 'TRANCE PRO', 'BLACK', 'SMALL', null, '1', '12700.8', '12700.8', '1');
INSERT INTO `master_invoice_child` VALUES ('20', '20', 'cycle', '11', 'INNOVATE (M.S.)', 'WHITE', '700 C', null, '1', '14000.7', '14000.7', '1');
INSERT INTO `master_invoice_child` VALUES ('21', '21', 'cycle', '8', 'BUTTERFLY', 'PINK', '26\"', null, '1', '4450.01', '4450.01', '1');
INSERT INTO `master_invoice_child` VALUES ('22', '22', 'cycle', '10', 'DTR 24', 'BLACK', 'MEDIUM', null, '1', '9000.6', '9000.6', '1');
INSERT INTO `master_invoice_child` VALUES ('23', '22', 'spare', '11', null, null, null, 'SIDE STAND 24', '1', '80.85', '80.85', '1');
INSERT INTO `master_invoice_child` VALUES ('24', '23', 'cycle', '8', 'BUTTERFLY', 'PINK', '26\"', null, '1', '4350.15', '4350.15', '1');
INSERT INTO `master_invoice_child` VALUES ('25', '24', 'cycle', '9', 'DYNAMITE ZX', 'RED', '24\"', null, '1', '5300.4', '5300.4', '1');
INSERT INTO `master_invoice_child` VALUES ('26', '25', 'cycle', '10', 'UNPLUGGED', 'RED', 'LARGE', null, '1', '18600.8', '18600.8', '1');
INSERT INTO `master_invoice_child` VALUES ('27', '25', 'spare', '11', null, null, null, 'SIDE STAND 24 - 29 ALLOY BLACK SILVER', '1', '400.05', '400.05', '1');
INSERT INTO `master_invoice_child` VALUES ('28', '25', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('29', '25', 'spare', '11', null, null, null, 'LIGHT XC 606 T', '1', '120.75', '120.75', '1');
INSERT INTO `master_invoice_child` VALUES ('30', '26', 'spare', '11', null, null, null, 'HELEMT G 20', '1', '1200.15', '1200.15', '1');
INSERT INTO `master_invoice_child` VALUES ('31', '27', 'cycle', '11', 'CALDRON - EF (M.S.)', 'WHITE', '24\"', null, '1', '9299.85', '9299.85', '1');
INSERT INTO `master_invoice_child` VALUES ('32', '28', 'cycle', '9', 'MACH CITY I BIKE', 'RED', '26\"', null, '1', '5200.65', '5200.65', '1');
INSERT INTO `master_invoice_child` VALUES ('33', '29', 'cycle', '11', 'SX 006', 'RED', '16\"', null, '1', '4100.25', '4100.25', '1');
INSERT INTO `master_invoice_child` VALUES ('34', '30', 'cycle', '9', 'MACH CITY I BIKE', 'RED', '26\"', null, '1', '5200.65', '5200.65', '1');
INSERT INTO `master_invoice_child` VALUES ('35', '31', 'cycle', '8', 'REDOX', 'WHITE-BLUE', '26\"', null, '1', '5150', '5150', '1');
INSERT INTO `master_invoice_child` VALUES ('36', '32', 'cycle', '8', 'ELITE', 'HOT RED', '24\"', null, '1', '4400.55', '4400.55', '1');
INSERT INTO `master_invoice_child` VALUES ('37', '33', 'cycle', '8', 'REDOX', 'WHITE-BLUE', '26\"', null, '1', '5150', '5150', '1');
INSERT INTO `master_invoice_child` VALUES ('38', '34', 'cycle', '12', 'TERRAIN 30 (M.S. / D.D.)', 'BLACK', '26\"', null, '1', '14100.5', '14100.5', '1');
INSERT INTO `master_invoice_child` VALUES ('39', '35', 'cycle', '11', 'DIRT MAX (M.S. / D.D.)', 'BLACK (M.FINISH)', '26\"', null, '1', '12000.5', '12000.5', '1');
INSERT INTO `master_invoice_child` VALUES ('40', '35', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('41', '36', 'cycle', '8', 'CUBA IBC', 'S.BLUE-SILVER', '26\"', null, '1', '5100.9', '5100.9', '1');
INSERT INTO `master_invoice_child` VALUES ('42', '37', 'cycle', '8', 'BOUNTY (IBC)', 'HOT RED', '26\"', null, '1', '5000.1', '5000.1', '1');
INSERT INTO `master_invoice_child` VALUES ('43', '38', 'cycle', '15', 'FORCE 10', 'MULTI', '20\"', null, '1', '3750.6', '3750.6', '1');
INSERT INTO `master_invoice_child` VALUES ('44', '39', 'cycle', '8', 'CRUZE', 'SILVER-BLUE', '24\"', null, '1', '4200', '4200', '1');
INSERT INTO `master_invoice_child` VALUES ('45', '40', 'cycle', '15', 'BOW-TIE', 'MULTI', '16\"', null, '1', '3400.95', '3400.95', '1');
INSERT INTO `master_invoice_child` VALUES ('46', '41', 'cycle', '8', 'UNIQUE', 'HOT RED', '26\"', null, '1', '4000.5', '4000.5', '1');
INSERT INTO `master_invoice_child` VALUES ('47', '42', 'cycle', '12', 'MISCEO (M.S.)', 'BLACK (M.FINISH)', '700 C', null, '1', '23200.8', '23200.8', '1');
INSERT INTO `master_invoice_child` VALUES ('48', '42', 'spare', '11', null, null, null, 'WATTER BOTTLE 500 ML PVC RALEIGH', '1', '210', '210', '1');
INSERT INTO `master_invoice_child` VALUES ('49', '42', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('50', '43', 'cycle', '12', 'MISCEO (M.S.)', 'BLACK (M.FINISH)', '700 C', null, '1', '23200.8', '23200.8', '1');
INSERT INTO `master_invoice_child` VALUES ('51', '44', 'cycle', '8', 'JAX', 'BLUE', '20\"', null, '1', '3000.9', '3000.9', '1');
INSERT INTO `master_invoice_child` VALUES ('52', '45', 'spare', '11', null, null, null, 'LIGHT XC-106 R', '1', '195.3', '195.3', '1');
INSERT INTO `master_invoice_child` VALUES ('53', '46', 'cycle', '20', 'SUPER SPORTS WOMAN', 'BLUE', 'MEDIUM', null, '1', '23100', '23100', '1');
INSERT INTO `master_invoice_child` VALUES ('54', '46', 'spare', '11', null, null, null, 'LIGHT XC 606 T', '1', '120.75', '120.75', '1');
INSERT INTO `master_invoice_child` VALUES ('55', '46', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('56', '47', 'spare', '11', null, null, null, 'SIDE STAND 24 - 29 ALLOY BLACK ', '1', '350.7', '350.7', '1');
INSERT INTO `master_invoice_child` VALUES ('57', '48', 'cycle', '15', 'BOW-TIE', 'MULTI', '14\"', null, '1', '3150', '3150', '1');
INSERT INTO `master_invoice_child` VALUES ('58', '49', 'cycle', '10', 'BLUES 1.1', 'SILVER', 'MEDIUM', null, '1', '15900.2', '15900.2', '1');
INSERT INTO `master_invoice_child` VALUES ('59', '49', 'spare', '11', null, null, null, 'SIDE STAND 24 - 29 ALLOY BLACK SILVER', '1', '400.05', '400.05', '1');
INSERT INTO `master_invoice_child` VALUES ('60', '50', 'cycle', '10', 'BLUES 1.1', 'SILVER', 'SMALL', null, '1', '15900.2', '15900.2', '1');
INSERT INTO `master_invoice_child` VALUES ('61', '50', 'spare', '11', null, null, null, 'SIDE STAND 24 - 29 ALLOY BLACK SILVER', '1', '400.05', '400.05', '1');
INSERT INTO `master_invoice_child` VALUES ('62', '51', 'spare', '11', null, null, null, 'HELEMT G 20', '1', '1200.15', '1200.15', '1');
INSERT INTO `master_invoice_child` VALUES ('63', '52', 'cycle', '11', 'SOCCER (S.S. / F.D.)', 'YELLOW-RED', '26\"', null, '1', '6600.3', '6600.3', '1');
INSERT INTO `master_invoice_child` VALUES ('64', '53', 'spare', '11', null, null, null, 'DERAILER REAR 7 SPEED SC INDEX', '1', '200.55', '200.55', '1');
INSERT INTO `master_invoice_child` VALUES ('65', '54', 'cycle', '20', 'SUPER SPORTS WOMAN', 'BLUE', 'MEDIUM', null, '1', '23100', '23100', '1');
INSERT INTO `master_invoice_child` VALUES ('66', '54', 'spare', '11', null, null, null, 'LIGHT XC 735 A', '1', '195.3', '195.3', '1');
INSERT INTO `master_invoice_child` VALUES ('67', '54', 'spare', '11', null, null, null, 'LIGHT XC 606 T', '1', '120.75', '120.75', '1');
INSERT INTO `master_invoice_child` VALUES ('68', '54', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('69', '55', 'cycle', '11', 'X TRACK (S.S. / F.D.)', 'YELLOW', '26\"', null, '1', '6500.55', '6500.55', '1');
INSERT INTO `master_invoice_child` VALUES ('70', '56', 'cycle', '9', 'SPARTA ZX', 'BLACK-GREEN', '24\"', null, '1', '5300.4', '5300.4', '1');
INSERT INTO `master_invoice_child` VALUES ('71', '57', 'cycle', '8', 'SKYTOP', 'PITCH', '26\"', null, '1', '4300.8', '4300.8', '1');
INSERT INTO `master_invoice_child` VALUES ('72', '58', 'cycle', '11', 'X TRACK (S.S. / F.D.)', 'YELLOW', '26\"', null, '1', '6500.55', '6500.55', '1');
INSERT INTO `master_invoice_child` VALUES ('73', '59', 'spare', '11', null, null, null, 'TUBE 700 * 35-45 C (MAXXIS)', '2', '250.95', '501.9', '1');
INSERT INTO `master_invoice_child` VALUES ('74', '60', 'cycle', '15', 'RAPID', 'MULTI', '14\"', null, '1', '3650.85', '3650.85', '1');
INSERT INTO `master_invoice_child` VALUES ('75', '61', 'spare', '11', null, null, null, 'HELEMT G 20', '1', '1200.15', '1200.15', '1');
INSERT INTO `master_invoice_child` VALUES ('76', '62', 'cycle', '10', 'ROCK 1.0', 'BLUE', 'MEDIUM', null, '1', '12100.2', '12100.2', '1');
INSERT INTO `master_invoice_child` VALUES ('77', '62', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('78', '63', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('79', '64', 'cycle', '8', 'JAX', 'BLUE', '20\"', null, '1', '3000.9', '3000.9', '1');
INSERT INTO `master_invoice_child` VALUES ('80', '65', 'cycle', '8', 'REDOX', 'WHITE-BLUE', '26\"', null, '1', '5150', '5150', '1');
INSERT INTO `master_invoice_child` VALUES ('81', '65', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('82', '65', 'spare', '11', null, null, null, 'WATTER BOTTLE 500 ML PVC RALEIGH', '1', '210', '210', '1');
INSERT INTO `master_invoice_child` VALUES ('83', '66', 'cycle', '8', 'EXTRUSION', 'BLACK', '26\"', null, '1', '4400.55', '4400.55', '1');
INSERT INTO `master_invoice_child` VALUES ('84', '67', 'spare', '11', null, null, null, 'TYRE 700 * 35 C KENDA', '1', '350.7', '350.7', '1');
INSERT INTO `master_invoice_child` VALUES ('85', '67', 'spare', '11', null, null, null, 'TYRE 700 * 35 C KENDA', '1', '350.7', '350.7', '1');
INSERT INTO `master_invoice_child` VALUES ('86', '67', 'spare', '11', null, null, null, 'FREE WHEEL GUARD PVC ', '1', '50.4', '50.4', '1');
INSERT INTO `master_invoice_child` VALUES ('87', '67', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('88', '68', 'cycle', '11', 'RS 26 (S.S. / F.D.)', 'WHITE', '26\"', null, '1', '5800.2', '5800.2', '1');
INSERT INTO `master_invoice_child` VALUES ('89', '69', 'cycle', '11', 'LOADED (M.S. / D.D.)', 'WHITE', '26\"', null, '1', '17300.8', '17300.8', '1');
INSERT INTO `master_invoice_child` VALUES ('90', '70', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', null, '1', '5401.2', '5401.2', '1');
INSERT INTO `master_invoice_child` VALUES ('91', '71', 'cycle', '8', 'ELITE', 'HOT RED', '24\"', null, '1', '4400.55', '4400.55', '1');
INSERT INTO `master_invoice_child` VALUES ('92', '72', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', null, '1', '5401.2', '5401.2', '1');
INSERT INTO `master_invoice_child` VALUES ('93', '72', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('94', '72', 'spare', '11', null, null, null, 'WATTER BOTTLE 500 ML PVC RALEIGH', '1', '210', '210', '1');
INSERT INTO `master_invoice_child` VALUES ('95', '73', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', null, '1', '5401.2', '5401.2', '1');
INSERT INTO `master_invoice_child` VALUES ('96', '73', 'spare', '11', '', '', '', 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('97', '73', 'spare', '11', '', '', '', 'WATTER BOTTLE 500 ML PVC RALEIGH', '1', '210', '210', '1');
INSERT INTO `master_invoice_child` VALUES ('98', '74', 'spare', '11', '', '', '', 'LIGHT HL 112 W', '1', '1350.3', '1350.3', '1');
INSERT INTO `master_invoice_child` VALUES ('99', '75', 'cycle', '11', 'TRIGGER (S.S. / F.D.)', 'BLACK (M.FINISH)', '24\"', null, '1', '6600.3', '6600.3', '1');
INSERT INTO `master_invoice_child` VALUES ('100', '76', 'cycle', '15', 'CX', 'MULTI', '20\"', null, '1', '3700.2', '3700.2', '1');
INSERT INTO `master_invoice_child` VALUES ('101', '77', 'spare', '11', '', '', '', 'LIGHT HL 105 W', '1', '1150.8', '1150.8', '1');
INSERT INTO `master_invoice_child` VALUES ('102', '78', 'cycle', '11', 'TEENZ', 'GREEN', '20\"', null, '1', '4900.35', '4900.35', '1');
INSERT INTO `master_invoice_child` VALUES ('103', '79', 'spare', '11', '', '', '', 'HELEMT G 30', '1', '900.9', '900.9', '1');
INSERT INTO `master_invoice_child` VALUES ('104', '80', 'spare', '11', '', '', '', 'TOP TUBE BAG TOTEM', '1', '530.25', '530.25', '1');
INSERT INTO `master_invoice_child` VALUES ('105', '81', 'cycle', '11', 'HAZARD-EF (M.S.)', 'GREEN', '26\"', null, '1', '9900.45', '9900.45', '1');
INSERT INTO `master_invoice_child` VALUES ('106', '81', 'spare', '11', '', '', '', 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('107', '81', 'spare', '11', '', '', '', 'WATTER BOTTLE 500 ML PVC RALEIGH', '1', '210', '210', '1');
INSERT INTO `master_invoice_child` VALUES ('108', '82', 'cycle', '11', 'DIRT MAX (S.S.)', 'GREEN', '24\"', null, '1', '6100.5', '6100.5', '1');
INSERT INTO `master_invoice_child` VALUES ('109', '83', 'cycle', '12', 'MY RIDE (M.S.)', 'WHITE', '26\"', null, '1', '6500.55', '6500.55', '1');
INSERT INTO `master_invoice_child` VALUES ('110', '84', 'cycle', '11', 'EQUINOX (M.S.)', 'RED', '700 C', null, '1', '10400.2', '10400.2', '1');
INSERT INTO `master_invoice_child` VALUES ('111', '84', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('112', '84', 'spare', '11', null, null, null, 'WATTER BOTTLE 500 ML PVC RALEIGH', '1', '210', '210', '1');
INSERT INTO `master_invoice_child` VALUES ('113', '85', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', null, '1', '5401.2', '5401.2', '1');
INSERT INTO `master_invoice_child` VALUES ('114', '86', 'cycle', '17', 'ANTOP / ADDER (F.D.)', 'SILVER', '26\"', null, '1', '5500.95', '5500.95', '1');
INSERT INTO `master_invoice_child` VALUES ('115', '87', 'spare', '11', null, null, null, 'CHAIN GUARD 4/5 HOLE ', '1', '80.85', '80.85', '1');
INSERT INTO `master_invoice_child` VALUES ('116', '88', 'cycle', '11', 'LOADED (M.S. / D.D.)', 'WHITE', '26\"', null, '1', '17300.8', '17300.8', '1');
INSERT INTO `master_invoice_child` VALUES ('117', '88', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('118', '88', 'spare', '11', null, null, null, 'WATTER BOTTLE 500 ML PVC RALEIGH', '1', '210', '210', '1');
INSERT INTO `master_invoice_child` VALUES ('119', '89', 'cycle', '9', 'CYBOT', 'GREEN-BLACK', '20\"', null, '1', '4100.25', '4100.25', '1');
INSERT INTO `master_invoice_child` VALUES ('120', '90', 'spare', '11', null, null, null, 'HELEMT G 20', '1', '1200.15', '1200.15', '1');
INSERT INTO `master_invoice_child` VALUES ('121', '90', 'spare', '11', null, null, null, 'BICYCLE ACCESSORY GLOVES TOTEM', '1', '390.6', '390.6', '1');
INSERT INTO `master_invoice_child` VALUES ('122', '91', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', null, '1', '5401.2', '5401.2', '1');
INSERT INTO `master_invoice_child` VALUES ('123', '92', 'cycle', '10', 'UNPLUGGED', 'RED', 'LARGE', null, '1', '18600.8', '18600.8', '1');
INSERT INTO `master_invoice_child` VALUES ('124', '92', 'spare', '11', null, null, null, 'LIGHT XC 735 A', '1', '195.3', '195.3', '1');
INSERT INTO `master_invoice_child` VALUES ('125', '92', 'spare', '11', null, null, null, 'LIGHT XC 767 F', '1', '160.65', '160.65', '1');
INSERT INTO `master_invoice_child` VALUES ('126', '92', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('127', '92', 'spare', '11', null, null, null, 'WATTER BOTTLE 500 ML PVC RALEIGH', '1', '210', '210', '1');
INSERT INTO `master_invoice_child` VALUES ('128', '93', 'spare', '11', null, null, null, 'LIGHT XC 735 A', '1', '195.3', '195.3', '1');
INSERT INTO `master_invoice_child` VALUES ('129', '93', 'spare', '11', null, null, null, 'LIGHT XC 606 T', '1', '120.75', '120.75', '1');
INSERT INTO `master_invoice_child` VALUES ('130', '94', 'spare', '11', null, null, null, 'LIGHT HL 112 W', '1', '1350.3', '1350.3', '1');
INSERT INTO `master_invoice_child` VALUES ('131', '94', 'spare', '11', null, null, null, 'TUBE 700 * 35-45 C (MAXXIS)', '1', '250.95', '250.95', '1');
INSERT INTO `master_invoice_child` VALUES ('132', '95', 'cycle', '15', 'PACE', 'MULTI', '16\"', null, '1', '3650.85', '3650.85', '1');
INSERT INTO `master_invoice_child` VALUES ('133', '96', 'cycle', '16', 'DUAL', 'BLACK', 'LARGE', null, '1', '17900.4', '17900.4', '1');
INSERT INTO `master_invoice_child` VALUES ('134', '96', 'spare', '11', null, null, null, 'WATTER BOTTLE 500 ML PVC RALEIGH', '1', '210', '210', '1');
INSERT INTO `master_invoice_child` VALUES ('135', '96', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('136', '96', 'spare', '11', null, null, null, 'SIDE KICK STAND  ADJUSTABLE  (616-10)', '1', '300.3', '300.3', '1');
INSERT INTO `master_invoice_child` VALUES ('137', '97', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('138', '98', 'spare', '11', null, null, null, 'SIDE STAND 24 - 29 ALLOY BLACK ', '1', '350.7', '350.7', '1');
INSERT INTO `master_invoice_child` VALUES ('141', '99', 'cycle', '16', 'DUAL', 'BLACK', 'LARGE', null, '1', '17900.4', '17900.4', '1');
INSERT INTO `master_invoice_child` VALUES ('140', '100', 'cycle', '8', 'UNIQUE', 'PITCH', '26\"', null, '1', '4000.5', '4000.5', '1');
INSERT INTO `master_invoice_child` VALUES ('142', '101', 'spare', '11', null, null, null, 'BICYCLE STAND WALL HANGING SINGLE', '12', '330.75', '3969', '1');
INSERT INTO `master_invoice_child` VALUES ('143', '101', 'spare', '11', null, null, null, 'BICYCLE STAND WALL HANGING DOUBLE - 02', '5', '600.6', '3003', '1');
INSERT INTO `master_invoice_child` VALUES ('144', '102', 'cycle', '15', 'CROWN', 'MULTI', '14\"', null, '1', '3801', '3801', '1');
INSERT INTO `master_invoice_child` VALUES ('145', '103', 'cycle', '10', 'UNPLUGGED', 'RED', 'LARGE', null, '1', '18600.8', '18600.8', '1');
INSERT INTO `master_invoice_child` VALUES ('146', '103', 'spare', '11', null, null, null, 'SIDE STAND 24 - 29 ALLOY BLACK ', '1', '350.7', '350.7', '1');
INSERT INTO `master_invoice_child` VALUES ('147', '104', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', null, '1', '5401.2', '5401.2', '1');
INSERT INTO `master_invoice_child` VALUES ('148', '105', 'spare', '11', null, null, null, 'MUDUARD FITTING ONLY PVC', '10', '40.95', '409.5', '1');
INSERT INTO `master_invoice_child` VALUES ('149', '106', 'cycle', '8', 'INFERNO', 'SILVER BLACK', '26\"', null, '1', '4400.55', '4400.55', '1');
INSERT INTO `master_invoice_child` VALUES ('150', '107', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', null, '1', '5401.2', '5401.2', '1');
INSERT INTO `master_invoice_child` VALUES ('151', '108', 'cycle', '12', 'MONSTER X (S.S.)', 'WHITE-RED', '24\"', null, '1', '7200.9', '7200.9', '1');
INSERT INTO `master_invoice_child` VALUES ('152', '109', 'cycle', '9', 'DYNAMITE ZX', 'RED', '24\"', null, '1', '5300.4', '5300.4', '1');
INSERT INTO `master_invoice_child` VALUES ('153', '110', 'cycle', '12', 'MY RIDE (M.S.)', 'WHITE', '26\"', null, '1', '6500.55', '6500.55', '1');
INSERT INTO `master_invoice_child` VALUES ('154', '111', 'cycle', '11', 'STYLOUS (S.S.)', 'BLUE (M.FINISH)', '26\"', null, '1', '7000.35', '7000.35', '1');
INSERT INTO `master_invoice_child` VALUES ('155', '112', 'cycle', '12', 'MY RIDE (M.S.)', 'WHITE', '26\"', null, '1', '6500.55', '6500.55', '1');
INSERT INTO `master_invoice_child` VALUES ('156', '113', 'cycle', '12', 'MY RIDE (M.S.)', 'WHITE', '26\"', null, '1', '6500.55', '6500.55', '1');
INSERT INTO `master_invoice_child` VALUES ('157', '114', 'spare', '11', null, null, null, 'TUBE 700 * 35-45 C (MAXXIS)', '1', '250.95', '250.95', '1');
INSERT INTO `master_invoice_child` VALUES ('158', '115', 'spare', '11', null, null, null, 'CHAIN WHEEL SET TCWC 28/38/48 T', '1', '550.2', '550.2', '1');
INSERT INTO `master_invoice_child` VALUES ('159', '116', 'cycle', '11', 'STYLOUS (S.S.)', 'BLUE (M.FINISH)', '26\"', null, '1', '7000.35', '7000.35', '1');
INSERT INTO `master_invoice_child` VALUES ('160', '117', 'cycle', '12', 'MISCEO 1.0 (S.S.)', 'BLACK (M.FINISH)', '27.5', null, '1', '9000.6', '9000.6', '1');
INSERT INTO `master_invoice_child` VALUES ('161', '118', 'spare', '11', null, null, null, 'LIGHT XC 606 T', '1', '120.75', '120.75', '1');
INSERT INTO `master_invoice_child` VALUES ('162', '119', 'cycle', '10', 'BLUES 1.1', 'SILVER', 'SMALL', null, '1', '15900.2', '15900.2', '1');
INSERT INTO `master_invoice_child` VALUES ('163', '119', 'spare', '11', '', '', '', 'SIDE STAND 24 - 29 ALLOY BLACK SILVER', '1', '400.05', '400.05', '1');
INSERT INTO `master_invoice_child` VALUES ('164', '119', 'spare', '11', '', '', '', 'LIGHT XC 998 W', '1', '160.65', '160.65', '1');
INSERT INTO `master_invoice_child` VALUES ('165', '119', 'spare', '11', '', '', '', 'LIGHT XC 606 T', '1', '120.75', '120.75', '1');
INSERT INTO `master_invoice_child` VALUES ('166', '120', 'cycle', '15', 'CROWN', 'MULTI', '14\"', null, '1', '3801', '3801', '1');
INSERT INTO `master_invoice_child` VALUES ('167', '121', 'spare', '11', null, null, null, 'LIGHT XC 606 T', '1', '120.75', '120.75', '1');
INSERT INTO `master_invoice_child` VALUES ('168', '122', 'cycle', '15', 'CROWN', 'MULTI', '16\"', null, '1', '4050.9', '4050.9', '1');
INSERT INTO `master_invoice_child` VALUES ('169', '123', 'cycle', '17', 'ANTOP / ADDER (F.D.)', 'SILVER', '26\"', null, '1', '5500.95', '5500.95', '1');
INSERT INTO `master_invoice_child` VALUES ('170', '124', 'cycle', '12', 'MISCEO (M.S.)', 'BLACK (M.FINISH)', '700 C', null, '1', '23200.8', '23200.8', '1');
INSERT INTO `master_invoice_child` VALUES ('171', '124', 'spare', '11', '', '', '', 'BICYCLE LOCK', '1', '350.7', '350.7', '1');
INSERT INTO `master_invoice_child` VALUES ('172', '125', 'cycle', '10', 'CELTIC 2.2', 'YELLOW-BLACK', 'MEDIUM', null, '1', '31600.8', '31600.8', '1');
INSERT INTO `master_invoice_child` VALUES ('173', '126', 'cycle', '10', 'ROCK 1.1', 'GREY', 'MEDIUM', null, '1', '16001', '16001', '1');
INSERT INTO `master_invoice_child` VALUES ('174', '126', 'spare', '11', '', '', '', 'SIDE STAND 24 - 29 ALLOY BLACK SILVER', '1', '400.05', '400.05', '1');
INSERT INTO `master_invoice_child` VALUES ('175', '127', 'cycle', '8', 'CRUZE', 'HOT RED', '24\"', null, '1', '4200', '4200', '1');
INSERT INTO `master_invoice_child` VALUES ('176', '128', 'cycle', '13', 'LAND 8.10 (M.S. / D.D.)', 'MET GREY', '700 C', null, '1', '40000.8', '40000.8', '1');
INSERT INTO `master_invoice_child` VALUES ('177', '129', 'spare', '11', null, null, null, 'SIDE STAND 24 - 29 ALLOY BLACK SILVER', '1', '400.05', '400.05', '1');
INSERT INTO `master_invoice_child` VALUES ('178', '130', 'cycle', '9', 'CYBOT', 'GREEN-BLACK', '20\"', null, '1', '4100.25', '4100.25', '1');
INSERT INTO `master_invoice_child` VALUES ('179', '131', 'spare', '11', null, null, null, 'LIGHT XC-106 R', '1', '195.3', '195.3', '1');
INSERT INTO `master_invoice_child` VALUES ('180', '132', 'cycle', '8', 'UNIQUE', 'SILVER-BLUE', '26\"', null, '1', '4000.5', '4000.5', '1');
INSERT INTO `master_invoice_child` VALUES ('181', '133', 'cycle', '12', 'MISCEO 1.0 (S.S.)', 'BLACK (M.FINISH)', '27.5', null, '1', '9000.6', '9000.6', '1');
INSERT INTO `master_invoice_child` VALUES ('182', '133', 'spare', '11', null, null, null, 'BOTTLE CAGE PVC COLOURED', '1', '50.4', '50.4', '1');
INSERT INTO `master_invoice_child` VALUES ('183', '133', 'spare', '11', null, null, null, 'WATER BOTTLE 700 ML POLISPORT', '1', '160.65', '160.65', '1');
INSERT INTO `master_invoice_child` VALUES ('184', '134', 'spare', '11', null, null, null, 'SIDE STAND 24 - 29 ALLOY BLACK SILVER', '1', '400.05', '400.05', '1');
INSERT INTO `master_invoice_child` VALUES ('185', '135', 'spare', '11', null, null, null, 'HELEMT G 20', '1', '1200.15', '1200.15', '1');
INSERT INTO `master_invoice_child` VALUES ('186', '136', 'cycle', '8', 'CUBA IBC', 'S.BLUE-SILVER', '26\"', null, '1', '5100.9', '5100.9', '1');
INSERT INTO `master_invoice_child` VALUES ('187', '137', 'cycle', '19', 'STAR', 'MULTI', '16\"', null, '2', '2300.55', '4601.1', '1');
INSERT INTO `master_invoice_child` VALUES ('188', '137', 'cycle', '19', 'BMX', 'MULTI', '14\"', null, '2', '2100', '4200', '1');
INSERT INTO `master_invoice_child` VALUES ('189', '138', 'spare', '11', null, null, null, 'WATER BOTTLE 700 ML POLISPORT', '1', '160.65', '160.65', '1');
INSERT INTO `master_invoice_child` VALUES ('190', '138', 'spare', '11', null, null, null, 'BOTTLE CAGE PVC COLOURED', '1', '50.4', '50.4', '1');
INSERT INTO `master_invoice_child` VALUES ('191', '138', 'spare', '11', null, null, null, 'TUBE 700 * 35-45 C (MAXXIS)', '1', '250.95', '250.95', '1');
INSERT INTO `master_invoice_child` VALUES ('192', '139', 'spare', '11', null, null, null, 'WATER BOTTLE 700 ML POLISPORT', '1', '160.65', '160.65', '1');
INSERT INTO `master_invoice_child` VALUES ('193', '140', 'cycle', '10', 'TRANCE PRO', 'BLACK', 'MEDIUM', null, '1', '12700.8', '12700.8', '1');
INSERT INTO `master_invoice_child` VALUES ('194', '140', 'cycle', '10', 'TRANCE PRO', 'BLACK', 'MEDIUM', null, '1', '12700.8', '12700.8', '1');
INSERT INTO `master_invoice_child` VALUES ('195', '141', 'cycle', '9', 'RODEO A 100 VX (M.SPEED)', 'WHITE', '26\"', null, '1', '11000.8', '11000.8', '1');
INSERT INTO `master_invoice_child` VALUES ('196', '141', 'cycle', '9', 'RODEO GEOLANDER (M.S./F.D.)', 'WHITE', '24\"', null, '1', '9700.95', '9700.95', '1');
INSERT INTO `master_invoice_child` VALUES ('197', '142', 'cycle', '8', 'JET LINER', 'COPPER', '24\"', null, '1', '4100.25', '4100.25', '1');
INSERT INTO `master_invoice_child` VALUES ('198', '143', 'cycle', '11', 'SENSO', 'WHITE', '26\"', null, '1', '5800.2', '5800.2', '1');
INSERT INTO `master_invoice_child` VALUES ('199', '144', 'cycle', '15', 'BOW-TIE', 'MULTI', '16\"', null, '1', '3400.95', '3400.95', '1');
INSERT INTO `master_invoice_child` VALUES ('200', '145', 'spare', '11', null, null, null, 'TUBE 700 * 35-45 C (MAXXIS)', '2', '250.95', '501.9', '1');
INSERT INTO `master_invoice_child` VALUES ('201', '146', 'cycle', '15', 'BOW-TIE', 'MULTI', '14\"', null, '1', '3150', '3150', '1');
INSERT INTO `master_invoice_child` VALUES ('202', '147', 'cycle', '11', 'SENSO', 'WHITE', '26\"', null, '1', '5800.2', '5800.2', '1');
INSERT INTO `master_invoice_child` VALUES ('203', '148', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', null, '1', '5401.2', '5401.2', '1');
INSERT INTO `master_invoice_child` VALUES ('204', '149', 'cycle', '15', 'CROWN', 'MULTI', '20\"', null, '1', '4350.15', '4350.15', '1');
INSERT INTO `master_invoice_child` VALUES ('205', '150', 'cycle', '10', 'TRANCE PRO', 'BLACK', 'MEDIUM', null, '1', '12700.8', '12700.8', '1');
INSERT INTO `master_invoice_child` VALUES ('206', '151', 'cycle', '8', 'BEETLE', 'SKY BLUE', '26\"', null, '1', '4350.15', '4350.15', '1');
INSERT INTO `master_invoice_child` VALUES ('207', '152', 'cycle', '11', 'TRIGGER (M.S. / F.D.)', 'BLACK (M.FINISH)', '24\"', null, '1', '7600.95', '7600.95', '1');
INSERT INTO `master_invoice_child` VALUES ('208', '153', 'cycle', '11', 'SOCCER (S.S.)', 'GREEN-YELLOW', '26\"', null, '1', '6400.8', '6400.8', '1');
INSERT INTO `master_invoice_child` VALUES ('209', '154', 'cycle', '8', 'CUBA IBC', 'S.BLUE-SILVER', '26\"', null, '1', '5100.9', '5100.9', '1');
INSERT INTO `master_invoice_child` VALUES ('210', '155', 'cycle', '8', 'UNIQUE', 'HOT RED', '26\"', null, '1', '4000.5', '4000.5', '1');
INSERT INTO `master_invoice_child` VALUES ('211', '156', 'cycle', '9', 'KNIGHT HUNTER', 'BLACK', '26\"', null, '1', '6100.5', '6100.5', '1');
INSERT INTO `master_invoice_child` VALUES ('303', '226', 'cycle', '15', 'JUS BIKE M.SPEED', 'WHITE', '26\"', null, '2', '9000.6', '18001.2', '1');
INSERT INTO `master_invoice_child` VALUES ('213', '158', 'cycle', '11', 'SOCCER (S.S.)', 'GREEN-YELLOW', '26\"', null, '1', '6400.8', '6400.8', '1');
INSERT INTO `master_invoice_child` VALUES ('214', '159', 'spare', '11', null, null, null, 'SIDE STAND 24 - 29 ALLOY BLACK SILVER', '1', '400.05', '400.05', '1');
INSERT INTO `master_invoice_child` VALUES ('215', '160', 'cycle', '11', 'STRATUS (S.S.)', 'WHITE', '26\"', null, '1', '6200.25', '6200.25', '1');
INSERT INTO `master_invoice_child` VALUES ('216', '161', 'cycle', '12', 'MISCEO 1.0 (S.S.)', 'BLACK (M.FINISH)', '27.5', null, '1', '9000.6', '9000.6', '1');
INSERT INTO `master_invoice_child` VALUES ('217', '162', 'cycle', '15', 'BOW-TIE', 'MULTI', '12\"', null, '1', '3050.25', '3050.25', '1');
INSERT INTO `master_invoice_child` VALUES ('218', '163', 'cycle', '11', 'U TECH (S.S )', 'WHITE-BLUE', '26\"', null, '1', '6300', '6300', '1');
INSERT INTO `master_invoice_child` VALUES ('219', '164', 'cycle', '11', 'SENSO', 'WHITE', '26\"', null, '1', '5800.2', '5800.2', '1');
INSERT INTO `master_invoice_child` VALUES ('220', '165', 'cycle', '15', 'FORCE 10', 'MULTI', '20\"', null, '1', '3750.6', '3750.6', '1');
INSERT INTO `master_invoice_child` VALUES ('221', '166', 'cycle', '13', 'LAND 8.10 (M.S. / D.D.)', 'MET GREY', '700 C', null, '1', '40000.8', '40000.8', '1');
INSERT INTO `master_invoice_child` VALUES ('222', '167', 'cycle', '17', 'ANTOP / ADDER (F.D.)', 'SILVER', '26\"', null, '1', '5500.95', '5500.95', '1');
INSERT INTO `master_invoice_child` VALUES ('223', '168', 'spare', '11', null, null, null, 'LIGHT HL 105 W', '1', '1150.8', '1150.8', '1');
INSERT INTO `master_invoice_child` VALUES ('224', '168', 'spare', '11', null, null, null, 'SIDE STAND 24 - 29 ALLOY BLACK SILVER', '1', '400.05', '400.05', '1');
INSERT INTO `master_invoice_child` VALUES ('225', '169', 'cycle', '12', 'MISCEO (M.S.)', 'BLACK (M.FINISH)', '700 C', null, '1', '23200.8', '23200.8', '1');
INSERT INTO `master_invoice_child` VALUES ('226', '170', 'spare', '11', null, null, null, 'LIGHT XC 998 W', '1', '160.65', '160.65', '1');
INSERT INTO `master_invoice_child` VALUES ('227', '171', 'spare', '11', null, null, null, 'BICYCLE LOCK', '1', '350.7', '350.7', '1');
INSERT INTO `master_invoice_child` VALUES ('228', '172', 'cycle', '12', 'SHOCKBLAZE (M.S. / F.D.)', 'BLACK (M.FINISH)', '26\"', null, '1', '16300.2', '16300.2', '1');
INSERT INTO `master_invoice_child` VALUES ('229', '173', 'cycle', '9', 'MACH CITY I BIKE', 'RED', '26\"', null, '1', '5200.65', '5200.65', '1');
INSERT INTO `master_invoice_child` VALUES ('230', '174', 'cycle', '11', 'STRATUS (S.S.)', 'WHITE', '26\"', null, '1', '6200.25', '6200.25', '1');
INSERT INTO `master_invoice_child` VALUES ('231', '175', 'spare', '11', null, null, null, 'BICYCLE LOCK', '1', '350.7', '350.7', '1');
INSERT INTO `master_invoice_child` VALUES ('232', '176', 'cycle', '10', 'DTR 24', 'BLACK', 'MEDIUM', null, '1', '9000.6', '9000.6', '1');
INSERT INTO `master_invoice_child` VALUES ('233', '176', 'spare', '11', '', '', '', 'BICYCLE LOCK', '1', '350.7', '350.7', '1');
INSERT INTO `master_invoice_child` VALUES ('234', '176', 'spare', '11', '', '', '', 'BOTTLE CAGE PVC COLOURED', '1', '50.4', '50.4', '1');
INSERT INTO `master_invoice_child` VALUES ('235', '177', 'cycle', '8', 'DRIFT', 'HOT RED', '26\"', null, '1', '3600.45', '3600.45', '1');
INSERT INTO `master_invoice_child` VALUES ('236', '178', 'spare', '11', null, null, null, 'LIGHT XC-106 R', '1', '195.3', '195.3', '1');
INSERT INTO `master_invoice_child` VALUES ('237', '178', 'spare', '11', null, null, null, 'TUBE 700 * 35-45 C (MAXXIS)', '1', '250.95', '250.95', '1');
INSERT INTO `master_invoice_child` VALUES ('238', '179', 'cycle', '17', 'ANTOP / ADDER (F.D.)', 'SILVER', '26\"', null, '1', '5500.95', '5500.95', '1');
INSERT INTO `master_invoice_child` VALUES ('239', '179', 'cycle', '9', 'ATOM ZX 6 SPEED (M.S.)', 'RED', '26\"', null, '1', '6500.55', '6500.55', '1');
INSERT INTO `master_invoice_child` VALUES ('240', '179', 'cycle', '9', 'CYBOT', 'GREEN-BLACK', '20\"', null, '1', '4100.25', '4100.25', '1');
INSERT INTO `master_invoice_child` VALUES ('241', '179', 'cycle', '11', 'SOCCER (S.S. / F.D.)', 'YELLOW-RED', '26\"', null, '1', '6600.3', '6600.3', '1');
INSERT INTO `master_invoice_child` VALUES ('242', '179', 'cycle', '11', 'CALDRON (M.S. / D.D.)', 'BLACK (M.FINISH)', '26\"', null, '1', '9400.65', '9400.65', '1');
INSERT INTO `master_invoice_child` VALUES ('243', '179', 'spare', '11', null, null, null, 'BICYCLE STAND WALL HANGING SINGLE', '5', '330.75', '1653.75', '1');
INSERT INTO `master_invoice_child` VALUES ('244', '180', 'cycle', '15', 'FORCE 10', 'MULTI', '20\"', null, '1', '3750.6', '3750.6', '1');
INSERT INTO `master_invoice_child` VALUES ('245', '181', 'cycle', '10', 'TRANCE PRO', 'BLACK', 'MEDIUM', null, '1', '12700.8', '12700.8', '1');
INSERT INTO `master_invoice_child` VALUES ('246', '182', 'cycle', '11', 'SENSO', 'WHITE', '26\"', null, '1', '5800.2', '5800.2', '1');
INSERT INTO `master_invoice_child` VALUES ('247', '183', 'spare', '11', null, null, null, 'TUBE 700 * 18-25 C MAXXIS', '2', '250.95', '501.9', '1');
INSERT INTO `master_invoice_child` VALUES ('248', '184', 'spare', '11', null, null, null, 'SIDE STAND 24 - 29 ALLOY BLACK SILVER', '1', '400.05', '400.05', '1');
INSERT INTO `master_invoice_child` VALUES ('249', '184', 'spare', '11', null, null, null, 'BICYCLE LOCK', '1', '350.7', '350.7', '1');
INSERT INTO `master_invoice_child` VALUES ('250', '184', 'spare', '11', null, null, null, 'HELEMT G 30', '1', '900.9', '900.9', '1');
INSERT INTO `master_invoice_child` VALUES ('251', '185', 'cycle', '10', 'TRANCE PRO', 'BLUE', 'MEDIUM', null, '1', '12700.8', '12700.8', '1');
INSERT INTO `master_invoice_child` VALUES ('252', '186', 'cycle', '14', 'MONTANA SPORTS', 'ORRANGE', 'MEDIUM', null, '1', '11500.7', '11500.7', '1');
INSERT INTO `master_invoice_child` VALUES ('253', '187', 'cycle', '9', 'RODEO NFS PRO (M.S. / F.D.)', 'RED', '26\"', null, '1', '10400.2', '10400.2', '1');
INSERT INTO `master_invoice_child` VALUES ('254', '188', 'cycle', '11', 'STYLOUS (S.S.)', 'BLUE (M.FINISH)', '26\"', null, '1', '7000.35', '7000.35', '1');
INSERT INTO `master_invoice_child` VALUES ('255', '189', 'cycle', '15', 'JUS BIKE M.SPEED', 'WHITE', '26\"', null, '1', '9000.6', '9000.6', '1');
INSERT INTO `master_invoice_child` VALUES ('256', '190', 'cycle', '10', 'TRANCE', 'BLUE', 'MEDIUM', null, '1', '13200.6', '13200.6', '1');
INSERT INTO `master_invoice_child` VALUES ('257', '190', 'spare', '11', null, null, null, 'SIDE STAND 24 - 29 ALLOY BLACK ', '1', '350.7', '350.7', '1');
INSERT INTO `master_invoice_child` VALUES ('258', '191', 'cycle', '9', 'ROCKY ZX', 'RED', '24\"', null, '1', '4900.35', '4900.35', '1');
INSERT INTO `master_invoice_child` VALUES ('259', '192', 'cycle', '15', 'BOW-TIE', 'MULTI', '16\"', null, '1', '3400.95', '3400.95', '1');
INSERT INTO `master_invoice_child` VALUES ('260', '193', 'cycle', '15', 'JUS BIKE M.SPEED', 'WHITE', '26\"', null, '1', '9000.6', '9000.6', '1');
INSERT INTO `master_invoice_child` VALUES ('261', '194', 'cycle', '10', 'BLUES 1.1', 'SILVER', 'MEDIUM', null, '1', '15900.2', '15900.2', '1');
INSERT INTO `master_invoice_child` VALUES ('262', '194', 'spare', '11', null, null, null, 'SIDE STAND 24 - 29 ALLOY BLACK SILVER', '1', '400.05', '400.05', '1');
INSERT INTO `master_invoice_child` VALUES ('263', '195', 'cycle', '15', 'PACE', 'MULTI', '16\"', null, '1', '3650.85', '3650.85', '1');
INSERT INTO `master_invoice_child` VALUES ('264', '196', 'cycle', '11', 'SENSO', 'WHITE', '26\"', null, '1', '5800.2', '5800.2', '1');
INSERT INTO `master_invoice_child` VALUES ('265', '197', 'cycle', '11', 'SENSO', 'WHITE', '26\"', null, '2', '5800.2', '11600.4', '1');
INSERT INTO `master_invoice_child` VALUES ('266', '198', 'cycle', '9', 'RODEO ZXR M.SPEED', 'MULTI', '20\"', null, '1', '9000.6', '9000.6', '1');
INSERT INTO `master_invoice_child` VALUES ('267', '199', 'spare', '11', null, null, null, 'TUBE 700 * 18-25 C MAXXIS', '1', '250.95', '250.95', '1');
INSERT INTO `master_invoice_child` VALUES ('268', '200', 'cycle', '12', 'MISCEO 1.0 (S.S.)', 'BLACK (M.FINISH)', '27.5', null, '1', '9000.6', '9000.6', '1');
INSERT INTO `master_invoice_child` VALUES ('269', '201', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('270', '202', 'spare', '11', null, null, null, 'WATER BOTTLE 700 ML POLISPORT', '1', '160.65', '160.65', '1');
INSERT INTO `master_invoice_child` VALUES ('271', '202', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('272', '203', 'cycle', '8', 'STARLEY', 'PINK', '20\"', null, '1', '3300.15', '3300.15', '1');
INSERT INTO `master_invoice_child` VALUES ('273', '204', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('274', '205', 'spare', '11', null, null, null, 'HANDLE GRIP BLACK G 327', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('275', '206', 'spare', '10', null, null, null, 'LIGHT FRONT AND REAR XMR JY 3005 STARP', '1', '320.25', '320.25', '1');
INSERT INTO `master_invoice_child` VALUES ('276', '207', 'cycle', '8', 'CUBA IBC', 'S.BLUE-SILVER', '26\"', null, '1', '5100.9', '5100.9', '1');
INSERT INTO `master_invoice_child` VALUES ('277', '207', 'spare', '11', '', '', '', 'HELEMT G 30', '1', '900.9', '900.9', '1');
INSERT INTO `master_invoice_child` VALUES ('278', '208', 'cycle', '11', 'STYLOUS (S.S.)', 'BLUE (M.FINISH)', '26\"', null, '1', '7000.35', '7000.35', '1');
INSERT INTO `master_invoice_child` VALUES ('279', '208', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('280', '209', 'cycle', '15', 'TRC MAGIC CAR HLX 9010', 'MULTI', 'TOY', null, '1', '1450', '1450', '1');
INSERT INTO `master_invoice_child` VALUES ('281', '210', 'spare', '11', null, null, null, 'TYRE 700 *35 C MAXXIS', '1', '600.6', '600.6', '1');
INSERT INTO `master_invoice_child` VALUES ('282', '210', 'spare', '11', null, null, null, 'TUBE 700 * 35-45 C (MAXXIS)', '2', '250.95', '501.9', '1');
INSERT INTO `master_invoice_child` VALUES ('283', '211', 'cycle', '23', 'HT 1', 'BLUE', '26\"', null, '1', '10801.3', '10801.3', '1');
INSERT INTO `master_invoice_child` VALUES ('284', '212', 'cycle', '23', 'HT 1', 'red', '26\"', null, '1', '10801.3', '10801.3', '1');
INSERT INTO `master_invoice_child` VALUES ('285', '212', 'spare', '10', null, null, null, 'LIGHT FRONT AND REAR XMR JY 3005 STARP', '1', '320.25', '320.25', '1');
INSERT INTO `master_invoice_child` VALUES ('286', '212', 'spare', '11', null, null, null, 'WATER BOTTLE 700 ML POLISPORT', '1', '160.65', '160.65', '1');
INSERT INTO `master_invoice_child` VALUES ('287', '212', 'spare', '11', null, null, null, 'BOTTLE CAGE PVC COLOURED', '1', '50.4', '50.4', '1');
INSERT INTO `master_invoice_child` VALUES ('288', '213', 'cycle', '15', 'HAPPY', 'MULTI', '16\"', null, '1', '3500.7', '3500.7', '1');
INSERT INTO `master_invoice_child` VALUES ('289', '214', 'cycle', '12', 'TERRAIN 30 (M.S. / D.D.)', 'BLACK', '26\"', null, '1', '14100.5', '14100.5', '1');
INSERT INTO `master_invoice_child` VALUES ('290', '215', 'spare', '11', null, null, null, 'LIGHT XC 735 A', '1', '195.3', '195.3', '1');
INSERT INTO `master_invoice_child` VALUES ('291', '215', 'spare', '11', null, null, null, 'LIGHT XC-106 R', '1', '195.3', '195.3', '1');
INSERT INTO `master_invoice_child` VALUES ('292', '216', 'spare', '11', null, null, null, 'BICYCLE LOCK', '1', '350.7', '350.7', '1');
INSERT INTO `master_invoice_child` VALUES ('293', '217', 'cycle', '23', 'HT J1', 'WHITE', '24\"', null, '1', '9700.95', '9700.95', '1');
INSERT INTO `master_invoice_child` VALUES ('294', '218', 'cycle', '15', 'CX', 'MULTI', '20\"', null, '1', '3700.2', '3700.2', '1');
INSERT INTO `master_invoice_child` VALUES ('295', '219', 'cycle', '15', 'TRC MAGIC CAR HLX 3355', 'MULTI', 'TOY', null, '1', '1500', '1500', '1');
INSERT INTO `master_invoice_child` VALUES ('296', '220', 'spare', '11', '', '', '', 'TYRE 700 *35 C MAXXIS', '1', '600.6', '600.6', '1');
INSERT INTO `master_invoice_child` VALUES ('297', '221', 'spare', '11', null, null, null, 'TYRE 700 * 23 C KENDA', '1', '350.7', '350.7', '1');
INSERT INTO `master_invoice_child` VALUES ('298', '221', 'spare', '11', null, null, null, 'HANDLE GRIP BLACK G 327', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('299', '222', 'cycle', '23', 'K1 S.S.', 'YELLOW', '20\"', null, '1', '5500.95', '5500.95', '1');
INSERT INTO `master_invoice_child` VALUES ('300', '223', 'cycle', '11', 'DIRT JUMPER D.D.', 'BLACK', '26\"', null, '1', '14500.5', '14500.5', '1');
INSERT INTO `master_invoice_child` VALUES ('301', '224', 'cycle', '12', 'MONSTER X MS SPEED EF D.D.', 'WHITE', '24\"', null, '1', '11100.6', '11100.6', '1');
INSERT INTO `master_invoice_child` VALUES ('302', '225', 'cycle', '15', 'CROWN', 'MULTI', '20\"', null, '1', '4350.15', '4350.15', '1');
INSERT INTO `master_invoice_child` VALUES ('304', '227', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('305', '228', 'cycle', '9', 'SPARTA ZX', 'BLACK-GREEN', '26\"', null, '1', '5300.4', '5300.4', '1');
INSERT INTO `master_invoice_child` VALUES ('306', '229', 'cycle', '12', 'MONSTER X MS SPEED EF D.D.', 'WHITE', '24\"', null, '1', '11100.6', '11100.6', '1');
INSERT INTO `master_invoice_child` VALUES ('307', '229', 'cycle', '12', 'TERRAIN 30 (M.S. / D.D.)', 'BLACK', '27.5', null, '1', '15600.9', '15600.9', '1');
INSERT INTO `master_invoice_child` VALUES ('308', '230', 'spare', '11', null, null, null, 'HELEMT G 20', '1', '1200.15', '1200.15', '1');
INSERT INTO `master_invoice_child` VALUES ('309', '230', 'spare', '11', null, null, null, 'LIGHT XC 735 A', '1', '195.3', '195.3', '1');
INSERT INTO `master_invoice_child` VALUES ('310', '230', 'spare', '10', null, null, null, 'LIGHT FRONT XMR JY 286 STROBE 5.0', '1', '300.3', '300.3', '1');
INSERT INTO `master_invoice_child` VALUES ('311', '231', 'cycle', '9', 'KNIGHT HUNTER', 'BLACK', '26\"', null, '1', '6100.5', '6100.5', '1');
INSERT INTO `master_invoice_child` VALUES ('312', '232', 'cycle', '23', 'H2 CROSS', 'BLACK', 'LARGE', null, '1', '16700.2', '16700.2', '1');
INSERT INTO `master_invoice_child` VALUES ('313', '232', 'spare', '10', null, null, null, 'LIGHT FRONT AND REAR XMR JY 3005 STARP', '1', '320.25', '320.25', '1');
INSERT INTO `master_invoice_child` VALUES ('314', '233', 'cycle', '10', 'ROCK 1.0', 'BLUE', 'MEDIUM', null, '1', '12100.2', '12100.2', '1');
INSERT INTO `master_invoice_child` VALUES ('315', '233', 'spare', '11', null, null, null, 'WATTER BOTTLE 500 ML PVC RALEIGH', '0', '210', '210', '1');
INSERT INTO `master_invoice_child` VALUES ('316', '233', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('317', '234', 'cycle', '8', 'QUICK', 'BLUE', '26\"', null, '1', '3750.6', '3750.6', '1');
INSERT INTO `master_invoice_child` VALUES ('318', '235', 'cycle', '15', 'HAPPY', 'MULTI', '14\"', null, '1', '3250.8', '3250.8', '1');
INSERT INTO `master_invoice_child` VALUES ('319', '236', 'cycle', '9', 'CYBOT', 'GREEN-BLACK', '20\"', null, '1', '4100.25', '4100.25', '1');
INSERT INTO `master_invoice_child` VALUES ('320', '237', 'cycle', '9', 'CYBOT', 'GREEN-BLACK', '20\"', null, '1', '4100.25', '4100.25', '1');
INSERT INTO `master_invoice_child` VALUES ('321', '238', 'cycle', '8', 'BUTTERFLY', 'PINK', '26\"', null, '1', '4350.15', '4350.15', '1');
INSERT INTO `master_invoice_child` VALUES ('322', '239', 'cycle', '15', 'JUST BIKE (S.S.)', 'WHITE', '26\"', null, '1', '6000.75', '6000.75', '1');
INSERT INTO `master_invoice_child` VALUES ('323', '240', 'cycle', '10', 'TRANCE PRO', 'BLUE', 'MEDIUM', null, '1', '12700.8', '12700.8', '1');
INSERT INTO `master_invoice_child` VALUES ('324', '240', 'spare', '11', '', '', '', 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('325', '241', 'cycle', '9', 'DYNAMITE ZX', 'RED', '26\"', null, '1', '5300.4', '5300.4', '1');
INSERT INTO `master_invoice_child` VALUES ('326', '242', 'cycle', '8', 'BOUNTY (IBC)', 'HOT RED', '24\"', null, '1', '5001.15', '5001.15', '1');
INSERT INTO `master_invoice_child` VALUES ('327', '243', 'cycle', '8', 'QUICK', 'BLUE', '24\"', null, '1', '3700.2', '3700.2', '1');
INSERT INTO `master_invoice_child` VALUES ('328', '244', 'spare', '11', null, null, null, 'TOP TUBE BAG TOTEM', '1', '530.25', '530.25', '1');
INSERT INTO `master_invoice_child` VALUES ('329', '244', 'spare', '11', null, null, null, 'LIGHT XC 767 F', '1', '160.65', '160.65', '1');
INSERT INTO `master_invoice_child` VALUES ('330', '245', 'cycle', '11', 'EQUINOX (M.S.)', 'RED', '700 C', null, '1', '10400.2', '10400.2', '1');
INSERT INTO `master_invoice_child` VALUES ('331', '245', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('332', '245', 'spare', '11', null, null, null, 'WATTER BOTTLE 500 ML PVC RALEIGH', '1', '210', '210', '1');
INSERT INTO `master_invoice_child` VALUES ('333', '246', 'cycle', '15', 'TRC MAGIC CAR HLX 9010', 'MULTI', 'TOY', null, '1', '1450', '1450', '1');
INSERT INTO `master_invoice_child` VALUES ('334', '247', 'cycle', '15', 'TRC MAGIC CAR HLX 9010', 'MULTI', 'TOY', null, '1', '1450', '1450', '1');
INSERT INTO `master_invoice_child` VALUES ('335', '248', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('336', '249', 'cycle', '15', 'RAPID', 'MULTI', '14\"', null, '1', '3650.85', '3650.85', '1');
INSERT INTO `master_invoice_child` VALUES ('337', '250', 'spare', '11', null, null, null, 'TOP TUBE BAG TOTEM', '1', '530.25', '530.25', '1');
INSERT INTO `master_invoice_child` VALUES ('338', '251', 'cycle', '10', 'ROCK 1.1 D', 'GREEN', 'SMALL', null, '1', '17700.9', '17700.9', '1');
INSERT INTO `master_invoice_child` VALUES ('339', '251', 'spare', '11', null, null, null, 'SIDE STAND 24 - 29 ALLOY BLACK SILVER', '1', '400.05', '400.05', '1');
INSERT INTO `master_invoice_child` VALUES ('340', '252', 'cycle', '12', 'TERRAIN 30 (M.S. / D.D.)', 'BLACK', '27.5', null, '1', '15600.9', '15600.9', '1');
INSERT INTO `master_invoice_child` VALUES ('341', '252', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('342', '253', 'cycle', '11', 'SX 006', 'RED', '16\"', null, '1', '4100.25', '4100.25', '1');
INSERT INTO `master_invoice_child` VALUES ('343', '254', 'cycle', '11', 'EQUINOX (M.S.)', 'RED', '700 C', null, '1', '10400.2', '10400.2', '1');
INSERT INTO `master_invoice_child` VALUES ('344', '254', 'spare', '11', null, null, null, 'WATER BOTTLE 700 ML POLISPORT', '1', '160.65', '160.65', '1');
INSERT INTO `master_invoice_child` VALUES ('345', '255', 'spare', '10', null, null, null, 'LIGHT FRONT XMR JY 286 STROBE 5.0', '1', '300.3', '300.3', '1');
INSERT INTO `master_invoice_child` VALUES ('346', '255', 'spare', '11', null, null, null, 'LIGHT XC 767 F', '1', '160.65', '160.65', '1');
INSERT INTO `master_invoice_child` VALUES ('347', '256', 'cycle', '11', 'CALDRON - EF (M.S.)', 'BLUE', '26\"', null, '1', '9400.65', '9400.65', '1');
INSERT INTO `master_invoice_child` VALUES ('348', '257', 'cycle', '8', 'REDOX', 'WHITE-BLUE', '26\"', null, '1', '5150', '5150', '1');
INSERT INTO `master_invoice_child` VALUES ('349', '258', 'cycle', '9', 'MACH CITY I BIKE', 'RED', '26\"', null, '1', '5200.65', '5200.65', '1');
INSERT INTO `master_invoice_child` VALUES ('350', '259', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('351', '260', 'cycle', '8', 'SKID', 'RED', '20\"', null, '1', '3150', '3150', '1');
INSERT INTO `master_invoice_child` VALUES ('352', '261', 'cycle', '8', 'BUTTERFLY', 'PINK', '26\"', null, '1', '4350.15', '4350.15', '1');
INSERT INTO `master_invoice_child` VALUES ('353', '262', 'cycle', '8', 'STARLEY', 'PINK', '20\"', null, '1', '3300.15', '3300.15', '1');
INSERT INTO `master_invoice_child` VALUES ('354', '263', 'cycle', '11', 'SOCCER (M.S. / D.D.)', 'WHITE-BLUE', '26\"', null, '1', '8600.55', '8600.55', '1');
INSERT INTO `master_invoice_child` VALUES ('355', '264', 'cycle', '23', 'K6 S.S.', 'WHITE-RED', '20\"', null, '1', '6800.85', '6800.85', '1');
INSERT INTO `master_invoice_child` VALUES ('356', '265', 'cycle', '8', 'CHARLIE', 'PURPLE', '26\"', null, '1', '4300.8', '4300.8', '1');
INSERT INTO `master_invoice_child` VALUES ('357', '266', 'cycle', '15', 'CROWN', 'MULTI', '14\"', null, '1', '3801', '3801', '1');
INSERT INTO `master_invoice_child` VALUES ('358', '267', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', null, '1', '5401.2', '5401.2', '1');
INSERT INTO `master_invoice_child` VALUES ('359', '267', 'spare', '11', null, null, null, 'LIGHT XC 998 W', '1', '160.65', '160.65', '1');
INSERT INTO `master_invoice_child` VALUES ('360', '268', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', null, '1', '5401.2', '5401.2', '1');
INSERT INTO `master_invoice_child` VALUES ('361', '269', 'cycle', '19', 'STAR', 'MULTI', '14\"', null, '1', '2000.25', '2000.25', '1');
INSERT INTO `master_invoice_child` VALUES ('362', '270', 'cycle', '8', 'CRUZE', 'SILVER-BLUE', '24\"', null, '1', '4200', '4200', '1');
INSERT INTO `master_invoice_child` VALUES ('363', '271', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', null, '1', '5401.2', '5401.2', '1');
INSERT INTO `master_invoice_child` VALUES ('364', '272', 'cycle', '11', 'INNOVATE (M.S.)', 'WHITE', '700 C', null, '1', '14000.7', '14000.7', '1');
INSERT INTO `master_invoice_child` VALUES ('365', '272', 'spare', '11', '', '', '', 'BICYCLE LOCK', '1', '350.7', '350.7', '1');
INSERT INTO `master_invoice_child` VALUES ('366', '272', 'spare', '11', '', '', '', 'HELEMT G 30', '1', '900.9', '900.9', '1');
INSERT INTO `master_invoice_child` VALUES ('367', '273', 'cycle', '11', 'HURRICANE  D/DISK', 'HOT RED', '24\"', null, '1', '10001.2', '10001.2', '1');
INSERT INTO `master_invoice_child` VALUES ('368', '274', 'cycle', '15', 'PACE', 'MULTI', '16\"', null, '1', '3650.85', '3650.85', '1');
INSERT INTO `master_invoice_child` VALUES ('369', '275', 'cycle', '11', 'HAZARD-EF (M.S.)', 'GREEN', '26\"', null, '1', '9900.45', '9900.45', '1');
INSERT INTO `master_invoice_child` VALUES ('370', '276', 'cycle', '26', 'ROAM 2D', 'GREY', 'LARGE', null, '1', '43600.2', '43600.2', '1');
INSERT INTO `master_invoice_child` VALUES ('371', '276', 'spare', '11', null, null, null, 'SIDE STAND 24 - 29 ALLOY BLACK SILVER', '1', '400.05', '400.05', '1');
INSERT INTO `master_invoice_child` VALUES ('372', '277', 'cycle', '12', 'MONSTER X MS SPEED EF D.D.', 'WHITE', '24\"', null, '1', '11100.6', '11100.6', '1');
INSERT INTO `master_invoice_child` VALUES ('373', '278', 'cycle', '15', 'RAPID', 'MULTI', '14\"', null, '1', '3650.85', '3650.85', '1');
INSERT INTO `master_invoice_child` VALUES ('374', '279', 'cycle', '8', 'EXTRUSION', 'HOT RED', '26\"', null, '1', '4400.55', '4400.55', '1');
INSERT INTO `master_invoice_child` VALUES ('375', '280', 'cycle', '9', 'RODEO GEOLANDER (M.S./F.D.)', 'WHITE', '26\"', null, '1', '10300.5', '10300.5', '1');
INSERT INTO `master_invoice_child` VALUES ('376', '281', 'spare', '11', null, null, null, 'LIGHT XC 998 W', '1', '160.65', '160.65', '1');
INSERT INTO `master_invoice_child` VALUES ('377', '282', 'spare', '11', null, null, null, 'LIGHT XC 998 W', '1', '160.65', '160.65', '1');
INSERT INTO `master_invoice_child` VALUES ('378', '283', 'cycle', '8', 'CUBA IBC', 'S.BLUE-SILVER', '24\"', null, '1', '5100', '5100', '1');
INSERT INTO `master_invoice_child` VALUES ('379', '284', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', null, '1', '5401.2', '5401.2', '1');
INSERT INTO `master_invoice_child` VALUES ('380', '285', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('381', '286', 'spare', '11', null, null, null, 'HELEMT G 20', '1', '1200.15', '1200.15', '1');
INSERT INTO `master_invoice_child` VALUES ('382', '287', 'cycle', '11', 'INNOVATE (M.S.)', 'WHITE', '700 C', null, '1', '14000.7', '14000.7', '1');
INSERT INTO `master_invoice_child` VALUES ('383', '288', 'cycle', '23', 'HT 3 HARD TRAIL', 'WHITE', '26\"', null, '1', '13500.9', '13500.9', '1');
INSERT INTO `master_invoice_child` VALUES ('384', '289', 'cycle', '23', 'K1 S.S.', 'red', '20\"', null, '1', '5500.95', '5500.95', '1');
INSERT INTO `master_invoice_child` VALUES ('385', '290', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', null, '1', '5401.2', '5401.2', '1');
INSERT INTO `master_invoice_child` VALUES ('386', '291', 'cycle', '8', 'REDOX', 'WHITE-BLUE', '26\"', null, '1', '5150', '5150', '1');
INSERT INTO `master_invoice_child` VALUES ('387', '292', 'spare', '11', null, null, null, 'V BRAKES SET ALLOY ', '1', '200.55', '200.55', '1');
INSERT INTO `master_invoice_child` VALUES ('388', '293', 'cycle', '8', 'REDOX', 'WHITE', '24\"', null, '1', '5050.5', '5050.5', '1');
INSERT INTO `master_invoice_child` VALUES ('389', '294', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('390', '294', 'spare', '11', null, null, null, 'WATTER BOTTLE 500 ML PVC RALEIGH', '1', '210', '210', '1');
INSERT INTO `master_invoice_child` VALUES ('391', '295', 'cycle', '12', 'TERRAIN 30 (M.S. / D.D.)', 'BLACK', '27.5', null, '1', '15600.9', '15600.9', '1');
INSERT INTO `master_invoice_child` VALUES ('392', '295', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('393', '295', 'spare', '11', null, null, null, 'WATTER BOTTLE 500 ML PVC RALEIGH', '1', '210', '210', '1');
INSERT INTO `master_invoice_child` VALUES ('394', '295', 'spare', '11', null, null, null, 'LIGHT XC 998 W', '1', '160.65', '160.65', '1');
INSERT INTO `master_invoice_child` VALUES ('395', '295', 'spare', '11', null, null, null, 'LIGHT XC 735 A', '1', '195.3', '195.3', '1');
INSERT INTO `master_invoice_child` VALUES ('396', '296', 'cycle', '9', 'CYBOT', 'GREEN-BLACK', '20\"', null, '1', '4100.25', '4100.25', '1');
INSERT INTO `master_invoice_child` VALUES ('397', '297', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', null, '1', '5401.2', '5401.2', '1');
INSERT INTO `master_invoice_child` VALUES ('398', '298', 'spare', '10', null, null, null, 'LIGHT FRONT XMR JY 808 11 STRIKE 5.0', '1', '250.95', '250.95', '1');
INSERT INTO `master_invoice_child` VALUES ('399', '299', 'cycle', '8', 'SKYTOP', 'CHAINA RED', '26\"', null, '1', '4300.8', '4300.8', '1');
INSERT INTO `master_invoice_child` VALUES ('400', '300', 'spare', '11', null, null, null, 'HELEMT G 20', '1', '1200.15', '1200.15', '1');
INSERT INTO `master_invoice_child` VALUES ('401', '300', 'spare', '11', null, null, null, 'BICYCLE ACCESSORY GLOVES TOTEM', '1', '390.6', '390.6', '1');
INSERT INTO `master_invoice_child` VALUES ('402', '301', 'spare', '11', null, null, null, 'FREE WHEEL FRICTION FREE 7 SPEED INDEX', '1', '150.15', '150.15', '1');
INSERT INTO `master_invoice_child` VALUES ('403', '302', 'cycle', '8', 'STARLEY', 'PINK', '20\"', null, '1', '3300.15', '3300.15', '1');
INSERT INTO `master_invoice_child` VALUES ('404', '303', 'spare', '11', null, null, null, 'TUBE 700 * 35-45 C (MAXXIS)', '2', '250.95', '501.9', '1');
INSERT INTO `master_invoice_child` VALUES ('405', '304', 'spare', '11', null, null, null, 'V BRAKES SET ALLOY ', '1', '200.55', '200.55', '1');
INSERT INTO `master_invoice_child` VALUES ('406', '305', 'cycle', '8', 'BUTTERFLY', 'BABIE PINK', '24\"', null, '1', '4200', '4200', '1');
INSERT INTO `master_invoice_child` VALUES ('407', '306', 'cycle', '11', 'SENSO', 'WHITE', '26\"', null, '1', '5800.2', '5800.2', '1');
INSERT INTO `master_invoice_child` VALUES ('408', '307', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', null, '1', '5401.2', '5401.2', '1');
INSERT INTO `master_invoice_child` VALUES ('409', '307', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('410', '307', 'spare', '11', null, null, null, 'WATTER BOTTLE 500 ML PVC RALEIGH', '1', '210', '210', '1');
INSERT INTO `master_invoice_child` VALUES ('411', '308', 'cycle', '9', 'RODEO ZXR M.SPEED', 'MULTI', '20\"', null, '1', '9000.6', '9000.6', '1');
INSERT INTO `master_invoice_child` VALUES ('412', '309', 'cycle', '23', 'HT 3 HARD TRAIL', 'WHITE-RED', '26\"', null, '1', '13500.9', '13500.9', '1');
INSERT INTO `master_invoice_child` VALUES ('413', '310', 'cycle', '12', 'MONSTER X MS SPEED EF D.D.', 'WHITE', '24\"', null, '1', '11100.6', '11100.6', '1');
INSERT INTO `master_invoice_child` VALUES ('414', '311', 'spare', '10', null, null, null, 'LIGHT REAR XMR JY 528 1 STREAK 2.0', '1', '520.8', '520.8', '1');
INSERT INTO `master_invoice_child` VALUES ('415', '311', 'spare', '11', null, null, null, 'LIGHT HL 112 W', '1', '1350.3', '1350.3', '1');
INSERT INTO `master_invoice_child` VALUES ('416', '312', 'cycle', '10', 'UNPLUGGED', 'RED', 'LARGE', null, '1', '18600.8', '18600.8', '1');
INSERT INTO `master_invoice_child` VALUES ('417', '312', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('418', '312', 'spare', '11', null, null, null, 'SIDE KICK STAND  ADJUSTABLE  (616-10)', '1', '300.3', '300.3', '1');
INSERT INTO `master_invoice_child` VALUES ('419', '313', 'cycle', '15', 'TRC HLX', 'MULTI', 'TOY', null, '1', '2300.55', '2300.55', '1');
INSERT INTO `master_invoice_child` VALUES ('420', '314', 'cycle', '9', 'CYBOT', 'GREEN-BLACK', '20\"', null, '1', '4100.25', '4100.25', '1');
INSERT INTO `master_invoice_child` VALUES ('421', '315', 'cycle', '8', 'JAX', 'BLUE', '20\"', null, '1', '3000.9', '3000.9', '1');
INSERT INTO `master_invoice_child` VALUES ('422', '316', 'cycle', '8', 'CRUZE', 'HOT RED', '24\"', null, '1', '4200', '4200', '1');
INSERT INTO `master_invoice_child` VALUES ('423', '317', 'cycle', '8', 'STARLEY', 'PINK', '20\"', null, '1', '3300.15', '3300.15', '1');
INSERT INTO `master_invoice_child` VALUES ('424', '318', 'cycle', '23', 'H1 LITE', 'BLACK (M.FINISH)', 'MEDIUM', null, '1', '15300.6', '15300.6', '1');
INSERT INTO `master_invoice_child` VALUES ('425', '318', 'spare', '11', null, null, null, 'HELEMT G 30', '1', '900.9', '900.9', '1');
INSERT INTO `master_invoice_child` VALUES ('426', '318', 'spare', '11', null, null, null, 'WATTER BOTTLE 500 ML PVC RALEIGH', '1', '210', '210', '1');
INSERT INTO `master_invoice_child` VALUES ('427', '318', 'spare', '11', null, null, null, 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('428', '318', 'spare', '10', null, null, null, 'LIGHT FRONT XMR JY 286 STROBE 5.0', '1', '300.3', '300.3', '1');
INSERT INTO `master_invoice_child` VALUES ('429', '319', 'cycle', '19', 'STAR', 'MULTI', '14\"', null, '1', '2000.25', '2000.25', '1');
INSERT INTO `master_invoice_child` VALUES ('430', '320', 'cycle', '12', 'TERRAIN 30 (M.S. / D.D.)', 'BLACK', '27.5', null, '1', '15600.9', '15600.9', '1');
INSERT INTO `master_invoice_child` VALUES ('431', '320', 'spare', '11', '', '', '', 'BOTTLE CAGE SILVER FINISH', '1', '100.8', '100.8', '1');
INSERT INTO `master_invoice_child` VALUES ('440', '324', 'cycle', '15', 'JUST BIKE (S.S.)', 'WHITE', '26\"', null, '6', '4850', '29100', '1');
INSERT INTO `master_invoice_child` VALUES ('439', '324', 'cycle', '9', 'MACH CITY I BIKE', 'RED', '26\"', null, '2', '4480', '8960', '1');
INSERT INTO `master_invoice_child` VALUES ('441', '325', 'cycle', '11', 'SENSO', 'WHITE', '26\"', null, '2', '4520', '9040', '1');
INSERT INTO `master_invoice_child` VALUES ('442', '325', 'cycle', '11', 'U TECH (S.S )', 'WHITE-BLUE', '26\"', null, '1', '5315', '5315', '1');
INSERT INTO `master_invoice_child` VALUES ('443', '325', 'cycle', '11', 'TRIGGER (M.S. / F.D.)', 'BLACK (M.FINISH)', '24\"', null, '1', '5975', '5975', '1');
INSERT INTO `master_invoice_child` VALUES ('444', '325', 'cycle', '11', 'TRIGGER (S.S. / F.D.)', 'BLACK (M.FINISH)', '24\"', null, '1', '5120', '5120', '1');
INSERT INTO `master_invoice_child` VALUES ('445', '325', 'cycle', '11', 'DIRT MAX (S.S.)', 'GREEN', '24\"', null, '1', '4850', '4850', '1');
INSERT INTO `master_invoice_child` VALUES ('446', '325', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', null, '1', '4120', '4120', '1');
INSERT INTO `master_invoice_child` VALUES ('447', '325', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', null, '1', '5075', '5075', '1');
INSERT INTO `master_invoice_child` VALUES ('448', '325', 'cycle', '11', 'CALDRON - EF (M.S.)', 'WHITE', '24\"', null, '1', '7525', '7525', '1');
INSERT INTO `master_invoice_child` VALUES ('449', '326', 'cycle', '23', 'HT 1', 'BLUE', '26\"', null, '1', '8115', '8115', '1');
INSERT INTO `master_invoice_child` VALUES ('450', '326', 'cycle', '23', 'HT 1', 'red', '26\"', null, '1', '8115', '8115', '1');
INSERT INTO `master_invoice_child` VALUES ('451', '326', 'cycle', '23', 'HT J1', 'WHITE', '24\"', null, '1', '7791', '7791', '1');
INSERT INTO `master_invoice_child` VALUES ('452', '326', 'cycle', '23', 'K6 S.S.', 'red', '20\"', null, '1', '5270', '5270', '1');
INSERT INTO `master_invoice_child` VALUES ('453', '326', 'cycle', '23', 'DS 1', 'WHITE-GREEN', '26\"', null, '1', '8600', '8600', '1');
INSERT INTO `master_invoice_child` VALUES ('454', '326', 'cycle', '15', 'JUS BIKE M.SPEED', 'WHITE', '26\"', null, '1', '6800', '6800', '1');
INSERT INTO `master_invoice_child` VALUES ('455', '326', 'cycle', '11', 'TRIGGER (M.S. / F.D.)', 'MULTI', '20\"', null, '1', '4851', '4851', '1');
INSERT INTO `master_invoice_child` VALUES ('456', '326', 'cycle', '12', 'MONSTER X MS SPEED EF D.D.', 'WHITE', '24\"', null, '1', '9160', '9160', '1');
INSERT INTO `master_invoice_child` VALUES ('457', '326', 'cycle', '11', 'DIRT JUMPER D.D.', 'BLACK', '26\"', null, '1', '11680', '11680', '1');
INSERT INTO `master_invoice_child` VALUES ('458', '326', 'cycle', '11', 'HAZARD-EF (M.S.)', 'BLACK', '24\"', null, '2', '8160', '16320', '1');
INSERT INTO `master_invoice_child` VALUES ('459', '326', 'cycle', '11', 'HURRICANE  D/DISK', 'HOT RED', '24\"', null, '1', '7480', '7480', '1');
INSERT INTO `master_invoice_child` VALUES ('460', '327', 'cycle', '15', 'JUST BIKE (S.S.)', 'WHITE', '26\"', null, '6', '4950', '29700', '1');
INSERT INTO `master_invoice_child` VALUES ('461', '327', 'cycle', '12', 'MY RIDE (S.S.)', 'BLACK', '26\"', null, '2', '4300', '8600', '1');
INSERT INTO `master_invoice_child` VALUES ('462', '327', 'cycle', '15', 'SENORITA', 'PINK', '24\"', null, '2', '4580', '9160', '1');
INSERT INTO `master_invoice_child` VALUES ('463', '328', 'cycle', '19', 'BMX', 'MULTI', '14\"', null, '2', '2100', '4200', '1');
INSERT INTO `master_invoice_child` VALUES ('464', '328', 'cycle', '18', 'CRUISER IBC (F.D.)', 'RB', '26\"', null, '2', '5600.7', '11201.4', '1');
INSERT INTO `master_invoice_child` VALUES ('465', '328', 'spare', '11', null, null, null, 'CHAIN WHEEL SET TCWC 28/38/48 T', '1', '550.2', '550.2', '1');
INSERT INTO `master_invoice_child` VALUES ('466', '328', 'cycle', '12', 'FREELIFE', 'MULTI', '20\"', null, '1', '6800.85', '6800.85', '1');
INSERT INTO `master_invoice_child` VALUES ('467', '328', 'spare', '11', null, null, null, 'BICYCLE STAND REPAIR', '1', '5901', '5901', '1');
INSERT INTO `master_invoice_child` VALUES ('477', '330', 'cycle', '8', 'EXTRUSION', 'BLACK', '26\"', null, '1', '4400.55', '4400.55', '1');
INSERT INTO `master_invoice_child` VALUES ('478', '330', 'cycle', '19', 'BMX', 'MULTI', '14\"', null, '0', '2100', '2100', '1');
INSERT INTO `master_invoice_child` VALUES ('476', '329', 'cycle', '25', 'AGGRESSOR SPORT ', 'MET GREY', '27.5\"', null, '1', '25000.5', '25000.5', '1');
INSERT INTO `master_invoice_child` VALUES ('484', '330', 'cycle', '26', 'ACE-FX  16', 'PINK', '16\"', null, '1', '6700.05', '6700.05', '1');
INSERT INTO `master_invoice_child` VALUES ('485', '330', 'spare', '11', null, null, null, 'CHAIN 1/2*3/32*116 LINKS', '2', '100.8', '201.6', '1');
INSERT INTO `master_invoice_child` VALUES ('487', '331', 'spare', '11', null, null, null, 'CARRIER SILVER ALLOY', '2', '600.6', '1201.2', '1');
INSERT INTO `master_invoice_child` VALUES ('483', '330', 'spare', '11', null, null, null, 'BICYCLE STAND WALL HANGING SINGLE', '2', '330.75', '661.5', '1');
INSERT INTO `master_invoice_child` VALUES ('488', '332', 'spare', '11', null, null, null, 'CHAIN 1/2 * 3/32 * 116 LINKS (P-7002)', '1', '175.35', '175.35', '1');
INSERT INTO `master_invoice_child` VALUES ('489', '332', 'cycle', '11', 'DIRT JUMPER D.D.', 'BLACK', '26\"', null, '1', '14500.5', '14500.5', '1');
INSERT INTO `master_invoice_child` VALUES ('490', '333', 'cycle', '23', 'DS J1 ', 'ORRANGE', '24\"', null, '1', '9200.1', '9200.1', '1');
INSERT INTO `master_invoice_child` VALUES ('491', '334', 'cycle', '16', 'DUAL', 'BLACK', 'LARGE', null, '1', '17900.4', '17900.4', '1');
INSERT INTO `master_invoice_child` VALUES ('492', '334', 'cycle', '8', 'EXTRUSION', 'BLUE', '24\"', null, '1', '4350.15', '4350.15', '1');
INSERT INTO `master_invoice_child` VALUES ('493', '335', 'cycle', '9', 'RODEO WAYFINDER (M.S.)', 'BLACK-GREEN', '26\"', null, '1', '8400', '8400', '1');
INSERT INTO `master_invoice_child` VALUES ('494', '336', 'cycle', '16', 'DUAL', 'BLACK', 'LARGE', null, '1', '17900.4', '17900.4', '1');
INSERT INTO `master_invoice_child` VALUES ('495', '337', 'cycle', '26', 'ACE-ZX 20', 'red', '20\"', null, '1', '7400', '7400', '1');
INSERT INTO `master_invoice_child` VALUES ('496', '337', 'spare', '11', null, null, null, 'CHAIN 1/2 * 3/32 * 116 LINKS (P-7002)', '2', '175', '350', '1');
INSERT INTO `master_invoice_child` VALUES ('497', '338', 'spare', '11', null, null, null, 'CHAIN 1/2 * 3/32 * 116 LINKS (P-7002)', '1', '175', '175', '1');
INSERT INTO `master_invoice_child` VALUES ('498', '339', 'cycle', '26', 'NEO-26*20 RED', 'red', '26\"', null, '1', '20', '20', '1');
INSERT INTO `master_invoice_child` VALUES ('499', '340', 'cycle', '25', 'AGGRESSOR SPORT ', 'MET GREY', '27.5\"', null, '1', '25', '25', '1');
INSERT INTO `master_invoice_child` VALUES ('500', '341', 'cycle', '15', 'ELDORADO ', 'BLACK', '24\"', null, '2', '100', '200', '1');
INSERT INTO `master_invoice_child` VALUES ('501', '341', 'spare', '11', null, null, null, 'BICYCLE STAND WALL HANGING SINGLE', '4', '33', '132', '1');
INSERT INTO `master_invoice_child` VALUES ('502', '342', 'cycle', '14', 'MONTANA SPORTS', 'ORRANGE', 'MEDIUM', null, '2', '11', '22', '1');
INSERT INTO `master_invoice_child` VALUES ('503', '342', 'spare', '11', null, null, null, 'BICYCLE STAND REPAIR', '0', '59', '59', '1');
INSERT INTO `master_invoice_child` VALUES ('504', '343', 'cycle', '12', 'CLUBMAN', 'S.BLUE', 'LARGE', null, '1', '14', '14', '1');
INSERT INTO `master_invoice_child` VALUES ('505', '343', 'spare', '10', null, null, null, 'LIGHT FRONT XMR JY 246 - 3W STROBE 1.3', '2', '75', '150', '1');
INSERT INTO `master_invoice_child` VALUES ('506', '344', 'cycle', '11', 'EXPLORE  M SPEED   F/ DISK', 'HOT RED', '26\"', null, '2', '100', '200', '1');
INSERT INTO `master_invoice_child` VALUES ('507', '344', 'spare', '11', null, null, null, 'CHAIN 1/2*3/32*116 LINKS', '3', '10', '30', '1');
INSERT INTO `master_invoice_child` VALUES ('508', '329', 'cycle', '25', 'AGGRESSOR SPORT ', 'MET GREY', '27.5\"', null, '0', '25000', '0', '1');
INSERT INTO `master_invoice_child` VALUES ('509', '329', 'cycle', '25', 'AGGRESSOR SPORT ', 'MET GREY', '27.5\"', null, '0', '0', '0', '1');
INSERT INTO `master_invoice_child` VALUES ('510', '329', 'cycle', '0', '0', '0', '0', null, '0', '0', '0', '1');
INSERT INTO `master_invoice_child` VALUES ('511', '329', 'spare', '0', null, null, null, '', '0', '0', '0', '1');
INSERT INTO `master_invoice_child` VALUES ('512', '329', 'spare', '0', null, null, null, '', '0', '0', '0', '1');
INSERT INTO `master_invoice_child` VALUES ('513', '329', 'cycle', '0', '', '', '', null, '0', '0', '0', '1');
INSERT INTO `master_invoice_child` VALUES ('514', '329', 'spare', '0', null, null, null, '', '0', '0', '0', '1');

-- ----------------------------
-- Table structure for master_invoice_frame
-- ----------------------------
DROP TABLE IF EXISTS `master_invoice_frame`;
CREATE TABLE `master_invoice_frame` (
  `FrameID` int(11) NOT NULL AUTO_INCREMENT,
  `InvoiceChildID` int(11) DEFAULT NULL,
  `FrameValue` varchar(100) DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`FrameID`)
) ENGINE=MyISAM AUTO_INCREMENT=352 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_invoice_frame
-- ----------------------------
INSERT INTO `master_invoice_frame` VALUES ('2', '2', 'hlx', '1');
INSERT INTO `master_invoice_frame` VALUES ('3', '3', 'sc4a018117', '1');
INSERT INTO `master_invoice_frame` VALUES ('4', '6', '1408021008', '1');
INSERT INTO `master_invoice_frame` VALUES ('5', '7', 'HXD14090279', '1');
INSERT INTO `master_invoice_frame` VALUES ('6', '9', 'SC4A001608', '1');
INSERT INTO `master_invoice_frame` VALUES ('7', '12', 'SC4A004016', '1');
INSERT INTO `master_invoice_frame` VALUES ('80', '13', '4VG25666', '1');
INSERT INTO `master_invoice_frame` VALUES ('9', '15', 'SC4A018179', '1');
INSERT INTO `master_invoice_frame` VALUES ('10', '16', 'J281260872', '1');
INSERT INTO `master_invoice_frame` VALUES ('11', '18', 'J408021007', '1');
INSERT INTO `master_invoice_frame` VALUES ('12', '19', 'MONTRA', '1');
INSERT INTO `master_invoice_frame` VALUES ('13', '20', 'J4110130', '1');
INSERT INTO `master_invoice_frame` VALUES ('14', '21', 'sc4a024114', '1');
INSERT INTO `master_invoice_frame` VALUES ('15', '22', 'HXD14126435', '1');
INSERT INTO `master_invoice_frame` VALUES ('228', '24', 'SC4A024852', '1');
INSERT INTO `master_invoice_frame` VALUES ('17', '25', '4VK21787', '1');
INSERT INTO `master_invoice_frame` VALUES ('18', '26', 'xc150110583', '1');
INSERT INTO `master_invoice_frame` VALUES ('19', '31', 'G153190700', '1');
INSERT INTO `master_invoice_frame` VALUES ('20', '32', 'VBA13283', '1');
INSERT INTO `master_invoice_frame` VALUES ('21', '33', 'SIXJNG120222', '1');
INSERT INTO `master_invoice_frame` VALUES ('22', '34', 'BHA135757', '1');
INSERT INTO `master_invoice_frame` VALUES ('206', '35', 'SC4A024761', '1');
INSERT INTO `master_invoice_frame` VALUES ('24', '36', 'SC4A013853', '1');
INSERT INTO `master_invoice_frame` VALUES ('208', '37', 'SC4A024769', '1');
INSERT INTO `master_invoice_frame` VALUES ('26', '38', 'HT151349', '1');
INSERT INTO `master_invoice_frame` VALUES ('27', '39', 'G153190647', '1');
INSERT INTO `master_invoice_frame` VALUES ('28', '41', 'SC4A024933', '1');
INSERT INTO `master_invoice_frame` VALUES ('29', '42', 'SC4A017518', '1');
INSERT INTO `master_invoice_frame` VALUES ('30', '43', 'HLX', '1');
INSERT INTO `master_invoice_frame` VALUES ('31', '44', 'SC4A021396', '1');
INSERT INTO `master_invoice_frame` VALUES ('32', '45', 'HLX', '1');
INSERT INTO `master_invoice_frame` VALUES ('33', '46', 'SC4A002239', '1');
INSERT INTO `master_invoice_frame` VALUES ('34', '47', 'J408021026', '1');
INSERT INTO `master_invoice_frame` VALUES ('91', '50', '40802132', '1');
INSERT INTO `master_invoice_frame` VALUES ('36', '51', '00', '1');
INSERT INTO `master_invoice_frame` VALUES ('37', '53', 'SMJBC14800082', '1');
INSERT INTO `master_invoice_frame` VALUES ('38', '57', 'HLX', '1');
INSERT INTO `master_invoice_frame` VALUES ('39', '58', 'UNA009785', '1');
INSERT INTO `master_invoice_frame` VALUES ('40', '60', 'UNA009883', '1');
INSERT INTO `master_invoice_frame` VALUES ('41', '63', 'G144440424', '1');
INSERT INTO `master_invoice_frame` VALUES ('42', '65', 'SMPDC14K00085', '1');
INSERT INTO `master_invoice_frame` VALUES ('43', '69', 'G123150390', '1');
INSERT INTO `master_invoice_frame` VALUES ('44', '70', '4VH15873', '1');
INSERT INTO `master_invoice_frame` VALUES ('45', '71', 'SC4A005882', '1');
INSERT INTO `master_invoice_frame` VALUES ('46', '72', 'G12315030', '1');
INSERT INTO `master_invoice_frame` VALUES ('47', '74', 'HLX', '1');
INSERT INTO `master_invoice_frame` VALUES ('48', '76', 'SKN14090783', '1');
INSERT INTO `master_invoice_frame` VALUES ('50', '95', 'S501110006', '1');
INSERT INTO `master_invoice_frame` VALUES ('51', '99', 'S5041363', '1');
INSERT INTO `master_invoice_frame` VALUES ('52', '100', 'NMC', '1');
INSERT INTO `master_invoice_frame` VALUES ('53', '102', 'SUNCROSS', '1');
INSERT INTO `master_invoice_frame` VALUES ('54', '105', 'G153190204', '1');
INSERT INTO `master_invoice_frame` VALUES ('55', '147', 'HT533392', '1');
INSERT INTO `master_invoice_frame` VALUES ('56', '149', 'SC4A022284', '1');
INSERT INTO `master_invoice_frame` VALUES ('57', '150', 'HT533282', '1');
INSERT INTO `master_invoice_frame` VALUES ('58', '151', 'G14121090', '1');
INSERT INTO `master_invoice_frame` VALUES ('226', '152', '4VJ05606', '1');
INSERT INTO `master_invoice_frame` VALUES ('60', '154', 'S504150955', '1');
INSERT INTO `master_invoice_frame` VALUES ('61', '159', 'S50415088', '1');
INSERT INTO `master_invoice_frame` VALUES ('62', '160', 'S504180037', '1');
INSERT INTO `master_invoice_frame` VALUES ('63', '162', 'UMA008210', '1');
INSERT INTO `master_invoice_frame` VALUES ('64', '169', 'S12000243', '1');
INSERT INTO `master_invoice_frame` VALUES ('65', '170', 'J408021034', '1');
INSERT INTO `master_invoice_frame` VALUES ('66', '172', 'HXD14120128', '1');
INSERT INTO `master_invoice_frame` VALUES ('67', '173', 'XKN14091247', '1');
INSERT INTO `master_invoice_frame` VALUES ('68', '175', 'SC4A021288', '1');
INSERT INTO `master_invoice_frame` VALUES ('69', '180', 'SC4A000426', '1');
INSERT INTO `master_invoice_frame` VALUES ('70', '193', 'JMH14100205', '1');
INSERT INTO `master_invoice_frame` VALUES ('71', '194', 'JMH14101564', '1');
INSERT INTO `master_invoice_frame` VALUES ('72', '198', 'S504151224', '1');
INSERT INTO `master_invoice_frame` VALUES ('73', '203', 'HT533255', '1');
INSERT INTO `master_invoice_frame` VALUES ('74', '205', 'JMH14090714', '1');
INSERT INTO `master_invoice_frame` VALUES ('227', '206', 'SC4A025922', '1');
INSERT INTO `master_invoice_frame` VALUES ('76', '207', 'S504150451', '1');
INSERT INTO `master_invoice_frame` VALUES ('77', '208', 'G144440294', '1');
INSERT INTO `master_invoice_frame` VALUES ('78', '209', 'SC4A027585', '1');
INSERT INTO `master_invoice_frame` VALUES ('82', '210', 'SC4A000433', '1');
INSERT INTO `master_invoice_frame` VALUES ('83', '211', '4VK34925', '1');
INSERT INTO `master_invoice_frame` VALUES ('84', '212', 'NGA152443', '1');
INSERT INTO `master_invoice_frame` VALUES ('85', '215', 'J310074448', '1');
INSERT INTO `master_invoice_frame` VALUES ('86', '216', 'S504180043', '1');
INSERT INTO `master_invoice_frame` VALUES ('87', '218', 'J31007429', '1');
INSERT INTO `master_invoice_frame` VALUES ('88', '219', 'S504151133', '1');
INSERT INTO `master_invoice_frame` VALUES ('89', '222', 'UX12000400', '1');
INSERT INTO `master_invoice_frame` VALUES ('90', '225', 'J408021070', '1');
INSERT INTO `master_invoice_frame` VALUES ('93', '229', 'NGA152443', '1');
INSERT INTO `master_invoice_frame` VALUES ('94', '230', 'J310074421', '1');
INSERT INTO `master_invoice_frame` VALUES ('95', '232', 'HXD14125631', '1');
INSERT INTO `master_invoice_frame` VALUES ('96', '235', 'SC4A27229', '1');
INSERT INTO `master_invoice_frame` VALUES ('97', '245', 'JMH14101625', '1');
INSERT INTO `master_invoice_frame` VALUES ('98', '246', 'S504151138', '1');
INSERT INTO `master_invoice_frame` VALUES ('99', '251', 'JMH14100193', '1');
INSERT INTO `master_invoice_frame` VALUES ('100', '252', 'IBDFSD14AA0835', '1');
INSERT INTO `master_invoice_frame` VALUES ('101', '253', 'T140713960', '1');
INSERT INTO `master_invoice_frame` VALUES ('102', '254', 'S504150818', '1');
INSERT INTO `master_invoice_frame` VALUES ('103', '255', 'DY15060060', '1');
INSERT INTO `master_invoice_frame` VALUES ('104', '256', 'JMH14090994', '1');
INSERT INTO `master_invoice_frame` VALUES ('105', '258', 'TVK15064', '1');
INSERT INTO `master_invoice_frame` VALUES ('106', '259', 'NMC', '1');
INSERT INTO `master_invoice_frame` VALUES ('107', '260', 'D15060767', '1');
INSERT INTO `master_invoice_frame` VALUES ('108', '261', 'UMA008271', '1');
INSERT INTO `master_invoice_frame` VALUES ('109', '263', '1', '1');
INSERT INTO `master_invoice_frame` VALUES ('110', '264', 'S504151289', '1');
INSERT INTO `master_invoice_frame` VALUES ('111', '265', 'S504151148', '1');
INSERT INTO `master_invoice_frame` VALUES ('112', '265', 'S5041151207', '1');
INSERT INTO `master_invoice_frame` VALUES ('113', '266', 'HEMS149004', '1');
INSERT INTO `master_invoice_frame` VALUES ('114', '268', 'S504780034', '1');
INSERT INTO `master_invoice_frame` VALUES ('115', '272', 'SC4A019815', '1');
INSERT INTO `master_invoice_frame` VALUES ('210', '276', 'SC4A027561', '1');
INSERT INTO `master_invoice_frame` VALUES ('117', '278', 'S504150897', '1');
INSERT INTO `master_invoice_frame` VALUES ('120', '280', '1', '1');
INSERT INTO `master_invoice_frame` VALUES ('121', '283', 'HTJ5041168', '1');
INSERT INTO `master_invoice_frame` VALUES ('122', '284', 'HTJ5041822', '1');
INSERT INTO `master_invoice_frame` VALUES ('123', '288', '1', '1');
INSERT INTO `master_invoice_frame` VALUES ('124', '289', 'J5070005071', '1');
INSERT INTO `master_invoice_frame` VALUES ('125', '293', 'S401210399', '1');
INSERT INTO `master_invoice_frame` VALUES ('126', '294', '123', '1');
INSERT INTO `master_invoice_frame` VALUES ('127', '295', 'HLX', '1');
INSERT INTO `master_invoice_frame` VALUES ('128', '299', 'UT', '1');
INSERT INTO `master_invoice_frame` VALUES ('129', '300', '1507095004', '1');
INSERT INTO `master_invoice_frame` VALUES ('134', '301', '1501031138', '1');
INSERT INTO `master_invoice_frame` VALUES ('131', '302', 'HLX', '1');
INSERT INTO `master_invoice_frame` VALUES ('132', '318', '1', '1');
INSERT INTO `master_invoice_frame` VALUES ('136', '321', 'SC4A018168', '1');
INSERT INTO `master_invoice_frame` VALUES ('137', '322', 'Y150528966', '1');
INSERT INTO `master_invoice_frame` VALUES ('223', '323', 'JMH14100124', '1');
INSERT INTO `master_invoice_frame` VALUES ('139', '325', '4VK21826', '1');
INSERT INTO `master_invoice_frame` VALUES ('212', '326', 'SC4A028782', '1');
INSERT INTO `master_invoice_frame` VALUES ('229', '327', 'SC4A027460', '1');
INSERT INTO `master_invoice_frame` VALUES ('142', '330', 'J503009028', '1');
INSERT INTO `master_invoice_frame` VALUES ('143', '333', '1', '1');
INSERT INTO `master_invoice_frame` VALUES ('144', '334', '1', '1');
INSERT INTO `master_invoice_frame` VALUES ('145', '336', 'HLX', '1');
INSERT INTO `master_invoice_frame` VALUES ('146', '338', '100780', '1');
INSERT INTO `master_invoice_frame` VALUES ('147', '340', 'J507005361', '1');
INSERT INTO `master_invoice_frame` VALUES ('148', '342', '123', '1');
INSERT INTO `master_invoice_frame` VALUES ('149', '343', 'J503009023', '1');
INSERT INTO `master_invoice_frame` VALUES ('150', '347', 'J411790269', '1');
INSERT INTO `master_invoice_frame` VALUES ('151', '348', 'SC4A024973', '1');
INSERT INTO `master_invoice_frame` VALUES ('152', '349', 'GA153738', '1');
INSERT INTO `master_invoice_frame` VALUES ('153', '351', 'SKID', '1');
INSERT INTO `master_invoice_frame` VALUES ('154', '352', 'SC4A024084', '1');
INSERT INTO `master_invoice_frame` VALUES ('155', '353', '123', '1');
INSERT INTO `master_invoice_frame` VALUES ('156', '354', '1411790988', '1');
INSERT INTO `master_invoice_frame` VALUES ('157', '355', 'UT', '1');
INSERT INTO `master_invoice_frame` VALUES ('158', '356', 'SC4A009435', '1');
INSERT INTO `master_invoice_frame` VALUES ('159', '357', 'HLX', '1');
INSERT INTO `master_invoice_frame` VALUES ('160', '358', 'HT081212', '1');
INSERT INTO `master_invoice_frame` VALUES ('161', '360', 'HT081494', '1');
INSERT INTO `master_invoice_frame` VALUES ('162', '361', 'SACHIN', '1');
INSERT INTO `master_invoice_frame` VALUES ('163', '362', 'SC4A021449', '1');
INSERT INTO `master_invoice_frame` VALUES ('164', '363', 'HT091148', '1');
INSERT INTO `master_invoice_frame` VALUES ('224', '364', '1501099176', '1');
INSERT INTO `master_invoice_frame` VALUES ('167', '367', 'Z150704006', '1');
INSERT INTO `master_invoice_frame` VALUES ('168', '368', '1', '1');
INSERT INTO `master_invoice_frame` VALUES ('169', '369', 'G153190400', '1');
INSERT INTO `master_invoice_frame` VALUES ('170', '370', 'K750/05448', '1');
INSERT INTO `master_invoice_frame` VALUES ('171', '372', 'J501031036', '1');
INSERT INTO `master_invoice_frame` VALUES ('172', '373', '1', '1');
INSERT INTO `master_invoice_frame` VALUES ('173', '374', 'SC4A014834', '1');
INSERT INTO `master_invoice_frame` VALUES ('174', '375', 'CJD5003010', '1');
INSERT INTO `master_invoice_frame` VALUES ('175', '378', 'SC4A028716', '1');
INSERT INTO `master_invoice_frame` VALUES ('176', '379', 'HT0810890', '1');
INSERT INTO `master_invoice_frame` VALUES ('225', '382', 'J507099181', '1');
INSERT INTO `master_invoice_frame` VALUES ('178', '383', 'S5003681738', '1');
INSERT INTO `master_invoice_frame` VALUES ('179', '384', 'UT', '1');
INSERT INTO `master_invoice_frame` VALUES ('180', '385', 'HT081039', '1');
INSERT INTO `master_invoice_frame` VALUES ('181', '386', 'SC4A024907', '1');
INSERT INTO `master_invoice_frame` VALUES ('182', '388', 'SC4A029188', '1');
INSERT INTO `master_invoice_frame` VALUES ('183', '391', 'J507005386', '1');
INSERT INTO `master_invoice_frame` VALUES ('184', '396', 'BSA', '1');
INSERT INTO `master_invoice_frame` VALUES ('185', '397', 'HTO81186', '1');
INSERT INTO `master_invoice_frame` VALUES ('187', '399', 'SC4A003832', '1');
INSERT INTO `master_invoice_frame` VALUES ('188', '403', '123', '1');
INSERT INTO `master_invoice_frame` VALUES ('189', '406', 'SC4A019054', '1');
INSERT INTO `master_invoice_frame` VALUES ('190', '407', 'S504151239', '1');
INSERT INTO `master_invoice_frame` VALUES ('191', '408', 'HT081160', '1');
INSERT INTO `master_invoice_frame` VALUES ('192', '411', '123', '1');
INSERT INTO `master_invoice_frame` VALUES ('194', '412', 'S5081838', '1');
INSERT INTO `master_invoice_frame` VALUES ('195', '413', '501031160', '1');
INSERT INTO `master_invoice_frame` VALUES ('196', '416', 'SCS14102139', '1');
INSERT INTO `master_invoice_frame` VALUES ('197', '419', '123', '1');
INSERT INTO `master_invoice_frame` VALUES ('198', '420', 'TI', '1');
INSERT INTO `master_invoice_frame` VALUES ('199', '421', 'JAX', '1');
INSERT INTO `master_invoice_frame` VALUES ('214', '422', 'SC4A021208', '1');
INSERT INTO `master_invoice_frame` VALUES ('201', '423', '123', '1');
INSERT INTO `master_invoice_frame` VALUES ('202', '424', 'UT', '1');
INSERT INTO `master_invoice_frame` VALUES ('203', '429', 'STAR', '1');
INSERT INTO `master_invoice_frame` VALUES ('209', '430', 'RALEIGH', '1');
INSERT INTO `master_invoice_frame` VALUES ('218', '228', '11111', '1');
INSERT INTO `master_invoice_frame` VALUES ('219', '434', 'Array', '1');
INSERT INTO `master_invoice_frame` VALUES ('220', '435', 'Array', '1');
INSERT INTO `master_invoice_frame` VALUES ('221', '435', 'Array', '1');
INSERT INTO `master_invoice_frame` VALUES ('338', '463', '766767', '1');
INSERT INTO `master_invoice_frame` VALUES ('340', '464', '777', '1');
INSERT INTO `master_invoice_frame` VALUES ('339', '464', '534534', '1');
INSERT INTO `master_invoice_frame` VALUES ('337', '463', '345351', '1');
INSERT INTO `master_invoice_frame` VALUES ('342', '466', 'Array', '1');
INSERT INTO `master_invoice_frame` VALUES ('341', '466', 'Array', '1');
INSERT INTO `master_invoice_frame` VALUES ('343', '490', '3423423', '1');
INSERT INTO `master_invoice_frame` VALUES ('344', '495', 'rtyertyrty', '1');
INSERT INTO `master_invoice_frame` VALUES ('345', '498', '324234234', '1');
INSERT INTO `master_invoice_frame` VALUES ('346', '500', '23123', '1');
INSERT INTO `master_invoice_frame` VALUES ('347', '500', '213123', '1');
INSERT INTO `master_invoice_frame` VALUES ('351', '502', 'sdfsdfsdf', '1');
INSERT INTO `master_invoice_frame` VALUES ('350', '502', '98798', '1');

-- ----------------------------
-- Table structure for master_merchant
-- ----------------------------
DROP TABLE IF EXISTS `master_merchant`;
CREATE TABLE `master_merchant` (
  `MerchantID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(200) DEFAULT NULL,
  `MiddelName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `BirthDate` date DEFAULT NULL,
  `Comapany` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `HomeNumber` varchar(100) DEFAULT NULL,
  `OfficeNumber` varchar(100) DEFAULT NULL,
  `MobileNumber` varchar(100) DEFAULT NULL,
  `Website` varchar(100) DEFAULT NULL,
  `BillingAddress` text,
  `ShippingAddress` text,
  `BillingCity` varchar(100) DEFAULT NULL,
  `ShippingCity` varchar(100) DEFAULT NULL,
  `BillingPinCode` varchar(100) DEFAULT NULL,
  `ShippingPinCode` varchar(100) DEFAULT NULL,
  `BillingState` varchar(100) DEFAULT NULL,
  `ShippingState` varchar(100) DEFAULT NULL,
  `TinNumber` varchar(100) DEFAULT NULL,
  `AdditionalDetail` text,
  `AccountNumber` varchar(100) DEFAULT NULL,
  `AccountName` varchar(100) DEFAULT NULL,
  `BankName` varchar(100) DEFAULT NULL,
  `BankBranch` varchar(100) DEFAULT NULL,
  `BankCity` varchar(100) DEFAULT NULL,
  `IFSCCode` varchar(100) DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`MerchantID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_merchant
-- ----------------------------
INSERT INTO `master_merchant` VALUES ('1', 'CYCLE WORLD', '', '', '0000-00-00', '', '', '', '', '9426220035', '', '', '', 'RAJKOT', 'RAJKOT', '', '', 'GUJARAT', 'GUJARAT', '24091001724', '', '', '', '', '', '', '', '1');
INSERT INTO `master_merchant` VALUES ('2', 'LAXMI CYCLE AGENCY', '', '', '0000-00-00', '', '', '', '', '9428009988', '', 'MADAHVDARSHAN COMPLEX, VAGAVADI ROAD.', 'MADAHVDARSHAN COMPLEX, VAGAVADI ROAD.', 'BHAVNAGAR', 'BHAVNAGAR', '', '', 'GUJARAT', 'GUJARAT', '', '', '', '', '', '', '', '', '1');
INSERT INTO `master_merchant` VALUES ('3', 'Mayur', 'ishvarbhai', 'Panchal', '0000-00-00', 'salient', 'mayurpanchal79@gmail.com', '9999', '8888', '77777', 'www.salient.com', '1-abc,sana reci\r\nbaeri', '1-abc,sana reci\r\nbaeri', 'sant', 'sant', '389260', '389260', 'gujarat', 'gujarat', '1234567890', 'this is additional details', '987654321', 'Mayur3 Panchal', 'idbi', 'sidhhivinayak', 'vadodara', 'IBLK00053', '1');
INSERT INTO `master_merchant` VALUES ('4', 'Mayur', 'ishvarbhai', 'Panchal', '0000-00-00', 'salient', 'mayurpanchal79@gmail.com', '9999', '8888', '77777', 'www.salient.com', '2-xyz,sant,\r\nsidhi,ahmen', '2-xyz,sant,\r\nsidhi,ahmen', 'ahmendabad', 'ahmendabad', '380011', '380011', 'gujarat', 'gujarat', '87987987', 'asdasdasd asdkad\r\nad\r\nasd\r\n', '987654321', 'Mayur3 Panchal', 'idbi', 'sidhhivinayak', 'vadodara', 'IBLK00053', '1');

-- ----------------------------
-- Table structure for master_modal_name
-- ----------------------------
DROP TABLE IF EXISTS `master_modal_name`;
CREATE TABLE `master_modal_name` (
  `ModalNameID` int(11) NOT NULL AUTO_INCREMENT,
  `ModalName` varchar(100) DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`ModalNameID`)
) ENGINE=MyISAM AUTO_INCREMENT=176 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_modal_name
-- ----------------------------
INSERT INTO `master_modal_name` VALUES ('1', 'ANTOP / ADDER (F.D.)', '1');
INSERT INTO `master_modal_name` VALUES ('2', 'ATOM ZX', '1');
INSERT INTO `master_modal_name` VALUES ('3', 'ATOM ZX 18 SPEED (M.S.)', '1');
INSERT INTO `master_modal_name` VALUES ('4', 'ATOM ZX 6 SPEED (M.S.)', '1');
INSERT INTO `master_modal_name` VALUES ('5', 'AURA', '1');
INSERT INTO `master_modal_name` VALUES ('6', 'BEETLE', '1');
INSERT INTO `master_modal_name` VALUES ('7', 'BIANCHI DUEL', '1');
INSERT INTO `master_modal_name` VALUES ('8', 'BLUES 1.1', '1');
INSERT INTO `master_modal_name` VALUES ('9', 'BMX', '1');
INSERT INTO `master_modal_name` VALUES ('10', 'BOUNTY (IBC)', '1');
INSERT INTO `master_modal_name` VALUES ('11', 'BOUNTY SPORTS', '1');
INSERT INTO `master_modal_name` VALUES ('12', 'BOW-TIE', '1');
INSERT INTO `master_modal_name` VALUES ('13', 'BUTTERFLY', '1');
INSERT INTO `master_modal_name` VALUES ('14', 'CALDRON (M.S. / D.D.)', '1');
INSERT INTO `master_modal_name` VALUES ('15', 'CALDRON - EF (M.S.)', '1');
INSERT INTO `master_modal_name` VALUES ('16', 'CELTIC 2.1', '1');
INSERT INTO `master_modal_name` VALUES ('17', 'CELTIC 2.2', '1');
INSERT INTO `master_modal_name` VALUES ('18', 'CHARLIE', '1');
INSERT INTO `master_modal_name` VALUES ('19', 'CHARM', '1');
INSERT INTO `master_modal_name` VALUES ('20', 'CITY001', '1');
INSERT INTO `master_modal_name` VALUES ('21', 'CLUBMAN', '1');
INSERT INTO `master_modal_name` VALUES ('22', 'CRONIC', '1');
INSERT INTO `master_modal_name` VALUES ('23', 'CROWN', '1');
INSERT INTO `master_modal_name` VALUES ('24', 'CRUISER IBC (F.D.)', '1');
INSERT INTO `master_modal_name` VALUES ('25', 'CRUZE', '1');
INSERT INTO `master_modal_name` VALUES ('26', 'CRUZE NEW ', '1');
INSERT INTO `master_modal_name` VALUES ('27', 'CUB', '1');
INSERT INTO `master_modal_name` VALUES ('28', 'CUBA IBC', '1');
INSERT INTO `master_modal_name` VALUES ('29', 'CUBA SPORTS', '1');
INSERT INTO `master_modal_name` VALUES ('30', 'CX', '1');
INSERT INTO `master_modal_name` VALUES ('31', 'CYBOT', '1');
INSERT INTO `master_modal_name` VALUES ('32', 'DIRT MAX (M.S. / D.D.)', '1');
INSERT INTO `master_modal_name` VALUES ('33', 'DIRT MAX (S.S.)', '1');
INSERT INTO `master_modal_name` VALUES ('34', 'DRIFT', '1');
INSERT INTO `master_modal_name` VALUES ('35', 'DTR 20', '1');
INSERT INTO `master_modal_name` VALUES ('36', 'DTR 24', '1');
INSERT INTO `master_modal_name` VALUES ('37', 'DUAL', '1');
INSERT INTO `master_modal_name` VALUES ('38', 'DYNAMITE ZX ', '1');
INSERT INTO `master_modal_name` VALUES ('39', 'DYNOX', '1');
INSERT INTO `master_modal_name` VALUES ('40', 'E-125', '1');
INSERT INTO `master_modal_name` VALUES ('41', 'E-12571', '1');
INSERT INTO `master_modal_name` VALUES ('42', 'ELITE', '1');
INSERT INTO `master_modal_name` VALUES ('43', 'EQUINOX (M.S.)', '1');
INSERT INTO `master_modal_name` VALUES ('44', 'EXTRUSION', '1');
INSERT INTO `master_modal_name` VALUES ('45', 'FORCE 10', '1');
INSERT INTO `master_modal_name` VALUES ('46', 'GRN DTR', '1');
INSERT INTO `master_modal_name` VALUES ('47', 'HAPPY', '1');
INSERT INTO `master_modal_name` VALUES ('48', 'HAZARD-EF (M.S.)', '1');
INSERT INTO `master_modal_name` VALUES ('49', 'INNOVATE (M.S.)', '1');
INSERT INTO `master_modal_name` VALUES ('50', 'INTRUDER', '1');
INSERT INTO `master_modal_name` VALUES ('51', 'JALPARI', '1');
INSERT INTO `master_modal_name` VALUES ('52', 'JAX', '1');
INSERT INTO `master_modal_name` VALUES ('53', 'JET LINER', '1');
INSERT INTO `master_modal_name` VALUES ('54', 'JUS BIKE', '1');
INSERT INTO `master_modal_name` VALUES ('55', 'JUST BIKE (S.S.)', '1');
INSERT INTO `master_modal_name` VALUES ('56', 'KNIGHT HUNTER', '1');
INSERT INTO `master_modal_name` VALUES ('57', 'LAND 8.10 (M.S. / D.D.)', '1');
INSERT INTO `master_modal_name` VALUES ('58', 'LOADED (M.S. / D.D.)', '1');
INSERT INTO `master_modal_name` VALUES ('59', 'LUST', '1');
INSERT INTO `master_modal_name` VALUES ('60', 'MACH CITY', '1');
INSERT INTO `master_modal_name` VALUES ('61', 'MACH CITY I BIKE', '1');
INSERT INTO `master_modal_name` VALUES ('62', 'MILE STONE', '1');
INSERT INTO `master_modal_name` VALUES ('63', 'MISCEO (M.S.)', '1');
INSERT INTO `master_modal_name` VALUES ('64', 'MISCEO 1.0 (S.S.)', '1');
INSERT INTO `master_modal_name` VALUES ('65', 'MONSTER X (S.S.)', '1');
INSERT INTO `master_modal_name` VALUES ('66', 'MONSTER X - EF (M.S. / F.D.)', '1');
INSERT INTO `master_modal_name` VALUES ('67', 'MONTANA SPORTS', '1');
INSERT INTO `master_modal_name` VALUES ('68', 'MONTRA - 2015 TRANCE SPEED', '1');
INSERT INTO `master_modal_name` VALUES ('69', 'MONTRA 14 - BLUE SPEED', '1');
INSERT INTO `master_modal_name` VALUES ('70', 'MY RIDE (M.S.)', '1');
INSERT INTO `master_modal_name` VALUES ('71', 'MY RIDE (S.S.)', '1');
INSERT INTO `master_modal_name` VALUES ('72', 'PACE', '1');
INSERT INTO `master_modal_name` VALUES ('73', 'PC', '1');
INSERT INTO `master_modal_name` VALUES ('74', 'QUICK', '1');
INSERT INTO `master_modal_name` VALUES ('75', 'RAPID', '1');
INSERT INTO `master_modal_name` VALUES ('76', 'REDOX', '1');
INSERT INTO `master_modal_name` VALUES ('77', 'ROAD009', '1');
INSERT INTO `master_modal_name` VALUES ('78', 'ROCK 1.0 ', '1');
INSERT INTO `master_modal_name` VALUES ('79', 'ROCK 1.1', '1');
INSERT INTO `master_modal_name` VALUES ('80', 'ROCKWAY', '1');
INSERT INTO `master_modal_name` VALUES ('81', 'ROCKY ', '1');
INSERT INTO `master_modal_name` VALUES ('82', 'ROCKY ZX', '1');
INSERT INTO `master_modal_name` VALUES ('83', 'RODEO A 100 VX (M.SPEED)', '1');
INSERT INTO `master_modal_name` VALUES ('84', 'RODEO GEOLANDER (M.S./F.D.)', '1');
INSERT INTO `master_modal_name` VALUES ('85', 'RODEO NFS PRO (M.S. / F.D.)', '1');
INSERT INTO `master_modal_name` VALUES ('86', 'RODEO TURNER VX (M.S.)', '1');
INSERT INTO `master_modal_name` VALUES ('87', 'RODEO WAYFINDER (M.S.)', '1');
INSERT INTO `master_modal_name` VALUES ('88', 'RS 26 (S.S. / F.D.)', '1');
INSERT INTO `master_modal_name` VALUES ('89', 'SATA', '1');
INSERT INTO `master_modal_name` VALUES ('90', 'SENSO', '1');
INSERT INTO `master_modal_name` VALUES ('91', 'SHOCKBLAZE (M.S. / F.D.)', '1');
INSERT INTO `master_modal_name` VALUES ('92', 'SKID', '1');
INSERT INTO `master_modal_name` VALUES ('93', 'SKYTOP', '1');
INSERT INTO `master_modal_name` VALUES ('94', 'SOCCER (M.S. / D.D.)', '1');
INSERT INTO `master_modal_name` VALUES ('95', 'SOCCER (S.S. / F.D.)', '1');
INSERT INTO `master_modal_name` VALUES ('96', 'SOCCER (S.S.)', '1');
INSERT INTO `master_modal_name` VALUES ('97', 'SPARTA ZX ', '1');
INSERT INTO `master_modal_name` VALUES ('98', 'STAR', '1');
INSERT INTO `master_modal_name` VALUES ('99', 'STARLEY', '1');
INSERT INTO `master_modal_name` VALUES ('100', 'STRATUS (S.S.)', '1');
INSERT INTO `master_modal_name` VALUES ('101', 'STYLOUS (S.S.)', '1');
INSERT INTO `master_modal_name` VALUES ('102', 'SUPER SPORTS WOMAN', '1');
INSERT INTO `master_modal_name` VALUES ('103', 'SX 006', '1');
INSERT INTO `master_modal_name` VALUES ('104', 'TEENZ', '1');
INSERT INTO `master_modal_name` VALUES ('105', 'TERRAIN 30 (M.S. / D.D.)', '1');
INSERT INTO `master_modal_name` VALUES ('106', 'TOONZ', '1');
INSERT INTO `master_modal_name` VALUES ('107', 'TRANCE', '1');
INSERT INTO `master_modal_name` VALUES ('108', 'TRANCE PRO ', '1');
INSERT INTO `master_modal_name` VALUES ('109', 'TRANS PRO', '1');
INSERT INTO `master_modal_name` VALUES ('110', 'TRIGGER (M.S. / F.D.)', '1');
INSERT INTO `master_modal_name` VALUES ('111', 'TRIGGER (S.S. / F.D.)', '1');
INSERT INTO `master_modal_name` VALUES ('112', 'U TECH (S.S )', '1');
INSERT INTO `master_modal_name` VALUES ('113', 'UNIQUE', '1');
INSERT INTO `master_modal_name` VALUES ('114', 'UNPLUGGED', '1');
INSERT INTO `master_modal_name` VALUES ('115', 'X FORCE', '1');
INSERT INTO `master_modal_name` VALUES ('116', 'X ONE', '1');
INSERT INTO `master_modal_name` VALUES ('117', 'X TRACK (S.S. / F.D.)', '1');
INSERT INTO `master_modal_name` VALUES ('119', 'INFERNO', '1');
INSERT INTO `master_modal_name` VALUES ('120', 'PANAMAO X2', '1');
INSERT INTO `master_modal_name` VALUES ('121', 'TALUS 1.5', '1');
INSERT INTO `master_modal_name` VALUES ('122', 'JUS BIKE M.SPEED ', '1');
INSERT INTO `master_modal_name` VALUES ('123', 'MACH CITY I BIKE 7 SPEED', '1');
INSERT INTO `master_modal_name` VALUES ('124', 'RODEO HARDLINER M.SPEED', '1');
INSERT INTO `master_modal_name` VALUES ('125', 'RODEO ZXR M.SPEED', '1');
INSERT INTO `master_modal_name` VALUES ('126', 'AGGRESSOR SPORT ', '1');
INSERT INTO `master_modal_name` VALUES ('127', 'TRIGGER M.SPEED FDB', '1');
INSERT INTO `master_modal_name` VALUES ('158', 'MONSTER X MS SPEED EF D.D.', '1');
INSERT INTO `master_modal_name` VALUES ('129', 'ROXIO 1.0', '1');
INSERT INTO `master_modal_name` VALUES ('130', 'FREELIFE ', '1');
INSERT INTO `master_modal_name` VALUES ('131', 'DIRT JUMPER D.D.', '1');
INSERT INTO `master_modal_name` VALUES ('132', 'TERRAIN M.SPEED', '1');
INSERT INTO `master_modal_name` VALUES ('133', 'K1 S.S.', '1');
INSERT INTO `master_modal_name` VALUES ('134', 'K3 S.S.', '1');
INSERT INTO `master_modal_name` VALUES ('135', 'K6 S.S.', '1');
INSERT INTO `master_modal_name` VALUES ('136', 'HT J1 ', '1');
INSERT INTO `master_modal_name` VALUES ('137', 'HT1 SWIFT', '1');
INSERT INTO `master_modal_name` VALUES ('138', 'HT 1 ', '1');
INSERT INTO `master_modal_name` VALUES ('139', 'HT 2 HARD TAIL', '1');
INSERT INTO `master_modal_name` VALUES ('140', 'HT 3 HARD TRAIL', '1');
INSERT INTO `master_modal_name` VALUES ('141', 'HT 4 ', '1');
INSERT INTO `master_modal_name` VALUES ('142', 'DS 1', '1');
INSERT INTO `master_modal_name` VALUES ('143', 'H1 LITE', '1');
INSERT INTO `master_modal_name` VALUES ('144', 'H2 CROSS', '1');
INSERT INTO `master_modal_name` VALUES ('145', 'H2D', '1');
INSERT INTO `master_modal_name` VALUES ('146', 'Q1', '1');
INSERT INTO `master_modal_name` VALUES ('147', 'ROCK 1.1 D', '1');
INSERT INTO `master_modal_name` VALUES ('148', 'HURRICANE  D/DISK', '1');
INSERT INTO `master_modal_name` VALUES ('149', 'HAZARD EF  A/R', '1');
INSERT INTO `master_modal_name` VALUES ('150', 'XC 101 D/ DISK', '1');
INSERT INTO `master_modal_name` VALUES ('151', 'EXPLORE  M SPEED   F/ DISK', '1');
INSERT INTO `master_modal_name` VALUES ('153', 'TRC HLX', '1');
INSERT INTO `master_modal_name` VALUES ('154', 'TRC DUCK', '1');
INSERT INTO `master_modal_name` VALUES ('155', 'TRC MAGIC CAR HLX 3355', '1');
INSERT INTO `master_modal_name` VALUES ('156', 'TRC MAGIC CAR HLX 9010', '1');
INSERT INTO `master_modal_name` VALUES ('157', 'TRC MAGIC CAR HLX 1568', '1');
INSERT INTO `master_modal_name` VALUES ('159', 'MACH CITY I BIKE 7 SPEED', '1');
INSERT INTO `master_modal_name` VALUES ('160', 'ELDORADO ', '1');
INSERT INTO `master_modal_name` VALUES ('161', 'TRIUM', '1');
INSERT INTO `master_modal_name` VALUES ('162', 'SENORITA', '1');
INSERT INTO `master_modal_name` VALUES ('163', 'BIG SAM', '1');
INSERT INTO `master_modal_name` VALUES ('164', 'ACE-FX  16', '1');
INSERT INTO `master_modal_name` VALUES ('165', 'ACE-ZX 20', '1');
INSERT INTO `master_modal_name` VALUES ('166', 'ACE- SX 14', '1');
INSERT INTO `master_modal_name` VALUES ('167', 'NEO-24*15 WHITE', '1');
INSERT INTO `master_modal_name` VALUES ('168', 'NEO-24*15 RED', '1');
INSERT INTO `master_modal_name` VALUES ('169', 'NEO-26*20 RED', '1');
INSERT INTO `master_modal_name` VALUES ('170', 'NEO-26*18 WHITE', '1');
INSERT INTO `master_modal_name` VALUES ('171', 'RACERSTAR M/S', '1');
INSERT INTO `master_modal_name` VALUES ('172', 'MONTRA BLUES 1.2', '1');
INSERT INTO `master_modal_name` VALUES ('173', 'MONTRA ROCK 1.0 V2 18 SPEED', '1');
INSERT INTO `master_modal_name` VALUES ('174', 'DS J1 ', '1');
INSERT INTO `master_modal_name` VALUES ('175', 'ROAM 2D', '1');

-- ----------------------------
-- Table structure for master_products
-- ----------------------------
DROP TABLE IF EXISTS `master_products`;
CREATE TABLE `master_products` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyID` int(11) DEFAULT NULL,
  `ModalName` varchar(100) DEFAULT NULL,
  `Segment` varchar(100) DEFAULT NULL,
  `Color` varchar(100) DEFAULT NULL,
  `Size` varchar(100) DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=254 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_products
-- ----------------------------
INSERT INTO `master_products` VALUES ('3', '2', 'E-125', 'big bike', 'red', '25\"', '1');
INSERT INTO `master_products` VALUES ('4', '3', 'E-12571', 'big bike1', 'black1', '251', '1');
INSERT INTO `master_products` VALUES ('5', '4', 'ROCK 1.0 ', 'MTB', 'BLUE', 'M', '1');
INSERT INTO `master_products` VALUES ('6', '5', 'SATA', 'MOUNTAIN', 'BLUE', '24\"', '1');
INSERT INTO `master_products` VALUES ('7', '6', 'ROAD009', 'ROAD BIKE', 'WHITE', '22\"', '1');
INSERT INTO `master_products` VALUES ('8', '6', 'CITY001', 'CITY BIKE', 'RED', '22\"', '1');
INSERT INTO `master_products` VALUES ('9', '8', 'QUICK', 'MTB', 'BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('10', '8', 'CRONIC', 'MTB', 'BLACK', '26\"', '1');
INSERT INTO `master_products` VALUES ('11', '8', 'DRIFT', 'MTB', 'HOT RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('12', '8', 'UNIQUE', 'MTB', 'HOT RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('13', '8', 'UNIQUE', 'MTB', 'SILVER-BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('14', '8', 'UNIQUE', 'MTB', 'PITCH', '26\"', '1');
INSERT INTO `master_products` VALUES ('15', '8', 'UNIQUE', 'MTB', 'YELLOW-BLACK', '26\"', '1');
INSERT INTO `master_products` VALUES ('16', '8', 'X ONE', 'MTB', 'COPPER', '26\"', '1');
INSERT INTO `master_products` VALUES ('17', '8', 'X ONE', 'MTB', 'BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('18', '8', 'X ONE', 'MTB', 'CHAINA RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('19', '8', 'X ONE', 'MTB', 'GREEN-BLACK', '26\"', '1');
INSERT INTO `master_products` VALUES ('20', '8', 'CRUZE', 'MTB', 'WHITE-GREEN', '26\"', '1');
INSERT INTO `master_products` VALUES ('21', '8', 'CRUZE NEW ', 'MTB', 'HOT RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('22', '8', 'CRUZE NEW ', 'MTB', 'SILVER-BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('23', '8', 'X FORCE', 'MTB', 'CREAM-BROWN', '26\"', '1');
INSERT INTO `master_products` VALUES ('24', '8', 'X FORCE', 'MTB', 'CHAINA RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('25', '8', 'INTRUDER', 'MTB', 'HOT RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('26', '8', 'INTRUDER', 'MTB', 'BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('27', '8', 'SKYTOP', 'MTB', 'PITCH', '26\"', '1');
INSERT INTO `master_products` VALUES ('28', '8', 'SKYTOP', 'MTB', 'CHAINA RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('29', '8', 'EXTRUSION', 'MTB', 'HOT RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('30', '8', 'EXTRUSION', 'MTB', 'BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('31', '8', 'ELITE', 'MTB', 'HOT RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('32', '8', 'ELITE', 'MTB', 'BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('33', '8', 'BOUNTY (IBC)', 'MTB', 'HOT RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('34', '8', 'BOUNTY SPORTS', 'MTB', 'HOT RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('35', '8', 'CUBA IBC', 'MTB', 'S.BLUE-SILVER', '26\"', '1');
INSERT INTO `master_products` VALUES ('36', '8', 'CUBA SPORTS', 'MTB', 'S.BLUE-SILVER', '26\"', '1');
INSERT INTO `master_products` VALUES ('37', '8', 'REDOX', 'MTB', 'WHITE-BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('38', '8', 'QUICK', 'MTB', 'BLUE', '24\"', '1');
INSERT INTO `master_products` VALUES ('39', '8', 'CRONIC', 'MTB', 'BLACK', '24\"', '1');
INSERT INTO `master_products` VALUES ('40', '8', 'DRIFT', 'MTB', 'HOT RED', '24\"', '1');
INSERT INTO `master_products` VALUES ('41', '8', 'AURA', 'MTB', 'SILVER-BLUE', '24\"', '1');
INSERT INTO `master_products` VALUES ('42', '8', 'AURA', 'MTB', 'CHAINA RED', '24\"', '1');
INSERT INTO `master_products` VALUES ('43', '8', 'JET LINER', 'MTB', 'SILVER-BLUE', '24\"', '1');
INSERT INTO `master_products` VALUES ('44', '8', 'JET LINER', 'MTB', 'COPPER', '24\"', '1');
INSERT INTO `master_products` VALUES ('45', '8', 'JET LINER', 'MTB', 'GREEN-BLACK', '24\"', '1');
INSERT INTO `master_products` VALUES ('46', '8', 'ROCKWAY', 'MTB', 'HOT RED', '24\"', '1');
INSERT INTO `master_products` VALUES ('47', '8', 'ROCKWAY', 'MTB', 'BLUE', '24\"', '1');
INSERT INTO `master_products` VALUES ('48', '8', 'MILE STONE', 'MTB', 'GREEN-BLACK', '24\"', '1');
INSERT INTO `master_products` VALUES ('49', '8', 'CRUZE', 'MTB', 'HOT RED', '24\"', '1');
INSERT INTO `master_products` VALUES ('50', '8', 'CRUZE', 'MTB', 'SILVER-BLUE', '24\"', '1');
INSERT INTO `master_products` VALUES ('51', '8', 'EXTRUSION', 'MTB', 'BLUE', '24\"', '1');
INSERT INTO `master_products` VALUES ('52', '8', 'EXTRUSION', 'MTB', 'HOT RED', '24\"', '1');
INSERT INTO `master_products` VALUES ('53', '8', 'ELITE', 'MTB', 'HOT RED', '24\"', '1');
INSERT INTO `master_products` VALUES ('54', '8', 'ELITE', 'MTB', 'SILVER-BLUE', '24\"', '1');
INSERT INTO `master_products` VALUES ('55', '8', 'CHARLIE', 'LADY', 'PURPLE', '26\"', '1');
INSERT INTO `master_products` VALUES ('56', '8', 'CHARM', 'LADY', 'BURGUNDY', '26\"', '1');
INSERT INTO `master_products` VALUES ('57', '8', 'LUST', 'LADY', 'S.BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('58', '8', 'BUTTERFLY', 'LADY', 'BABIE PINK', '24\"', '1');
INSERT INTO `master_products` VALUES ('59', '8', 'BUTTERFLY', 'LADY', 'PINK', '26\"', '1');
INSERT INTO `master_products` VALUES ('60', '8', 'BEETLE', 'LADY', 'SKY BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('61', '8', 'BEETLE', 'LADY', 'SKY BLUE', '24\"', '1');
INSERT INTO `master_products` VALUES ('62', '8', 'JAX', 'KID', 'BLUE', '20\"', '1');
INSERT INTO `master_products` VALUES ('63', '8', 'SKID', 'KID', 'RED', '20\"', '1');
INSERT INTO `master_products` VALUES ('64', '8', 'STARLEY', 'KID', 'PINK', '20\"', '1');
INSERT INTO `master_products` VALUES ('65', '8', 'JALPARI', 'KID', 'S.BLUE', '20\"', '1');
INSERT INTO `master_products` VALUES ('66', '15', 'BOW-TIE', 'KID', 'MULTI', '12\"', '1');
INSERT INTO `master_products` VALUES ('67', '15', 'BOW-TIE', 'KID', 'MULTI', '14\"', '1');
INSERT INTO `master_products` VALUES ('68', '15', 'BOW-TIE', 'KID', 'MULTI', '16\"', '1');
INSERT INTO `master_products` VALUES ('69', '15', 'CUB', 'KID', 'MULTI', '12\"', '1');
INSERT INTO `master_products` VALUES ('70', '15', 'PC', 'KID', 'MULTI', '12\"', '1');
INSERT INTO `master_products` VALUES ('71', '15', 'PC', 'KID', 'MULTI', '16\"', '1');
INSERT INTO `master_products` VALUES ('72', '15', 'RAPID', 'KID', 'MULTI', '14\"', '1');
INSERT INTO `master_products` VALUES ('73', '15', 'CROWN', 'KID', 'MULTI', '14\"', '1');
INSERT INTO `master_products` VALUES ('74', '15', 'CROWN', 'KID', 'MULTI', '16\"', '1');
INSERT INTO `master_products` VALUES ('75', '15', 'CROWN', 'KID', 'MULTI', '20\"', '1');
INSERT INTO `master_products` VALUES ('76', '15', 'HAPPY', 'KID', 'MULTI', '14\"', '1');
INSERT INTO `master_products` VALUES ('77', '15', 'HAPPY', 'KID', 'MULTI', '16\"', '1');
INSERT INTO `master_products` VALUES ('78', '15', 'PACE', 'KID', 'MULTI', '16\"', '1');
INSERT INTO `master_products` VALUES ('79', '15', 'FORCE 10', 'KID', 'MULTI', '20\"', '1');
INSERT INTO `master_products` VALUES ('80', '15', 'CX', 'KID', 'MULTI', '20\"', '1');
INSERT INTO `master_products` VALUES ('81', '9', 'ATOM ZX', 'MTB', 'RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('82', '9', 'RODEO A 100 VX (M.SPEED)', 'MTB', 'WHITE', '26\"', '1');
INSERT INTO `master_products` VALUES ('83', '9', 'ATOM ZX 18 SPEED (M.S.)', 'MTB', 'RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('84', '9', 'ATOM ZX 6 SPEED (M.S.)', 'MTB', 'RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('85', '9', 'DYNAMITE ZX ', 'MTB', 'RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('86', '9', 'SPARTA ZX ', 'MTB', 'BLACK-GREEN', '26\"', '1');
INSERT INTO `master_products` VALUES ('87', '9', 'SPARTA ZX ', 'MTB ', 'BLACK-GREEN', '24\"', '1');
INSERT INTO `master_products` VALUES ('88', '9', 'DYNAMITE ZX ', 'MTB', 'BLACK', '24\"', '1');
INSERT INTO `master_products` VALUES ('89', '9', 'CYBOT', 'KID', 'GREEN-BLACK', '20\"', '1');
INSERT INTO `master_products` VALUES ('90', '9', 'ROCKY ZX', 'MTB', 'RED', '24\"', '1');
INSERT INTO `master_products` VALUES ('91', '9', 'KNIGHT HUNTER', 'MTB', 'BLACK', '26\"', '1');
INSERT INTO `master_products` VALUES ('92', '9', 'ROCKY ', 'MTB', 'BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('93', '9', 'ROCKY ', 'MTB', 'BLACK', '24\"', '1');
INSERT INTO `master_products` VALUES ('94', '9', 'RODEO WAYFINDER (M.S.)', 'MTB', 'BLACK-GREEN', '26\"', '1');
INSERT INTO `master_products` VALUES ('95', '9', 'RODEO GEOLANDER (M.S./F.D.)', 'MTB', 'WHITE', '26\"', '1');
INSERT INTO `master_products` VALUES ('96', '9', 'RODEO GEOLANDER (M.S./F.D.)', 'MTB', 'WHITE', '24\"', '1');
INSERT INTO `master_products` VALUES ('97', '9', 'RODEO NFS PRO (M.S. / F.D.)', 'MTB', 'RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('98', '9', 'TOONZ', 'KID', 'RED', '20\"', '1');
INSERT INTO `master_products` VALUES ('99', '9', 'TOONZ', 'KID', 'PINK-BLUE', '20\"', '1');
INSERT INTO `master_products` VALUES ('100', '17', 'ANTOP / ADDER (F.D.)', 'MTB', 'SILVER', '26\"', '1');
INSERT INTO `master_products` VALUES ('101', '9', 'RODEO TURNER VX (M.S.)', 'MTB', 'ORRANGE', '26\"', '1');
INSERT INTO `master_products` VALUES ('102', '9', 'MACH CITY I BIKE', 'MTB', 'RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('103', '9', 'MACH CITY', 'HYBRID', 'GREEN', '700 C', '1');
INSERT INTO `master_products` VALUES ('104', '18', 'CRUISER IBC (F.D.)', 'MTB', 'RB', '26\"', '1');
INSERT INTO `master_products` VALUES ('105', '11', 'SOCCER (S.S. / F.D.)', 'MTB', 'YELLOW-RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('106', '11', 'SOCCER (S.S.)', 'MTB', 'GREEN-YELLOW', '26\"', '1');
INSERT INTO `master_products` VALUES ('107', '11', 'RS 26 (S.S. / F.D.)', 'MTB', 'WHITE', '26\"', '1');
INSERT INTO `master_products` VALUES ('108', '11', 'X TRACK (S.S. / F.D.)', 'MTB', 'YELLOW', '26\"', '1');
INSERT INTO `master_products` VALUES ('109', '11', 'TEENZ', 'KID', 'GREEN', '20\"', '1');
INSERT INTO `master_products` VALUES ('110', '11', 'U TECH (S.S )', 'MTB', 'WHITE-BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('111', '11', 'STRATUS (S.S.)', 'MTB', 'WHITE', '26\"', '1');
INSERT INTO `master_products` VALUES ('112', '11', 'SX 006', 'KID', 'RED', '16\"', '1');
INSERT INTO `master_products` VALUES ('113', '12', 'CLUBMAN', 'ROAD BIKE', 'S.BLUE', 'LARGE', '1');
INSERT INTO `master_products` VALUES ('114', '12', 'MONSTER X (S.S.)', 'MTB', 'WHITE-RED', '24\"', '1');
INSERT INTO `master_products` VALUES ('115', '11', 'CALDRON - EF (M.S.)', 'MTB', 'WHITE', '24\"', '1');
INSERT INTO `master_products` VALUES ('116', '11', 'SOCCER (M.S. / D.D.)', 'MTB', 'WHITE-BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('117', '11', 'HAZARD-EF (M.S.)', 'MTB', 'GREEN', '26\"', '1');
INSERT INTO `master_products` VALUES ('118', '11', 'CALDRON - EF (M.S.)', 'MTB', 'BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('119', '11', 'CALDRON (M.S. / D.D.)', 'MTB', 'BLACK (M.FINISH)', '26\"', '1');
INSERT INTO `master_products` VALUES ('120', '11', 'LOADED (M.S. / D.D.)', 'MTB', 'WHITE', '26\"', '1');
INSERT INTO `master_products` VALUES ('121', '11', 'EQUINOX (M.S.)', 'HYBRID', 'RED', '700 C', '1');
INSERT INTO `master_products` VALUES ('122', '11', 'INNOVATE (M.S.)', 'HYBRID', 'WHITE', '700 C', '1');
INSERT INTO `master_products` VALUES ('123', '11', 'DIRT MAX (M.S. / D.D.)', 'MTB', 'BLACK (M.FINISH)', '26\"', '1');
INSERT INTO `master_products` VALUES ('124', '12', 'TERRAIN 30 (M.S. / D.D.)', 'MTB', 'BLACK', '26\"', '1');
INSERT INTO `master_products` VALUES ('125', '12', 'SHOCKBLAZE (M.S. / F.D.)', 'MTB', 'BLACK (M.FINISH)', '26\"', '1');
INSERT INTO `master_products` VALUES ('126', '12', 'MONSTER X - EF (M.S. / F.D.)', 'MTB', 'WHITE-RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('127', '12', 'MISCEO (M.S.)', 'HYBRID', 'BLACK (M.FINISH)', '700 C', '1');
INSERT INTO `master_products` VALUES ('128', '13', 'LAND 8.10 (M.S. / D.D.)', 'HYBRID', 'MET GREY', '700 C', '1');
INSERT INTO `master_products` VALUES ('129', '11', 'SENSO', 'LADY', 'WHITE', '26\"', '1');
INSERT INTO `master_products` VALUES ('130', '12', 'MY RIDE (S.S.)', 'MTB', 'BLACK', '26\"', '1');
INSERT INTO `master_products` VALUES ('131', '12', 'MY RIDE (S.S.)', 'MTB', 'BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('132', '12', 'MY RIDE (M.S.)', 'MTB', 'WHITE', '26\"', '1');
INSERT INTO `master_products` VALUES ('133', '11', 'STYLOUS (S.S.)', 'MTB', 'BLUE (M.FINISH)', '26\"', '1');
INSERT INTO `master_products` VALUES ('134', '12', 'MISCEO 1.0 (S.S.)', 'MTB', 'BLACK (M.FINISH)', '27.5\"', '1');
INSERT INTO `master_products` VALUES ('135', '19', 'STAR', 'KID', 'MULTI', '16\"', '1');
INSERT INTO `master_products` VALUES ('136', '19', 'STAR ', 'KID', 'MULTI', '14\"', '1');
INSERT INTO `master_products` VALUES ('137', '19', 'BMX', 'KID', 'MULTI', '14\"', '1');
INSERT INTO `master_products` VALUES ('138', '15', 'JUST BIKE (S.S.)', 'MTB', 'WHITE', '26\"', '1');
INSERT INTO `master_products` VALUES ('139', '15', 'JUST BIKE (S.S.)', 'MTB', 'BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('140', '11', 'TRIGGER (S.S. / F.D.)', 'MTB', 'BLACK (M.FINISH)', '24\"', '1');
INSERT INTO `master_products` VALUES ('141', '11', 'DIRT MAX (S.S.)', 'MTB', 'GREEN', '24\"', '1');
INSERT INTO `master_products` VALUES ('142', '11', 'TRIGGER (M.S. / F.D.)', 'MTB', 'BLACK (M.FINISH)', '24\"', '1');
INSERT INTO `master_products` VALUES ('143', '10', 'ROCK 1.0 ', 'MTB', 'BLUE', 'MEDIUM', '1');
INSERT INTO `master_products` VALUES ('144', '20', 'SUPER SPORTS WOMAN', 'HYBRID', 'BLUE', 'MEDIUM', '1');
INSERT INTO `master_products` VALUES ('145', '16', 'DUAL', 'MTB', 'BLACK', 'LARGE', '1');
INSERT INTO `master_products` VALUES ('146', '16', 'DUAL', 'MTB', 'RED', 'SMALL', '1');
INSERT INTO `master_products` VALUES ('147', '10', 'UNPLUGGED', 'ROAD BIKE', 'RED', 'LARGE', '1');
INSERT INTO `master_products` VALUES ('148', '10', 'UNPLUGGED', 'ROAD BIKE', 'RED', 'SMALL', '1');
INSERT INTO `master_products` VALUES ('149', '10', 'CELTIC 2.1', 'ROAD BIKE', 'RED', 'MEDIUM', '1');
INSERT INTO `master_products` VALUES ('150', '10', 'CELTIC 2.2', 'ROAD BIKE', 'YELLOW-BLACK', 'MEDIUM', '1');
INSERT INTO `master_products` VALUES ('151', '10', 'TRANCE PRO ', 'HYBRID', 'BLACK', 'SMALL', '1');
INSERT INTO `master_products` VALUES ('152', '10', 'TRANCE PRO ', 'HYBRID', 'BLACK', 'LARGE', '1');
INSERT INTO `master_products` VALUES ('153', '10', 'BLUES 1.1', 'HYBRID', 'SILVER', 'MEDIUM', '1');
INSERT INTO `master_products` VALUES ('154', '10', 'TRANCE', 'HYBRID', 'BLUE', 'MEDIUM', '1');
INSERT INTO `master_products` VALUES ('155', '10', 'DTR 20', 'KID', 'YELLOW', '20\"', '1');
INSERT INTO `master_products` VALUES ('156', '10', 'BLUES 1.1', 'HYBRID', 'SILVER', 'SMALL', '1');
INSERT INTO `master_products` VALUES ('157', '10', 'DTR 24', 'MTB', 'BLACK', 'MEDIUM', '1');
INSERT INTO `master_products` VALUES ('158', '14', 'MONTANA SPORTS', 'MTB', 'ORRANGE', 'MEDIUM', '1');
INSERT INTO `master_products` VALUES ('159', '14', 'MONTANA SPORTS', 'MTB', 'BLUE', 'MEDIUM', '1');
INSERT INTO `master_products` VALUES ('160', '9', 'DYNOX', 'KID', 'BLUE', '20\"', '1');
INSERT INTO `master_products` VALUES ('161', '10', 'ROCK 1.1', 'MTB', 'GREY', 'MEDIUM', '1');
INSERT INTO `master_products` VALUES ('163', '9', 'MONTRA 14 - BLUE SPEED', 'MOUNTAIN', 'BLUE', '14\"', '1');
INSERT INTO `master_products` VALUES ('164', '9', 'MONTRA - 2015 TRANCE SPEED', 'MOUNTAIN', 'BLUE', '14\"', '1');
INSERT INTO `master_products` VALUES ('165', '9', 'BIANCHI DUEL', 'MTB', 'BLACK', '26\"', '1');
INSERT INTO `master_products` VALUES ('166', '9', 'GRN DTR', 'KIDS', 'MULTI', '20\"', '1');
INSERT INTO `master_products` VALUES ('167', '9', 'TRANS PRO', 'KIDS', 'BLACK', 'M', '1');
INSERT INTO `master_products` VALUES ('168', '9', 'UNPLUGGED', 'ROAD BIKE', 'BLACK', '700*28', '1');
INSERT INTO `master_products` VALUES ('169', '9', 'DYNAMITE ZX', 'MTB', 'RED', '24\"', '1');
INSERT INTO `master_products` VALUES ('170', '15', 'PACE', 'KID', 'MULTI', '16\"', '1');
INSERT INTO `master_products` VALUES ('171', '24', 'ISRON', 'SOFTECH', 'NAVY BLUE', 'LARGEST', '1');
INSERT INTO `master_products` VALUES ('172', '8', 'INFERNO', 'MTB', 'BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('173', '8', 'INFERNO', 'MTB', 'SILVER BLACK', '26\"', '1');
INSERT INTO `master_products` VALUES ('174', '22', 'PANAMAO X2', 'HYBRID', 'MET GREY', '700 C', '1');
INSERT INTO `master_products` VALUES ('175', '12', 'TALUS 1.5', 'MTB', 'MET GREY', '27.5\"', '1');
INSERT INTO `master_products` VALUES ('176', '15', 'JUS BIKE M.SPEED ', 'MTB', 'WHITE', '26\"', '1');
INSERT INTO `master_products` VALUES ('177', '9', 'RODEO HARDLINER M.SPEED', 'MTB', 'MET GREY', '26\"', '1');
INSERT INTO `master_products` VALUES ('178', '9', 'RODEO ZXR M.SPEED', 'KIDS', 'MULTI', '20\"', '1');
INSERT INTO `master_products` VALUES ('179', '25', 'AGGRESSOR SPORT ', 'MTB', 'MET GREY', '27.5\"', '1');
INSERT INTO `master_products` VALUES ('180', '11', 'TRIGGER (M.S. / F.D.)', 'KIDS', 'MULTI', '20\"', '1');
INSERT INTO `master_products` VALUES ('182', '12', 'ROXIO 1.0', 'MTB', 'BLACK (M.FINISH)', '26\"', '1');
INSERT INTO `master_products` VALUES ('183', '12', 'FREELIFE ', 'KIDS', 'MULTI', '20\"', '1');
INSERT INTO `master_products` VALUES ('184', '11', 'DIRT JUMPER D.D.', 'MTB', 'BLACK', '26\"', '1');
INSERT INTO `master_products` VALUES ('185', '12', 'TERRAIN 30 (M.S. / D.D.)', 'MTB', 'BLACK', '27.5\"', '1');
INSERT INTO `master_products` VALUES ('189', '23', 'K1 S.S.', 'KIDS', 'red', '20\"', '1');
INSERT INTO `master_products` VALUES ('190', '23', 'K1 S.S.', 'KIDS', 'YELLOW', '20\"', '1');
INSERT INTO `master_products` VALUES ('191', '23', 'K3 S.S.', 'KIDS', 'PINK', '20\"', '1');
INSERT INTO `master_products` VALUES ('192', '23', 'K3 S.S.', 'KIDS', 'BLUE', '20\"', '1');
INSERT INTO `master_products` VALUES ('193', '23', 'K6 S.S.', 'KIDS', 'WHITE-RED', '20\"', '1');
INSERT INTO `master_products` VALUES ('194', '23', 'K6 S.S.', 'KIDS', 'red', '20\"', '1');
INSERT INTO `master_products` VALUES ('195', '23', 'HT J1 ', 'MTB', 'WHITE', '24\"', '1');
INSERT INTO `master_products` VALUES ('196', '23', 'HT J1 ', 'MTB', 'BLACK-GREEN', '24\"', '1');
INSERT INTO `master_products` VALUES ('197', '23', 'HT1 SWIFT', 'MTB', 'BLACK', '26\"', '1');
INSERT INTO `master_products` VALUES ('198', '23', 'HT 1 ', 'MTB', 'BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('199', '23', 'HT 1 ', 'MTB', 'red', '26\"', '1');
INSERT INTO `master_products` VALUES ('200', '23', 'HT 1 ', 'MTB', 'WHITE', '26\"', '1');
INSERT INTO `master_products` VALUES ('201', '23', 'HT 2 HARD TAIL', 'MTB', 'BLACK-GREEN', '26\"', '1');
INSERT INTO `master_products` VALUES ('202', '23', 'HT 3 HARD TRAIL', 'MTB', 'WHITE-RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('203', '23', 'HT 3 HARD TRAIL', 'MTB', 'WHITE', '26\"', '1');
INSERT INTO `master_products` VALUES ('204', '23', 'HT 4 ', 'MTB', 'PURPLE', '26\"', '1');
INSERT INTO `master_products` VALUES ('205', '23', 'DS 1', 'MTB', 'WHITE-GREEN', '26\"', '1');
INSERT INTO `master_products` VALUES ('206', '23', 'DS 1', 'MTB', 'ORRANGE', '26\"', '1');
INSERT INTO `master_products` VALUES ('207', '23', 'H1 LITE', 'HYBRID', 'BLACK (M.FINISH)', 'MEDIUM', '1');
INSERT INTO `master_products` VALUES ('208', '23', 'H1 LITE', 'HYBRID', 'BLACK (M.FINISH)', 'LARGE', '1');
INSERT INTO `master_products` VALUES ('209', '23', 'H2 CROSS', 'HYBRID', 'BLACK', 'LARGE', '1');
INSERT INTO `master_products` VALUES ('210', '23', 'H2D', 'HYBRID', 'BLUE (M.FINISH)', 'MEDIUM', '1');
INSERT INTO `master_products` VALUES ('211', '23', 'Q1', 'LADY', 'WHITE-BLUE', '26\"', '1');
INSERT INTO `master_products` VALUES ('212', '23', 'Q1', 'LADY', 'PINK', '26\"', '1');
INSERT INTO `master_products` VALUES ('213', '10', 'ROCK 1.1 D', 'MTB', 'GREEN', 'SMALL', '1');
INSERT INTO `master_products` VALUES ('214', '10', 'ROCK 1.1 D', 'MTB', 'GREEN', 'SMALL', '1');
INSERT INTO `master_products` VALUES ('215', '10', 'TRANCE', 'HYBRID', 'BLUE', 'SMALL', '1');
INSERT INTO `master_products` VALUES ('216', '10', 'TRANCE PRO ', 'HYBRID', 'BLUE', 'MEDIUM', '1');
INSERT INTO `master_products` VALUES ('217', '10', 'TRANCE PRO ', 'HYBRID', 'BLACK', 'MEDIUM', '1');
INSERT INTO `master_products` VALUES ('218', '15', 'TRC HLX', 'TRICYCLE', 'MULTI', 'TOY', '1');
INSERT INTO `master_products` VALUES ('219', '15', 'TRC DUCK', 'TRICYCLE', 'MULTI', 'TOY', '1');
INSERT INTO `master_products` VALUES ('220', '15', 'TRC MAGIC CAR HLX 3355', 'MAGIC CAR', 'MULTI', 'TOY', '1');
INSERT INTO `master_products` VALUES ('221', '15', 'TRC MAGIC CAR HLX 9010', 'MAGIC CAR', 'MULTI', 'TOY', '1');
INSERT INTO `master_products` VALUES ('222', '15', 'TRC MAGIC CAR HLX 1568', 'MAGIC CAR', 'MULTI', 'TOY', '1');
INSERT INTO `master_products` VALUES ('223', '12', 'MONSTER X MS SPEED EF D.D.', 'MTB', 'WHITE', '24\"', '1');
INSERT INTO `master_products` VALUES ('225', '11', 'HAZARD-EF (M.S.)', 'MTB', 'BLACK', '24\"', '1');
INSERT INTO `master_products` VALUES ('226', '11', 'XC 101 D/ DISK', 'MTB', 'BLACK', '26\"', '1');
INSERT INTO `master_products` VALUES ('227', '11', 'EXPLORE  M SPEED   F/ DISK', 'MTB', 'HOT RED', '26\"', '1');
INSERT INTO `master_products` VALUES ('228', '11', 'HURRICANE  D/DISK', 'MTB', 'HOT RED', '24\"', '1');
INSERT INTO `master_products` VALUES ('229', '8', 'CUBA IBC', 'MTB', 'S.BLUE-SILVER', '24\"', '1');
INSERT INTO `master_products` VALUES ('230', '12', 'BIG SAM', 'MTB', 'BLACK (M.FINISH)', '26\"', '1');
INSERT INTO `master_products` VALUES ('231', '11', 'RACERSTAR M/S', 'ROAD BIKE', 'BLACK (M.FINISH)', 'LARGE', '1');
INSERT INTO `master_products` VALUES ('232', '10', 'MONTRA BLUES 1.2', 'HYBRID', 'BLACK (M.FINISH)', '700 C', '1');
INSERT INTO `master_products` VALUES ('233', '10', 'MONTRA BLUES 1.2', 'HYBRID', 'BLACK (M.FINISH)', 'SMALL', '1');
INSERT INTO `master_products` VALUES ('234', '10', 'MONTRA ROCK 1.0 V2 18 SPEED', 'MTB', 'ORRANGE', 'LARGE', '1');
INSERT INTO `master_products` VALUES ('235', '8', 'REDOX', 'MTB', 'WHITE', '24\"', '1');
INSERT INTO `master_products` VALUES ('237', '8', 'BOUNTY (IBC)', 'MTB', 'HOT RED', '24\"', '1');
INSERT INTO `master_products` VALUES ('238', '26', 'ACE-FX  16', 'MAGIC CAR', 'PINK', '16\"', '1');
INSERT INTO `master_products` VALUES ('239', '26', 'ACE-ZX 20', 'KIDS', 'red', '20\"', '1');
INSERT INTO `master_products` VALUES ('240', '26', 'ACE- SX 14', 'KIDS', 'BLACK (M.FINISH)', '14\"', '1');
INSERT INTO `master_products` VALUES ('241', '26', 'NEO-24*15 WHITE', 'MTB', 'WHITE', '24\"', '1');
INSERT INTO `master_products` VALUES ('242', '26', 'NEO-24*15 RED', 'MTB', 'red', '24\"', '1');
INSERT INTO `master_products` VALUES ('243', '26', 'NEO-26*20 RED', 'MTB', 'red', '26\"', '1');
INSERT INTO `master_products` VALUES ('244', '26', 'NEO-26*18 WHITE', 'MTB', 'WHITE', '26\"', '1');
INSERT INTO `master_products` VALUES ('245', '15', 'ELDORADO ', 'MTB', 'BLACK', '24\"', '1');
INSERT INTO `master_products` VALUES ('246', '15', 'TRIUM', 'MTB', 'BLACK', '26\"', '1');
INSERT INTO `master_products` VALUES ('247', '15', 'SENORITA', 'LADY', 'PINK', '24\"', '1');
INSERT INTO `master_products` VALUES ('248', '23', 'DS J1 ', 'MTB', 'BLUE', '24\"', '1');
INSERT INTO `master_products` VALUES ('249', '23', 'DS J1 ', 'MTB', 'ORRANGE', '24\"', '1');
INSERT INTO `master_products` VALUES ('250', '26', 'ROAM 2D', 'HYBRID', 'GREY', 'LARGE', '1');
INSERT INTO `master_products` VALUES ('252', '10', 'MONTRA BLUES 1.2', 'HYBRID', 'BLACK (M.FINISH)', 'MEDIUM', '1');
INSERT INTO `master_products` VALUES ('253', '23', 'H2D', 'HYBRID', 'BLACK (M.FINISH)', '700 C', '1');

-- ----------------------------
-- Table structure for master_purchase_order
-- ----------------------------
DROP TABLE IF EXISTS `master_purchase_order`;
CREATE TABLE `master_purchase_order` (
  `PurchaseOrderID` int(11) NOT NULL AUTO_INCREMENT,
  `PurchaseOrderNo` varchar(100) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `SupplierID` int(11) DEFAULT NULL,
  `PaymentMethod` varchar(100) DEFAULT NULL,
  `Note` text,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`PurchaseOrderID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_purchase_order
-- ----------------------------
INSERT INTO `master_purchase_order` VALUES ('1', '1', '2015-12-02', '1', 'Cash', 'ffg dgdfgd', '1');
INSERT INTO `master_purchase_order` VALUES ('3', '2', '2015-12-07', '2', 'Cheque', 'c fgdfgdf g', '1');
INSERT INTO `master_purchase_order` VALUES ('4', '3', '2015-12-09', '1', 'Cash', 'hf gfghfgh', '1');
INSERT INTO `master_purchase_order` VALUES ('5', '4', '2015-12-16', '10', 'Cheque', 'gfh ddg dfg', '1');
INSERT INTO `master_purchase_order` VALUES ('6', '5', '2015-12-09', '6', 'Net Banking', 'dsf sdf sdfs', '1');

-- ----------------------------
-- Table structure for master_purchase_order_child
-- ----------------------------
DROP TABLE IF EXISTS `master_purchase_order_child`;
CREATE TABLE `master_purchase_order_child` (
  `PurchaseOrderChildID` int(11) NOT NULL AUTO_INCREMENT,
  `PurchaseOrderID` int(11) DEFAULT NULL,
  `Type` varchar(100) DEFAULT NULL,
  `CompanyName` varchar(100) DEFAULT NULL,
  `ModelNumber` varchar(100) DEFAULT NULL,
  `ItemName` varchar(100) DEFAULT NULL,
  `Color` varchar(100) DEFAULT NULL,
  `Size` varchar(100) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`PurchaseOrderChildID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_purchase_order_child
-- ----------------------------
INSERT INTO `master_purchase_order_child` VALUES ('1', '1', null, '', '', null, 'PINK', '16\"', '56', '1');
INSERT INTO `master_purchase_order_child` VALUES ('2', '1', null, '11', null, 'BICYCLE STAND REPAIR', null, null, '21', '1');
INSERT INTO `master_purchase_order_child` VALUES ('5', '3', null, '12', 'ROXIO 1.0', null, 'BLACK (M.FINISH)', '26\"', '24', '1');
INSERT INTO `master_purchase_order_child` VALUES ('6', '3', null, '11', null, 'CHAIN WHEEL 44 T DOUBLE GUARD 1/8', null, null, '12', '1');
INSERT INTO `master_purchase_order_child` VALUES ('7', '4', 'cycle', '12', 'MY RIDE (S.S.)', null, 'BLACK', '26\"', '20', '1');
INSERT INTO `master_purchase_order_child` VALUES ('8', '4', 'spare', '11', null, 'CHAIN WHEEL SET TCWC 28/38/48 T', null, null, '48', '1');
INSERT INTO `master_purchase_order_child` VALUES ('9', '5', 'cycle', '20', 'SUPER SPORTS WOMAN', null, 'BLUE', 'MEDIUM', '23', '1');
INSERT INTO `master_purchase_order_child` VALUES ('10', '5', 'spare', '11', null, 'CHAIN WHEEL SET TCWC 28/38/48 T', null, null, '15', '1');
INSERT INTO `master_purchase_order_child` VALUES ('11', '6', 'cycle', '8', 'EXTRUSION', null, 'BLUE', '24\"', '20', '1');
INSERT INTO `master_purchase_order_child` VALUES ('13', '6', 'cycle', '26', 'ACE-FX  16', null, 'PINK', '16\"', '56', '1');

-- ----------------------------
-- Table structure for master_segment
-- ----------------------------
DROP TABLE IF EXISTS `master_segment`;
CREATE TABLE `master_segment` (
  `SegmentID` int(11) NOT NULL AUTO_INCREMENT,
  `SegmentName` varchar(100) DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`SegmentID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_segment
-- ----------------------------
INSERT INTO `master_segment` VALUES ('1', 'MTB', '1');
INSERT INTO `master_segment` VALUES ('2', 'LADY', '1');
INSERT INTO `master_segment` VALUES ('11', 'TRICYCLE', '1');
INSERT INTO `master_segment` VALUES ('4', 'HYBRID', '1');
INSERT INTO `master_segment` VALUES ('5', 'ROAD BIKE', '1');
INSERT INTO `master_segment` VALUES ('12', 'MAGIC CAR', '1');
INSERT INTO `master_segment` VALUES ('8', 'KIDS', '1');

-- ----------------------------
-- Table structure for master_size
-- ----------------------------
DROP TABLE IF EXISTS `master_size`;
CREATE TABLE `master_size` (
  `SizeID` int(11) NOT NULL AUTO_INCREMENT,
  `SizeName` varchar(100) DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`SizeID`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_size
-- ----------------------------
INSERT INTO `master_size` VALUES ('2', '12\"', '1');
INSERT INTO `master_size` VALUES ('4', '14\"', '1');
INSERT INTO `master_size` VALUES ('5', '16\"', '1');
INSERT INTO `master_size` VALUES ('7', '20\"', '1');
INSERT INTO `master_size` VALUES ('10', '24\"', '1');
INSERT INTO `master_size` VALUES ('22', 'TOY', '1');
INSERT INTO `master_size` VALUES ('14', '26\"', '1');
INSERT INTO `master_size` VALUES ('15', '27.5\"', '1');
INSERT INTO `master_size` VALUES ('16', '700 C', '1');
INSERT INTO `master_size` VALUES ('18', 'LARGE', '1');
INSERT INTO `master_size` VALUES ('19', 'MEDIUM', '1');
INSERT INTO `master_size` VALUES ('20', 'SMALL', '1');

-- ----------------------------
-- Table structure for master_spare_products
-- ----------------------------
DROP TABLE IF EXISTS `master_spare_products`;
CREATE TABLE `master_spare_products` (
  `SpareProductID` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyID` int(11) DEFAULT NULL,
  `SpareItemName` varchar(100) DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`SpareProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_spare_products
-- ----------------------------
INSERT INTO `master_spare_products` VALUES ('1', '0', '', '1');
INSERT INTO `master_spare_products` VALUES ('2', '11', 'HELEMT G 20', '1');
INSERT INTO `master_spare_products` VALUES ('3', '11', 'TYRE 700 * 32C (MAXXIS) ', '1');
INSERT INTO `master_spare_products` VALUES ('4', '11', 'TUBE 700 * 35-45 C (MAXXIS)', '1');
INSERT INTO `master_spare_products` VALUES ('5', '11', 'BICYCLE STAND REPAIR', '1');
INSERT INTO `master_spare_products` VALUES ('6', '11', 'BICYCLE ACCESSORY GLOVES TOTEM', '1');
INSERT INTO `master_spare_products` VALUES ('8', '11', 'KNEE GUARD', '1');
INSERT INTO `master_spare_products` VALUES ('9', '11', 'BICYCLE LOCK', '1');
INSERT INTO `master_spare_products` VALUES ('10', '0', 'BICYCLE CAR RACK', '1');
INSERT INTO `master_spare_products` VALUES ('11', '11', 'BICYCLE LIGHT', '1');
INSERT INTO `master_spare_products` VALUES ('12', '11', 'BICYCLE STAND WALL HANGING SINGLE', '1');
INSERT INTO `master_spare_products` VALUES ('13', '11', 'BICYCLE STAND WALL HANGING DOUBLE - 02', '1');
INSERT INTO `master_spare_products` VALUES ('14', '11', 'CHAIN WHEEL SET TCWC 28/38/48 T', '1');
INSERT INTO `master_spare_products` VALUES ('15', '11', 'TYRE 700 *23 C MAXXIS FOLDABLE', '1');
INSERT INTO `master_spare_products` VALUES ('16', '11', 'TUBE 700 * 18-25 C MAXXIS', '1');
INSERT INTO `master_spare_products` VALUES ('17', '11', 'TYRE 700 * 35 C KENDA', '1');
INSERT INTO `master_spare_products` VALUES ('18', '11', 'TYRE 700 * 32C (KENDA)', '1');
INSERT INTO `master_spare_products` VALUES ('19', '11', 'KNEE GUARD PVC ADULT (POLLISPORT)', '1');
INSERT INTO `master_spare_products` VALUES ('20', '11', 'LOCK LC 005 ', '1');
INSERT INTO `master_spare_products` VALUES ('22', '11', 'KNEE GUARD PVC JUNIOR  (POLLISPORT)', '1');
INSERT INTO `master_spare_products` VALUES ('23', '11', 'CAR RACK STEEL', '1');
INSERT INTO `master_spare_products` VALUES ('24', '11', 'LIGHT XC 606 T', '1');
INSERT INTO `master_spare_products` VALUES ('25', '11', 'LIGHT XC 735 A', '1');
INSERT INTO `master_spare_products` VALUES ('26', '11', 'LIGHT XC 767 F', '1');
INSERT INTO `master_spare_products` VALUES ('27', '11', 'LIGHT XC 998 W', '1');
INSERT INTO `master_spare_products` VALUES ('28', '11', 'LIGHT HL 112 W', '1');
INSERT INTO `master_spare_products` VALUES ('29', '11', 'LIGHT HL 105 W', '1');
INSERT INTO `master_spare_products` VALUES ('30', '11', 'TOP TUBE BAG TOTEM', '1');
INSERT INTO `master_spare_products` VALUES ('31', '11', 'MOBILE HOLDER I PHONE 5 ', '1');
INSERT INTO `master_spare_products` VALUES ('32', '11', 'MOBILE HOLDER I PHONE 6', '1');
INSERT INTO `master_spare_products` VALUES ('33', '11', 'CHAIN GUARD 4/5 HOLE ', '1');
INSERT INTO `master_spare_products` VALUES ('34', '11', 'FREE WHEEL GUARD PVC ', '1');
INSERT INTO `master_spare_products` VALUES ('35', '11', 'KICK STAND 24-28\" (616-11)', '1');
INSERT INTO `master_spare_products` VALUES ('36', '11', 'SIDE STAND 24 - 29 ALLOY BLACK SILVER', '1');
INSERT INTO `master_spare_products` VALUES ('37', '11', 'SIDE STAND 24 - 29 ALLOY BLACK ', '1');
INSERT INTO `master_spare_products` VALUES ('38', '11', 'SIDE STAND 20\" MTB BLACK', '1');
INSERT INTO `master_spare_products` VALUES ('39', '11', 'LIGHT XC-106 R', '1');
INSERT INTO `master_spare_products` VALUES ('40', '11', 'LIGHT XC 700 A', '1');
INSERT INTO `master_spare_products` VALUES ('41', '11', 'CARRIER SILVER ALLOY', '1');
INSERT INTO `master_spare_products` VALUES ('42', '11', 'BICYCLE PARKING STAND FRONT ', '1');
INSERT INTO `master_spare_products` VALUES ('43', '11', 'SIDE KICK STAND  ADJUSTABLE  (616-10)', '1');
INSERT INTO `master_spare_products` VALUES ('44', '11', 'CHAIN 1/2*3/32*116 LINKS', '1');
INSERT INTO `master_spare_products` VALUES ('45', '11', 'CHAIN 1/2 * 3/32 * 116 LINKS (P-7002)', '1');
INSERT INTO `master_spare_products` VALUES ('46', '11', 'CHAIN 1/2 * 3/32 * 116 LINKS (P-8002)', '1');
INSERT INTO `master_spare_products` VALUES ('47', '11', 'DERAILER REAR 7 SPEED SC INDEX', '1');
INSERT INTO `master_spare_products` VALUES ('48', '11', 'V BRAKES FITTING SET', '1');
INSERT INTO `master_spare_products` VALUES ('49', '11', 'V BRAKE BAND PIPE ONLY', '1');
INSERT INTO `master_spare_products` VALUES ('51', '11', 'FORK FITTING R TYPE SET OF 8', '1');
INSERT INTO `master_spare_products` VALUES ('52', '11', 'FORK FITTING (THREAD LESS FORK)', '1');
INSERT INTO `master_spare_products` VALUES ('53', '11', 'SHOCK ALLOY 165 MM ', '1');
INSERT INTO `master_spare_products` VALUES ('54', '11', 'FRAME BUSH SET COMPLETE SHOCKER', '1');
INSERT INTO `master_spare_products` VALUES ('55', '11', 'SEAT QUICK RELEASE CLAMP 31.8 MM', '1');
INSERT INTO `master_spare_products` VALUES ('56', '11', 'HELEMT G 30', '1');
INSERT INTO `master_spare_products` VALUES ('57', '11', 'BOTTLE CAGE SILVER FINISH', '1');
INSERT INTO `master_spare_products` VALUES ('58', '11', 'BOTTLE CAGE PVC COLOURED', '1');
INSERT INTO `master_spare_products` VALUES ('59', '11', 'MUDUARD FITTING ONLY PVC', '1');
INSERT INTO `master_spare_products` VALUES ('60', '11', 'WATTER BOTTLE 500 ML PVC RALEIGH', '1');
INSERT INTO `master_spare_products` VALUES ('61', '11', 'WATER BOTTLE 700 ML POLISPORT', '1');
INSERT INTO `master_spare_products` VALUES ('62', '11', 'CHAIN WHEEL 44 T DOUBLE GUARD 1/8', '1');
INSERT INTO `master_spare_products` VALUES ('63', '11', 'FREE WHEEL FRICTION FREE 7 SPEED INDEX', '1');
INSERT INTO `master_spare_products` VALUES ('64', '11', 'V BRAKES SET ALLOY ', '1');
INSERT INTO `master_spare_products` VALUES ('65', '11', 'HANDLE STEEM ALLOY 31.8 MM', '1');
INSERT INTO `master_spare_products` VALUES ('66', '11', 'BRAKE SHOE ROAD BIKE', '1');
INSERT INTO `master_spare_products` VALUES ('67', '11', 'HANDLE GRIP BLACK G 327', '1');
INSERT INTO `master_spare_products` VALUES ('68', '11', 'HANDLE GRIP BLACK-N COLOURED', '1');
INSERT INTO `master_spare_products` VALUES ('69', '11', 'TUBE 27.5 * 190 / 2.125 KENDA', '1');
INSERT INTO `master_spare_products` VALUES ('70', '10', 'BAG HANDLE BAR MONTRA XMR - W', '1');
INSERT INTO `master_spare_products` VALUES ('71', '10', 'BAG HANDLE BAR MONTRA XMR - W', '1');
INSERT INTO `master_spare_products` VALUES ('72', '10', 'BAG SADDLE XMR SB 101 BLACK', '1');
INSERT INTO `master_spare_products` VALUES ('73', '10', 'BAG TOP TUBE MONTRA XMR TB 101', '1');
INSERT INTO `master_spare_products` VALUES ('74', '10', 'LIGHT FRONT XMR JY 246 - 3W STROBE 1.3', '1');
INSERT INTO `master_spare_products` VALUES ('75', '10', 'LIGHT REAR XMR JY 2LA STREAK 3.0', '1');
INSERT INTO `master_spare_products` VALUES ('76', '10', 'LIGHT REAR XMR JY 528 1 STREAK 2.0', '1');
INSERT INTO `master_spare_products` VALUES ('77', '10', 'LIGHT FRONT AND REAR XMR JY 3005 STARP', '1');
INSERT INTO `master_spare_products` VALUES ('78', '10', 'LIGHT REAR XMR JY 358 STREAK 5.0', '1');
INSERT INTO `master_spare_products` VALUES ('79', '10', 'LIGHT FRONT XMR JY 286 STROBE 5.0', '1');
INSERT INTO `master_spare_products` VALUES ('80', '10', 'LIGHT FRONT XMR JY 808 11 STRIKE 5.0', '1');
INSERT INTO `master_spare_products` VALUES ('81', '11', 'TYRE 700 * 32 C MAXXIS', '1');
INSERT INTO `master_spare_products` VALUES ('82', '11', 'TYRE 700 *35 C MAXXIS', '1');
INSERT INTO `master_spare_products` VALUES ('83', '11', 'TYRE 700 * 23 C KENDA', '1');
INSERT INTO `master_spare_products` VALUES ('84', '11', 'SIDE STAND 24\" MTB BLACK', '1');
INSERT INTO `master_spare_products` VALUES ('85', '11', 'V BRAKES SET STEEL', '1');
INSERT INTO `master_spare_products` VALUES ('86', '11', 'TYRE 700 * 38C KENDA', '1');
INSERT INTO `master_spare_products` VALUES ('87', '11', 'GRIP SHIFTER 7 SPEED (RIGHT YD-K36)', '1');

-- ----------------------------
-- Table structure for master_supplier
-- ----------------------------
DROP TABLE IF EXISTS `master_supplier`;
CREATE TABLE `master_supplier` (
  `SupplierID` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(100) DEFAULT NULL,
  `CompanyAddress` text,
  `CompanyCity` varchar(100) DEFAULT NULL,
  `CompanyState` varchar(100) DEFAULT NULL,
  `CompanyPinCode` varchar(100) DEFAULT NULL,
  `OfficeNumber` varchar(100) DEFAULT NULL,
  `MobileNumber` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Website` varchar(100) DEFAULT NULL,
  `ContactPerson1` varchar(100) DEFAULT NULL,
  `ContactPerson2` varchar(100) DEFAULT NULL,
  `ContactPerson3` varchar(100) DEFAULT NULL,
  `Contact1` varchar(100) DEFAULT NULL,
  `Contact2` varchar(100) DEFAULT NULL,
  `Contact3` varchar(100) DEFAULT NULL,
  `AccountNumber` text,
  `AccountName` varchar(100) DEFAULT NULL,
  `BankName` varchar(100) DEFAULT NULL,
  `BankBranch` varchar(100) DEFAULT NULL,
  `BankCity` varchar(100) DEFAULT NULL,
  `IFSCCode` varchar(100) DEFAULT NULL,
  `TaxDetail` text,
  `TINNumber` varchar(100) DEFAULT NULL,
  `CSTNumber` varchar(100) DEFAULT NULL,
  `PANNumber` varchar(100) DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`SupplierID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_supplier
-- ----------------------------
INSERT INTO `master_supplier` VALUES ('4', 'BPM CYCLE STORE', 'STATION ROAD', 'AMRELI', 'GUJARAT', '365601', '02792-222561', '94272 06272', 'bpmcycle@yahoo.co.in', '', 'BHIKHUBHAI', 'PRATIKBHAI', 'MANUBHAI', '94272 06272', '99041 45033', '98250 47051', '0595232000808', 'BPM CYCLE STORE', 'HDFC BANK', '', '', 'HDFC0000595', '', '24130100237', '24601000237', '', '1');
INSERT INTO `master_supplier` VALUES ('5', 'BPM CYCLE AGENCY', 'STATION ROAD', 'AMRELI', 'GUJARAT', '365601', '02792 22561', '9427206272', 'bpmcycle@yahoo.co.in', '', 'BHIKHUBHAI', 'PRATIKBHAI', 'MANUBHAI', '94272 06272', '99041 45033', '98250 47051', '0595232000790', 'BPM CYCLE AGENCY', 'HDFC BANK', '', 'AMRELI', '', '', '24130200094', '24630200094', '', '1');
INSERT INTO `master_supplier` VALUES ('6', 'SUNRAJ ENTERPRISE', 'SORATHIYA WADI CIRCLE , STREE NO. 5 ', 'RAJKOT', 'GUJRAT', '360002', '', '98255 47350', 'sunrajenterprisegujarat@gmail.com', 'www.sunrajcycle.com', 'DHARMESHBHAI', 'AMITBHAI', '', '98255 47350', '98797 79878', '', '50200008158851', 'SUNRAJ ENTERPRISE', 'HDFC BANK', 'BHAKTI NAGAR', 'RAJKOT', 'HDFC0000661', '', '24091002307', '24591002307', '', '1');
INSERT INTO `master_supplier` VALUES ('7', 'B.P.M. CYCLE STORE', 'STATION ROAD AMRELI', 'AMRELI', 'GUJARAT', '365601', '02792222561', '9825547350', 'info@bpmcycle.in', 'www.bpmcycle.in', 'DHARMESH TANK', '', '', '9825547350', '', '', '0595232000808', 'B.P.M. CYCLE STORE', 'HDFC BANK', 'AMRELI', 'AMRELI', 'HDFC0000595', '', '24130100237', '24630100237', 'BFIPK0946A', '1');
INSERT INTO `master_supplier` VALUES ('8', 'NANDI MARKETING', 'KRISHNA INDUSTRIAL PARK', 'MUMBAI', 'MAHARASTRA', '421302', '02226262627', '09821197100', 'nandimarketingmumbai@gmail,.com', 'www.nandimarketing.com', 'NANDLAL', '', '', '09821197100', '', '', '650014028976', 'NANDI MARKETING', 'INDUSIND BANK', 'MULUND (W)', 'MUMBAI', 'INDB0000047', '', '24090704797', '24590704797', 'BFIPK0946A', '1');
INSERT INTO `master_supplier` VALUES ('9', 'NAREN INTERNATIONAL', 'E-775, PHASE 7, FOCAL POINT', 'LUDHIANA', 'PUNJAB', '141010', '0161-2673778/2674778', '09855755500', 'info@suncrossbikes.com', 'www.suncrossbikes.com', 'DHILLON', 'VEERSINGH', '', '', '', '', '042010200026266', 'NAREN INTERNATIONAL', 'AXIS BANK', '', 'LUDHIANA', 'UTIB0000042', '', '03651112140', '47263416', '', '1');
INSERT INTO `master_supplier` VALUES ('10', 'URBAN TRAIL CYCLE LTD.', 'C/O HERO CYCLE LTD, HERO NAGAR G.T. ROAD', 'LUDHIANA', 'PUNJAB', '141003', '', '', 'sales@heromotors.com', 'utbikes.com', 'ANUP SAHA', '', '', '09250233013', '', '', '6111214459', 'URBAN TRAIL CYCLES LIMITED', 'KOTAK MAHINDRA BANK', '', '', 'KKBK0000201', '', '03052109921', 'U35920PB1988PLC008589', '', '1');
INSERT INTO `master_supplier` VALUES ('11', 'STARKENN / GIANT', '', 'PUNA', 'MAHARASTRA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1');
INSERT INTO `master_supplier` VALUES ('12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1');

-- ----------------------------
-- Table structure for master_tax
-- ----------------------------
DROP TABLE IF EXISTS `master_tax`;
CREATE TABLE `master_tax` (
  `TaxID` int(11) NOT NULL AUTO_INCREMENT,
  `TaxName` varchar(100) DEFAULT NULL,
  `TaxPer` int(11) DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`TaxID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_tax
-- ----------------------------
INSERT INTO `master_tax` VALUES ('5', 'VAT', '4', '1');
INSERT INTO `master_tax` VALUES ('7', 'ADD. TAX', '1', '1');
INSERT INTO `master_tax` VALUES ('8', 'CST (2)', '2', '1');
INSERT INTO `master_tax` VALUES ('10', 'CST (1)', '1', '1');
INSERT INTO `master_tax` VALUES ('11', 'TAX FREE', '0', '1');

-- ----------------------------
-- Table structure for master_type
-- ----------------------------
DROP TABLE IF EXISTS `master_type`;
CREATE TABLE `master_type` (
  `TypeID` int(11) NOT NULL AUTO_INCREMENT,
  `TypeName` varchar(100) DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`TypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_type
-- ----------------------------
INSERT INTO `master_type` VALUES ('1', 'Retail', '1');
INSERT INTO `master_type` VALUES ('2', 'Wholesale', '1');

-- ----------------------------
-- Table structure for master_user
-- ----------------------------
DROP TABLE IF EXISTS `master_user`;
CREATE TABLE `master_user` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_user
-- ----------------------------
INSERT INTO `master_user` VALUES ('2', 'admin', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '1');

-- ----------------------------
-- Table structure for master_visiter
-- ----------------------------
DROP TABLE IF EXISTS `master_visiter`;
CREATE TABLE `master_visiter` (
  `VisiterID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `MobileNumber` varchar(100) DEFAULT NULL,
  `Area` varchar(100) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`VisiterID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_visiter
-- ----------------------------
INSERT INTO `master_visiter` VALUES ('3', 'AASHISH', 'KACHA', 'VICTORY@AASHISHKACHA.COM', '9428692258', 'SARDARPARA', 'JUNAGADH', '1');

-- ----------------------------
-- Table structure for profile
-- ----------------------------
DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `ProfileID` int(11) NOT NULL AUTO_INCREMENT,
  `ComapnyName` varchar(100) DEFAULT NULL,
  `Address` text,
  `City` varchar(100) DEFAULT NULL,
  `Pincode` varchar(100) DEFAULT NULL,
  `State` varchar(100) DEFAULT NULL,
  `Mobile` varchar(100) DEFAULT NULL,
  `Website` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `OfficeNo` varchar(100) DEFAULT NULL,
  `CustomerCareNo` varchar(100) DEFAULT NULL,
  `ServiceNo` varchar(100) DEFAULT NULL,
  `TINNo` varchar(100) DEFAULT NULL,
  `CSTNo` varchar(100) DEFAULT NULL,
  `AccountName` varchar(100) DEFAULT NULL,
  `AccountNo` varchar(100) DEFAULT NULL,
  `BankName` varchar(100) DEFAULT NULL,
  `BranchArea` varchar(100) DEFAULT NULL,
  `BankCity` varchar(100) DEFAULT NULL,
  `IFSCCode` varchar(100) DEFAULT NULL,
  `Logo` varchar(100) DEFAULT NULL,
  `Terms` text,
  `Active` int(11) DEFAULT '1',
  PRIMARY KEY (`ProfileID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of profile
-- ----------------------------
INSERT INTO `profile` VALUES ('1', 'CYCLEZONE', 'ACCURATE SQUARE , NR. ATUL MOTORS , TAGORE ROAD', 'RAJKOT', '360002', 'GUJRAT', '9979707021', 'www.cyclezone.in', 'info@cyclezone.in', '1', '9979707021', '9727573207', '24090704797', '24590704797', 'CYCLE ZONE', '50200015040220', 'HDFC BANK', 'MANEK PARA', 'AMRELI', 'HDFC0000595', '08283020151214Chrysanthemum.jpg', 'Goods once sold will not be taken back\r\n1 years guarentee for frame (without accident) given by company\r\nNo guarentee for any other parts\r\nWe are not responsible for any brackage,threft or damage. ', '1');
SET FOREIGN_KEY_CHECKS=1;
