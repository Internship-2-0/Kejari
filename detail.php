<h2 class="main text-title">Detail Pembelian</h2>

<div class="main">
<pre>
<?php 

	$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan = pelanggan.id_pelanggan WHERE pembelian.id_pembelian = '$_GET[id]'");
	$detail = $ambil->fetch_assoc();

	print_r($detail);	

?>
<br>
</pre>

<p>Nama &nbsp;&nbsp;&nbsp;&nbsp;: <strong><?php echo $detail['nama_pelanggan']; ?></strong></p>
<p>Telepon &nbsp;: <?php echo $detail['email_pelanggan']; ?></p>
<p>Tanggal &nbsp;: <?php echo $detail['tanggal_pembelian']; ?></p>
<p>Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp<?php echo number_format($detail['total_pembelian']); ?></p>

</div>

<table class="main table">
	<thead>
		<tr>
			<th> No. </th>
			<th> Nama Produk </th>
			<th> Harga Produk </th>
			<th> Jumlah </th>
			<th> Subtotal </th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1; ?>

		<?php $ambil = $koneksi->query("SELECT * FROM pembelian_barang JOIN produk ON pembelian_barang.id_produk = produk.id_produk WHERE pembelian_barang.id_pembelian = '$_GET[id]'"); ?>
		<?php $pecah = $ambil->fetch_assoc(); ?>

		<tr>
			<td><?php echo $nomor ?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td>Rp<?php echo number_format($pecah['harga_produk']); ?></td>
			<td><?php echo $pecah['jumlah']; ?></td>
			<td>Rp<?php echo number_format($pecah['harga_produk'] * $pecah['jumlah']); ?></td>
		</tr>
		<?php $nomor++; ?>
	</tbody>
	
</table>