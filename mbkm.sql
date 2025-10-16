-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 07:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 mbkmmbkm/;

--
-- Database: `mbkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Stunting', 'Stunting', '2023-12-17 11:39:12', '2023-12-17 11:39:12'),
(2, 'GAKY', 'GAKY', '2023-12-17 11:39:12', '2023-12-17 11:39:12'),
(3, 'Anemia', 'Anemia', '2023-12-17 11:39:12', '2023-12-17 11:39:12'),
(4, 'Gizi Lebih', 'Gizi Lebih', '2023-12-17 11:39:12', '2023-12-17 11:39:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '1702838652_Artikel1.jpg', '1', '2023-12-17 11:44:12', '2023-12-17 11:44:12'),
(2, '1702838661_Artikel2.jpg', '2', '2023-12-17 11:44:21', '2023-12-17 11:44:21'),
(3, '1702838670_Artikel3.jpg', '3', '2023-12-17 11:44:30', '2023-12-17 11:44:30'),
(4, '1702838678_Artikel4.jpg', '4', '2023-12-17 11:44:38', '2023-12-17 11:44:38'),
(5, '1702838688_Artikel5.jpg', '5', '2023-12-17 11:44:48', '2023-12-17 11:44:48'),
(6, '1702838698_Artikel6.jpg', '6', '2023-12-17 11:44:58', '2023-12-17 11:44:58'),
(7, '1702838706_Artikel7.jpg', '7', '2023-12-17 11:45:06', '2023-12-17 11:45:06'),
(8, '1702838715_Artikel8.jpg', '8', '2023-12-17 11:45:15', '2023-12-17 11:45:15'),
(9, '1702838724_Artikel9.jpg', '9', '2023-12-17 11:45:24', '2023-12-17 11:45:24'),
(10, '1702838732_Artikel10.jpg', '10', '2023-12-17 11:45:32', '2023-12-17 11:45:32');

-- --------------------------------------------------------

--
-- Table structure for table `gejalas`
--

CREATE TABLE `gejalas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_gejala` varchar(255) NOT NULL,
  `nama_gejala` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejalas`
--

