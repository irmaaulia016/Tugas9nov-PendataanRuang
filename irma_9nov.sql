-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2022 pada 07.55
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `irma_9nov`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendataan`
--

CREATE TABLE `tb_pendataan` (
  `id` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis` enum('laboratorium','kantin','ruangkelas','musola','aula') NOT NULL,
  `kondisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pendataan`
--

INSERT INTO `tb_pendataan` (`id`, `nama`, `jenis`, `kondisi`) VALUES
(5, 'siti', 'kantin', 'kotor'),
(6, 'siti nur', 'kantin', 'tidak baik'),
(7, 'IRMA', 'laboratorium', 'kotor');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pendataan`
--
ALTER TABLE `tb_pendataan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pendataan`
--
ALTER TABLE `tb_pendataan`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
