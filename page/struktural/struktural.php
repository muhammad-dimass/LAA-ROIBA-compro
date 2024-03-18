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
$struktural = mysqli_query($koneksi, "SELECT * FROM struktural ");
?>

 <div class="order">
                    <div class="head" style="margin-bottom:30px">
                        <h3 style="color: #185ADB;">Info Struktural</h3>
                        <a  href="dashboard.php?page=struktural/addstruktural">
                        <i class='bx bx-plus btn-primary' style="color: white" ></i>
                        </a>
                    </div>
                    <table >
                        <thead >
                            <tr style="color: blue">
                                <th>Nama</th>
                                <th>Posisi</th>
                                <th>Photo</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody >
                                <?php $no = 1; ?>
                        <?php foreach ($struktural as $s) : ?>
                            <tr>
                                <!-- <td style="color: blue" scope="row"><?= $no++; ?></td> -->
                                <td style="padding-right: 15px"><?= $s['nama'] ?></td>
                                <td style="padding-right: 15px"><?= $s['posisi'] ?></td>
                                <td style="padding-right: 15px"><img src="./process/struktural/images/<?= $s['gambar'] ?>" width='100' height='100'></td>
                                <td>
                                    <span style="margin-right: 10px" class="status process"><a style="text-decoration: none; color: black;" href="dashboard.php?page=struktural/editstruktural&id=<?= $s['id'] ?>">Edit</a>
                                    </span>
                                    <span class="status pending"><a style="text-decoration: none; color: black;" 
                                        href="process/struktural/process_deletestruktural.php?id=<?= $s['id'] ?>">Delete</a>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                                
                                   

                            
                        </tbody>
                    </table>
                </div>



