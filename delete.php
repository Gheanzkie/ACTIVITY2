<?php 
session_start();
if(!isset($_SESSION['admin'])) {
    header("location: admininfo.php");
    exit();
}
include_once ('act2server.php');
    if (isset($_POST['delete'])) {
    $_GET['id'];
     $delete = "DELETE FROM `profile` WHERE id='$id'";

    if (mysqli_query($conn, $delete)) {
    echo "<script>alert('Student Deleted Successfully'); window.location='admininfo.php';</script>";
} else {
    echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
   }
 }
            
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
     <link rel="icon" href="KCCLOGO.png">
    <title>UPDATE</title>
</head>
<body>
    <div class="bg-dark d-flex justify-content-center align-items-center w-100 vh-100">
        <div class="bg-white w-25 h-30 rounded p-4 justify-content-center " >
            <div class="d-flex justify-content-center">
            <h2>Delete <span> <img  style="width: 50px; height: 50px;" src="KCCLOGO.png" alt="icon"></span></h2>
            </div>

            <form method="POST">
                <div class="d-flex gap-2 justify-content-center">

                <button class="btn btn-success" type="submit" name="delete">Delete</button>
                <a href= "admininfo.php"class="btn btn-dark">back</a> 
                </div>
           
            </form>
        </div>


        </div>
    
</body>
</html>