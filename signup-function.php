<?php
session_start();
include "koneksi.php";

if(isset($_POST['username']) && isset($_POST['password']) 
    && isset($_POST['name']) && isset($_POST['re_password'])) {

    function validate($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $name = validate($_POST['name']);
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $re_password = validate($_POST['re_password']);

	$user_data = 'username='. $username. '&name='. $name;

  if (empty($name)){
        header("Location: signup.php?error=Name is required!&$user_data");
      exit();
	} else if (empty($username)) {
        header("Location: signup.php?error=Username is required!&$user_data");
      exit();
  } else if(empty($password)){
        header("Location: signup.php?error=Password is required!&$user_data");
      exit();
	} else if(empty($re_password)){
        header("Location: signup.php?error=Confirmation Password is required!&$user_data");
	    exit();
	} else if($password !== $re_password){
        header("Location: signup.php?error=The confirmation password does not match!&$user_data");
	    exit();
	} else {
        // Hash Password
        $password = password_hash($password, PASSWORD_DEFAULT);
    
        $sql = "SELECT * FROM user WHERE username = '$username'";
        $hasil = mysqli_query($koneksi, $sql);

        if(mysqli_num_rows($hasil) > 0) {
            header("Location: signup.php?error=The Username is taken try another!&$user_data");
	          exit();
        } else {
            $sql2 = "INSERT INTO user(name, username, password) VALUES('$name', '$username', '$password')";
            $hasil2 = mysqli_query($koneksi, $sql2);
            if ($hasil2) {
              header("Location: signup.php?success=Your account has been created successfully.");
	            exit();
            } else {
              header("Location: signup.php?error=unknown error occurred.&$user_data");
	            exit();
            }
        }
    }
  } else {
    header("Location: register.php");
    exit();
  }
?>