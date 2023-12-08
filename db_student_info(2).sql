-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2019 at 05:00 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_student_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginnewpage`
--

CREATE TABLE IF NOT EXISTS `loginnewpage` (
  `Username` varchar(20) NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginnewpage`
--

INSERT INTO `loginnewpage` (`Username`, `Password`) VALUES
('Admin', 0),
('Admin', 123),
('Alan Binu', 123),
('Admin', 123),
('Admin', 123);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_basicinfo`
--

CREATE TABLE IF NOT EXISTS `tbl_basicinfo` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`student_id`),
  KEY `batch_id` (`batch_id`,`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tbl_basicinfo`
--

INSERT INTO `tbl_basicinfo` (`student_id`, `name`, `email`, `user_name`, `password`, `batch_id`, `course_id`) VALUES
(15, 'asnbbb', 'aks@aks.com', 'aks', 'Aa123@', 1, 1),
(16, 'binu', 'binu@hhjh.mnjjn', 'binu', 'Aa123@', 1, 1),
(17, 'albin', 'albin@ad.dsa', 'asd', 'asd', 3, 2),
(18, 'abcd', 'abcd@gf.hgg', 'abcd', '123', 3, 1),
(19, 'denny', 'denny@co.com', 'denny', '123', 3, 2),
(20, 'sree', 'sree@sree.sree', 'sree', '123', 4, 3),
(21, 'tony', '', '', '', 0, 0),
(22, 'tony', 'tony@tony.tony', 'tony', '123', 1, 2),
(23, 'jhf', 'albin@ad.dsa', 'hij', 'Aa@2456789', 0, 0),
(24, 'abcd', 'abcd@gf.hgg', 'k', 'aA2*4567890', 0, 0),
(25, 'asd', 'abcd@gf.hgg', 'asd', 'Aa@2343556', 0, 0),
(26, 'za', 'abcd@gf.hgg', 'as', 'Aa@324545543', 0, 0),
(27, 'uhj', 'abcd@gf.hgg', 'h', '7yL45678*8', 0, 0),
(28, 'asd', 'akshshj@akasl.com', 'asd', 'Aa@3253657578', 0, 0),
(30, 'alan', 'alan@gg.com', 'alan', 'Aqwerty123', 5, 4),
(31, 'Alan Binu', 'alanbinu5@gmail.com', 'alanbinu5@gmail.com', 'Alan123@', 1, 1),
(32, 'alan', 'affffdffd@gmail.com', '789', 'Qwerty123', 1, 1),
(33, 'hvgfgfgff', 'gdggdggdhhdhbcd@123.com', 'abcd123', 'Aggdhhhdhhd1233', 1, 1),
(34, 'Albin Antony', 'albin@ad.dsa', 'albin', 'Aa123@090', 1, 5),
(35, 'fdsfdfd', 'dsvfgdvgf@387.dhsg', 'aaaa', 'Aa109@aa', 3, 5),
(36, 'sherin john', 'sherinjohn@gmail.com', 'sherin300', 'Sherin@123', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_batch`
--

