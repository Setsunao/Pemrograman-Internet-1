-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Nov 2020 pada 15.06
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_databuku`
--

CREATE TABLE `tbl_databuku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `kategori_buku` enum('Komik','Novel','Anatologi','Biografi','Ensiklopedia','Karya Ilmiah','Sejarah') NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_databuku`
--

INSERT INTO `tbl_databuku` (`id_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`, `kategori_buku`, `stock`) VALUES
(1, 'Muhammad Al Fatih 1953', 'Felix Y. Siauw', 'Alfatih Press', 2013, 'Sejarah', 29),
(2, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005, 'Novel', 9),
(12, 'Sang Pemimpi', 'Andrea Hirata', 'Bentang Pustaka', 2006, 'Novel', 14),
(13, 'Bohong di Dunia', 'Hamka', 'Tidak DIketahui', 1952, 'Ensiklopedia', 9),
(14, '5 cm', 'Donny Dhirgantoro', 'Grasindo', 2012, 'Novel', 17),
(15, 'The Pragmatic Programmer', 'Andy Hunt & Dave Thomas', 'Tidak DIketahui', 1999, 'Ensiklopedia', 23),
(16, 'Code Complete', 'Steve McConnell', 'Tidak DIketahui', 1993, 'Ensiklopedia', 22),
(17, 'Clean Code', 'Robert Cecil Martin', 'Tidak DIketahui', 2008, 'Ensiklopedia', 6),
(18, 'The History of Java', 'Thomas Stamford Raffles', 'Tidak DIketahui', 1950, 'Sejarah', 3),
(19, 'Bangkit dan Runtuhnya Andalusia', 'Raghib As-Sirjani', 'Historis Press', 2013, 'Sejarah', 7),
(20, 'Habibie & Ainun', 'B. J. Habibie', 'PT THC Mandiri', 2010, 'Biografi', 26),
(21, 'Kimetsu No Yaiba', 'Koyoharu GotÅge', 'VIZ Media', 2019, 'Komik', 99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_databuku`
--
ALTER TABLE `tbl_databuku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_databuku`
--
ALTER TABLE `tbl_databuku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
