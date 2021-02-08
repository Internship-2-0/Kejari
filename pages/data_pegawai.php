<?php 
include "include/fData_pegawai.php";
?>

<html>
<h2 class="mt-4 mb-4 text-center">Daftar Pegawai</h2>
<form method="post">
    <div class="container box shadow" ">
        <div class=" text-right">
        <button type="button" class="btn btn-primary ml-4" data-toggle="modal" data-target="#staticBackdrop">
            Tambah Pegawai
        </button>
    </div>
    <br><br>

    <table class="table">
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

</form>

<div class="">
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class=" form-group">
                        <label for="dasar">Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" class="form-control" placeholder="nama pegawai">
                    </div>
                    <div class=" form-group">
                        <label for="dasar">NIP/NRP</label>
                        <input type="text" name="NIP" class="form-control" placeholder="NIP/NRP">
                    </div>
                    <div class=" form-group">
                        <label for="dasar">Pangkat</label>
                        <input type="text" name="pangkat" class="form-control" placeholder="pangkat">
                    </div>
                    <div class=" form-group">
                        <label for="dasar">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" placeholder="jabatan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

</div>

</html>