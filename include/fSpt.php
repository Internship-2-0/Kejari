<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

<?php
    include "koneksi.php";
    
    //data petugas
    $petugas = mysqli_query($koneksi,"SELECT * FROM `petugas` ORDER BY `petugas`.`nip` ASC");
    
    //tampil petugas
    function tampilPetugas($koneksi, $petugas){
        while($data_petugas = mysqli_fetch_array($petugas)){
            if ($data_petugas['nip'] != null){   
                ?>
                <option value="<?php echo $data_petugas['nip'] ?>"><?php echo $data_petugas['nip'] ?> - <?php echo $data_petugas['nama'] ?></option>
            <?php
            }
        }
    }
?>

<script lang="javascript">
    //append menimbang
    var jmlhMenimbang = 1;
    function tambahMenimbang(){
        var strMenimbang;
        strMenimbang = "<div id=\"srow" + jmlhMenimbang + "\" class=\"mb-2\" ><input type=\"text\" name=\"menimbang[]\" class=\"form-control\" placeholder=\"menimbang " + jmlhMenimbang + "\"/></div >";
        $("#menimbang").append(strMenimbang);
        jmlhMenimbang += 1;
    }
    
    //hapus elemen/append
    function hapusMenimbang(){
        if(jmlhMenimbang != 1){
            jmlhMenimbang -= 1;
            $("#srow"+jmlhMenimbang).remove();
        }
    }

    $(document).ready(function() {
        $("#pilihPetugas").select2({
        placeholder: 'Pilih Petugas ',
        allowClear: true
        });
    })

</script>

