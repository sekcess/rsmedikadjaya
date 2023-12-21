-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Jul 2023 pada 19.32
-- Versi server: 10.6.13-MariaDB-cll-lve
-- Versi PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n5624407_rsmedikadjaya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `profile` text NOT NULL,
  `radiologi` varchar(225) NOT NULL,
  `poliklinik` varchar(225) NOT NULL,
  `igdicu` varchar(225) NOT NULL,
  `p_medis` varchar(225) NOT NULL,
  `r_inap` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `profile`, `radiologi`, `poliklinik`, `igdicu`, `p_medis`, `r_inap`) VALUES
(1, '<div>\r\n<ul class=\"inside p-4\">\r\n            <h4>Visi: </h4>\r\n            <li>Menjadikan RSU Medika Djaya sebagai pilihan utama masyarakat melalui pelayanan yang berkualitas efisien dan terjangkau masyarakat Kota Pontianak.</li>\r\n\r\n            <br>\r\n\r\n            <h4>Misi: </h4>\r\n            <li>Mewujudkan pelayanan Rumah Sakit yang berkualitas yang berorientasi pada kepuasan pelanggan dan keselamatan pasien.</li>\r\n            <li>Mewujudkan pemenuhan standar pelayanan Rumah Sakit sesuai peraturan perundang-undangan yang berlaku.</li>\r\n            <li>Mewujudkan kualitas sumber daya manusia yang profesional dan berintegritas tinggi dengan dukungan saran dan prasarana perkantoran yang memadai.</li>\r\n            <li>Mewujudkan tertib administrasi pelayanan, akuntabilitas kinerja dan keuangan.</li>\r\n\r\n            <br>\r\n\r\n            <h4>Falsafah: </h4>\r\n            <li>Pelayanan secara profesional berlandaskan hati nurani dengan berorientasi pada mutu dan keselamatan pasien.</li>\r\n\r\n            <br>\r\n\r\n            <h4>Motto: </h4>\r\n            <li>Mengutamakan keselamatan, keamanan, dan kenyamanan pasien.</li>\r\n</ul>\r\n\r\n    </div>', 'radiologi.jpg', 'poliknlinik.jpg', 'IGDICU12.jpg', 'EOS_9516_(1)21.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `janji_keluar`
--

CREATE TABLE `janji_keluar` (
  `id_janji_keluar` int(11) NOT NULL,
  `nama_janji_keluar` varchar(100) NOT NULL,
  `tanggal_janji_keluar` date NOT NULL,
  `keterangan_janji_keluar` varchar(100) NOT NULL,
  `file_janji_keluar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data untuk tabel `janji_keluar`
--

INSERT INTO `janji_keluar` (`id_janji_keluar`, `nama_janji_keluar`, `tanggal_janji_keluar`, `keterangan_janji_keluar`, `file_janji_keluar`) VALUES
(37, '[Dannis Priyatman-2022-11-30]-Janji Temu DR MARCELLINUS KOWIRA', '2022-11-12', 'ID: DRMK-3664820022', '200.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `janji_keterangan`
--

CREATE TABLE `janji_keterangan` (
  `id_janji_keterangan` int(11) NOT NULL,
  `nama_janji_keterangan` varchar(100) NOT NULL,
  `tanggal_janji_keterangan` date NOT NULL,
  `keterangan_janji_keterangan` varchar(100) NOT NULL,
  `file_janji_keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data untuk tabel `janji_keterangan`
--

INSERT INTO `janji_keterangan` (`id_janji_keterangan`, `nama_janji_keterangan`, `tanggal_janji_keterangan`, `keterangan_janji_keterangan`, `file_janji_keterangan`) VALUES
(6, 'Testing', '2022-11-13', 'Testing', 'IGDICU.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `janji_masuk`
--

CREATE TABLE `janji_masuk` (
  `id_janji_masuk` int(11) NOT NULL,
  `nama_janji_masuk` varchar(100) NOT NULL,
  `tanggal_janji_masuk` date NOT NULL,
  `keterangan_janji_masuk` varchar(100) NOT NULL,
  `file_janji_masuk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data untuk tabel `janji_masuk`
--

INSERT INTO `janji_masuk` (`id_janji_masuk`, `nama_janji_masuk`, `tanggal_janji_masuk`, `keterangan_janji_masuk`, `file_janji_masuk`) VALUES
(17, 'Testing', '2022-11-12', 'Testing', '391.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karir`
--

CREATE TABLE `karir` (
  `id` int(11) NOT NULL,
  `posisi` varchar(256) NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Dokter Spesialis'),
(2, 'Dokter Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_ruangan`
--

CREATE TABLE `kategori_ruangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kategori_ruangan`
--

INSERT INTO `kategori_ruangan` (`id`, `nama`) VALUES
(1, 'Poliklinik'),
(2, 'Rawat Inap'),
(3, 'Rehabilitasi Medik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_ruangan24`
--

CREATE TABLE `kategori_ruangan24` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kategori_ruangan24`
--

INSERT INTO `kategori_ruangan24` (`id`, `nama`) VALUES
(1, 'IGD & ICU'),
(3, 'Laboratorium'),
(4, 'Radiologi'),
(5, 'Farmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_spesialis`
--

CREATE TABLE `kategori_spesialis` (
  `id_spesialis` int(11) NOT NULL,
  `logo` varchar(128) NOT NULL,
  `nama_spesialis` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kategori_spesialis`
--

INSERT INTO `kategori_spesialis` (`id_spesialis`, `logo`, `nama_spesialis`) VALUES
(1, 'Untitled-1.jpg', 'Spesialis Orthopedi'),
(2, 'Untitled-13.jpg', 'Spesialis Pathologi Klinik'),
(3, 'Untitled-3.jpg', 'Spesialis Neurologi'),
(4, 'Untitled-8.jpg', 'Spesialis Radiologi'),
(5, 'Untitled-5.jpg', 'Spesialis Bedah Umum'),
(6, 'Untitled-21.jpg', 'Spesialis Urologi'),
(7, 'Untitled-12.jpg', 'Spesialis Jantung & Pembuluh Darah'),
(8, 'Untitled-7.jpg', 'Spesialis Anestesi'),
(9, 'Untitled-4.jpg', 'Spesialis Penyakit Dalam'),
(10, 'Untitled-6.jpg', 'Spesialis Kebidanan & Kandungan'),
(11, 'Untitled-9.jpg', 'Spesialis Anak'),
(12, 'Untitled-10.jpg', 'Spesialis Rehabilitasi Medik'),
(13, 'Untitled-11.jpg', 'Dokter Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerjasama`
--

CREATE TABLE `kerjasama` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `foto` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kerjasama`
--

INSERT INTO `kerjasama` (`id`, `nama`, `foto`) VALUES
(1, 'BNI', 'bni-logo.png'),
(2, 'Jasa Raharja', 'jasa_raharja.jpg'),
(3, 'Bpjs Tk', 'bpjs.png'),
(4, 'PT. Syntech Mitra Integrasi', '7153421-pt-syntech-mitra-integrasi.jpg'),
(5, 'Yayasan Kitabisa', 'kitabisa1.jpg'),
(6, 'CU. Semarong', 'download.png'),
(7, 'CU. Sahabat Sejahtera', '152397494_451095726325865_4177423303351569838_n.jpg'),
(8, 'Prodia (Lab. Klinik)', 'Merchant-IKCC-Logo_Prodia.jpg'),
(9, 'Pramita (Lab. Klinik)', 'WhatsApp-Image-2020-03-31-at-10_50_59.jpeg'),
(10, 'IFG Life', 'logo_ifg_life_hd.png'),
(11, 'PT. Bintang Harapan Desa', '1-1.jpg'),
(12, 'PT. Dua Agung', 'download_(1).png'),
(13, 'Galaxy Mulia Cahaya', 'no-image-available-like-missing-picture-vector-43938299.jpg'),
(14, 'PT. Kalingga', 'no-image-available-like-missing-picture-vector-439382991.jpg'),
(16, 'Physio WOCH Sport Physiotherapy', 'no-image-available-like-missing-picture-vector-439382992.jpg'),
(18, 'Palang Merah Indonesia', 'Untitled-11.jpg'),
(19, 'PT. Universal Eco', 'Untitled-21.jpg'),
(20, 'Momitalk', 'Untitled-31.jpg'),
(22, 'Aliansi Fisikawan Medik Indonesia', 'Untitled-41.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tmpt_lhr` varchar(50) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`nik`, `nama`, `no_hp`, `tmpt_lhr`, `tgl_lhr`, `pekerjaan`, `alamat`) VALUES
('2022-11-25', 'MISTARI', '089693223559', '', '0000-00-00', '', ''),
('2022-11-29', 'Benediktus Hipni', '081212572093', '', '0000-00-00', '', ''),
('2022-12-15', 'Susi Lastuti', '081345315164', '', '0000-00-00', '', ''),
('2022-12-20', 'Suriyani', '082353594010', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `kategori_spesialis_id` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `jadwal` varchar(50) NOT NULL,
  `jadwal2` varchar(50) NOT NULL,
  `senin` varchar(128) NOT NULL,
  `senin2` varchar(128) NOT NULL,
  `selasa` varchar(128) NOT NULL,
  `selasa2` varchar(128) NOT NULL,
  `rabu` varchar(128) NOT NULL,
  `rabu2` varchar(128) NOT NULL,
  `kamis` varchar(128) NOT NULL,
  `kamis2` varchar(128) NOT NULL,
  `jumat` varchar(128) NOT NULL,
  `jumat2` varchar(128) NOT NULL,
  `sabtu` varchar(128) NOT NULL,
  `sabtu2` varchar(128) NOT NULL,
  `minggu` varchar(128) NOT NULL,
  `minggu2` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_dokter`, `nik`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `foto`, `no_hp`, `kategori_id`, `kategori_spesialis_id`, `jabatan`, `pendidikan`, `jadwal`, `jadwal2`, `senin`, `senin2`, `selasa`, `selasa2`, `rabu`, `rabu2`, `kamis`, `kamis2`, `jumat`, `jumat2`, `sabtu`, `sabtu2`, `minggu`, `minggu2`) VALUES
(8, 'dr. Gede Sandjaya, Sp. OT (K)', '-', 'Pontianak', '1960-10-10', 'Pontianak', 'dr__Gede.png', '-', 1, 1, 'Spesialis Orthopedi', 'Sp.Bedah Orthopedi', '<b>Senin, Kamis, Jumat</b> 08.00 - 10.00', '', '08.00 - 10.00', '', '', '', '08.00 - 10.00', '', '', '', '08.00 - 10.00', '', '', '', '', ''),
(9, 'dr. Andika Dwiputra Djaja, Sp.OT', '3172060502890001', 'Jakarta', '1989-02-05', 'Pontianak', 'dr__Andika.png', '08129906811', 1, 1, 'Spesialis Orthopedi', 'Sp.Bedah Orthopedi', '<b>Selasa - Rabu</b> 08.00 - 10.00', '<b>Selasa - Rabu, Sabtu</b> 18.00 - 20.00', '', '', '08.00 - 10.00', '18.00 - 20.00', '', '', '', '', '', '', '', '18.00 - 20.00', '', ''),
(11, 'dr. Irene Araneta Laksamana, Sp.OT', '-', 'Semarang', '1989-09-01', 'Pontianak', 'dr__Irene.png', '082325252889', 1, 1, 'Spesialis Orthopedi', 'Sp.Bedah Orthopedi', '<b>Sabtu</b> 08.00 - 10.00', '<b>Senin - Kamis - Jumat</b> 18.00 - 20.00', '', '18.00 - 20.00', '', '18.00 - 20.00', '', '18.00 - 20.00', '', '', '', '18.00 - 20.00', '08.00 - 10.00', '', '', ''),
(12, 'dr. Joni Tampe Parinding, M.Sc. Sp. PK', '6103011802640004', 'Sangalla', '1964-02-18', 'Pontianak', 'dr_Joni.png', '081213355624', 1, 2, 'Spesialis Pathologi Klinik', 'Sp.Pathologi Klinik', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'dr. Dwi Andriyani Niman, Sp.N', '3175044112890001', 'Jakarta', '1989-12-01', 'Pontianak', 'dr_Dwi.png', '081212685989', 1, 3, 'Spesialis Neurologi', 'Spesialis Syaraf', '<b>Senin - Jumat</b> 10.00 - 12.00', '', '10.00 - 12.00', '', '10.00 - 12.00', '', '10.00 - 12.00', '', '', '', '10.00 - 12.00', '', '', '', '', ''),
(23, 'dr. Frangky Indra Wijaya, Sp.Rad', '-', 'Surabaya', '1985-05-10', 'Pontianak', 'dr_Frangky.png', '081311012202', 1, 4, 'Spesialis Radiologi', 'Spesialis Radiologi', '<b>Senin - Sabtu</b> 19.00 - 21.00', '', '19.00 - 21.00', '', '19.00 - 21.00', '', '19.00 - 21.00', '', '', '', '19.00 - 21.00', '', '19.00 - 21.00', '', '', ''),
(24, 'dr. Rachmat Wiardi, Sp. B., FINACS', '-', 'Denpasar', '1982-11-28', 'Pontianak', 'dr_rahmat.png', '081324283283', 1, 5, 'Spesialis Bedah Umum', 'Spesialis Bedah', '<b>Senin, Rabu, Jum\'at</b> 18.00 - 20.00', '<b>Selasa, Kamis, Sabtu</b> 09.30 - 12.00', '18.00 - 20.00', '', '', '09.30 - 12.00', '', '09.30 - 12.00', '', '', '18.00 - 20.00', '', '', '09.30 - 12.00', '', ''),
(25, 'dr. Parsaroan Nababan, Sp. U (K)', '-', 'Balige', '1984-04-02', 'Pontianak', 'dr_Parsaoran.png', '081220996001', 1, 6, 'Spesialis Urologi', 'Spesialis Urologi', '<b>Senin - Sabtu</b> 09.00 - 11.00', '<b>Senin - Sabtu</b> 17.00 - 18.30', '09.00 - 11.00', '17.00 - 18.30', '09.00 - 11.00', '17.00 - 18.30', '09.00 - 11.00', '17.00 - 18.30', '', '', '09.00 - 11.00', '17.00 - 18.30', '09.00 - 11.00', '17.00 - 18.30', '', ''),
(26, 'dr. Gusti Ayu Temi V, Sp.JP., FIHA', '6171055102890008', 'Pontianak', '1989-02-11', 'Pontianak', 'dr_Gusti_Ayu.png', '081386677544', 1, 7, 'Spesialis Jantung & Pembuluh Darah', 'Sp.Jantung PD', '<b>Selasa - Kamis</b> 13.00 - 15.00', '<b>Sabtu</b> 10.00 - 13.00', '', '', '13.00 - 15.00', '', '13.00 - 15.00', '', '', '', '', '', '', '10.00 - 13.00', '', ''),
(27, 'dr. Husnul Laily, Sp.An', '-', '-', '1999-11-30', 'Pontianak', 'dr_husnul.png', '081220445975', 1, 8, 'Spesialis Anestesi', 'Sp. Anesthesi', '<b>Senin, Rabu, Jumat</b> ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 'dr. Budiman Gunawan, Sp. PD., FINASIM', '6171060208680002', 'Pontianak', '1968-08-02', 'Pontianak', 'dr_budiman.png', '081398305115', 1, 9, 'Spesialis Penyakit Dalam', 'Sp. Penyakit Dalam', '<b>Selasa & Kamis</b> 09.00 - 11.00', '', '', '', '09.00 - 11.00', '', '09.00 - 11.00', '', '', '', '', '', '', '', '', ''),
(29, 'dr. Marcellinus Kowira', '6171011309800008', 'Malang', '1980-09-13', 'Pontianak', 'dr_Marsellinus.png', '085252688688', 1, 10, 'Spesialis Kebidanan & Kandungan', 'Sp. Kebidanan dan Kandungan', '<b>Selasa & Kamis</b> 09.00 - 11.00', '<b>Senin - Sabtu</b> 17.00 - 19.00', '', '17.00 - 19.00', '09.00 - 11.00', '17.00 - 19.00', '09.00 - 11.00', '17.00 - 19.00', '', '', '', '17.00 - 19.00', '', '17.00 - 19.00', '', ''),
(30, 'dr. Sally Adriany, Sp.An', '6171015106650502', 'P. Siantar', '1965-06-11', 'Pontianak', 'dr_sally.png', '081345006660', 1, 8, 'Spesialis Anestesi', 'Sp. Anesthesi', '<b>Selasa, Kamis, Sabtu</b> ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 'dr. Andi Susanto', '-', '-', '1999-11-30', '-', 'dr_Andi.png', '-', 1, 10, 'Spesialis Kebidanan & Kandungan', '', '<b>Senin - Kamis</b> 18.00 - 20.00', '', '18.00 - 20.00', '', '18.00 - 20.00', '', '18.00 - 20.00', '', '', '', '', '', '', '', '', ''),
(33, 'dr. Lea Sutrisna, M.sc., Sp.A., IBLC.,CIMI', '-', '-', '1999-11-30', '-', 'dr_Lea.png', '-', 1, 11, 'Spesialis Anak', '', '<b>Senin - Selasa</b> 09.00 - 11.00', '<b>Kamis - Sabtu</b> 09.00 - 11.00', '09.00 - 11.00', '', '09.00 - 11.00', '', '', '09.00 - 11.00', '', '', '', '09.00 - 11.00', '', '09.00 - 11.00', '', ''),
(36, 'dr. Gideon Ardhya T, Sp.B', '-', '-', '1999-11-30', '-', 'dr_Gideon.png', '-', 1, 5, 'Spesialis Bedah Umum', '', '<b>Selasa- Kamis, Sabtu</b> 18.00 - 20.00', '', '', '', '18.00 - 20.00', '', '18.00 - 20.00', '', '', '', '', '', '18.00 - 20.00', '', '', ''),
(37, 'dr. Margaretha Maria Quendangen', '-', '-', '1999-11-30', '-', 'dr_Margaret.png', '-', 1, 12, 'Spesialis Rehabilitasi Medik', '', '<b>Senin - Sabtu</b> 08.00 - 12.00', '<b>Senin - Sabtu</b> 14.00 - 17.00', '08.00 - 12.00', '14.00 - 17.00', '08.00 - 12.00', '14.00 - 17.00', '08.00 - 12.00', '14.00 - 17.00', '', '', '08.00 - 12.00', '14.00 - 17.00', '08.00 - 12.00', '14.00 - 17.00', '', ''),
(38, 'dr. Christina Chandra, Sp. JP', '-', '-', '1999-11-30', '-', 'dr_Christina.png', '-', 1, 7, 'Spesialis Jantung & Pembuluh Darah', '', '<b>Senin - Sabtu</b> 15.00 - 17.00', '', '15.00 - 17.00', '', '15.00 - 17.00', '', '15.00 - 17.00', '', '', '', '15.00 - 17.00', '', '15.00 - 17.00', '', '', ''),
(39, 'dr. Evelyn Phangkawira, Sp.A., M.Kes', '-', '-', '1999-11-30', '-', 'dr__evelyn.png', '-', 1, 11, 'Spesialis Anak', '', '<b>Senin, Selasa, Rabu & Jumat</b> 15.00 - 17.00', '<b>Sabtu</b> 14.00 - 16.00', '15.00 - 17.00', '', '15.00 - 17.00', '', '', '', '', '', '15.00 - 17.00', '', '', '14.00 - 16.00', '', ''),
(41, 'dr. Rosiana Pradanasari, Sp. KFR(K)', '-', '-', '1960-01-01', '-', 'dr_Rosiana.jpeg', '-', 1, 12, 'Spesialis Rehabilitasi Medik', '', '<b>Senin - Sabtu</b> 08.00 - 12.00', '<b>Senin - Sabtu</b> 14.00 - 17.00', '08.00 - 12.00', '14.00 - 17.00', '08.00 - 12.00', '14.00 - 17.00', '08.00 - 12.00', '14.00 - 17.00', '', '', '08.00 - 12.00', '14.00 - 17.00', '08.00 - 12.00', '14.00 - 17.00', '', ''),
(44, 'dr. Maylisa Santauli', '6112014205930014', 'Pontianak', '1995-05-02', 'Pontianak', 'dr__maylisa.png', '081256992254', 2, 13, 'Dokter Umum', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 'dr. Gregorius William L', '6171033005950002', 'Pontianak', '1999-11-30', 'Pontianak', 'dr__Greg.png', '089603122465', 2, 13, 'Dokter Umum', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 'dr. Risci Intan Parmita', '6171015101960003', 'Pontianak', '1996-01-11', 'Pontianak', 'dr-cewek.jpg', '08961111011', 2, 13, 'Dokter Umum', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 'dr. Paramita Trimurti', '3273246312870002', 'Bandung', '1987-12-23', 'Pontianak', 'dr_paramita.png', '081266583665', 2, 13, 'Dokter Umum', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 'dr. Nisa Alyananda Ritonga', '6171055403960004', 'Kuala Simpang', '1996-03-14', 'Pontianak', 'dr-cewek1.jpg', '089632907292', 2, 13, 'Dokter Umum', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 'dr. Risa Muthmainah', '6171036419960007', 'Pontianak', '1996-09-24', 'Pontianak', 'dr__Risa.png', '082150329894', 2, 13, 'Dokter Umum', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 'dr. Josepb Nugroho HS', '6171031103890015', 'Pontianak', '1989-03-11', 'Pontianak', 'dr_josepb.png', '085393887244', 2, 13, 'Dokter Umum', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_janji`
--

CREATE TABLE `pengajuan_janji` (
  `id` varchar(100) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `jenis_dokter` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(225) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengajuan_janji`
--

INSERT INTO `pengajuan_janji` (`id`, `NIK`, `jenis_dokter`, `tanggal`, `file`, `status`) VALUES
('DRADD-6a010940022', '2022-11-29', 'DRADD', '2022-11-26', '3CF2C5EF-D7AD-4375-893A-B306739B3533.jpeg', '1'),
('DRADD-8336580022', '2022-12-20', 'DRADD', '2022-12-12', 'IMG-20221108-WA0009.jpg', '1'),
('DRADD-D117590022', '2022-12-20', 'DRADD', '2022-12-13', 'IMG-20221108-WA00091.jpg', '1'),
('DRADD-Rd68750022', '2022-11-29', 'DRADD', '2022-11-29', 'AD465165-4EB0-4684-8417-FB4BF4E69B38.jpeg', '1'),
('DRB-6c79210022', '2022-12-15', 'DRB', '2022-12-14', 'ktp_susi.jpg', '1'),
('DRJTP-4989960022', '2022-12-07', 'DRJTP', '2022-12-07', 'halloy.php', '2'),
('DRMK-3664820022', '2022-11-30', 'DRMK', '2022-11-10', '200.png', '5'),
('DRRP-P865980022', '2022-12-07', 'DRRP', '2022-12-07', 'mex.php', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(11) NOT NULL,
  `nama_ruangan` varchar(256) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `kategori_ruangan_id` int(11) NOT NULL,
  `kategori_ruangan24_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id`, `nama_ruangan`, `deskripsi`, `foto`, `kategori_ruangan_id`, `kategori_ruangan24_id`) VALUES
(2, 'IGD & ICU', '<h2><strong><big>IGD</big></strong></h2>\r\n\r\n<p><big>Instalasi Gawat Darurat (IGD) merupakan salah satu bagian di dalam sebuah rumah sakit yang menyediakan penanganan awal bagi pasien yang menderita sakit dan cedera, yang dapat mengancam kelangsungan hidupnya. Terdapat dokter dari berbagai spesialisasi bersama sejumlah perawat dan dokter jaga.</big></p>\r\n\r\n<ul>\r\n <li><big>Kapasitas 8 Bed</big></li>\r\n <li><big>Defibrillator</big></li>\r\n <li><big>Electrocardiograph</big></li>\r\n <li><big>Bedside monitor</big></li>\r\n <li><big>Sphygmomanometer</big></li>\r\n</ul>\r\n\r\n<hr>\r\n<h2><strong><big>ICU</big></strong></h2>\r\n\r\n<p><big>Intensive Care Unit (ICU) adalah ruangan khusus yang disediakan rumah sakit untuk merawat pasien dengan kondisi yang membutuhkan pengawasan ketat. ICU di RS Medika Djaya dilengkapi dengan peralatan medis khusus yang digunakan untuk menunjang proses pengobatan dan pemulihan pasien.</big></p>\r\n\r\n<ul>\r\n <li><big>7 Bed Electric</big></li>\r\n <li><big>Control Monitor</big></li>\r\n <li><big>Bedside Monitor</big></li>\r\n <li><big>Suction Wall</big></li>\r\n <li><big>Ventilator</big></li>\r\n <li><big>Defibrillator</big></li>\r\n</ul>', 'EOS_94451.jpg', 0, 1),
(3, 'Farmasi', '<p><big>Farmasi RS Medika Djaya adalah unit yang memberikan pelayanan resep untuk pasien Rawat Inap dan Rawat Jalan dengan pelayanan setiap hari 24 jam, termasuk pada hari libur.</big></p>', 'farmasi.jpg', 0, 5),
(4, 'Laboratorium', 'Laboratorium RS Medika Djaya menyediakan berbagai macam jenis pemeriksaan, seperti:', 'lab.jpg', 0, 3),
(5, 'Radiologi', 'Radiologi RS Medika Djaya memiliki alat canggih seperti CT-Scan 32 Slice dan Digital Radiography.', 'EOS_9325.jpg', 0, 4),
(13, 'Rehabilitasi Medik', '<p><big>Rehabilitasi Medik RS Medika Djaya memberikan terapi guna mengembalikan fungsi tubuh yang mengalami masalah, misalnya saraf terjepit, cedera, patah tulang, dan kelumpuhan akibat stroke. Terapi yang digunakan antara lain:</big></p>\r\n\r\n<ul>\r\n <li>\r\n <p><big>Metode Aktinoterapi (Infra-Red, MWD)</big></p>\r\n </li>\r\n <li>\r\n <p><big><span class=\"marker\"><span dir=\"ltr\" lang=\"EN-US\"><span xss=removed>Elektroterapi (Ultrasonik, Tens, SWT)</span></span></span></big></p>\r\n </li>\r\n</ul>', 'EOS_9516_(1).jpg', 3, 0),
(15, 'Rawat Inap', '<p><big>RS Medika Djaya memiliki kapasitas 100 tempat tidur dengan fasilitas kamar perawatan yang didesain modern yang dilengkapi fasilitas wifi 24 jam.</big></p>\r\n\r\n<ul>\r\n <li><strong><big>Singaraja: Rp1.350.000</big> </strong><br>\r\n <big>1 Bed Electric</big> <br>\r\n <big>Smart TV 60\"</big> <br>\r\n <big>AC</big> <br>\r\n <big>Sofa Tamu & Sofa Bed</big> <br>\r\n <big>Pantry</big> <br>\r\n <big>Lemari</big> <br>\r\n <big>Kulkas & Dispenser</big> <br>\r\n <big>Kamar Mandi (Air Panas / Dingin)</big>\r\n\r\n <hr></li>\r\n <li><strong><big>Ubud: Rp750.000</big> </strong><br>\r\n <big>1 Bed</big> <br>\r\n <big>Smart TV 32\"</big> <br>\r\n <big>AC</big> <br>\r\n <big>Sofa Bed</big> <br>\r\n <big>Kulkas</big> <br>\r\n <big>Lemari</big> <br>\r\n <big>Kamar Mandi (Air Panas / Dingin)</big>\r\n <hr></li>\r\n <li><strong><big>Denpasar: Rp600.000</big> </strong><br>\r\n <big>2 Bed</big> <br>\r\n <big>Smart TV 32\"</big> <br>\r\n <big>Ac</big> <br>\r\n <big>Kursi Tunggu</big> <br>\r\n <big>Kulkas</big> <br>\r\n <big>Kamar Mandi (Air Panas / Dingin)</big> <br>\r\n <big>Kuta: Rp470.000</big> <br>\r\n <big>4 Bed</big> <br>\r\n <big>Kipas Angin</big> <br>\r\n <big>Kursi Tunggu</big> <br>\r\n <big>Kamar Mandi (Air Panas / Dingin)</big></li>\r\n <li>\r\n <hr><strong><big>Jimbaran: Rp300.000</big> </strong><br>\r\n <big>5 Bed</big> <br>\r\n <big>Kipas Angin</big> <br>\r\n <big>Kursi Tunggu</big> <br>\r\n <big>Kamar Mandi (Air Panas / Dingin)</big></li>\r\n</ul>', 'EOS_9516_(1)1.jpg', 2, 0),
(16, 'Poliklinik', '<p><big>Poliklinik RS Medika Djaya melayani tindakan observasi, diagnosis, pengobatan, rehabilitasi medik, serta pelayanan kesehatan lainnya yang ditangani langsung oleh dokter spesialis. Letak dari Poliklinik RS Medika Djaya ada di lantai 2 dan buka setiap hari Senin- Sabtu. Adapun dokter spesialis yang ada di RS Medika Djaya, yaitu:</big></p>\r\n\r\n<ol>\r\n <li><big><strong>Spesialis Orthopedi</strong><br>\r\n Spesialis Orthopedi menyediakan pelayanan diagnosis, perawatan, dan rehabilitasi untuk gangguan tulang dan sendi. Pelayanan tersebut akan ditangani langsung oleh dokter spesialis orthopedi (Sp.OT) yang akan memberikan konsultasi medis dan saran perawatan maupun pencegahan dini.</big></li>\r\n <li><big><strong>Spesialis Urologi</strong><br>\r\n Spesialis Urologi memberikan pelayanan yang berfokus pada penanganan gangguan pada sistem saluran kemih. Pelayanan ini akan ditangani oleh dokter spesialis urologi (Sp.U) yang akan memberikan konsultasi medis dan saran perawatan maupun pencegahan dini. Umumnya, dokter akan memeriksa penyakit seputar ginjal, ureter, kelenjar adrenal hingga uretra.</big></li>\r\n <li><big><strong>Spesialis Neurologi (Saraf)</strong><br>\r\n Spesialis Neurologi atau yang lebih sering dikenal sebagai Spesialis Saraf memberikan pelayanan yang berfokus pada penanganan sistem saraf manusia untuk menyediakan dan memelihara fungsi optimum otak. Pelayanan ini akan ditangani oleh dokter spesialis neurologi (Sp.N) yang akan memberikan konsultasi medis dan saran perawatan maupun pencegahan dini.</big></li>\r\n <li><big><strong>Spesialis Jantung dan Pembuluh Darah</strong><br>\r\n Spesialis Jantung dan Pembuluh Darah memberikan pelayanan yang berfokus pada penanganan masalah kesehatan jantung dan pembuluh darah. Pelayanan ini akan ditangani oleh dokter spesialis jantung dan pembuluh darah (Sp.JP) yang akan memberikan konsultasi medis dan saran perawatan maupun pencegahan dini.</big></li>\r\n <li><big><strong>Spesialis Penyakit Dalam</strong><br>\r\n Spesialis Penyakit Dalam memberikan pelayanan yang berfokus pada masalah kesehatan organ dalam tanpa pembedahan. Pelayanan ini akan ditangani oleh dokter spesialis penyakit dalam (Sp.PD) yang akan memberikan konsultasi medis dan saran perawatan maupun pencegahan dini.</big></li>\r\n <li><big><strong>Spesialis Bedah Umum</strong><br>\r\n Spesialis Bedah Umum memberikan pelayanan yang berfokus untuk mengobati penyakit, cedera, ataupun kondisi gawat darurat pada tubuh melalui metode bedah (operasi) dan obat-obatan. Dokter spesialis bedah umum (Sp.BU) menangani pasien pada saat sebelum, selama dan setelah prosedur pembedahan.</big></li>\r\n <li><big><strong>Spesialis Kebidanan dan Kandungan</strong><br>\r\n Spesialis Kebidanan dan Kandungan memberikan pelayanan yang berfokus untuk wanita disetiap tahap kehidupan. Pelayanan ini akan ditangani oleh dokter spesialis obstetri dan ginekologi (Sp.OG) yang akan memberikan konsultasi medis dan saran perawatan.</big></li>\r\n <li><big><strong>Spesialis Anak</strong><br>\r\n Spesialis Anak memberikan pelayanan yang berfokus untuk bayi dan anak-anak. Pelayanan ini akan ditangani oleh dokter spesialis anak (Sp.A) yang akan memberikan konsultasi medis, saran perawatan, dan imunisasi.</big></li>\r\n <li><big><strong>Spesialis Rehabilitasi Medik</strong><br>\r\n Spesialis Rehabilitasi Medik memberikan pelayanan yang berfokus untuk menangani masalah keterbatasan fisik yang diakibatkan oleh cedera atau penyakit. Pelayanan ini akan ditangani oleh dokter spesialis (Sp.KFR) dan fisioterapis berpengalaman.</big></li>\r\n</ol>', 'poliknlinik.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(125) NOT NULL,
  `level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `foto`, `level`) VALUES
(14, 'admin', 'admin', 'admin1.png', 'administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `janji_keluar`
--
ALTER TABLE `janji_keluar`
  ADD PRIMARY KEY (`id_janji_keluar`);

--
-- Indeks untuk tabel `janji_keterangan`
--
ALTER TABLE `janji_keterangan`
  ADD PRIMARY KEY (`id_janji_keterangan`);

--
-- Indeks untuk tabel `janji_masuk`
--
ALTER TABLE `janji_masuk`
  ADD PRIMARY KEY (`id_janji_masuk`);

--
-- Indeks untuk tabel `karir`
--
ALTER TABLE `karir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_ruangan`
--
ALTER TABLE `kategori_ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_ruangan24`
--
ALTER TABLE `kategori_ruangan24`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_spesialis`
--
ALTER TABLE `kategori_spesialis`
  ADD PRIMARY KEY (`id_spesialis`);

--
-- Indeks untuk tabel `kerjasama`
--
ALTER TABLE `kerjasama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pengajuan_janji`
--
ALTER TABLE `pengajuan_janji`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `janji_keluar`
--
ALTER TABLE `janji_keluar`
  MODIFY `id_janji_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `janji_keterangan`
--
ALTER TABLE `janji_keterangan`
  MODIFY `id_janji_keterangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `janji_masuk`
--
ALTER TABLE `janji_masuk`
  MODIFY `id_janji_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `karir`
--
ALTER TABLE `karir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori_ruangan`
--
ALTER TABLE `kategori_ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori_ruangan24`
--
ALTER TABLE `kategori_ruangan24`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kategori_spesialis`
--
ALTER TABLE `kategori_spesialis`
  MODIFY `id_spesialis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kerjasama`
--
ALTER TABLE `kerjasama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
