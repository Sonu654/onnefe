<?php

require("database.php");
if (isset($_GET['category_id'])) {
    $qry = mysql_query("select * from news where category_id='".$_GET['category_id']."' order by news_id DESC") or die(mysql_error());
    header('Content-Type:text/xml');

    echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
    echo '<response>';
    while ($result = mysql_fetch_array($qry)) {

        echo '<news_heading><h4>' . $result['news_heading'] . '</h4></news_heading>';
        echo '<news_content><p>' . $result['news_content'] . '</p></news_content>';
    }
    echo '</response>';
}else{
    header('Content-Type:text/xml');
$qry = "select * from news ne order by ne.news_id DESC";
$news_ = mysql_query($qry);
    echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
    echo '<response>';
    
                while ($news = mysql_fetch_array($news_)) {
                    echo '<div>
                                <h3>'.$news['news_id'].' '.$news['news_heading'].'</h3>
                            </div>
                            <div>
                                <button class="btn-submit" onClick="edit_news_('.$news['news_id'].');">Edit</button>
                                <button class="btn-submit" onClick="update_news('.$news['news_id'].')">Update</button>
                                <button class="btn-submit" onClick="blk_unblk_news('.$news['news_id'].');">Block</button>
                            </div>
                        </div>
                        <div>
                            <p>'.$news['news_content'].'</p>'
                            . '</div>';
                    }
                echo '</response>';
}

