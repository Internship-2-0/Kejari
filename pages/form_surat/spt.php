<?php
  include "../../include/fSpt.php";
?>
<html lang="en">
<div class="ml-4">

  <head>
    <h2 class="">Form : Surat Perinta Tugas</h2>
  </head>

  <body>
    <form method="post">
      
      <div class="form-group">
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
        <input id="idf" value="1" type="hidden">
        <button type="button" onclick="tambahMenimbang();return false;">Tambah Daftar Menimbang</button>
        <div id="menimbang"></div>
      </div>

      <div class="form-group">
        <label for="pekerjaan">Pekerjaan</label>
        <select id="pekerjaan" class="form-control">
          <option value="">- Pilih Pekerjaan</option>
          <option value="">Programmer</option>
          <option value="">Web Designer</option>
          <option value="">Pengusaha</option>
        </select>
      </div>

      <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" rows="3" placeholder="Contoh textarea .."></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </body>
</div>

</html>