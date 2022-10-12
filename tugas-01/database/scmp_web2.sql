-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2022 pada 17.08
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scmp_web2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenjang`
--

CREATE TABLE `jenjang` (
  `kode` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenjang`
--

INSERT INTO `jenjang` (`kode`, `nama`) VALUES
('D1', 'diploma 1'),
('D2', 'diploma 2'),
('D3', 'diploma 3'),
('S1', 'sarjana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `kode` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`kode`, `nama`) VALUES
('SI', 'sistem informasi'),
('TI', 'teknik informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('l','p') NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `kode_jenjang` varchar(5) NOT NULL,
  `kode_jurusan` varchar(5) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jenis_kelamin`, `email`, `no_telp`, `kode_jenjang`, `kode_jurusan`, `id_pekerjaan`) VALUES
('2019010012', 'fajar fadilah', 'l', 'fajarfadilah@gmail.com', '081375755814', 'S1', 'SI', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nama`) VALUES
(1, 'belum/tidak bekerja'),
(2, 'mengurus rumah tangga'),
(3, 'pelajar/mahasiswa'),
(4, 'pensiunan'),
(5, 'pegawai negeri sipil'),
(6, 'tentara nasional indonesia'),
(7, 'kepolisian ri'),
(8, 'perdagangan'),
(9, 'petani/pekebun'),
(10, 'peternak'),
(11, 'nelayan/perikanan'),
(12, 'industri'),
(13, 'konstruksi'),
(14, 'transportasi'),
(15, 'karyawan swasta'),
(16, 'karyawan bumn'),
(17, 'karyawan bumd'),
(18, 'karyawan honorer'),
(19, 'buruh harian lepas'),
(20, 'buruh tani/perkebunan'),
(21, 'buruh nelayan/perikanan'),
(22, 'buruh peternakan'),
(23, 'pembantu rumah tangga'),
(24, 'tukang cukur'),
(25, 'tukang listrik'),
(26, 'tukang batu'),
(27, 'tukang kayu'),
(28, 'tukang sol sepatu'),
(29, 'tukang las/pandai besi'),
(30, 'tukang jahit'),
(31, 'tukang gigi'),
(32, 'penata rias'),
(33, 'penata busana'),
(34, 'penata rambut'),
(35, 'mekanik'),
(36, 'seniman'),
(37, 'tabib'),
(38, 'paraji'),
(39, 'perancang busana'),
(40, 'penterjemah'),
(41, 'imam mesjid'),
(42, 'pendeta'),
(43, 'pastor'),
(44, 'wartawan'),
(45, 'ustadz/mubaligh'),
(46, 'juru masak'),
(47, 'promotor acara'),
(48, 'anggota dpr-ri'),
(49, 'anggota dpd'),
(50, 'anggota bpk'),
(51, 'presiden'),
(52, 'wakil presiden'),
(53, 'anggota mahkamah konstitusi'),
(54, 'anggota kabinet/kementerian'),
(55, 'duta besar'),
(56, 'gubernur'),
(57, 'wakil gubernur'),
(58, 'bupati'),
(59, 'wakil bupati'),
(60, 'walikota'),
(61, 'wakil walikota'),
(62, 'anggota dprd provinsi'),
(63, 'anggota dprd kabupaten/kota'),
(64, 'dosen'),
(65, 'guru'),
(66, 'pilot'),
(67, 'pengacara'),
(68, 'notaris'),
(69, 'arsitek'),
(70, 'akuntan'),
(71, 'konsultan'),
(72, 'dokter'),
(73, 'bidan'),
(74, 'perawat'),
(75, 'apoteker'),
(76, 'psikiater/psikolog'),
(77, 'penyiar televisi'),
(78, 'penyiar radio'),
(79, 'pelaut'),
(80, 'peneliti'),
(81, 'sopir'),
(82, 'pialang'),
(83, 'paranormal'),
(84, 'pedagang'),
(85, 'perangkat desa'),
(86, 'kepala desa'),
(87, 'biarawati'),
(88, 'wiraswasta'),
(89, 'lainnya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `fk_mahasiawa_jurusan` (`kode_jurusan`),
  ADD KEY `fk_mahasiawa_jenjang` (`kode_jenjang`),
  ADD KEY `fk_mahasiawa_pekerjaan` (`id_pekerjaan`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fk_mahasiawa_jenjang` FOREIGN KEY (`kode_jenjang`) REFERENCES `jenjang` (`kode`),
  ADD CONSTRAINT `fk_mahasiawa_jurusan` FOREIGN KEY (`kode_jurusan`) REFERENCES `jurusan` (`kode`),
  ADD CONSTRAINT `fk_mahasiawa_pekerjaan` FOREIGN KEY (`id_pekerjaan`) REFERENCES `pekerjaan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
