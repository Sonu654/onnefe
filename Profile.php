<?php
$title = "User Profile";
session_start();
if (isset($_SESSION['user_id'])) {
    require 'header.php';
    $qry="Select * from user_info where user_id = '".$_SESSION['user_id']."'";
    $user_info=  mysql_query($qry) or die(mysql_error());
    $qry1="select * from user address wher login_id= '".$_SESSION['user_id']."'";
    $user_add=  mysql_query($qry1);
    ?>
    <div class="containner"  style="border: red 1px solid; height:600px;">
        <form>
            <?php while($result=  mysql_fetch_array($user_info)){
                ?>
            <div><label for="user_id">User id :</label>
            <input type="text" class="txtbox" name="user_id" value="<?php echo $result['user_id'];?>" readonly="readonly">
            </div>
            <div><label for="user_name">User Name :</label>
                <input type="text" class="txtbox" name="user_fname" style="width: 25%" placeholder="First Name" value="<?php echo $result['user_first_name'];?>">
            <input type="text" class="txtbox" name="user_mname" placeholder="Middle Name" style="width: 25%" value="<?php echo $result['user_mid_name'];?>">
            <input type="text" class="txtbox" name="user_lname" placeholder="Last Name" style="width: 25%" value="<?php echo $result['user_last_name'];?>">
            </div>
                <?php
            }
                
            ?>
        </form>
        
    </div>
    
    <?php
    require 'footer.php';
} else {
    header('location:index.php');
}
?>
