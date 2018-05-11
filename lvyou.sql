-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-05-11 14:04:17
-- 服务器版本： 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lvyou`
--

-- --------------------------------------------------------

--
-- 表的结构 `daoyou`
--

CREATE TABLE `daoyou` (
  `id` int(11) NOT NULL,
  `zhanghao` char(13) NOT NULL,
  `mima` char(13) NOT NULL,
  `weiwancheng` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `daoyou`
--

INSERT INTO `daoyou` (`id`, `zhanghao`, `mima`, `weiwancheng`) VALUES
(1, '123', '123', '暂无');

-- --------------------------------------------------------

--
-- 表的结构 `dingdan`
--

CREATE TABLE `dingdan` (
  `daoyou` text NOT NULL,
  `didian` text CHARACTER SET utf8 NOT NULL,
  `pinfen` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `dingdan`
--

INSERT INTO `dingdan` (`daoyou`, `didian`, `pinfen`, `id`) VALUES
('123', '南京', 0, 1),
('123', '南京', 12, 2),
('undefined', '温州', 0, 3),
('123', '北京', 0, 4);

-- --------------------------------------------------------

--
-- 表的结构 `finish`
--

CREATE TABLE `finish` (
  `id` int(11) NOT NULL,
  `youke` char(13) CHARACTER SET utf8 NOT NULL,
  `didian` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `finish`
--

INSERT INTO `finish` (`id`, `youke`, `didian`) VALUES
(1, '123', '东京'),
(3, '1234', '东北');

-- --------------------------------------------------------

--
-- 表的结构 `moving`
--

CREATE TABLE `moving` (
  `id` int(11) NOT NULL,
  `youke` char(13) CHARACTER SET utf8 NOT NULL,
  `didian` text CHARACTER SET utf8 NOT NULL,
  `daoyou` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `moving`
--

INSERT INTO `moving` (`id`, `youke`, `didian`, `daoyou`) VALUES
(3, '1234', '南极', '123');

-- --------------------------------------------------------

--
-- 表的结构 `tuijian`
--

CREATE TABLE `tuijian` (
  `id` int(11) NOT NULL,
  `luxian` text CHARACTER SET utf8 NOT NULL,
  `didian` text CHARACTER SET utf8 NOT NULL,
  `xiaochi` text CHARACTER SET utf8 NOT NULL,
  `jingdian` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `tuijian`
--

INSERT INTO `tuijian` (`id`, `luxian`, `didian`, `xiaochi`, `jingdian`) VALUES
(1, '欧洲文明主要分为拉丁（或罗曼）文化区（如法国、意大利、西班牙、罗马尼亚等罗曼语族国家）、日耳曼文化区（如英国、德国、荷兰、除芬兰外的北欧四国等日耳曼语族国家）和斯拉夫文化区（如捷克、波兰、俄罗斯、前南斯拉夫地区等斯拉夫语族国家），除此之外还有一些相对独立的岛状文化区，最典型的就是希腊文化区和凯尔特文化区（如爱尔兰）。', '云南', '1.豆焖饭\r\n2.嫩荷叶包饭\r\n3.云腿桂花饭\r\n4.咸八宝饭\r\n5. 冰糖些米八宝粥\r\n6.香竹烤饭\r\n7.腊肉烤方\r\n8.瑶族大粽\r\n9.小鸡煮稀饭\r\n', 'A线\r\n最风情，最优美，云南民族村，云南民族博物馆，海埂公园，海埂大坝，西山龙门\r\nB线\r\n最怀旧，最经典，东西寺塔，金马碧鸡坊，南屏街，正义路，景星街，光华街，翠湖，云南大学，讲武堂\r\nC线\r\n最文艺，最清新，大学城，斗南花市，官渡古镇');

-- --------------------------------------------------------

--
-- 表的结构 `wait`
--

CREATE TABLE `wait` (
  `id` int(11) NOT NULL,
  `youke` char(13) CHARACTER SET utf8 NOT NULL,
  `didian` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `wait`
--

INSERT INTO `wait` (`id`, `youke`, `didian`) VALUES
(1, '1234', '温州');

-- --------------------------------------------------------

--
-- 表的结构 `youke`
--

CREATE TABLE `youke` (
  `id` int(11) NOT NULL,
  `zhanghao` char(13) NOT NULL,
  `mima` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `youke`
--

INSERT INTO `youke` (`id`, `zhanghao`, `mima`) VALUES
(1, '1234', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daoyou`
--
ALTER TABLE `daoyou`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dingdan`
--
ALTER TABLE `dingdan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finish`
--
ALTER TABLE `finish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moving`
--
ALTER TABLE `moving`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuijian`
--
ALTER TABLE `tuijian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wait`
--
ALTER TABLE `wait`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youke`
--
ALTER TABLE `youke`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `daoyou`
--
ALTER TABLE `daoyou`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `dingdan`
--
ALTER TABLE `dingdan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `finish`
--
ALTER TABLE `finish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `moving`
--
ALTER TABLE `moving`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `tuijian`
--
ALTER TABLE `tuijian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `wait`
--
ALTER TABLE `wait`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `youke`
--
ALTER TABLE `youke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
