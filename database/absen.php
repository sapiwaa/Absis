<?php
include 'koneksi.php';

if (!isset($koneksi) || !$koneksi) { 
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nis        = $_POST['nis'] ?? '';
    $nama       = $_POST['nama'] ?? '';
    $kelas      = $_POST['kelas'] ?? '';
    $jurusan    = $_POST['jurusan'] ?? '';
    $keterangan = $_POST['keterangan'] ?? '';

    $sql = "INSERT INTO absensi (nis, nama, kelas, jurusan, keterangan, tanggal, jam)
            VALUES ('$nis', '$nama', '$kelas', '$jurusan', '$keterangan', CURDATE(), CURTIME())";

    if (mysqli_query($koneksi, $sql)) { 
        echo "<script>
                alert('Absensi berhasil dikirim!');
                window.location.href = '../index.html';
              </script>";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
} else {
    header("Location: ../absen.html");
    exit();
}

mysqli_close($koneksi);
?>