-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql109.infinityfree.com
-- Waktu pembuatan: 23 Agu 2025 pada 22.29
-- Versi server: 11.4.7-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_38924760_db_toko_ikan_codex`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fish`
--

CREATE TABLE `fish` (
  `fish_id` int(11) NOT NULL,
  `fish_name` varchar(50) DEFAULT NULL,
  `price_per_kg` int(11) DEFAULT NULL,
  `stock_kg` int(11) DEFAULT NULL,
  `jenis` varchar(20) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `fish`
--

INSERT INTO `fish` (`fish_id`, `fish_name`, `price_per_kg`, `stock_kg`, `jenis`, `gambar`, `deskripsi`) VALUES
(1, 'Ikan Tuna', 50000, 100, 'laut', 'tuna.png', 'Ikan laut berukuran besar, daging berwarna merah segar, kaya protein dan omega-3. Hidup di perairan dalam, sering dijual segar atau kalengan.'),
(2, 'Ikan Salmon', 80000, 50, 'laut', 'salmon.png', 'Ikan bermigrasi dengan daging oranye kemerahan, tinggi omega-3. Dibudidayakan atau ditangkap di laut Atlantik/Pasifik, populer untuk sushi.'),
(3, 'Ikan Kakap', 60000, 70, 'laut', 'kakap.png', 'Ikan laut/darat berwarna putih keperakan, daging lembut. Jenis kakap merah (snapper) banyak diburu di perairan tropis.'),
(4, 'Ikan Lele', 20000, 150, 'tawar', 'lele.png', 'Ikan air tawar berkumis, tubuh licin, dan bisa hidup di perairan berlumpur. Dibudidayakan secara intensif karena pertumbuhan cepat dan tahan penyakit. Dagingnya empuk, digemari untuk pecel lele. '),
(5, 'Ikan Gurame', 45000, 90, 'tawar', 'gurame.png', 'Ikan air tawar berukuran besar dengan tubuh pipih dan sisik besar. Pertumbuhan lambat tetapi bernilai ekonomi tinggi. Dagingnya tebal dan gurih, sering diolah menjadi gurame bakar atau goreng.'),
(6, 'Ikan Nila', 35000, 120, 'tawar', 'nila.png', 'Ikan air tawar yang mudah dibudidayakan, berkembang biak cepat. Bentuk tubuh pipih dengan warna keabuan. Daging putihnya empuk dan rendah lemak, cocok untuk berbagai masakan.'),
(7, 'Ikan Gabus', 25000, 110, 'tawar', 'gabus.png', 'Ikan predator air tawar dengan kepala besar dan tubuh memanjang. Kandungan albuminnya tinggi, baik untuk penyembuhan luka. Hidup di rawa-rawa dan sawah, dagingnya padat dan berprotein.'),
(8, 'Ikan Mas', 28000, 105, 'tawar', 'mas.png', 'Ikan air tawar populer dengan sisik berwarna keemasan. Dibudidayakan untuk konsumsi dan hias. Tahan terhadap berbagai kondisi air, dagingnya lembut dengan rasa khas.'),
(9, 'Ikan Patin', 35000, 133, 'tawar', 'patin.png', 'Ikan air tawar berbadan panjang tanpa sisik, berkumis pendek. Dibudidayakan di kolam atau keramba. Dagingnya putih, lembut, dan rendah duri, cocok untuk sup atau digoreng.'),
(10, 'Ikan Bawal', 33000, 133, 'tawar', 'bawal.png', 'Ikan air tawar berbentuk pipih dengan warna keperakan. Mirip ikan laut bawal tetapi hidup di air tawar. Dagingnya gurih dan sering diolah menjadi ikan bakar atau goreng.'),
(11, 'Ikan Kerapu', 110000, 35, 'laut', 'kerapu.png', 'Ikan laut demersal berbentuk kekar dengan mulut lebar. Hidup di karang, bernilai ekonomi tinggi. Dagingnya putih, padat, dan rendah lemak. Dibudidayakan dalam keramba apung.'),
(12, 'Ikan Cakalang', 85000, 45, 'laut', 'cakalang.png', 'Ikan pelagis berwarna biru metalik dengan garis-garis gelap. Termasuk keluarga tuna, sering diolah menjadi ikan kayu atau kalengan. Kaya protein dan omega-3.'),
(13, 'Ikan Baronang', 70000, 55, 'laut', 'baronang.png', 'Ikan karang herbivora berwarna keperakan dengan bercak hitam. Dikenal sebagai ikan putih dengan daging lembut. Populer untuk hidangan bakar dan sup.'),
(14, 'Ikan Tongkol', 65000, 70, 'laut', 'tongkol.png', 'Ikan tongkol adalah ikan laut berbentuk ramping dari keluarga tuna, kaya protein dan omega-3. Biasanya dikonsumsi segar, pindang, atau diasap.'),
(15, 'Ikan Sarden', 60000, 120, 'laut', 'sarden.png', 'Ikan kecil berkelompok dengan tubuh ramping. Biasanya dijual dalam bentuk kalengan. Kaya kalsium dan vitamin D. Hidup di perairan pantai yang hangat.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'adi', 'adiadi21'),
(3, 'adam', 'adam123'),
(4, 'vino', 'vino123'),
(5, 'pianbalapmal', 'yanto88'),
(6, 'ici', 'icigg123'),
(10, 'admin1', '12345678'),
(11, 'adi21', 'adiadi21'),
(12, 'adiwinata', 'adiadi'),
(13, 'adz', 'adiadi21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fish`
--
ALTER TABLE `fish`
  ADD PRIMARY KEY (`fish_id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fish`
--
ALTER TABLE `fish`
  MODIFY `fish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
