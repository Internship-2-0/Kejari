<?php
include "include/koneksi.php";

$spt = mysqli_query($koneksi, "SELECT * FROM spt");
$sppps = mysqli_query($koneksi, "SELECT * FROM sppps");
$spoi = mysqli_query($koneksi, "SELECT * FROM spoi");
$ansas = mysqli_query($koneksi, "SELECT * FROM ansas");
$antug = mysqli_query($koneksi, "SELECT * FROM antug");
