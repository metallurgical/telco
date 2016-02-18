-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2016 at 09:03 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `email`, `telephone`, `address`, `address2`, `city`, `pos_code`, `country`, `region_state`, `customer_password`) VALUES
(4, 'wer', 'wer', 'wer', 'wer', 'wer', 'wer', 'e', '14', '', 'sd'),
(5, 'ee', 'ee', 'ee', 'ee', 'ee', 'ee', 'ee', '1', '', 'ee'),
(6, 'dd', 'dd', 'dd', 'dd', 'dd', 'dd', 'dd', '17', '', 'dd'),
(8, 'Ahmad', 'buburlambuk@hackers.com', '019876758', 'Wakaf Bunut', 'gaal', 'Pasir puteh', '16800', '', 'KELANTAN', 'qwe'),
(11, 'asda', 'dsfsf@', '234', 'fdsgfdg', 'fyhfgj', 'sdfsdf', '123', '', 'TERENGGANU', 'qwe');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_pic`, `product_price_unit`, `product_brand`, `product_category`, `product_description1`, `product_description2`) VALUES
(26, 'RJ 46 UTP LAN Cable', 'ramEraWcYNJNT85Um3WJRQ4efkBzV23KeKTBVnnRnrTi2YG9CdpmIaDoIgqO1.jpg', '20', 'IBM', 'Cable', 'High Quality Cat 6 Gigabit; Custom Made Cable;\r\n23AWG Solid Bare Copper;\r\nBlue/Grey Colour PVC Jacket;\r\nPass Fluke Channel Test;\r\nMeets ISO 9001 / UL / CE / FCC / RoHs;\r\nAvailable In 5m/10m/12m/13m;', ''),
(27, 'FLUKE Multimeter 83V Series', 'ramEraajfHIrdqSa9OI85hzbS61dMZI2XCgY3mrKSkH7o1k4Vo2AVzdILM2.jpg', '1000', 'IBM', 'Meter', 'Unique function for accurate voltage and frequency measurements on adjustable speed motor drives and other electrically noisy equipment (87V);Built-in thermometer conveniently allows you to take temperature readings without having to carry a separate instrument (87V);Optional magnetic hanger for easy set-up and viewing while freeing your hands for other tasks;arge digit display with bright, two-level backlight makes the 80- Series V significantly easier to read than older models', ''),
(28, 'Optical Power Meter', 'ramEraYYCXQEBbak11ddgbYZSMIiKjRKlrT1PqG7UXD9YhHYQrLlf1jldi3.jpg', '400', 'HP', 'Meter', 'Measurement range -70+10dBm,calibrated wavelengh : 850nm,1300nm,1310nm,1490nm,1550nm,1625nm;Measurement range -50+26dBm,calibrated wavelengh : 850nm,1300nm,1310nm,1490nm,1550nm,1625nm', ''),
(29, 'Jumpering Cable', 'ramEra7DmqGMOhRdgLZEmJqbFZP5n3rzPE7pkj28Aadb34apzz2Z9pFrmbKg4.jpg', '15', 'HP', 'Cable', 'Green and white colour;Length 250 metre', ''),
(30, 'BNC Connector', 'ramEraYd4DF48qBBRd5jDBCh66dEGMkP5G8GZNo3A6CNrfKTzpnKldk88p5.jpg', '25', 'IBM', 'Cable', 'Multi purpose connector between jumper cable', ''),
(31, 'Patch Cord', 'ramEraDzIje3zRLojJqBECAJWG6Y5FLAzbqF3GYSiaZLRjNG4RQWHre2TNg6.jpg', '20', 'HP', 'Cable', 'Low Insertion Loss;Easy to handle;Stable environment;Plug and play;High quality;Suitable for applications in Telecommunications, Unifi, LAN, FTTH, Optic fiber sensors, Testing instruments and etc', ''),
(32, 'Optical Light Source', 'ramEradnA9kKiAeN5eUVc74pnMRgnfKKpLV8h4DTz8XTJpVWZF9JeHgTSeTk7.jpg', '600', 'IBM', 'Meter', 'TL-512 Optical Optic Light Source wavelength;1310/1550nm;CW,270Hz,1KHz,2KHz;Compact size, backlight LDD display;Modulation at other wavelengths;High stability of the output power;Alternative 10 minutes Auto-off function conserving battery life;Maintenance CATV;Maintenance in Telecom;Fiber Optic Lab Testing;Other Fiber Optic Measurement', '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

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
