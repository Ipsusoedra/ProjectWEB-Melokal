<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$id_user = $_POST['id_user'];
$id_produk = $_POST['id_produk'];
$id_payment = $_POST['id_payment'];
$id_ekspedisi = $_POST['id_ekspedisi'];
$jumlah_pesan = $_POST['jumlah_pesan'];

//
//simpan data ke database
$insert = mysqli_query($koneksi, "INSERT INTO tb_penjualan VALUES (
 NULL,
 '$id_user',
 '$id_produk',
 '$id_ekspedisi',
 '$id_payment',
 '$jumlah_pesan',
CURRENT_TIMESTAMP()
 )");
//
//cek apakah proses simpan ke database berhasil
if ($insert) {
    //jika berhasil tampilkan pesan berhasil simpan data
    echo "<script>
 alert('Pembelian berhasil! Periksa pada keranjang');
 window.location.href='../index.php';
 </script>";
} else {
    //jika gagal tampilkan pesan gagal simpan data
    echo "<script>
 alert('Pembelian dibatalkan!');
 window.location.href='../index.php';
 </script>";
}
 //