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

$visi_misi = mysqli_query($koneksi, "SELECT * FROM visi_misi ");

?>

 <div class="order">
                    <div class="head" style="margin-bottom:30px">
                        <h3 style="color: #185ADB;">Info visi, Misi dan Tujuan</h3>
                        <a  href="dashboard.php?page=visi_misi/addvisi_misi">
                        <i class='bx bx-plus btn-primary' style="color: white" ></i>
                        </a>
                    </div>
                    <table >
                        <thead >
                            <tr style="color: blue">
                                <th>kategory</th>
                                <th>Isi</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody >
                                <?php $no = 1; ?>
                        <?php foreach ($visi_misi as $v) : ?>
                            <tr>
                                <!-- <td style="color: blue" scope="row"><?= $no++; ?></td> -->
                                <td style="padding-right: 15px"><?= $v['kategory'] ?></td>
                                <td style="padding-right: 15px"><?= $v['isi'] ?></td>
                                <td>
                                    <span style="margin-right: 10px" class="status process"><a style="text-decoration: none; color: black;" href="dashboard.php?page=visi_misi/editvisi_misi&id=<?= $v['id'] ?>">Edit</a>
                                    </span>
                                    <span class="status pending"><a style="text-decoration: none; color: black;" 
                                        href="process/visi_misi/process_deletevisi_misi.php?id=<?= $v['id'] ?>">Delete</a>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                                
                                   

                            
                        </tbody>
                    </table>
                </div>



