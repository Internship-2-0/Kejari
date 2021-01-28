<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script lang="javascript">
    var idf = 1;
    function tambahMenimbang(){
        var stre;
        stre = "<div id=\"srow" + idf + "\"><input type=\"text\" name=\"menimbang[]\" class=\"form-control\" placeholder=\"menimbang" + idf + "\"/> <button href=\"#\" class=\"btn btn-primary mt-2 mb-2\" onclick=\"hapusElemen(srow" + idf +"); return false;\">Hapus</button></div >";
        $("#menimbang").append(stre);
        idf += 1;
    }

    function hapusElemen(menimbang){
        $(menimbang).remove();
        idf -= 1;
    }
</script>