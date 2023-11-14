-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 01:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_sembako`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemasok`
--

CREATE TABLE `detail_pemasok` (
  `id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `pemasok_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pemasok`
--

INSERT INTO `detail_pemasok` (`id`, `produk_id`, `pemasok_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(4, 5, 2),
(5, 3, 3),
(6, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id_harga`, `produk_id`, `harga_beli`, `harga_jual`) VALUES
(1, 1, 10500, 11000),
(6, 2, 15900, 16500),
(10, 4, 12800, 14000),
(11, 6, 6500, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Beras'),
(2, 'Minyak Goreng'),
(3, 'Gula'),
(4, 'Tepung'),
(5, 'Mie Instan'),
(6, 'Makanan Kaleng'),
(7, 'Kopi'),
(8, 'Teh'),
(9, 'Telur'),
(10, 'Kaldu'),
(11, 'Susu'),
(12, 'Sabun Cuci '),
(13, 'Sirup');

-- --------------------------------------------------------

--
-- Table structure for table `pemasok`
--

CREATE TABLE `pemasok` (
  `id_pemasok` int(11) NOT NULL,
  `nama_pemasok` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemasok`
--

INSERT INTO `pemasok` (`id_pemasok`, `nama_pemasok`, `no_hp`, `alamat`) VALUES
(1, 'Linda Handayani', '081572858098', 'Bandung'),
(2, 'Pitri Sri Rahayu', '082181276607', 'Garut'),
(3, 'Rapi Akbar', '082218662598', 'Surabaya'),
(4, 'Karina', '084218362522', 'Jakarta'),
(6, 'Dena Khoerunisa', '086683092811', 'Depok');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `status` enum('tersedia','pengadaan','tidak_tersedia') NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_produk`, `nama_produk`, `kategori_id`, `gambar`, `stok`, `satuan`, `status`, `deskripsi`) VALUES
(1, '0001', 'Segitiga Biru', 4, 'tepung.jpg', 20, 'Kg', 'tersedia', 'Tepung terigu segitiga biru dibuat dari gandum pilihan yang memiliki kualitas tinggi dengan kandungan vitamin A, B3, dan D3.'),
(2, '0002', 'Gulaku', 3, 'gula.jpg', 25, 'Kg', 'tersedia', 'Gulaku merupakan produk gula kristal putih yang di produksi dilampung dan sudah didistribusikan lebih dari 12 kota di seluruh indonesia.'),
(3, '0003', 'Bimoli', 2, 'bimoli.webp', 22, 'L', 'tersedia', 'Minyak goreng bimoli dibuat dari bibit biji kelapa sawit pilihan yaitu \"Tenara\" untuk menghasilkan minyak goreng dengan kualitas terbaik.'),
(4, '0004', 'Ketan Hitam', 1, 'ketan hitam.jpg', 50, 'Kg', 'tersedia', 'Beras ketan hitam merupakan beras yang berwarna ungu pekat mendekati hitam dan mengandung senyawa fenolik yang tinggi terutama antosianin.'),
(5, '0005', 'Gula Aren', 3, 'aren.jpg', 15, 'kg', 'tersedia', 'Gula aren adalah gula yang berasal dari cairan air nira.'),
(6, '0006', 'Royco Ayam', 10, 'royco.png', 100, 'pcs', 'tersedia', 'Royco ayam adalah bumbu penyedap yang digunakan untuk menambah cita rasa gurih pada hidangan.'),
(8, '0008', 'Telur Ayam', 9, 'telur-ayam.jpg', 30, 'Kg', 'tersedia', 'Telur ayam merupakan telur yang dihasilkan oleh ternak unggas ayam.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pemasok`
--
ALTER TABLE `detail_pemasok`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `produk_id` (`produk_id`) USING BTREE,
  ADD KEY `pemasok_id` (`pemasok_id`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`),
  ADD UNIQUE KEY `produk_id` (`produk_id`) USING BTREE;

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pemasok`
--
ALTER TABLE `pemasok`
  ADD PRIMARY KEY (`id_pemasok`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kategori_id` (`kategori_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pemasok`
--
ALTER TABLE `detail_pemasok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pemasok`
--
ALTER TABLE `pemasok`
  MODIFY `id_pemasok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pemasok`
--
ALTER TABLE `detail_pemasok`
  ADD CONSTRAINT `detail_pemasok_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `detail_pemasok_ibfk_2` FOREIGN KEY (`pemasok_id`) REFERENCES `pemasok` (`id_pemasok`);

--
-- Constraints for table `harga`
--
ALTER TABLE `harga`
  ADD CONSTRAINT `harga_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
