<?php include '../conf/koneksi.php';?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		.container {
			margin-top: 50px;
		}
		.form-container {
			background-color: #f8f9fa;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}
	</style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 form-container">
            <h3 class="text-center">Tambah Kegiatan Baru</h3>
            <form method="POST" action="tambah_data.php">
                <div class="form-group">
                    <label for="tanggal">Tanggal:</label>
                    <input type="date" class="form-control" name="tanggal" required>
                </div>
                <div class="form-group">
                    <label for="leading_sector">Leading Sector:</label>
                    <input type="text" class="form-control" name="leading_sector" required>
                </div>
                <div class="form-group">
                    <label for="jam">Jam:</label>
                    <input type="time" class="form-control" name="jam" required>
                </div>
                <div class="form-group">
                    <label for="kegiatan">Kegiatan:</label>
                    <input type="text" class="form-control" name="kegiatan" required>
                </div>
                <div class="form-group">
                    <label for="tempat">Tempat:</label>
                    <input type="text" class="form-control" name="tempat" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Tambah Kegiatan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
