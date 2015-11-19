<?php
$title = "Update Profile";
include_once 'header.php';

if(!loggedin()){
    header("location:home.php");
}
$qry = "Select * from user_info where user_id = '" . $_SESSION['user_id'] . "'";
$user_info = mysql_query($qry) or die(mysql_error());
$qry1 = "select * from user_address where user_id= '" . $_SESSION['user_id'] . "'";
$user_add = mysql_query($qry1) or die(mysql_error());
?>


<div class="wrapper">
<div class="main_left">
                <img class="main_logo" src="assets/img/logo.png">
                <div class="hr"></div>
                <?php get_menu();?>
</div>
<div class="main_">
    <div class="hr"></div>
    <div class="central">  

                <div  id='edit_pro' style=''>
                    <form name="edit_profile" method="POST" action="edit_prof.php">
                        <table>
                            <?php
                            $re = mysql_query($qry);
                            while ($res = mysql_fetch_array($re)) {
                                ?>
                                <tr>
                                    <td>
                                        <label for="user_id">User id </label>
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <input type="text" class="txtbox" name="user_id" value="<?php echo $res['user_id']; ?>" readonly="readonly">
                                    </td>   
                                </tr>
                                <tr>
                                    <td>
                                        <label for="user_name">User Name </label>
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <input type="text" class="txtbox" name="user_fname" style="width: 25%" placeholder="First Name" value="<?php echo $res['user_first_name']; ?>">
                                        <input type="text" class="txtbox" name="user_mname" placeholder="Middle Name" style="width: 25%" value="<?php echo $res['user_mid_name']; ?>">
                                        <input type="text" class="txtbox" name="user_lname" placeholder="Last Name" style="width: 25%" value="<?php echo $res['user_last_name']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="gender">Gender</label>
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <input type="text" class="txtbox" name="gender" value="<?php echo $res['user_gender']; ?>" readonly="readonly">

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="contact">Contact</label>
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <input type="text" class="txtbox" name='contact' value="<?php echo $res['user_contact']; ?>">
                                    </td>
                                </tr>
    <?php
}
$use_ = mysql_query($qry1);
while ($user_ = mysql_fetch_array($use_)) {
    ?>
                                <tr>
                                    <td>
                                        <label for="Address">Address</label>
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="Street">Street</label>
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <input type="text" class="txtbox" name='street' value="<?php echo $user_['local_add']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="city">City</label>
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <input type="text" class="txtbox" name='city' value="<?php echo $user_['city']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="state">State</label>
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <input type="text" class="txtbox" name="state" value="<?php echo $user_['state']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="country">Country</label>
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <input type="text" class="txtbox" name="country" value="<?php echo $user_['country']; ?>">

                                    </td>
                                </tr>
    <?php
}
?>  
                            <tr>
                                <td colspan="3">
                                    <button class="btn-submit" type="submit" style="width:auto; float:right;">Save Changes</button>

                                </td>
                            </tr>
                        </table>
                    </form>  
                </div>
            </div>      
    <div class="right">
        <nav>
<?php get_nav_bar(); ?>
        </nav>
    </div>
</div>
</div>


<?php require 'footer.php'; ?>
