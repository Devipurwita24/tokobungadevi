-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2020 pada 18.04
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobunga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bunga`
--

CREATE TABLE `bunga` (
  `nama_bunga` varchar(50) NOT NULL,
  `warna_kertas` varchar(50) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `no_telp` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bunga`
--

INSERT INTO `bunga` (`nama_bunga`, `warna_kertas`, `jumlah`, `no_telp`) VALUES
('mawar', 'pinkk', 3, 33535),
('bunga lili', 'pink', 4, 98765),
('liliun', 'pink', 1, 987600),
('tulip', 'hitam', 9, 44444444);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `pass`) VALUES
('diah', 'hmm'),
('diah', 'hmm'),
('diah', ''),
('diah', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE `stok` (
  `bunga` int(100) NOT NULL,
  `kertas_bunga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok`
--

INSERT INTO `stok` (`bunga`, `kertas_bunga`) VALUES
(100, 100);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bunga`
--
ALTER TABLE `bunga`
  ADD PRIMARY KEY (`no_telp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
