<?php  require'database.php';
session_start();
date_default_timezone_set('Asia/Calcutta');
            $date = date("Y-m-d");
            $time = date('H:i:s');
         echo    $qry4="update login_log set logout_date='".$date."',logout_time='".$time."' where(login_id='".$_SESSION['user_id']."' AND login_date='".$_SESSION['login_date']."' AND login_time='".$_SESSION['time']."')";
       //$qry4 = "insert into login_log(logout_date,logout_time) values('" .$date ."','" .$time."') where(login_id='".$_SESSION['user_id']."' AND login_date='".$_SESSION['login_date']."' AND login_time='".$_SESSION['time']."')";
      echo "</br>";
      mysql_query($qry4) or die(mysql_error());
       session_unset();
        
       if( session_destroy()){
          
        header('location:index.php');
       }else{
            header('location:main.php');
       }
 /*           
       
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

