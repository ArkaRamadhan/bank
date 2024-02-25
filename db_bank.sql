-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2024 at 02:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_ib` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `cabang` varchar(255) NOT NULL,
  `no_rekening` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_ib` varchar(255) NOT NULL,
  `pin_ib` varchar(10) NOT NULL,
  `kode_akses` varchar(255) NOT NULL,
  `password_transaksi` varchar(255) NOT NULL,
  `pin_mb` varchar(10) NOT NULL,
  `pin_atm` varchar(10) NOT NULL,
  `serial_key_number` varchar(20) NOT NULL,
  `pin_skn` varchar(20) NOT NULL,
  `jenis_atm` varchar(255) NOT NULL,
  `no_kartu_atm` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `masa_berlaku_atm` date NOT NULL,
  `valid_simcard` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `batch` varchar(11) NOT NULL,
  `user_my_bca` varchar(255) NOT NULL,
  `password_my_bca` varchar(255) NOT NULL,
  `pin_transaksi` varchar(15) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `bisnis` varchar(255) NOT NULL,
  `coorporate_id` varchar(255) NOT NULL,
  `coorporate` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `foto_ktp` varchar(255) DEFAULT NULL,
  `foto_kartu_atm` varchar(255) DEFAULT NULL,
  `foto_kk` varchar(255) DEFAULT NULL,
  `foto_buku_tabungan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bisnis`
--

CREATE TABLE `bisnis` (
  `bisnis` varchar(255) NOT NULL,
  `coorporate_id` varchar(255) NOT NULL,
  `coorporate` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mybca`
--

CREATE TABLE `mybca` (
  `id_mybca` int(11) NOT NULL,
  `user_mybca` varchar(255) NOT NULL,
  `password_mybca` varchar(255) NOT NULL,
  `pin_transaksi` int(10) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'user', '123', 'user'),
(2, 'admin', '123', 'admin'),
(3, 'pasa', '123', 'admin'),
(4, 'rio', '123', 'user'),
(5, 'rippa', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_ib`);

--
-- Indexes for table `bisnis`
--
ALTER TABLE `bisnis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mybca`
--
ALTER TABLE `mybca`
  ADD PRIMARY KEY (`id_mybca`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_ib` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `bisnis`
--
ALTER TABLE `bisnis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mybca`
--
ALTER TABLE `mybca`
  MODIFY `id_mybca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
