-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 09:59 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kapadyak`
--
CREATE DATABASE IF NOT EXISTS `db_kapadyak` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_kapadyak`;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment_content` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `date_commented` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL,
  `comment_image` varchar(150) NOT NULL,
  `access` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_content`, `post_id`, `date_commented`, `member_id`, `comment_image`, `access`) VALUES
(1, 'Tanga', 186, '06/13/2022 | 09:17:47pm', 0, '../comment_images/', 'Member'),
(2, 'BOBO\r\n', 186, '06/13/2022 | 09:18:53pm', 0, '../comment_images/', 'Member'),
(3, 'SHEESH lapa kami tino 2log', 186, '06/13/2022 | 09:29:19pm', 4, '../comment_images/', 'Member'),
(4, 'qew\r\n', 191, '06/14/2022 | 12:51:11am', 3, '../comment_images/', 'Member'),
(5, 'sample ', 191, '06/14/2022 | 01:04:51am', 3, 'comment_imagesdownload-removebg-preview.png', 'Member'),
(6, 'Try sa thread', 191, '06/14/2022 | 01:31:33am', 1, 'comment_images180420.jpg', 'Member'),
(7, 'zxczc', 186, '06/14/2022 | 02:07:36pm', 4, 'comment_images', 'Member'),
(8, 'qweqwe   ', 186, '06/14/2022 | 02:08:14pm', 4, 'comment_images', 'Member'),
(9, 'zazsda ', 186, '06/14/2022 | 02:08:33pm', 4, 'comment_images', 'Member'),
(10, '123 tangina xampp', 193, '06/14/2022 | 05:02:02pm', 4, 'comment_imagesdownload-removebg-preview.png', 'Member'),
(11, 'XAMPP ANO NA', 193, '06/14/2022 | 05:21:38pm', 4, 'comment_images', 'Member'),
(12, '123', 220, '06/15/2022 | 09:20:27pm', 3, 'comment_images', 'Member'),
(13, 'ss', 220, '06/15/2022 | 09:26:36pm', 3, '../comment_images117593634_2064531857023724_8225686972895946028_n.jpg', 'Member'),
(14, 'banana', 235, '06/16/2022 | 07:30:05am', 1, '../comment_imagesdownload.jpg', 'Member'),
(15, 'ang pogi ko talaga', 237, '06/16/2022 | 07:33:22am', 1, '../comment_images', 'Member'),
(16, 'availabale pa ba?', 232, '06/16/2022 | 07:38:59am', 1, '../comment_images', 'Member'),
(17, 'qweqweqweqweqweqweqweqweqw', 253, '06/16/2022 | 03:45:10pm', 1, '../comment_images', 'Member'),
(18, 'asd', 255, '06/16/2022 | 06:17:53pm', 4, '../comment_images', 'Member'),
(19, 'asdasd', 255, '06/17/2022 | 12:25:40am', 4, '../comment_images/Saez.png', 'Member'),
(20, 'dd', 266, '06/18/2022 | 04:52:51am', 3, '../comment_images/', 'Admin'),
(21, 's', 274, '06/18/2022 | 05:01:38am', 3, '../comment_images/', 'Admin'),
(22, 'sdd', 227, '06/18/2022 | 05:06:24am', 3, '../comment_images/', 'Admin'),
(23, 'dd', 227, '06/18/2022 | 05:06:36am', 3, '../comment_images/', 'Admin'),
(24, 'send', 227, '06/18/2022 | 05:07:00am', 3, '../comment_images/', 'Admin'),
(25, 'sssss', 274, '06/18/2022 | 05:10:12am', 3, '../comment_images/Attendance_November29.png', 'Admin'),
(26, 'ss', 274, '06/18/2022 | 05:15:55am', 3, '../../comment_images/241768555_414521843366636_6879296023248564204_n.jpg', 'Admin'),
(27, 's', 277, '06/18/2022 | 05:32:32am', 1, '../comment_images/Attendance_November29.png', 'Member'),
(28, 's', 277, '06/18/2022 | 05:40:38am', 3, '../../comment_images/download.jpg', 'Admin'),
(29, '22', 277, '06/18/2022 | 05:44:59am', 1, '../comment_images/Attendance_November29.png', 'Member'),
(30, 's', 279, '06/18/2022 | 05:55:39am', 1, '../comment_images/', 'Member'),
(31, 'dddddd', 279, '06/18/2022 | 05:56:57am', 3, '../comment_images/download.jpg', 'Admin'),
(32, 'd', 286, '06/18/2022 | 06:05:01am', 3, '../comment_images/Saez.png', 'Admin'),
(33, 'q', 292, '06/18/2022 | 06:15:44am', 1, '../comment_images/ss.png', 'Member'),
(34, 'dd', 292, '06/18/2022 | 06:16:04am', 3, '../comment_images/lambo.jpg', 'Admin'),
(35, '22EE', 222, '06/18/2022 | 08:13:42pm', 4, '../comment_images/', 'Admin'),
(36, '22', 222, '06/18/2022 | 08:13:50pm', 4, '../comment_images/', 'Admin'),
(37, 'tanginamorin', 300, '06/19/2022 | 04:35:48pm', 15, '../comment_images/', 'Member'),
(49, 'eeerrrr', 421, '06/25/2022 | 07:58:37am', 4, '../comment_images/TestingMode2_Catacutan.png', 'Member'),
(45, 'admin nagpost ', 381, '06/20/2022 | 04:56:11am', 5, '../comment_images/download.jpg', 'Admin'),
(48, 's', 421, '06/25/2022 | 07:32:27am', 4, '../comment_images/', 'Member'),
(50, 'sdsd', 421, '06/25/2022 | 07:59:27am', 9, '../comment_images/Attendance_November29.png', 'Admin'),
(51, 'ee', 414, '06/25/2022 | 08:10:15am', 4, '../comment_images/TestingMode1_Catacutan.png', 'Member'),
(52, '123', 414, '06/25/2022 | 08:10:53am', 9, '../comment_images/Attendance_November29.png', 'Admin'),
(53, 'ss', 423, '06/25/2022 | 08:45:32am', 4, '../comment_images/TestingMode2_Catacutan.png', 'Member'),
(54, 'ss', 425, '06/25/2022 | 08:54:41am', 9, '../comment_images/117593634_2064531857023724_8225686972895946028_n.jpg', 'Admin'),
(55, 'ss', 423, '06/25/2022 | 08:55:40am', 9, '../comment_images/', 'Admin'),
(56, 'sss', 423, '06/25/2022 | 08:56:31am', 4, '../comment_images/FinalScore-Midterm.png', 'Member'),
(57, 'how much is the cost of you are renting? ', 426, '06/30/2022 | 12:32:52pm', 4, '../comment_images/', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `email_status` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `sex` enum('Male','Female') DEFAULT NULL,
  `contact_number` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `online_status` text NOT NULL,
  `topic_ctr` varchar(255) NOT NULL,
  `threads_ctr` varchar(255) NOT NULL,
  `replies_ctr` varchar(255) NOT NULL,
  `access` varchar(50) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `email_address`, `email_status`, `username`, `password`, `confirm_password`, `first_name`, `middle_name`, `last_name`, `dob`, `sex`, `contact_number`, `address`, `image`, `online_status`, `topic_ctr`, `threads_ctr`, `replies_ctr`, `access`, `unique_id`, `status`, `theme`) VALUES
