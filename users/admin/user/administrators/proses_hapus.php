<?php
//load koneksi database
include '../../../koneksi.php';
//ambil id dari url
$id_user = $_GET['id_user'];
//hapus file gambar dari folder gambar
$query = mysqli_query($koneksi, "SELECT * FROM tb_users WHERE id_user
= '$id_user'");
$data = mysqli_fetch_array($query);
$nama_file = $data['gambar_user'];
unlink('../../../../users/assets/img/' . $nama_file);
//
//hapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM tb_users WHERE id_user =
'$id_user'");
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
