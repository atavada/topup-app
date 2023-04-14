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
<div class="container mt-5 mb-5">
  <div class="mb-4">
    <img src="img/top.webp" alt="" class="d-block w-100 rounded" />
  </div>
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card bg-dark">
        <div class="card-body p-4">
          <img src="img/mlbb.png" alt="" class="d-block w-50 rounded" /><br />
          <h5 class="text-start mt-3">Diamond Fast</h5>
          <br />
          <p class="text-start">
            Top up ML Diamond hanya dalam hitungan detik! Cukup masukan Username MLBB Anda, pilih jumlah Diamond yang Anda inginkan, selesaikan pembayaran, dan Diamond akan secara langsung ditambahkan ke akun Mobile Legends Anda.
          </p>
          <p>Bayarlah menggunakan QRIS, GoPay, OVO, DANA, Bank Transfer, Telkomsel, ShopeePay, LinkAja, Alfamart, Indomaret dan kartu kredit. Tanpa perlu registrasi ataupun log-in.</p>
        </div>
      </div>
    </div>

    <div class="col-md-8">
      <form class="contact-form" action="mobilelegends-function.php" method="post">
        <div class="card bg-dark mb-4">
          <div class="card-body p-4">
            <div class="row">
              <div class="col-md-12">
                <h5>Masukan User ID</h5>
                <div class="row mt-3">
                  <div class="col-6">
                    <input type="text" class="form-control" name="userid" placeholder="User ID" />
                  </div>
                  <div class="col-6">
                    <input type="text" class="form-control" name="zoneid" placeholder="Server ID" />
                  </div>
                  <div class="col-12">
                    <p class="mb-0 mt-2">Silahkan Masukkan User ID & Server Anda</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card bg-dark mb-4">
          <div class="card-body p-4">
            <div class="row">
              <div class="col-md-12">
                <h5>Pilih Nominal Top Up</h5>
                <div class="row mt-3">
                  <div class="col-6 col-sm-4">
                    <input type="radio" id="service0" name="service" value="86" />
                    <label for="service0">86 Diamonds</label>
                  </div>
                  <div class="col-6 col-sm-4">
                    <input type="radio" id="service1" name="service" value="172" />
                    <label for="service1">172 Diamonds</label>
                  </div>
                  <div class="col-6 col-sm-4">
                    <input type="radio" id="service2" name="service" value="257" />
                    <label for="service2">257 Diamonds</label>
                  </div>
                  <div class="col-6 col-sm-4">
                    <input type="radio" id="service3" name="service" value="344" />
                    <label for="service3">344 Diamonds</label>
                  </div>
                  <div class="col-6 col-sm-4">
                    <input type="radio" id="service4" name="service" value="429" />
                    <label for="service4">429 Diamonds</label>
                  </div>
                  <div class="col-6 col-sm-4">
                    <input type="radio" id="service5" name="service" value="514" />
                    <label for="service5">514 Diamonds</label>
                  </div>
                  <div class="col-6 col-sm-4">
                    <input type="radio" id="service6" name="service" value="706" />
                    <label for="service6">706 Diamonds</label>
                  </div>
                  <div class="col-6 col-sm-4">
                    <input type="radio" id="service7" name="service" value="878" />
                    <label for="service7">878 Diamonds</label>
                  </div>
                  <div class="col-6 col-sm-4">
                    <input type="radio" id="service8" name="service" value="1412" />
                    <label for="service8">1412 Diamonds</label>
                  </div>
                  <div class="col-6 col-sm-4">
                    <input type="radio" id="service9" name="service" value="2194" />
                    <label for="service9">2194 Diamonds</label>
                  </div>
                  <div class="col-6 col-sm-4">
                    <input type="radio" id="service10" name="service" value="3688" />
                    <label for="service10">3688 Diamonds</label>
                  </div>
                  <div class="col-6 col-sm-4">
                    <input type="radio" id="service11" name="service" value="5532" />
                    <label for="service11">5532 Diamonds</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card bg-dark mb-4">
          <div class="card-body p-4">
            <div class="row">
              <div class="col-md-12">
                <h5>Pilih Metode Pembayaran</h5>
                <div class="row mt-3">
                  <div class="col-12">
                    <input type="radio" class="btn-check" id="method0" name="metode" value="BCA" />
                    <label class="button" for="method0">
                      <img src="img/bca.png" alt="" class="img-fluid" />
                      <h5 class="float-end">
                        <span class="badge bg-success" id="BCA"></span>
                      </h5>
                    </label>
                  </div>
                  <div class="col-12">
                    <input type="radio" class="btn-check" id="method1" name="metode" value="QRIS" />
                    <label class="button" for="method1">
                      <img src="img/qris.png" alt="" class="img-fluid" width="180px" />
                      <h5 class="float-end">
                        <span class="badge bg-success" id="QRIS"></span>
                      </h5>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card bg-dark mb-4">
          <div class="card-body p-4">
            <div class="row">
              <div class="col-md-12">
                <h5>Nomor Whatsapp</h5>
                <div class="row mt-3">
                  <div class="col-12">
                    <input type="text" class="form-control" id="nomorhp" name="nomorhp" placeholder="08xxxxxxx" required />
                  </div>
                  <div class="col-12 mt-3">
                    <input type="submit" name="create" value="Input Data" id="orderbtn" class="btn btn-primary float-end" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $_GET['error']; ?>
        </div>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
        <div class="alert alert-success" role="alert">
          <?php echo $_GET['success']; ?>
        </div>
        <?php } ?>

      </form>
      <script>
          const service0 = document.getElementById("service0");
          const service1 = document.getElementById("service1");
          const service2 = document.getElementById("service2");
          const service3 = document.getElementById("service3");
          const service4 = document.getElementById("service4");
          const service5 = document.getElementById("service5");
          const bca = document.getElementById("BCA");
          const qris = document.getElementById("QRIS");
          
          service0.addEventListener("change", () => {
            if (service0.checked) {
              bca.textContent = "Rp. 20.000";
              qris.textContent = "Rp. 20.000";
            }
          });
          service1.addEventListener("change", () => {
            if (service1.checked) {
              bca.textContent = "Rp. 40.000";
              qris.textContent = "Rp. 40.000";
            }
          });
          service2.addEventListener("change", () => {
            if (service2.checked) {
              bca.textContent = "Rp. 60.000";
              qris.textContent = "Rp. 60.000";
            }
          });
          service3.addEventListener("change", () => {
            if (service3.checked) {
              bca.textContent = "Rp. 80.000";
              qris.textContent = "Rp. 80.000";
            }
          });
          service4.addEventListener("change", () => {
            if (service4.checked) {
              bca.textContent = "Rp. 100.000";
              qris.textContent = "Rp. 100.000";
            }
          });
          service5.addEventListener("change", () => {
            if (service5.checked) {
              bca.textContent = "Rp. 120.000";
              qris.textContent = "Rp. 120.000";
            }
          });
        </script>
    </div>
  </div>
</div>
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
</body>
</html>
<?php
  } else {
      header("Location: index.php");
      exit();
  }
?>