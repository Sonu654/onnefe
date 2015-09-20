<?php

include_once 'database.php';
if (isset($_POST['f_name']) or isset($_POST['l_name']) or isset($_POST['gender']) or isset($_POST['contact']) or isset($_POST['email']) or isset($_POST['password'])) {
    if (!empty($_POST['f_name']) or !empty($_POST['l_name']) or !empty($_POST['gender']) or !empty($_POST['contact']) or !empty($_POST['email']) or !empty($_POST['password'])) {
        date_default_timezone_set('Asia/Calcutta');
        $date = date("Y-m-d");
        $time=date('H:i:s');
        $qry = "insert into login_info values('" . $_POST['email'] . "','" . $_POST['password'] . "','" . $date . "','" . $time . "')";
        $qry1 = "insert into user_info values('" . $_POST['email'] . "','" . $_POST['f_name'] . "','" . $_POST['m_name'] . "','" . $_POST['l_name'] . "','" . $_POST['gender'] . "','" . $_POST['contact'] . "')";
        $qry2 = "insert into user_address values('" . $_POST['email'] . "','" . $_POST['country'] . "','" . $_POST['state'] . "','" . $_POST['city'] . "','" . $_POST['street'] . "')";
        
        if (mysql_query($qry)) {
            if (mysql_query($qry1)) {
                if (mysql_query($qry2)) {
                    header('location:index.php');
                } else {
                    die('error3'.mysql_error());
                }
            } else {
                die('error1'.mysql_error());
            }
        } else {
            
            die('error2'.mysql_error());
        }
    }
}
?>
