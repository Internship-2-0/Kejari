<?php
include "../header.php";
?>

<html lang="en">
<div class="ml-4 mt-2">

  <head>
    <title>Tambah Pegawai</title>
  </head>

  <body>
    <h2>Tambah Pegawai</h2>
    <form method="post">

      <div class="form-group">
        <label for="nip_pegawai">NIP/NRP</label>
        <input type="number" name="nip_pegawai" class="form-control" placeholder="NIP/NRP">
      </div>

      <div class="form-group">
        <label for="nama_pegawai">Nama</label>
        <input type="text" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai">
      </div>

      <div class="form-group">
        <label for="pangkat_pegawai">Pangkat</label>
        <input type="text" name="pangkat_pegawai" class="form-control" placeholder="Pangkat">
      </div>

      <div class="form-group">
        <label for="jabatan_pegawai">Jabatan</label>
        <input type="text" name="jabatan_pegawai" class="form-control" placeholder="Jabatan">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </body>
</div>

</html>