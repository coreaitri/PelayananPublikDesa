-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2020 at 08:34 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelayanandesa`
--

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
(3, '2020_01_07_122504_create_user_kades_table', 1),
(4, '2020_01_07_122548_create_user_rt_table', 1),
(5, '2020_01_07_125709_create_r_t_s_table', 1),
(6, '2020_01_08_040314_create_wargas_table', 1),
(7, '2020_01_08_101643_create_surats_table', 1);

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
-- Table structure for table `r_t_s`
--

CREATE TABLE `r_t_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userRT_id` bigint(20) UNSIGNED NOT NULL,
  `nama_rt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `r_t_s`
--

INSERT INTO `r_t_s` (`id`, `userRT_id`, `nama_rt`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_hp`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 'RT1', 'Slamet Hariady', 'Sukamaju', '1980-01-11', 'Sukamaju', '081234567895', 'rt1@gmail.com', 'rt1rt1rt1', '2020-01-10 08:37:00', '2020-01-10 08:37:00'),
(2, 2, 'RT2', 'Toni', 'Sukadame', '1988-06-06', 'Sukadame', '085214796324', 'rt2@gmail.com', 'rt2rt2rt2', '2020-01-10 08:39:03', '2020-01-10 08:39:03'),
(3, 3, 'RT3', 'Martono', 'Sukarindu', '1983-09-19', 'Sukarindu', '082168547932', 'rt3@gmail.com', 'rt3rt3rt3', '2020-01-10 08:40:37', '2020-01-10 08:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `surats`
--

CREATE TABLE `surats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rt_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tipe_surat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surats`
--

INSERT INTO `surats` (`id`, `rt_id`, `user_id`, `tipe_surat`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Surat Domisili', 3, '2020-01-10 09:17:25', '2020-01-10 23:41:05'),
(2, 1, 1, 'Surat Prasejahtera', 3, '2020-01-10 09:17:31', '2020-01-10 23:59:23'),
(3, 1, 3, 'Surat Domisili', 1, '2020-01-10 09:18:22', '2020-01-10 09:23:56'),
(4, 2, 5, 'Surat Domisili', 1, '2020-01-10 09:18:59', '2020-01-11 00:28:25'),
(5, 2, 5, 'Surat Prasejahtera', 3, '2020-01-10 09:19:39', '2020-01-10 23:36:54'),
(6, 2, 4, 'Surat Domisili', NULL, '2020-01-10 09:21:01', '2020-01-10 09:21:01'),
(7, 2, 4, 'Surat Domisili', 2, '2020-01-10 09:21:02', '2020-01-10 09:22:55'),
(8, 2, 4, 'Surat Prasejahtera', 1, '2020-01-10 09:21:11', '2020-01-10 09:22:49'),
(9, 2, 4, 'Surat Domisili', 3, '2020-01-10 09:21:15', '2020-01-10 23:35:38'),
(10, 2, 5, 'Surat Domisili', NULL, '2020-01-11 00:22:20', '2020-01-11 00:22:20'),
(11, 2, 5, 'Surat Prasejahtera', 2, '2020-01-11 00:22:46', '2020-01-11 00:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rt_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `rt_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nurlena', '1208137009900001', NULL, '$2y$10$lFhXhPIGPXN9ttF09UZTZOUjAfcz9flbK5bfIaSonU2a2AZPo0vFa', NULL, '2020-01-10 08:51:02', '2020-01-10 08:51:02'),
(2, 1, 'Ranto', '1208133009870001', NULL, '$2y$10$OU8OZgkiFRGoLMw1pv6Db.qbj7IKUA0QVIZLX4dvv/SF.0yxAiceS', NULL, '2020-01-10 08:53:06', '2020-01-10 08:53:06'),
(3, 1, 'Lenda', '1208137009940002', NULL, '$2y$10$5Z90eS.Sxa5TYfMmLT9ez.1RAcCPOredVMeyq.N4NAYJYrltcKF86', NULL, '2020-01-10 08:55:01', '2020-01-10 08:56:00'),
(4, 2, 'Siti', '1208131201010007', NULL, '$2y$10$u0/2iMWEYjgG/HBCK1MB3uwMlWsd8GH2AHR6F4cyI9vNUDZav9/HO', NULL, '2020-01-10 08:59:47', '2020-01-10 08:59:47'),
(5, 2, 'Udin', '1208132204950001', NULL, '$2y$10$APDKmF0JdcKVqbRFyOQ1Gu1iEFFO2byzK/UxBthFCCkNuMFxgqDsm', NULL, '2020-01-10 09:01:30', '2020-01-10 09:01:30'),
(6, 2, 'Quebec', '1208130101120001', NULL, '$2y$10$dqH4Er0xvnAHMi52cMZ4vuIkSAzBZ/AhFNgk4FBHG3fSOcqbXVWm.', NULL, '2020-01-10 09:03:09', '2020-01-10 09:03:09'),
(7, 3, 'resti', '1208134202950004', NULL, '$2y$10$fGmWkptZfH9Y0TJGkz.dMO/tmZRv1oX0XJCfNM53gpeK6XwmJPa.6', NULL, '2020-01-10 09:06:22', '2020-01-10 09:06:22'),
(8, 3, 'Udin', '1208130207150001', NULL, '$2y$10$ZjySRpEV6K3A1noe2DkqPOMjSWuU9cec.IPutvObL/ZCfI5qnXaae', NULL, '2020-01-10 09:07:57', '2020-01-10 09:07:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_kades`
--

CREATE TABLE `user_kades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_kades`
--

INSERT INTO `user_kades` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kades', 'kades@kades.com', NULL, '$2y$10$/M9Qd2BQFJmDViLsWCZnDude6aMAdE435uHEwejhggqHbww0aGe.O', NULL, '2020-01-10 08:32:03', '2020-01-10 08:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_rt`
--

CREATE TABLE `user_rt` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_rt`
--

INSERT INTO `user_rt` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'RT1', 'rt1@gmail.com', NULL, '$2y$10$neKvjSC9njuf4mhD7nZrk.cXtmMe5lDJTzvcXnxJr9TZMfWoKTxiG', NULL, '2020-01-10 08:36:59', '2020-01-10 08:36:59'),
(2, 'RT2', 'rt2@gmail.com', NULL, '$2y$10$S/3w52oJzKzkhBvtu/0khu/S/rvF/CQzD69iyjgt.uDGaYbE4a8hG', NULL, '2020-01-10 08:39:03', '2020-01-10 08:39:03'),
(3, 'RT3', 'rt3@gmail.com', NULL, '$2y$10$8SavXtAit8u4a6YuPjzbgezRsi4khGJ3oCkiKXDAQWGm8d9GWXFGa', NULL, '2020-01-10 08:40:37', '2020-01-10 08:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `wargas`
--

CREATE TABLE `wargas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rt_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `no_kk` bigint(20) NOT NULL,
  `nama_lengkap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` bigint(20) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` enum('Islam','Kristen Protestan','Katolik','Budha','Hindu','Konghucu') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_terakhir` enum('Tidak/Belum Sekolah','Belum Tamat SD/Sederajat','Tamat SD/Sederajat','SLTP/Sederajat','SLTA/Sederajat','Diploma I/II','Akademi/Diploma III/S.Muda','Diploma IV/ Strata I','Strata II','Strata III') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perkawinan` enum('Belum Kawin','Kawin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wargas`
--

INSERT INTO `wargas` (`id`, `rt_id`, `user_id`, `no_kk`, `nama_lengkap`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan_terakhir`, `jenis_pekerjaan`, `status_perkawinan`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1208137045217124, 'Nurlena', 1208137009900001, 'Perempuan', 'Sukamaju', '1990-06-30', 'Kristen Protestan', 'SLTP/Sederajat', 'Bertani', 'Kawin', 'Sukamaju', '2020-01-10 08:51:02', '2020-01-10 08:51:02'),
(2, 1, 2, 1208137045217124, 'Ranto', 1208133009870001, 'Laki-laki', 'Sukamaju', '1987-09-30', 'Kristen Protestan', 'SLTA/Sederajat', 'Berkebun', 'Kawin', 'Sukamaju', '2020-01-10 08:53:06', '2020-01-10 08:53:06'),
(3, 1, 3, 1208137045210035, 'Lenda', 1208137009940002, 'Perempuan', 'Medan', '1999-12-12', 'Kristen Protestan', 'Diploma I/II', 'Pegawai', 'Kawin', 'Sukamaju', '2020-01-10 08:55:01', '2020-01-10 08:56:00'),
(4, 2, 4, 1208137897894561, 'Siti', 1208131201010007, 'Perempuan', 'Sukadame', '2001-12-01', 'Islam', 'SLTA/Sederajat', 'Mahasiswa', 'Belum Kawin', 'Sukadame', '2020-01-10 08:59:47', '2020-01-10 08:59:47'),
(5, 2, 5, 1208137045217124, 'Udin', 1208132204950001, 'Laki-laki', 'Sukadame', '1995-04-22', 'Islam', 'Tamat SD/Sederajat', 'Bertani', 'Kawin', 'Sukadame', '2020-01-10 09:01:30', '2020-01-10 09:01:30'),
(6, 2, 6, 1208137045210035, 'Quebec', 1208130101120001, 'Perempuan', 'Sukamaju', '2012-01-01', 'Islam', 'SLTP/Sederajat', 'Pelajar', 'Belum Kawin', 'Sukamaju', '2020-01-10 09:03:09', '2020-01-10 09:03:09'),
(7, 3, 7, 1208137897890151, 'resti', 1208134202950004, 'Perempuan', 'Sukarindu', '1995-02-22', 'Katolik', 'Diploma IV/ Strata I', 'Pegawai', 'Belum Kawin', 'Sukarindu', '2020-01-10 09:06:22', '2020-01-10 09:06:22'),
(8, 3, 8, 1208137045210035, 'Udin', 1208130207150001, 'Laki-laki', 'Sukarindu', '2015-07-02', 'Budha', 'Belum Tamat SD/Sederajat', 'Pelajar', 'Belum Kawin', 'Sukarindu', '2020-01-10 09:07:57', '2020-01-10 09:07:57');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `r_t_s`
--
ALTER TABLE `r_t_s`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `r_t_s_nama_rt_unique` (`nama_rt`),
  ADD UNIQUE KEY `r_t_s_email_unique` (`email`);

--
-- Indexes for table `surats`
--
ALTER TABLE `surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_kades`
--
ALTER TABLE `user_kades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_kades_email_unique` (`email`);

--
-- Indexes for table `user_rt`
--
ALTER TABLE `user_rt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_rt_email_unique` (`email`);

--
-- Indexes for table `wargas`
--
ALTER TABLE `wargas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `r_t_s`
--
ALTER TABLE `r_t_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surats`
--
ALTER TABLE `surats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_kades`
--
ALTER TABLE `user_kades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_rt`
--
ALTER TABLE `user_rt`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wargas`
--
ALTER TABLE `wargas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
