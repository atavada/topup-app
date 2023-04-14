<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    
    include "koneksi.php";
    if (isset($_POST['create'])) {
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
    }
    $karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';
    $shuffle = substr(str_shuffle($karakter), 0, 16);
    $id_pesanan = $shuffle;
    
    $id_user = validate($_POST['userid']);
    $id_zone = validate($_POST['zoneid']);
    $diamond = validate($_POST['service']);

        if($diamond == 86){
            $total = "Rp. 20.000";
        } else if($diamond == 172){
            $total = "Rp. 40.000";
        } else if($diamond == 257){
            $total = "Rp. 60.000";
        } else if($diamond == 344){
            $total = "Rp. 80.000";
        } else if($diamond == 429){
            $total = "Rp. 100.000";
        } else if($diamond == 514){
            $total = "Rp. 120.000";
        }
    $harga = $total;

    $metode = validate($_POST['metode']);
    $nohp = validate($_POST['nomorhp']);

    $user_data = 'userid='. $id_user. '&zoneid='. $id_zone;

    if (empty($id_user)) {
        header("Location: mobile-legends.php?error=User ID harus diisi!&$$user_data");
    } else if (empty($id_zone)) {
        header("Location: mobile-legends.php?error=Zone ID harus diisi!&$$user_data");
    } else {
        $sql = "INSERT INTO pesanan(id_pesanan, id_user, id_zone, diamond, harga, metode, no_hp) 
                VALUES('$id_pesanan', '$id_user', '$id_zone', '$diamond', '$harga', '$metode', '$nohp')";
        $hasil = mysqli_query($koneksi, $sql);
        if ($hasil) {
            header("Location: mobile-legends.php?success=Data berhasil diinputkan.&$$user_data");
        } else {
            header("Location: mobile-legends.php?error=unknown error occurred.&$$user_data");
        }
    }
}
?>