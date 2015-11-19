<?php
$server = "localhost";
$user = "root";
$database = "onnefe";
$key = "";
$con = mysql_connect($server, $user, $key) or die(mysql_error()); // connect db or put error
mysql_select_db($database, $con) or die(mysql_error()); //select database

function loggedin() {
    session_start();
    if (isset($_SESSION['user_id'])or ! empty($_SESSION['user_id'])) {
        return(TRUE);
    } else {
        return FALSE;
    }
}

function get_news_all() {
    $qry1 = "select * from news order by news_id DESC";
    if ($result = mysql_query($qry1)) {
        while ($res = mysql_fetch_array($result)) {
            ?>
            <div style="background:  #999; vertical-align: baseline;">
                <div style='border: solid black 1px;' >
                    <h4><?php echo $res['news_heading']; ?></h4>
                </div>
            </div>
            <?php
            $qry2 = "select * from category where category_id = " . $res['category_id'] . "";

            $category = mysql_query($qry2);
            //  echo'num= '.$num=mysql_num_rows($category);
            $category_name = mysql_result($category, 0, 'category_name');
            ?>
            <div style='margin: 0px; text-align: center;'>

                <div style='float:left;'> 
                    <h4><?php echo $category_name; ?></h4>
                </div>
                <div  style='margin-left:10%;'> 

                    <?php
                    if ($res['nat_int']) {
                        $NatInt = "International";
                    } else {
                        $NatInt = "National";
                    }
                    ?> 
                    <h4><?php echo $NatInt; ?></h4>
                </div>
                <div  style='float:right;'>
                    <h4> <?php echo $res['date'] . ',' . $res['time']; ?></h4>
                </div>
            </div>
            <div>
                <div>
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
    $qry = "select * from category order by category_id ASC";
    $result = mysql_query($qry) or die(mysql_error());
    while ($res = mysql_fetch_array($result)) {
        ?>
        <li><input type="checkbox" value="<?php echo $res['category_id']; ?>" name="r1">
            <?php echo $res['category_name']; ?>
        </li>
        <?php
    }
}

function get_nav_bar() {
    $user_cat = "select category.category_id, category.category_name from category where category.category_id=any(SELECT user_intrest.category_id from user_intrest where user_intrest.user_id='" . $_SESSION['user_id'] . "') ORDER by category.category_name ASC";
    $qry = mysql_query($user_cat);
    while ($result = mysql_fetch_array($qry)) {
        ?>        
        <div>
            <button class="btn-link" onClick="show_rel_news(<?php echo $result['category_id'] ?>)">
                <?php echo $result['category_name']; ?> </button>

        </div>
        <?php
        //$i++;
    }
}

if (isset($_GET['user_id'])) {
    $qry = mysql_query("select login_password  from login_info where login_id='" . $_GET['user_id'] . "'");
    $pass = mysql_result($qry, 0, 'login_password');
    echo $pass;
}

//  get_user();

function get_menu() {
    ?>
    <div style="text-align: right; font-size:15px; margin-top: -1.8%;">
        <div class="element_menu" style="width:48%; position: relative;display: inline-block">
            <ul style="display: inline; list-style: none;">
                <li class="menu_element">Home</li>
                <li class="menu_element">Profile</li>
                <li class="menu_element">Interest</li>
                <?php if ($_SESSION['admin']) { ?>
                    <div style="height:20px; font-size: 15px;"><b>Admin's</b></div>
                    <li class="menu_element">News</li>
                    <li class="menu_element">User</li>
                    <li class="menu_element">Category</li>
                    <li class="menu_element">Logs</li>
                <?php } ?>
                <li class="menu_element">Password</li>
                <li class="menu_element"><a href="logout.php">Log Out</a></li>

            </ul>
        </div>
        <div class="icon_list">
            <ul style="display: inline; list-style: none;">
                <li>
                    <a href="main.php" title="Home">
                        <image class="icon" src="assets/img/home.png" class="icon"/>
                    </a>
                </li>
                <li>
                    <a  href="profile.php">
                        <image class="icon" src="assets/img/edit_.png" title="edit" class="icon"/>
                    </a>
                    <a class='deactive'>
                        <image class="icon" src="assets/img/delete.png" title="Delete" class="icon"/>
                    </a>
                    <a href="frm_update_profile.php">
                        <image class="icon" src="assets/img/refresh.png" title="update" class="icon"/>
                    </a>
                </li>
                <li>
                    
                        <a class="deactive">
                        <image class="icon" src="assets/img/edit_.png" title="edit" class="icon"/>
                        </a>
                        <a class="deactive">
                        <image class="icon" src="assets/img/delete.png" title="Delete" class="icon"/>
                        </a>
                        <a href="update_interest.php">
                            <image class="icon" src="assets/img/refresh.png" title="update" class="icon"/>
                        </a>
                </li>

                <?php if ($_SESSION['admin']) { ?>
                    <div style="height:20px; font-size: 15px; text-align: left; margin-top: 1px;"><b>Panel</b></div>

                    <li>
                        <a href="frm_editNews.php">
                            <image class="icon" src="assets/img/edit_.png" title="edit" class="icon"/>
                        </a>
                        <a href='delete_news'> 
                            <image class="icon" src="assets/img/delete.png" title="Delete" class="icon"/>
                        </a>
                        <a href="update_news.php">
                            <image class="icon" src="assets/img/refresh.png" title="update" class="icon"/>
                        </a>
                    </li>
                    <li>
                        <a class="deactive">
                            <image class="icon" src="assets/img/edit_.png" title="edit" class="icon"/>
                            <image class="icon" src="assets/img/delete.png" title="Delete" class="icon"/>
                        </a>
                        <a href="update_user.php">
                            <image class="icon" src="assets/img/refresh.png" title="update" class="icon"/>
                        </a>
                    </li>
                    <li>
                        <a href="add_cat.php">
                            <image class="icon" src="assets/img/edit_.png" title="edit" class="icon"/>
                        </a>
                        <a href='delete_cat'>
                            <image class="icon" src="assets/img/delete.png" title="Delete" class="icon"/>
                        </a>
                        <a href="update_cat.php" >
                            <image class="icon" src="assets/img/refresh.png" title="update" class="icon"/>
                        </a>
                    </li>
                    <li>
                        <a class="deactive">
                            <image class="icon" src="assets/img/edit_.png" title="edit" class="icon"/>
                            <image class="icon" src="assets/img/delete.png" title="Delete" class="icon"/>
                        </a>
                        <a href="view_login_log.php">
                            <image class="icon" src="assets/img/refresh.png" title="update" class="icon"/>
                        </a>
                    </li>


                <?php } ?>
                <li>
                    <a href="update_pass.php" alt="">
                        <image class="icon" src="assets/img/edit_.png" title="edit" class="icon"/>
                    </a>
                    <a class="deactive">
                        <image class="icon" src="assets/img/delete.png" title="Delete" class="icon"/>
                        <image class="icon" src="assets/img/refresh.png" title="update" class="icon"/>
                    </a>
                </li>
            </ul>    
        </div>

    </div> <?php
}
?>
