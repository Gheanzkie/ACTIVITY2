<?php
include_once('act2server.php');

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $birthdate = $_POST['birthdate'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $sex = $_POST['sex'];

    $query = "INSERT INTO `profile`(`username`, `password`, `name`, `address`, `birthdate`, `age`, `contact`, `sex`) 
              VALUES ('$username','$password', '$name', '$address', '$birthdate', '$age', '$contact', '$sex')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Student Successfully Registered!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('There was an Error:'); window.location.href='index.php';</script>";
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
   
  <title>REGISTER</title>
</head>
<body style="background: url('pic1.jpeg') no-repeat center center fixed; background-size: 225vh 100vh;">
  <div class="card shadow-lg p-4 mt-3 ms-5" style="width: 25rem;">
    <h2 class="text-center mb-4">Registration <span> <img  style="width: 50px; height: 50px;" src="KCCLOGO.png" alt="icon"></span></h2>
    <form method="POST" action="">
      <div class="mb-2">
        <input class="form-control" type="text" name="username" placeholder="Enter your username" required>
        <div class="pic1">
    </div>
        <img src="" alt="">
      </div>
      <div class="mb-2">
        <input class="form-control" type="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="mb-2">
        <input class="form-control" type="text" name="name" placeholder="Enter your name" required>
      </div>
      <div class="mb-2">
        <input class="form-control" type="text" name="address" placeholder="Enter your Address" required>
      </div>
      <div class="mb-2">
        <label class="form-label">Birth Date</label>
        <input class="form-control" type="date" name="birthdate" required>
      </div>
      <div class="mb-2">
        <input class="form-control" type="number" name="age" placeholder="Enter your age" required>
      </div>
      <div class="mb-2">
        <input class="form-control" type="text" name="contact" placeholder="Enter your Phone Number" required>
      </div>
      <div class="mb-2">
        <select name="sex" class="form-select" required>
          <option value="" disabled selected>Select Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Gay">Gay</option>
          <option value="Tomboy">Tomboy</option>
        </select>
      </div>
      <div class="d-flex justify-content-center gap-2 mt-3">
        <button class="btn btn-danger" type="submit" name="submit">Register</button>
        <a class="btn btn-success" href="index.php">Login</a>
      </div>
    </form>
  </div>
</body>
</html>
