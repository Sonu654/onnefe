<?php
$title = "Registration";
require_once 'header.php';
?>
<div class="containner">
    <div class="row">
        <div class="col-sm-7">
            <marquee direction="up" behaviour="alternate" style="marquee-style: alternate; height:600px;  marquee-loop: infinite; marquee-speed: normal" >
                <?php get_news_all(); ?>
            </marquee>
        </div>
        <div class="col-sm-5">
            <div class='row'>
                <div class='col-sm-3 btn-link'>
                    <a href='index.php'>SignIn</a>
                </div>
                <div class='col-sm-3 btn-link'>
                    <a href='registration.php'>SignUp</a>
                </div>
            </div>
            <div class="row">
                <form name="registration" action="register.php" method="post">
                    <div class="row">
                        <input type="text" name="f_name" placeholder="First Name" required class="txtbox"/>
                        <input type="text" name="m_name" placeholder="Middle Name" class="txtbox"/>
                        <input type="text" name="l_name" placeholder="Last Name" required class="txtbox"/>
                    </div>
                    <div class="row">
                        <select name="gender" class="txtbox">
                            <option>I am</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <input type="text" name="contact" placeholder="Your Mobile No." required maxlength="10" class="txtbox"/>
                        <input type="email" name="email" placeholder="Your Email Id" required class="txtbox"/>
                    </div>
                    <div class="row">
                        <input type="password" name="password" min="8" placeholder="Password" required  class="txtbox" id="password"/>
                        <input type="password" name="re_password" placeholder="Repeat Password" required min="8" class="txtbox" id="re-pass"/>
                        <a  class="txtbox" style="cursor:pointer;" onMouseover="show_interest()" onclick="show_interest()" onMouseout="hide_interest()">Select Interest
                            <div  style="height:auto; border: solid royalblue 1px; width:33%; right: 0px; float: right; margin: 0px;  border-radius: 5px;">
                                <ul id="interest" style="display: none; list-style: none; padding: 0px; margin: 0px; cursor: pointer">
                                    <?php get_interest(); ?></ul></div>
                    
                    </a>  
                    </div> 
                    <div class="row">
                        <lable>Address : </lable>
                        <br/>
                        <input type="text" name="street" placeholder="Street" required class="txtbox"/>
                        <input type="text" name="city" placeholder="City" required class="txtbox"/>
                        <br>
                        <input type="text" name="state" placeholder="State" required class="txtbox"/>
                        <input type="text" name="country" placeholder="Country" required class="txtbox"/>
                    </div>
                    <div class="row" style="width:65%">
                        <input type="submit" value="Send" style="width:50%; margin:0 25%;" class="btn-submit" onClick="validate_form()"/>
                    </div>
            </div>
            <div class="row">
                <a href="forgot.php">Forgot Password</a>
            </div>
        </div>
    </div>

</div>
<?php require_once 'footer.php'; ?>

