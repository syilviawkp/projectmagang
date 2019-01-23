-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2019 at 06:59 AM
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
-- Table structure for table `detaillaporan`
--

CREATE TABLE `detaillaporan` (
  `idDetailLaporan` int(11) NOT NULL,
  `idLaporan` varchar(50) NOT NULL,
  `namaField` varchar(225) NOT NULL,
  `namaKategori` varchar(200) NOT NULL,
  `Batu` varchar(255) NOT NULL DEFAULT 'BELUM',
  `Junrejo` varchar(255) NOT NULL,
  `Beji` varchar(255) NOT NULL,
  `Sisir` varchar(255) NOT NULL,
  `Bumiaji` varchar(255) NOT NULL DEFAULT 'BELUM',
  `terima` text NOT NULL,
  `susulan` text NOT NULL,
  `Kepanjen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detaillaporan`
--

INSERT INTO `detaillaporan` (`idDetailLaporan`, `idLaporan`, `namaField`, `namaKategori`, `Batu`, `Junrejo`, `Beji`, `Sisir`, `Bumiaji`, `terima`, `susulan`, `Kepanjen`) VALUES
(1, '1', 'Jadwal Posyandu', 'UKGM PROMKES', 'SUDAH', 'SUDAH', 'SUDAH', 'SUDAH', 'SUDAH', '', '', NULL),
(2, '1', 'promkes tingkat puskesmas ( TRI BULAN )', 'UKGM PROMKES', 'SUDAH', 'SUDAH', 'SUDAH', '', 'SUDAH', '', '', NULL),
(74, '14', 'Penemuan Penderita Tersangka DBD2', 'P2 DBD & PENYAKIT MENULAR', 'SUDAH', '', '', '', 'SUDAH', ' Batu: februari', '', NULL),
(75, '14', 'Abatisasi Selektif/ PJB/ Fogging Masal SMP', 'P2 DBD & PENYAKIT MENULAR', 'SUDAH', '', '', '', 'SUDAH', '', '', NULL),
(76, '14', 'Penanggulangan Focus DBD', 'P2 DBD & PENYAKIT MENULAR', 'SUDAH', '', '', '', 'SUDAH', '', '', NULL),
(77, '14', 'Epidemologi KLB DBD', 'P2 DBD & PENYAKIT MENULAR', '', '', '', '', '', '', '', NULL),
(78, '14', 'Program PSN oleh Masyarakat', 'P2 DBD & PENYAKIT MENULAR', '', '', '', '', '', '', '', NULL),
(79, '14', ' Penyemprotan', 'P2 DBD & PENYAKIT MENULAR', '', '', '', '', '', '', '', NULL),
(80, '14', 'E-SISMAL', 'P2 MALARIA', '', '', '', '', '', '', '', NULL),
(81, '14', 'Lap. Bulanan Imunisasi rutin bayi ', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', '', '', '', NULL),
(82, '14', 'Lap. Pemakaian Vaksin & Logistik', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', '', '', '', NULL),
(83, '14', 'Lap. Imunisasi rutin IPV', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', '', '', '', NULL),
(84, '14', 'Lap. Rekapitulasi Imunisasi TT Ibu hamil & WUS', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', '', '', '', NULL),
(85, '14', 'Lap. PWS Imunisasi', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', '', '', '', NULL),
(86, '14', 'Lap. Imunisasi rutin BATITA', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', '', '', '', NULL),
(87, '14', 'Lap. KIPI Non Serius', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', '', '', '', NULL),
(88, '14', 'Lap. KIPI Serius', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', '', '', '', NULL),
(89, '14', 'Surveilance penyakit tidak menular', 'PENCEGAHAN / PTM', '', '', '', '', '', '', '', NULL),
(90, '14', 'Rekap. Deteksi Dini Kanker Payu Dara & Kanker Leher Rahim', 'PENCEGAHAN / PTM', '', '', '', '', '', '', '', NULL),
(91, '14', 'Lap. Diaknosa dan Tindakan Kes Gigi dan Mulut', 'PENCEGAHAN / PTM', '', '', '', '', '', '', '', NULL),
(92, '14', 'Lap. Kegiatan Usaha Kes Gigi Masyarakat', 'PENCEGAHAN / PTM', '', '', '', '', '', '', '', NULL),
(93, '14', 'Kesehatan & Gangguan Jiwa Pasung', 'PENCEGAHAN / PTM', '', '', '', '', '', '', '', NULL),
(94, '15', 'LB 1 ( Data Penyakit)', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', 'SUDAH', '', '', '', 'BELUM', ' Batu: februari Batu: maret', '', NULL),
(95, '15', 'LB 2 (Data Kematian Puskesmas)', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', 'SUDAH', '', '', '', 'BELUM', '', '', NULL),
(96, '15', 'LB 4 ( Rawat Jalan - Rawat Inap)', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', 'SUDAH', '', '', '', 'BELUM', '', '', NULL),
(97, '15', 'Lap. Pelaksanaan JKN', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', '', '', '', '', 'BELUM', '', '', NULL),
(98, '15', 'TLB 1 (Data Pelayanan Ponpes dan Panti Asuhan)', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', '', '', '', '', 'BELUM', '', '', NULL),
(99, '15', 'LPLPO (Lap. Pemakaian dan Lembar Permintaan Obat)', 'FARMASI', '', '', '', '', 'BELUM', '', '', NULL),
(100, '15', 'Monitoring Indikator Peresepan', 'FARMASI', '', '', '', '', 'BELUM', '', '', NULL),
(101, '15', 'Kompilasi Data Peresepan Tingkat Puskesmas', 'FARMASI', '', '', '', '', 'BELUM', '', '', NULL),
(102, '15', 'Lap. Penggunaan Psikotropika', 'FARMASI', '', '', '', '', 'BELUM', '', '', NULL),
(103, '15', 'Lap. Penggunaan Narkotika', 'FARMASI', '', '', '', '', 'BELUM', '', '', NULL),
(104, '1', 'Usaha Kesehatan sekolah ( UKS)', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(105, '16', 'Jadwal Posyandu', 'UKGM PROMKES', 'SUDAH', '', '', '', 'BELUM', '', '', NULL),
(106, '16', 'promkes tingkat puskesmas ( TRI BULAN )', 'UKGM PROMKES', '', '', '', '', 'BELUM', '', '', NULL),
(107, '16', 'Lap. Tribulan KIA', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(108, '16', 'PWS KIA ( Ibu )/ Indikator Kesehatan Ibu & Anak', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(109, '16', 'Lap Buku KIA ', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(110, '16', 'Pelayanan KB/ LB3 KB ( Peserta Baru)', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(111, '16', 'LB Kesehatan Reproduksi (LB Kusub & KR)', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(112, '16', ' PWS KB (Kesehatan Usia Subur)', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(113, '16', 'Data Kematian Neonatus', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(114, '16', 'Lap. Kematian Neonatus 7-28 hari', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(115, '16', 'Form Lap. Maternal ', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(116, '16', 'Lap. Kematian Neonatus 0-6 hari hari', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(117, '16', 'Rekapitulasi  Neonatal', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(118, '16', 'Lap. BALITA dan APRAS', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(119, '16', 'Usaha Kesehatan sekolah ( UKS)', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(120, '16', 'Kesehatan Usila', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(121, '16', 'Kesehatan Remaja', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(122, '16', 'Lap. Kematian Ibu', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(123, '16', 'Data Kematian Bayi & Balita', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(124, '16', 'Lap. GIZI', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(125, '16', 'Ibu Hamil Komplikasi', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(126, '16', 'Ibu Hamil Resiko Tinggi', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(127, '16', 'Lap.2', 'KESGA', '', '', '', '', 'BELUM', '', '', NULL),
(129, '17', 'Penemuan Penderita Tersangka DBD2', 'P2 DBD & PENYAKIT MENULAR', 'SUDAH', '', 'SUDAH', '', 'BELUM', '', '', NULL),
(130, '17', 'Abatisasi Selektif/ PJB/ Fogging Masal SMP', 'P2 DBD & PENYAKIT MENULAR', 'SUDAH', '', 'SUDAH', '', 'BELUM', '', '', NULL),
(131, '17', 'Penanggulangan Focus DBD', 'P2 DBD & PENYAKIT MENULAR', 'SUDAH', '', '', '', 'BELUM', '', '', NULL),
(132, '17', 'Epidemologi KLB DBD', 'P2 DBD & PENYAKIT MENULAR', '', '', '', '', 'BELUM', '', '', NULL),
(133, '17', 'Program PSN oleh Masyarakat', 'P2 DBD & PENYAKIT MENULAR', '', '', '', '', 'BELUM', '', '', NULL),
(134, '17', ' Penyemprotan', 'P2 DBD & PENYAKIT MENULAR', '', '', '', '', 'BELUM', '', '', NULL),
(135, '17', 'E-SISMAL', 'P2 MALARIA', '', '', '', '', 'BELUM', '', '', NULL),
(136, '17', 'Lap. Bulanan Imunisasi rutin bayi ', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', 'BELUM', '', '', NULL),
(137, '17', 'Lap. Pemakaian Vaksin & Logistik', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', 'BELUM', '', '', NULL),
(138, '17', 'Lap. Imunisasi rutin IPV', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', 'BELUM', '', '', NULL),
(139, '17', 'Lap. Rekapitulasi Imunisasi TT Ibu hamil & WUS', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', 'BELUM', '', '', NULL),
(140, '17', 'Lap. PWS Imunisasi', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', 'BELUM', '', '', NULL),
(141, '17', 'Lap. Imunisasi rutin BATITA', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', 'BELUM', '', '', NULL),
(142, '17', 'Lap. KIPI Non Serius', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', 'BELUM', '', '', NULL),
(143, '17', 'Lap. KIPI Serius', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', 'BELUM', '', '', NULL),
(144, '17', 'Surveilance penyakit tidak menular', 'PENCEGAHAN / PTM', '', '', '', '', 'BELUM', '', '', NULL),
(145, '17', 'Rekap. Deteksi Dini Kanker Payu Dara & Kanker Leher Rahim', 'PENCEGAHAN / PTM', '', '', '', '', 'BELUM', '', '', NULL),
(146, '17', 'Lap. Diaknosa dan Tindakan Kes Gigi dan Mulut', 'PENCEGAHAN / PTM', '', '', '', '', 'BELUM', '', '', NULL),
(147, '17', 'Lap. Kegiatan Usaha Kes Gigi Masyarakat', 'PENCEGAHAN / PTM', '', '', '', '', 'BELUM', '', '', NULL),
(148, '17', 'Kesehatan & Gangguan Jiwa Pasung', 'PENCEGAHAN / PTM', '', '', '', '', 'BELUM', '', '', NULL),
(149, '18', 'Penemuan Penderita Tersangka DBD2', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(150, '18', 'Abatisasi Selektif/ PJB/ Fogging Masal SMP', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(151, '18', 'Penanggulangan Focus DBD', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(152, '18', 'Epidemologi KLB DBD', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(153, '18', 'Program PSN oleh Masyarakat', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(154, '18', ' Penyemprotan', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(155, '18', 'E-SISMAL', 'P2 MALARIA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(156, '18', 'Lap. Bulanan Imunisasi rutin bayi ', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(157, '18', 'Lap. Pemakaian Vaksin & Logistik', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(158, '18', 'Lap. Imunisasi rutin IPV', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(159, '18', 'Lap. Rekapitulasi Imunisasi TT Ibu hamil & WUS', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(160, '18', 'Lap. PWS Imunisasi', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(161, '18', 'Lap. Imunisasi rutin BATITA', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(162, '18', 'Lap. KIPI Non Serius', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(163, '18', 'Lap. KIPI Serius', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(164, '18', 'Surveilance penyakit tidak menular', 'PENCEGAHAN / PTM', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(165, '18', 'Rekap. Deteksi Dini Kanker Payu Dara & Kanker Leher Rahim', 'PENCEGAHAN / PTM', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(166, '18', 'Lap. Diaknosa dan Tindakan Kes Gigi dan Mulut', 'PENCEGAHAN / PTM', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(167, '18', 'Lap. Kegiatan Usaha Kes Gigi Masyarakat', 'PENCEGAHAN / PTM', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(168, '18', 'Kesehatan & Gangguan Jiwa Pasung', 'PENCEGAHAN / PTM', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(169, '18', 'lap 3', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL);

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
(23, 2, 'Ibu Hamil Resiko Tinggi'),
(24, 2, 'Lap.2'),
(25, 4, 'Penemuan Penderita Tersangka DBD2'),
(26, 4, 'Abatisasi Selektif/ PJB/ Fogging Masal SMP'),
(27, 4, 'Penanggulangan Focus DBD'),
(28, 4, 'Epidemologi KLB DBD'),
(29, 4, 'Program PSN oleh Masyarakat'),
(30, 4, ' Penyemprotan'),
(31, 5, 'E-SISMAL'),
(32, 6, 'Lap. Bulanan Imunisasi rutin bayi '),
(33, 6, 'Lap. Pemakaian Vaksin & Logistik'),
(34, 6, 'Lap. Imunisasi rutin IPV'),
(35, 6, 'Lap. Rekapitulasi Imunisasi TT Ibu hamil & WUS'),
(36, 6, 'Lap. PWS Imunisasi'),
(37, 6, 'Lap. Imunisasi rutin BATITA'),
(38, 6, 'Lap. KIPI Non Serius'),
(39, 6, 'Lap. KIPI Serius'),
(40, 7, 'Surveilance penyakit tidak menular'),
(41, 7, 'Rekap. Deteksi Dini Kanker Payu Dara & Kanker Leher Rahim'),
(42, 7, 'Lap. Diaknosa dan Tindakan Kes Gigi dan Mulut'),
(43, 7, 'Lap. Kegiatan Usaha Kes Gigi Masyarakat'),
(44, 7, 'Kesehatan & Gangguan Jiwa Pasung'),
(45, 8, 'LB 1 ( Data Penyakit)'),
(46, 8, 'LB 2 (Data Kematian Puskesmas)'),
(47, 8, 'LB 4 ( Rawat Jalan - Rawat Inap)'),
(48, 8, 'Lap. Pelaksanaan JKN'),
(49, 8, 'TLB 1 (Data Pelayanan Ponpes dan Panti Asuhan)'),
(50, 9, 'LPLPO (Lap. Pemakaian dan Lembar Permintaan Obat)'),
(51, 9, 'Monitoring Indikator Peresepan'),
(52, 9, 'Kompilasi Data Peresepan Tingkat Puskesmas'),
(53, 9, 'Lap. Penggunaan Psikotropika'),
(54, 9, 'Lap. Penggunaan Narkotika'),
(56, 4, 'lap 3');

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
(1, 'KESGA', 'Januari', 2019),
(14, 'P2PL', 'Januari', 2019),
(15, 'YANKES', 'Januari', 2019),
(16, 'KESGA', 'Februari', 2019),
(17, 'P2PL', 'Februari', 2019),
(18, 'P2PL', 'Januari', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `puskesmas`
--

CREATE TABLE `puskesmas` (
  `idPuskesmas` int(20) NOT NULL,
  `namaPuskes` varchar(50) NOT NULL,
  `alamatPuskes` text NOT NULL,
  `status` enum('AKTIF','NONAKTIF','','') NOT NULL,
  `tgl_aktif` date NOT NULL,
  `tgl_nonaktif` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puskesmas`
--

INSERT INTO `puskesmas` (`idPuskesmas`, `namaPuskes`, `alamatPuskes`, `status`, `tgl_aktif`, `tgl_nonaktif`) VALUES
(1, 'Batu', '', 'AKTIF', '2015-10-01', '2021-05-23'),
(2, 'Bumiaji', '', 'AKTIF', '2015-08-01', '2023-05-05'),
(3, 'Beji', '', 'AKTIF', '2015-01-01', '2023-05-05'),
(4, 'Junrejo', '', 'AKTIF', '2015-01-01', '2023-05-05'),
(5, 'Sisir', '', 'AKTIF', '2015-01-01', '2023-05-05'),
(12, 'Kepanjen', 'jl.kepanjen', 'NONAKTIF', '2019-01-01', '2019-01-01');

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
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`, `nama`, `noHp`, `idPuskesmas`, `level`, `jabatan`) VALUES
(1, 'admin', '234', 'Ahmad', '08666666', 2, 'admin', 'jjj');

--
-- Indexes for dumped tables
--

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
  MODIFY `idDetailLaporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
--
-- AUTO_INCREMENT for table `formatfield`
--
ALTER TABLE `formatfield`
  MODIFY `idField` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `formatkategori`
--
ALTER TABLE `formatkategori`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `kodeLaporan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `idPuskesmas` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
