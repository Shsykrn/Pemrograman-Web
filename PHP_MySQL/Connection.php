<?php

$connection = mysqli_connect("localhost", "root", "", "sekolah_shasy26");
if (!$connection) {
    echo mysqli_connect_error();
}