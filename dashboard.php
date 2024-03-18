<?php
// require_once('function/helper.php');

session_start();
$page = isset($_GET['page']) ? ($_GET['page']) : false;
if ($_SESSION['id'] == null) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tag
  -->
  <title>La Roiba</title>
  <meta name="title" content="Laa Roiba - Institut Agama Islam Nasional Laa Roiba">
  <meta name="description" content="Laa Roiba - Institut Agama Islam Nasional Laa Roiba">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/stylesheetyle_form.css"> -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <title>Screening tools</title>


    <style>
    /* Gaya untuk label */
    label {
        display: block; /* Menjadikan label sebagai blok elemen sehingga muncul di atas input */
        margin-bottom: 5px; /* Memberikan margin bawah agar ada ruang antara label dan input */
        font-weight: bold; /* Memberikan tebal pada teks label (opsional) */
    }

    /* Gaya untuk input */
    input[type="number"],
    input[type="text"],
    input[type="date"] {
        width: 80%; /* Menyesuaikan lebar input dengan parentnya */
        padding: 12px; /* Memberikan padding pada input */
        border: 1px solid #ccc; /* Memberikan border pada input */
        border-radius: 10px; /* Memberikan sudut ujung tumpul pada input */
        box-sizing: border-box; /* Menghitung border dan padding ke dalam lebar dan tinggi total */
        margin-bottom: 10px; /* Memberikan margin bawah pada input */
    }

    /* Gaya untuk tombol submit */
    .btn-primary {
        background-color: #007bff; /* Warna latar belakang tombol */
        color: #fff; /* Warna teks tombol */
        padding: 10px 20px; /* Padding tombol */
        border: none; /* Menghilangkan border tombol */
        border-radius: 5px; /* Memberikan sudut ujung tumpul pada tombol */
        cursor: pointer; /* Menampilkan kursor tangan saat mengarahkan ke tombol */
    }

    /*style tabel*/
    @media screen and (max-width: 768px) {
        #myTabel {
            overflow-x: auto;
            display: block;
        }

        #myTabel thead {
            display: none;
        }

        #myTabel tbody {
            display: block;
            width: 100%;
        }

        #myTabel tbody tr {
            margin-bottom: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        #myTabel tbody td {
            text-align: left;
            border: none;
        }
    }




</style>

</head>
<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-dashboard'></i>
            <span class="text">Laa Roiba</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="dashboard.php?page=banner/banner">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Banner</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?page=Struktural/struktural">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Struktural</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?page=visi_misi/visi_misi">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Visi & misi</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?page=footer/footer">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Footer</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?page=berita/berita">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Berita</span>
                </a>
            </li>
             <li>
                <a href="dashboard.php?page=video/video">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Video</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?page=pesan/pesan">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Pesan</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <!-- <li>
                <a href="#">
                    <i class='bx bxs-cog' ></i>
                    <span class="text">Settings</span>
                </a>
            </li> -->
            <li>
                <a href="process/process_logout.php" class="logout">
                    <i class='bx bxs-log-out-circle' ></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu' ></i>
            <a href="#" class="nav-link">Tools</a>
            <form action="#" style="opacity: 0;"  >
                <div class="form-input">
                    <input type="search" placeholder="Search..." readonly>
                    <button style="display: none" type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            <!-- <input type="checkbox" id="switch-mode" hidden >
            <label for="switch-mode" class="switch-mode"></label> -->
            <a href="#" class="notification">
                <i class='bx bxs-bell' ></i>
                <!-- <span class="num">8</span> -->
            </a>
            <a href="#" class="profile">
                <img src="assets/img/img.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <!-- <h1>Dashboard</h1> -->
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Selamat Datang</a>
                        </li>
                        <li>
                            <a class="active" href="dashboard.php?page=home">Admin</a>
                        </li>
                    </ul>
                </div>
                <a  class="btn-download">
                    <!-- <i class='bx bxs-cloud-download' ></i> -->
                    <span class="text">Institut Agama Islam Nasional Laa Roiba Bogor</span>
                </a>
            </div>



            <!-- <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check' ></i>
                    <span class="text">
                        <h3>1020</h3>
                        <p>New Order</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group' ></i>
                    <span class="text">
                        <h3>2834</h3>
                        <p>Visitors</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-dollar-circle' ></i>
                    <span class="text">
                        <h3>$2543</h3>
                        <p>Total Sales</p>
                    </span>
                </li>
            </ul> -->


            <div class="table-data">
                <div class="order">
                    
                    <?php
                $filename = "page/$page.php";

                if (file_exists($filename)) {
                    include_once($filename);
                } else {
                    echo "404";
                }

                ?>

                </div>
                <!-- <div class="todo">
                    <div class="head">
                        <h3>Todos</h3>
                        <i class='bx bx-plus' ></i>
                        <i class='bx bx-filter' ></i>
                    </div>
                    <ul class="todo-list">
                        <li class="completed">
                            <p>Todo List</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="completed">
                            <p>Todo List</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="not-completed">
                            <p>Todo List</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="completed">
                            <p>Todo List</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="not-completed">
                            <p>Todo List</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                    </ul>
                </div> -->
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
</body>

    <script src="assets/js/script.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>



    <script type="text/javascript">
        // Hapus inisialisasi sebelumnya (jika ada)
      

        $(document).ready(function() {
    $('#myTabel').DataTable({
        "paging": false, // Menampilkan paginasi
        "ordering": false, // Aktifkan pengurutan kolom
        "searching": true, // Aktifkan pencarian
        "info": true, // Tampilkan informasi jumlah data
        "pageLength": 100, // Jumlah data per halaman
        "lengthChange": true, // Sembunyikan opsi perubahan jumlah data per halaman
        "responsive": true, // Aktifkan responsif
        "order": [], // Menghilangkan pengurutan default
        "dom": '<"top"lf>rt<"bottom"ip>',
        "language": {
            "search": "Cari:", // Mengganti label pencarian
            "lengthMenu": "Tampilkan _MENU_ per halaman",
            // "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            "infoEmpty": "Tidak ada data yang tersedia",
            // "infoFiltered": "(disaring dari _MAX_ total data)",
            "paginate": {
                "first": "Pertama",
                "last": "Terakhir",
                "next": "Selanjutnya",
                "previous": "Sebelumnya"
            }
        }
    });
});


        // Kemudian inisialisasi DataTables
        // $(document).ready(function() {
        //     $('#myTabel').DataTable();
        // });

        // $(document).ready(function() {
        //     $('#myTabel').DataTable({
        //         "paging": true, // Menampilkan paginasi
        //         "lengthChange": true, // Menghilangkan opsi perubahan jumlah tampilan per halaman
        //         "searching": true, // Menampilkan kotak pencarian
        //         "ordering": true, // Mengaktifkan pengurutan kolom
        //         "info": true, // Menampilkan informasi jumlah data
        //         "autoWidth": true // Menonaktifkan penyesuaian otomatis lebar kolom
        //     });
        // });

    </script>

</html>






    
               
