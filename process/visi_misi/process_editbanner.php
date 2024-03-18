<?php
// require_once('../function/helper.php');

require_once '../../function/koneksi.php';


$isi = $_POST['isi'];
$id = $_POST['id'];

if (empty($isi) ) {
    header("location: ../dashboard.php?page=visi_misi/editbanner&id= . $id . &emptyform=true");
} else {
    mysqli_query($koneksi, "UPDATE visi_misi SET  isi='$isi' WHERE id='$id' ");
    header("location: /laaroiba/dashboard.php?page=visi_misi/visi_misi&status=success");
}
