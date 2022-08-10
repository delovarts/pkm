-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2022 pada 05.27
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id` int(5) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`id`, `username`, `password`) VALUES
(1, 'puskesmas', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kunjungan`
--

CREATE TABLE `tb_kunjungan` (
  `id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `index` varchar(30) NOT NULL,
  `ket` enum('ADA','BUAT BARU') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE `tb_member` (
  `id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_kk` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `indeks` varchar(20) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jender` enum('laki','perempuan') NOT NULL,
  `umur` varchar(10) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `asuransi` varchar(20) NOT NULL,
  `kunjungan` enum('umum','jknpbi','jknnonpbi','program') NOT NULL,
  `poli` enum('bp','kia','gigi','dll') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_member`
--

INSERT INTO `tb_member` (`id`, `tanggal`, `nama_kk`, `alamat`, `indeks`, `nama_pasien`, `jender`, `umur`, `nik`, `asuransi`, `kunjungan`, `poli`) VALUES
(91, '2022-06-19', 'Tn. A', 'Asembagus', '12345', 'An. B', 'laki', '12', '1234567', '1234567', 'umum', 'kia'),
(92, '2022-06-02', 'Ny. C', 'Bali', '23489', 'Nn. A', 'perempuan', '12', '1234567', '1234567', 'program', 'kia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_retensi`
--

CREATE TABLE `tb_retensi` (
  `id` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_kk` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `indeks` varchar(20) NOT NULL,
  `nama_pasien` varchar(20) NOT NULL,
  `jender` enum('laki','perempuan') NOT NULL,
  `umur` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `asuransi` varchar(20) NOT NULL,
  `kunjungan` set('umum','jknpbi','jknnonpbi','program') NOT NULL,
  `poli` set('bp','kia','gigi','dll') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_retensi`
--

INSERT INTO `tb_retensi` (`id`, `tanggal`, `nama_kk`, `alamat`, `indeks`, `nama_pasien`, `jender`, `umur`, `nik`, `asuransi`, `kunjungan`, `poli`) VALUES
(95, '2022-06-16', 'Tn. V', 'Wringin', '12475', 'Nn. B', 'perempuan', '14', '1234567', '1234567', 'jknnonpbi', 'kia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_retensi`
--
ALTER TABLE `tb_retensi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT untuk tabel `tb_retensi`
--
ALTER TABLE `tb_retensi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
