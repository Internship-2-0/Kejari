<h2 class="main text-title">Data Produk</h2>

<table  class="main table">
	<thead>
		<tr>
			<th> No. </th>
			<th> Nama </th>
			<th> Harga </th>
			<th> Berat </th>
			<th> Foto </th>
			<th> Aksi </th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1; ?> <!-- untuk menampilkan no / id -->
		<?php $ambil = $koneksi->query("SELECT * FROM produk"); ?> <!-- variabel koneksi akses query pilih all dari tabel produk -->
		<?php while ($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td>Rp<?php echo number_format($pecah['harga_produk']); ?></td> <!-- number_format untuk memberi koma setelah 3 angka -->
			<td><?php echo $pecah['berat_produk']; ?> gram</td>
			<td>
				<img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100" height="100">
			</td> <!-- foto produk -->
			<td>
				<a href="index.php?halaman=ubah_produk&id=<?php echo $pecah['id_produk'] ?>" class="btn btn-blue"> Ubah </a>
				<a href="index.php?halaman=hapus_produk&id=<?php echo $pecah['id_produk'] ?>" onclick="return confirm('Apakah anda yakin akan menghapus produk ini?')"" class="btn btn-red"> Hapus </a>
			</td>
		</tr>
		<?php $nomor++ ;?> 
		<?php } ?>
	</tbody>
</table>

<br>
<a href="index.php?halaman=tambah_produk" class="main btn btn-blue"> [+] Tambah Produk </a>