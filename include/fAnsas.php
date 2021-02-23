<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

<?php
include "koneksi.php";

function inputDatabase($koneksi)
{
    if (isset($_POST['sasaran'])) {
        //ansas
        $sasaran = $_POST['sasaran'];
        $kondisi_situasi = $_POST['kondisi_situasi'];
        $kekuatan = $_POST['kekuatan'];
        $kelemahan = $_POST['kelemahan'];
        $kehendak = $_POST['kehendak'];
        $op_aktif = $_POST['op_aktif'];
        $op_pasif = $_POST['op_pasif'];
        $op_pendukung = $_POST['op_pendukung'];
        $penerbitan = $_POST['penerbitan'];

        mysqli_query($koneksi, "INSERT INTO ansas (sasaran, kondisi_situasi, kekuatan, penerbitan, kehendak, op_aktif, op_pasif, op_pendukung, penerbitan) VALUES ('$sasaran', '$kondisi_situasi', '$kekuatan', '$kelemahan', '$kehendak', '$op_aktif', '$op_pasif', '$op_pendukung', '$penerbitan'");

        //id ansas
        $ansas = mysqli_query($koneksi, "SELECT * FROM ansas WHERE id_ansas IN (SELECT MAX(id_ansas) FROM ansas)");
        $ansas_terakhir = mysqli_fetch_array($ansas);
        $id_ansas = $ansas_terakhir['id_ansas'];

        //menimbang
        foreach ($_POST['menimbang'] as $isi) {
            mysqli_query($koneksi, "INSERT INTO menimbang_ansas (id_ansas, isi) VALUES ('$id_ansas', '$isi')");
        }

        //petugas
        foreach ($_POST['petugas'] as $nip) {
            mysqli_query($koneksi, "INSERT INTO petugas_ansas (id_ansas, nip) VALUES ('$id_ansas', '$nip')");
        }

        //tembusan
        foreach ($_POST['tembusan'] as $isi) {
            mysqli_query($koneksi, "INSERT INTO tembusan_ansas (id_ansas, isi) VALUES ('$id_ansas', '$isi')");
        }

        echo "<script> alert('Pembuatan Surat Sukses') </script>";
        echo "<meta http-equiv='refresh' content='0; url=../kejari/template_surat/tansas.php?id=" . $id_ansas . "'>";
    }
}

?>

<script lang="javascript">
    //append kondisi_situasi
    var jmlhKondisiSituasi = 1;

    function tambahKondisiSituasi() {
        var strKondisiSituasi;
        strKondisiSituasi = "<div id=\"kondisi_row" + jmlhKondisiSituasi +
            "\" class=\"mb-2\" ><textarea name=\"kondisi_situasi[]\" class=\"form-control\" placeholder=\"kondisi & situasi " +
            jmlhKondisiSituasi + "\"/></div >";
        $("#kondisi_situasi").append(strKondisiSituasi);
        jmlhKondisiSituasi += 1;
    }

    //append kekuatan
    var jmlhKekuatan = 1;

    function tambahKekuatan() {
        var strKekuatan;
        strKekuatan = "<div id=\"kekuatan_row" + jmlhKekuatan +
            "\" class=\"mb-2\" ><textarea \"name=\"kekuatan[]\" class=\"form-control\" placeholder=\"kekuatan " +
            jmlhKekuatan + "\"/></div >";
        $("#kekuatan").append(strKekuatan);
        jmlhKekuatan += 1;
    }

    //append kelemahan
    var jmlhKelemahan = 1;

    function tambahKelemahan() {
        var strKelemahan;
        strKelemahan = "<div id=\"kelemahan_row" + jmlhKelemahan +
            "\" class=\"mb-2\" ><textarea \"name=\"kelemahan[]\" class=\"form-control\" placeholder=\"kelemahan " +
            jmlhKelemahan + "\"/></div >";
        $("#kelemahan").append(strKelemahan);
        jmlhKelemahan += 1;
    }

    //append kehendak
    var jmlhKehendak = 1;

    function tambahKehendak() {
        var strKehendak;
        strKehendak = "<div id=\"kehendak_row" + jmlhKehendak +
            "\" class=\"mb-2\" ><textarea \"name=\"kehendak[]\" class=\"form-control\" placeholder=\"kehendak " +
            jmlhKehendak + "\"/></div >";
        $("#kehendak").append(strKehendak);
        jmlhKehendak += 1;
    }

    //append op_aktif
    var jmlhOpAktif = 1;

    function tambahOpAktif() {
        var strOpAktif;
        strOpAktif = "<div id=\"op_aktif_row" + jmlhOpAktif +
            "\" class=\"mb-2\" ><textarea \"name=\"op_aktif[]\" class=\"form-control\" placeholder=\"op_aktif " +
            jmlhOpAktif + "\"/></div >";
        $("#op_aktif").append(strOpAktif);
        jmlhOpAktif += 1;
    }

    //append kekuatan
    var jmlhOpPasif = 1;

    function tambahOpPasif() {
        var strOpPasif;
        strOpPasif = "<div id=\"op_pasif_row" + jmlhOpPasif +
            "\" class=\"mb-2\" ><textarea \"name=\"op_Pasif[]\" class=\"form-control\" placeholder=\"OpPasif " +
            jmlhOpPasif + "\"/></div >";
        $("#op_pasif").append(strOpPasif);
        jmlhOpPasif += 1;
    }

    //append kekuatan
    var jmlhOpPendukung = 1;

    function tambahOpPendukung() {
        var strOpPendukung;
        strOpPendukung = "<div id=\"op_pendukung_row" + jmlhOpPendukung +
            "\" class=\"mb-2\" ><textarea \"name=\"op_pendukung[]\" class=\"form-control\" placeholder=\"OpPendukung " +
            jmlhOpPendukung + "\"/></div >";
        $("#op_pendukung").append(strOpPendukung);
        jmlhOpPendukung += 1;
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