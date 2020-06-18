-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2019 at 01:09 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prima`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `nama_album` varchar(250) NOT NULL,
  `sampul_album` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `nama_album`, `sampul_album`) VALUES
(1, 'PROYEK SUKABUMI', '1.jpg'),
(2, 'PROYEK CIANJUR', '2.jpg'),
(3, 'PROYEK JAMPANG', '3.jpg'),
(4, 'PROYEK BANDUNG', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `id_album` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumentasi`
--

INSERT INTO `dokumentasi` (`id`, `judul`, `photo`, `id_album`) VALUES
(1, 'hjldbjlbjb', '1.jpg', 1),
(2, 'kafnnfajfh', '2.jpg', 1),
(3, 'fnabjabjb', '3.jpg', 2),
(4, 'hfhaf', '4.jpg', 2),
(5, 'hvlzjvbjbdz', '5.jpg', 3),
(6, 'afljbhjdhj', '6.jpg', 3),
(7, 'hslhvlsvbdjs', '7.jpg', 4),
(8, 'fjbvdhshdsh', '8.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `keunggulan`
--

CREATE TABLE `keunggulan` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `isi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keunggulan`
--

INSERT INTO `keunggulan` (`id`, `judul`, `isi`) VALUES
(1, 'BAHAN BERKUALITAS ', '<p>Kami sangat mementingkan kualitas pada bahan - bahan yang kami miliki, karna kualitas pada bahan akan membuat hasil semakin baik.</p>'),
(2, 'PROFESIONAL', 'Pegawai kami sangat profesional dalam melakukan peerjaan nya, karna dari itu kami selalu melakukan pekerjaan dengan amat baik.'),
(3, 'HARGA BERSAING ', '<p>Harga kami sangat bersaing, dengan harga bersaing ini kami tetap mengutamakan kualitas bahan kami miliki.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pesan` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `subject`, `email`, `pesan`, `date`, `time`) VALUES
(20, 'Fahmi ', 'cek lokasi PT', 'Fahmi@gmail.com', 'lokasi tempatnya biar sayah langsung ke PT', '2019-09-28', '08:44:53'),
(21, 'Rangga ', 'kualitas Aspal', 'Rangga@gmail.com', 'kulitas aspalnya gimana ', '2019-09-28', '08:47:32'),
(22, 'Firman', 'Harga', 'Firman@gmail.com', 'Harga perkilo meternya ', '2019-09-28', '08:48:38'),
(23, 'Adam', 'Waktu', 'Adam@gmail.com', 'berapa lama watu pekerjaan nya dalam ukuran 2000 km', '2019-09-28', '08:51:24'),
(24, 'Astri Monica', 'cek lokasi PT', 'nendyyusup79@gmail.com', 'terimaksih', '2019-09-29', '06:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `jabatan`, `photo`) VALUES
(1, 'Asep Saepudin, A.Md', 'Direktur', '70dcef98059b3b8bd02a72e012b86617.png'),
(2, 'Astri Monica', 'ADM. Umum', 'fe7b2ee18aa21fd8400b5d5eef5dbafc.png'),
(3, 'Asep Supriatna', 'Pemasaran', 'f6ebf22b90cd4cdeffab5eaff2ec8efd.png'),
(4, 'Cecep Rudi', 'ADM. Keuangan', '49368b784717d8e10a0955059aa60119.png');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `paket` varchar(250) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nama`, `email`, `tlp`, `paket`, `pesan`) VALUES
(1, 'Astri Monica', 'nendyyusup79@gmail.com', '085795070707', 'PAKET B', 'haii brow'),
(2, 'Imam Nu\'man A.Md', 'nendyyusup79@gmail.com', '085795070707', 'PAKET C', 'untuk pekerjaan +- 10Km');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(500) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `nama_paket`, `judul`, `isi`, `harga`) VALUES
(1, 'PAKET A', 'Pelapisan Aspal Hotmix', '<p>Pembersihan Lokasi Jalan Yang Akan di Aspal <br><br>\r\nDisiram Teck Coating Pelingkut Aspal Cair <br><br>\r\nDihampar Aspal Hotmix <br><br>\r\nSupply Chain Optimization AMP Kw 1 Sehensit Super <br><br>\r\nPemadatan dengan Mesin Body Rool</p>', 68000),
(2, 'PAKET B', 'Tambal sulam yang berlubang ditutup batu kerikil / aspal hotmix', '<p>Pembersihan lokasi jalan yang akan diaspal <br><br>\r\nYang berlubang ditutup dengan batu kerikil <br><br>\r\nDipadatkan dengan mesin body rool <br><br>\r\nDisiram teck coating pelingkut aspal cair</p>', 75000),
(3, 'PAKET C', 'Aspal lapen penetrasi', '<p>Hampar batu makadam <br><br>\r\nHampar batu split <br><br>\r\nDisiram teck coating aspal bakar <br><br>\r\nDihampar abu batu</p>', 95000);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `isi` varchar(25000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `judul`, `isi`) VALUES
(1, 'PT.Prima Mixindo Utama 2', '<p style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PRIMA MIX INDO adalah Perusahaan Swasta Nasional yang baru berkembang dan didirikan pada tanggal 14 Oktober 2014 berdasarkan Akta No. 22 pada Notaris Silvia Ninawaty SH, yang bergerak di bidang &ldquo;Jasa Konstruksi Jalan dan Supplier Aspal Hotmix&rdquo;. Perusahaan Kami memang baru, tetapi Kami sebagai pemilik sudah sangat ahli dan berpengalaman di bidang Konstruksi Jalan Aspal Hotmix sejak tahun 2000.</p>\r\n<p style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp;Kami siap bekerjasama dengan berbagai Instansi diantaranya : Departemen Pekerjaan Umum, PT. Jasa Marga, Para Developer dan Kontraktor lainnya.</p>\r\n<p style=\"text-align: justify;\">Jasa Pengaspalan Hotmix dan Betonisasi</p>\r\n<p style=\"text-align: justify;\">&nbsp; &nbsp; Kami melayani Jasa Pengaspalan Hotmix dan Betonisasi di Wilayah: JABODETABEK, Jakarta, Bogor, Depok, Tangerang, Bekasi, Serang, Cilegon, Cibubur, Cileungsi, Cikarang, Karawang, Purwakarta, Cikampek, Banten, Bandung,&nbsp; Cirebon, wilayah Jawa Barat dan sekitarnya.</p>\r\n<p style=\"text-align: justify;\">Kami melayani segala macam jenis Jasa Pekerjaan Pengaspalan Hotmix dan Betonisasi untuk:</p>\r\n<p style=\"text-align: justify;\">Jalan Raya Umum, Departemen Pekerjaan Umum, Jalan Tol Jasa Marga, Jalan Perumahan Cluster, Jalan Lingkunggan Perumahan, Jalan Raya Kawasan Industri dll.</p>\r\n<p style=\"text-align: justify;\">Halaman Parkir, Pabrik, Kantor, Mall, Ruko, Area SPBU dll.</p>\r\n<p style=\"text-align: justify;\">Perbaikan Jalan Patching, Leveling, Pelapisan Aspal dll.</p>\r\n<p style=\"text-align: justify;\">Kami mengutamakan mutu dan kualitas selalu terjaga dan sesuai dengan spesifikasi yang disyaratkan. Kami juga memiliki tenaga yang Profesional di bidangnya masing-masing, mulai dari Tenaga Penghamparan secara Manual atau Penghamparan memakai Alat Berat (Mesin) Satu Sett dengan peralatan yang sangat cangih dan modern.</p>\r\n<p style=\"text-align: justify;\">Jenis-Jenis Aspal Hotmix</p>\r\n<p style=\"text-align: justify;\">Asphal Hotmix ATB (Asphalt Treated Base)</p>\r\n<p style=\"text-align: justify;\">Asphal Hotmix AC/BC (Asphalt Concrete Binder Course)</p>\r\n<p style=\"text-align: justify;\">Asphal Hotmix AC/WC (Asphalt Concrete Weering Course)</p>\r\n<p style=\"text-align: justify;\">Asphal Hotmix HRS (Hot Roller Sheet)</p>\r\n<p style=\"text-align: justify;\">Asphal Hotmix III Laston</p>\r\n<p style=\"text-align: justify;\">Asphal Hotmix Shand Sheet 2</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `reputasi`
--

CREATE TABLE `reputasi` (
  `id` int(11) NOT NULL,
  `happy` int(11) NOT NULL,
  `project` int(11) NOT NULL,
  `positive` int(11) NOT NULL,
  `followers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reputasi`
--

INSERT INTO `reputasi` (`id`, `happy`, `project`, `positive`, `followers`) VALUES
(1, 1, 2, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `isi` varchar(250) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `judul`, `isi`, `gambar`) VALUES
(1, 'ASPAL BERKUALITAS', 'Kami Hanya Menjual Aspal Berkualitas (ORIGINAL) Tanpa ada Unsur Manipulasi.', '4.jpg'),
(2, 'HARGA YANG BERSAING', 'Kami Usahakan Untuk Menjual Dengan Harga Terbaik Untuk Anda.', '5.jpg'),
(3, 'BERPENGALAMAN', 'Kami Berpengalaman Dalam Bidang Pengaspalan. Sudah Banyak Proyek Yang Berhasil Kami Selesaikan dengan Hasil Yang Memuaskan.', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `isi` varchar(500) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `jabatan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `isi`, `photo`, `jabatan`) VALUES
(1, 'Mark Zuckerberg', 'Wbsite nya yang bagus. cuman sayang kamu tidak bekerja bersama saya, apakah anda mau bekerja dengan saya..', '1.jpg', 'Presiden Facebook'),
(2, 'bill Gates', '<p>Saya puas dengan hasil pekerjaan anda, di instansi lain tidak akan sebaik ini, saya harap kita akan bekerja sama kembali di lain waktu.</p>', '2144ea73a77845e53c795c54b49b719b.jpg', 'bill Gates'),
(3, 'Imam Nu\'man A.Md', '<p>Ini Sangat LUAR BIASA... Pekerjaan nya sangat baik, pegawai nya yang sangat Profesional....!!</p>', '67bc4e4484a2dc73eddfe8241575e41d.jpg', 'Imam Nu\'man A.Md');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `fullname`, `password`, `email`) VALUES
(3, 'Admin', 'Yusup Junaedi', '$2y$10$vD/Pc18x7rDPU/BzLRQtyeQRPAtBkivtxjKrHf2G.Zl52K4hygXAK', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keunggulan`
--
ALTER TABLE `keunggulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reputasi`
--
ALTER TABLE `reputasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `keunggulan`
--
ALTER TABLE `keunggulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reputasi`
--
ALTER TABLE `reputasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
