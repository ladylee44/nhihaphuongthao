  <!DOCTYPE html>
 <html>
 <head>
 	<title>Photo Album</title>
 	<style type="text/css">
 		table, th, td {
		    border: 1px solid black;
		    border-collapse: collapse;
		}
 	</style>
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
 	
 	$photoAlbum = $conn->prepare("SELECT * FROM photo WHERE username =:username ");
 	$photoAlbum->execute(array(  
                      'username'     =>     $_SESSION["username"],  
                       
                 )  
            );  
	//echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';
	//echo "<img src='".json_encode($photo)	."' alt='Avatar'>";
	 echo "<table>
		<tr>
		    <th>".$_SESSION["username"]."</th>		    
		</tr>";     
    foreach( $photoAlbum as $v) { 

    	echo "<tr><th><img src='".$v['PhotoURL']."' alt='photoAlbum'> </th></tr>";
                             
    } 
    echo ' </table>
	</div>';
	echo '<br /><br /><a href="9_logout.php">Logout</a>'; 
	
 }  
 else  
 {  
      header("location:9_login.php");  
 }  

 ?> 
  
 </body>
 </html>
 