<?php 
include_once "koneksi.php";

session_start(); 

if (!isset($_SESSION['admin'])) {
  echo "<script>location='login.php';</script>";
  header('location: login.php');
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kejari</title>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="sidenav">
	<pre class="logo"><center><b>KEJARI</b></center></pre>
 	<a href="index.php">Home</a>
  	<a href="index.php?halaman=logout">Logout</a>
</div>
