<?php
session_start();
  if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://kit.fontawesome.com/53d82b54ee.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/53d82b54ee.css" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>4xtry - Indonesia</title>
    <link rel="icon" href="img/4xtry.png" />
  </head>
  <body class="text-white" style="background-color: rgb(46, 46, 56)">
    <header>
      <nav class="navbar navbar-dark bg-dark navbar-expand-lg p-3 shadow fixed-top">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-light" href="/kuliah/pertemuan5/topup">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="index.php?page=game">Game</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="index.php?page=order">Order</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <div class="dropdown">
                  <button class="btn btn-light rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="user.php">Akun</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main class="main">
      <section class="user" style="margin-top: 60px">
        <div class="container mb-5">
          <h5 class="mb-4">Pengaturan Akun</h5>
          <div class="card bg-dark mb-4">
            <div class="card-body p-4 row">
              <div class="col-1"><img src="img/user.png" alt="" width="40px" /></div>
              <div class="col-11">
                <p class="mb-2"></p>
                <h5><p class="mb-0">Selamat Datang, <?php echo $_SESSION['name']; ?></p></h5>
              </div>
            </div>
          </div>
          <form action="change-pass.php" method="post">
          <div class="card bg-dark mb-4">
            <div class="card-body p-4">
              <h6 class="mb-3">Profile</h6>
              <div class="mb-3">
                <label class="form-label">Nama</label>
                <input name="name" type="text" class="form-control rounded-5" id="nama" value="<?php echo $_SESSION['name']; ?>"/>
              </div>
              <input type="submit" class="btn btn-primary float-end rounded-5" value="Update Profile" />
            </div>
          </div>
          <div class="card bg-dark">
            <div class="card-body p-4">
              <h6 class="mb-3">Password</h6>
              <div class="mb-3">
                <label class="form-label">Password Lama</label>
                <div class="input-group">
                  <input type="password" class="form-control rounded-start-5" id="password" name="op" placeholder="Password Lama" value="" />
                  <span class="input-group-text rounded-end-5">
                    <i class="fa fa-eye" id="togglePassword" style="cursor: pointer"></i>
                  </span>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group">
                  <input type="password" class="form-control rounded-start-5" id="passwordold" name="np" placeholder="Password" value="" />
                  <span class="input-group-text rounded-end-5">
                    <i class="fa fa-eye" id="togglePasswordold" style="cursor: pointer"></i>
                  </span>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Konfirmasi Password</label>
                <div class="input-group">
                  <input type="password" class="form-control rounded-start-5" id="passwordkonf" name="c_np" placeholder="Konfirmasi Password" value="" />
                  <span class="input-group-text rounded-end-5">
                    <i class="fa fa-eye" id="togglePasswordkonf" style="cursor: pointer"></i>
                  </span>
                </div>
              </div>

              <?php if (isset($_GET['error'])) { ?>
                <p class="error text-danger"><?php echo $_GET['error']; ?></p>
              <?php } ?>

              <?php if (isset($_GET['success'])) { ?>
                <p class="success text-success"><?php echo $_GET['success']; ?></p>
              <?php } ?>

              <input name="update" id="update" type="submit" class="btn btn-primary float-end rounded-5" value="Update Password" />
            </div>
          </div>
        </form>
        </div>
      </section>
    </main>

    <footer class="text-center text-lg-start text-white bg-dark">
      <section>
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">4xtry Store</h6>
              <p>Top-Up Game Favorit Kalian Di Xcashshop Agar Main Game Semakin Seru. Pengiriman Cepat Dan Berbagai Methode Pembayaran Yang Lengkap.</p>
            </div>
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Map sites</h6>
              <p><a class="text-white text-decoration-none" href="/kuliah/pertemuan5/topup">Home</a></p>
              <p><a class="text-white text-decoration-none" href="?page=game">Game</a></p>
              <p><a class="text-white text-decoration-none" href="?page=order">Order</a></p>
            </div>
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
              <p><i class="fas fa-home mr-3"></i> Perum Bhummi Citra Praja Blok K9</p>
              <p><i class="fas fa-envelope mr-3"></i> ardhaardhanaputra@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 62 823 2826 6308</p>
              <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>
              <a class="btn btn-primary btn-floating m-1 rounded-circle border-0" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-primary btn-floating m-1 rounded-circle border-0" style="background-color: #3b3b3b" href="#!" role="button"><i class="fab fa-tiktok"></i></a>
              <a class="btn btn-primary btn-floating m-1 rounded-circle border-0" style="background-color: #ac2bac" href="https://www.instagram.com/a.tvddd/" role="button"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <!-- Grid container -->
      </section>

      <!-- Copyright -->
      <div class="text-center mt-3 p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2023 Copyright
        <a class="text-white" href="https://www.instagram.com/a.tvddd/">Ardha Tavada</a>
      </div>
      <!-- Copyright -->
    </footer>
    
    <script>
      const togglePassword = document.querySelector("#togglePassword");
      const password = document.querySelector("#password");
      const togglePasswordold = document.querySelector("#togglePasswordold");
      const passwordold = document.querySelector("#passwordold");
      const togglePasswordkonf = document.querySelector("#togglePasswordkonf");
      const passwordkonf = document.querySelector("#passwordkonf");

      togglePassword.addEventListener("click", function () {
        // toggle the type attribute
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);
        // toggle the eye icon
        this.classList.toggle("fa-eye");
        this.classList.toggle("fa-eye-slash");
      });

      togglePasswordold.addEventListener("click", function () {
        // toggle the type attribute
        const type = passwordold.getAttribute("type") === "password" ? "text" : "password";
        passwordold.setAttribute("type", type);
        // toggle the eye icon
        this.classList.toggle("fa-eye");
        this.classList.toggle("fa-eye-slash");
      });

      togglePasswordkonf.addEventListener("click", function () {
        // toggle the type attribute
        const type = passwordkonf.getAttribute("type") === "password" ? "text" : "password";
        passwordkonf.setAttribute("type", type);
        // toggle the eye icon
        this.classList.toggle("fa-eye");
        this.classList.toggle("fa-eye-slash");
      });
    </script>
  </body>
</html>
<?php
  } else {
      header("Location: index.php");
      exit();
  }
?>