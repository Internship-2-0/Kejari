-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Feb 2021 pada 03.50
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menimbang_spt`
--

CREATE TABLE `menimbang_spt` (
  `id_spt` int(100) NOT NULL,
  `isi` text NOT NULL,
  `urutan_menimbang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menimbang_spt`
--

INSERT INTO `menimbang_spt` (`id_spt`, `isi`, `urutan_menimbang`) VALUES
(18, 'menimbang 1', 6),
(18, 'menimbang 2', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `pangkat`, `jabatan`) VALUES
('12362424652152', 'SOEYANTO SESEREHE', 'CEO', 'Kepala CEO'),
('', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas_spt`
--

CREATE TABLE `petugas_spt` (
  `id_spt` int(100) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `urutan_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas_spt`
--

INSERT INTO `petugas_spt` (`id_spt`, `nip`, `urutan_petugas`) VALUES
(18, '12362424652152', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spt`
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
-- Dumping data untuk tabel `spt`
--

INSERT INTO `spt` (`id_spt`, `nomor_surat`, `kode_pejabat`, `kode_masalah`, `penerbitan`, `bulan`, `tahun`, `dasar_1`, `dasar_2`, `untuk_1`, `untuk_2`, `mulai`, `selesai`, `tempat`) VALUES
(18, '23', '34sfs', '34tg', '2021-02-04', 0, 0, 'dasar 1', 'dasar 2', 'untuk 1', 'untuk 2', '2021-02-11', '2021-02-18', 'Semarang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tembusan_spt`
--

CREATE TABLE `tembusan_spt` (
  `id_spt` int(100) NOT NULL,
  `isi` text NOT NULL,
  `urutan_isi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tembusan_spt`
--

INSERT INTO `tembusan_spt` (`id_spt`, `isi`, `urutan_isi`) VALUES
(18, 'tembusan 1', 6);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `menimbang_spt`
--
ALTER TABLE `menimbang_spt`
  ADD PRIMARY KEY (`urutan_menimbang`),
  ADD KEY `id_spt` (`id_spt`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `petugas_spt`
--
ALTER TABLE `petugas_spt`
  ADD PRIMARY KEY (`urutan_petugas`) USING BTREE,
  ADD KEY `id_spt` (`id_spt`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `spt`
--
ALTER TABLE `spt`
  ADD PRIMARY KEY (`id_spt`);

--
-- Indeks untuk tabel `tembusan_spt`
--
ALTER TABLE `tembusan_spt`
  ADD PRIMARY KEY (`urutan_isi`) USING BTREE,
  ADD KEY `id_spt` (`id_spt`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menimbang_spt`
--
ALTER TABLE `menimbang_spt`
  MODIFY `urutan_menimbang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `petugas_spt`
--
ALTER TABLE `petugas_spt`
  MODIFY `urutan_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `spt`
--
ALTER TABLE `spt`
  MODIFY `id_spt` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tembusan_spt`
--
ALTER TABLE `tembusan_spt`
  MODIFY `urutan_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `menimbang_spt`
--
ALTER TABLE `menimbang_spt`
  ADD CONSTRAINT `menimbang_spt_ibfk_1` FOREIGN KEY (`id_spt`) REFERENCES `spt` (`id_spt`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `petugas_spt`
--
ALTER TABLE `petugas_spt`
  ADD CONSTRAINT `petugas_spt_ibfk_1` FOREIGN KEY (`id_spt`) REFERENCES `spt` (`id_spt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `petugas_spt_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tembusan_spt`
--
ALTER TABLE `tembusan_spt`
  ADD CONSTRAINT `tembusan_spt_ibfk_1` FOREIGN KEY (`id_spt`) REFERENCES `spt` (`id_spt`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
