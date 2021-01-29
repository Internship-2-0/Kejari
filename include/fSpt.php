<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

<?php
    include "koneksi.php";

    //data petugas
    $data_petugas = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM petugas"));



?>

<script lang="javascript">
    //append menimbang
    var jmlhMenimbang = 1;
    function tambahMenimbang(){
        var strMenimbang;
        strMenimbang = "<div id=\"srow" + jmlhMenimbang + "\"><input type=\"text\" name=\"menimbang[]\" class=\"form-control\" placeholder=\"menimbang " + jmlhMenimbang + "\"/> <button href=\"#\" class=\"btn btn-primary mt-2 mb-2\" onclick=\"hapusElemen(srow" + jmlhMenimbang +",jmlhMenimbang); return false;\">Hapus</button></div >";
        $("#menimbang").append(strMenimbang);
        jmlhMenimbang += 1;
    }

    //append petugas
    var jmlhPetugas = 1;
    function tambahPetugas(){
        var strPetugas;
        strPetugas = "<div id=\"srow" + jmlhPetugas + "\"><select name=\"petugasSpt[]\" class=\"form-control\" placeholder=\"menimbang " + jmlhMenimbang + "\"/> <button href=\"#\" class=\"btn btn-primary mt-2 mb-2\" onclick=\"hapusElemen(srow" + jmlhMenimbang +",jmlhMenimbang); return false;\">Hapus</button></div >";
    }

    //hapus elemen/append
    function hapusElemen(srowKe, total){
        $(srowKe).remove();
        total -= 1;
    }
</script>