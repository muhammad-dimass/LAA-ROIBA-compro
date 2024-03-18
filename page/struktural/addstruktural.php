<?php

$process = isset($_GET['process']) ? ($_GET['process']) : false;

?>

<?php if ($process == 'failed') : ?>
    <div class="alert alert-danger" role="alert">
        Semua formulir harus diisi
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div>
                
                <div class="head">
                        <h3 style="color: #185ADB;">Tambah Struktural</h3>
                        <!-- <i class='bx bx-search' ></i> -->
                        <i class='bx bx-filter' ></i>
                    </div>
                <form method="POST" action="process/struktural/process_addstruktural.php"
                enctype="multipart/form-data">
                    <div>
                        <label for="nama" >nama</label>
                        <input type="text"  id="nama" name="nama">
                    </div>
                     <div>
                        <label for="posisi" >posisi</label>
                        <input type="text"  id="posisi" name="posisi">
                    </div>
                    <div style="margin-bottom: 30px;" >
                        <label for="gambar">Gambar</label>
                        <input type="file" id="gambar" name="gambar">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>