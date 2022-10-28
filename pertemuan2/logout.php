<?php
session_start();
if (isset($_SESSION['username'])) {
    session_destory();
    echo '<script>
    alert("Anda Berhasil logout");
    window.location="login-page.php";
    </script>';
} else {
    header("location:login-page.php");
    exit();
}