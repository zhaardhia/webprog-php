-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 04:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprog-lec`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `country`) VALUES
(1, 'Brennahaven', 'Isle of Man'),
(2, 'Port Raphaellebury', 'Slovenia'),
(3, 'Jacobsonfurt', 'Kyrgyz Republic'),
(4, 'North Eli', 'Somalia');

-- --------------------------------------------------------

--
-- Table structure for table `citydetail`
--

CREATE TABLE `citydetail` (
  `city_id` int(20) NOT NULL,
  `costofliving` float NOT NULL,
  `salary` float NOT NULL,
  `tax` float NOT NULL,
  `seasons` varchar(255) NOT NULL,
  `temperature` float NOT NULL,
  `humidity` float NOT NULL,
  `aqi` float NOT NULL,
  `crimerate` float NOT NULL,
  `racism` enum('verylow','low','medium','high','veryhigh') NOT NULL,
  `traffic` enum('verylow','low','medium','high','veryhigh') NOT NULL,
  `hospital` enum('verybad','bad','okay','good','verygood') NOT NULL,
  `education` enum('verybad','bad','okay','good','verygood') NOT NULL,
  `internet` float NOT NULL,
  `recreational` enum('notmuch','several','many') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citydetail`
--

INSERT INTO `citydetail` (`city_id`, `costofliving`, `salary`, `tax`, `seasons`, `temperature`, `humidity`, `aqi`, `crimerate`, `racism`, `traffic`, `hospital`, `education`, `internet`, `recreational`) VALUES
(1, 20678, 24410, 49, 'Summer', 22, 4, 2, 51, 'verylow', 'verylow', 'verybad', 'verybad', 90, 'notmuch'),
(2, 14949, 16743, 96, 'Summer', 30, 15, 4, 78, 'verylow', 'verylow', 'verybad', 'verybad', 43, 'notmuch'),
(3, 27148, 21934, 43, 'Summer', 27, 9, 3, 39, 'verylow', 'verylow', 'verybad', 'verybad', 83, 'notmuch'),
(4, 24265, 25917, 80, 'Summer', 30, 19, 1, 97, 'verylow', 'verylow', 'verybad', 'verybad', 87, 'notmuch');

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `city_id` int(20) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`city_id`, `img1`, `img2`, `img3`) VALUES
(1, 'https://picsum.photos/1000', 'https://picsum.photos/1000', 'https://picsum.photos/1000'),
(2, 'https://picsum.photos/1000', 'https://picsum.photos/1000', 'https://picsum.photos/1000'),
(3, 'https://picsum.photos/1000', 'https://picsum.photos/1000', 'https://picsum.photos/1000'),
(4, 'https://picsum.photos/1000', 'https://picsum.photos/1000', 'https://picsum.photos/1000');

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
(5, '2021_12_14_092110_create_city_table', 0),
(6, '2021_12_14_092110_create_failed_jobs_table', 0),
(7, '2021_12_14_092110_create_password_resets_table', 0),
(8, '2021_12_14_092110_create_paymentmethod_table', 0),
(9, '2021_12_14_092110_create_personal_access_tokens_table', 0),
(10, '2021_12_14_092110_create_transaction_table', 0),
(11, '2021_12_14_092110_create_users_table', 0),
(12, '2021_12_14_092111_add_foreign_keys_to_transaction_table', 0),
(13, '2021_12_14_094924_create_city_table', 0),
(14, '2021_12_14_094924_create_citydetail_table', 0),
(15, '2021_12_14_094924_create_failed_jobs_table', 0),
(16, '2021_12_14_094924_create_password_resets_table', 0),
(17, '2021_12_14_094924_create_paymentmethod_table', 0),
(18, '2021_12_14_094924_create_personal_access_tokens_table', 0),
(19, '2021_12_14_094924_create_transaction_table', 0),
(20, '2021_12_14_094924_create_users_table', 0),
(21, '2021_12_14_094927_add_foreign_keys_to_citydetail_table', 0),
(22, '2021_12_14_094927_add_foreign_keys_to_transaction_table', 0);

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
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentmethod`
--

INSERT INTO `paymentmethod` (`id`, `name`) VALUES
(1, 'Debit'),
(2, 'Credit Card'),
(3, 'GoPay');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `paymentmethod_id` int(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` int(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ispremium` tinyint(1) NOT NULL DEFAULT 0,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `city_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `ispremium`, `picture`) VALUES
(1, 4, 'daffa', 'daffamadeo@gmail.com', NULL, '$2y$10$MQ8ydodm4BPshrn.M1gcXOq6E1pLLgNMHZ9XCg7VmhIQaTEBloP6S', NULL, '2021-12-14 01:09:30', '2021-12-15 08:26:05', 0, 'https://picsum.photos/1000'),
(2, NULL, 'john', 'aaa@relocate.com', NULL, '$2y$10$MzjcqNS6n1A.2Pzb8mmH.eZFPyxU.z6yYYUwtz1ZMzjIJsmx0YNYG', NULL, '2021-12-15 07:57:11', '2021-12-15 07:57:11', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citydetail`
--
ALTER TABLE `citydetail`
  ADD KEY `cityid` (`city_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD KEY `city_id` (`city_id`);

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
-- Indexes for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`user_id`),
  ADD KEY `paymentmethodid` (`paymentmethod_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `cityid` (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `citydetail`
--
ALTER TABLE `citydetail`
  ADD CONSTRAINT `fk_city` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_img_city` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_paymentmethod` FOREIGN KEY (`paymentmethod_id`) REFERENCES `transaction` (`id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_status_city` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
