-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 22, 2024 at 02:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laroiba`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'dimas', '7d49e40f4b3d8f68c19406a58303f826'),
(3, 'aaa', '4124bc0a9335c27f086f24ba207a4912'),
(4, 'aa', '4124bc0a9335c27f086f24ba207a4912'),
(5, 'suci', '202cb962ac59075b964b07152d234b70'),
(6, 'suci maniezz', '1cc6545f956f39a79c80b05f65df3c0a'),
(7, 'topless', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi_berita`, `jenis`, `gambar`, `tanggal`) VALUES
(1, 'Pendanaan Biaya Kuliah Dengan Danacita', 'isi\r\n', 'kerjasama', 'b2.PNG', '2022-11-13'),
(2, 'Dosen Komunikasi Penyiaran Islam Mengikuti Seminar Nasional (ASKOPIS)', '', 'dakwah dan komunikasi islam', 'b3.PNG', '2022-10-10'),
(3, 'Achievement Motivation Training (AMT) Bagi Mahasiswa Baru IAI Nasional Laa Roiba', '', 'institusi', 'b4.PNG', '2021-04-04'),
(4, 'Seminar dan Lokakarya', '', 'institusi', 'b5.PNG', '2023-10-10'),
(5, 'Monitoring dan Evaluasi Kopertais Wilayah II Jawa Barat di IAI Nasional Laa Roiba Bogor', '', 'institusi', 'b6.PNG', '2001-02-02'),
(6, 'Kerjasama Kolaborasi Maarif Institute bersama Fakultas Dakwah dan Komunikasi Islam IAI-N Laa Roiba, Prodi Komu', '', 'kerjasama', 'b7.PNG', '2001-01-01'),
(19, 'dumyy', ' tes  ', 'visi', '27(2).png', '2001-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `frontend`
--

CREATE TABLE `frontend` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `isi_konten` text NOT NULL,
  `kategory` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `frontend`
--

INSERT INTO `frontend` (`id`, `nama`, `isi_konten`, `kategory`, `created_at`) VALUES
(1, 'banner1', 'Institut Agama Islam Nasional Laa Roiba Bogor ', 'banner', '2023-12-17 08:33:48'),
(2, 'banner2', ' Sukses adalah proses yang memerlukan kerja keras, ketekunan, dan tekad yang kuat. Mari raih kesuksesan bersama Institut Agama Islam Nasional Laa Roiba Bogor.', 'banner', '2023-12-17 08:54:26'),
(10, 'footer1', 'Ikuti media sosial kami lainnya dan dapatkan Informasi terupdatenya, terimakasih atas kunjungan anda.', 'footer', '2023-12-20 11:01:37'),
(11, 'footer2', 'Alamat Kampus I :\r\nhttps://goo.gl/maps/yN81iyXKoyEsgMpWA', 'footer', '2023-12-20 11:01:37'),
(12, 'footer3', 'Alamat Kampus II :\r\nhttps://goo.gl/maps/dmuNdjHvFUMRhacv5', 'footer', '2023-12-20 11:01:37'),
(13, 'footer4', 'Call:\r\n0251-8640226 atau 021-8757150\r\ninfo@laaroiba.ac.id', 'footer', '2023-12-20 11:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(2, 'csdfcfd', 'vdfvsdfv@gmail.com', 'sd,hcbsdhjc', '2024-01-22 13:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `struktural`
--

CREATE TABLE `struktural` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `posisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `struktural`
--

INSERT INTO `struktural` (`id`, `nama`, `gambar`, `posisi`) VALUES
(3, 'Dr. Hj. Wiwi Uswatiyah, M.Pd. ', 'struktur-4.PNG', 'Ketua '),
(4, 'Yanti Hasbian Setiawati,S.E.,M.Pd.', 'struktur-2.PNG', 'wakil ketua'),
(5, 'Dr. Efrita Norman, M.M.', 'struktur-3.PNG', 'wakil ketua 1'),
(6, 'Dr. Bakti Toni Endaryono, M.M.', 'struktur-1.PNG', 'wakil ketua 2'),
(10, 'CSS', '1(1).png', 'sdcd'),
(11, 'scsd', '1.png', 'dcdsc');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `id_video_youtube` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `judul`, `id_video_youtube`, `tanggal`) VALUES
(2, 'waasdw1', 'awdw1', '2023-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `kategory` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `isi`, `kategory`, `created_at`) VALUES
(2, 'Menyelenggarakan pendidikan yang berkualitas berbasis integrasi ilmu dan agama', 'misi', '2023-12-20 09:12:38'),
(3, 'Menyelenggarakan penelitian yang bermanfaat bagi kemaslahatan masyarakat, bangsa dan negara.', 'misi', '2023-12-20 09:12:38'),
(4, 'Menyelenggarakan program pengabdian kepada masyarakat yang berbasis pada kebutuhan dan masalah nyata yang dihadapi masyarakat.', 'misi', '2023-12-20 09:12:38'),
(5, ' Menyelenggarakan tata kelola lembaga secara transparan, akuntabel, dan efisien, serta menerapkan sistem manajemen mutu yang berkelanjutan.', 'misi', '2023-12-20 09:12:38'),
(6, 'Menyelenggarakan kerjasama dengan institusi perguruan tinggi, industri, dan organisasi terkemuka dalam skala nasional dan internasional.', 'misi', '2023-12-20 09:12:38'),
(7, 'Menghasilkan lulusan yang unggul, kompetitif, dan berakhlakul karimah.', 'tujuan', '2023-12-20 09:12:38'),
(8, 'Menghasilkan karya penelitian yang bermanfaat bagi kemaslahatan masyarakat, bangsa dan negara.', 'tujuan', '2023-12-20 09:12:38'),
(9, ' Menghasilkan lulusan yang memiliki kepekaan dan kepedulian sosial yang tinggi, sehingga mampu berperan secara nyata dalam pemberdayaan masyarakat', 'tujuan', '2023-12-20 09:12:38'),
(10, ' Mewujudkan tata kelola lembaga secara transparan, akuntabel, dan efisien, serta menerapkan sistem manajemen mutu yang berkelanjutan.', 'tujuan', '2023-12-20 09:12:38'),
(11, 'Meningkatkan kerjasama dengan institusi perguruan tinggi, industi, dan organisasi terkemuka dalam skala nasional dan internasional.', 'tujuan', '2023-12-20 09:12:38'),
(12, 'Menjadi Perguruan Tinggi Agama Islam yang Unggul, dan Kompetitif, Berakhlaqul Karimah, Berbasis Integrasi Ilmu dan Agama di Tingkat Internasional pada Tahun 2043.', 'visi', '2023-12-20 10:33:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontend`
--
ALTER TABLE `frontend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktural`
--
ALTER TABLE `struktural`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `frontend`
--
ALTER TABLE `frontend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `struktural`
--
ALTER TABLE `struktural`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
