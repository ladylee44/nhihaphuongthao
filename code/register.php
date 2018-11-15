<?php
// Registration file where user enters his info
ob_start();
require 'database.php';
//session_start();
// Set session variables 
$_SESSION['email'] = $_POST['email'];
$_SESSION['firstname'] = $_POST['fname'];
$_SESSION['lastname'] = $_POST['lname'];
$_SESSION['b_day'] = $_POST['b_day'];
$_SESSION['b_month'] = $_POST['b_month'];
$_SESSION['b_year'] = $_POST['b_year'];
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['password'] =  $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
// Escape all $_POST variables to protect against SQL injections
$first_name = $mysqli->escape_string($_POST['fname']);
$last_name = $mysqli->escape_string($_POST['lname']);
$email = $mysqli->escape_string($_POST['email']);
// to add a hash password
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$b_day = $mysqli->escape_string($_POST['b_day']);
$b_month = $mysqli->escape_string($_POST['b_month']);
$b_year = $mysqli->escape_string($_POST['b_year']);
$gender = $mysqli->escape_string($_POST['gender']);

      
// Check if user with that email already exists
 $result = $mysqli->query("SELECT * FROM users WHERE email='$email'") ;

// User email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: index.php");
    
}
else { // Email doesn't already exist 

    
 /*   $sql = "INSERT INTO users (fname, lname, email, password, b_day, b_month, b_year, gender) 
             VALUES ('$first_name','$last_name','$email','$password', '$b_day', '$b_month', '$b_year', '$gender')";
    
    // Add user to the database
    if ( $mysqli->query($sql) ){

       
          //User has logged in
        
          $_SESSION['logged_in'] = 1 ;*/
        header('location: prof_pic.php') ;
        
    }

    

