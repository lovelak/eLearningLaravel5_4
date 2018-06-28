/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 50638
 Source Host           : localhost:3306
 Source Schema         : db_webda

 Target Server Type    : MySQL
 Target Server Version : 50638
 File Encoding         : 65001

 Date: 28/06/2018 16:04:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for learnings
-- ----------------------------
DROP TABLE IF EXISTS `learnings`;
CREATE TABLE `learnings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `vdo_youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `learnings_unit_id_foreign` (`unit_id`),
  CONSTRAINT `learnings_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of learnings
-- ----------------------------
BEGIN;
INSERT INTO `learnings` VALUES (4, 'จุดประสงค์การเรียนรู้', NULL, '<p>รายละเอียด&nbsp;</p>', '0hOdwVOLYIg', 1, '2018-05-09 07:36:00', '2018-06-28 15:10:36');
INSERT INTO `learnings` VALUES (5, 'การติดตั้งต้องเตรียมอะไรบ้าง', NULL, '<ul>\r\n<li>การติดตั้งต้องเตรียมอะไรบ้าง</li>\r\n</ul>', '0hOdwVOLYIg', 1, '2018-05-09 07:36:17', '2018-06-28 15:10:42');
INSERT INTO `learnings` VALUES (6, 'Extensions ของ PHP ที่ควรเปิดไว้', NULL, '<p>Extensions ของ PHP ที่ควรเปิดไว้</p>', '0hOdwVOLYIg', 1, '2018-05-09 07:36:32', '2018-06-28 14:56:31');
INSERT INTO `learnings` VALUES (7, 'การติดตั้ง Laravel ด้วย Composer', NULL, NULL, '0hOdwVOLYIg', 1, '2018-05-09 07:36:45', '2018-06-28 14:56:49');
INSERT INTO `learnings` VALUES (9, 'จุดประสงค์การเรียนรู้', 'จุดประสงค์การเรียนรู้', '<p><span style=\"font-weight: 400;\">จุดประสงค์การเรียนรู้</span></p>', '0hOdwVOLYIg', 2, '2018-05-09 12:56:38', '2018-05-09 12:56:38');
INSERT INTO `learnings` VALUES (10, 'ทำไมต้องใช้ PHP Framework', NULL, NULL, '0hOdwVOLYIg', 2, '2018-05-09 12:56:51', '2018-06-28 14:57:12');
INSERT INTO `learnings` VALUES (11, 'ทำความรู้จักกับ Laravel', NULL, NULL, '0hOdwVOLYIg', 2, '2018-05-09 12:57:02', '2018-06-28 14:57:23');
INSERT INTO `learnings` VALUES (12, 'โครงสร้างของ Laravel ที่สำคัญ', NULL, NULL, '0hOdwVOLYIg', 2, '2018-05-09 12:57:13', '2018-06-28 14:57:34');
INSERT INTO `learnings` VALUES (13, 'MVC และ Best Practices', NULL, NULL, '0hOdwVOLYIg', 2, '2018-05-09 12:57:24', '2018-06-28 14:57:45');
INSERT INTO `learnings` VALUES (14, 'การส่งค่าของตัวแปร', NULL, NULL, '0hOdwVOLYIg', 2, '2018-05-09 12:57:34', '2018-06-28 14:59:09');
INSERT INTO `learnings` VALUES (15, 'จุดประสงค์การเรียนรู้', 'จุดประสงค์การเรียนรู้', NULL, '0hOdwVOLYIg', 3, '2018-05-09 12:57:46', '2018-05-09 12:57:46');
INSERT INTO `learnings` VALUES (16, 'พื้นฐานการเขียน Controllers', NULL, NULL, '0hOdwVOLYIg', 3, '2018-05-09 12:58:00', '2018-06-28 14:58:04');
INSERT INTO `learnings` VALUES (17, 'Routes', NULL, NULL, '0hOdwVOLYIg', 3, '2018-05-09 12:58:09', '2018-06-28 14:58:15');
INSERT INTO `learnings` VALUES (18, 'Views', NULL, NULL, '0hOdwVOLYIg', 3, '2018-05-09 12:58:20', '2018-06-28 14:58:24');
INSERT INTO `learnings` VALUES (19, 'การสร้าง Section ใหม่', NULL, NULL, '0hOdwVOLYIg', 3, '2018-05-09 12:58:32', '2018-06-28 14:59:38');
INSERT INTO `learnings` VALUES (20, 'จุดประสงค์การเรียนรู้', 'จุดประสงค์การเรียนรู้', NULL, '0hOdwVOLYIg', 4, '2018-05-09 12:58:44', '2018-05-09 12:58:44');
INSERT INTO `learnings` VALUES (21, '@yield', NULL, NULL, '0hOdwVOLYIg', 4, '2018-05-09 12:58:58', '2018-06-28 14:59:50');
INSERT INTO `learnings` VALUES (22, 'Artisan', NULL, NULL, '0hOdwVOLYIg', 4, '2018-05-09 12:59:08', '2018-06-28 15:00:01');
INSERT INTO `learnings` VALUES (23, 'Database Migrations', NULL, NULL, '0hOdwVOLYIg', 4, '2018-05-09 12:59:21', '2018-06-28 15:00:36');
INSERT INTO `learnings` VALUES (24, 'จุดประสงค์การเรียนรู้', 'จุดประสงค์การเรียนรู้', NULL, '0hOdwVOLYIg', 5, '2018-05-09 12:59:31', '2018-05-09 12:59:31');
INSERT INTO `learnings` VALUES (25, 'Seeding', NULL, NULL, '0hOdwVOLYIg', 5, '2018-05-09 12:59:41', '2018-06-28 15:02:11');
INSERT INTO `learnings` VALUES (26, 'การตั้งค่าฐานข้อมูล', NULL, NULL, '0hOdwVOLYIg', 5, '2018-05-09 12:59:51', '2018-06-28 15:02:23');
INSERT INTO `learnings` VALUES (27, 'การสร้าง Models', NULL, NULL, '0hOdwVOLYIg', 6, '2018-05-09 13:00:02', '2018-06-28 15:02:37');
INSERT INTO `learnings` VALUES (28, 'การใช้งาน Eloquent ORM', NULL, NULL, '0hOdwVOLYIg', 6, '2018-05-09 13:00:14', '2018-06-28 15:02:50');
INSERT INTO `learnings` VALUES (29, 'Query scopes', NULL, NULL, '0hOdwVOLYIg', 6, '2018-06-28 15:03:02', '2018-06-28 15:03:02');
COMMIT;

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of menu
-- ----------------------------
BEGIN;
INSERT INTO `menu` VALUES (1, 'แนะนำบทเรียน', 'แนะนำบทเรียน', '<p>แนะนำบทเรียน</p>', '2018-05-08 00:00:00', '2018-05-08 10:36:33');
INSERT INTO `menu` VALUES (2, 'ความรุ้เพิ่มเพิ่ม', 'ความรู้เพิ่มเติม', '<p>ความรู้เพิ่มเติม</p>', '2018-05-08 10:40:07', '2018-05-11 13:41:06');
INSERT INTO `menu` VALUES (3, 'ผู้จัดทำ', 'author', NULL, '2018-05-08 10:40:30', '2018-05-08 10:41:18');
INSERT INTO `menu` VALUES (4, 'ดาวน์โหลดคู่มือ', 'download', NULL, '2018-05-08 10:41:06', '2018-05-08 10:41:06');
INSERT INTO `menu` VALUES (5, 'บรรณานุกรม', 'บรรณานุกรม', '<p><span style=\"font-weight: 400;\">กิตติ &nbsp;ภักดีวัฒนะกุล &nbsp;และจำลอง ครูอุตสาหะ.</span><strong>คัมภีร์ระบบฐานข้อมูล.</strong><span style=\"font-weight: 400;\">พิมพ์ครั้งที่ &nbsp;3.</span></p>\r\n<p><span style=\"font-weight: 400;\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กรุงเทพฯ : ไทยเจริญการพิมพ์, 2544.</span></p>\r\n<p><span style=\"font-weight: 400;\">กิตติ ภักดีวัฒนะกุล และจำลอง ครูอุตสาหะ.</span><strong>การออกแบบฐานฐานข้อมูล.</strong><span style=\"font-weight: 400;\">พิมพ์ครั้งที่ 4. &nbsp;&nbsp;กรุงเทพฯ : บริษัทเคทีพี คอม แอนด์คอนซัลท์, 2546.</span></p>\r\n<p><span style=\"font-weight: 400;\">กิตติ ภักดีวัฒนะกุล และพนิดา พาณิชกุล. </span><strong>คัมภีร์การวิเคราะห์และออกแบบระบบ.</strong><span style=\"font-weight: 400;\">พิมพ์ครั้งที่ 2. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>\r\n<p><span style=\"font-weight: 400;\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กรุงเทพฯ : บริษัทเคทีพี คอม แอนด์คอนซัลท์, 2546.</span></p>\r\n<p><span style=\"font-weight: 400;\">กิตติภูมิ วรฉัตร. </span><strong>MySQL ถามตอบครอบจักรวาล.</strong><span style=\"font-weight: 400;\"> กรุงเทพมหานคร : บริษัท วิตตี้ กรุ๊ป จำกัด, &nbsp;</span></p>\r\n<p><span style=\"font-weight: 400;\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2545.</span></p>\r\n<p><span style=\"font-weight: 400;\">จิตติมา เทียมบุญประเสริฐ. </span><strong>ระบบสารสนเทศเพื่อการจัดการ.</strong><span style=\"font-weight: 400;\"> พิมพ์ครั้งที่ 1 กรุงเทพมหานคร : </span></p>\r\n<p><span style=\"font-weight: 400;\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ห้างหุ้นส่วน &nbsp;จำกัด วี.เจ.พริ้นติ้ง,2544.</span></p>\r\n<p><span style=\"font-weight: 400;\">บัณฑิต จามรภูติ.</span><strong>คู่มือ Window Server 2003 ภาคปฏิบัติ เล่ม 1</strong><span style=\"font-weight: 400;\">.พิมพ์ครั้งที่ 2.กรุงเทพฯ:</span></p>\r\n<p><span style=\"font-weight: 400;\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เอช.เอ็น กรุ๊ป,2548.</span></p>\r\n<p><span style=\"font-weight: 400;\">ประสงค์ &nbsp;ปราณีตพลกรัง. &nbsp;และชวลิต ประกวานนท์. </span><strong>ระบบสารสนเทศเพื่อการจัดการ.</strong><span style=\"font-weight: 400;\"> &nbsp;</span></p>\r\n<p><span style=\"font-weight: 400;\"> &nbsp;กรุงเทพฯ : ธีระฟิล์มและไซเท็กซ์, 2541.</span></p>\r\n<p><span style=\"font-weight: 400;\">ธีระพล ลิ้มศรัทธา. </span><strong>ออกแบบและพัฒนาฐานข้อมูลด้วยเทคโนโลยี .NET</strong><span style=\"font-weight: 400;\"> พิมพ์ครั้งที่ 1. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>\r\n<p><span style=\"font-weight: 400;\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กรุงเทพฯ : ไทยเจริญการพิมพ์,2550</span></p>\r\n<p><span style=\"font-weight: 400;\">ภาสพงษ์ &nbsp;พงษ์เสวี. </span><strong>ระบบสารสนเทศเพื่อผู้บริหาร กรณีศึกษา ส่วนฝึกอบรม &nbsp;กรมชลประทาน. </strong></p>\r\n<p><span style=\"font-weight: 400;\"> &nbsp;สารนิพนธ์ &nbsp;วทม. กรุงเทพฯ : สถาบันเทคโนโลยีพระจอมเกล้าพระนครเหนือ, 2549.</span></p>\r\n<p><span style=\"font-weight: 400;\">ราชภัฏมหาสารคาม, &nbsp;มหาวิทยาลัย. สำนักบริหารเทคโนโลยีสารสนเทศ.</span> <strong>แผนกลยุทธ์ประจำปี </strong></p>\r\n<p><strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>การศึกษา &nbsp;2550.</strong><strong> &nbsp;</strong><span style=\"font-weight: 400;\">มหาสารคาม : มหาวิทยาลัยราชภัฏมหาสารคาม, 2550.</span></p>\r\n<p><span style=\"font-weight: 400;\">วิเชียร &nbsp;เปรมชัยสวัสดิ์. &nbsp;</span><strong>ระบบฐานข้อมูล.</strong><span style=\"font-weight: 400;\"> &nbsp;กรุงเทพฯ : สมาคมส่งเสริมเทคโนโลยี(ไทย-ญี่ปุ่น), </span></p>\r\n<p><span style=\"font-weight: 400;\"> &nbsp;2547.</span></p>\r\n<p><span style=\"font-weight: 400;\">ศรินทร์ยา &nbsp;เกียงขวา. </span><strong>การพัฒนาระบบรับสมัครคัดเลือกผ่านเครือข่ายของนิสิตระดับ</strong></p>\r\n<p><span style=\"font-weight: 400;\">&nbsp;</span><strong>บัณฑิตศึกษา &nbsp;มหาวิทยาลัยมหาสารคาม.</strong><span style=\"font-weight: 400;\"> &nbsp;วิทยานิพนธ์ &nbsp;กศม. มหาสารคาม : </span></p>\r\n<p><span style=\"font-weight: 400;\"> &nbsp;มหาวิทยาลัยมหาสารคาม, 2549.</span></p>\r\n<p><span style=\"font-weight: 400;\">สกลรัฐ ทรัพย์ยิ่ง,</span><strong>ทำงานร่วมกันเป็นทีมบนเว็บด้วย Sharepoint Team Service.</strong></p>\r\n<p><strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><span style=\"font-weight: 400;\">พิมพ์ครั้งที่ 1, กรุงเทพฯ : ไทยเจริญการพิมพ์, 2544.</span></p>\r\n<p><span style=\"font-weight: 400;\">สงกรานต์ &nbsp;สุขเกษม. </span><strong>ระบบการรับสมัครนักศึกษาผ่านระบบเครือข่ายอินเตอร์เน็ตกรณีศึกษา : </strong></p>\r\n<p><strong> &nbsp;</strong><strong>มหาวิทยาลัยราชภัฏจันทรเกษม.</strong><span style=\"font-weight: 400;\"> &nbsp;สารนิพนธ์ &nbsp;วท.ม. กรุงเทพฯ : สถาบันเทคโนโลยี</span></p>\r\n<p><span style=\"font-weight: 400;\"> &nbsp;พระจอมเกล้าพระนครเหนือ, 2547.</span></p>\r\n<p><span style=\"font-weight: 400;\">สุณี &nbsp;บุญเทวี. &nbsp;</span><strong>การพัฒนาและหาประสิทธิภาพระบบสารสนเทศเพื่อช่วยงานด้านการฝึกอบรม</strong></p>\r\n<p><span style=\"font-weight: 400;\"> &nbsp;วิทยานิพนธ์ &nbsp;ค.ม. กรุงเทพฯ : สถาบันเทคโนโลยีพระจอมเกล้าพระนครเหนือ, 2547. </span></p>\r\n<p><span style=\"font-weight: 400;\">สุวัฒนา &nbsp;เดชะปัญญาวงศ์. &nbsp;</span><strong>การพัฒนาระบบสารสนเทศการรับสมัครและลงทะเบียนเรียนใน</strong></p>\r\n<p><strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>รูปแบบ &nbsp;Web Application &nbsp;ของมหาวิทยาลัยสุโขทัยธรรมาธิราช.</strong><span style=\"font-weight: 400;\"> &nbsp;วิทยานิพนธ์ &nbsp;</span></p>\r\n<p><span style=\"font-weight: 400;\"> &nbsp;วท.บ. กรุงเทพฯ : มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี, 2546.</span></p>\r\n<p><span style=\"font-weight: 400;\">เกษม &nbsp;กมลชัยพิสิฐ.</span><strong>รอบรู้ ประยุกต์ใช้ SQL Server 2005.</strong><span style=\"font-weight: 400;\">พิมพ์ครั้งที่ 1.กรุงเทพฯ:</span></p>\r\n<p><span style=\"font-weight: 400;\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บริษัท วี.พริ้นท์(1991) จำกัด,2550.</span></p>', '2018-05-08 10:41:52', '2018-06-28 14:43:40');
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2018_05_05_205221_create_menu_table', 1);
INSERT INTO `migrations` VALUES (4, '2018_05_07_182641_create_Units_table', 1);
INSERT INTO `migrations` VALUES (5, '2018_05_07_183252_create_Learnings_table', 1);
INSERT INTO `migrations` VALUES (6, '2018_05_08_104831_create_pretests_table', 2);
INSERT INTO `migrations` VALUES (7, '2018_05_08_140603_create_posttests_table', 3);
INSERT INTO `migrations` VALUES (9, '2018_05_09_062130_create_tests_table', 4);
INSERT INTO `migrations` VALUES (12, '2018_05_11_122440_create_score_table', 6);
INSERT INTO `migrations` VALUES (14, '2018_05_11_144559_create_submenu_table', 7);
INSERT INTO `migrations` VALUES (17, '2018_05_13_124438_create_result_pretest_table', 8);
INSERT INTO `migrations` VALUES (18, '2018_05_13_124551_create_result_posttest_table', 8);
INSERT INTO `migrations` VALUES (19, '2018_05_13_132440_create_score_test_table', 9);
INSERT INTO `migrations` VALUES (21, '2018_05_13_132553_create_result_test_table', 10);
COMMIT;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for posttests
-- ----------------------------
DROP TABLE IF EXISTS `posttests`;
CREATE TABLE `posttests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci,
  `choice1` text COLLATE utf8mb4_unicode_ci,
  `choice2` text COLLATE utf8mb4_unicode_ci,
  `choice3` text COLLATE utf8mb4_unicode_ci,
  `choice4` text COLLATE utf8mb4_unicode_ci,
  `answer` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of posttests
