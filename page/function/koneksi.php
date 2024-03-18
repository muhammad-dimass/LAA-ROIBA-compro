<?php

$server = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "db_laroiba";

$koneksi = mysqli_connect($server, $username, $password, $dbname) or die("Koneksi ke database gagal");
