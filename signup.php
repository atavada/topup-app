<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Register - 4xtry</title>
    <link rel="icon" href="img/4xtry.png" />
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <main>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-4 login-section-wrapper">
            <div class="brand-wrapper">
              <img src="img/4xtry.png" alt="logo" class="logo" />
            </div>
            <div class="login-wrapper my-auto">
              <h1 class="login-title">Register</h1>
              <form action="signup-function.php" method="post">
            
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <?php if (isset($_GET['name'])) { ?>
                  <input type="text" name="name" class="form-control" placeholder="" value="<?php echo $_GET['name']; ?>" />
                  <?php }else{ ?>
                  <input type="text" name="name" class="form-control" placeholder="" />
                  <?php }?>
                </div>

                <div class="form-group">
                  <label for="username">Username</label>
                  <?php if (isset($_GET['username'])) { ?>
                  <input type="text" name="username" class="form-control" placeholder="" value="<?php echo $_GET['username']; ?>" />
                  <?php }else{ ?>
                  <input type="text" name="username" class="form-control" placeholder="" />
                  <?php }?>
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="" />
                </div>

                <div class="form-group">
                  <label for="re_password">Konfirmasi Password</label>
                  <input type="password" name="re_password" class="form-control" placeholder="" />
                </div>

                <?php if (isset($_GET['error'])) { ?>
                  <p class="error text-danger"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                  <p class="success text-success"><?php echo $_GET['success']; ?></p>
                <?php } ?>

                <input name="register" id="register" class="btn btn-block login-btn mt-4" type="submit" value="Sign Up" />
              </form>
              <a href="#!" class="forgot-password-link"></a>
              <p class="login-wrapper-footer-text">Already have an account? <a href="login.php" class="text-reset">Login here</a></p>
            </div>
          </div>
          <div class="col-sm-8 px-0 d-none d-sm-block">
            <img src="img/bg.webp" alt="login image" class="login-img" />
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
