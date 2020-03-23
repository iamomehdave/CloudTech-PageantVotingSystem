-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for laravelmysql
CREATE DATABASE IF NOT EXISTS `laravelmysql` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `laravelmysql`;

-- Dumping structure for table laravelmysql.batch_a_s
CREATE TABLE IF NOT EXISTS `batch_a_s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sn` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `votes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `batch_a_s_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravelmysql.batch_a_s: ~0 rows (approximately)
/*!40000 ALTER TABLE `batch_a_s` DISABLE KEYS */;
INSERT INTO `batch_a_s` (`id`, `slug`, `name`, `email`, `phone`, `sn`, `image`, `votes`, `created_at`, `updated_at`) VALUES
	(1, 'aziken-ngozichukwu', 'Aziken Ngozichukwu', 'azikenNgozichukwu@faceoftopflyers', '200', 1, '1607495593.jpg', '0', '2019-09-15 08:22:56', '2019-09-15 08:22:56'),
	(2, 'aghahowa-nosakhare', 'Aghahowa Nosakhare', 'Aghahowanosakhare@faceoftopflyers', '2009', 2, '1174336299.jpg', '0', '2019-09-15 08:25:33', '2019-09-15 08:25:33'),
	(3, 'oputa-amaka', 'Oputa Amaka', 'Oputaamaka@faceoftopflyers', '2009', 3, '788723670.jpg', '0', '2019-09-15 08:26:40', '2019-09-15 08:26:40'),
	(4, 'ruth-unekwuojo', 'Ruth Unekwuojo', 'Ruthnekwuojo@faceoftopflyers', '2009', 4, '855468.jpg', '0', '2019-09-15 08:27:35', '2019-09-15 08:27:35'),
	(5, 'promise-okogbenin', 'Promise Okogbenin', 'Promiseokogbenin@faceoftopflyers', '2019', 5, '1644008648.jpg', '0', '2019-09-15 08:28:46', '2019-09-15 08:28:47'),
	(6, 'oseghale-valerie', 'Oseghale Valerie', 'Oseghalevalerie@faceoftopflyers', '2019', 6, '1046508813.jpg', '0', '2019-09-15 08:30:07', '2019-09-15 08:30:07'),
	(7, 'akav-salem', 'Akav Salem', 'Akavsalem@faceoftopflyers', '2019', 7, '868107404.jpg', '0', '2019-09-15 08:32:20', '2019-09-15 08:32:21'),
	(8, 'otutufegha-precious', 'Otutufegha Precious', 'Otutufeghaprecious@faceoftopflyers', '2019', 8, '1693929611.jpg', '0', '2019-09-15 08:33:23', '2019-09-15 08:33:23'),
	(9, 'chunuwe-onyeka', 'Chunuwe Onyeka', 'Chunuweonyeka@faceoftopflyers', '2019', 9, '1059175963.jpg', '0', '2019-09-15 08:36:03', '2019-09-15 08:36:03'),
	(10, 'otokpa-agwube', 'Otokpa Agwube', 'Otokpaagwube@faceoftopflyers', '2019', 10, '321181163.jpg', '0', '2019-09-15 08:37:16', '2019-09-15 08:37:16'),
	(11, 'ogoegbunam-maris', 'Ogoegbunam Maris', 'Ogoegbunammaris@faceoftopflyers', '2019', 11, '1582451061.jpg', '0', '2019-09-15 08:39:53', '2019-09-15 08:39:53'),
	(12, 'ibemere-dorinda', 'Ibemere Dorinda', 'Ibemeredorinda@faceoftopflyers', '2019', 12, '209246404.jpg', '0', '2019-09-15 08:41:17', '2019-09-15 08:41:17'),
	(13, 'omale-happiness', 'Omale Happiness', 'OmaleHappiness@faceoftopflyers', '2019', 13, '1265039649.jpg', '0', '2019-09-15 08:43:23', '2019-09-15 08:43:23'),
	(14, 'eze-rosemary', 'Eze Rosemary', 'ezerosemary@faceoftopflyers', '2019', 14, '1985034256.jpg', '0', '2019-09-15 08:44:59', '2019-09-15 08:44:59'),
	(15, 'uzoma-cynthia', 'Uzoma Cynthia', 'uzomacynthia@faceoftopflyers', '2019', 15, '848237143.jpg', '0', '2019-09-15 08:46:40', '2019-09-15 08:46:40'),
	(16, 'nadia-uchechi', 'Nadia Uchechi', 'nadiauchechi@faceoftopflyers', '2019', 16, '167208578.jpg', '0', '2019-09-15 08:48:30', '2019-09-15 08:48:30'),
	(17, 'ngozi-ashley', 'Ngozi Ashley', 'ngoziashley@faceoftopflyers', '2019', 17, '2060245964.jpg', '0', '2019-09-15 08:50:27', '2019-09-15 08:50:27'),
	(18, 'chidinma-ruth', 'Chidinma Ruth', 'chidinmaruth@faceoftopflyers', '2019', 18, '1649431765.jpg', '0', '2019-09-15 08:52:27', '2019-09-15 08:52:27'),
	(19, 'agboma-jennifer', 'Agboma Jennifer', 'agbomajennifer@faceoftopflyers', '2019', 19, '1676301835.jpg', '0', '2019-09-15 08:55:01', '2019-09-15 08:55:01'),
	(20, 'mbadike-juliet', 'Mbadike Juliet', 'mbadikejuliet@faceoftopflyers', '2019', 20, '1389986269.jpg', '0', '2019-09-15 08:58:29', '2019-09-15 08:58:29'),
	(21, 'ani-blessed', 'Ani Blessed', 'aniblessed@faceoftopflyers', '2019', 21, '1332070535.jpg', '0', '2019-09-15 09:00:05', '2019-09-15 09:00:05'),
	(22, 'apeleokha-omoh', 'Apeleokha Omoh', 'Apeleokhaomoh@faceoftopflyers', '2019', 22, '131233013.jpg', '0', '2019-09-15 09:01:17', '2019-09-15 09:01:17'),
	(23, 'limaro-thomas', 'Limaro Thomas', 'limarothomas@faceoftopflyers', '2019', 23, '1832346371.jpg', '0', '2019-09-15 09:02:27', '2019-09-15 09:02:27'),
	(24, 'abukakar-sarah', 'Abukakar Sarah', 'abukakarsarah@faceoftopflyers', '2019', 24, '1336230238.jpg', '0', '2019-09-15 09:09:22', '2019-09-15 09:09:22'),
	(25, 'igbinedion-gift', 'Igbinedion Gift', 'Igbinediongift@faceoftopflyers', '2019', 25, '2089149955.jpg', '0', '2019-09-15 09:10:31', '2019-09-15 09:10:31'),
	(26, 'okpara-chisom', 'Okpara Chisom', 'Okparachisom@faceoftopflyers', '2019', 26, '1639602917.jpg', '0', '2019-09-15 09:11:28', '2019-09-15 09:11:29'),
	(27, 'freeborn-valentina', 'Freeborn Valentina', 'Freebornvalentina@faceoftopflyers', '2019', 27, '1927839909.jpg', '0', '2019-09-15 09:12:38', '2019-09-15 09:12:38'),
	(28, 'ugbo-osadebamhen', 'Ugbo Osadebamhen', 'Ugboosadebamhen@faceoftopflyers', '2019', 28, '710635518.jpg', '0', '2019-09-15 09:13:41', '2019-09-15 09:13:41'),
	(29, 'faith-abu', 'Faith Abu', 'faithabu@faceoftopflyers', '2019', 29, '2084752023.jpg', '0', '2019-09-15 09:16:31', '2019-09-15 09:16:31'),
	(30, 'anude-nkeonyeasua', 'Anude Nkeonyeasua', 'anudenkeonyeasua@faceoftopflyers', '2019', 30, '1364799222.jpg', '0', '2019-09-15 09:17:57', '2019-09-15 09:17:57');
