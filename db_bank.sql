-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 07:10 AM
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
  `bisnis` varchar(255) NOT NULL,
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

INSERT INTO `bank` (`id_ib`, `username`, `nama`, `bank`, `cabang`, `no_rekening`, `nama_ibu`, `no_hp`, `email`, `password`, `user_ib`, `pin_ib`, `kode_akses`, `password_transaksi`, `pin_mb`, `pin_atm`, `serial_key_number`, `pin_skn`, `jenis_atm`, `no_kartu_atm`, `cvv`, `masa_berlaku_atm`, `valid_simcard`, `status`, `batch`, `user_my_bca`, `password_my_bca`, `pin_transaksi`, `keterangan`, `tanggal_mulai`, `tanggal_akhir`, `bisnis`, `coorporate_id`, `coorporate`, `id`, `foto_ktp`, `foto_kartu_atm`, `foto_kk`, `foto_buku_tabungan`) VALUES
(20, 'tolil', 'LIEUR', 'LIEUR', 'TEUING', '123 LIEUR EUY', 'POHO', '022231', 'qwert@gmail.com', 'qwerty', '1213', 'sdawd2', 'asd', '123', 'sdawd2', '1232', 'sdqw2', 'asdw', '123daas', 'sad2', 'jhws', '2024-02-26', '2024-02-26', 'Blockir', '1 // KOCAK', 'ahjs', 'kjdabsdkj', 'ajbds', 'daksdbjw', '2024-02-26', '2024-02-26', 'qjksdn', 'ajsbdkansmdb', 'sdbk', 'qkdbj', '', '', '', ''),
(21, '', 'quwihe', 'iuhdadjh', 'sjhadjKH', 'sjdhfq', 'ajdh', 'qwes', 'awejhas@gmail.com', 'jshd', 'uiashd', 'diaushd', 'dauishd', 'duiashd', 'diaushd', 'wduiahsd', 'idSHASD', 'AUISHD', 'asuidh', 'audhis', 'sdf', '2024-03-05', '2024-03-09', 'Closed', 'igdajkbs', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '1496216378_ktp.jpeg', '1496216378_kartu_atm.jpeg', '1496216378_kk.jpeg', '1496216378_buku_tabungan.jpeg'),
(24, 'tolil', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '06788444_ktp.jpg', '06788443_kartu_atm.jpeg', '06788445_kk.jpg', '06788446_buku_tabungan.jpg'),
(25, 'tolil', 'asdasd', 'dasdas', 'dasd', 'asd', 'das', 'dasd', 'dadasas@gmail.com', 'dasd', 'das', 'dasd', 'das', 'sdsa', 'dasd', 'asdasd', 'asdd', 'dasd', 'dasdds', 'dasda', 'sasadsdas', '2024-03-01', '2024-02-27', '', 'asdasd', '2dasd', 'asdq2', 'dsad', 'dasd', '2024-02-27', '2024-02-27', 'asd', 'wdasd', 'dsad', 'asdsad', '', '', '', ''),
(26, 'ujang', '123asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd@gmail.com', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '0000-00-00', '0000-00-00', '', 'asd', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ''),
(27, 'ujang', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe@gmail.com', 'eqw', 'qwe', 'qwe', 'qwe', 'qew', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', '2024-02-23', '2024-02-03', '', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', '2024-02-15', '2024-02-09', 'qwe', 'qwe', 'qwe', 'qwe', '', '', '', ''),
(28, 'ujang', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'active', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ''),
(29, 'ujang', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'blockir', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ''),
(30, 'jamal', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'closed', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ''),
(32, 'kocak', 'Arkha', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'active', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_ib`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_ib` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
