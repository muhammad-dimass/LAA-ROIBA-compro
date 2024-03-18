<?php
// require_once('../function/helper.php');

require_once '../../function/koneksi.php';


$judul = $_POST['judul'];
$id_video_youtube = $_POST['id_video_youtube'];
$tanggal = $_POST['tanggal'];
$id = $_POST['id'];

if (empty($judul) || empty($id_video_youtube) || empty($tanggal) ) {
    header("location: ../dashboard.php?page=video/editvideo&id= . $id . &emptyform=true");
} else {
    mysqli_query($koneksi, "UPDATE video SET  judul='$judul', id_video_youtube='$id_video_youtube', tanggal='$tanggal'  WHERE id='$id' ");
    header("location: /laaroiba/dashboard.php?page=video/video&status=success");
}
