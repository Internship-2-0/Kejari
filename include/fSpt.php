<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script lang="javascript">
    //append menimbang
    var jmlhMenimbang = 1;
    function tambahMenimbang(){
        var stre;
        stre = "<div id=\"srow" + jmlhMenimbang + "\"><input type=\"text\" name=\"menimbang[]\" class=\"form-control\" placeholder=\"menimbang " + jmlhMenimbang + "\"/> <button href=\"#\" class=\"btn btn-primary mt-2 mb-2\" onclick=\"hapusElemen(srow" + jmlhMenimbang +",jmlhMenimbang); return false;\">Hapus</button></div >";
        $("#menimbang").append(stre);
        jmlhMenimbang += 1;
    }

    //append petugas
    var jmlhPetugas = 1;
    function tambahPetugas(){
        var strPetugas;
        strPetugas = 
    }

    //hapus elemen/append
    function hapusElemen(srowKe, total){
        $(srowKe).remove();
        total -= 1;
    }
</script>