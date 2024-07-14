<?php
//load koneksi database
include '../../koneksi.php';
//ambil id dari url
$id_warna = $_GET['id_warna'];
//hapus file gambar dari folder gambar
$query = mysqli_query($koneksi, "SELECT * FROM tb_warna WHERE id_warna
= '$id_warna'");
$data = mysqli_fetch_array($query);
$nama_file = $data['gambar_warna'];
unlink('../../../users/assets/img/' . $nama_file);
//
//hapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM tb_warna WHERE id_warna =
'$id_warna'");
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
