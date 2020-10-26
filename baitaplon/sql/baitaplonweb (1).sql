-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2020 lúc 01:03 AM
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
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Đang đổ dữ liệu cho bảng `quanlybaidang`
--

INSERT INTO `quanlybaidang` (`id_baidang`, `tieude`, `img`, `noidung`, `tukhoa`, `date`) VALUES
(3, 'bạn là bằng', 'https://www.expertrans.com/wp-content/uploads/2019/06/11_vctx.jpg.webp', 'day la bang', 'bang', '2020-10-24'),
(9, 'bang', 'http://cse.tlu.edu.vn/Portals/0/Banner/khai-truong.JPG', 'ko co noi dung', 'thuyloi', '2020-10-24'),
(13, 'cho em hoi nhà mấy giời ăn cơm zậy anh tắc xi', '', 'ăn cớm mấy giờ vậy anh', 'ăn cơm', '2020-10-24'),
(17, 'Lời chào mừng', 'http://cse.tlu.edu.vn/Portals/0/truong-khoa.jpg', ' Xin chào các cô giáo, thầy giáo, anh chị và các bạn ghé thăm trang web của Khoa CNTT!\r\n\r\nNăm 2001, lãnh đạo Bộ Nông nghiệp & PTNT, lãnh đạo trường Đại học Thủy lợi khi đó đã nhận ra xu hướng và cơ hội của ngành Công nghệ thông tin (CNTT) trong tương lai, đồng thời cũng do nhu cầu bức thiết về đội ngũ kỹ sư công nghệ thông tin trong ngành và toàn xã hội, khoa CNTT được thành lập ngày 19/11/2001 từ việc sáp nhập Trung tâm tin học và Bộ môn Toán học của trường. \r\nKể từ khi thành lập, Khoa CNTT đã phát triển không ngừng. Bước trưởng thành quan trọng nhất được thể hiện qua sự đổi mới, kiện toàn chương trình đào tạo. Bắt đầu từ năm 2007, Khoa đã tập trung thực hiện  việc chuyển đổi toàn bộ chương trình, giáo trình đào tạo, thiết kế theo cùng ngành của trường ĐH Michigan- Hoa kỳ. Riêng các môn Toán được thiết kế dựa vào chương trình đào tạo của học viện Kỹ thuật MIT - Hoa Kỳ. Từ năm 2015, Khoa tạo bước ngoặt cả về nghiên cứu, đào tạo, xây dựng cơ sở vật chất và phát triển đội ngũ. Khoa mở rộng quy mô tuyển sinh cho cả đại học và sau đại học trên 450 chỉ tiêu mỗi năm, với những điểm nhấn quan trọng sau:\r\n\r\nVề đội ngũ, Khoa có 60 giảng viên trực tiếp tham gia giảng dạy, trong đó có 20 Tiến sỹ và 12 nghiên cứu sinh với năng lực công bố quốc tế tốt. Phần lớn các Tiến sỹ của Khoa đều tu nghiệp tại nước ngoài có nền khoa học tiên tiến về CNTT, các giảng viên còn lại của Khoa đều có trình độ Thạc sỹ.\r\n\r\n\r\n\r\n', 'cntt', '2020-10-25'),
(18, 'chuc co ngu kho', 'http://cse.tlu.edu.vn/Portals/0/truong-khoa.jpg', ' bang', 'cntt', '2020-10-25');

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
(3, 17, 'bang', 'toila bang', '2020-10-09'),
(27, 0, 'nbangaa9s3@gmail.co', ' sasssssss', '2020-10-25'),
(28, 0, 'nbangaa9s3@gmail.co', ' sấ', '2020-10-25'),
(29, 0, 'nbangaa9s3@gmail.co', ' đâsdasd', '2020-10-25'),
(30, 0, 'bcbvn123@gmail.com', ' dsadsa', '2020-10-25'),
(31, 3, 'nbangaa9s3@gmail.co', ' đấ', '2020-10-25'),
(32, 3, 'nbangaa9s3@gmail.co', ' bang dep trai qua', '2020-10-25');

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
('nbang923@gmail.com', 'bcbvn123', '2020-10-24', 0),
('nbangaa9s3@gmail.co', '9693c1854ce45a47a9b33fbe55e23416', '2020-10-24', 43),
('nbangaa9s3@gmail.com', 'bcbvn123', '2020-10-23', 127);

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
  ADD PRIMARY KEY (`id_binhluan`);

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
  MODIFY `id_baidang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `quanlybinhluan`
--
ALTER TABLE `quanlybinhluan`
  MODIFY `id_binhluan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
