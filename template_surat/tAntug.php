<?php

include "../include/koneksi.php";

$id_antug = $_GET['id'];

$data_antug = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM antug WHERE id_antug = '$id_antug'"));
$petugas = mysqli_query($koneksi, "SELECT * FROM pelaksana_tugas_antug WHERE id_antug = '$id_antug'");
$pelaporan_evaluasi = mysqli_query($koneksi, "SELECT * FROM pelaporan_evaluasi_antug WHERE id_antug = '$id_antug'");

?>

<!DOCTYPE html>
<html style="line-height: 1;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/tantug.css"> -->
    <title>Document</title>
</head>

<body style="font-family:Arial, Helvetica, sans-serif">
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
            <span style="font-size: 12px"><b>IN.5</b></span>
            <br>
            <span class="size10">Copy ke :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
            <br>
            <span class="size10">Dari :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
        </div>

        <center>
            <b><span style="font-size: 12pt;">ANALISA TUGAS</span></b>
            <br>
            <br>
        </center>

        <table style="font-size: 11pt; vertical-align:top;">
            <!-- IDENTIFIKASI TUGAS -->
            <tr>
                <td style="vertical-align: top;">1. </td>
                <td>IDENTIFIKASI TUGAS</td>
            </tr>
            <tr>
                <td></td>
                <td><?php echo $data_antug['identifikasi_tugas'] ?></td>
            </tr>

            <!-- URAIAN TUGAS -->
            <tr>
                <td style="vertical-align: top;">2. </td>
                <td>URAIAN TUGAS
                    <table>
                        <tr>
                            <td>Waktu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td>
                            <td><?php echo $data_antug['penerbitan'] ?></td>
                        </tr>
                        <tr>
                            <td>Tempat&nbsp;&nbsp;&nbsp;&nbsp;: </td>
                            <td><?php echo $data_antug['tempat_tugas'] ?></td>
                        </tr>
                        <tr>
                            <td>Sasaran&nbsp;&nbsp;&nbsp;: </td>
                            <td><?php echo $data_antug['sasaran_tugas'] ?></td>
                        </tr>
                        <tr>
                            <td>Informasi yang diperlukan: </td>
                            <td><?php echo $data_antug['informasi_diperlukan'] ?></td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- PELAKSANA TUGAS -->
            <tr>
                <td style="vertical-align: top;">3. </td>
                <td>PELAKSANA TUGAS
                    <table class="size11">
                        <?php
                        $noPetugas = 'a';
                        while ($data_petugas = mysqli_fetch_array($petugas)) {
                            $nip = $data_petugas['nip'];
                            $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM pegawai WHERE nip = '$nip'"));
                        ?>
                            <tr>
                                <td></td>
                                <td>
                                    <?php echo $noPetugas . ". " ?>
                                </td>
                                <td> <?php echo $data['nama'] ?></td>
                            </tr>
                        <?php
                            $noPetugas++;
                        }
                        ?>
                    </table>
                </td>
            </tr>

            <!-- SARANA PENDUKUNG -->
            <tr>
                <td style="vertical-align: top;">4. </td>
                <td>SARANA PENDUKUNG
                    <table>
                        <tr>
                            <td>a. Sumber Daya Manusia: </td>
                            <td><?php echo $data_antug['sarana_pendukung_1'] ?></td>
                        </tr>
                        <tr>
                            <td>b. Teknologi Intelijen: </td>
                            <td><?php echo $data_antug['sarana_pendukung_2'] ?></td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- 5.	KOMUNIKASI DAN KOORDINASI -->
            <tr>
                <td style="vertical-align: top;">5. </td>
                <td>KOMUNIKASI DAN KOORDINASI
                    <table>
                        <tr>
                            <td><?php echo $data_antug['komunikasi_koordinasi'] ?></td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- PELAPORAN DAN EVALUASI -->
            <tr>
                <td style="vertical-align: top;">6. </td>
                <td>PELAPORAN DAN EVALUASI
                    <table>
                        <?php
                        $noPelaporanEvaluasi = 'a';
                        while ($data_pelaporan_evaluasi = mysqli_fetch_array($pelaporan_evaluasi)) {
                        ?>
                            <tr style="vertical-align: top;">
                                <td><?php echo $noPelaporanEvaluasi . ". " ?></td>
                                <td><?php echo $data_pelaporan_evaluasi['isi']; ?></td>
                            </tr>
                        <?php
                            $noPelaporanEvaluasi++;
                        }
                        ?>
                    </table>
                </td>
            </tr>

        </table>

        <div style="text-align: center; margin-left:45%;">
            <br>
            <span>
                Semarang, <?php echo date('d M Y', strtotime($data_antug['penerbitan'])); ?>
            </span>
            <br>
            <div>
                <span>Kepala Seksi Intelijen</span>
                <br><br><br><br><br>
                <span><u>Subagio Gigih Wijaya, S.H., M.H.</u></span>
                <br>
                <span>Jaksa Muda NIP. 19851116 200812 1 001</span>
            </div>
        </div>

</body>

</html>
<script>
    window.print();
</script>
<meta http-equiv="refresh" content="3;url=../index.php?halaman=history">