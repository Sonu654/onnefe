<?php
$title = "Add News";
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
        <div id="add_news_form">
            <div style="text-align: right; font-size:15px; margin-top: -1.8%;">

            </div>
            <div>
                <div>
                    <h2 align='center'>Add News</h2>
                    <form name="add_news" id="add_news">
                        <div>
                            <label for='heading'><b>Heading :</b></label>
                            <input type='text' name='heading' class='txtbox' placeholder='heading' id="heading" style="width: 100%;">
                        </div>
                        <div>
                            <label for='Content'><b>Content :</b></label>
                            <textarea  name='content' class='txtbox' placeholder='content' id="content" style='width:100%; height: 100px; overflow-y: scroll;'></textarea>
                        </div> 
                        <div>
                            <label for='main_category'><b>Main  Category :</b></label>
                            <input type='radio' checked='checked' name='main_cat' value='0'>National
                            <input type='radio' name='main_cat' value='1' >International
                        </div>

                        <div>
                            <label for='acknowledgement'><b>Acknowledgement</b></label>
                            <input type='text' class='txtbox' name='ack' id="ack">
                        </div>
                        <div>
                            <div>
                                <lable for='sub_category'>Sub Category :</lable>
                            </div>
                            <div>
                                <?php
                                $category = mysql_query("select * from category order by category_id ASC");
                                while ($cat = mysql_fetch_array($category)) {
                                    ?>
                                    <input type="radio" name="sub_cat" value="<?php echo $cat['category_id']; ?>"><?php echo $cat['category_name']; ?>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div>
                            <button class="btn-submit" onClick="add_new_news()" onsubmit="add_new_news()">Add News</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id='add_result' style="color:black;">
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

