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
                        <h3 style="color: #185ADB;">Tambah Video</h3>
                        <i class='bx bx-filter' ></i>
                    </div>
                <form method="POST" action="process/video/process_addvideo.php">
                    <div>
                        <label for="judul" >judul</label>
                        <input type="text"  id="judul" name="judul">
                    </div>

                    <div>
                        <label for="id_video_youtube" >Id Yideo Youtube</label>
                        <input type="text"  id="id_video_youtube" name="id_video_youtube">
                    </div>

                    <div>
                        <label for="tanggal" >tanggal</label>
                        <input type="date"  id="tanggal" name="tanggal">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>