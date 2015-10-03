<?php
require 'database.php';
    if(loggedin()){
        header('location:main.php');
        }else{
            header('location:home.php');
        }
?>