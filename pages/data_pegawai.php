<?php 
include "include/fData_pegawai.php";
?>
<html>

<div class="ml-4">
    <h2 class="tittle mt-4 mb-4 ml-4">Daftar Pegawai</h2>

    <table class="container">
        <thead>
            <tr>
                <th>NIP</th>
                <th>NAMA</th>
                <th>PANGKAT</th>
                <th>JABATAN</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data_petugas = mysqli_fetch_array($petugas)) {
                ?>
            <tr>
                <td><?php echo $data_petugas['nip'] ?></td>
                <td><?php echo $data_petugas['nama'] ?></td>
                <td><?php echo $data_petugas['pangkat'] ?></td>
                <td><?php echo $data_petugas['jabatan'] ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

</html>