<!-- update.php -->
<?php
include '../conf/koneksi.php';

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $leadingsector = $_POST['leading_sector'];
    $Tanggal = $_POST['Tanggal'];
    $Jam = $_POST['Jam'];
    $Kegiatan = $_POST['Kegiatan'];
    $Tempat = $_POST['Tempat'];

    $query = mysqli_query($koneksi, "UPDATE schedul SET Tanggal='$Tanggal',leading_sector='$leadingsector', Jam='$Jam', Kegiatan='$Kegiatan', Tempat='$Tempat' WHERE id='$id'");
    
    if($query) {
        header('location: ../admin.php'); // Redirect kembali ke halaman utama setelah pembaruan sukses
    } else {
        echo "Gagal memperbarui data.";
    }
}
?>
