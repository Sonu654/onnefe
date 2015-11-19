<?php

$title = "Update Category";
include_once 'header.php';

if(!loggedin()){
    header("location:home.php");
}

$qry = "Select * from category order by category_id";
$category = mysql_query($qry) or die(mysql_error());
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
                <th>category id</th>
                <th></th>
                <th>Category Name</th>
            </tr>
            <?php
            while ($cat = mysql_fetch_array($category)) {
                ?>
                <tr>
                    <td>
                        <?php echo $cat['category_id'] ?>
                    </td>
                    <td>

                    </td>
                    <td>
                        <?php echo $cat['category_name']; ?>
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
<?php include 'footer.php'; ?>