CREATE TABLE IF NOT EXISTS `tbl_batch` (
  `batch_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `batch` varchar(40) NOT NULL,
  PRIMARY KEY (`batch_id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_batch`
--

INSERT INTO `tbl_batch` (`batch_id`, `course_id`, `batch`) VALUES
(1, 1, '2017-2020'),
(2, 1, 'ss'),
(3, 1, 'ss'),
(4, 2, '2012-2015'),
(5, 2, '2020-2023'),
(6, 1, ''),
(7, 2, '2017-2020');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_batch1`
--

CREATE TABLE IF NOT EXISTS `tbl_batch1` (
  `batch_id` int(11) NOT NULL AUTO_INCREMENT,
  `batch` varchar(40) NOT NULL,
  PRIMARY KEY (`batch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_batch1`
--

INSERT INTO `tbl_batch1` (`batch_id`, `batch`) VALUES
(1, '2017-2020'),
(3, '2012-2015'),
(4, '2018-2021'),
(5, '2019-2022');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blood`
--

CREATE TABLE IF NOT EXISTS `tbl_blood` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_group` varchar(8) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_blood`
--

INSERT INTO `tbl_blood` (`b_id`, `b_group`) VALUES
(1, 'A+'),
(2, 'A-'),
(3, 'B-'),
(4, 'B+'),
(5, 'O-'),
(6, 'O+'),
(7, 'AB-'),
(8, 'AB+');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE IF NOT EXISTS `tbl_course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(40) NOT NULL,
  `short_name` varchar(20) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_name`, `short_name`) VALUES
(1, 'Bachler of Computer Application', 'BCA'),
(2, 'master of computer  application', 'MCA'),
(3, 'bachelor of buiseness management', 'BBA'),
(4, 'bachelor of buiseness management', 'BBA'),
(6, 'master of computer  application', 'MCA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_genter`
--

CREATE TABLE IF NOT EXISTS `tbl_genter` (
  `genter_id` int(11) NOT NULL AUTO_INCREMENT,
  `genter` varchar(40) NOT NULL,
  PRIMARY KEY (`genter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_genter`
--

INSERT INTO `tbl_genter` (`genter_id`, `genter`) VALUES
(1, 'male'),
(2, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE IF NOT EXISTS `tbl_location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(40) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`location_id`, `location`) VALUES
(1, 'Thodupuzha'),
(2, 'kalloorkad'),
(3, 'Muvattupuzha'),
(4, 'Kaloor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manager_login`
--

CREATE TABLE IF NOT EXISTS `tbl_manager_login` (
  `manager_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`manager_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_manager_login`
--

INSERT INTO `tbl_manager_login` (`manager_id`, `username`, `password`) VALUES
(1, 'manager12', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_religion`
--

CREATE TABLE IF NOT EXISTS `tbl_religion` (
  `religion_id` int(11) NOT NULL AUTO_INCREMENT,
  `religion` varchar(20) NOT NULL,
  PRIMARY KEY (`religion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_religion`
--

INSERT INTO `tbl_religion` (`religion_id`, `religion`) VALUES
(1, 'gfzgfg'),
(2, 'hindhu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stu_all_details`
--

CREATE TABLE IF NOT EXISTS `tbl_stu_all_details` (
  `Stu_id` int(11) NOT NULL AUTO_INCREMENT,
  `genter_id` int(11) NOT NULL,
  `Father_name` varchar(20) NOT NULL,
  `Father_job` varchar(20) NOT NULL,
  `Mother_name` varchar(20) NOT NULL,
  `Mother_job` varchar(20) NOT NULL,
  `Guardian_name` varchar(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Guardian_job` varchar(20) NOT NULL,
  `Relation` varchar(20) NOT NULL,
  `10th_reg_no` int(11) NOT NULL,
  `10th_result` float NOT NULL,
  `10th_school` varchar(20) NOT NULL,
  `12th_reg_no` int(11) NOT NULL,
  `12th_result` float NOT NULL,
  `12th_school` varchar(20) NOT NULL,
  `location_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `Religion_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `approve` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Stu_id`),
  KEY `student_id` (`student_id`),
  KEY `genter_id` (`genter_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_stu_all_details`
--

INSERT INTO `tbl_stu_all_details` (`Stu_id`, `genter_id`, `Father_name`, `Father_job`, `Mother_name`, `Mother_job`, `Guardian_name`, `Qualification`, `Guardian_job`, `Relation`, `10th_reg_no`, `10th_result`, `10th_school`, `12th_reg_no`, `12th_result`, `12th_school`, `location_id`, `b_id`, `Religion_id`, `student_id`, `approve`) VALUES
(5, 0, 'kjgh', 'jkg', 'jkgh', 'jkg', 'jhg', 'gh', 'gkj', 'kh', 2147483647, 50, 'j', 346546, 40, 'jhg', 3, 2, 2, 17, 1),
(3, 0, 'dad', 'job', 'mom', 'job', 'gur', 'qul', 'job', 'rel', 1203232, 100, 'schol', 2147483647, 50, 'school', 1, 4, 1, 15, 1),
(4, 0, 'dad', 'job', 'mom', 'job', 'gur', 'qul', 'job', 'rel', 0, 60, 'schol', 0, 55, 'school', 2, 1, 1, 16, 1),
(7, 0, 'fdhd', 'gds', 'dfsa', 'gs', 'dfh', 'das', 'sa', 'sa', 4, 81, 'ds', 0, 65, '', 2, 0, 0, 18, 1),
(8, 1, '', 'da', 'dda', 'ad', 'aa', 'd', 'ad', 'ad', 1556522155, 90, 'da', 13114, 56, 'a', 1, 2, 2, 19, 1),
(9, 1, 'hglh', 'ghl', 'llhkg', 'hgkh', 'hk', 'g', 'gkgkh', 'gkhglkgghk', 13543, 40, 'kgklg', 2147483647, 75, 'asdasf', 2, 2, 2, 20, 1),
(11, 1, 'weewewr', 'ssghshhs', 'sggsghsh', 'sttwyywy', 'asdff', 'vvbbvb', 'hjjkkk', 'eetty', 789456, 80, 'tryyruuttii', 456123, 70, 'ghjklnmnm', 1, 1, 2, 32, 1),
(10, 1, 'Binu V James', 'Busniss', 'Jasmi Binu', 'House wife', 'Binu V James', 'Degree', 'Busniss', 'Father', 258963, 70, 'kadalikad', 369852, 80, 'Muthalakodam', 1, 1, 2, 31, 1),
(12, 1, 'aaaa', 'cacsc', 'sacax', 'fdwdxa', 'dqdd', 'wdsas', 'sasdsd', 'ddsdds', 1321344, 0, 'dsdas', 23541, 81, 'vdsfsd', 1, 1, 2, 20, 0),
(13, 1, 'Antony', 'acfds', 'Elsa', 'sfrfrfs', 'ffefef', 'eefsd', 'dfwde', 'defeeee', 634546, 0, 'fewgtgfe', 53656, 91, 'hdshf', 1, 1, 2, 34, 0),
(14, 2, 'fdffdfd', ',mfndf', 'skjkjdf', 'efejhfd', 'hehf', 'hfhegf', 'uheufh', 'whudhwdb', 15451, 0, 'jfhejfh', 87454156, 100, 'bfjbf', 3, 4, 1, 35, 0),
(15, 0, '', '', '', '', '', '', '', '', 0, 0, '', 0, 0, '', 0, 0, 0, 36, 2),
(16, 1, 'Binu', 'office worker', 'Lissa', 'house wife', 'Binu', 'bca', 'office worker', 'hindhu', 2147483647, 77, 'imhs kaloor', 2147483647, 88, 'st.hss kalloorkad', 1, 3, 2, 36, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
