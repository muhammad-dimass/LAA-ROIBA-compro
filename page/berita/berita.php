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

$berita = mysqli_query($koneksi, "SELECT * FROM berita ");

?>

 <div class="order">
                    <div class="head" style="margin-bottom:30px">
                        <h3 style="color: #185ADB;">Info Berita</h3>
                        <a  href="dashboard.php?page=berita/addberita">
                        <i class='bx bx-plus btn-primary' style="color: white" ></i>
                        </a>
                    </div>
                    <table >
                        <thead >
                            <tr style="color: blue">
                                <th>judul</th>
                                <th>jenis</th>
                                <th>gambar</th>
                                <th>tanggal</th>
                                <th>opsi</th>
                            </tr>
                        </thead>
                        <tbody >
                                <?php $no = 1; ?>
                        <?php foreach ($berita as $b) : ?>
                            <tr>
                                <!-- <td style="color: blue" scope="row"><?= $no++; ?></td> -->
                                <td style="padding-right: 15px"><?= $b['judul'] ?></td>
                                <td style="padding-right: 15px"><?= $b['jenis'] ?></td>
                                <!-- <td style="padding-right: 15px"><?= $b['gambar'] ?></td> -->
                                <td style="padding-right: 15px"><img src="./process/berita/images/<?= $b['gambar'] ?>" width='100' height='100'></td>
                                <td style="padding-right: 15px"><?= $b['tanggal'] ?></td>
                                <td>
                                    <span style="margin-right: 10px" class="status process"><a style="text-decoration: none; color: black;" href="dashboard.php?page=berita/editberita&id=<?= $b['id'] ?>">Edit</a>
                                    </span>
                                    <span class="status pending"><a style="text-decoration: none; color: black;" 
                                        href="process/berita/process_deleteberita.php?id=<?= $b['id'] ?>">Delete</a>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                                
                        </tbody>
                    </table>
                </div>



