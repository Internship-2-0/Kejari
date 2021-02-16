<?php

include "../include/koneksi.php";

$id_spt = $_GET['id'];

$data_spt = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM spt WHERE id_spt = '$id_spt'"));
$petugas = mysqli_query($koneksi, "SELECT * FROM petugas_spt WHERE id_spt = '$id_spt'");
$menimbang = mysqli_query($koneksi, "SELECT * FROM menimbang_spt WHERE id_spt = '$id_spt'");
$tembusan = mysqli_query($koneksi, "SELECT * FROM tembusan_spt WHERE id_spt = '$id_spt'");

?>

<!DOCTYPE html>
<html style="line-height: 1;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/tSpt.css"> -->
    <title>Document</title>
</head>
<body>
       
	<center>
		<table>
			<tr>
				<td><img src="../img/Logo.png" width="90" height="90" style="margin-right: 10px;"></td>
				<td>
            <div style="margin-left: 10px;">
                <b>
                  <center>
                    <span class="size12">KEJAKSAAN REPUBLIK INDONESIA</span>
                    <br>
                    <span class="size15">KEJAKSAAN TINGGI JAWA TENGAH</span>
                    <br>
                    <span class="size19">KEJAKSAAN NEGERI KOTA SEMARANG</span>
                </b>
                    <br>
                    <span class="size12"> Abdulrahman Saleh No.5-9, Kota Semarang 50145<br>Telp / Fax. (024) 7607507 www.kejari.semarangkota.go.id</span>
                    </center>
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
                <span style="font-size: 12px"><b>IN.1</b></span>
                <br>
                <span class="size10">Copy ke : </span>
                <br>
                <span class="size10">Dari : </span>
            </div>

  <br><br>
  <div>
    <center>
      <span class="size12"><b><u>SURAT PERINTAH TUGAS</u></b></span>
      <br>
      NOMOR: SP.TUG -
      <?PHP echo $data_spt['nomor_surat'] . "/" . $data_spt['kode_pejabat'] . "/" . $data_spt['kode_masalah'] . "/" . date('m', strtotime($data_spt['penerbitan'])). "/" . date('Y', strtotime($data_spt['penerbitan'])); ?>
      <br><br>
      <b>KEPALA KEJAKSAAN NEGERI KOTA SEMARANG</b></span>
      <br><br>
    </center>

    <table style="text-align: justify; text-justify: inter-word; width: 100%;">
      <?php
      $noMenimbang = 0;
      while ($data_menimbang = mysqli_fetch_array($menimbang)) {
      ?> <tr>
        <td><?php if ($noMenimbang == 0) {
                echo "Menimbang: ";
              }
              $noMenimbang++; ?></td>
        <td><?php echo $noMenimbang . ". " ?></td>
        <td><?php echo $data_menimbang['isi']; ?></td>
      </tr> <?php
            }
              ?>
        <br>

      <tr class="">
        <td>Dasar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td>
        <td>1. </td>
        <td>Undang-Undang Nomor 16 Tahun 2004 tentang Kejaksaan Republik Indonesia (Lembaran Negara Repubik Indonesia
          Tahun 2004 Nomor 67, Tambahan Lembaran Negara Republik Indonesia Nomor 4401);</td>
      </tr>
      <tr>
        <td></td>
        <td>2. </td>
        <td>Undang-Undang Nomor 17 Tahun 2011 Tentang Intelijen Negara (Lembaran Negara Republik Indonesia Tahun 2011
          Nomor 105, Tambahan Lembaran Negara Republik Indonesia Nomor 5249);</td>
      </tr>
      <tr>
        <td></td>
        <td>3. </td>
        <td><?php echo $data_spt['dasar_1'] ?></td>
      </tr>
      <tr>
        <td></td>
        <td>4. </td>
        <td>Peraturan Presiden Republik Indonesia Nomor 38 Tahun 2010 tentang Organisasi dan Tata Kerja Kejaksaan
          Republik Indonesia sebagaimana telah diubah dengan Peraturan Presiden Republik Indonesia Nomor 29 Tahun 2016
          tentang Perubahan atas Peraturan Presiden Republik Indonesia Nomor 38 Tahun 2010 tanggal 15 Juni 2010 tentang
          Organisasi dan Tata Kerja Kejaksaan Republik Indonesia;</td>
      </tr>
      <tr>
        <td></td>
        <td>5. </td>
        <td>Peraturan Jaksa Agung Republik Indonesia Nomor : PER-006/A/JA/07/2017 tanggal 20 Juli 2017 tentang
          Organisasi dan Tata Kerja Kejaksaan Republik Indonesia;</td>
      </tr>
      <tr>
        <td></td>
        <td>6. </td>
        <td>Peraturan Jaksa Agung Nomor 4 Tahun 2019, tentang Administrasi Intelijen Kejaksaan Republik Indonesia;</td>
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
      <?php
      $noPetugas = 0;
      while ($data_petugas = mysqli_fetch_array($petugas)) {
        $nip = $data_petugas['nip'];
        $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM pegawai WHERE nip = '$nip'"));
      ?> <tr>
        <td><?php if ($noPetugas == 0) {
                echo "Petugas : ";
              }
              $noPetugas++; ?></td>
        <td>
          <?php echo $noPetugas . ". " ?>
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
        <td><?php echo "1. " . $data_spt['untuk_1'] ?></td>
      </tr>
      <tr>
        <td></td>
        <td><?php echo "2. " . $data_spt['untuk_2'] ?></td>
      </tr>
    </table>
  </div>


  <div style="text-align: right;">
    <span>
      Dikeluarkan di : <?php echo $data_spt['tempat'] ?>
      <br>
      Pada tanggal : <?php echo date('d-m-Y', strtotime($data_spt['penerbitan'])); ?>
      <hr>
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
    <table>
      <?php
      $noTembusan = 0;
      while ($data_tembusan = mysqli_fetch_array($tembusan)) {
      ?>
      <tr>
        <td><?php if ($noTembusan == 0) {
                echo "Tembusan : ";
              }
              $noTembusan++; ?></td>
        <td><?php echo $noTembusan . ". " ?></td>
        <td><?php echo $data_tembusan['isi']; ?></td>
      </tr> <?php
            }
              ?>
    </table>
  </div>
</body>
</html>


<script>
  window.print();
</script>
<meta http-equiv="refresh" content="3;url=../index.php?halaman=history">