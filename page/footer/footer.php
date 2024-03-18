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
$banner = mysqli_query($koneksi, "SELECT * FROM frontend WHERE Kategory = 'footer' ");
?>

 <div class="order">
                    <div class="head" style="margin-bottom:30px">
                        <h3 style="color: #185ADB;">Info Footer</h3>
                    </div>
                    <table >
                        <thead >
                            <tr style="color: blue">
                                <th>Nama</th>
                                <th>Isi Konten</th>
                                <th>Kategory </th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody >
                                <?php $no = 1; ?>
                        <?php foreach ($banner as $b) : ?>
                            <tr>
                                <!-- <td style="color: blue" scope="row"><?= $no++; ?></td> -->
                                <td style="padding-right: 15px"><?= $b['nama'] ?></td>
                                <td style="padding-right: 15px"><?= $b['isi_konten'] ?></td>
                                <td style="padding-right: 15px"><?= $b['kategory'] ?></td>
                                <td>
                                    <span style="margin-right: 10px" class="status process"><a style="text-decoration: none; color: black;" href="dashboard.php?page=footer/editfooter&id=<?= $b['id'] ?>">Edit</a>
                                    </span>
                                    <!-- <span class="status pending"><a style="text-decoration: none; color: black;" 
                                        href="process/banner/process_deletebanner.php?id=<?= $b['id'] ?>">Delete</a>
                                    </span> -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                                
                                   

                            
                        </tbody>
                    </table>
                </div>



