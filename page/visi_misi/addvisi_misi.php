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
                        <h3 style="color: #185ADB;">Tambah Visi, Misi & tujuan</h3>
                        <!-- <i class='bx bx-search' ></i> -->
                        <i class='bx bx-filter' ></i>
                    </div>
                <form method="POST" action="process/visi_misi/process_addvisi_misi.php">
                   <!--  <div>
                        <label for="Kategory" >Kategory</label>
                        <input type="text"  id="Kategory" name="kategory">
                    </div> -->
                    <div>
                        <label for="isi" >isi</label>
                        <input type="text"  id="isi" name="isi">
                    </div>
                    <div style="margin-bottom: 20px">
                        <label for="Kategory" style="display: block; margin-bottom: 5px; font-weight: bold;">Kategori</label>
                        <select id="Kategory" name="kategory" style=" height: 45px; width: 80%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                            <option value="visi" style="font-size: 14px; background-color: #fff; color: #333;">Visi</option>
                            <option value="misi" style="font-size: 14px; background-color: #fff; color: #333;">Misi</option>
                            <option value="tujuan" style="font-size: 14px; background-color: #fff; color: #333;">Tujuan</option>
                        </select>
                    </div>



                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>