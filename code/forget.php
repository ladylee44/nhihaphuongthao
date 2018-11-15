<?php 
/* Recover Password Page */
require 'database.php';
ob_start();
session_start();
$_SESSION['message'] = NULL;

?>
<!DOCTYPE html>
<html>
<head>
<title>Forgotten Password</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="stylesheet/facebook.css" /> 
<link rel="icon" href="icon.ico">
<style>
.bottom_button{
    text-align: right;
    position: relative;
    padding: 5px 20px;
    width: 602px;
    top: 8px;
    right: 21px;
    height: 40px;
    line-height: 30px;
    border: 1px solid #cccccc;
    background: #f2f2f2;
}
.main_area{
    width: 622px;
    padding: 10px;
    position: relative;
    right: 21px;
    background: white;
    border: 1px solid #cccccc;
    height: 150px;
    line-height: 40px;
    top: 10px;
}
.entertxt{
    line-height: 15px;
    color: #cccccc;
    font-family: sans-serif;
    font-size: 14px;
}
.heading_2{
    margin-top: auto;
    border-bottom: 1px solid #cccccc;
    padding: 5px;
    
    font-family: sans-serif;
}
.text{
    color: #162643;
}
.type_email{
    border: 1px solid #bdc7d8;
    padding: 4px;
    font-size: 12px;
    font-family: sans-serif;
    color: #90949c;
    width: 263px;
    
}
.submit_button{
    background: rgb(66, 103, 178);
    border: 1px solid rgb(41, 72, 125);
    color: white;
    padding: 5px;
    border-radius: 2px;
    margin-right: 5px;
}
.cancel_button{
    padding: 5px;
    color: #4b4f56;
    background: #f6f7f9;
    border: 1px solid #ced0d4;
    border-radius: 2px;
}
.submit_button:hover{
    background: rgb(41, 72, 125);
    cursor: pointer;
}
.cancel_button:hover{
    text-decoration: none;
    background: #ced0d4;
}
</style>
</head>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['signin'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['submit'])) { //user registering
        
        require 'forget1.php';
        
    }
}
?>
<body>
<!-- Header Start -->
<div class="heading" >
<span class="heading_txt" >facebook</span>
<span class="login"  style="position: relative; left: 50px; font-weight: 800; font-size: 16px; font-family: sans-serif;">

	</span>
<table  align="right" class="login">
<tr>
<td class="td_top">Email or Phone</td>
<td class="td_top">Password</td>
</tr>
<tr>
<form action="index.php" method="post">
<td><input class="login_box" type="text" name="email" ></td>
<td><input class="login_box" type="password" name="password" ></td>
<td><input class="login_button" type="submit" name="signin" value="Log In"/></td>
</form>
</tr>
<tr >
<td></td>
<td><a href="forget.php"><span class="forget">Forgotten account?</span></a></td>
</tr>
</table>
</div>
<!-- Header End!!! -->

<!-- Middle Section Start -->
<div id="middle" style="padding: 65px 150px; height: 297px; background: #e9ebee;">

<div id="input_area" style="border: none;  width: 80%; padding: 20px;">
<div>
    <div>
        <div>
            <div>
                <form  action="" method="post" >
                    
                            <div class="main_area">
                                <h3 class="heading_2" style=" "><span class="text">Find Your Account</span></h3>
                                
                                <div>
                                    <div>
                                        <table style="position: relative; left: 40px; margin-bottom: 20px;">
                                            <tr>
                                                <td></td>
                                                <td><div class="entertxt">Please enter your email address or phone number to search for your <br>account.</div>
                                                </td>
                                                </tr>
                                                <tr>
                                                <td></td>
                                                <td><input class="type_email" type="text" name="email" placeholder="Email address or phone number"/>
                                                </td>
                                                </tr>
                                                <tr>
                                                <td></td>
                                                <td></td>
                                                </tr>
                                                </table>
                                                </div></div></div>
                                                <div>
                                                    <div class="bottom_button"><input value="Search" type="submit" name="submit" class="submit_button" /><a href="index.php" class="cancel_button">
                                                        Cancel</a>
                                                        </div>
                                                        </div></div></div></form></div></div>

</div>
</div>
</div>

<!-- Footer -->
<div id="footer" style=" height: 120px;">
<div class="footer_links">
<table  style="width: 1104px;" >
<tr id="links">
<td><a href="https://www.facebook.com/r.php">Sign Up</a></td>
<td><a href="https://www.facebook.com/login/">Log In</a></td>
<td><a href="https://www.messenger.com/">Messenger</a></td>
<td><a href="https://www.facebook.com/lite/">Facebook Lite</a></td>
<td><a href="https://www.facebook.com/mobile/?ref=pf">Mobile</a></td>
<td><a href="https://www.facebook.com/login.php?next=https%3A%2F%2Fwww.facebook.com%2Ffriends%2Frequests%2F%3Ffcref%3Dffi">Find Friends</a></td>
<td><a href="https://www.facebook.com/directory/people/">People</a></td>
<td><a href="https://www.facebook.com/directory/pages/">Pages</a></td>
<td><a href="https://www.facebook.com/places/">Places</a></td>
<td><a href="https://www.facebook.com/games/">Games</a></td>
<td><a href="https://www.facebook.com/directory/places/">Location</a></td>
</tr>

<tr id="links">
<td><a href="https://www.facebook.com/directory/celebrities/">Celebrities</a></td>
<td><a href="https://www.facebook.com/marketplace/108385919188963/?ref=fb_home">Marketplace</a></td>
<td><a href="https://www.facebook.com/directory/groups/">Groups</a></td>
<td><a href="https://www.facebook.com/recipes/">Recipes</a></td>
<td><a href="https://www.facebook.com/sport/">Sports</a></td>
<td><a href="http://momentsapp.com/">Moments</a></td>
<td><a href="https://www.instagram.com/">Instagram</a></td>
<td><a href="https://www.facebook.com/workplace">About</a></td>
<td><a href="https://www.facebook.com/work/legal/FB_Work_Privacy/?show_chrome=false">Premium privacy policy</a></td>
<td><a href="https://www.facebook.com/work/legal/Workplace_Standard_Privacy/?show_chrome=false">Standard privacy policy</a></td>
<td><a href="https://www.facebook.com/policies/cookies/">Cookies</a></td>
</tr>

<tr id="links">
<td><a href="https://www.facebook.com/work/legal/FB_Work_AUP/?show_chrome=false">Acceptable Use policy </a></td>
<td><a href="https://www.facebook.com/work/legal/Workplace_Standard_Terms/?show_chrome=false">Standard Terms of Service</a></td>
<td><a href="https://www.facebook.com/help/work/?ref=pf">Help</a></td>
</tr>
</table>
</div>
<div>
<span class="copyright">Facebook &#169; 2017</span>
</div>
</div>

</body>
</html>
