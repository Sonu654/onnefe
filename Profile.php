<?php
$title = "User Profile";
    session_start();
    require 'header.php';
    $qry="Select * from user_info where user_id = '".$_SESSION['user_id']."'";
    $user_info=  mysql_query($qry) or die(mysql_error());
    $qry1="select * from user address wher login_id= '".$_SESSION['user_id']."'";
    $user_add=  mysql_query($qry1);
    ?>
    
    <div class="containner">
        <div class="row">
            <div class="col-sm-4">
                
            </div>
            <div class="col-sm-8">
                
                <div class="col-sm-8"></div>  
                <div class="col-sm-4">
                    <button class="btn-submit" id='profile' style="width:100px; float:right;">Edit Profile</button>
                </div>
            </div>
            
        </div>
        <div class="row" id="">
            <div class="col-sm-4">
                
            </div>
            <div class="col-sm-8" id='show_pro'>
                    <?php while($result=  mysql_fetch_array($user_info)){
                ?>
                <div><label for="user_id">User id : <?php echo $result['user_id'];?> </label>
            </div>
            <div>
            <label for="user_name">User Name : <?php echo $result['user_first_name']." ".$result['user_mid_name']." ".$result['user_last_name'];?></lable>
            </div>
                <?php
            }
                
            ?>
            </div>
            
            <div class="col-sm-8"  id='edit_pro' style='display:none;'>
              <form>
                  
            <?php 
            $re=mysql_query($qry);
            while($res=  mysql_fetch_array($re)){;
                ?>
            <div><label for="user_id">User id :</label>
            <input type="text" class="txtbox" name="user_id" value="<?php echo $res['user_id'];?>" readonly="readonly">
            </div>
            <div><label for="user_name">User Name :</label>
                <input type="text" class="txtbox" name="user_fname" style="width: 25%" placeholder="First Name" value="<?php echo $res['user_first_name'];?>">
            <input type="text" class="txtbox" name="user_mname" placeholder="Middle Name" style="width: 25%" value="<?php echo $res['user_mid_name'];?>">
            <input type="text" class="txtbox" name="user_lname" placeholder="Last Name" style="width: 25%" value="<?php echo $res['user_last_name'];?>">
            </div>
                <?php
            }
                
            ?>
        </form>  
            </div>
        </div>      
    </div>
    
    <?php
    require 'footer.php';
/*} else {
 
}
?>
*/