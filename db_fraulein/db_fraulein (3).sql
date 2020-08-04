-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 12:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fraulein`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_brand` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `nama_brand`, `created_at`, `updated_at`) VALUES
(1, 'M by Mischa', '2020-07-08 08:12:43', '2020-07-08 08:12:43'),
(2, 'Seraglio Couture', '2020-07-08 08:12:54', '2020-07-08 08:12:54'),
(3, 'Tadashi Shoji', '2020-07-08 08:21:03', '2020-07-08 08:21:03'),
(4, 'Topshop', '2020-07-08 08:21:11', '2020-07-08 08:21:11'),
(5, 'Gisela Privee', '2020-07-08 08:21:24', '2020-07-08 08:21:24'),
(7, 'Louis Vuitton', '2020-07-08 21:18:50', '2020-07-08 21:18:50'),
(8, 'YCL', '2020-07-08 21:19:02', '2020-07-08 21:19:02'),
(9, 'Calvin Klein', '2020-07-08 21:19:31', '2020-07-08 21:19:31'),
(10, 'Queen of Heart', '2020-07-08 21:19:39', '2020-07-08 21:19:39'),
(11, 'Bebe', '2020-07-08 21:19:46', '2020-07-08 21:19:59'),
(12, 'Bramanta Wijaya', '2020-07-08 21:20:08', '2020-07-08 21:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `macam`
--

CREATE TABLE `macam` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_macam` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `macam`
--

INSERT INTO `macam` (`id`, `nama_macam`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Off Shoulder Dress', 'Gaun dengan model bahu terbuka', '2020-07-08 08:23:25', '2020-07-08 08:23:25'),
(2, 'A Line Dress', 'Bentuk sesuai dengan bentuk huruf A kapital yakni runcing di atas dan lebar di bawah', '2020-07-08 08:23:45', '2020-07-08 08:23:45'),
(3, 'Empire Waist', 'Jenis gaun dengan potongan pinggang yang sangat tinggi', '2020-07-08 08:24:11', '2020-07-08 08:24:11'),
(4, 'Maxi Dress', 'Gaun yang panjangnya menyentuh lantai atau paling tidak menutupi mata kaki', '2020-07-08 08:29:21', '2020-07-08 08:29:21'),
(5, 'Ball Gown', 'Gaun yang memiliki model mengembang dari bagian pinggang', '2020-07-08 09:34:58', '2020-07-08 09:48:28'),
(7, 'Tea Long Dress', 'Gaun yang panjangnya tidak pendek dan melebihi mata kaki', '2020-07-08 21:18:40', '2020-07-08 21:18:40');

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
(25, '2020_07_04_072046_create_table_product', 1),
(26, '2020_07_05_051435_create_table_produk', 2),
(71, '2020_07_05_062930_create-table_type', 3),
(112, '2020_07_05_101057_create_table_jenis', 4),
(119, '2014_10_12_000000_create_users_table', 5),
(120, '2014_10_12_100000_create_password_resets_table', 5),
(121, '2020_07_05_054601_create_table_product', 5),
(122, '2020_07_05_071811_create-table_brand', 5),
(123, '2020_07_08_032716_create_table_macam', 5);

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_product` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `id_brand` int(10) UNSIGNED NOT NULL,
  `id_macam` int(10) UNSIGNED NOT NULL,
  `bahan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_product`, `nama_product`, `harga`, `stok`, `id_brand`, `id_macam`, `bahan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'P001', 'arial white dress', '500.000', 2, 1, 2, 'Chiffon, Lace', '20200708153148.jpg', '2020-07-08 08:31:48', '2020-07-08 08:31:48'),
(2, 'P002', 'lace creamy dress', '600.000', 3, 3, 2, 'Satin, Tulle', '20200708153459.jpg', '2020-07-08 08:34:59', '2020-07-08 08:34:59'),
(3, 'P003', 'blue ocean dress', '700.000', 2, 2, 1, 'Satin, Tafetta', '20200708153724.jpg', '2020-07-08 08:37:24', '2020-07-08 08:37:24'),
(4, 'P004', 'empire cream  dress', '1.000.000', 1, 4, 3, 'Chiffon, Lace', '20200708153944.jpg', '2020-07-08 08:39:44', '2020-07-08 08:39:44'),
(5, 'P005', 'privee\'s dress', '500.000', 2, 5, 3, 'Chiffon, Lace', '20200708154226.jpg', '2020-07-08 08:42:26', '2020-07-08 08:42:26'),
(6, 'P006', 'maxi pink dress', '700.000', 1, 1, 4, 'Satin, Tafetta', '20200708154334.jpg', '2020-07-08 08:43:34', '2020-07-08 08:43:34'),
(7, 'P007', 'two frau cream', '800.000', 2, 3, 3, 'Satin, Lace', '20200708154526.jpg', '2020-07-08 08:45:26', '2020-07-08 08:45:26'),
(8, 'P008', 'mischa pinkeu', '600.000', 3, 1, 3, 'Chiffon', '20200708154640.jpg', '2020-07-08 08:46:40', '2020-07-08 08:46:40'),
(9, 'P009', 'dress sera', '700.000', 1, 2, 4, 'Satin, Tafetta', '20200708154753.jpg', '2020-07-08 08:47:53', '2020-07-08 08:47:53'),
(10, 'P010', 'beauty blue', '600.000', 2, 3, 1, 'Satin, Tulle', '20200708154917.jpg', '2020-07-08 08:49:18', '2020-07-08 08:49:18'),
(12, 'P011', 'bridal smile', '1.000.000', 1, 12, 5, 'Satin, Lace', '20200709042125.jpg', '2020-07-08 21:21:25', '2020-07-08 21:21:25'),
(13, 'P012', 'party dress', '500.000', 2, 11, 3, 'Chiffon, Lace', '20200709042227.jpg', '2020-07-08 21:22:27', '2020-07-08 21:22:27'),
(14, 'P013', 'dress bless', '600.000', 3, 11, 2, 'Chiffon', '20200709042328.jpg', '2020-07-08 21:23:29', '2020-07-08 21:23:29'),
(15, 'P014', 'frau gown', '700.000', 1, 8, 1, 'Satin, Tafetta', NULL, '2020-07-08 21:24:34', '2020-07-08 21:24:34');

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
  `level` enum('admin','operator') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$8xJv2M4p2HxcRL30iqX8leBe369QDBOalKxTwZgiQMNiEqilTAeja', 'z2tRYT4aCSFDWPEsuxwRndx7BYxPAiO1bFarOagBs2lWllbyh4Sx10RcHxAY', 'admin', NULL, '2020-07-09 03:03:06'),
(2, 'Admin Fina', 'fina@gmail.com', NULL, '$2y$10$R8wSp6RJ57fMV6upLNqmkOhF1zf1fygMOmKX9Ipijzs1zgXTlTd1K', NULL, 'admin', '2020-07-08 08:11:37', '2020-07-08 08:11:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `macam`
--
ALTER TABLE `macam`
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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id_product_unique` (`id_product`),
  ADD KEY `product_id_brand_foreign` (`id_brand`),
  ADD KEY `product_id_macam_foreign` (`id_macam`);

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
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `macam`
--
ALTER TABLE `macam`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_id_brand_foreign` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_id_macam_foreign` FOREIGN KEY (`id_macam`) REFERENCES `macam` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