(4, 'shunsuki1216@gmail.com', 1, 'paks', '$2y$10$A9FXBunJvKRNPNYIcl66kOzUhoHNQYzOQCCee2xmeTZL82bzoYGum', '123', 'Neil ', 'Anthony', 'Aspiras', '2000-12-16', 'Male', 123, 'Luacan, Bataan', '../uploadss/79935761_1220715214793075_5752219428603297792_n.jpg', 'active', '55', '24', '9', '', 0, '', ''),
(20, 'qq@gmail.com', NULL, NULL, NULL, '202cb962ac59075b964b07152d234b70', 'ss', NULL, 'ss', NULL, NULL, NULL, NULL, '1666278566310552940_1101423270481475_1761560776841951752_n.jpg', '', '', '', '', '', 1122994738, 'Offline', ''),
(21, 'ss@gmail.com', NULL, NULL, NULL, '202cb962ac59075b964b07152d234b70', 'ss', NULL, 'ss', NULL, NULL, NULL, NULL, '1666288735117593634_2064531857023724_8225686972895946028_n.jpg', '', '', '', '', '', 1313587753, 'Offline', ''),
(22, 'is@gmail.com', NULL, NULL, NULL, '202cb962ac59075b964b07152d234b70', 'Pogi', NULL, 'Ako', NULL, NULL, NULL, NULL, '1666291162download.jpg', '', '', '', '', '', 455443526, 'Offline', ''),
(23, 'bb@gmail.com', NULL, NULL, '202cb962ac59075b964b07152d234b70', NULL, 'vb', NULL, 'bb', NULL, NULL, NULL, NULL, '1666291219241768555_414521843366636_6879296023248564204_n.jpg', '', '', '', '', '', 1565348490, 'Online', ''),
(24, 'isaevans0425@gmail.com', NULL, NULL, '202cb962ac59075b964b07152d234b70', NULL, 'issah', NULL, 'isdf', NULL, NULL, NULL, NULL, '1666291679Attendance_November29.png', '', '', '', '', '', 169403952, 'Online', ''),
(25, 'issahnevan@gmail.com', 1, 'issahnevan', '$2y$10$wAZaFQeT9f65rXz0stUUQ.cWTEDePmmz/tcTN/V011S/3fLKuQAyS', 'Pogiako123*', 'Issah ', 'Nevan ', 'Catacutan', '2001-04-25', 'Male', 966812021, 'Luacan, Dinalupihan, Bataan', '', 'active', '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `message_content` text NOT NULL,
  `status` varchar(15) NOT NULL,
  `date_messaged` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL,
  `message_image` varchar(150) NOT NULL,
  `sender_id` varchar(15) NOT NULL,
  `subject` text NOT NULL,
  `access` text NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `iv` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `message_content`, `status`, `date_messaged`, `member_id`, `message_image`, `sender_id`, `subject`, `access`, `incoming_msg_id`, `outgoing_msg_id`, `iv`) VALUES
