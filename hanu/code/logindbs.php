<?php  
 session_start();
 include("connect.php");    
  if(isset($_POST["login"]))  
  {  
       if(empty($_POST["username"]) || empty($_POST["password"]))  
       {  
            $message = '<label>Xin vui lòng điền đầy đủ thông tin</label>';  
       }  
       else  
       {  
            $query = "SELECT * FROM user WHERE username = '".$_POST["username"]."' AND password = '".$_POST["password"]."' ";  
            $statement = $conn->prepare($query);  
            $statement->execute();  
            $count = $statement->rowCount();  
            foreach ($statement as $k) {
            if($k['ban']==1){
               echo "Xin lỗi tài khoản của bạn bị khóa"."<br>";
               echo "Xin vui lòng đăng nhập lại sau"."<br>";
               echo "<a href=homepage.php>Quay lại trang chủ</a>";
            }else{
              
            if($count > 0)  
            {  
                 $_SESSION["username"] = $_POST["username"];  
                 header("location:homepage.php");  
            }  
            else  
            {  
                 $message = '<label>Rất tiếc, bạn nhập sai mật khẩu hoặc tên đăng nhập!!!</label>';  
            }
            } 
       }  
  } 
  } 
  
 ?>  
 <!DOCTYPE html>  
 <html> 
 <head>
  <meta charset="utf8">
 </head>
 
    
      <body LEFTMARGIN=30 TOPMARGIN=0 RIGHTMARGIN=30 BOTTOMMARGIN=0 BGCOLOR="AliceBlue"> 
           
                <?php  
                if(isset($message))  
                {  
                     echo $message;  
                }  
                ?>  
                
                <form method="post">  
                     <table align="center" >
                     <tr>
                        <td colspan="2"><h3 align="center">Welcome you to Dispatch Of HANU</h3></td>
                    </tr>

                     <tr>
                            <td><label><b>Tên người dùng<b></label></td>
                            <td><input type="text" name="username" /></td>
                     </tr> 
                     
                     <tr> 
                            <td><label><b>Mật khẩu</b></label></td>
                            <td><input type="password" name="password"  /></td> 
                     </tr>
                     
                     <tr>

                            <td colspan ="2"><input type="submit" name="login" value="Đăng nhập" /></td>
                     </tr> 
                     
                     <tr>
                            <td colspan ="2"><label><i>Nếu chưa có tài khoản, hãy đăng kí</i></label> </td>
                     </tr>
                     
                     <tr>
                            <td><a href="signup.php">Đăng kí</a></td>
                     </tr>
                     <tr>
                      <td><a href="homepage.php">Quay về trang chủ</a></td>
                     </tr>
                   </table>


                </form>  
             
      </body>  
 </html>  