-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 08:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsudbangil`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory_room`
--

CREATE TABLE `inventory_room` (
  `id_inv_room` int(11) NOT NULL,
  `kode_room` varchar(100) DEFAULT NULL,
  `nama_room` varchar(100) DEFAULT NULL,
  `pj_room` varchar(100) DEFAULT NULL,
  `ket_room` text DEFAULT NULL,
  `tgl_dibuat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory_room`
--

INSERT INTO `inventory_room` (`id_inv_room`, `kode_room`, `nama_room`, `pj_room`, `ket_room`, `tgl_dibuat`) VALUES
(1, '08.01.01.01', 'Ruang Rekam Medis', '5', 'LaLaLa', '2021-05-05 23:23:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory_room`
--
ALTER TABLE `inventory_room`
  ADD PRIMARY KEY (`id_inv_room`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory_room`
--
ALTER TABLE `inventory_room`
  MODIFY `id_inv_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
