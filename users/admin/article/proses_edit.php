<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$id_artikel = $_POST['id_artikel'];
$judul_artikel = $_POST['judul_artikel'];
$isi_artikel = $_POST['isi_artikel'];
$nama_kategori = $_POST['nama_kategori'];
$nama_penulis = $_POST['nama_penulis'];
$nama_merek = $_POST['nama_merek'];
//

//proses upload gambar
$nama_file = $_FILES['gambar_artikel']['name'];
$source = $_FILES['gambar_artikel']['tmp_name'];
$folder = '../../../users/assets/img/';
move_uploaded_file($source, $folder . $nama_file);
//
//update data ke database
$update = mysqli_query($koneksi, "UPDATE tb_artikel SET
 judul_artikel = '$judul_artikel',
 isi_artikel = '$isi_artikel',
 id_kategori = '$nama_kategori',
 id_penulis = '$nama_penulis',
 id_merek = '$nama_merek',
 gambar_artikel = '$nama_file'
 WHERE id_artikel = '$id_artikel'");
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