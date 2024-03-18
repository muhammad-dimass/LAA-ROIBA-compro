<?php

require_once '../../function/koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM video WHERE id = $id");
    header("location: /laaroiba/dashboard.php?page=video/video&status=success");
