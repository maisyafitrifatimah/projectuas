-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2025 at 09:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `eskul`
--

CREATE TABLE `eskul` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eskul`
--

INSERT INTO `eskul` (`id`, `judul`, `keterangan`, `gambar`, `created_at`, `updated_at`, `created_by`) VALUES
(4, 'Pencak Silat', '', 'informasi1739890189.jpg', '2025-02-18 14:49:49', NULL, 2),
(5, 'Tilawatil Qur;an', '', 'informasi1739890274.jpg', '2025-02-18 14:51:14', NULL, 2),
(6, 'Nasyid', '', 'informasi1739890567.jpg', '2025-02-18 14:56:07', NULL, 2),
(7, 'Olahraga', '', 'informasi1739890611.jpg', '2025-02-18 14:56:51', NULL, 2),
(8, 'Pramuka', '', 'informasi1739890669.jpg', '2025-02-18 14:57:14', '2025-02-18 21:57:49', 2),
(9, 'Paskibra', '', 'informasi1740233534.jpg', '2025-02-22 14:12:14', NULL, 2),
(10, 'Syarhil Qur\'an', '', 'informasi1740233571.jpg', '2025-02-22 14:12:51', NULL, 2),
(11, 'Fahmil Qur\'an', '', 'informasi1740233592.jpg', '2025-02-22 14:13:12', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Kantin Sekolah', '', 'jurusan1739889139.jpg', '2021-09-01 15:17:41', '2025-02-22 21:04:54'),
(2, 'Ruang Guru Dan Tata Usaha', '', 'jurusan1739889093.jpg', '2021-09-01 15:18:12', '2025-02-22 21:04:44'),
(3, 'Perpustakaan', '', 'jurusan1739889058.jpeg', '2021-09-01 15:18:35', '2025-02-22 21:04:36'),
(4, 'Laboratorium', '', 'jurusan1739889017.jpeg', '2021-09-01 15:18:56', '2025-02-22 21:04:02'),
(5, 'Ruang Kelas', '', 'jurusan1739888978.jpg', '2021-09-01 15:19:09', '2025-02-22 21:03:50'),
(6, 'Usaha Kesehatan Sekolah (UKS)', '', 'jurusan1739889209.jpg', '2025-02-18 14:33:29', NULL),
(7, 'Ruang Lab Komputer Siswa Siswi', '', 'jurusan1739889269.jpg', '2025-02-18 14:34:29', NULL),
(8, 'Mushola Sekolah', '', 'jurusan1739889352.jpg', '2025-02-18 14:35:52', NULL),
(9, 'Ruang Bimbingan Konseling(BK)', '', 'jurusan1739889390.jpg', '2025-02-18 14:36:30', NULL),
(10, 'Toilet Siswa-Siswi', '', 'jurusan1739889506.jpg', '2025-02-18 14:38:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(6, 'galeri1739891832.jpg', 'Olimpiade Mathematic USU', '2025-02-18 15:17:12', NULL),
(7, 'galeri1739892003.jpg', 'Upacara Sekolah', '2025-02-18 15:20:03', NULL),
(8, 'galeri1739892041.jpg', 'Alumni Tahun 2024', '2025-02-18 15:20:41', NULL),
(9, 'galeri1739892062.jpg', 'Alumni Tahun 2022', '2025-02-18 15:21:02', NULL),
(10, 'galeri1739892102.jpg', 'Acara Syukuran MTQ Atas Juara Umum 1', '2025-02-18 15:21:42', NULL),
(11, 'galeri1739892186.jpg', 'Sosialisasi, Bimbingan Dan Arahan Dari Bpk Kakan K', '2025-02-18 15:23:06', NULL),
(12, 'galeri1739892229.jpg', 'Paskibra Sekolah', '2025-02-18 15:23:49', NULL),
(13, 'galeri1739892295.jpeg', 'Juara Perlombaan Sekolah', '2025-02-18 15:24:55', NULL),
(14, 'galeri1739892392.jpg', 'Paduan Suara Siswa-Siswi TPI Sawit Seberang', '2025-02-18 15:26:32', NULL),
(15, 'galeri1739892428.jpg', 'Anggota Osis TPI Sawit Seberang', '2025-02-18 15:27:08', NULL),
(16, 'galeri1739892464.jpg', 'Perlombaan MTQ Tingkat Kabupaten', '2025-02-18 15:27:44', NULL),
(17, 'galeri1739892493.jpg', 'Siswa-Siswi Latihan Fahmil', '2025-02-18 15:28:13', NULL),
(18, 'galeri1739892521.jpg', 'Siswa-Siswi Khataman Bersama', '2025-02-18 15:28:41', NULL),
(19, 'galeri1739892584.jpeg', 'Pembagian Hadiah Juara Kelas Tpi Sawit Seberang', '2025-02-18 15:29:44', NULL),
(20, 'galeri1739892616.jpg', 'Hari Guru TPI Sawit Seberang', '2025-02-18 15:30:16', NULL),
(21, 'galeri1739892649.jpg', 'Perlombaan Guru-guru Dihari Guru', '2025-02-18 15:30:49', NULL),
(22, 'galeri1739892675.jpg', 'Foto Guru Bersama', '2025-02-18 15:31:15', NULL),
(23, 'galeri1739892745.jpg', 'Doa Bersama ', '2025-02-18 15:32:25', NULL),
(24, 'galeri1739892798.jpg', 'Latihan Baris Berbaris Siswa-Siswi', '2025-02-18 15:33:18', NULL),
(25, 'galeri1739892821.jpg', 'Pembukaan Acara Perlombaan', '2025-02-18 15:33:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `komentar_id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`komentar_id`, `nama`, `email`, `pesan`, `date`) VALUES
(2, 'Budi', 'budi@gmail.com', 'Secara desain sudah bisa, tetapi sebaiknya dilakukan update secara berkala pada website agar lebih informatif ', '2023-12-18 03:05:51'),
(3, 'Delta', 'delta@yahoo.com', 'Tes saja ', '2023-12-18 03:06:29'),
(4, 'Maisya Fitri Fatimah', 'maisyafitri332@gmail.com', ' halo', '2024-12-04 05:48:17'),
(5, 'ucok', 'ucok@gmail.com', 'hai', '2025-02-24 13:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `logo` varchar(50) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `tentang_sekolah` text NOT NULL,
  `foto_sekolah` varchar(50) NOT NULL,
  `google_maps` text NOT NULL,
  `nama_kepsek` varchar(50) NOT NULL,
  `foto_kepsek` varchar(50) NOT NULL,
  `sambutan_kepsek` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama`, `email`, `telepon`, `alamat`, `logo`, `favicon`, `tentang_sekolah`, `foto_sekolah`, `google_maps`, `nama_kepsek`, `foto_kepsek`, `sambutan_kepsek`, `created_at`, `updated_at`) VALUES
(1, 'MAS TPI SAWIT SEBERANG', 'mastpi@gmail.com', '012345678911', 'Jl. Besar Sawit Seberang No.100, Kab. Langkat.kota Medan 69725523', 'logo1736314861.jpg', 'favicon1736314861.jpg', '<p style=\"text-align: center;\"><strong>TENTANG</strong></p>\r\n<p style=\"text-align: center;\">MAS TPI Sawit Seberang merupakan Salah satu Sekolah Madrasah Aliyah Swasta yang ada di Jl.Besar Sawit Seberang No.100, Kabupaten Langkat Provinsi Sumatera Utara, Indonesia. Sama dengan MA pada umumnya di indonesia masa pendidikan sekolah di MAS TPI Sawit Seberang ditempuh dalam waktu tiga tahun pelajaran, mulai dari kelas X sampai Kelas XII. Didirikan pada tahun 1982. MAS Tpi Sawit Seberang memiliki akreditasi grade B dengan nilai 85 (akreditasi tahun 2020) dari BAN-S/M (Badan Akreditasi Nasional) Sekolah/Madrasah.Dalam menjalankan kegiatannya, MAS TPI SAWIT SEBERANG berada di bawah naungan Kementerian Agama.</p>\r\n<p style=\"text-align: center;\"> </p>\r\n<p style=\"text-align: center;\"><strong>Visi Misi</strong></p>\r\n<p style=\"text-align: center;\">“Berakhlak mulia, berprestasi tinggi, tangguh dalam kompetisi, berwawasan lingkungan dengan berlandaskan budaya nasional dan kearifan lokal”.</p>', 'sekolah1736316904.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.2607433471429!2d98.27213618920898!3d3.80078103739117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30373199787cd5e5%3A0x34e9bddfb1f2bf10!2sSekolah%20Taman%20Pendidikan%20Islam%20TPI!5e0!3m2!1sid!2sid!4v1719979343362!5m2!1sid!2sid\" ', 'Putri Wulan Syafriah S.Pdi', 'kepsek1736314921.jpg', '<p>Assalamualaikum warahmatullahi wabarakatuh,Salam sejahtera untuk semua siswa-siswi, guru-guru, dan seluruh staf di sekolah kita yang tercinta.Saya sebagai Kepala Sekolah merasa bangga dan bersyukur dapat memimpin sekolah ini. Kita semua berada dalam lingkungan yang memungkinkan kita untuk belajar dan berkembang bersama.Di sekolah ini, kita memprioritaskan pendidikan yang berkualitas dan juga memberikan kesempatan bagi siswa-siswi untuk mengembangkan potensi mereka di berbagai bidang.Kami juga selalu berusaha untuk meningkatkan fasilitas dan sumber daya yang ada agar dapat memberikan lingkungan belajar yang optimal bagi siswa-siswi.\r\nSaya mengajak seluruh siswa-siswi untuk bersemangat dalam mengejar cita-cita dan mencapai prestasi yang membanggakan.</p>', '2021-08-14 15:24:49', '2025-01-08 13:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Super Admin','Admin') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Maisya', 'sa', 'e807f1fcf82d132f9bb018ca6738a19f', 'Super Admin', '2021-07-17 06:25:30', '2021-09-01 21:49:21'),
(2, 'Fitri', 'admin', 'fcea920f7412b5da7be0cf42b8c93759', 'Admin', '2021-07-17 06:25:30', '2025-02-24 21:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `youtobe`
--

CREATE TABLE `youtobe` (
  `id` int(11) NOT NULL,
  `video` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `youtobe`
--

INSERT INTO `youtobe` (`id`, `video`, `keterangan`, `created_at`, `updated_at`) VALUES
(8, 'https://www.youtube.com/embed/kJhyYK0rOV8?si=T-VlC7kmDwn9ZMSe', 'Pelantikan pengurus ambalan gugus depan TPI Sawit Seberang', '2025-02-21 15:39:05', NULL),
(9, 'https://www.youtube.com/embed/dmUSGjj6O-Q?si=2iEg3J0-as2vaiQW', 'Profil sekolah MAS TPI SAWIT SEBERANG', '2025-02-21 15:41:53', NULL),
(10, 'https://www.youtube.com/embed/ih_05uo5elU?si=eqEIG4VflnK4YKGm', 'Kenangan MAS TPI SAWIT SEBERANG', '2025-02-21 15:44:22', NULL),
(11, 'https://www.youtube.com/embed/y4-ORHaLnVY?si=AqjI4fwqPJtKxPkL', 'Perkemahan sabtu-minggu (PERSAMI) TPI Sawit Seberang', '2025-02-21 15:45:45', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eskul`
--
ALTER TABLE `eskul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`komentar_id`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtobe`
--
ALTER TABLE `youtobe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eskul`
--
ALTER TABLE `eskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `komentar_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `youtobe`
--
ALTER TABLE `youtobe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
