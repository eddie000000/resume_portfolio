-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-06-29 06:09:26
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `bookdbs`
--

-- --------------------------------------------------------

--
-- 資料表結構 `booklist`
--

CREATE TABLE `booklist` (
  `bookID` int(10) NOT NULL,
  `bookName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bookPrice` int(11) DEFAULT NULL,
  `bookLeft` int(11) DEFAULT NULL,
  `bookCatagory` text CHARACTER SET utf8 DEFAULT NULL,
  `bookPublishD` date DEFAULT NULL,
  `bookAuthor` text CHARACTER SET utf8 DEFAULT NULL,
  `bookClick` int(11) DEFAULT NULL,
  `bookPic` text CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `booklist`
--

INSERT INTO `booklist` (`bookID`, `bookName`, `bookPrice`, `bookLeft`, `bookCatagory`, `bookPublishD`, `bookAuthor`, `bookClick`, `bookPic`) VALUES
(1, '三芝小豬', 100, 50, '童話', '2020-06-01', '張一一', 0, 'https://www.168books.com.tw/upload_files/fonlego-rwd/prodpic/D_1227-4-1.jpg'),
(2, '不！我不喜歡這種玩笑', 280, 50, '繪本', '2020-06-03', '亞曼達‧德林', 0, 'https://www.168books.com.tw/upload_files/fonlego-rwd/prodpic/D_R98019-1.jpg'),
(3, '彩色卡通簡筆畫一本通', 120, 50, '繪本', '2020-05-12', '幼福', 0, 'https://www.168books.com.tw/upload_files/fonlego-rwd/prodpic/D_1464-1.jpg'),
(4, '老師喜歡你，因為……', 220, 40, '繪本', '2020-06-01', '姜密兒', 0, 'https://www.168books.com.tw/upload_files/fonlego-rwd/prodpic/D_R98022-1.jpg'),
(5, '媽媽，我從哪裡來?', 118, 50, '繪本', '2018-04-01', '袋鼠媽媽童書', 0, 'https://www.168books.com.tw/upload_files/fonlego-rwd/prodpic/D_1232-2-1.jpg'),
(6, '長靴貓', 213, 40, '拉拉書', '2019-01-29', 'Dan Taylor', 0, 'https://www.168books.com.tw/upload_files/fonlego-rwd/prodpic/D_UP175-1.jpg'),
(7, '好棒的海灘', 340, 40, '拉拉書', '2015-01-25', 'Rebecca Finn', 0, 'https://www.168books.com.tw/upload_files/fonlego-rwd/prodpic/D_UP077-1.jpg'),
(8, '泰味咖哩', 253, 30, '食譜', '2020-05-01', '于美芮', 0, 'https://www.168books.com.tw/upload_files/fonlego-rwd/prodpic/D_AR71160-1.jpg'),
(9, '元氣早餐料理一本通', 236, 40, '食譜', '2012-12-01', '陳志田', 0, 'https://www.168books.com.tw/upload_files/fonlego-rwd/prodpic/D_A11013-1.jpg'),
(10, '保存食活用圖鑑', 236, 40, '食譜', '2018-11-01', '挪亞方舟文化創意工作室', 0, 'https://www.168books.com.tw/upload_files/fonlego-rwd/prodpic/D_R10040-1.jpg'),
(11, '奇妙的動物', 323, 50, '拉拉書', '2019-05-17', '李嘉朗', 0, 'https://www.168books.com.tw/upload_files/fonlego-rwd/prodpic/D_UP183-1.jpg'),
(12, '在馬桶上便便', 272, 50, '拉拉書', '2018-11-27', '金禧男', 0, 'https://www.168books.com.tw/upload_files/fonlego-rwd/prodpic/D_QL138-1.jpg'),
(13, '糖果屋', 213, 40, '拉拉書', '0000-00-00', 'Dan Taylor', 0, 'https://www.168books.com.tw/upload_files/fonlego-rwd/prodpic/D_UP156--1.jpg'),
(14, '怕冷的企鵝', 236, 40, '繪本', '2020-06-01', 'Nicola Anderson', 0, 'https://www.168books.com.tw/upload_files/fonlego-rwd/prodpic/D_6086-9-1.jpg'),
(15, '我和同學吵架了', 221, 50, '繪本', '0000-00-00', '朴正燮', 0, 'https://www.168books.com.tw/upload_files/fonlego-rwd/prodpic/D_R98023-1.jpg'),
(16, '分享傘', 238, 30, '繪本', '0000-00-00', '野志明加', 0, 'https://www.168books.com.tw/upload_files/fonlego-rwd/prodpic/D_EP407-1.jpg'),
(17, '越南老師的道地越料理', 118, 50, '食譜', '2017-01-01', '陳瑩真', 0, 'https://www.168books.com.tw/upload_files/fonlego-rwd/prodpic/D_R71135-1.jpg'),
(18, '騎鵝歷險記', 272, 40, '童話', '2019-12-10', 'Lucia Sforza', 0, 'https://www.168books.com.tw/upload_files/fonlego-rwd/prodpic/D_DB238-1.jpg');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `booklist`
--
ALTER TABLE `booklist`
  ADD PRIMARY KEY (`bookID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `booklist`
--
ALTER TABLE `booklist`
  MODIFY `bookID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
