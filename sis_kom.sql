-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2012 at 09:42 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sis_kom`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pos_code` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `region_state` varchar(20) NOT NULL,
  `customer_password` varchar(30) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `email`, `telephone`, `address`, `address2`, `city`, `pos_code`, `country`, `region_state`, `customer_password`) VALUES
(4, 'wer', 'wer', 'wer', 'wer', 'wer', 'wer', 'e', '14', '', 'sd'),
(5, 'ee', 'ee', 'ee', 'ee', 'ee', 'ee', 'ee', '1', '', 'ee'),
(6, 'dd', 'dd', 'dd', 'dd', 'dd', 'dd', 'dd', '17', '', 'dd'),
(8, 'Ahmad', 'buburlambuk@hackers.com', '019876758', 'Wakaf Bunut', 'gaal', 'Pasir puteh', '16800', '', 'KELANTAN', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `message_mail`
--

CREATE TABLE IF NOT EXISTS `message_mail` (
  `message_mail_id` int(5) NOT NULL AUTO_INCREMENT,
  `name_sender` varchar(50) NOT NULL,
  `email_sender` varchar(50) NOT NULL,
  `enquiry_sender` text NOT NULL,
  PRIMARY KEY (`message_mail_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `message_mail`
--

INSERT INTO `message_mail` (`message_mail_id`, `name_sender`, `email_sender`, `enquiry_sender`) VALUES
(1, 'ssss', 'eeee@rrr', 'fdfdfdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdffdfdfdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(8) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `product_pic` varchar(200) NOT NULL,
  `product_price_unit` varchar(30) NOT NULL,
  `product_brand` varchar(30) NOT NULL,
  `product_category` varchar(30) NOT NULL,
  `product_description1` text NOT NULL,
  `product_description2` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_pic`, `product_price_unit`, `product_brand`, `product_category`, `product_description1`, `product_description2`) VALUES
(10, 'IBM PC', 'resizeProduct_033.JPG', '1300', 'IBM', 'Desktop', 'Intel i5, core tu duor.', 'RAM DDR3 2GB, '),
(8, 'Acer Pc', 'c283-1216-main01-jl.JPG', '1500', 'ACER', 'Desktop', 'More powerful Intel Core 2 Duo. ', 'Ram DDR 2 , CPU 3.5ghz.'),
(9, 'Compaq PC', 'resizeProduct_036.JPG', '1700', 'COMPAQ', 'Desktop', 'More powerful Intel premium. ', 'Ram DDR 2 , CPU 3.1ghz.'),
(11, 'Speaker Altec Lansing', '643-1840-home.JPG', '300', 'ACER', 'Component', 'Subwoofer, new brand.', 'Twiter full condition.'),
(12, 'Acer speaker', '679-1983-home.JPG', '500', 'ACER', 'Component', 'Subwoofer full stage, 2 base.', 'Complete with steroe.'),
(13, 'Acer speaker', '696-2012-home.JPG', '450', 'ACER', 'Component', 'Home Dolby. IO back end.', 'Skin black, good inter.'),
(14, 'Laptop Sony Vaio', 'B746261.JPG', '2300', 'SONY', 'Laptop/Notebook', 'RAM DDR 2, CPU 2.3 ghz.', 'Screen 14" LCD, USB 2.0 transfer.'),
(15, 'Laptop Sony  Vaio Black', 'B746237.JPG', '3000', 'SONY', 'Laptop/Notebook', 'RAM DDR 3 4GB, CPU 2.9 ghz.', 'Screen 14" LCD, USB 2.0 transfer.');

-- --------------------------------------------------------

--
-- Table structure for table `product_buy`
--

CREATE TABLE IF NOT EXISTS `product_buy` (
  `product_buy_id` int(5) NOT NULL AUTO_INCREMENT,
  `product_id` int(5) NOT NULL,
  `customer_id` int(5) NOT NULL,
  `product_name` varchar(10) NOT NULL,
  `product_price_unit` varchar(10) NOT NULL,
  PRIMARY KEY (`product_buy_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `product_buy`
--

INSERT INTO `product_buy` (`product_buy_id`, `product_id`, `customer_id`, `product_name`, `product_price_unit`) VALUES
(41, 11, 8, '', '300'),
(40, 15, 8, '', '3000'),
(31, 9, 6, '', '1700'),
(39, 9, 8, '', '1700'),
(29, 15, 6, '', '3000'),
(34, 12, 6, '', '500');

-- --------------------------------------------------------

--
-- Table structure for table `staff_profile`
--

CREATE TABLE IF NOT EXISTS `staff_profile` (
  `id_staff_profile` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `staff_no` varchar(30) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `staff_ic` varchar(30) NOT NULL,
  `staff_age` int(5) NOT NULL,
  `staff_telefon` varchar(30) NOT NULL,
  `staff_jawatan` varchar(30) NOT NULL,
  `staff_address` text NOT NULL,
  PRIMARY KEY (`id_staff_profile`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `staff_profile`
--

INSERT INTO `staff_profile` (`id_staff_profile`, `user_id`, `staff_no`, `staff_name`, `staff_ic`, `staff_age`, `staff_telefon`, `staff_jawatan`, `staff_address`) VALUES
(72, 95, 'wer', 'wer', 'wer', 0, 'wer', 'Store', 'wer'),
(71, 94, 'wer', '332', 'we', 0, 'wer', 'Store', 'ewer'),
(70, 93, '23', 'rr', '34', 2, '234', 'Casher', 'sfdf'),
(69, 92, '23', 'akk', '8978', 12, '213423', 'Casher', 'sdfsdf'),
(68, 91, '23', 'faiz', '8978', 12, '213423', 'Casher', 'sdfsdf'),
(67, 90, '23', 'juju', '89', 2, 'sdf', 'Casher', 'fsdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `category`) VALUES
(95, 'wer', 'wer', 'staff'),
(94, 'wer', 'we', 'staff'),
(93, '23', '34', 'staff'),
(92, '23', '8978', 'staff'),
(50, 'admin', 'admin', 'admin'),
(91, '23', '8978', 'staff'),
(90, '23', '89', 'staff');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
