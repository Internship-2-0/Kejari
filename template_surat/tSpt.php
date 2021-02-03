<?php

  include "../include/koneksi.php";

  $id_spt = $_GET['id'];

  $data_spt = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM spt WHERE id_spt = '$id_spt'"));
  $petugas = mysqli_query($koneksi, "SELECT * FROM petugas_spt WHERE id_spt = '$id_spt'");
  $menimbang = mysqli_query($koneksi, "SELECT * FROM menimbang_spt WHERE id_spt = '$id_spt'");
  $tembusan = mysqli_query($koneksi, "SELECT * FROM tembusan_spt WHERE id_spt = '$id_spt'");
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/tSpt.css">
  <title>Document</title>
</head>

<body class="margin_surat fonts">
  <div class="height center">
    <b>
      <span class="size12">KEJAKSAAN REPUBLIK INDONESIA</span>
      <br>
      <span class="size15">KEJAKSAAN TINGGI JAWA TENGAH</span>
      <br>
      <span class="size19">KEJAKSAAN NEGERI KOTA SEMARANG</span>
    </b>
    <br>
    <span class="size12"> Abdulrahman Saleh No.5-9, Kota Semarang 50145
      <br>
      Telp / Fax. (024) 7607507 www.kejari.semarangkota.go.id</span>
    <hr>
  </div>

  <div class="right">
    <span class="size12"><b>IN.1</b></span>
    <br><br>
    <span class="size10">Copy ke : </span>
    <br>
    <span class="size10">Dari : </span>
  </div>
  <br><br>

  <div>
    <center>
      <span class="size12"><b><u>SURAT PERINTAH TUGAS</u></b></span>
      <br>
      NOMOR: SP.TUG - <?PHP echo $data_spt['nomor_surat'] . "/" . $data_spt['kode_pejabat'] . "/" . $data_spt['kode_masalah'] . "/" . date('m-Y', strtotime($data_spt['penerbitan'])); ?>
      <br><br>
      <b>KEPALA KEJAKSAAN NEGERI KOTA SEMARANG</b></span>
      <br><br>
    </center>

    <table class="size11">
      <!-- <tr>
        <td>Menimbang : </td>
        <td></td>
      </tr> -->
      <?php 
        $noMenimbang = 0;
        while($data_menimbang = mysqli_fetch_array($menimbang)){
          ?> <tr>
          
          <td><?php if($no==0){
            echo "Menimbang : ";
            } $menimbang++;?></td>
            <td><?php echo $no . ". " ?></td>
          <td><?php echo $data_menimbang['isi']; ?></td>
          </tr> <?php
        }

      ?>
    </table>
    <br>

    <table>
      <tr>
        <td>Dasar : </td>
        <td>3. </td>
        <td><?php echo $data_spt['dasar_1'] ?></td>
      </tr>
      <tr>
        <td></td>
        <td>7. </td>
        <td><?php echo $data_spt['dasar_2'] ?></td>
      </tr>
    </table>
    <br>

    <span class="size11">
      <center><b>M E M E R I N T A H K A N</b></center>
    </span>
    <br>

    <table class="size11">
      <!-- <tr>
        <td>Kepada : </td>
        <td></td>
        <td></td>
      </tr> -->
      <?php 
      $noPetugas = 0;
        while($data_petugas = mysqli_fetch_array($petugas)){
          $nip = $data_petugas['nip'];
          $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM petugas WHERE nip = '$nip'"));
          ?> <tr>
            <td><?php if($noPetugas == 0){
              echo "Petugas : ";
            } $noPetugas++; ?></td>
              <td>
            <?php echo $noPetugas . ". "?>
            </td>
            <td>Nama</td>
            <td> <?php echo ": " . $data['nama'] ?></td>
          </tr> 
          <tr>
            <td></td>
            <td></td>
            <td>Pangkat</td>
            <td><?php echo ": " . $data['pangkat'] ?></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>NIP</td>
            <td><?php echo ": " . $data['nip'] ?></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>Jabatan</td>
            <td><?php echo ": " . $data['jabatan'] ?></td>
          </tr>
        <?php }
      ?>
    </table>

    <table class="size11">
      <tr>
        <td>Untuk : </td>
        <td></td>
        <td></td>
      </tr>
    </table>
  </div>


  <div class="right size11">
    <span>
      Dikeluarkan di : (Kota)
      <br>
      Pada tanggal : (Tgl terbit)
    </span>
    <br><br>
    <span><b>KEPALA KEJAKSAAN NEGERI KOTA SEMARANG,</b></span>
    <br><br><br><br><br>
    <span><b>SUMURUNG P. SIMAREMARE, S.H., M.H.</b></span>
    <br>
    <span><b>JAKSA UTAMA PRATAMA NIP. 197007221993031003</b></span>
  </div>
  <br>

  <div>
    <span>Tembusan : </span>
    <table>
      <tr>
        <td></td>
        <td></td>
      </tr>
    </table>
  </div>


</body>

</html>

<script>
  window.print();
</script>