<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
 <?php  
 //login_success.php  
 /*
 Trang profile của người dùng, trong trang đó có hiển thị thông tin về Profile của người đã đăng nhập, phía dưới có đặt link tới album ảnh của người dùng
  Giao diện album ảnh của người dùng hiển thị ra ảnh theo album, trong đó bố trí như sau:
  Mỗi album nằm trong 1 bảng có border bao quanh, có tên album ở trên box đó
  Album tiếp theo sẽ nằm ngay phía dưới của album trên
 */
 session_start();
 include("9_connect.php"); 
  
 if(isset($_SESSION["username"]))  
 {  
 	
 	$photo = $conn->prepare("SELECT * FROM userprofile WHERE username =:username ");
 	$photo->execute(array(  
                      'username'     =>     $_SESSION["username"],  
                       
                 )  
            );  
	echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';
	//echo "<img src='".json_encode($photo)	."' alt='Avatar'>";
	      
    foreach( $photo as $v) { 
          echo "<img src='".$v['Avatar']."' alt='Avatar'> <br>";
          echo "Full name: ".$v['Fullname']."<br>";
          echo "Date of birth: ".$v['DoB']."<br>";
          echo "Gender: ".$v['Gender']."<br>";
          echo "Address: ".$v['Address']."<br>";
          echo "Phone: ".$v['Phone']."<br>";          
                             
    } 
    echo "<a href='9_photoAlbum.php'>Album</a>";
	echo '<br /><br /><a href="9_logout.php">Logout</a>'; 
	echo '';
 }  
 else  
 {  
      header("location:9_login.php");  
 }  

 ?>  
</body>
</html>