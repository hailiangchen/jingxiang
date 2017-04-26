-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-04-26 19:08:59
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
  `weburl` varchar(50) DEFAULT NULL,
  `qishu` varchar(10) DEFAULT NULL,
  `loginurl1` varchar(200) DEFAULT NULL,
  `loginurl2` varchar(200) DEFAULT NULL,
  `loginurl3` varchar(200) DEFAULT NULL,
  `register1` varchar(200) DEFAULT NULL,
  `register2` varchar(200) DEFAULT NULL,
  `register3` varchar(200) DEFAULT NULL,
  `descssc` varchar(500) DEFAULT NULL,
  `descbjsc` varchar(500) DEFAULT NULL,
  `desclhc` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `51_content`
--

INSERT INTO `51_content` (`id`, `qq1`, `qq2`, `shishicai`, `beijingcaiche`, `liuhecai`, `liuhecainum`, `weburl`, `qishu`, `loginurl1`, `loginurl2`, `loginurl3`, `register1`, `register2`, `register3`, `descssc`, `descbjsc`, `desclhc`) VALUES
(1, '123456', '123454', 'sdfasdf\r\nsdfasdfas\r\nsdfasdfa\r\nasdfasdf\r\nasdfasdf\r\nsdflksdjflasdf\r\nsdfsdfasd\r\nsdfgasdfa', 'sdfasdf', 'sdfasdf', '21,34,43,11,1,2,3,3', 'www.ceshi.com', '12', 'www.ceshi.com', 'www.ceshi.com', 'www.ceshi.com', 'images/101372481951563141112.png', 'images/648141332101111595127.png', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `51_payorder`
--

CREATE TABLE IF NOT EXISTS `51_payorder` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `paytype` int(1) DEFAULT NULL,
  `payamount` decimal(10,0) DEFAULT NULL,
  `orderno` varchar(50) DEFAULT NULL,
  `addtime` varchar(30) DEFAULT NULL,
  `client` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `51_payorder`
--

INSERT INTO `51_payorder` (`id`, `username`, `paytype`, `payamount`, `orderno`, `addtime`, `client`) VALUES
(1, 'user', 1, '500', '56281104739', NULL, 1),
(2, 'ceshi', 2, '600', '91048127356', NULL, 1),
(3, 'aaa', 1, '345', '83542761091', '2017-04-25 23:49:53', 1),
(4, '测试', 1, '324234', '75106231948', '2017-04-26 16:44:59', 1),
(5, 'cddg', 1, '2222', '26849135107', '2017-04-26 16:45:40', 1),
(6, 'ceshi', 1, '1111', '35961042781', '2017-04-26 16:46:08', 1),
(7, 'ceshi', 1, '123', '58391072164', '2017-04-26 17:50:59', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
