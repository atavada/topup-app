<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

    include "koneksi.php";

if(isset($_POST['op']) && isset($_POST['np']) 
    && isset($_POST['c_np'])) {

    function validate($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $op = validate($_POST['op']);
    $np = validate($_POST['np']);
    $c_np = validate($_POST['c_np']);

    if(empty($op)) {
        header("Location: user.php?error=Old Password is required!");
        exit();
    } else if(empty($np)) {
        header("Location: user.php?error=New Password is required!");
        exit();
    } else if($np !== $c_np) {
        header("Location: user.php?error=The confirmation password does not match!");
        exit();
    } else {
        // Hash Password
        $np = password_hash($np, PASSWORD_DEFAULT);
        $id = $_SESSION['id'];

        $sql = "SELECT password FROM user WHERE id='$id'";
        $hasil = mysqli_query($koneksi, $sql);

        if(mysqli_num_rows($hasil) === 1) {
            $row = mysqli_fetch_assoc($hasil);
            if (password_verify($op, $row['password'])) {
                $sql2 = "UPDATE user SET password='$np' WHERE id='$id'";
                $hasil2 = mysqli_query($koneksi, $sql2);
                header("Location: user.php?success=Your password has been updated successfully.");
                exit();
            }
        } else {
            header("Location: user.php?error=Incorrect Password!");
            exit();
        }
    }

} else {
    header("Location: user.php");
    exit();
}

} else {
    header("Location: login.php");
    exit();
}
?>