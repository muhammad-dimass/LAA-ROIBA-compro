<?php

require_once '../../function/koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// Pengecekan kelengkapan data
if (empty($nama) ) {
    header("location:/laaroiba/index.php");
} else {
    mysqli_query($koneksi, "INSERT INTO pesan (nama, email, pesan) VALUES ('$nama', '$email' , '$pesan')");
    header("location: /laaroiba/index.php");
}

