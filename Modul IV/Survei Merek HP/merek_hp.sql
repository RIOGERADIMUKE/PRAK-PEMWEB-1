-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2021 pada 08.27
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merek_hp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `jenis_hp` varchar(20) DEFAULT NULL,
  `id` int(20) NOT NULL,
  `tahun` date DEFAULT NULL,
  `harga` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`jenis_hp`, `id`, `tahun`, `harga`) VALUES
('SAMSUNG', 1, '2021-04-30', 100000),
('OPPO ', 2, '2021-04-30', 50000),
('IPHONE', 3, '2021-04-30', 100000),
('POCOPHONE ', 4, '2021-04-30', 150000),
('XIAOMI', 5, '2021-04-30', 80000),
('VIVO', 6, '2021-04-30', 100000),
('REALME', 7, '2021-04-30', 90000),
('HUAWEI', 8, '2021-04-30', 80000),
('GARMIN', 9, '2021-04-30', 100000),
('NEXIAN', 10, '2021-04-30', 100000),
('GIONEE', 11, '2021-04-30', 100000),
('SAMSUNG', 12, '2021-04-30', 100000),
('VIVO', 13, '2021-04-30', 10000),
('ADVAN', 14, '2021-04-30', 80000),
('REALME', 15, '2021-04-30', 120000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
