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
// $berita = mysqli_query($koneksi, "SELECT * FROM berita ");
$berita = mysqli_query($koneksi, "SELECT * FROM berita LIMIT 6");
// $video = mysqli_query($koneksi, "SELECT * FROM video ");
$video = mysqli_query($koneksi, "SELECT * FROM video LIMIT 6");
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
  <link rel="shortcut icon" href="./assets_fe/images/12.png" type="image/svg+xml">

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

   <style>
    .carousel-container {
      max-width: 80%;
      margin: 50px auto;
      overflow: hidden;
      position: relative;
    }

    .card-carousel {
      display: flex;
      transition: transform 0.3s ease-in-out;
    }

    .card {
      box-sizing: border-box;
      width: 250px;
      padding: 20px;
      margin: 10px;
      background-color: #f0f0f0;
      border-radius: 8px;
      text-align: center;
    }

    .prev-btn,
    .next-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
    }

    .prev-btn {
      left: 10px;
    }

    .next-btn {
      right: 10px;
    }
  </style>

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
            <a href="#home" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#struktur" class="navbar-link" data-nav-link>Struktural</a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link" data-nav-link>Visi-Misi</a>
          </li>

          <li class="navbar-item">
            <a href="#courses" class="navbar-link" data-nav-link>Berita</a>
          </li>

          <li class="navbar-item">
            <a href="#kon" class="navbar-link" data-nav-link>Kontak</a>
          </li>

          <li class="navbar-item">
            <a href="profile.php" class="navbar-link" data-nav-link>Sejarah</a>
          </li>

          <li class="navbar-item">
            <a href="pasca.php" class="navbar-link" data-nav-link>PascaSarjana PAI</a>
          </li>

          <li class="navbar-item">
            <a href="login.php" class="navbar-link" data-nav-link>admin</a>
          </li>

        </ul>

      </nav>

      <div class="header-actions">

      <!--   <button class="header-action-btn" aria-label="toggle search" title="Search">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        </button> -->

        <a href="#kon" class="btn has-before">
          <span class="span">Kontak</span>

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

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('./assets_fe/images/hero-bg.svg')">
        <div class="container">
          <!-- teks banner 1 -->
          <div class="hero-content">
            <?php foreach ($banner1 as $b1) : ?>
                <h1 class="h1 section-title">
                  <?= $b1['isi_konten'] ?>
                </h1>
            <?php endforeach; ?>

            <!-- teks banner 2 -->
            <?php foreach ($banner2 as $b2) : ?>
                <p class="hero-text">
                  <?= $b2['isi_konten'] ?>
                </p>
            <?php endforeach; ?>


           

            <a href="#kon" class="btn has-before">
              <span class="span">Klik Disini</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="hero-banner">

            <div class="img-holder one" style="--width: 270; --height: 300;">
              <img src="./assets_fe/images/hero-banner-1la.png" width="270" height="300" alt="hero banner" class="img-cover">
            </div>

            <div class="img-holder two" style="--width: 240; --height: 370;">
              <img src="./assets_fe/images/hero-banner-2la.png" width="240" height="300" alt="hero banner" class="img-cover">
            </div>

            <img src="./assets_fe/images/hero-shape-2.png" width="622" height="551" alt="" class="shape hero-shape-2">

          </figure>

        </div>
      </section>





      <!--- #CATEGORY-->

      <!-- <section class="section category" aria-label="category" id="struktur">
        <div class="container">


          <p class="section-subtitle">Struktural</p>

          <h2 class="h2 section-title">
            Institut Agama Islam Nasional  <span class="span">Laa Roiba Bogor</span>
          </h2>

          <p class="section-text">
          </p>

          <ul class="grid-list">

          <?php foreach ($struktural as $s) : ?>
              <li>
              <div class="category-card" style="--color: 351, 83%, 61%">
                <div class="card-icon">
                  <img src="process/Struktural/images/<?= $s['gambar'] ?>" width="90" height="90" loading="lazy"
                     class="img">
                </div>
                <h3 class="h3">
                  <a href="#" class="card-title"><?= $s['nama'] ?></a>
                </h3>
                <p class="card-text">
                  Institut Agama Islam Nasional Laa Roiba Bogor
                </p>
                <span class="card-badge"><?= $s['posisi'] ?></span>
              </div>
            </li>
          <?php endforeach; ?>
          </ul>

        </div>
      </section> -->
