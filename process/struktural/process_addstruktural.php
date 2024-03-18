<?php

require_once '../../function/koneksi.php';


$nama = $_POST['nama'];
$posisi = $_POST['posisi'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

// Rename nama fotonya dengan menambahkan posisi dan jam upload
$fotobaru = $gambar;

// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  
if (empty($nama) || empty($posisi) || empty($gambar)) {
    header("location: /laaroiba/dashboard.php?page=addstruktural&process=failed");
} else {
    // Perform database insertion with the image file name
    mysqli_query($koneksi, "INSERT INTO struktural (nama, posisi, gambar) VALUES ('$nama', '$posisi', '$gambar')");
    header("location: /laaroiba/dashboard.php?page=struktural/struktural&status=success");
}
}

