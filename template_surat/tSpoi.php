<?php

include "../include/koneksi.php";

$id_spoi = $_GET['id'];

$data_spoi = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM spoi WHERE id_spoi = '$id_spoi'"));
$petugas = mysqli_query($koneksi, "SELECT * FROM petugas_spoi WHERE id_spoi = '$id_spoi'");
$menimbang = mysqli_query($koneksi, "SELECT * FROM menimbang_spoi WHERE id_spoi = '$id_spoi'");
$tembusan = mysqli_query($koneksi, "SELECT * FROM tembusan_spoi WHERE id_spoi = '$id_spoi'");

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
        <span style="font-size: 12px"><b>IN.3</b></span>
        <br>
        <span class="size10">Copy ke :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
        <br>
        <span class="size10">Dari :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
    </div>

    <br><br>
    <div>
        <center>
            <span class="size12"><b><u>SURAT PERINTAH OPERASI INTELIJEN</u></b></span>
            <br>
            NOMOR: SP.OPS -
            <?PHP echo $data_spoi['nomor_surat'] . "/" . $data_spoi['kode_pejabat'] . "/" . $data_spoi['kode_masalah'] . "/" . date('m', strtotime($data_spoi['penerbitan'])) . "/" . date('Y', strtotime($data_spoi['penerbitan'])); ?>
            <br><br>
            <b>KEPALA KEJAKSAAN NEGERI KOTA SEMARANG</b></span>
            <br><br>
        </center>

        <!-- ISI -->
        <table style="text-align: justify; text-justify: inter-word; width: 100%; border:1pt solid black">
            <?php
            $noMenimbang = 0;
            while ($data_menimbang = mysqli_fetch_array($menimbang)) {
            ?>
                <tr>
                    <td>
                        <?php if ($noMenimbang == 0) {
                            echo "Menimbang: ";
                        }
                        $noMenimbang++;
                        ?>
                    </td>
                    <td>
                        <?php echo $noMenimbang . ". " ?>
                    </td>
                    <td><?php echo $data_menimbang['isi']; ?></td>
                </tr> <?php
                    }
                        ?>
            <br>

            <tr class="" style="vertical-align:top;">
                <td>Dasar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td>
                <td>1. </td>
                <td>Undang-Undang Nomor 16 Tahun 2004 tentang Kejaksaan Republik Indonesia (Lembaran Negara Repubik Indonesia
                    Tahun 2004 Nomor 67, Tambahan Lembaran Negara Republik Indonesia Nomor 4401);</td>
            </tr>
            <tr style="vertical-align:top;">
                <td></td>
                <td>2. </td>
                <td>Undang-Undang Nomor 17 Tahun 2011 Tentang Intelijen Negara (Lembaran Negara Republik Indonesia Tahun 2011
                    Nomor 105, Tambahan Lembaran Negara Republik Indonesia Nomor 5249);</td>
            </tr>
            <tr>
                <td></td>
                <td>3. </td>
                <td><?php echo $data_spoi['dasar_1'] ?></td>
            </tr>
            <tr style="vertical-align:top;">
                <td></td>
                <td>4. </td>
                <td>Peraturan Presiden Republik Indonesia Nomor 38 Tahun 2010 tentang Organisasi dan Tata Kerja Kejaksaan
                    Republik Indonesia sebagaimana telah diubah dengan Peraturan Presiden Republik Indonesia Nomor 29 Tahun 2016
                    tentang Perubahan atas Peraturan Presiden Republik Indonesia Nomor 38 Tahun 2010 tanggal 15 Juni 2010 tentang
                    Organisasi dan Tata Kerja Kejaksaan Republik Indonesia;</td>
            </tr>
            <tr style="vertical-align:top;">
                <td></td>
                <td>5. </td>
                <td>Peraturan Jaksa Agung Republik Indonesia Nomor : PER-006/A/JA/07/2017 tanggal 20 Juli 2017 tentang
                    Organisasi dan Tata Kerja Kejaksaan Republik Indonesia;</td>
            </tr>
            <tr style="vertical-align:top;">
                <td></td>
                <td>6. </td>
                <td>Peraturan Jaksa Agung Nomor 4 Tahun 2019, tentang Administrasi Intelijen Kejaksaan Republik Indonesia;</td>
            </tr>
            <tr style="vertical-align:top;">
                <td></td>
                <td>7. </td>
                <td><?php echo $data_spoi['dasar_2'] ?></td>
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
                            echo "Petugas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
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
                <td>Untuk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td>
                <td><?php echo "1. " . $data_spoi['untuk_1'] ?></td>
            </tr>
            <tr>
                <td></td>
                <td><?php echo "2. " . $data_spoi['untuk_2'] ?></td>
                <br>
            </tr>
        </table>
    </div>

    <div style="text-align: center; margin-left:65%;">
        <span>
            Dikeluarkan di : <?php echo $data_spoi['tempat'] ?>
            <br>
            Pada tanggal : <?php echo date('d-m-Y', strtotime($data_spoi['penerbitan'])); ?>
            <hr style="width:190px;text-align: right; margin-right:11px;">
        </span>
    </div>
    <div style="text-align: right;">
        <br><br>
        <div style="text-align:center; margin-left:45%">
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