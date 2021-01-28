<?php

include_once "../include/koneksi.php";
include_once "../include/fLogin.php";

session_start();

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/login.css">

</head>

<body>

  <title>LOGIN PAGE</title>
  <hr>

  <div class="container">
    <h2 class="text-center">Login Page</h2>
    <form method="POST">
      <div class="form-group"></div>

      <label>Username</label>
      <input type="text" name="username" class="form-control" placeholder="Masukkan Username">

      <label>Password</label>
      <input type="password" name="password" class="form-control" placeholder="Masukkan Password">

      <button type="submit" class="btn btn-primary mt-4" name="login">Login</button>

    </form>
  </div>
  <?php
    cekLogin();
  ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
  </script>

</body>

</html>