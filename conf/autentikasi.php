<?php
session_start();
include('koneksi.php');

$username = $koneksi->real_escape_string($_POST['username']);
$password = $_POST['password'];

$query = $koneksi->query("SELECT * FROM user WHERE username= '$username'");
$data = mysqli_fetch_assoc($query);

if ($data && password_verify($password, $data['password'])) {
    $nama = $data['nama'];
    $id = $data['id'];
    $_SESSION['role_id'] = "1";
    $_SESSION['isLogin'] = true;
    header("location:../admin.php");
} else {
    header("location:../login.php?error=1");
}
