-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2011 at 08:49 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `cybermanager`
--
CREATE DATABASE `cybermanager` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cybermanager`;

-- --------------------------------------------------------

--
-- Table structure for the table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(5) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(7) NOT NULL,
  `state` varchar(50) NOT NULL,
  `nation` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `contact_no` int(15) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `id_proof` varchar(150) NOT NULL,
  `id_proof_reg_no` varchar(20) NOT NULL,
  `id_expiry_date` date NOT NULL,
  `id_proof_image` varchar(1500) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1381 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `f_name`, `l_name`, `street`, `city`, `pincode`, `state`, `nation`, `dob`, `gender`, `contact_no`, `email_id`, `id_proof`, `id_proof_reg_no`, `id_expiry_date`, `id_proof_image`) VALUES
(1, 'kamal', 'Gavli', 'Relief', 'abad', 380001, 'Gujarat', 'India', '2011-12-12', 'Male', 212315, 'kamal.gavli@gmail.com', 'CollegeCard', '21231', '2012-12-12', '1301385038.jpg'),
(1372, 'Mahendra', 'Dhoni', 'Captain Home', 'Ranchi', 650021, 'Uttarakhand', 'India', '1970-07-10', 'Male', 2147483647, 'dhoni.mahendra@yahoo.com', 'DrivingLicense', 'UK-05-12540-21', '2024-12-20', '1300672943.jpg'),
(17, 'Montu', 'Montu', 'mstreet', 'mcity', 201010, 'IL', 'USA', '1970-10-25', 'Male', 1000002100, 'sada@ppuyg.com', 'Passport', '98114700', '2014-03-25', '1300673107.jpg'),
(1371, 'Ashish', 'Patel', 'Khodiya Street', 'Gandhinagar', 380027, 'Gujarat', 'India', '1985-11-10', 'Male', 989865012, 'ashish@patel.co.in', 'DrivingLicense', 'Gj-18-6980-668', '2020-01-10', '1300671994.jpg'),
(1374, 'khozen', 'bohra', 'khanpur', 'ahmedabad', 380001, 'gujarat', 'india', '1990-08-22', 'Male', 2147483647, 'khzm@k.com', 'DrivingLicense', '111200155', '3011-12-31', '1300673472.jpg'),
(1375, 'sadaf', 'mansuri', 'route # 32', 'edison', 6587, 'new jersey', 'usa', '0000-00-00', 'Male', 7145487, 'sadaf@sadaf.co.us', 'Passport', '9864001000', '0000-00-00', '1300673675.jpg'),
(1376, 'mohit', 'sinde', 'patekar street', 'mumbai', 4000012, 'maharastra', 'india', '1980-10-15', 'Male', 2147483647, 'mohit@mai.com', 'DrivingLicense', '6981000112544', '0000-00-00', '1300673778.jpg'),
(1377, 'fahad', 'chisty', 'nbg', 'abad', 7, 'guj', 'ind', '1990-01-15', 'Male', 2147483647, 'fd.c@gmail.com', 'Passport', '124567890', '2025-12-31', '1300674644.jpg'),
(1378, 'Ishmat', 'Rajpara', 'paldi', 'ahmedabad', 380007, 'gujarat', 'india', '2011-01-01', 'Female', 1236987001, 'ishmat.rajpara@gmail.com', 'Passport', '12990014700', '2020-01-31', '1300675271.jpg'),
(1379, 'Mahi', 'Shaikh', 'Route 212', 'NYC', 125401, 'NY', 'USA', '1986-01-10', 'Male', 1234567890, 'noemail@email.com', 'DrivingLicense', 'NYC-10-32001', '2010-12-31', '1300676123.jpg'),
(1380, 'Ricky', 'Ponting', 'Ponting Avenue', 'Sydney', 66501, 'Sydney', 'Australia', '1975-12-17', 'Male', 133544001, 'ricky@ponting.com', 'ElectionCard', '6666666666', '3011-12-31', '1300676479.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(5) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(250) NOT NULL,
  `service_rate` int(11) NOT NULL,
  `service_note` varchar(1500) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=210027 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_rate`, `service_note`) VALUES
