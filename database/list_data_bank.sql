-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 06:27 AM
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
-- Table structure for table `list_data_bank`
--

CREATE TABLE `list_data_bank` (
  `id_list_data_bank` int(11) NOT NULL,
  `id_data_pegawai` varchar(100) DEFAULT NULL,
  `nama_list_bank` varchar(100) DEFAULT NULL,
  `norek_list_bank` varchar(100) DEFAULT NULL,
  `cabang_list_bank` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_data_bank`
--

INSERT INTO `list_data_bank` (`id_list_data_bank`, `id_data_pegawai`, `nama_list_bank`, `norek_list_bank`, `cabang_list_bank`, `created_at`) VALUES
(30, '2', 'BCA', '123', 'SURABAYA', '2022-04-12 08:18:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_data_bank`
--
ALTER TABLE `list_data_bank`
  ADD PRIMARY KEY (`id_list_data_bank`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_data_bank`
--
ALTER TABLE `list_data_bank`
  MODIFY `id_list_data_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
