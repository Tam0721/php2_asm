-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 04:46 AM
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
-- Database: `php2_asm`
--

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price_old` int(11) NOT NULL,
  `price_new` int(11) NOT NULL DEFAULT 0,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `iddm` int(10) NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 1,
  `special` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`id`, `name`, `price_old`, `price_new`, `img`, `mota`, `iddm`, `luotxem`, `trang_thai`, `special`) VALUES
(101, 'Ralph Sampson', 4998, 0, 'puma-Ralph-Sampson.jpg', 'Kiểu dáng giày sneaker thể thao cổ thấp \r\nPhom ôm dáng chân, dễ dàng di chuyển\r\nPhần đệm lót trong thấm hút mồ hôi tốt\r\nĐế giữa có độ đàn hồi tốt, hỗ trợ mọi hoạt động\r\nGam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện', 38, 17, 1, 0),
(103, 'Vans Classic Slip On ', 5559, 0, 'vans-classic-slipon.jpg', 'Họa tiết kẻ caro hay còn gọi là họa tiết kẻ caro là một trong những thương hiệu “độc quyền” của nhà Vans. Đây cũng là một trong những ấn tượng đáng nhớ nhất khi mọi người nhắc về giày Vans. Đôi giày này vẫn mang phiên bản Slip-on cổ điển nhưng chất liệu Canvas được phát huy và sử dụng một cách đặc biệt để tạo cảm giác thoải mái, mát mẻ cho đôi chân. Giày vải đế thấp đơn giản với rất ít dây buộc Logo thương hiệu VANS phía sau kết hợp với đế cao su siêu mềm đàn hồi.', 39, 15, 1, 0),
(104, 'ADIDAS HYPERTURF', 3199, 0, 'adidas-HYPERTURF.jpg', 'Dạo phố với phong cách mượn cảm hứng từ thiên nhiên hùng vĩ. Đôi Giày adidas Hyperturf mang đến cho bạn sự thoải mái khi khám phá những con phố mới hoặc dạo bước đến quán cà phê yêu thích. Các chất liệu vải ripstop, da nubuck, da lộn và vải lưới kết hợp tạo nên thân giày bền bỉ. Lớp đệm EVA siêu nhẹ kết hợp công nghệ Adiprene+ và FORMOTION để mang lại cảm giác nhẹ nhàng và nâng đỡ cho từng bước chân.', 37, 89, 1, 0),
(105, 'Puma RS-X', 2135, 0, 'puma-RS-X.jpg', 'Mẫu Sneaker Puma RSX là một trong những thiết kế huyền thoại của Puma. Đây là mẫu giày Chunky được đánh giá là xuất sắc nhất của hãng, thu hút được sự yêu thích của đông đảo giới trẻ. Đây thực sự là mẫu giày đã góp phần làm nên tên tuổi của Puma như hiện tại.', 38, 34, 1, 1),
(106, 'Jordan Series Mid', 4485, 0, 'Jordan-Series-Mid.jpg', 'Phần giữa của mô hình thời trang phía trước của Jordan Brand đã được lựa chọn cực kỳ kỹ lưỡng trong suốt cả năm, với ít hơn một số đề xuất được tung ra chỉ sau vài tháng bị loại bỏ kể từ cuối năm 2022. Tuy nhiên, thời tiết bắt đầu vào mùa thu mang đến thời điểm thích hợp cho Jordan Series Mid trở lại sau khi hợp tác với Maison Château Rouge vào tháng 6.', 36, 11, 1, 0),
(112, 'VANS VN0A5', 890, 0, 'vans-VN0A5KRDBZW.jpg', 'Vans VN0A5KRDBZW thuộc dòng Authentic Collage Black/White mới nhất trong bộ sưu tập của thương hiệu Vans', 39, 15, 1, 0),
(113, 'SuperStart', 2145, 0, 'superstart1.jpg', 'Suốt hơn 50 năm, đôi sneaker adidas Superstar luôn là lựa chọn hàng đầu của các huyền thoại thể thao và thời trang đường phố, kết nối các nhà kiến tạo đến từ mọi nền văn hóa. Mũi giày vỏ sò dễ dàng nhận diện ngay lập tức kết hợp với ba sọc viền răng cưa và các điểm nhấn adidas Originals. Luôn hợp mốt, giày có kiểu dáng kinh điển với chất liệu da cật tăng cường độ bền chắc và thoải mái.', 37, 25, 1, 0),
(114, 'LeBron 19', 4382, 1000, 'le19.webp', 'LeBron phát triển mạnh khi tiền đặt cược cao và áp lực tăng lên. LeBron 19 khai thác năng lượng đó bằng hệ thống đệm vừa khít và cập nhật. Ống lót bên trong vừa khít được kéo lại với nhau bằng một lớp phủ điêu khắc mà dây buộc xuyên qua để giúp ngăn bàn chân từ việc di chuyển bên trong giày. Các miếng đệm nhúng ở lưỡi gà và xung quanh cổ giày giúp giảm trọng lượng, giữ thẳng cổ chân và mang lại cho người chơi cảm giác an toàn cũng như sự tự tin để dốc hết sức khi trận đấu đang diễn ra.', 36, 18, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hinh_anh`
--

