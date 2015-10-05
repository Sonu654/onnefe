<?php include_once 'database.php';
    
    if(isset($_POST["opass"]) && isset($_POST['c_pass']) && isset($_POST["npass"]) && isset($_POST['rnpass']))
    {
        $qry=  mysql_query("select login_password  from login_info l_i where l_i.login_id='".$_SESSION["user_id"]."'")
            or die(mysql_error());
        $qry=mysql_result($qry,0,'password');
        if($_POST['opass']==$qry)
        {
            if($_POST['npass']==$_POST['rnpass'])
            {
                $pass=($_POST['npass']);
                $qry=mysql_query("update login_info set login_password='$pass' where login_id='".$_SESSION['user_id']."'")or die(mysql_error());
                echo 'password changed sucessfully';
                
            }else
            {
                echo 'new password not matched';
            }
        }
        else{
            echo 'password not match';
        }
        
    }
?>
        <?php $title="Update User Password";
 session_start();
        include 'header.php';?>
        
<div id="pass_res" style="color:red;"></div>
        <form name="update_pass" action="" method="POST">
            <input type="password" name="opass" class="txtbox" placeholder="enter current password" id="c_u_pass" required onBlur="get_server_pass('<?php echo $_SESSION['user_id'];?>')"/>
            <input type="hidden" name="c_pass" id="c_s_pass">
        <input type="password" name="npass" class="txtbox" placeholder="enter new password" id="n_u_pass" required/>
        <input type="password" class="txtbox" name="rnpass" placeholder="Re-enter new password" id="r_n_u_pass" required onkeypress="match_pass()" onblur="match_pass()"/><br/>
        <input type="submit" class="txtbox2" name="sbmt" value="change password" onclick="match();"/>
        </form>

</html>

