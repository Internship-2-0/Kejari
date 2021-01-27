<h2 class="main text-title"> Tambah Produk </h2>

<form method="POST" enctype="multipart/form-data" class="main"> <!-- enctype digunakan karena ada file gambar -->
	<div class="form-group">
		<label for="nama"> Nama Produk </label><br>
		<input type="text"  class="form-input" name="nama">
	</div><br>
	<div class="form-group">
		<label for="harga"> Harga (RP) </label><br>
		<input type="number"  class="form-input" name="harga">
	</div><br>
	<div class="form-group">
		<label for="berat"> Berat (gram) </label><br>
		<input type="number"  class="form-input" name="berat">
	</div><br>
	<div class="form-group">
		<label for="foto"> Deskripsi </label><br>
		<textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-input"></textarea>
	</div><br>
	<div class="form-group">
		<label for="foto"> Foto </label><br>
		<input type="file"  class="form-input" name="foto">
	</div><br>
	<button class="btn btn-blue" name="save"> Simpan </button>
	<a href="index.php?halaman=produk" class="btn btn-yellow"> Kembali </a>
</form>

<?php 
if (isset($_POST['save'])) {    //'save' diambil dari name button
	$nama = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	
	move_uploaded_file($lokasi, "../foto_produk/". $nama);
	$koneksi->query("INSERT INTO produk (nama_produk, harga_produk, berat_produk, foto_produk, deskripsi_produk) VALUES ('$_POST[nama]', '$_POST[harga]', '$_POST[berat]', '$nama', '$_POST[deskripsi]')");

	echo "<br><div class='alert alert-success text-center'> Data berhasil disimpan </div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";

}
?>