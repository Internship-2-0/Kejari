<html>

<head>
  <?php include 'pages/header.php'; ?>
</head>

<body>

  <div class="col-md-10 mt-2 pt-4">
    <?php
    if (isset($_GET['halaman'])) {
      if ($_GET['halaman'] == 'history') {
        include 'pages/history.php';
      } else if ($_GET['halaman'] == 'data_pegawai') {
        include 'pages/data_pegawai.php';
      } else if ($_GET['halaman'] == 'logout') {
        include 'pages/logout.php';
      } else if ($_GET['halaman'] == 'spt') {
        include 'pages/form_surat/spt.php';
      } else if ($_GET['halaman'] == 'history') {
        include 'pages/history.php';
      } else if ($_GET['halaman'] == 'tambah_pegawai') {
        include 'pages/tambah_pegawai.php';
      } else if ($_GET['halaman'] == 'sppps') {
        include 'pages/form_surat/sppps.php';
      } else if ($_GET['halaman'] == 'spoi') {
        include 'pages/form_surat/spoi.php';
      }
    } else {
      include 'pages/home.php';
    }
    ?>
  </div>
</body>

</html>