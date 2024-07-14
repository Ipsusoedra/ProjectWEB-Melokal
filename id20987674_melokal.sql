-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 13 Jul 2024 pada 23.30
-- Versi server: 10.5.20-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20987674_melokal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_about`
--

CREATE TABLE `tb_about` (
  `id_about` int(10) NOT NULL,
  `judul_about` varchar(50) NOT NULL,
  `isi_about` longtext NOT NULL,
  `gambar_about` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_about`
--

INSERT INTO `tb_about` (`id_about`, `judul_about`, `isi_about`, `gambar_about`) VALUES
(53, 'Melokal', 'Kami adalah Reseller resmi dari brand brand ternama seperti Gucci Balenciaga dan Uniqlo', 'melokal.svg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(50) NOT NULL,
  `isi_artikel` longtext NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_penulis` int(11) NOT NULL,
  `id_merek` int(11) NOT NULL,
  `gambar_artikel` longtext NOT NULL,
  `created_at_artikel` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `id_kategori`, `id_penulis`, `id_merek`, `gambar_artikel`, `created_at_artikel`) VALUES
(5, 'Cara Tambah Daya Listrik Online di HP via PLN Mobi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ante metus dictum at tempor commodo ullamcorper a lacus vestibulum. Blandit volutpat maecenas volutpat blandit aliquam etiam erat velit. Rhoncus mattis rhoncus urna neque viverra. Turpis cursus in hac habitasse platea dictumst. Eu lobortis elementum nibh tellus molestie nunc non blandit. Pretium fusce id velit ut tortor pretium viverra suspendisse. Libero justo laoreet sit amet cursus sit amet dictum sit. Lacus vestibulum sed arcu non. Molestie nunc non blandit massa enim nec dui nunc. Mollis nunc sed id semper risus in hendrerit. Vulputate sapien nec sagittis aliquam. Proin libero nunc consequat interdum varius sit amet mattis vulputate. Euismod lacinia at quis risus sed vulputate odio ut.\r\n\r\nImperdiet proin fermentum leo vel orci porta non pulvinar neque. Volutpat sed cras ornare arcu dui. Tellus in hac habitasse platea. Placerat vestibulum lectus mauris ultrices. Dui vivamus arcu felis bibendum ut tristique et. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Amet volutpat consequat mauris nunc congue nisi. Tristique et egestas quis ipsum suspendisse ultrices. Id volutpat lacus laoreet non curabitur gravida arcu ac tortor. Facilisi etiam dignissim diam quis enim lobortis. Fermentum odio eu feugiat pretium nibh ipsum. In nisl nisi scelerisque eu ultrices vitae auctor. A arcu cursus vitae congue mauris rhoncus aenean vel elit. Ipsum suspendisse ultrices gravida dictum. Viverra orci sagittis eu volutpat odio.\r\n\r\nCursus eget nunc scelerisque viverra mauris in. Posuere urna nec tincidunt praesent semper. Non diam phasellus vestibulum lorem sed risus ultricies tristique. Hendrerit gravida rutrum quisque non tellus orci ac auctor. Lobortis mattis aliquam faucibus purus in massa tempor. Sapien nec sagittis aliquam malesuada bibendum arcu vitae. Nunc mattis enim ut tellus elementum sagittis vitae et leo. Commodo quis imperdiet massa tincidunt nunc pulvinar sapien et. Nulla at volutpat diam ut venenatis tellus. Aliquet risus feugiat in ante metus dictum. Risus feugiat in ante metus dictum at tempor commodo ullamcorper. Risus sed vulputate odio ut enim. Fermentum iaculis eu non diam phasellus vestibulum. Lorem ipsum dolor sit amet consectetur adipiscing elit duis. Volutpat consequat mauris nunc congue nisi vitae suscipit tellus. Cursus vitae congue mauris rhoncus aenean vel elit scelerisque.\r\n\r\nAccumsan sit amet nulla facilisi morbi. Mattis nunc sed blandit libero volutpat sed cras. Arcu cursus vitae congue mauris rhoncus aenean. Sit amet tellus cras adipiscing enim. Egestas diam in arcu cursus euismod quis. Volutpat odio facilisis mauris sit amet massa vitae tortor. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Mi proin sed libero enim sed faucibus. Cursus euismod quis viverra nibh cras pulvinar mattis nunc sed. Facilisis sed odio morbi quis commodo odio aenean sed adipiscing. Nunc non blandit massa enim. Ultricies tristique nulla aliquet enim tortor at auctor.\r\n\r\nQuis commodo odio aenean sed adipiscing diam. Nibh nisl condimentum id venenatis a condimentum vitae sapien. Sapien eget mi proin sed libero. Hendrerit gravida rutrum quisque non tellus orci ac. Potenti nullam ac tortor vitae purus faucibus ornare. Tortor aliquam nulla facilisi cras fermentum odio eu. Nibh venenatis cras sed felis eget velit aliquet sagittis. Lacus vestibulum sed arcu non odio euismod. Consectetur a erat nam at lectus. Enim sit amet venenatis urna cursus eget nunc scelerisque. Bibendum ut tristique et egestas quis. Felis bibendum ut tristique et egestas quis ipsum. Morbi blandit cursus risus at ultrices mi tempus. Sed vulputate odio ut enim blandit volutpat maecenas volutpat blandit. Sodales ut etiam sit amet nisl.\r\n\r\nFaucibus pulvinar elementum integer enim neque volutpat ac tincidunt vitae. Placerat in egestas erat imperdiet. Tellus at urna condimentum mattis. Tellus molestie nunc non blandit massa. Commodo odio aenean sed adipiscing diam donec. Malesuada fames ac turpis egestas. Netus et malesuada fames ac turpis egestas maecenas pharetra convallis. Duis ut diam quam nulla porttitor massa id. Duis ultricies lacus sed turpis tincidunt. Sit amet mattis vulputate enim nulla aliquet.\r\n\r\nSed euismod nisi porta lorem mollis aliquam ut porttitor. Id volutpat lacus laoreet non. Habitant morbi tristique senectus et netus et malesuada fames. Senectus et netus et malesuada fames ac turpis egestas. Pretium vulputate sapien nec sagittis aliquam. Convallis a cras semper auctor neque vitae tempus quam pellentesque. At tempor commodo ullamcorper a lacus. Ac ut consequat semper viverra nam libero justo laoreet sit. Nulla pharetra diam sit amet nisl suscipit adipiscing bibendum est. Egestas pretium aenean pharetra magna ac placerat vestibulum lectus mauris. Magna sit amet purus gravida quis blandit. Ac felis donec et odio pellentesque diam. Cras ornare arcu dui vivamus arcu. Id velit ut tortor pretium viverra. Eget sit amet tellus cras adipiscing enim eu. Quis ipsum suspendisse ultrices gravida dictum fusce. Hac habitasse platea dictumst quisque sagittis. Condimentum mattis pellentesque id nibh.\r\n\r\nAccumsan tortor posuere ac ut. Egestas sed tempus urna et pharetra pharetra massa massa. Egestas quis ipsum suspendisse ultrices gravida dictum. Tristique magna sit amet purus gravida. Aliquet bibendum enim facilisis gravida neque convallis a. Nec feugiat in fermentum posuere urna nec tincidunt praesent semper. Posuere lorem ipsum dolor sit amet consectetur. Urna neque viverra justo nec ultrices dui sapien eget mi. Vitae semper quis lectus nulla at volutpat diam ut. Massa tempor nec feugiat nisl pretium. Volutpat lacus laoreet non curabitur. Rhoncus dolor purus non enim praesent elementum. Posuere morbi leo urna molestie at elementum eu facilisis sed. Lobortis scelerisque fermentum dui faucibus in. Vivamus at augue eget arcu. Sed cras ornare arcu dui vivamus arcu felis. Eu consequat ac felis donec et odio. Lectus sit amet est placerat in.\r\n\r\nVitae semper quis lectus nulla at volutpat diam ut venenatis. Eu sem integer vitae justo eget magna. Commodo odio aenean sed adipiscing. Tortor at auctor urna nunc id. Ultricies leo integer malesuada nunc vel risus commodo viverra. Tincidunt arcu non sodales neque. Risus feugiat in ante metus dictum at. Neque egestas congue quisque egestas diam in. Ut aliquam purus sit amet luctus venenatis lectus magna fringilla. Nisi lacus sed viverra tellus in hac habitasse.\r\n\r\nDiam donec adipiscing tristique risus. Amet aliquam id diam maecenas ultricies mi eget mauris. Diam maecenas ultricies mi eget mauris pharetra et ultrices. In nisl nisi scelerisque eu ultrices vitae auctor eu. Nulla porttitor massa id neque. Odio aenean sed adipiscing diam donec. Condimentum id venenatis a condimentum vitae. In arcu cursus euismod quis viverra nibh cras. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Tristique risus nec feugiat in fermentum. Arcu non sodales neque sodales ut etiam sit amet. Id interdum velit laoreet id donec ultrices tincidunt.', 9, 5, 4, 'Artikel 1.jpg', '2023-07-04'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultrices vitae auctor eu augue. Duis at consectetur lorem donec. Scelerisque in dictum non consectetur. Scelerisque fermentum dui faucibus in. Posuere sollicitudin aliquam ultrices sagittis orci. Ornare arcu odio ut sem nulla pharetra. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Eget velit aliquet sagittis id consectetur purus ut faucibus pulvinar. Pulvinar mattis nunc sed blandit libero volutpat sed cras. Et pharetra pharetra massa massa ultricies mi quis.\r\n\r\nFaucibus turpis in eu mi bibendum neque egestas congue quisque. A cras semper auctor neque vitae tempus quam pellentesque. Sodales ut eu sem integer vitae justo eget magna fermentum. Turpis massa sed elementum tempus. Posuere ac ut consequat semper viverra nam. Nibh venenatis cras sed felis eget velit aliquet. Nunc faucibus a pellentesque sit amet porttitor eget dolor morbi. Enim tortor at auctor urna nunc id cursus. Elit sed vulputate mi sit amet mauris. Ipsum dolor sit amet consectetur. Varius vel pharetra vel turpis nunc eget lorem dolor. Sed pulvinar proin gravida hendrerit.\r\n\r\nFacilisi morbi tempus iaculis urna id. Maecenas ultricies mi eget mauris pharetra et ultrices neque. Id semper risus in hendrerit gravida rutrum quisque non. Amet venenatis urna cursus eget. Imperdiet proin fermentum leo vel orci. Viverra orci sagittis eu volutpat odio facilisis mauris. Vulputate mi sit amet mauris commodo quis. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae. Amet nisl purus in mollis nunc sed id semper risus. Vitae auctor eu augue ut. Lectus quam id leo in vitae turpis. Odio facilisis mauris sit amet.\r\n\r\nVelit euismod in pellentesque massa placerat duis ultricies. Lorem sed risus ultricies tristique nulla aliquet enim. Fermentum leo vel orci porta non pulvinar neque laoreet suspendisse. Risus in hendrerit gravida rutrum quisque non. Ultricies tristique nulla aliquet enim tortor at. Sed risus ultricies tristique nulla aliquet. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat. Et magnis dis parturient montes. Tincidunt tortor aliquam nulla facilisi. In iaculis nunc sed augue lacus viverra vitae.\r\n\r\nTurpis nunc eget lorem dolor sed viverra ipsum nunc aliquet. Risus quis varius quam quisque id diam. Lorem donec massa sapien faucibus. Egestas integer eget aliquet nibh praesent tristique magna sit amet. Auctor elit sed vulputate mi sit amet mauris commodo. Scelerisque in dictum non consectetur a. Placerat vestibulum lectus mauris ultrices eros in cursus turpis. Donec massa sapien faucibus et. Pulvinar sapien et ligula ullamcorper malesuada proin libero nunc. Aliquet nibh praesent tristique magna sit amet. Amet risus nullam eget felis eget nunc lobortis mattis. Diam sit amet nisl suscipit adipiscing bibendum est. Eget arcu dictum varius duis at consectetur lorem. Posuere sollicitudin aliquam ultrices sagittis. Bibendum arcu vitae elementum curabitur vitae nunc sed. Id aliquet lectus proin nibh nisl. Porttitor eget dolor morbi non arcu risus quis varius. Vel turpis nunc eget lorem dolor sed viverra ipsum nunc. Magna fringilla urna porttitor rhoncus dolor.\r\n\r\nSagittis aliquam malesuada bibendum arcu vitae elementum curabitur. Feugiat nisl pretium fusce id velit ut tortor pretium. A lacus vestibulum sed arcu non odio. Sed tempus urna et pharetra. Nulla at volutpat diam ut venenatis. Sed velit dignissim sodales ut eu sem integer vitae. Donec adipiscing tristique risus nec feugiat in fermentum posuere. Id diam maecenas ultricies mi eget mauris. Quam lacus suspendisse faucibus interdum posuere lorem ipsum. Pellentesque elit eget gravida cum sociis natoque penatibus.\r\n\r\nNeque vitae tempus quam pellentesque nec nam. In ornare quam viverra orci sagittis eu volutpat odio. Mauris augue neque gravida in fermentum et sollicitudin. In tellus integer feugiat scelerisque varius morbi enim. Aliquet risus feugiat in ante metus. Molestie nunc non blandit massa enim nec dui nunc mattis. Lorem ipsum dolor sit amet consectetur adipiscing. Bibendum enim facilisis gravida neque convallis a. In iaculis nunc sed augue lacus viverra vitae. Mus mauris vitae ultricies leo integer malesuada nunc vel. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Ultrices sagittis orci a scelerisque purus semper. Ut enim blandit volutpat maecenas volutpat blandit aliquam etiam erat. Nunc mattis enim ut tellus elementum sagittis vitae et leo. Vel turpis nunc eget lorem dolor sed viverra ipsum nunc. Cursus metus aliquam eleifend mi in nulla posuere.\r\n\r\nDiam ut venenatis tellus in metus vulputate eu. Feugiat in fermentum posuere urna nec tincidunt. Eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim. Suspendisse interdum consectetur libero id faucibus nisl tincidunt eget nullam. Dui nunc mattis enim ut. Sagittis purus sit amet volutpat consequat mauris nunc. Lobortis scelerisque fermentum dui faucibus in ornare. Ac feugiat sed lectus vestibulum. Sapien eget mi proin sed libero enim sed faucibus. Massa sed elementum tempus egestas. Facilisis gravida neque convallis a cras semper auctor. Ac turpis egestas maecenas pharetra convallis posuere morbi leo urna. Placerat vestibulum lectus mauris ultrices eros. Tempor id eu nisl nunc mi ipsum. Enim neque volutpat ac tincidunt. Justo laoreet sit amet cursus sit amet dictum. In nisl nisi scelerisque eu ultrices vitae auctor.\r\n\r\nDictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras. Facilisis leo vel fringilla est. Volutpat est velit egestas dui. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Vel pretium lectus quam id leo. Eget mi proin sed libero enim. Purus semper eget duis at. Risus at ultrices mi tempus imperdiet nulla malesuada pellentesque elit. Lacus sed turpis tincidunt id aliquet. Mauris in aliquam sem fringilla ut morbi tincidunt augue. Velit aliquet sagittis id consectetur purus. In nulla posuere sollicitudin aliquam. Elit at imperdiet dui accumsan sit amet nulla. Amet nisl purus in mollis nunc sed id. Sed sed risus pretium quam vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada. Non nisi est sit amet facilisis magna etiam. Lacus sed viverra tellus in.\r\n\r\nFermentum iaculis eu non diam phasellus vestibulum. In mollis nunc sed id semper risus in hendrerit. Ornare arcu odio ut sem nulla pharetra diam sit. Pellentesque habitant morbi tristique senectus et netus. Purus non enim praesent elementum facilisis leo vel fringilla. Nullam non nisi est sit amet facilisis magna. Platea dictumst vestibulum rhoncus est. Sit amet consectetur adipiscing elit pellentesque habitant morbi tristique. Quisque sagittis purus sit amet volutpat consequat mauris nunc. Nec ultrices dui sapien eget mi proin.', 7, 5, 3, 'Artikel 5.jpg', '2023-07-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ekspedisi`
--

CREATE TABLE `tb_ekspedisi` (
  `id_ekspedisi` int(11) NOT NULL,
  `nama_ekspedisi` varchar(20) NOT NULL,
  `harga_ekspedisi` int(20) NOT NULL,
  `gambar_ekspedisi` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_ekspedisi`
--

INSERT INTO `tb_ekspedisi` (`id_ekspedisi`, `nama_ekspedisi`, `harga_ekspedisi`, `gambar_ekspedisi`) VALUES
(4, 'Anteraja', 30000, 'Anteraja.jpg'),
(5, 'JNE', 20000, 'JNE.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL,
  `gambar_kategori` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `gambar_kategori`) VALUES
(5, 'Baju', 'Baju.jpg'),
(6, 'Celana', 'Celana.jpg'),
(7, 'Jaket', 'Jaket.jpg'),
(8, 'Topi', 'Topi.jpg'),
(9, 'Sepatu', 'Sepatu.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_merek`
--

CREATE TABLE `tb_merek` (
  `id_merek` int(11) NOT NULL,
  `nama_merek` varchar(20) NOT NULL,
  `gambar_merek` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_merek`
--

INSERT INTO `tb_merek` (`id_merek`, `nama_merek`, `gambar_merek`) VALUES
(3, 'Gucci', 'Gucci.jpg'),
(4, 'Balenciaga', 'Balenciaga.jpg'),
(5, 'Uniqlo', 'Uniqlo.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_payment`
--

CREATE TABLE `tb_payment` (
  `id_payment` int(11) NOT NULL,
  `nama_payment` varchar(20) NOT NULL,
  `harga_payment` int(20) NOT NULL,
  `no_payment` varchar(15) NOT NULL,
  `gambar_payment` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_payment`
--

INSERT INTO `tb_payment` (`id_payment`, `nama_payment`, `harga_payment`, `no_payment`, `gambar_payment`) VALUES
(3, 'OVO', 2500, '156745654456', 'OVO.png'),
(4, 'Dana', 2000, '985678', 'Dana.png'),
(5, 'BRI', 3000, '234567890009876', 'BRI.png'),
(6, 'BNI', 2500, '34567890', 'BNI.png'),
(7, 'BCA', 3500, '345678', 'BCA.png'),
(9, 'Mandiri', 4000, '09874567829', 'Mandiri.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_ekspedisi` int(11) NOT NULL,
  `id_payment` int(11) NOT NULL,
  `jumlah_pesan` int(11) NOT NULL,
  `created_at_penjualan` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `id_user`, `id_produk`, `id_ekspedisi`, `id_payment`, `jumlah_pesan`, `created_at_penjualan`) VALUES
(46, 35, 27, 5, 7, 1, '2023-07-06'),
(47, 35, 30, 5, 7, 55, '2023-07-06'),
(48, 40, 33, 5, 9, 1, '2023-07-06'),
(49, 42, 48, 5, 4, 1, '2023-07-08'),
(50, 41, 26, 5, 9, 1, '2024-06-24');

--
-- Trigger `tb_penjualan`
--
DELIMITER $$
CREATE TRIGGER `beli_produk` AFTER INSERT ON `tb_penjualan` FOR EACH ROW update tb_produk set tb_produk.stok = tb_produk.stok - new.jumlah_pesan where tb_produk.id_produk = new.id_produk
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `keep_produk` AFTER INSERT ON `tb_penjualan` FOR EACH ROW update tb_produk set tb_produk.stok = 0, tb_produk.diskon=0 where tb_produk.stok < 0
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penulis`
--

CREATE TABLE `tb_penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(20) NOT NULL,
  `gambar_penulis` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_penulis`
--

INSERT INTO `tb_penulis` (`id_penulis`, `nama_penulis`, `gambar_penulis`) VALUES
(5, 'Muhammad Ilham', 'Ilham.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `deskripsi_produk` longtext NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `id_merek` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_warna` int(11) NOT NULL,
  `id_ukuran` int(11) NOT NULL,
  `gambar_produk` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `stok`, `harga_beli`, `harga_jual`, `diskon`, `id_merek`, `id_kategori`, `id_warna`, `id_ukuran`, `gambar_produk`) VALUES
(26, 'Balenciaga Hat Black', 'Topi yang cocok digunakan di segala musim', 3, 1000000, 1600000, 100000, 4, 8, 6, 19, 'Balenciagahat1.jpg'),
(27, 'Balenciaga Hat White ', 'Topi yang cocok digunakan di segala musim', 2, 1000000, 1500000, 100000, 4, 8, 19, 19, 'Balenciagahat2.jpg'),
(28, 'Retro Tweed Jacket with Embroidery Black', 'Jaket dengan gaya Retro', 11, 1000000, 1300000, 0, 3, 7, 6, 7, 'RetroTweed2.jpg'),
(29, 'Retro Tweed Jacket with Embroidery White', 'Jaket dengan gaya Retro', 11, 1000000, 1300000, 0, 3, 7, 19, 6, 'RetroTweed1.jpg'),
(30, 'T-Shirt Gucci Logo', 'Kaos dengan logo GUCCI', 0, 750000, 1000000, 50000, 3, 5, 19, 6, 'TshirtGucci1.jpg'),
(31, 'T-Shirt Gucci Logo', 'Kaos dengan logo GUCCI', 55, 750000, 1000000, 50000, 3, 5, 6, 7, 'TshirtGucci2.jpg'),
(33, 'Balenciaga Bomber Jacket (White)', 'Jaket Bomber Kekinian', 54, 3500000, 3750000, 0, 4, 7, 8, 7, 'Bomber1.jpg'),
(34, 'Cotton Pants Gucci Black', 'Celana Bahan untuk acara formal', 25, 1000000, 1500000, 50000, 3, 6, 6, 9, 'Cottonpants2.jpg'),
(35, 'Balenciaga Bomber Jacket (Black)', 'Jaket Bomber Kekinian', 55, 3500000, 3750000, 0, 4, 7, 6, 7, 'Bomber2.jpg'),
(36, 'Uniqlo ZipperHoddy (White)', 'Jaket Casual untuk segala style', 55, 1400000, 1500000, 350000, 5, 7, 19, 7, 'ZipperHoody 1.jpg'),
(37, 'Cotton Pants Gucci Brown', 'Celana Bahan untuk acara formal', 17, 1000000, 1400000, 100000, 3, 6, 8, 9, 'Cottonpants.jpg'),
(38, 'Uniqlo ZipperHoddy (Black)', 'Jaket Casual untuk segala macam style', 55, 1400000, 1500000, 350000, 5, 7, 6, 7, 'ZipperHoody 2.jpg'),
(39, 'Gucci Lace Shoes', 'Sepatu Formal Untuk Acara Formal', 55, 5000000, 5600000, 0, 3, 9, 8, 15, 'Laceshoes1.jpg'),
(40, 'Gucci Lace Shoes', 'Sepatu Formal Untuk Acara Formal', 55, 5000000, 5600000, 0, 3, 9, 6, 15, 'Laceshoes2.jpg'),
(42, 'Balenciaga Running Shoes (Brown)', 'Sepatu Running dengan desain yang unik', 55, 4700000, 5000000, 0, 4, 9, 8, 15, 'Running2.jpg'),
(43, 'Balenciaga Running Shoes (Grey)', 'Sepatu Running dengan desain yang unik', 55, 4700000, 5000000, 0, 4, 9, 7, 15, 'Running1.jpg'),
(44, 'Uniqlo Classic Low Shoes (White)', 'Sepatu casual untuk hang out', 55, 750000, 850000, 0, 5, 9, 19, 15, 'Classic Low Shoes 2.jpg'),
(45, 'Uniqlo Classic Low Shoes (Black)', 'Sepatu Casual untuk hang out', 55, 750000, 850000, 0, 5, 9, 6, 15, 'Classic Low Shoes 1.jpg'),
(46, 'Gucci Pattern Hat (Black)', 'Topi Casual dengan motif GUCCI', 34, 1400000, 1500000, 250000, 3, 8, 6, 19, 'Guccipattern1.jpg'),
(47, 'Gucci Pattern Hat (Brown)', 'Topi Casual dengan motif GUCCI', 34, 1400000, 1500000, 250000, 3, 8, 8, 19, 'Guccipattern2.jpg'),
(48, 'T-Shirt Balenciaga', 'Kaos dengan font Balenciaga di sudut dada kiri dan serta dibelakangnya ada font balenciaga di bagian punggung', 9, 1200000, 1700000, 100000, 4, 5, 8, 7, 'TshirtBalenciaga1.jpg'),
(49, 'T-Shirt Balenciaga', 'Kaos dengan font Balenciaga di sudut dada kiri dan serta dibelakangnya ada font balenciaga di bagian punggung', 17, 1200000, 1700000, 150000, 4, 5, 19, 8, 'TshirtBalenciaga3.jpg'),
(50, 'Plain T-Shirt Uniqlo', 'Kaos polos nyaman digunakan sehari-hari', 45, 3000000, 600000, 50000, 5, 5, 6, 6, 'Plain Tshirt 1.jpg'),
(51, 'Plain T-Shirt Uniqlo', 'Kaos polos nyaman untuk digunakan sehari-hari', 30, 4500000, 3000000, 200000, 5, 5, 8, 7, 'Plain Tshirt 2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ukuran`
--

CREATE TABLE `tb_ukuran` (
  `id_ukuran` int(11) NOT NULL,
  `nama_ukuran` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_ukuran`
--

INSERT INTO `tb_ukuran` (`id_ukuran`, `nama_ukuran`, `keterangan`) VALUES
(4, 'S', 'Small'),
(5, 'M', 'Medium'),
(6, 'L', 'Large'),
(7, 'XL', 'Xtra Large'),
(8, 'XXL', 'Double Extra Large'),
(9, '36', 'Tiga puluh enam'),
(10, '37', 'Tiga puluh tuju'),
(11, '38', 'Tiga puluh delapan'),
(12, '39', 'Tiga puluh sembilan'),
(13, '40', 'Empat puluh'),
(14, '41', 'Empat puluh satu'),
(15, '42', 'Empat puluh dua'),
(16, '43', 'Empat puluh tiga'),
(17, '44', 'Empat puluh empat'),
(18, '45', 'Empat puluh lima'),
(19, 'All Size', 'All Size');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` longtext NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `confirm_password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `gambar_user` longtext DEFAULT NULL,
  `created_at_user` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `nama_lengkap`, `no_telp`, `alamat`, `username`, `password`, `confirm_password`, `status`, `gambar_user`, `created_at_user`) VALUES
(24, 'Rio Oktavian', '085723977288', 'Sumedang', 'Rio', '12345', '12345', 'administrator', 'Rio.png', '2023-07-03'),
(35, 'Kang Dipa Thea', '089321454784', 'Jaksel no 12', 'kang_dipa', '1234567890', '1234567890', 'customer', '20230611_121018.jpg', '2023-07-06'),
(39, 'Adityansyach Umar Sidiq', '085723977288', 'Cimalaka', 'Adit', '123', '123', 'administrator', 'Adit.png', '2023-07-06'),
(40, 'Aria Manggala', '09854345779', 'Tomo', 'Aria', '12345', '12345', 'customer', 'Aria.png', '2023-07-06'),
(41, 'Iip Sudrajat', '085171238820', 'Tanjungsari', 'Iip', '12345', '12345', 'customer', 'WIN_20230314_08_35_52_Pro.jpg', '2023-07-07'),
(42, 'daffa', '123345', 'Cimalaka', 'daffa', '11', '11', 'customer', '16887953775297067473271733963885.jpg', '2023-07-08'),
(43, 'Iip Sudrajat', '085171238820', 'Sumedang', 'Ipsu', '12345', '12345', 'administrator', '3d-illustration-grocer-man-isolated-market-backgroundshopping-consept_175994-71336.png', '2024-05-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_warna`
--

CREATE TABLE `tb_warna` (
  `id_warna` int(11) NOT NULL,
  `nama_warna` varchar(20) NOT NULL,
  `gambar_warna` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_warna`
--

INSERT INTO `tb_warna` (`id_warna`, `nama_warna`, `gambar_warna`) VALUES
(6, 'Hitam ', 'Hitam.jpg'),
(7, 'Abu-abu', 'Abu-abu.jpg'),
(8, 'Cokelat', 'Cokelat.jpg'),
(19, 'Putih', 'Putih.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_merek` (`id_merek`),
  ADD KEY `id_penulis` (`id_penulis`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tb_ekspedisi`
--
ALTER TABLE `tb_ekspedisi`
  ADD PRIMARY KEY (`id_ekspedisi`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_merek`
--
ALTER TABLE `tb_merek`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indeks untuk tabel `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indeks untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_ekspedisi` (`id_ekspedisi`),
  ADD KEY `id_payment` (`id_payment`);

--
-- Indeks untuk tabel `tb_penulis`
--
ALTER TABLE `tb_penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_merek` (`id_merek`),
  ADD KEY `id_ukuran` (`id_ukuran`),
  ADD KEY `id_warna` (`id_warna`);

--
-- Indeks untuk tabel `tb_ukuran`
--
ALTER TABLE `tb_ukuran`
  ADD PRIMARY KEY (`id_ukuran`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_warna`
--
ALTER TABLE `tb_warna`
  ADD PRIMARY KEY (`id_warna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id_about` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_ekspedisi`
--
ALTER TABLE `tb_ekspedisi`
  MODIFY `id_ekspedisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_merek`
--
ALTER TABLE `tb_merek`
  MODIFY `id_merek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_payment`
--
ALTER TABLE `tb_payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `tb_penulis`
--
ALTER TABLE `tb_penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `tb_ukuran`
--
ALTER TABLE `tb_ukuran`
  MODIFY `id_ukuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tb_warna`
--
ALTER TABLE `tb_warna`
  MODIFY `id_warna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD CONSTRAINT `tb_artikel_ibfk_1` FOREIGN KEY (`id_penulis`) REFERENCES `tb_penulis` (`id_penulis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_artikel_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_artikel_ibfk_3` FOREIGN KEY (`id_merek`) REFERENCES `tb_merek` (`id_merek`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD CONSTRAINT `tb_penjualan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penjualan_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penjualan_ibfk_3` FOREIGN KEY (`id_ekspedisi`) REFERENCES `tb_ekspedisi` (`id_ekspedisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penjualan_ibfk_4` FOREIGN KEY (`id_payment`) REFERENCES `tb_payment` (`id_payment`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_produk_ibfk_2` FOREIGN KEY (`id_merek`) REFERENCES `tb_merek` (`id_merek`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_produk_ibfk_3` FOREIGN KEY (`id_ukuran`) REFERENCES `tb_ukuran` (`id_ukuran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_produk_ibfk_5` FOREIGN KEY (`id_warna`) REFERENCES `tb_warna` (`id_warna`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
