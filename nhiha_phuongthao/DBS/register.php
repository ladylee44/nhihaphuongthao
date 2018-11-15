<!DOCTYPE html>  
 <html> 
  
      <head>  
           <title>Sneakers News Register</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

           <div class="container">
      <div class="jumbotron" style="background-color: #000000;color: white;margin-top: 20px">
        <span style="float: left">
          <h2 style="font-family:Stencil Std, fantasy">#SNEAKERSNEWS - IT'S NOT JUST SNEAKERS</h2>
        </span>
        <span style="float: right;margin-top: -48px;margin-right: -50px">
          <img src="images/momo2.jpg" height="42%" width="42%">
        </span>
        <br><br><br>
      </div>
      </head>  
        <?php
        include("includes/connect.php");
        
        if (isset($_POST["btn_submit"])) {
            //lấy thông tin từ các form bằng phương thức POST
            $username = $_POST["username"];
            $password = $_POST["pass"];
            $name = $_POST["name"];
            $email = $_POST["email"];

            //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
              if ($username == "" || $password == "" || $name == "" || $email == "") {
                   echo "Fill in all fields";
            }else{
                    //Kiểm tra tài khoản đã tồn tại chưa
                   $sql="SELECT * 
                         FROM  user 
                         WHERE username= '$username'";
                    $kt=mysqli_query($conn, $sql);
                    if(mysqli_num_rows($kt)  > 0){
                       echo "This account existed";
                    }else{
                      
                        $sql = "INSERT INTO user (username, password,createdate, email, fullname) 
                                VALUES ('$username','$password',now(),$email', '$name')";
                       
                        mysqli_query($conn,$sql);
                        echo "Register Succesfully";

                    }
          
             }
    }
    ?>
    <form  method="post">
        <table>
            <tr>
                <td>USERNAME </td>
                <td><input type="text" id="username" name="username" class = "form-control"></td>
            </tr>
            <tr>
                <td>PASSWORD </td>
                <td><input type="password" id="pass" name="pass" class = "form-control"></td>
            </tr>
            <tr>
                <td>FULL NAME </td>
                <td><input type="text" id="name" name="name" class = "form-control"></td>
            </tr>
            <tr>
                <td>EMAIL </td>
                <td><input type="text" id="email" name="email" class = "form-control"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Register" class = "btn btn-info"></td>
            </tr>

            <tr>
                <td><a href = "index.php">Go to homepage</a></td>
            </tr>
 
        </table>
 
    </form>
    </body>
    </html>