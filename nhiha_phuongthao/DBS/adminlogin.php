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
	          <h2 style="font-family:Stencil Std, fantasy">#SNEAKERSNEWS - IT'S NOT JUST SNEAKERS </h2>
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
		
		require_once("includes/connect.php");
		if (isset($_POST["btn_submit"])) {
			// user info
			$username = $_POST["username"];
			$password = $_POST["password"];
     
			
			$username = strip_tags($username);
			$username = addslashes($username);
			$password = strip_tags($password);
			$password = addslashes($password);
			if ($username == "" || $password =="") {
				echo "Fill in all fields";
			}else{
				$sql = "SELECT * 
						FROM admin 
						WHERE username = '$username' and password = '$password' ";
				$query = mysqli_query($conn,$sql);
				$num_rows = mysqli_num_rows($query);
				if ($num_rows==0) {
					echo "Username or Password is not correct, try again !";
				}else{
					$_SESSION['username'] = $username;
	                
	                header('Location: index.php');
				}
			}
		}
	?>
		<form method="POST" action="admin.php">
		<fieldset>
		    <legend>Login</legend>
		    	<table>
		    		<tr>
              <td><h3> <?php echo "Welcome Admin, Please login !" ?> <h3></td>
            </tr>

		    		<tr>
		    			<td>USERNAME </td>
		    			<td><input type="text" name="username" size="30" class = "form-control"></td>
		    		</tr>
		    		<tr>
		    			<td>PASSWORD</td>
		    			<td><input type="password" name="password" size="30" class = "form-control"></td>
		    		</tr>
		    		<tr>
		    			<td colspan="2" align="center"> <input name="btn_submit" type="submit" value="Login" class = "btn btn-info"></td>
		    		</tr>
            
		    	</table>
	  </fieldset>
	  </form>
	</body>
	</html>