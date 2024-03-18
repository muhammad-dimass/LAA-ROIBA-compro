<?php
// require_once('../function/helper.php');

require_once '../../function/koneksi.php';



$isi_konten = $_POST['isi_konten'];
$id = $_POST['id'];

if (empty($isi_konten) ) {
    header("location: ../dashboard.php?page=banner/editbanner&id= . $id . &emptyform=true");
} else {
    mysqli_query($koneksi, "UPDATE frontend SET  isi_konten='$isi_konten' WHERE id='$id' ");
    header("location: /laaroiba/dashboard.php?page=footer/footer&status=success");
}
