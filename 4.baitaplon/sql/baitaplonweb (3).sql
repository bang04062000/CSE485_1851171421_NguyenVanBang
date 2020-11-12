-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2020 lúc 03:26 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `baitaplonweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlybaidang`
--

CREATE TABLE `quanlybaidang` (
  `id_baidang` int(100) NOT NULL,
  `tieude` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `img` char(100) COLLATE utf8mb4_bin NOT NULL,
  `noidung` text COLLATE utf8mb4_bin NOT NULL,
  `tukhoa` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `date` date NOT NULL,
  `ten_nguoidang` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Đang đổ dữ liệu cho bảng `quanlybaidang`
--

INSERT INTO `quanlybaidang` (`id_baidang`, `tieude`, `img`, `noidung`, `tukhoa`, `date`, `ten_nguoidang`) VALUES
(53, 'Lời chào mừng', '../img/logotlu.jpg', ' dsadas', 'QPAN', '2020-11-03', 'bcbvn1@gmail.com'),
(54, 'Lời chào mừng', '../img/logotlu.jpg', ' asas', 'QPAN', '2020-11-03', 'bcbvn1@gmail.com'),
(57, '222222', '../img/logotlu.jpg', ' aaaa', 'cdcdcd', '2020-11-03', 'bcbvn123@gmail.com'),
(59, 'dsada', '../img/logotlu.jpg', ' dsadasd', 'đâs', '2020-11-03', 'bcbvn123@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlybinhluan`
--

CREATE TABLE `quanlybinhluan` (
  `id_binhluan` int(100) NOT NULL,
  `id_sp` int(6) NOT NULL,
  `ten` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `nd_bl` text COLLATE utf8mb4_bin NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Đang đổ dữ liệu cho bảng `quanlybinhluan`
--

INSERT INTO `quanlybinhluan` (`id_binhluan`, `id_sp`, `ten`, `nd_bl`, `date`) VALUES
(59, 57, 'bcbvn123@gmail.com', ' ds', '2020-11-03'),
(60, 57, 'bcbvn123@gmail.com', ' ds', '2020-11-03'),
(61, 57, 'bcbvn123@gmail.com', ' dsa', '2020-11-03'),
(62, 57, 'bcbvn123@gmail.com', ' dá', '2020-11-03'),
(63, 57, 'bcbvn123@gmail.com', ' dsa', '2020-11-03'),
(64, 59, 'bcbvn123@gmail.com', ' ', '2020-11-03'),
(65, 59, 'bcbvn123@gmail.com', ' ', '2020-11-03'),
(66, 59, 'bcbvn123@gmail.com', ' ', '2020-11-03'),
(67, 59, 'bcbvn123@gmail.com', ' ', '2020-11-03'),
(68, 53, 'bcbvn1@gmail.com', ' 21', '2020-11-04'),
(69, 53, 'bcbvn1@gmail.com', ' 432', '2020-11-04'),
(70, 53, 'bcbvn1@gmail.com', ' 312', '2020-11-04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlytaikhoan`
--

CREATE TABLE `quanlytaikhoan` (
  `email` varchar(40) CHARACTER SET utf8 NOT NULL,
  `matkhau` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `ngaytao` date NOT NULL,
  `trangthai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Đang đổ dữ liệu cho bảng `quanlytaikhoan`
--

INSERT INTO `quanlytaikhoan` (`email`, `matkhau`, `ngaytao`, `trangthai`) VALUES
('bcbvn123@gmail.com', '9693c1854ce45a47a9b33fbe55e23416', '2020-10-25', 127),
('bcbvn1@gmail.com', '9693c1854ce45a47a9b33fbe55e23416', '2020-10-30', 4),
('nbangaa9s3@gmail.co', '9693c1854ce45a47a9b33fbe55e23416', '2020-10-24', 43);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `quanlybaidang`
--
ALTER TABLE `quanlybaidang`
  ADD PRIMARY KEY (`id_baidang`);

--
-- Chỉ mục cho bảng `quanlybinhluan`
--
ALTER TABLE `quanlybinhluan`
  ADD PRIMARY KEY (`id_binhluan`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `quanlytaikhoan`
--
ALTER TABLE `quanlytaikhoan`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `quanlybaidang`
--
ALTER TABLE `quanlybaidang`
  MODIFY `id_baidang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `quanlybinhluan`
--
ALTER TABLE `quanlybinhluan`
  MODIFY `id_binhluan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `quanlybinhluan`
--
ALTER TABLE `quanlybinhluan`
  ADD CONSTRAINT `quanlybinhluan_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `quanlybaidang` (`id_baidang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
