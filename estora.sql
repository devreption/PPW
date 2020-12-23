-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 07:57 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estora`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'Admin', 'admin', 'Ryzki');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `email_pelanggan` varchar(60) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(60) NOT NULL,
  `telepon_pelanggan` varchar(12) NOT NULL,
  `datecreate_pelanggan` date NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `datecreate_pelanggan`, `alamat_pelanggan`) VALUES
(1, 'fira@gmail.com', 'fira', 'Zhafirah Rahmadini', '082135234323', '2019-06-27', 'KM 8'),
(2, 'ryzki@gmail.com', 'ryzki', 'Ryzki Ansyah', '081368677349', '2019-06-28', 'Komplek Kentah Indah'),
(3, 'pow@gmail.com', 'pow', 'Pow', '08523423452', '2019-06-29', 'Ur heart'),
(4, 'robi@gmail.com', 'robi', 'Robi', '085234534322', '2019-06-29', 'Plaju');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) NOT NULL,
  `jenis_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(6) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `jenis_produk`, `nama_produk`, `harga_produk`, `foto_produk`, `deskripsi_produk`) VALUES
(1, 'Fall Clothes', 'Jogger Pants', 200000, 'fch1.jpg', 'Warna Hitam'),
(2, 'Fall Clothes', 'Champion Flamingo Hoodie', 285000, 'fch2.jpg', 'Warna pink flamingo'),
(3, 'Fall Clothes', 'Green Straight Pants', 250000, 'fg1.png', 'Straight Pants dengan warna green army'),
(4, 'Fall Clothes', 'Pocket Shirt', 300000, 'fg2.png', 'Kemeja dengan dua kantong di bagian depan. Berwarna hitam.'),
(5, 'Fall Clothes', 'Scratch Jeans', 350000, 'fhm1.jpg', 'Jeans berwarna hitam.'),
(6, 'Fall Clothes', 'Plaid Shirt', 200000, 'fhm2.jpg', 'Kemeja motif plaid berwarna hitam-merah '),
(7, 'Fall Clothes', 'Straight Jeans', 350000, 'fme1.jpg', 'Straight jeans berwarna hitam'),
(8, 'Fall Clothes', 'Printed Jeans Jacket', 350000, 'fme2.jpg', 'Jaket berbahan jeans dengan gambar di bagian belakang'),
(9, 'Fall Clothes', 'Navy Pants', 200000, 'fpb1.jpg', 'Celana dengan bahan khaki berwarna navy'),
(10, 'Fall Clothes', 'Flower Printed Shirt', 200000, 'fpb2.jpg', 'Kemeja dengan motif bunga'),
(11, 'Fall Clothes', 'Ripped Jeans', 250000, 'fth1.jpg', 'Jeans dengan warna putih'),
(12, 'Fall Clothes', 'Varsity Jacket ', 300000, 'fth2.jpg', 'Jaket baseball berwarna navy dengan karet di bagian pergelangan tangan'),
(13, 'Fall Clothes', 'Washed Blue Jeans', 350000, 'fu1.jpg', 'Washed Jeans berwarna biru'),
(14, 'Fall Clothes', 'Black Hoodie', 250000, 'fu2.jpg', 'Hoodie berwarna hitam'),
(15, 'Fall Clothes', 'Stretch Black Jeans', 300000, 'fz1.jpg', 'Jeans berwarna hitam'),
(16, 'Spring Clothes', 'Flowery Sweater', 250000, 'fz2.jpg', 'Sweater dengan motif bunga di bagian lengan'),
(24, 'Summer Clothes', 'Black short pants', 432000, 'sch1.jpg', 'Celana pendek bewarna hitam.'),
(25, 'Summer Clothes', 'Sleeveless blue shirt', 432000, 'sch2.jpg', 'Baju biru tanpa lengan.'),
(26, 'Summer Clothes', 'Black jogger', 798000, 'sg1.png', 'Joger hitam panjang.'),
(27, 'Summer Clothes', 'White dotted Black T-shirt', 450000, 'sg2.png', 'Baju kaos oblong hitam berpola putih.'),
(28, 'Winter Clothes', 'Grey short pants', 750000, 'sgreal1.png', 'Celana pendek bewarna abu-abu.'),
(29, 'Summer Clothes', 'Army short pants.', 550000, 'shm1.jpg', 'Celana pendek bewarna hijau.'),
(30, 'Summer Clothes', 'Flowerred green T-shirt', 450000, 'shm2.jpg', 'Baju kaos oblong berbunga bewarna hijau.'),
(31, 'Summer Clothes', 'Pink dotted short pants', 450000, 'sme1.jpg', 'celana pendek pink berpola titik-titik.'),
(32, 'Summer Clothes', 'Colorful dotted shirt', 657000, 'sme2.jpg', 'kemeja hijau berpola warna-warni.'),
(33, 'Summer Clothes', 'green army short pants', 540000, 'spb1.jpg', 'Celana pendek warna hijau army.'),
(34, 'Spring  Clothes', 'palm printed shirt', 564000, 'spb2.jpg', 'Kemeja bewarna jingga dengan nuansa pohon palm.'),
(35, 'Spring Clothes', 'green turqoise jogger', 670000, 'spch1.jpg', 'Celana jogger bewarna hijau terang.'),
(36, 'Spring Clothes', 'baseball shirt', 985000, 'spch2.jpg', 'Baju baseball bewarna hitam putih.'),
(37, 'Spring Clothes', 'Ripped Jeans', 990000, 'spg1.png', 'Ripped jenas bewarna denim.'),
(38, 'Spring Clothes', 'white shirt', 760000, 'spg2.png', 'Baju kemeja potih.'),
(39, 'Spring Clothes', 'denim jeans', 775000, 'sphm1.jpg', 'Celana jeans bewarna denim.'),
(40, 'Spring Clothes', 'Brown denim jacket', 115000, 'sphm2.jpg', 'jaket denim bewarna coklat.'),
(41, 'Spring Clothes', 'Red long jeans', 980000, 'spme1.jpg', 'celana jeans bewarna merah.'),
(42, 'Spring Clothes', 'Black T-shirt', 450000, 'spme2.jpg', 'Kaos oblong bewarna hitam.'),
(43, 'Spring Clothes', 'Spring denim jeans', 970000, 'sppb1.jpg', 'Celana jeans untuk musim gugur.'),
(44, 'Spring Clothes', 'Black sleeved shirt', 460000, 'sppb2.jpg', 'baju hitam berkerah.'),
(45, 'Winter Clothes', 'Green hilfilger joger', 760000, 'spth1.jpg', 'Celana hijau hilfiger.'),
(46, 'Spring Clothes', 'long sleeved T-shirt', 460000, 'spth2.jpg', 'baju berlengan panjang bewarna biru dongker.'),
(47, 'Spring Clothes', 'Washed Jeans', 830000, 'spu1.jpg', 'Celana jeans bewarna biru terang.'),
(48, 'Spring Clothes', 'Nude shirt', 780001, 'spu2.jpg', 'Kemeja lengan panjang.'),
(49, 'Spring Clothes', 'strech jeans', 640000, 'spz1.jpg', 'Celana jeans setengah tiang.'),
(50, 'Spring Clothes', 'Front Pocket Shirt', 175000, 'spz2.jpg', 'Kemeja berwarna biru dengan saku di bagian depan'),
(51, 'Summer Clothes', 'Black Short Jeans ', 200000, 'sth1.jpg', 'Jeans pendek berwarna hitam'),
(52, 'Summer Clothes', 'Short Sleeve T-Shirt', 100000, 'sth2.jpg', 'Kaus lengan pendek berwarna abu-abu'),
(53, ' Summer Clothes', 'Cotton Short Pants', 150000, 'su1.jpg', 'Celana pendek berbahan katun berwarna hitam'),
(54, 'Summer Clothes', 'Wave Printed Shirt', 200000, 'su2.jpg', 'Kemeja warna biru dengan motif ombak'),
(55, ' Summer Clothes', 'Short pants orange', 130000, 'sz1.jpg', 'Celana Jingga pendek bermotif '),
(57, 'Winter Clothes', 'Black winter rain coat', 250000, 'wch2.jpg', 'Jas hujan warna hitam '),
(58, 'Winter Clothes', 'Grey winter rain coat', 250000, 'wz2.jpg', 'Jas hujan warna abu-abu'),
(59, 'Winter Clothes', 'Black winter rain short coat', 200000, 'wme2.jpg', 'Jas hujan warna hitam pendek'),
(60, 'Winter Clothes', 'Blue winter rain short coat', 200000, 'wu2.jpg', 'Jas hujan warna biru pendek'),
(61, 'Winter Clothes', 'Winter black pants', 200000, 'wth1.jpg', 'Celana hujan warna hitam pendek'),
(62, 'Winter Clothes', 'Winter Black short pants', 200000, 'wpb1.jpg', 'Celana panjang hujan warna hitam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
