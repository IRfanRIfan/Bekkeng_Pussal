-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2023 pada 02.51
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lap_futsal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `nama` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `password`, `nama`) VALUES
('Irfan03', 'fan03', 'Muh Irfan'),
('Ghzzz', '321', 'Ghazali'),
('Gali123', 'qwert', 'Ghzali'),
('kontol123', '123', 'ahmad ghazali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapangan_futsal`
--

CREATE TABLE `lapangan_futsal` (
  `foto` varchar(255) DEFAULT NULL,
  `nama_lapangan` varchar(255) NOT NULL,
  `alamat` text DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `jmlLap` int(1) NOT NULL,
  `jamBuka` int(11) NOT NULL,
  `jamTutup` int(11) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama`, `jmlLap`, `jamBuka`, `jamTutup`, `password`) VALUES
(1, 'eFutsal :)', 2, 6, 2, '$2y$10$/7CZQxwJU7m55KiffM0xteK04XIvSOKZfTSfYXlu9x7hHUkeAij3a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` int(2) NOT NULL,
  `lapangan` int(1) NOT NULL,
  `bayar` int(11) NOT NULL,
  `selesai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `tanggal`, `jam`, `lapangan`, `bayar`, `selesai`) VALUES
(2, 'anji', '2022-01-14', 9, 2, 20000, 0),
(3, 'nia', '2022-01-11', 10, 1, 50000, 0),
(4, 'jaka', '2022-01-16', 15, 1, 20000, 0),
(5, 'edi', '2022-01-13', 18, 2, 30000, 0),
(6, 'adi', '2022-01-14', 21, 1, 20000, 0),
(7, 'Roni', '2022-01-16', 15, 2, 20000, 0),
(8, 'Andi', '2022-01-12', 10, 1, 50000, 1),
(9, 'Asiz', '2022-01-12', 10, 2, 50000, 1),
(10, 'Abdul', '2022-01-12', 11, 2, 50000, 1),
(11, 'jono', '2022-01-12', 15, 2, 50000, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lapangan_futsal`
--
ALTER TABLE `lapangan_futsal`
  ADD PRIMARY KEY (`nama_lapangan`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
