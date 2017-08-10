-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017-08-10 15:13:59
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `convenient`
--

-- --------------------------------------------------------

--
-- 資料表結構 `balance`
--

CREATE TABLE `balance` (
  `BalanceID` int(10) NOT NULL,
  `Balance` int(10) NOT NULL,
  `BDatetime` datetime NOT NULL,
  `MemberID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `balance`
--

INSERT INTO `balance` (`BalanceID`, `Balance`, `BDatetime`, `MemberID`) VALUES
(9, 100, '2017-05-01 00:00:00', 1),
(11, 120, '2017-05-02 00:00:00', 1),
(12, 100, '2017-05-03 00:00:00', 1),
(13, 59, '2017-05-04 00:00:00', 6);

-- --------------------------------------------------------

--
-- 資料表結構 `convenient`
--

CREATE TABLE `convenient` (
  `id` int(10) NOT NULL,
  `StoreName` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Convenient` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) NOT NULL,
  `Datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `deposit`
--

CREATE TABLE `deposit` (
  `DepositID` int(10) NOT NULL,
  `Deposit` int(10) NOT NULL,
  `DDatetime` datetime NOT NULL,
  `MemberID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `deposit`
--

INSERT INTO `deposit` (`DepositID`, `Deposit`, `DDatetime`, `MemberID`) VALUES
(1, 100, '2017-05-01 00:00:00', 1),
(2, 20, '2017-05-02 00:00:00', 1),
(3, 103, '2017-05-04 00:00:00', 6);

-- --------------------------------------------------------

--
-- 資料表結構 `members`
--

CREATE TABLE `members` (
  `MemberID` int(10) NOT NULL,
  `MemberName` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `MemberAccount` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `MemberPassword` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `MemberLevel` enum('admin','member') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'member',
  `MemberDatetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- 資料表的匯出資料 `members`
--

INSERT INTO `members` (`MemberID`, `MemberName`, `MemberAccount`, `MemberPassword`, `MemberLevel`, `MemberDatetime`) VALUES
(1, 'AaB', 'aa', 'aaa', 'member', '0000-00-00 00:00:00'),
(6, '小王', 'bb', 'bbb', 'member', '0000-00-00 00:00:00'),
(7, 'aA!', 'ssss', 'ssss', 'member', '0000-00-00 00:00:00'),
(8, '你小王八', 'ㄇ', 'aa', 'member', '0000-00-00 00:00:00'),
(9, '小多', 'young', 'young', 'admin', '0000-00-00 00:00:00'),
(10, '洪瑞展', '1234', '123456', 'member', '2017-08-07 22:00:22');

-- --------------------------------------------------------

--
-- 資料表結構 `selectmembers`
--

CREATE TABLE `selectmembers` (
  `SMID` int(10) NOT NULL,
  `SConvenient` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SPrice` int(10) NOT NULL,
  `SQuantity` int(10) NOT NULL,
  `STotal` int(10) NOT NULL,
  `SM` int(10) NOT NULL,
  `STodayStore` int(10) NOT NULL,
  `SDatetimes` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `stores`
--

CREATE TABLE `stores` (
  `StoreID` int(10) NOT NULL,
  `StoreName` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `StorePhone` int(10) NOT NULL,
  `StoreDescription` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `StorePic` text COLLATE utf8_unicode_ci NOT NULL,
  `StoreDatetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `todaymenu`
--

CREATE TABLE `todaymenu` (
  `TodayID` int(10) NOT NULL,
  `TodayStoreName` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TodayStorePhone` int(10) NOT NULL,
  `TodayDatetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`BalanceID`),
  ADD KEY `MemberID` (`MemberID`);

--
-- 資料表索引 `convenient`
--
ALTER TABLE `convenient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `StoreName` (`StoreName`),
  ADD KEY `Convenient` (`Convenient`),
  ADD KEY `Price` (`Price`);

--
-- 資料表索引 `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`DepositID`),
  ADD KEY `MemberID_1` (`MemberID`);

--
-- 資料表索引 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`MemberID`),
  ADD KEY `MemberName` (`MemberName`);

--
-- 資料表索引 `selectmembers`
--
ALTER TABLE `selectmembers`
  ADD PRIMARY KEY (`SMID`),
  ADD KEY `SM` (`SM`),
  ADD KEY `SPrice` (`SPrice`),
  ADD KEY `STodayStore` (`STodayStore`),
  ADD KEY `StoreConvenient_idx` (`SConvenient`),
  ADD KEY `SM_2` (`SM`);

--
-- 資料表索引 `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`StoreID`),
  ADD KEY `StoreName` (`StoreName`),
  ADD KEY `StroePhone` (`StorePhone`);

--
-- 資料表索引 `todaymenu`
--
ALTER TABLE `todaymenu`
  ADD PRIMARY KEY (`TodayID`),
  ADD KEY `TodayStoreName` (`TodayStoreName`),
  ADD KEY `TodayStroePhone` (`TodayStorePhone`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `balance`
--
ALTER TABLE `balance`
  MODIFY `BalanceID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 使用資料表 AUTO_INCREMENT `convenient`
--
ALTER TABLE `convenient`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `deposit`
--
ALTER TABLE `deposit`
  MODIFY `DepositID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `MemberID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用資料表 AUTO_INCREMENT `selectmembers`
--
ALTER TABLE `selectmembers`
  MODIFY `SMID` int(10) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `stores`
--
ALTER TABLE `stores`
  MODIFY `StoreID` int(10) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `todaymenu`
--
ALTER TABLE `todaymenu`
  MODIFY `TodayID` int(10) NOT NULL AUTO_INCREMENT;
--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `balance`
--
ALTER TABLE `balance`
  ADD CONSTRAINT `MemberID_2` FOREIGN KEY (`MemberID`) REFERENCES `members` (`MemberID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `convenient`
--
ALTER TABLE `convenient`
  ADD CONSTRAINT `Convenient` FOREIGN KEY (`Convenient`) REFERENCES `selectmembers` (`SConvenient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Price` FOREIGN KEY (`Price`) REFERENCES `selectmembers` (`SPrice`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `StoreName` FOREIGN KEY (`StoreName`) REFERENCES `stores` (`StoreName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `deposit`
--
ALTER TABLE `deposit`
  ADD CONSTRAINT `MemberID_1` FOREIGN KEY (`MemberID`) REFERENCES `members` (`MemberID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `selectmembers`
--
ALTER TABLE `selectmembers`
  ADD CONSTRAINT `SM_2` FOREIGN KEY (`SM`) REFERENCES `members` (`MemberID`),
  ADD CONSTRAINT `STodayStore` FOREIGN KEY (`STodayStore`) REFERENCES `todaymenu` (`TodayID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `todaymenu`
--
ALTER TABLE `todaymenu`
  ADD CONSTRAINT `TodayStoreName` FOREIGN KEY (`TodayStoreName`) REFERENCES `stores` (`StoreName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TodayStroePhone` FOREIGN KEY (`TodayStorePhone`) REFERENCES `stores` (`StorePhone`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
