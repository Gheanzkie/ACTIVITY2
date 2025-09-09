<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>UPDATE</title>
</head>
<body>
    <div class="bg-dark d-flex justify-content-center align-items-center w-100 vh-100">
        <div class="bg-white w-25 h-30 rounded p-4" >
            <h2>Update Student</h2>

            <form method="POST">
                <?php
                include_once ('dbconnection.php');
                $id = $_GET['id'];
                $query = "SELECT * FROM `management` WHERE id= '$id'"; 
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                ?>
                <div>
                <label>Full Name</label>
                     <input type="text" class="form-control" value="<?php echo $row['fullname']; ?>" name="fullname" ></input>
                </div>
                <div class="mb-2">
                     <label>Course</label>
                     <input type="text" class="form-control" value="<?php echo $row['course']; ?>" name="course" ></input>
                </div>
                <div class="mb-2">
                     <label>Year Level</label>
                     <input type="text" class="form-control" value="<?php echo $row['year_level']; ?>" name="year_level" ></input>
                </div>
                <div class="mb-2">
                     <label>Section</label>
                     <input type="text" class="form-control" value="<?php echo $row['section']; ?>" name="section" ></input>
                </div>
                
                <button class="btn btn-success" type="submit" name="submit">Update</button>
                <a href="Read.php" class="btn btn-danger" type="submit" >Cancel</button>
            </div>
            </form>

<?php
            if (isset($_POST['submit'])) {
                $fullname   = $_POST['fullname'];
                $course     = $_POST['course'];
                $yearlevel = $_POST['year_level'];
                $section    = $_POST['section'];

                $update = "UPDATE `management` SET fullname='$fullname', course='$course', year_level='$yearlevel', section='$section'
                           WHERE id='$id'";

                if (mysqli_query($conn, $update)) {
                    echo "<script>alert('Record Updated Successfully'); window.location='Read.php';</script>";
                } else {
                    echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
                }
            }
            ?>
        </div>
    </div>
    
</body>
</html>