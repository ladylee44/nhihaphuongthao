<?php 
// to logout the user 
  
session_start();
 
      $_SESSION['logged_in'] = 0 ;
    session_unset();
 
       header('location: index.php');
  
    
   
?>