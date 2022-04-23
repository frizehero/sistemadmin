-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 05:15 PM
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
(2, 'General Affair', 'Driver', '2022-03-31 09:19:25'),
(4, 'Staff Office', '', '2022-04-17 10:51:14'),
(5, 'Kerabat', '', '2022-04-23 10:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id_data_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(200) DEFAULT NULL,
  `ket_jabatan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_data_jabatan`, `nama_jabatan`, `ket_jabatan`, `created_at`) VALUES
(1, NULL, NULL, '2022-04-02 07:33:40'),
(2, 'a', 'a', '2022-04-02 07:35:02'),
(3, 'd', 'd', '2022-04-03 03:40:13');

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
(14, 'fffafasf', '2', '2022-04-15 09:06:03', '213123', 'a3123123', '', '', '', '', ''),
(15, 'somad', '3', '2022-04-15 09:12:33', '64654', '456465', '', '', '', '', ''),
(16, 'RULITHA AZARIA', '4', '2022-04-17 10:55:25', '10.20.2022', '081258257383', '', 'rulitha@gmail.com', 'BCA', '0987654', 'Malang');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jobkode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobmasuk`
--

INSERT INTO `jobmasuk` (`id_jobmasuk`, `jobno`, `pt`, `vessel_bg`, `eta`, `lokasi`, `tujuan`, `statusjob`, `created_at`, `jobkode`) VALUES
(10, 'C0222010001-TDLVV-AF', 'PT.  TANAH BUMBU RESOURCES', 'MV. HAMMADA ', '2022-01-04', 'BUNATI', 'MALUKU, INDONESIA', 'WAITING', '2022-04-23 10:32:59', 'C02'),
(11, 'c02.0000050', '', '', '0000-00-00', '', '', '', '2022-04-17 08:25:41', 'C02'),
(12, 'C02. 500000', '', '', '0000-00-00', '', '', '', '2022-04-17 08:28:00', 'C02');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jobkode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobmasuk_d`
--

