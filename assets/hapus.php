<?php
include '../conf/koneksi.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM schedul WHERE id = '$id'";
    if(mysqli_query($koneksi, $query)) {
        header("Location: ../admin.php"); // Redirect ke halaman utama setelah sukses hapus
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    header("Location: ../admin.php"); // Redirect jika tidak ada ID
    exit();
}
?>