/*!40000 ALTER TABLE `batch_a_s` ENABLE KEYS */;

-- Dumping structure for table laravelmysql.batch_b_s
CREATE TABLE IF NOT EXISTS `batch_b_s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravelmysql.batch_b_s: ~0 rows (approximately)
/*!40000 ALTER TABLE `batch_b_s` DISABLE KEYS */;
/*!40000 ALTER TABLE `batch_b_s` ENABLE KEYS */;

-- Dumping structure for table laravelmysql.batch_c_s
CREATE TABLE IF NOT EXISTS `batch_c_s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravelmysql.batch_c_s: ~0 rows (approximately)
/*!40000 ALTER TABLE `batch_c_s` DISABLE KEYS */;
/*!40000 ALTER TABLE `batch_c_s` ENABLE KEYS */;

-- Dumping structure for table laravelmysql.companies
CREATE TABLE IF NOT EXISTS `companies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravelmysql.companies: ~0 rows (approximately)
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;

-- Dumping structure for table laravelmysql.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravelmysql.customers: ~0 rows (approximately)
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

-- Dumping structure for table laravelmysql.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravelmysql.migrations: ~8 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_06_23_073918_create_customers_table', 1),
	(4, '2019_06_26_152741_create_companies_table', 1),
	(5, '2019_07_14_143111_create_batch_a_s_table', 1),
	(6, '2019_07_14_143142_create_batch_b_s_table', 1),
	(7, '2019_07_14_143210_create_batch_c_s_table', 1),
	(8, '2019_08_03_124638_create_voters_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table laravelmysql.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravelmysql.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table laravelmysql.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravelmysql.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'pysmacoproduction', 'faceoftopflyers@gmail.com', NULL, '08030808671', '$2y$10$mOF4GVGSPJA.Dbkav.ueXe7wUdPRA/OMLGm9uh10g0GaqvE6oqbk2', NULL, '2019-09-15 08:15:49', '2019-09-15 08:15:49');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table laravelmysql.voters
CREATE TABLE IF NOT EXISTS `voters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contestant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `votes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravelmysql.voters: ~0 rows (approximately)
/*!40000 ALTER TABLE `voters` DISABLE KEYS */;
/*!40000 ALTER TABLE `voters` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
