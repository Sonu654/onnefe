<?php

$title = "Update News";
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
               <div id="news_block">
                <div></div>
                <div>

                    <div id="recent_news">

                    </div>
                </div>
            </div>
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
