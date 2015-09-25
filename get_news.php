<?php

require("database.php");
if (isset($_GET['category_id'])) {
    $qry = mysql_query("select * from news where category_id='".$_GET['category_id']."'") or die(mysql_error());
    header('Content-Type:text/xml');

    echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
    echo '<response>';
    while ($result = mysql_fetch_array($qry)) {

        echo '<news_heading><h4>' . $result['news_heading'] . '</h4></news_heading>';
        echo '<news_content><p>' . $result['news_content'] . '</p></news_content>';
    }
    echo '</response>';
}