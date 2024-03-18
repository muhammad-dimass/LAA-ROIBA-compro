<?php

require_once '../../function/koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM pesan WHERE id = $id");
    header("location: /laaroiba/dashboard.php?page=pesan/pesan&status=success");
