<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

<?php
include "koneksi.php";

//data petugas
$petugas = mysqli_query($koneksi, "SELECT * FROM `pegawai` ORDER BY `pegawai`.`nip` ASC");

//tampil petugas
function tampilPetugas($koneksi, $petugas)
{
    while ($data_petugas = mysqli_fetch_array($petugas)) {
        if ($data_petugas['nip'] != null) {
?>
            <option value="<?php echo $data_petugas['nip'] ?>"><?php echo $data_petugas['nip'] ?> -
                <?php echo $data_petugas['nama'] ?></option>
<?php
        }
    }
}

function inputDatabase($koneksi)
{
    if (isset($_POST['tanggal_terbit'])) {
        //antug
        $identifikasi_tugas = $_POST['identifikasi_tugas'];
        $tanggal_terbit = $_POST['tanggal_terbit'];
        $mulai_tugas = $_POST['mulai_tugas'];
        $tempat_tugas = $_POST['tempat_tugas'];
        $sasaran_tugas = $_POST['sasaran_tugas'];
        $informasi_diperlukan = $_POST['informasi_diperlukan'];
        $sarana_pendukung_1 = $_POST['sarana_pendukung_1'];
        $sarana_pendukung_2 = $_POST['sarana_pendukung_2'];
        $komunikasi_koordinasi = $_POST['komunikasi_koordinasi'];

        mysqli_query($koneksi, "INSERT INTO antug (identifikasi_tugas, penerbitan, mulai_tugas, tempat_tugas, sasaran_tugas, informasi_diperlukan, sarana_pendukung_1, sarana_pendukung_2, komunikasi_koordinasi) VALUES ('$identifikasi_tugas', '$tanggal_terbit', '$mulai_tugas', '$tempat_tugas', '$sasaran_tugas', '$informasi_diperlukan', '$sarana_pendukung_1', '$sarana_pendukung_2', '$komunikasi_koordinasi')");

        //id antug
        $antug = mysqli_query($koneksi, "SELECT * FROM antug WHERE id_antug IN (SELECT MAX(id_antug) FROM antug)");
        $antug_terakhir = mysqli_fetch_array($antug);
        $id_antug = $antug_terakhir['id_antug'];

        //pelaporan_evaluasi
        foreach ($_POST['pelaporan_evaluasi'] as $isi) {
            mysqli_query($koneksi, "INSERT INTO pelaporan_evaluasi_antug (id_antug, isi) VALUES ('$id_antug', '$isi')");
        }

        //petugas
        foreach ($_POST['petugas'] as $nip) {
            mysqli_query($koneksi, "INSERT INTO pelaksana_tugas_antug (id_antug, nip) VALUES ('$id_antug', '$nip')");
        }

        echo "<script> alert('Pembuatan Surat Sukses') </script>";
        echo "<meta http-equiv='refresh' content='0; url=../kejari/template_surat/tantug.php?id=" . $id_antug . "'>";
    }
}

?>

<script lang="javascript">
    //append pelaporan & evaluasi
    var jmlhPelaporanEvaluasi = 1;

    function tambahPelaporanEvaluasi() {
        var strPelaporanEvaluasi;
        strPelaporanEvaluasi = "<div id=\"pelaporan_evaluasi_row" + jmlhPelaporanEvaluasi +
            "\" class=\"mb-2\" ><input type=\"text\" name=\"pelaporan_evaluasi[]\" class=\"form-control\" placeholder=\"Pelaporan & Evaluasi " +
            jmlhPelaporanEvaluasi + "\"/></div >";
        $("#pelaporan_evaluasi").append(strPelaporanEvaluasi);
        jmlhPelaporanEvaluasi += 1;
    }

    //hapus elemen/append
    function hapusPelaporanEvaluasi() {
        if (jmlhPelaporanEvaluasi != 1) {
            jmlhPelaporanEvaluasi -= 1;
            $("#pelaporan_evaluasi_row" + jmlhPelaporanEvaluasi).remove();
        }
    }

    $(document).ready(function() {
        //pilih petugas
        $("#pilihPetugas").select2({
            placeholder: 'Pilih Petugas '
        });
    })
</script>