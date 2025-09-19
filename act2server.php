<?php

$conn = mysqli_connect("localhost", "root", "", "activity2");

if(mysqli_connect_error()) {
    echo "Connection Failed". mysqli_connect_error();
} 

?>
