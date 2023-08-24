<?php 
session_start();
include 'conf/cekLogin.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Agenda Kegiatan Kepala Dinas Kominfo Kabupaten Pekalongan</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        h1 {
            color: #343a40;
            text-align: center;
        }
        h3 {
            color: #343a40;
            text-align: center;
            margin-bottom: 30px;
        }
        th {
            background-color: #343a40;
            color: #ffffff;
        }
        .btn {
            margin-right: 5px;
        }
        .table-bordered {
            border: 3px solid #000 !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>REKAP</h1>
        <h3>Agenda Kegiatan Kepala DINKOMINFO Kabupaten Pekalongan</h3>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Leading Sector</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Kegiatan</th>
                    <th>Tempat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include 'conf/koneksi.php';
                $schedul = mysqli_query($koneksi, "SELECT * FROM schedul");
                $no = 1;
                while ($d = mysqli_fetch_array($schedul)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['leading_sector']; ?></td>
                        <td><?php echo $d['Tanggal']; ?></td>
                        <td><?php echo $d['Jam']; ?></td>
                        <td><?php echo $d['Kegiatan']; ?></td>
                        <td><?php echo $d['Tempat']; ?></td>
                        <td>
                            <a href="assets/edit.php?id=<?php echo $d['id']; ?>" class="btn btn-primary">Edit</a>
                            <a href="assets/hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>    
        <div class="text-center">
            <a href="assets/tambahdata.php" class="btn btn-primary">Tambah Data Kegiatan</a>
            <a href="export/export-data.php" class="btn btn-primary">Export Rekap Kegiatan</a>
            <a href="conf/logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</body>
</html>
