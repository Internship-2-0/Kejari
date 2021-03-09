<?php
include "../include/koneksi.php";

mysqli_query($koneksi, "DELETE FROM ansas WHERE id_ansas = '$_GET[id]'");

echo "<meta http-equiv='refresh' content='1;url=../index.php?halaman=history'>";
