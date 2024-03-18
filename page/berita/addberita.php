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
                        <h3 style="color: #185ADB;">Tambah Berita</h3>
                        <!-- <i class='bx bx-search' ></i> -->
                        <i class='bx bx-filter' ></i>
                    </div>
                <form method="POST" action="process/berita/process_addberita.php"
                enctype="multipart/form-data">
                    <div>
                        <label for="judul" >Judul</label>
                        <input type="text"  id="judul" name="judul">
                    </div>
                    <div>
                        <label for="isi_berita" >isi_berita</label>
                        <textarea style="width: 80%; border-radius: 10px" rows="15" type="text" id="isi_berita" name="isi_berita">
                            </textarea> 
                    </div>
                    <div style="margin-bottom: 20px">
                        <label for="jenis" style="display: block; margin-bottom: 5px; font-weight: bold;">Jenis Berita</label>
                        <select id="jenis" name="jenis" style=" height: 45px; width: 80%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                            <option value="visi" style="font-size: 14px; background-color: #fff; color: #333;">Dakwah</option>
                            <option value="misi" style="font-size: 14px; background-color: #fff; color: #333;">Institusi</option>
                            <option value="tujuan" style="font-size: 14px; background-color: #fff; color: #333;">Kerjasama</option>
                        </select>
                    </div>
                     <div>
                        <label for="tanggal" >tanggal</label>
                        <input type="date"  id="tanggal" name="tanggal">
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