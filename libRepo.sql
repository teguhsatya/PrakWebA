-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 28 Bulan Mei 2020 pada 14.55
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libRepo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `bId` int(10) NOT NULL,
  `bTit` varchar(255) NOT NULL,
  `bAuth` varchar(255) NOT NULL,
  `bPub` varchar(255) NOT NULL,
  `bGen` int(10) NOT NULL,
  `bStc` int(10) NOT NULL,
  `bStat` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`bId`, `bTit`, `bAuth`, `bPub`, `bGen`, `bStc`, `bStat`) VALUES
(1, 'Nanti Kita Cerita Tentang Hari Ini', 'Marchella F.P', 'Kepustakaan Populer Gramedia', 1, 5, 0),
(2, 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Hasta Mitra', 2, 3, 0),
(3, 'Ubur-ubur Lembur', 'Raditya Dika', 'Gagas Media', 3, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_genre`
--

CREATE TABLE `book_genre` (
  `bGen` int(10) NOT NULL,
  `bGenName` varchar(255) NOT NULL,
  `bGenNum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `book_genre`
--

INSERT INTO `book_genre` (`bGen`, `bGenName`, `bGenNum`) VALUES
(1, 'Drama', '355'),
(2, 'Historikal', '455'),
(3, 'Komedi', '555');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `uId` int(10) NOT NULL,
  `uNama` varchar(255) NOT NULL,
  `uPwd` varchar(255) NOT NULL,
  `uName` varchar(255) NOT NULL,
  `uMail` varchar(255) NOT NULL,
  `uLive` varchar(255) NOT NULL,
  `uTelp` varchar(255) NOT NULL,
  `uLevel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`uId`, `uNama`, `uPwd`, `uName`, `uMail`, `uLive`, `uTelp`, `uLevel`) VALUES
(1, 'Mercury', '21232f297a57a5a743894a0e4a801fc3', 'mercuryfreddie', 'mercuryfreddie@email.com', 'UK', '898213', 'user'),
(2, 'brian may', '21232f297a57a5a743894a0e4a801fc3', 'maybrian', 'maybrian@email.com', 'UK', '234239', 'admin'),
(3, 'pamungkas', '21232f297a57a5a743894a0e4a801fc3', 'pamungkas', 'pamungkas@email.com', 'jakarta', '453453798', 'superadmin'),
(4, 'hindia', '4d37fbad8faaf06e990e5f3e18cc91f5', 'hindia', 'hindia@email.com', 'jakarta selatan', '082237398997', 'user'),
(5, 'oasis', '335ffbcfac66fb164e9d5a54505cad8f', 'oasis', 'oasis@mail.com', 'jaktim', '12391340', 'admin'),
(6, 'ardhito', '697d78cb65adaeb6ff5109ef1298a933', 'ardhito', 'ardhito@mail.com', 'jakpus', '23435831', 'superadmin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bId`),
  ADD KEY `bGen` (`bGen`);

--
-- Indeks untuk tabel `book_genre`
--
ALTER TABLE `book_genre`
  ADD PRIMARY KEY (`bGen`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uId`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `bId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `book_genre`
--
ALTER TABLE `book_genre`
  MODIFY `bGen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `uId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`bGen`) REFERENCES `book_genre` (`bGen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
