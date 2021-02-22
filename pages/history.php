<?php
include "include/fHistory.php";
?>

<html>

<h2 class="mt-4 mb-4 text-center">Riwayat Surat</h2>

<div class="container-fluid">

  <div class="box shadow">
    <h4>Surat Perintah Tugas</h4><br>
    <table class="table">
      <thead>
        <tr>
          <th>No Surat</th>
          <th>Tanggal Surat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($data_spt = mysqli_fetch_array($spt)) {
          $link = $data_spt['id_spt'];
        ?>
          <tr>
            <td>SP.TUG -
              <?PHP echo $data_spt['nomor_surat'] . "/" . $data_spt['kode_pejabat'] . "/" . $data_spt['kode_masalah'] . "/" . date('m', strtotime($data_spt['penerbitan'])) . "/" . date('Y', strtotime($data_spt['penerbitan'])); ?>
            </td>
            <td><?php echo $data_spt['penerbitan'] ?></td>
            <td>
              <a class="btn btn-primary" href="template_surat/tSpt.php?id=<?php echo $link; ?>">SHOW</a>
              <a name="hapus_spt" class="btn btn-danger" href="pages/hapus_surat.php?id=<?php echo $link; ?>">HAPUS</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <br>

  <div class="box shadow">
    <h4>Surat Perintah Pengamanan Pembangunan Strategis</h4><br>
    <table class="table">
      <thead>
        <tr>
          <th>No Surat</th>
          <th>Tanggal Surat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($data_sppps = mysqli_fetch_array($sppps)) {
          $link = $data_sppps['id_sppps'];
        ?>
          <tr>
            <td>SP.PPS -
              <?PHP echo $data_sppps['nomor_surat'] . "/" . $data_sppps['kode_pejabat'] . "/" . $data_sppps['kode_masalah'] . "/" . date('m', strtotime($data_sppps['penerbitan'])) . "/" . date('Y', strtotime($data_sppps['penerbitan'])); ?>
            </td>
            <td><?php echo $data_sppps['penerbitan'] ?></td>
            <td>
              <a class="btn btn-primary" href="template_surat/tSppps.php?id=<?php echo $link; ?>">SHOW</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <br>

  <div class="box shadow">
    <h4>Surat Perintah Operasi Intelijen</h4><br>
    <table class="table">
      <thead>
        <tr>
          <th>No Surat</th>
          <th>Tanggal Surat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($data_spoi = mysqli_fetch_array($spoi)) {
          $link = $data_spoi['id_spoi'];
        ?>
          <tr>
            <td>SP.OPS -
              <?PHP echo $data_spoi['nomor_surat'] . "/" . $data_spoi['kode_pejabat'] . "/" . $data_spoi['kode_masalah'] . "/" . date('m', strtotime($data_spoi['penerbitan'])) . "/" . date('Y', strtotime($data_spoi['penerbitan'])); ?>
            </td>
            <td><?php echo $data_spoi['penerbitan'] ?></td>
            <td>
              <a class="btn btn-primary" href="template_surat/tSpoi.php?id=<?php echo $link; ?>">SHOW</a>

            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <div class="box shadow">
    <h4>Analisa Sasaran</h4><br>
    <table class="table">
      <thead>
        <tr>
          <th>No Surat</th>
          <th>Tanggal Surat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($data_spoi = mysqli_fetch_array($spoi)) {
          $link = $data_spoi['id_spoi'];
        ?>
          <tr>
            <td>SP.OPS -
              <?PHP echo $data_spoi['nomor_surat'] . "/" . $data_spoi['kode_pejabat'] . "/" . $data_spoi['kode_masalah'] . "/" . date('m', strtotime($data_spoi['penerbitan'])) . "/" . date('Y', strtotime($data_spoi['penerbitan'])); ?>
            </td>
            <td><?php echo $data_spoi['penerbitan'] ?></td>
            <td>
              <a class="btn btn-primary" href="template_surat/tSpoi.php?id=<?php echo $link; ?>">SHOW</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

</div>

</html>