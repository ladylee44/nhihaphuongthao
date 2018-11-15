<?php
// facebook home page

ob_start();
require 'database.php';
 session_start();
 

if(!isset($_SESSION['logged_in'])){
  $_SESSION['logged_in'] = 0;
}


if($_SESSION['logged_in'] == 1){
  header('location:profile.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Facebook</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="stylesheet/facebook.css" /> 
<link rel="icon" href="icon.ico">
</head>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['signin'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['signup'])) { //user registering
        
        require 'register.php';
        
    }
}
?>
<body>
<!-- Header Start -->
<div class="heading" >
<span class="heading_txt" >facebook</span>
<span class="login"  style="position: relative; left: 50px; font-weight: 800; font-size: 16px; font-family: sans-serif;">
<?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
   
       
   endif;
	
    ?>
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
<div id="middle">
<!-- Middle Left -->
<div id="middle_left">
<p class="left_txt">Facebook helps you connect and share with the people in your life.</p>
<img src="fb.png" width=" 537px" height="195px" />


</div>

<!-- Middle Right -->
<div id="middle_right">
<div class="register_heading">
<span class="create_txt">Create an account</span><br>
<span class="free_txt">It's free and always will be.</span>
</div>

<div id="signup"> 
<form action="index.php" method="post" name="form1">
<div>
<p>

<input class="name" type="text" name="fname" placeholder="First Name" required >
<input class="name" type="text" name="lname" placeholder="Surname" required>
</p></div>
<p><input class="email_pass" type="text" name="email" placeholder="Mobile Number or email address" required></p>
<p><input class="email_pass" type="password" name="password" placeholder="New Password" onmouseenter="document.getElementById('pass_info').style.display='block';" onmouseout="document.getElementById('pass_info').style.display='none'" required></p>
<p class="bd_txt">Birthday</p>
<div style="max-width: 400px; height: 31px; font-size: 11px;">

<select title="Day" name="b_day" class="birth_d" required>
<option value="">Day</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select title="Month" name="b_month" class="birth_m" required>
<option value="">Month</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="Jun">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sept</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
<select title="Year" name="b_year" class="birth_y" required>
<option value="">Year</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
</select>

<span><a rel="async" class="bd_help" style="max-width: 150px; height: 30px; font-size: 11px;" href="#">Why do i need to provide my date of birth?</a></span>
</div>
<div>
<p>
<span class="gender"><input type="radio" value="Female" name="gender" required><label>Female</label></span>
<span class="gender"><input type="radio" value="Male" name="gender" required><label>Male</label></span>
</p>
</div>

<div class="policy">By clicking Create an account, you agree to our <a href="#">Terms</a> and confirm thst you have read our <a href="#">Data Policy</a>, including
 our <a href="#">Cookie Use Policy</a>. You may recieve SMS message notifications from Facebook and can opt out at any time.
</div>
<div><button class="signup_btn" type="submit" name="signup" >Create an account</button></div>
</form>
<div class="last_txt"><a href="#">Create a Page</a> for a celebrity, brand or business.</div>

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