(303, 'SSSS', 'Read', '06/18/2022  |  08:14:56pm', 3, '../msg_images/', '4', 'TADD', 'Admin', 0, 0, ''),
(233, '', 'Unread', '06/17/2022  |  07:37:51am', 0, '../msg_images/', '', '', '', 0, 0, ''),
(131, '123', 'Unread', '06/15/2022  |  07:08:49pm', 3, 'msg_images/', '1', '123123', '', 0, 0, ''),
(132, '123qewe1', 'Unread', '06/15/2022  |  07:09:24pm', 3, 'msg_images/', '1', '123123', '', 0, 0, ''),
(133, '123', 'Unread', '06/15/2022  |  07:10:53pm', 3, 'msg_images/', '1', '123123', '', 0, 0, ''),
(134, '123', 'Unread', '06/15/2022  |  07:11:18pm', 3, 'msg_images/', '1', '123123', '', 0, 0, ''),
(135, '123', 'Unread', '06/15/2022  |  07:12:07pm', 3, 'msg_images/', '1', '123123', '', 0, 0, ''),
(136, '123', 'Unread', '06/15/2022  |  01:12:41pm', 3, 'msg_images/', '1', '123123', '', 0, 0, ''),
(137, '123', 'Unread', '06/15/2022  |  01:14:05pm', 3, 'msg_images/', '1', '123123', '', 0, 0, ''),
(138, 'qweqwe', 'Unread', '06/15/2022  |  01:21:41pm', 3, 'msg_images/', '1', '123123', '', 0, 0, ''),
(139, 'qweqwe', 'Unread', '06/15/2022  |  01:22:04pm', 3, 'msg_images/Attendance_November29.png', '1', '123123', '', 0, 0, ''),
(140, 'qweqwe', 'Unread', '06/15/2022  |  01:22:17pm', 3, 'msg_images/', '1', '123123', '', 0, 0, ''),
(141, 'taena', 'Unread', '06/15/2022  |  01:22:25pm', 3, 'msg_images/', '1', '123123', '', 0, 0, ''),
(142, 'qwe', 'Unread', '06/15/2022  |  07:23:32pm', 3, 'msg_images/', '1', '123123', '', 0, 0, ''),
(143, 'BAGO', 'Unread', '06/15/2022  |  07:37:04pm', 3, 'msg_images/', '1', '123123', '', 0, 0, ''),
(144, 'WW', 'Unread', '06/15/2022  |  07:38:09pm', 3, '', '1', '123123', '', 0, 0, ''),
(145, '', 'Unread', '06/15/2022  |  07:38:26pm', 3, '', '1', '', '', 0, 0, ''),
(146, 'DF', 'Unread', '06/15/2022  |  07:38:50pm', 3, '', '1', '123123', '', 0, 0, ''),
(238, 's', 'Unread', '06/18/2022  |  04:02:55pm', 3, '/msg_images/', '1', 's', 'Member', 0, 0, ''),
(177, 'qwe', 'Unread', '06/17/2022  |  12:27:55am', 3, '/msg_images/', '4', 'qwe', 'Member', 0, 0, ''),
(313, 'z', 'Read', '06/19/2022  |  11:09:20pm', 15, '../msg_images/', '4', 'z', 'Member', 0, 0, ''),
(322, 'ww', 'Read', '06/20/2022  |  01:54:21am', 15, '../msg_images/', '4', 'ww', 'Member', 0, 0, ''),
(334, 'ddddd', 'Unread', '06/20/2022  |  02:26:11am', 0, 'msg_images/', '4', 'gising ka pa?', 'Member', 0, 0, ''),
(335, '22', 'Unread', '06/20/2022  |  02:27:25am', 0, 'msg_images/', '4', 'gising ka pa?', 'Member', 0, 0, ''),
(336, 's', 'Unread', '06/20/2022  |  02:32:02am', 6, '../msg_images/117593634_2064531857023724_8225686972895946028_n.jpg', '', 's', 'Admin', 0, 0, ''),
(337, 'dd', 'Unread', '06/20/2022  |  02:39:20am', 3, '../msg_images/download.jpg', '4', 'dd', 'Member', 0, 0, ''),
(347, 'eto mrerply', 'Unread', '06/19/2022  |  11:05:05pm', 0, '../msg_images/download.jpg', '4', 'eto send admin', '', 0, 0, ''),
(400, 'sss', 'Read', '06/25/2022  |  08:49:50am', 9, '../msg_images/TestingMode2_Catacutan.png', '4', 'd', '', 0, 0, ''),
(401, 'ssss', 'Unread', '06/25/2022  |  08:50:54am', 9, '../msg_images/TestingMode1_Catacutan.png', '4', 'd', '', 0, 0, ''),
(361, 'hi', 'Read', '06/20/2022  |  10:41:15am', 19, '../msg_images/', '', 'hi', 'Admin', 0, 0, ''),
(362, 'hello', 'Unread', '06/20/2022  |  10:42:24am', 0, '../msg_images/', '19', 'hi', '', 0, 0, ''),
(363, 'hi', 'Read', '06/20/2022  |  10:44:47am', 19, '../msg_images/', '', 'hi', 'Admin', 0, 0, ''),
(398, 'd', 'Read', '06/25/2022  |  08:45:58am', 9, '../msg_images/TestingMode2_Catacutan.png', '4', 'd', 'Member', 0, 0, ''),
(399, 'ss', 'Read', '06/25/2022  |  08:46:10am', 4, '../msg_images/117593634_2064531857023724_8225686972895946028_n.jpg', '9', 'd', 'Admin', 0, 0, ''),
(397, 's', 'Read', '06/25/2022  |  08:40:41am', 9, '../msg_images/FinalScore-Midterm.png', '4', 's', 'Member', 0, 0, ''),
(382, 'ss', 'Unread', '06/25/2022  |  02:12:47am', 0, '../msg_images/FinalScore-Midterm.png', '4', 'hyy', '', 0, 0, ''),
(383, '22', 'Unread', '06/25/2022  |  02:17:26am', 0, '../msg_images/TestingMode2_Catacutan.png', '4', 'hyy', '', 0, 0, ''),
(240, '123', 'Unread', '06/18/2022  |  04:08:31pm', 3, '/msg_images/', '1', '123', 'Member', 0, 0, ''),
(243, '', 'Unread', '06/18/2022  |  10:18:15am', 3, '../msg_images/', '1', '', '', 0, 0, ''),
(244, '', 'Unread', '06/18/2022  |  10:20:46am', 3, '../msg_images/', '1', '', '', 0, 0, ''),
(245, '', 'Unread', '06/18/2022  |  10:20:46am', 3, '../msg_images/', '1', '', '', 0, 0, ''),
(246, '', 'Unread', '06/18/2022  |  10:20:46am', 3, '../msg_images/', '1', '', '', 0, 0, ''),
(247, '', 'Unread', '06/18/2022  |  10:20:47am', 3, '../msg_images/', '1', '', '', 0, 0, ''),
(248, '123', 'Unread', '06/18/2022  |  04:22:26pm', 3, '/msg_images/117593634_2064531857023724_8225686972895946028_n.jpg', '1', '123', 'Member', 0, 0, ''),
(249, 'S', 'Unread', '06/18/2022  |  04:22:49pm', 3, '/msg_images/117593634_2064531857023724_8225686972895946028_n.jpg', '1', 'SD', 'Member', 0, 0, ''),
(250, '2', 'Unread', '06/18/2022  |  04:27:21pm', 3, '/msg_images/', '1', '2', 'Member', 0, 0, ''),
(251, 'BAG', 'Unread', '06/18/2022  |  04:27:48pm', 3, '/msg_images/', '1', 'BAG', 'Member', 0, 0, ''),
(252, 'WW', 'Unread', '06/18/2022  |  04:29:28pm', 0, '../msg_images/', '1', 'WW', 'Member', 0, 0, ''),
(253, 'a', 'Unread', '06/18/2022  |  04:30:23pm', 0, '../msg_images/', '1', 'a', 'Member', 0, 0, ''),
(254, 'a', 'Unread', '06/18/2022  |  04:32:55pm', 3, '../msg_images/', '1', 'a', 'Member', 0, 0, ''),
(255, 'a', 'Unread', '06/18/2022  |  04:34:32pm', 3, '../msg_images/', '1', 'a', 'Member', 0, 0, ''),
(256, '', 'Unread', '06/18/2022  |  04:35:56pm', 3, '../msg_images/', '1', 'a', 'Member', 0, 0, ''),
(257, 'a', 'Unread', '06/18/2022  |  04:36:04pm', 3, '../msg_images/', '1', 'a', 'Member', 0, 0, ''),
(258, 'as', 'Unread', '06/18/2022  |  04:37:05pm', 3, '../msg_images/', '1', 'ass', 'Member', 0, 0, ''),
(259, '111', 'Unread', '06/18/2022  |  04:38:05pm', 3, '../msg_images/', '1', '111', 'Member', 0, 0, ''),
(260, 'sss', 'Unread', '06/18/2022  |  04:39:27pm', 3, '/msg_images/', '1', 'sss', 'Member', 0, 0, ''),
(261, 'aa', 'Unread', '06/18/2022  |  04:40:07pm', 3, '/msg_images/', '1', 'aa', 'Member', 0, 0, ''),
(262, 'qwe', 'Unread', '06/18/2022  |  04:40:32pm', 3, '/msg_images/', '1', 'qwe', 'Member', 0, 0, ''),
(263, '111', 'Unread', '06/18/2022  |  04:42:33pm', 3, '/msg_images/', '1', '111', 'Member', 0, 0, ''),
(264, 'ss', 'Unread', '06/18/2022  |  04:43:52pm', 3, '/msg_images/', '1', 'ss', 'Member', 0, 0, ''),
(265, 'gag', 'Unread', '06/18/2022  |  04:47:43pm', 3, '/msg_images/', '1', 'gag', 'Member', 0, 0, ''),
(266, 'qq', 'Unread', '06/18/2022  |  04:49:22pm', 3, '/msg_images/', '1', 'qq', 'Member', 0, 0, ''),
(267, '123', 'Unread', '06/18/2022  |  04:51:55pm', 3, '/msg_images/Attendance_November29.png', '1', 'qwe', 'Member', 0, 0, ''),
(268, 's', 'Unread', '06/18/2022  |  04:52:50pm', 3, '/msg_images/Attendance_November29.png', '1', 's', 'Member', 0, 0, ''),
(269, 's', 'Unread', '06/18/2022  |  04:53:17pm', 3, 'msg_images/Attendance_November29.png', '1', 's', 'Member', 0, 0, ''),
(270, 's', 'Unread', '06/18/2022  |  04:53:30pm', 3, 'msg_images/Attendance_November29.png', '1', 's', 'Member', 0, 0, ''),
(271, 's', 'Unread', '06/18/2022  |  04:53:55pm', 3, '../msg_images/Attendance_November29.png', '1', 's', 'Member', 0, 0, ''),
(272, 's', 'Unread', '06/18/2022  |  04:54:11pm', 3, '../msg_images/Attendance_November29.png', '1', 's', 'Member', 0, 0, ''),
(273, 's', 'Unread', '06/18/2022  |  04:55:25pm', 3, 'msg_images/Attendance_November29.png', '1', 's', 'Member', 0, 0, ''),
(274, 's', 'Unread', '06/18/2022  |  04:55:44pm', 3, '/msg_images/Attendance_November29.png', '1', 's', 'Member', 0, 0, ''),
(275, '22', 'Unread', '06/18/2022  |  05:03:12pm', 3, '/msg_images/', '1', '22', 'Member', 0, 0, ''),
(276, '11', 'Read', '06/18/2022  |  05:06:29pm', 3, '../msg_images/', '1', '11', 'Member', 0, 0, ''),
(277, 'aga', 'Unread', '06/18/2022  |  05:07:01pm', 3, '../msg_images/', '1', 'aga', 'Member', 0, 0, ''),
(278, 'ee', 'Read', '06/18/2022  |  05:07:27pm', 3, '../msg_images/Attendance_November29.png', '1', 'ee', 'Member', 0, 0, ''),
(279, '33', 'Unread', '06/18/2022  |  05:07:37pm', 3, '../msg_images/', '1', '23', 'Member', 0, 0, ''),
(402, 'EUY=', '', '', 0, '', '', '', '', 169403952, 1565348490, '8c17da0ca97c2b8e0f3dfd0ddd37b177'),
(403, 'mjIC', '', '', 0, '', '', '', '', 169403952, 1565348490, '3cc747749ee0c78e338c94c7efb2a125'),
(404, 'qq', 'Unread', '10/21/2022  |  03:17:48am', 4, '../msg_images/eJ8Dd_5f.jpg', '', 'q', 'Admin', 0, 0, ''),
(405, 'hahaha', 'Unread', '10/22/2022  |  12:23:06am', 4, '../msg_images/eJ8Dd_5f.jpg', '', 'reload', 'Admin', 0, 0, ''),
(406, 'qq', 'Unread', '10/22/2022  |  12:32:17am', 4, '../msg_images/eJ8Dd_5f.jpg', '25', 'q', 'Member', 0, 0, ''),
(407, 'rell', 'Unread', '10/22/2022  |  01:31:49am', 4, '../msg_images/eJ8Dd_5f.jpg', '25', 'rell', 'Member', 0, 0, ''),
(408, '2', 'Unread', '10/22/2022  |  02:30:51am', 4, '../msg_images/eJ8Dd_5f.jpg', '25', '1', 'Member', 0, 0, ''),
(409, 'qwe', 'Read', '10/22/2022  |  02:38:04am', 4, '../msg_images/eJ8Dd_5f.jpg', '25', 'qwe', 'Member', 0, 0, ''),
(410, 'qwe', 'Read', '10/22/2022  |  02:39:01am', 25, '../msg_images/', '4', 'qwr', 'Member', 0, 0, ''),
(411, 'pogi', 'Unread', '10/22/2022  |  02:39:49am', 4, '../msg_images/', '25', 'pogi', 'Member', 0, 0, ''),
(412, 'aa', 'Unread', '10/22/2022  |  02:40:55am', 4, '../msg_images/', '25', 'aa', 'Member', 0, 0, ''),
(413, '11', 'Unread', '10/22/2022  |  02:42:46am', 4, '../msg_images/', '25', '11', 'Member', 0, 0, ''),
(414, 'ss', 'Unread', '10/22/2022  |  02:43:08am', 4, '../msg_images/', '25', 'ss', 'Member', 0, 0, ''),
(415, 'aa', 'Unread', '10/22/2022  |  02:43:37am', 4, '../msg_images/', '25', 'jj', 'Member', 0, 0, ''),
(416, 'ss', 'Read', '10/22/2022  |  02:44:37am', 4, '../msg_images/', '25', 'reloadto', 'Member', 0, 0, ''),
(417, '11', 'Unread', '10/22/2022  |  02:46:45am', 4, '../msg_images/', '25', '11e', 'Member', 0, 0, ''),
(418, 'A', 'Unread', '10/22/2022  |  03:03:08am', 4, '../msg_images/', '25', 'A', 'Member', 0, 0, ''),
(419, 'bagoto', 'Unread', '10/22/2022  |  03:21:35am', 4, '../msg_images/', '25', 'bagoto', 'Member', 0, 0, ''),
(420, '123', 'Read', '10/22/2022  |  03:26:19am', 25, '../msg_images/', '4', 'hello po', 'Member', 0, 0, ''),
(421, '123', 'Read', '10/22/2022  |  03:27:40am', 4, '../msg_images/eJ8Dd_5f.jpg', '', 'hello po', 'Admin', 0, 0, ''),
(422, 'akoto', 'Unread', '10/22/2022  |  03:28:00am', 4, '../msg_images/eJ8Dd_5f.jpg', '', 'hiiii', 'Admin', 0, 0, ''),
(423, 'try', 'Read', '10/22/2022  |  03:31:28am', 4, '../msg_images/', '25', 'try', 'Member', 0, 0, ''),
(424, 'ss', 'Read', '10/22/2022  |  03:53:12am', 4, '../msg_images/', '25', 'ss', 'Member', 0, 0, ''),
(425, 'e', 'Read', '10/22/2022  |  03:58:02am', 4, '../msg_images/eJ8Dd_5f.jpg', '25', 'qwe', 'Member', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email_address` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photos_id` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photos_id`, `location`, `member_id`) VALUES
(0, '../upload-im/lambo.jpg', 4),
(0, '../upload-im/crank.jpg', 18),
(0, '../upload-im/ss.png', 19);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `post_content` longtext NOT NULL,
  `date_posted` varchar(100) NOT NULL,
  `post_image` varchar(150) NOT NULL,
  `post_title` text NOT NULL,
  `topic` varchar(50) NOT NULL,
  `views` int(11) NOT NULL,
  `replies` int(11) NOT NULL,
  `threads` int(11) NOT NULL,
  `access` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `member_id`, `post_content`, `date_posted`, `post_image`, `post_title`, `topic`, `views`, `replies`, `threads`, `access`) VALUES
(404, 9, 'New riders often think the safest thing is to hide as far to the side of the road as possible near the curb, but this very, very wrong. Other road users might not see you or will try to squeeze past when there’s not enough room. Assume a confident position on the road, ride a good 1m from the kerb, and assert your right to use the carriageway. Our video on road positioning should help.', '06/20/2022 | 07:55:33am', '', 'Be confident on the road', 'TIPS', 0, 0, 0, 'Admin'),
(388, 9, 'jkl', '06/20/2022 | 07:16:35am', '../post_images/', 'jkj4', 'FEED', 3, 0, 0, 'Admin'),
(403, 9, 'Cycling teaches you a lot about how people (including you) drive. It’s worth appreciating that other road users do make mistakes and remember: even if you think a driver or pedestrian has seen you, don’t take anything for granted.\r\n', '06/20/2022 | 07:54:41am', '', 'Treat other road users with care.', 'TIPS', 0, 0, 0, 'Admin'),
(402, 9, 'One of the great things about cycling, especially if you’re using a bike with some multi-terrain ability, is that you can go almost anywhere you fancy. If you see a lane and you’re not sure where it leads, ride down it and find out.', '06/20/2022 | 07:54:10am', '', 'Embrace exploration.', 'TIPS', 1, 0, 0, 'Admin'),
(311, 1, '', '06/19/2022 | 05:17:00am', '../post_images/', '', '', 0, 0, 0, 'Member'),
(425, 4, 'ss', '06/25/2022 | 08:52:36am', '../post_images/', 'ss', 'EVENTS', 3, 0, 1, 'Member'),
(426, 4, 'im renting a bike', '06/30/2022 | 12:08:58pm', '../post_images/download.jpg', 'hello', 'RENTAL', 2, 1, 1, 'Member'),
(420, 4, 'Join now!', '06/20/2022 | 11:05:15am', '../post_images/', 'Clark Event Cylclists', 'EVENTS', 1, 0, 0, 'Member'),
(412, 9, 'There’s no such thing as the wrong weather, just the wrong clothes,’ so the old cycling adage goes and, most of the time, that’s quite true. Weather can change quickly so discover the art of layering your clothes so you can take cool down or warm up quickly. What to cycle in when it is cold or in the heat of summer can be a bit trickier.', '06/20/2022 | 07:59:57am', '', 'Dress for the conditions', 'TIPS', 2, 0, 0, 'Admin'),
(421, 4, 's', '06/25/2022 | 07:32:23am', '../post_images/', 's', 'FEED', 3, 3, 3, 'Member'),
(416, 17, 'Unity Race in Dinalupihan Wait for the further Annoucement Keep Safe! RS! Kapadyak!', '06/20/2022 | 08:51:27am', '../post_images/', 'Race', 'EVENTS', 1, 0, 0, 'Member'),
(408, 9, 'Gears are there to make your life easier but not everybody understands how they work. As you cycle more, start to recognise how changing gears either makes you work harder and go faster, or spin easier but move slower. The ultimate goal is to use your gears to keep up a steady rhythm. ', '06/20/2022 | 07:58:33am', '', 'Learn to use your gears', 'TIPS', 0, 0, 0, 'Admin'),
(406, 9, 'When cycling you neither want to be spinning your legs like crazy nor straining to push the pedals. Ideally, you want a pedalling speed or ‘cadence’ at about 70-90 revolutions per minute. This will work your cardiovascular, aerobic system - which is more efficient more than your muscular, anaerobic system – and will improve your endurance and all-round health. Work out what 70-90 rpm pedalling feels like then use your gears to maintain it.\r\n', '06/20/2022 | 07:57:10am', '', ' Pedal at a steady rhythm', 'TIPS', 1, 0, 0, 'Admin'),
(407, 9, 'When cycling you neither want to be spinning your legs like crazy nor straining to push the pedals. Ideally, you want a pedalling speed or ‘cadence’ at about 70-90 revolutions per minute. This will work your cardiovascular, aerobic system - which is more efficient more than your muscular, anaerobic system – and will improve your endurance and all-round health. Work out what 70-90 rpm pedalling feels like then use your gears to maintain it.\r\n', '06/20/2022 | 07:57:59am', '', ' Pedal at a steady rhythm', 'TIPS', 0, 0, 0, 'Admin'),
(411, 9, 'There’s no worse feeling on a bike than dehydration or complete energy depletion, so take fluid and some ride rations with you. Snacks like a banana, flapjack or jelly babies (for a quick burst of sugar) will help refuel you. If you are going far, scientifically formulated products such as electrolyte drinks and protein bars can help you avoid cramp or other mid-ride problems, and maximize the benefit of all your efforts.', '06/20/2022 | 07:59:41am', '', 'Take water and food', 'TIPS', 0, 0, 0, 'Admin'),
(409, 9, 'Cycling alone is great – it lets you clear you head, enjoy some solitude and take in the beauty of the world without distractions. But riding with people is great fun too and having some cycling buddies will help all aspects of your cycling develop much more quickly. Your local cycling group may have rides for beginners or join one of our Community Cycling Clubs.', '06/20/2022 | 07:58:55am', '', 'Find some ride buddies.', 'TIPS', 0, 0, 0, 'Admin'),
(309, 4, '', '06/19/2022 | 05:13:23am', '../post_images/', '', '', 0, 0, 0, 'Member'),
(310, 1, '', '06/19/2022 | 05:13:29am', '../post_images/', '', '', 0, 0, 0, 'Member'),
(422, 9, 's', '06/25/2022 | 08:39:28am', '../post_images/', 's', 'FEED', 2, 0, 0, 'Admin'),
(423, 4, 'e', '06/25/2022 | 08:45:19am', '../post_images/FinalScore-Midterm.png', 'e', 'FEED', 4, 1, 3, 'Member'),
(424, 4, 's', '06/25/2022 | 08:51:44am', '../post_images/FinalScore-Midterm.png', 's', 'EVENTS', 0, 0, 0, 'Member'),
(400, 9, 'Modern puncture-resistant tyres are fantastic but, if you cycle for any length of time, one day you will have a puncture. Practising to change an inner tube in comfort will pay dividends when you find yourself having to do it for real at the side of the road. (Oh, and when you do fix a punctured tyre, don’t forget to look for and remove whatever caused the hole in the first place – otherwise it’ll just pop the replacement inner tube, too!)', '06/20/2022 | 07:52:42am', '', 'Practice fixing a puncture.\r\n', 'TIPS', 0, 0, 0, 'Admin'),
(401, 9, 'Apps such as Strava, MapMyRide, a fitness watch or activity monitor or just your smartphone will help you keep a record of where you’ve cycled and how many miles you’ve racked up, without having to manually log it all in a training book. It can be a great way to encourage you to keep going.', '06/20/2022 | 07:52:57am', '', ' Be proud of what you have achieved.', 'TIPS', 0, 0, 0, 'Admin'),
(410, 9, 'A few choice tools and a spare inner tube in a saddlepack or saddlebag will help you cope with common mid-ride problems. A multi-tool with a range of bits should let you adjust most mechanical components; a chain tool will help you put a broken chain back together; and of course you’ll need some tyre levers, puncture repair kit/spare inner tube and mini-pump. We think it’s handy to have some emergency cash and a card too.', '06/20/2022 | 07:59:22am', '', 'Have a saddlepack with tools, spares and cash.', 'TIPS', 0, 0, 0, 'Admin'),
(254, 1, 'qw', '06/16/2022 | 08:30:15pm', '../post_images/', '\r\nqw', 'd', 0, 0, 0, 'Member'),
(427, 4, 'FOR SALE: CLIT SHOES\r\nOKS PA NAMAN', '06/30/2022 | 12:18:57pm', '../post_images/download.jpg', 'CLIT SHOES', 'PRE LOVED', 0, 0, 0, 'Member'),
(428, 4, '123', '10/18/2022 | 08:55:41am', '../post_images/Attendance_November29.png', '123', 'TIPS', 0, 0, 0, 'Member'),
(429, 4, 'gg', '10/18/2022 | 04:31:35pm', '../post_images/download.jpg', 'tt', 'TIPS', 0, 0, 0, 'Member'),
(430, 4, '123', '10/18/2022 | 04:38:03pm', '../post_images/download.jpg', '123', 'TIPS', 0, 0, 0, 'Member'),
(431, 4, 'Pump your tyres to the right pressure. ', '10/18/2022 | 04:38:34pm', '../post_images/download.jpg', 'Pump your tyres to the right pressure. ', 'TIPS', 0, 0, 0, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `repz`
--

CREATE TABLE `repz` (
  `reply_id` int(11) NOT NULL,
  `reply_content` text NOT NULL,
  `comment_id` int(11) NOT NULL,
  `date_replied` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL,
  `reply_image` varchar(150) NOT NULL,
  `access` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repz`
--

INSERT INTO `repz` (`reply_id`, `reply_content`, `comment_id`, `date_replied`, `member_id`, `reply_image`, `access`) VALUES
(3, 'ZORO\r\n', 4, '06/14/2022 | 12:52:21am', 3, '../repz_images/images.jpg', 'Member'),
(2, 'qwe', 2, '06/13/2022 | 09:28:41pm', 4, '../repz_images/', 'Member'),
(4, 'zoro juro', 4, '06/14/2022 | 12:59:40am', 3, 'repz_imagesimages.jpg', 'Member'),
(5, 'zorojuro!!!!!', 4, '06/14/2022 | 01:02:24am', 3, 'repz_imagesimages.jpg', 'Member'),
(6, 'asdasdadadadadada', 3, '06/14/2022 | 04:52:11am', 3, 'repz_images', 'Member'),
(7, 'GAGANA KA', 1, '06/14/2022 | 03:56:56pm', 1, 'repz_images', 'Member'),
(8, 'tanga11111', 2, '06/14/2022 | 04:16:29pm', 1, 'repz_images', 'Member'),
(9, 'd', 12, '06/15/2022 | 09:23:02pm', 3, 'repz_images', 'Member'),
(10, '32343242', 13, '06/15/2022 | 09:26:43pm', 3, 'repz_images', 'Member'),
(11, 'sd', 13, '06/15/2022 | 09:27:02pm', 3, 'repz_imagesAttendance_November29.png', 'Member'),
(12, 'tt', 13, '06/15/2022 | 09:27:15pm', 3, 'repz_images', 'Member'),
(13, 'tt', 13, '06/15/2022 | 09:27:27pm', 3, 'repz_imagesdownload.jpg', 'Member'),
(14, '123', 13, '06/15/2022 | 09:29:46pm', 3, '../repz_images241768555_414521843366636_6879296023248564204_n.jpg', 'Member'),
(15, 'bagp', 13, '06/15/2022 | 09:31:06pm', 3, '../repz_images/Attendance_November29.png', 'Member'),
(16, 'qwqweqweqweqweqweqwe', 17, '06/16/2022 | 03:45:17pm', 1, '../repz_images/', 'Member'),
(17, 'qweqwe', 18, '06/17/2022 | 12:19:33am', 4, '../repz_images/', 'Member'),
(18, 'qwe', 18, '06/17/2022 | 12:20:01am', 4, '../repz_images/df.txt', 'Member'),
(19, 'qweqwe', 18, '06/17/2022 | 12:20:08am', 4, '../repz_images/download.jpg', 'Member'),
(20, 'rzzzzzz', 18, '06/17/2022 | 12:24:58am', 4, '../repz_images/r.jpg', 'Member'),
(21, 'd', 21, '06/18/2022 | 05:02:15am', 3, '../repz_images/', 'Admin'),
(22, '22', 22, '06/18/2022 | 05:06:27am', 3, '../repz_images/', 'Admin'),
(23, 'dd', 21, '06/18/2022 | 05:10:02am', 3, '../repz_images/Attendance_November29.png', 'Admin'),
(24, 'sse', 25, '06/18/2022 | 05:11:32am', 1, '../repz_images/117593634_2064531857023724_8225686972895946028_n.jpg', 'Member'),
(25, '22', 25, '06/18/2022 | 05:14:59am', 1, '../repz_images/download.jpg', 'Member'),
(26, 'dd', 27, '06/18/2022 | 05:34:45am', 1, '../repz_images/241768555_414521843366636_6879296023248564204_n.jpg', 'Member'),
(27, 'w', 27, '06/18/2022 | 05:36:43am', 3, '../../repz_images/download.jpg', 'Admin'),
(28, 'qwe', 29, '06/18/2022 | 05:46:21am', 3, '../../repz_images/117593634_2064531857023724_8225686972895946028_n.jpg', 'Admin'),
(29, 'ai', 29, '06/18/2022 | 05:47:30am', 3, '../../repz_images/download.jpg', 'Admin'),
(30, 'w', 29, '06/18/2022 | 05:48:38am', 3, '../repz_images/Attendance_November29.png', 'Admin'),
(31, 's', 30, '06/18/2022 | 05:55:55am', 3, '../repz_images/117593634_2064531857023724_8225686972895946028_n.jpg', 'Admin'),
(32, 's', 34, '06/18/2022 | 06:16:24am', 1, '../repz_images/r.jpg', 'Member'),
(33, 's', 34, '06/18/2022 | 06:16:53am', 3, '../repz_images/79935761_1220715214793075_5752219428603297792_n.jpg', 'Admin'),
(34, 'tangina', 36, '06/18/2022 | 08:13:58pm', 4, '../repz_images/', 'Admin'),
(35, 'member nagreply', 45, '06/20/2022 | 04:57:12am', 5, '../repz_images/117593634_2064531857023724_8225686972895946028_n.jpg', 'Admin'),
(36, 'admin talaga reply', 45, '06/20/2022 | 05:00:25am', 5, '../repz_images/Attendance_November29.png', 'Admin'),
(37, 'member naman reply', 45, '06/20/2022 | 05:00:49am', 4, '../repz_images/lambo.jpg', 'Member'),
(38, '', 47, '06/20/2022 | 10:24:44am', 19, '../repz_images/crank.jpg', 'Member'),
(39, '', 47, '06/20/2022 | 10:25:05am', 19, '../repz_images/', 'Member'),
(40, 'ss', 48, '06/25/2022 | 07:32:42am', 4, '../repz_images/', 'Member'),
(41, 'eee', 48, '06/25/2022 | 07:58:05am', 4, '../repz_images/FinalScore-Midterm.png', 'Member'),
(42, 'ee2', 48, '06/25/2022 | 07:58:25am', 9, '../repz_images/117593634_2064531857023724_8225686972895946028_n.jpg', 'Admin'),
(43, 'eerr', 51, '06/25/2022 | 08:10:34am', 9, '../repz_images/117593634_2064531857023724_8225686972895946028_n.jpg', 'Admin'),
(44, 'sss', 55, '06/25/2022 | 08:55:58am', 9, '../repz_images/download.jpg', 'Admin'),
(45, 'ill message you, sir', 57, '06/30/2022 | 12:34:05pm', 9, '../repz_images/', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `lname` text NOT NULL,
  `mname` text NOT NULL,
  `fname` text NOT NULL,
  `password` text NOT NULL,
  `username` text NOT NULL,
  `user_id` int(15) NOT NULL,
  `last_logtime` text NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`lname`, `mname`, `fname`, `password`, `username`, `user_id`, `last_logtime`, `status`) VALUES
(' ', ' ', 'Kapadyak1', '123', 'kapadyak1', 9, '10/22/2022 | 03:27:14am', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `repz`
--
ALTER TABLE `repz`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=426;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=432;

--
-- AUTO_INCREMENT for table `repz`
--
ALTER TABLE `repz`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
