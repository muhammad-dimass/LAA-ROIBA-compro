<?php

require_once '../../function/koneksi.php';


$id = $_GET['id'];

// Retrieve the image file name associated with the specified id
$result = mysqli_query($koneksi, "SELECT gambar FROM berita WHERE id = $id");
$data = mysqli_fetch_assoc($result);

if ($data) {
    // Check if the image file exists in the "images" folder
    if (is_file("images/" . $data['gambar'])) {
        // If the file exists, unlink (delete) it
        unlink("images/" . $data['gambar']);
    }

    // Delete the record from the database based on the specified id
    mysqli_query($koneksi, "DELETE FROM berita WHERE id = $id");
    header("location: /laaroiba/dashboard.php?page=berita/berita&status=success");
} else {
    // Handle the case where the specified id does not exist in the database
    header("location: /laaroiba/dashboard.php?page=berita/berita&status=failure");
}
