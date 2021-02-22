<?php
include "../Kejari/include/fSpoi.php";
?>
<html lang="en">

<div class="">
    <h2 class="tittle text-center mt-4 mb-4">Form Surat Perintah Operasi Intelijen</h2>
    <form method="post">
        <div class="container-fluid">
            <div class="box shadow">
                <h5><b>KOP Surat</b></h5>
                <hr>
                <div class="form-group">
                    <label for="nomor_surat">Nomor Surat</label>
                    <div class="form-inline">
                        SP.OPS -
                        <input type="text" name="nomor_surat" class="form-control mb-2 mr-sm-2 ml-2" placeholder="nomor surat">/
                        <input type="text" name="kode_pejabat" class="form-control mb-2 mr-sm-2 ml-2" placeholder="kode pejabat">/
                        <input type="text" name="kode_masalah" class="form-control mb-2 mr-sm-2 ml-2" placeholder="kode masalah">
                    </div>
                </div>
                <div class="form-group">
                    <label for="tanggal_terbit">Tanggal Penerbitan Surat</label>
                    <div class="form-inline">
                        <input type="date" name="tanggal_terbit" class="form-control mb-2 mr-sm-2" placeholder="Tanggal">
                    </div>
                </div>
            </div>

            <div class="box shadow mt-4">
                <h5><b>Perihal, Alasan, Dasar</b></h5>
                <hr>
                <div class="form-group">
                    <label for="menimbang">Menimbang</label>
                    <div id="menimbang"></div>
                    <!-- <input type="text" class="form-control"> -->
                    <button class="btn btn-danger mt-2" onclick="hapusMenimbang(); return false;">Hapus</button>
                    <button class="btn btn-primary mt-2" type="button" onclick="tambahMenimbang();return false;">Tambah</button>
                </div>
                <div class=" form-group">
                    <label for="dasar">Dasar</label>
                    <input type="text" name="dasar_1" class="form-control" placeholder="Dasar 1">
                    <input type="text" name="dasar_2" class="form-control mt-2" placeholder="Dasar 2">
                </div>
            </div>

            <div class="box shadow mt-4">
                <h5><b>Petugas Yang Ditugaskan</b></h5>
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

            <div class="box shadow-2 mt-4">
                <h5><b>Uraian Tugas</b></h5>
                <hr>
                <div class="form-group">
                    <label for="tugas">Ditugaskan Untuk</label>
                    <input type="text" name="untuk_1" class="form-control">
                    <input type="text" name="untuk_2" class="form-control mt-2">
                </div>
                <div class="form-group">
                    <label for="tgl_tugas"> Tanggal Pelaksanaan</label>
                    <div class="form-inline">
                        <input type="date" name="mulai" class="form-control mb-2 mr-sm-2">
                        <p>s/d</p>
                        <input type="date" name="selesai" class="form-control mb-2 ml-sm-2">
                    </div>
                </div>
            </div>

            <div class="box shadow-2 mt-4">
                <h5><b>Pengesahan</b></h5>
                <hr>
                <div class="form-group">
                    <label for="kota_keluar">Tempat Surat Diterbitkan</label>
                    <input type="text" name="tempat" class="form-control" placeholder="contoh: Semarang">
                </div>
                <div class="form-group">
                    <label for="kota_keluar">Tembusan</label>
                    <!-- <input type="text" name="tembusan" class="form-control"> -->
                    <div id="tembusan"></div>
                    <button class="btn btn-danger mt-2" type="button" onclick="hapusTembusan(); return false;">Hapus</button>
                    <button class="btn btn-primary mt-2" type="button" onclick="tambahTembusan();return false;">Tambah</button>
                </div>
            </div>

            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary mt-4 text-right ">Submit</button>
            </div>
    </form>
    <?php
    inputDatabase($koneksi);
    ?>
</div>

</html>