<?php
/* User login file, checks if user exists and password is correct */
ob_start();
require 'database.php';
session_start();

// all session variables
/*$_SESSION['email'] = $_POST['email'];

// Taking values from input fields
$first_name = $mysqli->escape_string($_POST['fname']);
$last_name = $mysqli->escape_string($_POST['lname']);*/
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(($_POST['password']));
/*$b_day = $mysqli->escape_string($_POST['b_day']);
$b_month = $mysqli->escape_string($_POST['b_month']);
$b_year = $mysqli->escape_string($_POST['b_year']);
$gender = $mysqli->escape_string($_POST['gender']);*/

// Query in SQL
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: index.php");
}
else { // User exists
    $user = $result->fetch_assoc();

       if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['firstname'] = $user['fname'];
        $_SESSION['lastname'] = $user['lname'];
        $_SESSION['b_day'] = $user['b_day'];
        $_SESSION['b_month'] = $user['b_month'];
        $_SESSION['b_year'] = $user['b_year'];
        $_SESSION['gender'] = $user['gender'] ;
        $_SESSION['image'] = $user['image'];
        $_SESSION['cover'] = $user['cover'];
        
         // To login the user
        $_SESSION['logged_in'] = 1;

       header("location: profile.php");
      }
      else {
          $_SESSION['message'] = "You have entered wrong password";
          header("location: index.php");
      }
}