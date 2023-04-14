<?php
session_start();
    include "koneksi.php";
	if(isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("Location: login.php?error=Username is required!");
        exit();
    } else if(empty($password)) {
        header("Location: login.php?error=Password is required!");
        exit();
    } else {

        $sql = "SELECT * FROM user WHERE username = '$username'";
        $hasil = mysqli_query($koneksi, $sql);

        if(mysqli_num_rows($hasil) === 1) {
            $row = mysqli_fetch_assoc($hasil);
            if (password_verify($password, $row['password'])) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: index.php");
                exit();
            } else {
                header("Location: login.php?error=Incorrect Username or Password");
                exit();
            }
        } else {
            header("Location: login.php?error=Incorrect Username or Password");
            exit();
        }
    }
  } else {
    header("Location: login.php");
    exit();
  }
?>