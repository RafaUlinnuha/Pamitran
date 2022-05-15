-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2022 at 04:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pamitran`
--

-- --------------------------------------------------------

--
-- Table structure for table `layanan_publikasi`
--

CREATE TABLE `layanan_publikasi` (
  `id_layanan` int(11) NOT NULL,
  `id_users` bigint(20) NOT NULL,
  `jenis_layanan` varchar(255) NOT NULL,
  `bukti_transfer` varchar(255) NOT NULL,
  `metode_konsultasi` varchar(255) NOT NULL,
  `paper` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(155) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_registered` varchar(255) NOT NULL,
  `role` varchar(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `phone`, `password`, `is_registered`, `role`, `created_at`, `updated_at`) VALUES
(51, 'admin', 'admin@gmail.com', '012301230123', '$2y$10$MjoAgbkrEA8aJy5JQkHRGuaGwA8RHDf8nQKrDZLUZ55T8KASG83di', 'Belum Teregistrasi', 'admin', '2022-02-10 15:23:42', '2022-02-10 15:23:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `layanan_publikasi`
--
ALTER TABLE `layanan_publikasi`
  ADD PRIMARY KEY (`id_layanan`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `layanan_publikasi`
--
ALTER TABLE `layanan_publikasi`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `layanan_publikasi`
--
ALTER TABLE `layanan_publikasi`
  ADD CONSTRAINT `layanan_publikasi_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
