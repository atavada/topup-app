<?php
  include "order-function.php";
  if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>
      <section class="order" style="margin-top: 70px">
        <div class="container">
          <h4 class="mb-4">Periksa Pesanan</h4>
          <div class="row">
            <div class="col-12">
            <?php if (mysqli_num_rows($hasil)) {?>
            <table class="table table-light">
            <tr>
              <th scope="col" class="table-secondary">NO.</th>
              <th scope="col" class="table-secondary">ID PESANAN</th>
              <th scope="col" class="table-secondary">USER ID</th>
              <th scope="col" class="table-secondary">ZONE ID</th>
              <th scope="col" class="table-secondary">DIAMOND</th>
              <th scope="col" class="table-secondary">HARGA</th>
              <th scope="col" class="table-secondary">METODE</th>
              <th scope="col" class="table-secondary">NO HP</th>
              <th scope="col" class="table-secondary">TANGGAL</th>
            </tr>
            <tbody>
              <?php 
              $i = 0;
                while($rows = mysqli_fetch_assoc($hasil)) {
                  $i++;
              ?>
            <tr>
              <td scope="row"><?=$i?></td>
              <td><?=$rows['id_pesanan']?></td>
              <td><?=$rows['id_user']?></td>
              <td><?=$rows['id_zone']?></td>
              <td><?=$rows['diamond']?></td>
              <td><?=$rows['harga']?></td>
              <td><?=$rows['metode']?></td>
              <td><?=$rows['no_hp']?></td>
              <td><?=$rows['updated_at']?></td>
            </tr>
            <?php } ?>
            </tbody>
            </table>
            <?php } ?>
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