-- ----------------------------
BEGIN;
INSERT INTO `posttests` VALUES (34, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'ถูกทุกข้อ', '1', '2018-06-28 15:50:15', '2018-06-28 15:50:15');
INSERT INTO `posttests` VALUES (35, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'มีการเขียนโค้ดที  เป็นมาตรฐาน ช่วยลดและกําจัดโค้ดที ไม่จําเป็น', 'ภควัทคีตาสตีลโอเควีไอพี', 'ภควัทคีตาสตีลโอเควีไอพี', 'ถูกทุกข้อ', '2', '2018-06-28 15:50:24', '2018-06-28 15:50:24');
COMMIT;

-- ----------------------------
-- Table structure for pretests
-- ----------------------------
DROP TABLE IF EXISTS `pretests`;
CREATE TABLE `pretests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci,
  `choice1` text COLLATE utf8mb4_unicode_ci,
  `choice2` text COLLATE utf8mb4_unicode_ci,
  `choice3` text COLLATE utf8mb4_unicode_ci,
  `choice4` text COLLATE utf8mb4_unicode_ci,
  `answer` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pretests_user_id_foreign` (`user_id`),
  CONSTRAINT `pretests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of pretests
-- ----------------------------
BEGIN;
INSERT INTO `pretests` VALUES (33, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'ภควัทคีตาสตีลโอเควีไอพี', 'ภควัทคีตาสตีลโอเควีไอพี', 'ภควัทคีตาสตีลโอเควีไอพี', 'ถูกทุกข้อ', '1', NULL, '2018-06-28 15:49:48', '2018-06-28 15:49:48');
INSERT INTO `pretests` VALUES (34, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'ภควัทคีตาสตีลโอเควีไอพี', 'ภควัทคีตาสตีลโอเควีไอพี', 'ภควัทคีตาสตีลโอเควีไอพี', 'ถูกทุกข้อ', '2', NULL, '2018-06-28 15:49:56', '2018-06-28 15:49:56');
INSERT INTO `pretests` VALUES (35, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'มีการเขียนโค้ดที  เป็นมาตรฐาน ช่วยลดและกําจัดโค้ดที ไม่จําเป็น', 'ภควัทคีตาสตีลโอเควีไอพี', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', '1', NULL, '2018-06-28 15:50:04', '2018-06-28 15:50:04');
COMMIT;

-- ----------------------------
-- Table structure for result_posttest
-- ----------------------------
DROP TABLE IF EXISTS `result_posttest`;
CREATE TABLE `result_posttest` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `choice` int(11) DEFAULT NULL,
  `posttest_id` int(11) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `result_posttest_user_id_foreign` (`user_id`),
  CONSTRAINT `result_posttest_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for result_pretest
