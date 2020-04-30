<?php
    session_start();
//    var_dump($_POST);
//    die();
    if($_POST['username']=="aymen" && $_POST['pwd'] == "1234" ) {
        $_SESSION['user'] = $_POST['username'];
        header('location:home.php');
    } else {
        header('location:login.php');
    }
?>