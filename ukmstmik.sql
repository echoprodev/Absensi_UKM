-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Sep 2022 pada 15.43
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukmstmik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi_ukm`
--

CREATE TABLE `absensi_ukm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_ormawa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_ormawa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kegiatan_mingguan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan_mingguan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status_absensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `absensi_ukm`
--

INSERT INTO `absensi_ukm` (`id`, `nama_anggota`, `jenis_ormawa`, `jabatan_ormawa`, `kegiatan_mingguan`, `keterangan_mingguan`, `komentar`, `status_absensi`, `created_at`, `updated_at`) VALUES
(1, 'EKo Hajianto Sula', 'UKM Musik', 'Anggota', '2022-08-03', 'Latihan Musik', 'Mantab', 'Setuju', '2022-08-31 07:00:40', '2022-08-31 08:01:17'),
(3, 'EKo Hajianto Sula', 'UKM Musik', 'Anggota', '2022-08-17', 'Upacara Kemerdekaan di alun-alun bangil', 'No Comment', 'Setuju', '2022-08-31 07:06:46', '2022-08-31 10:59:10'),
(4, 'EKo Hajianto Sula', 'UKM Musik', 'Anggota', '2022-09-01', 'Rapat Gabungan Bersama BEM Persiapan PKKMB', 'Lanjutkan', 'Setuju', '2022-08-31 22:01:52', '2022-08-31 22:02:41'),
(5, 'MUHAMMAD FIKRI FIRMANSYAH', 'UKM Musik', 'Bendahara', '2022-08-30', 'Rapat Gabungan Bersama BEM Persiapan PKKMB 2021', 'Tambahi Topik Rapat', 'Setuju', '2022-09-01 02:34:10', '2022-09-02 06:34:58'),
(6, 'EKo Hajianto Sula', 'UKM Musik', 'Anggota', '2022-09-08', 'Mengisi acara yudisium tahun 2021', 'Mantab', 'Setuju', '2022-09-01 02:54:29', '2022-09-01 02:56:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses`
--

CREATE TABLE `akses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_akses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akses`
--

INSERT INTO `akses` (`id`, `nama_akses`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2022-08-29 04:28:57', '2022-08-29 04:46:38'),
(3, 'Mahasiswa', '2022-08-29 04:31:41', '2022-08-29 04:31:41'),
(4, 'Kemahasiswaan', '2022-08-29 04:48:26', '2022-08-29 04:48:26'),
(5, 'Skretariat Musik', '2022-08-29 04:49:05', '2022-08-29 04:49:05'),
(6, 'Skretariat Mahagana', '2022-08-29 04:49:19', '2022-08-29 04:49:19'),
(7, 'Skretariat Futsal', '2022-08-29 04:49:56', '2022-08-29 04:49:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_musik`
--

CREATE TABLE `anggota_musik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `anggota_musik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_musik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_musik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_ormawa`
--

CREATE TABLE `anggota_ormawa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mahasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_ormawa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ormawa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `anggota_ormawa`
--

INSERT INTO `anggota_ormawa` (`id`, `nama_mahasiswa`, `jabatan_ormawa`, `nama_ormawa`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 'EKo Hajianto Sula', 'Ketua', 'UKM Futsal', 'Aktif', NULL, '2022-08-30 18:26:16', '2022-08-31 04:50:43'),
(7, 'MUHAMMAD FIKRI FIRMANSYAH', 'Skretaris', 'UKM Musik', 'Aktif', NULL, '2022-08-30 18:28:31', '2022-08-30 18:28:31'),
(10, 'EKo Hajianto Sula', 'Anggota', 'UKM Musik', 'Aktif', NULL, '2022-08-31 05:35:07', '2022-08-31 05:35:07'),
(12, 'M. Rafsanjani Mulyo Utomo', 'Skretaris', 'UKM Musik', 'Aktif', NULL, '2022-09-02 06:29:20', '2022-09-02 06:29:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mahasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim_mahasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl_mahasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi_mahasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan_mahasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id`, `nama_mahasiswa`, `nim_mahasiswa`, `ttl_mahasiswa`, `prodi_mahasiswa`, `angkatan_mahasiswa`, `created_at`, `updated_at`) VALUES
(2, 'EKo Hajianto Sula', '118228086', '1999-04-14', 'Teknik Informatika', '2018', '2022-08-29 12:25:22', '2022-08-29 12:25:53'),
(3, 'MUHAMMAD FIKRI FIRMANSYAH', '118228090', '2000-08-15', 'Menejemen Informatika', '2018', '2022-08-30 06:35:09', '2022-08-30 06:35:24'),
(4, 'M. Rafsanjani Mulyo Utomo', '11822875', '2022-09-02', 'Teknik Informatika', '2018', '2022-09-02 06:26:13', '2022-09-02 06:26:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ormawa`
--

CREATE TABLE `data_ormawa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_ormawa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembimbing_ormawa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_ormawa`
--

INSERT INTO `data_ormawa` (`id`, `nama_ormawa`, `pembimbing_ormawa`, `created_at`, `updated_at`) VALUES
(3, 'UKM Musik', 'ERRI WAHYU PUSPITARINI,S.Kom., M.M', '2022-08-29 11:25:10', '2022-08-29 11:25:10'),
(6, 'UKM Futsal', 'WILDAN MUALIM, S.Kom', '2022-08-30 22:51:04', '2022-08-30 22:51:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nidn_dosen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dosen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nidn_dosen`, `nama_dosen`, `created_at`, `updated_at`) VALUES
(1, '9907011654', 'Dr. DJOKO SUGIONO, MT', '2022-08-29 11:06:07', '2022-08-29 11:06:07'),
(2, '0013116804', 'Dr. Saiful Bukhori, M.Kom', '2022-08-29 11:06:26', '2022-08-29 11:06:26'),
(3, '0013036204', 'Ir. Abdul Rasyid, MT', '2022-08-29 11:06:45', '2022-08-29 11:06:45'),
(4, '9907008184', 'Dr. Moh Aries Syufagi, S.Pd, MT', '2022-08-29 11:07:05', '2022-08-29 11:07:05'),
(5, '9907012861', 'ABDUL MAKIN, S.Kom', '2022-08-29 11:07:28', '2022-08-29 11:07:28'),
(6, '0702028504', 'ABDUL ROKHIM, S.Kom., M.Kom', '2022-08-29 11:07:47', '2022-08-29 11:07:47'),
(7, '9907146684', 'WILDAN MUALIM, S.Kom', '2022-08-29 11:08:09', '2022-08-29 11:18:00'),
(8, '07050288301', 'ERRI WAHYU PUSPITARINI,S.Kom., M.M', '2022-08-29 11:09:19', '2022-08-29 11:09:19'),
(9, '9907014490', 'HARI MOERTI, S.Kom, M.AB', '2022-08-29 11:09:32', '2022-08-29 11:09:32'),
(11, '0707117802', 'KURNIAWAN WAHYU HARYANTO, S.Kom., M.MT', '2022-08-29 11:10:22', '2022-08-29 11:10:22'),
(12, '0708057801', 'Muhammad Noval Riswandha, M.Kom', '2022-08-29 11:10:50', '2022-08-29 11:10:50'),
(13, '0721027701', 'Panca Rahardiyanto,S.Kom., M.MT', '2022-08-29 11:11:04', '2022-08-29 11:11:04'),
(14, '9907146685', 'RENITA SELVIANA, S.Kom', '2022-08-29 11:11:20', '2022-08-29 11:11:20'),
(15, '0728028604', 'SIGIT RIYADI, S.Kom., MT', '2022-08-29 11:11:37', '2022-08-29 11:11:37'),
(16, '0716027302', 'Teguh Pradana,M.Kom', '2022-08-29 11:11:58', '2022-08-29 11:11:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `indeks`
--

CREATE TABLE `indeks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `struktur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poin` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `indeks`
--

INSERT INTO `indeks` (`id`, `struktur`, `poin`, `created_at`, `updated_at`) VALUES
(1, 'Ketua', 3, NULL, NULL),
(2, 'Skretaris', 3, NULL, NULL),
(3, 'Bendahara', 3, NULL, NULL),
(4, 'Anggota', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_08_28_201342_create_akses_table', 2),
(7, '2022_08_29_123608_create_data_ormawas_table', 3),
(9, '2022_08_29_124146_create_anggota_mahaganas_table', 3),
(10, '2022_08_29_124202_create_anggota_futsals_table', 3),
(11, '2022_08_29_124221_create_absensi_futsals_table', 3),
(13, '2022_08_29_124330_create_absensi_mahaganas_table', 3),
(15, '2022_08_29_124533_create_data_mahasiswas_table', 4),
(16, '2022_08_29_173842_create_prodis_table', 5),
(17, '2022_08_29_175003_create_dosens_table', 5),
(18, '2022_08_29_124128_create_anggota_musiks_table', 6),
(19, '2022_08_29_124313_create_absensi_musiks_table', 7),
(24, '2022_08_30_212448_create_anggota_ormawas_table', 9),
(27, '2022_08_30_164340_create_absensi_u_k_m_s_table', 10),
(28, '2022_09_01_051257_create_indeks_table', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketua_prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id`, `nama_prodi`, `ketua_prodi`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Informatika', 'ABDUL ROKHIM, S.Kom., M.Kom', '2022-08-29 12:04:16', '2022-08-29 12:04:16'),
(2, 'Menejemen Informatika', 'KURNIAWAN WAHYU HARYANTO, S.Kom., M.MT', '2022-08-29 12:04:41', '2022-08-29 12:04:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hak_akses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `hak_akses`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MUCHAMMAD KHOIRUL HIZBILLAH', 'irul@admin.com', NULL, '$2y$10$qXFfRk5dP7ETDc0RL6YquOR/Le6.u.yUdYRSh/cdXNIukYjqFAJnW', 'Admin', NULL, '2022-08-28 13:14:21', '2022-08-31 19:04:52'),
(5, 'Wildan Mualim, M.Kom', 'wildan@kemahasiswaan.com', NULL, '$2y$10$YdTU/T9Vd/mffcIESwn5quj4c.gULR0wJG3CZugvXY32Wq0XtTHbO', 'Kemahasiswaan', NULL, '2022-08-29 18:01:45', '2022-08-31 19:05:05'),
(6, 'Eko Hajianto Sula', 'aji@mahasiswa.com', NULL, '$2y$10$4j6eT.an4CKraodgkFaPi.MHk62hcGGBnxCRMhNe5xFBN15QAxday', 'Mahasiswa', NULL, '2022-08-30 04:41:00', '2022-08-31 19:05:21'),
(7, 'M. Rafsanjani Mulyo Utomo', 'rafi@musik.com', NULL, '$2y$10$BP8cC4UxdiYjiJV4GGG55.aMO5UEICKE09LeNuKusT4S4HNtE3DTG', 'Skretariat Musik', NULL, '2022-08-30 04:46:38', '2022-08-31 19:05:33');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi_ukm`
--
ALTER TABLE `absensi_ukm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `anggota_ormawa`
--
ALTER TABLE `anggota_ormawa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_ormawa`
--
ALTER TABLE `data_ormawa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `indeks`
--
ALTER TABLE `indeks`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
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
-- AUTO_INCREMENT untuk tabel `absensi_ukm`
--
ALTER TABLE `absensi_ukm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `akses`
--
ALTER TABLE `akses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `anggota_ormawa`
--
ALTER TABLE `anggota_ormawa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_ormawa`
--
ALTER TABLE `data_ormawa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `indeks`
--
ALTER TABLE `indeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
