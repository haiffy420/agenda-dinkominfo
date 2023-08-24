<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rekap Agenda Kegiatan Kepala DINKOMINFO Kabupaten Pekalongan</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    ::-webkit-scrollbar {
      display: none;
    }
  </style>
</head>

<body>
  <div component="main">
    <link rel="stylesheet" href="style/login-style.css">
    <div id="toaster"></div>
    <div class="center">
      <section class="container">
        <div style="display: flex; justify-content:center;">
        </div>
        </br>
        <header>Login</header>
        <div class="black-text">Rekap Kegiatan</div>
        <div class="black-text">Dinkominfo Kabupaten Pekalongan</div>
        <form action="conf/autentikasi.php" method="post" id="registration-form" class="form" autocomplete="off">
          <div class="input-box">
            <label>Username</label>
            <input name="username" type="text" placeholder="Username" required />
          </div>
          <div class="input-box">
            <label>Password</label>
            <input name="password" type="password" placeholder="Password" required />
          </div>
          <button id="register-button">
            Login
          </button>
        </form>
      </section>
    </div>
  </div>

</body>
<?php
if (isset($_GET['error'])) {
  $alert = ($_GET['error']);
  if ($alert == 1) {
    echo "
    <script>
    Swal.fire({
      title: 'Login Gagal',
      text: 'Email atau Password salah',
      icon: 'error',
      confirmButtonText: 'OK'
    }).then((result) => {
      if (result.value)
      {window.location = 'index.php';}
    })
    </script>";
  } else {
    echo "";
  }
}
?>

</html>