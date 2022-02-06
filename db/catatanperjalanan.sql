-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Feb 2022 pada 20.18
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catatanperjalanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', '$2y$10$lWacQiWcjFjFjuqANZPGzu4VxrwGqwJiBQf9yHQbtNxlZ7bq92dgG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_perjalanan`
--

CREATE TABLE `catatan_perjalanan` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `jam` varchar(200) NOT NULL,
  `suhu_tubuh` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `catatan_perjalanan`
--

INSERT INTO `catatan_perjalanan` (`id`, `lokasi`, `jam`, `suhu_tubuh`, `tanggal`, `id_user`) VALUES
(1, 'Madasari', '10:05', 23, '2022-02-05', 1),
(2, 'Sindangkerta', '19:08', 23, '2022-02-07', 1),
(3, 'Karang Taulan', '17:10', 23, '2022-02-02', 1),
(4, 'Sekolah', '12:14', 25, '2022-02-06', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `ttl` date NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `bio` text NOT NULL,
  `umur` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL DEFAULT 'default.png',
  `status_vaksinasi` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nik`, `nama`, `email`, `alamat`, `ttl`, `jeniskelamin`, `bio`, `umur`, `gambar`, `status_vaksinasi`) VALUES
(1, '3206034812010001', 'Alfiani Fitria Kusnadi', 'alfiani.fk@gmail.com', 'Tasikmalaya', '2001-12-08', 'Perempuan', 'Hi', '20', 'default.png', 1),
(3, '3206032608110002', 'AlfanFabian', 'alfan.fabian@gmail.com', 'Tasikmalaya', '2011-08-26', 'Laki-laki', 'Heyooo', '10', 'default.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `catatan_perjalanan`
--
ALTER TABLE `catatan_perjalanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `catatan_perjalanan`
--
ALTER TABLE `catatan_perjalanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
