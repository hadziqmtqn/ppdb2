-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2020 at 03:20 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.28-3+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(10) UNSIGNED NOT NULL,
  `users` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_ke` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_saudara` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cita_cita` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asal_sekolah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npsn_asal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_sek_asal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_sek_asal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_siswa_tinggal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_siswa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `propinsi_siswa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabkota_siswa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa_kelurahan_siswa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kodepos_siswa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jarak` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transportasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_ayah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_ibu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_wali` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan_ortu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_pkh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_rumah_ortu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_ortu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `propinsi_ortu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabkota_ortu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa_kelurahan_ortu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kodepos_ortu` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_agama_51` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_agama_52` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_agama_61` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_bin_51` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_bin_52` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_bin_61` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_mat_51` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_mat_52` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_mat_61` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_ipa_51` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_ipa_52` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_ipa_61` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prestasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tingkat_prestasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peringkat_prestasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_prestasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `users`, `nik`, `jk`, `tempat_lahir`, `tanggal_lahir`, `agama`, `anak_ke`, `jumlah_saudara`, `hobi`, `cita_cita`, `no_hp`, `asal_sekolah`, `npsn_asal`, `nama_sek_asal`, `alamat_sek_asal`, `jenis_siswa_tinggal`, `alamat_siswa`, `propinsi_siswa`, `kabkota_siswa`, `desa_kelurahan_siswa`, `kodepos_siswa`, `jarak`, `transportasi`, `no_kk`, `nama_ayah`, `nik_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `status_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `nama_ibu`, `nik_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `status_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `nama_wali`, `nik_wali`, `tempat_lahir_wali`, `tanggal_lahir_wali`, `status_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_ortu`, `no_kks`, `no_pkh`, `no_kip`, `status_rumah_ortu`, `alamat_ortu`, `propinsi_ortu`, `kabkota_ortu`, `desa_kelurahan_ortu`, `kodepos_ortu`, `nilai_agama_51`, `nilai_agama_52`, `nilai_agama_61`, `nilai_bin_51`, `nilai_bin_52`, `nilai_bin_61`, `nilai_mat_51`, `nilai_mat_52`, `nilai_mat_61`, `nilai_ipa_51`, `nilai_ipa_52`, `nilai_ipa_61`, `prestasi`, `tingkat_prestasi`, `peringkat_prestasi`, `tahun_prestasi`, `updated_at`, `created_at`) VALUES
