<?php
// file which sends secret message

require'database.php';
session_start();
$email_sender = $_SESSION['email'];
$email_receiver = $_GET['email'];
$message = $_GET['message'];


if($email_sender == $email_receiver){
    echo "<span class=message>You cannot send message to yourself</span>";
} else{
    $query = "INSERT INTO `secret`(`sender`, `receiver`, `message`) VALUES ('$email_sender','$email_receiver','$message')";
    $result = $mysqli->query($query);

if($result){
    echo "<span class=message>Message has been sent</span>";
} else {
    echo "<span class=message>Message could not be sent</span>";
}
}
?>