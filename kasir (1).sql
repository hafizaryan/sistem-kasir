-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 12:18 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `barcode` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `barcode`, `gambar`, `harga`) VALUES
(1, 'Indomie Goreng', '43243242423', '1672821305ASUS2.png', '5000'),
(3, 'Indomie Rebus', '1234567890', '1672822053C3.png', '5000'),
(4, 'Indomie Isi Tiga', '1234567890', '', '8000'),
(6, 'Susu Dancow', '6785436', '', '45000'),
(7, 'Le Minerale 600 ml', '00045626', '', '2500'),
(8, 'Sedaap Mie Cup Goreng', '00024858', '', '4700'),
(9, 'Roma Kelapa Cream', '00066975', '', '8100'),
(10, 'Buavita Orange 250 ml', '00005206', '', '7100'),
(11, 'Paddle Pop Mochi Coklat', '00700194', '', '3000'),
(12, 'ABC Sambal Asli', '00001748', '', '7200'),
(13, 'Indomilk Susu UHT Coklat', '00043967', '', '5600'),
(14, 'Pigeon Cotton Swabs', '00006321', '', '7600'),
(15, 'Harpic Power Lavender', '00033198', '', '26900'),
(16, 'Oreo Strawberry Cream', '00003575', '', '9900'),
(17, 'Minyak Goreng Bimoli 1L Pouch/Refill', '00098765', '', '25000'),
(18, 'FreshCare ', '00001922', '', '12000'),
(19, 'Nescafe Latte 220 ml', '00163780', '', '7100'),
(20, 'Beras Anak Daro 5 KG', '00056789', '', '88000'),
(21, 'Beras Anak Daro 10 KG', '00076543', '', '176000'),
(22, 'Facial Wash Azarine', '00052137', '', '35000'),
(23, 'Choco Krunch', '874653327', '1672822519c613507e-6227-449c-ae9c-662c1208689b.png', '45000');

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(11) NOT NULL,
  `nama_kasir` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama_kasir`) VALUES
(2, 'Nadlyne Aurora ');

-- --------------------------------------------------------

--
-- Table structure for table `laporanharian`
--

CREATE TABLE `laporanharian` (
  `id_barang` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `total` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporanharian`
--

INSERT INTO `laporanharian` (`id_barang`, `tanggal`, `nama_barang`, `jumlah`, `satuan`, `harga`, `total`) VALUES
(2, '2022-12-21 15:02:41', 'mama lemon', '2', 'pcs', '15000', '30000'),
(5, '2022-12-21 16:34:00', 'garnier', '2', 'pcs', '2500', '5000'),
(6, '2022-12-21 16:34:00', 'Indomie Rebus', '2', 'pcs', '2500', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`) VALUES
(1, 'Nasya Amirah'),
(3, 'Hafiz Aryan Siregar'),
(4, 'Firnalia Amanda'),
(5, 'Vina Wulandari'),
(7, 'Aufa Atrilia Rahma'),
(8, 'Nafilio Adzaki Hasyim'),
(9, 'Aulia Salsabilla'),
(10, 'Hilmi Zalnel Haq'),
(11, 'Muhammad Habib'),
(12, 'Yulia Syarif'),
(13, 'Firati Cahya'),
(14, 'Rifqy Rafardhan'),
(15, 'Neha Mella Cia'),
(16, 'Indah Lestari'),
(17, 'Nur Alfa Husna'),
(18, 'Desvita Hendri'),
(19, 'Diana Nadha'),
(20, 'Amanda Iksanul Putri'),
(21, 'Muhammad Iqrom'),
(22, 'Zhevin Alfian'),
(23, 'Naufal Sandia Hasyim');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id_stok` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `stok_awal` int(11) NOT NULL,
  `barang_masuk` int(11) NOT NULL,
  `barang_keluar` int(11) NOT NULL,
  `stok_akhir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id_stok`, `nama_barang`, `stok_awal`, `barang_masuk`, `barang_keluar`, `stok_akhir`) VALUES