<section class="section category" aria-label="category" id="struktur">
        <div class="container">


          <p class="section-subtitle">Struktural</p>

          <h2 class="h2 section-title">
            Institut Agama Islam Nasional  <span class="span">Laa Roiba Bogor</span>
          </h2>
        </div>


<div class="carousel-container">
  <div class="card-carousel" id="cardCarousel">
     <?php foreach ($struktural as $s) : ?>
              <li>
              <div class="category-card card" style="--color: 351, 83%, 61%">
                <div class="card-icon">
                  <img src="process/Struktural/images/<?= $s['gambar'] ?>" width="90" height="90" loading="lazy"
                     class="img">
                </div>
                <h3 class="h3">
                  <a href="#" class="card-title"><?= $s['nama'] ?></a>
                </h3>
                <p class="card-text">
                  Institut Agama Islam Nasional Laa Roiba Bogor
                </p>
                <span class="card-badge"><?= $s['posisi'] ?></span>
              </div>
            </li>
          <?php endforeach; ?>
  </div>

  <button style="font-size: 30px" class="prev-btn" onclick="prevCard()"> < </button>
  <button style="font-size: 30px" class="next-btn" onclick="nextCard()"> > </button>
</div>
</section>

<script>
  const cardCarousel = document.getElementById('cardCarousel');
  const cards = document.querySelectorAll('.card');
  let currentIndex = 0;

  function showVisibleCards() {
    const cardWidth = cards[0].offsetWidth + parseInt(window.getComputedStyle(cards[0]).marginRight);
    cardCarousel.style.transform = `translateX(${-currentIndex * cardWidth}px)`;
  }

  function nextCard() {
    if (currentIndex < cards.length - 4) {
      currentIndex++;
      showVisibleCards();
    }
  }

  function prevCard() {
    if (currentIndex > 0) {
      currentIndex--;
      showVisibleCards();
    }
  }

  // Tampilkan kartu pertama saat halaman dimuat
  showVisibleCards();
