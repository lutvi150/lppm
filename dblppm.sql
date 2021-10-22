-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 03:36 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblppm`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `majalaheksternals`
--

CREATE TABLE `majalaheksternals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fakultas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peneliti` varchar(170) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nidn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabfung` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `majalaheksternals`
--

INSERT INTO `majalaheksternals` (`id`, `judul`, `tahun`, `fakultas`, `peneliti`, `kategori`, `npp`, `nidn`, `jabfung`, `created_at`, `updated_at`) VALUES
(1, 'Pendampingan Peningkatan Santripreneur pada Siswa Siswi Pondok Pesantren Uswatun Hasanah sebagai Bekal Menjadi Wirausaha', '2018', 'FIK', 'ZAKY MACHMUDDAH', 'PTUPT', '0686.11.2017.691', '0686.11.2017.691', 'Asisten Ahli', '2021-05-02 06:28:29', '2021-05-02 06:28:29'),
(2, 'BIMBINGAN TEKNIS APLIKASI SISTEM BOP YANG AKUNTABEL DAN TRANSPARAN UNTUK GURU GURU PAUD', '2018', 'FEB', 'MAHMUD', 'Penelitian Terapan', '0686.11.1995.073', '0686.11.2015.644', 'Asisten Ahli', '2021-05-02 06:28:48', '2021-05-02 06:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `majalahinternals`
--

CREATE TABLE `majalahinternals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fakultas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peneliti` varchar(170) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nidn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabfung` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `majalahinternals`
--

INSERT INTO `majalahinternals` (`id`, `judul`, `tahun`, `fakultas`, `peneliti`, `kategori`, `npp`, `nidn`, `jabfung`, `created_at`, `updated_at`) VALUES
(1, 'Pemberdayaan Warga Binaan Aisyiyah Menuju Kemandirian Perempuan di Bidang Ekonomi', '2018', 'FIK', 'MAHMUD', 'IBM', '0686.11.2017.691', '0686.11.2015.610', 'Asisten Ahli', '2021-05-02 05:45:44', '2021-05-02 05:45:44'),
(2, 'Pengembangan Kapasitas Anak Asuh Lembaga Amil Zakat baitul Muttaqien Melalui Peningkatan Manajemen Diri dalam Menghadapi Efek Negatif Perangkat Telekomunikasi Telepon Seluler Ponsel', '2020', 'FIK', 'TITIEN SUHARTINI SUKAMTO', 'IBM', '0686.11.2015.644', '0686.11.2013.548', 'Asisten Ahli', '2021-05-02 05:46:03', '2021-05-02 05:46:03'),
(3, 'Pemberdayaan Badan Usaha Milik Desa BUMDES untuk Mendukung Pengembangan Wisata Religi Berkelanjutan Melalui Strategi Mapping Potensi Wisata Desa Nyatnyono', '2020', 'FIK', 'TITIEN SUHARTINI SUKAMTO', 'IBM', '0686.11.1995.073', '0686.11.1995.073', 'Lektor Kepla', '2021-05-02 06:25:50', '2021-05-02 06:25:50'),
(4, 'Pemberdayaan Warga Binaan Aisyiyah Menuju Kemandirian Perempuan di Bidang Ekonomi', '2019', 'FEB', 'SIH DARMI ASTUTI', 'PTUPT', '0686.11.2015.610', '0686.11.2015.644', 'Guru Besar', '2021-05-02 06:26:28', '2021-05-02 06:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `majalahs`
--

CREATE TABLE `majalahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `tipe` enum('internal','eksternal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2020_11_28_143757_create_penelitians_table', 2),
(7, '2021_04_17_131737_create_majalahs_table', 3),
(8, '2021_04_29_015158_create_prosiding_table', 3),
(9, '2021_04_29_015228_create_tugas_akhir_table', 3),
(10, '2021_05_02_042858_create_majalahinternals_table', 3),
(11, '2021_05_02_042910_create_majalaheksternals_table', 3),
(12, '2021_05_02_050729_create_prosidings_table', 3),
(13, '2021_05_02_050807_create_pengabdians_table', 3),
(14, '2021_05_02_051402_create_tugasakhirs_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penelitians`
--

CREATE TABLE `penelitians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peneliti` varchar(170) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nidn` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabfung` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penelitians`
--

INSERT INTO `penelitians` (`id`, `judul`, `tahun`, `fakultas`, `peneliti`, `kategori`, `npp`, `nidn`, `jabfung`, `created_at`, `updated_at`) VALUES
(1, 'KONTRIBUSI INTRAPERSONAL SKILLS DAN INTERPERSONAL SKILLS TERHADAP KESIAPAN KERJA MENGHADAPI MEA PADA MAHASISWA UNIVERSITAS DIAN NUSWANTORO', '2015', 'FIK', 'ENTOT SUHARTONO M.KOM', 'IBM', '0686.11.2018.744', '0517107101', 'Asisten Ahli', '2020-12-01 22:06:30', '2020-12-01 22:06:30'),
(2, 'ANALISIS FAKTOR - FAKTOR YANG MEMPENGARUHI MINAT PEMILIHAN KARIR AKUNTAN PUBLIK DAN AKUNTAN NON PUBLIK MAHASISWA AKUNTANSI (STUDI KASUS PADA UNIVERSITAS DIAN NUSWANTORO DAN UNIVERSITAS AKI SEMARANG)', '2017', 'FEB', 'HERMAWAN TRIONO SE.,MSi.,Ak.,CA', 'Ipteks', '0686.11.2013.566', '0625066101', 'Asisten Ahli', '2020-12-01 22:09:56', '2020-12-01 22:09:56'),
(3, 'POTENSI MASJID NABI NUH SEBAGAI DESTINASI WISATA RELIGI BARU DI KOTA SEMARANG', '2016', 'FEB', 'MILA SARTIKA SEI, MSI', 'Penelitian Dosen Pemula', '0686.11.2013.548', '0626058502', 'Asisten Ahli', '2020-12-01 22:11:34', '2020-12-01 22:11:34'),
(4, 'Social Marketing On Internet: It\'s Role To Disseminate Knowledge Mobilization On Public Engangement’s Climate Change.', '2019', 'FIK', 'Prof. VINCENT DIDIEK WIET ARYANTO MBA, Ph.D', 'Penelitian Terapan', '0686.11.2014.606', '0630095701', 'Guru Besar', '2020-12-01 22:13:10', '2020-12-01 22:13:10'),
(5, 'Pengembangan Model Penguatan Sdm Dan Rancang Bangun Portal Industri Kreatif Gamelan Berbasis Teknologi Informasi Di Propinsi Jawa Tengah', '2018', 'FT', 'DR YOHAN WISMANTORO SE, MM', 'PTUPT', '0686.11.2013.566', '0626058502', 'Lektor Kepla', '2020-12-01 22:48:10', '2020-12-01 22:48:10'),
(6, 'Identifikasi Ragam Hias Bangunan Cagar Budaya Sebagai Aset Visual', '2019', 'FIB', 'DEDDY AWARD WIDYA LAKSANA M.Pd', 'Penelitian Terapan', '0686.11.2013.548', '0630095701', 'Lektor Kepla', '2020-12-01 22:50:52', '2020-12-01 22:50:52'),
(7, 'Investigasi interaksi molekul Methyl Butanoate dengan katalis NiMoS dengan metode Density Functional Theory', '2017', 'FT', 'Prof. Dr. SUPRIADI RUSTAD M.Si', 'Penelitian Terapan', '0686.11.2014.606', '0625066101', 'Guru Besar', '2020-12-01 23:01:31', '2020-12-01 23:01:31'),
(8, 'RANCANG BANGUN PENGOLAHAN DATA KESEHATAN IBU DAN ANAK (KIA) UNTUK MENCEGAH KASUS KEMATIAN IBU DAN ANAK BERBASIS ANDROID DALAM RANGKA PENCAPAIAN SUSTAINABLE DEVELOPMENT GOALS (SGD’S) DI KOTA SEMARANG TAHUN 2016', '2016', 'FKES', 'MARYANI SETYOWATI M.Kes', 'IBM', '0686.11.2013.548', '0517107101', 'Asisten Ahli', '2020-12-01 23:03:17', '2020-12-01 23:03:17'),
(9, 'Sistem Pendeteksi Dini Gangguan Trafo Distribusi Menggunakan Jaring Syaraf Tiruan Berbasis Perubahan Arus dan Vibrasi.', '2020', 'FT', 'Dr. Ir. DIAN RETNO SAWITRI MT', 'IBM', '0686.11.2013.548', '0630095701', 'Lektor Kepla', '2020-12-01 23:04:43', '2020-12-01 23:04:43'),
(10, 'ARRAY NANO-SENSOR ELECTRONIC NOSE (ANSEN): PEMBUATAN NANO SENSOR BERBASIS MATERIAL CARBON NANOTUBES UNTUK APLIKASI MOBILE ELECTRONIC NOSE', '2014', 'FT', 'SARI AYU WULANDARI S.T., M.Eng', 'Ipteks', '0686.11.2014.606', '0517107101', 'Asisten Ahli', '2020-12-01 23:06:17', '2020-12-01 23:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `pengabdians`
--

CREATE TABLE `pengabdians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fakultas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peneliti` varchar(170) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nidn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabfung` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengabdians`
--

INSERT INTO `pengabdians` (`id`, `judul`, `tahun`, `fakultas`, `peneliti`, `kategori`, `npp`, `nidn`, `jabfung`, `created_at`, `updated_at`) VALUES
(1, 'Pemberdayaan Warga Binaan Aisyiyah Menuju Kemandirian Perempuan di Bidang Ekonomi', '2018', 'FIK', 'MAHMUD', 'IBM', '0686.11.2017.691', '0686.11.2015.610', 'Asisten Ahli', '2021-05-02 02:29:49', '2021-05-02 02:29:49'),
(2, 'BIMBINGAN TEKNIS APLIKASI SISTEM BOP YANG AKUNTABEL DAN TRANSPARAN UNTUK GURU GURU PAUD', '2018', 'FIK', 'JULIA RATNAWATI', 'Ipteks', '0686.11.2013.548', '0686.11.2013.548', 'Asisten Ahli', '2021-05-02 02:37:50', '2021-05-02 02:37:50'),
(3, 'Pengembangan Kapasitas Anak Asuh Lembaga Amil Zakat baitul Muttaqien Melalui Peningkatan Manajemen Diri dalam Menghadapi Efek Negatif Perangkat Telekomunikasi Telepon Seluler Ponsel', '2020', 'FIK', 'TITIEN SUHARTINI SUKAMTO', 'IBM', '0686.11.2015.610', '0686.11.2017.691', 'Asisten Ahli', '2021-05-02 05:33:53', '2021-05-02 05:33:53'),
(4, 'Pengenalan dan Pelatihan Computational Thinking Untuk Guru Sekolah di Kota Semarang', '2019', 'FIK', 'SIH DARMI ASTUTI', 'IBM', '0686.11.2015.644', '0686.11.2017.691', 'Asisten Ahli', '2021-05-02 05:43:46', '2021-05-02 05:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `prosiding`
--

CREATE TABLE `prosiding` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issn` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prosidings`
--

CREATE TABLE `prosidings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fakultas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peneliti` varchar(170) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nidn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabfung` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prosidings`
--

INSERT INTO `prosidings` (`id`, `judul`, `tahun`, `fakultas`, `peneliti`, `kategori`, `npp`, `nidn`, `jabfung`, `created_at`, `updated_at`) VALUES
(1, 'Pengembangan Kapasitas Anak Asuh Lembaga Amil Zakat baitul Muttaqien Melalui Peningkatan Manajemen Diri dalam Menghadapi Efek Negatif Perangkat Telekomunikasi Telepon Seluler Ponsel', '2020', 'FIK', 'ZAKY MACHMUDDAH', 'IBM', '0686.11.2000.193', '0686.11.2015.610', 'Asisten Ahli', '2021-05-02 07:25:29', '2021-05-02 07:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `tugasakhirs`
--

CREATE TABLE `tugasakhirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(170) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fakultas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tugasakhirs`
--

INSERT INTO `tugasakhirs` (`id`, `judul`, `nim`, `nama`, `tahun`, `fakultas`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'SISTEM PAKAR NAIVE BAYES UNTUK DETEKSI CORONA', 'a11.2018.1001', NULL, '2020', 'FIK', 'Ipteks', '2021-05-02 09:05:05', '2021-05-02 09:05:05'),
(2, 'Penerapan Algoritma K-NN pada dana Bansos', 'a11.2018.19279', NULL, '2020', 'FEB', 'EKonomi', '2021-05-02 09:07:09', '2021-05-02 09:07:09'),
(3, 'Pemberdayaan Warga Binaan Aisyiyah Menuju Kemandirian Perempuan di Bidang Ekonomi', 'a11.2018.19279', 'fandy setiawan', '2019', 'FEB', 'EKonomi', '2021-05-02 09:24:33', '2021-05-02 09:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `tugas_akhir`
--

CREATE TABLE `tugas_akhir` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wisuda` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Teguh Wibowo', 'teguh@gmail.com', NULL, '', NULL, NULL, NULL),
(2, 'Joni Andrean', 'Jhon@gmail.com', NULL, '', NULL, NULL, NULL),
(3, 'Wawan Setiadi', 'wawan@gmail.com', NULL, '', NULL, NULL, NULL),
(4, 'Santo Wardoyo', 'santo@gmail.com', NULL, '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `majalaheksternals`
--
ALTER TABLE `majalaheksternals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `majalahinternals`
--
ALTER TABLE `majalahinternals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `majalahs`
--
ALTER TABLE `majalahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penelitians`
--
ALTER TABLE `penelitians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengabdians`
--
ALTER TABLE `pengabdians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prosiding`
--
ALTER TABLE `prosiding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prosidings`
--
ALTER TABLE `prosidings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugasakhirs`
--
ALTER TABLE `tugasakhirs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `majalaheksternals`
--
ALTER TABLE `majalaheksternals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `majalahinternals`
--
ALTER TABLE `majalahinternals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `majalahs`
--
ALTER TABLE `majalahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `penelitians`
--
ALTER TABLE `penelitians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengabdians`
--
ALTER TABLE `pengabdians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prosiding`
--
ALTER TABLE `prosiding`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prosidings`
--
ALTER TABLE `prosidings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tugasakhirs`
--
ALTER TABLE `tugasakhirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
