<?php
$title = "Registration";
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
            <div class="header" style="margin: 0px;">Recent News</div>
            <div>
                <marquee direction="up" onMouseover="this.stop()" onMouseout="this.start()" style="marquee-style: alternate; marquee-speed: slow; height:420px; marquee-loop: infinite; marquee-speed: normal" >
                    <?php get_news_all(); ?>
                </marquee>
            </div>
        </div>
        <div class="log_sign_frm">
            <div><button class='btn-link' style="width: 30%" ><a href='index.php'>SignIn</a> </button>
                <button class='btn-link' style="width: 30%">  <a href='registration.php'>SignUp</a></button>
            </div> 

            <form name="registration" action="register.php" method="post">
                <div>
                    <input type="text" name="f_name" placeholder="First Name" required class="txtbox"/>
                    <input type="text" name="m_name" placeholder="Middle Name" class="txtbox"/>
                    <input type="text" name="l_name" placeholder="Last Name" required class="txtbox"/>
                </div>
                <div>
                    <select name="gender" class="txtbox">
                        <option>I am</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <input type="text" name="contact" placeholder="Your Mobile No." required maxlength="10" class="txtbox"/>
                    <input type="email" name="email" placeholder="Your Email Id" required class="txtbox"/>
                </div>
                <div>
                    <input type="password" name="password" min="8" placeholder="Password" required  class="txtbox" id="password"/>
                    <input type="password" name="re_password" placeholder="Repeat Password" required min="8" class="txtbox" id="re-pass"/>
                    <a  class="txtbox" style="cursor:pointer;" onMouseover="show_interest()" onclick="show_interest()" onMouseout="hide_interest()">Select Interest
                        <div  style="height:auto; border: solid royalblue 1px; width:33%; right: 0px; float: right; margin: 0px;  border-radius: 5px;">
                            <ul id="interest" style="display: none; list-style: none; padding: 0px; margin: 0px; cursor: pointer">
                                <?php get_interest(); ?></ul></div>

                    </a>  
                </div> 
                <div>
                    <lable>Address : </lable>
                    <br/>
                    <input type="text" name="street" placeholder="Street" required class="txtbox"/>
                    <input type="text" name="city" placeholder="City" required class="txtbox"/>
                    <br>
                    <input type="text" name="state" placeholder="State" required class="txtbox"/>
                    <input type="text" name="country" placeholder="Country" required class="txtbox"/>
                </div>
                <div style="width:65%">
                    <input type="submit" value="Send" style="width:50%; margin:0 25%;" class="btn-submit" onClick="validate_form()"/>
                </div>
            </form>

        </div>
    </div>


    <?php require_once 'footer.php'; ?>

