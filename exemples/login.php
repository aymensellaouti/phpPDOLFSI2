<?php
session_start();
if ($_SESSION['user']) {
    header('location:home.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="processLogin.php" method="post">
    <input type="text" name="username">
    <input name="pwd" type="password">
    <input type="submit" value="login">
</form>
</body>
</html>
