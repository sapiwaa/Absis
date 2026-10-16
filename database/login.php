<?php
session_start();

include "koneksi.php";

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($koneksi, $_POST['username'] ?? '');
    $password = mysqli_real_escape_string($koneksi, $_POST['password'] ?? '');

    $sql = "SELECT * FROM akun WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        $role = strtolower(trim($user['role'] ?? ''));
        if ($role === "siswa") {
            header("Location: ../absen.html");
            exit();
        } elseif ($role === "admin" || $role === "guru") {
            header("Location: ../rekap.html");
            exit();
        } else {
            header("Location: ../absen.html");
            exit();
        }
    } else {
        echo "<script>alert('Username atau password salah'); window.location='../index.html';</script>";
        exit();
    }
} else {
    header("Location: ../index.html");
    exit();
}

mysqli_close($koneksi);
?>
