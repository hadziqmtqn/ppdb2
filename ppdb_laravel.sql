-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Feb 2020 pada 03.08
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_laravel5.8`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
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
(18, '2020_02_28_153710_add_kemenag_profile_sekolah', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
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
-- Struktur dari tabel `profile_sekolah`
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
-- Dumping data untuk tabel `profile_sekolah`
--

INSERT INTO `profile_sekolah` (`id`, `kemenag_pusat`, `kemenag_kabko`, `nama`, `alamat`, `no_telp`, `website`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'KEMENTERIAN AGAMA REPUBLIK INDONESIA', 'KANTOR KEMENTERIAN AGAMA KABUPATEN NGAWI', 'MADRASAH TSANAWIYAH NEGERI 3 NGAWI', 'Jalan Kenari No. 38 Beran Ngawi', 'Telepon: (0351) 749709, 4476277 Faksimile: (0351) 745760', 'Website: www.mtsn3ngawi.sch.id', 'sekolah_images/kemenag.jpg', '2020-02-28 08:50:58', '2020-02-28 08:50:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_registrasi` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_verifikasi` int(11) DEFAULT NULL,
  `is_lulus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `nisn`, `email`, `id_registrasi`, `email_verified_at`, `password`, `photo`, `remember_token`, `created_at`, `updated_at`, `is_verifikasi`, `is_lulus`) VALUES
(1, 1, 'Admin PPDB', '1', 'ppdb@mtsn3ngawi.sch.id', '-', NULL, '$2y$10$A6N9aolcat1KgAS/xs52KuATpnUOH5oMoRi2den6mk.x2Zg..V176', NULL, 'mOvFCRgynKTVUWkRXmlOvzE9aHfiqJ067vSEtUzzEZnVi4QRpFDfGIDVtXvO', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_users_foreign` (`users`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesan_users_foreign` (`users`);

--
-- Indeks untuk tabel `profile_sekolah`
--
ALTER TABLE `profile_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `profile_sekolah`
--
ALTER TABLE `profile_sekolah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD CONSTRAINT `biodata_users_foreign` FOREIGN KEY (`users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_users_foreign` FOREIGN KEY (`users`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
