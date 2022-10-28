<?php
$connection = mysqli_connect("localhost", "root", "", "project1_shasy26");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Successfully to Project 1 <br>";
$query_insert = mysqli_query($connection, "INSERT INTO guru(ID, Nama_Lengkap, Alamat, TL, NIP, Jurusan) 
VALUES('', 'Jung Jaehyun', 'Jln. Kencur No.127', '1997-02-14', '78095', 'RPL')");

if(!$query_insert) {
    echo("Error query" . mysqli_error($connection));
}
mysqli_close($connection);
?>