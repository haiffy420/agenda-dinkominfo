<!-- edit.php -->
<?php
include '../conf/koneksi.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM schedul WHERE id='$id'");
    $data = mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data - Agenda Kegiatan</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit Kegiatan</h2>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <div class="form-group">
        <label for="tanggal">Tanggal:</label>
            Tanggal: <input type="date" name="Tanggal" value="<?php echo $data['Tanggal']; ?>">
        </div>
        <div class="form-group">
                    <label for="leading_sector">Leading Sector:</label>
            Leading Sector : <input type="text" name="leading_sector" value="<?php echo $data['leadingsector']; ?>">
        </div>
        <br>
        <div class="form-group">
        <label for="jam">Jam:</label>
            Jam: <input type="time" name="Jam" value="<?php echo $data['Jam']; ?>">
        </div>
        <br>
         <div class="form-group">
            <label for="kegiatan">Kegiatan:</label>
            Kegiatan: <input type="text" name="Kegiatan" value="<?php echo $data['Kegiatan']; ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="jam">Jam</label>
            Tempat: <input type="text" name="Tempat" value="<?php echo $data['Tempat']; ?>">
        </div>
        <br>
            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>