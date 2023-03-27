-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 09:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan1`
--

CREATE TABLE `binhluan1` (
  `mabl` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text NOT NULL,
  `sao` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `binhluan1`
--

INSERT INTO `binhluan1` (`mabl`, `mahh`, `makh`, `ngaybl`, `noidung`, `sao`) VALUES
(1, 3, 7, '2020-08-14', '  gghnn', 0),
(2, 4, 7, '2020-08-14', '  nhẹ và đẹp', 0),
(3, 3, 5, '2020-08-14', 'lịch sự, nhã nhặn', 0),
(4, 3, 5, '2020-08-14', '  đẹp và lịch sự', 0),
(5, 3, 5, '2020-08-14', '  đẹp và lịch sự', 0),
(6, 3, 5, '2020-08-14', '  đẹp và lịch sự', 0),
(7, 3, 5, '2020-08-14', '  đẹp và lịch sự', 0),
(8, 3, 5, '2020-08-14', '  dfgdfsg', 0),
(9, 3, 5, '2020-08-14', '  dfgdfsg', 0),
(10, 3, 5, '2020-08-14', '  dfgdfsg', 0),
(11, 3, 5, '2020-08-14', '  dfgdfsg', 0),
(12, 3, 5, '2020-08-14', '  dfgdfsg', 0),
(13, 3, 5, '2020-08-14', '  hello', 0),
(14, 3, 5, '2020-08-14', '  hello', 0),
(16, 6, 3, '2023-03-21', 'hang dep. cahtluong', 1),
(17, 6, 3, '2023-03-21', 'hang ok', 4);

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon1`
--

CREATE TABLE `cthoadon1` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `mactsp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cthoadon1`
--

INSERT INTO `cthoadon1` (`masohd`, `mahh`, `soluongmua`, `thanhtien`, `mactsp`) VALUES
(19, 10, 1, 745000, 18),
(22, 11, 2, 1150000, 19),
(27, 1, 1, 545000, 20),
(27, 3, 1, 545000, 21);

-- --------------------------------------------------------

--
-- Table structure for table `ctsp`
--

CREATE TABLE `ctsp` (
  `masp` int(11) NOT NULL,
  `tennsx` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ctsp`
--

INSERT INTO `ctsp` (`masp`, `tennsx`) VALUES
(1, 'Giày Cao Gót'),
(2, 'túi da'),
(3, 'Giày Sandals'),
(4, 'Giày Búp Bê'),
(5, 'Giày Sneaker'),
(6, 'Giày Boots'),
(7, 'Giày Da Thật'),
(8, 'Giày Lười'),
(10, 'Túi da');

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MASP` int(11) NOT NULL,
  `TENSP` varchar(60) NOT NULL,
  `GIA` float NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `nhom` int(4) NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `mota` varchar(2000) NOT NULL,
  `soluongton` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`MASP`, `TENSP`, `GIA`, `hinh`, `nhom`, `soluotxem`, `mota`, `soluongton`) VALUES
(1, 'Giày Slingback Canvas', 545000, '8.jfif', 4, 5, 'Vải bố và da nhân tạo. Phù hợp đi làm, đi tiệc và đi chơi', 50),
(3, 'Giày Slingback Canvas  ', 545000, '9.jfif', 3, 4, 'Vải bố và da nhân tạo. Phù hợp đi làm, đi tiệc và đi chơi', 50),
(4, 'Giày Sandal Bệt Mũi Nhọn', 545000, '10.jfif', 1, 1, 'Chất liệu Satin. Phù hợp đi làm, đi chơi và đi học', 50),
(5, 'Giày Sandal Bệt Mũi Nhọn ', 525000, '11.jfif', 1, 0, 'Chất liệu Satin. Phù hợp đi làm, đi chơi và đi học', 50),
(6, 'Giày Sandal Bệt Mũi Nhọn', 525000, '1.jfif', 1, 0, 'Chất liệu Satin. Phù hợp đi làm, đi chơi và đi học', 50),
(9, 'Giày Sneaker Neon Light 2 ', 745000, '12.jfif', 2, 1, 'Chất liệu nhân tạo. Phù hợp đi làm, đi chơi và đi học', 50),
(10, 'Giày Sneaker Neon Light 2 ', 745000, '1.jfif', 2, 1, 'Chất liệu nhân tạo. Phù hợp đi làm, đi chơi và đi học', 50),
(11, 'Giày Cao Gót Bít Mũi Nhọn', 575000, '2.jfif', 3, 1, 'Chất liệu nhân tạo. Phù hợp đi làm, đi chơi và đi tiệc', 50),
(12, 'Giày Cao Gót Neon Light ', 575000, '3.jfif', 3, 2, 'Chất liệu nhân tạo. Phù hợp đi làm, đi chơi và đi tiệc', 50),
(15, 'Giày Slingback Mũi Nhọn Quai Co Giãn ', 545000, '4.jfif', 4, 1, 'Chất liệu nhân tạo. Phù hợp đi làm, đi chơi và đi tiệc', 50),
(16, 'Giày Slingback Mũi Nhọn Quai Co Giãn', 545000, '5.jfif', 4, 2, 'Chất liệu nhân tạo. Phù hợp đi làm, đi chơi và đi tiệc', 50),
(17, 'Giày Slingback Mũi Nhọn Quai Co Giãn ', 545000, '6.jfif', 4, 2, 'Chất liệu nhân tạo. Phù hợp đi làm, đi chơi và đi tiệc', 50),
(18, 'Dép Quai Chữ V Đan Chéo Vân Cá Sấu ', 495000, '7.jfif', 5, 1, 'Da nhân tạo, Phù hợp đi chơi', 50),
(19, 'Dép Quai Chữ V Đan Chéo Vân Cá Sấu', 495000, '8.jfif', 5, 1, 'Da nhân tạo, Phù hợp đi chơi', 50),
(20, 'Dép Quai Chữ V Đan Chéo Vân Cá Sấu', 495000, '9.jfif', 5, 1, 'Da nhân tạo, Phù hợp đi chơi', 50),
(21, 'Giày Búp Bê Đính Nơ Phối Họa Tiết Nhiệt Đới', 525000, '10.jfif', 4, 1, 'Giày Búp Bê Đính Nơ Phối Họa Tiết Nhiệt Đới. Thích hợp đi làm, du lịch, đi dạo phố', 50),
(25, 't?i da c? s?u', 300000, '1.jfif', 1, 10, 't?i da c? s?u h?ng hi?u', 1),
(26, 't?i LV h?ng hi?u', 310000, '2.jfif', 2, 1000, '?? si?u ??t', 2),
(27, 't?i da c? s?u', 300000, '1.jfif', 1, 10, 't?i da c? s?u h?ng hi?u', 1),
(28, 't?i LV h?ng hi?u', 310000, '2.jfif', 2, 1000, '?? si?u ??t', 2),
(29, 't�i da c� s?u', 300000, '1.jfif', 1, 10, 't�i da c� s?u h�ng hi?u', 1),
(30, 't�i LV h�ng hi?u', 310000, '2.jfif', 2, 1000, '?? si�u ??t', 2),
(31, 't?i da c? s?u', 300000, '1.jfif', 1, 10, 't?i da c? s?u h?ng hi?u', 1),
(32, 't?i LV h?ng hi?u', 310000, '2.jfif', 2, 1000, '?? si?u ??t', 2);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon1`
--

CREATE TABLE `hoadon1` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hoadon1`
--

