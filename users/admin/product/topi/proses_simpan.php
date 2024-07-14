<?php
//load koneksi database
include '../../../koneksi.php';

//ambil data dari form
$nama_produk = $_POST['nama_produk'];
$deskripsi_produk = $_POST['deskripsi_produk'];
$stok = $_POST['stok'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
$diskon = $_POST['diskon'];
$nama_merek = $_POST['nama_merek'];
$nama_kategori = $_POST['nama_kategori'];
$nama_warna = $_POST['nama_warna'];
$nama_ukuran = $_POST['nama_ukuran'];

//

//proses upload gambar
$nama_file = $_FILES['gambar_produk']['name'];
$source = $_FILES['gambar_produk']['tmp_name'];
$folder = '../../../../users/assets/img/';
move_uploaded_file($source, $folder . $nama_file);
//
//simpan data ke database
$insert = mysqli_query($koneksi, "INSERT INTO tb_produk VALUES (
 NULL,
 '$nama_produk',
 '$deskripsi_produk',
 '$stok',
 '$harga_beli',
 '$harga_jual',
 '$diskon',
 '$nama_merek',
 '$nama_kategori',
 '$nama_warna',
 '$nama_ukuran',
 '$nama_file'
 )");
//
//cek apakah proses simpan ke database berhasil
if ($insert) {
    //jika berhasil tampilkan pesan berhasil simpan data
    echo "<script>
 alert('Data Berhasil Ditambahkan');
 window.location.href='index.php';
 </script>";
} else {
    //jika gagal tampilkan pesan gagal simpan data
    echo "<script>
 alert('Data Gagal Ditambahkan');
 window.location.href='index.php';
 </script>";
}
 //