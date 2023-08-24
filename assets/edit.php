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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Edit Kegiatan</h2>
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <div class="form-group">
                                <label for="Tanggal">Tanggal:</label>
                                <input type="date" class="form-control" name="Tanggal" value="<?php echo $data['Tanggal']; ?>">
                            </div>
                            <div class="form-group">
                            <label for="leading_sector">Leading Sector:</label>
                            <input type="text" class="form-control" name="leading_sector" value="<?php echo $data['leading_sector']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="Jam">Jam:</label>
                                <input type="time" class="form-control" name="Jam" value="<?php echo $data['Jam']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="kegiatan">Kegiatan:</label>
                                <input type="text" class="form-control" name="Kegiatan" value="<?php echo $data['Kegiatan']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="tempat">Tempat:</label>
                                <input type="text" class="form-control" name="Tempat" value="<?php echo $data['Tempat']; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
    