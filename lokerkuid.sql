-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 11:18 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lokerkuid`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `files` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `publisher`, `title`, `description`, `files`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Testing', '<p>ini cuma ngetes<br></p>', NULL, '2023-01-09 13:18:56', '2023-01-09 13:18:56'),
(18, 'admin', 'asjdlajsdlajldj', '<p>jlajdlajdlasjdlasjdlasjd</p>', NULL, '2023-01-10 07:59:12', '2023-01-10 07:59:12'),
(19, 'LokerkuID', 'Laravel', '<p><b>What is Laravel?</b></p><p><span style=\"font-weight: 400;\">Laravel adalah </span><i><span style=\"font-weight: 400;\">framework </span></i><span style=\"font-weight: 400;\">berbasis bahasa pemrograman <a href=\"https://www.dewaweb.com/blog/apa-itu-php/\" title=\"PHP\">PHP</a>\r\n yang bisa digunakan untuk membantu proses pengembangan sebuah website \r\nagar lebih maksimal. Dengan menggunakan Laravel, website yang dihasilkan\r\n akan lebih dinamis.</span></p><p><span style=\"font-weight: 400;\">Kehadiran </span><i><span style=\"font-weight: 400;\">framework </span></i><span style=\"font-weight: 400;\">Laravel menjadikan </span><a href=\"https://www.dewaweb.com/blog/belajar-coding-untuk-pemula/\" title=\"bahasa pemrograman\"><span style=\"font-weight: 400;\">bahasa pemrograman</span></a><span style=\"font-weight: 400;\"> PHP menjadi lebih powerful</span><i><span style=\"font-weight: 400;\">. </span></i><span style=\"font-weight: 400;\">Perlu kita ketahui bahwa kehadiran </span><i><span style=\"font-weight: 400;\">framework </span></i><span style=\"font-weight: 400;\">Laravel selalu menghadirkan fitur-fitur terbaru dibandingkan </span><i><span style=\"font-weight: 400;\">framework </span></i><span style=\"font-weight: 400;\">lainnya.</span></p><p><i><span style=\"font-weight: 400;\">Framework </span></i><span style=\"font-weight: 400;\">Laravel menggunakan struktur MVC (</span><i><span style=\"font-weight: 400;\">Model View Controller)</span></i><span style=\"font-weight: 400;\">.\r\n MVC merupakan model aplikasi yang memisahkan antara data dan tampilan \r\nberdasarkan komponen aplikasi. Dengan adanya model MVC, pengguna Laravel\r\n menjadi lebih mudah dalam mempelajari Laravel. Serta menjadikan proses \r\npembuatan aplikasi berbasis website menjadi lebih cepat.</span></p><p><br><br></p>', NULL, '2023-01-10 13:34:52', '2023-01-10 13:34:52'),
(21, 'LokerkuID', 'HTML', '<p>HTML adalah singkatan dari HyperText Markup Language. <a href=\"https://www.temukanpengertian.com/2013/06/pengertian-html.html\" target=\"_blank\"><b>Pengertian HTML adalah</b></a>\r\n bahasa pemrograman standar yang digunakan untuk membuat sebuah halaman \r\nweb, yang kemudian dapat diakses untuk menampilkan berbagai informasi di\r\n dalam sebuah penjelajah web Internet (<a href=\"https://www.temukanpengertian.com/2013/01/pengertian-browser.html\" target=\"_blank\">Browser</a>)\r\n . HTML dapat juga digunakan sebagai link link antara file-file dalam \r\nsitus atau dalam komputer dengan menggunakan localhost, atau link yang \r\nmenghubungkan antar situs dalam dunia internet.\r\n</p>', NULL, '2023-01-10 13:37:19', '2023-01-10 13:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobrecruitment`
--

