<?php
$title = "User Profile";
session_start();
require 'header.php';
$qry = "Select * from user_info where user_id = '" . $_SESSION['user_id'] . "'";
$user_info = mysql_query($qry) or die(mysql_error());
$qry1 = "select * from user_address where user_id= '" . $_SESSION['user_id'] . "'";
$user_add = mysql_query($qry1) or die(mysql_error());
?>

<div class="containner">
    <div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-8">

            <div class="col-sm-8"></div>  
            <div class="col-sm-4">
                <button class="btn-submit" id='profile' style="width:100px; float:right;">Edit Profile</button>
            </div>
        </div>

    </div>
    <div class="row" id="">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-8" id='show_pro'>
            <table >
                <?php while ($result = mysql_fetch_array($user_info)) {
                    ?>

                    <tr>
                        <td>
                            <label for="user_id">User id </label>
                        </td>
                        <td>
                            :
                        </td> 
                        </td>
                        <td>
                            <?php echo $result['user_id']; ?> 
                        </td>
                    </tr>  
                    <tr>
                        <td>
                            <label for="user_name">User Name </label>
                        </td>
                        <td>
                            :
                        </td> 
                        </td>
                        <td>
                            <?php echo $result['user_first_name'] . " " . $result['user_mid_name'] . " " . $result['user_last_name']; ?>
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
                            <?php echo $result['user_gender']; ?>
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
                            <?php echo $result['user_contact']; ?>
                        </td>
                    </tr>
                <?php
                }
                while ($user_ad = mysql_fetch_array($user_add)) {
                    ?>
                    <tr>
                        <td>
                            <label for="Address">Address</label>
                        </td>
                        <td>
                            :
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
    <?php echo $user_ad['local_add']; ?>
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
    <?php echo $user_ad['city']; ?>
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
    <?php echo $user_ad['state']; ?>
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
    <?php echo $user_ad['country']; ?>
                        </td>
                    </tr>
                </table>
                <div>

                </div>
                <?php
            }
            ?>
        </div>

        <div class="col-sm-8"  id='edit_pro' style='display:none;'>
            <form name="edit_profile">
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
                                <input type="radio" name="gender" value="Male">Male
                                <input type="radio" name="gender" value="Female">Female
                                
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
                    $use_=  mysql_query($qry1);
                    while ($user_ = mysql_fetch_array($use_)) {
                        ?>
                        <tr>
                            <td>
                                <label for="Address">Address</label>
                            </td>
                            <td>
                                :
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
                                <input type="text" class="txtbox" name="country" value="<?php echo $user_['country'];?>">
                                       
                            </td>
                        </tr>
                   <?php
                } 
                ?>                
                </table>
            </form>  
        </div>
    </div>      
</div>

<?php require 'footer.php'; ?>
