<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$nama_penulis = $_POST['nama_penulis'];
//

//proses upload gambar
$nama_file = $_FILES['gambar_penulis']['name'];
$source = $_FILES['gambar_penulis']['tmp_name'];
$folder = '../../../users/assets/img/';
move_uploaded_file($source, $folder . $nama_file);
//
//simpan data ke database
$insert = mysqli_query($koneksi, "INSERT INTO tb_penulis VALUES (
 NULL,
 '$nama_penulis',
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