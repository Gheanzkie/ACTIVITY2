<?php 
session_start();

if(!isset($_SESSION['admin'])) {
    header("location: admininfo.php");
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
    <title>UPDATE</title>
</head>
<body>
    <div class="bg-dark d-flex justify-content-center align-items-center w-100 vh-100">
        <div class="bg-white w-50 rounded p-4">
            <h2>Update Student <span> <img  style="width: 50px; height: 50px;" src="KCCLOGO.png" alt="icon"></span></h2>

            <form method="POST">
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $query = "SELECT * FROM `profile` WHERE id = '$id'"; 
                    $result = mysqli_query($conn, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                    } else {
                        echo "<script>alert('Record not found'); window.location='admininfo.php';</script>";
                        exit();
                    }
                }
                ?>
                <div class="mb-2">
                    <label>Name</label>
                    <input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="name" required>
                </div>
                <div class="mb-2">
                    <label>Address</label>
                    <input type="text" class="form-control" value="<?php echo $row['address']; ?>" name="address" required>
                </div>
                <div class="mb-2">
                    <label>Birthdate</label>
                    <input type="date" class="form-control" value="<?php echo $row['birthdate']; ?>" name="birthdate" required>
                </div>
                <div class="mb-2">
                    <label>Age</label>
                    <input type="text" class="form-control" value="<?php echo $row['age']; ?>" name="age" required>
                </div>
                <div class="mb-2">
                    <label>Contact</label>
                    <input type="text" class="form-control" value="<?php echo $row['contact']; ?>" name="contact" required>
                </div>
                <div class="mb-2">
                    <label>Sex</label>
                    <select class="form-control" name="sex" required>
                        <option value="Male" <?php if ($row['sex'] == 'Male') echo 'selected'; ?>>Male</option>
                        <option value="Female" <?php if ($row['sex'] == 'Female') echo 'selected'; ?>>Female</option>
                        <option value="Gay" <?php if ($row['sex'] == 'Gay') echo 'selected'; ?>>Gay</option>
                        <option value="Tomboy" <?php if ($row['sex'] == 'Tomboy') echo 'selected'; ?>>Tomboy</option>
                    </select>
                </div>
                
                <button class="btn btn-success" type="submit" name="submit">Update</button>
                <a href="admininfo.php" class="btn btn-danger">Cancel</a>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $name      = $_POST['name'];
                $address   = $_POST['address'];
                $birthdate = $_POST['birthdate'];
                $age       = $_POST['age'];
                $contact   = $_POST['contact'];
                $sex       = $_POST['sex'];

                $update = "UPDATE `profile` 
                           SET name='$name', address='$address', birthdate='$birthdate', age='$age', contact='$contact', sex='$sex'
                           WHERE id='$id'";

                if (mysqli_query($conn, $update)) {
                    echo "<script>alert('Record Updated Successfully'); window.location='admininfo.php';</script>";
                } else {
                    echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
