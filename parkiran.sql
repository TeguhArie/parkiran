-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2023 pada 01.52
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkiran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_parkir`
--

CREATE TABLE `tb_parkir` (
  `id` int(255) NOT NULL,
  `nama` varchar(234) NOT NULL,
  `nomor_telepon` char(70) NOT NULL,
  `tipe_kendaraan` char(60) NOT NULL,
  `waktu` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_parkir`
--

INSERT INTO `tb_parkir` (`id`, `nama`, `nomor_telepon`, `tipe_kendaraan`, `waktu`) VALUES
(54, 'satria', '083874802114', 'motor', '2023-10-29 14:54:00.000000'),
(55, 'sadam', '0089897870', 'motor', '2023-10-27 20:59:00.000000'),
(57, 'dddfsh h', '083874802114', 'mobil', '2023-10-28 12:58:00.000000'),
(58, 'Babeh Nurmen', '6783456787656456778', 'Mobil Lamborghini', '2023-10-30 11:02:00.000000'),
(59, 'sadam', '45567765', 'mobil', '2023-10-28 21:07:00.000000'),
(60, 'nurman', '45567765', 'mobil', '2023-10-28 21:07:00.000000'),
(61, 'kaffah', '45567765', 'mobil', '2023-10-28 21:09:00.000000'),
(62, 'hazel', '45567765', 'mobil', '2023-10-28 21:07:00.000000'),
(71, 'rifad', '12345678912345', 'becak pasar', '2023-10-31 12:10:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_parkir`
--
ALTER TABLE `tb_parkir`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_parkir`
--
ALTER TABLE `tb_parkir`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
