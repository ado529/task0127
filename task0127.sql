-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-01-27 14:52:54
-- サーバのバージョン： 10.4.22-MariaDB
-- PHP のバージョン: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `task0127`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `1april`
--

CREATE TABLE `1april` (
  `id` int(11) NOT NULL,
  `Attendance_number` int(11) NOT NULL,
  `japanese` int(11) NOT NULL,
  `arithmetic` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `1april`
--

INSERT INTO `1april` (`id`, `Attendance_number`, `japanese`, `arithmetic`, `english`, `created_at`, `updated_at`) VALUES
(1, 5, 88, 88, 88, '2022-01-25 13:14:08', '2022-01-25 13:14:08'),
(2, 9, 99, 77, 99, '2022-01-25 13:25:23', '2022-01-25 13:29:46'),
(3, 1, 22, 22, 22, '2022-01-25 16:00:37', '2022-01-25 16:00:37'),
(4, 2, 33, 33, 33, '2022-01-25 16:00:50', '2022-01-25 16:00:50'),
(5, 4, 44, 44, 44, '2022-01-25 16:00:54', '2022-01-25 16:00:54'),
(6, 3, 44, 44, 44, '2022-01-25 16:01:05', '2022-01-25 16:01:05'),
(7, 6, 66, 66, 66, '2022-01-25 16:01:12', '2022-01-25 16:01:12'),
(8, 7, 77, 77, 77, '2022-01-25 16:01:17', '2022-01-25 16:01:17'),
(9, 8, 76, 45, 22, '2022-01-25 16:01:31', '2022-01-25 16:01:31'),
(10, 10, 89, 90, 65, '2022-01-25 16:01:44', '2022-01-25 16:01:44'),
(11, 11, 78, 56, 44, '2022-01-25 16:01:52', '2022-01-25 16:01:52'),
(12, 12, 56, 35, 86, '2022-01-25 16:01:58', '2022-01-25 16:01:58'),
(14, 14, 52, 35, 46, '2022-01-25 16:02:11', '2022-01-25 16:02:11'),
(15, 15, 23, 45, 56, '2022-01-25 16:02:16', '2022-01-25 16:02:16'),
(16, 13, 99, 99, 99, '2022-01-25 22:35:36', '2022-01-25 22:35:36');

-- --------------------------------------------------------

--
-- テーブルの構造 `2may`
--

CREATE TABLE `2may` (
  `id` int(11) NOT NULL,
  `Attendance_number` int(11) NOT NULL,
  `japanese` int(11) NOT NULL,
  `arithmetic` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `2may`
--

INSERT INTO `2may` (`id`, `Attendance_number`, `japanese`, `arithmetic`, `english`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, '2022-01-25 16:02:41', '2022-01-25 16:02:41'),
(2, 2, 2, 2, 2, '2022-01-25 16:02:44', '2022-01-25 16:02:44'),
(3, 3, 3, 3, 3, '2022-01-25 16:02:47', '2022-01-25 16:02:47'),
(4, 4, 4, 4, 4, '2022-01-25 16:02:50', '2022-01-25 16:02:50'),
(5, 5, 5, 5, 5, '2022-01-25 16:02:53', '2022-01-25 16:02:53'),
(6, 6, 6, 6, 6, '2022-01-25 16:02:56', '2022-01-25 16:02:56'),
(7, 7, 7, 7, 7, '2022-01-25 16:02:59', '2022-01-25 16:02:59'),
(8, 8, 8, 8, 8, '2022-01-25 16:03:03', '2022-01-25 16:03:03'),
(9, 9, 9, 9, 9, '2022-01-25 16:03:06', '2022-01-25 16:03:06'),
(10, 10, 99, 99, 99, '2022-01-25 16:03:12', '2022-01-25 16:03:12'),
(11, 11, 22, 24, 56, '2022-01-25 16:03:18', '2022-01-25 16:03:18'),
(12, 12, 65, 45, 35, '2022-01-25 16:03:24', '2022-01-25 16:03:24'),
(13, 13, 67, 54, 35, '2022-01-25 16:03:30', '2022-01-25 16:03:30'),
(14, 14, 35, 35, 35, '2022-01-25 16:03:35', '2022-01-25 16:03:35'),
(15, 15, 76, 45, 34, '2022-01-25 16:03:40', '2022-01-25 16:03:40');

-- --------------------------------------------------------

--
-- テーブルの構造 `3june`
--

CREATE TABLE `3june` (
  `id` int(11) NOT NULL,
  `Attendance_number` int(11) NOT NULL,
  `japanese` int(11) NOT NULL,
  `arithmetic` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `3june`
--

INSERT INTO `3june` (`id`, `Attendance_number`, `japanese`, `arithmetic`, `english`, `created_at`, `updated_at`) VALUES
(1, 1, 88, 98, 76, '2022-01-25 16:04:14', '2022-01-25 16:04:14'),
(2, 2, 34, 67, 46, '2022-01-25 16:04:20', '2022-01-25 16:04:20'),
(3, 3, 56, 43, 56, '2022-01-25 16:04:25', '2022-01-25 16:04:25'),
(4, 4, 56, 33, 56, '2022-01-25 16:04:30', '2022-01-25 16:04:30'),
(5, 5, 67, 55, 43, '2022-01-25 16:04:35', '2022-01-25 16:04:35'),
(6, 6, 78, 88, 99, '2022-01-25 16:04:41', '2022-01-25 16:04:41'),
(7, 7, 45, 55, 32, '2022-01-25 16:04:46', '2022-01-25 16:04:46'),
(8, 8, 57, 43, 85, '2022-01-25 16:04:52', '2022-01-25 16:04:52'),
(9, 9, 64, 34, 52, '2022-01-25 16:04:58', '2022-01-25 16:04:58'),
(10, 10, 33, 57, 43, '2022-01-25 16:05:05', '2022-01-25 16:05:05'),
(11, 11, 79, 0, 43, '2022-01-25 16:05:13', '2022-01-25 16:05:13'),
(12, 12, 89, 65, 34, '2022-01-25 16:05:19', '2022-01-25 16:05:19'),
(13, 13, 25, 78, 45, '2022-01-25 16:05:27', '2022-01-25 16:05:27'),
(14, 14, 98, 66, 65, '2022-01-25 16:05:32', '2022-01-25 16:05:32'),
(15, 15, 46, 43, 66, '2022-01-25 16:05:38', '2022-01-25 16:05:38');

-- --------------------------------------------------------

--
-- テーブルの構造 `management`
--

CREATE TABLE `management` (
  `id` int(11) NOT NULL,
  `Attendance_number` int(11) NOT NULL,
  `image` varchar(128) COLLATE utf8mb4_bin DEFAULT NULL,
  `name` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `birthday` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `management`
--

INSERT INTO `management` (`id`, `Attendance_number`, `image`, `name`, `birthday`, `created_at`, `updated_at`) VALUES
(2, 1, 'upload/20220127035433d41d8cd98f00b204e9800998ecf8427e.jpg', '秋田太郎', '2022-01-01', '2022-01-25 01:23:54', '2022-01-27 11:54:33'),
(4, 3, 'upload/20220127035623d41d8cd98f00b204e9800998ecf8427e.jpg', '臼田あさ美', '2022-01-03', '2022-01-25 01:25:01', '2022-01-27 11:56:23'),
(5, 4, 'upload/20220127035634d41d8cd98f00b204e9800998ecf8427e.jpg', '遠藤憲一', '2022-01-05', '2022-01-25 01:26:34', '2022-01-27 11:56:34'),
(6, 5, 'upload/20220127035644d41d8cd98f00b204e9800998ecf8427e.jpg', '大谷翔平', '2022-01-19', '2022-01-25 01:26:54', '2022-01-27 11:56:44'),
(7, 6, 'upload/20220127035656d41d8cd98f00b204e9800998ecf8427e.jpg', '片山さつき', '2022-01-14', '2022-01-25 01:27:35', '2022-01-27 11:56:56'),
(8, 7, 'upload/20220127035709d41d8cd98f00b204e9800998ecf8427e.jpg', '岸谷五郎', '2022-01-10', '2022-01-25 01:27:48', '2022-01-27 11:57:09'),
(9, 8, 'upload/20220127035717d41d8cd98f00b204e9800998ecf8427e.jpg', 'ケイン・コスギ', '2022-01-21', '2022-01-25 01:28:11', '2022-01-27 11:57:17'),
(10, 9, 'upload/20220127035726d41d8cd98f00b204e9800998ecf8427e.jpg', '小泉孝太郎', '2022-01-21', '2022-01-25 01:28:37', '2022-01-27 11:57:26'),
(11, 10, 'upload/20220127035736d41d8cd98f00b204e9800998ecf8427e.jpg', '佐藤健', '2022-01-29', '2022-01-25 01:28:59', '2022-01-27 11:57:36'),
(12, 13, 'upload/20220127035812d41d8cd98f00b204e9800998ecf8427e.jpg', '須藤元気', '2021-08-26', '2022-01-25 15:12:38', '2022-01-27 11:58:12'),
(13, 2, 'upload/20220127035448d41d8cd98f00b204e9800998ecf8427e.jpg', '田代まさし', '2021-07-05', '2022-01-25 15:56:26', '2022-01-27 11:54:48'),
(14, 11, 'upload/20220127035746d41d8cd98f00b204e9800998ecf8427e.jpg', '伴とみこ', '2020-05-04', '2022-01-25 15:56:57', '2022-01-27 11:57:46'),
(15, 12, 'upload/20220127035755d41d8cd98f00b204e9800998ecf8427e.jpg', '麻生三郎', '2020-06-12', '2022-01-25 15:57:21', '2022-01-27 11:57:55'),
(16, 14, 'upload/20220127035820d41d8cd98f00b204e9800998ecf8427e.jpg', '千葉真一', '2020-05-16', '2022-01-25 15:57:57', '2022-01-27 11:58:20'),
(17, 15, 'upload/20220127042021d41d8cd98f00b204e9800998ecf8427e.jpg', '横浜流星', '2015-06-18', '2022-01-25 15:58:29', '2022-01-27 12:20:21'),
(18, 16, 'upload/20220127032053d41d8cd98f00b204e9800998ecf8427e.jpg', '山下真司', '2015-06-09', '2022-01-27 11:20:53', '2022-01-27 11:20:53');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `1april`
--
ALTER TABLE `1april`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `2may`
--
ALTER TABLE `2may`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `3june`
--
ALTER TABLE `3june`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `1april`
--
ALTER TABLE `1april`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- テーブルの AUTO_INCREMENT `2may`
--
ALTER TABLE `2may`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- テーブルの AUTO_INCREMENT `3june`
--
ALTER TABLE `3june`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- テーブルの AUTO_INCREMENT `management`
--
ALTER TABLE `management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