INSERT INTO `gejalas` (`id`, `kode_gejala`, `nama_gejala`, `created_at`, `updated_at`) VALUES
(1, 'G1', 'Apakah ibu memiliki riwayat penyakit anemia? (HB kurang dari 9 g/dl)', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(2, 'G2', 'Apakah kulit anak terlihat pucat?', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(3, 'G3', 'Apakah anak terlihat 5L (Lemah, Letih, Lesu, Lelah, dan Lalai) dan tidak aktif saat bermain?', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(4, 'G4', 'Apakah selama kehamilan ibu tidak mengkonsumsi gizi seimbang sesuai anjuran? (makanan pokok (nasi/umbi umbian/jagung, dan lainnya), protein hewani (telur/ikan/daging dan lannya), protein nabati (tempe, tahu, kacang kacangan, dan lainnya), sayuran dan buah buahan)', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(5, 'G5', 'Apakah panjang badan lahir anak kurang dari 47 cm?', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(6, 'G6', 'Apakah berat badan anak saat lahir kurang dari 2500 gram dan usia lahir kurang dari 37 bulan?', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(7, 'G7', 'Apakah anak sering terinfeksi penyakit atau sering sakit?', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(8, 'G8', 'Apakah air yang digunakan untuk makan dan minum tidak layak dan tidak aman dikonsumsi? (belum terjamin keamanannya)', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(9, 'G9', 'Apakah anak tidak mendapatkan MPASI sesuai buku KIA?', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(10, 'G10', 'Apakah setiap kali makan anak tidak mendapatkan protein hewani (telur/ikan/daging) dan lainnya?', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(11, 'G11', 'Apakah ubun-ubun anak melebar saat lahir atau seiring berjalannya waktu?', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(12, 'G12', 'Apakah wajah anak terlihat sembab?', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(13, 'G13', 'Apakah pusar pada anak menonjol?', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(14, 'G14', 'Apakah anak mudah tersedak?', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(15, 'G15', 'Apakah anak mengalami keterlambatan pertumbuhan (tinggi badan) dibandingkan anak seusianya?', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(16, 'G16', 'Apakah anak mengalami kesulitan berbicara?', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(17, 'G17', 'Apakah perut anak mengalami buncit?', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(18, 'G18', 'Apakah leher anak relatif lebih pendek dan berlipat dibandingkan anak seusianya?', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(19, 'G19', 'Apakah anak sering mengkonsumsi makanan manis dan berminyak?', '2023-12-17 11:39:39', '2023-12-17 11:39:39'),
(20, 'G20', 'Apakah wajah anak nampak tembem, bulat, dan bahu rangkap?', '2023-12-17 11:39:39', '2023-12-17 11:39:39');

-- --------------------------------------------------------

--
-- Table structure for table `gejala_penyakits`
--

CREATE TABLE `gejala_penyakits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_gejala` varchar(255) DEFAULT NULL,
  `nama_gejala` text DEFAULT NULL,
  `nama_penyakit` varchar(255) DEFAULT NULL,
  `bobot` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejala_penyakits`
--

INSERT INTO `gejala_penyakits` (`id`, `kode_gejala`, `nama_gejala`, `nama_penyakit`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'G1', 'Apakah ibu memiliki riwayat penyakit anemia? (HB kurang dari 9 g/dl)', 'Stunting', 0.10, '2023-12-17 11:39:27', '2023-12-17 11:39:27'),
(2, 'G1', 'Apakah ibu memiliki riwayat penyakit anemia? (HB kurang dari 9 g/dl)', 'Anemia', 0.70, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(3, 'G2', 'Apakah kulit anak terlihat pucat?', 'Anemia', 0.50, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(4, 'G3', 'Apakah anak terlihat 5L (Lemah, Letih, Lesu, Lelah, dan Lalai) dan tidak aktif saat bermain?', 'Stunting', 0.10, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(5, 'G3', 'Apakah anak terlihat 5L (Lemah, Letih, Lesu, Lelah, dan Lalai) dan tidak aktif saat bermain?', 'Anemia', 0.40, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(6, 'G4', 'Apakah selama kehamilan ibu tidak mengkonsumsi gizi seimbang sesuai anjuran? (makanan pokok (nasi/umbi umbian/jagung, dan lainnya), protein hewani (telur/ikan/daging dan lannya), protein nabati (tempe, tahu, kacang kacangan, dan lainnya), sayuran dan buah buahan)', 'Stunting', 0.20, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(7, 'G4', 'Apakah selama kehamilan ibu tidak mengkonsumsi gizi seimbang sesuai anjuran? (makanan pokok (nasi/umbi umbian/jagung, dan lainnya), protein hewani (telur/ikan/daging dan lannya), protein nabati (tempe, tahu, kacang kacangan, dan lainnya), sayuran dan buah buahan)', 'GAKY', 0.40, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(8, 'G4', 'Apakah selama kehamilan ibu tidak mengkonsumsi gizi seimbang sesuai anjuran? (makanan pokok (nasi/umbi umbian/jagung, dan lainnya), protein hewani (telur/ikan/daging dan lannya), protein nabati (tempe, tahu, kacang kacangan, dan lainnya), sayuran dan buah buahan)', 'Anemia', 0.20, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(9, 'G5', 'Apakah panjang badan lahir anak kurang dari 47 cm?', 'Stunting', 0.70, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(10, 'G6', 'Apakah berat badan anak saat lahir kurang dari 2500 gram dan usia lahir kurang dari 37 bulan?', 'Stunting', 0.60, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(11, 'G7', 'Apakah anak sering terinfeksi penyakit atau sering sakit?', 'Stunting', 0.10, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(12, 'G7', 'Apakah anak sering terinfeksi penyakit atau sering sakit?', 'GAKY', 0.20, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(13, 'G8', 'Apakah air yang digunakan untuk makan dan minum tidak layak dan tidak aman dikonsumsi? (belum terjamin keamanannya)', 'Stunting', 0.20, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(14, 'G9', 'Apakah anak tidak mendapatkan MPASI sesuai buku KIA?', 'Stunting', 0.20, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(15, 'G9', 'Apakah anak tidak mendapatkan MPASI sesuai buku KIA?', 'GAKY', 0.20, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(16, 'G9', 'Apakah anak tidak mendapatkan MPASI sesuai buku KIA?', 'Anemia', 0.40, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(17, 'G9', 'Apakah anak tidak mendapatkan MPASI sesuai buku KIA?', 'Gizi Lebih', 0.10, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(18, 'G10', 'Apakah setiap kali makan anak tidak mendapatkan protein hewani (telur/ikan/daging) dan lainnya?', 'Stunting', 0.20, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(19, 'G10', 'Apakah setiap kali makan anak tidak mendapatkan protein hewani (telur/ikan/daging) dan lainnya?', 'Anemia', 0.20, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(20, 'G11', 'Apakah ubun-ubun anak melebar saat lahir atau seiring berjalannya waktu?', 'GAKY', 0.40, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(21, 'G12', 'Apakah wajah anak terlihat sembab?', 'GAKY', 0.30, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(22, 'G13', 'Apakah pusar pada anak menonjol?', 'GAKY', 0.30, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(23, 'G14', 'Apakah anak mudah tersedak?', 'GAKY', 0.30, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(24, 'G15', 'Apakah anak mengalami keterlambatan pertumbuhan (tinggi badan) dibandingkan anak seusianya?', 'Stunting', 0.10, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(25, 'G15', 'Apakah anak mengalami keterlambatan pertumbuhan (tinggi badan) dibandingkan anak seusianya?', 'GAKY', 0.30, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(26, 'G15', 'Apakah anak mengalami keterlambatan pertumbuhan (tinggi badan) dibandingkan anak seusianya?', 'Anemia', 0.10, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(27, 'G16', 'Apakah anak mengalami kesulitan berbicara?', 'GAKY', 0.40, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(28, 'G17', 'Apakah perut anak mengalami buncit?', 'Gizi Lebih', 0.60, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(29, 'G18', 'Apakah leher anak relatif lebih pendek dan berlipat dibandingkan anak seusianya?', 'Gizi Lebih', 0.60, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(30, 'G19', 'Apakah anak sering mengkonsumsi makanan manis dan berminyak?', 'Gizi Lebih', 0.60, '2023-12-17 11:39:28', '2023-12-17 11:39:28'),
(31, 'G20', 'Apakah wajah anak nampak tembem, bulat, dan bahu rangkap?', 'Gizi Lebih', 0.60, '2023-12-17 11:39:28', '2023-12-17 11:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(116, '2014_10_12_000000_create_users_table', 1),
(117, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(118, '2019_08_19_000000_create_failed_jobs_table', 1),
(119, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(120, '2023_09_24_004614_create_posts_table', 1),
(121, '2023_09_24_041715_create_categories_table', 1),
(122, '2023_10_02_165927_create_gejalas_table', 1),
(123, '2023_10_02_165934_create_penyakits_table', 1),
(124, '2023_10_20_170234_nilaijawaban_table', 1),
(125, '2023_11_03_191038_create_gejala_penyakit_table', 1),
(126, '2023_11_08_172727_create_riwayats_table', 1),
(127, '2023_11_12_150656_create_gambars_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_jawabans`
--

CREATE TABLE `nilai_jawabans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `nilai` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_jawabans`
--

INSERT INTO `nilai_jawabans` (`id`, `jawaban`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 'Sangat Yakin', 1.00, '2023-12-17 11:39:58', '2023-12-17 11:39:58'),
(2, 'Yakin', 0.80, '2023-12-17 11:39:58', '2023-12-17 11:39:58'),
(3, 'Cukup Yakin', 0.60, '2023-12-17 11:39:58', '2023-12-17 11:39:58'),
(4, 'Kurang Yakin', 0.40, '2023-12-17 11:39:58', '2023-12-17 11:39:58'),
(5, 'Tidak Tahu', 0.20, '2023-12-17 11:39:58', '2023-12-17 11:39:58'),
(6, 'Tidak', 0.00, '2023-12-17 11:39:58', '2023-12-17 11:39:58');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penyakits`
--

CREATE TABLE `penyakits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_penyakit` varchar(255) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `solusi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyakits`
--

INSERT INTO `penyakits` (`id`, `kode_penyakit`, `nama_penyakit`, `solusi`, `created_at`, `updated_at`) VALUES
(1, 'P1', 'Stunting', 'Stunting pada anak dapat menyebabkan keterlambatan pertumbuhan dan perkembangan, dan efek jangka panjang akan menimbulkan beberapa penyakit di masa yang akan datang. Agar anak dapat tumbuh sehat dan cerdas, optimalkan gizi anak sesuai dengan anjuran.', '2023-12-17 11:40:09', '2023-12-17 11:40:09'),
(2, 'P2', 'GAKY', 'Gangguan Akibat Kekurangan Yodium (GAKY) dapat diatasi dengan meningkatkan asupan yodium melalui konsumsi makanan kaya yodium seperti seafood, rumput laut. Selain itu, penggunaan garam beryodium dapat menjadi langkah preventif yang efektif untuk mengurangi risiko GAKY.', '2023-12-17 11:40:09', '2023-12-17 11:40:09'),
(3, 'P3', 'Anemia', 'Anemia pada balita dapat menyebabkan keterlambatan pertumbuhan dan kecerdasan. Untuk mengatasi anemia, perlu adanya peningkatan asupan makanan yang kaya zat besi. Makanan yang mengandung zat besi tinggi diantaranya adalah : daging merah, ayam, ikan, sayuran berdaun hijau, kacang-kacangan, dan sereal diperkaya zat besi. Rekomendasi : Perlu bertemu tenaga kesehatan dan melakukan pemeriksaan laboratorium untuk memastikan keadaan anemia.', '2023-12-17 11:40:09', '2023-12-17 11:40:09'),
(4, 'P4', 'Gizi Lebih', 'Gizi lebih atau obesitas pada anak dapat diatasi dengan mengonsumsi gizi seimbang dan aktivitas fisik. Penting untuk membatasi konsumsi gula, garam, dan lemak serta memastikan asupan kalori sesuai kebutuhan tubuh. Rekomendasi : Perlu adanya konsultasi dengan tenaga kesehatan, untuk mencapai berat badan ideal karena anak tidak bisa melakukan sembarangan diet ketat, berkaitan sedang dalam masa pertumbuhan yang membutuhkan zat gizi yang optimal.', '2023-12-17 11:40:09', '2023-12-17 11:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `gambar_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `excerpt` text NOT NULL,
  `body` text NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `gambar_id`, `title`, `slug`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 'Mengenal & Memahami Apa Itu Penyakit Stunting Pada Anak', 'mengenal-&-memahami-apa-itu-penyakit-stunting-pada-anak', 'Stunting masih menjadi masalah serius yang di hadapi Indonesia. Berdasarkan data survey status gizi nasional (SSGI) tahun 2022, prevalensi stunting di Indonesia diangka 21,6%. Jumlah ini menurun dibandingkan tahun sebelumnya yaitu 24,4%.', '<p style=\"text-align: justify; text-indent: 0.5in;\">Stunting masih menjadi masalah serius yang di hadapi Indonesia. Berdasarkan data survey status gizi nasional (SSGI) tahun 2022, prevalensi stunting di Indonesia diangka 21,6%. Jumlah ini menurun dibandingkan tahun sebelumnya yaitu 24,4%. Walaupun menurun, angka tersebut masih tinggi, mengingat target prevalensi stunting di tahun 2024 sebesar 14?n standard WHO di bawah 20%.</p>\n            \n            <p> <b> a. Pengertian stunting </b> </p>\n            <p> - Menurut WHO (2015), stunting adalah gangguan tumbuh kembang anak yang disebabkan oleh kekurangan gizi kronis dan infeksi berulang, yang ditandai dengan tinggi badan atau tinggi badan di bawah normal. </p>\n            <p> - Menurut WHO (2020), stunting adalah suatu kondisi menjadi pendek atau sangat pendek berdasarkan panjang/tinggi badan pada usia  kurang dari -2 standar deviasi (SD) pada kurva pertumbuhan WHO dan terjadi karena kondisi yang tidak dapat diubah lagi oleh nutrisi yang tidak memadai dan/atau infeksi berulang/penyakit kronis yang terjadi dalam 1.000 HPK.  </p>\n            \n            <p> <b> b. Penyebab stunting </b> </p>\n            <p> Penyebab stunting meliputi asupan gizi dan status kesehatan, yang mencakup ketahanan pangan (ketersediaan, keterjangkauan dan akses terhadap makanan bergizi), lingkungan sosial (standar, pola makan bayi dan anak, kebersihan, pendidikan dan tempat kerja), lingkungan kesehatan (akses, layanan pencegahan), pengobatan dan lingkungan perumahan (air, sanitasi, kondisi bangunan).</p>\n            <p> Ibu hamil dengan  asupan gizi buruk dan  penyakit menular akan melahirkan anak dengan berat badan lahir rendah (BBLR) dan/atau panjang badan tidak memenuhi standar.\n             Gizi yang baik tidak hanya ditentukan oleh jumlah makanan yang tersedia di tingkat rumah tangga, namun juga dipengaruhi oleh pola asuh orang tua seperti pemberian ASI kolostrum (ASI pertama), inisiasi menyusui, pemberian ASI dini (IMD), pemberian ASI eksklusif dan pengelolaan makanan pendamping ASI. \n             Selain itu, faktor kesehatan lingkungan seperti akses terhadap air bersih, sanitasi yang memadai, dan  pengelolaan sampah juga sangat terkait dengan kejadian  penyakit menular pada anak.</p>\n             <p>   Penyebab tidak langsung  stunting dipengaruhi oleh beberapa faktor, antara lain kesenjangan ekonomi dan pendapatan, perdagangan, urbanisasi, globalisasi, sistem pangan, jaminan sosial, sistem kesehatan, pembangunan pertanian, dan pemberdayaan perempuan.\n             Untuk mengatasi penyebab stunting perlu adanya prasyarat antara lain: Komitmen politik, kebijakan implementasi, partisipasi pemerintah dan  sektor, serta kapasitas implementasi. </p>\n             \n             <p> <b> c. Cara mencegah stunting </b> </p>\n             <p style=\"text-align: justify; text-indent: 0.5in;\"> Berikut  tips mencegah stunting: </p>\n             <p> 1. Remaja putri Lakukan pemeriksaan anemia dan konsumsi suplemen darah.</p>\n             <p> 2. Selama kehamilan Sebaiknya periksakan status kehamilan Anda secara rutin  ke dokter. Penting juga untuk memastikan asupan nutrisi yang baik selama kehamilan. Dengan pola makan yang sehat dan suplementasi mineral yang cukup seperti zat besi, asam folat dan yodium.</p>\n             <p> 3. Balita </p>\n             <p>  a. Praktikkan pemberian ASI dini (IMD). Segera setelah bayi Anda lahir, segera lakukan IMD agar praktik pemberian ASI eksklusif berhasil. Kemudian, kunjungi dokter atau  Posyandu dan Puskesmas secara rutin untuk memantau tumbuh kembang anak Anda.</p>\n             <p>    b. Vaksinasi Perhatikan jadwal vaksinasi rutin yang dilakukan pemerintah agar anak terhindar dari berbagai  penyakit.</p>\n             <p>    c. ASI Eksklusif Berikan ASI Eksklusif pada bayi Anda sampai usia 6 (enam) bulan dan tetap konsumsi MPASI yang sehat dan bergizi.</p>\n             <p>    d. Lacak pertumbuhan dan perkembangan hingga terjadi penurunan berat badan.</p>\n            <p> 4. Pola hidup bersih dan sehat   Menerapkan pola hidup bersih dan sehat seperti mencuci tangan sebelum makan, memastikan air minum bersih, buang air besar di toilet, sarana sanitasi yang sehat, dan lain-lain.</p>\n            \n            <p> <b> d. Dampak stunting </b> </p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\"> Dampak permasalahan stunting di Indonesia : \n            <p>  1. Dampak terhadap kesehatan : </p>\n            <p> a. Pertumbuhan lambat (berat badan lahir rendah, dwarfisme, pendek, kurus), hambatan perkembangan kognitif dan motorik.\n            <p> b. Gangguan metabolisme di masa dewasa â†’ risiko penyakit tidak menular (diabetes, obesitas, stroke,  jantung, dll).</p>\n            <p> 2. Dampak ekonomi: Potensi kerusakan tahunan: 2-3% PDB.</p>\n            <p> Penyebab stunting Ada beberapa faktor penyebab stunting antara lain: </p>\n            <p> 1. Kurangnya asupan kalori.</p>\n            <p> a. Faktor sosial ekonomi (kemiskinan).</p>\n            <p> b. Rendahnya tingkat pendidikan dan pengetahuan tentang praktik pemberian makan  bayi dan balita (ASI yang cukup).</p>\n            <p>   c. Peran protein hewani dalam MPASI.</p>\n            <p>   d. Pengaruh budaya </p>\n            <p> e. Ketersediaan bahan pangan lokal.</p>\n            <p> 2. Permintaan meningkat.</p>\n            <p>   a. Penyakit jantung bawaan.</p>\n            <p>   b. Alergi terhadap susu sapi.</p>\n            <p>   c. Bayi yang baru lahir memiliki berat badan lahir yang sangat rendah. </p>\n            <p>   d. Gangguan metabolisme bawaan.</p>\n             \n            <p> Infeksi kronik yang disebabkan kebersihan personal dan lingkungan yang buruk (diare kronis) dan penyakit-penyakit yang dapat dicegah oleh imunisasi (Tuberculosis / TBC, difteri, pertussis, dan campak).</p>', NULL, '2023-12-17 11:39:18', '2023-12-17 11:39:18'),
(2, 3, 2, 2, 'Anemia Defisiensi Besi pada Anak: Penyebab, Gejala, dan Upaya Pencegahan', 'anemia-defisiensi-besi-pada-anak-penyebab-gejala-dan-upaya-pencegahan', 'Anemia defisiensi besi (ADB) merupakan masalah defisiensi gizi yang paling umum terjadi pada anak di seluruh dunia, terutama di negara berkembang, termasuk Indonesia.Penyakit ini terjadi karena tubuh penderita kekurangan zat besi.', '<p style=\"text-align: justify; text-indent: 0.5in;\">Anemia defisiensi besi (ADB) merupakan masalah defisiensi gizi yang paling umum terjadi pada anak di seluruh dunia, terutama di negara berkembang, termasuk Indonesia.Penyakit ini terjadi karena tubuh penderita kekurangan zat besi. Anemia adalah istilah untuk rendahnya nilai hemoglobin (Hb) tergantung pada usia dan jenis kelamin. Pada anak-anak, ADB adalah penyebab palingl umum terjadinya anemia.</p>\n            \n            <p> <b> a. Penyebab anemia </b> </p>\n            \n            <p style=\"text-align: justify; text-indent: 0.5in;\"> Penyebab anemia defisiensi besi pada usia :</p>\n            \n            <p> 1. Bayi dibawah 1 tahun </p>\n            <p> a. Cadangan zat besi yang tidak mencukupi, setiap tahunnya disebabkan oleh berat badan lahir rendah, kelahiran prematur, kelahiran kembar, pemberian ASI lengkap tanpa suplementasi zat besi, Susu formula memiliki kandungan zat besi yang rendah, pertumbuhan yang cepat dan anemia selama masa kehamilan.</p>\n            <p> b. Alergi terhadap protein susu sapi Anak usia 1 s/d 2 tahun </p>\n            <p> c. Asupan zat besi yang tidak mencukupi karena kurangnya makanan pendamping ASI atau konsumsi susu murni yang berlebihan.</p>\n            <p> d. Obesitas Meningkatnya kebutuhan akibat infeksi berulang/kronis.</p>\n            <p> e. Malabsorpsi.</p>\n            \n            <p> 2. Anak usia 2 s/d 5 tahun </p>\n            <p>  a. Kurangnya zat besi akibat makanan yang tidak mengandung zat besi heme atau terlalu banyak minum susu.</p>\n            <p>  b. Obesitas Meningkatnya kebutuhan akibat infeksi berulang/kronis (bakteri, virus atau parasit).</p>\n            <p>   c. Kehilangan yang berlebihan akibat perdarahan (divertikulum/poliposis Meckel, dll).</p>\n            \n            <p> 3. Anak usia 5 tahun - remaja </p>\n            <p> a. Keputihan berlebihan akibat pendarahan (misalnya infeksi cacing tambang) Menstruasi berlebihan pada remaja.</p>\n            \n            <p> <b> b. Gejala anemia </b> </p>\n            \n            <p style=\"text-align: justify; text-indent: 0.5in;\"> Selain wajah pucat, gejala umum anemia pada anak menurut American Academy of Pediatrics and Child Health adalah: </p>\n            <p> 1. Kulit atau mata menguning </p>\n            <p> 2. Bibir pucat Kerutan  kelopak mata berkurang </p>\n            <p>  3. Warna kuku anak tampak lebih terang dari biasanya </p>\n            <p> 4 .Anak kesulitan berbicara atau tidak mau berbicara </p>\n            <p> 5.Badan anak lemah </p>\n            <p>  6. Anak mudah lelah </p>\n            <p> 7. Tidur siang lebih lama atau lebih lama dari biasanya </p>\n            <p> 8. Warna urine anak gelap seperti teh Selain tanda-tanda umum  di atas, American Academy of Pediatrics juga menjelaskan bahwa Anak anemia berat akan mengalami gejala lain seperti: </p>\n            <p> a. Sesak napas atau sesak napas </p>\n            <p>   b. Gagal jantung pada anak dengan detak jantung cepat </p>\n            <p>  c. Sakit kepala Pusing atau kepala terasa ringan </p>\n            <p>  d. Lengan atau kaki bengkak </p>\n            <p>  e. Pingsan (kehilangan kesadaran) </p>\n            <p>  f. Nyeri atau bengkak pada lidah </p>\n            \n            <p> Menurut situs resmi Cedars-Sinai Hospital di Amerika, anak-anak Orang yang  pertama kali mengalami periode.\n            remaja putri mungkin juga mengalami siklus menstruasi yang tidak teratur atau bahkan tidak menstruasi sama sekali.</p>\n            \n            <p> <b> c. Pencegahan anemia </b> </p>\n            \n            <p> Upaya pencegahan dan penanggulangan anemia dilakukan dengan memberikan asupan zat besi yang cukup ke dalam tubuh untuk meningkatkan pembentukan hemoglobin.</p>\n            \n            <p> Upaya yang dapat dilakukan adalah: Meningkatkan asupan makanan sumber zat besi. \n            Meningkatkan asupan makanan sumber zat besi dengan pola makan bergizi seimbang, Makanan yang kaya sumber zat besi dari hewani contohnya hati, ikan, daging dan unggas, sedangkan dari nabati yaitu sayuran berwarna hijau tua dan kacang-kacangan.</p>\n            \n            <p> Upaya yang dapat dilakukan adalah: Meningkatkan asupan makanan sumber zat besi. \n            Untuk meningkatkan penyerapan zat besi dari sumber nabati perlu mengonsumsi buah-buahan yang mengandung vitamin C, seperti jeruk, jambu. Penyerapan zat besi dapat dihambat oleh zat lain, seperti tanin, fosfor, serat, kalsium, dan fitat.</p>\n            \n            <p> Upaya yang dapat dilakukan adalah: Meningkatkan asupan makanan sumber zat besi. \n            Suplementasi zat besi Keadaan dimana zat besi dari makanan tidak mencukupi kebutuhan terhadap zat besi, perlu didapat dari suplementasi zat besi.\n            Pemberian suplemen zat besi secara rutin dalam jangka waktu tertentu dimaksudkan untuk meningkatkan kadar hemoglobin secara cepat dan harus terus meningkatkan simpanan zat besi  dalam tubuh.</p>\n\n            <p>  Upaya yang dapat dilakukan adalah: Meningkatkan asupan makanan sumber zat besi. \n            Hindari mengonsumsi tablet suplemen darah (TTD) dengan: Teh dan kopi karena mengandung senyawa fitat dan tanin yang dapat mengikat zat besi menjadi senyawa  kompleks sehingga tidak dapat diserap. Tablet kalsium (kalsium) dalam dosis besar dapat menghambat penyerapan zat besi. Obat  maag  melapisi permukaan lambung untuk mengganggu penyerapan zat besi. Penyerapan zat besi akan semakin terhambat jika menggunakan obat maag yang mengandung kalsium.</p>', NULL, '2023-12-17 11:39:18', '2023-12-17 11:39:18'),
(3, 2, 2, 3, 'Malnutrisi Energi Protein pada Anak: Penyebab, Gejala, dan Pencegahan', 'malnutrisi-energi-protein-pada-anak-penyebab-gejala-dan-pencegahan', 'Malnutrisi energi protein (PEM) merupakan kelainan gizi umum pada anak yang  ditandai dengan defisiensi gizi.\n            Kondisi ini secara spesifik menggambarkan anak yang mengalami kekurangan energi dan protein.', '<p style=\"text-align: justify; text-indent: 0.5in;\">Malnutrisi energi protein (PEM) merupakan kelainan gizi umum pada anak yang  ditandai dengan defisiensi gizi.\n            Kondisi ini secara spesifik menggambarkan anak yang mengalami kekurangan energi dan protein.Gizi yang cukup merupakan landasan berfungsinya organ tubuh dan tumbuh kembang anak, bila kurang dapat mengakibatkan gangguan.MEP  dibedakan menjadi dua jenis, yaitu: </p>\n            <p>  1. MEP  sedang (sering disebut gizi buruk) </p>\n            <p> 2. MEP berat (sering disebut gizi buruk).</p>\n            <p> Gizi buruk sendiri dibedakan menjadi tiga jenis, yaitu marasmus, kwashiorkor atau kombinasi marasmus-kwashiorkor.</p>\n            \n            <p> <b> a. Penyebab </b> </p>\n            \n            <p style=\"text-align: justify; text-indent: 0.5in;\"> Penyebab PEM adalah  penyakit lingkungan, karena terdapat sejumlah faktor yang saling berinteraksi menyebabkan penyakit ini, diantaranya </p>\n            <p> 1. Faktor makanan Peran pola makan Menurut konsep klasik ada dua konsep .</p>\n            <p> a. pola makan yang  cukup energi tetapi kurang protein, akan menyebabkan anak menderita kwashiorkor.</p>\n            <p>  b. pola makan yang kurang energi, padahal gizinya seimbang.zat gizi (esensial),  juga akan  menyebabkan malnutrisi.</p>\n             \n            <p> 2.faktor sosial, kepadatan penduduk, infeksi, kemiskinan dan lain-lain.</p>\n            \n            <p>   Peran faktor sosial seperti pantangan terhadap penggunaan bahan makanan tertentu yang diwariskan secara turun temurun dapat  mempengaruhi terjadinya PEM.Ada pantangan  berdasarkan agama, namun ada juga pantangan  berdasarkan tradisi yang diturunkan dari generasi ke generasi, namun jika pantangan tersebut berdasarkan agama maka akan sulit  diatasi.\n            Apabila pantangan-pantangan tersebut didasari oleh kebiasaan atau tradisi,  tersebut dapat diatasi melalui pendidikan gizi yang baik yang diberikan secara berkesinambungan. Status gizi seseorang merupakan hasil interaksi seluruh aspek lingkungan, meliputi faktor fisik, biologis, dan budaya.</p>\n            \n            <p> Secara umum faktor  yang menentukan status gizi masyarakat khususnya anak adalah tingkat pendidikan orang tua, kondisi perekonomian, sumber pangan yang cukup, dan aspek kesehatan. Masing-masing faktor tersebut dapat mempengaruhi status gizi masyarakat baik secara  langsung maupun tidak langsung.\n            KEP pada dasarnya  ditentukan oleh dua faktor.</p>\n            <p>    1. Secara langsung.</p>\n            <p> Terjadinya KEP pada balita bergantung pada pola makan dan ada  tidaknya penyakit menular.</p>\n            <p>  2.Tidak Langsung Faktor ini antara lain dipengaruhi oleh kualitas dan kuantitas makanan yang dikonsumsi anak  yang ditentukan  oleh beberapa faktor penyebab tidak langsung yaitu: </p>\n            <p>  a) Gizi dalam makanan b) Pembelian keluarga kekuasaan, termasuk pendapatan, harga pangan, dan pengeluaran keluarga untuk kebutuhan  selain makanan</p>\n            <p>  c) Keyakinan ibu tentang pola makan dan kesehatan </p>\n            <p>  d) Terjaga atau tidaknya kesehatan, termasuk kebersihan</p>\n            <p>    e) Fenomena sosial dan kondisi lingkungan.</p>\n            \n            <p> <b> b. Gejala </b> </p>\n            <p> Gejala Pada anak dengan malnutrisi energi protein tipe marasmus, mereka terlihat sangat kurus. Selain itu, bulunya akan terlihat seperti sutra jagung, tulang tubuhnya akan terlihat, dan kulitnya akan berkerut.</p>\n            \n            <p>  Pada anak-anak dengan malnutrisi energi protein tipe kwashiorkor, mereka mengalami pembengkakan, perut membuncit, dan kaki membesar. Mereka juga akan menunjukkan tanda-tanda seperti bintik coklat pada kulit  terkelupas dan rambut  mudah rontok.</p>\n            \n            <p> Pada malnutrisi campuran protein-energi, gejala marasmus dan kwashiorkor terjadi bersamaan</p>\n            \n            <p> <b> c. Pencegahan </b> </p>\n            \n            <p style=\"text-align: justify; text-indent: 0.5in;\"> Pencegahan Malnutrisi energi protein  pada anak dapat dihindari dengan mengonsumsi makanan yang sehat dan seimbang yang meliputi:</p>\n            \n            <p> 1.Sumber karbohidrat seperti nasi, roti atau kentang </p>\n            <p>  2. Sumber protein dan lemak seperti daging merah, ikan, telur atau unggas </p>\n            <p>  3. Sumber mineral dan vitamin seperti buah-buahan, sayuran serta susu dan produk olahannya seperti keju atau yogurt. </p>\n            <p> Selain pola makan sehat,  minum air putih juga penting jika diperlukan. dan keluarga Anda mengonsumsi makanan bergizi seimbang.</p>\n            Dengan cara ini, kebutuhan nutrisi harian anak dapat tercukupi sepenuhnya.</p>', NULL, '2023-12-17 11:39:18', '2023-12-17 11:39:18'),
(4, 1, 2, 4, 'Stunting dan Cara Mengatasi Pencegahannya', 'stunting-dan-cara-mengatasi-pencegahannya', 'Stunting merupakan kondisi gagal pertumbuhan pada anak (pertumbuhan tubuh dan otak) akibat kekurangan gizi dalam waktu yang lama. Sehingga anak lebih pendek dari anak normal seusianya dan memiliki keterlambatan dalam berpikir.', '<p style=\"text-align: justify; text-indent: 0.5in;\">Stunting merupakan kondisi gagal pertumbuhan pada anak (pertumbuhan tubuh dan otak) akibat kekurangan gizi dalam waktu yang lama. Sehingga anak lebih pendek dari anak normal seusianya dan memiliki keterlambatan dalam berpikir. Kekurangan gizi dalam waktu lama itu terjadi sejak janin dalam kandungan sampai awal kehidupan anak (1000 Hari Pertama Kelahiran). (Kemenkes RI, 2018)</p>\n\n            <p> Stunting adalah kondisi ketika balita memiliki tinggi badan dibawah rata-rata. Hal ini diakibatkan asupan gizi yang diberikan, dalam waktu yang panjang, tidak sesuai dengan kebutuhan. Stunting berpotensi memperlambat perkembangan otak, dengan dampak jangka panjang berupa keterbelakangan mental, rendahnya kemampuan belajar, dan risiko serangan penyakit kronis seperti diabetes, hipertensi, hingga obesitas.</p>\n            \n            <p> Memang angka stunting Indonesia menurun dari 29 persen pada 2015 menjadi 27.6 persen tahun lalu. Adapun pada 2013 angka stunting nasional mencapai 37,2 persen. Namun angka tersebut masih di atas batas yang ditetapkan Organisasi Kesehatan Dunia (WHO) yaitu 20 persen.</p>\n            \n            <p>  Masalah stunting merupakan permasalahan gizi yang dihadapi dunia khususnya negara-negara miskin dan berkembang. Stunting merupakan kegagalan pertumbuhan akibat akumulasi ketidakcukupan nutrisi yang berlangsung lama mulai dari kehamilan sampai dengan usia 24 bulan. Banyak faktor yang menyebabkan tingginya kejadian stunting pada balita. Masyarakat belum menyadari stunting sebagai suatu masalah dibandingkan dengan permasalahan kurang gizi lainnya. (Mitra, 2015)</p>\n            \n            <p> <b> Pencegahan stunting dapat dilakukan dengan langkah sebagai berikut: </b> </p>\n            \n            <p>  1. Pemenuhan kebutuhan zat gizi bagi ibu hamil. Ibu hamil harus mendapatkan makanan yang cukup gizi, suplementasi zat gizi (tablet zat besi atau Fe) dan terpantau kesehatannya. Namun, kepatuhan ibu hamil untuk meminum tablet tambah darah hanya 33 %. Padahal mereka harus minimal mengkonsumsi 90 tablet selama kehamilan.</p>\n            \n            <p>   2. ASI eksklusif sampai umur 6 bulan dan setelah umur 6 bulan diberi makanan pendamping ASI (MPASI) yang cukup jumlah dan kualitasnya.</p>\n            \n            <p>  3.  Memantau pertumbuhan balita di posyandu merupakan upaya yang sangat strategis untuk mendeteksi dini terjadinya gangguan pertumbuhan.</p>\n            \n            <p> 4. Meningkatkan akses terhadap air bersih dan fasilitas sanitasi, serta menjaga kebersihan lingkungan. Sanitasi dan kebersihan untuk pertumbuhan anak yang sempurna intervensi gizi saja belum cukup untuk mengatasi masalah stunting. Faktor sanitasi dan kebersihan lingkungan berpengaruh pula untuk kesehatan ibu hamil dan tumbuh kembang anak, karena anak usia di bawah dua tahun rentan terhadap berbagai infeksi dan penyakit.</p>\n            \n            <p>  5. Rendahnya sanitasi dan kebersihan lingkungan pun memicu gangguan saluran pencernaan, yang membuat energi untuk pertumbuhan teralihkan kepada perlawanan tubuh menghadapi infeksi. Sebuah riset menemukan bahwa semakin sering seorang anak menderita diare, maka semakin besar pula ancaman stunting untuknya. (Kemenkes RI, 2016)</p>\n            \n            <p> Berbagai penelitian telah membuktikan bahwa terdapat pengaruh stunting terhadap perkembangan kognitif dan prestasi belajar anak yang dapat menurunkan produktivitas kerja sehingga pada akhirnya dapat menghambat pertumbuhan ekonomi dan meningkatkan kemiskinan di suatu negara. Pada kondisi stunting dapat terjadi gangguan pada proses pematangan neuron otak serta perubahan struktur dan fungsi otak yang dapat menyebabkan kerusakan permanen pada perkembangan kognitif. Kondisi ini menyebabkan kemampuan berpikir dan belajar anak terganggu dan pada akhirnya menurunkan tingkat kehadiran dan prestasi belajar. (Adilla Dwi Nur Yadika, 2019)</p>\n            \n            <p>  Oleh karena itu pengetahuan dan pemahaman mengenai pencegahan stunting melalui edukasi kesehatan sangat penting dalam upaya mencegah terjadinya stunting di masyarakat.</p>\n            \n             \n            \n            <p> <b> Referensi: </b></p>\n            \n            <p> Adilla Dwi Nur Yadika, Khairun Nisa Berawi, Syahrul Hamidi Nasution . 2019.Pengaruh Stunting terhadap Perkembangan Kognitif dan Prestasi Belajar. Majority | Volume | Nomor | September 2019 |hal. 273 https://juke.kedokteran.unila.ac.id/ diakses tangal 10/11/2022</p>\n            \n            <p> Kementerian Kesehatan RI.2016. Pedoman Hidup Bersih dan Sehat. Direktorat Promosi Kesehatan dan Pemberdayaan Masyarakat. https://promkes.kemkes.go.id/diakses tgl 10/11/2022</p>\n            \n            <p> Kementerian Kesehatan RI. 2018. Stunting Ancaman Generasi Masa depan Indonesia.https://p2ptm.kemkes.go.id/post/stunting-ancaman-generasi-masa-depan-indonesia/ diakses tgl 10/11/2022</p>\n            \n            <p> Mitra, 2015. Permasalahan Anak Pendek (Stunting) dan Intervensi untukMencegah Terjadinya Stunting (Suatu Kajian Kepustakaan) LPPM STIKes Hang Tuah Pekanbaru. Jurnal Kesehatan Komunitas, Vol. 2, No. 6, Mei 2015 hal. 269.</p>\n            \n            <p> https://jurnal.htp.ac.id/ diakses tgl 10/11/2022</p>\n            \n            <p> Sumber gambar: www. p2ptm.kemkes.go.id</p>\n            \n            <p> ( DOC, PROMKES,RSMH).</p>\n            <p>Sumber : https://yankes.kemkes.go.id/view_artikel/2483/stunting-dan-pencegahannya</p>', NULL, '2023-12-17 11:39:18', '2023-12-17 11:39:18'),
(5, 2, 2, 5, 'Marasmus: Penyebab, Gejala, Diagnosis, dan Pengobatan Kekurangan Energi Protein pada Anak', 'marasmus-penyebab-gejala-diagnosis-dan-pengobatan-kekurangan-energi-protein-pada-anak', 'Marasmus adalah salah satu jenis malnutrisi yang parah, khususnya, kekurangan energi protein. Ini merupakan hasil dari kekurangan kalori secara keseluruhan. Termasuk semua makronutrien karbohidrat, lemak, dan protein.', '<p style=\"text-align: justify; text-indent: 0.5in;\">Marasmus adalah salah satu jenis malnutrisi yang parah, khususnya, kekurangan energi protein. Ini merupakan hasil dari kekurangan kalori secara keseluruhan. Termasuk semua makronutrien karbohidrat, lemak, dan protein. </p>\n\n            <p> Kondisi ini dapat membuat tbuh kekurangan bahan bakar yang diperlukan untuk mempertahankan fungsi tubuh yang normal. Orang dengan marasmus bisa terlihat sangat kurus. Anak-anak mungkin terhambat dalam ukuran dan perkembangan. Marasmus yang berkepanjangan menyebabkan kelaparan.</p>\n            \n            <p> <b> Penyebab Marasmus </b> </p>\n            <p> Defisiensi nutrisi merupakan penyebab utama marasmus. Ini terjadi pada anak-anak yang tidak mengonsumsi cukup protein, kalori, karbohidrat, dan nutrisi penting lainnya. Ini biasanya karena kemiskinan dan kelangkaan makanan.</p>\n            \n            <p> Ada beberapa jenis malnutrisi. Seorang anak yang kekurangan gizi mungkin mengalami kondisi lain selain selain marasmus. Di antara jenis malnutrisi, yang lebih umum adalah defisiensi zat besi, yodium, zinc, dan vitamin A.</p>\n            \n            <p> <b> Faktor Risiko Marasmus</b></p>\n            <p> Sejumlah faktor dapat meningkatkan risiko mengembangkan marasmus. Tidak semua orang dengan faktor risiko akan mengalami marasmus. Faktor risiko marasmus meliputi:</p>\n            \n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Kelaparan kronis.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Pasokan air yang terkontaminasi.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Persediaan makanan yang tidak memadai.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Kekurangan vitamin, terutama vitamin A , E atau K.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Pola makan yang buruk dan tidak seimbang, tertama kurang biji-bijian, buah-buahan dan sayuran, dan protein.</p>\n            <p> <b> Gejala Marasmus</b></p>\n            <p> Gejala utama marasmus adalah kekurangan berat badan. Anak-anak dengan kondisi ini telah kehilangan banyak massa otot dan lemak subkutan. Lemak subkutan adalah lapisan lemak tepat di bawah kulit. Kulit kering dan rambut rapuh juga merupakan gejala marasmus.</p>\n            \n            <p style=\"text-align: justify; text-indent: 0.5in;\">Pada anak-anak dengan marasmus, berikut ini juga dapat terjadi:</p>\n            \n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Diare kronis</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Infeksi pernapasan</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Cacat intelektual</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Pertumbuhan terhambat</p>\n            <p>Anak-anak yang kekurangan gizi serius mungkin terlihat lebih tua dan memiliki sedikit atau tidak ada energi atau antusiasme untuk apa pun. Marasmus juga dapat membuat anak-anak cepat marah dan mudah tersinggung, tetapi ini biasanya merupakan gejala kwashiorkor yang lebih umum.</p>\n            \n            <p >Kwashiorkor adalah bentuk lain dari malnutrisi serius. Kwashiorkor menyebabkan penumpukan cairan di dalam tubuh yang dapat menyebabkan wajah menjadi bulat dan perut menjadi buncit.</p>\n            \n            <p> <b> Diagnosis Marasmus </b></p>\n            <p>  Dokter sering dapat membuat diagnosis awal marasmus melalui pemeriksaan fisik. Pengukuran, seperti tinggi dan berat badan, dapat membantu menentukan apakah seorang anak menderita marasmus.</p>\n            \n            <p>   Ketika pengukuran tersebut jauh di bawah ukuran yang seharusnya dimiliki oleh anak sehat pada usia tertentu, marasmus mungkin menjadi penyebabnya.</p>\n            \n            <p>   Kurangnya gerak pada anak yang kekurangan gizi juga dapat membantu memastikan diagnosis marasmus. Anak dengan kondisi tersebut cenderung kekurangan energi atau kemauan untuk melakukan apapun.</p>\n            \n            <p>  Marasmus sulit didiagnosis menggunakan tes darah. Hal ini karena banyak anak dengan marasmus juga mengalami infeksi yang dapat memengaruhi hasil tes darah.</p>\n            \n            <p> <b> Pengobatan Marasmus </b></p>\n            <p> Orang yang menjalani pengobatan untuk marasmus berisiko mengalami sindrom refeeding, komplikasi yang mengancam jiwa yang dapat terjadi ketika tubuh yang kekurangan gizi mencoba melakukan boot ulang terlalu cepat. Untuk itu, rehabilitasi dilakukan secara bertahap. </p>\n            \n            <p>  Idealnya, pengidap marasmus harus dirawat di rumah sakit, di bawah pengawasan medis yang ketat. Lalu, dokter akan mengantisipasi dan mengenali sindrom refeeding dapat membantu mencegah atau memperbaikinya dengan melengkapi kekurangan elektrolit dan zat gizi mikro.</p>\n            \n            <p style=\"text-align: justify; text-indent: 0.5in;\">  Berikut ini tahap pengobatan untuk marasmus:</p>\n            \n            <p> <b> 1. Tahap 1: Rehidrasi dan Stabilisasi </b></p>\n            <p>     Tahap pertama pengobatan difokuskan pada pengobatan dehidrasi, ketidakseimbangan elektrolit, dan defisiensi mikronutrien untuk mempersiapkan tubuh untuk refeeding. </p>\n            \n            <p>   Dalam banyak kasus, semua ini dapat diobati dengan satu formula, Solusi Rehidrasi untuk Nutrisi MAL (ReSoMal), yang diberikan secara oral atau melalui selang nasogastrik. </p>\n            \n            <p>    Penting juga untuk menjaga pengidap tetap hangat untuk mencegah hipotermia dan untuk mengobati infeksi, yang membahayakan sumber energi mereka yang sedikit. Tergantung pada individu, mungkin diperlukan beberapa jam hingga hari sebelum mereka dianggap cukup stabil untuk mulai memberi makan kembali.</p>\n            \n            <p> <b> 2. Tahap 2: Rehabilitasi Nutrisi </b></p>\n            <p> Refeeding dimulai secara perlahan dengan formula cair yang secara hati-hati menyeimbangkan karbohidrat, protein, dan lemak. Untuk pasien rawat inap, penyedia layanan kesehatan lebih memilih pemberian makanan melalui selang karena memungkinkan nutrisi bertahap tetapi berkelanjutan. </p>\n            \n            <p>  Kalori diperkenalkan sekitar 70 persen dari nilai normal yang direkomendasikan untuk usia seseorang. Hingga akhirnya dapat meningkat hingga 140 persen dari nilai yang direkomendasikan untuk memenuhi kebutuhan pertumbuhan anak-anak yang terhambat. </p>\n            \n            <p>  Fase ini dapat berlangsung dua hingga enam minggu. Selama waktu ini, pasien secara bertahap berkembang ke pemberian makanan oral yang lebih biasa dengan makanan padat.</p>\n            \n            <p> <b> 3. Tahap 3: Tindak Lanjut dan Pencegahan </b></p>\n            <p> Karena marasmus dapat kambuh, protokol perawatan lengkap mencakup pendidikan dan dukungan keluar untuk pasien dan/atau pengasuh mereka sebelum mereka dipulangkan. </p>\n            \n            <p>   Di negara berkembang, ini mungkin berarti dukungan menyusui, air minum yang aman dan pedoman persiapan makanan, imunisasi dan pendidikan untuk mencegah penyebaran penyakit. </p>\n            \n            <p>  Selain itu, pengasuh juga memerlukan panduan tentang cara mengenali tanda-tanda malnutrisi pada orang yang mereka rawat. Alat penyaringan universal malnutrisi (MUST) dapat membantu mengidentifikasi orang yang berisiko.</p>\n            \n            <p> <b> Komplikasi Marasmus </b></p>\n            <p>  Komplikasi yang berhubungan dengan marasmus atau malnutrisi sangat serius pada bayi dan anak-anak. Kurangnya nutrisi yang tepat dapat menyebabkan keterlambatan perkembangan fisik dan mental.</p>\n            \n            <p style=\"text-align: justify; text-indent: 0.5in;\"> Komplikasi marasmus yang tidak diobati bisa serius dan mungkin termasuk:</p>\n            \n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Masalah tumbuh kembang pada anak.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Deformitas dan kerusakan sendi.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Kehilangan kekuatan.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Kehilangan penglihatan dan kebutaan.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Kegagalan atau disfungsi organ.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Tidak sadar dan koma.</p>\n            <p> <b> Pencegahan Marasmus </b></p>\n            <p> Pola makan bergizi dan seimbang dengan banyak buah dan sayuran segar, biji-bijian, dan protein akan mengurangi risiko malnutrisi dan marasmus. Jika marasmus berhubungan dengan penyakit yang mendasarinya, maka carilah pengobatan yang tepat untuk penyakit tersebut.</p>\n            \n            <p style=\"text-align: justify; text-indent: 0.5in;\"> Kamu mungkin dapat menurunkan risiko maramus dengan cara:</p>\n            \n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Makan makanan yang bergizi dan seimbang.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Membahas gejala dengan penyedia layanan kesehatan.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Minum air yang disanitasi dengan benar.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Mengikuti kursus pengobatan yang direkomendasikan untuk infeksi.</p>\n            <p> <b> Kapan Harus ke Dokter? </b></p>\n            <p> Penting untuk mengenali gejala malnutrisi sedini mungkin dan mencari pengobatan medis yang diperlukan. Jika dokter memberi resep obat, kamu bisa download Halodoc untuk cek kebutuhan medis kamu dengan mudah.</p>\n            \n            <p> <b> Referensi: </b></p>\n            <p> Cleveland Clinic. Diakses pada 2022. Marasmus.</p>\n            <p> Health Grades. Diakses pada 2022. Marasmus.</p>\n            <p> Healthline. Diakses pada 2022. What You Should Know About Marasmus.</p>\n            <p>Medical News Today. Diakses pada 2022. Marasmus: A Type Of Malnutrition.</p>\n            <p>Sumber : https://www.halodoc.com/kesehatan/marasmus</p>', NULL, '2023-12-17 11:39:18', '2023-12-17 11:39:18'),
(6, 1, 2, 6, 'Mencegah Stunting dengan Perbaikan Pola Makan, Pola Asuh dan Sanitasi', 'mencegah-stunting-dengan-perbaikan-pola-makan-pola-asuh-dan-sanitasi', 'Sebagian besar masyarakat mungkin belum memahami istilah yang disebut stunting. Stunting adalah masalah kurang gizi kronis yang disebabkan oleh kurangnya asupan gizi dalam waktu yang cukup lama, sehingga mengakibatkan gangguan pertumbuhan pada anak yakni tinggi badan anak lebih rendah atau pendek (kerdil) dari standar usianya.', '<p style=\"text-align: justify; text-indent: 0.5in;\">Sebagian besar masyarakat mungkin belum memahami istilah yang disebut stunting. Stunting adalah masalah kurang gizi kronis yang disebabkan oleh kurangnya asupan gizi dalam waktu yang cukup lama, sehingga mengakibatkan gangguan pertumbuhan pada anak yakni tinggi badan anak lebih rendah atau pendek (kerdil) dari standar usianya.</p>\n\n            <p> Kondisi tubuh anak yang pendek seringkali dikatakan sebagai faktor keturunan (genetik) dari kedua orang tuanya, sehingga masyarakat banyak yang hanya menerima tanpa berbuat apa-apa untuk mencegahnya. Padahal seperti kita ketahui, genetika merupakan faktor determinan kesehatan yang paling kecil pengaruhnya bila dibandingkan dengan faktor perilaku, lingkungan (sosial, ekonomi, budaya, politik), dan pelayanan kesehatan. Dengan kata lain, stunting merupakan masalah yang sebenarnya bisa dicegah.</p>\n            \n            <p> Salah satu fokus pemerintah saat ini adalah pencegahan stunting. Upaya ini bertujuan agar anak-anak Indonesia dapat tumbuh dan berkembang secara optimal dan maksimal, dengan disertai kemampuan emosional, sosial, dan fisik yang siap untuk belajar, serta mampu berinovasi dan berkompetisi di tingkat global.</p>\n            \n            <p> â€œTerdapat tiga hal yang harus diperhatikan dalam pencegahan stunting, yaitu perbaikan terhadap pola makan, pola asuh, serta perbaikan sanitasi dan akses air bersihâ€, tutur Menteri Kesehatan RI, Nila Farid Moelok, di Jakarta (7/4).</p>\n            \n            <p>  Diterangkan Menkes Nila Moeloek, kesehatan berada di hilir. Seringkali masalah-masalah non kesehatan menjadi akar dari masalah stunting, baik itu masalah ekonomi, politik, sosial, budaya, kemiskinan, kurangnya pemberdayaan perempuan, serta masalah degradasi lingkungan. Karena itu, ditegaskan oleh Menkes, kesehatan membutuhkan peran semua sektor dan tatanan masyarakat.</p>\n            \n            <p> <b> 1) Pola Makan </b> </p>\n            \n            <p> Masalah stunting dipengaruhi oleh rendahnya akses terhadap makanan dari segi jumlah dan kualitas gizi, serta seringkali tidak beragam.</p>\n            \n            <p> Istilah â€œIsi Piringkuâ€ dengan gizi seimbang perlu diperkenalkan dan dibiasakan dalam kehidupan sehari-hari. Bagi anak-anak dalam masa pertumbuhan, memperbanyak sumber protein sangat dianjurkan, di samping tetap membiasakan mengonsumsi buah dan sayur.</p>\n            \n            <p>  Dalam satu porsi makan, setengah piring diisi oleh sayur dan buah, setengahnya lagi diisi dengan sumber protein (baik nabati maupun hewani) dengan proporsi lebih banyak daripada karbohidrat.</p>\n            \n            <p> <b> 2) Pola Asuh </b></p>\n            \n            <p>  Stunting juga dipengaruhi aspek perilaku, terutama pada pola asuh yang kurang baik dalam praktek pemberian makan bagi bayi dan Balita.</p>\n            \n            <p> Dimulai dari edukasi tentang kesehatab reproduksi dan gizi bagi remaja sebagai cikal bakal keluarga, hingga para calon ibu memahami pentingnya memenuhi kebutuhan gizi saat hamil dan stimulasi bagi janin, serta memeriksakan kandungan empat kali selama kehamilan.</p>\n            \n            <p> Bersalin di fasilitas kesehatan, lakukan inisiasi menyusu dini (IMD) dan berupayalah agar bayi mendapat colostrum air susu ibu (ASI). Berikan hanya ASI saja sampai bayi berusia 6 bulan.</p>\n            \n            <p> Setelah itu, ASI boleh dilanjutkan sampai usia 2 tahun, namun berikan juga makanan pendamping ASI. Jangan lupa pantau tumbuh kembangnya dengan membawa buah hati ke Posyandu setiap bulan.</p>\n            \n            <p>  Hal lain yang juga perlu diperhatikan adalah berikanlah hak anak mendapatkan kekebalan dari penyakit berbahaya melalui imunisasi yang telah dijamin ketersediaan dan keamanannya oleh pemerintah. Masyarakat bisa memanfaatkannya dengan tanpa biaya di Posyandu atau Puskesmas.</p>\n            \n            <p> <b> 3) Sanitasi dan Akses Air Bersih </b></p>\n            <p> Rendahnya akses terhadap pelayanan kesehatan, termasuk di dalamnya adalah akses sanitasi dan air bersih, mendekatkan anak pada risiko ancaman penyakit infeksi. Untuk itu, perlu membiasakan cuci tangan pakai sabun dan air mengalir, serta tidak buang air besar sembarangan.</p>\n            \n            <p>  â€œPola asuh dan status gizi sangat dipengaruhi oleh pemahaman orang tua (seorang ibu) maka, dalam mengatur kesehatan dan gizi di keluarganya. Karena itu, edukasi diperlukan agar dapat mengubah perilaku yang bisa mengarahkan pada peningkatan kesehatan gizi\n            atau ibu dan anaknyaâ€, tutupnya.</p>\n            \n            <p> <b> *Sekilas Mengenai Stunting* </b> </p>\n            \n            <p> Stunting merupakan ancaman utama terhadap kualitas manusia Indonesia,\n            juga ancaman terhadap kemampuan daya saing bangsa. Hal ini dikarenakan anak\n            stunted, bukan hanya terganggu pertumbuhan fisiknya (bertubuh\n            pendek/kerdil) saja, melainkan juga terganggu perkembangan otaknya, yang mana tentu akan sangat mempengaruhi kemampuan dan prestasi di sekolah,\n            produktivitas dan kreativitas di usia-usia produktif.</p>\n\n            <p> Plt. Kepala Biro Komunikasi dan Pelayanan Masyarakat</p>\n\n            <p> drg. Murti Utami, MPH.</p>\n\n            <p>Sumber : https://sehatnegeriku.kemkes.go.id/baca/rilis-media/20180407/1825480/cegah-stunting-dengan-perbaikan-pola-makan-pola-asuh-dan-sanitasi-2/</p>\n            ', NULL, '2023-12-17 11:39:18', '2023-12-17 11:39:18'),
(7, 1, 2, 7, 'Menggugah Kesadaran: Memahami Dampak Stunting pada Pertumbuhan Anak', 'menggugah-kesadaran-memahami-dampak-stunting-pada-pertumbuhan-anak', 'Stunting, sebagai fenomena pertumbuhan terhambat pada anak-anak, membutuhkan sorotan yang lebih tajam dalam upaya kita untuk menciptakan generasi yang sehat dan berkembang dengan optimal.', '<p style=\"text-align: justify; text-indent: 0.5in;\">Stunting, sebagai fenomena pertumbuhan terhambat pada anak-anak, membutuhkan sorotan yang lebih tajam dalam upaya kita untuk menciptakan generasi yang sehat dan berkembang dengan optimal. Artikel ini bertujuan untuk menggugah kesadaran kita tentang dampak stunting pada pertumbuhan anak, memberikan pemahaman mendalam tentang masalah ini, serta mendorong langkah-langkah pencegahan yang lebih proaktif.</p>\n\n            <p> <b> 1. Mengenali Stunting sebagai Tantangan Kesehatan Global</b></p>\n            \n            <p>Stunting tidak hanya menjadi masalah lokal tetapi juga tantangan kesehatan global yang memengaruhi jutaan anak di seluruh dunia. Artikel ini akan membahas latar belakang stunting, menyoroti urgensi dan dampaknya pada kesehatan anak serta potensi konsekuensi jangka panjangnya.</p>\n            \n            <p> <b> 2. Perjalanan Pertumbuhan Anak dan Stunting</b></p>\n            <p> Dalam bagian ini, pembaca akan dibimbing melalui perjalanan pertumbuhan anak dan bagaimana stunting dapat merintangi tahap-tahap penting dalam perkembangan fisik dan kognitif. Melalui ilustrasi perbandingan perkembangan anak normal dan anak yang mengalami stunting, artikel ini akan menggambarkan betapa pentingnya pemahaman akan proses pertumbuhan.</p>\n            \n            <p> <b> 3. Dampak Stunting pada Kesehatan dan Kualitas Hidup</b></p>\n            \n            <p> Artikel akan membahas dampak stunting pada kesehatan anak, termasuk kerentanan terhadap penyakit infeksi, perkembangan otak yang terhambat, dan masalah kesehatan kronis. Dengan mendalamnya pemahaman tentang dampak ini, kita dapat lebih menghargai urgensi pencegahan stunting.</p>\n            \n            <p> <b> 4. Mengurai Faktor-faktor Penyebab Stunting</b></p>\n            \n            <p>Bagaimana stunting dapat terjadi? Artikel ini akan membahas faktor-faktor penyebab stunting, termasuk kekurangan gizi, lingkungan yang tidak sehat, dan praktik perawatan anak yang kurang optimal. Memahami akar masalah akan membuka jalan untuk langkah-langkah pencegahan yang lebih tepat.</p>\n            \n            <p> <b> 5. Langkah-langkah Pencegahan Stunting di Tingkat Komunitas</b></p>\n            \n            <p>Pentingnya pencegahan stunting akan ditonjolkan, dengan penekanan pada langkah-langkah praktis yang dapat diambil di tingkat komunitas. Melibatkan orang tua, tenaga kesehatan, dan pemangku kepentingan lainnya, artikel ini akan menyajikan solusi yang dapat diterapkan untuk mencegah stunting secara efektif.</p>\n            \n            <p> <b> 6. Mendidik Masyarakat tentang Pencegahan Stunting</b></p>\n            \n            <p>Artikel ini akan membahas pentingnya pendidikan dan kesadaran masyarakat dalam upaya pencegahan stunting. Bagaimana menyebarkan informasi mengenai gizi yang baik, praktik perawatan anak yang sehat, dan akses ke sumber daya kesehatan akan menjadi fokus, dengan harapan dapat menggugah kesadaran masyarakat secara luas.</p>\n            \n            <p> Melalui artikel ini, kami berharap dapat membantu membentuk persepsi masyarakat terhadap stunting, memberikan pemahaman yang lebih baik tentang dampaknya, dan mendorong partisipasi aktif dalam upaya pencegahan untuk membentuk masa depan anak-anak yang lebih cerah.</p>', NULL, '2023-12-17 11:39:18', '2023-12-17 11:39:18');
INSERT INTO `posts` (`id`, `category_id`, `user_id`, `gambar_id`, `title`, `slug`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(8, 4, 2, 8, 'Kwashiorkor: Penyebab, Gejala, Diagnosis, Pengobatan, dan Pencegahan Malnutrisi Protein', 'kwashiorkor-penyebab-gejala-diagnosis-pengobatan-dan-pencegahan-malnutrisi-protein', 'Kwashiorkor merupakan salah satu jenis kondisi dari malnutrisi akut yang terjadi karena kekurangan protein. Jika dibiarkan dapat menyebabkan retensi cairan, sehingga perut terlihat buncit.', '<p style=\"text-align: justify; text-indent: 0.5in;\">Kwashiorkor merupakan salah satu jenis kondisi dari malnutrisi akut yang terjadi karena kekurangan protein. Jika dibiarkan dapat menyebabkan retensi cairan, sehingga perut terlihat buncit.</p>\n            \n            <p> Gangguan ini paling rentan terjadi pada anak-anak, terutama jika tidak mendapatkan nutrisi yang memadai setelah mereka tidak lagi mengonsumsi ASI. </p>\n            \n            <p> <b> Penyebab Kwashiorkor </b></p>\n            <p> Kwashiorkor adalah kondisi yang dapat disebabkan oleh kekurangan protein dalam makanan. Setiap sel dalam tubuh membutuhkan protein agar tubuh memperbaiki sel dan memproduksi sel baru, sehingga bisa beregenerasi terus-menerus.</p>\n            \n            <p> Saat tubuh kekurangan protein, pertumbuhan dan fungsi normal mulai merasakan dampak buruk dan bahkan berhenti bekerja. Pada akhirnya, kwashiorkor dapat terjadi.</p>\n            \n            <p> <b> Faktor Risiko Kwashiorkor </b></p>\n            <p>  Kondisi malnutrisi ini lebih sering terjadi pada negara-negara berkembang dengan tingkat kemiskinan yang tinggi. Selain itu, sistem sanitasi yang buruk serta penyebaran penyakit menular yang tinggi juga dapat memicu terjadinya masalah ini.</p>\n            \n            <p> Kwashiorkor dapat menyerang semua orang tanpa patokan usia, tetapi paling sering terjadi pada anak-anak, terutama yang berusia 3 hingga 5 tahun. Kondisi ini kerap terjadi pada bayi yang baru disapih, tetapi tidak mendapatkan nutrisi yang cukup untuk menggantikannya.</p>\n            \n            <p> <b> Gejala Kwashiorkor </b></p>\n            <p> Anak-anak yang mengidap kwashiorkor umumnya memiliki lemak tubuh yang sangat sedikit. Selain itu, bisa juga seorang anak tetap terlihat gemuk, tetapi tampilan ini disebabkan akibat cairan, bukan karena lemak atau otot.</p>\n            \n            <p>  Beberapa gejala lainnya yang mungkin terlihat, yaitu:</p>\n            \n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Perubahan warna rambut, mungkin terlihat kuning atau oranye.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Terserang dehidrasi.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Kehilangan selera makan.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Pembengkakan pada tungkai dan kaki.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Kekurangan jaringan otot dan lemak.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Infeksi kulit yang lebih sering terjadi.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Penyembuhan luka yang lambat.</p>\n            <p> <b> Diagnosis Kwashiorkor </b></p>\n            <p>    Jika dokter mencurigai seseorang mengalami kwashiorkor, langkah awal yang dilakukan adalah pemeriksaan pembesaran dan pembengkakan pada hati. Setelah itu, tes darah dan urine dilakukan untuk memeriksa tingkat protein dan gula dalam darah.</p>\n            \n            <p> Selain itu, beberapa tes lainnya juga mungkin dilakukan untuk mencari kerusakan pada otot dan memastikan ginjal berfungsi dengan baik. Beberapa tes yang dilakukan, antara lain:</p>\n            \n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Pemeriksaan gas darah arteri.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Pemeriksaan nitrogen urea darah.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Pemeriksaan kadar kreatinin darah.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Pemeriksaan kadar kalium darah.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Urinalisis.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Hitung darah lengkap.</p>\n            <p> <b> Komplikasi Kwashiorkor </b></p>\n            <p> Tanpa dilakukannya penanganan, kwashiorkor dapat menyebabkan komplikasi yang bisa jadi membahayakan pengidapnya, yaitu:</p>\n            \n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Gangguan kardiovaskular.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Infeksi saluran kemih.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Gangguan pencernaan.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Mengalami pembesaran hati.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Ketidakseimbangan elektrolit.</p>\n            <p>  Anak-anak yang mengalami kondisi ini bisa saja tidak tumbuh dengan maksimal akibat kekurangan gizi di usia muda.</p>\n            \n            <p>  Bahkan, kondisi ini juga membuat pengidapnya lebih rentan untuk terserang infeksi sebagai akibat dari pelemahan dari sistem imunitas. Jika dibiarkan dapat menyebabkan kematian. Maka dari itu, diagnosis dan pengobatan ini sangat penting untuk dilakukan.</p>\n            \n            <p> <b> Pengobatan Kwashiorkor </b></p>\n            <p> Gangguan malnutrisi ini bisa menjadi lebih baik dengan mengonsumsi lebih banyak makanan yang kaya protein serta kalori. Metode ini lebih efektif apabila penanganannya dilakukan sedini mungkin.</p>\n            \n            <p> Seseorang dengan kondisi ini diberikan lebih banyak kalori dalam bentuk karbohidrat, gula, dan lemak. Setelah mendapatkan energi, barulah makanan dengan kandungan protein diberikan. </p>\n            \n            <p> Peningkatan harus dilakukan secara perlahan agar tidak berlebihan. Juga, dokter akan merekomendasikan konsumsi suplemen vitamin dan mineral jangka panjang untuk sehari-hari.</p>\n            \n            <p> <b> Pencegahan Kwashiorkor </b></p>\n            <p>  Kwashiorkor dapat dicegah dengan memastikan seseorang mengonsumsi makanan yang cukup kalori dan protein setiap hari. Nah, berbagai makanan yang mengandung protein, seperti telur, makanan laut, kacang-kacangan, biji-bijian, dan lainnya.</p>\n            \n            <p>  Selain itu, peran pemerintah di negara tersebut juga perlu dilakukan untuk mencegah penyakit menular yang menyebar luas. Seseorang yang sakit membutuhkan lebih banyak nutrisi dan membuang kalori yang ada saat mengidap diare kronis.</p>\n            \n            <p>  Penyakit juga dapat menghabiskan berbagai sumber makanan dan bahkan menyebabkan kemiskinan. Sanitasi dan imunisasi yang lebih baik dapat membantu dalam mencegah anak-anak mengalami kondisi malnutrisi yang dapat berkembang menjadi kwashiorkor.</p>\n            \n            <p> <b> Kapan Harus ke Dokter? </b></p>\n            <p>    Apabila anak mengalami berbagai gejala yang mengarah pada malnutrisi atau kwashiorkor, sebaiknya segera memeriksakan kondisi tersebut. Jangan biarkan berlarut-larut karena dapat memengaruhi pertumbuhan anak, sehingga tidak maksimal.</p>\n\n            <p>  Referensi:</p>\n            <p>  Medical News Today. Diakses pada 2022. Why does malnutrition cause stomach bloating?</p>\n            <p> Healthline. Diakses pada 2022. What Is Kwashiorkor?</p>\n            <p> Cleveland Clinic. Diakses pada 2022. Kwashiorkor.</p>\n            <p>Sumber : https://www.halodoc.com/kesehatan/Kwashiorkor</p>', NULL, '2023-12-17 11:39:18', '2023-12-17 11:39:18'),
(9, 4, 2, 9, 'Waspadai Komplikasi Kwashiorkor pada Anak: Dampak Serius dan Penangananny', 'waspadai-komplikasi-kwashiorkor-pada-anak-dampak-serius-dan-penangananny', 'Kwashiorkor adalah salah satu jenis malnutrisi yang ditandai dengan kekurangan protein yang parah yang rentan dialami oleh anak-anak. Kondisi ini dapat menyebabkan retensi cairan dan perut tampak bengkak atau buncit.', '<p style=\"text-align: justify; text-indent: 0.5in;\">Kwashiorkor adalah salah satu jenis malnutrisi yang ditandai dengan kekurangan protein yang parah yang rentan dialami oleh anak-anak. Kondisi ini dapat menyebabkan retensi cairan dan perut tampak bengkak atau buncit. Hal yang perlu diwaspadai, bila tak ditangani penyakit ini bisa menyebabkan komplikasi yang serius. </p>\n\n            </p> Kekurangan protein pada pengidap penyakit ini bisa menyebabkan terjadinya retensi cairan di jaringan (edema). Hal tersebut juga menjadi pembeda antara kwashiorkor dan bentuk malnutrisi lainnya. </p>\n            \n            <p> <b> Waspadai Komplikasi Kwashiorkor pada Anak </b></p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\"> Berikut ini komplikasi kwashiorkor pada anak jika kondisi tidak segera ditangani:</p>\n            \n            <p> <b> 1. Sirosis hati </b> </p>\n            <p>  Kekurangan protein yang dialami kwashiorkor dapat mengakibatkan sirosis hati pada anak. Sirosis merupakan penyakit hati yang menyebabkan munculnya jaringan parut, sehingga hati tidak berfungsi dengan baik. </p>\n            \n            <p>  Jaringan parut dapat menghalangi aliran darah melalui hati dan memperlambat kemampuannya untuk memproses nutrisi, hormon, dan obat-obatan, dan toksin alami (racun). Akibatnya hati tidak mampu memproduksi protein dan zat lain yang dibuat secara alami. Pada akhirnya hati tidak berfungsi secara optimal, yang dapat mengancam jiwa.</p>\n            \n            <p> <b> 2. Infeksi saluran kemih </b>< /p>\n            <p>  Komplikasi kwashiorkor berikutnya yaitu infeksi saluran kemih (ISK). Infeksi ini dapat menyerang ureter, ginjal, kandung kemih, dan uretra. Gangguan ini dapat menyebabkan lapisan saluran kemih menjadi merah dan mengalami peradangan (iritasi). </p>\n            \n            <p> <b> 3. Gangguan pencernaan </b> </p>\n            <p>   Anak yang mengalami kwashiorkor rentan mengalami gangguan pada sistem pencernaannya. Sebab, sistem pencernaan tidak dapat melakukan fungsinya dengan baik bila tubuh kekurangan asupan protein. </p>\n            \n            <p> <b> 4. Pertumbuhan anak terganggu </b> </p>\n            <p> Anak dengan kwashiorkor mungkin akan sulit tumbuh dengan tinggi badan yang ideal. Hal tersebut disebabkan kekurangan gizi pada usia dini. Kondisi tersebut membuatnya lebih rentan terhadap infeksi, melemahnya sistem kekebalan tubuh lemah, dan komplikasi lainnya. </p>\n            \n            <p> <b> Bagaimana Penanganan Kwashiorkor pada Anak? </b> </p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\"> Kekurangan gizi dapat mengakibatkan banyak perubahan pada tubuh anak, karena mempengaruhi fungsi setiap sistem organnya. Ada beberapa gejala kwashiorkor yang perlu diwaspadai, yaitu:</p>\n            \n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Edema atau pembengkakan pada tubuh.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Rambut tampak kering dan mudah rontok, bahkan berubah warna.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Kulit tampak kering dan mengelupas disertai bercak bersisik.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Dermatitis atau lesi kulit.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Perut bengkak.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Massa otot berkurang.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Wajah tampak bulat.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Pembesaran hati.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Anak gagal tumbuh.</p>\n            <p>  Meskipun kondisi ini berhubungan dengan malnutrisi, tapi penanganannya tidak cukup hanya dengan memberi makan. Apalagi jika anak sudah terlalu lama kekurangan asupan protein dan nutrisi yang cukup, karena ia akan kesulitan untuk makan. </p>\n            \n            <p> Maka itu penting untuk memperkenalkan kembali makanan secara hati-hati untuk mencegah sindrom refeeding. Sindrom refeeding berkaitan dengan elektrolit dan pergeseran cairan, yang terjadi dengan pemberian makan dengan cepat pada anak yang kekurangan gizi.</p>\n            \n            <p> Sementara itu, beberapa anak dengan kwashiorkor juga mengalami intoleransi laktosa, sehingga mereka harus menghindari produk susu. Biasanya dokter merekomendasikan perawatan dengan memberikan karbohidrat, kemudian menambahkan protein, vitamin, dan mineral secara bertahap. Demi keamanan, pengenalan makanan kembali ini membutuhkan waktu seminggu atau lebih. </p>\n            \n            <p> <b> Referensi: </b> </p>\n            <p>  Cleveland Clinic. Diakses pada 2022. Kwashiorkor</p>\n            <p> Cleveland Clinic. Diakses pada 2022. Urinary Tract Infections.</p>\n            <p> WebMD. Diakses pada 2022. Inflammatory Bowel Disease.</p>\n            <p> Healthline. Diakses pada 2022. What Is Kwashiorkor?</p>\n            <p> Medical News Today. Diakses pada 2022. Why does malnutrition cause stomach bloating?.</p>\n\n            <p>Sumber : https://www.halodoc.com/artikel/ini-4-komplikasi-kwashiorkor-pada-anak-yang-perlu-diwaspadai</p>', NULL, '2023-12-17 11:39:18', '2023-12-17 11:39:18'),
(10, 3, 2, 10, 'Anemia sebagai Tanda Awal Kanker Usus Besar: Pentingnya Pemahaman dan Deteksi Dini', 'anemia-sebagai-tanda-awal-kanker-usus-besar-pentingnya-pemahaman-dan-deteksi-dini', 'Kanker usus besar bisa menimbulkan gejala anemia, kondisi ini ditunjukan dengan jumlah sel darah merah dan kadar hemoglobin yang lebih rendah dari biasanya. Anemia bisa jadi akibat langsung dari radiasi dan kemoterapi yang digunakan untuk mengobati kanker.', '<p style=\"text-align: justify; text-indent: 0.5in;\">Kanker usus besar bisa menimbulkan gejala anemia, kondisi ini ditunjukan dengan jumlah sel darah merah dan kadar hemoglobin yang lebih rendah dari biasanya. Anemia bisa jadi akibat langsung dari radiasi dan kemoterapi yang digunakan untuk mengobati kanker. </p>\n\n            <p> Kondisi yang relatif umum yang disebabkan oleh sejumlah kondisi. Ada juga berbagai jenis anemia yang menjadi petunjuk seperti apa kondisi suatu penyakit sebenarnya. Begitu juga sebagai tanda kanker usus besar. Itulah pentingnya mencegah anemia agar tidak berujung pada penyakit lain.</p>\n    \n            <p> <b> Anemia Sebagai Gejala Kanker </b> </p>\n            <p> Anemia defisiensi zat besi bisa menjadi tanda peringatan dini kanker dan sering terlewat oleh dokter. Dalam beberapa hal, kondisi ini merupakan kekeliruan yang bisa dimengerti, mengingat kondisi tersebut memengaruhi sekitar satu miliar orang di seluruh dunia. </p>\n            \n            <p> Anemia defisiensi zat besi bisa disebabkan oleh situasi kehidupan sehari-hari, seperti menstruasi, kehamilan, dan menyusui. Anak-anak juga bisa berisiko diakibatkan rendahnya kandungan zat besi dari makanan sehari-hari. </p>\n            \n            <p> Hal yang jarang terjadi pada pria sehat dan wanita pascamenopause, menunjukkan penyebab dasar yang lebih serius. Kanker adalah salah satu penyakit yang diwaspadai, terutama pada orang berusia di atas 50 tahun yang berisiko lebih besar terkena penyakit. </p>\n            \n            <p>  Penelitian menunjukkan bahwa lebih dari 30 persen pengidap kanker akan mengalami anemia pada saat didiagnosis dengan hampir setengahnya mengalami anemia defisiensi besi. Tingkat anemia semakin tinggi sekitar 67 persen dari pengidap kanker setelah pengobatan dijalani. </p>\n            \n            <p> <b> Hubungan Kanker Usus Besar dengan Anemia </b> </p>\n            <p>  Anemia berkaitan erat dengan kanker, mekanisme perkembangannya bisa bervariasi berdasarkan jenis keganasannya. Beberapa jenis kanker, seperti yang memengaruhi sumsum tulang, secara langsung memengaruhi kemampuan tubuh memproduksi sel darah merah, yang mengakibatkan anemia parah. </p>\n            \n            <p> Pada kanker usus besar, cara kerjanya agak berbeda. Perdarahan dianggap sebagai penyebab utama anemia saat usus besar terkena. Hal ini karena tumor melepaskan bahan kimia tertentu yang merangsang pembentukan pembuluh darah baru. Saat tumor tumbuh, pembuluh darah pecah, menyebabkan hilangnya sel darah merah. </p>\n            \n            <p>  Pendarahan pada saatnya bisa menyebabkan kekurangan zat besi Bahkan jika persediaan zat besi yang cukup di dalam darah, peradangan di sekitarnya bisa menyebabkan molekul besi menjadi â€œterperangkapâ€ di dalam sel kekebalan. Saat peradangan berlanjut, ketersediaan zat besi menjadi semakin sedikit, mengakibatkan berkembangnya anemia defisiensi besi. </p>\n            \n            <p> <b> Gejala Awal Kanker Usus Besar yang Perlu Dikenali </b> </p>\n            <p>  Jika tes darah menunjukkan kamu mengalami anemia, jangan hindari untuk membicarakan tentang kanker. Terutama jika benar kamu mengalami gejala kanker. Dalam istilah kanker usus besar secara khusus, gejala paling umum yang bisa terjadi, yaitu:</p>\n            \n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Penurunan berat badan yang tidak diinginkan (sedang tidak diet atau mencoba menurunkan berat badan).</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Kehilangan selera makan.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Mual atau muntah.</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Perubahan kebiasaan buang air besar (diare).</p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Kotoran berwarna merah cerah atau berwarna lebih tua. </p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Kotoran yang lebih sedikit dari biasanya. </p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Merasa tidak lega ketika sudah buang air besar. </p>\n            <p style=\"text-align: justify; text-indent: 0.5in;\">- Perut terasa tidak nyaman, kembung, sering nyeri gas, atau kram. </p>\n            <p>Itulah yang perlu diketahui mengenai anemia bisa jadi tanda awal kanker usus besar. Penting untuk tidak menyepelekan kondisi anemia dan memeriksakan kesehatan lebih lanjut.</p>\n            \n            <p> <b> Referensi: </b> </p>\n            \n            <p>  Very Well Health. Diakses pada 2021. Anemia as a Sign of Colon Cancer</p>\n            \n            <p>  American Cancer Society. Diakses pada 2021. Colorectal Cancer Signs and Symptoms</p>\n            <p>Sumber : https://www.halodoc.com/artikel/anemia-bisa-jadi-tanda-awal-kanker-usus-besar-ini-faktanya</p>\n            ', NULL, '2023-12-17 11:39:18', '2023-12-17 11:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `riwayats`
--

CREATE TABLE `riwayats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `penyakit_diagnosa` text NOT NULL,
  `nilai_diagnosa` text NOT NULL,
  `penyakit_terpilih` varchar(255) NOT NULL,
  `bobot` varchar(255) NOT NULL,
  `solusi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ttl` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('maintener','admin','responden') NOT NULL DEFAULT 'responden',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `ttl`, `password`, `role`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maintener', 'maintener@gmail.com', '2011-01-17', '$2y$10$x6hKQ5TrwNM087pG13pkwOYz2wZKZ4IMCMgWYiAgraZ7mi3tnF8sy', 'maintener', NULL, NULL, '2023-12-17 11:39:49', '2023-12-17 11:39:49'),
(2, 'Admin', 'admin@gmail.com', '2020-01-17', '$2y$10$atd/qCKN8qXIAT92OZcD5.5QOcF4wkRcIbbV68NBU6xCXhhqf5Yvu', 'admin', NULL, NULL, '2023-12-17 11:39:49', '2023-12-17 11:39:49'),
(3, 'Pengguna Aja', 'pengguna@gmail.com', '2022-01-17', '$2y$10$Lwcbzaa3wD8s9Uakoj.o6em6raNdklPtIaTFX65Q79f.O19yHbTH2', 'responden', NULL, NULL, '2023-12-17 11:39:49', '2023-12-17 11:39:49'),
(4, 'Pengguna Satu', 'pengguna1@gmail.com', '2021-01-17', '$2y$10$1MAeDp/FeLjxofk05.ZB8OKJhuFG55MxWx1xE8Mciebrpa0HNGdhy', 'responden', NULL, NULL, '2023-12-17 11:39:49', '2023-12-17 11:39:49'),
(5, 'Pengguna Dua', 'pengguna2@gmail.com', '2011-01-17', '$2y$10$Z3gWENLnoWkHVCkgUFKpxO3UPCN2I2xYuMwuqD.rnBFqCikQOuvJu', 'responden', NULL, NULL, '2023-12-17 11:39:49', '2023-12-17 11:39:49'),
(6, 'Pengguna Tiga', 'pengguna3@gmail.com', '2001-01-17', '$2y$10$HKyOANEUpyeSN4xhNKXU7OLkd/mo92voMTq0.Ij1yPSRGwImqtgES', 'responden', NULL, NULL, '2023-12-17 11:39:49', '2023-12-17 11:39:49'),
(7, 'Pengguna Empat', 'pengguna4@gmail.com', '2011-01-17', '$2y$10$1Fa8crsmTSJYrC6Occ4pNeKSGt8x9kOPY3vlguY3S8gqpcRWGIHYy', 'responden', NULL, NULL, '2023-12-17 11:39:49', '2023-12-17 11:39:49'),
(8, 'Responden', 'responden@gmail.com', '2001-01-07', '$2y$10$A9p4MagVzmQ/XZC5HOSdDew09mg6X.9G.1t7oSLQDiwa4EWag4/pO', 'responden', NULL, NULL, '2023-12-17 11:39:49', '2023-12-17 11:39:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejalas`
--
ALTER TABLE `gejalas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala_penyakits`
--
ALTER TABLE `gejala_penyakits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_jawabans`
--
ALTER TABLE `nilai_jawabans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penyakits`
--
ALTER TABLE `penyakits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `riwayats`
--
ALTER TABLE `riwayats`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gejalas`
--
ALTER TABLE `gejalas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `gejala_penyakits`
--
ALTER TABLE `gejala_penyakits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `nilai_jawabans`
--
ALTER TABLE `nilai_jawabans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penyakits`
--
ALTER TABLE `penyakits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `riwayats`
--
ALTER TABLE `riwayats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
