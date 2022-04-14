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
-- Table structure for table `data_vendor`
--

CREATE TABLE `data_vendor` (
  `id_data_vendor` int(11) NOT NULL,
  `nama_usaha_vendor` varchar(100) DEFAULT NULL,
  `nama_rekening_vendor` varchar(100) DEFAULT NULL,
  `bank_vendor` varchar(100) DEFAULT NULL,
  `norek_vendor` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jenis_vendor` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_vendor`
--

INSERT INTO `data_vendor` (`id_data_vendor`, `nama_usaha_vendor`, `nama_rekening_vendor`, `bank_vendor`, `norek_vendor`, `created_at`, `jenis_vendor`) VALUES
(9, 'PT. ABC', 'AKHFAN', 'BCA', '0123456789', '2022-04-13 10:47:36', 'SPEEDBOAT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_vendor`
--
ALTER TABLE `data_vendor`
  ADD PRIMARY KEY (`id_data_vendor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_vendor`
--
ALTER TABLE `data_vendor`
  MODIFY `id_data_vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
