<?php
$koneksi = mysqli_connect("localhost","root","","kejari");
//cek koneksi
if (mysqli_connect_errno()) {
	echo "Connection Failed : ".mysqli_connect_errno().mysqli_connect_error();
}
?>