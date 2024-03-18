<?php

require_once '../../function/koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM visi_misi WHERE id = $id");
    header("location: /laaroiba/dashboard.php?page=visi_misi/visi_misi&status=success");
