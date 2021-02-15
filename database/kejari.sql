-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 03:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kejari`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `menimbang_spt`
--

CREATE TABLE `menimbang_spt` (
  `id_spt` int(100) NOT NULL,
  `isi` text NOT NULL,
  `urutan_menimbang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menimbang_spt`
--

INSERT INTO `menimbang_spt` (`id_spt`, `isi`, `urutan_menimbang`) VALUES
(18, 'menimbang 1', 6),
(18, 'menimbang 2', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `pangkat`, `jabatan`) VALUES
('12362424652152', 'SOEYANTO SESEREHE', 'CEO', 'Kepala CEO'),
('', '', '', ''),
('budiman', '213124123', '-', 'karyawan'),
('miftahudin', '12345678', '-', 'OB');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_spt`
--

CREATE TABLE `petugas_spt` (
  `id_spt` int(100) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `urutan_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas_spt`
--

INSERT INTO `petugas_spt` (`id_spt`, `nip`, `urutan_petugas`) VALUES
(18, '12362424652152', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pps`
--

CREATE TABLE `pps` (
  `id_pps` int(100) NOT NULL,
  `nomor_surat` varchar(5) NOT NULL,
  `kode_pejabat` varchar(5) NOT NULL,
  `kode_masalah` varchar(5) NOT NULL,
  `penerbitan` date NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `dasar_1` text NOT NULL,
  `dasar_2` text NOT NULL,
  `untuk_1` text NOT NULL,
  `untuk_2` text NOT NULL,
  `mulai` date NOT NULL,
  `seelsai` date NOT NULL,
  `tempat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `spt`
--

CREATE TABLE `spt` (
  `id_spt` int(100) NOT NULL,
  `nomor_surat` varchar(5) NOT NULL,
  `kode_pejabat` varchar(5) NOT NULL,
  `kode_masalah` varchar(5) NOT NULL,
  `penerbitan` date NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `dasar_1` text NOT NULL,
  `dasar_2` text NOT NULL,
  `untuk_1` text NOT NULL,
  `untuk_2` text NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL,
  `tempat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spt`
--

INSERT INTO `spt` (`id_spt`, `nomor_surat`, `kode_pejabat`, `kode_masalah`, `penerbitan`, `bulan`, `tahun`, `dasar_1`, `dasar_2`, `untuk_1`, `untuk_2`, `mulai`, `selesai`, `tempat`) VALUES
(18, '23', '34sfs', '34tg', '2021-02-04', 0, 0, 'dasar 1', 'dasar 2', 'untuk 1', 'untuk 2', '2021-02-11', '2021-02-18', 'Semarang');

-- --------------------------------------------------------

--
-- Table structure for table `tembusan_spt`
--

CREATE TABLE `tembusan_spt` (
  `id_spt` int(100) NOT NULL,
  `isi` text NOT NULL,
  `urutan_isi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tembusan_spt`
--

INSERT INTO `tembusan_spt` (`id_spt`, `isi`, `urutan_isi`) VALUES
(18, 'tembusan 1', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `menimbang_spt`
--
ALTER TABLE `menimbang_spt`
  ADD PRIMARY KEY (`urutan_menimbang`),
  ADD KEY `id_spt` (`id_spt`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `petugas_spt`
--
ALTER TABLE `petugas_spt`
  ADD PRIMARY KEY (`urutan_petugas`) USING BTREE,
  ADD KEY `id_spt` (`id_spt`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `pps`
--
ALTER TABLE `pps`
  ADD PRIMARY KEY (`id_pps`);

--
-- Indexes for table `spt`
--
ALTER TABLE `spt`
  ADD PRIMARY KEY (`id_spt`);

--
-- Indexes for table `tembusan_spt`
--
ALTER TABLE `tembusan_spt`
  ADD PRIMARY KEY (`urutan_isi`) USING BTREE,
  ADD KEY `id_spt` (`id_spt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menimbang_spt`
--
ALTER TABLE `menimbang_spt`
  MODIFY `urutan_menimbang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `petugas_spt`
--
ALTER TABLE `petugas_spt`
  MODIFY `urutan_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pps`
--
ALTER TABLE `pps`
  MODIFY `id_pps` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spt`
--
ALTER TABLE `spt`
  MODIFY `id_spt` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tembusan_spt`
--
ALTER TABLE `tembusan_spt`
  MODIFY `urutan_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menimbang_spt`
--
ALTER TABLE `menimbang_spt`
  ADD CONSTRAINT `menimbang_spt_ibfk_1` FOREIGN KEY (`id_spt`) REFERENCES `spt` (`id_spt`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `petugas_spt`
--
ALTER TABLE `petugas_spt`
  ADD CONSTRAINT `petugas_spt_ibfk_1` FOREIGN KEY (`id_spt`) REFERENCES `spt` (`id_spt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `petugas_spt_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tembusan_spt`
--
ALTER TABLE `tembusan_spt`
  ADD CONSTRAINT `tembusan_spt_ibfk_1` FOREIGN KEY (`id_spt`) REFERENCES `spt` (`id_spt`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