(1, 'Gentlegen Deterjen', 50, 10, 25, 35),
(3, 'Indomie Goreng', 40, 30, 15, 55),
(4, 'Mama Lemon', 100, 50, 30, 120),
(5, 'Sabun Lux Cair', 20, 10, 8, 22),
(6, 'Chitato', 75, 15, 20, 70),
(7, 'Mama Lemon', 55, 15, 10, 60),
(8, 'Daia Soft Pink 1.7 KG', 22, 11, 10, 23),
(9, 'Prenjak Teh Celup', 20, 15, 5, 30),
(10, 'Sari Roti Coklat', 10, 10, 5, 15),
(11, 'Selection Kapas', 8, 7, 5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal`, `jumlah`, `total`) VALUES
(4, '2023-01-03 13:27:00', 8, '44500'),
(5, '2023-01-03 13:25:00', 15, '153800'),
(10, '2023-01-04 06:01:00', 8, '57700'),
(11, '2023-01-04 06:06:00', 11, '115900'),
(12, '2023-01-04 06:18:00', 14, '104415'),
(13, '2023-01-04 10:54:00', 2, '50000'),
(15, '2023-01-04 11:07:00', 2, '20000');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_transaksi_detail` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id_transaksi_detail`, `id_transaksi`, `nama_barang`, `harga`, `jumlah`) VALUES
(1, 1, 'milku', '3000', 2),
(2, 1, 'milku', '3000', 2),
(3, 1, 'milku', '3000', 2),
(4, 6, 'pepsodent', '6500', 1),
(5, 1, 'gorio', '8000', 1),
(6, 7, 'Lux', '10000', 13),
(7, 7, 'lux', '20000', 5),
(8, 8, 'mie kremes', '40000', 5),
(9, 4, 'Indofood SMRI', '10600', 1),
(10, 4, 'Sukses Goreng Ayam Kecap', '3800', 2),
(11, 4, 'Roma Sandwich', '6500', 1),
(12, 4, 'Sarimi 2 Rasa Soto', '3600', 3),
(13, 4, 'Khongguan Saltcheese', '9000', 1),
(14, 5, 'Qtela Keripik Balado 180g', '16600', 1),
(15, 5, 'B/P Campur Lokal', '7000', 1),
(16, 5, 'Crystalline Bil 600', '3500', 2),
(17, 5, 'H/Plast Kain Elast 10', '6400', 1),
(18, 5, 'Espe Peny Leci 320 ML', '7100', 1),
(19, 5, 'Indomilk Cair Chocolate 190 ml', '4800', 1),
(20, 5, 'T/J Madu Tj Murni 150ML', '22000', 1),
(21, 5, 'Emina FC.Mask Rice23', '15700', 1),
(22, 5, 'Cimory SQZ Mango 120', '10200', 1),
(23, 5, 'Greenfields Yoghurt Blueberry', '9700', 1),
(24, 5, 'Kaki3 Jr.Nps Klg 320', '7500', 1),
(25, 5, 'Floridina Orange 350 ML', '3000', 1),
(26, 5, 'Sasa Bumbu Kentucky', '6500', 1),
(27, 5, 'Mixagrip Flu&Batuk', '3000', 1),
(28, 5, 'Royale Soft', '27300', 1),
(29, 6, 'Aqua Air Mineral 1500ml', '7200', 14400),
(30, 10, 'Sari Roti Coklat', '16000', 1),
(31, 10, 'IDM/M Mask 4D ABU 4S', '17900', 1),
(32, 10, 'H,/Plast Kain Elast10', '6900', 1),
(33, 10, 'Indomilk Cair CHO190ml', '4800', 1),
(34, 10, 'Selection Kapas 50gr', '12100', 1),
(35, 11, 'Aqua Air Mineral 150ml', '7200', 2),
(36, 11, 'Wardah UV Gel', '35000', 1),
(37, 11, 'Indomie Kriuk Pedas', '2800', 2),
(38, 11, 'Sedaap Mie Cup Goreng', '2800', 1),
(39, 11, 'Tessa Facial Tissue', '20200', 1),
(40, 11, 'Nu Yoghurt Tea 450ml', '6800', 1),
(41, 11, 'Indomie Goreng Spesial', '2800', 1),
(42, 11, 'Bear Brand Gold Teh', '11600', 1),
(43, 11, 'Super Bubur ', '3100', 3),
(44, 12, 'Indofood SMRI', '10600', 1),
(45, 12, 'Paddle Pop Mochi Coklat', '3000', 1),
(46, 12, 'Sunlight', '4900', 1),
(47, 12, 'Bayfresh Everywhere', '8415', 1),
(48, 12, 'Ciptadent t brush', '1', 7000),
(49, 12, 'Dahlia Beef Gantung', '1', 11500),
(50, 12, 'Shinzui B Scrub', '10800', 1),
(51, 12, 'Vixal Pembersih Biru', '17900', 1),
(52, 12, 'Sukses Mie Rasa Soto', '3600', 1),
(53, 12, 'Khongguan Saltcheese', '9000', 1),
(54, 12, 'Sarimi Isi 2 Rasa Soto', '3600', 1),
(55, 12, 'Roma Sandwich', '6500', 1),
(56, 12, 'Sukses Goreng Ayam Kecap', '3800', 2),
(57, 13, 'Gentlegen Warna Pink', '15000', 1),
(58, 13, 'Sabun Lux Cair Blossom Sakura', '40000', 1),
(59, 14, 'Pepsodent Kecil ', '5000', 1),
(60, 14, 'Rinso Cair', '15000', 1),
(61, 14, 'Rinso Cair', '15000', 1),
(62, 15, 'Pepsodent Kecil ', '5000', 1),
(63, 15, 'Rinso Cair', '15000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `password_hash` varchar(191) NOT NULL,
  `level_user` varchar(20) NOT NULL,
  `status_user` tinyint(1) NOT NULL,
  `tanggal_akses` date DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_user`, `password_hash`, `level_user`, `status_user`, `tanggal_akses`, `created_at`, `updated_at`, `deleted_at`) VALUES
(17, 'nasya', 'Nasya Amirah', '$2y$10$JW.14omZUsBH6oGbIR8rVed7.SjShgrxCpiMU.SXy0CtXov.lu08W', 'admin', 1, '2021-01-01', '2021-05-09 05:17:52', '2023-01-03 03:15:42', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indexes for table `laporanharian`
--
ALTER TABLE `laporanharian`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_transaksi_detail`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `laporanharian`
--
ALTER TABLE `laporanharian`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id_transaksi_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
