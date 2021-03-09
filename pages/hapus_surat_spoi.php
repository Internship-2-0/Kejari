<?php
include "../include/koneksi.php";

mysqli_query($koneksi, "DELETE FROM spoi WHERE id_spoi = '$_GET[id]'");

echo "<meta http-equiv='refresh' content='1;url=../index.php?halaman=history'>";
