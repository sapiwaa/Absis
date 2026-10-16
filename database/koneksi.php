<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "absensi1"; // ganti sama nama DB lu

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
