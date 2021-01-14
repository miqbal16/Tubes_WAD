-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 02:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_list`
--

CREATE TABLE `car_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_penumpang` int(11) NOT NULL,
  `pintu` int(11) NOT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_polisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_list`
--

INSERT INTO `car_list` (`id`, `name`, `price`, `description`, `isi_penumpang`, `pintu`, `img_path`, `status`, `no_polisi`, `tahun`) VALUES
(1, 'Pajero Dakar', 1000000, 'dwadwadawdwa', 5, 4, NULL, 'Tanpa Driver', 'B1111AD', 2018),
(2, 'Avanza', 1300000, 'dwadawdawdwad', 5, 4, NULL, 'Pakai Driver', 'D4120DD', 2014);

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
(61, '2014_10_12_000000_create_users_table', 1),
(62, '2014_10_12_100000_create_password_resets_table', 1),
(63, '2019_08_19_000000_create_failed_jobs_table', 1),
(64, '2021_01_12_055652_create_car_list_table', 1),
(65, '2021_01_12_111113_create_ulasan_table', 1),
(66, '2021_01_13_190155_create_order_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_car` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai` date NOT NULL,
  `kembali` date NOT NULL,
  `no_hp` bigint(20) UNSIGNED NOT NULL,
  `id_car` int(11) NOT NULL,
  `pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_polisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_car` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` bigint(20) UNSIGNED NOT NULL,
  `tahun_kendaraan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `email`, `name`, `name_car`, `keterangan`, `mulai`, `kembali`, `no_hp`, `id_car`, `pembayaran`, `status_pembayaran`, `no_polisi`, `status_car`, `total`, `tahun_kendaraan`, `created_at`, `updated_at`) VALUES
(1, 'miqbaal1605@gmail.com', 'Muhammad Iqbal', 'Pajero Dakar', 'dawdawdwadwadawdda', '2020-02-12', '2020-02-15', 85316269505, 1, 'BCA (Transfer)', 'Belum Bayar', 'B1111AD', 'Tanpa Driver', 3000000, 2018, NULL, NULL),
(2, 'miqbaal1605@gmail.com', 'Muhammad Iqbal', 'Avanza', 'dwaddawdawdwa', '2020-05-12', '2020-05-17', 81288591789, 2, 'Bayar Tunai', 'Belum Bayar', 'D4120DD', 'Pakai Driver', 6500000, 2014, NULL, NULL),
(3, 'miqbaal1605@gmail.com', 'Muhammad Iqbal', 'Pajero Dakar', 'dawdwadawdwa', '2020-02-14', '2020-02-16', 85316269505, 1, 'Mandiri (Transfer)', 'Belum Bayar', 'B1111AD', 'Tanpa Driver', 2000000, 2018, NULL, NULL),
(4, 'miqbaal1605@gmail.com', 'Muhammad Iqbal', 'Pajero Dakar', 'dawdwadawdwa', '2020-02-14', '2020-02-16', 85316269505, 1, 'Mandiri (Transfer)', 'Belum Bayar', 'B1111AD', 'Tanpa Driver', 2000000, 2018, NULL, NULL),
(5, 'miqbaal1605@gmail.com', 'Muhammad Iqbal', 'Avanza', 'dwadwadwadwadwadawdawd', '2020-06-14', '2020-06-18', 85316269505, 2, 'Bayar Tunai', 'Belum Bayar', 'D4120DD', 'Pakai Driver', 5200000, 2014, NULL, NULL),
(6, 'miqbaal1605@gmail.com', 'Muhammad Iqbal', 'Avanza', 'dwadwadwadwadwadawdawd', '2020-06-14', '2020-06-18', 85316269505, 2, 'Bayar Tunai', 'Belum Bayar', 'D4120DD', 'Pakai Driver', 5200000, 2014, NULL, NULL);

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
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id`, `email`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'miqbaal1605@gmail.com', 'Muhammad Iqbal', 'dwadawd', NULL, NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@example.com', NULL, '$2y$10$oxoni4sWFWU0tsBblIlD9On/rD3wSqvMlIKyuCd6X106DrCHcwj9W', NULL, '2021-01-14 00:35:15', '2021-01-14 00:35:15'),
(2, 'Muhammad Iqbal', 'miqbaal1605@gmail.com', NULL, '$2y$10$YHuVMKhOKCZNqv9oA1XXWOjRlUEx9zkHFyi7xhsL4qiKEaCCreRvu', NULL, '2021-01-14 00:36:27', '2021-01-14 00:36:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_list`
--
ALTER TABLE `car_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `car_list_no_polisi_unique` (`no_polisi`);

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
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
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
-- AUTO_INCREMENT for table `car_list`
--
ALTER TABLE `car_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
