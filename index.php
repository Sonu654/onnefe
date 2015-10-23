<?php

require 'database.php';
if (loggedin()) {
    header('location:main.php');
} else {
    if (isset($_COOKIE['user_id'])) {
        session_start();
        echo $_SESSION['user_id'] = $_COOKIE['user_id'];
        echo $_SESSION['login_date'] = $_COOKIE['login_date'];
        echo $_SESSION['time'] = $_COOKIE['time'];
        echo $_SESSION['admin'] = $_COOKIE['user'];
        header('location:main.php');
    }
    header('location:home.php');
}
?>