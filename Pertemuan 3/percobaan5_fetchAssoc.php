<?php
$connection = mysqli_connect("localhost", "root", "", "project1_shasy26");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Successfully to Project 1 <br>";

$query = mysqli_query($connection, "SELECT ID, Nama_Lengkap, Jurusan FROM guru");

if (!$query) {
    echo ("Error query " . mysqli_error($connection));
}
$data = mysqli_fetch_assoc($query);
print_r($data);

mysqli_close($connection);