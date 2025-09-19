<?php
session_start();

if(isset($_SESSION['admin'])) {
  header("location: admininfo.php");
  exit();
}

include ('act2server.php');


if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM `admin` WHERE `username`= '$username' AND `password`= '$password'";
  $result = mysqli_query($conn, $query);


  if($result && mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result));

          $_SESSION['admin'] = $username;
          echo "<script>alert('Welcome admin!'); window.location.href='admininfo.php';</script>";

          exit();
    } 
    else {
        echo "<script>alert('Invalid username or password'); window.location.href='admin.php';</script>";
        
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
    <title>Admin</title>
</head>
<body>
    <body class="bg-dark d-flex justify-content-center align-items-center vh-100">

  <div class="card shadow-lg p-4" style="width: 25rem;">
    <h2 class="text-center mb-4">Admin <span> <img  style="width: 50px; height: 50px;" src="KCCLOGO.png" alt="icon"></span></h2>
    <form method="POST">
      <div class="mb-3">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
      </div>

      <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>

      <div class="d-flex justify-content-center gap-2">
        <button class="btn btn-danger" name="submit">Enter</button>
        
        <a class="btn btn-danger" href="index.php">Back</a>
      </div>
    </form>
  </div>

</body>
    
</body>
</html>