-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 10:54 AM
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
-- Table structure for table `jobmasuk`
--

CREATE TABLE `jobmasuk` (
  `id_jobmasuk` int(11) NOT NULL,
  `jobno` varchar(30) DEFAULT NULL,
  `pt` varchar(100) DEFAULT NULL,
  `vessel_bg` varchar(100) DEFAULT NULL,
  `eta` date DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `tujuan` varchar(100) DEFAULT NULL,
  `statusjob` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobmasuk`
--

INSERT INTO `jobmasuk` (`id_jobmasuk`, `jobno`, `pt`, `vessel_bg`, `eta`, `lokasi`, `tujuan`, `statusjob`, `created_at`) VALUES
(8, 'D02.001', 'PT', 'BG. RIMAU/TB.RAMIU', '2022-03-20', 'BANJAR', 'BALIKPAPAN', 'UNLOADING', '2022-04-16 08:47:32'),
(9, 'C02.001', 'PT. A', 'MV. ABC', '2022-04-01', 'BANJAR', 'PALANGKARAYA', 'UNLOADING', '2022-04-16 08:47:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobmasuk`
--
ALTER TABLE `jobmasuk`
  ADD PRIMARY KEY (`id_jobmasuk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobmasuk`
--
ALTER TABLE `jobmasuk`
  MODIFY `id_jobmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
