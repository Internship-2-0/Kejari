<?php 

include_once "koneksi.php";

session_start();

?>   <!-- nama server, username, password, nama database
 -->

<!DOCTYPE html>
<html>
<head>
  <title>Keputusan Jaksa RI</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
  <div class="kotak_login">
    <p class="tulisan_login"><strong>Silahkan login</strong></p>
 
    <form method="post">
      <label>Username</label>
      <input type="text" name="username" class="form_login" placeholder="Username">
 
      <label>Password</label>
      <input type="password" name="password" class="form_login" placeholder="Password">
 
      <button type="submit" class="btn btn-green" name="login">Login</button>
 
    </form>
  </div>

  <?php 

    if (isset($_POST['login'])) {
      $ambil = $koneksi->query("SELECT * FROM admin WHERE username = '$_POST[username]' AND password = '$_POST[password]' ");
      $cocok = $ambil->num_rows;
      if ($cocok == 1) {
        $_SESSION['admin'] = $ambil->fetch_assoc();

        echo "<script> alert('Login Sukses') </script>";
        echo "<meta http-equiv='refresh' content='1; url=index.php'>";
      }
      else {
        echo "<script> alert('Login Gagal') </script>";
        echo "<meta http-equiv='refresh' content='1; url=login.php'>";
      }

    }

    ?>


</body>
</html>