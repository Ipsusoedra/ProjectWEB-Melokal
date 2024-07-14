<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$id_payment = $_POST['id_payment'];
$nama_payment = $_POST['nama_payment'];
$no_payment = $_POST['no_payment'];
$harga_payment = $_POST['harga_payment'];
//

//proses upload gambar
$nama_file = $_FILES['gambar_payment']['name'];
$source = $_FILES['gambar_payment']['tmp_name'];
$folder = '../../../users/assets/img/';
move_uploaded_file($source, $folder . $nama_file);
//
//update data ke database
$update = mysqli_query($koneksi, "UPDATE tb_payment SET
 nama_payment = '$nama_payment',
 harga_payment = '$harga_payment',
 no_payment = '$no_payment',
 gambar_payment = '$nama_file'
 WHERE id_payment = '$id_payment'");
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