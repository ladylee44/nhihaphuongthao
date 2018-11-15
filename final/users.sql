-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 07:15 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1601040007, 'Hà Tiến Anh', 'hatienanh@gmail.com', 'hatienanh98', NULL, NULL),
(1601040033, 'Nguyễn Minh Đức', 'nguyenminhduc@gmail.com', 'nguyenminhduc97', NULL, NULL),
(1601040075, 'Phạm Thanh Hoa', 'phamthanhhoa@gmail.com', 'phamthanhhoa98', NULL, NULL),
(1601040102, 'Trần Ngọc Huyền', 'tranngochuyen@gmail.com', 'tranngochuyen98', NULL, NULL),
(1601040109, 'Giang Mỹ Khuê', 'giangmykhue@gmail.com', 'giangmykhue98', NULL, NULL),
(1601040120, 'Đỗ Thị Thuỳ Linh', 'dothithuylinh@gmail.com', 'dothithuylinh98', NULL, NULL),
(1601040131, 'Tống Xuân Linh', 'tongxuanlinh@gmail.com', 'tongxuanlinh98', NULL, NULL),
(1601040149, 'Nguyễn Lê Minh', 'nguyenleminh@gmail.com', 'nguyenleminh98', NULL, NULL),
(1601040160, 'Đoàn Kim Ngân ', 'doankimngan@gmail.com', 'doankimngan98', NULL, NULL),
(1601040191, 'Phan Thanh Sơn', 'phanthanhson@gmail.com', 'phanthanhson98', NULL, NULL),
(1601040197, 'Nguyễn Đức Thắng', 'nguyenducthang@gmail.com', 'nguyenducthang98', NULL, NULL),
(1601040219, 'Nguyễn Thị Thuỷ', 'nguyenthithuy@gmail.com', 'nguyenthithuy98', NULL, NULL),
(1601040239, 'Nguyễn Thanh Tùng', 'nguyenthanhtung@gmail.com', 'nguyenthanhtung98', NULL, NULL),
(1601040330, 'Lê Minh Phượng', 'leminhphuong@gmail.com', 'leminhphuong98', NULL, NULL),
(1601040337, 'Đỗ Hồng Sơn', 'dohongson@gmail.com', 'dohongson98', NULL, NULL),
(1601040339, 'Nguyễn Minh Tân', 'nguyenminhtan@gmail.com', 'nguyenminhtan98', NULL, NULL),
(1701040119, 'Đoàn Hải Nguyên', 'doanhainguyen@gmail.com', 'doanhainguyen98', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1701040120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
