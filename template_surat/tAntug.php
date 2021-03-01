<!-- <?php

        include "../include/koneksi.php";

        $id_antug = $_GET['id'];

        $data_antug = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM antug WHERE id_antug = '$id_antug'"));
        $petugas = mysqli_query($koneksi, "SELECT * FROM petugas_antug WHERE id_antug = '$id_antug'");
        $menimbang = mysqli_query($koneksi, "SELECT * FROM menimbang_antug WHERE id_antug = '$id_antug'");
        $tembusan = mysqli_query($koneksi, "SELECT * FROM tembusan_antug WHERE id_antug = '$id_antug'");

        ?> -->

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
            <tr>
                <td style="vertical-align: top;">1. </td>
                <td>INDENTIFIKASI TUGAS</td>
            </tr>
            <tr>
                <td></td>
                <td>Pengamanan (PAM) dan penggalangan (GAL) terkait dengan Surat Perintah Operasi Intelijen Nomor : SP.OPS- 1 /M.3.10/Dip.4/01/2021, tanggal 04 Januari 2021, untuk mendukung kegiatan Seksi Tindak Pidana Umum dan Seksi Tindak Pidana Khusus Kejaksaan Negeri Kota Semarang</td>
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
                                    <tr>
                                        <td style="vertical-align: top;">-</td>
                                        <td>Mengantisipasi adanya kemungkinan hilangnya Barang Bukti pada saat penyerahan Barang Bukti dari penyidik ke Kejaksaan Negeri Kota Semarang.</td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: top;">-</td>
                                        <td>Mengantisipasi adanya pengunjung maupun keluarga korban / terdakwa yang membuat gaduh di persidangan.</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>b. </td>
                            <td>PASIF</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <table>
                                    <tr>
                                        <td style="vertical-align: top;">-</td>
                                        <td>Mengantisipasi adanya pihak luar yang tidak berkepentingan yang mengganggu jalannya kegiatan.</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>c. </td>
                            <td>PENDUKUNG</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <table>
                                    <tr>
                                        <td style="vertical-align: top;">-</td>
                                        <td>Pelaksanaan pengamanan Sumber Daya Organisasi (SDO) dan pengamanan penanganan perkara didukung personil Tim Intelijen Kejaksaan Negeri Kota Semarang dan pihak-pihak yang terkait lainnya.</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <br>
        <br>

        <div style="margin-left:200pt">
            <center>
                <span>Semarang, 04 Januari 2021</span>
                <br>
                <span>Kepala Seksi Intelijen</span>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <span style="border-bottom: 1px solid currentColor">Subagio Gigih Wijaya, S.H., M.H.</span>
                <br>
                <span>Jaksa Muda NIP. 19851116 200812 1 001</span>
            </center>
        </div>

</body>

</html>
<script>
    window.print();
</script>
<meta http-equiv="refresh" content="3;url=../index.php?halaman=history">