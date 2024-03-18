<?php

// require_once('function/helper.php');
require_once('function/koneksi.php');

$process = isset($_GET['process']) ? ($_GET['process']) : false;
if ($_SESSION["id"] == null) {
    header("location: index.php ");
    exit();
}
$id = isset($_GET['id']) ? ($_GET['id']) : false;
// $banner = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM banner WHERE id = $id"));
$error =  isset($_GET['emptyform']) ? ($_GET['emptyform']) : false;

$struktural = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM struktural WHERE id = $id"));
?>

 <div class="order">
                    <div class="head">
                    <h3 style="text-align: center; color: #185ADB;">Form Edit Info Struktural</h3>
                        <i class='bx bx-filter' ></i>
                    </div>
                    <?php
                if ($error == "true") : ?>
                    <div class="status pending" role="alert">
                        Proses gagal, silakan coba lagi
                    </div>
                <?php endif; ?>

                    <form method="POST" action="process/struktural/process_editstruktural.php" enctype="multipart/form-data">
                    <input name="id" value="<?= $struktural['id'] ?>" type="hidden">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $struktural['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="posisi" class="form-label">Posisi</label>
                        <input type="text" class="form-control" id="posisi" name="posisi" value="<?= $struktural['posisi'] ?>">
                    </div>

                     <div class="mb-3">
                        <label class="form-label">Photo</label>
                        <img src="./process/struktural/images/<?= $struktural['gambar'] ?>" width='80%'>
                    </div>

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Edit Photo</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" >
                    </div>

                    <button type="submit" class="btn-primary" >Update</button>
                    <button href="dashboard.php?page=struktural/editstruktural" class="btn-primary"  >Kembali</button>
                    <!-- <button class="btn-primary" >Kembali</button> -->
                </form>

                </div>




