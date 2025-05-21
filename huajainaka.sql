-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2025 at 12:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `huajainaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text DEFAULT NULL,
  `name2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description2` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id`, `name`, `description`, `name2`, `description2`, `image`) VALUES
(14, '1', NULL, 'หห', NULL, NULL),
(11, '6', NULL, '8', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'tarn', '710a2e2430f1ac216d6caa3bdb82797c');

-- --------------------------------------------------------

--
-- Table structure for table `tb_astrology_course`
--

CREATE TABLE `tb_astrology_course` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'เปิด',
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `pin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_astrology_course`
--

INSERT INTO `tb_astrology_course` (`id`, `name`, `description`, `image`, `video`, `price`, `status`, `create_date`, `update_date`, `pin`) VALUES
(2, 'คอร์สเรียนออนไลน์โหราศาสตร์ ฉบับ 1', 'คอร์สเรียนออนไลน์โหราศาสตร์', 'e220096c4735281b99b998d032d325e5-358.jpeg', '728117993.183002-5765.mp4', 5000, 'เปิด', '2024-01-28 14:01:42', '2024-01-28 14:59:41', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_auspicious_registration`
--

CREATE TABLE `tb_auspicious_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'เปิด',
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `pin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_auspicious_registration`
--

INSERT INTO `tb_auspicious_registration` (`id`, `name`, `description`, `image`, `video`, `status`, `create_date`, `update_date`, `pin`) VALUES
(1, 'เทส', 'เทส', '4f71c170c6b197d7733d3a0a4b551e4f-5060.jpeg', '', 'เปิด', '2023-11-20 17:34:43', '2024-01-21 19:06:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'เปิด'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_banner`
--

INSERT INTO `tb_banner` (`id`, `name`, `description`, `image`, `create_date`, `update_date`, `status`) VALUES
(1, 'หัวใจ พญานาค', 'ความรัก ความผูกพัน ความเชื่อ และความศรัทธา', '1279522574-6570.jpeg', '2023-11-17 17:52:27', '2023-11-17 17:52:27', 'เปิด'),
(2, 'ยินดีต้อนรับสู่ หัวใจนาคา', 'มีหัวใจที่เปี่ยมด้วยความศรัทธาลึกถึงแก่นแท้', 'img_bg_1-1982.jpg', '2023-11-17 17:52:52', '2023-11-17 23:43:43', 'เปิด'),
(3, 'หัวใจ พญานาค.', 'ความรัก ความผูกพัน ความเชื่อ และความศรัทธา', 'img_bg_2-6878.jpg', '2023-11-17 17:53:39', '2023-12-05 19:40:26', 'เปิด');

-- --------------------------------------------------------

--
-- Table structure for table `tb_color_car`
--

CREATE TABLE `tb_color_car` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'เปิด',
  `pin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_color_car`
--

INSERT INTO `tb_color_car` (`id`, `name`, `description`, `image`, `video`, `create_date`, `update_date`, `status`, `pin`) VALUES
(1, 'เทส', 'เทส', '4f71c170c6b197d7733d3a0a4b551e4f-2588.jpeg', '', '2023-11-20 17:35:00', '2024-01-21 19:07:49', 'เปิด', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_comment`
--

CREATE TABLE `tb_comment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `create_date` datetime NOT NULL,
  `page` varchar(255) NOT NULL,
  `id_comment` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_comment`
--

INSERT INTO `tb_comment` (`id`, `name`, `comment`, `create_date`, `page`, `id_comment`) VALUES
(10, 'หญิง', 'น่าสนใจมากๆ อยากลองบูชา', '2024-01-21 15:44:52', 'holy_object', 1),
(9, 'หญิง', 'ชอบฟังคำทำนายมากค่ะ สาธุ', '2024-01-21 15:03:16', 'horoscope', 4),
(8, 'หญิง', 'น้อมรับคำทำนาย', '2024-01-21 14:55:50', 'horoscope', 4),
(7, 'หญิง', 'เยี่ยม', '2024-01-21 14:55:26', 'horoscope', 3),
(11, 'หญิง', 'อยากได้', '2024-01-21 15:53:10', 'wallpaper', 1),
(12, 'หญิง', 'สั่งไปแล้วนะคะ ตามลิ้งค์ในหน้าเว็บค่ะ', '2024-01-21 16:01:17', 'stickerline', 1),
(13, 'หญิง', 'สาธุ อนุโมทนา', '2024-01-21 16:13:21', 'lucky_number', 1),
(14, 'หญิง', 'ทะเบียนรถนี้ดี เลขดีจริงค่ะ', '2024-01-21 16:25:18', 'auspicious_registration', 1),
(15, 'หญิง', 'ทุกวันนี้ใช้สีขาว แต่ถูกโฉลกกับสีแดงค่ะ ', '2024-01-21 16:30:12', 'color_car', 1),
(16, 'หญิง', 'อยากดูฤกษ์แต่งงานประจำปี 67 ค่ะ', '2024-01-21 16:34:46', 'good_time', 1),
(17, 'หญิง', 'ข้อมูลดีมากเลยค่ะ', '2024-01-21 16:41:15', 'enhance_luck', 1),
(18, 'หญิง', 'ชอบ และติดตามตลอดเลยค่ะ สาธุ', '2024-01-21 16:48:43', 'story', 1),
(19, 'หญิง', 'จะลองปฏิบัติให้ได้ทุกวันนะคะ สาธุ', '2024-01-21 16:55:02', 'meditate', 1),
(20, 'หญิง', 'สาธุๆๆๆ', '2024-01-21 17:00:59', 'phrathat', 1),
(21, 'หญิง', 'ไว้ว่างจะไปไหว้ตามคลิปค่ะ สาธุ', '2024-01-21 17:05:08', 'phrathat_year', 1),
(22, 'หญิง', 'ลูกรักและศรัทธามากๆค่ะ', '2024-01-21 17:11:25', 'naka_history', 1),
(23, 'หญิง', 'ขอบคุณสำหรับคำทำนายดีๆค่ะ', '2024-01-21 21:11:12', 'horoscope', 4),
(24, 'หญิง', 'เพชรสีสวย', '2024-01-28 13:49:07', 'diamond_phayanaga', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `topic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id`, `name`, `email`, `topic`, `description`, `create_date`, `update_date`) VALUES
(14, 'หญิง', 'kalamangying@gmail.com', 'สอบถาม ติดต่อซื้อ', 'สอบถาม ติดต่อซื้อ สร้อยพญานาค', '2024-01-21 19:19:42', '2024-01-21 19:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `tb_diamond_phayanaga`
--

CREATE TABLE `tb_diamond_phayanaga` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'เปิด',
  `pin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_diamond_phayanaga`
--

INSERT INTO `tb_diamond_phayanaga` (`id`, `name`, `description`, `image`, `video`, `price`, `create_date`, `update_date`, `status`, `pin`) VALUES
(1, 'เพชรพญานาค', 'ความหมายของสีแต่ละสีของเพชรพญานาค. 8 ปีที่ผ่านมา. โดย เจ้าของร้าน. สีแต่ละสีของเพชรพญานาคและลูกแก้วพญานาคซึ่งได้บ่งบอกถึง', 'user336085_pic152486_1423061845-6455.jpg', 'https://www.youtube.com/embed/KYDq5mzhfAE', 1000, '2023-11-20 17:23:34', '2024-01-21 18:56:15', 'เปิด', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_enhance_luck`
--

CREATE TABLE `tb_enhance_luck` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'เปิด',
  `pin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_enhance_luck`
--

INSERT INTO `tb_enhance_luck` (`id`, `name`, `description`, `image`, `video`, `create_date`, `update_date`, `status`, `pin`) VALUES
(1, 'เทส', 'เทส', '4f71c170c6b197d7733d3a0a4b551e4f-1287.jpeg', '', '2023-11-20 17:35:32', '2024-01-21 19:10:36', 'เปิด', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_good_time`
--

CREATE TABLE `tb_good_time` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'เปิด',
  `pin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_good_time`
--

INSERT INTO `tb_good_time` (`id`, `name`, `description`, `image`, `video`, `create_date`, `update_date`, `status`, `pin`) VALUES
(1, 'เทส', 'เทส', '4f71c170c6b197d7733d3a0a4b551e4f-7046.jpeg', 'https://www.youtube.com/embed/KYDq5mzhfAE', '2023-11-20 17:35:19', '2024-01-21 19:09:15', 'เปิด', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_holy_object`
--

CREATE TABLE `tb_holy_object` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'เปิด',
  `pin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_holy_object`
--

INSERT INTO `tb_holy_object` (`id`, `name`, `description`, `image`, `video`, `price`, `create_date`, `update_date`, `status`, `pin`) VALUES
(1, 'หัวข้อ', 'โหราศาสตร์โบราณเป็นศาสตร์แห่งการดูดวงที่มีประวัติศาสตร์มาอย่างยาวนาน มีความเกี่ยวข้องกับการทำนายดวงชะตาบ้านเมือง ทำนายโชคชะตาของแต่ละบุคคล และทำนายอนาคต โดยใช้วันเดือนปี เวลา และสถานที่มาคำนวณตำแหน่งการเคลื่อนที่ของดวงดาวราศีทั้ง 12', '157839_0-3218.jpg', '', 1000, '2023-11-20 16:57:02', '2024-01-21 18:54:27', 'เปิด', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_horoscope`
--

CREATE TABLE `tb_horoscope` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'เปิด',
  `pin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_horoscope`
--

INSERT INTO `tb_horoscope` (`id`, `name`, `description`, `image`, `video`, `create_date`, `update_date`, `status`, `pin`) VALUES
(1, 'ราศีเมษ // โชคลาภ ก้อนใหญ่ // มกราคม - มิถุนายน 2567', 'ราศีเมษ // คำพยากรณ์ครึ่งปีแรก มกราคม - มิถุนายน 2567 // ปีแห่งโชคลาภ มีรายได้หลายทาง งานเหนื่อยแน่นอน แต่รวยยย!!!', 'เมษ-4352.jpg', 'https://www.youtube.com/embed/81f-zqW5WvY', '2023-11-17 17:56:16', '2023-12-10 12:01:09', 'เปิด', 0),
(2, 'ราศีพฤษภ // โชคก้อนใหญ่มาก ปีแห่งความร่ำรวย // มกราคม - มิถุนายน 2567', 'ราศีพฤษภ // คำพยากรณ์ครึ่งปีแรก มกราคม - มิถุนายน 2567 // โชคก้อนใหญ่มาก ปีแห่งความร่ำรวย โอกาสทองมาถึงแล้ว', 'พฤษภ-5155.jpg', 'https://www.youtube.com/embed/S7L1olTTkiI', '2023-12-05 13:17:55', '2024-01-21 18:22:55', 'เปิด', 2),
(3, 'ราศีเมถุน // ดวงงานรุ่ง ธุรกิจปัง รับโชคใหญ่ๆ เงินใหญ่ๆ ต้นปี 2567 // มกราคม - มิถุนายน 2567', 'ราศีเมถุน // คำพยากรณ์ครึ่งปีแรก มกราคม - มิถุนายน 2567 // ดวงงานรุ่ง ธุรกิจปัง รับโชคใหญ่ๆ เงินใหญ่ๆ ต้นปี 2567', 'เมถุน-6349.jpg', 'https://www.youtube.com/embed/FBtAL7omBuc', '2023-12-07 16:29:02', '2023-12-11 08:51:08', 'เปิด', 0),
(4, 'ราศีกรกฎ // งานดี เงินปัง มีโชคใหญ่มากรออยู่ ยิ่งลุย ยิ่งรวย // มกราคม - มิถุนายน 2567', 'ราศีกรกฎ // คำพยากรณ์ครึ่งปีแรก มกราคม - มิถุนายน 2567 // งานดี เงินปัง มีโชคใหญ่มากรออยู่ ยิ่งลุย ยิ่งรวย', 'กรกฎ-4161.jpg', 'https://www.youtube.com/embed/O3tN6T-Zu6o', '2023-12-11 08:54:37', '2024-01-21 18:18:31', 'เปิด', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lucky_number`
--

CREATE TABLE `tb_lucky_number` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'เปิด',
  `pin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_lucky_number`
--

INSERT INTO `tb_lucky_number` (`id`, `name`, `description`, `image`, `video`, `create_date`, `update_date`, `status`, `pin`) VALUES
(1, 'เทส', 'เทส', 'dfqror7owzulq5fa5ntt9gsmnrz83yzo3mpmkkxwcz05chc4fcbb4dyw1maeuhtvru7-3775.webp', '', '2023-11-20 17:34:27', '2024-01-21 19:04:33', 'เปิด', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_meditate`
--

CREATE TABLE `tb_meditate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'เปิด',
  `pin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_meditate`
--

INSERT INTO `tb_meditate` (`id`, `name`, `description`, `image`, `video`, `create_date`, `update_date`, `status`, `pin`) VALUES
(1, 'เทส', 'เทส', '4f71c170c6b197d7733d3a0a4b551e4f-8513.jpeg', 'https://www.youtube.com/embed/KYDq5mzhfAE', '2023-11-20 17:36:02', '2024-01-21 19:13:48', 'เปิด', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_member_course`
--

CREATE TABLE `tb_member_course` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `slip_payment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `comment` text NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `pin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'เปิด',
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id`, `name`, `url`, `status`, `create_date`, `update_date`) VALUES
(1, 'หน้าแรก', 'index', 'เปิด', '2023-11-16 12:36:55', '2023-11-16 12:36:55'),
(2, 'เกี่ยวกับเรา', 'about', 'เปิด', '2023-11-16 12:37:35', '2023-11-16 12:37:35'),
(3, 'พยากรณ์ดวงชะตา', 'horoscope', 'เปิด', '2023-11-16 12:37:39', '2023-11-16 12:37:39'),
(4, 'จองคิวดูดวงส่วนตัว', 'reserve_horoscope', 'เปิด', '2023-11-16 12:37:42', '2023-11-16 12:37:42'),
(5, 'คอร์สโหราศาสตร์', 'astrology_course', 'เปิด', '2023-11-16 12:37:43', '2023-11-16 12:37:43'),
(6, 'วัตถุมงคลเสริมดวง', 'holy_object', 'เปิด', '2023-11-16 12:37:45', '2023-11-16 12:37:45'),
(7, 'เพชรพญานาค', 'diamond_phayanaga', 'เปิด', '2023-11-16 12:37:48', '2023-11-16 12:37:48'),
(8, 'วอลเปเปอร์มงคล', 'wallpaper', 'เปิด', '2023-11-16 12:37:49', '2023-11-16 12:37:49'),
(9, 'เบอร์เสริมดวง', 'lucky_number', 'เปิด', '2023-11-16 12:37:51', '2023-11-16 12:37:51'),
(10, 'ทะเบียนรถมงคล', 'auspicious_registration', 'เปิด', '2023-11-16 12:37:53', '2023-11-16 12:37:53'),
(11, 'สีรถถูกโฉลก', 'color_car', 'เปิด', '2023-11-16 12:37:55', '2023-11-16 12:37:55'),
(12, 'ฤกษ์งามยามดี', 'good_time', 'เปิด', '2023-11-16 12:37:57', '2023-11-16 12:37:57'),
(13, 'เสริมดวงตามราศี', 'enhance_luck', 'เปิด', '2023-11-16 12:37:59', '2023-11-16 12:37:59'),
(14, 'เรื่องเล่าพระอริยเจ้า', 'story', 'เปิด', '2023-11-16 12:38:01', '2023-11-16 12:38:01'),
(15, 'ปฎิบัติสมาธิกรรมฐาน', 'meditate', 'เปิด', '2023-11-16 12:38:03', '2023-11-16 12:38:03'),
(16, 'พระธาตุประจำวันเกิด', 'phrathat', 'เปิด', '2023-11-16 12:38:05', '2023-11-16 12:38:05'),
(17, 'พระธาตุประจำปีเกิด', 'phrathat_year', 'เปิด', '2023-11-16 12:38:07', '2023-11-16 12:38:07'),
(18, 'ประวัติองค์พญานาคาฯ', 'naka_history', 'เปิด', '2023-11-16 12:38:09', '2023-11-16 12:38:09'),
(19, 'ติดต่อเรา', 'contact', 'เปิด', '2023-11-16 12:38:11', '2023-11-16 12:38:11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_naka_history`
--

CREATE TABLE `tb_naka_history` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'เปิด',
  `pin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_naka_history`
--

INSERT INTO `tb_naka_history` (`id`, `name`, `description`, `image`, `video`, `create_date`, `update_date`, `status`, `pin`) VALUES
(1, 'เทส', 'เทส', '4f71c170c6b197d7733d3a0a4b551e4f-7763.jpeg', 'https://www.youtube.com/embed/KYDq5mzhfAE', '2023-11-20 17:36:50', '2024-01-21 19:18:44', 'เปิด', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_phrathat`
--

CREATE TABLE `tb_phrathat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'เปิด',
  `pin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_phrathat`
--

INSERT INTO `tb_phrathat` (`id`, `name`, `description`, `image`, `video`, `create_date`, `update_date`, `status`, `pin`) VALUES
(1, 'เทส', 'เทส', '4f71c170c6b197d7733d3a0a4b551e4f-7853.jpeg', 'https://www.youtube.com/embed/KYDq5mzhfAE', '2023-11-20 17:36:18', '2024-01-21 19:15:08', 'เปิด', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_phrathat_year`
--

CREATE TABLE `tb_phrathat_year` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'เปิด',
  `pin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_phrathat_year`
--

INSERT INTO `tb_phrathat_year` (`id`, `name`, `description`, `image`, `video`, `create_date`, `update_date`, `status`, `pin`) VALUES
(1, 'เทส', 'เทส', '4f71c170c6b197d7733d3a0a4b551e4f-368.jpeg', 'https://www.youtube.com/embed/KYDq5mzhfAE', '2023-11-20 17:36:34', '2024-01-21 19:17:07', 'เปิด', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile`
--

CREATE TABLE `tb_profile` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `line` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `facebook` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `twitter` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `instagram` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `youtube` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bank_num1` varchar(255) NOT NULL,
  `bank_num2` varchar(255) NOT NULL,
  `bank_num3` varchar(255) NOT NULL,
  `bank_num4` varchar(255) NOT NULL,
  `bank_name1` varchar(255) NOT NULL,
  `bank_name2` varchar(255) NOT NULL,
  `bank_name3` varchar(255) NOT NULL,
  `bank_name4` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_profile`
--

INSERT INTO `tb_profile` (`id`, `logo`, `name`, `description`, `keywords`, `line`, `phone`, `facebook`, `twitter`, `instagram`, `youtube`, `email`, `bank_num1`, `bank_num2`, `bank_num3`, `bank_num4`, `bank_name1`, `bank_name2`, `bank_name3`, `bank_name4`) VALUES
(1, 'logo-4883.png', 'หัวใจนาคา | Huajainaka', 'หัวใจนาคา | Huajainaka', 'หัวใจนาคา | Huajainaka', 'https://line.me/ti/p/@bank164', '0983915322', 'https://www.facebook.com/Bank164?mibextid=2JQ9oc', '', '', '', '', '1111111111111', '2222222222222', '3333333333333', '4444444444444', 'หัวใจนาคา', 'หัวใจนาคา', 'หัวใจนาคา', 'หัวใจนาคา');

-- --------------------------------------------------------

--
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sex` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'เปิด'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_register`
--

INSERT INTO `tb_register` (`id`, `name`, `sex`, `birthday`, `email`, `phone`, `password`, `create_date`, `update_date`, `status`) VALUES
(43, 'ying naruemon', 'หญิง', '1990-08-30', 'kalamangying@gmail.com', '0864954997', '81dc9bdb52d04dc20036dbd8313ed055', '2024-01-28 14:16:33', '2024-01-28 19:47:49', 'เปิด'),
(44, 'eee', 'หญิง', '1900-01-05', 'e@gmail.com', '0864954997', '81dc9bdb52d04dc20036dbd8313ed055', '2024-06-26 20:46:57', '2024-06-26 20:46:57', 'เปิด');

-- --------------------------------------------------------

--
-- Table structure for table `tb_reserve_horoscope`
--

CREATE TABLE `tb_reserve_horoscope` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'เปิด'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_reserve_horoscope`
--

INSERT INTO `tb_reserve_horoscope` (`id`, `name`, `description`, `image`, `status`) VALUES
(1, 'จองคิวดูดวงส่วนตัว', 'จองคิว #ดูดวง รบกวนจัดส่งข้อมูลให้ครบถ้วนจึงจะรบจองนะครับ เนื่องจากก่อนถึงเวลาจองคิวดูดวงต้องใช้เวลาในการคำนวณ และพิมพ์คำทำนาย จองคิวได้ทั้งที ควรถามคำถามอะไรเวลาไปดูดวงบ้างนะ ไม่ว่าจะคำถามเวลาดูดวง อัพเดท 2566 / 2023 ทั้ง ดวงการเงิน การงาน การเรียน ความรัก หรือสุขภาพ จองคิวได้ทั้งที ควรถามคำถามอะไรเวลาไปดูดวงบ้างนะ ไม่ว่าจะคำถามเวลาดูดวง อัพเดท 2566 / 2023 ทั้ง ดวงการเงิน การงาน การเรียน ความรัก หรือสุขภาพ จองคิวได้ทั้งที ควรถามคำถามอะไรเวลาไปดูดวงบ้างนะ ไม่ว่าจะคำถามเวลาดูดวง อัพเดท 2566 / 2023 ทั้ง ดวงการเงิน การงาน การเรียน ความรัก หรือสุขภาพ จองคิวได้ทั้งที ควรถามคำถามอะไรเวลาไปดูดวงบ้างนะ', 'o9fdyrvxkoqtpqyqamgx-7915.webp', 'เปิด');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stickerline`
--

CREATE TABLE `tb_stickerline` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'เปิด',
  `pin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_stickerline`
--

INSERT INTO `tb_stickerline` (`id`, `name`, `description`, `image`, `price`, `create_date`, `update_date`, `status`, `pin`) VALUES
(1, 'เทส', 'เทส', 'r1-9329.png', 111, '2023-11-20 17:31:08', '2024-01-21 19:02:41', 'เปิด', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_story`
--

CREATE TABLE `tb_story` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'เปิด',
  `pin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_story`
--

INSERT INTO `tb_story` (`id`, `name`, `description`, `image`, `video`, `create_date`, `update_date`, `status`, `pin`) VALUES
(1, 'เทส', 'เทส', '4f71c170c6b197d7733d3a0a4b551e4f-3506.jpeg', 'https://www.youtube.com/embed/KYDq5mzhfAE', '2023-11-20 17:35:47', '2024-01-21 19:12:18', 'เปิด', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_wallpaper`
--

CREATE TABLE `tb_wallpaper` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'เปิด',
  `pin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_wallpaper`
--

INSERT INTO `tb_wallpaper` (`id`, `name`, `description`, `image`, `video`, `price`, `create_date`, `update_date`, `status`, `pin`) VALUES
(1, 'พญานาคสีทอง', 'พญานาคสีทอง', '159385-2866.jpg', '', '1000', '2023-11-20 16:59:53', '2024-01-21 19:01:13', 'เปิด', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_astrology_course`
--
ALTER TABLE `tb_astrology_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_auspicious_registration`
--
ALTER TABLE `tb_auspicious_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_color_car`
--
ALTER TABLE `tb_color_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_diamond_phayanaga`
--
ALTER TABLE `tb_diamond_phayanaga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_enhance_luck`
--
ALTER TABLE `tb_enhance_luck`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_good_time`
--
ALTER TABLE `tb_good_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_holy_object`
--
ALTER TABLE `tb_holy_object`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_horoscope`
--
ALTER TABLE `tb_horoscope`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lucky_number`
--
ALTER TABLE `tb_lucky_number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_meditate`
--
ALTER TABLE `tb_meditate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_member_course`
--
ALTER TABLE `tb_member_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_naka_history`
--
ALTER TABLE `tb_naka_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_phrathat`
--
ALTER TABLE `tb_phrathat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_phrathat_year`
--
ALTER TABLE `tb_phrathat_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_reserve_horoscope`
--
ALTER TABLE `tb_reserve_horoscope`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_stickerline`
--
ALTER TABLE `tb_stickerline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_story`
--
ALTER TABLE `tb_story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_wallpaper`
--
ALTER TABLE `tb_wallpaper`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_astrology_course`
--
ALTER TABLE `tb_astrology_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_auspicious_registration`
--
ALTER TABLE `tb_auspicious_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_color_car`
--
ALTER TABLE `tb_color_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_diamond_phayanaga`
--
ALTER TABLE `tb_diamond_phayanaga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_enhance_luck`
--
ALTER TABLE `tb_enhance_luck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_good_time`
--
ALTER TABLE `tb_good_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_holy_object`
--
ALTER TABLE `tb_holy_object`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_horoscope`
--
ALTER TABLE `tb_horoscope`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_lucky_number`
--
ALTER TABLE `tb_lucky_number`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_meditate`
--
ALTER TABLE `tb_meditate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_member_course`
--
ALTER TABLE `tb_member_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_naka_history`
--
ALTER TABLE `tb_naka_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_phrathat`
--
ALTER TABLE `tb_phrathat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_phrathat_year`
--
ALTER TABLE `tb_phrathat_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_profile`
--
ALTER TABLE `tb_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_reserve_horoscope`
--
ALTER TABLE `tb_reserve_horoscope`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_stickerline`
--
ALTER TABLE `tb_stickerline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_story`
--
ALTER TABLE `tb_story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_wallpaper`
--
ALTER TABLE `tb_wallpaper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
