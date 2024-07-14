<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$id_penulis = $_POST['id_penulis'];
$nama_penulis = $_POST['nama_penulis'];
//

//proses upload gambar
$nama_file = $_FILES['gambar_penulis']['name'];
$source = $_FILES['gambar_penulis']['tmp_name'];
$folder = '../../../users/assets/img/';
move_uploaded_file($source, $folder . $nama_file);
//
//update data ke database
$update = mysqli_query($koneksi, "UPDATE tb_penulis SET
 nama_penulis = '$nama_penulis',
 gambar_penulis = '$nama_file'
 WHERE id_penulis = '$id_penulis'");
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