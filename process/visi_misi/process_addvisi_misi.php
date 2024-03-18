<?php

require_once '../../function/koneksi.php';

$kategory = $_POST['kategory'];
$isi = $_POST['isi'];

// Pengecekan kelengkapan data
if (empty($kategory) || empty($isi) ) {
    header("location: .../dashboard.php?page=create&process=failed ");
} else {
    mysqli_query($koneksi, "INSERT INTO visi_misi (kategory, isi) VALUES ('$kategory', '$isi')");
    header("location: /laaroiba/dashboard.php?page=visi_misi/visi_misi&status=success");
}

