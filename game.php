<?php
  if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>
<section class="game" style="margin-top: 60px">
  <div class="container">
    <h2 class="mb-2">Game</h2>
    <div class="row">
      <div class="col-sm-6 card p-0 border-0 shadow bg-dark m-3" style="width: 10rem">
        <img href="#" src="img/mlbb.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <a href="mobile-legends.php" class="card-title text-center stretched-link text-decoration-none"><h6>Mobile Legends</h6></a>
        </div>
      </div>
      <div class="col-sm-6 card p-0 border-0 shadow bg-dark m-3" style="width: 10rem">
        <img href="#" src="img/pubg.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <a href="#" class="card-title text-center stretched-link text-decoration-none"><h6>PUBG</h6></a>
        </div>
      </div>
      <div class="col-sm-6 card p-0 border-0 shadow bg-dark m-3" style="width: 10rem">
        <img href="#" src="img/genshin.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <a href="#" class="card-title text-center stretched-link text-decoration-none"><h6>Genshin Impact</h6></a>
        </div>
      </div>
      <div class="col-sm-6 card p-0 border-0 shadow bg-dark m-3" style="width: 10rem">
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