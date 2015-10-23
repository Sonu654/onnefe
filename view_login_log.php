<?php
$title="Login Logs";
include 'header.php';
?>
    <div class="containner" style="background:#CCCCFF; min-height:550px;">
    <div class="row" >
        <div class="col-sm-2" style="text-align: right; font-size:15px; margin-top: -1.8%;">

        </div>
        <div class="col-sm-10">
            <div class='row' style=" height:500px;">
             <?php  $result=mysql_query("select * from login_log"); ?>
            </div>
        </div>
    </div>
    </div>
<?php
include 'footer.php';
?>