<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Update Profile</title>
 
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  </head>
 
  <body>
    <div class="container">
      <div class="row">
      	<?php
		    require_once("includes/connect.php");
 			$id = "";
		    $Fullname = "";
		    $email = "";
		    $avatar = "";
		    $address = "";
		    $sex = "";
		    $phone = "";

		    if (isset($_POST["save"])) {
		    	$id_user = $_POST["id_user"];
		    	$Fullname = $_POST["Fullname"];
		    	$email = $_POST["email"];
		    	$avatar = $_POST["avatar"];
		    	$address = $_POST['address'];
		    	$sex = $_POST["sex"];
		    	$phone = $_POST[""];
		    	$sql = "UPDATE user 
		    			SET Fullname = '$Fullname', email = '$email', avatar = '$avatar',
		    				$address = '$address', sex = '$sex', phone = '$phone'
		    			WHERE id = $id_user";
		    	mysqli_query($conn, $sql);
		    }
 
		    
		    if (isset($_GET["id"])) {
		    	
		    	$id = $_GET["id"];
		    	$sql = "SELECT * 
		    			FROM user 
		    			WHERE id = $id";
		    	$query = mysqli_query($conn, $sql);
		    	while ( $data = mysqli_fetch_array($query) ) {
		    		$Fullname = $data["Fullname"];
		    		$email = $data["email"];
		    		$avatar = $data["avatar"];
		    		$address = $data["address"];
		    		$phone = $data["phone"];
		    		$sex = $data["sex"];
		    	}
		    }
		?>
        <h3>Update Members's Information</h3>
        <form method="POST" name="fr_update">
	        <table class="table">
	          <caption>Sneakers News' Member</caption>
	          	<input type="hidden" name="id_user" value="<?php echo $id; ?>">
	          	<tr><td>Fullname : </td><td><input type="text" name="Fullname" value="<?php echo $Fullname; ?>" /></td></tr>
	          	<tr><td>Email : </td><td><input type="text" name="email" value="<?php echo $email; ?>"/></td></tr>
	          	<tr><td>Address : </td><td><input type="text" name="address" value="<?php echo $address; ?>"/></td></tr>
	          	<tr><td>Phone Number : </td><td><input type="text" name="email" value="<?php echo $phone; ?>"/></td></tr>
	          	<tr><td>Sex : </td><td><input type="radio" name="gender" value="<?php echo ($sex == male)?"selected":""; ?>"> Male<br>
  									   <input type="radio" name="gender" value="<?php echo ($sex == female)?"selected":""; ?>"> Female<br>
  									   <input type="radio" name="gender" value="other"> Other<br><br>
	          	<tr><td>Avatar : </td><td><input type="file" name="Avatar" <?php echo $avatar; ?> /></td></tr>

	          	
	          	<tr><td colspan="2"><input type="submit" name="save" value="Save"></td></tr>
	        </table>
        </form>
      </div>
 
    </div><!-- /.container -->
 
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  
 
</body></html>