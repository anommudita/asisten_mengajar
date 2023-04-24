-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2023 pada 11.00
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asistenmengajar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `prodi` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `keahlian` varchar(128) NOT NULL,
  `sosmed` varchar(128) NOT NULL,
  `guru_pamong` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id`, `nim`, `name`, `prodi`, `jabatan`, `keahlian`, `sosmed`, `guru_pamong`, `gambar`) VALUES
(35, 2015051085, 'Putri Eodytha  Aisya Purnomo', 'PTI', 'Kordinator Sekolah', 'Multimedia', '@hydea', 'I Komang Suka Wibawa', '89_KPM_Bro!!1.png'),
(36, 2015051038, 'Ida Bagus Anom Mudita', 'PTI', 'Anggota', 'Rekayasa Perangkat Lunak', '@anommudita', 'Dhruvayoti Tirthesvhara, S. Kom.', 'Ida_Bagus_Anom_Mudita.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
