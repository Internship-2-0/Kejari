<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script lang="javascript">
    function tambahMenimbang(){
        var idf = document.getElementById("idf").nodeValue;
        var stre;
        stre = "<input id=\"srow" + idf + "\" type=\"text\" name=\"menimbang[]\" class=\"form-control\" placeholder=\"menimbang" + idf "\"/> <a href=\"#\" onclick=\"hapusElemen(\"#srow" + idf + "\"); return false;\">Hapus</a>";
        $("#menimbang").append(stre);
        idf = (idf-1) + 2;
        document.getElementById("idf").nodeValue = idf;
    }

    function hapusElemen(idf){
        $(idf).remove();
    }
</script>