-- ----------------------------
DROP TABLE IF EXISTS `result_pretest`;
CREATE TABLE `result_pretest` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `choice` int(11) DEFAULT NULL,
  `pretest_id` int(11) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `result_pretest_user_id_foreign` (`user_id`),
  CONSTRAINT `result_pretest_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for result_test
-- ----------------------------
DROP TABLE IF EXISTS `result_test`;
CREATE TABLE `result_test` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `choice` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `result_test_user_id_foreign` (`user_id`),
  CONSTRAINT `result_test_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of result_test
-- ----------------------------
BEGIN;
INSERT INTO `result_test` VALUES (37, 3, 1, 1, 1, '2018-06-28 16:00:48', '2018-06-28 16:00:48');
INSERT INTO `result_test` VALUES (38, 1, 2, 1, 1, '2018-06-28 16:00:48', '2018-06-28 16:00:48');
INSERT INTO `result_test` VALUES (39, 2, 3, 1, 1, '2018-06-28 16:00:48', '2018-06-28 16:00:48');
INSERT INTO `result_test` VALUES (40, 1, 4, 1, 1, '2018-06-28 16:00:48', '2018-06-28 16:00:48');
INSERT INTO `result_test` VALUES (41, 2, 1, 2, 1, '2018-06-28 16:02:19', '2018-06-28 16:02:19');
INSERT INTO `result_test` VALUES (42, 1, 2, 2, 1, '2018-06-28 16:02:19', '2018-06-28 16:02:19');
COMMIT;

