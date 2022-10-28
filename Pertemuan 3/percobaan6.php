<?php
$connection = mysqli_connect("localhost", "root", "", "project1_shasy26");
if (!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Successfully to Project 1 <br>";
$query = mysqli_query($connection, "SELECT ID, Nama_Lengkap, Jurusan FROM guru");

if (!$query) {
    echo ("Error query" . mysqli_error($connection));
}
echo "<br> Hasil numerik <br>";
while ($data = mysqli_fetch_array($query, MYSQLI_NUM)) {
    print "ID : " . $data[0] . "<br>";
    print "Nama_Lengkap : " . $data[1] . "<br>";
    print "Jurusan : " . $data[2] . "<br>";
}

mysqli_close($connection);