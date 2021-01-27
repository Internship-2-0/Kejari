<?php include 'pages/header.php'; ?>

<?php 

	if (isset($_GET['halaman'])) {
          if ($_GET['halaman'] == 'login') {
            include 'pages/login.php';
          } else if ($_GET['halaman'] == 'logout') {
            include 'pages/logout.php';
          } 
    }
    else {
    	include 'pages/home.php';
    }
?>