(1, 'Surfing', 15, 'Per Hour'),
(2, 'Printing', 5, 'Per Page'),
(3, 'Scaning', 10, 'Per Page'),
(4, 'Web Cam', 5, 'Per Hour'),
(5, 'Head Phone', 5, 'Per Hour'),
(6, 'Extra Person', 5, 'Per Hour'),
(210026, 'Service Name', 12, 'This is note');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bill`
--

CREATE TABLE IF NOT EXISTS `tbl_bill` (
  `bill_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  `surfing_charge` double NOT NULL,
  `printing_charge` double NOT NULL,
  `scanning_charge` double NOT NULL,
  `webcam_charge` double NOT NULL,
  `headphone_charge` double NOT NULL,
  `outstanding` double NOT NULL,
  `extra_charge` double NOT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_bill`
--

INSERT INTO `tbl_bill` (`bill_id`, `login_id`, `entry_date`, `surfing_charge`, `printing_charge`, `scanning_charge`, `webcam_charge`, `headphone_charge`, `outstanding`, `extra_charge`) VALUES
(1, 0, '2011-03-29', 12, 1, 2, 3, 4, 5, 6),
(2, 2, '2011-03-29', 12, 10, 10, 10, 1, 10, 10),
(3, 2, '2011-03-29', 12, 10, 9, 8, 7, 6, 5),
(4, 1, '2011-03-21', 10, 0, 0, 0, 0, 0, 0),
(5, 1, '2011-03-21', 10, 5, 0, 0, 0, 0, 0),
(6, 1372, '2011-03-21', 15, 5, 5, 5, 5, 0, 5),
(7, 1371, '2011-03-21', 10, 5, 0, 0, 0, 0, 0),
(8, 1371, '2011-03-21', 0, 5, 0, 0, 0, 0, 0),
(9, 1, '2011-03-21', 10, 5, 5, 5, 5, 5, 5),
(10, 1, '2011-03-21', 0, 0, 0, 0, 0, 0, 0),
(11, 1, '2011-03-21', 10, 0, 0, 0, 0, 0, 0),
(12, 17, '2011-03-21', 15, 0, 0, 0, 0, 0, 0),
(13, 17, '2011-03-21', 0, 0, 0, 0, 0, 0, 0),
(14, 17, '2011-03-21', 15, 0, 0, 0, 0, -5, 0),
(15, 17, '2011-03-21', 15, 0, 0, 0, 0, -5, 0),
(16, 17, '2011-03-20', 15, 0, 0, 0, 0, -5, 0),
(17, 17, '2011-03-20', 15, 0, 0, 0, 0, -5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `loginid` int(11) NOT NULL AUTO_INCREMENT,
  `pcno` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `login_time` varchar(100) NOT NULL,
  `logout_time` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`loginid`, `pcno`, `userid`, `login_time`, `logout_time`, `status`) VALUES
(1, 5, 1, '19:14:05', '23:56:20', 1),
(2, 4, 8, '19:32:24', '19:36:11', 1),
(5, 2, 2, '20:01:24', '23:56:24', 1),
(6, 5, 17, '20:12:58', '23:56:27', 1),
(7, 1, 2, '23:58:58', '00:16:22', 1),
(8, 1, 2, '00:23:27', '01:26:03', 1),
(13, 1, 2, '13:26:30', '13:26:51', 1),
(12, 1, 2, '01:31:01', '01:32:13', 1),
(14, 1, 1, '03:04:19', '03:08:59', 1),
(15, 2, 1372, '03:04:31', '03:11:36', 1),
(16, 3, 1371, '03:04:47', '03:11:59', 1),
(17, 1, 1371, '03:44:28', '03:46:53', 1),
(18, 6, 1371, '03:48:46', '03:48:49', 1),
(19, 1, 1, '07:30:05', '07:36:46', 1),
(20, 6, 1, '07:54:46', '07:54:56', 1),
(21, 25, 17, '07:56:14', '07:56:18', 1),
(22, 1, 17, '07:56:43', '07:56:46', 1),
(23, 1, 17, '08:05:37', '08:05:41', 1),
(24, 1, 17, '08:09:05', '08:09:07', 1);
