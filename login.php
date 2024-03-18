<?php
// require_once('function/helper.php');
require_once('function/koneksi.php');
$process = isset($_GET['process']) ? ($_GET['process']) : false;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- titel halaman -->
  <title>La Roiba</title>
  <meta name="title" content="Laa Roiba - Institut Agama Islam Nasional Laa Roiba">
  <meta name="description" content="Laa Roiba - Institut Agama Islam Nasional Laa Roiba">
    <!-- favicon -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <!-- style css -->
  <link rel="stylesheet" href="assets/css/logincss.css">
  </head>
  <body>

    <section class="wrapper" style="margin:0px 30px;">
      <div class="form signup" style="padding: 0px;">
         <center>
        <a href="#" class="logo">
            <img src="./assets_fe/images/logo.png" width="200" height="60" alt="EduWeb logo">
          </a>
       <br> 
        <label style="color: white;">Selamat datang Admin Silakan Login...</label>
        </center>
        <?php if ($process == 'successregister') : ?>
                        <div class="alert alert-success" style="margin-top: 10px; margin-bottom: -0px ; background-color: white; opacity: 0.9;  padding: 5px; color: green;border-radius: 8px;">
                            <center><b>Register berhasil, silahkan login</b></center>
                        </div>
                    <?php endif; ?>
         <?php if ($process == 'failedempty') : ?>
                          <div class="alert alert-danger" style="margin-top: 10px; margin-bottom: -0px ; background-color: white; opacity: 0.9;  padding: 5px; color: red;border-radius: 8px;">
                            <center><b>Register gagal, ada form yang kosong !</b></center>
                         </div>
                    <?php endif; ?>
                    <?php if ($process == 'failedusername') : ?>
                         <div class="alert alert-danger" style="margin-top: 10px; margin-bottom: -0px ; background-color: white; opacity: 0.9;  padding: 5px; color: red;border-radius: 8px;">
                            <center><b>Register gagal, username sudah terpakai !</b></center>
                         </div>
                    <?php endif; ?>
                    <?php if ($process == 'failedpassword') : ?>
                        <div class="alert alert-danger" style="margin-top: 10px; margin-bottom: -0px ; background-color: white; opacity: 0.9;  padding: 5px; color: red;border-radius: 8px;">
                            <center><b>Register gagal, password tidak sesuai !</b></center>
                         </div>
                    <?php endif; ?>

        <form  method="POST" action="process/process_login.php">
          <input style="height: 50px" type="text" name="username" placeholder="Username" required />
          <input style="height: 50px" type="password"  name="password" placeholder="Password" required />
         <!--  <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">I accept all terms & conditions</label>
          </div> -->
          <input style="height: 50px" type="submit" value="Login" />
        </form>
      </div>


      <div class="form login" style="margin-bottom: 10px" >
        <!-- <header>Register</header> -->
       <!--  <center>
        <br>
        <h3 style="color: red">Hanya developer yang dapat melakukan register</h3>
          <p style="margin-top: 250px"><small>Copyright - Screentools - 2023</small></p>
        </center> -->
        <!-- <form method="POST" action="process/process_register.php">
          <input type="text" placeholder="Username" name="username" required>
          <input type="password" placeholder="Password" name="password" required>
          <input type="password" placeholder="Konfirmasi password" name="repassword" required>
          <input type="submit" value="Register" style="margin-top: -5px;" />
        </form> -->
      </div>



      <script>
        const wrapper = document.querySelector(".wrapper"),
          signupHeader = document.querySelector(".signup header"),
          loginHeader = document.querySelector(".login header");

        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });
      </script>
    </section>

  </body>
</html>