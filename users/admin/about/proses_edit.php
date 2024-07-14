<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$id_about = $_POST['id_about'];
$judul_about = $_POST['judul_about'];
$isi_about = $_POST['isi_about'];
//

//proses upload gambar
$nama_file = $_FILES['gambar_about']['name'];
$source = $_FILES['gambar_about']['tmp_name'];
$folder = '../../../users/assets/img/';
move_uploaded_file($source, $folder . $nama_file);

//update data ke database
$update = mysqli_query($koneksi, "UPDATE tb_about 
SET 
judul_about ='$judul_about', 
isi_about ='$isi_about', 
gambar_about = '$nama_file'
WHERE id_about='$id_about'");
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
