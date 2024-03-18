<?php

// require_once('function/helper.php');
require_once('function/koneksi.php');

$process = isset($_GET['process']) ? ($_GET['process']) : false;
if ($_SESSION["id"] == null) {
    header("location: index.php ");
    exit();
}
$id = isset($_GET['id']) ? ($_GET['id']) : false;
$error =  isset($_GET['emptyform']) ? ($_GET['emptyform']) : false;

$pesan = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM pesan WHERE id = $id"));
?>

 <div class="order">
                    <div class="head">
                    <h3 style="text-align: center; color: #185ADB;">Detail Pesan Masuk</h3>
                        <i class='bx bx-filter' ></i>
                    </div>
                    <?php
                if ($error == "true") : ?>
                    <div class="status pending" role="alert">
                        Proses gagal, silakan coba lagi
                    </div>
                <?php endif; ?>

                    <form>
                    <input name="id" value="<?= $pesan['id'] ?>" type="hidden">
                    <div style="margin-bottom: 20px" class="mb-3">
                        <label for="pengirim" class="form-label">pengirim : </label>
                        <label for="pengirim" class="form-label"><?= $pesan['nama'] ?></label>
                    </div>
                    <div style="margin-bottom: 20px" class="mb-3">
                        <label for="email" class="form-label">email : </label>
                        <label for="email" class="form-label"><?= $pesan['email'] ?></label>
                    </div>
                    <div style="margin-bottom: 20px" class="mb-3">
                        <label for="pesan" class="form-label">pesan : </label>
                        <label for="pesan" class="form-label"><?= $pesan['pesan'] ?></label>
                    </div>
                    <div style="margin-bottom: 20px" class="mb-3">
                        <label for="tanggal" class="form-label">tanggal : </label>
                        <label for="tanggal" class="form-label"><?= $pesan['tanggal'] ?></label>
                    </div>
                    
                </form>
                    <button href="dashboard.php?page=banner" class="btn-primary"  ><a style="color: white" href="dashboard.php?page=pesan/pesan"> Kembali </a> </button>
                </div>





