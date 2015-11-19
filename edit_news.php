<?php
    require 'database.php';
   if(isset($_GET['news_id'])){
        echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
    echo '<response>';
               $qry="select * from news where news_id =".$_GET['news_id'];
               $qry_res=  mysql_query($qry);
               if($qry_res){
               while($news=  mysql_fetch_array($qry_res)){
                   ?>
                <form id="news_det" name="news_det">
                                <div class="row">
                        <label for="heading"><b>Heading :</b></label>
                        <input type="text" re name="heading" class="txtbox" id="heading" style="width: 100%;" value="<?php echo $news['news_id'];?>">
                    </div>
                    <div>
                        <label for="Content"><b>Content :</b></label>
                        <textarea  name="content" class="txtbox" placeholder="content" id="content" style="width:100%; height: 100px; overflow-y: scroll;">
                                   <?php echo $news['news_content'];?>
                                   </textarea>
                    </div> 
                    <div>
                        <label for="main_category"><b>Main  Category :</b></label>
                        <?php 
                            if($news['nat_int']==1){
                                $main="International";
                            }else{
                               $main="National";
                            }
                        ?>
                        <input type="text" name="main_cat" class=txtbox" value="<?php echo $main; ?>">                    </div>

                    <div>
                        <label for="acknowledgement"><b>Acknowledgement</b></label>
                        <input type="text" class="txtbox" name="ack" id="ack" value="<?php $news['ack'];?>">
                    </div>
                    <div>
                        <div>
                            <lable for="sub_category">Sub Category :</lable>
                        </div>
                        <?php $qry="select category_name from category where category_id=".$news['category_id'];
                                                $res=mysql_query($qry);
                                                $cat=  mysql_result($res,'category_name');?>
                        <div>
                           <input type="text" name="sub_cat" value="<?php echo $cat;?>">
                        </div>
                    </div>
                    <div>
                        <button class="btn-submit" onClick="update_exist_news()" onsubmit="update_exist_news()">Update News</button>
                    </div>
                   </form>
<?php
               }
               
               }else{
                   echo '<news> Error : '.  mysql_errno() .' '.mysql_error().'</news>';
               }
              
    echo '</response>';
   }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>