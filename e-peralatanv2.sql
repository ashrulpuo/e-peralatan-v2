-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 09:51 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-peralatanv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indices`
--

CREATE TABLE `indices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_10_131012_create_indices_table', 1),
(5, '2020_04_10_145706_create_peralatan_table', 1),
(6, '2020_04_10_145833_create_pemohonan_table', 1),
(7, '2020_04_11_170912_permohonan_peralatan_table', 1);

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
-- Table structure for table `pemohonan`
--

CREATE TABLE `pemohonan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahagian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_digunakan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_permohonan` int(11) NOT NULL,
  `nama_pengeluar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_permohonan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemulang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawatan_pemulang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penerima` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawatan_penerima` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peralatan`
--

CREATE TABLE `peralatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `peralatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_asset` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_peralatan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peralatan`
--

INSERT INTO `peralatan` (`id`, `peralatan`, `model`, `no_asset`, `status_peralatan`, `created_at`, `updated_at`) VALUES
(1, 'Screen Projector', 'panasonic', 'JPS/BPA 64/I/09/637', 0, NULL, '2020-06-26 03:06:35'),
(2, 'Screen Projector', 'panasonic', 'JPS/ICT/002003022/R/15/8', 0, NULL, '2020-06-26 03:06:35'),
(3, 'LCD Projector', 'Hitachi CP-X264', 'JPS/ICT/H/LCD/2010/42', 0, NULL, NULL),
(4, 'LCD Projector', 'Hitachi CP-X264', 'JPS/ICT/H/LCD/2010/43', 0, NULL, NULL),
(5, 'Laptop', 'HP PRO BOOK 43415', 'JPS/ICT/H/LAPTOP/2012/61', 1, NULL, '2020-06-24 03:17:25'),
(6, 'Laptop', 'HP PRO BOOK 43415', 'JPS/ICT/H/LAPTOP/2012/62', 0, NULL, '2020-06-24 07:19:10'),
(7, 'Laptop', 'HP PRO BOOK 43415', 'JPS/ICT/H/LAPTOP/2012/63', 0, NULL, '2020-06-26 03:14:04'),
(8, 'Laptop', 'HP PRO BOOK 43415', 'JPS/ICT/H/LAPTOP/2012/64', 1, NULL, '2020-06-24 16:16:15'),
(9, 'Laptop', 'HP PRO BOOK 43415', 'JPS/ICT/H/LAPTOP/2012/65', 0, NULL, NULL),
(10, 'Laptop', 'HP PRO BOOK 43415', 'JPS/ICT/H/LAPTOP/2012/66', 0, NULL, '2020-06-26 03:14:04'),
(11, 'Laptop', 'HP PRO BOOK 43415', 'JPS/ICT/H/LAPTOP/2012/67', 0, NULL, NULL),
(12, 'Laptop', 'HP PRO BOOK 43415', 'JPS/ICT/H/LAPTOP/2012/68', 0, NULL, NULL),
(13, 'Laptop', 'HP PRO BOOK 440 G2v', 'JPS/ICT/001002002/H/15/34', 0, NULL, '2020-06-24 07:22:51'),
(14, 'Laptop', 'HP PRO BOOK 440 G2v', 'JPS/ICT/001002002/H/15/35', 0, NULL, NULL),
(15, 'Laptop', 'HP PRO BOOK 440 G2v', 'JPS/ICT/001002002/H/15/36', 0, NULL, '2020-06-23 03:46:45'),
(16, 'Laptop', 'HP PRO BOOK 440 G2v', 'JPS/ICT/001002002/H/15/41', 1, NULL, '2020-06-24 16:16:15'),
(17, 'LCD Projector', 'Mini Projector Acer C205', 'JPS/ICT/002003045/R/15/1', 0, NULL, '2020-06-23 04:23:44'),
(18, 'Camera', 'Nikon D90', 'JPS/ICT/H/CAMERA/2011/K/32', 0, NULL, '2020-06-26 03:06:35'),
(19, 'Camera', 'Nikon D90', 'JPS/ICT/002006001/H/15/42', 1, NULL, '2020-06-24 16:16:15'),
(20, 'Camera', 'Nikon D90', 'JPS/ICT/002006001/H/15/43', 0, NULL, '2020-06-23 03:46:45'),
(21, 'LCD Projector', 'Panasonic PT LB51', 'JPS/PK24/1/08/2', 0, NULL, '2020-06-23 04:28:04'),
(22, 'Camera', 'Samsung Galaxy Camera 2', 'JPS/ICT/002006002/R/15/2', 0, NULL, NULL),
(23, 'Video Camera', 'Sony NEX-VG20 Pro Video Pack', 'JPS/ICT/H/VIDEOCAM/2012/69', 0, NULL, '2020-06-23 03:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam_peralatan`
--

CREATE TABLE `pinjam_peralatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_permohonan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarikh_pinjam` date NOT NULL,
  `tarikh_pulang` date NOT NULL,
  `id_peralatan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pinjam_peralatan`
--

INSERT INTO `pinjam_peralatan` (`id`, `id_permohonan`, `tarikh_pinjam`, `tarikh_pulang`, `id_peralatan`, `created_at`, `updated_at`) VALUES
(1, 'P3584', '2020-06-23', '2020-06-23', 20, '2020-06-23 02:57:26', '2020-06-23 02:58:31'),
(2, 'P3584', '2020-06-23', '2020-06-23', 15, '2020-06-23 02:57:26', '2020-06-23 02:58:31'),
(3, 'P3584', '2020-06-23', '2020-06-23', 23, '2020-06-23 02:57:26', '2020-06-23 02:58:31'),
(4, 'P9305', '2020-06-22', '2020-06-23', 2, '2020-06-23 04:21:48', '2020-06-23 04:21:48'),
(5, 'P9305', '2020-06-22', '2020-06-23', 18, '2020-06-23 04:21:48', '2020-06-23 04:21:48'),
(6, 'P9305', '2020-06-22', '2020-06-23', 17, '2020-06-23 04:21:48', '2020-06-23 04:21:48'),
(7, 'P2011', '2020-06-22', '2020-06-23', 5, '2020-06-23 04:26:59', '2020-06-23 04:28:04'),
(8, 'P2011', '2020-06-22', '2020-06-23', 13, '2020-06-23 04:27:00', '2020-06-23 04:28:04'),
(9, 'P2011', '2020-06-22', '2020-06-23', 1, '2020-06-23 04:27:00', '2020-06-23 04:28:04'),
(10, 'P7810', '2020-06-24', '2020-06-24', 5, '2020-06-24 03:17:24', '2020-06-24 03:17:24'),
(11, 'P6273', '2020-06-24', '2020-06-29', 13, '2020-06-24 07:17:37', '2020-06-24 07:19:10'),
(12, 'P2253', '2020-06-24', '2020-06-24', 8, '2020-06-24 16:16:15', '2020-06-24 16:16:15'),
(13, 'P2253', '2020-06-24', '2020-06-24', 19, '2020-06-24 16:16:15', '2020-06-24 16:16:15'),
(14, 'P2253', '2020-06-24', '2020-06-24', 16, '2020-06-24 16:16:15', '2020-06-24 16:16:15'),
(15, 'P2445', '2020-06-26', '2020-06-26', 7, '2020-06-26 03:04:32', '2020-06-26 03:06:34'),
(16, 'P2445', '2020-06-26', '2020-06-26', 7, '2020-06-26 03:04:32', '2020-06-26 03:06:35'),
(17, 'P2445', '2020-06-26', '2020-06-26', 10, '2020-06-26 03:04:32', '2020-06-26 03:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `jawatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahagian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `jawatan`, `bahagian`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, 'admin', 'BICT', '$2y$10$IiJ09WjrEoGC4dIxJBFRVeUA6QL/rJqA/xKxxC6qMyUv6GQOY3n1C', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indices`
--
ALTER TABLE `indices`
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
-- Indexes for table `pemohonan`
--
ALTER TABLE `pemohonan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peralatan`
--
ALTER TABLE `peralatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjam_peralatan`
--
ALTER TABLE `pinjam_peralatan`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indices`
--
ALTER TABLE `indices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pemohonan`
--
ALTER TABLE `pemohonan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `peralatan`
--
ALTER TABLE `peralatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pinjam_peralatan`
--
ALTER TABLE `pinjam_peralatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
