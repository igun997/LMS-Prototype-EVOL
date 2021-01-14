-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Jan 2021 pada 04.24
-- Versi server: 8.0.22-0ubuntu0.20.04.3
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banksoal`
--

CREATE TABLE `banksoal` (
  `id` int NOT NULL,
  `matpel_id` int NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` enum('pg','es') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_es` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jawaban_pg` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pg_a` text COLLATE utf8mb4_unicode_ci,
  `pg_b` text COLLATE utf8mb4_unicode_ci,
  `pg_c` text COLLATE utf8mb4_unicode_ci,
  `pg_d` text COLLATE utf8mb4_unicode_ci,
  `pg_e` text COLLATE utf8mb4_unicode_ci,
  `poin` int DEFAULT NULL,
  `dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banksoal`
--

INSERT INTO `banksoal` (`id`, `matpel_id`, `judul`, `soal`, `jenis`, `jawaban_es`, `jawaban_pg`, `pg_a`, `pg_b`, `pg_c`, `pg_d`, `pg_e`, `poin`, `dibuat`) VALUES
(1, 1, 'sad', '<p>asdasdasdasdasd</p>', 'es', '<p>asdasd</p>', NULL, NULL, NULL, NULL, NULL, NULL, 123, '2021-01-14 21:17:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `alamat`, `no_hp`, `email`, `password`, `dibuat`) VALUES
('001', 'Ulyati Ulfah, S.Farm., Apt., M.Farm.', NULL, '086', 'test@s.com', '001', '2019-11-29 02:36:06'),
('002', 'Rizki Satrianto, S.Farm., Apt.', NULL, '0', 'indra@gmail.com', '002', '2019-11-29 02:36:38'),
('003', 'Adellya', NULL, '0', 'tes@gs', '003', '2019-11-29 02:43:45'),
('123456789', 'Contoh Guru', 'Test', '123456789', 'test@sasa.com', '123456789', '2020-09-16 16:37:34'),
('715101001', 'Faruk Rasyid, S.E.', NULL, NULL, NULL, '715101001', '0000-00-00 00:00:00'),
('715101002', 'Ridwan Nugraha, S.Kom.', NULL, NULL, NULL, '715101002', '0000-00-00 00:00:00'),
('715101003', 'Rizki Zaskia Hilmy', NULL, NULL, NULL, '715101003', '0000-00-00 00:00:00'),
('715101004', 'Leni Deniarni, S.Pd.', NULL, NULL, NULL, '715101004', '0000-00-00 00:00:00'),
('715101005', 'Fauzan Rahimi, SP.', NULL, NULL, NULL, '715101005', '0000-00-00 00:00:00'),
('715101006', 'Fathia Rizki, S.S.T, M.Tr., Keb.', NULL, NULL, NULL, '715101006', '0000-00-00 00:00:00'),
('715101007', 'Iga Retia Mufti, S.S.T., M.Kes.', NULL, NULL, NULL, '715101007', '0000-00-00 00:00:00'),
('715101008', 'Liawati, S.S.T., M.Kes.', NULL, NULL, NULL, '715101008', '0000-00-00 00:00:00'),
('715102001', 'Iman Rohiman, A.Md.', NULL, NULL, NULL, '715102001', '0000-00-00 00:00:00'),
('715102002', 'M. Iqbal Sutisna, S.Kep., Ners.', NULL, NULL, NULL, '715102002', '0000-00-00 00:00:00'),
('715102003', 'Meilirianta, S.Kep, Ners., M.Kes.', NULL, NULL, NULL, '715102003', '0000-00-00 00:00:00'),
('715103003', 'Irma Novyanti, A.Md., AK.', NULL, NULL, NULL, '715103003', '0000-00-00 00:00:00'),
('715103004', 'Ahmad Arifin, S.Kep., Ners.', NULL, NULL, NULL, '715103004', '0000-00-00 00:00:00'),
('715103005', 'Farhan Baehaki, S.Pd., M.Pd.', NULL, NULL, NULL, '715103005', '0000-00-00 00:00:00'),
('715103006', 'Nurul Bayanti, A.Md.,Keb.', NULL, NULL, NULL, '715103006', '0000-00-00 00:00:00'),
('715104001', 'Agus Julian, S.Pd.', NULL, NULL, NULL, '715104001', '0000-00-00 00:00:00'),
('715104002', 'Muhammad Akbar Sumadipraja', NULL, NULL, NULL, '715104002', '0000-00-00 00:00:00'),
('715104003', 'Ira Primasari, S.Pd., M.Si.', NULL, NULL, NULL, '715104003', '0000-00-00 00:00:00'),
('715104005', 'Maria Awaldina Dua  B., S.S.T., M.Kes.', NULL, NULL, NULL, '715104005', '0000-00-00 00:00:00'),
('715105001', 'Taufik Hidayat, A.Md.A.K.', NULL, NULL, NULL, '715105001', '0000-00-00 00:00:00'),
('715105002', 'Nidya Ikha Putri, S.ST., M. Biomed.', NULL, NULL, NULL, '715105002', '0000-00-00 00:00:00'),
('715105003', 'Meina Hapiana, S.Tr., Keb.', NULL, NULL, NULL, '715105003', '0000-00-00 00:00:00'),
('715105004', 'Rizki Gumilang Pahlawan, S.Kep., Ners.', NULL, NULL, NULL, '715105004', '0000-00-00 00:00:00'),
('715105005', 'Dr. Purwaeni, S.Si., Apt., M.Si.', NULL, NULL, NULL, '715105005', '0000-00-00 00:00:00'),
('715105006', 'Sendy Triansyah, S.Farm., Apt., M.M.R.S', NULL, NULL, NULL, '715105006', '0000-00-00 00:00:00'),
('715106002', 'Mawar  Puspawarna A.Md A.K', NULL, '0000', 'Mawar@gmail.com', '715106002', '2020-02-29 05:52:18'),
('715106003', 'Lulu Mamlukah R., S.Tr., M.Keb', 'Haha', '123456', 'lulu@gmail.com', '715106003', '2020-02-29 06:10:26'),
('715106004', 'Silva Dwi Rahmizani, S.S.T, M.K.M', 'cihanjuang', '123453', '@gmail', '715106004', '2020-02-29 06:14:47'),
('715106005', 'Ervianty Aprilia, S.Keb, Bd', 'gggg', '0565622323', '@gmail', '715106005', '2020-02-29 06:15:40'),
('715106006', 'Mira Miraturrofi\'ah, S.S.T., M.Kes', 'hhhh', '12345', '@gmail', '715106006', '2020-02-29 06:16:38'),
('715106007', 'Oryza Tri Novita, S.S.T., M.Kes', 'klklllk', '30303', 'admin', '715106007', '2020-02-29 06:17:28'),
('715106008', 'Liah Kodariah, S.Pd., M.Si.', 'fffsfs', '0565622323', 'admin', '715106008', '2020-02-29 06:18:28'),
('715106009', 'Fitri Rahmi Fadhilah, S.Si, M.Biomed', NULL, '809', 'fi@gmail.com', '715106009', '2020-09-20 16:26:34'),
('715106010', 'Nadira Nur Hajah Lutfi, S.Tr. Kes', NULL, '98956213', 'abcd@gmail.com', 'nadira089', '2020-11-12 07:31:18'),
('715107001', 'Gladisa Maulida Yustiani', 'cimahi', '098009', 'systemfive.id@gmail.com', '7001', '2020-11-13 07:15:25'),
('715202001', 'Maura Bunga Aprilia, S.Pd.', NULL, NULL, NULL, '715202001', '0000-00-00 00:00:00'),
('715203001', 'Dicky Andrian, S.Farm., Apt.', NULL, NULL, NULL, '715203001', '0000-00-00 00:00:00'),
('715203002', 'Asep Tarmedi, S,PdI.', NULL, NULL, NULL, '715203002', '0000-00-00 00:00:00'),
('715203003', 'Prisma Denensi Purnomo, S.Pd.', NULL, NULL, NULL, '715203003', '0000-00-00 00:00:00'),
('715204001', 'Ade Sujana, S.Pd.', NULL, NULL, NULL, '715204001', '0000-00-00 00:00:00'),
('715205001', 'Anggia Rahayu Biharja, S.Pd., M.Kom.', NULL, NULL, NULL, '715205001', '0000-00-00 00:00:00'),
('715206002', 'Rendi Andi Kusumah, S.Hum.', 'bbbb', '123536', 'admin', '715206002', '2020-02-29 06:20:49'),
('715301001', 'Deta Kusuma, A.Md.', NULL, NULL, NULL, '715301001', '0000-00-00 00:00:00'),
('715302001', 'Elis Adawiyah, S.Pd.', NULL, NULL, NULL, '715302001', '0000-00-00 00:00:00'),
('715304001', 'Egie Sugiyanto, S.Kom.', NULL, NULL, NULL, '715304001', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int NOT NULL,
  `ujian_id` int NOT NULL,
  `nis` int NOT NULL,
  `essay` int DEFAULT NULL,
  `dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_item`
--

CREATE TABLE `jawaban_item` (
  `id` int NOT NULL,
  `jawaban_id` int NOT NULL,
  `ujian_item_id` int NOT NULL,
  `jawaban` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int NOT NULL,
  `nama` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rombel_id` int NOT NULL,
  `kelas_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `rombel_id`, `kelas_id`) VALUES
(1, 'X', 2, NULL),
(2, 'XI', 2, NULL),
(3, 'XII', 2, NULL),
(4, 'FARMASI', 2, 2),
(5, 'TLM', 2, 2),
(6, 'KEPERAWATAN', 2, 2),
(7, 'KEPERAWATAN', 2, 3),
(8, 'KEPERAWATAN', 1, 13),
(9, 'FARMASI', 2, 3),
(10, 'FARMASI', 1, 13),
(11, 'TLM', 2, 3),
(12, 'TLM', 1, 13),
(13, 'XII_2019/2020', 1, NULL),
(14, 'FARMASI', 2, 1),
(15, 'KEPERAWATAN', 2, 1),
(16, 'TLM', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `matpel`
--

CREATE TABLE `matpel` (
  `id` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` int NOT NULL,
  `nip` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `matpel`