</script>

      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-label="about">
      <div class="container">

          <div class="about-content">


            <h2 class="h2 section-title">
              Dr. Yanti Hasbian Setiawati,S.E., M.Pd.
            </h2>
            
            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Rektor Institut Agama Islam Nasional Laa Roiba Bogor</span>
              </li>
            </ul>

            <p class="section-text">
             Assallamualaikum Warahmatullahi Wabarakatuh. Puji dan syukur kita panjatkan kehadirat ALLAH SWT atas nikmat dan anugerah-Nya sehingga website IAI-N Laa Roiba yang merupakan bagian dari sarana informasi dan komunikasi IAI-N Laa Roiba ini tampil kembali dengan wajah baru untuk menjawab setiap kebutuhan informasi dengan memanfaatkan sarana teknologi informasi yang ada. Dengan adanya web ini selain sebagai media informasi program di IAI-N Laa Roiba juga diharapkan dapat mewujudkan hubungan silaturahmi yang lebih erat dengan komunitas IAI-N Laa Roiba, sebagai media belajar, serta menjadikan IAI-N Laa Roiba dikenal lebih luas lagi. Besar harapan saya, sarana ini dapat memberi manfaat bagi semua pihak yang ada dilingkup Pendidikan dan bagi pemerhati Pendidikan secara khusus IAI-N Laa Roiba. Akhirul kalam Wassalamualaikum Warahmatullahi Wabarakatuh.
            </p>

           
          </div>

           <figure class="about-banner">

            <div class="img-holder" style="--width: 820; --height: 870;">
              <img src="./assets_fe/images/about-banner1.png" width="820" height="870" loading="lazy" alt="about banner"
                class="img-cover">
            </div>

            <img src="./assets_fe/images/about-shape-3.png" width="722" height="528" loading="lazy" alt=""
              class="shape about-shape-3">

          </figure>

        </div>
      </section>

       <section class="section about" id="about" aria-label="about">
        <div class="container">
           <div class="about-content">
            <h2 class="h2 section-title">
              Visi
            </h2>

            <ul class="about-list">
              <?php foreach ($visi as $v1) : ?>
              <li class="about-item">
                <span class="span"><?= $v1['isi'] ?></span>
              </li>
             <?php endforeach; ?> 
            </ul>

            <h2 class="h2 section-title">
              Misi
            </h2>

             <ul class="about-list">
              <?php foreach ($misi as $m1) : ?>
              <li class="about-item">
                <span class="span"><?= $m1['isi'] ?></span>
              </li>
             <?php endforeach; ?> 
            </ul>



            <img src="./assets_fe/images/about-shape-4.svg" width="100" height="100" loading="lazy" alt=""
              class="shape about-shape-4">

          </div>

          <div class="about-content">

            <h2 class="h2 section-title">
              Tujuan :
            </h2>
            
            <ul class="about-list">
            <?php foreach ($tujuan as $t1) : ?>
              <li class="about-item">
                <span class="span"><?= $t1['isi'] ?></span>
              </li>
             <?php endforeach; ?> 
            </ul>
          </div>

        </div>
      </section>

      <!-- - #COURSE
      -->

      <section class="section course" id="courses" aria-label="course">
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


          <a href="moreberita.php" class="btn has-before">
            <span class="span">Lihat Semua Berita</span>
            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
          </a>

        </div>
      </section>


      <section style="margin-top: 50px">
        <div class="container" >

          <p class="section-subtitle">Institut Agama Islam Nasional Laa Roiba Bogor</p>
          <h2 class="h2 section-title">Video</h2>
          <ul class="grid-list" style="margin-top: 30px">
            <?php foreach ($video as $v) : ?>

              <li>
              <div class="blog-card">
                <iframe src="https://www.youtube.com/embed/<?= $v['id_video_youtube'] ?>" frameborder="0" allowfullscreen 
               width="370" height="370" ></iframe>
                <div class="card-content">

                  <a href="https://www.youtube.com/embed/<?= $v['id_video_youtube'] ?>" target="blank" class="card-btn" aria-label="read more">
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                  <a href="#" class="card-subtitle">Laa Roiba</a>

                  <h3 class="h3">
                    <a href="#" class="card-title"><?= $v['judul'] ?></a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <span class="span"><?= $v['tanggal'] ?></span>
                    </li>

                  </ul>
                </div>

              </div>
            </li>

             
            <?php endforeach; ?>
            



          </ul>

          <img src="./assets/images/blog-shape.png" width="186" height="186" loading="lazy" alt=""
            class="shape blog-shape">

             <center>
               <a style="margin: 70px 0px" href="morevideo.php" class="btn has-before">
            <span class="span">Lihat Semua Video</span>
            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
               </a>
             </center>

        </div>
      </section>



      <section class="section about" aria-label="about">
      <div class="container">

          <div class="about-content">


            <h2 class="h2 section-title">
              Kirimi Kami Pesan
            </h2>
            <p class="section-text">
              kirim pesan pertanyaan untuk bertanya atau hubungi kontak yang tertera secara langsung.
            </p>
            <form method="POST" action="./process/pesan/process_addpesan.php" >
            <input style="margin:20px 0px; border: 2px solid; border-radius: 10px; height: 50px;" type="text"
             name="nama" placeholder="   nama" required >
             <input style="margin:20px 0px; border: 2px solid; border-radius: 10px; height: 50px;" type="email" name="email" placeholder="   email" required >
            <input  style="margin:20px 0px; border: 2px solid; border-radius: 10px; height: 50px;" type="text" name="pesan" placeholder="    pesan" required >

            <button type="submit" class="btn has-before">
              <span class="span">Kirim</span>
              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </button>
          </form>

            

           
          </div>

           <figure class="about-banner">

            <div class="img-holder" style="--width: 820; --height: 870;">
              <img src="./assets_fe/images/hero-banner-2la.png" width="820" height="870" loading="lazy" alt="about banner"
                class="img-cover">
            </div>

            <img src="./assets_fe/images/about-shape-3.png" width="722" height="528" loading="lazy" alt=""
              class="shape about-shape-3">

          </figure>

        </div>
      </section>  

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

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





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets_fe/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>