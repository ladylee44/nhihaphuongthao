-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 06:27 PM
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
-- Database: `dbsexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keyword`
--

CREATE TABLE `keyword` (
  `keyid` int(10) NOT NULL,
  `keyword` varchar(50) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `keyword`
--

INSERT INTO `keyword` (`keyid`, `keyword`) VALUES
(1, 'jordan'),
(2, 'nike'),
(3, 'converse');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id`, `link`) VALUES
(1, 'article1.php'),
(2, 'article2.php');

-- --------------------------------------------------------

--
-- Table structure for table `newstype`
--

CREATE TABLE `newstype` (
  `id` int(10) UNSIGNED NOT NULL,
  `idType` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newstype`
--

INSERT INTO `newstype` (`id`, `idType`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Converse', '2018-05-08 06:16:41', '2018-05-08 06:18:32'),
(2, 2, 'Nike', '2018-05-08 06:18:32', '2018-05-08 06:18:32'),
(3, 3, 'Jordan', '2018-05-08 06:18:32', '2018-05-08 06:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `Photoid` int(10) NOT NULL,
  `albumid` int(10) NOT NULL,
  `idposts` int(10) NOT NULL,
  `photourl` text COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `content` text,
  `hotnews` tinyint(4) DEFAULT NULL,
  `createdate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `views` int(255) DEFAULT NULL,
  `idType` int(10) DEFAULT NULL,
  `photourl` text,
  `linkid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `hotnews`, `createdate`, `updatedate`, `views`, `idType`, `photourl`, `linkid`) VALUES
(1, 'The Moon-Landing Graphics Appear On The Nike Air Huarache', '\'Sneaker designs and aesthetic have long drawn inspiration from the final frontier, and with last week’s release of a lunar-landing inspired Air Force 1  and the recent release of a lunar-landing Huarache arriving this week, space is as relevant in sneaker design as ever. This new Air Huarache interation features an upper composed of tan mesh and suede, while the space detailing comes courtesy of a navy blue star print on the midfoot and heel underlays. A red Huarache tongue patch and stripe provide extra contrast, a white midsole and navy outsole round off the shoe’s look, and the insole features a graphic print of an astronaut planting a Nike flag on the moon for a extra hidden pop of flair. These space-age Huaraches are available now at Nike.com for $120 USD.\\r\\nNike Air Huarache\\r\\nAVAILABLE AT NIKE\\r\\n$120\\r\\nColor: Moon Particle/White/Neutral Indigo/Neutral Indigo\\r\\nStyle Code: AQ0553-200\'', 1, '2018-05-16 06:14:16', '2018-05-16 10:22:27', 20000, 2, 'nikeairhuarache.jpg, nikeairhuarache2.jpg, nikeairhuarache3.jpg', 1),
(2, 'First Look At The Air Jordan 13 “Tinker Hatfield”', 'Jordan Brand aims to bring yet another one of Tinker Hatfield’s sketches to life with the Air Jordan 13 “Tinker”. The similarities to the Air Jordan 13 are quite apparent, with the dimpled nylon upper and the paw-inspired outsole clearly being represented into this unreleased version, but based on the legendary architect’s sketches dated August 22nd, 1996, this alternate version utilizes a mid-foot strap and an overall lower-cut profile. Additionally, the jewel piece on the heel has more of a triangular shape compared to the eye-shaped sphere on the current model. These are slated to release later this Fall, and it wouldn’t be surprising if these dropped on the day the sketch was completed – August 22nd. See photos of two colorways ahead.\\r\\nAir Jordan 13 Tinker\\r\\nFall 2018', 0, '2018-05-16 02:11:00', '2018-05-16 07:09:10', 10000, 3, 'airjordanhatfield.jpg,airjordanhatfield2.jpg,airjordanhatfield3.jpg', 2),
(3, 'Where To Buy The Nike x Kendrick Lamar / TDE The Championship Tour Merch', 'RATE THISRATE THISRATE THISRATE THISRATE THISRATE THISRATE THISRATE THISRATE THIS 4.64 / 5 106 VOTESKendrick Lamar’s Top Dawg Entertainment is about to embark on “The Championship Tour”, a 29-city streak of live shows showcasing Kendrick Lamar, SZA, Schoolboy Q, and more top talent. Throughout the tour, TDE will open up The Championship Shop pop-ups at every city, with six of these shops in conjunction with Nike. At those select locations, exclusive merchandise will be available, including a new black colorway of the Nike Cortez Kenny III, long-sleeve tees, hoodies, and hats. While the Nike x TDE x Nike Cortez Kenny apparel will be available at the select locations below, the Cortez Kenny III will be available exclusively through Nike SNKRS. Additionally, select merch will be available on TopDawgEnt.com. See the official images, price list, and pop-up shop locations below.\\r\\nNike x The Championship Shop\\r\\nLA (Blends): May 9-13\\r\\nHouston (Social Status): May 19-20\\r\\nNYC (Concepts): May 26-30\\r\\nBoston (Bodega): June 4-5\\r\\nToronto (Livestock): June 11-12\\r\\nChicago (Notre): June 14-15\\r\\nNike x The Championship Shop Price List\\r\\nNike x TDE Long-sleeve: $55\\r\\nNike x TDE Hoodie: $85\\r\\nNike x TDE Hat: $35\\r\\nNike Cortez Kenny III: N/A\\r\\nNike x Cortez Kenny Long-sleeve: $55\\r\\nNike x Cortez Kenny Hoodie: $85\\r\\nNike x Cortez Kenny Hat: $35', 1, '2018-05-16 07:08:09', '2018-05-16 16:16:15', 15000, 2, 'niketde.jpg,niketde2.jpg,niketde3.jpg', 0),
(4, 'How To Buy The OFF WHITE x Converse Chuck Taylor', 'Converse and OFF WHITE will finally release the tenth and final installment to Virgil Abloh’s “The Ten Icons” collection soon. This iconoclastic iteration of the classic sneaker features translucent uppers that expose the inner workings of the Chuck Taylor, with Virgil’s signature “LEFT” and “RIGHT” markings placed at the toe-cap of the shoe. While the shoes will indeed release at select retailers, Converse confirms that they will first release exclusively on Converse.com and at Off__White. For now, sign up at Converse.com to get ahead of the notifications; more details to follow.', 1, '2018-05-16 11:10:06', '2018-05-16 12:22:00', 30000, 1, 'whiteconverse.jpg,whiteconverse2.jpg,whiteconverse3.jpg', 0),
(5, 'Official Images Of The Air Jordan 11 “Cap And Gown”', 'After countless previews over the last few months, the Air Jordan 11 Retro dropping on May 26th emerges in the form of the brand’s official images. This all-black pair of Jordan 11s has received countless nicknames such as “Blackout” and “Prom Night”, but Jordan Brand’s official moniker is “Cap And Gown” as it is set to release near the end of the school year. However, the Jumpman is well aware of the fact that the Air Jordan 11 has been a mainstay at formal outings, so go ahead and rock these on prom night. Peep a few additional angles of the Air Jordan 11 Cap And Gown aka the Air Jordan 11 “Prom Night” below.', 0, '2018-05-16 02:12:18', '2018-05-22 06:00:23', 1600, 3, 'airjordan11.jpg,airjordan112.jpg,airjordan113.jpg', 0),
(6, 'First Look At The Nike KD 11', 'Kevin Durant’s eleventh signature shoe, the Nike KD 11, has been officially revealed by Nike. The KD11 features new construction from head to toe as it moves on from the visible full-length Zoom Air for one that is encapsulated by Nike React foam cushioning, a pairing that has proven to be mighty when it comes to offering the proper support for athletes. Additionally, the shoes make use of a one-piece Flyknit upper and an external heel that scoops up high at the heel and ends with the pull-tab extension. KD’s logo appears on the heel as well, while the concentric circle detailing suggests a call-out to Durant’s shooting ability. Kevin Durant’s new shoes typically launch towards the end of June and will likely debut during the NBA Playoffs and potentially in the Finals, should the Warriors defeat the Rockets in the Western Conference Finals. See the photos of the KD 11 below stay tuned for release date information.', 0, '2018-05-16 06:21:00', '2018-05-30 09:15:25', 19000, 1, 'KD11.jpg,KD112.jpg,KD113.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `createdate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `createdate`) VALUES
(1, 'hatienanh', 'hatienanh@gmail.com', 'anh98', '2018-05-17 22:25:19'),
(2, 'minhduc', 'nguyenminhduc@gmail.com', 'duc97', '2018-05-17 22:25:19'),
(3, 'thanhhoa', 'phamthanhhoa@gmail.com', 'hoa98', '2018-05-17 22:25:19'),
(4, 'ngochuyen', 'tranngochuyen@gmail.com', 'huyen98', '2018-05-17 22:25:19'),
(5, 'mykhue', 'giangmykhue@gmail.com', 'khue98', '2018-05-17 22:25:19'),
(6, 'thuylinh', 'dothithuylinh@gmail.com', 'linh98', '2018-05-17 22:24:21'),
(7, 'xuanlinh', 'tongxuanlinh@gmail.com', 'linh98', '2018-05-17 22:24:22'),
(8, 'leminh', 'nguyenleminh@gmail.com', 'minh98', '2018-05-17 22:24:22'),
(17, 'kimngan', 'doankimngan@gmail.com', 'ngan98', '2018-05-17 22:24:22'),
(9, 'thanhson', 'hanthanhson@gmail.com', 'son98p', '2018-05-17 22:24:22'),
(10, 'ducthang', 'nguyenducthang@gmail.com', 'thang98', '2018-05-17 22:24:22'),
(11, 'nguyenthuy', 'nguyenthithuy@gmail.com', 'thuy98', '2018-05-17 22:24:22'),
(12, 'thanhtung', 'nguyenthanhtung@gmail.com', 'tung98', '2018-05-17 22:24:22'),
(13, 'minhphuong', 'leminhphuong@gmail.com', 'phuong98', '2018-05-17 22:24:22'),
(14, 'hongson', 'dohongson@gmail.com', 'son98', '2018-05-17 22:24:22'),
(15, 'minhtan', 'nguyenminhtan@gmail.com', 'tan98', '2018-05-17 22:24:22'),
(16, 'hainguyen', 'doanhainguyen@gmail.com', 'nguyen98', '2018-05-17 22:24:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
