<h2 class="main text-title"> Ubah Produk </h2>

<?php 

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<!-- <?php print_r($pecah) ?> <br><br> -->

<form method="POST" enctype="multipart/form-data" class="main"> <!-- enctype digunakan karena ada file gambar -->
	<div class="" >
		<label> Nama Produk </label>
		<input type="text"  class="form-input" name="nama" value="<?php echo $pecah['nama_produk'] ?>">
	</div>
	<div class="">
		<label> Harga (RP) </label>
		<input type="number"  class="form-input" name="harga" value="<?php echo $pecah['harga_produk'] ?>">
	</div>
	<div class="">
		<label for="berat"> Berat (gram) </label>
		<input type="number"  class="form-input" name="berat" value="<?php echo $pecah['berat_produk'] ?>">
	</div>
	<!-- Deskripsi -->
	<div class="">
		<label> Deskripsi </label>
		<textarea name="deskripsi" rows="5" class="form-input"> <?php echo $pecah['deskripsi_produk'] ?> </textarea>
	</div>
	<!-- Foto -->
	<div class="">
		<img src="../foto_produk/<?php echo $pecah['foto_produk'] ?>" width= "100" heigth="100">
	</div>
	<div class="">
		<label > Ganti Foto Produk </label>
		<input type="file" class="form-input" name="foto">
	</div>
	<button class="btn btn-blue" name="ubah"> Ubah </button>
	<a href="index.php?halaman=produk" class="btn btn-yellow"> Kembali </a>
</form>

<?php 

if (isset($_POST['ubah'])) {
	$nama = $_FILES['foto']['name']; 
	$lokasi = $_FILES['foto']['tmp_name']; //lokasi tempat penyimpanan foto sementara

	if (!empty($lokasi)) {
		move_uploaded_file($lokasi, "../foto_produk/$nama");

		$koneksi->query("UPDATE produk SET nama_produk = '$_POST[nama]', harga_produk = $_POST[harga], berat_produk = '$_POST[berat]', deskripsi_produk = '$_POST[deskripsi]', foto_produk = '$nama' WHERE id_produk = '$_GET[id]'");
	}
	else {
		$koneksi->query("UPDATE produk SET nama_produk = '$_POST[nama]', harga_produk = $_POST[harga], berat_produk = '$_POST[berat]', deskripsi_produk = '$_POST[deskripsi]' WHERE id_produk = '$_GET[id]'"); //jika foto produk tidak di ganti
	}

	echo "<script> alert('Data berhasil diubah') </script>";
	echo "<script> location='index.php?halaman=produk' </script>";

}

?>