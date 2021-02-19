-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 04:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

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
-- Table structure for table `ansas`
--

CREATE TABLE `ansas` (
  `id_ansas` int(100) NOT NULL,
  `sasaran` text NOT NULL,
  `kondisi_situasi` text NOT NULL,
  `kekuatan` text NOT NULL,
  `kelemahan` text NOT NULL,
  `kehendak` text NOT NULL,
  `op_aktif` text NOT NULL,
  `op_pasif` text NOT NULL,
  `op_pendukung` text NOT NULL,
  `penerbitan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `antug`
--

CREATE TABLE `antug` (
  `id_antug` int(100) NOT NULL,
  `sasaran` text NOT NULL,
  `kondisi_situasi` text NOT NULL,
  `kekuatan` text NOT NULL,
  `kelemahan` text NOT NULL,
  `kehendak` text NOT NULL,
  `op_aktif` text NOT NULL,
  `op_pasif` text NOT NULL,
  `op_pendukung` text NOT NULL,
  `penerbitan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menimbang_spoi`
--

CREATE TABLE `menimbang_spoi` (
  `id_spoi` int(100) NOT NULL,
  `isi` text NOT NULL,
  `urutan_menimbang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menimbang_spoi`
--

INSERT INTO `menimbang_spoi` (`id_spoi`, `isi`, `urutan_menimbang`) VALUES
(1, '4qaeggsg fgddddddddddddddddddddddddddddddd', 1),
(1, '4qaeggsg fgddddddddddddddddddddddddddddddd', 2);

-- --------------------------------------------------------

--
-- Table structure for table `menimbang_sppps`
--

CREATE TABLE `menimbang_sppps` (
  `id_sppps` int(100) NOT NULL,
  `isi` text NOT NULL,
  `urutan_menimbang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menimbang_sppps`
--

INSERT INTO `menimbang_sppps` (`id_sppps`, `isi`, `urutan_menimbang`) VALUES
(1, '4qaeggsg fgddddddddddddddddddddddddddddddd', 1);

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
('123456', 'tyo', '-', 'karyawan'),
('12362424652152', 'SOEYANTO SESEREHE', 'CEO', 'Kepala CEO'),
('987654321', 'Budiyono', '-', 'OB');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_spoi`
--

CREATE TABLE `petugas_spoi` (
  `id_spoi` int(100) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `urutan_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas_spoi`
--

INSERT INTO `petugas_spoi` (`id_spoi`, `nip`, `urutan_petugas`) VALUES
(1, '12362424652152', 1);

-- --------------------------------------------------------

--
-- Table structure for table `petugas_sppps`
--

CREATE TABLE `petugas_sppps` (
  `id_sppps` int(100) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `urutan_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas_sppps`
--

INSERT INTO `petugas_sppps` (`id_sppps`, `nip`, `urutan_petugas`) VALUES
(1, '123456', 1),
(2, '987654321', 2),
(3, '12362424652152', 3),
(4, '12362424652152', 4);

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
-- Table structure for table `spoi`
--

CREATE TABLE `spoi` (
  `id_spoi` int(100) NOT NULL,
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
-- Dumping data for table `spoi`
--

INSERT INTO `spoi` (`id_spoi`, `nomor_surat`, `kode_pejabat`, `kode_masalah`, `penerbitan`, `bulan`, `tahun`, `dasar_1`, `dasar_2`, `untuk_1`, `untuk_2`, `mulai`, `selesai`, `tempat`) VALUES
(1, '453', '2342', '2342', '2021-02-19', 0, 0, 'vsvdsv', 'sdfsdffdfs', 'sdfsdfsdfsdfsdfdsfds', 'asdaasdaqaaaaaaa', '2021-02-19', '2021-02-21', 'Semarang');

-- --------------------------------------------------------

--
-- Table structure for table `sppps`
--

CREATE TABLE `sppps` (
  `id_sppps` int(100) NOT NULL,
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
-- Dumping data for table `sppps`
--

INSERT INTO `sppps` (`id_sppps`, `nomor_surat`, `kode_pejabat`, `kode_masalah`, `penerbitan`, `bulan`, `tahun`, `dasar_1`, `dasar_2`, `untuk_1`, `untuk_2`, `mulai`, `selesai`, `tempat`) VALUES
(1, '453', '2342', '3545', '2021-02-16', 0, 0, 'sfsdfsdfsdfsdf', 'sdfsdffdfs', 'sdfsdfsdfsdfsdfdsfds', 'sdfsdfsdfsdsdfsdfsdfsdf', '2021-02-16', '2021-03-05', 'svdsdv'),
(2, '12312', '12312', '21312', '2021-02-18', 0, 0, '123123', 'sadfadasd', 'sdfsdfsdfsdfsdfdsfds', 'asdaasdaqaaaaaaa', '2021-02-18', '2021-02-28', 'svdsdv'),
(3, '56766', '12312', '2342', '2021-02-18', 0, 0, 'sfsdfsdfsdfsdf', 'sdfsdffdfs', 'sdfsdfsdfsdfsdfdsfds', 'sdfsdfsdfsdsdfsdfsdfsdf', '2021-02-18', '2021-02-28', 'svdsdv'),
(4, '56766', '12312', '2342', '2021-02-18', 0, 0, 'sfsdfsdfsdfsdf', 'sdfsdffdfs', 'sdfsdfsdfsdfsdfdsfds', 'sdfsdfsdfsdsdfsdfsdfsdf', '2021-02-18', '2021-02-28', 'svdsdv');

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
-- Table structure for table `tembusan_spoi`
--

CREATE TABLE `tembusan_spoi` (
  `id_spoi` int(100) NOT NULL,
  `isi` text NOT NULL,
  `urutan_isi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tembusan_spoi`
--

INSERT INTO `tembusan_spoi` (`id_spoi`, `isi`, `urutan_isi`) VALUES
(1, 'svsdv', 1),
(1, 'fdfsdfsdfsdfsfds', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tembusan_sppps`
--

CREATE TABLE `tembusan_sppps` (
  `id_sppps` int(100) NOT NULL,
  `isi` text NOT NULL,
  `urutan_tembusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tembusan_sppps`
--

INSERT INTO `tembusan_sppps` (`id_sppps`, `isi`, `urutan_tembusan`) VALUES
(1, 'svsdv', 1),
(4, 'fdfsdfsdfsdfsfds', 2),
(4, 'fdfsdfsdfsdfsfds', 3);

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
-- Indexes for table `ansas`
--
ALTER TABLE `ansas`
  ADD PRIMARY KEY (`id_ansas`);

--
-- Indexes for table `antug`
--
ALTER TABLE `antug`
  ADD PRIMARY KEY (`id_antug`);

--
-- Indexes for table `menimbang_spoi`
--
ALTER TABLE `menimbang_spoi`
  ADD PRIMARY KEY (`urutan_menimbang`),
  ADD KEY `id_spoi` (`id_spoi`);

--
-- Indexes for table `menimbang_sppps`
--
ALTER TABLE `menimbang_sppps`
  ADD PRIMARY KEY (`urutan_menimbang`),
  ADD KEY `id_spt` (`id_sppps`);

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
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `petugas_spoi`
--
ALTER TABLE `petugas_spoi`
  ADD PRIMARY KEY (`urutan_petugas`),
  ADD KEY `id_spt` (`id_spoi`);

--
-- Indexes for table `petugas_sppps`
--
ALTER TABLE `petugas_sppps`
  ADD PRIMARY KEY (`urutan_petugas`),
  ADD KEY `id_sppps` (`id_sppps`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `petugas_spt`
--
ALTER TABLE `petugas_spt`
  ADD PRIMARY KEY (`urutan_petugas`) USING BTREE,
  ADD KEY `id_spt` (`id_spt`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `spoi`
--
ALTER TABLE `spoi`
  ADD PRIMARY KEY (`id_spoi`);

--
-- Indexes for table `sppps`
--
ALTER TABLE `sppps`
  ADD PRIMARY KEY (`id_sppps`);

--
-- Indexes for table `spt`
--
ALTER TABLE `spt`
  ADD PRIMARY KEY (`id_spt`);

--
-- Indexes for table `tembusan_spoi`
--
ALTER TABLE `tembusan_spoi`
  ADD PRIMARY KEY (`urutan_isi`),
  ADD KEY `id_spoi` (`id_spoi`);

--
-- Indexes for table `tembusan_sppps`
--
ALTER TABLE `tembusan_sppps`
  ADD PRIMARY KEY (`urutan_tembusan`),
  ADD KEY `id_sppps` (`id_sppps`);

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
-- AUTO_INCREMENT for table `ansas`
--
ALTER TABLE `ansas`
  MODIFY `id_ansas` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `antug`
--
ALTER TABLE `antug`
  MODIFY `id_antug` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menimbang_spoi`
--
ALTER TABLE `menimbang_spoi`
  MODIFY `urutan_menimbang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menimbang_sppps`
--
ALTER TABLE `menimbang_sppps`
  MODIFY `urutan_menimbang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menimbang_spt`
--
ALTER TABLE `menimbang_spt`
  MODIFY `urutan_menimbang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `petugas_spoi`
--
ALTER TABLE `petugas_spoi`
  MODIFY `urutan_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `petugas_sppps`
--
ALTER TABLE `petugas_sppps`
  MODIFY `urutan_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `petugas_spt`
--
ALTER TABLE `petugas_spt`
  MODIFY `urutan_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `spoi`
--
ALTER TABLE `spoi`
  MODIFY `id_spoi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sppps`
--
ALTER TABLE `sppps`
  MODIFY `id_sppps` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `spt`
--
ALTER TABLE `spt`
  MODIFY `id_spt` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tembusan_spoi`
--
ALTER TABLE `tembusan_spoi`
  MODIFY `urutan_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tembusan_sppps`
--
ALTER TABLE `tembusan_sppps`
  MODIFY `urutan_tembusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tembusan_spt`
--
ALTER TABLE `tembusan_spt`
  MODIFY `urutan_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menimbang_spoi`
--
ALTER TABLE `menimbang_spoi`
  ADD CONSTRAINT `menimbang_spoi_ibfk_1` FOREIGN KEY (`id_spoi`) REFERENCES `spoi` (`id_spoi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menimbang_sppps`
--
ALTER TABLE `menimbang_sppps`
  ADD CONSTRAINT `menimbang_sppps_ibfk_1` FOREIGN KEY (`id_sppps`) REFERENCES `sppps` (`id_sppps`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menimbang_spt`
--
ALTER TABLE `menimbang_spt`
  ADD CONSTRAINT `menimbang_spt_ibfk_1` FOREIGN KEY (`id_spt`) REFERENCES `spt` (`id_spt`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `petugas_spoi`
--
ALTER TABLE `petugas_spoi`
  ADD CONSTRAINT `petugas_spoi_ibfk_1` FOREIGN KEY (`id_spoi`) REFERENCES `spoi` (`id_spoi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `petugas_sppps`
--
ALTER TABLE `petugas_sppps`
  ADD CONSTRAINT `petugas_sppps_ibfk_1` FOREIGN KEY (`id_sppps`) REFERENCES `sppps` (`id_sppps`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `petugas_sppps_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `petugas_spt`
--
ALTER TABLE `petugas_spt`
  ADD CONSTRAINT `petugas_spt_ibfk_1` FOREIGN KEY (`id_spt`) REFERENCES `spt` (`id_spt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `petugas_spt_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tembusan_spoi`
--
ALTER TABLE `tembusan_spoi`
  ADD CONSTRAINT `tembusan_spoi_ibfk_1` FOREIGN KEY (`id_spoi`) REFERENCES `spoi` (`id_spoi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tembusan_sppps`
--
ALTER TABLE `tembusan_sppps`
  ADD CONSTRAINT `tembusan_sppps_ibfk_1` FOREIGN KEY (`id_sppps`) REFERENCES `sppps` (`id_sppps`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tembusan_spt`
--
ALTER TABLE `tembusan_spt`
  ADD CONSTRAINT `tembusan_spt_ibfk_1` FOREIGN KEY (`id_spt`) REFERENCES `spt` (`id_spt`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
