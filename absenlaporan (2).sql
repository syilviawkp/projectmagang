-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 03:28 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(80, '14', 'E-SISMAL', 'P2 MALARIA', '', '', '', '', '', '', '', NULL),
(81, '14', 'Lap. Bulanan Imunisasi rutin bayi ', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', '', '', '', NULL),
(82, '14', 'Lap. Pemakaian Vaksin & Logistik', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', '', '', '', NULL),
(83, '14', 'Lap. Imunisasi rutin IPV', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', '', '', '', NULL),
(84, '14', 'Lap. Rekapitulasi Imunisasi TT Ibu hamil & WUS', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', '', '', '', NULL),
(85, '14', 'Lap. PWS Imunisasi', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', '', '', '', NULL),
(86, '14', 'Lap. Imunisasi rutin BATITA', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', '', '', '', NULL),
(87, '14', 'Lap. KIPI Non Serius', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', '', '', '', NULL),
(88, '14', 'Lap. KIPI (Kejadian Ikutan Pasca Imunisasi)', 'PEMBERANTASAN & SURVEILANS', '', '', '', '', '', '', '', NULL),
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
(104, '1', 'Lap. Tribulan KIA', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
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
(169, '18', 'lap 3', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(170, '1', 'Lap. Data Dasar UKBM Kab/Kota ( TRI BULAN )', 'UKGM PROMKES', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(171, '15', 'Data Rujukan Puskesmas', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(172, '15', '15 Penyakit Terbanyak', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(173, '15', 'Lap. Rawat Jln Tk. Pertama ( RJTP ) BPJS', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(174, '15', 'Lap tahunan Data Kes 145 Penyakit di Kap/Kota ', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(175, '15', 'Lap. Tribulan perawatan kesmas', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(176, '15', 'Lap. Bulanan Perkesmas', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(177, '15', 'Perhitungan Penilaian Kinerja Puskesmas', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(178, '15', '15 Pemakaian Obat Terbanyak', 'FARMASI', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(179, '15', 'LB. Puskesmas/Indikator penilaian proses kegiatan ', 'FARMASI', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(180, '15', 'Kegiatan Laboraturium', 'FARMASI', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(181, '14', 'Lap. Bulanan LB3/ TLB3 Diare', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(182, '14', 'Lap. Bulanan Typoid', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(183, '14', 'Lap. Bulanan TB Paru', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(184, '14', 'Register TBC UPK', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(185, '14', 'Register Kohort Penderita Kusta', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(186, '14', 'Lap. P2 Kusta', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(187, '14', 'LB3 ISPA/P2M', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(188, '14', 'PWS Pneumonia balita', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(189, '14', 'Lap. ILLI', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(190, '14', 'Lap. Bulanan IMS (Inveksi Menular Seksual)', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(191, '14', 'Lap. Rabies', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(192, '14', 'Konseling & Tes HIV Suka Rela (KRS/VCT)', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(193, '14', 'Pemeriksaan Jentik', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(194, '14', 'Data skrining penyakit jantung dan kardiovaskuler', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(195, '14', 'Format C1 ( Campak)', 'P2 DBD & PENYAKIT MENULAR', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(196, '14', 'List Penderita AFP', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(197, '14', 'Form LB - KLB (Kejadian Luar Biasa)', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(198, '14', 'Lap. DATA INDIVIDU TIPK', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(199, '14', 'Pel. Kes Penderita DIABETES MELLITUS', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(200, '14', 'Lap. Pelacakan K3JH', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(201, '14', 'Pel Kes Penderita HIPERTENSI', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(202, '14', 'Lap. Pemeriksaan IVA tes / Papsmear', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(203, '14', 'Surveilance Terpadu Penyakit Menular/Penyakit Baru', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(204, '14', 'Lap. W1 & W2 Mingguan', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(205, '14', 'SPM Pel. Kes. Pada usia Produktif 15-59 th', 'PEMBERANTASAN & SURVEILANS', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(206, '14', 'Pencatatan dan Pelaporan Posbindu PTM', 'PENCEGAHAN / PTM', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(207, '14', 'Kesehatan Indra', 'PENCEGAHAN / PTM', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(208, '14', 'Lap. Rekapitulasi Penderita Malaria Tingkat Puskesmas', 'PENCEGAHAN / PTM', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(209, '14', 'Lap. Bulanan UKP/UKM Pel Puskesmas', 'PENCEGAHAN / PTM', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(210, '1', 'PWS KIA ( Ibu )/ Indikator Kesehatan Ibu & Anak', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(211, '1', 'Lap Buku KIA ', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(212, '1', 'Pelayanan KB/ LB3 KB ( Peserta Baru)', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(213, '1', 'LB Kesehatan Reproduksi (LB Kusub & KB)', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(214, '1', 'PWS KB (Kesehatan Usia Subur)', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(215, '1', 'Data Kematian Neonatus', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(216, '1', ' Lap. Kematian Neonatus 7-28 hari', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(217, '1', 'Form Lap. Maternal ', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(218, '1', 'Lap. Kematian Neonatus 0-6 hari hari', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(219, '1', 'Rekapitulasi  Neonatal', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(220, '1', 'Lap. BALITA dan APRAS', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(221, '1', 'Kesehatan anak usia sekolah (AUS)/ UKS', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(222, '1', 'Kesehatan Remaja', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(223, '1', 'Lap. Kematian Ibu', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(224, '1', 'Data Kematian Bayi & Balita', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(225, '1', 'Lap. GIZI Online / Email', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(226, '1', 'Ibu Hamil Komplikasi', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(227, '1', 'Ibu Hamil Resiko Tinggi', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(228, '1', 'Laporan persalinan / GEMILLI (kembar)', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(229, '1', 'Penanggulangan kekerasan terhadap perempuan', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(230, '1', 'Penularan HIV dari ibu ke anak', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(231, '1', 'Lap. Kematian Bayi (29-11 hari)', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(232, '1', 'Lap. Kematian Balita (12 - 59 bulan)', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(233, '1', 'Data Alakon', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(234, '1', 'Data dasar program kesehatan dan penyakit pada lansia/ Usila', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(235, '1', 'Rekapitulasi hasil penjaringan kes peserta didik', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(236, '1', 'Lap. Kesehatan Pekerja (UKK) kesmas', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(237, '1', 'Lap. Bulanan Kesehatan Olah raga', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(238, '1', 'Lap. Bulanan Keg Puskesmas', 'KESGA', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(239, '1', 'Rencana Kerja Petugas Kes Ling Puskesmas', 'KESEHATAN LINGKUNGAN', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(240, '1', 'Kondisi Kesehatan Lingkungan Perumahan', 'KESEHATAN LINGKUNGAN', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(241, '1', 'Gambaran Tingkat Resiko Pencemaran SAB', 'KESEHATAN LINGKUNGAN', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(242, '1', 'Pengawasan Sampah ( TPS/ TPA)', 'KESEHATAN LINGKUNGAN', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(243, '1', 'Kepadatan Lalat', 'KESEHATAN LINGKUNGAN', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(244, '1', 'Laporan Klinik Sanitasi', 'KESEHATAN LINGKUNGAN', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(245, '1', 'Data Penyakit Berbasis Lingkungan', 'KESEHATAN LINGKUNGAN', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(246, '1', 'Hasil penilaian kartu rumah oleh Kader ', 'KESEHATAN LINGKUNGAN', 'BELUM', '', '', '', 'BELUM', '', '', NULL),
(247, '1', 'Penyehatan air & pengamanan limbah', 'KESEHATAN LINGKUNGAN', 'BELUM', '', '', '', 'BELUM', '', '', NULL);

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
(16, 2, 'Lap. Tribulan KIA'),
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
(31, 5, 'E-SISMAL'),
(32, 6, 'Lap. Bulanan Imunisasi rutin bayi '),
(33, 6, 'Lap. Pemakaian Vaksin & Logistik'),
(34, 6, 'Lap. Imunisasi rutin IPV'),
(35, 6, 'Lap. Rekapitulasi Imunisasi TT Ibu hamil & WUS'),
(36, 6, 'Lap. PWS Imunisasi'),
(37, 6, 'Lap. Imunisasi rutin BATITA'),
(38, 6, 'Lap. KIPI Non Serius'),
(39, 6, 'Lap. KIPI (Kejadian Ikutan Pasca Imunisasi)'),
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
(56, 4, 'lap 3'),
(57, 1, 'Lap. Data Dasar UKBM Kab/Kota ( TRI BULAN )'),
(58, 8, 'Data Rujukan Puskesmas'),
(59, 8, '15 Penyakit Terbanyak'),
(60, 8, 'Lap. Rawat Jln Tk. Pertama ( RJTP ) BPJS'),
(61, 8, 'Lap tahunan Data Kes 145 Penyakit di Kap/Kota '),
(62, 8, 'Lap. Tribulan perawatan kesmas'),
(63, 8, 'Lap. Bulanan Perkesmas'),
(64, 8, 'Perhitungan Penilaian Kinerja Puskesmas'),
(65, 9, '15 Pemakaian Obat Terbanyak'),
(66, 9, 'LB. Puskesmas/Indikator penilaian proses kegiatan '),
(67, 9, 'Kegiatan Laboraturium'),
(68, 4, 'Lap. Bulanan LB3/ TLB3 Diare'),
(69, 4, 'Lap. Bulanan Typoid'),
(70, 4, 'Lap. Bulanan TB Paru'),
(71, 4, 'Register TBC UPK'),
(72, 4, 'Register Kohort Penderita Kusta'),
(73, 4, 'Lap. P2 Kusta'),
(74, 4, 'LB3 ISPA/P2M'),
(75, 4, 'PWS Pneumonia balita'),
(76, 4, 'Lap. ILLI'),
(77, 4, 'Lap. Bulanan IMS (Inveksi Menular Seksual)'),
(78, 4, 'Lap. Rabies'),
(79, 4, 'Konseling & Tes HIV Suka Rela (KRS/VCT)'),
(80, 4, 'Pemeriksaan Jentik'),
(81, 6, 'Data skrining penyakit jantung dan kardiovaskuler'),
(82, 4, 'Format C1 ( Campak)'),
(83, 6, 'List Penderita AFP'),
(84, 6, 'Form LB - KLB (Kejadian Luar Biasa)'),
(85, 6, 'Lap. DATA INDIVIDU TIPK'),
(86, 6, 'Pel. Kes Penderita DIABETES MELLITUS'),
(87, 6, 'Lap. Pelacakan K3JH'),
(88, 6, 'Pel Kes Penderita HIPERTENSI'),
(89, 6, 'Lap. Pemeriksaan IVA tes / Papsmear'),
(90, 6, 'Surveilance Terpadu Penyakit Menular/Penyakit Baru'),
(91, 6, 'Lap. W1 & W2 Mingguan'),
(92, 6, 'SPM Pel. Kes. Pada usia Produktif 15-59 th'),
(93, 7, 'Pencatatan dan Pelaporan Posbindu PTM'),
(94, 7, 'Kesehatan Indra'),
(95, 7, 'Lap. Rekapitulasi Penderita Malaria Tingkat Puskesmas'),
(96, 7, 'Lap. Bulanan UKP/UKM Pel Puskesmas'),
(97, 2, 'PWS KIA ( Ibu )/ Indikator Kesehatan Ibu & Anak'),
(98, 2, 'Lap Buku KIA '),
(99, 2, 'Pelayanan KB/ LB3 KB ( Peserta Baru)'),
(100, 2, 'LB Kesehatan Reproduksi (LB Kusub & KB)'),
(101, 2, 'PWS KB (Kesehatan Usia Subur)'),
(102, 2, 'Data Kematian Neonatus'),
(103, 2, ' Lap. Kematian Neonatus 7-28 hari'),
(104, 2, 'Form Lap. Maternal '),
(105, 2, 'Lap. Kematian Neonatus 0-6 hari hari'),
(106, 2, 'Rekapitulasi  Neonatal'),
(107, 2, 'Lap. BALITA dan APRAS'),
(108, 2, 'Kesehatan anak usia sekolah (AUS)/ UKS'),
(109, 2, 'Kesehatan Remaja'),
(110, 2, 'Lap. Kematian Ibu'),
(111, 2, 'Data Kematian Bayi & Balita'),
(112, 2, 'Lap. GIZI Online / Email'),
(113, 2, 'Ibu Hamil Komplikasi'),
(114, 2, 'Ibu Hamil Resiko Tinggi'),
(115, 2, 'Laporan persalinan / GEMILLI (kembar)'),
(116, 2, 'Penanggulangan kekerasan terhadap perempuan'),
(117, 2, 'Penularan HIV dari ibu ke anak'),
(118, 2, 'Lap. Kematian Bayi (29-11 hari)'),
(119, 2, 'Lap. Kematian Balita (12 - 59 bulan)'),
(120, 2, 'Data Alakon'),
(121, 2, 'Data dasar program kesehatan dan penyakit pada lansia/ Usila'),
(122, 2, 'Rekapitulasi hasil penjaringan kes peserta didik'),
(123, 2, 'Lap. Kesehatan Pekerja (UKK) kesmas'),
(124, 2, 'Lap. Bulanan Kesehatan Olah raga'),
(125, 2, 'Lap. Bulanan Keg Puskesmas'),
(126, 3, 'Rencana Kerja Petugas Kes Ling Puskesmas'),
(127, 3, 'Kondisi Kesehatan Lingkungan Perumahan'),
(128, 3, 'Gambaran Tingkat Resiko Pencemaran SAB'),
(129, 3, 'Pengawasan Sampah ( TPS/ TPA)'),
(130, 3, 'Kepadatan Lalat'),
(131, 3, 'Laporan Klinik Sanitasi'),
(132, 3, 'Data Penyakit Berbasis Lingkungan'),
(133, 3, 'Hasil penilaian kartu rumah oleh Kader '),
(134, 3, 'Penyehatan air & pengamanan limbah');

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
  `idPuskesmas` int(10) DEFAULT NULL,
  `level` varchar(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`, `nama`, `noHp`, `idPuskesmas`, `level`, `jabatan`) VALUES
(1, 'admin', '234', 'Ahmad', '08666666', 2, 'admin', 'jjj'),
(2, 'silvi', '1', 'silvi', '085', 1, 'User', 'Kepala Puskesmas');

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
  MODIFY `idDetailLaporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;
--
-- AUTO_INCREMENT for table `formatfield`
--
ALTER TABLE `formatfield`
  MODIFY `idField` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
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
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
