-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-01-10 10:31:10
-- 伺服器版本: 10.1.21-MariaDB
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `pos`
--

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `p_id` int(10) UNSIGNED NOT NULL COMMENT '產品編號',
  `p_name` varchar(20) NOT NULL COMMENT '產品名稱',
  `inventory` int(11) NOT NULL COMMENT '庫存量',
  `amount` int(11) NOT NULL COMMENT '訂購量',
  `price` int(11) NOT NULL COMMENT '單價',
  `safty_inventory` int(11) NOT NULL COMMENT '安全庫存',
  `s_id` int(2) NOT NULL COMMENT '供應商編號',
  `c_id` int(2) NOT NULL COMMENT '類別編號'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `inventory`, `amount`, `price`, `safty_inventory`, `s_id`, `c_id`) VALUES
(1, '握便當-麻婆炸雞腿排', 20, 20, 45, 5, 0, 0),
(3, '台塑有機胡蘿蔔', 20, 20, 38, 5, 0, 0),
(4, '吉士豬肉堡加蛋', 20, 20, 45, 5, 0, 0),
(5, '吉士豬肉堡', 20, 20, 35, 5, 0, 0),
(6, '台南風味意麵', 20, 20, 65, 5, 0, 0),
(7, '香腸蛋炒飯', 20, 20, 65, 5, 0, 0),
(8, '沙茶魷魚羹麵', 20, 20, 55, 5, 0, 0),
(9, '滑蛋雞蓉粥', 20, 20, 55, 5, 0, 0),
(10, '草莓奶霜雙餡夾心', 20, 20, 30, 5, 0, 0),
(11, '招牌滷五花便當', 20, 20, 75, 5, 0, 0),
(12, '藥膳雞湯', 20, 20, 60, 5, 0, 0),
(13, '御選紅燒牛肉麵-半筋半肉', 20, 20, 129, 5, 0, 0),
(14, '金黃菠蘿奶霜麵包', 20, 20, 30, 5, 0, 0),
(15, '丹麥起司火腿', 20, 20, 35, 5, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `user_account`
--

CREATE TABLE `user_account` (
  `ID` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `ssd` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `position` int(1) NOT NULL DEFAULT '0',
  `creat_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `user_account`
--

INSERT INTO `user_account` (`ID`, `name`, `ssd`, `birthday`, `email`, `username`, `password`, `position`, `creat_time`) VALUES
(1, 'KOIE', 'Q139862689', '1994-01-03', 'koie3211@gmail.com', 'koie3211', 'f6cc0afb67fbf65c841dd68925629611', 1, '2017-12-07 05:13:55'),
(2, 'cho', 'Q169594318', '1999-12-05', 'Q169594318@gmail.com', '6052', 'f5cbc75b7e55e431fe02b91fbc457917', 0, '2017-12-13 12:47:04'),
(3, 'kk', 'A184813688', '1994-01-01', 'kk@kk.com', 'kkuser', 'e2fc714c4727ee9395f324cd2e7f331f', 0, '2017-12-13 17:46:53'),
(4, 'chaochao', 'Q224266408', '1996-07-03', 'janet@gmail.com', 'janet777773', 'dcb4432b7d8d0e93fe115395a916a0cb', 0, '2017-12-13 17:54:17'),
(5, 'kk', 'a123456789', '1995-01-03', 'kk@kkmail.com', 'kk3211', '8d145c723566303c247eb3942f7c0bac', 0, '2018-01-09 02:46:30'),
(6, 'abcd', 'A163027459', '2018-01-10', 'abcd@abcd.com', 'abcd', 'e2fc714c4727ee9395f324cd2e7f331f', 0, '2018-01-10 07:34:21'),
(7, 'aaaa', 'A112233449', '2018-01-01', 'ab@ab.com', 'ak', 'bf1c8929a665f6df9a6f3ee44091f5c0', 0, '2018-01-10 09:10:32'),
(8, '', '', '0000-00-00', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0, '2018-01-10 09:24:20');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `p_name` (`p_name`);

--
-- 資料表索引 `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '產品編號', AUTO_INCREMENT=16;
--
-- 使用資料表 AUTO_INCREMENT `user_account`
--
ALTER TABLE `user_account`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
