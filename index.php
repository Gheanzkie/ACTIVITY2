<?php
session_start();

if (isset($_SESSION['name'])) {
    header("Location: profile.php");
    exit();
}
include_once('act2server.php');



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `profile` WHERE `username`='$username' AND `password`='$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['name'] = $row['name'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['birthdate'] = $row['birthdate'];
        $_SESSION['age'] = $row['age'];
        $_SESSION['contact'] = $row['contact'];
        $_SESSION['sex'] = $row['sex'];

        echo "<script>alert('Welcome'); window.location.href='profile.php';</script>"; 
    } else {
        echo "<script>alert('Invalid username or password'); window.location.href='index.php';</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="KCCLOGO.png">
  <title>Login</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background: url('pic1.jpeg') no-repeat center center fixed; background-size: 225vh 100vh;">
>
  
  <div class="card shadow-lg p-4" style="width: 25rem;">
    <h2 class="text-center mb-4">Login <span> <img  style="width: 50px; height: 50px;" src="KCCLOGO.png" alt="icon"></span></h2>
    <form method="POST">
      <div class="mb-3">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
      </div>

      <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>

      <div class="d-flex justify-content-center gap-2">
        <button class="btn btn-success" type="submit" name="login">Login</button>
        <a class="btn btn-danger" href="register.php">Register</a>
        <a class="btn btn-info" href="admin.php">Admin</a>
      </div>
    </form>
  </div>

</body>
</html>
