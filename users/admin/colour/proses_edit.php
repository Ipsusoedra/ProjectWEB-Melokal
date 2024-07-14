<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$id_warna = $_POST['id_warna'];
$nama_warna = $_POST['nama_warna'];
//

//proses upload gambar
$nama_file = $_FILES['gambar_warna']['name'];
$source = $_FILES['gambar_warna']['tmp_name'];
$folder = '../../../users/assets/img/';
move_uploaded_file($source, $folder . $nama_file);
//
//update data ke database
$update = mysqli_query($koneksi, "UPDATE tb_warna SET
 nama_warna = '$nama_warna',
 gambar_warna = '$nama_file'
 WHERE id_warna = '$id_warna'");
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