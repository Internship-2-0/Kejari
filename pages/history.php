<?php
include "include/fHistory.php";
?>

<html>

<div class="container-fluid">
  <h2 class="mt-4 mb-4 text-center">Riwayat Surat</h2>
  <div class="box shadow">
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
            </td>
          </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
</div>

</html>