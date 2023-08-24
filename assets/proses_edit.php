<?php
include '../conf/koneksi.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $leadingsector = $_POST['leading_sector'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $kegiatan = $_POST['kegiatan'];
    $tempat = $_POST['tempat'];

    $query = "UPDATE schedul SET Tanggal = '$tanggal',leading_sector='$leadingsector', Jam = '$jam', Kegiatan = '$kegiatan', Tempat = '$tempat' WHERE id = '$id'";
    if(mysqli_query($koneksi, $query)) {
        header("Location: ../admin.php"); // Redirect ke halaman utama setelah sukses edit
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
