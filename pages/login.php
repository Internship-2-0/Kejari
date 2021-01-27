<?php 

include_once "../function/koneksi.php";
include_once "../function/login.php";

session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Keputusan Jaksa RI</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
    cekLogin();
    ?>


</body>
</html>