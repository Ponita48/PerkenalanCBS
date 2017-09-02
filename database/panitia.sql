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
-- Struktur dari tabel `panitia`
--

CREATE TABLE `panitia` (
  `id_panitia` int(11) NOT NULL,
  `npm` char(12) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `tahun_jabatan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `panitia`
--

INSERT INTO `panitia` (`id_panitia`, `npm`, `jabatan`, `tahun_jabatan`) VALUES
(1, '140810150001', 'PO', 2017),
(2, '140810160026', 'Sekretaris', 2017),
(3, '140810160008', 'Bendahara', 2017),
(4, '140810150040', 'Kabid1', 2017),
(5, '140810150057', 'Kabid2', 2017),
(6, '140810160007', 'Kabid3', 2017),
(7, '140810160009', 'Kadiv_Humas', 2017),
(8, '140810160048', 'Kadiv_Acara', 2017),
(9, '140810150061', 'Kadiv_PK', 2017),
(10, '140810150058', 'Kadiv_Medik', 2017),
(11, '140810160028', 'Kadiv_Akademik', 2017),
(12, '140810150027', 'Kadiv_Komdis', 2017),
(13, '140810150035', 'Kadiv_Rohani', 2017),
(14, '140810160023', 'Kadiv_Logistik', 2017),
(15, '140810150063', 'Kadiv_Dankom', 2017),
(16, '140810150013', 'Kadiv_Pubdok', 2017);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`id_panitia`),
  ADD KEY `npm` (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id_panitia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `panitia`
--
ALTER TABLE `panitia`
  ADD CONSTRAINT `panitia_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `users` (`npm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
