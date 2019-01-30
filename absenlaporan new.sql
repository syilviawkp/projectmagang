-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2019 at 09:22 AM
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
  `idLaporan` int(50) NOT NULL,
  `namaField` varchar(225) NOT NULL,
  `namaKategori` varchar(200) NOT NULL,
  `Batu` varchar(100) DEFAULT NULL,
  `Junrejo` varchar(100) DEFAULT NULL,
  `Beji` varchar(100) DEFAULT NULL,
  `Sisir` varchar(100) DEFAULT NULL,
  `Bumiaji` varchar(100) DEFAULT NULL,
  `terima` text NOT NULL,
  `susulan` text NOT NULL,
  `Kepanjen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detaillaporan`
--

INSERT INTO `detaillaporan` (`idDetailLaporan`, `idLaporan`, `namaField`, `namaKategori`, `Batu`, `Junrejo`, `Beji`, `Sisir`, `Bumiaji`, `terima`, `susulan`, `Kepanjen`) VALUES
(1, 1, 'LB 1 ( Data Penyakit)', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', 'SUDAH', NULL, NULL, NULL, NULL, '', '', NULL),
(2, 1, 'LB 2 (Data Kematian Puskesmas)', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', 'SUDAH', NULL, NULL, NULL, NULL, '', '', NULL),
(3, 1, 'LB 4 ( Rawat Jalan - Rawat Inap)', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(4, 1, 'Lap. Pelaksanaan JKN', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(5, 1, 'TLB 1 (Data Pelayanan Ponpes dan Panti Asuhan)', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(6, 1, 'Data Rujukan Puskesmas', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(7, 1, '15 Penyakit Terbanyak', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(8, 1, 'Lap. Rawat Jln Tk. Pertama ( RJTP ) BPJS', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(9, 1, 'Lap tahunan Data Kes 145 Penyakit di Kap/Kota ', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(10, 1, 'Lap. Tribulan perawatan kesmas', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(11, 1, 'Lap. Bulanan Perkesmas', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(12, 1, 'Perhitungan Penilaian Kinerja Puskesmas', 'PELAYANAN KESEHATAN DASAR & RUJUKAN', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(13, 1, 'LPLPO (Lap. Pemakaian dan Lembar Permintaan Obat)', 'FARMASI', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(14, 1, 'Monitoring Indikator Peresepan', 'FARMASI', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(15, 1, 'Kompilasi Data Peresepan Tingkat Puskesmas', 'FARMASI', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(16, 1, 'Lap. Penggunaan Psikotropika', 'FARMASI', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(17, 1, 'Lap. Penggunaan Narkotika', 'FARMASI', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(18, 1, '15 Pemakaian Obat Terbanyak', 'FARMASI', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(19, 1, 'LB. Puskesmas/Indikator penilaian proses kegiatan ', 'FARMASI', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(20, 1, 'Kegiatan Laboraturium', 'FARMASI', NULL, NULL, NULL, NULL, NULL, '', '', NULL);

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
(17, 2, 'Kesehatan Usila'),
(18, 2, 'Kesehatan Remaja'),
(19, 2, 'Lap. Kematian Ibu'),
(20, 2, 'Data Kematian Bayi & Balita'),
(21, 2, 'Lap. GIZI'),
(22, 2, 'Ibu Hamil Komplikasi'),
(23, 2, 'Ibu Hamil Resiko Tinggi'),
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
(134, 3, 'Penyehatan air & pengamanan limbah'),
(135, 6, 'Format C1 ( Campak)');

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
-- Table structure for table `hitungsms`
--

CREATE TABLE `hitungsms` (
  `idsms` int(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlahsms` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'YANKES', 'Januari', 2019);

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
(1, 'Batu', 'Pesanggrahan, Kec. Batu, Kota Batu', 'AKTIF', '2015-10-01', '2021-05-23'),
(2, 'Bumiaji', 'Jl. Raya Pandanrejo No.43, Pandanrejo, Bumiaji, Kota Batu, Jawa Timur 65332', 'AKTIF', '2015-08-01', '2023-05-05'),
(3, 'Beji', 'Jl. Ir. Sukarno - Beji', 'AKTIF', '2015-01-01', '2023-05-05'),
(4, 'Junrejo', 'Jl. Pronoyudho 30 Dadaprejo - Junrejo 65323', 'AKTIF', '2015-01-01', '2023-05-05'),
(5, 'Sisir', 'Jl. Sutan Hasan Halim No. 26', 'AKTIF', '2015-01-01', '2023-05-05');

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
(4, 'admin', '234', 'admin', '085706809870', 0, 'Admin', 'Staff'),
(6, 'bumiaji', '123456', 'dr. Sachariono', '08123981015', 2, 'User', 'Kepala puskesmas'),
(7, 'batu', '123456', 'dr. Kartini', '085706809870', 1, 'User', 'Kepala puskesmas'),
(8, 'beji', '123456', 'dr. Boscho', '082233724997', 3, 'User', 'Kepala puskesmas'),
(9, 'junrejo', '123456', 'dr. Fauzi', '081334783707', 4, 'User', 'Kepala puskesmas'),
(10, 'sisir', '123456', 'dr. Jongky', '085850795577', 5, 'User', 'Kepala puskesmas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detaillaporan`
--
ALTER TABLE `detaillaporan`
  ADD PRIMARY KEY (`idDetailLaporan`),
  ADD KEY `idLaporan` (`idLaporan`);

--
-- Indexes for table `formatfield`
--
ALTER TABLE `formatfield`
  ADD PRIMARY KEY (`idField`),
  ADD KEY `idKategori` (`idKategori`);

--
-- Indexes for table `formatkategori`
--
ALTER TABLE `formatkategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `hitungsms`
--
ALTER TABLE `hitungsms`
  ADD PRIMARY KEY (`idsms`);

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
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idPusksmas` (`idPuskesmas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detaillaporan`
--
ALTER TABLE `detaillaporan`
  MODIFY `idDetailLaporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `formatfield`
--
ALTER TABLE `formatfield`
  MODIFY `idField` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT for table `formatkategori`
--
ALTER TABLE `formatkategori`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `hitungsms`
--
ALTER TABLE `hitungsms`
  MODIFY `idsms` int(100) NOT NULL AUTO_INCREMENT;
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
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detaillaporan`
--
ALTER TABLE `detaillaporan`
  ADD CONSTRAINT `idLaporan` FOREIGN KEY (`idLaporan`) REFERENCES `laporan` (`kodeLaporan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `formatfield`
--
ALTER TABLE `formatfield`
  ADD CONSTRAINT `idKategori` FOREIGN KEY (`idKategori`) REFERENCES `formatkategori` (`idKategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
