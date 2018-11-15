<?php
// to bring chats from database to private chat

session_start();
require'database.php';
$email1 = $_SESSION['email'];
$email2 = $_SESSION['email_user'];
$emails = $email1.$email2;
$emails2 = $email2.$email1; 


$result1 = mysqli_query($mysqli,"select * from chats where emails='$emails' or emails='$emails2' ORDER BY id DESC ");

while($extract = mysqli_fetch_assoc($result1)) {
  if($extract['name'] == $_SESSION['firstname']){
	echo "<span id=user1 >" . $extract['name'] . "</span> <br><p class=msg1>" . $extract['message'] . "</p>";
} else {
  echo "<span id=user2>" . $extract['name'] . "</span><br> <p class=msg2>" . $extract['message'] . "</p>";
}
}
?>