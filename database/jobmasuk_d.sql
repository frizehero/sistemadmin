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
-- Table structure for table `jobmasuk_d`
--

CREATE TABLE `jobmasuk_d` (
  `id_jobmasuk_D02` int(11) NOT NULL,
  `jobno_D02` varchar(30) NOT NULL,
  `pt_D02` varchar(100) NOT NULL,
  `vessel_bg_D02` varchar(100) NOT NULL,
  `eta_D02` date NOT NULL,
  `lokasi_D02` varchar(100) NOT NULL,
  `tujuan_D02` varchar(100) NOT NULL,
  `statusjob_D02` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobmasuk_d`
--

INSERT INTO `jobmasuk_d` (`id_jobmasuk_D02`, `jobno_D02`, `pt_D02`, `vessel_bg_D02`, `eta_D02`, `lokasi_D02`, `tujuan_D02`, `statusjob_D02`, `created_at`) VALUES
(2, 'D02001', 'PT. ABC', 'BG. RIMAU / TB. SUTRA', '2022-10-20', 'MALANG', 'TUBAN', 'COMPLETE', '2022-04-12 13:30:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobmasuk_d`
--
ALTER TABLE `jobmasuk_d`
  ADD PRIMARY KEY (`id_jobmasuk_D02`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobmasuk_d`
--
ALTER TABLE `jobmasuk_d`
  MODIFY `id_jobmasuk_D02` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
