<?php
$title="Welcome";
include 'header.php';
session_start();
if(isset($_SESSION['user_id'])){

echo '<h1>'.  session_id().'</h1><bt>';
echo '<h1>'. session_name().'</h1><bt>';
echo '<h1>'. session_status().'</h1><bt>';
echo '<h1>'.$_SESSION['user_id'].'</h1>';
?>
<a class="btn-link" href="profile.php" alt="Profile" title="profile">Profile</a>
<a class="btn-link" href="logout.php" alt="logout" title="logout">Logout</a>
<?php
       // get_nav_user();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'footer.php';
}else{
         header('location:index.php');
}?>