CREATE TABLE `jobrecruitment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `recruiter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remoteworking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobrecruitment`
--

INSERT INTO `jobrecruitment` (`id`, `recruiter`, `jobname`, `city`, `salary`, `type`, `experience`, `remoteworking`, `desc`, `created_at`, `updated_at`, `status`) VALUES
(19, 'LokerkuID', 'Web Dev', 'jakarta', '111111', 'fulltime', '10up', 'yes', 'asdasdasd', '2023-01-08 13:36:14', '2023-01-08 13:40:16', 'close'),
(23, 'Telkom Travel', 'Driver', 'bandung', '1500000', 'fulltime', '1-3', 'no', 'Hati hati di jalan', '2023-01-08 13:48:53', '2023-01-08 13:49:04', 'close'),
(24, 'LokerkuID', 'Full Stack Web Developerr', 'jakarta', '8000000', 'fulltime', '5-10', 'no', 'Menguasain banyak bahasa pemrograman untuk pengembangan website', '2023-01-08 19:50:50', '2023-01-10 09:56:15', 'ongoing'),
(25, 'LokerkuID', 'UI/UX Designer', 'jakarta', '3000000', 'fulltime', 'freshgraduate', 'yes', 'Memahami tools untuk mendesain sebuah ui', '2023-01-10 03:00:11', '2023-01-10 03:00:11', 'ongoing'),
(27, 'kebabkupadamu', 'Kasir', 'bandung', '1500000', 'fulltime', 'freshgraduate', 'no', 'jujur banget', '2023-01-10 07:53:17', '2023-01-10 07:55:11', 'close'),
(29, 'LokerkuID', 'Data Analyst', 'bandung', '9000000', 'internship', '1-3', 'yes', 'Mencari pekerja yang mau berkembang bersama', '2023-01-10 09:24:16', '2023-01-10 09:24:16', 'ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_08_095436_create_jobrecruitment_table', 1),
(6, '2023_01_08_151550_add_status_to_jobrecruitment', 2),
(7, '2023_01_09_181623_create_article_table', 3),
(8, '2023_01_09_192348_create_article_table', 4),
(9, '2023_01_09_192558_create_article_table', 5),
(10, '2023_01_09_201251_create_article_table', 6),
(11, '2023_01_09_201841_create_article_table', 7),
(13, '2023_01_10_175044_create_training_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trainingname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `trainer`, `trainingname`, `link`, `description`, `created_at`, `updated_at`) VALUES
(1, 'LokerkuID', 'testing', 'asdasdasd', 'asdasd', '2023-01-10 11:16:19', '2023-01-10 11:16:19'),
(2, 'LokerkuID', 'aa', 'aa', 'aaa', '2023-01-10 12:11:08', '2023-01-10 12:11:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `level`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `desc`) VALUES
(7, 'admin', 'admin@lokerku.id', 0, NULL, '$2y$10$Cyigsyke6gaGSWROpNpArOC7OPxItRSlAzufUJ5j86iYE/GSiwIUm', NULL, '2023-01-08 18:15:50', '2023-01-08 18:15:50', 'Normal User'),
(10, 'user', 'user@lokerku.id', 2, NULL, '$2y$10$/ExtxfOB7JU/90SDJc8RFu8A1dKKtSPWdUTy.OLfF2csdEQ/haL/W', NULL, '2023-01-08 19:47:42', '2023-01-08 19:47:42', 'Normal User'),
(11, 'LokerkuID', 'lokerkuID@lokerku.id', 1, NULL, '$2y$10$iF1VIfpB5F1Yyl6uxItBi.vLMfq6d1nZhwKN1HWQDpV.mAb1exxyS', NULL, '2023-01-08 19:49:05', '2023-01-10 01:00:12', 'Owner nih bossss'),
(14, 'Telkom Travel', 'admin@telkomtravel.com', 1, NULL, '$2y$10$K6zBE9ea16fJUoHC9Xk1KeBAXP5xBqoothQq.cpEys1wMLiyu14e.', NULL, '2023-01-10 03:02:16', '2023-01-10 03:30:59', 'Perusahaan kamu bergerak dibidang transportasi dan jasa ekspedisi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobrecruitment`
--
ALTER TABLE `jobrecruitment`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
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
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobrecruitment`
--
ALTER TABLE `jobrecruitment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
