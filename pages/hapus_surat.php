<?php
$koneksi = mysqli_connect("localhost", "root", "", "kejari");

$spt = mysqli_query($koneksi, "SELECT * FROM spt");
$sppps = mysqli_query($koneksi, "SELECT * FROM sppps");
$spoi = mysqli_query($koneksi, "SELECT * FROM spoi");


mysqli_query($koneksi, "DELETE FROM spt WHERE id_spt = '$_GET[id]'");

echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=history'>";
