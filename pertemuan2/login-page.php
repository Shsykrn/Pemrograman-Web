<?php
session_start();
if (isset($_SESSION['username'])) {
    header('Location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<head>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <form action="index.php" method="POST">
        <label for="username">Username</label>
        <input name="username" type="text" />
        <br />
        <label for="password">Password</label>
        <input name="password" type="password" />
        <br />
        <input type="submit" name="submit" value="Login">
    </form>
</body>

</html>