INSERT INTO `hoadon1` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(19, 6, '2023-03-21', 745000),
(20, 1, '2022-03-15', 123123),
(21, 1, '2023-02-22', 213123),
(22, 6, '2023-03-21', 1150000),
(23, 1, '2023-03-18', 1111111),
(24, 0, '2022-03-03', 213123),
(25, 1, '2023-03-18', 1111111),
(26, 1, '2022-03-03', 213123),
(27, 6, '2023-03-21', 1090000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang1`
--

CREATE TABLE `khachhang1` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text NOT NULL,
  `sodienthoai` varchar(12) NOT NULL,
  `vaitro` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `khachhang1`
--

INSERT INTO `khachhang1` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`, `vaitro`) VALUES
(4, 'a', 'a', '202cb962ac59075b964b07152d234b70', 'a@gmail.com', '', '', 0),
(6, 'tho', 'an', '202cb962ac59075b964b07152d234b70', 'an@gmail.com', 'ạdhg', '12313213', 0),
(7, 'Nguyên', 'nguyen', '202cb962ac59075b964b07152d234b70', 'nguyen@gmail.com', '', '', 0),
(8, 'admin', 'noen', '31d762d326beefef63ece175042c5dca', 'vantho1198vaqa@gmail.com', 'admin', 'admin', 0),
(9, 'admin', 'admin', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com', 'admin', '12312312', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan1`
--
ALTER TABLE `binhluan1`
  ADD PRIMARY KEY (`mabl`),
  ADD KEY `fk_masp_fk` (`mahh`);

--
-- Indexes for table `cthoadon1`
--
ALTER TABLE `cthoadon1`
  ADD PRIMARY KEY (`mactsp`);

--
-- Indexes for table `ctsp`
--
ALTER TABLE `ctsp`
  ADD PRIMARY KEY (`masp`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MASP`);

--
-- Indexes for table `hoadon1`
--
ALTER TABLE `hoadon1`
  ADD PRIMARY KEY (`masohd`);

--
-- Indexes for table `khachhang1`
--
ALTER TABLE `khachhang1`
  ADD PRIMARY KEY (`makh`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan1`
--
ALTER TABLE `binhluan1`
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cthoadon1`
--
ALTER TABLE `cthoadon1`
  MODIFY `mactsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ctsp`
--
ALTER TABLE `ctsp`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `MASP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `hoadon1`
--
ALTER TABLE `hoadon1`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `khachhang1`
--
ALTER TABLE `khachhang1`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan1`
--
ALTER TABLE `binhluan1`
  ADD CONSTRAINT `fk_masp_fk` FOREIGN KEY (`mahh`) REFERENCES `hanghoa` (`MASP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cthoadon1`
--
ALTER TABLE `cthoadon1`
  ADD CONSTRAINT `fk_cthd_mahd` FOREIGN KEY (`masohd`) REFERENCES `hoadon1` (`masohd`),
  ADD CONSTRAINT `fk_cthd_mahh` FOREIGN KEY (`mahh`) REFERENCES `hanghoa` (`mahh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
