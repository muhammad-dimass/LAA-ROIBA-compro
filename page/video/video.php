<?php

require_once('function/koneksi.php');

$process = isset($_GET['process']) ? ($_GET['process']) : false;
$status = isset($_GET['status']) ? ($_GET['status']) : false;
?>


<?php if ($process == 'success') : ?>
    <div class="alert alert-success" role="alert">
        Data behasil dimasukan
    </div>

<?php endif; ?>
<?php if ($status == 'success') : ?>
    <div class="alert alert-success" role="alert">
        Data behasil dihapus
    </div>

<?php endif; ?>

<!-- mengambil data dari database -->
<?php
$video = mysqli_query($koneksi, "SELECT * FROM video ");
?>

 <div class="order">
                    <div class="head" style="margin-bottom:30px">
                        <h3 style="color: #185ADB;">Info Video</h3>
                        <a  href="dashboard.php?page=video/addvideo">
                        <i class='bx bx-plus btn-primary' style="color: white" ></i>
                        </a>
                    </div>
                    <table >
                        <thead >
                            <tr style="color: blue">
                                <th>Judul</th>
                                <th>Id Video Youtube</th>
                                <th>tanggal</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody >
                                <?php $no = 1; ?>
                        <?php foreach ($video as $v) : ?>
                            <tr>
                                <!-- <td style="color: blue" scope="row"><?= $no++; ?></td> -->
                                <td style="padding-right: 15px"><?= $v['judul'] ?></td>
                                <td style="padding-right: 15px"><?= $v['id_video_youtube'] ?></td>
                                <td style="padding-right: 15px"><?= $v['tanggal'] ?></td>
                                <td>
                                    <span style="margin-right: 10px" class="status process"><a style="text-decoration: none; color: black;" href="dashboard.php?page=video/editvideo&id=<?= $v['id'] ?>">Edit</a>
                                    </span>
                                    <span class="status pending"><a style="text-decoration: none; color: black;" 
                                        href="process/video/process_deletevideo.php?id=<?= $v['id'] ?>">Delete</a>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                                
                                   

                            
                        </tbody>
                    </table>
                </div>



