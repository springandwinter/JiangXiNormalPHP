-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-01-06 16:34:56
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `userinfo`
--

-- --------------------------------------------------------

--
-- 表的结构 `culture`
--

CREATE TABLE IF NOT EXISTS `culture` (
  `tixian` varchar(23) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `biaozhi` varchar(23) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `wuzhi` varchar(23) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `jingshen` varchar(23) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `culture`
--

INSERT INTO `culture` (`tixian`, `biaozhi`, `wuzhi`, `jingshen`) VALUES
(' 基础设施', 'Best', 'Better', 'Best'),
('制度文化', 'Better', 'Best', 'Better'),
('校训文华', 'Better', 'Better', 'Best');

-- --------------------------------------------------------

--
-- 表的结构 `userinfomation`
--

CREATE TABLE IF NOT EXISTS `userinfomation` (
  `id` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pwd` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sex` varchar(6) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` varchar(12) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `userinfomation`
--

INSERT INTO `userinfomation` (`id`, `pwd`, `sex`, `phone`, `email`) VALUES
('123', '123', '男', '13457689098', '222@qq.com'),
('1308092034', '4758tgar', '男', '13576060931', '2998726934@qq.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
