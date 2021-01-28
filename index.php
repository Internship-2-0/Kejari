<?php include 'pages/header.php'; ?>

<html>
<div class="col-md-10 mt-2 pr-3 pt-4">
  <?php
  if (isset($_GET['halaman'])) {
    if ($_GET['halaman'] == 'login') {
      include 'pages/login.php';
    } else if ($_GET['halaman'] == 'logout') {
      include 'pages/logout.php';
    }
  } else {
    include 'pages/home.php';
  }
  ?>
</div>

</html>