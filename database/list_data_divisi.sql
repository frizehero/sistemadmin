-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 09:28 AM
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
-- Database: `sistemadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_data_divisi`
--

CREATE TABLE `list_data_divisi` (
  `id_list_data_divisi` int(11) NOT NULL,
  `id_data_divisi` varchar(100) DEFAULT NULL,
  `nama_list_data_divisi` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_data_divisi`
--

INSERT INTO `list_data_divisi` (`id_list_data_divisi`, `id_data_divisi`, `nama_list_data_divisi`, `created_at`) VALUES
(3, '1', 'Driver', '2022-04-03 07:13:44'),
(4, '2', 'Surveyor', '2022-04-03 07:17:39'),
(5, '1', 'Helper Driver', '2022-04-03 07:18:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_data_divisi`
--
ALTER TABLE `list_data_divisi`
  ADD PRIMARY KEY (`id_list_data_divisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_data_divisi`
--
ALTER TABLE `list_data_divisi`
  MODIFY `id_list_data_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
