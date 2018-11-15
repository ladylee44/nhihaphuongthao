-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 12:26 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(16) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'thanhhoa', 'hoa1998'),
(2, 'ngochuyen', '22222');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link_id` varchar(30) NOT NULL,
  `last_time_updated` date NOT NULL,
  `author_id` int(11) NOT NULL,
  `image` varchar(30) NOT NULL,
  `content` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `category_id`, `title`, `link_id`, `last_time_updated`, `author_id`, `image`, `content`) VALUES
(1, 4, 'Founders của Hanu Dispatch: Tài năng, xinh đẹp, đặc biệt biết nhiều ngoại ngữ.', '1', '2018-04-15', 26, 'a1.3.jpg', ''),
(2, 4, 'Vén bức màn sự thật đằng sau quán bún, cháo “cứt chuột”', '2', '2018-05-05', 22, 'c2.jpg', ''),
(7, 1, 'Sân vận động Hanu: Nơi tình yêu thăng hoa', '3', '2018-04-15', 25, 'c.jpg', ''),
(8, 4, 'Tiếng hét lạ trong nhà vệ sinh', '4', '2018-04-02', 24, 'v.jpg', ''),
(9, 3, '>Hanuers và chương trình tham quan, tìm hiểu PVcomBank', '5', '2018-03-22', 29, 's9.jpg', ''),
(10, 2, 'Hanu Guitar Club (HGC) cháy hết mình trong buổi Opening Day', '7', '2017-09-15', 27, 'e7.jpg', ''),
(11, 3, 'Ở Hanu thì ngồi học ở đâu?', '8', '2018-05-02', 28, 'a9.jpg', ''),
(12, 4, 'Thật đáng buồn với ý thức một bộ phận các bạn sinh viên', '9', '2017-12-20', 23, 'a7.jpg', ''),
(24, 3, 'Sự thật về admin xấu xí của Dispatch HANU', '', '2018-05-21', 7, 'bep.jpg', '\r\nTôi là Bẹp Sony-admin xấu xí của Dispatch. Tôi thừa nhận đã đi phẫu thuật thẩm mĩ để có được nhan sắc hiện tại. MẶc dù nó cũng chẳng đẹp là bao. Tôi xin lỗi vì đã lừa dối mọi người trong suốt thời gian qua :(('),
(25, 2, 'Ăn và Lăn', '', '2018-05-21', 5, 'bunca.jpg', 'Hãy đến với HANU để thưởng thức những bát bún cá ngon tuyệt vời nào =))'),
(27, 1, 'Tình yêu', '', '2018-05-21', 1, 'nyta.jpg', 'Xin chào các bạn. Hôm nay mình xin công bố người mình thương thầm trộm nhớ trong suốt thời gian qua'),
(28, 2, 'Từ nay hãy gọi tôi là ca sĩ', '', '2018-05-21', 2, 'chipu.png', 'Mai tớ phát hành album nghìn tỷ các bạn fan của Đu Đu nhớ ủng hộ nhé.\r\nYêu mọi người.'),
(29, 3, 'Bán trai các loại', '', '2018-05-21', 15, 'sj.jpg', 'Mình chuyên nhận bán buôn, bán lẻ các loại trai. Trai đẹp, trai xấu, trai ế, trai tồn kho lâu năm mình có sẵn nhé. Ai có nhu cầu order mình nhé');

-- --------------------------------------------------------

--
-- Table structure for table `article_link`
--

CREATE TABLE `article_link` (
  `link_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article_link`
--

INSERT INTO `article_link` (`link_id`, `article_id`, `link`) VALUES
(1, 1, 'article1.php'),
(2, 2, 'article3.php'),
(3, 7, 'article2.php'),
(4, 8, 'article4.php'),
(5, 9, 'article5.php'),
(7, 10, 'article6.php'),
(8, 11, 'article7.php'),
(9, 12, 'article8.php');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `authorid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `workplace` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`authorid`, `name`, `workplace`) VALUES
(22, 'Dan Rather', 'New York city'),
(23, 'Barbara Walters', 'America'),
(24, 'Wolf Blizter', 'CNN'),
(25, 'Wolf Blizter', 'ABC News'),
(26, 'Anderson Cooper', 'CNN'),
(27, 'Kate Adie', 'BBC'),
(28, 'Tim Russert', 'NBC News'),
(29, 'Christiane Amanpour', 'ABC News');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`) VALUES
(1, 'Tình yêu cóc nhái'),
(2, 'Giải trí 4fun'),
(3, 'Bể khổ trần gian'),
(4, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cmt_id` int(11) NOT NULL,
  `cmt` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cmt_id`, `cmt`, `user_id`, `article_id`) VALUES
(51, 'Xấu thật', 5, 24),
(52, 'Tớ ủng hộ nhé', 5, 27),
(53, 'Đúng là 1 ca phẫu thuật hỏng', 2, 24),
(54, 'Em yêu anh <3', 14, 28),
(55, 'Ngon đấy chế', 14, 25),
(56, 'Phốt này to quá bạn ơi', 1, 24),
(57, 'Xinh quá', 5, 1),
(59, 'Ghê quá', 5, 3),
(60, 'HANU hịn quá đi', 5, 2),
(63, 'Avatar xinh quá bạn ơi. Mình tình nguyện bao bạn ăn cả đời', 15, 25),
(64, 'Bạn ơi. Inbox mình với. Mình cần gấp!!!', 6, 29),
(65, 'Thảo ơi!! Bán anh đi.', 2, 29),
(66, 'Chỗ bạn bè lấy giá rẻ thôi nàng', 10, 29),
(67, 'Đánh trúng nhu cầu người dùng luôn. Nicesss!!', 13, 29),
(68, 'Đói quá', 22, 25),
(69, 'Tránh ra cho bổn cung lên ngôi', 22, 24),
(78, 'Tóc ngắn xấu thế', 20, 1),
(79, 'Cứt chuột cho bún nó mặn bạn ạ', 20, 2),
(80, 'Hôm nào rủ sơn đen ra hẹn hò', 20, 7),
(81, 'tội nghiệp bạn Bẹp xênh', 20, 8),
(82, 'Học hành đéo gì. T về quê cưới sơn đen', 20, 11),
(83, 'Ghita thì hỏi anh Cầm nhé', 20, 10),
(84, 'Bao giờ mới giàu đây. nghèo quá', 20, 9),
(85, 'Buồn quá. Ý thức tồi tệ', 20, 12),
(86, 'Xin các bạn đừng ném đá mình. Mình tổn thương lắm', 23, 24),
(87, 'a sample comment', 24, 7);

-- --------------------------------------------------------

--
-- Table structure for table `keyword`
--

CREATE TABLE `keyword` (
  `keyword_id` int(11) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `article_id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `tag_link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keyword`
