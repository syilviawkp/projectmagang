-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2019 at 06:22 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absenlaporan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode` varchar(15) NOT NULL,
  `nama_barang` varchar(150) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `satuan` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode`, `nama_barang`, `harga`, `satuan`) VALUES
('8851123212038', 'M-150 Botol', 5000, 'Pcs'),
('8992696402386', 'Nestle carnation kkm 388 gr', 5650, 'Pcs'),
('8997020580068', 'Dyna puding cocopandan110 g', 9200, 'Pcs'),
('8997022850060', 'Mr jelly anggur 15 gr', 3500, 'Pcs');

-- --------------------------------------------------------

--
-- Table structure for table `detaillaporan`
--

CREATE TABLE `detaillaporan` (
  `idDetailLaporan` int(11) NOT NULL,
  `idLaporan` varchar(50) NOT NULL,
  `namaField` varchar(225) NOT NULL,
  `namaKategori` varchar(200) NOT NULL,
  `Batu` enum('SUDAH','BELUM','','') NOT NULL,
  `Junrejo` enum('SUDAH','BELUM','','') NOT NULL,
  `Beji` enum('SUDAH','BELUM','','') NOT NULL,
  `Sisir` enum('SUDAH','BELUM','','') NOT NULL,
  `Bumiaji` enum('SUDAH','BELUM','','') NOT NULL,
  `terima` text NOT NULL,
  `susulan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detaillaporan`
--

INSERT INTO `detaillaporan` (`idDetailLaporan`, `idLaporan`, `namaField`, `namaKategori`, `Batu`, `Junrejo`, `Beji`, `Sisir`, `Bumiaji`, `terima`, `susulan`) VALUES
(1, '1', 'Jadwal Posyandu', 'UKGM PROMKES', 'SUDAH', 'BELUM', 'SUDAH', 'SUDAH', 'SUDAH', '', ''),
(2, '1', 'promkes tingkat puskesmas ( TRI BULAN )', 'UKGM PROMKES', 'SUDAH', 'SUDAH', 'SUDAH', 'SUDAH', 'BELUM', '', ''),
(3, '1', 'Lap. Data Dasar UKBM Kab/Kota ( TRI BULAN )', 'UKGM PROMKES', 'SUDAH', 'BELUM', 'SUDAH', 'SUDAH', 'BELUM', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `formatfield`
--

CREATE TABLE `formatfield` (
  `idField` int(11) NOT NULL,
  `idKategori` int(11) NOT NULL,
  `namaField` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formatfield`
--

INSERT INTO `formatfield` (`idField`, `idKategori`, `namaField`) VALUES
(1, 1, 'Jadwal Posyandu'),
(2, 1, 'promkes tingkat puskesmas ( TRI BULAN )'),
(3, 1, 'Lap. Data Dasar UKBM Kab/Kota ( TRI BULAN )'),
(4, 2, 'Lap. Tribulan KIA'),
(5, 2, 'PWS KIA ( Ibu )/ Indikator Kesehatan Ibu & Anak'),
(6, 2, 'Lap Buku KIA '),
(7, 2, 'Pelayanan KB/ LB3 KB ( Peserta Baru)'),
(8, 2, 'LB Kesehatan Reproduksi (LB Kusub & KR)'),
(9, 2, ' PWS KB (Kesehatan Usia Subur)'),
(10, 2, 'Data Kematian Neonatus'),
(11, 2, 'Lap. Kematian Neonatus 7-28 hari'),
(12, 2, 'Form Lap. Maternal '),
(13, 2, 'Lap. Kematian Neonatus 0-6 hari hari'),
(14, 2, 'Rekapitulasi  Neonatal'),
(15, 2, 'Lap. BALITA dan APRAS'),
(16, 2, 'Usaha Kesehatan sekolah ( UKS)'),
(17, 2, 'Kesehatan Usila'),
(18, 2, 'Kesehatan Remaja'),
(19, 2, 'Lap. Kematian Ibu'),
(20, 2, 'Data Kematian Bayi & Balita'),
(21, 2, 'Lap. GIZI'),
(22, 2, 'Ibu Hamil Komplikasi'),
(23, 2, 'Ibu Hamil Resiko Tinggi');

-- --------------------------------------------------------

--
-- Table structure for table `formatkategori`
--

CREATE TABLE `formatkategori` (
  `idKategori` int(11) NOT NULL,
  `namaKategori` varchar(225) NOT NULL,
  `jenisLaporan` enum('KESGA','P2PL','YANKES','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formatkategori`
--

INSERT INTO `formatkategori` (`idKategori`, `namaKategori`, `jenisLaporan`) VALUES
(1, 'UKGM PROMKES', 'KESGA'),
(2, 'KESGA', 'KESGA'),
(3, 'KESEHATAN LINGKUNGAN', 'KESGA'),
(4, 'P2 DBD & PENYAKIT MENULAR', 'P2PL'),
(5, 'P2 MALARIA', 'P2PL'),
(6, 'PEMBERANTASAN & SURVEILANS', 'P2PL'),
(7, 'PENCEGAHAN / PTM', 'P2PL'),
(8, 'PELAYANAN KESEHATAN DASAR & RUJUKAN', 'YANKES'),
(9, 'FARMASI', 'YANKES');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `kodeLaporan` int(50) NOT NULL,
  `jenisLaporan` enum('KESGA','P2PL','YANKES','') NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tahun` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`kodeLaporan`, `jenisLaporan`, `bulan`, `tahun`) VALUES
(1, 'KESGA', 'Januari', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `puskesmas`
--

CREATE TABLE `puskesmas` (
  `idPuskesmas` int(20) NOT NULL,
  `namaPuskes` varchar(50) NOT NULL,
  `alamatPuskes` text NOT NULL,
  `status` enum('AKTIF','NONAKTIF','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puskesmas`
--

INSERT INTO `puskesmas` (`idPuskesmas`, `namaPuskes`, `alamatPuskes`, `status`) VALUES
(1, 'Batu', '', 'AKTIF'),
(2, 'Bumiaji', '', 'AKTIF'),
(3, 'Beji', '', 'AKTIF'),
(4, 'Jumrejo', '', 'AKTIF'),
(5, 'Sisir', '', 'AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `noHp` varchar(15) NOT NULL,
  `idPuskesmas` int(10) NOT NULL,
  `level` varchar(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `detaillaporan`
--
ALTER TABLE `detaillaporan`
  ADD PRIMARY KEY (`idDetailLaporan`);

--
-- Indexes for table `formatfield`
--
ALTER TABLE `formatfield`
  ADD PRIMARY KEY (`idField`);

--
-- Indexes for table `formatkategori`
--
ALTER TABLE `formatkategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`kodeLaporan`);

--
-- Indexes for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`idPuskesmas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detaillaporan`
--
ALTER TABLE `detaillaporan`
  MODIFY `idDetailLaporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `formatfield`
--
ALTER TABLE `formatfield`
  MODIFY `idField` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `formatkategori`
--
ALTER TABLE `formatkategori`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `kodeLaporan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `idPuskesmas` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
