-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 04:32 AM
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
(17, 'Honda CRV 2017', 650000, 'Mobil yang memiliki ruang yang cukup luas sehingga mobil dapat mengangkut 5 orang serta mobil juga tersedia bagasi yang sangat luas sehingga anda bisa membawa barang yang begitu banyak', 5, 4, '1610678577.jpg', 'Tanpa Driver', 'B4412FF', 2017),
(18, 'Nissan Grand Livina 2018', 500000, 'Mobil yang memiliki ruang yang cukup luas sehingga mobil dapat mengangkut 4 orang serta mobil juga tersedia bagasi yang sangat luas sehingga anda bisa membawa barang yang begitu banyak', 4, 4, '1610678737.jpg', 'Tanpa Driver', 'D1298CC', 2018),
(19, 'Honda Civic 2016', 500000, 'Mobil yang memiliki ruang yang cukup luas sehingga mobil dapat mengangkut 4 orang serta mobil juga tersedia bagasi yang cukup luas', 4, 4, '1610678872.jpg', 'Tanpa Driver', 'D1327DC', 2016),
(20, 'Toyota Camry 2017', 700000, 'Mobil sedan yang memiliki ruang yang cukup luas sehingga mobil dapat mengangkut 5 orang serta mobil juga tersedia bagasi yang sangat luas', 5, 4, '1610678974.png', 'Tanpa Driver', 'B5120AA', 2017),
(21, 'Toyota Fortuner 2018', 650000, 'Mobil SUV yang memiliki ruang yang sangat luas sehingga mobil dapat mengangkut 6 orang serta mobil juga tersedia bagasi yang sangat luas', 6, 4, '1610679299.jpg', 'Tanpa Driver', 'D7856TT', 2018),
(22, 'Toyota Alphard Silver 2019', 1500000, 'Mobil Minibus tampilan luxury yang memiliki ruang yang sangat luas sehingga mobil dapat mengangkut 6 orang serta mobil juga tersedia bagasi yang sangat luas', 6, 4, '1610679608.jpg', 'Pakai Driver', 'B7770AC', 2016),
(23, 'Mitsubishi Xpander 2018', 1300000, 'Mobil SUV tampilan luxury yang memiliki ruang yang sangat luas sehingga mobil dapat mengangkut 6 orang serta mobil juga tersedia bagasi yang sangat luas', 6, 4, '1610679760.jpg', 'Pakai Driver', 'D4100RT', 2018),
(24, 'Daihatsu Ayla 2017', 1000000, 'Mobil Mini sedan yang memiliki ruang yang cukup luas sehingga mobil dapat mengangkut 4 orang serta mobil juga tersedia bagasi yang cukup luas', 4, 4, '1610680087.png', 'Pakai Driver', 'B8912AA', 2017),
(25, 'Mitsubishi Pajero Sport 2019', 1250000, 'Mobil SUV tampilan sport yang memiliki ruang yang sangat luas sehingga mobil dapat mengangkut 6 orang serta mobil juga tersedia bagasi yang sangat luas', 6, 4, '1610680244.jpg', 'Pakai Driver', 'B1190YT', 2019),
(26, 'Honda HRV 2018', 1100000, 'Mobil SUV tampilan luxury yang memiliki ruang yang sangat luas sehingga mobil dapat mengangkut 5 orang serta mobil juga tersedia bagasi yang sangat luas', 5, 4, '1610680369.jpg', 'Tanpa Driver', 'D3109AG', 2018);

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
(73, '2014_10_12_000000_create_users_table', 1),
(74, '2014_10_12_100000_create_password_resets_table', 1),
(75, '2019_08_19_000000_create_failed_jobs_table', 1),
(76, '2021_01_12_055652_create_car_list_table', 1),
(77, '2021_01_12_111113_create_ulasan_table', 1),
(78, '2021_01_13_190155_create_order_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_car` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `order` (`id`, `email`, `name`, `name_car`, `alamat`, `mulai`, `kembali`, `no_hp`, `id_car`, `pembayaran`, `status_pembayaran`, `no_polisi`, `status_car`, `total`, `tahun_kendaraan`, `created_at`, `updated_at`) VALUES
(8, 'iqbal@gmail.com', 'Muhammad Iqbal', 'Mitsubishi Pajero Sport 2019', 'Jl. Telekomunikasi No. 134 Bojongsoang', '2021-01-16', '2021-01-17', 85316269505, 25, 'Mandiri (Transfer)', 'Belum Bayar', 'B1190YT', 'Pakai Driver', 1250000, 2019, NULL, NULL),
(9, 'joe@gmail.com', 'Joe', 'Honda Civic 2016', 'Jl. Ciganitri No. 87 Bojosoang', '2021-01-20', '2021-01-22', 81288591789, 19, 'Bayar Tunai', 'Belum Bayar', 'D1327DC', 'Tanpa Driver', 1000000, 2016, NULL, NULL),
(10, 'bob1@gmail.com', 'Bob', 'Toyota Alphard Silver 2019', 'Jl. Soekarno Hatta No. 34 Kota Bandung', '2021-01-16', '2021-01-17', 8977654321, 22, 'BRI (Transfer)', 'Belum Bayar', 'B7770AC', 'Pakai Driver', 1500000, 2016, NULL, NULL);

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
(7, 'bob1@gmail.com', 'Bob', 'Rental Mobil Harga Murah hanya ada di Rentalin Aja!, Mobil berkualitas dan terawat', NULL, NULL),
(8, 'iqbal@gmail.com', 'Muhammad Iqbal', 'Mobil nyaman, bersih serta terawat yang lebih menariknya lagi harga terjangkau', NULL, NULL),
(9, 'joe@gmail.com', 'Joe', 'Suka dengan kantornya yang bersih dan  sejuk juga driver juga ramah dan baik', NULL, NULL);

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
(1, 'Muhammad Iqbal', 'miqbaal1605@gmail.com', NULL, '$2y$10$fg7Isd8YpASWb/xxWllmjefzIo4uiB9Q215ArjkKZF1n1qkigVK/e', NULL, '2021-01-14 07:55:36', '2021-01-14 07:55:36'),
(2, 'admin', 'admin@example.com', NULL, '$2y$10$v2oGf90KRKFifn5ubsLBlOjJC48aVCanwyqubU2BygnIcBW72MBZW', NULL, '2021-01-14 08:02:11', '2021-01-14 08:02:11'),
(3, 'Bob', 'bob@gmail.com', NULL, '$2y$10$HBRgT91g/LbC.LioLikN2usyEb4C16JdNaVFlXL1IYNMofreDca3W', NULL, '2021-01-14 16:27:03', '2021-01-14 16:27:03'),
(4, 'Muhammad Iqbal', 'iqbal@gmail.com', NULL, '$2y$10$VUls9hGbaPJTFnsXHOP3XOgSxZ5/95o8xEVK2w4T.lJVPcqOhtH/y', NULL, '2021-01-14 18:07:43', '2021-01-14 18:07:43'),
(5, 'Bob', 'bob1@gmail.com', NULL, '$2y$10$IKPMUVCyrXHiEu8c6485sOYWS8.Atg6Rf7Rfe.5bJwZVjzVh7f6v6', NULL, '2021-01-14 20:17:41', '2021-01-14 20:17:41'),
(6, 'Joe', 'joe@gmail.com', NULL, '$2y$10$e/0nfZQjHf91AiCytnai4.0sEBzYW71iuLn3oRLQ/OEzpi8k8TNB6', NULL, '2021-01-14 20:20:34', '2021-01-14 20:20:34');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
