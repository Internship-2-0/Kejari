<?php
include "../Kejari/include/fAnsas.php";
?>
<html lang="en">

<div class="">
    <h2 class="tittle text-center mt-4 mb-4">Form Analisa Sasaran</h2>
    <form method="post">
        <div class="container-fluid">
            <div class="box shadow">
                <h5><b>SASARAN</b></h5>
                <hr>
                <div class="form-group">
                    <label for="sasaran">Sasaran</label>
                    <textarea name="sasaran" rows="5" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="box shadow">
                <h5><b>KONDISI DAN SITUASI SASARAN</b></h5>
                <hr>
                <div class="form-group">
                    <label for="kondisi_situasi">Kondisi dan Situasi Sasaran</label><br>
                    <button class="btn btn-danger mt-2" onclick="hapusMenimbang(); return false;">Hapus</button>
                    <button class="btn btn-primary mt-2" type="button" onclick="tambahMenimbang();return false;">Tambah</button>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="box shadow">
                <h5><b>KEKUATAN, KELEMAHAN DAN KEHENDAK SASARAN</b></h5>
                <hr>
                <div class="form-group">
                    <label for="kekuatan">a. Kekuatan</label><br>
                    <button class="btn btn-danger mt-2" onclick="hapusMenimbang(); return false;">Hapus</button>
                    <button class="btn btn-primary mt-2" type="button" onclick="tambahMenimbang();return false;">Tambah</button>
                    <br><br>
                    <label for="kekuatan">b. Kelemahan</label><br>
                    <button class="btn btn-danger mt-2" onclick="hapusMenimbang(); return false;">Hapus</button>
                    <button class="btn btn-primary mt-2" type="button" onclick="tambahMenimbang();return false;">Tambah</button>
                    <br><br>
                    <label for="kekuatan">c. Kehendak Sasaran</label><br>
                    <button class="btn btn-danger mt-2" onclick="hapusMenimbang(); return false;">Hapus</button>
                    <button class="btn btn-primary mt-2" type="button" onclick="tambahMenimbang();return false;">Tambah</button>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="box shadow">
                <h5><b>OPOSISI</b></h5>
                <hr>
                <div class="form-group">
                    <label for="kekuatan">a. Aktif</label><br>
                    <button class="btn btn-danger mt-2" onclick="hapusMenimbang(); return false;">Hapus</button>
                    <button class="btn btn-primary mt-2" type="button" onclick="tambahMenimbang();return false;">Tambah</button>
                    <br><br>
                    <label for="kekuatan">b. Pasif</label><br>
                    <button class="btn btn-danger mt-2" onclick="hapusMenimbang(); return false;">Hapus</button>
                    <button class="btn btn-primary mt-2" type="button" onclick="tambahMenimbang();return false;">Tambah</button>
                    <br><br>
                    <label for="kekuatan">c. Pendukung</label><br>
                    <button class="btn btn-danger mt-2" onclick="hapusMenimbang(); return false;">Hapus</button>
                    <button class="btn btn-primary mt-2" type="button" onclick="tambahMenimbang();return false;">Tambah</button>
                </div>
            </div>
        </div>
        <br>


</div>

</div>
</form>
<?php
inputDatabase($koneksi);
?>
</div>

</html>