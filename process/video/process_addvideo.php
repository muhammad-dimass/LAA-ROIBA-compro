<?php

require_once '../../function/koneksi.php';

$judul = $_POST['judul'];
$id_video_youtube = $_POST['id_video_youtube'];
$tanggal = $_POST['tanggal'];

// Pengecekan kelengkapan data
if (empty($judul) || empty($tanggal) || empty($id_video_youtube) ) {
    header("location: .../dashboard.php?page=video&process=failed ");
} else {
    mysqli_query($koneksi, "INSERT INTO video (judul, tanggal, id_video_youtube) VALUES ('$judul', '$tanggal', '$id_video_youtube')");
    header("location: /laaroiba/dashboard.php?page=video/video&status=success");
}

