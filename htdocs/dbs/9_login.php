<?php  
 session_start();
 include("9_connect.php");    
  if(isset($_POST["login"]))  
  {  
       if(empty($_POST["username"]) || empty($_POST["password"]))  
       {  
            $message = '<label>All fields are required</label>';  
       }  
       else  
       {  
            $query = "SELECT * FROM user WHERE username = :username AND password = :password";  
            $statement = $conn->prepare($query);  
            $statement->execute(  
                 array(  
                      'username'     =>     $_POST["username"],  
                      'password'     =>     $_POST["password"]  
                 )  
            );  
            $count = $statement->rowCount();  
            if($count > 0)  
            {  
                 $_SESSION["username"] = $_POST["username"];  
                 header("location:9_profile.php");  
            }  
            else  
            {  
                 $message = '<label>Wrong Username or Password!!!</label>';  
            }  
       }  
  }  
  
 ?>  
 <!DOCTYPE html>  
 <html> 
  <!--
  Tạo CSDL
  Tạo giao diện Login
  Khi người dùng bấm nút “Đăng nhập” thì kiểm tra xem trong CSDL có tồn tại người này không
  Nếu thông tin đăng nhập là không chính xác thì chuyển về trang login  và hiện ra thông báo về việc nhập sai (dùng font chữ màu đỏ và hiển thị ngay trên phần đăng nhập)
  Nếu thông tin đăng nhập là chính xác thì chuyển tới trang profile của người dùng, trong trang đó có hiển thị thông tin về Profile của người đã đăng nhập, phía dưới có đặt link tới album ảnh của người dùng
  Giao diện album ảnh của người dùng hiển thị ra ảnh theo album, trong đó bố trí như sau:
  Mỗi album nằm trong 1 bảng có border bao quanh, có tên album ở trên box đó
  Album tiếp theo sẽ nằm ngay phía dưới của album trên

  -->
      <head>  
           <title>PHP Login Form using PDO</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
                <h3 align="">PHP Login From using PDO</h3><br />  
                <form method="post">  
                     <label>Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" class="btn btn-info" value="Login" />  
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  