-- phpMyAdmin SQL Dump
-- version 4.2.8
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-09-28 18:25:52
-- 服务器版本： 5.6.20
-- PHP Version: 5.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `weshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `address`
--

CREATE TABLE IF NOT EXISTS `address` (
`id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `province` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(99) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `address`
--

INSERT INTO `address` (`id`, `user_id`, `province`, `city`, `area`, `detail`) VALUES
(2, 24, '山东', '青岛', '市南', '123'),
(3, 24, '山东', '青岛', '111', '222'),
(4, 24, '山东', '青岛', '333', '222');

-- --------------------------------------------------------

--
-- 表的结构 `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `goods_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `name` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`id`, `name`, `count`) VALUES
(1, '素斋', 2),
(2, '测试', 3);

-- --------------------------------------------------------

--
-- 表的结构 `city`
--

CREATE TABLE IF NOT EXISTS `city` (
`id` int(11) NOT NULL,
  `city` varchar(25) DEFAULT NULL,
  `area` varchar(25) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `city`
--

INSERT INTO `city` (`id`, `city`, `area`, `status`, `parent`) VALUES
(5, '青岛', NULL, 1, 0),
(6, NULL, '市南区', 2, 5),
(7, NULL, '市北区', 2, 5),
(8, NULL, '崂山区', 2, 5),
(9, NULL, '李沧区', 2, 5),
(10, NULL, '黄岛区', 2, 5),
(11, NULL, '城阳区', 2, 5),
(12, '济南', NULL, 1, 0),
(13, NULL, '历下区', 2, 12),
(14, NULL, '市中区', 2, 12),
(15, NULL, '槐荫区', 2, 12),
(16, NULL, '天桥区', 2, 12),
(17, NULL, '历城区', 2, 12),
(18, NULL, '长清区', 2, 12);

-- --------------------------------------------------------

--
-- 表的结构 `deal`
--

CREATE TABLE IF NOT EXISTS `deal` (
`id` int(11) NOT NULL,
  `goods_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
`id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(99) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `introduce` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `word` varchar(99) NOT NULL,
  `dosing` varchar(99) NOT NULL,
  `price` int(11) NOT NULL,
  `position` varchar(25) NOT NULL,
  `standrad` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`id`, `category_id`, `name`, `image`, `introduce`, `time`, `word`, `dosing`, `price`, `position`, `standrad`) VALUES
(17, 2, '哈哈', '5425239270288.jpg', '123', '2014-09-26 08:28:02', '0', '', 0, '', 0),
(18, 1, '567', '542523b21a875.jpg', '234', '2014-09-26 08:28:34', '0', '', 0, '', 0),
(19, 1, '包子', '542524a42c6c2.jpg', '包子～', '2014-09-26 08:32:36', '0', '', 0, '', 0),
(20, 1, '饺子', '542524fa5ff00.jpg', '饺子饺子饺子', '2014-09-26 08:34:02', '0', '', 0, '', 0),
(21, 1, '嫂子', '54252562dd8fe.jpg', '312', '2014-09-26 08:35:46', '0', '', 0, '', 0),
(22, 1, '枣糕', '54261627c7863.jpg', '123', '2014-09-27 01:43:03', '0', '', 0, '', 0),
(23, 1, '白菜', '5427cb8a21c8b.jpg', '一棵白菜', '2014-09-28 08:49:14', '0', '', 0, '', 0),
(24, 1, '茄子', '5427cbafb148a.jpg', '反对上饭否', '2014-09-28 08:49:51', '0', '', 0, '', 0),
(25, 2, '葱', '5427cd331d371.jpg', '123', '2014-09-28 08:56:19', '0', '', 0, '', 0),
(27, 2, '你猜', '5427d87b3a47f.jpg', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '2014-09-28 09:44:27', '延年益寿，防身祛病。', '土豆、豆腐、腐竹、竹笋', 0, '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `info`
--

CREATE TABLE IF NOT EXISTS `info` (
`id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `info`
--

INSERT INTO `info` (`id`, `user_id`, `name`) VALUES
(3, 24, '刘一峰');

-- --------------------------------------------------------

--
-- 表的结构 `invite`
--

CREATE TABLE IF NOT EXISTS `invite` (
`id` int(11) NOT NULL,
  `city` varchar(20) DEFAULT NULL,
  `area` varchar(20) DEFAULT NULL,
  `detail` varchar(99) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `invite`
--

INSERT INTO `invite` (`id`, `city`, `area`, `detail`) VALUES
(1, '青岛', '市南区', '香港中路'),
(3, '青岛', '市北区', '科技街');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `email` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(75) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `email`, `phone`, `password`, `reg_time`, `status`) VALUES
(24, 'liu1feng@hotmail.com', '15692383272', '202cb962ac59075b964b07152d234b70', '2014-09-23 07:44:14', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deal`
--
ALTER TABLE `deal`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `invite`
--
ALTER TABLE `invite`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `deal`
--
ALTER TABLE `deal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `invite`
--
ALTER TABLE `invite`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- 限制导出的表
--

--
-- 限制表 `address`
--
ALTER TABLE `address`
ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- 限制表 `cart`
--
ALTER TABLE `cart`
ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- 限制表 `info`
--
ALTER TABLE `info`
ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
