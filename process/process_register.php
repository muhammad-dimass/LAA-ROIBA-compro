<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

// Pengecekan kelengkapan data
if (empty($username) || empty($password) || empty($repassword)) {
    header("location: " . BASE_URL . 'register.php?process=failed');
} else {
    if ($password != $repassword) {
        header("location: " . BASE_URL . 'register.php?process=failedpassword');
    } else {
        $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");
        if (mysqli_num_rows($query) != 0) {
            header("location: " . BASE_URL . 'register.php?process=failedusername');
        } else {
            $md5 = md5($password);
            mysqli_query($koneksi, "INSERT INTO admin(username, password) VALUES ('$username', '$md5')");
            header("location: " . BASE_URL . '?process=success');
        }
    }
}
