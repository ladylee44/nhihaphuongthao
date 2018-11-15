<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Update Members'Information</title>
 
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  </head>
 
  <body>
    <div class="container">
      <div class="row">
      	<?php
		    require_once("includes/connect.php");
 
		    if (isset($_POST["save"])) {
		    	$id_user = $_POST["id_user"];
		    	$Fullname = $_POST["Fullname"];
		    	$email = $_POST["email"];
		    	$role = $_POST["role"];
		    	$sql = "UPDATE user SET Fullname = '$Fullname', email = '$email', role = '$role'
		    			WHERE id = $id_user";
		    	mysqli_query($conn, $sql);
		    }
 
		    $id = "";
		    $Fullname = "";
		    $email = "";
		    $role = "";
		    if (isset($_GET["id"])) {
		    	
		    	$id = $_GET["id"];
		    	$sql = "SELECT * 
		    			FROM user 
		    			WHERE id = $id";
		    	$query = mysqli_query($conn, $sql);
		    	while ( $data = mysqli_fetch_array($query) ) {
		    		$Fullname = $data["Fullname"];
		    		$email = $data["email"];
		    		$role = $data["role"];
		    	}
		    }
		?>
        <h3>Update Members'Information</h3>
        <form method="POST" name="fr_update">
	        <table class="table">
	          <caption>Sneakers News' Member</caption>
	          	<input type="hidden" name="id_user" value="<?php echo $id; ?>">
	          	<tr><td>Fullname : </td><td><input type="text" name="Fullname" value="<?php echo $Fullname; ?>" /></td></tr>
	          	<tr><td>Email : </td><td><input type="text" name="email" value="<?php echo $email; ?>"/></td></tr>
	          	<tr>
	          		<td>Role : </td>
	          		<td>
	          			<select name="role">
	          				<option value="0" <?php echo ($role == 0)?"selected":""; ?>>Administrator</option>
	          				<option value="1" <?php echo ($role == 1)?"selected":""; ?>>Member</option>
	          			</select>
	          		</td>
	          	</tr>
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