<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$base_url_admin = "http://localhost/melokal/users/admin";
//buat koneksi database
$koneksi = mysqli_connect("localhost", "id20987674_melokal1", "@Me3lo0ka4l1", "id20987674_melokal");
//cek koneksi database
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
