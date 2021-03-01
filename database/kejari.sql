-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 03:05 AM
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
  `penerbitan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ansas`
--

INSERT INTO `ansas` (`id_ansas`, `sasaran`, `penerbitan`) VALUES
(2, 'inputDatabase', '2021-02-24'),
(3, 'inputDatabase', '2021-02-24'),
(4, ',jAZSXDCFVGBHNJMK,L.;/;.L,KMJNHBGVFCDSAAZSXDCFVGBHNJMK,LKMJNHGF', '2021-02-25'),
(6, 'c dnsc ,d sdmnas  fn fjsdf sdf', '2021-02-25'),
(7, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias nesciunt aspernatur expedita nam delectus veniam ducimus, exercitationem omnis! Modi voluptatibus minima velit veritatis pariatur cupiditate necessitatibus id officiis aliquam praesentium?', '2021-02-27');

-- --------------------------------------------------------

--
-- Table structure for table `antug`
--

CREATE TABLE `antug` (
  `id_antug` int(100) NOT NULL,
  `identifikasi_tugas` text NOT NULL,
  `penerbitan` date NOT NULL,
  `mulai_tugas` date NOT NULL,
  `tempat_tugas` varchar(100) NOT NULL,
  `sasaran_tugas` text NOT NULL,
  `informasi_diperlukan` text NOT NULL,
  `sarana_pendukung_1` text NOT NULL,
  `sarana_pendukung_2` text NOT NULL,
  `komunikasi_koordinasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kehendak_ansas`
--

CREATE TABLE `kehendak_ansas` (
  `urutan_kehendak` int(100) NOT NULL,
  `id_ansas` int(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kehendak_ansas`
--

INSERT INTO `kehendak_ansas` (`urutan_kehendak`, `id_ansas`, `isi`) VALUES
(1, 7, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias nesciunt aspernatur expedita nam delectus veniam ducimus, exercitationem omnis! Modi voluptatibus minima velit veritatis pariatur cupiditate necessitatibus id officiis aliquam praesentium?'),
(2, 7, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias nesciunt aspernatur expedita nam delectus veniam ducimus, exercitationem omnis! Modi voluptatibus minima velit veritatis pariatur cupiditate necessitatibus id officiis aliquam praesentium?');

-- --------------------------------------------------------

--
-- Table structure for table `kekuatan_ansas`
--

CREATE TABLE `kekuatan_ansas` (
  `urutan_kekuatan` int(11) NOT NULL,
  `id_ansas` int(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kekuatan_ansas`
--

INSERT INTO `kekuatan_ansas` (`urutan_kekuatan`, `id_ansas`, `isi`) VALUES
(2, 7, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias nesciunt aspernatur expedita nam delectus veniam ducimus, exercitationem omnis! Modi voluptatibus minima velit veritatis pariatur cupiditate necessitatibus id officiis aliquam praesentium?'),
(3, 7, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias nesciunt aspernatur expedita nam delectus veniam ducimus, exercitationem omnis! Modi voluptatibus minima velit veritatis pariatur cupiditate necessitatibus id officiis aliquam praesentium?');

-- --------------------------------------------------------

--
-- Table structure for table `kelemahan_ansas`
--

CREATE TABLE `kelemahan_ansas` (
  `urutan_kelemahan` int(11) NOT NULL,
  `id_ansas` int(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelemahan_ansas`
--

INSERT INTO `kelemahan_ansas` (`urutan_kelemahan`, `id_ansas`, `isi`) VALUES
(1, 7, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias nesciunt aspernatur expedita nam delectus veniam ducimus, exercitationem omnis! Modi voluptatibus minima velit veritatis pariatur cupiditate necessitatibus id officiis aliquam praesentium?'),
(2, 7, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias nesciunt aspernatur expedita nam delectus veniam ducimus, exercitationem omnis! Modi voluptatibus minima velit veritatis pariatur cupiditate necessitatibus id officiis aliquam praesentium?');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_situasi_ansas`
--

CREATE TABLE `kondisi_situasi_ansas` (
  `urutan_kondisi` int(11) NOT NULL,
  `id_ansas` int(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kondisi_situasi_ansas`
--

INSERT INTO `kondisi_situasi_ansas` (`urutan_kondisi`, `id_ansas`, `isi`) VALUES
(10, 4, 'c dnsc ,d '),
(12, 6, 'fdsf.dsf dsfl sdanf'),
(13, 7, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias nesciunt aspernatur expedita nam delectus veniam ducimus, exercitationem omnis! Modi voluptatibus minima velit veritatis pariatur cupiditate necessitatibus id officiis aliquam praesentium?'),
(14, 7, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias nesciunt aspernatur expedita nam delectus veniam ducimus, exercitationem omnis! Modi voluptatibus minima velit veritatis pariatur cupiditate necessitatibus id officiis aliquam praesentium?');

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
(5, 'Bahwa adanya laporan pengaduan dari ', 2),
(5, 'menimbang spss 2', 3);

-- --------------------------------------------------------

--
-- Table structure for table `menimbang_spt`
--

CREATE TABLE `menimbang_spt` (
  `id_spt` int(100) NOT NULL,
  `isi` text NOT NULL,
  `urutan_menimbang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `op_aktif_ansas`
--

CREATE TABLE `op_aktif_ansas` (
  `urutan_op_aktif` int(11) NOT NULL,
  `id_ansas` int(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `op_aktif_ansas`
--

INSERT INTO `op_aktif_ansas` (`urutan_op_aktif`, `id_ansas`, `isi`) VALUES
(1, 7, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias nesciunt aspernatur expedita nam delectus veniam ducimus, exercitationem omnis! Modi voluptatibus minima velit veritatis pariatur cupiditate necessitatibus id officiis aliquam praesentium?');

-- --------------------------------------------------------

--
-- Table structure for table `op_pasif_ansas`
--

CREATE TABLE `op_pasif_ansas` (
  `urutan_op_pasif` int(100) NOT NULL,
  `id_ansas` int(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `op_pendukung_ansas`
--

CREATE TABLE `op_pendukung_ansas` (
  `urutan_op_pendkung` int(100) NOT NULL,
  `id_ansas` int(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `op_pendukung_ansas`
--

INSERT INTO `op_pendukung_ansas` (`urutan_op_pendkung`, `id_ansas`, `isi`) VALUES
(1, 7, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias nesciunt aspernatur expedita nam delectus veniam ducimus, exercitationem omnis! Modi voluptatibus minima velit veritatis pariatur cupiditate necessitatibus id officiis aliquam praesentium?');

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
-- Table structure for table `pelaksana_tugas_antug`
--

CREATE TABLE `pelaksana_tugas_antug` (
  `urutan_pelaksana_tugas` int(100) NOT NULL,
  `id_antug` int(100) NOT NULL,
  `nip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelaporan_evaluasi_antug`
--

CREATE TABLE `pelaporan_evaluasi_antug` (
  `urutan_pelaporan_evaluasi` int(100) NOT NULL,
  `id_antug` int(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, '987654321', 2),
(3, '12362424652152', 3),
(4, '12362424652152', 4),
(5, '12362424652152', 5);

-- --------------------------------------------------------

--
-- Table structure for table `petugas_spt`
--

CREATE TABLE `petugas_spt` (
  `id_spt` int(100) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `urutan_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, '12312', '12312', '21312', '2021-02-18', 0, 0, '123123', 'sadfadasd', 'sdfsdfsdfsdfsdfdsfds', 'asdaasdaqaaaaaaa', '2021-02-18', '2021-02-28', 'svdsdv'),
(3, '56766', '12312', '2342', '2021-02-18', 0, 0, 'sfsdfsdfsdfsdf', 'sdfsdffdfs', 'sdfsdfsdfsdfsdfdsfds', 'sdfsdfsdfsdsdfsdfsdfsdf', '2021-02-18', '2021-02-28', 'svdsdv'),
(4, '56766', '12312', '2342', '2021-02-18', 0, 0, 'sfsdfsdfsdfsdf', 'sdfsdffdfs', 'sdfsdfsdfsdfsdfdsfds', 'sdfsdfsdfsdsdfsdfsdfsdf', '2021-02-18', '2021-02-28', 'svdsdv'),
(5, '453', '2342', '3545', '2021-02-23', 0, 0, 'sfsdfsdfsdfsdf', 'sdfsdffdfs', 'sdfsdfsdfsdfsdfdsfds', '', '2021-02-23', '2021-02-27', 'Semarang');

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
(4, 'fdfsdfsdfsdfsfds', 2),
(4, 'fdfsdfsdfsdfsfds', 3),
(5, 'Yth. Kepala Kejaksaan Tinggi Jawa Tengah;', 4);

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
-- Indexes for table `kehendak_ansas`
--
ALTER TABLE `kehendak_ansas`
  ADD PRIMARY KEY (`urutan_kehendak`),
  ADD KEY `id_ansas` (`id_ansas`);

--
-- Indexes for table `kekuatan_ansas`
--
ALTER TABLE `kekuatan_ansas`
  ADD PRIMARY KEY (`urutan_kekuatan`),
  ADD KEY `id_ansas` (`id_ansas`);

--
-- Indexes for table `kelemahan_ansas`
--
ALTER TABLE `kelemahan_ansas`
  ADD PRIMARY KEY (`urutan_kelemahan`),
  ADD KEY `id_ansas` (`id_ansas`);

--
-- Indexes for table `kondisi_situasi_ansas`
--
ALTER TABLE `kondisi_situasi_ansas`
  ADD PRIMARY KEY (`urutan_kondisi`),
  ADD KEY `id_ansas` (`id_ansas`);

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
-- Indexes for table `op_aktif_ansas`
--
ALTER TABLE `op_aktif_ansas`
  ADD PRIMARY KEY (`urutan_op_aktif`),
  ADD KEY `id_ansas` (`id_ansas`);

--
-- Indexes for table `op_pasif_ansas`
--
ALTER TABLE `op_pasif_ansas`
  ADD PRIMARY KEY (`urutan_op_pasif`),
  ADD KEY `id_ansas` (`id_ansas`);

--
-- Indexes for table `op_pendukung_ansas`
--
ALTER TABLE `op_pendukung_ansas`
  ADD PRIMARY KEY (`urutan_op_pendkung`),
  ADD KEY `id_ansas` (`id_ansas`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `pelaksana_tugas_antug`
--
ALTER TABLE `pelaksana_tugas_antug`
  ADD PRIMARY KEY (`urutan_pelaksana_tugas`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `id_antug` (`id_antug`);

--
-- Indexes for table `pelaporan_evaluasi_antug`
--
ALTER TABLE `pelaporan_evaluasi_antug`
  ADD PRIMARY KEY (`urutan_pelaporan_evaluasi`),
  ADD KEY `id_antug` (`id_antug`);

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
  MODIFY `id_ansas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `antug`
--
ALTER TABLE `antug`
  MODIFY `id_antug` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kehendak_ansas`
--
ALTER TABLE `kehendak_ansas`
  MODIFY `urutan_kehendak` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kekuatan_ansas`
--
ALTER TABLE `kekuatan_ansas`
  MODIFY `urutan_kekuatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelemahan_ansas`
--
ALTER TABLE `kelemahan_ansas`
  MODIFY `urutan_kelemahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kondisi_situasi_ansas`
--
ALTER TABLE `kondisi_situasi_ansas`
  MODIFY `urutan_kondisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menimbang_spoi`
--
ALTER TABLE `menimbang_spoi`
  MODIFY `urutan_menimbang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menimbang_sppps`
--
ALTER TABLE `menimbang_sppps`
  MODIFY `urutan_menimbang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menimbang_spt`
--
ALTER TABLE `menimbang_spt`
  MODIFY `urutan_menimbang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `op_aktif_ansas`
--
ALTER TABLE `op_aktif_ansas`
  MODIFY `urutan_op_aktif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `op_pasif_ansas`
--
ALTER TABLE `op_pasif_ansas`
  MODIFY `urutan_op_pasif` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `op_pendukung_ansas`
--
ALTER TABLE `op_pendukung_ansas`
  MODIFY `urutan_op_pendkung` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelaksana_tugas_antug`
--
ALTER TABLE `pelaksana_tugas_antug`
  MODIFY `urutan_pelaksana_tugas` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelaporan_evaluasi_antug`
--
ALTER TABLE `pelaporan_evaluasi_antug`
  MODIFY `urutan_pelaporan_evaluasi` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petugas_spoi`
--
ALTER TABLE `petugas_spoi`
  MODIFY `urutan_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `petugas_sppps`
--
ALTER TABLE `petugas_sppps`
  MODIFY `urutan_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `petugas_spt`
--
ALTER TABLE `petugas_spt`
  MODIFY `urutan_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `spoi`
--
ALTER TABLE `spoi`
  MODIFY `id_spoi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sppps`
--
ALTER TABLE `sppps`
  MODIFY `id_sppps` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spt`
--
ALTER TABLE `spt`
  MODIFY `id_spt` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tembusan_spoi`
--
ALTER TABLE `tembusan_spoi`
  MODIFY `urutan_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tembusan_sppps`
--
ALTER TABLE `tembusan_sppps`
  MODIFY `urutan_tembusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tembusan_spt`
--
ALTER TABLE `tembusan_spt`
  MODIFY `urutan_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kehendak_ansas`
--
ALTER TABLE `kehendak_ansas`
  ADD CONSTRAINT `kehendak_ansas_ibfk_1` FOREIGN KEY (`id_ansas`) REFERENCES `ansas` (`id_ansas`);

--
-- Constraints for table `kekuatan_ansas`
--
ALTER TABLE `kekuatan_ansas`
  ADD CONSTRAINT `kekuatan_ansas_ibfk_1` FOREIGN KEY (`id_ansas`) REFERENCES `ansas` (`id_ansas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelemahan_ansas`
--
ALTER TABLE `kelemahan_ansas`
  ADD CONSTRAINT `kelemahan_ansas_ibfk_1` FOREIGN KEY (`id_ansas`) REFERENCES `ansas` (`id_ansas`);

--
-- Constraints for table `kondisi_situasi_ansas`
--
ALTER TABLE `kondisi_situasi_ansas`
  ADD CONSTRAINT `kondisi_situasi_ansas_ibfk_1` FOREIGN KEY (`id_ansas`) REFERENCES `ansas` (`id_ansas`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `op_aktif_ansas`
--
ALTER TABLE `op_aktif_ansas`
  ADD CONSTRAINT `op_aktif_ansas_ibfk_1` FOREIGN KEY (`id_ansas`) REFERENCES `ansas` (`id_ansas`);

--
-- Constraints for table `op_pasif_ansas`
--
ALTER TABLE `op_pasif_ansas`
  ADD CONSTRAINT `op_pasif_ansas_ibfk_1` FOREIGN KEY (`id_ansas`) REFERENCES `ansas` (`id_ansas`);

--
-- Constraints for table `op_pendukung_ansas`
--
ALTER TABLE `op_pendukung_ansas`
  ADD CONSTRAINT `op_pendukung_ansas_ibfk_1` FOREIGN KEY (`id_ansas`) REFERENCES `ansas` (`id_ansas`);

--
-- Constraints for table `pelaksana_tugas_antug`
--
ALTER TABLE `pelaksana_tugas_antug`
  ADD CONSTRAINT `pelaksana_tugas_antug_ibfk_1` FOREIGN KEY (`id_antug`) REFERENCES `antug` (`id_antug`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelaksana_tugas_antug_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

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
