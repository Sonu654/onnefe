<?php require'database.php';
session_start();
require 'header.php';
echo $qry6="update user_info set user_first_name='".$_POST["user_fname"]."',user_mid_name='".$_POST["user_mname"]."',user_last_name='".$_POST["user_lname"]."',user_gender='".$_POST["gender"]."',user_contact='".$_POST["contact"]."' where(user_id='".$_SESSION['user_id']."')";
$up= mysql_query($qry6);
if($up)
{
    echo $up;
}  else {
    echo 'not sucess';
}
echo $qry3="update user_address set country='".$_POST["country"]."',state='".$_POST["state"]."',city='".$_POST["city"]."',local_add='".$_POST["street"]."' where(user_id='".$_SESSION['user_id']."')";
$ad= mysql_query($qry3);
if($ad)
{
    echo $ad;
}  else {
    echo 'not sucess2';
}//echo $qry2=mysql_query($qry2);
 ?>
    
         
