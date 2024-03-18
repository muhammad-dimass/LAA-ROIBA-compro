<?php
// require_once('../function/helper.php');

require_once '../../function/koneksi.php';


$judul = $_POST['judul'];
$isi_berita = $_POST['isi_berita'];
$jenis = $_POST['jenis'];
$tanggal = $_POST['tanggal'];
$id = $_POST['id'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

if (empty($judul) || empty($isi_berita) || empty($jenis) || empty($tanggal)) {
    header("location: /laaroiba/dashboard.php?page=berita/editberita&id=$id&emptyform=true");
} else {
    // Check if a new image is provided
    if (!empty($gambar)) {
        $path = "images/".$gambar;

        // Move the uploaded file to the destination path
        if (move_uploaded_file($tmp, $path)) {
            // If a new image is provided, delete the old one
            $result = mysqli_query($koneksi, "SELECT gambar FROM berita WHERE id = $id");
            $data = mysqli_fetch_assoc($result);

            if ($data && is_file("images/".$data['gambar'])) {
                unlink("images/".$data['gambar']);
            }
        } else {
            // Handle the case where the file upload fails
            echo "Gagal mengupload file.";
            exit;
        }

        // Update the database with the new image
        $query = "UPDATE berita SET judul='$judul',  isi_berita='$isi_berita', jenis='$jenis', tanggal='$tanggal', gambar='$gambar' WHERE id='$id'";
    } else {
        // If no new image is provided, update without changing the image field
        $query = "UPDATE berita SET judul='$judul', isi_berita='$isi_berita', jenis='$jenis', tanggal='$tanggal' WHERE id='$id'";
    }

    // Perform the database update
    mysqli_query($koneksi, $query);
    header("location: /laaroiba/dashboard.php?page=berita/berita&status=success");
}
