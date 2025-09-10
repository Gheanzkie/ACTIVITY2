<?php
$conn = mysqli_connect("localhost", "root", "", "admin" );
if(mysqli_connect_error()) {
    echo "Connection faild.". mysqli_connect_error();
}

?>