<?php
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    
    include "koneksi.php";

    $sql = "SELECT * FROM pesanan ORDER BY id DESC";
    $hasil = mysqli_query($koneksi, $sql);
}
?>