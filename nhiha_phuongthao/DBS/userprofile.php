<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
</head>
<body>
 <?php  
 
 session_start();
 include("includes/connect.php"); 
  
 if(isset($_SESSION["username"]))  
 {  
  
  $username = $_SESSION["username"];
 
  $sql = "SELECT * FROM user WHERE username ='$username'";
  $profile = mysqli_query($conn, $sql);
                    
                       
                
          
  echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';
  //echo "<img src='".json_encode($photo) ."' alt='Avatar'>";
        
    foreach( $profile as $v) { 
          echo "<img src='".$v['avatar']."' alt='Avatar'> <br>";
          echo "Full name: ".$v['Fullname']."<br>";
          echo "Date of birth: ".$v['dob']."<br>";
          echo "Gender: ".$v['sex']."<br>";
          echo "Address: ".$v['address']."<br>";
          echo "Phone: ".$v['phone']."<br>";          
                             
    } 
   
  echo '<br /><br /><a href="logout.php">Logout</a>'; 
  echo '<br /><br /><a href="editprofile.php">Edit my profile</a>';
  echo '';
 }  
 else  
 {  
      header("location:login.php");  
 }  

 ?>  
</body>
</html>