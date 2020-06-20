-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2020 pada 08.49
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu-login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `rule_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `gambar`, `password`, `rule_id`, `is_active`, `date_create`) VALUES
(7, 'Mulyono aja', 'yono.ok@gmail.com', 'default.jpg', '$2y$10$82fDBc9DTiJFLSmDmVjeeuF/5zECd9SPTRAlFl2nn.6gEMLeqFhLy', 2, 1, 1591247810),
(23, 'joko', 'miha.mulyono@gmail.com', 'default.jpg', '$2y$10$NFaAu.QSUrG1Djh6mJXw1.DdOSKbwz6zvfMGE7lYMlklzjXcNPIbC', 2, 0, 1591524798),
(24, 'joko', 'miha.ddd@gmail.com', 'default.jpg', '$2y$10$nrPAcMiWHkZoKxlGpPQF1OJVSm86iEvDDp.Nsznh96M/3RXgSUdwi', 2, 0, 1591527586),
(25, 'joko', 'miha.mulyoo@gmail.com', 'default.jpg', '$2y$10$40460JfDjQITTusPXXGjeeXVx8bwImFgRcJra7Yqnh2UQ.snZ6KG6', 2, 0, 1591527632),
(26, 'joko', 'miha.myoo@gmail.com', 'default.jpg', '$2y$10$0qMTEyF5X5KxlvcOB/vZ1e8qwrYF.AddArWwphxIHHCIkVxW6LNi2', 2, 0, 1591527702),
(27, 'joko', 'miha.moo@gmail.com', 'default.jpg', '$2y$10$kDCtcSkdqeqD/BtyOH2sPu7AbmOaSv7CULVSFJ66X7FahjIxNtdaq', 2, 0, 1591527829),
(28, 'joko', 'miha.oo@gmail.com', 'default.jpg', '$2y$10$xy/fOAlIvD8OvcDIEfXpx.hWwp.ckivctKhsMC.AsCZwI/oRIDJ7a', 2, 0, 1591527880);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `rule_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `rule_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'menu'),
(4, 'profil'),
(5, 'test'),
(6, 'tes2'),
(7, 'ok'),
(8, 'xx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_rule`
--

CREATE TABLE `user_rule` (
  `id` int(11) NOT NULL,
  `rule` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_rule`
--

INSERT INTO `user_rule` (`id`, `rule`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user-alt', 1),
(3, 2, 'Edit Profile', 'edit/profile', 'fas fa-fw fa-user-alt', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_create`) VALUES
(7, 'miha.mulyono@gmail.com', 'q5UEtefpm8a3f0IeGRFaBJsNdfliltXL1tK7YX834lc=', 1591524798),
(8, 'miha.ddd@gmail.com', 'Kovna8kE3Nlb0UaLtxKuAIrxgm8mJv+C7mnOhl95ePQ=', 1591527586),
(9, 'miha.mulyoo@gmail.com', 'dl2UY/YgkFpqF6WdyQFOgQRD1JKP02+zLL78OR6mLP0=', 1591527632),
(10, 'miha.myoo@gmail.com', 'wTAJwpsOWiJFmPgL/iHIaYHrbRwUJ3pp4bgYCUFp/eU=', 1591527702),
(11, 'miha.moo@gmail.com', '/uowbd6ajQI8H75FCblaSgpVyTIN6eMv8OWVvdqtG7I=', 1591527829),
(12, 'miha.oo@gmail.com', 'EmwiWktZa/Do3bnC0ngkHtnDYTwDi/R6aCW3aIjxu7I=', 1591527880);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_rule`
--
ALTER TABLE `user_rule`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_rule`
--
ALTER TABLE `user_rule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
