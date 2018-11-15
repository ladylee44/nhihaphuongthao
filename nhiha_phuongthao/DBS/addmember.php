<?php
	session_start(); 
 ?>
<?php require_once("includes/connect.php");?>

<?php include ("includes/header.php"); ?>
<?php
	if (isset($_POST["btn_submit"])) {
	
		$username = $_POST["username"];
		$password = $_POST["password"];
		$name = $_POST["Fullname"];
		$email = $_POST["email"];
		$role = $_POST["role"];
		$block = 0;
		if (isset($_POST["block"])) {
			$block = $_POST["block"];
		}
 
		if ($username == "" || $password == "" || $name == "" || $email == "" || $role == "") {
			echo "All fields are required !";
		}else{
			
			$sql = "INSERT INTO user (username, password, fullname, email, role, block, createdate) 
					VALUES ('$username', '$password', '$name', '$email', '$role', '$block', now())";
		
			$result = mysqli_query($conn,$sql);
			if (!$result) {
				echo "User is already existed";
			}else{
				header('Location: member.php');
			}
			
		}
		
	}
?>
 
	<form action="addmember.php" method="post">
		<table>
			<tr>
				<td colspan="2">
					<h3>Add member</h3>
				</td>
			</tr>	
			<tr>
				<td nowrap="nowrap">Username :</td>
				<td><input type="text" name="username" id="username" value="" class = "form-control"></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Password :</td>
				<td><input type="password" name="password" id="password" value="" class = "form-control" ></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Fullname:</td>
				<td><input type="text" name="Fullname" id="Fullname" value="" class = "form-control"></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Email :</td>
				<td><input type="text" id="email" name="email" value="" class = "form-control"></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Role:</td>
				<td>
					<select id="role" name="role">
						<option value="1">Member</option>
						<option value="0">Admin</option>
						
					</select>
				</td>
			</tr>
			<tr>
				<td nowrap="nowrap">Block:</td>
				<td><input type="checkbox" id="block" name="block" value="1" ></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Add"></td>
			</tr>
 
		</table>
		
	</form>
<?php include "includes/footer.php" ?>