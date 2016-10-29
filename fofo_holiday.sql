-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-10-26 17:16:22
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dedecmsv57utf8sp1`
--

-- --------------------------------------------------------

--
-- 表的结构 `fofo_holiday`
--

CREATE TABLE IF NOT EXISTS `fofo_holiday` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `h_name` varchar(50) NOT NULL,
  `h_photo` varchar(13) NOT NULL,
  `h_reason` varchar(5) NOT NULL,
  `h_beizhu` varchar(100) NOT NULL,
  `h_time` datetime NOT NULL,
  `h_day` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `fofo_holiday`
--

INSERT INTO `fofo_holiday` (`id`, `h_name`, `h_photo`, `h_reason`, `h_beizhu`, `h_time`, `h_day`) VALUES
(3, '成帅帅', '15357666546', '3', '', '0000-00-00 00:00:00', 0),
(4, '谁谁谁', '15357666546', '1', '', '2010-10-10 10:10:00', 50);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
