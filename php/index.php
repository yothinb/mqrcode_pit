<?php
    session_start();

    if (!isset($_SESSION['user_username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['user_username']);
        header('location: login.php');
    }

?>
