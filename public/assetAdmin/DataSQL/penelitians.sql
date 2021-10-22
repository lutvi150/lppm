-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2020 pada 08.29
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `penelitians`
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
-- Dumping data untuk tabel `penelitians`
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

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penelitians`
--
ALTER TABLE `penelitians`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penelitians`
--
ALTER TABLE `penelitians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
