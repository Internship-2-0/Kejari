<?php
include "../Kejari/include/fAnsas.php";
?>
<html lang="en">

<div class="">
    <h2 class="tittle text-center mt-4 mb-4">Form Analisa Sasaran</h2>
    <form method="post">
        <div class="container-fluid">
            <div class="box shadow">
                <h5><b>PENERBITAN SURAT</b></h5>
                <hr>
                <div class="form-group">
                    <label for="tanggal_terbit">Tanggal Penerbitan Surat</label>
                    <div class="form-inline">
                        <input type="date" name="tanggal_terbit" class="form-control mb-2 mr-sm-2" placeholder="Tanggal">
                    </div>
                </div>
            </div>

            <div class="box shadow mt-4">
                <h5><b>SASARAN</b></h5>
                <hr>
                <div class="form-group">
                    <label for="sasaran">Sasaran</label>
                    <textarea name="sasaran" rows="5" class="form-control"></textarea>
                </div>
            </div>


            <div class="box shadow mt-4">
                <h5><b>KONDISI DAN SITUASI SASARAN</b></h5>
                <hr>
                <div class="form-group">
                    <label for="kondisi_situasi">Kondisi dan Situasi Sasaran</label>
                    <div id="kondisi_situasi"></div>
                    <button class="btn btn-danger mt-2" onclick="hapusKondisiSituasi(); return false;">Hapus</button>
                    <button class="btn btn-primary mt-2" type="button" onclick="tambahKondisiSituasi(); return false;">Tambah</button>
                </div>
            </div>

            <div class="box shadow mt-4">
                <h5><b>KEKUATAN, KELEMAHAN DAN KEHENDAK SASARAN</b></h5>
                <hr>
                <div class="form-group">
                    <label for="kekuatan">a. Kekuatan</label>
                    <div id="kekuatan"></div>
                    <button class="btn btn-danger mt-2" onclick="hapusKekuatan(); return false;">Hapus</button>
                    <button class="btn btn-primary mt-2" type="button" onclick="tambahKekuatan();return false;">Tambah</button>
                    <br><br>
                    <label for="kekuatan">b. Kelemahan</label>
                    <div id="kelemahan"></div>
                    <button class="btn btn-danger mt-2" onclick="hapusKelemahan(); return false;">Hapus</button>
                    <button class="btn btn-primary mt-2" type="button" onclick="tambahKelemahan();return false;">Tambah</button>
                    <br><br>
                    <label for="kekuatan">c. Kehendak Sasaran</label>
                    <div id="kehendak"></div>
                    <button class="btn btn-danger mt-2" onclick="hapusKehendak(); return false;">Hapus</button>
                    <button class="btn btn-primary mt-2" type="button" onclick="tambahKehendak();return false;">Tambah</button>
                </div>
            </div>

            <div class="box shadow mt-4">
                <h5><b>OPOSISI</b></h5>
                <hr>
                <div class="form-group">
                    <label for="op_aktif">a. Aktif</label><br>
                    <div id="op_aktif"></div>
                    <button class="btn btn-danger mt-2" onclick="hapusOpAktif(); return false;">Hapus</button>
                    <button class="btn btn-primary mt-2" type="button" onclick="tambahOpAktif();return false;">Tambah</button>
                    <br><br>
                    <label for="op_pasif">b. Pasif</label><br>
                    <div id="op_pasif"></div>
                    <button class="btn btn-danger mt-2" onclick="hapusOpPasif(); return false;">Hapus</button>
                    <button class="btn btn-primary mt-2" type="button" onclick="tambahOpPasif();return false;">Tambah</button>
                    <br><br>
                    <label for="op_pendukung">c. Pendukung</label><br>
                    <div id="op_pendukung"></div>
                    <button class="btn btn-danger mt-2" onclick="hapusOpPendukung(); return false;">Hapus</button>
                    <button class="btn btn-primary mt-2" type="button" onclick="tambahOpPendukung();return false;">Tambah</button>
                </div>
            </div>

            <div class="form-group text-right">
                <button type="submit" name="save" class="btn btn-primary mt-4">Submit</button>
            </div>
    </form>

    <?php
    inputDatabase($koneksi);
    ?>
</div>

</html>