<?php
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>
<section class="mt-5 mb-5">
  <div class="container">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/arlot.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="img/fani.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mt-5 mb-5">
  <div class="container">
    <h2 class="mb">Game</h2>
    <div class="row">
      <div class="card p-0 border-0 shadow bg-dark m-3" style="width: 10rem">
        <img href="mobile-legends.php" src="img/mlbb.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <a href="mobile-legends.php" class="card-title text-center stretched-link text-decoration-none"><h6>Mobile Legends</h6></a>
        </div>
      </div>
      <div class="card p-0 border-0 shadow bg-dark m-3" style="width: 10rem">
        <img href="#" src="img/pubg.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <a href="#" class="card-title text-center stretched-link text-decoration-none"><h6>PUBG</h6></a>
        </div>
      </div>
      <div class="card p-0 border-0 shadow bg-dark m-3" style="width: 10rem">
        <img href="#" src="img/genshin.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <a href="#" class="card-title text-center stretched-link text-decoration-none"><h6>Genshin Impact</h6></a>
        </div>
      </div>
      <div class="card p-0 border-0 shadow bg-dark m-3" style="width: 10rem">
        <img href="#" src="img/valo.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <a href="#" class="card-title text-center stretched-link text-decoration-none"><h6>Valorant</h6></a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
  } else {
      header("Location: index.php");
      exit();
  }
?>