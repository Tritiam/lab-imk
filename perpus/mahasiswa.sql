-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
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
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jurusan`, `fakultas`) VALUES
(19140553, 'Anitra Siagian', 'Agroekoteknologi', 'Fakultas Pertanian'),
(191402003, 'Denaya Pramudya', 'Teknologi Informasi', 'Fasilkom-TI'),
(191402006, 'Jogiana Simangunsong', 'Teknologi Informasi', 'Fasilkom-TI'),
(191402007, 'Emyranda Samosir', 'Keperawatan', 'Fakultas Keperawatan'),
(191402015, 'Nanda Amelia', 'Teknologi Informasi', 'Fasilkom-TI'),
(191402022, 'Godblessus Simaremare', 'Teknologi Informasi', 'Fasilkom-TI'),
(191402024, 'Indah Nainggolan', 'Teknologi Informasi', 'Fasilkom-TI'),
(191402048, 'Tritia Mutiara', 'Teknologi Informasi', 'Fasilkom-TI'),
(193748234, 'Petua Sianipar', 'Teknologi Pangan', 'Pertanian'),
(1814020068, 'Murni Angelina', 'Teknologi Informasi', 'Fasilkom-TI'),
(2014020700, 'Dinda Afifiah', 'Kedokteran ', 'Fakultas Kedokteran'),
(2147483647, 'Naomi Sianipar', 'Kedokteran gigi', 'FKG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
