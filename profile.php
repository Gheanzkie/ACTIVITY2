<?php
session_start();
include_once('act2server.php');

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache"); 
header("Expires: 0"); 


if(!isset($_SESSION['name'])) {
    header("location: index.php");
    exit();
}

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <link rel="icon" href="KCCLOGO.png">
    
    <title>Profile</title>
</head>
<body>
    <div class="bg-dark h-100 vh-100 justify-content-center align-items-center d-flex">
        <div class=" card bg-white d-flex w-100 h-100 rounded p-4">
            <div class="card shadow rounded mb-3">
            <h2 class="d-flex justify-content-between align-items-center">Profile
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
      </h2>

            </div>
            <div class=" card bg-white d-flex w-100 h-100 rounded p-4">
               
            <div class="card shadow rounded mb-3">
            <ul class="list-group">
                
                <li class="list-group-item">Name: <?php echo $_SESSION['name']; ?> </li>
                <li class="list-group-item">Address: <?php echo $_SESSION['address']; ?> </li>
                <li class="list-group-item">Birth Date: <?php echo $_SESSION['birthdate']; ?></li>
                <li class="list-group-item">Age: <?php echo $_SESSION['age']; ?> </li>
                <li class="list-group-item">Contact: <?php echo $_SESSION['contact']; ?></li>
                <li class="list-group-item">Sex: <?php echo $_SESSION['sex']; ?></li>


      </ul>
            </div>
        </div>

    </div>
    
</body>
</html>

