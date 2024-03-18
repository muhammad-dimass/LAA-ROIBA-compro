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

$footer = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM frontend WHERE id = $id"));
?>

 <div class="order">
                    <div class="head">
                    <h3 style="text-align: center; color: #185ADB;">Form Edit Info footer</h3>
                        <i class='bx bx-filter' ></i>
                    </div>
                    <?php
                if ($error == "true") : ?>
                    <div class="status pending" role="alert">
                        Proses gagal, silakan coba lagi
                    </div>
                <?php endif; ?>

                    <form method="POST" action="process/footer/process_editfooter.php">
                    <input name="id" value="<?= $footer['id'] ?>" type="hidden">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input  readonly type="text" class="form-control" id="nama" name="nama" value="<?= $footer['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="isi_konten" class="form-label">Isi konten</label>
                        <input  type="text" class="form-control" id="isi_konten" name="isi_konten" value="<?= $footer['isi_konten'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="kategory" class="form-label">Kategory</label>
                        <input  readonly type="text" class="form-control" id="kategory" name="kategory" value="<?= $footer['kategory'] ?>">
                    </div>
                    <button type="submit" class="btn-primary" >Update</button>
                    <button href="dashboard.php?page=footer/editfooter" class="btn-primary"  >Kembali</button>
                </form>

                </div>




