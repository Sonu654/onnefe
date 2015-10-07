<?php
$title = "Update News";
include 'header.php';
$qry = "select * from news ne order by ne.news_id DESC";
$news_ = mysql_query($qry);
?>
<div class="containner" style="background:#CCCCFF; min-height:550px;">
    <div class="row" >
        <div class="col-sm-2" style="text-align: right; font-size:15px; margin-top: -1.8%;">

        </div>
        <div class="col-sm-10">
            <div class='row' style=" height:500px;">
                <h2 align='center'>Add News</h2>
                <form name="add_news">
                       <div class='row'>
                                <label for='heading'>Heading :</label>
                               <input type='text' name='news_heading' class='txtbox' placeholder='heading'>
                    </div>
                    <div class='row'>
                                <label for='Content'>Content :</label>
                               <textarea  name='news_content' class='txtbox' placeholder='content' style='width:100%; height: 200px;'></textarea>
                    </div> 
                    <div class='row'>
                        <label for='main_category'>Main  Category :</label>
                        <input type='radio' checked='checked' name='main_cat' value='1'>National
                        <input type='radio' name='main_cat' value='0' >International
                    </div>
                    
                    <div class='row'>
                        <label for='acknowledgement'>Acknowledgement</label>
                        <input type='text' class='txtbox' name='ack'>
                    </div>
                    <div class='row'>
                        <lable for='sub_category'>Sub Category :</lable>
                        <a  class="txtbox" style="cursor:pointer;" onMouseover="show_interest()" onclick="show_interest()" onMouseout="hide_interest()">Select Interest
                            <div  style="height:auto; border: solid royalblue 1px; width:33%; right: 0px; margin: 0px;  border-radius: 5px;">
                                <ul id="interest" style="display: none; list-style: none; padding: 0px; margin: 0px; cursor: pointer">
                                    <?php get_interest(); ?></ul>
                            </div>
                    </a>  
                    </div>
                    <div class="row">
                        <button class="btn-submit">Add News</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class='col-sm-2'></div>
        <div class='col-sm-10'>
            
            <div class='row'>
                <?php
                while ($news = mysql_fetch_array($news_)) {
                    ?>
                    <div class="row">
                        <div class="col-sm-8">
                            <h3> <?php echo $news['news_id']; ?> 
                                <?php echo $news['news_heading'] ?> </h3>
                        </div>
                        <div class="col-sm-4">
                            <button class="btn-submit" >Edit</button>
                            <button class="btn-submit">Update</button>
                            <button class="btn-submit">Delete</button>
                        </div>
                    </div>
                    <div class="row">
                        <p><?php echo $news['news_content']; ?></p>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
// include 'footer.php';
?>
