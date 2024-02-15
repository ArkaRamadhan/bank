-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 01:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `no_rekening` int(50) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_ib` varchar(255) NOT NULL,
  `pin_ib` int(10) NOT NULL,
  `kode_akses` varchar(255) NOT NULL,
  `password_transaksi` varchar(255) NOT NULL,
  `pin_mb` int(10) NOT NULL,
  `pin_atm` int(10) NOT NULL,
  `serial_key_number` int(20) NOT NULL,
  `pin_skn` int(20) NOT NULL,
  `jenis_atm` varchar(255) NOT NULL,
  `no_kartu_atm` int(100) NOT NULL,
  `cvv` int(100) NOT NULL,
  `masa_berlaku_atm` date NOT NULL,
  `valid_simcard` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_ib` int(11) NOT NULL AUTO_INCREMENT;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
