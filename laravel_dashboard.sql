-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 31, 2021 at 02:31 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_dashboard`
--

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `provider_id`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tes', 'tes@gmail.com', NULL, NULL, NULL, '$2y$10$ZSO/qndDcGmmL1zoxZEfDuOExpp6XUx0Xv15PltuigXbboXjJ0jRq', NULL, '2021-03-30 01:59:43', '2021-03-30 01:59:43'),
(2, 'Tes satu', 'tes1@gmail.com', NULL, NULL, NULL, '$2y$10$SEURjGOIymrfVaNGSNyIV.hkAOQPsbsvaNU0iWmUB/Q/uwP9UpYRu', NULL, '2021-03-30 20:24:13', '2021-03-30 20:24:13'),
(4, 'tes 2', 'tes2@gmail.com', NULL, NULL, NULL, '$2y$10$.9YDqsfMRzxllvaWa4YoSusvjMikXDt.0q6WyxVtXuxqv0z5A61LO', NULL, '2021-03-30 21:51:38', '2021-03-30 21:51:38'),
(5, 'tess', 'tes3@gmail.com', NULL, NULL, NULL, '$2y$10$ViAuRxvLlscy.Cf1aqdOdO.ca.TAw.AaAi2xO8WIMHg1H.joewdmm', NULL, '2021-03-30 21:52:09', '2021-03-30 21:52:09'),
(6, 'tess', 'tes4@gmail.com', NULL, NULL, NULL, '$2y$10$NL4pTbg97cyTP3drQRUYSu/7rgcK/1BAEUrrxU03z7AWSr.QOTLWa', NULL, '2021-03-30 21:52:30', '2021-03-30 21:52:30'),
(7, 'tes', 'tes5@gmail.com', NULL, NULL, NULL, '$2y$10$tB8qRJRlLGXRCv8p4RljIegSe35aM6J9gEYX7fJlHb51yiAcAqNjK', NULL, '2021-03-30 21:52:50', '2021-03-30 21:52:50'),
(8, 'tess', 'tes6@gmail.com', NULL, NULL, NULL, '$2y$10$AZC/uD6L6atbImJDdAOo0eqFvQkWTDNMRbBaBfgLWQPQPtMWd1wsa', NULL, '2021-03-30 21:53:30', '2021-03-30 21:53:30'),
(9, 'tess', 'tes7@gmail.com', NULL, NULL, NULL, '$2y$10$NDLtM05ALDEAyA81bFfR/OWTZrmOQKy7DQiLf7ZbhpOTdpdwoRaEW', NULL, '2021-03-30 21:53:48', '2021-03-30 21:53:48'),
(10, 'tess', 'tes8@gmail.com', NULL, NULL, NULL, '$2y$10$cY17kQba6bcD9BHxwdvz2e7IdO2xKVSV8Ao4ycQFAwp5CqK/QSpEa', NULL, '2021-03-30 21:54:07', '2021-03-30 21:54:07'),
(11, 'tess', 'tes9@gmail.com', NULL, NULL, NULL, '$2y$10$qB4b5lKwd5e1zW56ZNw4zOWeCI3CpsZfzLjki8b1yAYnyP3nNLOua', NULL, '2021-03-30 21:54:26', '2021-03-30 21:54:26'),
(12, 'tess', 'tes10@gmail.com', NULL, NULL, NULL, '$2y$10$xeS8mD6ZIyxu8CPKHlyFn.8pvtWPruvqreeqvTySVnodCetgkSwWa', NULL, '2021-03-30 21:55:30', '2021-03-30 21:55:30');

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
