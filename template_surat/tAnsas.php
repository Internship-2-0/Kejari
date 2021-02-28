<?php

include "../include/koneksi.php";

$id_ansas = $_GET['id'];

$data_ansas = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM ansas WHERE id_ansas = '$id_ansas'"));
$kondisi_situasi = mysqli_query($koneksi, "SELECT * FROM kondisi_situasi_ansas WHERE id_ansas = '$id_ansas'");
$kekuatan = mysqli_query($koneksi, "SELECT * FROM kekuatan_ansas WHERE id_ansas = '$id_ansas'");
$kelemahan = mysqli_query($koneksi, "SELECT * FROM kelemahan_ansas WHERE id_ansas = '$id_ansas'");
$kehendak = mysqli_query($koneksi, "SELECT * FROM kehendak_ansas WHERE id_ansas = '$id_ansas'");
$op_aktif = mysqli_query($koneksi, "SELECT * FROM op_aktif_ansas WHERE id_ansas = '$id_ansas'");
$op_pasif = mysqli_query($koneksi, "SELECT * FROM op_pasif_ansas WHERE id_ansas = '$id_ansas'");
$op_pendukung = mysqli_query($koneksi, "SELECT * FROM op_pendukung_ansas WHERE id_ansas = '$id_ansas'");

?>
<!DOCTYPE html>
<html style="line-height: 1;">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="../css/tSpt.css"> -->
  <title>Document</title>
</head>

<body style="font-family:Arial, Helvetica, sans-serif">
  <!-- KOP -->
  <div style="margin: 1.75cm 1.8cm 2.06cm 2.22cm ;">
    <center>
      <table>
        <tr>
          <td><img src="../img/Logo.png" width="50" height="50" style="margin-right: 50px;"></td>
          <td>
            <div>
              <b>
                <center>
                  <br>
                  <span style="font-size: 15pt;">KEJAKSAAN TINGGI JAWA TENGAH</span>
                  <br>
                  <span style="font-size: 19pt;">KEJAKSAAN NEGERI KOTA SEMARANG</span>
                </center>
              </b>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="100"></td>
        </tr>
      </table>
      <hr>
    </center>
    <div style="text-align: right;">
      <span style="font-size: 12px"><b>IN.4</b></span>
      <br>
      <span class="size10">Copy ke :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
      <br>
      <span class="size10">Dari :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
    </div>

    <!-- ISI -->
    <center>
      <b><span style="font-size: 12pt;">ANALISA SASARAN</span></b>
      <br>
      <br>
    </center>

    <!-- Sasaran -->
    <table style="text-align: justify; text-justify: inter-word; font-size: 11pt;">
      <tr>
        <td>1. </td>
        <td>SASARAN</td>
      </tr>
      <tr>
        <td></td>
        <td><?php echo $data_ansas['sasaran'] ?></td>
      </tr>

      <!-- Kondisi & Situasi -->
      <tr>
        <td style="vertical-align: top;">2. </td>
        <td>KONDISI DAN SITUASI SASARAN
          <table>
            <?php
            $noKondisiSituasi = 'a';
            while ($data_kondisi_situasi = mysqli_fetch_array($kondisi_situasi)) {
            ?>
              <tr>
                <td><?php echo $noKondisiSituasi . ". " ?></td>
                <td><?php echo $data_kondisi_situasi['isi']; ?></td>
              </tr>
            <?php
              $noKondisiSituasi++;
            }
            ?>
          </table>
        </td>
      </tr>

      <!-- kekuatan, kelemahan, kehendak -->
      <tr>
        <td style="vertical-align: top;">3. </td>
        <td>KEKUATAN, KELEMAHAN DAN KEHENDAK SASARAN
          <table>
            <tr>
              <td>a. </td>
              <td>KEKUATAN
                <table>
                  <!-- kekuatan -->
                  <?php
                  $noKekuatan = "-";
                  while ($data_kekuatan = mysqli_fetch_array($kekuatan)) {
                  ?>
                    <tr>
                      <td><?php echo $noKekuatan . " " ?></td>
                      <td><?php echo $data_kekuatan['isi']; ?></td>
                    </tr>
                  <?php } ?>
                </table>
              </td>
            </tr>
            <tr>
              <td>b. </td>
              <td>KELEMAHAN
                <table>
                  <!-- kelemahan -->
                  <?php
                  $noKelemahan = "-";
                  while ($data_kelemahan = mysqli_fetch_array($kelemahan)) {
                  ?>
                    <tr>
                      <td><?php echo $noKelemahan . " " ?></td>
                      <td><?php echo $data_kelemahan['isi']; ?></td>
                    </tr>
                  <?php } ?>
                </table>
              </td>
            </tr>
            <tr>
              <td>c. </td>
              <td>KEHENDAK SASARAN
                <table>
                  <!-- Kehendak -->
                  <?php
                  $noKehendak = "-";
                  while ($data_kehendak = mysqli_fetch_array($kehendak)) {
                  ?>
                    <tr>
                      <td><?php echo $noKehendak . " " ?></td>
                      <td><?php echo $data_kehendak['isi']; ?></td>
                    </tr>
                  <?php } ?>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td style="vertical-align: top;">4. </td>
        <td>OPOSISI
          <table>
            <!-- OpAktif -->
            <tr>
              <td>a. </td>
              <td>AKTIf
                <table>
                  <?php
                  $noOpAktif = "-";
                  while ($data_op_aktif = mysqli_fetch_array($op_aktif)) {
                  ?>
                    <tr>
                      <td>
                        <?php echo $noOpAktif . " " ?>
                      </td>
                      <td><?php echo $data_op_aktif['isi']; ?></td>
                    </tr>
                  <?php } ?>
                </table>
              </td>
            </tr>
            <!-- OpPasif -->
            <tr>
              <td>b. </td>
              <td>PASIF
                <table>
                  <?php
                  $noOpPasif = "-";
                  while ($data_op_pasif = mysqli_fetch_array($op_pasif)) {
                  ?>
                    <tr>
                      <td>
                        <?php echo $noOpPasif . " " ?>
                      </td>
                      <td><?php echo $data_op_pasif['isi']; ?></td>
                    </tr>
                  <?php } ?>
                </table>
              </td>
            </tr>
            <!-- OpPendukung -->
            <tr>
              <td>c. </td>
              <td>PENDUKUNG
                <table>
                  <?php
                  $noOpPendukung = "-";
                  while ($data_op_pendukung = mysqli_fetch_array($op_pendukung)) {
                  ?>
                    <tr>
                      <td><?php echo $noOpPendukung . " " ?></td>
                      <td><?php echo $data_op_pendukung['isi']; ?></td>
                    </tr>
                  <?php } ?>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>

</body>

</html>
<!-- <script>
  window.print();
</script>
<meta http-equiv="refresh" content="3;url=../index.php?halaman=history"> -->