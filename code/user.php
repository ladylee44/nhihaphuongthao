<?php  
// users profile page

 ob_start();
 require'database.php';
  session_start();
if($_SESSION['logged_in'] != 1){
  header('location:index.php');
}

  $name = $_SESSION['name_user'];
  $email = $_SESSION['email_user'];
  $birth = $_SESSION['dob_user'];
  $gender = $_SESSION['gender_user'];
 if(!isset($_SESSION['image_user'])|| empty($_SESSION['image_user'])){
     $_SESSION['image_user'] = "images/default.png";
 }
 if(isset($_POST['change_pic'])){
$email = $_SESSION['email'];
$image_path = 'images/'.$_FILES['image']['name'];
$image = str_replace(" ","+",$image_path);

if (preg_match("!image!",$_FILES['image']['type'])) {
			   
			   if (copy($_FILES['image']['tmp_name'], $image)){
				   
   $sql = "UPDATE users SET image='$image' WHERE email='$email'";
				   
				    if ($mysqli->query($sql) === true){
                                      $_SESSION['image'] = $image;
                                      $_SESSION['image_user'] = $image;
                               
					} else {
						  echo 'An error occurred. Please try again later';
					}
             } else {
	                    echo 'File upload failed!';
             }
      } else {
	          echo 'Please only upload GIF, JPG or PNG images!';
      }
     
 } elseif(isset($_POST['change_cover'])){
     $email = $_SESSION['email'];
$cover_path = 'cover/'.$_FILES['cover']['name'];
$cover = str_replace(" ","+",$cover_path);
if (preg_match("!image!",$_FILES['cover']['type'])) {
			   
			   if (copy($_FILES['cover']['tmp_name'], $cover)){
				   
   $sql = "UPDATE users SET cover='$cover' WHERE email='$email'";
				   
				    if ($mysqli->query($sql) === true){
                                      $_SESSION['cover'] = $cover;
                                      $_SESSION['cover_user'] = $cover;
  
					} else {
						  echo 'An error occurred. Please try again later';
					}
             } else {
	                    echo 'File upload failed!';
             }
      } else {
	          echo 'Please only upload GIF, JPG or PNG images!';
      }
 }
?>
<html>
<head><title>User</title>
<link type="text/css" rel="stylesheet" href="stylesheet/user.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous">
</script>
<link rel="icon" href="icon.ico">
<style>
.change_pic{
position: fixed;
width: 80%;
height: 80%;
background: #eeeeee;
z-index: 1;
margin: 30px 70px;
padding: 30px;
display: none;
transition: display 3s;
-webkit-transition: display 3s;
}
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
.submit_btn{
    margin: 20px 0px;
    height: 40px;
    width: 100px;
    border: none;
    background: #4267b2;
    color: #dddddd;
    font-size: 18px;
    font-weight: 600;
}
.image{
    border: 3px solid #121212;
    display: inline-block;
    margin: 0px 10px;
    margin-top: 50px;
}
.name{
    cursor: pointer;
}
.name_text{
    display: inline-block;
    vertical-align: top;
    position: relative;
    top: 120px;
}
</style>
</head>
<body>
    <?php
    if($_SESSION['email'] == $_SESSION['email_user']){
    ?>
    <div id="box" class="change_pic animate">
        <span style="float: right; cursor: pointer;" onclick="document.getElementById('box').style.display='none';" align="right">&#10006;</span>
    <div class="dp" style="width: 40%; display: inline-block;">
    <p class="heading_1" >Change Your Profile Picture</p>
    <form enctype="multipart/form-data" method="post">
        <label class="change_pic_button" for="button_dp"><img id="dp" src="picture.PNG" width="100%" height="300px"></label><input style="display: ;" accept="image/*" type="file" id="button_dp" name="image">
       <center> <input type="submit" class="submit_btn" value="Save" name="change_pic" ></center>
    </form>
    </div>
    <div class="cp" style="float: right; width: 40%; display: inline-block;">
    <p class="heading_2" >Change Your Cover Photo</p>
    <form enctype="multipart/form-data" method="post">
        <label class="change_pic_button" for="button_cp"><img id="dp" src="picture.PNG" width="100%" height="300px"></label><input type="file" accept="image/*" style="display: ;" id="button_cp" name="cover">
        <center><input type="submit" class="submit_btn" value="Save" name="change_cover"></center>
    </form>
    </div>
</div>
<?php
    }
?>
<div class="all">
<div class="name_section" style="background-image: url(<?php echo $_SESSION['cover_user'];?>);" ><cener><p class="name" onclick="document.getElementById('box').style.display='block';"><?php echo "<img src=".$_SESSION['image_user']." class=image height=150px width=150px >"?><span class="name_text"><?php echo $name?></span></p></cener>
</div>
<div>
<span id="tab1" class="tab" style="background: #cccccc;">About</span>
<span id="tab2" class="tab">Chat</span>
</div>

<div class="middle_section" >

<div id="about" class="middle" style="display:block;">

<p><span class="user_data">Email</span>:<?php echo $email;  ?></p>
<p><span class="user_data">Birthday</span>:<?php echo $birth;?></p>
<p><span class="user_data">Gender</span>:<?php echo $gender; ?></p>

</div>
<div id="chat" class="middle" style="display: none;">
<center>
<a class="chat_btn" href="chat.php"> Start Chat </a>

</center>
</div>

</div>

</div>
<script>
$(document).ready(function(){
	$('#tab1').click(function(){
		$('#about').css('display','block');
		$(this).css('background',' #cccccc');
		$('#chat').css('display','none');
		$('#tab2').css('background','#f2f2f2');
	});
	$('#tab2').click(function(){
		$('#chat').css('display','block');
		$(this).css('background','#cccccc');
		$('#about').css('display','none');
		$('#tab1').css('background','#f2f2f2');
	});
});
</script>
</body>
</html>