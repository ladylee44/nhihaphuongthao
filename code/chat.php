<?php
// private chat page

ob_start();
require'database.php';
session_start();
if($_SESSION['logged_in'] != 1 ){
  header('location:index.php');
}
$name = $_SESSION['firstname'];
if($_SESSION['email'] == $_SESSION['email_user']){
    header('location:profile.php');
}

?>
<html>
<head>
<title>Chat</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="icon.ico">
<script
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="stylesheet/chat.css">
<script>

function submitChat() {
	if(form1.message.value == '') {
		alert("Enter your message!!!");
		return;
	}
        
	var msg = form1.message.value;
	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById('chats').innerHTML = xmlhttp.responseText;
		}
	}
	
	xmlhttp.open('GET','ins_msg.php?message='+msg,true);
	xmlhttp.send();
        form1.message.value = "";
}

$(document).ready(function(e){
	setInterval( function(){ $('#chats').load('fetch_msg.php'); }, 2000 );
});
</script>


</head>
<body>
<div class="chat_area">
<form method="post" name="form1">
<!--Your name:<?php  echo $_SESSION['firstname'];?><br>-->
<div class="msgbox">
<div class="msg">
<input type="text" id="message" class="message" autocomplete="off" placeholder="Type your Message..." name="message">
<a  class="send_btn" onclick="submitChat()"><i style="position:relative; top:3px;" class="fa fa-paper-plane"></i></a></div>
</div>
</form>
<p id="chats" style="height: 550px; overflow-y: scroll; overflow-x: hidden;"><i class="load fa fa-spinner fa-pulse fa-lg fa-fw"></i>
</p>
</div>
</body>
</html>