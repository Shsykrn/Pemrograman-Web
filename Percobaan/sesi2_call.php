<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compitable" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sesi 2</title>
    </head>
    <body>
        <?php
        echo "Hallo, nama saya adalah " . $_SESSION['nama']. "<br>";
        echo "Nomor absen saya adalah " . $_SESSION['absen'];
        ?>
    </body>
</html>