--

INSERT INTO `keyword` (`keyword_id`, `keyword`, `article_id`, `link_id`, `tag_link`) VALUES
(1, 'hanu dispatch', 1, 1, 'hanudispatch.php'),
(2, 'Hanu', 2, 2, 'hanu.php'),
(3, 'tình yêu', 7, 3, 'love.php'),
(4, 'WC', 8, 4, 'wc.php'),
(5, 'Hanu', 10, 7, 'hanu.php'),
(6, 'Hanu', 11, 8, 'hanu.php'),
(7, 'Hanuers', 9, 5, 'hanuer.php'),
(8, 'Hanuers', 12, 9, 'hanuer.php'),
(9, 'Hanuers', 2, 2, 'hanuer.php'),
(10, 'quán xá', 2, 2, 'quan.php'),
(12, 'Hanu', 8, 4, 'hanu.php'),
(13, 'giải trí', 10, 7, 'giaitri.php'),
(14, 'white house', 11, 8, 'wh.php'),
(15, 'sân vận động', 7, 3, 'stadium.php'),
(16, 'sân vận động', 11, 8, 'stadium.php'),
(17, 'thư viện', 11, 8, 'lib.php'),
(18, 'quán xá', 11, 8, 'quan.php');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `photo_id` varchar(10) NOT NULL,
  `photo_url` varchar(100) NOT NULL,
  `album_id` varchar(50) NOT NULL,
  `user_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`photo_id`, `photo_url`, `album_id`, `user_id`) VALUES
('1', 'tienanh.jpg', '5', '1'),
('10', 'xuanlinh.jpg', '5', '10'),
('11', 'leminh.jpg', '5', '11'),
('12', 'kimngan.jpg', '5', '12'),
('13', 'thanhson.jpg', '5', '13'),
('14', 'ducthang.jpg', '5', '14'),
('15', 'phuongthao.jpg', '5', '15'),
('16', 'thuy.jpg', '5', '16'),
('17', 'tung.jpg', '5', '17'),
('18', 'phuong.jpg', '5', '18'),
('19', 'hongson.jpg', '5', '19'),
('2', 'minhduc.jpg', '5', '2'),
('20', 'minhtan.jpg', '5', '20'),
('21', 'nguyen.jpg', '5', '21'),
('3', 'nhiha.jpg', '5', '3'),
('4', 'minhhang.jpg', '5', '4'),
('5', 'thanhhoa.jpg', '5', '5'),
('6', 'vanhung.jpg', '5', '6'),
('7', 'ngochuyen.jpg', '5', '7'),
('8', 'mykhue.jpg', '5', '8'),
('9', 'thuylinh.jpg', '5', '9');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `ban` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(10) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `role`, `ban`, `username`, `password`) VALUES
(1, 0, 1, 'tienanh', '1111'),
(2, 0, 0, 'minhduc', '2222'),
(3, 0, 0, 'nhiha', '3333'),
(4, 0, 0, 'minhhang', '4444'),
(5, 1, 0, 'thanhhoa', '5555'),
(6, 0, 0, 'vanhung', '6666'),
(7, 1, 0, 'ngochuyen', '7777'),
(8, 0, 0, 'mykhue', '8888'),
(9, 0, 0, 'thuylinh', '9999'),
(10, 0, 0, 'xuanlinh', '1010'),
(11, 0, 0, 'leminh', '1111'),
(12, 0, 0, 'kimngan', '1212'),
(13, 0, 0, 'thanhson', '1313'),
(14, 0, 0, 'ducthang', '1414'),
(15, 0, 0, 'phuongthao', '1515'),
(16, 0, 0, 'nguyenthuy', '1616'),
(17, 0, 0, 'thanhtung', '1717'),
(18, 0, 0, 'minhphuong', '1818'),
(19, 0, 0, 'hongson', '1919'),
(20, 0, 0, 'minhtan', '2020'),
(21, 0, 0, 'hainguyen', '2121'),
(22, 0, 0, 'xinhgai', '123456'),
(23, 0, 0, 'bepxauxi', 'xãui'),
(24, 0, 0, 'camnh', '');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `userid` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `job` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `gender` varchar(7) CHARACTER SET utf8mb4 NOT NULL,
  `phone` varchar(20) NOT NULL,
  `DoB` date NOT NULL,
  `Avatar` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`userid`, `name`, `address`, `job`, `gender`, `phone`, `DoB`, `Avatar`) VALUES
(1, 'Hà Tiến Anh', 'Phú Thọ', 'Ngáo cần', 'Nam', '01694203939', '1998-10-14', 'tienanh.jpg'),
(2, 'Nguyễn Minh Đức', 'Phú Thọ', 'Nô lệ', 'Nam', '0978485015', '1997-04-07', 'minhduc.jpg'),
(3, 'Hồ Nhị Hà', 'Hà Đông', 'Nô lệ', 'Nữ', '0988351056', '1998-10-05', 'nhiha.jpg'),
(4, 'Nguyễn Minh Hằng', 'Thái Nguyên', 'Nô lệ', 'Nữ', '01634771774', '1998-11-30', 'minhhang.jpg'),
(5, 'Phạm Thanh Hoa', 'Hoàng Cung', 'Nữ hoàng', 'Nữ', '01656938906', '1998-01-02', 'thanhhoa.jpg'),
(6, 'Phạm Văn Hưng', 'Hà Nam', 'Nô lệ', 'Nam', '01648600111', '1998-09-21', 'vanhung.jpg'),
(7, 'Trần Ngọc Huyền', 'Nghệ An', 'Thái giám', 'Nữ', '01637911198', '1998-03-08', 'ngochuyen.jpg'),
(8, 'Giang Mỹ Khuê', 'Thái Bình', 'Nô lệ', 'Nữ', '0969212953', '1998-11-05', 'mykhue.jpg'),
(9, 'Đỗ Thị Thùy Linh', 'Hưng Yên', 'Nô lệ', 'Nữ', '01632371544', '1998-12-05', 'thuylinh.jpg'),
(10, 'Tống Xuân Linh', 'Ninh Bình', 'Nô lệ', 'Nam', '01632843434', '1998-08-11', 'xuanlinh.jpg'),
(11, 'Nguyễn Lê Minh', 'Hà Nam', 'Tú bà', 'Nam', '01687648787', '1998-12-05', 'leminh.jpg'),
(12, 'Đoàn Kim Ngân', 'Hà Nội', 'Cung nữ', 'Nữ', '01652428800', '1998-08-21', 'kimngan.jpg'),
(13, 'Phan Thanh Sơn', 'Vĩnh Phúc', 'Lính canh gác', 'Nam', '01697091999', '1998-07-04', 'thanhson.jpg'),
(14, 'Nguyễn Đức Thắng', 'Hà Nam', 'Kĩ nữ', 'Nam', '01649518777', '1998-01-21', 'ducthang.jpg'),
(15, 'Trần Phương Thảo', 'Hải Dương', 'Mama tổng quản', 'Nữ', '01648945566', '1998-07-30', 'phuongthao.jpg'),
(16, 'Nguyễn Thị Thủy', 'Vĩnh Phúc', 'Thái Tử Phi', 'Nữ', '01634030404', '1998-11-15', 'thuy.jpg'),
(17, 'Nguyễn Thanh Tùng', 'Vĩnh Phúc', 'Đạo sĩ', 'Nam', '01693827722', '1998-10-11', 'tung.jpg'),
(18, 'Lê Minh Phượng', 'Hà Đông', 'Kỹ nữ', 'Nữ', '01637499333', '1998-05-31', 'phuong.jpg'),
(19, 'Đỗ Hồng Sơn', 'Hà Nội', 'Cung nữ', 'Nam', '01636782666', '1998-06-06', 'hongson.jpg'),
(20, 'Nguyễn Minh Tân', 'Hà Nội', 'Nô tì', 'Nam', '0961344600', '1998-08-28', 'minhtan.jpg'),
(21, 'Đoàn Hải Nguyên', 'Hà Nội', 'Cận vệ', 'Nam', '01645061225', '1999-08-09', 'nguyen.jpg'),
(22, 'Xinh gái vô đối', 'Thiên cung', 'Thần tiên tỉ tỉ', 'Nữ', '19000109', '1998-01-02', 'xg.jpg'),
(23, 'Bẹp ngu ngốc', 'Thùng rác hôi hám', 'Vô công dồi nghề', 'Nữ', '016587975225', '1998-03-08', ''),
(24, '', '', '', 'Nam', '', '0000-00-00', 'chipu.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `article_link`
--
ALTER TABLE `article_link`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`authorid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cmt_id`);

--
-- Indexes for table `keyword`
--
ALTER TABLE `keyword`
  ADD PRIMARY KEY (`keyword_id`),
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cmt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `keyword`
--
ALTER TABLE `keyword`
  MODIFY `keyword_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
