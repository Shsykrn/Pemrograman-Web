<?php
$connection = mysqli_connect("localhost", "root", "", "project1_shasy26");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connect Successfully to Project1 <br>";

$connection_2 = mysqli_select_db($connection, "project2");
if(!$connection_2) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connection Successfully to Project2";
?>