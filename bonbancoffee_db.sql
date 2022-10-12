-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 12 Okt 2022 pada 07.06
-- Versi server: 10.3.36-MariaDB-log-cll-lve
-- Versi PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bonbancoffee_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_chat_wa`
--

CREATE TABLE `tbl_chat_wa` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `image` varchar(200) NOT NULL,
  `startOnline` time NOT NULL,
  `endOnline` time NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `createUserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_chat_wa`
--

INSERT INTO `tbl_chat_wa` (`id`, `nama`, `phone`, `image`, `startOnline`, `endOnline`, `createDate`, `createUserId`) VALUES
(1, 'Admin', '082258099468', 'Admin_2022-08-29 15:30:43.png', '07:00:00', '22:00:00', '2022-08-19 06:57:40', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `name`, `image`) VALUES
(1, '', '631f163664e07.jpg'),
(2, '', '631f164da90e1.jpg'),
(3, '', '631f165e234f4.jpg'),
(4, '', '631f168567ccc.jpg'),
(7, '', '631f1697846c7.jpg'),
(8, '', '631f16a543748.jpg'),
(9, '', '631f16b392f99.jpg'),
(10, '', '631f16c247f09.jpg'),
(11, '', '631f16d045675.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_homeweb`
--

CREATE TABLE `tbl_homeweb` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `Asal` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_homeweb`
--

INSERT INTO `tbl_homeweb` (`id`, `title`, `Asal`, `deskripsi`) VALUES
(2, 'FORUM SEPAK BOLA  GENERASI INDONESIA', 'BALIKPAPAN', 'Sepakbola mulai sejak dini, Prestasi menanti, Jeli, Peduli, dan Teliti');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_online_shop`
--

CREATE TABLE `tbl_online_shop` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `link` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_online_shop`
--

INSERT INTO `tbl_online_shop` (`id`, `nama`, `link`, `image`) VALUES
(1, 'Shopee', 'https://shopee.co.id/bonbancoffeeroastery?smtt=0.149479776-1660976531.9', '631b0b34639ce.png'),
(2, 'Tokopedia', 'https://tokopedia.link/GMbNWHVIDsb', '631b0b29d1d18.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_running_text`
--

CREATE TABLE `tbl_running_text` (
  `id` int(11) NOT NULL,
  `running_1` varchar(200) NOT NULL,
  `running_2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_running_text`
--

INSERT INTO `tbl_running_text` (`id`, `running_1`, `running_2`) VALUES
(1, 'BONBAN PAYS HOMAGE TO THE VAST NUMBER OF HANDS THAT PLANT, TEND, PROCESS, IMPORT, ROAST, AND BREW THIS COFFEE BEFORE IT FINDS ITS WAY INTO YOUR CUP', 'BONBAN PAYS HOMAGE TO THE VAST NUMBER OF HANDS THAT PLANT, TEND, PROCESS, IMPORT, ROAST, AND BREW THIS COFFEE BEFORE IT FINDS ITS WAY INTO YOUR CUP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_shop`
--

CREATE TABLE `tbl_shop` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_shop`
--

INSERT INTO `tbl_shop` (`id`, `nama`, `price`, `image`) VALUES
(1, 'Kopi Susu Tubruk Instant Sachet', 8000, '631ee97aa58bf.png'),
(2, 'Kopi Drip Bag Sachet Arabika Gayo Red Wine', 10000, '631eea46b016f.png'),
(3, 'Kopi Drip Bag Sachet Arabika Java Puntang Sweet', 10000, '631eea31d7568.png'),
(4, 'Kopi drip bag Sachet Arabika Honey Anaerobic Kamojang', 10000, '631eea77ae82a.png'),
(7, 'Biji Kopi House Blend Arabica Robusta 200gr', 75000, '631ef2782f413.png'),
(8, 'Java Puntang Sweet 200gr (roasted bean/ground coffee) - kopi bubuk', 85000, '631ef28a120d8.png'),
(9, 'Arabica Gayo Red Winey - bubuk kopi', 85000, '631ef2a363bdd.png'),
(10, 'Hampers Lebaran/Ulang Tahun/Wisuda/Anniversary', 0, '631ef2c1a4fdd.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sosmed`
--

CREATE TABLE `tbl_sosmed` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `link` varchar(125) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sosmed`
--

INSERT INTO `tbl_sosmed` (`id`, `name`, `link`, `icon`) VALUES
(5, 'Instagram', 'https://instagram.com/bonbanroast', '630c776b0f0c9.svg'),
(6, 'Tiktok', 'https://www.tiktok.com/@cilbuns', '630c778238555.svg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_website`
--

CREATE TABLE `tbl_website` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `about_us` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `metaTitle` varchar(80) NOT NULL,
  `metaKeywords` text NOT NULL,
  `metaDescription` text NOT NULL,
  `map` text NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_website`
--

INSERT INTO `tbl_website` (`id`, `name`, `about_us`, `address`, `phone`, `fax`, `email`, `description`, `metaTitle`, `metaKeywords`, `metaDescription`, `map`, `image`) VALUES
(3, 'Bonban Coffee Roastery', 'who we are and what we do.', '<p>Jl. Bontang III No.78, RT.006/RW.013, Jatimakmur, Kec. Pd. Gede, Kota Bks, Jawa Barat 17413</p>\r\n', '082258099468', '', 'bonbanroast@gmail.com', '<p style=\"text-align:justify\">BONBAN IS SENSITIVE, BONBAN REQUIRES CAREFUL HANDLING. BONBAN IS DELICATE. IT&#39;S TACTFUL, TACTILE, AND SOMETIMES EVEN TRANSCENDENTAL. BONBAN PAYS HOMAGE TO THE VAST NUMBER OF HANDS THAT PLANT, TEND, PROCESS, IMPORT, ROAST, AND BREW THIS COFFEE BEFORE IT FINDS ITS WAY INTO YOUR CUP. WITH EVERY SIP, WE HOPE TO REMIND YOU THAT COFFEE IS NOT JUST A COMMODITY, IT&#39;S A SENSATION</p>\r\n', 'Bonban Coffee Roastery', '<p>Bonban Coffee, Coffee Bonban, Kopi Indonesia, Indonesian Coffee, Coffee, Kopi Indonesia Terbaik, Cafe Terbaik, Coffee Shop Jakarta</p>\r\n', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d226136.8898547281!2d106.87704418791516!3d-6.25120111365979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d7c0446c809%3A0x9bda13e439521ccd!2sBonban%20Coffee%20Roastery!5e0!3m2!1sid!2sid!4v1661759370234!5m2!1sid!2sid\" width=\"100%\" height=\"100%\" style=\"border:0;border-radius: 10px;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'image 2000.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_chat_wa`
--
ALTER TABLE `tbl_chat_wa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_homeweb`
--
ALTER TABLE `tbl_homeweb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_online_shop`
--
ALTER TABLE `tbl_online_shop`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_running_text`
--
ALTER TABLE `tbl_running_text`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_shop`
--
ALTER TABLE `tbl_shop`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_website`
--
ALTER TABLE `tbl_website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_chat_wa`
--
ALTER TABLE `tbl_chat_wa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tbl_homeweb`
--
ALTER TABLE `tbl_homeweb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_online_shop`
--
ALTER TABLE `tbl_online_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_running_text`
--
ALTER TABLE `tbl_running_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_shop`
--
ALTER TABLE `tbl_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_website`
--
ALTER TABLE `tbl_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
