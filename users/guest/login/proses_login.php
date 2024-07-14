<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if (isset($_SESSION['username'])) {
    header("Location: ../../customer/index.php");
}

if (isset($_POST['submit'])) {
    include("../../koneksi.php");

    $nama_lengkap = @$_POST['nama_lengkap$nama_lengkap'];
    $username = @$_POST['username'];
    $password = @$_POST['password'];

    $sql = "SELECT * FROM tb_users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_array($result);

        if ($row['status'] == 'administrator') {
            $_SESSION['username'] = $row['username'];
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['gambar_user'] = $row['gambar_user'];
            $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
            $_SESSION['no_telp'] = $row['no_telp'];
            $_SESSION['alamat'] = $row['alamat'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['confirm_password'] = $row['confirm_password'];
            $_SESSION['status'] = $row['status'];
            header("Location: ../../admin/index.php");
        } else {
            $_SESSION['username'] = $row['username'];
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['gambar_user'] = $row['gambar_user'];
            $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
            $_SESSION['no_telp'] = $row['no_telp'];
            $_SESSION['alamat'] = $row['alamat'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['confirm_password'] = $row['confirm_password'];
            $_SESSION['status'] = $row['status'];
            header("Location: ../../customer/index.php");
        }
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!');
            window.location.href='index.php';
        </script>";
    }
}
