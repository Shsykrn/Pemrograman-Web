<?php
$connection = mysqli_connect("localhost", "root", "","project1_shasy26");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connection Successfully";

mysqli_close($connection);
?>