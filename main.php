<?php
$title = "Main Page";
include_once 'header.php';
if(!loggedin()){
    header("location:home.php");
}
?>
<div class="wrapper">
    <div class="main_left">
        <img class="main_logo" src="assets/img/logo.png">
        <div class="hr"></div>
        <div class="user">
            <div class="user_name">Welcome : <?php echo $_SESSION['user_id']; ?></div>

        </div>
        <div>
            <?php get_menu(); ?>
        </div>
    </div>
    <div class="main_">
        <div class="hr"></div>
        <div class="central">  

            <div id="news"> 
                <h1>Please Click on a label!!!</h1>
            </div>

        </div>
        <div class="right">
            <nav>
                <?php get_nav_bar(); ?>
            </nav>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>

