<?php
include "../Kejari/include/fSpt.php";
?>
<html lang="en">
<div class="ml-4">

  <head>

  </head>

  <body>
    <h2 class="tittle text-center mt-4 mb-4">Form Surat Perintah Tugas</h2>
    <form action="../kejari/pages/tampil_surat/spt.php" method="post" target=”_blank”>

      <div class="container">
        <div class="box shadow">
          <h5><b>KOP Surat</b></h5>
          <hr>
          <div class="form-group">
            <label for="nomor_surat">Nomor Surat</label>
            <div class="form-inline">
              SP.TUG -
              <input type="number" name="nomor_surat1" class="form-control mb-2 mr-sm-2 ml-2" placeholder="nomor surat">/
              <input type="number" name="nomor_surat2" class="form-control mb-2 mr-sm-2 ml-2" placeholder="kode pejabat">/
              <input type="number" name="nomor_surat3" class="form-control mb-2 mr-sm-2 ml-2" placeholder="kode masalah">
            </div>
          </div>
          <div class="form-group">
            <label for="nama_instansi">Nama Instansi</label>
            <input type="text" name="nama_instansi" class="form-control" placeholder="contoh: Kejaksaan Agung">
          </div>
          <div class="form-group">
            <label for="pimpinan_instansi">Pimpinan Instansi</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="pimpinan_instansi" id="pimpinan_instansi" value="JAKSA AGUNG MUDA INTELIJEN" checked>
              <label class="form-check-label" for="pimpinan_instansi">
                JAKSA AGUNG MUDA INTELIJEN
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="pimpinan_instansi" id="pimpinan_instansi2" value="KEPALA KEJAKSAAN TINGGI">
              <label class="form-check-label" for="pimpinan_instansi">
                KEPALA KEJAKSAAN TINGGI
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="pimpinan_instansi" id="pimpinan_instansi3" value="KEPALA KEJAKSAAN NEGERI">
              <label class="form-check-label" for="pimpinan_instansi">
                KEPALA KEJAKSAAN NEGERI
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="pimpinan_instansi" id="pimpinan_instansi4" value="KEPALA CABANG KEJAKSAAN NEGERI">
              <label class="form-check-label" for="pimpinan_instansi">
                KEPALA CABANG KEJAKSAAN NEGERI
              </label>
            </div>

            <!-- <input type="text" class="form-control" placeholder="contoh: KEPALA KEJAKSAAN TINGGI"> -->
          </div>
          <div class="form-group">
            <label for="tanggal_terbit">Tanggal Penerbitan</label>
            <div class="form-inline">
              <input type="text" name="tanggal" class="form-control mb-2 mr-sm-2" placeholder="Tanggal">
              <input type="text" name="tahun" class="form-control mb-2 mr-sm-2" placeholder="Bulan">
              <input type="text" name="tahun" class="form-control mb-2" placeholder="Tahun">
            </div>
          </div>
        </div>

        <div class="box shadow mt-4">
          <h5><b>Perihal, Alasan, Dasar</b></h5>
          <hr>
          <div class="form-group">
            <label for="menimbang">Menimbang</label>
            <div id="menimbang">
            </div>
            <!-- <input type="text" class="form-control"> -->
            <button class="btn btn-danger mt-2" onclick="hapusMenimbang(); return false;">Hapus</button>
            <button class="btn btn-primary mt-2" type="button" onclick="tambahMenimbang();return false;">Tambah</button>
          </div>
          <div class=" form-group">
            <label for="dasar">Dasar</label>
            <input type="text" class="form-control">
            <input type="text" class="form-control mt-2">
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
            <input type="text" class="form-control">
            <input type="text" class="form-control mt-2">
          </div>
          <div class="form-group">
            <label for="tgl_tugas"> Tanggal Pelaksanaan</label>
            <div class="form-inline">
              <input type="text" class="form-control mb-2 mr-sm-2">
              <p>s/d</p>
              <input type="text" class="form-control mb-2 ml-sm-2">
            </div>
          </div>
        </div>

        <div class="box shadow-2 mt-4">
          <h5><b>Pengesahan</b></h5>
          <hr>
          <div class="form-group">
            <label for="kota_keluar">Tempat Surat Diterbitkan</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="kota_keluar">Tembusan</label>
            <input type="text" class="form-control">
            <button class="btn btn-danger mt-2">Hapus</button>
            <button class="btn btn-primary mt-2">Tambah</button>
          </div>
        </div>


        <!-- <div class="form-group">
          <label for="nomor_surat">Nomor Surat</label>
          <input type="number" name="nomor_surat" class="form-control" placeholder="Nomor Surat">
        </div>

        <div class="form-group">
          <label for="kode_pejabat">Kode Pejabat</label>
          <input type="number" name="kode_pejabat" class="form-control" placeholder="Kode Pejabat">
        </div>

        <div class="form-group">
          <label for="kode_masalah">Kode Masalah</label>
          <input type="number" name="kode_masalah" class="form-control" placeholder="Kode Masalah">
        </div>

        <div class="form-group">
          <label for="tanggal">Tanggal</label>
          <input type="number" name="tanggal" class="form-control" placeholder="Tanggal">
        </div>

        <div class="form-group">
          <label for="bulan">Bulan</label>
          <input type="number" name="bulan" class="form-control" placeholder="Bulan">
        </div>

        <div class="form-group">
          <label for="tahun">Tahun</label>
          <input type="number" name="tahun" class="form-control" placeholder="Tahun">
        </div>

        <div class="form-group">
          <label for="menimbang">Menimbang</label>
          <button class="btn btn-primary mt-2 mb-2 ml-2" type="button" onclick="tambahMenimbang();return false;">Tambah Menimbang</button>
          <button class="btn btn-primary mt-2 mb-2" onclick="hapusMenimbang(); return false;">Hapus</button>
          <div id="menimbang"></div>
        </div>

        <div class="form-group">
          <label for="dasar_1">Dasar I</label>
          <input type="text" name="dasar_1" class="form-control" placeholder="Dasar I">
        </div>

        <div class="form-group">
          <label for="dasar_2">Dasar II</label>
          <input type="text" name="dasar_2" class="form-control" placeholder="Dasar II">
        </div>

        <div class="form-group">
          <label for="petugas">Petugas</label>
          <select id="pilihPetugas" class="selectpicker form-control" name="petugas[]" multiple="multiple">
            <?php
            tampilPetugas($koneksi, $petugas);
            ?>
          </select>
        </div>

        <div class="form-group">
          <label for="untuk_1">Untuk I</label>
          <input type="text" name="untuk_1" class="form-control" placeholder="Untuk I">
        </div>

        <div class="form-group">
          <label for="untuk_2">Untuk II</label>
          <input type="text" name="untuk_2" class="form-control" placeholder="Untuk II">
        </div>

        <div class="form-group">
          <label for="mulai_dan_selesai">Tanggal Pelaksanaan</label>
          <input type="text" name="mulai" class="form-control" placeholder="Tanggal Pelaksanaan">
        </div>

        <div class="form-group">
          <label for="kota">Kota</label>
          <input type="text" name="kota" class="form-control" placeholder="kota">
        </div>

        <div class="form-group">
          <label for="tembusan">Tembusan</label>
          <button class="btn btn-primary mt-2 mb-2 ml-2" type="button" onclick="tambahTembusan();return false;">Tambah Tembusan</button>
          <button class="btn btn-primary mt-2 mb-2" onclick="hapusTembusan(); return false;">Hapus</button>
          <div id="tembusan"></div>
        </div> -->

        <div class="form-group text-right">
          <button type="submit" class="btn btn-primary mt-4 text-right ">Submit</button>
        </div>
    </form>
  </body>
</div>

</html>