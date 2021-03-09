<?php
include "../include/koneksi.php";

mysqli_query($koneksi, "DELETE FROM spt WHERE id_spt = '$_GET[id]'");

echo "<meta http-equiv='refresh' content='1;url=../index.php?halaman=history'>";
