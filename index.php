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
          else if ($_GET['halaman'] == 'logout') {
            include 'pages/logout.php';
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





<!-- <div class="main">
  <h2>Sidebar</h2>
  <p>This sidebar is of full height (100%) and always shown.</p>
  <p>Scroll down the page to see the result.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
</div> -->














   
</body>
</html> 


</body>
</html>