<?php
//load koneksi database
include '../../../koneksi.php';

//ambil data dari form
$id_user = $_POST['id_user'];
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
$folder = '../../../../users/assets/img/';
move_uploaded_file($source, $folder . $nama_file);

if ($password != $confirm_password) {
    echo "<script>
    alert('Password tidak sesuai!');
    window.location.href='edit.php';
    </script>";
} else {
    //update data ke database
    $update = mysqli_query($koneksi, "UPDATE tb_users SET
    nama_lengkap = '$nama_lengkap',
    no_telp = '$no_telp',
    alamat = '$alamat',
    username = '$username',
    password = '$password',
    confirm_password= '$confirm_password',
    status = '$status',
    gambar_user = '$nama_file'
    WHERE id_user = '$id_user'");
    //cek apakah proses edit ke database berhasil
    if ($update) {
        session_start();
        if (session_destroy()) {
            header("Location: index.php");
        }
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['id_user'] = $id_user;
        $_SESSION['gambar_user'] = $nama_file;
        $_SESSION['nama_lengkap'] = $nama_lengkap;
        $_SESSION['no_telp'] = $no_telp;
        $_SESSION['alamat'] = $alamat;
        $_SESSION['password'] = $password;
        $_SESSION['confirm_password'] = $confirm_password;
        $_SESSION['status'] = $status;
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

}
