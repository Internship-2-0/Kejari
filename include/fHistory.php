<?php
include "include/koneksi.php";

$spt = mysqli_query($koneksi, "SELECT * FROM spt");
$sppps = mysqli_query($koneksi, "SELECT * FROM sppps");
