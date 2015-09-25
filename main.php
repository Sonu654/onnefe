<?php
$title = "Main Page";
include_once 'header.php';
?>
<div class="containner">
    <div class="row">
        <div class="col-sm-2" style="text-align: right; font-size:15px ">
            <ul style="display: inline; list-style: none;">
                <li><a href="profile.php" alt="update your profile">Update Profile</a></li>
                <li><a href="#" alt="update your News categories">Update Category</a></li>
                <li><a href="update_pass.php" alt="update your News categories">Change Password</a></li>
                <li><a href="logout.php" alt="log out from profile">LogOut</a></li>
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

