<?php
include "include/fData_pegawai.php";
?>

<html>
<h2 class="mt-4 mb-4 text-center">Daftar Pegawai</h2>
<div class="container box shadow" ">
    <div class=" text-right pegawai">
    <a href="index.php?halaman=tambah_pegawai" class="btn btn-primary">Tambah Pegawai</a>
</div>
<br><br>

<table class="table">
    <thead>
        <tr>
            <th>NIP</th>
            <th>NAMA</th>
            <th>PANGKAT</th>
            <th>JABATAN</th>
        </tr>
    </thead>
    <tbody>
        <?php tampilPegawai($koneksi) ?>
    </tbody>
</table>

</div>

<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="formPegawai" name="pegawai" role="form">
                <div class="modal-body">
                    <p class="statusMsg"></p>
                    <div class=" form-group">
                        <label for="dasar">Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" class="form-control" placeholder="nama pegawai">
                    </div>
                    <div class=" form-group">
                        <label for="dasar">NIP</label>
                        <input type="text" name="nip_pegawai" class="form-control" placeholder="NIP/NRP">
                    </div>
                    <div class=" form-group">
                        <label for="dasar">Pangkat</label>
                        <input type="text" name="pangkat_pegawai" class="form-control" placeholder="pangkat">
                    </div>
                    <div class=" form-group">
                        <label for="dasar">Jabatan</label>
                        <input type="text" name="jabatan_pegawai" class="form-control" placeholder="jabatan">
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" name="save"> Simpan </button>
            </div>
        </div>
    </div>
</div>

</html>


<?php
if (isset($_POST['save'])) {
    //spt
    $nama_pegawai = $_POST['nama_pegawai'];
    $nip_pegawai = $_POST['nip_pegawai'];
    $pangkat_pegawai = $_POST['pangkat_pegawai'];
    $jabatan_pegawai = $_POST['jabatan_pegawai'];

    mysqli_query($koneksi, "INSERT INTO pegawai (nip, nama, pangkat, jabatan) VALUES ('$nama_pegawai', '$nip_pegawai', '$pangkat_peawai', '$jabatan_pegawai')");

    echo "<br><div class='alert alert-success text-center'> Data berhasil disimpan </div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=data_pegawai'>";
}

?>