-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2023 pada 12.56
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `jeniskelamin` varchar(31) NOT NULL,
  `tanggallahir` date NOT NULL,
  `umur` int(5) NOT NULL,
  `alamat` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `jurusan`, `email`, `password`, `jeniskelamin`, `tanggallahir`, `umur`, `alamat`) VALUES
(33, 'Lolll', 'accountant', 'ice@gmail.com', 'sd fk vks vk', 'male', '2023-11-02', 0, 'Batu Aji'),
(34, 'Dannly', 'software_engineering', 'dannz@gmail.com', 'mkdmkldmklv', 'male', '2023-11-01', 0, 'Nagoya'),
(35, 'Darrell', 'software_engineering', 'darrellgta@gmail.com', 'dlknlkvnsfkl', 'male', '2007-05-14', 16, 'Nagoya'),
(39, 'Darrell Adithson', 'accountant', 'darrellgta@gmail.com', 'nklnklnklnklnklnklnklnklnkl', 'male', '2023-11-05', 0, 'Nias'),
(40, 'Sasa', 'accountant', 'darrellgta@gmail.com', ' vvcnvc', 'male', '2023-11-06', 0, 'Batam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nama`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
