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

$video = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM video WHERE id = $id"));
?>

 <div class="order">
                    <div class="head">
                    <h3 style="text-align: center; color: #185ADB;">Form Edit Info Video</h3>
                        <i class='bx bx-filter' ></i>
                    </div>
                    <?php
                if ($error == "true") : ?>
                    <div class="status pending" role="alert">
                        Proses gagal, silakan coba lagi
                    </div>
                <?php endif; ?>

                    <form method="POST" action="process/video/process_editvideo.php">
                    <input name="id" value="<?= $video['id'] ?>" type="hidden">
                    <div class="mb-3">
                        <label for="judul" class="form-label">judul</label>
                        <input  type="text" class="form-control" id="judul" name="judul" value="<?= $video['judul'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="id_video_youtube" class="form-label">Id Video Youtube</label>
                        <input   type="text" class="form-control" id="id_video_youtube" name="id_video_youtube" value="<?= $video['id_video_youtube'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?= $video['tanggal'] ?>">
                    </div>
                   
                    <button href="dashboard.php?page=video/editvideo" class="btn-primary"  >Kembali</button>
                    <button type="submit" class="btn-primary" >Update</button>
                </form>

                </div>




