-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 05:41 PM
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
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `email`, `id_poli`, `created_at`, `update_at`) VALUES
(0, 'Hadi', 'hadi@gmail.com', 0, '2023-06-20 16:59:15', '2023-06-20 16:59:15'),
(1, 'Fatir', 'fatir@gmail.com', 1, '2023-06-20 16:59:41', '2023-06-20 16:59:41'),
(2, 'Iqbal', 'iqbal@gmail.com', 2, '2023-06-20 16:59:58', '2023-06-20 16:59:58'),
(3, 'yadi', 'yadi@gmail.com', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Prasodjo', 'prasodjo@gmail.com', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `medis`
--

CREATE TABLE `medis` (
  `id` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `resep` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medis`
--

INSERT INTO `medis` (`id`, `id_pasien`, `id_dokter`, `id_poli`, `diagnosis`, `resep`, `created_at`, `update_at`) VALUES
(0, 1, 1, 1, 'Demam', 'polycilane', '2023-06-20 17:23:15', '2023-06-20 17:23:15'),
(1, 2, 1, 1, 'flu dan batuk', 'anakonidin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 1, 1, 'Batuk', 'OBH Combi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 0, 0, 'Mata merah', 'Insto', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, 0, 0, 'gatal gatal', 'bedak gatal', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `phone`, `alamat`, `created_at`, `update_at`) VALUES
(0, 'firyal', '08192934812', 'cilegon', '2023-06-01 13:30:30', '2023-06-30 13:30:30'),
(1, 'kiki', '08929828732', 'serang', '2023-06-01 13:30:30', '2023-06-30 13:30:30'),
(2, 'eng', '082932841', 'pandeglang', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'gama', '0823847529', 'serang', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'rusdi', '0812948123', 'cilegon', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id` int(11) NOT NULL,
  `poli` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id`, `poli`, `deskripsi`, `created_at`, `update_at`) VALUES
(0, 'dokter umum', 'asdjjehf', '2023-06-20 16:58:23', '2023-06-20 16:58:23'),
(1, 'dokter anak', 'dkwodksjsc', '2023-06-20 16:58:49', '2023-06-20 16:58:49'),
(2, 'dokter mata ', 'ksdjwiwujdn', '2023-06-20 16:59:00', '2023-06-20 16:59:00'),
(3, 'dokter gigi', 'igghiwihqoi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'dokter tulang', '2widjsnas', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `created_at`, `update_at`) VALUES
('admin', 'admin', '2023-06-20 22:40:10', '2023-06-20 22:40:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `medis`
--
ALTER TABLE `medis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medis`
--
ALTER TABLE `medis`
  ADD CONSTRAINT `id_dokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id`),
  ADD CONSTRAINT `id_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_poli` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
