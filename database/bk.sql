-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Sep 2017 pada 16.07
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perkenalan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bk`
--

CREATE TABLE `bk` (
  `id_bk` int(11) NOT NULL,
  `npm` char(12) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `lembaga` varchar(20) DEFAULT NULL,
  `tahun_jabatan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bk`
--

INSERT INTO `bk` (`id_bk`, `npm`, `jabatan`, `lembaga`, `tahun_jabatan`) VALUES
(1, '140810150072', 'Ketua', 'BE', 2017),
(2, '140810150022', 'Wakil_Ketua', 'BE', 2017),
(3, '140810150067', 'Kadep_ADK', 'BE', 2017),
(4, '140810150020', 'Kadep_Keuangan', 'BE', 2017),
(5, '140810150059', 'Kadep_Kaderisasi', 'BE', 2017),
(6, '140810150040', 'Kadep_PO', 'BE', 2017),
(7, '140810150004', 'Kadep_Hubin', 'BE', 2017),
(8, '140810150018', 'Kadep_Hubeks', 'BE', 2017),
(9, '140810150058', 'Kadep_Litbang', 'BE', 2017),
(10, '140810150013', 'Kadep_Medinfo', 'BE', 2017),
(11, '140810150010', 'Kadep_Kewirausahaan', 'BE', 2017),
(12, '140810150007', 'Kadep_Agama', 'BE', 2017),
(13, '140810150016', 'Kadep_Keprofesian', 'BE', 2017),
(14, '140810150057', 'Kadep_Miba', 'BE', 2017),
(15, '140810150070', 'Ketua', 'DPA', 2017),
(16, '140810150009', 'Sekretaris', 'DPA', 2017),
(17, '140810160020', 'Bendahara', 'DPA', 2017),
(18, '140810150068', 'Kakom1', 'DPA', 2017),
(19, '140810150053', 'Kakom2', 'DPA', 2017),
(20, '140810160044', 'Kakom3', 'DPA', 2017),
(21, '140810160056', 'Presidium1', 'Mubes', 2017),
(22, '140810150003', 'Presidium2', 'Mubes', 2017),
(23, '140810140047', 'Presidium3', 'Mubes', 2017);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bk`
--
ALTER TABLE `bk`
  ADD PRIMARY KEY (`id_bk`),
  ADD KEY `npm` (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bk`
--
ALTER TABLE `bk`
  MODIFY `id_bk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bk`
--
ALTER TABLE `bk`
  ADD CONSTRAINT `bk_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `users` (`npm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
