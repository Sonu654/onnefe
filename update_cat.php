<?php
$title = "Update Category";
session_start();
require 'header.php';
$qry = "Select * from category order by category_id";
$category = mysql_query($qry) or die(mysql_error());
?>

<div class="containner">
    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-10" id='show_pro'>
            <div class="row">
                <table>
                    <tr>
                        <th>category id</th>
                        <th></th>
                        <th>Category Name</th>
                    </tr>
                    <?php 
                while ($cat= mysql_fetch_array($category)){
                ?>
                    <tr>
                        <td>
                            <?php echo $cat['category_id'] ?>
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            <?php echo $cat['category_name'];?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>