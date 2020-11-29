-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 23 Nov 2020 pada 00.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hezi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gaji`
--

CREATE TABLE `tbl_gaji` (
  `id_gaji` int(11) NOT NULL,
  `id_karyawan` int(5) NOT NULL,
  `gaji_pokok` int(15) NOT NULL,
  `bpjs_kt` int(15) NOT NULL,
  `bpjs_ks` int(15) NOT NULL,
  `atribut` int(15) NOT NULL,
  `thr` int(15) NOT NULL,
  `pp` int(15) NOT NULL,
  `lembur` int(15) NOT NULL,
  `p_bpjsks` int(15) NOT NULL,
  `p_bpjskt` int(15) NOT NULL,
  `tgl_byr_gaji` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_gaji`
--

INSERT INTO `tbl_gaji` (`id_gaji`, `id_karyawan`, `gaji_pokok`, `bpjs_kt`, `bpjs_ks`, `atribut`, `thr`, `pp`, `lembur`, `p_bpjsks`, `p_bpjskt`, `tgl_byr_gaji`) VALUES
(1, 8, 1231322, 1312312, 1231231, 123123213, 21312, 12312, 213213, 231231, 123123, '2020-11-04'),
(2, 3, 13123, 312312, 12321, 2312, 1231312, 213123, 213123, 312312, 12312, '2020-11-18'),
(3, 9, 1231322, 34324, 324324, 324324, 32432, 34324, 324234, 354324324, 34324, '2020-11-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tahun_mulai` varchar(50) NOT NULL,
  `area` varchar(100) NOT NULL,
  `norek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `nama`, `jabatan`, `tahun_mulai`, `area`, `norek`) VALUES
(3, 'Wawan Vx', 'babu', '221222', 'Jakabaring vav', '13239128123'),
(8, 'Ikhlasul Amal', '2', '221222', 'Jakabaring', '13239128'),
(9, 'Hezi', '2', 'Juni 2018', 'Jakabaring', '324532432432');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `id_karyawan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` int(1) NOT NULL COMMENT '0 = admin,\r\n1 = pimpinan,\r\n2 = karyawan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_karyawan`, `email`, `password`, `level`) VALUES
(1, '8', 'amal@gmail.com', '12345', 0),
(7, '2', 'ikhlasul0507@gmail.com', '12', 2),
(10, '9', 'hezi@gmai.com', '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indeks untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
