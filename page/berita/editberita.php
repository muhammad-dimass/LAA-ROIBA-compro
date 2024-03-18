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

$berita = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM berita WHERE id = $id"));
?>

 <div class="order">
                    <div class="head">
                    <h3 style="text-align: center; color: #185ADB;">Form Edit Berita</h3>
                        <i class='bx bx-filter' ></i>
                    </div>
                    <?php
                if ($error == "true") : ?>
                    <div class="status pending" role="alert">
                        Proses gagal, silakan coba lagi
                    </div>
                <?php endif; ?>

                    <form method="POST" action="process/berita/process_editberita.php" enctype="multipart/form-data">
                    <input name="id" value="<?= $berita['id'] ?>" type="hidden">
                    <div class="mb-3">
                        <label for="judul" class="form-label">judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $berita['judul'] ?>">
                    </div>

                    <div>
                        <label for="isi_berita" >isi_berita</label>
                        <textarea style="width: 80%; border-radius: 10px" rows="15"  id="isi_berita" name="isi_berita"><?= $berita['isi_berita'] ?></textarea> 
                    </div>

                    <div class="mb-3">
                        <label for="jenis" class="form-label">jenis berita</label>
                        <input readonly type="text" class="form-control" id="jenis" name="jenis" value="<?= $berita['jenis'] ?>">
                    </div>
                     <div class="mb-3">
                        <label for="tanggal" class="form-label">tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $berita['tanggal'] ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">gambar</label>
                        <img src="./process/berita/images/<?= $berita['gambar'] ?>" width='80%'>
                    </div>

                    <div class="mb-3" style="margin-bottom: 20px; margin-top: 20px;">
                        <label for="gambar" class="form-label">ubah gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>
                    <button href="dashboard.php?page=berita/editberita" class="btn-primary"  >Kembali</button>
                    <button type="submit" class="btn-primary" >Update</button>
                </form>

                </div>




