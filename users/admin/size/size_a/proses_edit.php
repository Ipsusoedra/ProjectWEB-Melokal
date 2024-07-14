<?php
//load koneksi database
include '../../../koneksi.php';

//ambil data dari form
$id_ukuran = $_POST['id_ukuran'];
$nama_ukuran = $_POST['nama_ukuran'];
$keterangan = $_POST['keterangan'];
//

//update data ke database
$update = mysqli_query($koneksi, "UPDATE tb_ukuran SET
 nama_ukuran = '$nama_ukuran',
 keterangan = '$keterangan'
 WHERE id_ukuran = '$id_ukuran'");
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