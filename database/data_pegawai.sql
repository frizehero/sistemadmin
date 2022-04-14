-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 06:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_data_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(200) DEFAULT NULL,
  `ket_pegawai` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `nik_pegawai` text NOT NULL,
  `telepon_pegawai` varchar(20) NOT NULL,
  `ttd_pegawai` text NOT NULL,
  `email_pegawai` text NOT NULL,
  `bank_pegawai` varchar(50) NOT NULL,
  `norek_pegawai` varchar(50) NOT NULL,
  `cabangbank_pegawai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_data_pegawai`, `nama_pegawai`, `ket_pegawai`, `created_at`, `nik_pegawai`, `telepon_pegawai`, `ttd_pegawai`, `email_pegawai`, `bank_pegawai`, `norek_pegawai`, `cabangbank_pegawai`) VALUES
(2, 'RULITHA AZARIA', 'ADMIN', '2022-04-03 04:11:29', '00001', '081234', '', 'rulitha@gmail.com', 'BCA', '01234567890', 'MALANG'),
(12, 'ADHI SETYATUHU', 'ADMIN', '2022-04-12 08:17:19', '0002', '0909090909900', '', 'adhi@gmail.com', 'BCA', '0123456789', 'MALANG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_data_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_data_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
