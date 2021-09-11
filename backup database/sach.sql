-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 11, 2021 lúc 11:48 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nguyenhoang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `STT` int(10) UNSIGNED NOT NULL,
  `MS` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenSach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TacGia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NSB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` int(11) NOT NULL,
  `TheLoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AnhSP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_TheLoai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`STT`, `MS`, `TenSach`, `TacGia`, `NSB`, `SoLuong`, `DonGia`, `TheLoai`, `AnhSP`, `Id_TheLoai`, `created_at`, `updated_at`) VALUES
(3, 'wqd', 'Nhà Giả Kim', 'bbbbbbbbbbb', 'ccccccccc', 345, 50000, 'Văn học', 'img1.png', 1, '2021-08-31 16:13:13', '2021-08-31 16:15:23'),
(4, 'wqd', 'Cây cam ngọt của tôi', 'qwd', 'ccccccccc', 5231, 60000, 'Văn học', 'img2.png', 1, '2021-08-31 16:14:06', '2021-08-31 16:14:28'),
(5, 'wqd', 'Yêu những điều không hoàn hảo', 'bbbbbbbbbbb', 'ccccccccc', 346, 55, 'Văn học', 'img3.png', 1, '2021-08-31 16:15:59', '2021-09-09 23:27:38'),
(6, 'wqd', 'Tâm lý nói gì về hạnh phúc', 'bbbbbbbbbbb', 'ccccccccc', 345, 54000, 'Tâm lý', 'Anh1.png', 2, '2021-08-31 16:20:48', '2021-08-31 16:20:48'),
(7, 'wqd', 'Hiểu biết về tâm lý học', 'bbbbbbbbbbb', 'ccccccccc', 10, 256000, 'Tâm lý', 'Anh2.png', 2, '2021-08-31 16:21:25', '2021-08-31 16:21:25'),
(8, 'wqd', 'Tâm lý học hành vi', 'bbbbbbbbbbb', 'ccccccccc', 345, 65000, 'Tâm lý', 'Anh3.png', 2, '2021-08-31 16:21:48', '2021-08-31 16:21:48'),
(9, 'wqd', 'Tô bình yên vẽ hạnh phúc', '1', 'qwdwqd', 345, 54000, 'khác', 'Anh4.png', 3, '2021-08-31 16:22:37', '2021-08-31 16:22:37'),
(10, 'wqd', 'Rich habits: Thói quen thành công', 'bbbbbbbbbbb', 'ccccccccc', 345, 227000, 'khác', 'Anh5.png', 3, '2021-08-31 16:23:14', '2021-08-31 16:23:14'),
(11, 'wqd', 'Đắc nhân tâm', 'qwd', 'ccccccccc', 345, 73000, 'khác', 'Anh6.png', 3, '2021-08-31 16:23:49', '2021-08-31 16:23:49'),
(12, 'wqd', 'wefwef', 'wefwef', 'wefwef', 345, 123, 'Văn học', '1.jpg', 1, '2021-09-05 02:57:49', '2021-09-05 02:57:49'),
(13, 'wqd', 'Harry Potter: Hòn đá phù thủy', 'aaaaaaaaaa', 'bbbbbbbbb', 100, 256000, 'Tiểu thuyết', 'ec0a4054a5e85ea308d35f643c884c98.jpg', 3, '2021-09-11 01:46:21', '2021-09-11 01:46:21');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`STT`),
  ADD KEY `sach_id_theloai_foreign` (`Id_TheLoai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `STT` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_id_theloai_foreign` FOREIGN KEY (`Id_TheLoai`) REFERENCES `theloaisach` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
