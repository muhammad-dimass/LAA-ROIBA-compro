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

$visi_misi = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM visi_misi WHERE id = $id"));
?>

 <div class="order">
                    <div class="head">
                    <h3 style="text-align: center; color: #185ADB;">Form Edit Info Visi, Misi & Tujuan</h3>
                        <i class='bx bx-filter' ></i>
                    </div>
                    <?php
                if ($error == "true") : ?>
                    <div class="status pending" role="alert">
                        Proses gagal, silakan coba lagi
                    </div>
                <?php endif; ?>

                    <form method="POST" action="process/visi_misi/process_editbanner.php">
                    <input name="id" value="<?= $visi_misi['id'] ?>" type="hidden">
                    <div class="mb-3">
                        <label for="Kategory" class="form-label">Kategory</label>
                        <input  readonly type="text" class="form-control" id="Kategory" name="Kategory" value="<?= $visi_misi['kategory'] ?>">
                    </div>
                    <div class="mb-3">

                        <label for="isi" class="form-label">Isi</label>
                        <input type="text" class="form-control" id="isi" name="isi" value="<?= $visi_misi['isi'] ?>">
                    </div>
                    <button href="dashboard.php?page=banner/editbanner" class="btn-primary"  >Kembali</button>
                    <button type="submit" class="btn-primary" >Update</button>
                </form>

                </div>




