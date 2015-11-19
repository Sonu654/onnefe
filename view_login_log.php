<?php
$title = "Login Logs";
include_once 'header.php';

if(!loggedin()){
    header("location:home.php");
}
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
        <table>
            <tr>
                <th>Login ID</th>
                <th>Login Date</th>
                <th>Login Time</th>
                <th>logout Date</th>
                <th>Logout Time</th>
            </tr>
            <?php
            $result = mysql_query("select * from login_log order by login_time DESC");
            while ($log = mysql_fetch_array($result)) {
                ?>
                <tr>
                    <th><?php echo $log['login_id']; ?></th>
                    <td><?php echo $log['login_time']; ?></td>
                    <td><?php echo $log['login_date']; ?></td>
                    <td><?php echo $log['logout_time']; ?></td>
                    <td><?php echo $log['logout_date']; ?></td>
                    <td>
                        <button class="btn-submit" style="width:100%;" onclick="view_loged_user();">View User
                        </button>
                    </td>
                </tr>

<?php } ?> 

        </table>


    </div>
<div class="right">
    <nav>
<?php get_nav_bar(); ?>
    </nav>
</div>

</div>
</div>



<?php
include 'footer.php';
?>