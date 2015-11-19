<?php
$title = "Login";
require_once 'header.php';
?>
<div class="wrapper">
<div class="main_left">
                <img class="main_logo" src="assets/img/logo.png">
                <div class="hr"></div>
                <h4>About ONNEFE</h4>
                <div class="hr"></div>
                <p><e>ONNEFE</e> is an online news feed system.</p>
</div>
<div class="main_">
    <div class="hr"></div>
    <div class="re_news">
        <div class="header" style="text-align: center;"><b>Recent News</b></div>
        <div>
            <marquee direction="up" onMouseover="this.stop()" onMouseout="this.start()" style="marquee-style: alternate; marquee-speed: slow; height:420px; marquee-loop: infinite; marquee-speed: normal" >
                <?php get_news_all(); ?>
            </marquee>
        </div>
    </div>
    <div class="log_sign_frm">
        
        <form action="login.php" name="login" method='post'>
            <h2>Please sign in</h2>
            <div>
                <label for="inputEmail"><input type="email" id="inputEmail" name="login_id" placeholder="Email address" required autofocus class='txtbox' style="width:80%"></label>
            </div>
            <div>
                <label for="inputPassword"><input type="password" id="inputPassword" name="password" placeholder="Password" required class='txtbox' style="width:80%"></label><br>
            </div>
            <div style="margin:auto; width:50%;">
                <label for="remember"><input type="checkbox" value="1" name="rem" class="checkbox" >Remember me</label><br>
            </div>
            <div>  <button class='btn-submit' style="width: 30%">  <a href='registration.php'>SignUp</a></button>
                <button class="btn-submit" type="submit">Sign in</button>
            </div>
        </form>
        <a href="#" title="reserved for next version of application." >Forgot Password</a>
    </div>
</div>
</div>
<?php require_once 'footer.php'; ?>
