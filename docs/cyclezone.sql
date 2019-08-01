-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 01, 2015 at 04:47 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cyclezone`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_color`
--

CREATE TABLE `master_color` (
  `ColorID` int(11) NOT NULL auto_increment,
  `ColorName` varchar(100) default NULL,
  `Active` int(11) default '1',
  PRIMARY KEY  (`ColorID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `master_color`
--

INSERT INTO `master_color` (`ColorID`, `ColorName`, `Active`) VALUES
(1, 'BABIE PINK', 1),
(2, 'BLACK', 1),
(3, 'BLACK (M.FINISH)', 1),
(4, 'BLACK-GREEN', 1),
(5, 'BLUE', 1),
(6, 'BLUE (M.FINISH)', 1),
(7, 'BURGUNDY', 1),
(8, 'CHAINA RED', 1),
(9, 'COPPER', 1),
(10, 'CREAM-BROWN', 1),
(11, 'GREEN', 1),
(12, 'GREEN-BLACK', 1),
(13, 'GREEN-YELLOW', 1),
(14, 'GREY', 1),
(15, 'HOT RED', 1),
(16, 'MET GREY', 1),
(17, 'MULTI', 1),
(18, 'ORRANGE', 1),
(19, 'PINK', 1),
(20, 'PINK-BLUE', 1),
(21, 'PITCH', 1),
(22, 'PURPLE', 1),
(23, 'RB', 1),
(24, 'red', 1),
(25, 'S.BLUE', 1),
(26, 'S.BLUE-SILVER', 1),
(27, 'SILVER', 1),
(28, 'SILVER-BLUE', 1),
(29, 'SKY BLUE', 1),
(30, 'WHITE', 1),
(31, 'WHITE-BLUE', 1),
(32, 'WHITE-GREEN', 1),
(33, 'WHITE-RED', 1),
(34, 'YELLOW', 1),
(35, 'YELLOW-BLACK', 1),
(36, 'YELLOW-RED', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_company`
--

CREATE TABLE `master_company` (
  `CompanyID` int(11) NOT NULL auto_increment,
  `CompanyName` varchar(100) default NULL,
  `Active` int(11) default '1',
  PRIMARY KEY  (`CompanyID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `master_company`
--

INSERT INTO `master_company` (`CompanyID`, `CompanyName`, `Active`) VALUES
(8, 'SUNRAJ', 1),
(9, 'TI', 1),
(10, 'MONTRA', 1),
(11, 'SUNCROSS', 1),
(12, 'RALEIGH', 1),
(13, 'HAIBIKE', 1),
(14, 'MONGOOSE', 1),
(15, 'HLX NMC COSMIC', 1),
(16, 'BIANCHI', 1),
(17, 'ATLAS', 1),
(18, 'AVON', 1),
(19, 'SACHIN', 1),
(20, 'SHWIN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_customer`
--

CREATE TABLE `master_customer` (
  `CustomerID` int(11) NOT NULL auto_increment,
  `FirstName` varchar(200) default NULL,
  `MiddelName` varchar(200) default NULL,
  `LastName` varchar(200) default NULL,
  `BirthDate` date default NULL,
  `Comapany` varchar(100) default NULL,
  `Email` varchar(100) default NULL,
  `HomeNumber` varchar(100) default NULL,
  `OfficeNumber` varchar(100) default NULL,
  `MobileNumber` varchar(100) default NULL,
  `Website` varchar(100) default NULL,
  `BillingAddress` text,
  `ShippingAddress` text,
  `BillingCity` varchar(100) default NULL,
  `ShippingCity` varchar(100) default NULL,
  `TypeID` int(11) default NULL,
  `IDType` varchar(100) default NULL,
  `IDNumber` varchar(100) default NULL,
  `IDFile` varchar(100) default NULL,
  `TinNumber` varchar(100) default NULL,
  `AdditionalDetail` text,
  `AccountNumber` varchar(100) default NULL,
  `AccountName` varchar(100) default NULL,
  `BankName` varchar(100) default NULL,
  `BankBranch` varchar(100) default NULL,
  `BankCity` varchar(100) default NULL,
  `IFSCCode` varchar(100) default NULL,
  `Active` int(11) default '1',
  PRIMARY KEY  (`CustomerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

--
-- Dumping data for table `master_customer`
--

INSERT INTO `master_customer` (`CustomerID`, `FirstName`, `MiddelName`, `LastName`, `BirthDate`, `Comapany`, `Email`, `HomeNumber`, `OfficeNumber`, `MobileNumber`, `Website`, `BillingAddress`, `ShippingAddress`, `BillingCity`, `ShippingCity`, `TypeID`, `IDType`, `IDNumber`, `IDFile`, `TinNumber`, `AdditionalDetail`, `AccountNumber`, `AccountName`, `BankName`, `BankBranch`, `BankCity`, `IFSCCode`, `Active`) VALUES
(1, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(4, 'SHAVYA', 'RAMESHBHAI', 'UMBARADIYA', '0000-00-00', '', '', '', '', '9824523143', '', '', '', '', '', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(5, 'PRAVINBHAI', '', 'PAMAR', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(6, 'UPASANA', '', 'TANK', '0000-00-00', '', '', '', '', '', '', '', 'NILKANTH 2.AMARNATH PLOT. KALAVAD ROAD. ', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(7, 'NILESHBHAI', '', 'SACHDEV', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(8, 'DIVYESHBHAI', '', 'AGHERA', '0000-00-00', '', '', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(9, 'PUNITBHAI ', '', 'KOTAK', '0000-00-00', '', '', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(10, 'PARTH', '', 'RANPARA', '0000-00-00', '', '', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(11, 'DR. KIRIT', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(12, 'HARI', 'RAMESHBHAI', 'CHUDASAMA', '0000-00-00', '', '', '', '', '', '', '', 'KAILASH PARK .STREET NO.4 UNI ROAD', 'RAJKOT', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(13, 'BRIJESHBHAI', '', 'MAHETA', '0000-00-00', '', '', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(14, 'MITESHBHAI', 'CHANDULAL', 'SOLANKI', '1980-10-07', '', '', '', '', '', '', '', '', 'RAJKOT', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(15, 'HARESHBHAI', '', 'MARVIYA', '0000-00-00', '', '', '', '', '9898282891', '', '', '101.CHANDRA PARK NEAR BIG BAJAR.', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(16, 'RAJUBHAI', '', 'PATEL', '0000-00-00', '', '', '', '', '9925001245', '', '', '', '', 'RAJKOT', 0, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(17, 'PARTH', '', 'RANPARA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(18, 'BHAVBHUTIBHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(19, 'DHRUV', '', 'DAVE', '0000-00-00', '', '', '', '', '', '', '', '105. MAHADEV APARTMENT.KAILASH PARK STREET NO.4', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(20, 'ARVINDBHAI', '', 'RATHOD', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(21, 'DR. DHARMENDRA', '', 'HADIYAL', '0000-00-00', '', '', '', '', '', '', '', '', '', 'MORBI', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(22, 'DR. MAYUR', '', 'THADESHVAR', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(23, 'MAYUR', 'JAYANTBHAI', 'TANK', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(24, 'JULEE', '', 'UMBARADIYA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(25, 'NANDAN', 'KALRIYA', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(26, 'JVALANT', 'ANILBHAI', 'CHAYA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(27, 'AJAYBHAI', 'A', 'MOR', '0000-00-00', '', '', '', '', '', '', '', '3/4 JYOTINAGAR. SURYADEEP.BEHIND CRISTAL MOLL.', 'RAJKOT', '', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(28, 'MARSHAL ', '', 'DONGA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(29, 'HIREN', '', 'PARMAR', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(30, 'NAYANBHAI', '', 'PANDYA', '0000-00-00', '', '', '', '', '9825737557', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(31, 'NILESHBHAI', '', 'BHIMJIYANI', '0000-00-00', '', '', '', '', '9328917370', '', '', 'NEW KEDARNATH SOSAYATI.KOTHARIYA ROAD ', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(32, 'MOHNISHBHAI', '', 'JADAV', '0000-00-00', '', '', '', '', '', '', '', 'HARIDWAR PARK 2.GONDAL ROAD.', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(33, 'HARESHBHAI', '', 'LUNAGARIYA', '0000-00-00', '', '', '', '', '9879627021', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(34, 'RAVIBHAI', '', 'BADIYANI', '0000-00-00', '', '', '', '', '9426870000', '', '', '503.NEW EMMPAYIR APT,UNI ROAD ', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(35, 'MITESHBHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', 'BLOCK NO 2.RADHIKA PARK 150 FT RING ROAD', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(36, 'KIRITBHAI', '', 'KHOLIYA', '0000-00-00', '', '', '', '', '9227777201', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(37, 'KULDEEP', ' ARVINDBHAI', 'SANKHAVRA', '0000-00-00', '', '', '', '', '9824194675', '', '', 'KUVADVA ROAD. SOMNATH REAL HOME ', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(38, 'SMIT', 'JIGNESHBHAI', 'BHALODIYA', '0000-00-00', '', '', '', '', '9601616263', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(39, 'DINESH', 'RAGHAVBHAI ', 'VECRIYA', '0000-00-00', '', '', '', '', '', '', '', 'AADAMJIROAD. BAGRANG NAGAR ', '', 'JASDAN', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(40, 'HET ', 'MAHENDRABHAI', 'PACHANI', '0000-00-00', '', '', '', '', '9824285249', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(41, 'PRASHANTBHAI', '', 'KAMANI', '0000-00-00', '', '', '', '', '', '', '', '12/2   MASTAR SOSA', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(42, 'DHAVNIL ', 'SEJPAL', '', '0000-00-00', '', '', '', '', '', '', '', 'HARIHAR SOSA. KALAVAD ROAD', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(43, 'VISHAL BHAI ', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(44, 'NIKUNJ', '', 'BHATT', '0000-00-00', '', '', '', '', '9426242202', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(45, 'DR. BHAVESH', '', 'THORIYA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(46, 'ALPESHBHAI', '', 'PATEL', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(47, 'VIPULBHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(48, 'DHARMESHBHAI', '', 'KHERDIYA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(49, 'RACHITABEN', '', 'MAHETA', '0000-00-00', '', '', '', '', '', '', '', 'SHRI YOGIDARSHAN  SOSA. STREET NO. 2', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(50, 'ANKITA BEN', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(51, ' SARADBHAI', '', 'SHINGALA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(52, 'GOPAL ', 'DURLABHJIBHAI', 'SIDDHAPURA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(53, 'ASHOKBHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(54, 'ALPESH BHAI', 'J', 'PATEL', '0000-00-00', '', '', '', '', '9099088440', '', '', '501. ANURADHA APART.RAVAPAR ROAD ', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(55, 'USHABEN', '', 'RAJDEV', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(56, 'BHARAT', 'HARIBHAI', 'CHONDIGARA', '0000-00-00', '', '', '', '', '9427564685', '', '', '3/ KARAN PARK.ASTRON SOSA.', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(57, 'KARTIKBHAI', '', 'JOSHI', '0000-00-00', '', '', '', '', '', '', '', 'OM GAYATRI. MANINAGAR', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(58, 'NAIMISHBHAI', '', 'PATEL', '0000-00-00', '', '', '', '', '9898145405', '', '', '', '', 'VAVDI. RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(59, 'CHANDUBHAU ', '', 'BHUVA', '0000-00-00', '', '', '', '', '', '', '', 'VIJAY PLOT 30.', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(60, 'RAJESH', 'BHARATBHAI', 'KANSARA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(61, 'PUNITBHAI', '', 'KOTAK', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(62, 'DR. KANT ', '', 'JOGANI', '0000-00-00', '', '', '', '', '', '', '', '12/ SILVAR STONE SOSA. KASTURI BANGLO.', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(63, 'AMIBEN', '', 'NANDANI', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(64, 'ELIYAS ', '', 'JUNEJA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(65, 'DINESHBHAI', '', 'TRADA', '0000-00-00', '', '', '', '', '', '', '', 'RANPUR. JUNAGADH', '', '', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(66, 'MAHESHBHAI', '', 'MOTVANI', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(67, 'RAMESH BHAI', '', 'DARJI', '0000-00-00', '', '', '', '', '9427766585', '', '', 'JANSATTA PRESS CHOK. ', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(68, 'SMIT', 'KIRITBHAI', 'GAJERA', '0000-00-00', '', '', '', '', '', '', '', 'JALARAM TRANSPORT', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(69, 'C', 'K ', 'DHAMSANIYA', '0000-00-00', '', '', '', '', '', '', '', '36/A PANCHVATI SOSA.', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(70, 'D ', 'S ', 'PATEL', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(71, 'JAGRUTIBEN', 'MAHESHBHAI', 'VYAS', '0000-00-00', '', '', '', '', '', '', '', 'NANDINI PARK. 3 RAMESHVAR VADI ', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(72, 'KUNAL', 'LALITBHAI', 'RAIYANI', '0000-00-00', '', '', '', '', '', '', '', 'JAY SHAKTI PARK. STREET NO.1', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(73, 'HEMAL', '', 'VACHANI', '0000-00-00', '', '', '', '', '', '', '', '802/ RATRANI APARTMENT. AKSHAR MARG.', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(74, 'NILESHBHAI', '', 'CHIKANI', '0000-00-00', '', '', '', '', '', '', '', 'NAND VATIKA 101 BEHIND STARLING HOSPITAL', 'RAJKOT', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(75, 'SURESHBHAI', '', 'BALDANIYA', '0000-00-00', '', '', '', '', '', '', '', 'INDIRA CIRCLE.', 'RAJKOT', '', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(76, 'DHARMESHBHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(77, 'BHAGVAT SINH', '', 'REVAR', '0000-00-00', '', '', '', '', '', '', '', 'SHARVESHAR 3 .  KARAN PARK', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(78, 'PRATIK BHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(79, 'NILESHBHAI', '', 'SACHDEV', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(80, 'NARENDRABHAI', '', 'GONDLIYA', '0000-00-00', '', '', '', '', '', '', '', 'HOMEGARD CAMPAS COLONI. BLOCK NO B/2/7', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(81, 'NIHAL ', '', '', '0000-00-00', '', '', '', '', '', '', '', 'SADHU VASVANI ROAD,', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(82, 'KEYUR BHAI', '', 'TRIVEDI', '0000-00-00', '', '', '', '', '', '', '', 'SAURASTRA KARMCHARI COLONI. STREET NO 4', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(83, 'JINESH ', '', 'MAHETA', '0000-00-00', '', '', '', '', '', '', '', 'STAVAN 8SAUSRASTRA KALA KENDRA SOSA', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(84, 'PERFECT CASTING', '', '', '0000-00-00', '', '', '', '', '', '', '', 'SAMRAT 30. GONDAL ROAD', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(85, 'RAMCHANDRA', 'KHODIDASBHAI', 'SOJITRA', '0000-00-00', '', '', '', '', '', '', '', 'KARAN PARK STREET NO. 3 ', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(86, 'MUKESHBHAI', '', 'SANGANI', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(87, 'NILESH', 'A', 'LALANI', '0000-00-00', '', '', '', '', '', '', '', '2/ SHRI COLONI.PLOT NO.9  HIMNIL', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(88, 'JAY', 'ASHOKBHAI', 'KARVATIYA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(89, 'NAYNESHBHAI', '', 'KORAT', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(90, 'SHAILESHBHAI', '', 'MANVAR', '0000-00-00', '', '', '', '', '9426216355', '', '', 'A/ 401 RANI TOWER', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(91, 'RAKESH', '', 'KESHVANI ', '0000-00-00', '', '', '', '', '', '', '', '', '', 'BHAVNAGAR', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(92, 'RISHIT ', '', 'PARIHAR', '0000-00-00', '', '', '', '', '', '', '', '97/ 579 VIJAY NAGAR NARANPURA', '', 'AMDAVAD', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(93, 'AMI BEN', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(94, 'HITESH', '', 'PARSANA', '0000-00-00', '', '', '', '', '', '', '', 'ARJUN PARK. ASTRON SOSA, AMIN MARG', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(95, 'NANDISH', 'KARIYA', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(96, 'JAY ', 'ASHOKBHAI', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(97, 'SHIVAM AUTO', '', '', '0000-00-00', '', '', '', '', '9924259453', '', '', '', '', '', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(98, 'AAYUSH ', '', 'KARIYA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(99, 'AMITBHAI', '', 'JADEJA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'JUNAGADH', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(100, 'DEVENDRA', '', 'KOLI', '0000-00-00', '', '', '', '', '', '', '', 'AASHIRVAD 2.ALKAPURI RAIYA ROAD ', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(101, 'MIHIR ', 'CHAGANBHAI', 'BHIMANI', '0000-00-00', '', '', '', '', '', '', '', 'NANDI PARK. 4 S.N.K SCHOOL ', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(102, 'YOGESH BHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'JASDAN', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(103, 'HARESH', 'GHANSHYAMBHAI', 'THORIYA', '0000-00-00', '', '', '', '', '9924350580', '', '', '', '', '', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(104, 'ADHIYARUBHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'AMRELI', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(105, 'MANTHAN ', '', 'PATEL', '0000-00-00', '', '', '', '', '', '', '', 'HARINAGAR MAIN ROAD. UNI ROAD', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(106, 'SAHAJ', 'PARESHBHAI', 'TANK', '0000-00-00', '', '', '', '', '', '', '', 'GUNDAVADI. STREET NO 12.', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(107, 'KANAK BHAI', '', 'SODHA', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(108, 'CHETANYA', '', 'MAHETA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(109, 'HIRENBHAI', '', 'GAUSWAMI', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(110, 'GAURAV ', '', 'PAL', '0000-00-00', '', '', '', '', '', '', '', '', 'RAJKOT', '', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(111, 'KULINBHAI', '', 'BHATT', '0000-00-00', '', '', '', '', '', '', '', 'AVADH RESIDENCY.30 VINAYAK VATIKA.', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(112, 'dipak bhai', '', 'kotecha', '0000-00-00', '', '', '', '', '', '', '', '302/isha avenew new collage vadi kalawad road', '', 'rajkot', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(113, 'sonal ben', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'rajkot', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(114, 'abhishekbhai ', '', 'aadesara', '0000-00-00', '', '', '', '', '', '', '', '2/ vardhaman. palace road', '', 'rajkot', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(115, 'utsav', 'kamleshbhai', 'chauhan', '0000-00-00', '', '', '', '', '', '', '', 'gandhigram', '', 'rajkot', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(116, 'tushar', '', 'sheth', '0000-00-00', '', '', '', '', '', '', '', 'jan kalyan sosa.', '', 'rajkot', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(117, 'ramesh', 'mohan bhai', 'patel', '0000-00-00', '', '', '', '', '', '', '', '3/ somnath apartment.padhmnabh tower.uni road', '', 'rajkot', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(118, 'pratikbhai', '', 'soneji', '0000-00-00', '', '', '', '', '', '', '', '', '', 'rajkot', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(119, 'samirbhai', '', 'patel', '0000-00-00', '', '', '', '', '', '', '', '12/B ANUPAMA SOSA. AMIN MARG', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(120, 'DEVENDRABHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', 'AMBIKA TOWNSHIP. JIVRAJ PARK', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(121, 'GANGADHAR IND.', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(122, 'DR. HARSHIL ', '', 'PARIKH', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(123, 'UDAY', 'HARSHADBHAI', 'DAVE', '0000-00-00', '', '', '', '', '', '', '', 'JIVRAJ PARK BLOCK NO.107 AMBIKA TOWNSHIP.', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(124, 'NAROTAMBHAI', '', 'PARSANA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(125, 'DHANJIBHAI', 'KARMANBHAI', 'AAMBALIYA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(126, 'JIGNESHBHAI', '', 'AGRAVAT', '0000-00-00', '', '', '', '', '', '', '', 'GANDHIGRAM, ', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(127, 'DR. AJAY', '', 'MAHETA', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(128, 'KAVAN', 'SUNILBHAI', 'RAK', '0000-00-00', '', '', '', '', '', '', 'KRISHNAPARK.150 FT RING ROAD', '', 'RAJKOT', '', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(129, 'VASU', '', 'PATEL', '0000-00-00', '', '', '', '', '', '', 'KISMAT PLY', 'KISMAT PLY', 'RAJKOT', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(130, 'KUVRABHAI', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(131, 'SATVIBEN', '', 'LIMBASIYA', '0000-00-00', '', '', '', '', '', '', '', 'B/401.KING HIGHTS.AMIN MARG', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(132, 'DIVYESHBHAI', '', 'PACHANI', '0000-00-00', '', '', '', '', '', '', '', 'UNI ROAD', '', 'RAJKOT', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(133, 'ALPESHBHAI', '', 'PATEL', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1),
(134, 'BHUMI', 'GAURANG BHAI', 'GADHIYA', '0000-00-00', '', '', '', '', '', '', '', '', 'RAJKOT', '', 1, '', '', NULL, '', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_inventory`
--

CREATE TABLE `master_inventory` (
  `InventoryID` int(11) NOT NULL auto_increment,
  `Date` date default NULL,
  `InvoiceNumber` varchar(100) default NULL,
  `SupplierID` int(11) default NULL,
  `TransportationPrice` float default NULL,
  `TotalPrice` float default NULL,
  `Note` text,
  `Active` int(11) default '1',
  PRIMARY KEY  (`InventoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `master_inventory`
--

INSERT INTO `master_inventory` (`InventoryID`, `Date`, `InvoiceNumber`, `SupplierID`, `TransportationPrice`, `TotalPrice`, `Note`, `Active`) VALUES
(1, '2015-10-14', '1', 5, 0, 12000, '', 1),
(2, '2015-10-21', '', 5, 0, 202, '', 1),
(3, '2015-10-06', '321321', 4, 100, 175817, 'This is first', 1),
(4, '2015-10-07', '2321312', 6, 0, 159040, '', 1),
(5, '2015-10-21', '32132', 5, 0, 11070, '', 1),
(6, '2015-10-23', '1263', 4, 20, 20, 'This is test', 1),
(7, '2015-10-19', '22', 5, 20, 76800, 'sfdsdkj fsdf skdf jsdf sdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_inventory_child`
--

CREATE TABLE `master_inventory_child` (
  `InventoryChildID` int(11) NOT NULL auto_increment,
  `InventoryID` int(11) default NULL,
  `Type` varchar(100) default 'cycle',
  `CompanyName` int(11) default NULL,
  `ModalName` varchar(100) default NULL,
  `Color` varchar(100) default NULL,
  `Size` varchar(100) default NULL,
  `ItemName` varchar(100) default NULL,
  `OrgBasicPrice` float default NULL,
  `OrgTaxPrice` float default NULL,
  `TransportationPrice` float default NULL,
  `OrgDiscountPrice` float default NULL,
  `OrgSchemePrice` float default NULL,
  `OrgTaxApplied` varchar(100) default NULL,
  `BasicPrice` float default NULL,
  `TaxPrice` float default NULL,
  `TaxApplied` varchar(100) default NULL,
  `Profit` float default NULL,
  `RoundPrice` float default NULL,
  `TotalPrice` float default NULL,
  `OrgQuantity` int(11) default NULL,
  `Quantity` int(11) default NULL,
  `Active` int(11) default '1',
  PRIMARY KEY  (`InventoryChildID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `master_inventory_child`
--

INSERT INTO `master_inventory_child` (`InventoryChildID`, `InventoryID`, `Type`, `CompanyName`, `ModalName`, `Color`, `Size`, `ItemName`, `OrgBasicPrice`, `OrgTaxPrice`, `TransportationPrice`, `OrgDiscountPrice`, `OrgSchemePrice`, `OrgTaxApplied`, `BasicPrice`, `TaxPrice`, `TaxApplied`, `Profit`, `RoundPrice`, `TotalPrice`, `OrgQuantity`, `Quantity`, `Active`) VALUES
(1, 1, 'cycle', 14, 'MONTANA SPORTS', 'BLUE', 'MEDIUM', 'Select Item Name', 1000, 0, 0, 0, 0, '', 1000, 0, '', 200, 0, 1200, 10, 7, 1),
(2, 2, 'spare', 8, '0', '0', 'Select', 'Bering', 100, 2, 0, 0, 0, '4', 101, 0, '', 0, 0, 101, 2, -42, 1),
(3, 3, 'cycle', 14, 'MONTANA SPORTS', 'BLUE', 'MEDIUM', 'Select Item Name', 10000, 0, 0, 0, 0, '', 10000, 600, '4,5', 2000, 0, 12600, 10, 10, 1),
(4, 3, 'cycle', 10, 'CELTIC 2.1', 'RED', 'MEDIUM', 'Select Item Name', 1250, 1250, 0, 25, 12, '4,5', 1311, 79, '4,5', 262, 0, 1652, 20, 19, 1),
(5, 3, 'spare', 8, '0', '0', 'select', 'Bering', 125, 225, 0, 0, 0, '4,5', 131, 9, '4,5', 42, 0, 182, 36, 36, 1),
(6, 3, 'spare', 8, '0', '0', 'select', 'Bering', 125, 281.25, 0, 0, 0, '4,5', 131, 11, '4,5', 83, 0, 225, 45, 45, 1),
(7, 4, 'cycle', 14, 'MONTANA SPORTS', 'BLUE', 'MEDIUM', 'Select Item Name', 10000, 0, 0, 0, 0, '', 10000, 600, '4,5', 2000, 0, 12600, 10, 10, 1),
(8, 4, 'cycle', 13, 'LAND 8.10 (M.S. / D.D.)', 'MET GREY', '700', 'Select Item Name', 1250, 1250, 0, 25, 12, '4,5', 1311, 79, '4,5', 262, 0, 1652, 20, 20, 1),
(9, 5, 'cycle', 8, 'AURA', 'CHAINA RED', '24"', 'Select Item Name', 1000, 500, 0, 20, 12, '4,5', 1047, 0, '', 0, 0, 1047, 10, 3, 1),
(10, 5, 'spare', 8, '0', '0', 'select', 'Bering', 100, 30, 0, 12, 21, '4,5', 100, 0, '', 0, 0, 100, 6, 6, 1),
(11, 6, 'cycle', 10, 'BLUES 1.1', 'SILVER', 'MEDIUM', 'Select Item Name', 1000, 200, 0, 10, 20, '4', 1009, 61, '4,5', 202, 0, 61, 20, 14, 1),
(12, 6, 'spare', 8, '0', '0', 'Select', 'Bering', 100, 30, 0, 14, 21, '4', 100, 4, '5', 10, 0, 4, 30, 30, 1),
(13, 6, 'spare', 8, '0', '0', 'select', 'Bering', 200, 42, 0, 0, 0, '4', 202, 13, '4,5', 61, 0, 13, 21, 21, 1),
(14, 6, 'spare', 8, '0', '0', 'select', 'Bering', 203, 42.63, 0, 0, 0, '4', 205, 14, '4,5', 72, 0, 14, 21, 21, 1),
(15, 6, 'spare', 8, '0', '0', 'select', 'Bering', 200, 42, 0, 0, 0, '4', 202, 13, '4,5', 61, 0, 13, 21, 21, 1),
(16, 6, 'spare', 8, '0', '0', 'select', 'Bering', 203, 42.63, 0, 0, 0, '4', 205, 14, '4,5', 72, 0, 14, 21, 21, 1),
(19, 7, 'cycle', 10, 'DTR 20', 'YELLOW', '20"', 'Select Item Name', 2000, 600, 0, 10, 10, '4', 2019.33, 96.85, '5', 402, 0, 96.85, 28, 28, 1),
(20, 7, 'cycle', 10, 'DTR 24', 'BLACK', 'MEDIUM', 'Select Item Name', 1000, 200, 0, 0, 0, '4', 1010, 0, '', 101, 0, 1111, 20, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_invoice`
--

CREATE TABLE `master_invoice` (
  `InvoiceID` int(11) NOT NULL auto_increment,
  `Date` date default NULL,
  `CustomerID` int(11) default NULL,
  `PaymentStatus` varchar(100) default NULL,
  `PaymentMethod` varchar(100) default NULL,
  `Shipping` float default NULL,
  `Discount` float default NULL,
  `TotalPrice` float default NULL,
  `Note` text,
  `Active` int(11) default '1',
  PRIMARY KEY  (`InvoiceID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `master_invoice`
--

INSERT INTO `master_invoice` (`InvoiceID`, `Date`, `CustomerID`, `PaymentStatus`, `PaymentMethod`, `Shipping`, `Discount`, `TotalPrice`, `Note`, `Active`) VALUES
(1, '2015-10-13', 6, 'Paid', 'Cash', 100, 12, 3688, 'as asd asd', 1),
(2, '2015-10-28', 6, 'Paid', 'Cheque', 0, 0, 1047, '', 1),
(3, '2015-10-28', 6, 'Paid', 'Cheque', 0, 0, 1047, '', 1),
(4, '2015-10-28', 6, 'Paid', 'Cheque', 0, 0, 1047, '', 1),
(5, '2015-10-28', 6, 'Paid', 'Cheque', 0, 0, 1047, '', 1),
(6, '2015-10-28', 6, 'Paid', 'Cheque', 0, 0, 1047, '', 1),
(7, '2015-10-21', 9, 'Paid', 'Cash', 10, 10, 3746, ' dsf sdf sf sf', 1),
(8, '2015-10-08', 5, 'Pending', 'Cash', 0, 0, 1249, 'asda sd ad asd', 1),
(9, '2015-10-08', 5, 'Pending', 'Cash', 0, 0, 1249, 'asda sd ad asd', 1),
(10, '2015-10-08', 5, 'Pending', 'Cash', 0, 0, 1249, 'asda sd ad asd', 1),
(11, '2015-10-08', 5, 'Pending', 'Cash', 0, 0, 1249, 'asda sd ad asd', 1),
(12, '2015-10-08', 5, 'Pending', 'Cash', 0, 0, 1249, 'asda sd ad asd', 1),
(13, '2015-10-14', 5, 'Pending', 'Cheque', 10, 110, 3507, 'Thi sis tets', 1),
(14, '2015-10-14', 5, 'Pending', 'Cheque', 10, 110, 3507, 'Thi sis tets', 1),
(15, '2015-10-06', 11, 'Paid', 'Cash', 10, 20, 577, ' t y rtyr rt yry', 1),
(16, '2015-10-07', 7, 'Pending', 'Cheque', 0, 0, 688, '', 1),
(17, '2015-10-07', 7, 'Pending', 'Cheque', 0, 0, 688, '', 1),
(18, '2015-10-07', 7, 'Pending', 'Cheque', 0, 0, 688, '', 1),
(19, '2015-10-14', 6, 'Paid', 'Cheque', 0, 0, 728, '', 1),
(20, '2015-10-14', 6, 'Paid', 'Cheque', 0, 0, 728, '', 1),
(21, '2015-10-14', 6, 'Paid', 'Cheque', 0, 0, 728, '', 1),
(22, '2015-10-14', 6, 'Paid', 'Cheque', 0, 0, 728, '', 1),
(23, '2015-10-14', 6, 'Paid', 'Cheque', 0, 0, 728, '', 1),
(24, '2015-10-14', 6, 'Paid', 'Cheque', 0, 0, 728, '', 1),
(25, '2015-10-13', 5, 'Pending', 'Cash', 0, 0, 122, '', 1),
(26, '2015-10-06', 5, 'Pending', 'Cash', 0, 0, 202, '', 1),
(27, '2015-10-14', 10, 'Pending', 'Cheque', 0, 0, 303, 'gdfgdg dgd gd g', 1),
(28, '2015-10-06', 9, 'Pending', 'Cash', 0, 0, 122, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_invoice_child`
--

CREATE TABLE `master_invoice_child` (
  `InvoiceChildID` int(11) NOT NULL auto_increment,
  `InvoiceID` int(11) default NULL,
  `Type` varchar(100) default NULL,
  `CompanyID` int(11) default NULL,
  `ModelNumber` varchar(100) default NULL,
  `Color` varchar(100) default NULL,
  `Size` varchar(100) default NULL,
  `ItemName` varchar(100) default NULL,
  `Quantity` int(11) default NULL,
  `Price` float default NULL,
  `TotalPrice` float default NULL,
  `Active` int(11) default '1',
  PRIMARY KEY  (`InvoiceChildID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `master_invoice_child`
--

INSERT INTO `master_invoice_child` (`InvoiceChildID`, `InvoiceID`, `Type`, `CompanyID`, `ModelNumber`, `Color`, `Size`, `ItemName`, `Quantity`, `Price`, `TotalPrice`, `Active`) VALUES
(1, 1, NULL, 14, 'MONTANA SPORTS', 'BLUE', 'MEDIUM', NULL, 3, 1200, 3600, 1),
(2, 2, NULL, 8, 'AURA', 'CHAINA RED', '24"', NULL, 1, 1047, 1047, 1),
(3, 2, NULL, 0, '0', '0', '0', NULL, 0, 0, 0, 1),
(4, 3, NULL, 8, 'AURA', 'CHAINA RED', '24"', NULL, 1, 1047, 1047, 1),
(5, 3, NULL, 0, '0', '0', '0', NULL, 0, 0, 0, 1),
(6, 4, NULL, 8, 'AURA', 'CHAINA RED', '24"', NULL, 1, 1047, 1047, 1),
(7, 4, NULL, 0, '0', '0', '0', NULL, 0, 0, 0, 1),
(8, 5, NULL, 8, 'AURA', 'CHAINA RED', '24"', NULL, 1, 1047, 1047, 1),
(9, 6, NULL, 8, 'AURA', 'CHAINA RED', '24"', NULL, 1, 1047, 1047, 1),
(10, 7, NULL, 10, 'CELTIC 2.1', 'RED', 'MEDIUM', NULL, 1, 1652, 1652, 1),
(11, 7, NULL, 8, 'AURA', 'CHAINA RED', '24"', NULL, 2, 1047, 2094, 1),
(12, 15, 'spare', 10, NULL, NULL, NULL, '', 3, 61, 183, 1),
(13, 16, 'spare', 8, NULL, NULL, NULL, 'Bering', 3, 101, 303, 1),
(14, 16, 'cycle', 8, '', '', '', NULL, 2, 101, 202, 1),
(15, 16, 'spare', 8, NULL, NULL, NULL, 'Bering', 3, 101, 303, 1),
(16, 17, 'spare', 8, NULL, NULL, NULL, 'Bering', 3, 101, 303, 1),
(17, 18, 'spare', 8, NULL, NULL, NULL, 'Bering', 3, 101, 303, 1),
(18, 20, 'cycle', 10, 'BLUES 1.1', 'SILVER', 'MEDIUM', NULL, 2, 61, 122, 1),
(19, 20, 'spare', 8, NULL, NULL, NULL, 'Bering', 6, 101, 606, 1),
(20, 21, 'cycle', 10, 'BLUES 1.1', 'SILVER', 'MEDIUM', NULL, 2, 61, 122, 1),
(21, 21, 'spare', 8, NULL, NULL, NULL, 'Bering', 6, 101, 606, 1),
(22, 22, 'cycle', 10, 'BLUES 1.1', 'SILVER', 'MEDIUM', NULL, 2, 61, 122, 1),
(23, 22, 'spare', 8, NULL, NULL, NULL, 'Bering', 6, 101, 606, 1),
(24, 23, 'cycle', 10, 'BLUES 1.1', 'SILVER', 'MEDIUM', NULL, 2, 61, 122, 1),
(25, 23, 'spare', 8, NULL, NULL, NULL, 'Bering', 6, 101, 606, 1),
(26, 24, 'cycle', 10, 'BLUES 1.1', 'SILVER', 'MEDIUM', NULL, 2, 61, 122, 1),
(27, 24, 'spare', 8, NULL, NULL, NULL, 'Bering', 6, 101, 606, 1),
(28, 25, 'cycle', 10, 'BLUES 1.1', 'SILVER', 'MEDIUM', NULL, 2, 61, 122, 1),
(29, 26, 'spare', 8, NULL, NULL, NULL, 'Bering', 2, 101, 202, 1),
(30, 27, 'spare', 8, NULL, NULL, NULL, 'Bering', 3, 101, 303, 1),
(31, 28, 'cycle', 10, 'BLUES 1.1', 'SILVER', 'MEDIUM', NULL, 2, 61, 122, 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_invoice_frame`
--

CREATE TABLE `master_invoice_frame` (
  `FrameID` int(11) NOT NULL auto_increment,
  `InvoiceChildID` int(11) default NULL,
  `FrameValue` varchar(100) default NULL,
  `Active` int(11) default '1',
  PRIMARY KEY  (`FrameID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `master_invoice_frame`
--

INSERT INTO `master_invoice_frame` (`FrameID`, `InvoiceChildID`, `FrameValue`, `Active`) VALUES
(1, 1, '1', 1),
(2, 3, '', 1),
(3, 3, '', 1),
(4, 4, '', 1),
(5, 4, '', 1),
(6, 4, '', 1),
(7, 4, '', 1),
(8, 5, '123', 1),
(9, 5, '456', 1),
(10, 6, '12', 1),
(11, 6, '34', 1),
(12, 6, '56', 1),
(13, 6, '78', 1),
(14, 7, 'a', 1),
(15, 7, 'b', 1),
(16, 7, 'c', 1),
(17, 7, 'd', 1),
(18, 7, 'e', 1),
(19, 1, '615', 1),
(20, 1, '13', 1),
(21, 1, '21', 1),
(22, 2, '321321', 1),
(23, 4, '321321', 1),
(24, 6, '321321', 1),
(25, 8, '321321', 1),
(26, 9, '321321', 1),
(27, 10, '43535435', 1),
(28, 11, '3424', 1),
(29, 11, '424234', 1),
(30, 18, 'tg', 1),
(31, 18, 'ertert', 1),
(32, 20, 'tg', 1),
(33, 20, 'ertert', 1),
(34, 22, 'tg', 1),
(35, 22, 'ertert', 1),
(36, 24, 'tg', 1),
(37, 24, 'ertert', 1),
(38, 26, 'tg', 1),
(39, 26, 'ertert', 1),
(40, 28, '324234', 1),
(41, 28, '234234', 1),
(42, 31, 'asda', 1),
(43, 31, 'dasd', 1),
(44, 32, 'erte', 1),
(45, 32, 'tertertert', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_modal_name`
--

CREATE TABLE `master_modal_name` (
  `ModalNameID` int(11) NOT NULL auto_increment,
  `ModalName` varchar(100) default NULL,
  `Active` int(11) default '1',
  PRIMARY KEY  (`ModalNameID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=118 ;

--
-- Dumping data for table `master_modal_name`
--

INSERT INTO `master_modal_name` (`ModalNameID`, `ModalName`, `Active`) VALUES
(1, 'ANTOP / ADDER (F.D.)', 1),
(2, 'ATOM ZX', 1),
(3, 'ATOM ZX 18 SPEED (M.S.)', 1),
(4, 'ATOM ZX 6 SPEED (M.S.)', 1),
(5, 'AURA', 1),
(6, 'BEETLE', 1),
(7, 'BIANCHI DUEL', 1),
(8, 'BLUES 1.1', 1),
(9, 'BMX', 1),
(10, 'BOUNTY (IBC)', 1),
(11, 'BOUNTY SPORTS', 1),
(12, 'BOW-TIE', 1),
(13, 'BUTTERFLY', 1),
(14, 'CALDRON (M.S. / D.D.)', 1),
(15, 'CALDRON - EF (M.S.)', 1),
(16, 'CELTIC 2.1', 1),
(17, 'CELTIC 2.2', 1),
(18, 'CHARLIE', 1),
(19, 'CHARM', 1),
(20, 'CITY001', 1),
(21, 'CLUBMAN', 1),
(22, 'CRONIC', 1),
(23, 'CROWN', 1),
(24, 'CRUISER IBC (F.D.)', 1),
(25, 'CRUZE', 1),
(26, 'CRUZE NEW ', 1),
(27, 'CUB', 1),
(28, 'CUBA IBC', 1),
(29, 'CUBA SPORTS', 1),
(30, 'CX', 1),
(31, 'CYBOT', 1),
(32, 'DIRT MAX (M.S. / D.D.)', 1),
(33, 'DIRT MAX (S.S.)', 1),
(34, 'DRIFT', 1),
(35, 'DTR 20', 1),
(36, 'DTR 24', 1),
(37, 'DUAL', 1),
(38, 'DYNAMITE ZX ', 1),
(39, 'DYNOX', 1),
(40, 'E-125', 1),
(41, 'E-12571', 1),
(42, 'ELITE', 1),
(43, 'EQUINOX (M.S.)', 1),
(44, 'EXTRUSION', 1),
(45, 'FORCE 10', 1),
(46, 'GRN DTR', 1),
(47, 'HAPPY', 1),
(48, 'HAZARD-EF (M.S.)', 1),
(49, 'INNOVATE (M.S.)', 1),
(50, 'INTRUDER', 1),
(51, 'JALPARI', 1),
(52, 'JAX', 1),
(53, 'JET LINER', 1),
(54, 'JUS BIKE', 1),
(55, 'JUST BIKE (S.S.)', 1),
(56, 'KNIGHT HUNTER', 1),
(57, 'LAND 8.10 (M.S. / D.D.)', 1),
(58, 'LOADED (M.S. / D.D.)', 1),
(59, 'LUST', 1),
(60, 'MACH CITY', 1),
(61, 'MACH CITY I BIKE', 1),
(62, 'MILE STONE', 1),
(63, 'MISCEO (M.S.)', 1),
(64, 'MISCEO 1.0 (S.S.)', 1),
(65, 'MONSTER X (S.S.)', 1),
(66, 'MONSTER X - EF (M.S. / F.D.)', 1),
(67, 'MONTANA SPORTS', 1),
(68, 'MONTRA - 2015 TRANCE SPEED', 1),
(69, 'MONTRA 14 - BLUE SPEED', 1),
(70, 'MY RIDE (M.S.)', 1),
(71, 'MY RIDE (S.S.)', 1),
(72, 'PACE', 1),
(73, 'PC', 1),
(74, 'QUICK', 1),
(75, 'RAPID', 1),
(76, 'REDOX', 1),
(77, 'ROAD009', 1),
(78, 'ROCK 1.0 ', 1),
(79, 'ROCK 1.1', 1),
(80, 'ROCKWAY', 1),
(81, 'ROCKY ', 1),
(82, 'ROCKY ZX', 1),
(83, 'RODEO A 100 VX (M.SPEED)', 1),
(84, 'RODEO GEOLANDER (M.S./F.D.)', 1),
(85, 'RODEO NFS PRO (M.S. / F.D.)', 1),
(86, 'RODEO TURNER VX (M.S.)', 1),
(87, 'RODEO WAYFINDER (M.S.)', 1),
(88, 'RS 26 (S.S. / F.D.)', 1),
(89, 'SATA', 1),
(90, 'SENSO', 1),
(91, 'SHOCKBLAZE (M.S. / F.D.)', 1),
(92, 'SKID', 1),
(93, 'SKYTOP', 1),
(94, 'SOCCER (M.S. / D.D.)', 1),
(95, 'SOCCER (S.S. / F.D.)', 1),
(96, 'SOCCER (S.S.)', 1),
(97, 'SPARTA ZX ', 1),
(98, 'STAR', 1),
(99, 'STARLEY', 1),
(100, 'STRATUS (S.S.)', 1),
(101, 'STYLOUS (S.S.)', 1),
(102, 'SUPER SPORTS WOMAN', 1),
(103, 'SX 006', 1),
(104, 'TEENZ', 1),
(105, 'TERRAIN 30 (M.S. / D.D.)', 1),
(106, 'TOONZ', 1),
(107, 'TRANCE', 1),
(108, 'TRANCE PRO ', 1),
(109, 'TRANS PRO', 1),
(110, 'TRIGGER (M.S. / F.D.)', 1),
(111, 'TRIGGER (S.S. / F.D.)', 1),
(112, 'U TECH (S.S )', 1),
(113, 'UNIQUE', 1),
(114, 'UNPLUGGED', 1),
(115, 'X FORCE', 1),
(116, 'X ONE', 1),
(117, 'X TRACK (S.S. / F.D.)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_products`
--

CREATE TABLE `master_products` (
  `ProductID` int(11) NOT NULL auto_increment,
  `CompanyID` int(11) default NULL,
  `ModalName` varchar(100) default NULL,
  `Segment` varchar(100) default NULL,
  `Color` varchar(100) default NULL,
  `Size` varchar(100) default NULL,
  `Active` int(11) default '1',
  PRIMARY KEY  (`ProductID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=170 ;

--
-- Dumping data for table `master_products`
--

INSERT INTO `master_products` (`ProductID`, `CompanyID`, `ModalName`, `Segment`, `Color`, `Size`, `Active`) VALUES
(3, 2, 'E-125', 'big bike', 'red', '25', 1),
(4, 3, 'E-12571', 'big bike1', 'black1', '251', 1),
(5, 4, 'ROCK 1.0 ', 'MTB', 'BLUE', 'M', 1),
(6, 5, 'SATA', 'MOUNTAIN', 'BLUE', '24', 1),
(7, 6, 'ROAD009', 'ROAD BIKE', 'WHITE', '22', 1),
(8, 6, 'CITY001', 'CITY BIKE', 'RED', '22', 1),
(9, 8, 'QUICK', 'MTB ', 'BLUE', '26"', 1),
(10, 8, 'CRONIC', 'MTB', 'BLACK', '26"', 1),
(11, 8, 'DRIFT', 'MTB', 'HOT RED', '26"', 1),
(12, 8, 'UNIQUE', 'MTB', 'HOT RED', '26"', 1),
(13, 8, 'UNIQUE', 'MTB', 'SILVER-BLUE', '26"', 1),
(14, 8, 'UNIQUE', 'MTB', 'PITCH', '26"', 1),
(15, 8, 'UNIQUE', 'MTB', 'YELLOW-BLACK', '26"', 1),
(16, 8, 'X ONE', 'MTB', 'COPPER', '26"', 1),
(17, 8, 'X ONE', 'MTB', 'BLUE', '26"', 1),
(18, 8, 'X ONE', 'MTB', 'CHAINA RED', '26"', 1),
(19, 8, 'X ONE', 'MTB', 'GREEN-BLACK', '26"', 1),
(20, 8, 'CRUZE', 'MTB', 'WHITE-GREEN', '26"', 1),
(21, 8, 'CRUZE NEW ', 'MTB', 'HOT RED', '26"', 1),
(22, 8, 'CRUZE NEW ', 'MTB', 'SILVER-BLUE', '26"', 1),
(23, 8, 'X FORCE', 'MTB', 'CREAM-BROWN', '26"', 1),
(24, 8, 'X FORCE', 'MTB', 'CHAINA RED', '26"', 1),
(25, 8, 'INTRUDER', 'MTB', 'HOT RED', '26"', 1),
(26, 8, 'INTRUDER', 'MTB', 'BLUE', '26"', 1),
(27, 8, 'SKYTOP', 'MTB', 'PITCH', '26"', 1),
(28, 8, 'SKYTOP', 'MTB', 'CHAINA RED', '26"', 1),
(29, 8, 'EXTRUSION', 'MTB', 'HOT RED', '26"', 1),
(30, 8, 'EXTRUSION', 'MTB', 'BLACK', '26"', 1),
(31, 8, 'ELITE', 'MTB', 'HOT RED', '26"', 1),
(32, 8, 'ELITE', 'MTB', 'BLUE', '26"', 1),
(33, 8, 'BOUNTY (IBC)', 'MTB', 'HOT RED', '26"', 1),
(34, 8, 'BOUNTY SPORTS', 'MTB', 'HOT RED', '26"', 1),
(35, 8, 'CUBA IBC', 'MTB', 'S.BLUE-SILVER', '26"', 1),
(36, 8, 'CUBA SPORTS', 'MTB', 'S.BLUE-SILVER', '26"', 1),
(37, 8, 'REDOX', 'MTB', 'WHITE-BLUE', '26"', 1),
(38, 8, 'QUICK', 'MTB', 'BLUE', '24"', 1),
(39, 8, 'CRONIC', 'MTB', 'BLACK', '24"', 1),
(40, 8, 'DRIFT', 'MTB', 'HOT RED', '24"', 1),
(41, 8, 'AURA', 'MTB', 'SILVER-BLUE', '24"', 1),
(42, 8, 'AURA', 'MTB', 'CHAINA RED', '24"', 1),
(43, 8, 'JET LINER', 'MTB', 'SILVER-BLUE', '24"', 1),
(44, 8, 'JET LINER', 'MTB', 'COPPER', '24"', 1),
(45, 8, 'JET LINER', 'MTB', 'GREEN-BLACK', '24"', 1),
(46, 8, 'ROCKWAY', 'MTB', 'HOT RED', '24"', 1),
(47, 8, 'ROCKWAY', 'MTB', 'BLUE', '24"', 1),
(48, 8, 'MILE STONE', 'MTB', 'GREEN-BLACK', '24"', 1),
(49, 8, 'CRUZE', 'MTB', 'HOT RED', '24"', 1),
(50, 8, 'CRUZE', 'MTB', 'SILVER-BLUE', '24"', 1),
(51, 8, 'EXTRUSION', 'MTB', 'BLUE', '24"', 1),
(52, 8, 'EXTRUSION', 'MTB', 'HOT RED', '24"', 1),
(53, 8, 'ELITE', 'MTB', 'HOT RED', '24"', 1),
(54, 8, 'ELITE', 'MTB', 'SILVER-BLUE', '24"', 1),
(55, 8, 'CHARLIE', 'LADY', 'PURPLE', '26"', 1),
(56, 8, 'CHARM', 'LADY', 'BURGUNDY', '26"', 1),
(57, 8, 'LUST', 'LADY', 'S.BLUE', '26"', 1),
(58, 8, 'BUTTERFLY', 'LADY', 'BABIE PINK', '24"', 1),
(59, 8, 'BUTTERFLY', 'LADY', 'PINK', '26"', 1),
(60, 8, 'BEETLE', 'LADY', 'SKY BLUE', '26"', 1),
(61, 8, 'BEETLE', 'LADY', 'SKY BLUE', '24"', 1),
(62, 8, 'JAX', 'KID', 'BLUE', '20"', 1),
(63, 8, 'SKID', 'KID', 'RED', '20"', 1),
(64, 8, 'STARLEY', 'KID', 'PINK', '20"', 1),
(65, 8, 'JALPARI', 'KID', 'S.BLUE', '20"', 1),
(66, 15, 'BOW-TIE', 'KID', 'MULTI', '12"', 1),
(67, 15, 'BOW-TIE', 'KID', 'MULTI', '14"', 1),
(68, 15, 'BOW-TIE', 'KID', 'MULTI', '16"', 1),
(69, 15, 'CUB', 'KID', 'MULTI', '12', 1),
(70, 15, 'PC', 'KID', 'MULTI', '12"', 1),
(71, 15, 'PC', 'KID', 'MULTI', '16"', 1),
(72, 15, 'RAPID', 'KID', 'MULTI', '14"', 1),
(73, 15, 'CROWN', 'KID', 'MULTI', '14"', 1),
(74, 15, 'CROWN', 'KID', 'MULTI', '16"', 1),
(75, 15, 'CROWN', 'KID', 'MULTI', '20"', 1),
(76, 15, 'HAPPY', 'KID', 'MULTI', '14"', 1),
(77, 15, 'HAPPY', 'KID', 'MULTI', '16"', 1),
(78, 15, 'PACE', 'KID', 'MULTI', '16"', 1),
(79, 15, 'FORCE 10', 'KID', 'MULTI', '20"', 1),
(80, 15, 'CX', 'KID', 'MULTI', '20"', 1),
(81, 9, 'ATOM ZX', 'MTB', 'RED', '26"', 1),
(82, 9, 'RODEO A 100 VX (M.SPEED)', 'MTB', 'WHITE', '26"', 1),
(83, 9, 'ATOM ZX 18 SPEED (M.S.)', 'MTB', 'RED', '26"', 1),
(84, 9, 'ATOM ZX 6 SPEED (M.S.)', 'MTB', 'RED', '26"', 1),
(85, 9, 'DYNAMITE ZX ', 'MTB', 'RED', '26"', 1),
(86, 9, 'SPARTA ZX ', 'MTB', 'BLACK-GREEN', '26"', 1),
(87, 9, 'SPARTA ZX ', 'MTB ', 'BLACK-GREEN', '24"', 1),
(88, 9, 'DYNAMITE ZX ', 'MTB', 'BLACK', '24"', 1),
(89, 9, 'CYBOT', 'KID', 'GREEN-BLACK', '20"', 1),
(90, 9, 'ROCKY ZX', 'MTB', 'RED', '24"', 1),
(91, 9, 'KNIGHT HUNTER', 'MTB', 'BLACK', '26"', 1),
(92, 9, 'ROCKY ', 'MTB', 'BLUE', '26"', 1),
(93, 9, 'ROCKY ', 'MTB', 'BLACK', '24"', 1),
(94, 9, 'RODEO WAYFINDER (M.S.)', 'MTB', 'BLACK-GREEN', '26"', 1),
(95, 9, 'RODEO GEOLANDER (M.S./F.D.)', 'MTB', 'WHITE', '26"', 1),
(96, 9, 'RODEO GEOLANDER (M.S./F.D.)', 'MTB', 'WHITE', '24"', 1),
(97, 9, 'RODEO NFS PRO (M.S. / F.D.)', 'MTB', 'RED', '26"', 1),
(98, 9, 'TOONZ', 'KID', 'RED', '20"', 1),
(99, 9, 'TOONZ', 'KID', 'PINK-BLUE', '20"', 1),
(100, 17, 'ANTOP / ADDER (F.D.)', 'MTB', 'SILVER', '26"', 1),
(101, 9, 'RODEO TURNER VX (M.S.)', 'MTB', 'ORRANGE', '26"', 1),
(102, 9, 'MACH CITY I BIKE', 'MTB', 'RED', '26"', 1),
(103, 9, 'MACH CITY', 'HYBRID', 'GREEN', '700 C', 1),
(104, 18, 'CRUISER IBC (F.D.)', 'MTB', 'RB', '26"', 1),
(105, 11, 'SOCCER (S.S. / F.D.)', 'MTB', 'YELLOW-RED', '26"', 1),
(106, 11, 'SOCCER (S.S.)', 'MTB', 'GREEN-YELLOW', '26"', 1),
(107, 11, 'RS 26 (S.S. / F.D.)', 'MTB', 'WHITE', '26"', 1),
(108, 11, 'X TRACK (S.S. / F.D.)', 'MTB', 'YELLOW', '26"', 1),
(109, 11, 'TEENZ', 'KID', 'GREEN', '20"', 1),
(110, 11, 'U TECH (S.S )', 'MTB', 'WHITE-BLUE', '26"', 1),
(111, 11, 'STRATUS (S.S.)', 'MTB', 'WHITE', '26"', 1),
(112, 11, 'SX 006', 'KID', 'RED', '16"', 1),
(113, 12, 'CLUBMAN', 'ROAD BIKE', 'S.BLUE', 'LARGE', 1),
(114, 12, 'MONSTER X (S.S.)', 'MTB', 'WHITE-RED', '24"', 1),
(115, 11, 'CALDRON - EF (M.S.)', 'MTB', 'WHITE', '24"', 1),
(116, 11, 'SOCCER (M.S. / D.D.)', 'MTB', 'WHITE-BLUE', '26"', 1),
(117, 11, 'HAZARD-EF (M.S.)', 'MTB', 'GREEN', '26"', 1),
(118, 11, 'CALDRON - EF (M.S.)', 'MTB', 'BLUE', '26', 1),
(119, 11, 'CALDRON (M.S. / D.D.)', 'MTB', 'BLACK (M.FINISH)', '26"', 1),
(120, 11, 'LOADED (M.S. / D.D.)', 'MTB', 'WHITE', '26"', 1),
(121, 11, 'EQUINOX (M.S.)', 'HYBRID', 'RED', '700 C', 1),
(122, 11, 'INNOVATE (M.S.)', 'HYBRID', 'WHITE', '700 C', 1),
(123, 11, 'DIRT MAX (M.S. / D.D.)', 'MTB', 'BLACK (M.FINISH)', '26"', 1),
(124, 12, 'TERRAIN 30 (M.S. / D.D.)', 'MTB', 'BLACK', '26"', 1),
(125, 12, 'SHOCKBLAZE (M.S. / F.D.)', 'MTB', 'BLACK (M.FINISH)', '26"', 1),
(126, 12, 'MONSTER X - EF (M.S. / F.D.)', 'MTB', 'WHITE-RED', '26"', 1),
(127, 12, 'MISCEO (M.S.)', 'HYBRID', 'BLACK (M.FINISH)', '700 C', 1),
(128, 13, 'LAND 8.10 (M.S. / D.D.)', 'HYBRID', 'MET GREY', '700 C', 1),
(129, 11, 'SENSO', 'LADY', 'WHITE', '26"', 1),
(130, 12, 'MY RIDE (S.S.)', 'MTB', 'BLACK', '26"', 1),
(131, 12, 'MY RIDE (S.S.)', 'MTB', 'BLUE', '26"', 1),
(132, 12, 'MY RIDE (M.S.)', 'MTB', 'WHITE', '26"', 1),
(133, 11, 'STYLOUS (S.S.)', 'MTB', 'BLUE (M.FINISH)', '26"', 1),
(134, 12, 'MISCEO 1.0 (S.S.)', 'MTB', 'BLACK (M.FINISH)', '27.5', 1),
(135, 19, 'STAR', 'KID', 'MULTI', '16"', 1),
(136, 19, 'STAR ', 'KID', 'MULTI', '14"', 1),
(137, 19, 'BMX', 'KID', 'MULTI', '14"', 1),
(138, 15, 'JUST BIKE (S.S.)', 'MTB', 'WHITE', '26"', 1),
(139, 15, 'JUST BIKE (S.S.)', 'MTB', 'BLUE', '26"', 1),
(140, 11, 'TRIGGER (S.S. / F.D.)', 'MTB', 'BLACK (M.FINISH)', '24"', 1),
(141, 11, 'DIRT MAX (S.S.)', 'MTB', 'GREEN', '24"', 1),
(142, 11, 'TRIGGER (M.S. / F.D.)', 'MTB', 'BLACK (M.FINISH)', '24"', 1),
(143, 10, 'ROCK 1.0 ', 'MTB', 'BLUE', 'MEDIUM', 1),
(144, 20, 'SUPER SPORTS WOMAN', 'HYBRID', 'BLUE', 'MEDIUM', 1),
(145, 16, 'DUAL', 'MTB', 'BLACK', 'LARGE', 1),
(146, 16, 'DUAL', 'MTB', 'RED', 'SMALL', 1),
(147, 10, 'UNPLUGGED', 'ROAD BIKE', 'RED', 'LARGE', 1),
(148, 10, 'UNPLUGGED', 'ROAD BIKE', 'RED', 'SMALL', 1),
(149, 10, 'CELTIC 2.1', 'ROAD BIKE', 'RED', 'MEDIUM', 1),
(150, 10, 'CELTIC 2.2', 'ROAD BIKE', 'YELLOW-BLACK', 'MEDIUM', 1),
(151, 10, 'TRANCE PRO ', 'HYBRID', 'BLUE', 'MEDIUM', 1),
(152, 10, 'TRANCE PRO ', 'HYBRID', 'BLACK', 'LARGE', 1),
(153, 10, 'BLUES 1.1', 'HYBRID', 'SILVER', 'MEDIUM', 1),
(154, 10, 'TRANCE', 'HYBRID', 'BLUE', 'MEDIUM', 1),
(155, 10, 'DTR 20', 'KID', 'YELLOW', '20"', 1),
(156, 10, 'BLUES 1.1', 'HYBRID', 'SILVER', 'SMALL', 1),
(157, 10, 'DTR 24', 'MTB', 'BLACK', 'MEDIUM', 1),
(158, 14, 'MONTANA SPORTS', 'MTB', 'ORRANGE', 'MEDIUM', 1),
(159, 14, 'MONTANA SPORTS', 'MTB', 'BLUE', 'MEDIUM', 1),
(160, 9, 'DYNOX', 'KID', 'BLUE', '20"', 1),
(161, 10, 'ROCK 1.1', 'MTB', 'GREY', 'MEDIUM', 1),
(162, 21, 'JUS BIKE', 'MOUNTAIN', 'MULTI', '26"', 1),
(163, 9, 'MONTRA 14 - BLUE SPEED', 'MOUNTAIN', 'BLUE', '14', 1),
(164, 9, 'MONTRA - 2015 TRANCE SPEED', 'MOUNTAIN', 'BLUE', '14"', 1),
(165, 9, 'BIANCHI DUEL', 'MTB', 'BLACK', '26"', 1),
(166, 9, 'GRN DTR', 'KIDS', 'MULTI', '20', 1),
(167, 9, 'TRANS PRO', 'KIDS', 'BLACK', 'M', 1),
(168, 9, 'UNPLUGGED', 'ROAD BIKE', 'BLACK', '700*28', 1),
(169, 9, 'DYNAMITE ZX', 'MTB', 'RED', '24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_segment`
--

CREATE TABLE `master_segment` (
  `SegmentID` int(11) NOT NULL auto_increment,
  `SegmentName` varchar(100) default NULL,
  `Active` int(11) default '1',
  PRIMARY KEY  (`SegmentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `master_segment`
--

INSERT INTO `master_segment` (`SegmentID`, `SegmentName`, `Active`) VALUES
(1, 'MTB', 1),
(2, 'LADY', 1),
(3, 'KID', 1),
(4, 'HYBRID', 1),
(5, 'ROAD BIKE', 1),
(6, 'small bike', 1),
(7, 'big bike', 1),
(8, 'KIDS', 1),
(9, 'MOUNTAIN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_size`
--

CREATE TABLE `master_size` (
  `SizeID` int(11) NOT NULL auto_increment,
  `SizeName` varchar(100) default NULL,
  `Active` int(11) default '1',
  PRIMARY KEY  (`SizeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `master_size`
--

INSERT INTO `master_size` (`SizeID`, `SizeName`, `Active`) VALUES
(1, '12', 1),
(2, '12"', 1),
(3, '14', 1),
(4, '14"', 1),
(5, '16"', 1),
(6, '20', 1),
(7, '20"', 1),
(8, '22', 1),
(9, '24', 1),
(10, '24"', 1),
(11, '25', 1),
(12, '251', 1),
(13, '26', 1),
(14, '26"', 1),
(15, '27.5', 1),
(16, '700 C', 1),
(17, '700*28', 1),
(18, 'LARGE', 1),
(19, 'MEDIUM', 1),
(20, 'SMALL', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_spare_products`
--

CREATE TABLE `master_spare_products` (
  `SpareProductID` int(11) NOT NULL auto_increment,
  `CompanyID` int(11) default NULL,
  `SpareItemName` varchar(100) default NULL,
  `Active` int(11) default '1',
  PRIMARY KEY  (`SpareProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `master_spare_products`
--


-- --------------------------------------------------------

--
-- Table structure for table `master_supplier`
--

CREATE TABLE `master_supplier` (
  `SupplierID` int(11) NOT NULL auto_increment,
  `CompanyName` varchar(100) default NULL,
  `CompanyAddress` text,
  `CompanyCity` varchar(100) default NULL,
  `CompanyState` varchar(100) default NULL,
  `CompanyPinCode` varchar(100) default NULL,
  `OfficeNumber` varchar(100) default NULL,
  `MobileNumber` varchar(100) default NULL,
  `Email` varchar(100) default NULL,
  `Website` varchar(100) default NULL,
  `ContactPerson1` varchar(100) default NULL,
  `ContactPerson2` varchar(100) default NULL,
  `ContactPerson3` varchar(100) default NULL,
  `Contact1` varchar(100) default NULL,
  `Contact2` varchar(100) default NULL,
  `Contact3` varchar(100) default NULL,
  `AccountNumber` text,
  `AccountName` varchar(100) default NULL,
  `BankName` varchar(100) default NULL,
  `BankBranch` varchar(100) default NULL,
  `BankCity` varchar(100) default NULL,
  `IFSCCode` varchar(100) default NULL,
  `TaxDetail` text,
  `TINNumber` varchar(100) default NULL,
  `CSTNumber` varchar(100) default NULL,
  `PANNumber` varchar(100) default NULL,
  `Active` int(11) default '1',
  PRIMARY KEY  (`SupplierID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `master_supplier`
--

INSERT INTO `master_supplier` (`SupplierID`, `CompanyName`, `CompanyAddress`, `CompanyCity`, `CompanyState`, `CompanyPinCode`, `OfficeNumber`, `MobileNumber`, `Email`, `Website`, `ContactPerson1`, `ContactPerson2`, `ContactPerson3`, `Contact1`, `Contact2`, `Contact3`, `AccountNumber`, `AccountName`, `BankName`, `BankBranch`, `BankCity`, `IFSCCode`, `TaxDetail`, `TINNumber`, `CSTNumber`, `PANNumber`, `Active`) VALUES
(4, 'BPM CYCLE STORE', 'STATION ROAD', 'AMRELI', 'GUJARAT', '365601', '02792-222561', '94272 06272', 'bpmcycle@yahoo.co.in', '', 'BHIKHUBHAI', 'PRATIKBHAI', 'MANUBHAI', '94272 06272', '99041 45033', '98250 47051', '0595232000808', 'BPM CYCLE STORE', 'HDFC BANK', '', '', 'HDFC0000595', '', '24130100237', '24601000237', '', 1),
(5, 'BPM CYCLE AGENCY', 'STATION ROAD', 'AMRELI', 'GUJARAT', '365601', '02792 22561', '9427206272', 'bpmcycle@yahoo.co.in', '', 'BHIKHUBHAI', 'PRATIKBHAI', 'MANUBHAI', '94272 06272', '99041 45033', '98250 47051', '0595232000790', 'BPM CYCLE AGENCY', 'HDFC BANK', '', 'AMRELI', '', '', '24130200094', '24630200094', '', 1),
(6, 'SUNRAJ ENTERPRISE', 'SORATHIYA WADI CIRCLE , STREE NO. 5 ', 'RAJKOT', 'GUJRAT', '360002', '', '98255 47350', 'sunrajenterprisegujarat@gmail.com', 'www.sunrajcycle.com', 'DHARMESHBHAI', 'AMITBHAI', '', '98255 47350', '98797 79878', '', '50200008158851', 'SUNRAJ ENTERPRISE', 'HDFC BANK', 'BHAKTI NAGAR', 'RAJKOT', 'HDFC0000661', '', '24091002307', '24591002307', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_tax`
--

CREATE TABLE `master_tax` (
  `TaxID` int(11) NOT NULL auto_increment,
  `TaxName` varchar(100) default NULL,
  `TaxPer` int(11) default NULL,
  `Active` int(11) default '1',
  PRIMARY KEY  (`TaxID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `master_tax`
--

INSERT INTO `master_tax` (`TaxID`, `TaxName`, `TaxPer`, `Active`) VALUES
(4, 'CST', 1, 1),
(5, 'VAT', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_type`
--

CREATE TABLE `master_type` (
  `TypeID` int(11) NOT NULL auto_increment,
  `TypeName` varchar(100) default NULL,
  `Active` int(11) default '1',
  PRIMARY KEY  (`TypeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `master_type`
--

INSERT INTO `master_type` (`TypeID`, `TypeName`, `Active`) VALUES
(1, 'Retail', 1),
(2, 'Wholesale', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `ProfileID` int(11) NOT NULL auto_increment,
  `ComapnyName` varchar(100) default NULL,
  `Address` text,
  `City` varchar(100) default NULL,
  `Pincode` varchar(100) default NULL,
  `State` varchar(100) default NULL,
  `Mobile` varchar(100) default NULL,
  `Website` varchar(100) default NULL,
  `Email` varchar(100) default NULL,
  `OfficeNo` varchar(100) default NULL,
  `CustomerCareNo` varchar(100) default NULL,
  `ServiceNo` varchar(100) default NULL,
  `TINNo` varchar(100) default NULL,
  `CSTNo` varchar(100) default NULL,
  `AccountName` varchar(100) default NULL,
  `AccountNo` varchar(100) default NULL,
  `BankName` varchar(100) default NULL,
  `BranchArea` varchar(100) default NULL,
  `BankCity` varchar(100) default NULL,
  `IFSCCode` varchar(100) default NULL,
  `Logo` varchar(100) default NULL,
  `Active` int(11) default '1',
  PRIMARY KEY  (`ProfileID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`ProfileID`, `ComapnyName`, `Address`, `City`, `Pincode`, `State`, `Mobile`, `Website`, `Email`, `OfficeNo`, `CustomerCareNo`, `ServiceNo`, `TINNo`, `CSTNo`, `AccountName`, `AccountNo`, `BankName`, `BranchArea`, `BankCity`, `IFSCCode`, `Logo`, `Active`) VALUES
(1, 'cyclezone', '1,Mnagal joyt', 'santrampur', '389260', 'Gujarat', '999999', 'www.google.com', 'admin@admin.com', '125', '1254687', '1246385', '12546', '23322', 'Mayur Panchal', '986563232112656', 'IDBI BANK LTD.', 'Siddhnath road', 'Vadodara', 'NDKD54654', '10134920151019Chrysanthemum.jpg', 1);
