<?php
// page after user logs in
session_start();
ob_start();
// Check if user is logged in 

if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "Please login first!!!";
  header("location: index.php");    
}
if(!isset($_SESSION['image']) || empty($_SESSION['image'])){
    $_SESSION['image'] = "images/default.png";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Facebook</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="icon" href="icon.ico">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<style>
html{
   min-width: 950px;
}
body{
	padding:0;
	margin: 0;
}
.heading{
	height: 42px;
	width: 100%;
	min-width: 630px;
	background-color: #4267b2;
	font-size: 22px;
	position: fixed;
        top: 0;
}
.top_left{
	width: 60%;
    height: 100%;
    display: inline-block;
}
.heading_txt{
	color: white;
	margin-left: 7px;
	position: relative;
    top: 8px;
	
}
.search_area{
	display: inline-block;
    position: relative;
    top: 7.5px;
	background-color: white;
	border-radius: 2px;
        width: 70%;
	min-width: 10%;
}
.searchbar{
	max-height: 18px;
	background: transparent;
	border: none;
	position: relative;
        bottom: 1px;
        left: 5px;
	font-size: 15px;
        width: 90%;
        min-width: 65%;
}
.searchbar:focus{
   border: none; 
 }
ul{
  list-style-type: none;
  margin: 7px -2px;
}
li{
  font-size: 15px;
    background: white;
    border: 1px solid #ddd;
    border-top: none;
    width: 377.4px;
    height: 40px;
    z-index: unset;
    line-height: 40px;
    font-family: sans-serif;
    padding: 0px 10px;
    position: relative;
}
li:hover{
  cursor: pointer;
  background: #ddd;
}
a{
text-decoration: none;
 color: white;
}
.search_btn{
    background: transparent;
    border: none;
    position: relative;
    top: 3px;
    right: 3px;
    float: right;
    font-size: 15px;
    color: #666;
    height: 20px;
    padding: 0px 10px 0px 0px;
}
.search_btn:hover{
   background: #eeeeee;
}
.top_right{
	width: 30%;
	position: relative;
	right: 50px;
	float: right;
	display: inline-block;
	height: 100%;
	font-family: sans-serif;
	font-size: 12px;
	color: white;
	font-weight: 700;
	line-height: 20px;
}

.top_links{
    float: right;
    margin-right: 20px;
}
.links{
	margin-left: 20px;
	display: inline-block;
        
}
.user_img{
    position: relative;
    top: 7px;
    right: 10px; 
}
p{
    margin-top: 2px;
}
img{
    border-radius: 50%;
    overflow: hidden;
}
.links:hover{
	color: #dddddd;
	cursor: pointer;
}
.profile_button{
	padding: 10px 20px;
	background-color: #4267b2;
	border: 1px solid #29487d;
	color: white;
	font-weight: 600;
	font-size: 11px;
        width: 70px:
margin-left: 10px;
   cursor: pointer;
}
textarea{
    height: 120px;
    width:  300px;
    border: 1px solid grey;
   border-radius: 20px;
padding: 10px;
  font-size: 17px;
  font-family: calibri;
}
#middle{
  height: 2000px;
}
#user{
	font-family: calibri;
	font-size: 20px;
	font-weight: 700;
	color: red;
        display: inline-block;
}
</style>
</head>

<body>
<!-- Header Start -->
<div class="heading" >

<div class="top_left">
<span class="heading_txt" ><i class="fa fa-facebook-official fa-lg"></i></span>
<div class="search_area">
<form action="search.php" method="get" name="form2">
<input type="text" name="query" placeholder="Search" id="search" class="searchbar" autocomplete="off" id="search">

<button type="submit" class="search_btn" name="search" id="btn" ><i class="fa fa-search"></i></button>
</form>
</div>
<ul style="font-size: 12px;" id="list"></ul>
</div>

<div class="top_right">
<div class="top_links">
<a href="search.php?query=<?php echo $_SESSION['email'];?>" class="links"><p><span><?php echo "<img class=user_img src=".$_SESSION['image']." height=25px width=25px>";?></span><?php echo $_SESSION['firstname'];?></p></a>
<a href="my_messages.php" class="links" style="font-size: 15px;"><i class="fa fa-comment fa-lg"></i></a>
<a class="links" href="logout.php">Log Out</a>
</div>
</div>
</div>


<!-- Header End!!! -->

<!-- Middle Section Start -->
<div id="middle" style="font-family: sans-serif; font-weight: 700; font-size: 17px; padding: 5px; line-height: 50px; margin-top: 50px; color: #333; height: 1000px;">
<center style="font-variant: small-caps;">Welcome To Facebook Chat

<center>








<form name="form1">

<textarea placeholder="Type your message..." maxlength="300" name="msg"></textarea><br />
<a class="profile_button" onclick="submitChat()">Send</a>



</form><br>
<div id="chatlogs">
<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>
</div>


</center>
<!-- Middle Left -->




</div>


</div>
</div>
<script>

function submitChat() {
	if(form1.msg.value == '') {
		alert("Enter your message!!!");
		return;
	}
        
	var msg = form1.msg.value;
	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
		}
	}
	
	xmlhttp.open('GET','insert.php?msg='+msg,true);
	xmlhttp.send();
        form1.msg.value = "";
}

$(document).ready(function(e){
	$.ajaxSetup({
	//	cache: false
	});
	setInterval( function(){ $('#chatlogs').load('logs.php'); }, 2000 );

 $('#search').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"suggestion.php",  
                     method:"GET",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#list').fadeIn();  
                          $('#list').html(data);  
                     }  
                });  
           } 
           if(query == ''){
                $('#list').css('display','none');
} 
      });  
      
      
       $('#search').blur(function(){
          $(document).on('click', 'li', function(){  
           $('#search').val($(this).text());  
           $('#list').css('display','none');
            
      });
         $('#list').fadeOut(500);
});
});
</script>
</body>

</html>