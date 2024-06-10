<?php
$host = "localhost"; // Nama host
$user = "root"; // Nama pengguna database
$password = ""; // Kata sandi pengguna database
$database = "uts_312310131"; // Nama database yang digunakan

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>


