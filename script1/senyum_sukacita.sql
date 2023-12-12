-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 04:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `senyum_sukacita`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_produk` int(8) NOT NULL,
  `rincian_barang` varchar(100) NOT NULL,
  `jenis_barang` enum('Kendaraan','Elektronik') NOT NULL,
  `taksiran` int(8) NOT NULL,
  `label_barang` enum('Gadai','Lelang') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_produk`, `rincian_barang`, `jenis_barang`, `taksiran`, `label_barang`) VALUES
(1, 'Laptop Lenovo Legion 5i, 512GB SSD, RAM 16GB', 'Elektronik', 16000000, 'Lelang'),
(2, 'iPhone 11, 128GB', 'Elektronik', 8000000, 'Gadai'),
(3, 'iPad Pro M2 Chip (2022), 256GB', 'Elektronik', 14000000, 'Gadai'),
(4, 'Macbook Air 2022 M2 8/512GB Space Gray', 'Elektronik', 20000000, 'Gadai'),
(5, 'iPad mini 6 Wifi Only, 256GB Pink', 'Elektronik', 8000000, 'Gadai');

-- --------------------------------------------------------

--
-- Table structure for table `detail_data_karyawan`
--

CREATE TABLE `detail_data_karyawan` (
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_data_karyawan`
--

INSERT INTO `detail_data_karyawan` (`nama`, `password`, `nik`, `alamat`, `jenis_kelamin`) VALUES
('Agung Rotama Sibarani', 'agung', '1211031709930004', 'Jl. Kopiraya V, Medan Tuntungan', 'Laki-laki'),
('Mariani', 'mariani', '1271016108710002', 'Jl. Ayahanda No.132, Sei Putih', 'Perempuan'),
('Simon Juanda PN. Simarmata', 'simon', '1271040201890007', 'Jl. Menteng  II GG Jermal II No.14, Medan Denai', 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_pegawai` int(8) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `gaji` int(8) NOT NULL,
  `nik` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_pegawai`, `no_hp`, `gaji`, `nik`) VALUES
(19001, '082351929399', 3000000, '1271016108710002'),
(19002, '082356478965', 3000000, '1271040201890007'),
(19003, '089349672345', 3000000, '1211031709930004');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli_lelang`
--

CREATE TABLE `pembeli_lelang` (
  `id_produk` int(8) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penggadai`
--

CREATE TABLE `penggadai` (
  `id_penggadai` int(11) NOT NULL,
  `id_produk` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penggadai`
--

INSERT INTO `penggadai` (`id_penggadai`, `id_produk`, `nama`, `nik`, `tanggal_lahir`, `alamat`, `no_hp`) VALUES
(5, 5, 'Jamaludin', '1115062003640001', '1964-03-20', 'Jl. Buya Hamka No. 131, Medan Johor\r\n\r\n', '082354126785'),
(1, 1, 'Muhammad Fathyansari Pasaribu', '1271031001850010', '1985-01-10', 'Jl. MawarXII Lk.XIX No.114 Helvetia Tengah, Medan', '082351298939'),
(3, 3, 'Sofian', '1271070302710001', '1971-02-03', 'Jl. Flamboyan GG. Manggis Lk.III,Medan Tuntungan', '089545637281'),
(2, 2, 'Debby Siswanti Tambunan', '1276014109940001', '1994-09-01', 'Jl. Jendral Gatot Subroto LK. I Padang Hulu, Tebing Tinggi', '08167568976'),
(4, 4, 'Daud Al Fatah', '3216061805990002', '1994-05-18', 'Jl. Jatimulya No.18 Tambun Selatan\r\n\r\n', '089523789679');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_kwitansi` int(5) NOT NULL,
  `jlh_pinjaman` int(8) NOT NULL,
  `tgl_jatuh_tempo` date NOT NULL,
  `id_produk` int(8) NOT NULL,
  `id_pegawai` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_kwitansi`, `jlh_pinjaman`, `tgl_jatuh_tempo`, `id_produk`, `id_pegawai`) VALUES
(23001, 8000000, '2023-04-13', 1, 19001),
(23002, 3500000, '2023-03-09', 2, 19002),
(23003, 7000000, '2023-03-09', 3, 19002),
(23004, 11000000, '2023-04-28', 4, 19003),
(23005, 5000000, '2023-04-28', 5, 19003);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `detail_data_karyawan`
--
ALTER TABLE `detail_data_karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `pembeli_lelang`
--
ALTER TABLE `pembeli_lelang`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `nomor` (`id_produk`);

--
-- Indexes for table `penggadai`
--
ALTER TABLE `penggadai`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `nomor` (`id_produk`),
  ADD KEY `index` (`id_penggadai`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_kwitansi`),
  ADD KEY `id_produk` (`id_produk`) USING BTREE,
  ADD KEY `id_pegawai` (`id_pegawai`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_produk` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_pegawai` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19004;

--
-- AUTO_INCREMENT for table `pembeli_lelang`
--
ALTER TABLE `pembeli_lelang`
  MODIFY `id_produk` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penggadai`
--
ALTER TABLE `penggadai`
  MODIFY `id_penggadai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_kwitansi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23008;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `detail_data_karyawan` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembeli_lelang`
--
ALTER TABLE `pembeli_lelang`
  ADD CONSTRAINT `pembeli_lelang_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `barang` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penggadai`
--
ALTER TABLE `penggadai`
  ADD CONSTRAINT `penggadai_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `barang` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `barang` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `karyawan` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
