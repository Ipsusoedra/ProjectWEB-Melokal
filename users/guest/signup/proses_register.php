<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$nama_lengkap = $_POST['nama_lengkap'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$status = $_POST['status'];

//

//proses upload gambar
$nama_file = $_FILES['gambar_user']['name'];
$source = $_FILES['gambar_user']['tmp_name'];
$folder = '../../../users/assets/img/';
move_uploaded_file($source, $folder . $nama_file);


$query = mysqli_query($koneksi, "SELECT * FROM tb_users WHERE username='$username'");
$result = mysqli_fetch_array($query);
if (isset($result['username']) == $username ) {
    echo "<script>
        alert('Username telah digunakan!');
    window.location.href='../index.php';
        </script>";
} elseif ($password != $confirm_password) {
    echo "<script>
    alert('Password tidak sesuai!');
    window.location.href='../index.php';
    </script>";
} else {
    //simpan data ke database
    $insert = mysqli_query($koneksi, "INSERT INTO tb_users VALUES (
    NULL,
    '$nama_lengkap',
    '$no_telp',
    '$alamat',
    '$username',
    '$password',
    '$confirm_password',
    '$status',
    '$nama_file',
    Current_timestamp()
    )");
    //
    //cek apakah proses simpan ke database berhasil
    if ($insert) {
        //jika berhasil tampilkan pesan berhasil simpan data
        echo "<script>
    alert('Registrasi Berhasi!');
    window.location.href='../login/index.php';
    </script>";
    } else {
        //jika gagal tampilkan pesan gagal simpan data
        echo "<script>
    alert('Registrasi Gagal!');
    window.location.href='../index.php';
    </script>";
    }
    //
}
//
