<?php

    include "include/koneksi.php";

    $petugas = mysqli_query($koneksi, "SELECT * FROM petugas");
  
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>