--

INSERT INTO `matpel` (`id`, `nama`, `kelas_id`, `nip`) VALUES
(1, 'asdas', 14, '001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_09_17_033503_create_admin_table', 1),
(2, '2020_09_17_033503_create_banksoal_table', 1),
(3, '2020_09_17_033503_create_guru_table', 1),
(4, '2020_09_17_033503_create_jawaban_item_table', 1),
(5, '2020_09_17_033503_create_jawaban_table', 1),
(6, '2020_09_17_033503_create_kelas_table', 1),
(7, '2020_09_17_033503_create_matpel_table', 1),
(8, '2020_09_17_033503_create_rombel_table', 1),
(9, '2020_09_17_033503_create_siswa_table', 1),
(10, '2020_09_17_033503_create_ujian_item_table', 1),
(11, '2020_09_17_033503_create_ujian_table', 1),
(12, '2020_09_17_033504_add_foreign_keys_to_banksoal_table', 1),
(13, '2020_09_17_033504_add_foreign_keys_to_jawaban_item_table', 1),
(14, '2020_09_17_033504_add_foreign_keys_to_kelas_table', 1),
(15, '2020_09_17_033504_add_foreign_keys_to_matpel_table', 1),
(16, '2020_09_17_033504_add_foreign_keys_to_siswa_table', 1),
(17, '2020_09_17_033504_add_foreign_keys_to_ujian_item_table', 1),
(18, '2020_09_17_033504_add_foreign_keys_to_ujian_table', 1),
(19, '2021_01_14_212146_create_admin_table', 0),
(20, '2021_01_14_212331_create_admin_table', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rombel`
--

CREATE TABLE `rombel` (
  `id` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rombel`
--

INSERT INTO `rombel` (`id`, `nama`, `status`) VALUES
(1, '2019/2020', 0),
(2, '2020/2021', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` int NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` int DEFAULT NULL,
  `dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `alamat`, `no_hp`, `jk`, `foto`, `email`, `password`, `kelas_id`, `dibuat`) VALUES
('10515211', 'INDRA', NULL, '081214267695', 0, '1575207410.jpg', 'indra.gunanda@gmail.com', '10515211', 14, '2019-12-01 13:36:50'),
('123456', 'a', NULL, '089', 0, NULL, 'abcd@gmail.com', '123456', 14, '2020-09-15 06:40:36'),
('12345678', 'Contoh', NULL, '081214267695', 0, NULL, 'indra.gunandaa@gmail.com', '12345678', 10, '2020-09-16 16:31:41'),
('1718101051', 'Adela Silfi Pritissiya', NULL, NULL, 0, NULL, NULL, 'ENFHSQTSCC', 8, '0000-00-00 00:00:00'),
('1718101052', 'Cica Siti Anisa', NULL, NULL, 0, NULL, NULL, '1718101052', 8, '0000-00-00 00:00:00'),
('1718101053', 'Cici Sapitri', NULL, NULL, 0, NULL, NULL, '1718101053', 8, '0000-00-00 00:00:00'),
('1718101054', 'Devita Meilani Putri', NULL, NULL, 0, NULL, NULL, '1718101054', 8, '0000-00-00 00:00:00'),
('1718101055', 'Dewi Widia Anjani', NULL, NULL, 0, NULL, NULL, '1718101055', 8, '0000-00-00 00:00:00'),
('1718101056', 'Dian Salsabila', NULL, NULL, 0, NULL, NULL, '1718101056', 8, '0000-00-00 00:00:00'),
('1718101057', 'Divanka Salsa Nadhira S.', NULL, NULL, 0, NULL, NULL, '1718101057', 8, '0000-00-00 00:00:00'),
('1718101058', 'Fitriani Pertiwi', NULL, NULL, 0, NULL, NULL, '1718101058', 8, '0000-00-00 00:00:00'),
('1718101059', 'Ismi Nurfadilla', NULL, NULL, 0, NULL, NULL, '1718101059', 8, '0000-00-00 00:00:00'),
('1718101060', 'Ismiaty', NULL, NULL, 0, NULL, NULL, '1718101060', 8, '0000-00-00 00:00:00'),
('1718101061', 'Karina Putri Septiani', NULL, NULL, 0, NULL, NULL, '1718101061', 8, '0000-00-00 00:00:00'),
('1718101062', 'Karmelia Nurmalasari', NULL, NULL, 0, NULL, NULL, '1718101062', 8, '0000-00-00 00:00:00'),
('1718101063', 'Linda Setia Dewi', NULL, NULL, 0, NULL, NULL, '1718101063', 8, '0000-00-00 00:00:00'),
('1718101064', 'Lipa Bariana', NULL, NULL, 0, NULL, NULL, '1718101064', 8, '0000-00-00 00:00:00'),
('1718101065', 'Mawar Nurhayati', NULL, NULL, 0, NULL, NULL, '1718101065', 8, '0000-00-00 00:00:00'),
('1718101066', 'Natasya Dewi Agatha', NULL, NULL, 0, NULL, NULL, '1718101066', 8, '0000-00-00 00:00:00'),
('1718101068', 'Neng Rizky Fitriani', NULL, NULL, 0, NULL, NULL, '1718101068', 8, '0000-00-00 00:00:00'),
('1718101069', 'Prianawati', NULL, NULL, 0, NULL, NULL, '1718101069', 8, '0000-00-00 00:00:00'),
('1718101070', 'Putri Salma Syaedatul Nur', NULL, NULL, 0, NULL, NULL, '1718101070', 8, '0000-00-00 00:00:00'),
('1718101071', 'Qori Nur Annisa', NULL, NULL, 0, NULL, NULL, '1718101071', 8, '0000-00-00 00:00:00'),
('1718101072', 'Rania Zulfahlia Elwani', NULL, NULL, 0, NULL, NULL, '1718101072', 8, '0000-00-00 00:00:00'),
('1718101073', 'Rina Rosmawati', NULL, NULL, 0, NULL, NULL, '1718101073', 8, '0000-00-00 00:00:00'),
('1718101074', 'Silvi Amaliah Diana', NULL, NULL, 0, NULL, NULL, '1718101074', 8, '0000-00-00 00:00:00'),
('1718101075', 'Siti Arnianti', NULL, NULL, 0, NULL, NULL, '1718101075', 8, '0000-00-00 00:00:00'),
('1718101076', 'Tari Tania Rahmayanti', NULL, NULL, 0, NULL, NULL, '1718101076', 8, '0000-00-00 00:00:00'),
('1718101077', 'Teni Anisyah', NULL, NULL, 0, NULL, NULL, '1718101077', 8, '0000-00-00 00:00:00'),
('1718101078', 'Tiara Edila', NULL, NULL, 0, NULL, NULL, '1718101078', 8, '0000-00-00 00:00:00'),
('1718101079', 'Triwulan Anggraeni', NULL, NULL, 0, NULL, NULL, '1718101079', 8, '0000-00-00 00:00:00'),
('1718101080', 'Wulan Cantika Dewi', NULL, NULL, 0, NULL, NULL, '1718101080', 8, '0000-00-00 00:00:00'),
('1718102048', 'Alisya Shyfa Azzahra', NULL, NULL, 0, NULL, NULL, '1718102048', 10, '0000-00-00 00:00:00'),
('1718102049', 'Amanda Humairoh', NULL, NULL, 0, NULL, NULL, '1718102049', 10, '0000-00-00 00:00:00'),
('1718102050', 'Ani Hamidah', NULL, NULL, 0, NULL, NULL, '1718102050', 10, '0000-00-00 00:00:00'),
('1718102051', 'Anisa Mulyawati', NULL, NULL, 0, NULL, NULL, '1718102051', 10, '0000-00-00 00:00:00'),
('1718102052', 'Anisa Nurul Nursanti', NULL, NULL, 0, NULL, NULL, '1718102052', 10, '0000-00-00 00:00:00'),
('1718102053', 'Devi Oktapiani', NULL, NULL, 0, NULL, NULL, '1718102053', 10, '0000-00-00 00:00:00'),
('1718102054', 'Dila Anisa', NULL, NULL, 0, NULL, NULL, '1718102054', 10, '0000-00-00 00:00:00'),
('1718102055', 'Dinar Ratna Juwita', NULL, NULL, 0, NULL, NULL, '1718102055', 10, '0000-00-00 00:00:00'),
('1718102056', 'Fidela Jessica Pratama', NULL, NULL, 0, NULL, NULL, '1718102056', 10, '0000-00-00 00:00:00'),
('1718102057', 'Fitria Sulistia Putri', NULL, NULL, 0, NULL, NULL, '1718102057', 10, '0000-00-00 00:00:00'),
('1718102058', 'Handini', NULL, NULL, 0, NULL, NULL, '1718102058', 10, '0000-00-00 00:00:00'),
('1718102060', 'Nadya Vestianti', NULL, NULL, 0, NULL, NULL, '1718102060', 10, '0000-00-00 00:00:00'),
('1718102061', 'Nenden Komala Sakti', NULL, NULL, 0, NULL, NULL, '1718102061', 10, '0000-00-00 00:00:00'),
('1718102062', 'Neng Karisa Widiarti', NULL, NULL, 0, NULL, NULL, '1718102062', 10, '0000-00-00 00:00:00'),
('1718102063', 'Neng Santi Nuraeni Aprilia', NULL, NULL, 0, NULL, NULL, '1718102063', 10, '0000-00-00 00:00:00'),
('1718102065', 'Novia Ramadhani', NULL, NULL, 0, NULL, NULL, '1718102065', 10, '0000-00-00 00:00:00'),
('1718102066', 'Putri Rodhiyah A\'srotin Septianingsih', NULL, NULL, 0, NULL, NULL, '1718102066', 10, '0000-00-00 00:00:00'),
('1718102067', 'Resthi Miranda Fauziah', NULL, NULL, 0, NULL, NULL, '1718102067', 10, '0000-00-00 00:00:00'),
('1718102068', 'Resti Widiawati', NULL, NULL, 0, NULL, NULL, '1718102068', 10, '0000-00-00 00:00:00'),
('1718102069', 'Rianita Agustin', NULL, NULL, 0, NULL, NULL, '1718102069', 10, '0000-00-00 00:00:00'),
('1718102070', 'Rika Sulaesih Febrianti', NULL, NULL, 0, NULL, NULL, '1718102070', 10, '0000-00-00 00:00:00'),
('1718102071', 'Rikeu Putri Pebrianti', NULL, NULL, 0, NULL, NULL, '1718102071', 10, '0000-00-00 00:00:00'),
('1718102072', 'Riska Andini', NULL, NULL, 0, NULL, NULL, '1718102072', 10, '0000-00-00 00:00:00'),
('1718102073', 'Rizkya Sahara Amarulloh', NULL, NULL, 0, NULL, NULL, '1718102073', 10, '0000-00-00 00:00:00'),
('1718102074', 'Ronald Abdhie Ilahi', NULL, NULL, 0, NULL, NULL, '1718102074', 10, '0000-00-00 00:00:00'),
('1718102075', 'Sandi Aditia', NULL, NULL, 0, NULL, NULL, '1718102075', 10, '0000-00-00 00:00:00'),
('1718102076', 'Sifa Febriani', NULL, NULL, 0, NULL, NULL, '1718102076', 10, '0000-00-00 00:00:00'),
('1718102077', 'Siti Raeni', NULL, NULL, 0, NULL, NULL, '1718102077', 10, '0000-00-00 00:00:00'),
('1718102078', 'Tarisya', NULL, NULL, 0, NULL, NULL, '1718102078', 10, '0000-00-00 00:00:00'),
('1718102079', 'Wanti Nurjanah', NULL, NULL, 0, NULL, NULL, '1718102079', 10, '0000-00-00 00:00:00'),
('1718102080', 'Winda Nurwanti', NULL, NULL, 0, NULL, NULL, '1718102080', 10, '0000-00-00 00:00:00'),
('1718103015', 'Astin Nuraeni', NULL, NULL, 0, NULL, NULL, '1718103015', 12, '0000-00-00 00:00:00'),
('1718103016', 'Aulia Shifa Maulina', NULL, NULL, 0, NULL, NULL, '1718103016', 12, '0000-00-00 00:00:00'),
('1718103017', 'Deni Nurjaman', NULL, NULL, 0, NULL, NULL, '1718103017', 12, '0000-00-00 00:00:00'),
('1718103019', 'Divia Anisa', NULL, NULL, 0, NULL, NULL, '1718103019', 12, '0000-00-00 00:00:00'),
('1718103020', 'Fadia Rahma Juniar', NULL, NULL, 0, NULL, NULL, '1718103020', 12, '0000-00-00 00:00:00'),
('1718103022', 'Muhammad Ridwan Fauzi', NULL, NULL, 0, NULL, NULL, '1718103022', 12, '0000-00-00 00:00:00'),
('1718103023', 'Nelly Siti Muzjahidah', NULL, NULL, 0, NULL, NULL, '1718103023', 12, '0000-00-00 00:00:00'),
('1718103024', 'Raden Adya Naufal Mahdi', NULL, NULL, 0, NULL, NULL, '1718103024', 12, '0000-00-00 00:00:00'),
('1718103025', 'Ririn Herawati', NULL, NULL, 0, NULL, NULL, '1718103025', 12, '0000-00-00 00:00:00'),
('1718103026', 'Risma Laila Sumiati', NULL, NULL, 0, NULL, NULL, '1718103026', 12, '0000-00-00 00:00:00'),
('1718103027', 'Salsya Julistiana S.', NULL, NULL, 0, NULL, NULL, '1718103027', 12, '0000-00-00 00:00:00'),
('1718103028', 'Silka Muslimati Aulia', NULL, NULL, 0, NULL, NULL, '1718103028', 12, '0000-00-00 00:00:00'),
('1718103029', 'Siti Anisa', NULL, NULL, 0, NULL, NULL, '1718103029', 12, '0000-00-00 00:00:00'),
('1718103030', 'Siti Syifa Nurhasanah', NULL, NULL, 0, NULL, NULL, '1718103030', 12, '0000-00-00 00:00:00'),
('1718103031', 'Tarisa Tri Safitri', NULL, NULL, 0, NULL, NULL, '1718103031', 12, '0000-00-00 00:00:00'),
('1718103032', 'Tia Risna Oktaviana', NULL, NULL, 0, NULL, NULL, '1718103032', 12, '0000-00-00 00:00:00'),
('1718103033', 'Tirana Rasyaira Davina', NULL, NULL, 0, NULL, NULL, '1718103033', 12, '0000-00-00 00:00:00'),
('1718103034', 'Wardah Nova Syahrani Fathoni', NULL, NULL, 0, NULL, NULL, '1718103034', 12, '0000-00-00 00:00:00'),
('1819101081', 'Aini Nita Sahara', NULL, NULL, 0, NULL, NULL, 'DIPKHZHCRC', 7, '0000-00-00 00:00:00'),
('1819101082', 'Amelya Lutfiah Marwah', NULL, NULL, 0, NULL, NULL, 'FDKIQMDUMO', 7, '0000-00-00 00:00:00'),
('1819101083', 'Annida Alfiani Fauziah', NULL, NULL, 0, NULL, NULL, 'XTPEUGTDRG', 7, '0000-00-00 00:00:00'),
('1819101084', 'Anti Alfina Noerfatwa', NULL, NULL, 0, NULL, NULL, 'LEFUAHOCGO', 7, '0000-00-00 00:00:00'),
('1819101085', 'Aprilia Ade Putri', NULL, NULL, 0, NULL, NULL, 'TSFHMPXWIV', 7, '0000-00-00 00:00:00'),
('1819101086', 'Cindy Nursyipa', NULL, NULL, 0, NULL, NULL, 'PQUJZOCVBS', 7, '0000-00-00 00:00:00'),
('1819101087', 'Dara Rosita', NULL, NULL, 0, NULL, NULL, 'FEXZYUNEVR', 7, '0000-00-00 00:00:00'),
('1819101088', 'Diani Putriyutami', NULL, NULL, 0, NULL, NULL, 'KCEEJFWZGI', 7, '0000-00-00 00:00:00'),
('1819101089', 'Elisa Juliyanti', NULL, NULL, 0, NULL, NULL, 'YCODCTFMXU', 7, '0000-00-00 00:00:00'),
('1819101090', 'Elsa Calista', NULL, NULL, 0, NULL, NULL, 'JXHUDXXUTR', 7, '0000-00-00 00:00:00'),
('1819101091', 'Esa Hartini', NULL, NULL, 0, NULL, NULL, 'FNOXHAKFCC', 7, '0000-00-00 00:00:00'),
('1819101093', 'Fitri Nur Azizah', NULL, NULL, 0, NULL, NULL, 'ZSLWVGUZIQ', 7, '0000-00-00 00:00:00'),
('1819101094', 'Hasya Tazgia Vahlevi', NULL, NULL, 0, NULL, NULL, 'CRZHWMSNWD', 7, '0000-00-00 00:00:00'),
('1819101095', 'Intan Kristina Muharomah', NULL, NULL, 0, NULL, NULL, 'NINIGXECMD', 7, '0000-00-00 00:00:00'),
('1819101096', 'Jemima Aurellia Paulus', NULL, NULL, 0, NULL, NULL, 'KYORDBFUYB', 7, '0000-00-00 00:00:00'),
('1819101098', 'Kokom Komalasari', NULL, NULL, 0, NULL, NULL, 'FWUXPMCRGA', 7, '0000-00-00 00:00:00'),
('1819101099', 'Mira Nuraeni Hasanah', NULL, NULL, 0, NULL, NULL, 'SMGNXKPDGO', 7, '0000-00-00 00:00:00'),
('1819101100', 'Muhammad Fajar Kana', NULL, NULL, 0, NULL, NULL, 'DVKJQWRUML', 7, '0000-00-00 00:00:00'),
('1819101101', 'Navy Fitri Nurhasanah', NULL, NULL, 0, NULL, NULL, 'BQHLTBUZBX', 7, '0000-00-00 00:00:00'),
('1819101102', 'Nur Andini', NULL, NULL, 0, NULL, NULL, 'KFZCGHBEDV', 7, '0000-00-00 00:00:00'),
('1819101103', 'Putri Puspitasari', NULL, NULL, 0, NULL, NULL, 'BAIONRXAQP', 7, '0000-00-00 00:00:00'),
('1819101105', 'Rendi', NULL, NULL, 0, NULL, NULL, 'NZAZHUMOOO', 7, '0000-00-00 00:00:00'),
('1819101106', 'Resti Sri Rahayu', NULL, NULL, 0, NULL, NULL, 'NGDFQMSJLV', 7, '0000-00-00 00:00:00'),
('1819101107', 'Rika Destiani', NULL, NULL, 0, NULL, NULL, 'IOGLYTIHMP', 7, '0000-00-00 00:00:00'),
('1819101108', 'Rini Aulia', NULL, NULL, 0, NULL, NULL, 'AYIJJESJVY', 7, '0000-00-00 00:00:00'),
('1819101110', 'Saskia Navila', NULL, NULL, 0, NULL, NULL, 'UNWRVDRWKA', 7, '0000-00-00 00:00:00'),
('1819101111', 'Selvi Amalia', NULL, NULL, 0, NULL, NULL, 'DALFZASYFX', 7, '0000-00-00 00:00:00'),
('1819101112', 'Sepia Nuraini', NULL, NULL, 0, NULL, NULL, 'APGPZYVXTJ', 7, '0000-00-00 00:00:00'),
('1819101113', 'Susanti Nurliawati Salsabila', NULL, NULL, 0, NULL, NULL, 'FLQKTRHCBT', 7, '0000-00-00 00:00:00'),
('1819101114', 'Syahra Gustriani', NULL, NULL, 0, NULL, NULL, 'FTPUTMNVTW', 7, '0000-00-00 00:00:00'),
('1819101115', 'Tri Lisdiawati', NULL, NULL, 0, NULL, NULL, 'BGMMTYXUGU', 7, '0000-00-00 00:00:00'),
('1819101116', 'Vira Khoirunnisa', NULL, NULL, 0, NULL, NULL, 'CFMVJETPWS', 7, '0000-00-00 00:00:00'),
('1819101117', 'Zein Siva Zettira', NULL, NULL, 0, NULL, NULL, 'NSEKQWGOIT', 7, '0000-00-00 00:00:00'),
('1819102081', 'Adeliya Hendrayani', NULL, NULL, 0, NULL, NULL, 'PBRDXSNZFV', 9, '0000-00-00 00:00:00'),
('1819102082', 'Ajeng Kirana', NULL, NULL, 0, NULL, NULL, 'EPVWSPJMLT', 9, '0000-00-00 00:00:00'),
('1819102083', 'Andini Nurohimah', NULL, NULL, 0, NULL, NULL, 'ZCWLPIGBYW', 9, '0000-00-00 00:00:00'),
('1819102084', 'Annisa Nur Zahrani', NULL, NULL, 0, NULL, NULL, 'DOCJTVHQGL', 9, '0000-00-00 00:00:00'),
('1819102085', 'Avrielia Shalsabila Rohadatul Aisy', NULL, NULL, 0, NULL, NULL, 'TMCFJKQPAJ', 9, '0000-00-00 00:00:00'),
('1819102086', 'Cucu Rahmawati', NULL, NULL, 0, NULL, NULL, 'JBPGAQVLTV', 9, '0000-00-00 00:00:00'),
('1819102087', 'Dani Ramdani', NULL, NULL, 0, NULL, NULL, 'AHQNUEASKC', 9, '0000-00-00 00:00:00'),
('1819102088', 'Devina Meliyani Putri', NULL, NULL, 0, NULL, NULL, 'SYJRVSDUZL', 9, '0000-00-00 00:00:00'),
('1819102089', 'Dicky Deriansyah', NULL, NULL, 0, NULL, NULL, 'DZADMOJDKH', 9, '0000-00-00 00:00:00'),
('1819102090', 'Dila Fitriani', NULL, NULL, 0, NULL, NULL, 'MDXKBNAQPT', 9, '0000-00-00 00:00:00'),
('1819102091', 'Gina Mulyana', NULL, NULL, 0, NULL, NULL, 'MGZXIKPXMU', 9, '0000-00-00 00:00:00'),
('1819102092', 'Kurnia Alifah Asmahani', NULL, NULL, 0, NULL, NULL, 'SHRTPDVIOV', 9, '0000-00-00 00:00:00'),
('1819102093', 'Kyla Intan Kristina', NULL, NULL, 0, NULL, NULL, 'OVMRYEYEXW', 9, '0000-00-00 00:00:00'),
('1819102094', 'Laila Indah Agustin', NULL, NULL, 0, NULL, NULL, 'AJFIBLZVJD', 9, '0000-00-00 00:00:00'),
('1819102095', 'Lavina Agustina', NULL, NULL, 0, NULL, NULL, 'OLTXLEANFJ', 9, '0000-00-00 00:00:00'),
('1819102097', 'Muhammad Syahrul Kurniawan', NULL, NULL, 0, NULL, NULL, 'VCZTRLPEMS', 9, '0000-00-00 00:00:00'),
('1819102098', 'Naila Azzahra Salsabila', NULL, NULL, 0, NULL, NULL, 'NIDWKAJSPH', 9, '0000-00-00 00:00:00'),
('1819102099', 'Nala Ratih', NULL, NULL, 0, NULL, NULL, 'ZXGFGJRYPO', 9, '0000-00-00 00:00:00'),
('1819102100', 'Nazwa Nabila Putri', NULL, NULL, 0, NULL, NULL, 'XRFEKITSGP', 9, '0000-00-00 00:00:00'),
('1819102101', 'Nenden Nurul Nuraeni', NULL, NULL, 0, NULL, NULL, 'UJGCVGFIAF', 9, '0000-00-00 00:00:00'),
('1819102102', 'Neng Lisnawati', NULL, NULL, 0, NULL, NULL, 'OYWAFCCMMB', 9, '0000-00-00 00:00:00'),
('1819102103', 'Nina Amelia', NULL, NULL, 0, NULL, NULL, 'CZEWQYDMLI', 9, '0000-00-00 00:00:00'),
('1819102104', 'Nur Salma Fauziah', NULL, NULL, 0, NULL, NULL, 'WIADQUTJGX', 9, '0000-00-00 00:00:00'),
('1819102105', 'Nurliana Agustina', NULL, NULL, 0, NULL, NULL, 'PTMJKOWBUS', 9, '0000-00-00 00:00:00'),
('1819102107', 'Rifa Nur Afifah Sinulingga', NULL, NULL, 0, NULL, NULL, 'DQMEPTZFJB', 9, '0000-00-00 00:00:00'),
('1819102108', 'Rini Fitria', NULL, NULL, 0, NULL, NULL, 'YYNXDYZIKD', 9, '0000-00-00 00:00:00'),
('1819102109', 'Sabela Tri Vani', NULL, NULL, 0, NULL, NULL, 'HRHRTTOFES', 9, '0000-00-00 00:00:00'),
('1819102110', 'Sendy Agung Nugraha', NULL, NULL, 0, NULL, NULL, 'DULJTXJXHJ', 9, '0000-00-00 00:00:00'),
('1819102111', 'Siti Maula Salsabilla', NULL, NULL, 0, NULL, NULL, 'YPDXDEODFR', 9, '0000-00-00 00:00:00'),
('1819102112', 'Siti Sarah Fauziah', NULL, NULL, 0, NULL, NULL, 'KHIKGGLXZR', 9, '0000-00-00 00:00:00'),
('1819102113', 'Tarisa Rizkia Dewi', NULL, NULL, 0, NULL, NULL, 'NRUKIOTTYH', 9, '0000-00-00 00:00:00'),
('1819102114', 'Try Fanny', NULL, NULL, 0, NULL, NULL, 'NEKNHALDKA', 9, '0000-00-00 00:00:00'),
('1819102115', 'Vallery Aurora Bentianti Timisella', NULL, NULL, 0, NULL, NULL, 'VORHEUKSAD', 9, '0000-00-00 00:00:00'),
('1819102116', 'Wina Destiani', NULL, NULL, 0, NULL, NULL, 'BPZIENDBFY', 9, '0000-00-00 00:00:00'),
('1819103035', 'Anisa Ulhotimah Nur', NULL, NULL, 0, NULL, NULL, 'BWRTHBXGUZ', 11, '0000-00-00 00:00:00'),
('1819103036', 'Debi Siti Adilah', NULL, NULL, 0, NULL, NULL, 'JCYGGJQPDV', 11, '0000-00-00 00:00:00'),
('1819103037', 'Diani Ramadhanty', NULL, NULL, 0, NULL, NULL, 'EUCJRCUYTL', 11, '0000-00-00 00:00:00'),
('1819103038', 'Dicky Farhan', NULL, NULL, 0, NULL, NULL, 'DWETJGREKS', 11, '0000-00-00 00:00:00'),
('1819103039', 'Dita Tiara Nugraha', NULL, NULL, 0, NULL, NULL, 'CIRMBSDJZF', 11, '0000-00-00 00:00:00'),
('1819103040', 'Intan Masdalena', NULL, NULL, 0, NULL, NULL, 'FTYHHIKFCD', 11, '0000-00-00 00:00:00'),
('1819103041', 'Irfan Abdullah Rojab', NULL, NULL, 0, NULL, NULL, 'EGMZNQKRQU', 11, '0000-00-00 00:00:00'),
('1819103042', 'Muhamad Azra', NULL, NULL, 0, NULL, NULL, 'MHHPASCEMG', 11, '0000-00-00 00:00:00'),
('1819103043', 'Muhammad Yusuf Famungkas', NULL, NULL, 0, NULL, NULL, 'HGBIXUPJBF', 11, '0000-00-00 00:00:00'),
('1819103044', 'Neng Romlah', NULL, NULL, 0, NULL, NULL, 'AXERYIQTOV', 11, '0000-00-00 00:00:00'),
('1819103045', 'Novia Seviana', NULL, NULL, 0, NULL, NULL, 'RYCAZOFBYK', 11, '0000-00-00 00:00:00'),
('1819103046', 'Rini Noviani', NULL, NULL, 0, NULL, NULL, 'HKXECGEMFJ', 11, '0000-00-00 00:00:00'),
('1819103047', 'Rizki Alwi Fauzi', NULL, NULL, 0, NULL, NULL, 'FBHIXVQGCL', 11, '0000-00-00 00:00:00'),
('1819103048', 'Sarah Natania Nabila Putri', NULL, NULL, 0, NULL, NULL, 'KNPSAXBOGO', 11, '0000-00-00 00:00:00'),
('1819103049', 'Shifa Anggita', NULL, NULL, 0, NULL, NULL, 'LUXDXGGGDM', 11, '0000-00-00 00:00:00'),
('1819103050', 'Syalma Sefiandini', NULL, NULL, 0, NULL, NULL, 'CTARWDNJVO', 11, '0000-00-00 00:00:00'),
('1819103051', 'Tiara Mutia Ardipradja', NULL, NULL, 0, NULL, NULL, 'JUIEMMGQAL', 11, '0000-00-00 00:00:00'),
('1819103052', 'Tiara Nur Clarisa', NULL, NULL, 0, NULL, NULL, 'EQTNZEXFBV', 11, '0000-00-00 00:00:00'),
('1819103053', 'Yayu Yesi Septiani', NULL, NULL, 0, NULL, NULL, 'AMKIJOTCZP', 11, '0000-00-00 00:00:00'),
('1819103077', 'Sephia Salma Salsabil Putri', NULL, NULL, 0, NULL, NULL, 'XTYEUNOHTE', 11, '0000-00-00 00:00:00'),
('1920101118', 'Afifah Lailatus Saadah', NULL, NULL, 0, NULL, NULL, 'MJGUFBCSRT', 6, '0000-00-00 00:00:00'),
('1920101119', 'Aisya Nuraeni', NULL, NULL, 0, NULL, NULL, 'YVHPTAMULW', 6, '0000-00-00 00:00:00'),
('1920101120', 'Amelia Wulandari', NULL, NULL, 0, NULL, NULL, 'MCSUURNOEI', 6, '0000-00-00 00:00:00'),
('1920101121', 'Angraeni Apriani', NULL, NULL, 0, NULL, NULL, 'JXQVXOTOLM', 6, '0000-00-00 00:00:00'),
('1920101122', 'Asti Oktaviani', NULL, NULL, 0, NULL, NULL, 'ONCLBFGWZY', 6, '0000-00-00 00:00:00'),
('1920101123', 'Aulia Fauziyah Anwar', NULL, NULL, 0, NULL, NULL, 'ICODFBBXTB', 6, '0000-00-00 00:00:00'),
('1920101124', 'Bella kamelia Amanda', NULL, NULL, 0, NULL, NULL, 'YACIAQTKSG', 6, '0000-00-00 00:00:00'),
('1920101125', 'Canda Damayanti', NULL, NULL, 0, NULL, NULL, 'AVJSUVGASG', 6, '0000-00-00 00:00:00'),
('1920101126', 'Deanira Alvanissa Gusyana', NULL, NULL, 0, NULL, NULL, 'HMYNIGJAID', 6, '0000-00-00 00:00:00'),
('1920101127', 'Dela Savira', NULL, NULL, 0, NULL, NULL, 'DAQMBOWACP', 6, '0000-00-00 00:00:00'),
('1920101128', 'Dera Mulyanti', NULL, NULL, 0, NULL, NULL, 'JGOFXKGEBL', 6, '0000-00-00 00:00:00'),
('1920101129', 'Desti Minarti', NULL, NULL, 0, NULL, NULL, 'RFWOIQDTEG', 6, '0000-00-00 00:00:00'),
('1920101130', 'Destiana Alfiani', NULL, NULL, 0, NULL, NULL, 'MKIMXEPDFN', 6, '0000-00-00 00:00:00'),
('1920101131', 'Dianah Nur Halisyah', NULL, NULL, 0, NULL, NULL, 'GRXVTCZRKU', 6, '0000-00-00 00:00:00'),
('1920101132', 'Dini Nurfitri', NULL, NULL, 0, NULL, NULL, 'BFYFBYKSHZ', 6, '0000-00-00 00:00:00'),
('1920101133', 'Elsa Fahira Putri Darmayanti', NULL, NULL, 0, NULL, NULL, 'QCJOUQLGBH', 6, '0000-00-00 00:00:00'),
('1920101134', 'Happy Retinaimah', NULL, NULL, 0, NULL, NULL, 'UECMAQJXFZ', 6, '0000-00-00 00:00:00'),
('1920101135', 'Intan Shofariana Kusnadi', NULL, NULL, 0, NULL, NULL, 'VKJVMNGFPO', 6, '0000-00-00 00:00:00'),
('1920101136', 'Kamila Nasywa', NULL, NULL, 0, NULL, NULL, 'VILRNKCSSF', 6, '0000-00-00 00:00:00'),
('1920101137', 'Laira Citra', NULL, NULL, 0, NULL, NULL, 'UJFQQWWZJA', 6, '0000-00-00 00:00:00'),
('1920101138', 'Mia Aipiyani', NULL, NULL, 0, NULL, NULL, 'DXDKNFNWBQ', 6, '0000-00-00 00:00:00'),
('1920101139', 'Mirna Ariyani', NULL, NULL, 0, NULL, NULL, 'DWLEFRYLFV', 6, '0000-00-00 00:00:00'),
('1920101140', 'Muhammad Kanafi H', NULL, NULL, 0, NULL, NULL, 'ELKMKIONDV', 6, '0000-00-00 00:00:00'),
('1920101141', 'Nabilah', NULL, NULL, 0, NULL, NULL, 'PDGRAXCKJA', 6, '0000-00-00 00:00:00'),
('1920101142', 'Neng Riska Paulina', NULL, NULL, 0, NULL, NULL, 'IACSCRLFLR', 6, '0000-00-00 00:00:00'),
('1920101143', 'Nesha Nurliahana', NULL, NULL, 0, NULL, NULL, 'HHIRYVSOKB', 6, '0000-00-00 00:00:00'),
('1920101144', 'Noni Maharani Putri', NULL, NULL, 0, NULL, NULL, 'QQUBZHJVZH', 6, '0000-00-00 00:00:00'),
('1920101145', 'Resa Widianti', NULL, NULL, 0, NULL, NULL, 'AXMBJFMIAE', 6, '0000-00-00 00:00:00'),
('1920101146', 'Ressa Rahmawati', NULL, NULL, 0, NULL, NULL, 'GAIPGOXMDS', 6, '0000-00-00 00:00:00'),
('1920101147', 'Rosi Rahmawati', NULL, NULL, 0, NULL, NULL, 'EJSAMYDMPW', 6, '0000-00-00 00:00:00'),
('1920101148', 'Salma Putri Karepina', NULL, NULL, 0, NULL, NULL, 'UXUFMUNHXJ', 6, '0000-00-00 00:00:00'),
('1920101149', 'Silvya Maylani', NULL, NULL, 0, NULL, NULL, 'WQHHWSHIWZ', 6, '0000-00-00 00:00:00'),
('1920101150', 'Sri Intan', NULL, NULL, 0, NULL, NULL, 'KEACBEPWNJ', 6, '0000-00-00 00:00:00'),
('1920101151', 'Susan Rahmawati', NULL, NULL, 0, NULL, NULL, 'DNNACXBLMW', 6, '0000-00-00 00:00:00'),
('1920101152', 'Syifa Salsabila Suhendar', NULL, NULL, 0, NULL, NULL, 'SNPDZLORQK', 6, '0000-00-00 00:00:00'),
('1920101153', 'Tia Setiani', NULL, NULL, 0, NULL, NULL, 'XRFSKXBAVH', 6, '0000-00-00 00:00:00'),
('1920101154', 'Yuni Sriwahyuni', NULL, NULL, 0, NULL, NULL, 'YKHHBPZEAL', 6, '0000-00-00 00:00:00'),
('1920101155', 'Zahra Aprillya Hasanah', NULL, NULL, 0, NULL, NULL, 'CZIKQIMFVR', 6, '0000-00-00 00:00:00'),
('1920102117', 'Adisty Syifa Melinda', NULL, NULL, 0, NULL, NULL, 'ASRSTGIFBG', 4, '0000-00-00 00:00:00'),
('1920102118', 'Ajid Abdul Majid', NULL, NULL, 0, NULL, NULL, 'DJNPQWGMAV', 4, '0000-00-00 00:00:00'),
('1920102119', 'Ananda Revalina', NULL, NULL, 0, NULL, NULL, 'XKRORGDQQH', 4, '0000-00-00 00:00:00'),
('1920102120', 'Apni Aprilia', NULL, NULL, 0, NULL, NULL, 'NZBKFBVZFK', 4, '0000-00-00 00:00:00'),
('1920102121', 'Aryan Yuan Gunawan', NULL, NULL, 0, NULL, NULL, 'CQUIQHKTIQ', 4, '0000-00-00 00:00:00'),
('1920102122', 'Avika Mollina Putri Ghifari', NULL, NULL, 0, NULL, NULL, 'MRDKGYXAMU', 4, '0000-00-00 00:00:00'),
('1920102123', 'Cindy Apriliani', NULL, NULL, 0, NULL, NULL, 'OIVURWOTUY', 4, '0000-00-00 00:00:00'),
('1920102124', 'Dela Caswati', NULL, NULL, 0, NULL, NULL, 'EGCITCTGGJ', 4, '0000-00-00 00:00:00'),
('1920102125', 'Desty Nuraeni Fadilah', NULL, NULL, 0, NULL, NULL, 'QSBMBTEJTB', 4, '0000-00-00 00:00:00'),
('1920102126', 'Deti Kurnia', NULL, NULL, 0, NULL, NULL, 'IOPZSDTRML', 4, '0000-00-00 00:00:00'),
('1920102127', 'Devi Sumiati', NULL, NULL, 0, NULL, NULL, 'PNTKUDIKEC', 4, '0000-00-00 00:00:00'),
('1920102128', 'Devita Maharani', NULL, NULL, 0, NULL, NULL, 'YOIHPQHHMO', 4, '0000-00-00 00:00:00'),
('1920102129', 'Dita Puspita Sari', NULL, NULL, 0, NULL, NULL, 'GDHCMROYWI', 4, '0000-00-00 00:00:00'),
('1920102130', 'Eliana Herawati', NULL, NULL, 0, NULL, NULL, 'DHKXNJIQLW', 4, '0000-00-00 00:00:00'),
('1920102131', 'Gina Salsapira', NULL, NULL, 0, NULL, NULL, 'EMLXVOHEZN', 4, '0000-00-00 00:00:00'),
('1920102132', 'Hani Inayati Zakia', NULL, NULL, 0, NULL, NULL, 'HQSXRZLSYJ', 4, '0000-00-00 00:00:00'),
('1920102133', 'Imam Santoso', NULL, NULL, 0, NULL, NULL, 'EQMCMJLDZZ', 4, '0000-00-00 00:00:00'),
('1920102134', 'Imelda Indriani', NULL, NULL, 0, NULL, NULL, 'UHISGFIYGM', 4, '0000-00-00 00:00:00'),
('1920102135', 'Intan Desti Wulandari', NULL, NULL, 0, NULL, NULL, 'FGJBPOXTLS', 4, '0000-00-00 00:00:00'),
('1920102136', 'Jamilatul Aulia', NULL, NULL, 0, NULL, NULL, 'WRUOIOEZBF', 4, '0000-00-00 00:00:00'),
('1920102137', 'Lia Yulia Rahmawati', NULL, NULL, 0, NULL, NULL, 'PFMOBMXZHG', 4, '0000-00-00 00:00:00'),
('1920102138', 'Lidya Nur Saskia', NULL, NULL, 0, NULL, NULL, 'SGKQQYFKIZ', 4, '0000-00-00 00:00:00'),
('1920102139', 'Muhammad Rizki R.', NULL, NULL, 0, NULL, NULL, 'GWFCBZWRQB', 4, '0000-00-00 00:00:00'),
('1920102140', 'Puput Putriyani', NULL, NULL, 0, NULL, NULL, 'FEYEAFPQMU', 4, '0000-00-00 00:00:00'),
('1920102141', 'Rahma Eliani', NULL, NULL, 0, NULL, NULL, 'LZPESFLYOW', 4, '0000-00-00 00:00:00'),
('1920102142', 'Ratu Sesillia Winarti', NULL, NULL, 0, NULL, NULL, 'DGDDWMXTDK', 4, '0000-00-00 00:00:00'),
('1920102143', 'Resmawati', NULL, NULL, 0, NULL, NULL, 'ZZNBVTBFMC', 4, '0000-00-00 00:00:00'),
('1920102144', 'Reva Salsa Sabila', NULL, NULL, 0, NULL, NULL, 'TGHITKSFFD', 4, '0000-00-00 00:00:00'),
('1920102145', 'Rianny Oktaviany', NULL, NULL, 0, NULL, NULL, 'YLVHWMZYVX', 4, '0000-00-00 00:00:00'),
('1920102146', 'Ripana Rayi Permana Sidiq', NULL, NULL, 0, NULL, NULL, 'FRAOUESEMI', 4, '0000-00-00 00:00:00'),
('1920102147', 'Rosi Septiandri Putri Utami', NULL, NULL, 0, NULL, NULL, 'KOBRYBJFWO', 4, '0000-00-00 00:00:00'),
('1920102148', 'Salma Oktaviani G.', NULL, NULL, 0, NULL, NULL, 'PESWYFKEWT', 4, '0000-00-00 00:00:00'),
('1920102149', 'Sari Siti Hasanah', NULL, NULL, 0, NULL, NULL, 'GEFHEYNYEA', 4, '0000-00-00 00:00:00'),
('1920102150', 'Sesi Juniar', NULL, NULL, 0, NULL, NULL, 'SXGIQHFFKB', 4, '0000-00-00 00:00:00'),
('1920102151', 'Shipa Saraswati', NULL, NULL, 0, NULL, NULL, 'CLUIVEBAWH', 4, '0000-00-00 00:00:00'),
('1920102152', 'Siska Ari', NULL, NULL, 0, NULL, NULL, 'HZWKEZBOUP', 4, '0000-00-00 00:00:00'),
('1920102153', 'Syilda Destiani', NULL, NULL, 0, NULL, NULL, 'EABQHHUCPD', 4, '0000-00-00 00:00:00'),
('1920102154', 'Tanisa Amelia', NULL, NULL, 0, NULL, NULL, 'FZKGCJCEOS', 4, '0000-00-00 00:00:00'),
('1920102155', 'Tasya Wulandari', NULL, NULL, 0, NULL, NULL, 'VJZZZUNKAF', 4, '0000-00-00 00:00:00'),
('1920102156', 'Tika Fitria Nurhasanah', NULL, NULL, 0, NULL, NULL, 'HNVWCZRHHM', 4, '0000-00-00 00:00:00'),
('1920102157', 'Wiliam Yustian', NULL, NULL, 0, NULL, NULL, 'KCWHCDJKPR', 4, '0000-00-00 00:00:00'),
('1920102158', 'Winda Cantika Putri', NULL, NULL, 0, NULL, NULL, 'QRKZSURTGV', 4, '0000-00-00 00:00:00'),
('1920102159', 'Zahra Nabilla Zalianty', NULL, NULL, 0, NULL, NULL, 'BDXMCIEZRW', 4, '0000-00-00 00:00:00'),
('1920103055', 'Al Basya Atsyar Maulana', NULL, NULL, 0, NULL, NULL, 'LZPPBQTXDF', 5, '0000-00-00 00:00:00'),
('1920103056', 'Andina Femilia Putri Apriana', NULL, NULL, 0, NULL, NULL, 'VONKODJZVR', 5, '0000-00-00 00:00:00'),
('1920103057', 'Angga Naufal Maulana', NULL, NULL, 0, NULL, NULL, 'EIUIADMMUX', 5, '0000-00-00 00:00:00'),
('1920103058', 'Deska Nugraha', NULL, NULL, 0, NULL, NULL, 'MEHSGJMNVM', 5, '0000-00-00 00:00:00'),
('1920103059', 'Dita Windira Safitri', NULL, NULL, 0, NULL, NULL, 'XOIJRGPZIM', 5, '0000-00-00 00:00:00'),
('1920103060', 'Iqbal Aramdan', NULL, NULL, 0, NULL, NULL, 'FFUFUZJXFU', 5, '0000-00-00 00:00:00'),
('1920103061', 'Kania Syalwa Salsabila', NULL, NULL, 0, NULL, NULL, 'WGECOEQMDD', 5, '0000-00-00 00:00:00'),
('1920103062', 'M. Haikal Fikri N', NULL, NULL, 0, NULL, NULL, 'HDHRKOEBOU', 5, '0000-00-00 00:00:00'),
('1920103063', 'M.Krisna Januarudin', NULL, NULL, 0, NULL, NULL, 'XYZKNPOPFE', 5, '0000-00-00 00:00:00'),
('1920103064', 'Meiylani Agustin', NULL, NULL, 0, NULL, NULL, 'IUCZFFSIAS', 5, '0000-00-00 00:00:00'),
('1920103065', 'Muhamad Syahrul R', NULL, NULL, 0, NULL, NULL, 'LPYUWBROBD', 5, '0000-00-00 00:00:00'),
('1920103066', 'Nanda Alya Amanda', NULL, NULL, 0, NULL, NULL, 'OWKTWOZMPM', 5, '0000-00-00 00:00:00'),
('1920103067', 'Noval widianto', NULL, NULL, 0, NULL, NULL, 'QZXWIREJXY', 5, '0000-00-00 00:00:00'),
('1920103068', 'Nevira Saefine', NULL, NULL, 0, NULL, NULL, 'ANZDMKWAPO', 5, '0000-00-00 00:00:00'),
('1920103069', 'Nisa Nursyani', NULL, NULL, 0, NULL, NULL, 'LPZIAPYCQS', 5, '0000-00-00 00:00:00'),
('1920103070', 'Rianti', NULL, NULL, 0, NULL, NULL, 'XAGSAUPYRD', 5, '0000-00-00 00:00:00'),
('1920103071', 'Rizky Elvansyah', NULL, NULL, 0, NULL, NULL, 'LKBEVMVSHQ', 5, '0000-00-00 00:00:00'),
('1920103072', 'Sabna Ramadianty Hidayat', NULL, NULL, 0, NULL, NULL, 'RVBEBDVDST', 5, '0000-00-00 00:00:00'),
('1920103073', 'Sandrina Saidi Rasty', NULL, NULL, 0, NULL, NULL, '1920103073', 5, '0000-00-00 00:00:00'),
('1920103074', 'Savina Zahira', NULL, NULL, 0, NULL, NULL, 'WUMTWQPNHO', 5, '0000-00-00 00:00:00'),
('1920103075', 'Sofie Azzahra Awalia', NULL, NULL, 0, NULL, NULL, 'DWQAHOOPIP', 5, '0000-00-00 00:00:00'),
('1920103076', 'Syahdan Khairil Malik', NULL, NULL, 0, NULL, NULL, 'CUWJQDCERN', 5, '0000-00-00 00:00:00'),
('1920103077', 'Wila Amelia', 'kdjakljdl', '1111', 1, NULL, 'gmail', 'NOWKTYMQDG', 5, '0000-00-00 00:00:00'),
('1920103078', 'Wila Amelia', '', '', 1, '', '', 'NOWKTYMQDG', 5, '2020-09-15 14:42:37'),
('2021101156', 'Afifah Azzahra Umayah', '', '', 1, '', '', 'TJLSBUNKIH', 15, '2020-09-11 13:53:40'),
('2021101157', 'Alisa Nursadiah', '', '', 1, '', '', 'ATKDPNBXEG', 15, '2020-09-11 13:53:40'),
('2021101158', 'Ananda Dwi Nurfadilah ', '', '', 1, '', '', 'MXMWRKMZDP', 15, '2020-09-11 13:53:40'),
('2021101159', 'Ananda Febrianti', '', '', 1, '', '', 'NZSQVVQINX', 15, '2020-09-11 13:53:40'),
('2021101160', 'Ananda Sakinah', '', '', 1, '', '', 'XYNTRVBRXF', 15, '2020-09-11 13:53:40'),
('2021101161', 'Andina Maisya Riska', '', '', 1, '', '', 'JEYFSDWZWQ', 15, '2020-09-11 13:53:40'),
('2021101162', 'Anisa Sulastri Mahesa', '', '', 1, '', '', 'ZOPNOODREN', 15, '2020-09-11 13:53:40'),
('2021101163', 'Astri Amelia Ramadhani', '', '', 1, '', '', 'OWKGSJLKNU', 15, '2020-09-11 13:53:40'),
('2021101164', 'Ayu Nelawati', '', '', 1, '', '', 'QQQWMJKZSK', 15, '2020-09-11 13:53:40'),
('2021101165', 'Damia Nur Millah', '', '', 1, '', '', 'ZSSXOABKCQ', 15, '2020-09-11 13:53:40'),
('2021101166', 'Dara Dania', '', '', 1, '', '', 'BSNNWDFWDX', 15, '2020-09-11 13:53:40'),
('2021101167', 'Dewi Ratna Sari', '', '', 1, '', '', 'BKYTMSTDPZ', 15, '2020-09-11 13:53:40'),
('2021101168', 'Diva Dwi Cahyani', '', '', 1, '', '', 'LLFHZWXXHJ', 15, '2020-09-11 13:53:40'),
('2021101169', 'Erindha Fadilah', '', '', 1, '', '', 'SYSAXWOFRX', 15, '2020-09-11 13:53:40'),
('2021101170', 'Evita Febianti', '', '', 1, '', '', 'YXEZCIGSMZ', 15, '2020-09-11 13:53:40'),
('2021101171', 'Fadila Hadzal Khotimah', NULL, '0990', 1, '', 'haahah@gmail.com', 'DVXUKMSZVK', 15, '2020-09-11 13:53:40'),
('2021101172', 'Fanesha Anasta Sabila', '', '', 1, '', '', 'JRBVQUTLQW', 15, '2020-09-11 13:53:40'),
('2021101173', 'Iis Setiani', '', '', 1, '', '', 'LNKRZGVTPS', 15, '2020-09-11 13:53:40'),
('2021101174', 'Julia Eka Putri A ', '', '', 1, '', '', 'WBXNTYYGQH', 15, '2020-09-11 13:53:40'),
('2021101175', 'Karin Vadila', '', '', 1, '', '', 'NJDPHEECFS', 15, '2020-09-11 13:53:40'),
('2021101176', 'Linda Amelia', '', '', 1, '', '', 'SOQGEUDUHV', 15, '2020-09-11 13:53:40'),
('2021101177', 'Meifalany Frisca Khalimah', NULL, '8908', 1, '', 'ahah@gmail.com', 'QACMNGXREY', 15, '2020-09-11 13:53:40'),
('2021101178', 'N.Windi Noviandini A.P', '', '', 1, '', '', 'EXADZQSKMW', 15, '2020-09-11 13:53:40'),
('2021101179', 'Naida Nurfadillah', '', '', 1, '', '', 'YOOPRATRPI', 15, '2020-09-11 13:53:40'),
('2021101180', 'Naura Rahma Fauziah ', '', '', 1, '', '', 'XVBRGKNYJA', 15, '2020-09-11 13:53:40'),
('2021101181', 'Nazwa Ratu Bilqis', '', '', 1, '', '', 'QFXSISTTWX', 15, '2020-09-11 13:53:40'),
('2021101182', 'Neneng Sri Anggraeni', '', '', 1, '', '', 'MSJUYOQZUO', 15, '2020-09-11 13:53:40'),
('2021101183', 'Ninda Atika', NULL, '0990', 1, '', 'haahah@gmail.com', 'WCMRTLQZNJ', 15, '2020-09-11 13:53:40'),
('2021101184', 'Novia Ardana', '', '', 1, '', '', 'FBPNIKONNR', 15, '2020-09-11 13:53:40'),
('2021101185', 'Novia Ramdini', '', '', 1, '', '', 'YROYBIAMHK', 15, '2020-09-11 13:53:40'),
('2021101186', 'Rahmawati Nur Aulia', '', '', 1, '', '', 'TSXWZTATBQ', 15, '2020-09-11 13:53:40'),
('2021101187', 'Resti Rosmiati', '', '', 1, '', '', 'BOQICTJILU', 15, '2020-09-11 13:53:40'),
('2021101188', 'Sherla Mawar Albiya ', '', '', 1, '', '', 'VEREESGTXY', 15, '2020-09-11 13:53:40'),
('2021101189', 'Shinta Restu', '', '', 1, '', '', 'WULHGIVTXK', 15, '2020-09-11 13:53:40'),
('2021101190', 'Siti Dina Rahayu', '', '', 1, '', '', 'TYDQSFOILL', 15, '2020-09-11 13:53:40'),
('2021101191', 'Siti Rosita', '', '', 1, '', '', 'TUFWXQCVVM', 15, '2020-09-11 13:53:40'),
('2021101192', 'Sovy Dwi Haryani', '', '', 1, '', '', 'YGOKAUGCDY', 15, '2020-09-11 13:53:40'),
('2021101193', 'Sri Rohimah', '', '', 1, '', '', 'ZBSWODHKZH', 15, '2020-09-11 13:53:40'),
('2021101194', 'Suci Agisa Inayatullah', '', '', 1, '', '', 'DSVLGPZPCE', 15, '2020-09-11 13:53:40'),
('2021101195', 'Suci Fadilah', '', '', 1, '', '', 'QPVEPHFHOX', 15, '2020-09-11 13:53:40'),
('2021101196', 'Virda Muthia Bawani', '', '', 1, '', '', 'CWWBCKFYMJ', 15, '2020-09-11 13:53:40'),
('2021101197', 'Windi Agustiyani', '', '', 1, '', '', 'KJVDEOFYIU', 15, '2020-09-11 13:53:40'),
('2021102160', 'Adrian Rizki Maulana', '', '', 1, '', '', 'KBWLLFAVNH', 14, '2020-09-11 13:53:40'),
('2021102161', 'Anisa Putri Anjani', '', '', 1, '', '', 'AWDJSEAWOI', 14, '2020-09-11 13:53:40'),
('2021102162', 'Aqilah Hana Malsa ', '', '', 1, '', '', 'ZFGPMAEFLY', 14, '2020-09-11 13:53:40'),
('2021102163', 'Assyifa Yasfa Desviansyah ', '', '', 1, '', '', 'VLRNFGVQVP', 14, '2020-09-11 13:53:40'),
('2021102164', 'Asti Rohani', '', '', 1, '', '', 'DLGWKMTRND', 14, '2020-09-11 13:53:40'),
('2021102165', 'Astri Rahmayanti', '', '', 1, '', '', 'ITRNSKRAHE', 14, '2020-09-11 13:53:40'),
('2021102166', 'Cinta Bunga Lestari', '', '', 1, '', '', 'GTNDLDQNZC', 14, '2020-09-11 13:53:40'),
('2021102167', 'Cucun Sumiarsih', '', '', 1, '', '', 'SSGTFQSRCG', 14, '2020-09-11 13:53:40'),
('2021102168', 'Dandi Ramdani', '', '', 1, '', '', 'JZNLHTQPRU', 14, '2020-09-11 13:53:40'),
('2021102169', 'Detia Nur Siva ', '', '', 1, '', '', 'PVQXUDRXVS', 14, '2020-09-11 13:53:40'),
('2021102170', 'Divna Putri', '', '', 1, '', '', 'BXRJFQKSRW', 14, '2020-09-11 13:53:40'),
('2021102171', 'Elsa Putri ', '', '', 1, '', '', 'KLGWMNYOOV', 14, '2020-09-11 13:53:40'),
('2021102172', 'Endah Novianti', '', '', 1, '', '', 'OQITQTCHIY', 14, '2020-09-11 13:53:40'),
('2021102173', 'Faisal Nazar Rifaldi', '', '', 1, '', '', 'CXVPNGQTPM', 14, '2020-09-11 13:53:40'),
('2021102174', 'Fanyra Julyanti', '', '', 1, '', '', 'SGVEJPLYHA', 14, '2020-09-11 13:53:40'),
('2021102175', 'Faridz Mutaqin', '', '', 1, '', '', 'VPXNKVEGGP', 14, '2020-09-11 13:53:40'),
('2021102176', 'Fasya Aditya', '', '', 1, '', '', 'DUXCVQFPUJ', 14, '2020-09-11 13:53:40'),
('2021102177', 'Fauzan Shafwan Alauddin', '', '', 1, '', '', 'KMMBKDAAFT', 14, '2020-09-11 13:53:40'),
('2021102178', 'Fevi Rizka Dinata', '', '', 1, '', '', 'UHCCANLMRO', 14, '2020-09-11 13:53:40'),
('2021102179', 'Firnanda Aulia Sabilla', '', '', 1, '', '', 'SLAEXGBHEA', 14, '2020-09-11 13:53:40'),
('2021102180', 'Hesty Aulia Farida', '', '', 1, '', '', 'TACZGCZHZB', 14, '2020-09-11 13:53:40'),
('2021102181', 'Ilman Rachman Nulhakim', '', '', 1, '', '', 'NFZZXLVSHF', 14, '2020-09-11 13:53:40'),
('2021102182', 'Inggrid Monika Garmalia', '', '', 1, '', '', 'WWCKYUKVUK', 14, '2020-09-11 13:53:40'),
('2021102183', 'Intan Sari', '', '', 1, '', '', 'TKAIUKQXXT', 14, '2020-09-11 13:53:40'),
('2021102184', 'Karin Kusminarti', '', '', 1, '', '', 'PROHGTUDBQ', 14, '2020-09-11 13:53:40'),
('2021102185', 'Kiran Seila Maulidia', '', '', 1, '', '', 'CDPXRVAEAN', 14, '2020-09-11 13:53:40'),
('2021102186', 'Miza Aulia Rahayu ', '', '', 1, '', '', 'OHKXBHWIEB', 14, '2020-09-11 13:53:40'),
('2021102187', 'Muhammad Hardy Adriansyah', '', '', 1, '', '', 'MFEJJCPDCL', 14, '2020-09-11 13:53:40'),
('2021102188', 'Najwa Nisrina Fadyah', '', '', 1, '', '', 'AJDPRNJAAZ', 14, '2020-09-11 13:53:40'),
('2021102189', 'Nazwa Amalia', '', '', 1, '', '', 'QQLLTTQKMK', 14, '2020-09-11 13:53:40'),
('2021102190', 'Niana Kartika', '', '', 1, '', '', 'TNJHORMYEC', 14, '2020-09-11 13:53:40'),
('2021102191', 'Raveena Adinda Distya ', '', '', 1, '', '', 'HFPLNFBXYO', 14, '2020-09-11 13:53:40'),
('2021102192', 'Resti Fauziah ', '', '', 1, '', '', 'MXDUCWJLKL', 14, '2020-09-11 13:53:40'),
('2021102193', 'Rifka Setiawati', '', '', 1, '', '', 'MRDBAQVTJU', 14, '2020-09-11 13:53:40'),
('2021102194', 'Rifky Fauzi Syaputra', '', '', 1, '', '', 'CZHVMXMLDL', 14, '2020-09-11 13:53:40'),
('2021102195', 'Risna Dewi', '', '', 1, '', '', 'UJYSMAZSXW', 14, '2020-09-11 13:53:40'),
('2021102196', 'Rosa Meigina Mulyani', '', '', 1, '', '', 'KFSFBHUSNE', 14, '2020-09-11 13:53:40'),
('2021102197', 'Sarah Ayu Nurulsifa', '', '', 1, '', '', 'LLJSBMQYAV', 14, '2020-09-11 13:53:40'),
('2021102198', 'Susi Sumiati', '', '', 1, '', '', 'FSNKVZCKCA', 14, '2020-09-11 13:53:40'),
('2021102199', 'Syifa Yulandari', '', '', 1, '', '', 'VXASDGIDZJ', 14, '2020-09-11 13:53:40'),
('2021102200', 'Tatia Rizki Amalia Hidayat', '', '', 1, '', '', 'MPXLUMPNDY', 14, '2020-09-11 13:53:40'),
('2021102201', 'Tsabita Hurin Mardiah', '', '', 1, '', '', 'IRNVARKXRL', 14, '2020-09-11 13:53:40'),
('2021102202', 'Vionna Debby P', '', '', 1, '', '', 'SJZNLVYPAF', 14, '2020-09-11 13:53:40'),
('2021102203', 'Wanda Kurniati Febriany', '', '', 1, '', '', 'OBHEXIXZGA', 14, '2020-09-11 13:53:40'),
('2021102204', 'Widya Nurhasanah', '', '', 1, '', '', 'ZDASDWMWEE', 14, '2020-09-11 13:53:40'),
('2021103079', 'Aditya Dellas E.', NULL, '0205585', 0, '', 'admin', 'XGYQLJUMRX', 16, '2020-09-11 13:53:40'),
('2021103080', 'Ahmad Sultan', '', '', 1, '', '', 'GVLJUBEFZZ', 16, '2020-09-11 13:53:40'),
('2021103081', 'Alta Diannita', 'Hahahajah', '0882939', 1, '', 'alta@gmail.com', 'DESPYAVDQX', 16, '2020-09-11 13:53:40'),
('2021103082', 'Anisa Nurul Aprilianti', '', '', 1, '', '', 'MRGVRYNRMB', 16, '2020-09-11 13:53:40'),
('2021103083', 'Dea Aprillia ', '', '', 1, '', '', 'JDPKMSTBNJ', 16, '2020-09-11 13:53:40'),
('2021103084', 'Dhea Restu Aulia', '', '', 1, '', '', 'ZDILDPNITT', 16, '2020-09-11 13:53:40'),
('2021103085', 'Faiza Salsabila', '', '', 1, '', '', 'RHTLLACLGK', 16, '2020-09-11 13:53:40'),
('2021103086', 'Fuzi Fauziah Fitria', '', '', 1, '', '', 'JNIPBOUMMH', 16, '2020-09-11 13:53:40'),
('2021103087', 'Ghaida Zahra Dzahabiyyah', '', '', 1, '', '', 'LIQFSKVTUV', 16, '2020-09-11 13:53:40'),
('2021103088', 'Lani Suryani', '', '', 1, '', '', 'MXBPHQISBZ', 16, '2020-09-11 13:53:40'),
('2021103089', 'Meli Maulidah', '', '', 1, '', '', 'LLQLNMQBLK', 16, '2020-09-11 13:53:40'),
('2021103090', 'Muhammad Razkha Alghifary', '', '', 1, '', '', 'OJLPEIXAFO', 16, '2020-09-11 13:53:40'),
('2021103091', 'Nada Jahira Auliya', '', '', 1, '', '', 'VSQRIGSWZA', 16, '2020-09-11 13:53:40'),
('2021103092', 'Nasywa Alifa Priyatno', '', '', 1, '', '', 'VVLTFTCHPZ', 16, '2020-09-11 13:53:40'),
('2021103093', 'Reza Maulana Narizkia', '', '', 1, '', '', 'KFQZEFBKDT', 16, '2020-09-11 13:53:40'),
('2021103094', 'Ripaldi Damara', '', '', 1, '', '', 'AVWLPSYEZV', 16, '2020-09-11 13:53:40'),
('2021103095', 'Rini Nur Cahya', '', '', 1, '', '', 'EVHZDKJHYP', 16, '2020-09-11 13:53:40'),
('2021103096', 'Winda Sitie Noer Afna', '', '', 1, '', '', 'CKJVYZXXKB', 16, '2020-09-11 13:53:40'),
('2021103097', 'Yuli Nuraeni', '', '', 1, '', '', 'RQEOQMSDQB', 16, '2020-09-11 13:53:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian`
--

CREATE TABLE `ujian` (
  `id` int NOT NULL,
  `matpel_id` int NOT NULL,
  `nama_ujian` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_dibuka` datetime NOT NULL,
  `tgl_ditutup` datetime DEFAULT NULL,
  `type` int DEFAULT NULL,
  `waktu` int NOT NULL,
  `pin` int NOT NULL,
  `dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ujian`
--

INSERT INTO `ujian` (`id`, `matpel_id`, `nama_ujian`, `tgl_dibuka`, `tgl_ditutup`, `type`, `waktu`, `pin`, `dibuat`) VALUES
(1, 1, 'asd', '2021-01-14 04:17:57', '2021-01-16 04:18:00', 2, 10, 123, '2021-01-14 21:18:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian_item`
--

CREATE TABLE `ujian_item` (
  `id` int NOT NULL,
  `ujian_id` int NOT NULL,
  `banksoal_id` int NOT NULL,
  `poin` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ujian_item`
--

INSERT INTO `ujian_item` (`id`, `ujian_id`, `banksoal_id`, `poin`) VALUES
(1, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `virtual_classes`
--

CREATE TABLE `virtual_classes` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_id` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` int NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `downloadable` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `status` int NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `virtual_classes`
--

INSERT INTO `virtual_classes` (`id`, `name`, `guru_id`, `kelas_id`, `link`, `downloadable`, `start_date`, `end_date`, `status`, `updated_at`, `created_at`) VALUES
(3, 'Kelas Siang', '001', 14, 'https://meet.jit.si/B9aSTxS4CQ', 'http://127.0.0.1:8001/storage/product/wcX9HuhxKn.doc', '2021-01-13 11:39:54', '2021-01-15 11:39:56', 0, '2021-01-14', '2021-01-14'),
(4, 'anotomi', '001', 14, 'https://meet.jit.si/KrrRVa3mba', NULL, '2021-01-14 11:55:12', '2021-01-14 12:55:39', 0, '2021-01-14', '2021-01-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `virtual_class_attendances`
--

CREATE TABLE `virtual_class_attendances` (
  `id` int NOT NULL,
  `virtual_class_id` int NOT NULL,
  `present_pin` int DEFAULT NULL,
  `sick_pin` int DEFAULT NULL,
  `permission_pin` int DEFAULT NULL,
  `status` int NOT NULL,
  `siswa_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `virtual_class_attendances`
--

INSERT INTO `virtual_class_attendances` (`id`, `virtual_class_id`, `present_pin`, `sick_pin`, `permission_pin`, `status`, `siswa_id`, `created_at`, `updated_at`) VALUES
(9, 3, 7641, 5527, 7687, 1, '10515211', '2021-01-14', '2021-01-14'),
(10, 4, 8560, 5582, 7443, 4, '10515211', '2021-01-14', '2021-01-14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banksoal`
--
ALTER TABLE `banksoal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matpel_id` (`matpel_id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ujian_id` (`ujian_id`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `jawaban_item`
--
ALTER TABLE `jawaban_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawaban_id` (`jawaban_id`),
  ADD KEY `ujian_item_id` (`ujian_item_id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rombel_id_fk` (`rombel_id`),
  ADD KEY `kelas_id_fk` (`kelas_id`);

--
-- Indeks untuk tabel `matpel`
--
ALTER TABLE `matpel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_id` (`kelas_id`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rombel`
--
ALTER TABLE `rombel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `kelas_id` (`kelas_id`);

--
-- Indeks untuk tabel `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matpel_id` (`matpel_id`);

--
-- Indeks untuk tabel `ujian_item`
--
ALTER TABLE `ujian_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ujian_id` (`ujian_id`),
  ADD KEY `banksoal_id` (`banksoal_id`);

--
-- Indeks untuk tabel `virtual_classes`
--
ALTER TABLE `virtual_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guru_id` (`guru_id`),
  ADD KEY `kelas_id` (`kelas_id`);

--
-- Indeks untuk tabel `virtual_class_attendances`
--
ALTER TABLE `virtual_class_attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `virtual_class_id` (`virtual_class_id`),
  ADD KEY `siswa_id` (`siswa_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `banksoal`
--
ALTER TABLE `banksoal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jawaban_item`
--
ALTER TABLE `jawaban_item`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `matpel`
--
ALTER TABLE `matpel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `rombel`
--
ALTER TABLE `rombel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ujian_item`
--
ALTER TABLE `ujian_item`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `virtual_classes`
--
ALTER TABLE `virtual_classes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `virtual_class_attendances`
--
ALTER TABLE `virtual_class_attendances`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `banksoal`
--
ALTER TABLE `banksoal`
  ADD CONSTRAINT `banksoal_ibfk_1` FOREIGN KEY (`matpel_id`) REFERENCES `matpel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jawaban_item`
--
ALTER TABLE `jawaban_item`
  ADD CONSTRAINT `jawaban_item_ibfk_1` FOREIGN KEY (`jawaban_id`) REFERENCES `jawaban` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jawaban_item_ibfk_2` FOREIGN KEY (`ujian_item_id`) REFERENCES `ujian_item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`rombel_id`) REFERENCES `rombel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `matpel`
--
ALTER TABLE `matpel`
  ADD CONSTRAINT `matpel_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matpel_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ujian`
--
ALTER TABLE `ujian`
  ADD CONSTRAINT `ujian_ibfk_1` FOREIGN KEY (`matpel_id`) REFERENCES `matpel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ujian_item`
--
ALTER TABLE `ujian_item`
  ADD CONSTRAINT `ujian_item_ibfk_1` FOREIGN KEY (`ujian_id`) REFERENCES `ujian` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ujian_item_ibfk_2` FOREIGN KEY (`banksoal_id`) REFERENCES `banksoal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `virtual_classes`
--
ALTER TABLE `virtual_classes`
  ADD CONSTRAINT `virtual_classes_ibfk_1` FOREIGN KEY (`guru_id`) REFERENCES `guru` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `virtual_classes_ibfk_2` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `virtual_class_attendances`
--
ALTER TABLE `virtual_class_attendances`
  ADD CONSTRAINT `virtual_class_attendances_ibfk_1` FOREIGN KEY (`virtual_class_id`) REFERENCES `virtual_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `virtual_class_attendances_ibfk_2` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
