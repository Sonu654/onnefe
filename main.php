<?php
session_start();
$title = "Main Page";
include_once 'header.php';
?>
<div class="containner" style="background:#CCCCFF; min-height:550px;">
    <div class="row" >
        <div class="col-sm-2" style="text-align: right; font-size:15px; margin-top: -1.8%;">
            <ul style="display: inline; list-style: none;">
                <li class="btn-link"><a href="profile.php" alt="update your profile">Update Profile</a></li>
                <li class="btn-link"><a href="#" alt="update your News interests">Update Interests</a></li>
                <li class="btn-link"><a href="update_pass.php" alt="update your Password">Change Password</a></li>
                <?php if ($_SESSION['admin']) { ?>
                    <li class="btn-link"><a href="update_news.php" alt="update your Password">Update News</a></li>
                    <li class="btn-link"><a href="update_user.php" alt="update your Password">Update User</a></li>
                    <li class="btn-link"><a href="update_cat.php" alt="update your Password">update Category</a></li>
                    <li class="btn-link"><a href="update_pass.php" alt="update your Password">Change Password</a></li>
                    <li class="btn-link"><a href="view_login_log.php" alt="update your Password">View Login Log</a></li>
                    
                <?php } ?>
                <li class="btn-link"><a href="logout.php" alt="log out from profile">LogOut</a></li>
            </ul>    
        </div>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-12" >
                    <nav>
                        <?php get_nav_bar(); ?>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div id="news"> </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';?>

