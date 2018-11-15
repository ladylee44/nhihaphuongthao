<?php
// insert messages to private chat table 

session_start();
$name = $_SESSION['firstname'];
$message = $_REQUEST['message'];

$email1 = $_SESSION['email'];
$email2 = $_SESSION['email_user'];

$emails = $email1.$email2;
$emails2 = $email2.$email1;

require'database.php';
if($email1 != $email2){
$query2 = "INSERT INTO `chats`(`name`,`emails`,`message`) VALUES ('$name','$emails','$message')";
$result2 = $mysqli->query($query2);
}

$query1 = "SELECT * FROM `chats` ORDER BY `id` DESC";
$result1 = $mysqli->query($query1);

$extract = mysqli_fetch_assoc($result1);
  if($extract['name'] == $_SESSION['firstname']){
	echo "<span id=user1 >" . $extract['name'] . "</span> <br><p class=msg1>" . $extract['message'] . "</p>";
}

?>