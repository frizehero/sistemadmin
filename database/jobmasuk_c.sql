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
-- Table structure for table `jobmasuk_c`
--

CREATE TABLE `jobmasuk_c` (
  `id_jobmasuk_C02` int(11) NOT NULL,
  `jobno_C02` varchar(30) DEFAULT NULL,
  `pt_C02` varchar(100) DEFAULT NULL,
  `vessel_bg_C02` varchar(100) DEFAULT NULL,
  `eta_C02` date DEFAULT NULL,
  `lokasi_C02` varchar(100) DEFAULT NULL,
  `tujuan_C02` varchar(100) DEFAULT NULL,
  `statusjob_C02` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobmasuk_c`
--

INSERT INTO `jobmasuk_c` (`id_jobmasuk_C02`, `jobno_C02`, `pt_C02`, `vessel_bg_C02`, `eta_C02`, `lokasi_C02`, `tujuan_C02`, `statusjob_C02`, `created_at`) VALUES
(3, 'C0222010001-TDLVV-AF', 'PT. DEF', 'MV. HAMMADA', '2022-03-10', 'BUNATI', 'MALUKU', 'UNLOADING', '2022-04-12 13:08:01'),
(4, 'C0222010002-TDLVV-AF', 'PT. ABCD', 'BG. BANGAU / TB. JAGUAR', '2022-09-10', 'SUDAN', 'PALEMBANG', 'COMPLETE', '2022-04-12 13:10:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobmasuk_c`
--
ALTER TABLE `jobmasuk_c`
  ADD PRIMARY KEY (`id_jobmasuk_C02`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobmasuk_c`
--
ALTER TABLE `jobmasuk_c`
  MODIFY `id_jobmasuk_C02` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
