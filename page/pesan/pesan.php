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

$pesan = mysqli_query($koneksi, "SELECT * FROM pesan ");

?>

 <div class="order">
                    <div class="head" style="margin-bottom:30px">
                        <h3 style="color: #185ADB;">Info Pesan Masuk</h3>
                    </div>
                    <table >
                        <thead >
                            <tr style="color: blue">
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Pesan</th>
                                <th>Tanggal</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody >
                                <?php $no = 1; ?>
                        <?php foreach ($pesan as $p) : ?>
                            <tr>
                                <!-- <td style="color: blue" scope="row"><?= $no++; ?></td> -->
                                <td style="padding-right: 15px"><?= $p['nama'] ?></td>
                                <td style="padding-right: 15px"><?= $p['email'] ?></td>
                                <td style="padding-right: 15px"><?= $p['pesan'] ?></td>
                                <td style="padding-right: 15px"><?= $p['tanggal'] ?></td>
                                <td>
                                    <span style="margin-right: 10px" class="status process"><a style="text-decoration: none; color: black;" href="dashboard.php?page=pesan/detailpesan&id=<?= $p['id'] ?>">detail</a>
                                    </span>
                                    <span class="status pending"><a style="text-decoration: none; color: black;" 
                                        href="process/pesan/process_deletepesan.php?id=<?= $p['id'] ?>">Delete</a>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                                
                                   

                            
                        </tbody>
                    </table>
                </div>



