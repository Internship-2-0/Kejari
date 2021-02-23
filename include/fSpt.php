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
    if (isset($_POST['nomor_surat'])) {
        //spt
        $nomor_surat = $_POST['nomor_surat'];
        $kode_pejabat = $_POST['kode_pejabat'];
        $kode_masalah = $_POST['kode_masalah'];
        $tanggal_terbit = $_POST['tanggal_terbit'];
        $dasar_1 = $_POST['dasar_1'];
        $dasar_2 = $_POST['dasar_2'];
        $untuk_1 = $_POST['untuk_1'];
        $untuk_2 = $_POST['untuk_2'];
        $mulai = $_POST['mulai'];
        $selesai = $_POST['selesai'];
        $tempat = $_POST['tempat'];

        mysqli_query($koneksi, "INSERT INTO spt (nomor_surat, kode_pejabat, kode_masalah, penerbitan, dasar_1, dasar_2, untuk_1, untuk_2, mulai, selesai, tempat) VALUES ('$nomor_surat', '$kode_pejabat', '$kode_masalah', '$tanggal_terbit', '$dasar_1', '$dasar_2', '$untuk_1', '$untuk_2', '$mulai', '$selesai', '$tempat')");

        //id spt
        $spt = mysqli_query($koneksi, "SELECT * FROM spt WHERE id_spt IN (SELECT MAX(id_spt) FROM spt)");
        $spt_terakhir = mysqli_fetch_array($spt);
        $id_spt = $spt_terakhir['id_spt'];

        //menimbang
        foreach ($_POST['menimbang'] as $isi) {
            mysqli_query($koneksi, "INSERT INTO menimbang_spt (id_spt, isi) VALUES ('$id_spt', '$isi')");
        }

        //petugas
        foreach ($_POST['petugas'] as $nip) {
            mysqli_query($koneksi, "INSERT INTO petugas_spt (id_spt, nip) VALUES ('$id_spt', '$nip')");
        }

        //tembusan
        foreach ($_POST['tembusan'] as $isi) {
            mysqli_query($koneksi, "INSERT INTO tembusan_spt (id_spt, isi) VALUES ('$id_spt', '$isi')");
        }

        echo "<script> alert('Pembuatan Surat Sukses') </script>";
        echo "<meta http-equiv='refresh' content='0; url=../kejari/template_surat/tSpt.php?id=" . $id_spt . "'>";
    }
}

?>

<script lang="javascript">
    //append menimbang
    var jmlhMenimbang = 1;

    function tambahMenimbang() {
        var strMenimbang;
        strMenimbang = "<div id=\"srow" + jmlhMenimbang +
            "\" class=\"mb-2\" ><input type=\"text\" name=\"menimbang[]\" class=\"form-control\" placeholder=\"menimbang " +
            jmlhMenimbang + "\"/></div >";
        $("#menimbang").append(strMenimbang);
        jmlhMenimbang += 1;
    }

    //append tembusan
    var jmlhTembusan = 1;

    function tambahTembusan() {
        var strTembusan;
        strTembusan = "<div id=\"trow" + jmlhTembusan +
            "\" class=\"mb-2\" ><input type=\"text\" name=\"tembusan[]\" class=\"form-control\" placeholder=\"tembusan " +
            jmlhTembusan + "\"/></div >";
        $("#tembusan").append(strTembusan);
        jmlhTembusan += 1;
    }

    //hapus elemen/append
    function hapusMenimbang() {
        if (jmlhMenimbang != 1) {
            jmlhMenimbang -= 1;
            $("#srow" + jmlhMenimbang).remove();
        }
    }

    //hapus elemen/append
    function hapusTembusan() {
        if (jmlhTembusan != 1) {
            jmlhTembusan -= 1;
            $("#trow" + jmlhTembusan).remove();
        }
    }

    $(document).ready(function() {
        //pilih petugas
        $("#pilihPetugas").select2({
            placeholder: 'Pilih Petugas '
        });
    })
</script>