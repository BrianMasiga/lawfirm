-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2014 at 08:30 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nochp`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE IF NOT EXISTS `activity_log` (
  `activity_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  PRIMARY KEY (`activity_log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(11, 'jkev', '2013-12-28 19:38:34', 'Add Program Coordinator'),
(12, 'jkev', '2013-12-28 19:40:27', 'Add Program Coordinator q'),
(13, 'jkev', '2013-12-28 19:47:18', 'Add Program Coordinator Stephanie  Villanueva'),
(14, 'jkev', '2013-12-28 20:00:00', 'Delete Program Coordinator John Kevin Lorayna'),
(15, 'jkev', '2013-12-28 20:00:00', 'Delete Program Coordinator Stephanie  Villanueva'),
(16, 'jkev', '2013-12-28 20:03:17', 'Add Program Coordinator q q'),
(17, 'jkev', '2013-12-28 20:04:44', 'Edit Program Coordinator q q'),
(18, 'jkev', '2013-12-29 08:45:41', 'Delete Program Coordinator q q'),
(19, 'jkev', '2013-12-29 08:46:15', 'Add Program Coordinator test test'),
(20, 'jkev', '2014-01-02 09:57:59', 'Edit Program Coordinator Brial Paul Sablan'),
(21, 'jkev', '2014-01-02 09:58:44', 'Edit Program Coordinator testq q'),
(22, 'jkev', '2014-01-02 10:00:22', 'Edit Program Coordinator Brial Paul Sablan'),
(23, 'jkev', '2014-01-02 10:01:17', 'Add Program Coordinator Christian Sausa'),
(24, 'jkev', '2014-01-02 10:29:50', 'Add Program Coordinator Achilles Palma'),
(25, 'jkev', '2014-01-02 10:36:22', 'Add Program Coordinator Stephanie Villanueva'),
(26, 'jkev', '2014-01-02 10:49:23', 'Add Member  '),
(27, 'jkev', '2014-01-02 10:51:00', 'Add Member Sherwin Laylon'),
(28, 'jkev', '2014-01-02 18:38:26', 'Add User q'),
(29, 'jkev', '2014-01-02 18:45:24', 'Add User q'),
(30, 'jkev', '2014-01-02 18:45:54', 'Add User q'),
(31, 'jkev', '2014-01-02 18:46:12', 'Add User q'),
(32, 'jkev', '2014-01-02 18:47:18', 'Edit User q'),
(33, 'jkev', '2014-01-02 18:51:27', 'Edit User qw'),
(34, 'jkev', '2014-01-02 19:20:13', 'Edit User qw'),
(35, 'jkev', '2014-01-02 19:20:36', 'Edit User qw'),
(36, 'jkev', '2014-01-02 19:21:28', 'Edit User qw'),
(37, 'jkev', '2014-01-02 19:26:05', 'Add Program Coordinator e e'),
(38, 'jkev', '2014-01-02 19:26:12', 'Delete Program Coordinator e e'),
(39, 'jkev', '2014-01-02 19:31:41', 'Add User e'),
(40, 'jkev', '2014-01-02 19:31:49', 'Delete Program Coordinator e e'),
(41, 'jkev', '2014-01-03 09:09:25', 'Update Member Rodzilq Camatoq'),
(42, 'jkev', '2014-01-03 09:10:02', 'Add Member w w'),
(43, 'jkev', '2014-01-03 09:20:06', 'Delete Member Maricon Itona'),
(44, 'jkev', '2014-01-03 09:29:26', 'Add User q'),
(45, 'jkev', '2014-01-03 09:37:51', 'Delete  User q q'),
(46, 'jkev', '2014-01-03 09:37:59', 'Edit User jkev'),
(47, 'jkev', '2014-01-03 22:30:03', 'Add Member r r'),
(48, 'jkev', '2014-01-03 22:30:13', 'Delete Member r r'),
(49, 'jkev', '2014-01-03 22:31:06', 'Add Member w w'),
(50, 'jkev', '2014-01-03 22:31:59', 'Delete Member w w'),
(51, 'jkev', '2014-01-28 19:50:56', 'Add Member Brian Paul Sablan'),
(52, 'jkev', '2014-01-28 20:40:26', 'Add Dependents q q'),
(53, 'jkev', '2014-01-28 20:53:09', 'Add Dependents b b'),
(54, 'jkev', '2014-01-28 20:53:39', 'Add Dependents k k'),
(55, 'jkev', '2014-01-28 20:53:59', 'Add Dependents l l'),
(56, 'jkev', '2014-01-22 09:03:07', 'Add Dependents q q'),
(57, 'jkev', '2014-01-22 09:03:07', 'Add Dependents q q'),
(58, 'jkev', '2014-01-22 09:08:14', 'Add Dependents e e'),
(59, 'jkev', '2014-01-22 09:08:53', 'Add Dependents k k'),
(60, 'jkev', '2014-01-22 09:11:13', 'Add Dependents l l'),
(61, 'jkev', '2014-01-22 09:11:50', 'Add Dependents m g'),
(62, 'jkev', '2014-01-22 09:15:43', 'Add Dependents j l'),
(63, 'jkev', '2014-01-22 09:15:56', 'Add Dependents m '),
(64, 'jkev', '2014-01-22 20:47:51', 'Add Dependents q q'),
(65, 'jkev', '2014-01-22 20:55:03', 'Add Dependents q q'),
(66, 'jkev', '2014-01-22 20:59:28', 'Add Member q q'),
(67, 'jkev', '2014-01-22 20:59:48', 'Add Member q q'),
(68, 'jkev', '2014-01-22 21:01:17', 'Add Dependents q q'),
(69, 'jkev', '2014-01-22 21:02:07', 'Add Dependents q q'),
(70, 'jkev', '2014-01-22 21:03:33', 'Add Dependents m m'),
(71, 'jkev', '2014-01-22 21:04:02', 'Add Dependents l l'),
(72, 'jkev', '2014-01-22 21:04:27', 'Add Dependents k k'),
(73, 'jkev', '2014-01-22 21:06:44', 'Add Dependents k l'),
(74, 'jkev', '2014-01-22 21:07:04', 'Update Member q q'),
(75, 'jkev', '2014-01-23 12:26:04', 'Add Member test test'),
(76, 'jkev', '2014-01-23 12:26:27', 'Add Dependents q q'),
(77, 'jkev', '2014-01-23 12:26:37', 'Add Dependents m m'),
(78, 'jkev', '2014-01-23 12:26:51', 'Add Dependents k u'),
(79, 'jkev', '2014-01-25 17:03:11', 'Add User m'),
(80, 'jkev', '2014-01-25 17:04:12', 'Delete  User m m'),
(81, 'jkev', '2014-01-25 17:06:14', 'Edit User tephq'),
(82, 'jkev', '2014-01-25 17:06:27', 'Edit User teph'),
(83, 'jkev', '2014-01-26 19:31:56', 'Add Dependents k k'),
(84, 'jkev', '2014-01-26 19:34:19', 'Delete Member q q'),
(85, 'jkev', '2014-01-26 19:39:46', 'Add User m'),
(86, 'jkev', '2014-01-26 19:40:12', 'Delete  User m m'),
(87, 'jkev', '2014-01-26 19:42:49', 'Edit Program Coordinator Brial Paul Sablan'),
(88, 'jkev', '2014-01-26 19:43:04', 'Delete Program Coordinator Christian Sausa'),
(89, 'jkev', '2014-01-26 19:43:34', 'Add Program Coordinator q q'),
(90, 'jkev', '2014-01-26 19:43:42', 'Delete Program Coordinator q q'),
(91, 'jkev', '2014-01-27 10:47:22', 'Add User q'),
(92, 'jkev', '2014-01-31 10:20:17', 'Delete  User Stephanie villanueva'),
(93, 'jkev', '2014-01-31 10:20:17', 'Delete  User q q'),
(94, 'jkev', '2014-01-31 10:20:28', 'Add User admin');

-- --------------------------------------------------------

--
-- Table structure for table `dependents`
--

CREATE TABLE IF NOT EXISTS `dependents` (
  `dependent_id` int(11) NOT NULL AUTO_INCREMENT,
  `dependent_givenname` varchar(100) NOT NULL,
  `dependent_surname` varchar(100) NOT NULL,
  `dependent_middlename` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`dependent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `dependents`
--

INSERT INTO `dependents` (`dependent_id`, `dependent_givenname`, `dependent_surname`, `dependent_middlename`, `birthdate`, `relationship`, `member_id`) VALUES
(3, 'k', 'k', 'k', 'k', 'k', 24),
(4, 'l', 'l', 'l', 'l', 'l', 24),
(5, 'q', 'q', 'q', 'q', 'q', 24),
(6, 'q', 'q', 'q', 'q', 'q', 24),
(10, 'm', 'g', 'k', 'f', 'h', 23),
(11, 'j', 'l', 'r', 'k', 'p', 10),
(12, 'm', '', '', '', '', 10),
(13, 'q', 'q', 'q', 'q', '', 24),
(14, 'q', 'q', 'q', 'q', '', 24),
(17, 'm', 'm', 'm', 'm', 'm', 25),
(18, 'l', 'l', 'l', 'l', 'l', 25),
(19, 'k', 'k', 'k', 'k', 'k', 25),
(20, 'q', 'q', 'q', 'q', 'q', 26),
(21, 'm', 'm', 'm', 'm', 'm', 26),
(22, 'k', 'u', 'u', 'u', 'u', 26),
(23, 'k', 'k', 'k', 'k', 'k', 23);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `card_number` varchar(100) NOT NULL,
  `given_name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `place_of_birth` varchar(100) NOT NULL,
  `civil_status` varchar(50) NOT NULL,
  `voters_id` varchar(11) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `philhealth_membership` varchar(100) NOT NULL,
  `philhealth_number` varchar(11) NOT NULL,
  `philhealth_enrollment_sponsor` varchar(100) NOT NULL,
  `spouse_surname` varchar(50) NOT NULL,
  `spouse_given_name` varchar(50) NOT NULL,
  `spouse_middlename` varchar(50) NOT NULL,
  `name_of_employer` varchar(100) NOT NULL,
  `ave_income` varchar(11) NOT NULL,
  `employment_status` varchar(50) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `card_number`, `given_name`, `surname`, `middlename`, `sex`, `address`, `contact_no`, `age`, `date_of_birth`, `place_of_birth`, `civil_status`, `voters_id`, `postal_code`, `philhealth_membership`, `philhealth_number`, `philhealth_enrollment_sponsor`, `spouse_surname`, `spouse_given_name`, `spouse_middlename`, `name_of_employer`, `ave_income`, `employment_status`) VALUES
(10, '123456789', 'John Kevin', 'Lorayna', 'Amos', 'Male', 'Prk. Kalubihan Brgy. Mailum Bago City Negros Occidental', '09466651154', 20, '12/10/1993', 'Bago City', 'Single', '123456', '6100', 'Employed', '123456', 'none', 'Villanueva', 'Stephanie', 'Batoon', 'Freelancer', '8000', 'Contractual'),
(12, '20101361', 'Albert Kezzel', 'Naynay', 'Alit', 'Male', 'Talisay City', '123456789', 20, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '29000557', 'Brian Paul', 'Sablan', 'Diaz', 'Male', 'Bacolod City', '09466651154', 21, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '21100665', 'Dean Martin', 'Tingson', 'Lamis', 'Male', 'Dos Hermanas Talisay City', '67890074546', 21, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '21101227', 'Deo Christopher', 'Tribaco', 'Satoc', 'Male', 'Tabunan Bago City', '1234567787', 24, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, '21100695', 'Jared Reu', 'Windam', 'Pig-ao', 'Male', 'Talisay City', '8356173841242', 22, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, '20100331', 'Jorgielyn', 'Serfino', 'Calibre', 'Female', 'Municipality of Ilog', '23433464364', 21, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, '21100820', 'Miralyn', 'Pabalate', 'Flores', 'Female', 'Zone 2 E.B magalona', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, '21101042', 'Stephanie', 'Villanueva', 'Batoon', 'Female', 'HDA. Carmelo  E.B magalona', '24245122323', 18, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'ssdasd', 'Sherwin', 'Laylon', 'agi', 'Male', 'EB. Magalona', 'dd', 12, '', '', 'Single', '', '', '', '', '', '', '', '', '', '', ''),
(24, '6794265547', 'Brian Paul', 'Sablan', 'Diaz', 'Male', 'Bacolod City', '09466651154', 12, 'December 10 1993', 'Bacolod', 'Single', '9976582', '6100', '64829930', '39491020', '230040204', 'Salvatiera', 'Kimberly', 'dd', 'dsd', '', ''),
(26, '1234567893888', 'test', 'test', 'test', 'Male', 'test', '882399', 23, 'test', 'test', 'Single', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `program_coordinator`
--

CREATE TABLE IF NOT EXISTS `program_coordinator` (
  `program_coordinator_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `program_coordinator_in` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`program_coordinator_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `program_coordinator`
--

INSERT INTO `program_coordinator` (`program_coordinator_id`, `firstname`, `lastname`, `username`, `password`, `program_coordinator_in`, `status`) VALUES
(7, 'Brial Paul', 'Sablan', 'xiaq', 'xiaq', 'Negros Occidental Provincial Hospital', ''),
(9, 'Achilles', 'Palma', 'Aki', 'Aki', 'Cadiz City Hospital', ''),
(10, 'Stephanie', 'Villanueva', 'tephai', 'tephai', 'E.B Magalona Hospital', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `class_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=209 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `firstname`, `lastname`, `class_id`, `username`, `password`, `location`, `status`) VALUES
(113, 'Clifford', 'Ledesma', 13, '21100324', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(112, 'Raymond', 'Serion', 13, '2700372', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(111, 'Mark Dominic', 'Sayon', 13, '21100867', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(108, 'Kaye Angela', 'Cueva', 13, '21101151', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(105, 'Neljie', 'Guirnela', 13, '21101131', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(106, 'Razel', 'Palermo', 13, '29000676', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(103, 'Jade', 'Gordoncillo', 13, '21100617', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(104, 'Felix Kirby', 'Ubas', 13, '21100277', 'lms10117', 'uploads/1238763_688342754527339_915323123_n.jpg', 'Unregistered'),
(100, 'Jamilah', 'Lonot', 13, '21100303', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(101, 'Xenia Jane', 'Billones', 13, '21100318', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(102, 'Carell', 'Catuburan', 13, '21101124', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(97, 'Mary Joy', 'Lambosan', 13, '20101289', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(98, 'Christine Joy', 'Macaya', 13, '21100579', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(95, 'Ergin Joy', 'Satoc', 13, '21101142', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(93, 'John Kevin ', 'Lorayna', 7, '111', 'teph', 'uploads/3094_384893504898082_1563225657_n.jpg', 'Registered'),
(94, 'Leah Mae', 'Padilla', 13, '21100471', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(76, 'Jamaica Mae', 'Alipe', 13, '21100555', '123', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Registered'),
(107, 'Jose Harry', 'Polondaya', 13, '29001002', 'florypis', 'uploads/29001002.jpg', 'Registered'),
(110, 'Zyryn', 'Corugda', 13, '21100881', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(109, 'Rena', 'Lamberto', 13, '29001081', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(99, 'Ryan Teofilo', 'Malbata-an', 13, '21100315', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(96, 'Glecy Marie', 'Navarosa', 13, '20101436', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(75, 'Miralyn', 'Pabalate', 13, '21100855', 'em', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(74, 'Ma. Nonie', 'Mendoza', 13, '21100913', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(73, 'Stephanie', 'Villanueva', 13, '21101042', 'tephai', 'uploads/3094_384893504898082_1563225657_n.jpg', 'Registered'),
(72, 'Jayvon', 'Pig-ao', 13, '21100547', 'test', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(71, 'Noli', 'Mendoza', 13, '21100556', 'noledel', 'uploads/Africa.jpg', 'Registered'),
(134, 'Victor Anthony', 'Jacobo', 12, '21101050', 'akositon', 'uploads/win_boot_screen_16_9_by_medi_dadu-d4s7dc1.gif', 'Registered'),
(135, 'Albert Kezzel', 'Naynay', 14, '20101361', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(136, 'Jorgielyn', 'Serfino', 7, '20100331', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(137, 'Wina Mae', 'Espenorio', 8, '20100447', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(138, 'Brian Paul', 'Sablan', 7, '29000557', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(139, 'Rodzil', 'Camato', 7, '20100RC', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(140, 'Dean Martin', 'Tingson', 14, '21100665', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(141, 'Jared Reu', 'Windam', 15, '21100695', 'iloveyoujam', 'uploads/1463666_678111108874417_1795412912_n.jpg', 'Registered'),
(142, 'Lee Ann', 'Vertucio', 12, '21100351', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(143, 'Danica', 'Lamis', 12, '21100396', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(144, 'Neovi', 'Devierte', 12, '21100557', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(145, 'Eril Pio', 'Mercado', 12, '21100291', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(146, 'Johnedel', 'Bauno', 12, '21100411', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(147, 'Jerwin', 'Delos Reyes', 12, '21100369', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(148, 'Jendrix', 'Victosa', 12, '21100431', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(149, 'Jebson', 'Tordillos', 12, '21100406', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(150, 'Jethro', 'Pansales', 12, '21101273', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(151, 'Karyl June', 'Bacobo', 12, '21100895', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(152, 'Kristelle Shaine', 'Rubi', 12, '21101063', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(153, 'Richelle', 'Villarmia', 12, '20101392', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(154, 'Mae Ann', 'Panugaling', 12, '21100904', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(155, 'Ma. Roxette', 'Infante', 12, '21100421', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(156, 'Savrena Joy', 'Rael', 12, '2100287', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(157, 'Ace John', 'Casuyon', 12, '21100393', 'DianaraSayon', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Registered'),
(158, 'Rose Mae', 'Pido', 12, '21101195', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(159, 'Mary Ann', 'Panaguiton', 12, '21100701', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(162, 'kimberly kaye', 'salvatierra', 14, '21101182', 'kimzteng', 'uploads/29001002.jpg', 'Registered'),
(164, 'Alit', 'Arvin', 14, '20101605', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(165, 'Ana Mae', 'Alquizar', 14, '21100785', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(166, 'Thessalonica', 'Arroz', 14, '21100651', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(167, 'Leslie', 'Campo', 14, '21100265', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(168, 'Ace', 'Casolino', 14, '27000921', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(169, 'Michael Jed', 'Flores', 14, '21100820', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(172, 'Hennie Rose', 'Laz', 14, '21100805', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(171, 'Joy', 'Macahilig', 14, '21100464', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(173, 'Ma. Nieva', 'Manuel ', 14, '21100711', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(174, 'Devina', 'Navarro', 14, '21100711', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(175, 'Aimee', 'Orlido', 14, '21100654', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(176, 'Mary Grace', 'Quizan', 14, '21100772', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(177, 'John Christopher', 'Reguindin', 14, '21100418', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(178, 'Mary Ann', 'Somosa', 14, '21101150', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(179, 'Marrianne', 'Tumala', 14, '21100710', 'test', 'uploads/win_boot_screen_16_9_by_medi_dadu-d4s7dc1.gif', 'Registered'),
(180, 'Deo Christopher', 'Tribaco', 14, '21101227', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(181, 'Jerson', 'Vargas', 14, '21100819', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(182, 'Valencia', 'Jeralice', 14, '29000405', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(183, 'Cristine', 'Yanson', 14, '21101148', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(184, 'Ariane', 'Alix', 17, '21201166', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(185, 'Mark Arvin', 'Arandilla', 17, '21201453', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(186, 'Ryan Carl', 'Biaquis', 17, '21201244', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(187, 'Ria', 'Bitar', 17, '21201282', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(188, 'Jeremae', 'Bustamante', 17, '21200798', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(189, 'Rhen Mark', 'Callado', 17, '21201012', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(190, 'Ma. Geraldine', 'Carisma', 17, '21201219', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(191, 'Jenny', 'Casapao', 17, '21200855', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(192, 'Welson', 'Castro', 17, '120733', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(193, 'Kimberly Hope', 'Centina', 17, '21201338', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(194, 'Sandra', 'Gomez', 17, '21201335', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(195, 'Dona Jean', 'Guardialao', 17, '21201113', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(196, 'Jeara Mae', 'Guttierrez', 17, '21200782', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(197, 'Mary Joy', 'Jimenez', 17, '21201437', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(198, 'Cyril', 'Lambayong', 17, '21201163', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(199, 'Angelie', 'Lape', 17, '21201356', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(200, 'Jamine', 'Navarosa', 17, '21201115', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(201, 'Allen Joshua', 'Nicor', 17, '21201430', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(202, 'Charis', 'Onate', 17, '21200984', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(203, 'Ikea', 'Padonio', 17, '20100527', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(204, 'Marissa', 'Pasco', 17, '21200935', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(205, 'Kenneth', 'Sayon', 17, '21201268', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(206, 'Mary Grace', 'Morales', 14, '21100293', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(207, 'Danica', 'Delarmente', 14, '21100613', '', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Unregistered'),
(208, 'Irish Dawn', 'Belo', 19, '21300413', 'olebirish', 'uploads/Desert.jpg', 'Registered');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(14, 'jkev', 'jkev', 'john kevin', 'lorayna'),
(16, 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `user_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`user_log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `user_id`) VALUES
(1, 'jkev', '2014-01-22 21:45:22', '2014-02-04 15:25:13', 14),
(2, 'jkev', '2014-01-23 12:20:35', '2014-02-04 15:25:13', 14),
(3, 'xia', '2014-01-23 12:27:33', '2014-01-24 10:45:32', 7),
(4, 'jkev', '2014-01-23 12:28:21', '2014-02-04 15:25:13', 14),
(5, 'jkev', '2014-01-23 12:31:36', '2014-02-04 15:25:13', 14),
(6, 'jkev', '2014-01-23 13:00:16', '2014-02-04 15:25:13', 14),
(7, 'xia', '2014-01-24 10:45:21', '2014-01-24 10:45:32', 7),
(8, 'jkev', '2014-01-24 10:45:57', '2014-02-04 15:25:13', 14),
(9, 'jkev', '2014-01-25 10:48:29', '2014-02-04 15:25:13', 14),
(10, 'jkev', '2014-01-25 16:54:46', '2014-02-04 15:25:13', 14),
(11, 'jkev', '2014-01-25 16:55:00', '2014-02-04 15:25:13', 14),
(12, 'jkev', '2014-01-26 19:14:57', '2014-02-04 15:25:13', 14),
(13, 'aki', '2014-01-26 19:44:23', '2014-02-04 15:26:05', 9),
(14, 'jkev', '2014-01-27 10:44:47', '2014-02-04 15:25:13', 14),
(15, 'jkev', '2014-01-30 13:30:50', '2014-02-04 15:25:13', 14),
(16, 'jkev', '2014-01-30 13:31:34', '2014-02-04 15:25:13', 14),
(17, 'aki', '2014-01-30 13:31:56', '2014-02-04 15:26:05', 9),
(18, 'jkev', '2014-01-30 16:50:21', '2014-02-04 15:25:13', 14),
(19, 'aki', '2014-01-31 10:16:20', '2014-02-04 15:26:05', 9),
(20, 'jkev', '2014-01-31 10:17:46', '2014-02-04 15:25:13', 14),
(21, 'jkev', '2014-02-04 15:14:33', '2014-02-04 15:25:13', 14),
(22, 'jkev', '2014-02-04 15:21:45', '2014-02-04 15:25:13', 14),
(23, 'aki', '2014-02-04 15:25:21', '2014-02-04 15:26:05', 9),
(24, 'jkev', '2014-02-04 15:26:28', '', 14);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
