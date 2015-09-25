<?php include_once 'database.php';
    
    if(isset($_POST["opass"]) && isset($_POST['ropass']) && isset($_POST["npass"]) && isset($_POST['rnpass']))
    {
        $qry=  mysql_query("select login_password  from login_info l_i where l_i.login_id='".$_SESSION["user_id"]."'")
            or die(mysql_error());
        $qry=mysql_result($qry,0,'password');
        if(md5($_POST['opass'])==$qry)
        {
            if($_POST['npass']==$_POST['rnpass'])
            {
                $pass=md5($_POST['npass']);
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
<!DOCTYPE html>
<html>
    <head>
        <script>
            function match()
            {
                if((document.getElementById("p1").value) != (document.getElementById("p2").value))
                {
                    alert(' old password does't match please enter again');
                    document.getElementById('p1').value="";
                     document.getElementById('p2').value="";
                
                     document.getElementById('p1').focus();
                     return false;
                 }
           }
        </script>
    </head>
    <body>
        <form name="update" action="" method='POST>
        <input type="password" name="opass" placeholder="enter current password" id="p1" required/>
        <input type="password" name="ropass" placeholder="Re-enter current password" id="p2" required=/><br/>
        <input type="password" name="npass"placeholder="enter new password" id="p3" required/>
        <input type="password" name="rnpass" placeholder="Re-enter new password" id="p4" required/><br/>
        <input type="submit" name="sbmt" value="change password" onclick="match();"/>
        </form>
    </body>
</html>

