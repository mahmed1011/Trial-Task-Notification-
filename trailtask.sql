-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2023 at 01:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trailtask`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2023_08_31_072733_create_jobs_table', 3),
(17, '2023_08_31_074203_add_user_id_to_notifications', 4),
(19, '2023_08_31_071509_create_notifications_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('082730fe-8b0b-4e96-871e-457161ed3abf', 'App\\Notifications\\UserRegisterNotification', 'App\\Models\\User', 17, '{\"name\":\"Herry\",\"email\":\"herry@gmail.com\",\"message\":\"Welcome to our website! We are excited to have you on board.\"}', NULL, '2023-09-01 02:24:09', '2023-09-01 02:24:09'),
('0bff96ce-6d3d-4c63-9ae6-4e58a6927735', 'App\\Notifications\\UserRegisterNotification', 'App\\Models\\User', 15, '{\"name\":\"Zaid\",\"email\":\"zaid@gmail.com\",\"message\":\"Welcome to our website! We are excited to have you on board.\"}', '2023-08-31 13:36:18', '2023-08-31 13:36:08', '2023-08-31 13:36:18'),
('1e221773-2405-4b43-a3ee-3e4d25118c56', 'App\\Notifications\\EmailUpdateNotification', 'App\\Models\\User', 17, '{\"message\":\"Your email address has been updated to herry@gmail.com\"}', '2023-09-01 02:35:19', '2023-09-01 02:34:05', '2023-09-01 02:35:19'),
('2cb9dc4e-249c-4678-ad9e-6ef9e049b180', 'App\\Notifications\\CustomNotification', 'App\\Models\\User', 15, '{\"message\":\"How are you\"}', NULL, '2023-08-31 14:48:47', '2023-08-31 14:48:47'),
('3b8a0f17-90c8-45bc-b456-c711f415f9fe', 'App\\Notifications\\EmailUpdateNotification', 'App\\Models\\User', 3, '{\"message\":\"Your email address has been updated to ahmed12@gmail.com\"}', NULL, '2023-09-01 05:35:25', '2023-09-01 05:35:25'),
('47cf119f-8853-40da-9b8c-a438c7162eff', 'App\\Notifications\\UserRegisterNotification', 'App\\Models\\User', 16, '{\"name\":\"Zain\",\"email\":\"zain@gmail.com\",\"message\":\"Welcome to our website! We are excited to have you on board.\"}', NULL, '2023-08-31 13:39:16', '2023-08-31 13:39:16'),
('5a8be837-9cd6-4d82-954a-8cbafe95f9db', 'App\\Notifications\\CustomNotification', 'App\\Models\\User', 14, '{\"message\":\"Hey Rehan, \\r\\n How are you!!!\"}', NULL, '2023-09-01 05:58:21', '2023-09-01 05:58:21'),
('5c6a8311-e9f5-4e09-9157-e03a7193a275', 'App\\Notifications\\CustomNotification', 'App\\Models\\User', 14, '{\"message\":\"hi\"}', NULL, '2023-09-01 06:12:38', '2023-09-01 06:12:38'),
('62f144b1-0bfa-4518-962a-12d4f3e7c78e', 'App\\Notifications\\CustomNotification', 'App\\Models\\User', 15, '{\"message\":\"Can you Friendship with me.\"}', NULL, '2023-08-31 15:03:53', '2023-08-31 15:03:53'),
('694cb9fd-c2ad-4af4-9390-cc6d1b0efe5d', 'App\\Notifications\\CustomNotification', 'App\\Models\\User', 3, '{\"message\":\"Can you Talk with me?\"}', NULL, '2023-09-01 05:34:15', '2023-09-01 05:34:15'),
('a6aa4840-9b2d-49b5-ae8b-8cdea72030e7', 'App\\Notifications\\EmailUpdateNotification', 'App\\Models\\User', 17, '{\"message\":\"Your email address has been updated to herry12@gmail.com\"}', '2023-09-01 02:35:29', '2023-09-01 02:32:49', '2023-09-01 02:35:29'),
('b19c7bc4-19bd-44a5-8931-19655d6c4fff', 'App\\Notifications\\CustomNotification', 'App\\Models\\User', 15, '{\"message\":\"Hi Zaid,\"}', '2023-08-31 15:05:11', '2023-08-31 14:48:01', '2023-08-31 15:05:11'),
('b5e09c01-1e67-431f-b4c5-00c71c9b6590', 'App\\Notifications\\CustomNotification', 'App\\Models\\User', 17, '{\"message\":\"Hey, Herry!\\r\\n\\r\\nHow are you!\"}', '2023-09-01 02:35:31', '2023-09-01 02:26:32', '2023-09-01 02:35:31'),
('daa2b2e9-f5f5-436a-854f-4d6682968510', 'App\\Notifications\\UserRegisterNotification', 'App\\Models\\User', 15, '{\"name\":\"Zaid\",\"email\":\"zaid@gmail.com\",\"message\":\"Welcome to our website! We are excited to have you on board.\"}', '2023-08-31 13:36:59', '2023-08-31 13:36:07', '2023-08-31 13:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Ali', 'ali@gmail.com', NULL, '$2y$10$PCHg6oajzM6dgKhq3xaf5u6Mz6KxbBPol.w1NTMYDGFIeddNx1vjq', 'user', NULL, '2023-08-31 02:07:58', '2023-08-31 02:07:58'),
(3, 'Ahmed', 'ahmed12@gmail.com', NULL, '$2y$10$O.Yl6.BmTPGDsRn1OcaY0uehAU8L79IP2ZD6WfYNO0b5hjc/e7wCG', 'user', NULL, '2023-08-31 02:22:43', '2023-09-01 05:35:25'),
(4, 'Umair', 'uch291202@gmail.coom', NULL, '$2y$10$x7uionO5Ttj29sJEpJLLsex0KxEJ2XzAertHP7OoGPzDWbIZQ6gci', 'user', NULL, '2023-08-31 02:40:51', '2023-08-31 02:40:51'),
(8, 'Abdullah', 'abdullah@gmail.com', NULL, '$2y$10$YkOHSKKhyMS/X7fTcPBc..2TyFunndD5z9QAsaD6BcZzAbi2D3PjG', 'user', NULL, '2023-08-31 04:44:58', '2023-08-31 04:44:58'),
(13, 'Admin', 'admin@admin.com', NULL, '$2y$10$SyPNDUxokOwsFikQ4viAfOXfowF7qfHG3jLb6SibBQkdrHO9O2QiG', 'admin', NULL, '2023-08-31 08:31:49', '2023-08-31 08:31:49'),
(14, 'Rehan', 'rehan@gmail.com', NULL, '$2y$10$0degBJnKSErahfWNZJOiGOAtmrR3k98tWcCn5G74Z893SfaxdsCqi', 'user', NULL, '2023-08-31 09:34:21', '2023-08-31 09:34:21'),
(15, 'Zaid', 'zaid@gmail.com', NULL, '$2y$10$7fy5oyiGTyRK81iCQlXHPOnQV0IaKF4iuRN06Ombzx/to076lU.wG', 'user', NULL, '2023-08-31 12:52:54', '2023-09-01 02:22:53'),
(16, 'Zain', 'zain@gmail.com', NULL, '$2y$10$7cC97XzpwZZIppHF4vzWnuHbLRRN/9Fq5tNQTR/gaWDa86cBspZsy', 'user', NULL, '2023-08-31 13:39:16', '2023-08-31 13:39:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