-- ----------------------------
-- Table structure for score
-- ----------------------------
DROP TABLE IF EXISTS `score`;
CREATE TABLE `score` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `score_user_id_foreign` (`user_id`),
  CONSTRAINT `score_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of score
-- ----------------------------
BEGIN;
INSERT INTO `score` VALUES (8, 'pretests', 5, NULL, 1, '2018-05-13 12:58:43', '2018-05-13 12:58:43');
INSERT INTO `score` VALUES (9, 'posttests', 7, NULL, 1, '2018-05-13 12:59:38', '2018-05-13 12:59:38');
INSERT INTO `score` VALUES (10, 'posttests', 8, NULL, 1, '2018-05-13 13:02:23', '2018-05-13 13:02:23');
INSERT INTO `score` VALUES (11, 'posttests', 8, NULL, 1, '2018-05-13 13:07:56', '2018-05-13 13:07:56');
INSERT INTO `score` VALUES (12, 'posttests', 8, NULL, 1, '2018-05-13 13:08:16', '2018-05-13 13:08:16');
INSERT INTO `score` VALUES (13, 'pretests', 5, NULL, 1, '2018-05-13 13:08:29', '2018-05-13 13:08:29');
INSERT INTO `score` VALUES (14, 'Unit_1', 0, NULL, 1, '2018-05-13 13:37:22', '2018-05-13 13:37:22');
INSERT INTO `score` VALUES (15, 'Unit_1', 0, NULL, 1, '2018-05-13 18:22:10', '2018-05-13 18:22:10');
INSERT INTO `score` VALUES (16, 'pretests', 9, NULL, 1, '2018-05-13 18:22:51', '2018-05-13 18:22:51');
INSERT INTO `score` VALUES (17, 'Unit_2', 0, NULL, 1, '2018-05-13 18:24:45', '2018-05-13 18:24:45');
INSERT INTO `score` VALUES (18, 'Unit_1', 0, NULL, 1, '2018-06-28 16:00:48', '2018-06-28 16:00:48');
INSERT INTO `score` VALUES (19, 'Unit_2', 0, NULL, 1, '2018-06-28 16:02:19', '2018-06-28 16:02:19');
COMMIT;

-- ----------------------------
-- Table structure for submenu
-- ----------------------------
DROP TABLE IF EXISTS `submenu`;
CREATE TABLE `submenu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of submenu
-- ----------------------------
BEGIN;
INSERT INTO `submenu` VALUES (5, 'ข้อมูลส่วนตัว', '<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', NULL, 3, '2018-05-11 15:51:10', '2018-06-28 15:56:29');
INSERT INTO `submenu` VALUES (8, 'สรุปผลการปฏิบัติงานโดยย่อ', NULL, NULL, 3, '2018-05-11 15:51:41', '2018-05-11 15:51:41');
INSERT INTO `submenu` VALUES (9, 'การพัฒนาตนเอง', '<p>d</p>', NULL, 3, '2018-05-11 15:52:04', '2018-05-12 13:31:57');
INSERT INTO `submenu` VALUES (10, 'เกียรติบัตร', NULL, NULL, 3, '2018-05-11 15:52:14', '2018-05-11 15:52:14');
INSERT INTO `submenu` VALUES (13, 'การเตรียมตัวและการติดตั้ง Laravel ด้วย Composer', NULL, 'PDF_2018-06-28153017629533163.pdf', 4, '2018-05-12 15:26:31', '2018-06-28 15:58:15');
INSERT INTO `submenu` VALUES (14, 'ทำความรู้จักกับ Laravel , MVC และ Best Pracitices', NULL, 'PDF_2018-06-28153017631212944.pdf', 4, '2018-05-12 16:20:39', '2018-06-28 15:58:32');
INSERT INTO `submenu` VALUES (15, 'การเขียนและใช้งาน Controllers , Routes , Layout,Views', NULL, 'PDF_2018-06-28153017632897690.pdf', 4, '2018-05-12 16:20:50', '2018-06-28 15:58:48');
INSERT INTO `submenu` VALUES (16, 'ออกแบบฐานข้อมูลและตารางด้วย Artisan , Database Migrations และการทำ Seeding', NULL, 'PDF_2018-06-28153017633953377.pdf', 4, '2018-05-12 16:20:59', '2018-06-28 15:58:59');
INSERT INTO `submenu` VALUES (17, 'การทำงานกับฐานข้อมูล การสร้าง Models และการใช้ Eloquent ORM', NULL, 'PDF_2018-06-28153017635154254.pdf', 4, '2018-05-12 16:21:12', '2018-06-28 15:59:11');
INSERT INTO `submenu` VALUES (18, 'การกำหนด Eloquent relations', NULL, 'PDF_2018-06-28153017636568287.pdf', 4, '2018-05-12 16:21:23', '2018-06-28 15:59:25');
COMMIT;

