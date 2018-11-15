<?php   
 //9_logout.php  
 session_start();  
 session_destroy();  
 header("location:9_login.php");  
 ?>  