-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 07, 2021 lúc 06:06 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlthietbi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethd`
--

CREATE TABLE `chitiethd` (
  `mahd` int(5) NOT NULL,
  `malinhkien` int(5) NOT NULL,
  `soluong` int(2) NOT NULL,
  `giatien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvi`
--

CREATE TABLE `donvi` (
  `madv` int(5) NOT NULL,
  `tendv` varchar(100) NOT NULL,
  `madvcha` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donvi`
--

INSERT INTO `donvi` (`madv`, `tendv`, `madvcha`) VALUES
(1, 'Khoa Y', NULL),
(3, 'Bộ môn nội soi', 8),
(4, 'Bộ môn sản', 8),
(6, 'Bộ môn ngoại', 1),
(8, 'Khoa dược', NULL),
(9, 'Bộ môn dược', 8),
(10, 'Bộ môn y', 1),
(11, 'Bộ môn hoá', 1),
(12, 'Bộ môn hoá học', 1),
(13, 'Khoa Y học', NULL),
(16, 'Khoa Y học cổ truyền', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(5) NOT NULL,
  `matb` int(5) NOT NULL,
  `tong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `linhkien`
--

CREATE TABLE `linhkien` (
  `malinhkien` int(5) NOT NULL,
  `tenlinhkien` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `linhkien`
--

INSERT INTO `linhkien` (`malinhkien`, `tenlinhkien`) VALUES
(1, 'RAM'),
(2, 'CPU'),
(3, 'Mainboard'),
(4, 'Nguồn'),
(5, 'Ổ cứng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitb`
--

CREATE TABLE `loaitb` (
  `maloai` int(5) NOT NULL,
  `tenloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaitb`
--

INSERT INTO `loaitb` (`maloai`, `tenloai`) VALUES
(1, 'Máy tính'),
(2, 'Laptop'),
(3, 'Máy scan'),
(4, 'Máy tính bảng'),
(5, 'Máy Fax'),
(6, 'Khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(5) NOT NULL,
  `macb` varchar(10) NOT NULL,
  `tencb` varchar(50) NOT NULL,
  `matkhau` varchar(150) NOT NULL,
  `ngaysinh` varchar(20) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `madv` int(5) NOT NULL,
  `ngaythem` timestamp NULL DEFAULT NULL,
  `ngaysua` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `macb`, `tencb`, `matkhau`, `ngaysinh`, `gioitinh`, `email`, `sdt`, `madv`, `ngaythem`, `ngaysua`) VALUES
(7, '00011', 'Luan', '$2y$10$zNwXscwjTAwYvO0Y7908VeyPzZMKtRPc7xi.GSX6v4W7z48ISfiQm', '04/08/1998', '1', 'luan@gmail.com', '0347444190', 9, '2021-08-06 00:18:48', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `maquyen` int(5) NOT NULL,
  `idNguoidung` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`maquyen`, `idNguoidung`) VALUES
(2, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `maquyen` int(5) NOT NULL,
  `tenquyen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quyen`
--

INSERT INTO `quyen` (`maquyen`, `tenquyen`) VALUES
(1, 'Admin'),
(2, 'Người dùng'),
(3, 'Cán bộ sửa chữa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thietbi`
--

CREATE TABLE `thietbi` (
  `matb` int(5) NOT NULL,
  `maloai` int(5) NOT NULL,
  `nhasx` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thietbi`
--

INSERT INTO `thietbi` (`matb`, `maloai`, `nhasx`) VALUES
(4, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeucau`
--

CREATE TABLE `yeucau` (
  `mayc` int(5) NOT NULL,
  `matb` int(5) NOT NULL,
  `tendv` varchar(50) NOT NULL,
  `tinhtrang` text NOT NULL,
  `ngayyc` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idnguoidung` int(5) NOT NULL,
  `hientrang` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `yeucau`
--

INSERT INTO `yeucau` (`mayc`, `matb`, `tendv`, `tinhtrang`, `ngayyc`, `idnguoidung`, `hientrang`) VALUES
(2, 4, 'Bộ môn dược', 'Phòng 4 máy 12 nguồn không lên', '2021-08-07 08:11:31', 7, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD KEY `chitiethd_ibfk_1` (`mahd`),
  ADD KEY `chitiethd_ibfk_2` (`malinhkien`);

--
-- Chỉ mục cho bảng `donvi`
--
ALTER TABLE `donvi`
  ADD PRIMARY KEY (`madv`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `matb` (`matb`);

--
-- Chỉ mục cho bảng `linhkien`
--
ALTER TABLE `linhkien`
  ADD PRIMARY KEY (`malinhkien`);

--
-- Chỉ mục cho bảng `loaitb`
--
ALTER TABLE `loaitb`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `macb` (`macb`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD KEY `phanquyen_ibfk_1` (`idNguoidung`);

--
-- Chỉ mục cho bảng `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`maquyen`);

--
-- Chỉ mục cho bảng `thietbi`
--
ALTER TABLE `thietbi`
  ADD PRIMARY KEY (`matb`),
  ADD KEY `thietbi_ibfk_2` (`maloai`);

--
-- Chỉ mục cho bảng `yeucau`
--
ALTER TABLE `yeucau`
  ADD PRIMARY KEY (`mayc`),
  ADD KEY `yeucau_ibfk_1` (`idnguoidung`),
  ADD KEY `matb` (`matb`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donvi`
--
ALTER TABLE `donvi`
  MODIFY `madv` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `linhkien`
--
ALTER TABLE `linhkien`
  MODIFY `malinhkien` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loaitb`
--
ALTER TABLE `loaitb`
  MODIFY `maloai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `quyen`
--
ALTER TABLE `quyen`
  MODIFY `maquyen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `thietbi`
--
ALTER TABLE `thietbi`
  MODIFY `matb` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `yeucau`
--
ALTER TABLE `yeucau`
  MODIFY `mayc` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD CONSTRAINT `chitiethd_ibfk_1` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethd_ibfk_2` FOREIGN KEY (`malinhkien`) REFERENCES `linhkien` (`malinhkien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`matb`) REFERENCES `thietbi` (`matb`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD CONSTRAINT `phanquyen_ibfk_1` FOREIGN KEY (`idNguoidung`) REFERENCES `nguoidung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thietbi`
--
ALTER TABLE `thietbi`
  ADD CONSTRAINT `thietbi_ibfk_2` FOREIGN KEY (`maloai`) REFERENCES `loaitb` (`maloai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `yeucau`
--
ALTER TABLE `yeucau`
  ADD CONSTRAINT `yeucau_ibfk_1` FOREIGN KEY (`idnguoidung`) REFERENCES `nguoidung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `yeucau_ibfk_2` FOREIGN KEY (`matb`) REFERENCES `thietbi` (`matb`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
