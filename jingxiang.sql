-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-03-19 16:37:36
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jingxiang`
--

-- --------------------------------------------------------

--
-- 表的结构 `51_admin`
--

CREATE TABLE IF NOT EXISTS `51_admin` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `userpass` varchar(100) DEFAULT NULL,
  `salt` varchar(50) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `telephone` varchar(16) DEFAULT NULL,
  `addtime` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `51_admin`
--

INSERT INTO `51_admin` (`id`, `username`, `userpass`, `salt`, `status`, `beizhu`, `telephone`, `addtime`) VALUES
(1, 'admin', 'd86eb09d26ec2a3dbf058576b69aa779', 'AQfVOeKdUPhckaLF', 1, '系统管理员', '13555555555', '2017-03-17 08:09:46');

-- --------------------------------------------------------

--
-- 表的结构 `51_content`
--

CREATE TABLE IF NOT EXISTS `51_content` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `qq1` varchar(12) DEFAULT NULL,
  `qq2` varchar(12) DEFAULT NULL,
  `shishicai` text,
  `beijingcaiche` text,
  `liuhecai` text,
  `liuhecainum` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `51_content`
--

INSERT INTO `51_content` (`id`, `qq1`, `qq2`, `shishicai`, `beijingcaiche`, `liuhecai`, `liuhecainum`) VALUES
(1, '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
