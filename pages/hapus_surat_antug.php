<?php
include "../include/koneksi.php";

mysqli_query($koneksi, "DELETE FROM antug WHERE id_antug = '$_GET[id]'");

echo "<meta http-equiv='refresh' content='1;url=../index.php?halaman=history'>";
