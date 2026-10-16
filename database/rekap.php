<?php
header("Content-Type: application/json");
include "koneksi.php";

$data = [];

if (isset($koneksi) && $koneksi) {
    $result = mysqli_query($koneksi, "SELECT * FROM absensi ORDER BY tanggal DESC, jam DESC");
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
}

echo json_encode($data);
?>
                                                                                                                                       