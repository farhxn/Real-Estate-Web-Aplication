-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 07:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

CREATE TABLE `agencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agencies`
--

INSERT INTO `agencies` (`id`, `name`, `title`, `desc`, `phone`, `userId`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Malir Cantt Check Post No 2, Malir Cantonment, Karachi, Pakistan', 'Karachi Estate', 'Malir Cantt Check Post No 2, Malir Cantonment, Karachi, Pakistan', '908383', '1', 'Agency1716973236.png', '2024-05-29 04:00:36', '2024-05-29 04:00:36'),
(2, 'P.E.C.H.S Block 2 Block 2 Pakistan Employees Co-Operative Housing Society, Karachi, Pakistan', 'Hammas', 'huiusioajasjuasj', '987897', '1', 'Agency1716974741.png', '2024-05-29 04:25:42', '2024-05-29 04:25:42'),
(3, 'Landhi, Karachi, Pakistan', 'Karachi Real Estate', 'lorem................................', '8239721839', '1', 'Agency1717312806.png', '2024-06-02 02:20:06', '2024-06-02 02:20:06'),
(4, 'Malir 15 Flyover, Ghazi Dawood Brohi Goth, Karachi, Pakistan', 'karachi Real Estate', 'lorem.....', '123456789', '1', 'Agency1717313316.png', '2024-06-02 02:28:36', '2024-06-02 02:28:36'),
(5, 'Malir Cantt Check Post No 2, Malir Cantonment, Karachi, Pakistan', 'karachi Real Estate', 'lorem.....', '123456789', '1', 'Agency1717313385.png', '2024-06-02 02:29:45', '2024-06-02 02:29:45'),
(6, 'Hyderabad, Pakistan', 'American Real Estate', 'lorem.....', '123456789', '1', 'Agency1717313437.png', '2024-06-02 02:30:37', '2024-06-02 07:31:49'),
(7, 'Hyderabad, Pakistan', 'American Real Estate', 'lorem.....', '123456789', '1', NULL, '2024-06-02 07:29:56', '2024-06-02 07:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overview` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Agency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `Email`, `img`, `bio`, `overview`, `Agency`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'test', NULL, 'Agent1716978029.png', 'qwjlkwsa', 'ioqpweeoiqw', '2', '8921121', '2024-05-29 05:20:29', '2024-05-29 05:20:29'),
(2, 'Affan', NULL, 'Agent1716979344.png', 'pagal', 'Cjijas', '1', '1234209', '2024-05-29 05:42:24', '2024-05-29 05:42:24'),
(3, 'farhan', NULL, 'Agent1717317767.png', 'lorem.....', 'loremm.........', '6', '123456789', '2024-06-02 03:42:47', '2024-06-02 03:42:47'),
(4, 'farhan', 'farhanatif9990@gmail.com', 'Agent1717317843.png', 'lorem.....', 'loremm.........', '6', '123456789', '2024-06-02 03:44:03', '2024-06-02 03:44:03');

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ch_messages`
--

INSERT INTO `ch_messages` (`id`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
('32b7436e-9046-419a-9a8d-caf21ad3eb5c', 1, 2, 'what is this', '{\"new_name\":\"e2af8434-89c5-4e0d-8634-cfc60ae12c06.png\",\"old_name\":\"image1.png\"}', 1, '2024-05-28 05:44:10', '2024-05-28 05:44:18'),
('538830b9-aed6-478b-b447-f7b96c1db1db', 2, 1, 'hello', NULL, 1, '2024-05-28 05:37:02', '2024-05-28 05:37:29'),
('bf7b7036-658a-47ad-a392-5b7d5f6bb3be', 1, 2, '🙂🙂', NULL, 1, '2024-05-28 05:37:43', '2024-05-28 05:37:45'),
('caa52483-d54f-4de2-b3dc-92d3ec4d7950', 2, 3, 'j', NULL, 0, '2024-05-28 06:24:59', '2024-05-28 06:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `Name`, `Image`, `created_at`, `updated_at`) VALUES
(1, 'Faislabad', 'City1716806250.png', '2024-05-27 03:50:38', '2024-05-27 05:40:12'),
(2, 'karachi', 'City1716799869.png', '2024-05-27 03:51:10', '2024-05-27 03:51:10'),
(3, 'Lahore', 'City1716799919.png', '2024-05-27 03:51:59', '2024-05-27 03:51:59');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_04_07_114652_create_properties_table', 1),
(3, '2024_05_27_083530_create_cities_table', 2),
(4, '0000_00_00_000000_create_websockets_statistics_entries_table', 3),
(5, '2024_05_28_093533_create_users_table', 4),
(6, '2024_05_28_999999_add_active_status_to_users', 4),
(7, '2024_05_28_999999_add_avatar_to_users', 4),
(8, '2024_05_28_999999_add_dark_mode_to_users', 4),
(9, '2024_05_28_999999_add_messenger_color_to_users', 4),
(10, '2024_05_28_999999_create_chatify_favorites_table', 4),
(11, '2024_05_28_999999_create_chatify_messages_table', 4),
(12, '2014_10_12_000000_create_users_table', 5),
(13, '2014_10_12_200000_add_two_factor_columns_to_users_table', 5),
(14, '2024_05_28_101047_create_sessions_table', 5),
(15, '2024_05_29_074243_create_agencies_table', 6),
(16, '2024_05_29_095727_create_agents_table', 7);

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
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `listed_by` int(11) DEFAULT NULL,
  `activate` int(11) DEFAULT NULL,
  `userId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Prize` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `City` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Room` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Features` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NearBy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MainPic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SubPic1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SubPic2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SubPic3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SubPic4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `listed_by`, `activate`, `userId`, `Name`, `Desc`, `Prize`, `Type`, `City`, `Area`, `Room`, `Bath`, `Features`, `NearBy`, `Location`, `MainPic`, `SubPic1`, `SubPic2`, `SubPic3`, `SubPic4`, `created_at`, `updated_at`) VALUES
(4, 1, 0, '1', 'test', 'tg', '32', 'For Rent', 'For Rent', '78 sq ft', '2', '23', '[]', '[\"Mexico\"]', 'Malta', 'MainImage1716794698.png', 'D:\\xammp\\tmp\\phpC11E.tmp', 'D:\\xammp\\tmp\\phpC12F.tmp', NULL, NULL, '2024-04-11 03:44:27', '2024-05-27 02:24:58'),
(6, 1, 1, NULL, 'test', 'tg', '32', 'For Rent', 'For Rent', '78 sq ft', '2', '23', NULL, '[null]', 'Malir 15 Flyover, Ghazi Dawood Brohi Goth, Karachi, Pakistan', 'D:\\xammp\\tmp\\php5F08.tmp', 'D:\\xammp\\tmp\\php5F28.tmp', 'D:\\xammp\\tmp\\php5F38.tmp', NULL, NULL, '2024-04-11 04:06:59', '2024-05-27 06:58:58'),
(7, 1, 1, NULL, 'test', 'test', '5', 'For Co-Living', 'For Rent', '78 sq ft', '7', '9', NULL, '[null]', 'Malir 15 Flyover, Ghazi Dawood Brohi Goth, Karachi, PakistanMalir 15 Flyover, Ghazi Dawood Brohi Goth, Karachi, Pakistan', 'D:\\xammp\\tmp\\phpCC61.tmp', 'D:\\xammp\\tmp\\phpCC81.tmp', 'D:\\xammp\\tmp\\phpCC92.tmp', 'D:\\xammp\\tmp\\phpCCA3.tmp', 'D:\\xammp\\tmp\\phpCCA4.tmp', '2024-04-11 04:09:38', '2024-05-29 04:10:18'),
(8, 1, 0, '1', 'new banglow', 'test', '5000', 'For Rent', 'For Co-Living', '78 sq ft', '7', '9', '[]', '[null]', 'Malir 15 Flyover, Ghazi Dawood Brohi Goth, Karachi, Pakistan', 'MainImage1716794373.png', 'SubImage11712827160.png', 'D:\\xammp\\tmp\\phpB261.tmp', 'D:\\xammp\\tmp\\phpB272.tmp', 'D:\\xammp\\tmp\\phpB273.tmp', '2024-04-11 04:19:20', '2024-05-27 02:19:33'),
(9, 1, 0, '1', 'test', 'test', '5', 'For Rent', 'For Co-Living', '78 sq ft', '7', '9', '[]', '[\"Malir 15 Flyover, Ghazi Dawood Brohi Goth, Karachi\"]', 'Malir Cantt Check Post No 2, Malir Cantonment, Kar...', 'MainImage1716794289.png', 'SubImage11712827342.png', 'SubImage21712827342.jpg', 'SubImage31712827342.jpg', 'SubImage41712827342.jpg', '2024-04-11 04:22:23', '2024-05-27 02:18:09'),
(10, 1, 0, '7', 'Maju hai guyz', 'loremsiajlkdjasl;djoj. ipoisdk;oisd;poi[0psd o[aosd;k;odskpik;ds o[aosd;sakd;oawiwspod o]ow\'pds[pasoidd[pisad', '24566', 'For Rent', 'For Rent', '210 sq ft', '23', '123', '[\"Emergency Exit\",\"CCTV\",\"Free Wi-Fi\",\"Free Parking In The Area\",\"Air Conditioning\",\"Security Guard\"]', '[\"Jinnah Hospital Pedestrian Bridge, Block A Faisal Town, Lahore,\",\"Ma\"]', 'Lal Kothi (house), Shahrah-e-Faisal Service Road South, Block-6 Block 6 Pakistan Employees Co-Operative Housing Society, Karachi, Pakistan', 'MainImage1716745224.png', 'SubImage11716739801.png', 'SubImage21716739801.png', 'SubImage31716739801.png', 'SubImage41716739801.png', '2024-05-26 11:10:01', '2024-05-27 02:33:12'),
(11, 1, 0, '1', 'Falaknaz', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2800000', 'For Co-Living', 'For Sale', '210 sq ft', '10', '3', '[\"Emergency Exit\",\"CCTV\",\"Free Wi-Fi\",\"Free Parking In The Area\",\"Air Conditioning\"]', '[\"Shahrah-e-Faisal Road, Faisal Cantonment, Karachi, Pakistan\"]', 'Falaknaz Plaza, Shahrah-e-Faisal Road, Shah Faisal Colony 1 Shah Faisal Colony, Karachi, Pakistan', 'MainImage1716801690.png', 'SubImage11716801690.png', 'SubImage21716801690.png', 'SubImage31716801690.png', 'SubImage41716801690.png', '2024-05-27 04:21:30', '2024-05-27 04:21:30'),
(12, 1, 0, '1', 'Green City', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1200', 'For Sale', '2', '210 sq ft', '2', '1', '[\"Emergency Exit\",\"CCTV\",\"Free Wi-Fi\",\"Free Parking In The Area\"]', '[\"Jinnah International Terminal Road, Faisal Cantonment, Karachi, Pakistan\"]', 'Malir 15 Flyover, Ghazi Dawood Brohi Goth, Karachi, Pakistan', 'MainImage1716802166.png', 'SubImage11716802166.png', 'SubImage21716802166.png', 'SubImage31716802166.png', 'SubImage41716802167.png', '2024-05-27 04:29:27', '2024-05-27 04:29:27'),
(13, 2, 0, '2', 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '45678', 'For Rent', '3', '78 sq ft', '16', '34', '[\"Emergency Exit\",\"CCTV\",\"Free Wi-Fi\"]', '[\"Airport Parking, Faisal Cantonment, Karachi, Pakistan\",\"Shahrah-e-Faisal Road, Faisal Cantonment, Karachi, Pakistan\"]', 'Malir 15 Flyover, Ghazi Dawood Brohi Goth, Karachi, Pakistan', 'MainImage1716802610.jpg', 'SubImage11716802610.jpg', 'SubImage21716802610.png', 'SubImage31716802610.png', 'SubImage41716802611.png', '2024-05-27 04:36:51', '2024-05-27 04:36:51'),
(14, 1, 0, '1', 'today', ';lore,m', '12345', 'For Sale', '2', '234', '234', '9', '[\"Air Conditioning\",\"Bedding\",\"Balcony\",\"Cable TV\",\"Parking\",\"Lift\",\"Pool\",\"Washing Machine\"]', '[\"Liaquat National Hospital, Karachi, Pakistan\",\"National Stadium Road, Karsaz Faisal Cantonment, Karachi, Pakistan\"]', 'Aga Khan University Hospital, Karachi, Pakistan', 'MainImage1717330029.png', 'SubImage11717330029.png', 'SubImage21717330029.png', 'SubImage31717330029.png', 'SubImage41717330029.png', '2024-06-02 07:07:09', '2024-06-02 07:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2PXqk5UQTrXRlsT3hVz4yqSEtpgcZfirvk4sgkMK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVE5VSW1Oa0FqZEFnV1FFSmd2Z0lKR3dTcTJ3d0dXT1FWTlc4TTg1QyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTg6ImZsYXNoZXI6OmVudmVsb3BlcyI7YTowOnt9fQ==', 1717341216),
('5q4vNsHMHgaXmlQRnzQTBnGlAW6QPot9Kb9WezmX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im5ldyI7YTowOnt9czozOiJvbGQiO2E6MDp7fX1zOjE4OiJmbGFzaGVyOjplbnZlbG9wZXMiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAiO31zOjY6Il90b2tlbiI7czo0MDoiekExZmVKUldNZ3g2VTlpSGNQZlRkNTdNWUJrYzBhbzJMOHJQZWI3MSI7fQ==', 1717345875);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `AgencyID` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Role` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `Status`, `two_factor_confirmed_at`, `AgencyID`, `Role`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Farhan', 'farhan@gmail.com', '2024-05-27 19:00:00', '$2y$12$Sxhb.1wBScO653rZbY/dB.Tnudj4Lpksm83nbPY2zdF/oAmIoQivW', NULL, '0', NULL, '6', '1', NULL, '2024-05-28 05:21:00', '2024-05-28 05:21:00'),
(7, 'M. Farhan Atif', 'admin@gmail.com', '2024-05-28 08:06:00', '$2y$12$WCtZe8qD3ms7ImkCytpXTOuIjhfilKW4vY9irQfmxn4WuQfg87b2e', '87c65d2f-5cb1-4ea0-897c-af581b035be0', '0', NULL, NULL, '2', NULL, '2024-05-28 08:05:40', '2024-06-02 07:58:04'),
(8, 'test', 'test@mail.com', '2024-05-28 16:55:46', '$2y$12$ulEpJCUIVFlVqZxHb/mDyefl1CHYIQ7I524wE9cGLDLYwFI0gEw2O', '3e8189be-31cd-4117-b047-bc33b952a520', '0', NULL, NULL, '0', NULL, '2024-05-28 11:54:51', '2024-05-28 11:54:51'),
(9, 'khanrija', 'khanrija2004@gmail.com', NULL, '$2y$12$qKR1vrASqy3JKhIVOSWd/O.M/gpEVzHtCo/8XmmnZbnNudtCR1g0G', '5d442083-02b2-4faa-8315-ba68174ee545', '0', NULL, NULL, '0', NULL, '2024-05-29 00:26:07', '2024-05-29 00:26:07'),
(10, 'rija khan', 'sp23bscs0210@maju.edu.pk', '2024-05-29 00:29:50', '$2y$12$ESixlmYYXK.zPj8CPerjXetDZ5r8iA5OkyOIxEfII.YCPqCoALFme', 'b6157617-e56d-4c32-86d7-badcdebedcc7', '0', NULL, NULL, '0', NULL, '2024-05-29 00:28:00', '2024-05-29 00:29:50'),
(11, 'ROHIT MAHESHWARI', 'SP23BSCS0055@MAJU.EDU.PK', NULL, '$2y$12$lO6/UxDw3YNy09mZyUpclu6j0IBM9ID81c4g43EmyLavFrWYzzEhy', '4635bcc4-1893-4afc-9290-075dc67917df', '0', NULL, NULL, '0', NULL, '2024-05-29 00:43:09', '2024-05-29 00:43:09'),
(12, 'ROHIT MAHESHWARI', 'rohatrathi@gmail.com', NULL, '$2y$12$CNM7pcTke/xYMrzXGj6ZJ.QvbVCOz1OmqhKkPT6Ev8FvGTTfCsoDO', 'd9309636-3c4c-4fb6-a6a2-1117f31cc1c6', '0', NULL, NULL, '0', NULL, '2024-05-29 00:46:20', '2024-05-29 00:46:20'),
(13, 'amman', 'sp23bscs0081@maju.edu.pk', NULL, '$2y$12$IX702VLDKh8f.DzK77OPcuXeXmCnC4NaSerUKz3W575PFI0wyxggy', 'c76e7c01-1b0a-4083-82b0-01c1cdc9e3f2', '0', NULL, NULL, '0', NULL, '2024-05-29 02:14:15', '2024-05-29 02:14:15'),
(14, 'farhan', 'farhanatif9990@gmail.com', '2024-06-02 03:46:58', '1163', '4cca7d88-a7a1-483e-a56d-7490a34bd576', '0', NULL, NULL, '0', NULL, '2024-06-02 03:44:03', '2024-06-02 03:46:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
