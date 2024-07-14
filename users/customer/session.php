<?php
include '../koneksi.php';

$user_check = $_SESSION['username'];
$sql = "SELECT * FROM tb_users WHERE username='$user_check'";
$result = mysqli_query($koneksi, $sql);
if ($result->num_rows ==  0) {
    $row = mysqli_fetch_assoc($result);
    $login_session = $row['username'];
    if (!isset($login_session)) {
        header('Location: admin/signout.php');
    }
}
