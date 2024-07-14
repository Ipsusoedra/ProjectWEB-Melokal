<?php
//load koneksi database
include '../../koneksi.php';
//ambil id dari url
$id_artikel = $_GET['id_artikel'];
//hapus file gambar dari folder gambar
$query = mysqli_query($koneksi, "SELECT * FROM tb_artikel WHERE id_artikel
= '$id_artikel'");
$data = mysqli_fetch_array($query);
$nama_file = $data['gambar_artikel'];
unlink('../../../users/assets/img/' . $nama_file);
//
//hapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM tb_artikel WHERE id_artikel =
'$id_artikel'");
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