(2, 3, '1', 'L', 'a', '2020-02-26', 'Islam', '2', '23', 'Kesenian', 'TNI/Polri', '1', 'MI', NULL, NULL, NULL, 'Kontrak/Kost', 'asd', 'asd', 'asd', 'asd', 'asd', 'Antara 5 - 10 Km', 'Sepeda', 'asd', 'asd', 'asd', 'asd', '2020-02-27', 'Masih Hidup', 'Tidak berpendidikan', 'PNS', 'sdf', '234', 'addsf', '2020-03-16', 'Sudah Meninggal', 'SD/Sederajat', 'Pensiunan/Almarhum', '2020-03-20', '234', 'sdf', '2020-03-17', NULL, 'SMP/Sederajat', 'PNS', 'Rp 500.001 - Rp 1.000.000', '234', '234', '324', 'Rumah Orang Tua', 'dsf', 'dsf', 'dsf', 'dsf', '324', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-20 12:36:05', '2020-03-20 12:36:05'),
(4, 5, '567', NULL, 'bekasi', '2020-03-02', NULL, NULL, NULL, NULL, NULL, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-20 14:44:18', '2020-03-20 14:44:18'),
(5, 6, 'dsf', NULL, 'sdf', '2020-03-09', NULL, NULL, NULL, NULL, NULL, 'dsf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-20 14:45:09', '2020-03-20 14:45:09'),
(6, 7, '678', NULL, 'sdf', '2020-03-03', NULL, NULL, NULL, NULL, NULL, '234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-26 03:11:19', '2020-03-26 03:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `data_nilai_raport`
--

CREATE TABLE `data_nilai_raport` (
  `id` int(10) UNSIGNED NOT NULL,
  `users` int(10) UNSIGNED DEFAULT NULL,
  `agama_5_1` double(8,2) DEFAULT NULL,
  `agama_5_2` double(8,2) DEFAULT NULL,
  `agama_6_1` double(8,2) DEFAULT NULL,
  `bahasa_5_1` double(8,2) DEFAULT NULL,
  `bahasa_5_2` double(8,2) DEFAULT NULL,
  `bahasa_6_1` double(8,2) DEFAULT NULL,
  `matematika_5_1` double(8,2) DEFAULT NULL,
  `matematika_5_2` double(8,2) DEFAULT NULL,
  `matematika_6_1` double(8,2) DEFAULT NULL,
  `ipa_5_1` double(8,2) DEFAULT NULL,
  `ipa_5_2` double(8,2) DEFAULT NULL,
  `ipa_6_1` double(8,2) DEFAULT NULL,
  `ips_5_1` double(8,2) DEFAULT NULL,
  `ips_5_2` double(8,2) DEFAULT NULL,
  `ips_6_1` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_nilai_raport`
--

INSERT INTO `data_nilai_raport` (`id`, `users`, `agama_5_1`, `agama_5_2`, `agama_6_1`, `bahasa_5_1`, `bahasa_5_2`, `bahasa_6_1`, `matematika_5_1`, `matematika_5_2`, `matematika_6_1`, `ipa_5_1`, `ipa_5_2`, `ipa_6_1`, `ips_5_1`, `ips_5_2`, `ips_6_1`, `created_at`, `updated_at`) VALUES
(2, 3, 45.00, 45.00, 45.00, 45.00, 45.00, 45.00, 34.00, 324.00, 324.00, 34.00, 34.00, 34.00, NULL, NULL, NULL, '2020-03-10 14:18:00', '2020-03-20 12:36:05'),
(3, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-20 14:44:18', '2020-03-20 14:44:18'),
(4, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-20 14:45:09', '2020-03-20 14:45:09'),
(5, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-26 03:11:19', '2020-03-26 03:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `data_prestasi_siswa`
--

CREATE TABLE `data_prestasi_siswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `users` int(10) UNSIGNED DEFAULT NULL,
  `prestasi` varchar(115) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peringkat_prestasi` varchar(115) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tingkat_prestasi` varchar(115) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_prestasi` varchar(115) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_prestasi_siswa`
--

INSERT INTO `data_prestasi_siswa` (`id`, `users`, `prestasi`, `peringkat_prestasi`, `tingkat_prestasi`, `tahun_prestasi`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, NULL, NULL, NULL, '2020-03-20 12:36:05', '2020-03-20 12:36:05'),
(2, 5, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 6, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 7, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_sekolah_sebelumnya`
--

CREATE TABLE `data_sekolah_sebelumnya` (
  `id` int(10) UNSIGNED NOT NULL,
  `users` int(10) UNSIGNED DEFAULT NULL,
  `asal_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npsn` varchar(115) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_sekolah_sebelumnya`
--

INSERT INTO `data_sekolah_sebelumnya` (`id`, `users`, `asal_sekolah`, `nama`, `npsn`, `alamat`, `created_at`, `updated_at`) VALUES
(3, 3, 'sd', 'a', 'a', 'asd', '2020-03-20 12:36:05', '2020-03-20 12:36:05'),
(4, 5, 'sd', 'a', '123', 'bekasi', '2020-03-20 14:44:18', '2020-03-20 14:44:18'),
(5, 6, 'mi', 'sdf', 'sdf', 'dsf', '2020-03-20 14:45:09', '2020-03-20 14:45:09'),
(6, 7, NULL, NULL, NULL, NULL, '2020-03-26 03:11:19', '2020-03-26 03:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(10) UNSIGNED NOT NULL,
  `awal` datetime NOT NULL,
  `akhir` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `awal`, `akhir`, `created_at`, `updated_at`) VALUES
(4, '2020-03-30 00:00:00', '2020-03-31 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_line`
--

CREATE TABLE `jadwal_line` (
  `id` int(10) UNSIGNED NOT NULL,
  `jadwal` int(10) UNSIGNED NOT NULL,
  `tanggal` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_line`
--

INSERT INTO `jadwal_line` (`id`, `jadwal`, `tanggal`, `created_at`, `updated_at`) VALUES
(36, 4, '2020-03-30 00:00:00', NULL, NULL),
(37, 4, '2020-03-31 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_02_16_054026_alter_users', 1),
(4, '2020_02_16_054429_add_photo', 1),
(5, '2020_02_16_055221_add_id_registrasi', 1),
(6, '2020_02_16_131957_create_biodata', 1),
(7, '2020_02_16_142941_alter_users_verifikasi', 1),
(8, '2020_02_24_232203_add_role_users', 2),
(9, '2020_02_24_233720_table_profile_sekolah', 3),
(10, '2020_02_25_083733_add_nik_biodata', 4),
(11, '2020_02_25_084250_add_jk_biodata', 5),
(12, '2020_02_26_125247_add_agama_biodata', 6),
(13, '2020_02_26_125513_add_tempat_lahir_biodata', 7),
(14, '2020_02_26_150459_create_table_pesan', 8),
(15, '2020_02_26_231034_add_islulus', 9),
(16, '2020_02_26_231527_add_islulus', 10),
(17, '2020_02_28_153207_add_kemenag_profile_sekolah', 11),
(18, '2020_02_28_153710_add_kemenag_profile_sekolah', 12),
(19, '2020_03_08_172946_m_jenis_kelamin', 13),
(20, '2020_03_10_140143_alter_users', 14),
(21, '2020_03_10_140542_data_sekolah_sebelumnya', 15),
(22, '2020_03_10_141151_data_nilai_raport', 16),
(23, '2020_03_10_142731_data_prestasi_siswa', 17),
(24, '2020_03_12_135517_create_user_nilai', 18),
(25, '2020_03_31_075450_jadwal', 19),
(26, '2020_03_31_075457_jadwal_line', 20);

-- --------------------------------------------------------

--
-- Table structure for table `m_jenis_kelamin`
--

CREATE TABLE `m_jenis_kelamin` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_jenis_kelamin`
--

INSERT INTO `m_jenis_kelamin` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Laki-Laki', NULL, NULL),
(2, 'Perempuan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(10) UNSIGNED NOT NULL,
  `users` bigint(20) UNSIGNED NOT NULL,
  `judul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_sekolah`
--

CREATE TABLE `profile_sekolah` (
  `id` int(10) UNSIGNED NOT NULL,
  `kemenag_pusat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kemenag_kabko` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_sekolah`
--

INSERT INTO `profile_sekolah` (`id`, `kemenag_pusat`, `kemenag_kabko`, `nama`, `alamat`, `no_telp`, `website`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'KEMENTERIAN AGAMA REPUBLIK INDONESIA', 'KANTOR KEMENTERIAN AGAMA KABUPATEN NGAWI2', 'MADRASAH TSANAWIYAH NEGERI 3 NGAWI', 'Jalan Kenari No. 38 Beran Ngawi', 'Telepon: (0351) 749709, 4476277 Faksimile: (0351) 745760', 'Website: www.mtsn3ngawi.sch.id', 'sekolah_images/kemenag.jpg', '2020-03-19 14:17:46', '2020-03-19 14:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` int(10) UNSIGNED DEFAULT NULL,
  `id_registrasi` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_verifikasi` int(11) DEFAULT NULL,
  `is_lulus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `nisn`, `email`, `jenis_kelamin`, `id_registrasi`, `email_verified_at`, `password`, `photo`, `remember_token`, `created_at`, `updated_at`, `is_verifikasi`, `is_lulus`) VALUES
(1, 1, 'Admin PPDB', '1', 'ppdb@mtsn3ngawi.sch.id', NULL, '-', NULL, '$2y$10$nx6tyXjYC5tXYVM0BOEwnO2zWGhD6BmDKNq6SDHfKy.FQ9ydxmLri', NULL, 'DOKmFzIq0Tr5HnIapnOMb19qzPBoVhCKFZ8nWuV2VINK6QLp6t5LRzr2kThj', NULL, NULL, NULL, NULL),
(3, NULL, 'a', '2', 'a@a.com', 1, 'REG-20200310211800', NULL, '$2y$10$bz3uKKRSCQEPDHDEymI2kOuQZ5TNqNp5ORHXJSWK70OqhOy7xwYU.', NULL, NULL, NULL, '2020-03-20 06:05:55', NULL, 1),
(5, NULL, 'fadly rifai', '567', 'fadly@sangcahaya.com', 1, 'REG-756907771', NULL, '$2y$10$uiM05QmqZHfmr6vL.q44m.TW3KPLmNv9Q8HbG3Y4EEN1NFqUVcRq.', NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, 'asd', 'dsf', 'sdf@dsdsf', 1, 'REG-907852669', NULL, '$2y$10$gtr2m6WVGJ388O5gQQ.ia.LyIg91tA3SK2VAiMm1fFAjeexQBTYP2', NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, 'paiii', '678', '1@1.com', 1, 'REG-811366688', NULL, '$2y$10$OcGMs68VxvRzI1cssjEYC.qbxgnZ7pxRr0UMQfx5dkcrd9s2Ywk/S', NULL, NULL, NULL, '2020-03-26 04:46:04', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_nilai`
--

CREATE TABLE `users_nilai` (
  `id` int(10) UNSIGNED NOT NULL,
  `nisn` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_baca_quran` double(8,2) NOT NULL,
  `nilai_test_akademik` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_nilai`
--

INSERT INTO `users_nilai` (`id`, `nisn`, `nilai_baca_quran`, `nilai_test_akademik`, `created_at`, `updated_at`) VALUES
(1, '1', 57.00, 67.00, '2020-03-12 08:01:00', '2020-03-12 08:01:00'),
(3, '2', 77.00, 47.00, '2020-03-21 09:40:55', '2020-03-21 09:40:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_users_foreign` (`users`);

--
-- Indexes for table `data_nilai_raport`
--
ALTER TABLE `data_nilai_raport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_prestasi_siswa`
--
ALTER TABLE `data_prestasi_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_sekolah_sebelumnya`
--
ALTER TABLE `data_sekolah_sebelumnya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_line`
--
ALTER TABLE `jadwal_line`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_line_jadwal_foreign` (`jadwal`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_jenis_kelamin`
--
ALTER TABLE `m_jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesan_users_foreign` (`users`);

--
-- Indexes for table `profile_sekolah`
--
ALTER TABLE `profile_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `nisn_2` (`nisn`),
  ADD KEY `users_jenis_kelamin_foreign` (`jenis_kelamin`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `users_nilai`
--
ALTER TABLE `users_nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_nilai_nisn_foreign` (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `data_nilai_raport`
--
ALTER TABLE `data_nilai_raport`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `data_prestasi_siswa`
--
ALTER TABLE `data_prestasi_siswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_sekolah_sebelumnya`
--
ALTER TABLE `data_sekolah_sebelumnya`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jadwal_line`
--
ALTER TABLE `jadwal_line`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `m_jenis_kelamin`
--
ALTER TABLE `m_jenis_kelamin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile_sekolah`
--
ALTER TABLE `profile_sekolah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users_nilai`
--
ALTER TABLE `users_nilai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `biodata`
--
ALTER TABLE `biodata`
  ADD CONSTRAINT `biodata_users_foreign` FOREIGN KEY (`users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jadwal_line`
--
ALTER TABLE `jadwal_line`
  ADD CONSTRAINT `jadwal_line_jadwal_foreign` FOREIGN KEY (`jadwal`) REFERENCES `jadwal` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_users_foreign` FOREIGN KEY (`users`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_jenis_kelamin_foreign` FOREIGN KEY (`jenis_kelamin`) REFERENCES `m_jenis_kelamin` (`id`);

--
-- Constraints for table `users_nilai`
--
ALTER TABLE `users_nilai`
  ADD CONSTRAINT `users_nilai_nisn_foreign` FOREIGN KEY (`nisn`) REFERENCES `users` (`nisn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
