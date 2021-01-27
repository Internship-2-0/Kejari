<?php include 'pages/header.php'; ?>

<?php 

	if (isset($_GET['halaman'])) {
          if ($_GET['halaman'] == 'produk') {
            include 'pages/produk.php';
          }
          else if ($_GET['halaman'] == 'pelanggan') {
            include 'pages/pelanggan.php';
          }
          else if ($_GET['halaman'] == 'pembelian') {
            include 'pages/pembelian.php';
          }
          else if ($_GET['halaman'] == 'login') {
            include 'pages/login.php';
          }
          else if ($_GET['halaman'] == 'detail') {
            include 'pages/detail.php';
          }
          else if ($_GET['halaman'] == 'tambah_produk') {
            include 'pages/tambah_produk.php';
          }
          else if ($_GET['halaman'] == 'hapus_produk') {
            include 'pages/hapus_produk.php';
          }
          else if ($_GET['halaman'] == 'ubah_produk') {
            include 'pages/ubah_produk.php';
          }
          else if ($_GET['halaman'] == 'logout') {
            include 'pages/logout.php';
          }
    }
    else {
    	include 'pages/home.php';
    }
?>