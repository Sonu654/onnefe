<?php
$server = "localhost";
$user = "root";
$database = "onnefe";
$key = "";
$con = mysql_connect($server, $user, $key) or die(mysql_error()); // connect db or put error
mysql_select_db($database, $con) or die(mysql_error()); //select database

  
function get_news_all() {
    $qry1 = "select * from news order by news_id DESC";
    if ($result = mysql_query($qry1)) {
        while ($res = mysql_fetch_array($result)) {
            ?>
            <div class="row" style="background:  #999; vertical-align: baseline;">
                <div class="col-sm-12" style='border: solid black 1px;' >
                    <h4><?php echo $res['news_heading']; ?></h4>
                </div>
            </div>
            <?php
            $qry2 = "select * from category where category_id = " . $res['category_id'] . "";

            $category = mysql_query($qry2);
            //  echo'num= '.$num=mysql_num_rows($category);
            $category_name = mysql_result($category, 0, 'category_name');
            ?>
            <div class='row' style='margin: 0px; text-align: center;'>

                <div class="col-sm-3" style='float:left;'> 
                    <h4><?php echo $category_name; ?></h4>
                </div>
                <div class="col-sm-3" style='margin-left:10%;'> 

                    <?php
                    if ($res['nat_int']) {
                        $NatInt = "International";
                    } else {
                        $NatInt = "National";
                    }
                    ?> 
                    <h4><?php echo $NatInt; ?></h4>
                </div>
                <div class="col-sm-3" style='float:right;'>
                    <h4> <?php echo $res['date'] . ',' . $res['time']; ?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-justify"><?php echo $res['news_content']; ?></p>
                </div>
            </div>
            <?php
        }
    } else {
        die("Query not completed");
    }
}

// get_news_all();

function get_user() {
    $qry = "select * from user_info";
    if ($result = mysql_query($qry)) {
        while ($res = mysql_fetch_array($result)) {
            echo "<div style=' text-transform: uppercase;'>user id = " . $res['user_id'] . "<br> user name = " . $res['user_first_name'] . " " . $res['user_last_name'] . "<br></div>";
        }
    } else {
        echo "query not found";
    }
}

function get_interest() {
    $qry = "select * from category";
    $result = mysql_query($qry) or die(mysql_error());
    while ($res = mysql_fetch_array($result)) {
        echo '<option value=' . $res['category_id'] . '>' . $res['category_name'] . '</option>';
    }
}

function get_nav_bar() {
    $i = 0;
    $qry = mysql_query("select * from category");
    while ($result = mysql_fetch_array($qry)){// and $i < 5) {
        ?>        
<div class="col-sm-2">
    <button class="btn-link" onClick="show_rel_news(<?php echo $result['category_id'] ?>)">
                <?php echo $result['category_name']; ?> </button>

        </div>
        <?php
        //$i++;
    }
}

if(isset($_GET['user_id'])){
   $qry=  mysql_query("select login_password  from login_info where login_id='".$_GET['user_id']."'");
   $pass=mysql_result($qry,0,'login_password');
   echo $pass;
}

//  get_user();
?>
