-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 06:34 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idUser` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idPosts` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`idUser`, `content`, `created_at`, `updated_at`, `idPosts`) VALUES
(1601040007, 'Nice!', '2018-05-07 17:18:29', '2018-05-07 17:18:29', 1),
(1601040033, 'oh my god', '2018-05-08 06:12:30', '2018-05-08 06:12:30', 3),
(1601040109, 'sjkkjbfjdfs', '2018-05-08 06:12:30', '2018-05-08 06:12:30', 4),
(1601040131, 'How to buy? ', '2018-05-08 06:13:32', '2018-05-08 06:13:32', 1),
(1601040160, 'Beautiful ', '2018-05-08 06:13:32', '2018-05-08 06:13:32', 2);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hotnews` int(11) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `idType` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idPosts` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Title`, `content`, `photo`, `hotnews`, `views`, `idType`, `created_at`, `updated_at`, `idPosts`) VALUES
('The Moon-Landing Graphics Appear On The Nike Air Huarache', 'Sneaker designs and aesthetic have long drawn inspiration from the final frontier, and with last week’s release of a lunar-landing inspired Air Force 1  and the recent release of a lunar-landing Huarache arriving this week, space is as relevant in sneaker design as ever. This new Air Huarache interation features an upper composed of tan mesh and suede, while the space detailing comes courtesy of a navy blue star print on the midfoot and heel underlays. A red Huarache tongue patch and stripe provide extra contrast, a white midsole and navy outsole round off the shoe’s look, and the insole features a graphic print of an astronaut planting a Nike flag on the moon for a extra hidden pop of flair. These space-age Huaraches are available now at Nike.com for $120 USD.\r\nNike Air Huarache\r\nAVAILABLE AT NIKE\r\n$120\r\nColor: Moon Particle/White/Neutral Indigo/Neutral Indigo\r\nStyle Code: AQ0553-200', 'https://sneakernews.com/wp-content/uploads/2018/04/nike-air-huarache-moon-landing-aq0553-200.jpg\r\n', 3, 1000, 2, '2018-05-08 06:19:51', '2018-05-08 06:19:51', 1),
('First Look At The Air Jordan 13 “Tinker Hatfield”', 'Jordan Brand aims to bring yet another one of Tinker Hatfield’s sketches to life with the Air Jordan 13 “Tinker”. The similarities to the Air Jordan 13 are quite apparent, with the dimpled nylon upper and the paw-inspired outsole clearly being represented into this unreleased version, but based on the legendary architect’s sketches dated August 22nd, 1996, this alternate version utilizes a mid-foot strap and an overall lower-cut profile. Additionally, the jewel piece on the heel has more of a triangular shape compared to the eye-shaped sphere on the current model. These are slated to release later this Fall, and it wouldn’t be surprising if these dropped on the day the sketch was completed – August 22nd. See photos of two colorways ahead.\r\nAir Jordan 13 Tinker\r\nFall 2018', 'https://sneakernews.com/wp-content/uploads/2018/05/air-jordan-13-tinker-hatfield-black-2.jpg?w=780&h=547&crop=1', 4, 101, 3, '2018-05-07 16:56:28', '2018-05-07 16:56:28', 2),
('Where To Buy The Nike x Kendrick Lamar / TDE The Championship Tour Merch', 'RATE THISRATE THISRATE THISRATE THISRATE THISRATE THISRATE THISRATE THISRATE THIS 4.64 / 5 106 VOTESKendrick Lamar’s Top Dawg Entertainment is about to embark on “The Championship Tour”, a 29-city streak of live shows showcasing Kendrick Lamar, SZA, Schoolboy Q, and more top talent. Throughout the tour, TDE will open up The Championship Shop pop-ups at every city, with six of these shops in conjunction with Nike. At those select locations, exclusive merchandise will be available, including a new black colorway of the Nike Cortez Kenny III, long-sleeve tees, hoodies, and hats. While the Nike x TDE x Nike Cortez Kenny apparel will be available at the select locations below, the Cortez Kenny III will be available exclusively through Nike SNKRS. Additionally, select merch will be available on TopDawgEnt.com. See the official images, price list, and pop-up shop locations below.\r\nNike x The Championship Shop\r\nLA (Blends): May 9-13\r\nHouston (Social Status): May 19-20\r\nNYC (Concepts): May 26-30\r\nBoston (Bodega): June 4-5\r\nToronto (Livestock): June 11-12\r\nChicago (Notre): June 14-15\r\nNike x The Championship Shop Price List\r\nNike x TDE Long-sleeve: $55\r\nNike x TDE Hoodie: $85\r\nNike x TDE Hat: $35\r\nNike Cortez Kenny III: N/A\r\nNike x Cortez Kenny Long-sleeve: $55\r\nNike x Cortez Kenny Hoodie: $85\r\nNike x Cortez Kenny Hat: $35', 'https://sneakernews.com/wp-content/uploads/2018/05/nike-top-dawg-entertainment-cortez-kenny-1-the-championship-tour-release-info-2.jpg', 3, 405, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3),
('How To Buy The OFF WHITE x Converse Chuck Taylor', 'Converse and OFF WHITE will finally release the tenth and final installment to Virgil Abloh’s “The Ten Icons” collection soon. This iconoclastic iteration of the classic sneaker features translucent uppers that expose the inner workings of the Chuck Taylor, with Virgil’s signature “LEFT” and “RIGHT” markings placed at the toe-cap of the shoe. While the shoes will indeed release at select retailers, Converse confirms that they will first release exclusively on Converse.com and at Off__White. For now, sign up at Converse.com to get ahead of the notifications; more details to follow.', 'https://sneakernews.com/wp-content/uploads/2018/04/off-white-converse-chuck-taylor-official-release-info.jpg', 4, 500, 1, '2018-05-07 17:00:21', '2018-05-07 17:00:21', 4),
('Official Images Of The Air Jordan 11 “Cap And Gown”', 'After countless previews over the last few months, the Air Jordan 11 Retro dropping on May 26th emerges in the form of the brand’s official images. This all-black pair of Jordan 11s has received countless nicknames such as “Blackout” and “Prom Night”, but Jordan Brand’s official moniker is “Cap And Gown” as it is set to release near the end of the school year. However, the Jumpman is well aware of the fact that the Air Jordan 11 has been a mainstay at formal outings, so go ahead and rock these on prom night. Peep a few additional angles of the Air Jordan 11 Cap And Gown aka the Air Jordan 11 “Prom Night” below.', 'https://sneakernews.com/wp-content/uploads/2018/05/air-jordan-11-cap-and-gown.jpg?w=780&h=547&crop=1', 1, 615, 3, '2018-05-07 17:11:43', '2018-05-07 17:11:43', 5),
('TDE Tour Merch Revealed, How To Buy The OFF WHITE x Converse Chuck Taylor, And More Of This Week’s Top Stories', 'We can’t remember a week that has gone by without significant news out of Virgil Abloh’s camp, and this week is no different. Abloh’s OFF WHITE “Chuck Taylor” design is finally ready to release and complete “The Ten” collection, and the OFF WHITE x Nike Zoom Fly Mercurial Flyknit has been previewed as well. Jordan Brand introduced its next slate of releases which was highlighted by the Air Jordan 3 “International Pack” and the Air Jordan 12 International Flight. Kendrick Lamar, TDE, and Nike unveiled their upcoming crop of merchandise which includes Kung Fu Kenny’s third Nike Cortez collaboration as well. adidas had an interesting week on the Kanye front, as the brand had to deal with speculation regarding whether or not they intended on relinquishing their partnership with the controversial rapper. For all that and more, check out our latest edition of Top Stories below.', 'https://sneakernews.com/wp-content/uploads/2018/05/ts0.jpg?w=780&h=547&crop=1', 5, 590, 1, '2018-05-07 17:11:43', '2018-05-07 17:11:43', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1601040007, 'hatienanh', 'hatienanh@gmail.com', 'hatienanh98', '2018-05-07 23:04:26', '2018-05-07 23:04:26'),
(1601040033, 'minhduc', 'nguyenminhduc@gmail.com', 'nguyenminhduc97', '2018-05-07 23:07:13', '2018-05-07 23:07:13'),
(1601040075, 'thanhhoa', 'phamthanhhoa@gmail.com', 'phamthanhhoa98', '2018-05-07 23:07:13', '2018-05-07 23:07:13'),
(1601040102, 'ngochuyen', 'tranngochuyen@gmail.com', 'tranngochuyen98', '2018-05-07 23:07:13', '2018-05-07 23:07:13'),
(1601040109, 'mykhue', 'giangmykhue@gmail.com', 'giangmykhue98', '2018-05-07 23:07:13', '2018-05-07 23:07:13'),
(1601040120, 'thuylinh', 'dothithuylinh@gmail.com', 'dothithuylinh98', '2018-05-07 23:07:13', '2018-05-07 23:07:13'),
(1601040131, 'xuanlinh', 'tongxuanlinh@gmail.com', 'tongxuanlinh98', '2018-05-07 23:07:13', '2018-05-07 23:07:13'),
(1601040149, 'leminh', 'nguyenleminh@gmail.com', 'nguyenleminh98', '2018-05-07 23:07:41', '2018-05-07 23:07:41'),
(1601040160, 'kimngan', 'doankimngan@gmail.com', 'doankimngan98', '2018-05-07 23:07:13', '2018-05-07 23:07:13'),
(1601040191, 'thanhson', 'phanthanhson@gmail.com', 'phanthanhson98', '2018-05-07 23:07:13', '2018-05-07 23:07:13'),
(1601040197, 'ducthang', 'nguyenducthang@gmail.com', 'nguyenducthang98', '2018-05-07 23:07:13', '2018-05-07 23:07:13'),
(1601040219, 'nguyenthuy', 'nguyenthithuy@gmail.com', 'nguyenthithuy98', '2018-05-07 23:07:13', '2018-05-07 23:07:13'),
(1601040239, 'thanhtung', 'nguyenthanhtung@gmail.com', 'nguyenthanhtung98', '2018-05-07 23:07:13', '2018-05-07 23:07:13'),
(1601040330, 'minhphuong', 'leminhphuong@gmail.com', 'leminhphuong98', '2018-05-07 23:07:13', '2018-05-07 23:07:13'),
(1601040337, 'hongson', 'dohongson@gmail.com', 'dohongson98', '2018-05-07 23:07:25', '2018-05-07 23:07:25'),
(1601040339, 'minhtan', 'nguyenminhtan@gmail.com', 'nguyenminhtan98', '2018-05-07 10:00:00', '2018-05-07 23:07:13'),
(1701040119, 'hainguyen', 'doanhainguyen@gmail.com', 'doanhainguyen98', '2018-05-07 23:07:14', '2018-05-07 23:07:14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
