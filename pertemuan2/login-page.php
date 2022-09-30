<?php
session_start();
if(isset($_SESSION['username'])) {
    hearder('Location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Login Page</title>
</head>
<body>
    <form action="index_no_db.php" method="POST">
        <label for="username">Username</label>
        <input name="username" type="text" />
        <br />
        <label for="password">Password</label>
        <br />
        <input type="submit" name="submit" value="Login">
</form>
</body>
</html>