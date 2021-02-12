<?php
include "include/fData_pegawai.php";
?>

<h2 class="tittle text-center mt-4 mb-4">Tambah Pegawai</h2>
<form method="post">
    <div class="container">
        <div class="box shadow">
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
        <div class="form-group text-right mt-4">
            <button class="btn btn-primary" name="save"> Simpan </button>
            <a href="index.php?halaman=data_pegawai" class="btn btn-warning"> Batal </a>
        </div>
</form>


<?php
if (isset($_POST['save'])) {
    //spt
    $nama_pegawai = $_POST['nama_pegawai'];
    $nip_pegawai = $_POST['nip_pegawai'];
    $pangkat_pegawai = $_POST['pangkat_pegawai'];
    $jabatan_pegawai = $_POST['jabatan_pegawai'];

    mysqli_query($koneksi, "INSERT INTO pegawai (nip, nama, pangkat, jabatan) VALUES ('$nama_pegawai', '$nip_pegawai', '$pangkat_pegawai', '$jabatan_pegawai')");

    echo "<br><div class='alert alert-success text-center'> Data berhasil disimpan </div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=data_pegawai'>";
}

?>