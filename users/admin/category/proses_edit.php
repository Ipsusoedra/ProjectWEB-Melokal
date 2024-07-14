<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];
//

//proses upload gambar
$nama_file = $_FILES['gambar_kategori']['name'];
$source = $_FILES['gambar_kategori']['tmp_name'];
$folder = '../../../users/assets/img/';
move_uploaded_file($source, $folder . $nama_file);
//
//update data ke database
$update = mysqli_query($koneksi, "UPDATE tb_kategori SET
 nama_kategori = '$nama_kategori',
 gambar_kategori = '$nama_file'
 WHERE id_kategori = '$id_kategori'");
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