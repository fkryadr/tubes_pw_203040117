-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2021 pada 07.34
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040117`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `catalog`
--

CREATE TABLE `catalog` (
  `id_produk` int(15) NOT NULL,
  `gambar_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `harga_produk` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `invoice` varchar(15) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `gambar_produk` varchar(10) NOT NULL,
  `harga` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`invoice`, `nama_customer`, `gambar_produk`, `harga`, `status`) VALUES
('#13328', 'Asep', 'b.jpg', 2000000, 'Dibayar'),
('#35313', 'Ujang', 'c.jpg', 3000000, 'Dibayar'),
('#53327', 'Dadang', 'a.jpg', 1300000, 'Dibayar'),
('#54773', 'Alex', 'e.jpg', 1500000, 'Dibayar'),
('#73423', 'Jordan', 'd.jpg', 1250000, 'Dibayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(15) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `gambar_produk` varchar(10) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `gambar_produk`, `deskripsi`) VALUES
(1, 'RDP Windows', '1.png', 'Aktif : 1 Bulan Payment Legal. Akan Mendapatkan Akses RDP Server tersedia Singapore, US, Russia, dan      German. , Bisa Pilih OS sendiri.  NOTE: Kami tidak mengajarkan penggunaan RDP. 2GB RAM, 2 Core CPU, 60GB SSD'),
(2, 'RDP Windows', '1.png', 'Aktif : 1 Bulan Payment Legal. Akan Mendapatkan Akses RDP Server tersedia Singapore, US, Russia, dan      German. , Bisa Pilih OS sendiri. NOTE: Kami tidak mengajarkan penggunaan RDP. 4GB RAM, 2 Core CPU, 80GB SSD'),
(3, 'RDP Windows', '1.png', 'Aktif : 1 Bulan Payment Legal. Akan Mendapatkan Akses RDP Server tersedia Singapore, US, Russia, dan German. , Bisa Pilih OS sendiri. NOTE: Kami tidak mengajarkan penggunaan RDP. 8GB RAM, 4 Core CPU, 160 GB SSD\r\n'),
(4, 'RDP Windows', '1.png', 'Aktif : 1 Bulan Payment Legal. Akan Mendapatkan Akses RDP Server tersedia Singapore, US, Russia, dan German. , Bisa Pilih OS sendiri.  NOTE: Kami tidak mengajarkan penggunaan RDP. 16GB RAM, 8 Core CPU, 320GB SSD'),
(5, 'RDP Windows', '1.png', 'Aktif : 1 Bulan Payment Legal. Akan Mendapatkan Akses RDP Server tersedia Singapore, US, Russia, dan German. , Bisa Pilih OS sendiri. <br> NOTE: Kami tidak mengajarkan penggunaan RDP. 32GB RAM, 8 Core CPU, 1TB SSD'),
(6, 'VPS Linux', '2.png', 'Masa Aktif : Sesuai Pilihan, Payment Legal, Akan Mendapatkan Akses VPS, Server & OS bisa request di menu checkout. Note : Kami tidak mengajarkan penggunaan VPS. Digital Ocean - 2 CPU - 2 GB RAM - 60 GB SSD (Per Minggu)'),
(7, 'VPS Linux', '2.png', 'Masa Aktif : Sesuai Pilihan, Payment Legal, Akan Mendapatkan Akses VPS, Server & OS bisa request di menu checkout. Note : Kami tidak mengajarkan penggunaan VPS. Digital Ocean - 2 CPU - 4 GB RAM - 80 GB SSD (Per Minggu)'),
(8, 'VPS Linux', '2.png', 'Masa Aktif : Sesuai Pilihan, Payment Legal, Akan Mendapatkan Akses VPS, Server & OS bisa request di menu checkout. Note : Kami tidak mengajarkan penggunaan VPS. Digital Ocean - 2 CPU - 4 GB RAM - 80 GB SSD (Per Bulan)'),
(9, 'VPS Linux', '2.png', 'Masa Aktif : Sesuai Pilihan, Payment Legal, Akan Mendapatkan Akses VPS, Server & OS bisa request di menu checkout. Note : Kami tidak mengajarkan penggunaan VPS. Digital Ocean - 4 CPU - 8 GB RAM - 160 GB SSD (Per Bulan)'),
(10, 'VPS Linux', '2.png', 'Masa Aktif : Sesuai Pilihan, Payment Legal, Akan Mendapatkan Akses VPS, Server & OS bisa request di menu checkout. Note : Kami tidak mengajarkan penggunaan VPS. Digital Ocean - 2 CPU - 2 GB RAM - 60 GB SSD (Per Bulan)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`invoice`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
