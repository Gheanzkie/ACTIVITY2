<?php
session_start(); 

if(!isset($_SESSION['admin'])) {
    echo "<script>alert('Please Login first'); window.location.href='admin.php';</script>";
    exit();
}

include_once('act2server.php');


    

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="icon" href="KCCLOGO.png">
  <title>Admin - User Info</title>
</head>
<body class="bg-light p-4">
  <div class="container">
    <h2 class="mb-4">All Users Information</h2>
    <h5>Welcome Admin</h5>
    
    <table class="table table-bordered table-striped mt-3">
      <thead class="table-dark">
        <tr>
          <th>Name</th>
          <th>Address</th>
          <th>Birthdate</th>
          <th>Age</th>
          <th>Contact</th>
          <th>Sex</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = "SELECT * FROM `profile`";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['birthdate']}</td>
                        <td>{$row['age']}</td>
                        <td>{$row['contact']}</td>
                        <td>{$row['sex']}</td>
                        <td>
                          <a href='update.php?id={$row['id']}' class='btn btn-sm btn-info'>Update</a>
                          <a href='delete.php?id={$row['id']}' class='btn btn-sm btn-danger'>Delete</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='7' class='text-center'>No users found</td></tr>";
        }
        ?>
      </tbody>
    </table>

    <a href="logoutadmin.php" class="btn btn-danger mt-3">Logout</a>
  </div>
</body>
</html>
