<!-- koneksi -->
<?php
require_once('function/koneksi.php');
?>

<!-- mengambil data dari database -->
<?php
$banner1 = mysqli_query($koneksi, "SELECT * FROM frontend where nama = 'banner1' ");
$banner2 = mysqli_query($koneksi, "SELECT * FROM frontend where nama = 'banner2' ");
$struktural = mysqli_query($koneksi, "SELECT * FROM struktural ");
$visi = mysqli_query($koneksi, "SELECT * FROM visi_misi where kategory = 'visi' ");
$misi = mysqli_query($koneksi, "SELECT * FROM visi_misi where kategory = 'misi' ");
$tujuan = mysqli_query($koneksi, "SELECT * FROM visi_misi where kategory = 'tujuan' ");
$footer = mysqli_query($koneksi, "SELECT * FROM frontend where kategory = 'footer' ");
$berita = mysqli_query($koneksi, "SELECT * FROM berita ");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La Roiba</title>
  <meta name="title" content="Laa Roiba - Institut Agama Islam Nasional Laa Roiba">
  <meta name="description" content="Laa Roiba - Institut Agama Islam Nasional Laa Roiba">

  <!-- favicon / logo di url web -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- css untuk styling -->
  <link rel="stylesheet" href="./assets_fe/css/style.css">
  
  <!-- foon yang digunakan -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">

  <!-- preload images -->
  <link rel="preload" as="image" href="./assets_fe/images/hero-bg.svg">
  <link rel="preload" as="image" href="./assets_fe/images/hero-banner-1.jpg">
  <link rel="preload" as="image" href="./assets_fe/images/hero-banner-2.jpg">
  <link rel="preload" as="image" href="./assets_fe/images/hero-shape-1.svg">
  <link rel="preload" as="image" href="./assets_fe/images/hero-shape-2.png">

</head>

<body id="top">

  <!-- bagian header -->
  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets_fe/images/logo.png" width="200" height="80" alt="Laroiba logo">
      </a>

      <!-- navbar -->
      <nav class="navbar" data-navbar>

        <div class="wrapper">
          <a href="#" class="logo">
            <img src="./assets_fe/images/logo.png" width="200" height="50" alt="EduWeb logo">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">


          <li class="navbar-item">
            <a href="profile.php" class="navbar-link" data-nav-link>Berita Institut Agama Islam Nasional Laa Roiba Bogor</a>
          </li>

        </ul>

      </nav>

      <div class="header-actions">

       <!--  <button class="header-action-btn" aria-label="toggle search" title="Search">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        </button> -->

        <a href="index.php" class="btn has-before">
          <span class="span">Home</span>

          <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
        </a>

        <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

      </div>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>

  <main>
    <article>

      <section class="section course" id="courses" aria-label="course" style="margin-top: 50px">
        <div class="container">
          <h2 class="h2 section-title">Berita</h2>

          <ul class="grid-list">
          <?php foreach ($berita as $brt) : ?>
            <li>
              <div class="course-card">
                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="process/berita/images/<?= $brt['gambar'] ?>" width="370" height="220" loading="lazy"
                    alt="<?= $brt['judul'] ?>" class="img-cover">
                </figure>
                <!-- <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                  <span class="span">3 Weeks</span>
                </div> -->
                <div class="card-content">
                  <span class="badge"><?= $brt['jenis'] ?></span>
                  <h3 class="h3">
                    <a href="berita.php?id=<?= $brt['id'] ?>" class="card-title"> <?= $brt['judul'] ?></a>
                  </h3>
                  <data class="price" > <?= $brt['tanggal'] ?></data>
                  <ul class="card-meta-list">
                    <li class="card-meta-item">
                      <!-- <ion-icon name="library-outline" aria-hidden="true"></ion-icon> -->
                      <span class="span">Institut Agama Islam Nasional Laa Roiba Bogor</span>
                    </li>
                   <!--  <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>
                      <span class="span">dilihat</span>
                    </li> -->
                  </ul>

                </div>

              </div>
            </li>

            <?php endforeach; ?>
          </ul>

                </div>

              </div>
            </li>

          </ul>


          <a href="index.php" class="btn has-before">
            <span class="span">home</span>
            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
          </a>

        </div>
      </section>




      
    </article>
  </main>


  <!-- BAGIAN FOOTER / KONTAK  -->

  <footer  id="kon" class="footer" style="background-image: url('./assets_fe/images/footer-bg.png')">

    <div class="footer-top section">
      <div class="container grid-list">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets_fe/images/logo.png" width="200" height="50" alt="EduWeb logo">
          </a>

          <?php foreach ($footer as $f1) : ?>
              <p class="footer-brand-text">
                 <?= $f1['isi_konten'] ?>
              </p>
          <?php endforeach; ?>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Web Kami</p>
          </li>

          <li>
            <a href="#home" class="footer-link">Home</a>
          </li>

          <li>
            <a href="#about" class="footer-link">Visi & Misi</a>
          </li>

          <li>
            <a href="#courses" class="footer-link">Berita</a>
          </li>

          <li>
            <a href="#blog" class="footer-link">Video</a>
          </li>

          <li>
            <a href="#struktural" class="footer-link">Struktural</a>
          </li>
        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">http://laaroiba.ac.id</a>
          </li>

           <li>
            <a href="login.php" class="footer-link">Login Admin</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Kontak</p>

          <p class="footer-list-text">
            Kirimi kami Pertanyaan untuk info lanjut dan Apapun melalui kontak yang tertera.
          </p>
          <br>
         <!--  <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Masukan email kamu" required class="input-field">

            <button type="submit" class="btn has-before">
              <span class="span">Kirim</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </button>
          </form> -->

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          Copyright 2023 All Rights Reserved by <a href="#" class="copyright-link">Laa Roiba</a>
        </p>

      </div>
    </div>

  </footer>

  <!-- TOMBOL KEMBALI KE ATAS -->
  <a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

  <!-- LINK JAVASCRIPT -->
  <script src="./assets_fe/js/script.js" defer></script>

  <!-- III IKON III IKON TOL -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>