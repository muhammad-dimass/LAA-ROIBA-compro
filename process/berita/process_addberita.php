<?php

require_once '../../function/koneksi.php';


$judul = $_POST['judul'];
$isi_berita = $_POST['isi_berita'];
$jenis = $_POST['jenis'];
$tanggal = $_POST['tanggal'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = $gambar;

// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  
if (empty($judul) || empty($isi_berita) || empty($jenis) || empty($tanggal) || empty($gambar)) {
    header("location: /laaroiba/dashboard.php?page=addberita&process=failed");
} else {
    // Perform database insertion with the image file name
    mysqli_query($koneksi, "INSERT INTO berita (judul, isi_berita, jenis, tanggal, gambar) VALUES ('$judul', '$isi_berita', '$jenis', '$tanggal', '$gambar')");
    header("location: /laaroiba/dashboard.php?page=berita/berita&status=success");
}
}

