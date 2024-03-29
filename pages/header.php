<?php

session_start();

if (!isset($_SESSION['admin'])) {
	echo "<script>location='pages/login.php';</script>";
	header('location: pages/login.php');
	exit();
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Kejari</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<!-- Font awesome -->
	<script src="https://kit.fontawesome.com/7765b42b94.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<nav class="navbar fixed-top navbar-light bg-light">
		<a class="navbar-brand" href="#">KEJARI</a>
		<div class="icon ml-4">
			<h5>
				<a href="index.php?halaman=logout"><i class="fas fa-sign-out-alt mr-3" data-toogle="tooltip" title="Sign-out"></i></a>
			</h5>
		</div>
	</nav>

	<div class="row no-gutters mt-5 vh-100">
		<div class="col-md-2 bg-dark mt-2 pt-4">
			<ul class="nav flex-column ml-3 mb-5">
				<li class="nav-item">
					<a class="nav-link active text-white" href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
					<hr class="bg-secondary">
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="index.php?halaman=data_pegawai"><i class="fas fa-user-edit mr-2"></i>Data Pegawai</a>
					<hr class="bg-secondary">
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="index.php?halaman=history"><i class="far fa-edit mr-2"></i>History</a>
					<hr class="bg-secondary">
				</li>
			</ul>
		</div>