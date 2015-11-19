<?php
$title = "User Profile";
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
        <div id='show_pro'>
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
                                                <?php
                    }
                    ?>
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
