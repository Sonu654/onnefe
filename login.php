<?php

require 'database.php';
if (isset($_POST['login_id']) or isset($_POST['password'])) {
    if (!empty($_POST['login_id']) or ! empty($_POST['password'])) {

        $qry = "select password from login_info where login_id='" . $_POST['login_id'] . "'";
        $password = mysql_query("select login_password from login_info where login_id='" . $_POST['login_id'] . "'") or die(mysql_error());
        $password = mysql_result($password, 0, 'login_password');
        if ($_POST['password'] == $password) {

            date_default_timezone_set('Asia/Calcutta');
            $date = date("Y-m-d");
            $time = date('H:i:s');
            $qry4 = "insert into login_log(login_id,login_date,login_time) values('" . $_POST['login_id'] . "','" . $date . "','" . $time . "')";
            if (mysql_query($qry4)) {
                ob_start();
                session_start();

                $_SESSION['user_id'] = $_POST['login_id'];
                $_SESSION['login_date'] = $date;
                $_SESSION['time'] = $time;
                $user = strtolower(substr($_SESSION['user_id'], strpos($_SESSION['user_id'], '@') + 1));
                if ($user == 'admin.onnefe') {
                    $_SESSION['admin'] = TRUE;
                } else {
                    $_SESSION['admin'] = FALSE;
                }
                if($_POST['rem']=='1'){
                    echo 'setting cookies';
                setcookie('user_id',$_SESSION['user_id']);
                setcookie('login_date',$_SESSION['login_date']);
                setcookie('time',$_SESSION['time']);
                setcookie('user',$_SESSION['admin']);
                
                
                }
                
               header('location:main.php');
            } else {
                die('1' . mysql_error());
            }
        } else {
            echo 'Password is not correct';
        }
    }
}
?>
