<?php
//load koneksi database
include '../../../koneksi.php';

//ambil data dari form
$id_produk = $_POST['id_produk'];
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
//update data ke database
$update = mysqli_query($koneksi, "UPDATE tb_produk SET
 nama_produk = '$nama_produk',
 deskripsi_produk = '$deskripsi_produk',
 stok = '$stok',
 harga_beli = '$harga_beli',
 harga_jual = '$harga_jual',
 diskon = '$diskon',
 id_merek = '$nama_merek',
 id_kategori = '$nama_kategori',
 id_warna = '$nama_warna',
 id_ukuran = '$nama_ukuran',
 gambar_produk = '$nama_file'
 WHERE id_produk = '$id_produk'");
//cek apakah proses edit ke database berhasil
if ($update) {
    //jika berhasil tampilkan pesan berhasil edit data
    echo "<script>
 alert('Data Berhasil Diubah');
 window.location.href='index.php';
 </script>";
} else {
    //jika gagal tampilkan pesan gagal edit data
    echo "<script>
 alert('Data Gagal Diubah');
 window.location.href='index.php';
 </script>";
}
 //