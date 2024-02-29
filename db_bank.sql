-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 03:49 PM
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
  `username` varchar(255) NOT NULL,
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
  `coorporate_id` varchar(255) NOT NULL,
  `coorporate` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `foto_ktp` varchar(255) DEFAULT NULL,
  `foto_kartu_atm` varchar(255) DEFAULT NULL,
  `foto_kk` varchar(255) DEFAULT NULL,
  `foto_buku_tabungan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_ib`, `username`, `nama`, `bank`, `cabang`, `no_rekening`, `nama_ibu`, `no_hp`, `email`, `password`, `user_ib`, `pin_ib`, `kode_akses`, `password_transaksi`, `pin_mb`, `pin_atm`, `serial_key_number`, `pin_skn`, `jenis_atm`, `no_kartu_atm`, `cvv`, `masa_berlaku_atm`, `valid_simcard`, `status`, `batch`, `user_my_bca`, `password_my_bca`, `pin_transaksi`, `keterangan`, `tanggal_mulai`, `tanggal_akhir`, `coorporate_id`, `coorporate`, `id`, `foto_ktp`, `foto_kartu_atm`, `foto_kk`, `foto_buku_tabungan`) VALUES
(20, 'tolil', 'LIEUR', 'LIEUR', 'TEUING', '123 LIEUR EUY', 'POHO', '022231', 'qwert@gmail.com', 'qwerty', '1213', 'sdawd2', 'asd', '123', 'sdawd2', '1232', 'sdqw2', 'asdw', '123daas', 'sad2', 'jhws', '2024-02-26', '2024-02-26', 'Blockir', '1 // KOCAK', 'ahjs', 'kjdabsdkj', 'ajbds', 'daksdbjw', '2024-02-26', '2024-02-26', 'ajsbdkansmdb', 'sdbk', 'qkdbj', '', '', '', ''),
(21, '', 'quwihe', 'iuhdadjh', 'sjhadjKH', 'sjdhfq', 'ajdh', 'qwes', 'awejhas@gmail.com', 'jshd', 'uiashd', 'diaushd', 'dauishd', 'duiashd', 'diaushd', 'wduiahsd', 'idSHASD', 'AUISHD', 'asuidh', 'audhis', 'sdf', '2024-03-05', '2024-03-09', 'Closed', 'igdajkbs', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '1496216378_ktp.jpeg', '1496216378_kartu_atm.jpeg', '1496216378_kk.jpeg', '1496216378_buku_tabungan.jpeg'),
(24, 'tolil', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '06788444_ktp.jpg', '06788443_kartu_atm.jpeg', '06788445_kk.jpg', '06788446_buku_tabungan.jpg'),
(25, 'tolil', 'asdasd', 'dasdas', 'dasd', 'asd', 'das', 'dasd', 'dadasas@gmail.com', 'dasd', 'das', 'dasd', 'das', 'sdsa', 'dasd', 'asdasd', 'asdd', 'dasd', 'dasdds', 'dasda', 'sasadsdas', '2024-03-01', '2024-02-27', '', 'asdasd', '2dasd', 'asdq2', 'dsad', 'dasd', '2024-02-27', '2024-02-27', 'wdasd', 'dsad', 'asdsad', '', '', '', ''),
(26, 'ujang', '123asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd@gmail.com', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '0000-00-00', '0000-00-00', '', 'asd', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', ''),
(27, 'ujang', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe@gmail.com', 'eqw', 'qwe', 'qwe', 'qwe', 'qew', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', '2024-02-23', '2024-02-03', '', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', '2024-02-15', '2024-02-09', 'qwe', 'qwe', 'qwe', '', '', '', ''),
(28, 'ujang', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'active', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', ''),
(29, 'ujang', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'blockir', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', ''),
(30, 'jamal', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'closed', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', ''),
(32, 'kocak', 'Arkha', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'active', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', ''),
(33, 'kocak', 'das', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'active', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', ''),
(34, 'jamal', 'arka', 'BCA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', ''),
(35, 'rio', 'arka', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'Active', '1', '', '', '', '', '0000-00-00', '0000-00-00', 'popo', 'popsdbk', 'qkdlpobj', '', '', '', ''),
(36, 'rio', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'stock', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', ''),
(37, 'rio', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'sda', 'asd', 'asd', '', '', '', '');

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
(5, 'rippa', '123', 'user'),
(6, 'tolil', 'tolil', 'user'),
(7, 'ujang', 'ujang', 'user'),
(8, 'pendi', '123', 'user'),
(9, 'jamal', '123', 'user');

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
  MODIFY `id_ib` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
