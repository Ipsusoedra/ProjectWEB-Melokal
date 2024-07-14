<?php
//load koneksi database
include '../../../koneksi.php';
//ambil id dari url
$id_produk = $_GET['id_produk'];
//hapus file gambar dari folder gambar
$query = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE id_produk
= '$id_produk'");
$data = mysqli_fetch_array($query);
$nama_file = $data['gambar_produk'];
unlink('../../../../users/assets/img/' . $nama_file);
//
//hapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM tb_produk WHERE id_produk =
'$id_produk'");
//cek apakah proses hapus data berhasil
if ($hapus) {
    //jika berhasil tampilkan pesan berhasil hapus data
    echo "<script>
 alert('Data Berhasil Dihapus');
 window.location.href='index.php';
 </script>";
} else {
    //jika gagal tampilkan pesan gagal hapus data
    echo "<script>
 alert('Data Gagal Dihapus');
 window.location.href='index.php';
 </script>";
}
