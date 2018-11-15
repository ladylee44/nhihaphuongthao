<?php
// to send mail to email after the user submitted info on forget.php

ob_start();
require'database.php';

	$email = $_POST['email'];
	$_SESSION['email'] = $email;
	$code = random_int(100000,999999);
	$_SESSION['code'] = $code;
	$query = "select * from users where email='$email'";
	$result = $mysqli->query($query);
	$row = mysqli_num_rows($result);
	if(mysqli_num_rows($result) == 0){
		
		$_SESSION['message2'] = "User does not exist!!!";
	} else {
		$user = $result->fetch_assoc();
		
		// $email = $row['email'];
		$hash = $user['hash'];
		
		$to = $email;
		$subject = "Account Recovery (Facobook.com)";
		$message = 'This is your verification code'.'<br>'.$code;
		mail($to,$subject,$message);
		$_SESSION['message2'] = "An email has been sent to '$email'.<br> Check out your inbox.";
                
		header('location:verify.php');
	}

?>