INSERT INTO `jobmasuk_d` (`id_jobmasuk_D02`, `jobno_D02`, `pt_D02`, `vessel_bg_D02`, `eta_D02`, `lokasi_D02`, `tujuan_D02`, `statusjob_D02`, `created_at`, `jobkode`) VALUES
(2, 'D022220001', 'PT.  SUNGAI DANAU JAYA', 'BG. RIMAU / TB. SUTRA', '2022-10-20', 'MALANG', 'TUBAN', 'WAITING', '2022-04-23 11:14:34', 'D02'),
(4, 'D020013TDL', '', '', '0000-00-00', '', '', '', '2022-04-17 06:12:34', 'D02');

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
(30, '2', 'BCA', '123', 'SURABAYA', '2022-04-12 08:18:07'),
(34, '14', 'BCA', '123456', 'SURABAYA', '2022-04-15 13:53:07'),
(35, '14', 'BNI', '123456789', 'JOGJAKARTA', '2022-04-17 04:31:57'),
(36, '16', 'BCA', '123', 'A', '2022-04-17 10:55:56');

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
(8, '1', 'Surveyor', '2022-04-23 10:47:41'),
(9, '1', 'Senior Sampler', '2022-04-23 10:47:49'),
(11, '1', 'Helper', '2022-04-23 10:48:03'),
(12, '2', 'Driver', '2022-04-23 10:49:38'),
(13, '2', 'Helper Driver', '2022-04-23 10:49:44'),
(14, '4', 'Driver Kontrak', '2022-04-23 10:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `list_data_pegawai`
--

CREATE TABLE `list_data_pegawai` (
  `id_list_data_pegawai` int(11) NOT NULL,
  `id_data_pegawai` varchar(100) DEFAULT NULL,
  `nama_list_data_pegawai` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_admin`, `nama`, `username`, `password`, `status`, `created_at`) VALUES
(1, 'Uta', 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1, '2022-03-25 06:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `uangmuka_ops`
--

CREATE TABLE `uangmuka_ops` (
  `id_uangmukaops` int(11) NOT NULL,
  `nik_pegawai` varchar(100) DEFAULT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `jobno` varchar(100) NOT NULL,
  `pt` varchar(100) NOT NULL,
  `vessel_bg` varchar(100) NOT NULL,
  `job_pekerjaannya` varchar(100) NOT NULL,
  `deskripsi_uangmukaops` varchar(100) NOT NULL,
  `nominal_uangmukaops` varchar(100) NOT NULL,
  `nama_pegawai_bank` varchar(100) NOT NULL,
  `norek_bank` varchar(100) NOT NULL,
  `cabang_bank` varchar(100) NOT NULL,
  `ket_uangmukaops` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tanggal_uangmukaops` date NOT NULL,
  `terakhir_setorklaim` date NOT NULL,
  `status_umksebelumnya` varchar(30) NOT NULL,
  `nama_list_bank` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uangmuka_ops`
--

INSERT INTO `uangmuka_ops` (`id_uangmukaops`, `nik_pegawai`, `nama_pegawai`, `jobno`, `pt`, `vessel_bg`, `job_pekerjaannya`, `deskripsi_uangmukaops`, `nominal_uangmukaops`, `nama_pegawai_bank`, `norek_bank`, `cabang_bank`, `ket_uangmukaops`, `created_at`, `tanggal_uangmukaops`, `terakhir_setorklaim`, `status_umksebelumnya`, `nama_list_bank`) VALUES
(1, '909090', 'k', 's', 'd', 'f', 'g', 'h', 'j', '', 'm', 'n', 'f', '2022-04-17 11:19:49', '2022-04-17', '0000-00-00', '', 'l');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(100) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_divisi`
--
ALTER TABLE `data_divisi`
  ADD PRIMARY KEY (`id_data_divisi`);

--
-- Indexes for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`id_data_jabatan`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_data_pegawai`);

--
-- Indexes for table `data_vendor`
--
ALTER TABLE `data_vendor`
  ADD PRIMARY KEY (`id_data_vendor`);

--
-- Indexes for table `jobmasuk`
--
ALTER TABLE `jobmasuk`
  ADD PRIMARY KEY (`id_jobmasuk`);

--
-- Indexes for table `jobmasuk_d`
--
ALTER TABLE `jobmasuk_d`
  ADD PRIMARY KEY (`id_jobmasuk_D02`);

--
-- Indexes for table `list_data_bank`
--
ALTER TABLE `list_data_bank`
  ADD PRIMARY KEY (`id_list_data_bank`);

--
-- Indexes for table `list_data_divisi`
--
ALTER TABLE `list_data_divisi`
  ADD PRIMARY KEY (`id_list_data_divisi`);

--
-- Indexes for table `list_data_pegawai`
--
ALTER TABLE `list_data_pegawai`
  ADD PRIMARY KEY (`id_list_data_pegawai`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `uangmuka_ops`
--
ALTER TABLE `uangmuka_ops`
  ADD PRIMARY KEY (`id_uangmukaops`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_divisi`
--
ALTER TABLE `data_divisi`
  MODIFY `id_data_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id_data_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_data_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data_vendor`
--
ALTER TABLE `data_vendor`
  MODIFY `id_data_vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobmasuk`
--
ALTER TABLE `jobmasuk`
  MODIFY `id_jobmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobmasuk_d`
--
ALTER TABLE `jobmasuk_d`
  MODIFY `id_jobmasuk_D02` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `list_data_bank`
--
ALTER TABLE `list_data_bank`
  MODIFY `id_list_data_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `list_data_divisi`
--
ALTER TABLE `list_data_divisi`
  MODIFY `id_list_data_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uangmuka_ops`
--
ALTER TABLE `uangmuka_ops`
  MODIFY `id_uangmukaops` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
