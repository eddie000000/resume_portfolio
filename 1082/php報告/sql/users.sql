-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-06-29 06:09:37
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
-- 資料庫： `login system`
--

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `uidusers` tinytext NOT NULL,
  `emailusers` tinytext NOT NULL,
  `pwdusers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`idusers`, `uidusers`, `emailusers`, `pwdusers`) VALUES
(2, 'leochen', 'captain@gmail.com', '$2y$10$jbJcR16katZixTXsS4ox4OTPAtkkZPfor45GplapPkjtLviAIIXhK'),
(3, 'eddie', 'captain@gmail.com', '$2y$10$I.iw6tgX3yJrL5WyEHYhr.kiRZ2Kbwzr.oB5Ok8oRMCZw47jZkCdO'),
(4, 'reee', 'reee@gmail.com', '$2y$10$rR27dx0j3orF8O49oLHWkuBnXYTofpSuSq8o/.8zDI4POVsIpfaqa'),
(5, 'why', 'aaa@gmail.com', '$2y$10$0VNKEmN3F//hAU06m4YDRetGkzXONgReMtheZrntIJ0rwH6uB46ie'),
(6, 'godsalyer9527', 'eddielin@yahoo.com', '$2y$10$xYrvq4ueUEGIGUo8uzhFb.ocE4IAmxIoqLS7Mw8lApye4vhy6d4Lq'),
(7, 'coolguy2002', 'coolguy@gmail.com', '$2y$10$9cU2XymIL6CzGcxHlL0dH.0lMqeSuvjs4NtxbwxTje3v8p2z.5BKm'),
(8, 'ppppp', '123550@gmail.com', '$2y$10$HE36k558II49UUXx6cxPieLkrTNrXlSbzi.AYRy7NerM1DtCD3ATe');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
