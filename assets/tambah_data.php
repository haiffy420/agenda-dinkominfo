<?php
include '../conf/koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $leadingsector = $_POST['leading_sector'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $kegiatan = $_POST['kegiatan'];
    $tempat = $_POST['tempat'];

    $query = "INSERT INTO schedul (Tanggal, Jam, Kegiatan, Tempat, leading_sector) VALUES ('$tanggal', '$jam', '$kegiatan', '$tempat', '$leadingsector')";
    mysqli_query($koneksi, $query);

    if ($_SESSION['role_id'] == '1') {
        header("Location: ../admin.php");
    } else {
        header("Location: ../index.php");
    }
    exit();
}
?>