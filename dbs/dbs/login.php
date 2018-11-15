	<!DOCTYPE html>  
	 <html> 
	  
	      <head>  
	           <title>Sneakers News Login</title>  
	           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
	           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

	           <div class="container">
	      	<div class="jumbotron" style="background-color: #000000;color: white;margin-top: 20px">
	        <span style="float: left">
	          <h2 style="font-family:Stencil Std, fantasy">WELCOME TO THE SHOES' WORLD </h2>
	        </span>
	        <span style="float: right;margin-top: -48px;margin-right: -50px">
	          <img src="images/momo2.jpg" height="42%" width="42%">
	        </span>
	        <br><br><br>
	      </div>
	      </head>  
	<?php
	session_start();
	?>
	<body>
	<?php
		//Gọi file connect.php 
		require_once("includes/connect.php");
		// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
		if (isset($_POST["btn_submit"])) {
			// lấy thông tin người dùng
			$username = $_POST["username"];
			$password = $_POST["password"];
			//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
			//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
			$username = strip_tags($username);
			$username = addslashes($username);
			$password = strip_tags($password);
			$password = addslashes($password);
			if ($username == "" || $password =="") {
				echo "Fill in all fields";
			}else{
				$sql = "SELECT * from user where username = '$username' and password = '$password' ";
				$query = mysqli_query($conn,$sql);
				$num_rows = mysqli_num_rows($query);
				if ($num_rows==0) {
					echo "Username or Password is not correct, try again !";
				}else{
					//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
					$_SESSION['username'] = $username;
	                // Thực thi hành động sau khi lưu thông tin vào session
	                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
	                header('Location: index.php');
				}
			}
		}
	?>
		<form method="POST" action="login.php">
		<fieldset>
		    <legend>Login</legend>
		    	<table>
		    		<tr>
		    			<td>USERNAME </td>
		    			<td><input type="text" name="username" size="30"></td>
		    		</tr>
		    		<tr>
		    			<td>PASSWORD</td>
		    			<td><input type="password" name="password" size="30"></td>
		    		</tr>
		    		<tr>
		    			<td colspan="2" align="center"> <input name="btn_submit" type="submit" value="Login"></td>
		    		</tr>
		    		<p class = "forgot"> <a href="register.php">Not a member yet ?</a></p>
		    	</table>
	  </fieldset>
	  </form>
	</body>
	</html>