CREATE TABLE `hinh_anh` (
  `id` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hinh_anh`
--

INSERT INTO `hinh_anh` (`id`, `ma_hh`, `img`) VALUES
(18, 112, 'vans-VN0A5KRDBZW.jpg'),
(19, 112, 'vn0a5krdbzw-2_571f2771e0194b809a026fb42de51a65_small.webp'),
(20, 112, 'vn0a5krdbzw-3_af2ca02fd433406daee58aaf95aea705_small.webp'),
(21, 112, 'vn0a5krdbzw-web1_47f2098e739b46f997e6ae565b592de0_small.webp'),
(22, 114, 'le19-2.webp'),
(23, 114, 'le19-3.webp'),
(24, 114, 'le19-4.webp'),
(25, 113, '31cf91f6e16c4f0aa11caad6009a4590_9366.webp'),
(26, 113, '3708ab90979a4ba59535aad6009a2fa8_9366.webp'),
(27, 113, 'ff2e419f1eda4ebab23faad6009a3a9e_9366.webp'),
(28, 101, 'PUMA-x-TMC-Ralph-Sampson-Sneakers(1).webp'),
(29, 101, 'PUMA-x-TMC-Ralph-Sampson-Sneakers(2).webp'),
(30, 101, 'PUMA-x-TMC-Ralph-Sampson-Sneakers(3).webp'),
(31, 101, 'PUMA-x-TMC-Ralph-Sampson-Sneakers.webp'),
(32, 103, '2_2c4f03feec894860aa5127d5bb7fa579_master.webp'),
(33, 103, '3_2d4a9051fdcb4f92affb894c20e06161_master.webp'),
(34, 103, '4_fcfb1eae6e664a2987bc97790cad0307_master.webp'),
(35, 106, 'jordan-series-mid-mantra-orange-DA8026-081-2.webp'),
(36, 106, 'jordan-series-mid-mantra-orange-DA8026-081-3.webp'),
(37, 106, 'jordan-series-mid-mantra-orange-DA8026-081-5.webp'),
(38, 106, 'jordan-series-mid-mantra-orange-DA8026-081-6.webp'),
(39, 104, '5f277451d94e491ba73daecb00db6d3b_9366.webp'),
(40, 104, '6d776c9b4dc94b4aa649aecb00db829d_9366.webp'),
(41, 104, '9122b2eccdbc486a84f3aecb00db7826_9366.webp'),
(42, 104, 'fb30613c554849a5a6ecaecb00fccff0_9366.webp');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `id` int(10) NOT NULL COMMENT 'Mã loại hàng',
  `ten_loai` varchar(50) NOT NULL COMMENT 'Tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`id`, `ten_loai`) VALUES
(36, 'NIKE'),
(37, 'ADIDAS'),
(38, 'PUMA'),
(39, 'VANS'),
(45, 'CONVERSE'),
(46, 'demo'),
(47, 'demo2');

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(10) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `img`, `ho_ten`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(128, '', 'ADMIN', 'admin', '123', '', 'Thôn 1, Lộc Ngãi, Bảo Lâm, Lâm Đồng', '0383383053', 1),
(191, '', 'Nguyen Tan Duy', 'ntd', '456', 'ng.tanduy261203@gmail.com', 'Thới An, Quận 12', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hh_lh` (`iddm`);

--
-- Indexes for table `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ha_hh` (`ma_hh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `hinh_anh`
--
ALTER TABLE `hinh_anh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Mã loại hàng', AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1953;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `fk_hh_lh` FOREIGN KEY (`iddm`) REFERENCES `loai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD CONSTRAINT `fk_ha_hh` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
