<?php
include "include/koneksi.php";

// $id_spt = $_GET['id'];
$data_spt = mysqli_query($koneksi, "SELECT * FROM spt");

?>

<html>

<div class="container">
  <h2 class="tittle text-center mt-4 mb-4">Riwayat Surat</h2>

  <table class="table">
    <thead>
      <tr>
        <th>No Surat</th>
        <th>Tanggal Surat</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($nomor_tgl_surat = mysqli_fetch_array($data_spt)) {
      ?>
        <tr>
          <td>SP.TUG - <?PHP echo $nomor_tgl_surat['nomor_surat'] . "/" . $nomor_tgl_surat['kode_pejabat'] . "/" . $nomor_tgl_surat['kode_masalah'] . "/" . date('mY', strtotime($nomor_tgl_surat['penerbitan'])); ?></td>
          <td><?php echo $nomor_tgl_surat['penerbitan'] ?></td>
          <td>
            <button class="btn btn-primary">SHOW</button>
          </td>
        </tr>
      <?php } ?>

    </tbody>
  </table>

</div>

</html>