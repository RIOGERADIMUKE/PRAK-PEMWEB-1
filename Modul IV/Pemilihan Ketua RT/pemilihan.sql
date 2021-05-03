-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2021 pada 08.26
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
-- Database: `pemilihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `suara`
--

CREATE TABLE `suara` (
  `ID` int(20) NOT NULL,
  `NAMA` varchar(20) DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL,
  `PILIHAN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suara`
--

INSERT INTO `suara` (`ID`, `NAMA`, `TANGGAL`, `PILIHAN`) VALUES
(1, 'RIO', '2021-05-03', 'UDIN'),
(2, 'KEVIN', '2021-05-03', 'TORIN'),
(3, 'KEJER', '2021-05-03', 'KASTO'),
(4, 'SOSO', '2021-05-03', 'UDIN'),
(5, 'KARUN', '2021-05-03', 'UDIN'),
(6, 'KAMPUR', '2021-05-03', 'UDIN'),
(7, 'KOKOR', '2021-05-03', 'UDIN'),
(8, 'ASLUN', '2021-05-03', 'JONO'),
(9, 'KASAM', '2021-05-03', 'JONO'),
(10, 'KUKUR', '2021-05-03', 'TORIN'),
(11, 'ASEP', '2021-05-03', 'TORIN'),
(12, 'ROIR', '2021-05-03', 'JONO'),
(13, 'AMAY', '2021-05-03', 'TORIN'),
(14, 'KADAPUY', '2021-05-03', 'KASTO'),
(15, 'SAMSUDIN', '2021-05-03', 'UDIN');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `suara`
--
ALTER TABLE `suara`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
