-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 08, 2018 at 05:47 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webda`
--

-- --------------------------------------------------------

--
-- Table structure for table `learnings`
--

CREATE TABLE `learnings` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `unit_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'แนะนำบทเรียน', 'แนะนำบทเรียน', '<p>แนะนำบทเรียน</p>', '2018-05-07 17:00:00', '2018-05-08 03:36:33'),
(2, 'ความรุ้เพิ่มเพิ่ม', 'ความรู้เพิ่มเติ', '<p>ความรู้เพิ่มเติม</p>', '2018-05-08 03:40:07', '2018-05-08 03:40:07'),
(3, 'ผู้จัดทำ', 'author', NULL, '2018-05-08 03:40:30', '2018-05-08 03:41:18'),
(4, 'ผลงานนักเรียน', 'ผลงานนักเรียน', NULL, '2018-05-08 03:41:06', '2018-05-08 03:41:06'),
(5, 'บรรณานุกรม', 'บรรณานุกรม', NULL, '2018-05-08 03:41:52', '2018-05-08 03:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_05_205221_create_menu_table', 1),
(4, '2018_05_07_182641_create_Units_table', 1),
(5, '2018_05_07_183252_create_Learnings_table', 1),
(6, '2018_05_08_104831_create_pretests_table', 2),
(7, '2018_05_08_140603_create_posttests_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posttests`
--

CREATE TABLE `posttests` (
  `id` int(10) unsigned NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci,
  `choice1` text COLLATE utf8mb4_unicode_ci,
  `choice2` text COLLATE utf8mb4_unicode_ci,
  `choice3` text COLLATE utf8mb4_unicode_ci,
  `choice4` text COLLATE utf8mb4_unicode_ci,
  `answer` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pretests`
--

CREATE TABLE `pretests` (
  `id` int(10) unsigned NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci,
  `choice1` text COLLATE utf8mb4_unicode_ci,
  `choice2` text COLLATE utf8mb4_unicode_ci,
  `choice3` text COLLATE utf8mb4_unicode_ci,
  `choice4` text COLLATE utf8mb4_unicode_ci,
  `answer` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_test` datetime DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pretests`
--

INSERT INTO `pretests` (`id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`, `start_test`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '<p><span style="font-weight: 400;">ข้อใดให้ความหมายของหนังสืออิเล็กทรอนิกส์ได้ถูกต้องที่สุด</span></p>', 'หนังสือที่สร้างด้วยโปรแกรมคอมพิวเตอร์ไม่สามารถแทรกภาพและเสียงได้', 'หนังสือที่สร้างด้วยโปรแกรมคอมพิวเตอร์ไม่สามารถแทรกภาพเคลื่อนไหวและวีดีโอได้', 'หนังสือที่สร้างด้วยโปรแกรมคอมพิวเตอร์ประกอบด้วยข้อความ ภาพ เสียง วีดีโอและ     ภาพเคลื่อนไหว', 'หนังสือที่สามารถเปิดอ่านได้ในเครื่องคอมพิวเตอร์เท่านั้น', '3', NULL, NULL, '2018-05-08 06:11:57', '2018-05-08 06:11:57'),
(2, '<p><span style="font-weight: 400;">โปรแกรมใดที่นิยมนำมาสร้างหนังสืออิเล็กทรอนิกส์</span></p>', 'โปรแกรม Microsoft Excel', 'โปรแกรม Microsoft Word', 'โปรแกรม Microsoft PowerPoint', 'โปรแกรม Desktop Author', '4', NULL, NULL, '2018-05-08 06:49:54', '2018-05-08 06:52:23'),
(3, '<p><span style="font-weight: 400;">โปรแกรม Desktop Author มีแฟ้มนามสกุลตรงกับข้อใด</span></p>', 'นามสกุลไฟล์ .opf', 'นามสกุลไฟล์ .dml', 'นามสกุลไฟล์ .scr', 'นามสกุลไฟล์ .doc', '2', NULL, NULL, '2018-05-08 06:54:12', '2018-05-08 06:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `units` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'leksoft', 'leksoft@rmu.ac.th', '$2y$10$MTvYdzGLlNeu.GhUSiLhtO.t7DUvteVdEJICeunYqcyCwJd8UybfC', NULL, '2018-05-08 02:26:49', '2018-05-08 02:26:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `learnings`
--
ALTER TABLE `learnings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `learnings_unit_id_foreign` (`unit_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posttests`
--
ALTER TABLE `posttests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pretests`
--
ALTER TABLE `pretests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pretests_user_id_foreign` (`user_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `learnings`
--
ALTER TABLE `learnings`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `posttests`
--
ALTER TABLE `posttests`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pretests`
--
ALTER TABLE `pretests`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `units`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `learnings`
--
ALTER TABLE `learnings`
  ADD CONSTRAINT `learnings_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`);

--
-- Constraints for table `pretests`
--
ALTER TABLE `pretests`
  ADD CONSTRAINT `pretests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
