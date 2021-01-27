<h2 class="main text-title">Data Pelanggan</h2>

<table  class="main table" border="1">
	<thead>
		<tr>
			<th> No. </th>
			<th> Nama Pelanggan </th>
			<th> No. Telp </th>
			<th> Aksi </th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1 ?>
		<?php $ambil = $koneksi->query("SELECT * FROM pelanggan"); ?>
		<?php while ($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo $pecah['no_HP_pelanggan']; ?></td>
			<td><a href="" class="btn btn-red"> Hapus </a></td>
		</tr>
		<?php $nomor++ ;?> 
		<?php } ?>
	</tbody>
</table>