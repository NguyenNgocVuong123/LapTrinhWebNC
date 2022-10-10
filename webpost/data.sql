-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2022 lúc 03:33 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `data`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `url`, `content`, `image`) VALUES
(11, 'adsad', 'https://quynhweb.pro/xay-dung-trang-web-php-va-bootstrap/#II_Xay_dung_phan_backend_de_them_du_lieu_l', 'sada', 'fav-removebg-preview.png'),
(12, 'ầds', 'https://www.nettruyenme.com/truyen-tranh/boi-hoi-gia-69503', 'dấdsa', '308757330_3337208683165000_2519600310062963017_n.png'),
(13, 'gfdgfd', 'https://www.nettruyenme.com/truyen-tranh/made-in-abyss/chap-1/339414', 'sadasdsad', '310272645_778298593402276_7851302353337945184_n.jpg'),
(14, 'dfasdas', 'https://classroom.google.com/u/0/c/NTM4NTk2NjYxMzk3/a/NTM4NTk2NjYxNDEy/details', 'dsadsadsa', '20190511_152158-1024x768.jpg'),
(15, 'gđsa', 'https://makitweb.com/demos/load-more-results-with-jqueryajax-and-php', 'adasdsad', '101454734_p0.jpg'),
(16, 'áawgds', 'https://classroom.google.com/u/0/c/NTM4NTk2NjYxMzk3/a/NTM4NTk2NjYxNDEz/details', 'dbxc', '305072117_631436308474148_3966458070171653142_n.jpg'),
(17, 'sdfdsf', 'https://www.facebook.com/', 'fđsfds', '300621412_1105867926732383_1686329352967721137_n.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_customer`
--

INSERT INTO `tb_customer` (`id`, `name`, `website`) VALUES
(1, 'Nguyễn Ngọc Vương', 'vippro.net'),
(2, 'Trương Phúc Hoài Minh', 'freetuts.net'),
(3, 'Đặng Văn Chương', 'freetuts.net'),
(4, 'Trương Tấn Thành', 'freetuts.net'),
(5, 'Lâm văn Lang', 'demo.com'),
(6, 'Nguyễn Văn Kiệt', 'ajax.com'),
(7, 'Nguyễn Thị Nở', 'thimau.com'),
(8, 'Đặng Thị Thoa', 'scrolling.com'),
(9, 'Trương Văn Kiệt', 'ajaxscrolling.com'),
(10, 'Đặng Thị Tâm', 'nono.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
