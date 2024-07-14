<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$id_merek = $_POST['id_merek'];
$nama_merek = $_POST['nama_merek'];
//

//proses upload gambar
$nama_file = $_FILES['gambar_merek']['name'];
$source = $_FILES['gambar_merek']['tmp_name'];
$folder = '../../../users/assets/img/';
move_uploaded_file($source, $folder . $nama_file);
//
//update data ke database
$update = mysqli_query($koneksi, "UPDATE tb_merek SET
 nama_merek = '$nama_merek',
 gambar_merek = '$nama_file'
 WHERE id_merek = '$id_merek'");
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