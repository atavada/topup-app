<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login - 4xtry</title>
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
              <h1 class="login-title">Log in</h1>
              <form action="login-function.php" method="post">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" id="username" class="form-control" placeholder="" />
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="" />
                </div>
                <?php
                  if(isset($_GET['error'])) {
                    ?> <p class="error text-danger"><?php echo $_GET['error']; ?></p>
                  <?php }
                ?>
                <input name="login" id="login" class="btn btn-block login-btn mt-4" type="submit" value="Login" />
              </form>
              <a href="#!" class="forgot-password-link">Forgot password?</a>
              <p class="login-wrapper-footer-text">Don't have an account? <a href="signup.php" class="text-reset">Register here</a></p>
            </div>
          </div>
          <div class="col-sm-8 px-0 d-none d-sm-block">
            <img src="img/bg.webp" alt="login image" class="login-img" />
          </div>
        </div>
      </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
