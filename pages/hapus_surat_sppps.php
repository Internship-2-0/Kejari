<?php
include "../include/koneksi.php";

mysqli_query($koneksi, "DELETE FROM sppps WHERE id_sppps = '$_GET[id]'");

echo "<meta http-equiv='refresh' content='1;url=../index.php?halaman=history'>";
