<?php
// select the database

 $host = "Your Host name";
 $user = "Your Username";
 $pass = "Your Passsword";
 $db = "Your Database name";
 // Database connection
 $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>