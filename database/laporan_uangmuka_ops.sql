-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 06:26 AM
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
-- Table structure for table `laporan_uangmuka_ops`
--

CREATE TABLE `laporan_uangmuka_ops` (
  `id_laporan_uangmuka_ops` int(11) NOT NULL,
  `id_data_pegawai` varchar(100) NOT NULL,
  `id_list_data_bank` varchar(100) NOT NULL,
  `bulan_urut_lap_uangmukaops` varchar(100) NOT NULL,
  `no_urut_lap_uangmukaops` varchar(100) NOT NULL,
  `nopc_finance` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `detailpermintaan_uangmukaops` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan_uangmuka_ops`
--
ALTER TABLE `laporan_uangmuka_ops`
  ADD PRIMARY KEY (`id_laporan_uangmuka_ops`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan_uangmuka_ops`
--
ALTER TABLE `laporan_uangmuka_ops`
  MODIFY `id_laporan_uangmuka_ops` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
