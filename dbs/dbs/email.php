<html>
<form action "" method = "POST">
	Name: <br> <input type = "text" name = "name"><br>
	Request: <textarea name=" = "request"></textarea><p>
	<input type="submit" name = "submit" value = "send" >
</form>
</html>

<?php

$name = $_POST['name'];
$request = $_POST['request'];
$to = "";
$subject= "Tutorial Request";
$body = "This is auto mess. Please don't reply to this email. \n\n $request";
 
 mail($to, $subject, $body);

 echo "Message Sent! <a href = 'email.html'> Click here </a> to sent another mess";
?>
