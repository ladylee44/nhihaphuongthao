<?php
// searchbar on the profile page

require'database.php';
session_start();
$search = $_GET['query'];
$query = "select * from users where email='$search'";
$result = $mysqli->query($query);
if($result->num_rows == 0){
  echo "no result";
} else {
   $user = mysqli_fetch_assoc($result);
  $_SESSION['name_user'] = $user['fname']." ".$user['lname'];
  $_SESSION['email_user'] = $user['email'];
  $_SESSION['dob_user'] = $user['b_day']." ".$user['b_month'].",".$user['b_year'];
  $_SESSION['gender_user'] = $user['gender'];
  $_SESSION['image_user'] = $user['image'];
  $_SESSION['cover_user'] = $user['cover'];
  header('location:user.php');
}
?>