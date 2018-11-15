<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
</head>
<body>
     <?php 
        include ("header.php") ;
 
         
         include("connect.php"); 
  
         if(isset($_SESSION["username"])) {  
 	
 	          $photo = $conn->prepare("SELECT * FROM userprofile 
                                       INNER JOIN user
                                       ON userprofile.userid=user.userid
                                       WHERE user.username = '".$_SESSION["username"]."' ");
 	          $photo->execute();  
	          echo '<h3>Chào mừng thiên thần '.$_SESSION["username"].'</h3>';
	
             foreach( $photo as $value) { 
                echo "<img src='"."anh/".$value['Avatar']."' alt='Avatar' width=350 />"."<br>";
                echo "Tên đầy đủ: ".$value['name']."<br>";
                echo "Ngày tháng năm sinh: ".$value['DoB']."<br>";
                echo "Giới tính: ".$value['gender']."<br>";
                echo "Nghề nghiệp: ".$value['job']."<br>";
                echo "Địa chỉ: ".$value['address']."<br>";
                echo "Số điện thoại: ".$value['phone']."<br>";          
                             
            } 
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<a href=post.php>Đăng bài</a><br>";
        echo "<a href='editProfile.php'>Chỉnh sửa</a>"."<br>";
        echo '<a href="homepage.php">Trang chủ</a>'."<br>";
	    echo '<a href="logoutdbs.php">Đăng xuất</a>'."<br>"; 
        
	    echo '';
            }else{  
        header("location:logindbs.php");  
        } 
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";


        include("footer.php"); 

     ?>  


</body>
</html>