<?php
include "../Kejari/include/fAntug.php";
?>
<html lang="en">

<div class="">
    <h2 class="tittle text-center mt-4 mb-4">Form Analisa Tugas</h2>
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
                <h5><b>IDENTIFIKASI TUGAS</b></h5>
                <hr>
                <div class="form-group">
                    <label for="identifikasi_tugas">Identifikasi Tugas</label>
                    <textarea name="identifikasi_tugas" rows="5" class="form-control" placeholder=""></textarea>
                </div>
            </div>

            <div class="box shadow mt-4">
                <h5><b>URAIAN TUGAS</b></h5>
                <hr>
                <div class="form-group">
                    <label for="tgl_tugas"> Tanggal Pelaksanaan</label>
                    <div class="form-inline">
                        <input type="date" name="mulai_tugas" class="form-control mb-2 mr-sm-2">
                        <p>- selesai</p>
                        <!-- <input type="date" name="selesai" class="form-control mb-2 ml-sm-2"> -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="tempat_tugas">Tempat</label>
                    <input type="text" name="tempat_tugas" class="form-control">
                </div>
                <div class="form-group">
                    <label for="sasaran_tugas">Sasaran</label>
                    <textarea name="sasaran_tugas" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="informasi_diperlukan">Informasi Yang Diperlukan</label>
                    <textarea name="informasi_diperlukan" rows="5" class="form-control"></textarea>
                </div>
            </div>

            <div class="box shadow mt-4">
                <h5><b>Pelaksana Tugas</b></h5>
                <hr>
                <div class="form-group">
                    <label for="petugas">Petugas</label>
                    <select id="pilihPetugas" class="selectpicker form-control" name="petugas[]" multiple="multiple">
                        <?php
                        tampilPetugas($koneksi, $petugas);
                        ?>
                    </select>
                </div>
            </div>

            <div class="box shadow mt-4">
                <h5><b>SARANA PENDUKUNG</b></h5>
                <hr>
                <div class="form-group">
                    <label for="sarana_pendukung_1">Sumber Daya Manusia</label>
                    <input type="text" name="sarana_pendukung_1" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="sarana_pendukung_2">Teknologi Intelijen</label>
                    <input type="text" name="sarana_pendukung_2" class="form-control mt-2" placeholder="">
                </div>
            </div>

            <div class="box shadow mt-4">
                <h5><b>KOMUNIKASI DAN KOORDINASI</b></h5>
                <hr>
                <div class="form-group">
                    <label for="komunikasi_koordinasi">Komunikasi Dan Koordinasi</label>
                    <textarea name="komunikasi_koordinasi" rows="5" class="form-control" placeholder=""></textarea>
                </div>
            </div>

            <div class="box shadow mt-4">
                <h5><b>PELAPORAN DAN EVALUASI</b></h5>
                <hr>
                <div class="form-group">
                    <label for="pelaporan_evaluasi">Pelaporan dan Evaluasi</label>
                    <div id="pelaporan_evaluasi"></div>
                    <button class="btn btn-danger mt-2" onclick="hapusPelaporanEvaluasi(); return false;">Hapus</button>
                    <button class="btn btn-primary mt-2" type="button" onclick="tambahPelaporanEvaluasi();return false;">Tambah</button>
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