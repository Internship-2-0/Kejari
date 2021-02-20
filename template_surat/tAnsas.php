<!-- <?php

include "../include/koneksi.php";

$id_spt = $_GET['id'];

$data_spt = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM spt WHERE id_spt = '$id_spt'"));
$petugas = mysqli_query($koneksi, "SELECT * FROM petugas_spt WHERE id_spt = '$id_spt'");
$menimbang = mysqli_query($koneksi, "SELECT * FROM menimbang_spt WHERE id_spt = '$id_spt'");
$tembusan = mysqli_query($koneksi, "SELECT * FROM tembusan_spt WHERE id_spt = '$id_spt'");

?> -->

<!DOCTYPE html>
<html style="line-height: 1;">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="../css/tSpt.css"> -->
  <title>Document</title>
</head>
<body style="font-family:Arial, Helvetica, sans-serif">
<div style="margin: 1.75cm 1.8cm 2.06cm 2.22cm ;">       
	<center>
		<table>
			<tr>
				<td><img src="../img/Logo.png" width="100" height="100" style="margin-right: 10px;"></td>
				<td>
            <div>
                <b>
                  <center>
                    <span style="font-size: 12pt;">KEJAKSAAN REPUBLIK INDONESIA</span>
                    <br>
                    <span style="font-size: 15pt;">KEJAKSAAN TINGGI JAWA TENGAH</span>
                    <br>
                    <span style="font-size: 16pt;">KEJAKSAAN NEGERI KOTA SEMARANG</span>
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
    <span style="font-size: 12px"><b>IN.4</b></span>
    <br>
    <span class="size10">Copy ke :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
    <br>
    <span class="size10">Dari :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
  </div>

<center>
  <b><span style="font-size: 12pt;">ANALISA SASARAN</span></b>
  <br>
  <br>
</center>

<table style="font-size: 11pt; vertical-align:top;">
  <tr>
    <td style="vertical-align: top;">1. </td>
    <td>SASARAN</td>
  </tr>
  <tr>
    <td></td>
    <td>Kegiatan pengamanan (PAM) dan penggalangan (GAL) untuk mendukung kegiatan Seksi Tindak Pidana Umum dan Seksi Tindak Pidana Khusus Kejaksaan Negeri Kota Semarang</td>
  </tr>
  <tr>
    <td style="vertical-align: top;">2. </td>
    <td>KONDISI DAN SITUASI SASARAN</td>
  </tr>
  <tr>
    <td></td>
    <td>
      <table style="font-size: 11pt;">
        <tr>
          <td style="vertical-align: top;">a. </td>
          <td>Surat Perintah Operasi Intelijen Kepala Kejaksaan Negeri Kota Surat Perintah Operasi Intelijen Nomor : SP.OPS- 1 /M.3.10/Dip.4/01/2021, tanggal 04 Januari 2021 untuk mendukung kegiatan Seksi Tindak Pidana Umum dan Seksi Tindak Pidana Khusus Kejaksaan Negeri Kota Semarang </td>
        </tr>
        <tr>
          <td style="vertical-align: top;">b. </td>
          <td>Bahwa diperlukan pengamanan (PAM) dan penggalangan (GAL) dalam pelaksanaan penyerahan tersangka dan barang bukti maupun pengamanan setiap kegiatan persidangan agar berjalan dengan aman serta mengantisipasi hal-hal yang dapat menimbulkan AGHT yang dapat mengganggu jalannya kegiatan tersebut.</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>3.</td>
    <td>KEKUATAN, KELEMAHAN DAN KEHENDAK SASARAN</td>
  </tr>
  <tr>
    <td></td>
    <td>
      <table>
        <tr>
          <td>a. </td>
          <td>KEKUATAN</td>
        </tr>
        <tr>
          <td></td>
          <td>
              <table>
                <tr>
                  <td style="vertical-align: top;">-</td>
                  <td>Personil Pengamanan didukung oleh banyak pihak, yakni terdiri atas : Tim Intelijen Kejaksaan Negeri Kota Semarang.</td>
                </tr>
              </table>
          </td>
        </tr>
        <tr>
          <td>b. </td>
          <td>KELEMAHAN</td>
        </tr>
        <tr>
          <td></td>
          <td>
              <table>
                <tr>
                  <td style="vertical-align: top;">-</td>
                  <td>Ketersediaan ruangan untuk koordinasi maupun pada saat penyerahan tersangka dan barang bukti yang terbatas.</td>
                </tr>
              </table>
          </td>
        </tr>
        <tr>
          <td>c. </td>
          <td>KEHENDAK SASARAN</td>
        </tr>
        <tr>
          <td></td>
          <td>
              <table>
                <tr>
                  <td style="vertical-align: top;">-</td>
                  <td>Pelaksanaan pengamanan Sumber Daya Organisasi (SDO) dan pengamanan penanganan perkara tersebut dapat berhasil dan berjalan dengan aman.</td>
                </tr>
              </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>4. </td>
    <td>OPOSISI</td>
  </tr>
  <tr>
    <td></td>
    <td>
      <table>
        <tr>
          <td>a. </td>
          <td>AKTIF</td>
        </tr>
        <tr>
          <td></td>
          <td>
              <table>
                <tr>
                  <td style="vertical-align: top;">-</td>
                  <td>Mengantisipasi tersangka / terdakwa yang berusaha melarikan diri pada saat penyerahan tersangka dari penyidik ke Kejaksaan Negeri Kota Semarang.</td>
                </tr>
              </table>
          </td>
        </tr>
        <tr>
          <td>b. </td>
          <td>KELEMAHAN</td>
        </tr>
        <tr>
          <td></td>
          <td>
              <table>
                <tr>
                  <td style="vertical-align: top;">-</td>
                  <td>Ketersediaan ruangan untuk koordinasi maupun pada saat penyerahan tersangka dan barang bukti yang terbatas.</td>
                </tr>
              </table>
          </td>
        </tr>
        <tr>
          <td>c. </td>
          <td>KEHENDAK SASARAN</td>
        </tr>
        <tr>
          <td></td>
          <td>
              <table>
                <tr>
                  <td style="vertical-align: top;">-</td>
                  <td>Pelaksanaan pengamanan Sumber Daya Organisasi (SDO) dan pengamanan penanganan perkara tersebut dapat berhasil dan berjalan dengan aman.</td>
                </tr>
              </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>

</body>
</html>
<script>
  window.print();
</script>
<meta http-equiv="refresh" content="3;url=../index.php?halaman=history">