-- ----------------------------
-- Table structure for tests
-- ----------------------------
DROP TABLE IF EXISTS `tests`;
CREATE TABLE `tests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci,
  `choice1` text COLLATE utf8mb4_unicode_ci,
  `choice2` text COLLATE utf8mb4_unicode_ci,
  `choice3` text COLLATE utf8mb4_unicode_ci,
  `choice4` text COLLATE utf8mb4_unicode_ci,
  `answer` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tests_unit_id_foreign` (`unit_id`),
  CONSTRAINT `tests_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tests
-- ----------------------------
BEGIN;
INSERT INTO `tests` VALUES (69, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', '1', 1, '2018-06-28 15:46:38', '2018-06-28 15:46:38');
INSERT INTO `tests` VALUES (70, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', '2', 1, '2018-06-28 15:46:47', '2018-06-28 15:46:47');
INSERT INTO `tests` VALUES (71, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', '1', 1, '2018-06-28 15:46:57', '2018-06-28 15:46:57');
INSERT INTO `tests` VALUES (72, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', '1', 1, '2018-06-28 15:47:05', '2018-06-28 15:47:05');
INSERT INTO `tests` VALUES (73, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', '2', 2, '2018-06-28 15:47:15', '2018-06-28 15:47:15');
INSERT INTO `tests` VALUES (74, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', '1', 2, '2018-06-28 15:47:23', '2018-06-28 15:47:23');
INSERT INTO `tests` VALUES (75, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', '1', 3, '2018-06-28 15:47:34', '2018-06-28 15:47:34');
INSERT INTO `tests` VALUES (76, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', '1', 3, '2018-06-28 15:47:45', '2018-06-28 15:47:45');
INSERT INTO `tests` VALUES (77, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', '1', 3, '2018-06-28 15:48:05', '2018-06-28 15:48:05');
INSERT INTO `tests` VALUES (78, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', '2', 3, '2018-06-28 15:48:13', '2018-06-28 15:48:13');
INSERT INTO `tests` VALUES (79, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', '1', 4, '2018-06-28 15:48:25', '2018-06-28 15:48:25');
INSERT INTO `tests` VALUES (80, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', '1', 4, '2018-06-28 15:48:33', '2018-06-28 15:48:33');
INSERT INTO `tests` VALUES (81, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', '1', 5, '2018-06-28 15:48:52', '2018-06-28 15:48:52');
INSERT INTO `tests` VALUES (82, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'ภควัทคีตาสตีลโอเควีไอพี', '1', 5, '2018-06-28 15:49:01', '2018-06-28 15:49:01');
INSERT INTO `tests` VALUES (83, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'ภควัทคีตาสตีลโอเควีไอพี', 'ภควัทคีตาสตีลโอเควีไอพี', 'ภควัทคีตาสตีลโอเควีไอพี', 'ถูกทุกข้อ', '1', 6, '2018-06-28 15:49:25', '2018-06-28 15:49:25');
INSERT INTO `tests` VALUES (84, '<p>เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น</p>', 'ภควัทคีตาสตีลโอเควีไอพี', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'เอ๋อพาวเวอร์เซอร์วิส พุทธศตวรรษ โซลาร์เซ็กซ์ถูกต้องคอลเล็กชั่น', 'ถูกทุกข้อ', '2', 6, '2018-06-28 15:49:35', '2018-06-28 15:49:35');
COMMIT;

-- ----------------------------
-- Table structure for units
-- ----------------------------
DROP TABLE IF EXISTS `units`;
CREATE TABLE `units` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of units
-- ----------------------------
BEGIN;
INSERT INTO `units` VALUES (1, 'หน่วยที่ 1', 'การติดตั้ง Laravel ด้วย Composer', '2018-05-09 06:05:23', '2018-05-09 06:05:23');
INSERT INTO `units` VALUES (2, 'หน่วยที่ 2', 'MVC และ Best Pracitices', '2018-05-09 06:05:23', '2018-05-09 06:05:23');
INSERT INTO `units` VALUES (3, 'หน่วยที่ 3', 'การเขียนและใช้งาน Controllers ', '2018-05-09 06:05:23', '2018-05-09 06:05:23');
INSERT INTO `units` VALUES (4, 'หน่วยที่ 4', 'การเรียกใช้ Layout ใน Laravel', '2018-05-09 06:05:23', '2018-05-09 06:05:23');
INSERT INTO `units` VALUES (5, 'หน่วยที่ 5', 'Database', '2018-05-09 06:05:23', '2018-05-09 06:05:23');
INSERT INTO `units` VALUES (6, 'หน่วยที่ 6', 'Eloquent ORM', '2018-05-09 06:05:23', '2018-05-09 06:05:23');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role` int(10) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_code` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 1, 'leksoft', 'leksoft@rmu.ac.th', NULL, NULL, '$2y$10$MTvYdzGLlNeu.GhUSiLhtO.t7DUvteVdEJICeunYqcyCwJd8UybfC', 'W53FLmrKbGYwAotKQyECy2GeTtfAQJXVdbMtOhyouYi8TP30RwLNyhJ4Qtno', '2018-05-08 09:26:49', '2018-05-08 09:26:49');
INSERT INTO `users` VALUES (2, 2, 'ใจดี มานี', 'm.nakharin@gmail.com', 'มัธยมศึกษาปีที่ 1', '514244222', '$2y$10$oynVhDvAj1njV6r9donuRe4jC0JvKVj4gGbLAxzdWRKrlYzagxgbe', NULL, '2018-06-28 15:54:28', '2018-06-28 15:55:47');
INSERT INTO `users` VALUES (4, 2, 'มานะ มานี', 'm.nakharin2@gmail.com', 'มัธยมศึกษาปีที่ 1', '521455447', '$2y$10$pUXvV8oZAudNGq6UzXmiZ.hQBje/hKRrNoF1VxzMoiE7RcbfzxY9y', NULL, '2018-06-28 15:55:36', '2018-06-28 15:55:36');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
