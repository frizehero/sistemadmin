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
-- Table structure for table `data_divisi`
--

CREATE TABLE `data_divisi` (
  `id_data_divisi` int(11) NOT NULL,
  `nama_data_divisi` varchar(200) DEFAULT NULL,
  `ket_data_divisi` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_divisi`
--

INSERT INTO `data_divisi` (`id_data_divisi`, `nama_data_divisi`, `ket_data_divisi`, `created_at`) VALUES
(1, 'Operasional', 'Sampler', '2022-03-31 09:12:10'),
(2, 'General Affair', 'Driver', '2022-03-31 09:19:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_divisi`
--
ALTER TABLE `data_divisi`
  ADD PRIMARY KEY (`id_data_divisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_divisi`
--
ALTER TABLE `data_divisi`
  MODIFY `id_data_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
