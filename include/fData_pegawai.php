<?php

    include "include/koneksi.php";

    function tampilPegawai($koneksi){
        $pegawai = mysqli_query($koneksi, "SELECT * FROM pegawai");
        while ($data_pegawai = mysqli_fetch_array($pegawai)) {
        ?>
        <tr>
            <td><?php echo $data_pegawai['nip'] ?></td>
            <td><?php echo $data_pegawai['nama'] ?></td>
            <td><?php echo $data_pegawai['pangkat'] ?></td>
            <td><?php echo $data_pegawai['jabatan'] ?></td>
        </tr>
        <?php
            }
    }

        if(isset($_POST['submitFrm']) && !empty($_POST['nama']) && !empty($_POST['nip']) && !empty($_POST['pangkat']) && !empty($_POST['jabatan'])){
                $nip = $_POST['nip'];
                $nama = $_POST['nama'];
                $pangkat = $_POST['pangkat'];
                $jabatan = $_POST['jabatan'];
                $input = mysqli_query($koneksi, "INSERT INTO pegawai VALUE ('$nip','$nama','$pangkat','$jabatan')");
                if ($input){
                    $status = 'ok';
                } else {
                    $status = 'err';
                }

                echo $status; die;
        }   
  
?>

<script lang="javascript">
$(document).ready(function(){
    $("#formPegawai").submit(function(event){
        submitForm();
        return false;
    });
});

    function submitForm() {
        var nama = $('#nama').val();
        var nip = $('#nip').val();
        var pangkat = $('#pangkat').val();
        var jabatan = $('#jabatan').val();
        if (nama.trim() == '') {
            alert('Nama tidak boleh kosong');
            $('#nama').focus();
            return false;
        } else if (nip.trim() == '') {
            alert('NIP tidak boleh kosong');
            $('#nip').focus();
            return false;
        } else if (pangkat.trim() == '') {
            alert('Pangkat tidak boleh kosong');
            $('#pangkat').focus();
            return false;
        } else if (jabatan.trim() == '') {
            alert('Jabatan tidak boleh kosong');
            $('#jabatan').focus();
            return false;
        } else {
            $.ajax({
                type: 'POST',
                url: 'fData_pegawai.php',
                cache: false,
                data: $('form#formPegawai').serialize(),
                success: function(response){
                    $("#pegawai").html(response)
                    $("#pegawai-modal").modal('hide');
                },
                error: function(){
                    alert("error");
                }
            });
        }
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>