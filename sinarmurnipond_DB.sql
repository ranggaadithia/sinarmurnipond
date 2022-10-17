-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2022 pada 04.28
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
-- Database: `sinarmurni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarpaket`
--

CREATE TABLE `daftarpaket` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `pesanwa` varchar(255) NOT NULL,
  `list` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `diskon` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftarpaket`
--

INSERT INTO `daftarpaket` (`id`, `nama`, `deskripsi`, `kategori`, `pesanwa`, `list`, `harga`, `satuan`, `diskon`, `image`) VALUES
(1, 'Kartu Undangan', 'Pernikahan merupakan moment sakral bagi kedua pasangan. \r\npercetakan ini siap melayani kebutuhan undangan, stiker, hingga stempel kalian. Segala fasilitas percetakan ada disini dengan\r\nkamu sedang butuh jasa percetakan yang bisa melayani segala bentuk printing?<br>\r\nDisini aja. Dalam jumlah cetak diatas 10, kamu bisa mendapatkan harga spesial dan berbagai bonus menarik.', 'filter-finishing', 'Saya ingin bertanya tentang Produk Kartu Undangan', 'Proses Cepat,Dapat Dikostumisasi,Desain yang Menarik', 10000, 'pcs', 10, '617fcf337624b.png'),
(8, 'Pisau Pond', 'Dapat digunakan untuk memotong kardus', 'filter-pond', 'Halo, saya ingin menanyakan tentang produk ini', 'praktis, aman, nyaman', 10000, 'set', 10, '617552abc323c.jpg'),
(12, 'Browsur', 'Dapaktan browsur di Sinar Murni Pond', 'filter-offset', '', 'Proses Cepat,Terjamin,Dapat Dikostumisasi', 880, 'pcs', 0, '6178be9391ffb.png'),
(15, 'Box Kemasan', 'Ini Merupakan Box Kemasan', 'filter-packaging', '', 'satu,dua,tiga', 10000, 'box', 10, '617cf2c2b8e01.jpeg'),
(16, 'Paper Bag', '', 'filter-packaging', '', 'adadeh', 10000, 'set', 0, '617cf357db26c.jpeg'),
(19, 'Kotak Makanan', 'Kotak makanan.', 'filter-plong', '', 'cepat,mudah,aman', 880, 'pcs', 0, '617fd1161ba2d.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galery`
--

INSERT INTO `galery` (`id`, `image`) VALUES
(9, '617fa627ba653.jpeg'),
(10, '617fa6366ab4e.png'),
(14, '617fcba9813d7.png'),
(15, '617fcbc8959a0.jpeg'),
(16, '617fcbd693d8a.jpeg'),
(17, '617fcbe87e180.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--



--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftarpaket`
--
ALTER TABLE `daftarpaket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galery`
--
ALTER TABLE `galery`
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
-- AUTO_INCREMENT untuk tabel `daftarpaket`
--
ALTER TABLE `daftarpaket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
